<?php
/**
 * Created by PhpStorm.
 * User: HE
 * Date: 14/05/2019
 * Time: 11:23
 */

namespace routes;


use classes\Bank;
use classes\Page;
use classes\Product;

class ProductRouter
{
    public function __construct($app)
    {
        $app->group('/produtos', function() use ($app){
            $app->get('/', function(){
                $page = new Page();
                $product = new Product();
                $products = $product->list_all("SELECT * FROM products");
                $page->setTemplate('products', ['products' => $products]);
            });


            $app->get('/criar', function(){
                $page = new Page();
                $page->setTemplate('products-create');
            });
            $app->post('/criar', function(){
               $product = new Product();
               $query = "INSERT INTO products (name_product, price, description) VALUES (:NAME ,:PRICE, :DESCRIPTION);";
               $product->create($query,[":NAME" => $_POST['name'], ":PRICE" => $_POST['price'],":DESCRIPTION" => $_POST['description']]);
            });


            $app->get('/editar/:id', function ($id){
               $page = new Page();
               $product = new Product();
               $product_item = $product->search("SELECT * FROM products WHERE id = :ID;",array(":ID" => $id));
               $page->setTemplate('edit',array('product' => $product_item[0]));
            });
            $app->post('/editar/:id', function($id){
               $product = new Product();
               $product->update("UPDATE products SET name_product = :NAME, price = :PRICE AND description = :DESCRIPTION WHERE ID = :ID;",
                   [":NAME" => $_POST['name'], ":PRICE" => $_POST['price'], ":DESCRIPTION" => $_POST['description']]);
            });


            $app->get('/excluir/:id', function($id){
                $product = new Product();
                $product->delete("DELETE FROM products WHERE id = :ID", array(":ID" => $id));
                header("Location: /produtos");
                exit;
                //echo $id;
            });
        });
    }
}