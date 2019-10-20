const express = require('express');
const app = express();
var bodyParser = require('body-parser');
var cors = require('cors');
const knex = require('knex');
const bcrypt = require('bcryptjs');
const pg = require('pg');

const SERVER_PORT = 5000;

const db = knex ({
    client: 'pg',
    connection: {
        host: 'localhost',
        user: 'postgres',
        password: '',
        database: 'facerec'
    }
});

app.use(cors());
app.use(bodyParser.json());
app.get('/', (req, res) => res.send('Hello World!'));

app.post('/signup', (req, res) => {
    const { email, name, password } = req.body;
    const salt = bcrypt.genSaltSync(10);
    const hash = bcrypt.hashSync(password, salt);

    db.transaction(trx => {
        trx.insert({
            hash: hash,
            email: email
        })
        .into('login')
        .returning('email')
        .then(loginEmail => {
            return trx('users')
            .returning('*')
            .insert({
                email: loginEmail[0],
                name: name,
                joined: new Date()
            }).then(user => {
            res.json(user[0]);
            })
        })
        .then(trx.commit)
        .catch(trx.rollback)
    })
        .catch(err => res.status(400).json('unable to sign up'))
});

app.post('/signin', (req, res, bcrypt) => {

    db.select('email', 'hash').from('login')
    .where('email', '=', req.body.email)
    .then(data => {
        return db.select('*').from('users').where('email', '=', req.body.email)
            .then(user => {
                res.json(user[0]);
                console.log(user[0]);
            })
            .catch(err => res.status(400).json('Unable to get user'))
    });

//     const { email, password } = req.body;
//   db.select('email', 'hash').from('login')
//   .where('email', '=', email)
//   .then(data => {
//       const isValid = data[0].compareSync(password, data[0].hash);
//       if (isValid) {
//           return db.select('*').from('users').where('email', '=', email)
//           .then(user => {
//             res.json(user[0]);
//             console.log(user[0]);
//           })
//           .catch(err => res.status(400).json('Unable to get user'))
//       } else {
//         res.status(400).json('Wrong credentials');
//       }
//   })
//   .catch(err => res.status(400).json('Wrong credentials!'));
});

app.put('/image', (req, res) => {
  const { id } = req.body;
  db('users').where('id', '=', id)
    .increment('entries', 1)
    .returning('entries')
    .then(entries => {
        res.json(entries[0]);
    })
    .catch(err => res.status(400).json('Unable to get entries'));
});

app.get('api/profile/:id', (req, res) => {
  
    const { id } = req.params;
    db.select('*').from('users').where({
        id: id
    }).then(user => {
        if (user.length) {
            res.json(user[0]);
        } else {
            res.status(400).json('Error getting user');
        }
        
    })
    .catch(err => res.status(400).json('User not found'));
  
});

app.listen(SERVER_PORT, () => console.log('Example app listening on port: ', SERVER_PORT));
