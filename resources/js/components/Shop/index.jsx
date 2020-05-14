import React from 'react';
import ReactDOM from 'react-dom';
import store from '../../store'
import { Provider } from 'react-redux'
import Shop from './Shop';


function ShopIndex() {
    return (
        <Provider store={store}>
            <Shop/>
        </Provider>
    );
}

export default ShopIndex;

if (document.getElementById('shop')) {
    ReactDOM.render(<ShopIndex />, document.getElementById('shop'));
}
