import React from 'react';
import ReactDOM from 'react-dom';
import store from '../store'
import { Provider } from 'react-redux'


function Example() {
    return (
        <Provider store={store}>
            {localStorage.getItem("myData")}
        </Provider>
    );
}

export default Example;

if (document.getElementById('cartCount')) {
    ReactDOM.render(<Example />, document.getElementById('cartCount'));
}
