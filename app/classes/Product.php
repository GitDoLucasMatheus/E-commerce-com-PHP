<?php
namespace classes;

use PHPMailer\PHPMailer\Exception;

class Product implements CRUD
{
    public function create($query,$parameters = array())
    {
        //echo "$name - $price - $description";
        $bank = new \classes\Bank();
        try
        {
            $bank->query($query,$parameters);
            header("Location: /produtos");
            exit;
        }catch (\Exception $exception) {
            throw new \Exception("Aconteceu um erro: " . $exception->getMessage());
        }
    }

    public function delete($query, $parameters = array())
    {
        // TODO: Implement delete() method.
    }

    public function list_all($query, $parameters = array())
    {
        try{
            $bank = new Bank();
            return $bank->select($query,$parameters);
        }catch (\Exception $exception){
            throw new \Exception("Aconteceu um erro: ".$exception->getMessage());
        }
    }

    public function search($query, $parameters = array())
    {
        try{
            $bank = new Bank();
            return $bank->select($query,$parameters);
        }catch (\PDOException $exception){
            throw new \PDOException("Aconteceu um erro: ".$exception->getMessage());
        }

    }

    public function update($query, $parameters = array())
    {
        try{
            $bank = new Bank();
            $bank->query($query,$parameters);
            header("Location: /produtos");
            exit;
        }catch( \PDOException $exception)
        {
            throw new \PDOException("Aconteceu um erro: ".$exception->getMessage());
        }
    }
}

?>