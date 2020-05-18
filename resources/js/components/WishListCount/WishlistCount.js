import React, { Component } from 'react'
import { connect } from 'react-redux';
class WishlistCount extends Component {
    render() {
        return (
            this.props.wishList && this.props.wishList.length
        )
    }
}

function mapStateToProps(state) {
    return {
        wishList: state.wishList.list,
    }
}

export default connect(mapStateToProps)(WishlistCount);
