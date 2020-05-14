import React, { Component } from "react";
import ReactDOM from "react-dom";
import Axios from "axios";
import { connect } from "react-redux";
import {addToCart} from '../../actions'
class Shop extends Component {
    constructor(props){
        super();
        this.state ={
            active:'all',
            categories:[],
            products:[],
            isLoading:false
        }
    }
    //WARNING! To be deprecated in React v17. Use componentDidMount instead.
    componentDidMount() {
        localStorage.setItem('myData', this.state.active);
        Axios.get('/categories/all').then(response =>{
            this.setState({categories:response.data});
        }).then(err=>{
            console.log(err);
        })

        Axios.get('/shop-products?category=all').then(response =>{
            this.setState({products:response.data});
        }).then(err=>{
            console.log(err);
        })
    }
    handleCategoryNav = (e,item)=>{
        this.setState({
            active: item,
            isLoading:true
        });
        Axios.get(`/shop-products?category=${item}`).then(response =>{
            this.setState({products:response.data, isLoading:false});
        }).then(err=>{
            this.setState({isLoading:false});
        })
    }
    render() {
        return (
            <section className="ftco-section">
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-md-10 mb-5 text-center">
                            <ul className="product-category">
                                <li onClick={(e)=>this.handleCategoryNav(e,'all')}>
                                    <a href="#" className={this.state.active=="all"&&'active'}>
                                        All
                                    </a>
                                </li>
                                {
                                    this.state.categories.map(category=>(
                                        <li  onClick={(e)=>this.handleCategoryNav(e,category.id)}>
                                            <a className={this.state.active==category.id&&'active'}>{category.name}</a>
                                        </li>
                                    ))
                                }
                            </ul>
                        </div>
                    </div>
                    <div className="row">
                        {
                            this.state.isLoading &&
                            <div id="ftco-loader" class="show">
                                <svg class="circular" width="48px" height="48px">
                                    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                                    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                                        stroke="#F96D00" />
                                </svg>
                            </div>
                        }
                        {
                            this.state.products.map(product=>(
                                <div class="col-md-6 col-lg-3">
                                    <div class="product">
                                        <a href={`product-single/${product.id}`} class="img-prod">
                                            <img
                                                class="img-fluid"
                                                src={product.image}
                                                alt="Colorlib Template"
                                            />
                                            <div class="overlay"></div>
                                        </a>
                                        <div class="text py-3 pb-4 px-3 text-center">
                                            <h3>
                                                <a href={`product-single/${product.id}`}>{product.name}</a>
                                            </h3>
                                            <div class="d-flex">
                                                <div class="pricing">
                                                    <p class="price">
                                                        <span class="price-sale">
                                                            {product.price} MMK
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="bottom-area d-flex px-3">
                                                <div class="m-auto d-flex">
                                                    <a
                                                        href={`product-single/${product.id}`}
                                                        class="add-to-cart d-flex justify-content-center align-items-center text-center"
                                                    >
                                                        <span>
                                                            <i class="ion-ios-menu"></i>
                                                        </span>
                                                    </a>
                                                    <a
                                                        class="buy-now d-flex justify-content-center align-items-center mx-1"
                                                        onClick={() => this.props.addToCart(product, 1)}
                                                    >
                                                        <span>
                                                            <i class="ion-ios-cart"></i>
                                                        </span>
                                                    </a>
                                                    <a
                                                        href={`product-single/${product.id}`}
                                                        class="heart d-flex justify-content-center align-items-center"
                                                    >
                                                        <span>
                                                            <i class="ion-ios-heart"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ))
                        }
                    </div>
                </div>
            </section>
        );
    }
}


export default connect(null, {addToCart})(Shop)