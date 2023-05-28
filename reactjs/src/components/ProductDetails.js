import React, {useContext, useEffect, useState} from 'react';
import { Link,useParams } from 'react-router-dom';

// Context
import { ProductsContext } from '../context/ProductContextProvider';

// Style
import styles from "./ProductDetails.module.css";
// import { getProductById } from '../services/api';

const ProductDetails = () => {

    const params = useParams()
    const data = useContext(ProductsContext);
    const product = data[params.id - 1];

    // const [product,setProduct] = useState([]);

    // useEffect(() => {
    //     const fetchAPI = async () => {
    //         setProduct(await getProductById());
    //         console.log(product);
    //     }

    //     fetchAPI();
    // }, [product]);


    const {image, title, description, price, category} = product;

    return (
        
        <div className={styles.container}>
                <img className={styles.image} src={image} alt="product" />
                <div className={styles.textContainer}>
                    <h3>{title}</h3>
                    <p className={styles.description}>{description}</p>
                    <p className={styles.category}><span>Category:</span> {category}</p>
                    <div className={styles.buttonContainer}>
                        <span className={styles.price}>{price} $</span>
                        <Link to="/">Back to Shop</Link>
                    </div>
                </div>

    
        </div>
    );
};

export default ProductDetails;