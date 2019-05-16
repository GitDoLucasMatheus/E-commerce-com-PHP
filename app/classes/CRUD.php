<?php
/**
 * Created by PhpStorm.
 * User: HE
 * Date: 15/05/2019
 * Time: 09:12
 */

namespace classes;


interface CRUD
{
    public function create($query,$parameters = array());
    public function list_all($query,$parameters = array());
    public function search($query,$parameters = array());
    public function update($query,$parameters = array());
    public function delete($query,$parameters = array());
}