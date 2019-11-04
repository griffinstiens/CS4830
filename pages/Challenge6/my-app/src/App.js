import React from 'react';
import './App.css';
import PostData from './items.json';

class App extends React.Component {
  constructor() {
    super();

    this.state = {
      stacks: []
    }
  }


  render() {
    return (
      <div>
        {PostData.map((postDetail, index) => {
          return <h3>{postDetail.title}</h3>
        })}
      </div>
    )
  }
}

export default App;
