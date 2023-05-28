import React, { useReducer, createContext } from 'react';
import { addToCart, removeItemFromCart, updateCart } from '../services/api';

const initialState = {
    selectedItems: [],
    itemsCounter: 0,
    total: 0,
    checkout: false
}

const sumItems = items => {
    const itemsCounter = items.reduce((total, product) => total + product.quantity, 0);
    let total = items.reduce((total, product) => total + product.price * product.quantity, 0).toFixed(2);
    return {itemsCounter, total}
}

const cartReducer = (state, action) => {
    console.log(action.type)
    switch(action.type) {
        case "ADD_ITEM":
            if (!state.selectedItems.find(item => item.id === action.payload.id)) {
                state.selectedItems.push({
                    ...action.payload,
                    quantity: 1
                })
            }

            const addItem = async () => {
                const res = (await addToCart({"product_id" : action.payload.id }));
                console.log(res);

            }
    
            addItem();

            return {
                ...state,
                selectedItems: [...state.selectedItems],
                ...sumItems(state.selectedItems),
                checkout: false
            }
        case "REMOVE_ITEM":
            const newSelectedItems = state.selectedItems.filter(item => item.id !== action.payload.id);
            const removeItem = async () => {
                const res = (await removeItemFromCart({"product_id" : action.payload.id }));
                console.log(res);

            }
            removeItem();
            return {
                ...state,
                selectedItems: [...newSelectedItems],
                ...sumItems(newSelectedItems)

            }
        case "INCREASE":
            const indexI = state.selectedItems.findIndex(item => item.id === action.payload.id);
            state.selectedItems[indexI].quantity++;
            const increaseItem = async () => {
                const res = (await updateCart({"product_id" : action.payload.id ,"type" :"increase"}));
                console.log(res);

            }
            increaseItem();
            return {
                ...state,
                ...sumItems(state.selectedItems)

            }
        case "DECREASE":
            const indexD = state.selectedItems.findIndex(item => item.id === action.payload.id);
            state.selectedItems[indexD].quantity--;
            const decreaseItem = async () => {
                const res = (await updateCart({"product_id" : action.payload.id ,"type" :"decrease"}));
                console.log(res);

            }
            decreaseItem();
            return {
                ...state,
                ...sumItems(state.selectedItems)

            }
        case "CHECKOUT" :
            return {
                selectedItems: [],
                itemsCounter: 0,
                total: 0,
                checkout: true
            }
        case "CLEAR":
            return {
                selectedItems: [],
                itemsCounter: 0,
                total: 0,
                checkout: false
            }
        default: 
            return state;
    }   
}

export const CartContext = createContext()

const CartContextProvider = ({children}) => {

    const [state, dispatch] = useReducer(cartReducer, initialState)

    return (
        <CartContext.Provider value={{state, dispatch}}>
            {children}
        </CartContext.Provider>
    );
};

export default CartContextProvider;