import React, { Component } from "react";
import { connect } from "react-redux";
import { getCartTotal,getCartSubTotal, removeFromCart, QtyChange, clearCart } from "../../actions";
import { ToastContainer } from "react-toastify";
import Axios from "axios";
class Checkout extends Component {
    constructor(props){
        super();
        this.state ={
            name:'',
            address:'',
            phone:'',
            errors:[],
            isLoading:false
        }
    }
    handleInputChange = (e) => {
        this.setState({[e.target.name]:e.target.value});
    };
    componentDidMount() {
        console.log('rendeer')
        var Qtys = this.props.cartList.map((cart,index)=>{
            return cart.qty
        })
        this.setState({Qtys});
    }
    handleSubmit = (e) =>{
        e.preventDefault();
        this.setState({
            isLoading:true
        });
        var filter = this.props.cartList.map((cart)=>{
            var obj={product_id:'',quantity:''};
            obj.product_id = cart.id;
            obj.quantity = cart.qty;
            return obj
        })
        const data = {
            name: this.state.name,
            address: this.state.address,
            phone: this.state.phone,
            total: this.props.total,
            subtotal: this.props.subTotal,
            cart:filter
        }
        console.log(data)
        Axios.post('/orders',data)
        .then(respose=>{
            this.setState({isLoading:false});
            if(respose.status == 201){
                this.props.clearCart();
            }
            console.log(respose);
            location.replace(`/receipt?order=${respose.data.id}`)
        })
        .catch(error =>{
            console.log(error.response)
            this.setState({isLoading:false});
            if(error.response.status == 422){
                this.setState({errors:error.response.data.errors})
            }
        })
        console.log('submit')
    }
    render() {
        return (
            <>
                <section className="ftco-section">
    <div className="container">
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
        <div className="row justify-content-center">
            <div className="col-xl-7">
                <form action="#" className="billing-form">
                    <h3 className="mb-4 billing-heading">Billing Details</h3>
                    <div className="row align-items-end">
                        <div className="col-md-12">
                            <div className="form-group">
                                <label for="firstname">Name</label>
                                <input type="text" className="form-control is-invalid" name="name" value={this.state.name} onChange={e=>this.handleInputChange(e)} placeholder=""/>

                                {
                                    this.state.errors.name &&
                                    <div class="invalid-feedback">
                                        {this.state.errors.name[0]}
                                    </div>
                                }
                            </div>
                        </div>
                        <div className="w-100"></div>
                        
                        
                        <div className="col-md-12">
                            <div className="form-group">
                                <label for="streetaddress">Address</label>
                                <input type="text" className="form-control is-invalid" name="address" value={this.state.address} onChange={e=>this.handleInputChange(e)} placeholder="House number and street name"/>
                                {
                                    this.state.errors.address &&
                                    <div class="invalid-feedback">
                                        {this.state.errors.address[0]}
                                    </div>
                                }
                            </div>
                        </div>
                        <div className="w-100"></div>
                        <div className="col-md-12">
                            <div className="form-group">
                                <label for="towncity">Phone No</label> 
                                <input type="text" className="form-control is-invalid" name="phone" value={this.state.phone} onChange={e=>this.handleInputChange(e)} placeholder=""/>
                                {
                                    this.state.errors.phone &&
                                    <div class="invalid-feedback">
                                        {this.state.errors.phone[0]}
                                    </div>
                                }
                            </div>
                        </div>
                        <div className="w-100"></div>
                        
                    </div>
                </form>
            </div>
            <div className="col-xl-5">
                <div className="row mt-5 pt-3">
                    <div className="col-md-12 d-flex mb-5">
                        <div className="cart-detail cart-total p-3 p-md-4">
                            <h3 className="billing-heading mb-4">Products</h3>
                            {
                                this.props.cartList.map(cart=>(
                                    <p className="d-flex" key={cart.id}>
                                        <span>{cart.name}</span>
                                        <span>{cart.qty} x {cart.price} MMK</span>
                                        <span>{cart.sum} MMK</span>
                                    </p>
                                ))
                            }
                            <hr />

                            <p className="d-flex">
                                <span></span>
                                <span>Subtotal</span>
                                <span>{this.props.subTotal} MMK</span>
                            </p>
                            <p className="d-flex">
                                <span></span>
                                <span>Delivery</span>
                                <span>2000 MMK</span>
                            </p>
                            <hr />
                            <p className="d-flex total-price">
                                <span>  </span>
                                <span>Total</span>
                                <span>{this.props.total} MMK</span>
                            </p>
                            <hr/>
                            <div className="order-btn">
                                <a onClick={(e)=>this.handleSubmit(e)} className="btn btn-primary py-3 px-4">Place an order</a>   
                            </div>
                        </div>

                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
            </>
        );
    }
}

function mapStateToProps(state) {
    return {
        cartList: state.cartList.cart,
        total: getCartTotal(state.cartList.cart),
        subTotal: getCartSubTotal(state.cartList.cart)
    };
}

export default connect(mapStateToProps,{removeFromCart,QtyChange,clearCart})(Checkout);
