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
                $page->setTemplate('products');
            });
            $app->get('/criar', function(){
                $page = new Page();
                $page->setTemplate('products-create');
            });
            $app->post('/criar', function(){
               $product = new Product();
               $name = $_POST['name'];
               $price = intval($_POST['price']);
               $description = $_POST['description'];
               $product->create_product($name,$price,$description);
            });
        });
    }
}