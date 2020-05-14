import React from 'react';
import ReactDOM from 'react-dom';
import store from '../../store'
import { Provider } from 'react-redux'
import CartCount from './CartCount';


function CartCountIndex() {
    return (
        <Provider store={store}>
            <CartCount/>
        </Provider>
    );
}

export default CartCountIndex;

if (document.getElementById('cartCount')) {
    ReactDOM.render(<CartCountIndex />, document.getElementById('cartCount'));
}
