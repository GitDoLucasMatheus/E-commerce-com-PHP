<?php
/**
 * Created by PhpStorm.
 * User: HE
 * Date: 14/05/2019
 * Time: 09:39
 */

namespace classes;


class Bank
{
    private $connection;
    const HOST_NAME = 'localhost';
    const DATABASE_NAME = 'projectsite';
    const HOST_USER = 'root';
    const HOST_PASSWORD = ' ';

    public function __construct()
    {
        $this->connection = new \PDO('mysql:host='.Bank::HOST_NAME.';dbname='.Bank::DATABASE_NAME,Bank::HOST_USER, Bank::HOST_PASSWORD);
    }

    //FUNÇÃO QUE REALIZA ALGUM COMANDO DO RAWQUERY NO BANCO E RETORNA O RESULTADO
    public function query($rawQuery,$parameters = array())
    {
        $statement = $this->connection->prepare($rawQuery);
        $this->setParameters($statement,$parameters);
        $statement->execute();
        return $statement;
    }
    //FUNÇÃO QUE REALIZA ALGUM COMANDO DO RAWQUERY NO BANCO E RETORNA UM ARRAY DE RESULTADOS
    public function select($rawQuery,$parameters = array())
    {
        //AQUI IRÁ CHAMAR O QUERY PQ O CÓDIGO É A MESMA COISA, A ÚNICA DIFERENÇA DESSA FUNÇÃO PARA A QUERY É PQ ESSA RETORNA UM ARRAY
        $statement = $this->query($rawQuery,$parameters);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    //FUNÇÃO QUE PEGA OS PARAMETROS E ASSOCIA AO STATEMENT
    private function setParameters($statement,$parameters = array())
    {
        foreach ($parameters as $key => $value)
        {
            $statement->bindParam($key,$value);
        }
    }
}