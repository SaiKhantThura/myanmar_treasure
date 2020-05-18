import React, { Component } from "react";
import { connect } from "react-redux";
import { addToCartAndRemoveWishlist, removeFromWishlist } from "../../actions";
import { ToastContainer } from "react-toastify";

class WishListContainer extends Component {
    render() {
        return (
            <>
                <section className="ftco-section ftco-cart">
                    <ToastContainer />
                    {
                        this.props.Items.length > 0 ? (
                    <div className="container">
                        <div className="row">
                            <div className="col-md-12">
                                <div className="">
                                    <table className="table">
                                        <thead className="thead-primary">
                                            <tr className="text-center">
                                                <th>&nbsp;</th>
                                                <th>Product List</th>
                                                <th>&nbsp;</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {this.props.Items.map(item => (
                                                <tr className="text-center" key={item.id}>
                                                    <td className="product-remove">
                                                        <a
                                                            href="#"
                                                            onClick={() =>
                                                                this.props.removeFromWishlist(
                                                                    item
                                                                )
                                                            }
                                                        >
                                                            <span className="ion-ios-close"></span>
                                                        </a>
                                                            {`  `}
                                                        <a
                                                            href="#"
                                                            onClick={() => this.props.addToCartAndRemoveWishlist(item, 1)}
                                                        >
                                                            <span>
                                                                <i class="ion-ios-cart"></i>
                                                            </span>
                                                        </a>
                                                    </td>

                                                    <td className="image-prod">
                                                        <img
                                                            className="img"
                                                            src={item.image}
                                                            style={{
                                                                objectFit: "cover"
                                                            }}
                                                        />
                                                    </td>

                                                    <td className="product-name">
                                                        <h3>{item.name}</h3>
                                                    </td>

                                                    <td className="price">
                                                        {item.price} MMK
                                                    </td>
                                                </tr>
                                            ))}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    )
                    : 
                    <div className="container">
                        <div className="row">
                            <div className="col-md-12 text-center">
                                <img src="/vegefoods/images/empty-wishlist.png"/>
                                <h3>WhishList is Emptyy</h3>
                                <p>Look like you haven't added anything to your wishlist yet !</p>
                            </div>
                        </div>
                    </div>
                }
                </section>
            </>
        );
    }
}

const mapStateToProps = state => ({
    Items: state.wishList.list
});

export default connect(mapStateToProps, {
    addToCartAndRemoveWishlist,
    removeFromWishlist
})(WishListContainer);
