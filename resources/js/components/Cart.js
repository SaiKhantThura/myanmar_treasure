import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Cart extends Component {
    handleQtyInput = (e) => {

    }
    render() {
        return (
            <>
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
                        <tr className="text-center">
                            <td className="product-remove">
                                <a href="#">
                                    <span className="ion-ios-close"></span>
                                </a>
                            </td>

                            <td className="image-prod">
                                <div
                                    className="img"
                                    style={{backgroundImage:'url(vegefoods/images/product-3.jpg)'}}
                                ></div>
                            </td>

                            <td className="product-name">
                                <h3>Bell Pepper</h3>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                            </td>

                            <td className="price">$4.90</td>

                            <td className="quantity">
                                <div className="input-group mb-3">
                                    <input
                                        type="text"
                                        name="quantity"
                                        className="quantity form-control input-number"
                                        value="1"
                                        min="1"
                                        max="100"
                                        onChange={(e)=>this.handleQtyInput(e)}
                                    />
                                </div>
                            </td>

                            <td className="total">$4.90</td>
                        </tr>
                    </tbody>
                </table>
            </>
        );
    }
}

if (document.getElementById("react-cart")) {
    ReactDOM.render(<Cart />, document.getElementById("react-cart"));
}
