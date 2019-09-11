import React from 'react';
import './card.styles.css';

export const Card = (props) => (
  <div className="card-container">
    <img alt="person" src={`https://robohash.org/${props.people.id}?set=set2&size=180x180`} />
    <h2> {props.people.name} </h2>
    <p> {props.people.email} </p>
  </div>
)
