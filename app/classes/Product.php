<?php
/**
 * Created by PhpStorm.
 * User: HE
 * Date: 14/05/2019
 * Time: 10:00
 */

namespace classes;


class Product
{
    public function create_product($name,$price,$description)
    {
        $bank = new Bank();
        $bank->query("INSERT INTO products (name,price,description) VALUES (:NAME,:PRICE,:DESCRIPTION)",array(
            ':NAME' => $name,
            ':PRICE' => $price,
            ':DESCRIPTION' => $description
        ));
    }

    public function list_products()
    {
        $bank = new Bank();
        return $bank->select("SELECT * FROM products");
    }
}