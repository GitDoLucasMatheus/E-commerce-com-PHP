<?php
/**
 * Created by PhpStorm.
 * User: HE
 * Date: 14/05/2019
 * Time: 10:28
 */

namespace routes;


use classes\Page;

class HomeRouter
{
    public function __construct($app)
    {
        $app->get('/', function(){
           $page = new Page();
           $page->setTemplate('home');
        });
    }
}