<?php
namespace App\Controllers;
use App\Models\BasketModel;
use App\Models\ProductModel;

class ProductController {

    protected $product_model;
    protected $user_id;

    public function __construct()
    {
        $this->product_model = new ProductModel();
        $this->basket_model = new BasketModel();
        $this->user_id = 1;
     }

    public function index() {
        // Retrieve all products from the database

        $products = $this->product_model->getAll();

        $userProducts = $this->basket_model->get(['product_id','quantity'],['user_id'=> $this->user_id]);

        $i =0;
        $new_array = [];
        $total_quantity = 0;
        if(count($userProducts) > 0) {
            foreach ($products as $product) {
                foreach ($userProducts as $userProduct) {
                    if ($userProduct['product_id'] == $product['id']) {
                        $new_array[$i] = $product;

                        $new_array[$i]['quantity'] = $userProduct['quantity'];
                        $total_quantity += $userProduct['quantity'];
                    }
                }
                if (!isset($new_array[$i]['quantity'])) {
                    $new_array[$i] = $product;

                    $new_array[$i]['quantity'] = 0;
                }
                $i++;
            }

        }else{
            $i =0;
            foreach ($products as $product) {

                $new_array[$i] = $product;
                $new_array[$i]['quantity'] = 0;
                $i++;
            }
        }

        $data = [
            'products' => $new_array,
            'total_quantity' => $total_quantity
        ];
        return view('home.home_view',$data);
    }


}
