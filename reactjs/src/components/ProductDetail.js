import React, { useContext } from 'react';
import { ProductsContext } from '../context/ProductsContextProvider';
import { Link } from 'react-router-dom/cjs/react-router-dom';
const ProductDetail = (props) => {
    const id = props.match.params.id;
    const data = useContext(ProductsContext);
    const product = data[id-1];
    const {image,title,price,description,category} = product;
    
    return (
        <div>
            <img src={image} alt="product-image"/>
            <div>
                <h3>{title}</h3>
                <p>{description}</p>
                <p><span>Category : </span>{category}</p>
                <div>
                    <span>{price} $</span>
                    <Link to="/">Back To Shop</Link>
                </div>
            </div>
        </div>
    );
};

export default ProductDetail;