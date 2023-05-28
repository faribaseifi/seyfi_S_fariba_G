import axios from "axios";

// const BASE_URL = "https://fakestoreapi.com";
const BASE_URL = "https://api.fariba.dev";

const getProducts = async () => {
    const response = await axios.get(`${BASE_URL}`);
    return response.data;
}

const addToCart = async ($data) => {

    const response = await axios.post(`${BASE_URL}/add-to-basket`,$data,{
        headers: {
          'Content-Type': 'application/json'
        }
      });
    return response.data;
}

const removeItemFromCart = async ($data) => {

    const response = await axios.post(`${BASE_URL}/remove-from-basket`,$data,{
        headers: {
          'Content-Type': 'application/json'
        }
      });
    return response.data;
}

const updateCart = async ($data) => {

    const response = await axios.post(`${BASE_URL}/update-basket`,$data,{
        headers: {
          'Content-Type': 'application/json'
        }
      });
    return response.data;
}

const getProductById = async (id) => {
    const response = await axios.get(`${BASE_URL}/products/${id}`);
    console.log(response.data);
    return response.data;
}

export {getProducts,getProductById,addToCart,removeItemFromCart,updateCart};