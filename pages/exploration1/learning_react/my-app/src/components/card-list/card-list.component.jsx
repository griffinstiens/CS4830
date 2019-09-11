import React from 'react';
import { Card } from '../card/card.component.jsx';
import './card-list.styles.css';

export const CardList = (props) => {
  return (
    <div className='card-list'>
    {props.people.map(people => (
      <Card key={people.id} people={people}/>
    ))}
    </div>
  )
}
