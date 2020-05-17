import React from 'react';
import ReactDOM from 'react-dom';
import store from '../../store'
import { Provider } from 'react-redux'
import Checkout from './Checkout';


function CartIndex() {
    return (
        <Provider store={store}>
            <Checkout/>
        </Provider>
    );
}

export default CartIndex;

if (document.getElementById('checkout-blade')) {
    ReactDOM.render(<CartIndex />, document.getElementById('checkout-blade'));
}
