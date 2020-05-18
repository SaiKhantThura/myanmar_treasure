import React from 'react';
import ReactDOM from 'react-dom';
import store from '../../store'
import { Provider } from 'react-redux'
import WishlistCount from './WishlistCount';


function WishlistCountIndex() {
    return (
        <Provider store={store}>
            <WishlistCount/>
        </Provider>
    );
}

export default WishlistCountIndex;

if (document.getElementById('wishlistCount')) {
    ReactDOM.render(<WishlistCountIndex />, document.getElementById('wishlistCount'));
}
