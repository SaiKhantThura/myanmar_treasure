import React, { Component } from "react";
import { connect } from "react-redux";
import { getCartTotal } from "../../actions";
class CartContainer extends Component {
    handleQtyInput = e => {};
    render() {
        return (
            <>
                <section className="ftco-section ftco-cart">
                    <div className="container">
                        <div className="row">
                            <div className="col-md-12">
                                <table className="table">
                                    <thead className="thead-primary">
                                        <tr className="text-center">
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Product name 2</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {this.props.cartList.map(cart => (
                                            <tr
                                                key={cart.id}
                                                className="text-center"
                                            >
                                                <td className="product-remove">
                                                    <a href="#">
                                                        <span className="ion-ios-close"></span>
                                                    </a>
                                                </td>

                                                <td className="image-prod">
                                                    <img
                                                        className="img"
                                                        src={cart.image}
                                                        style={{
                                                            objectFit: "cover"
                                                        }}
                                                    />
                                                </td>

                                                <td className="product-name">
                                                    <h3>{cart.name}</h3>
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
                                                            type="text"
                                                            name="quantity"
                                                            className="quantity form-control input-number"
                                                            value={cart.qty}
                                                            min="1"
                                                            max="100"
                                                            onChange={e =>
                                                                this.handleQtyInput(
                                                                    e
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
                                        <span>{this.props.total} MMK</span>
                                    </p>
                                    <p className="d-flex">
                                        <span>Delivery</span>
                                        <span>$0.00</span>
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
                </section>
            </>
        );
    }
}

function mapStateToProps(state) {
    return {
        cartList: state.cartList.cart,
        total: getCartTotal(state.cartList.cart)
    };
}

export default connect(mapStateToProps)(CartContainer);