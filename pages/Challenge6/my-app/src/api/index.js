const express = require('express');
const MongoClient = require('mongodb').MongoClient;


let url = 'mongodb://localhost:27017/brickset';

MongoClient.connect(url, (err, brickset) => {

    if (err) return console.log(err)
    console.log("Connection successful!");

    db = brickset.db('brickset');

    let cursor = db.collection('sets').find();

    db.close();
});

