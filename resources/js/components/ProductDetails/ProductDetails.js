import React, { Component } from 'react'
import Axios from 'axios';
import { connect } from "react-redux";
import {addToCart} from '../../actions'
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

class ProductDetails extends Component {
    constructor(props){
        super();
        this.state ={
            product:{},
            isLoading:false,
            quantity:1,
        }
    }
    //WARNING! To be deprecated in React v17. Use componentDidMount instead.
    componentDidMount() {
        Axios.get(`/shop-products/${this.props.productid}`).then(response =>{
            this.setState({product:response.data});
        }).then(err=>{
            console.log(err);
        })
    }
    minus = (e) =>{
        if(this.state.quantity >= 0){
            this.setState({quantity:this.state.quantity-1});
        }
    }
    plus = (e) =>{
        if(this.state.quantity<=100){
            this.setState({quantity:this.state.quantity+1});
        }
    }
    handleInput = (e) =>{
        console.log(e.target.value);
        if(e.target.value >= 0 && e.target.value <= 100){
            this.setState({quantity:e.target.value});
        }
    }
    render() {
        return (
            <section className="ftco-section">
                <ToastContainer />
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6 mb-5">
                            <a href={this.state.product.image} className="image-popup"><img src={this.state.product.image} className="img-fluid"
                                    alt="Colorlib Template"/></a>
                        </div>
                        <div className="col-lg-6 product-details pl-md-5">
                            <h3>{this.state.product.name}</h3>
                            
                            <p className="price"><span>{this.state.product.price} MMK</span></p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                                paradisematic country, in which roasted parts of sentences fly into your mouth. Text should turn
                                around and return to its own, safe country. But nothing the copy said could convince her and so it
                                didn’t take long until.
                            </p>
                            <div className="row mt-4">
                                <div className="w-100"></div>
                                <div className="input-group col-md-6 d-flex mb-3">
                                    <span className="input-group-btn mr-2">
                                        <button type="button" className="quantity-left-minus btn" onClick={(e)=>this.minus(e)}>
                                            <i className="ion-ios-remove"></i>
                                        </button>
                                    </span>
                                    <input type="number" id="quantity" name="quantity" className="form-control input-number" onChange={(e)=>this.handleInput(e)} value={this.state.quantity}
                                        min="1" max="100"/>
                                    <span className="input-group-btn ml-2">
                                        <button type="button" className="quantity-right-plus btn" onClick={(e)=>this.plus(e)}>
                                            <i className="ion-ios-add"></i>
                                        </button>
                                    </span>
                                </div>
                                <div className="w-100"></div>
                            </div>
                            <p><a onClick={() => this.props.addToCart(this.state.product, this.state.quantity)} className="btn btn-black py-3 px-5">Add to Cart</a></p>
                        </div>
                    </div>
                </div>
            </section>
        )
    }
}

export default connect(null, {addToCart})(ProductDetails)
