import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import store from '../../store'
import { Provider } from 'react-redux'
import ProductDetails from './ProductDetails';


export default class ProductDetailsIndex extends Component {
    constructor(props){
        super();
    }
    render() {
        return (
            <Provider store={store}>
                <ProductDetails {...this.props}/>
            </Provider>
        )
    }
}

if (document.getElementById('product-details')) {
    // find element by id
    const element = document.getElementById('product-details')
      
    // create new props object with element's data-attributes
    // result: {tsId: "1241"}
    const props = Object.assign({}, element.dataset)

    ReactDOM.render(<ProductDetailsIndex {...props}/>, document.getElementById('product-details'));
}
