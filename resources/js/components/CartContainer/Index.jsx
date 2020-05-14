import React from 'react';
import ReactDOM from 'react-dom';
import store from '../../store'
import { Provider } from 'react-redux'
import CartContainer from './CartContainer';


function CartIndex() {
    return (
        <Provider store={store}>
            <CartContainer/>
        </Provider>
    );
}

export default CartIndex;

if (document.getElementById('react-cart')) {
    ReactDOM.render(<CartIndex />, document.getElementById('react-cart'));
}
