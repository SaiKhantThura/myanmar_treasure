import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import ClearNow from './ClearNow'
import store from '../../store'
import { Provider } from 'react-redux'
export default class ClearIndex extends Component {
    constructor(props){
        super();
    }
    
    render() {
        return (
        <Provider store={store}>
            <ClearNow {...this.props}/>
        </Provider>
        )
    }
}

if (document.getElementById('needToClear')) {
    // find element by id
    const element = document.getElementById('needToClear')
      
    // create new props object with element's data-attributes
    // result: {tsId: "1241"}
    const props = Object.assign({}, element.dataset)

    ReactDOM.render(<ClearIndex {...props}/>, document.getElementById('needToClear'));
}
