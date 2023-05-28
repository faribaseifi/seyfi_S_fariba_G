<?php
namespace App\Models;

use App\Models\Contracts\BaseModel;

class BasketModel extends BaseModel {

    protected $table = 'basket';

    public function getProductsInBasket($user_id)
    {
        /*
        SELECT
            product_id,
            quantity,
            title,
            price,
            image,

        FROM
            basket
            JOIN products ON basket.product_id = products.id
        WHERE
            user_id = 1
        */
        $records = $this->database->select($this->table, [
            "[><]products" => ["product_id" => "id"]
        ], [
            "product_id",
            "quantity",
            "title",
            "price",
            "image"
        ],['user_id' => $user_id]);
        return $records;
    }
}
