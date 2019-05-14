<?php
namespace classes;
use PDO;
class Bank extends PDO
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=project_site','root','');
    }

    private function setParameters($statement,$parameters = array())
    {
        foreach ($parameters as $key => $value)
        {
            $statement->bindValue($key,$value);
        }
    }

    public function query($rawQuery, $parameters = array())
    {
        $statement = $this->connection->prepare($rawQuery);
       // print_r( $parameters );
        $statement->execute($parameters);
        return $statement;
    }

    public function select($rawQuery,$parameters = array())
    {
        $statement = $this->query($rawQuery,$parameters);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>