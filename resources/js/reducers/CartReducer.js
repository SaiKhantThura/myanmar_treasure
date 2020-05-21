import {
    ADD_TO_CART,
    REMOVE_FROM_CART,
    INCREMENT_QTY,
    DECREMENT_QTY,
    CLEAR_CART,
    QTY_CHANGE
} from '../actions/ActionTypes'


export default function cartReducer(state = {
    cart: []
}, action) {
    switch (action.type) {
        case CLEAR_CART:
            return{
                cart:[]
            }
        case ADD_TO_CART:
            const productId = action.product.id
            if (state.cart.findIndex(product => product.id === productId) !== -1) {
                const cart = state.cart.reduce((cartAcc, product) => {
                    if (product.id === productId) {
                        cartAcc.push({ ...product, qty: (parseInt(action.qty)+parseInt(product.qty)), sum: parseInt(product.price)*parseInt(action.qty) }) // Increment qty
                    } else {
                        cartAcc.push(product)
                    }

                    return cartAcc
                }, [])

                return { ...state, cart }
            }

            return { ...state, cart: [...state.cart, { ...action.product, qty: action.qty, sum: (action.product.price)*action.qty }] }
            
        case DECREMENT_QTY:
            
            if (state.cart.findIndex(product => product.id === action.productId) !== -1) {
                const cart = state.cart.reduce((cartAcc, product) => {
                    if (product.id === action.productId && product.qty > 1) {
                        //console.log('price: '+product.price+'Qty: '+product.qty)
                        cartAcc.push({ ...product, qty: parseInt(product.qty)-1, sum: (parseInt(product.price)*parseInt(product.discount)/100)*(parseInt(product.qty)-1) }) // Decrement qty
                    } else {
                        cartAcc.push(product)
                    }

                    return cartAcc
                }, [])

                return { ...state, cart }
            }

            return { ...state, cart: [...state.cart, { ...action.product, qty: action.qty, sum: action.product.price*action.qty }] }

        case REMOVE_FROM_CART:
            return {
                cart: state.cart.filter(item => item.id !== action.product_id.id)
            }

            case QTY_CHANGE:
            const product_Id = action.product.id
            if (state.cart.findIndex(product => product.id === product_Id) !== -1) {
                const cart = state.cart.reduce((cartAcc, product) => {
                    if (product.id === product_Id) {
                        cartAcc.push({ ...product, qty: parseInt(action.qty), sum: parseInt(product.price)*parseInt(action.qty) }) // Increment qty
                    } else {
                        cartAcc.push(product)
                    }

                    return cartAcc
                }, [])

                return { ...state, cart }
            }

            return { ...state, cart: [...state.cart, { ...action.product, qty: action.qty, sum: (action.product.price)*action.qty }] }
            


        default:
    }
    return state;
}
