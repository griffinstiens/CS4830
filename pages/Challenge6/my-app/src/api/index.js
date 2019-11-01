const express = require('express');
const MongoClient = require('mongodb').MongoClient;


let url = 'mongodb://localhost:27017/brickset';

MongoClient.connect(url, function(err, db) {
    console.log("Connection successful!");

    let cursor = db.collection('sets').find();

    cursor.each(function(err, doc) {
        console.log(doc);
    })

    db.close();
});

