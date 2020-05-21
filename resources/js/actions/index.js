import { toast  } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.min.css';
import * as types from './ActionTypes'

//it seems that I should probably use this as the basis for "Cart"
export const addToCart = (product,qty) => (dispatch) => {
    console.log('hi');
    toast.success("Item Added to Cart",{
        position: "bottom-right",
        autoClose: 2000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
    });
        dispatch(addToCartUnsafe(product, qty))

}
export const addToCartUnsafe = (product, qty) => ({
    type: types.ADD_TO_CART,
    product,
    qty
});
export const removeFromCart = product_id => (dispatch) => {
    toast.error("Item Removed from Cart",{
        position: "bottom-right",
        autoClose: 2000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
    });
    dispatch({
        type: types.REMOVE_FROM_CART,
        product_id
    })
};
export const incrementQty = (product,qty) => (dispatch) => {
    toast.success("Item Added to Cart",{
        position: "bottom-right",
        autoClose: 2000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
    });
    dispatch(addToCartUnsafe(product, qty))

}
export const QtyChange = (product,qty) => (dispatch) => {
    dispatch(changeQtyUnsafe(product, qty))
}

export const changeQtyUnsafe = (product, qty) => ({
    type: types.QTY_CHANGE,
    product,
    qty
});

export const decrementQty = productId => (dispatch) => {
    toast.warn("Item Decrement Qty to Cart",{
        position: "bottom-right",
        autoClose: 2000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
    });

    dispatch({
    type: types.DECREMENT_QTY,
    productId})
};
export const clearCart = () => (dispatch) => {
    dispatch({
    type: types.CLEAR_CART
    })
};

export const getCartSubTotal = cartItems => {
    var total = 0;
    for(var i=0; i<cartItems.length; i++){
        total += parseInt(cartItems[i].qty, 10)*parseInt((cartItems[i].price), 10);
    }
    return total;
}

export const getCartTotal = cartItems => {
    var total = 0;
    var shipping = 2000;
    for(var i=0; i<cartItems.length; i++){
        total += parseInt(cartItems[i].qty, 10)*parseInt((cartItems[i].price), 10);
    }
    return total+shipping;
}

export const addToCartAndRemoveWishlist = (product,qty) => (dispatch) => {
    toast.success("Item Added to Cart",{
        position: "bottom-right",
        autoClose: 2000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
    });
    dispatch(addToCartUnsafe(product, qty));
    dispatch(removeFromWishlist(product));
}

//it seems that I should probably use this as the basis for "Wishlist"
export const addToWishlist = (product) => (dispatch) => {
    toast.success("Item Added to Wishlist",{
        position: "bottom-right",
        autoClose: 2000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
    });
    dispatch(addToWishlistUnsafe(product))

}
export const addToWishlistUnsafe = (product) => ({
    type: types.ADD_TO_WISHLIST,
    product
});
export const removeFromWishlist = product_id => (dispatch) => {
    toast.error("Item Removed from Wishlist",{
        position: "bottom-right",
        autoClose: 2000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
    });
    dispatch({
        type: types.REMOVE_FROM_WISHLIST,
        product_id
    })
};