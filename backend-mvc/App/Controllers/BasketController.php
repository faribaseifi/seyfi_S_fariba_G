<?php
namespace App\Controllers;
use App\Models\BasketModel;
use App\Models\ProductModel;

class BasketController {
    protected $basket_model;
    protected $user_id;

    public function __construct()
    {
        $this->basket_model = new BasketModel();
        $this->user_id = 1;
    }

    public function index()
    {

        $userProducts = $this->basket_model->getProductsInBasket($this->user_id);
        $total_quantity = 0;
        $total_price = 0;
        foreach ($userProducts as $product){
            $total_quantity += $product['quantity'];
            $total_price += $product['price']*$product['quantity'];
        }
        $data = array(
            'userProducts'=>$userProducts,
            'total_quantity' => $total_quantity,
            'total_price' => $total_price,
        );
        return view('home.home_view',$data);

    }

    public function store() {

        $data = [
            'product_id' => $_POST['product_id'],
            'user_id' => 1,
            'quantity' => 1,
            'created_at' => time()
        ];
        // Create a new product in the basket (in db)
        $records = $this->basket_model->create($data);
        header('Content-Type: application/json');
        echo json_encode($records);
    }

    public function update() {

        $type =$_POST['type'];
        $product_id = $_POST['product_id'];
        $where = array(
            'product_id' => $product_id,
            'user_id' => $this->user_id
        );
        $record = $this->basket_model->get(['quantity'],$where);

        if($type == 'increase'){
            $quantity = $record[0]['quantity'] + 1;

        }elseif ($type == 'decrease'){
            $quantity = $record[0]['quantity'] - 1;

        }elseif ($type == 'delete'){
            $this->remove_item($where);
        }

        $update_data = [
            'quantity' => $quantity,
            'updated_at' => time()
        ];
        $where = array(
            'product_id' => $_POST['product_id'],
            'user_id' => $this->user_id,
        );
        // Update product in the basket (in db)
        $records = $this->basket_model->update($update_data,$where);
        header('Content-Type: application/json');
        echo json_encode($quantity);
    }

    public function remove_item($where)
    {
        $remove_item = $this->basket_model->delete($where);
        header('Content-Type: application/json');
        echo json_encode($remove_item);
        die();
    }

    public function delete_basket()
    {
        $remove_item = $this->basket_model->delete(['user_id' => $this->user_id]);
        header('Content-Type: application/json');
        echo json_encode($remove_item);
        die();


    }


}
