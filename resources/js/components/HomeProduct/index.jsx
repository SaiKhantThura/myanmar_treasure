import React from 'react';
import ReactDOM from 'react-dom';
import store from '../../store'
import { Provider } from 'react-redux'
import HomeProducts from './HomeProducts';


function HomeProductsIndex() {
    return (
        <Provider store={store}>
            <HomeProducts/>
        </Provider>
    );
}

export default HomeProductsIndex;

if (document.getElementById('home-products')) {
    ReactDOM.render(<HomeProductsIndex />, document.getElementById('home-products'));
}
