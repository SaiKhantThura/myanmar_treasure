import React, { Component } from 'react'
import {
    clearCart,clearWishlist
} from '../../actions'
import { connect } from 'react-redux';
import Axios from 'axios';

class ClearNow extends Component {
    componentWillMount() {
        console.log(this.props);
        if(this.props.needtoclear=="1"){
                this.props.clearWishlist();
                this.props.clearCart();
                Axios.get('/cleared').then(response => {
                    
                })
        }
    }
    render() {
        return (
            <>
                
            </>
        )
    }
}
export default connect(null,{clearCart,clearWishlist})(ClearNow)

