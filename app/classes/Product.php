<?php
namespace classes;

use PHPMailer\PHPMailer\Exception;

class Product
{
    public function create_product($name, $price, $description)
    {
        //echo "$name - $price - $description";

        $bank = new \classes\Bank();
        try
        {
            $bank->query("INSERT INTO products (name_product, price, description) VALUES (:NAME_PRODUCT ,:PRICE, DESCRIPTION);",array(
                ":NAME_PRODUCT" => $name,
                ":PRICE" => $price,
                ":DESCRIPTION" => $description
            ));
        }catch (\Exception $exception)
        {
            throw new \Exception("Aconteceu um erro: ".$exception->getMessage());
        }

    }
}

?>