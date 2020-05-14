import React, { Component } from 'react'
import { connect } from 'react-redux';
class CartCount extends Component {
    render() {
        return (
            this.props.cartList && this.props.cartList.length
        )
    }
}

function mapStateToProps(state) {
    return {
        cartList: state.cartList.cart,
    }
}

export default connect(mapStateToProps)(CartCount);
