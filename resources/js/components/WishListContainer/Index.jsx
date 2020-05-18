import React from 'react';
import ReactDOM from 'react-dom';
import store from '../../store'
import { Provider } from 'react-redux'
import WishListContainer from './WishListContainer';


function WishListIndex() {
    return (
        <Provider store={store}>
            <WishListContainer/>
        </Provider>
    );
}

export default WishListIndex;

if (document.getElementById('react-wishlist')) {
    ReactDOM.render(<WishListIndex />, document.getElementById('react-wishlist'));
}
