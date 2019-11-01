const express = require('express');
const MongoClient = require('mongodb');


let url = 'mongodb://localhost:27017/brickset';

MongoClient.connect(url, function(err, db) {
    console.log("Connection successful!");

    const connection = database.db('brickset');
    connection.collection('sets').find();

   

    db.close();
});

