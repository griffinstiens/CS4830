import React, {Component} from 'react';
import { Search } from './components/search/search.component.jsx';
import { CardList } from './components/card-list/card-list.component.jsx';
import './App.css';

class App extends Component {

  constructor() {
    super();

    this.state = {
      people: [],
      searchField: ''
    }



  } //End constructor

  //this is a life-cycle method
  componentDidMount() {
    fetch('http://jsonplaceholder.typicode.com/users')
    .then(response => response.json()) //taking response and converting to JSON so JavaScript can read it
    .then(users => this.setState({ people: users })) //take users we got back and set our custom array to it
  }

  //using synthetic event 'e'
  handleChange = (e) => {
    this.setState({searchField: e.target.value})
  }


  render() {
    const { people, searchField } = this.state;
    const filteredPeople = people.filter(people =>
      people.name.toLowerCase().includes(searchField.toLowerCase())
    )
    return (
        <div className="App">
          <h1>User Search</h1>
          <Search
          placeholder='recipes'
          handleChange={ this.handleChange }
          />

          <CardList people={filteredPeople}>

          </CardList>
        </div>
    )
  }


} //End class App
export default App;
