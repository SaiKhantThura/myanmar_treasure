import React, { Component } from "react";
import { connect } from "react-redux";
import { getCartTotal,getCartSubTotal, removeFromCart, QtyChange } from "../../actions";
import { ToastContainer } from "react-toastify";
class CartContainer extends Component {
    constructor(props){
        super();
        this.state ={
            Qtys:[]
        }
    }
    handleQtyInput = (e,product,index) => {
        console.log(e.target.value);
        console.log(product);
        var Qtys = this.state.Qtys
        Qtys[index] = e.target.value;
        this.props.QtyChange(product,e.target.value);
        this.setState({Qtys});
    };
    componentDidMount() {
        console.log('rendeer')
        var Qtys = this.props.cartList.map((cart,index)=>{
            return cart.qty
        })
        this.setState({Qtys});
    }
    render() {
        return (
            <>
                <section className="ftco-section ftco-cart">
                <ToastContainer />
                    {
                        this.props.cartList.length > 0 ? (
                    <div className="container">
                    
                        <div className="row">
                            <div className="col-md-12">
                                <table className="table">
                                    <thead className="thead-primary">
                                        <tr className="text-center">
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {this.props.cartList.map((cart, index)=> (
                                            <tr
                                                key={cart.id}
                                                className="text-center"
                                            >
                                                <td className="product-remove">
                                                    <a href="#" onClick={() => this.props.removeFromCart(cart)}>
                                                        <span className="ion-ios-close"></span>
                                                    </a>
                                                </td>

                                                <td className="image-prod">
                                                <a href={`product-single/${cart.id}`} class="img-prod">
                                                    <img
                                                        className="img"
                                                        src={cart.image}
                                                        style={{
                                                            objectFit: "cover"
                                                        }}
                                                    />
                                                    </a>
                                                </td>

                                                <td className="product-name">
                                                    <a href={`product-single/${cart.id}`} class="img-prod">
                                                        <h3>{cart.name}</h3>
                                                    </a>
                                                    <p>
                                                        Far far away, behind the
                                                        word mountains, far from
                                                        the countries
                                                    </p>
                                                </td>

                                                <td className="price">
                                                    {cart.price} MMK
                                                </td>

                                                <td className="quantity">
                                                    <div className="input-group mb-3">
                                                        <input
                                                            type="number"
                                                            name="quantity"
                                                            className="quantity form-control input-number"
                                                            value={this.state.Qtys[index]}
                                                            min="1"
                                                            max="100"
                                                            autoComplete="off"
                                                            onChange={e =>
                                                                this.handleQtyInput(
                                                                    e,cart,index
                                                                )
                                                            }
                                                        />
                                                    </div>
                                                </td>

                                                <td className="total">
                                                    {cart.sum}
                                                </td>
                                            </tr>
                                        ))}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div className="row justify-content-end">
                            <div className="col-lg-4 mt-5 cart-wrap">
                                <div className="cart-total mb-3">
                                    <h3>Cart Totals</h3>
                                    <p className="d-flex">
                                        <span>Subtotal</span>
                                        <span>{this.props.subTotal} MMK</span>
                                    </p>
                                    <p className="d-flex">
                                        <span>Delivery</span>
                                        <span>2000 MMK</span>
                                    </p>
                                    <hr />
                                    <p className="d-flex total-price">
                                        <span>Total</span>
                                        <span>{this.props.total} MMK</span>
                                    </p>
                                </div>
                                <p>
                                    <a
                                        href="checkout"
                                        className="btn btn-primary py-3 px-4"
                                    >
                                        Proceed to Checkout
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                        )
                        : 
                        <div className="container">
                            <div className="row">
                                <div className="col-md-12 text-center">
                                    <img src="/vegefoods/images/empty_cart.png"/>
                                    <h3>Your Cart is Empty</h3>
                                    <p>Look like you haven't added anything to your cart yet !</p>
                                </div>
                            </div>
                        </div>
                    }
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

export default connect(mapStateToProps,{removeFromCart,QtyChange})(CartContainer);
