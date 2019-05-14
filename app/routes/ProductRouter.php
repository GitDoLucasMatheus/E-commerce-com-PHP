<?php
/**
 * Created by PhpStorm.
 * User: HE
 * Date: 14/05/2019
 * Time: 11:23
 */

namespace routes;


use classes\Page;

class ProductRouter
{
    public function __construct($app)
    {
        $app->get('produtos', function(){
             $page = new Page();
             $page->setTemplate('products');
        });
    }
}