const express = require('express');
const mongo = require('mongodb').MongoClient;


let url = 'mongodb://localhost:27017/brickset';

MongoClient.connect(url, function(err, db) {
    console.log("Connection successful!");

    db.close();
});

