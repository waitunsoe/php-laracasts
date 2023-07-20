<?php

// connect to the database & execute a query;

class Database
{
    public $connection;

    public function __construct()
    {
        $servername = "localhost";
        $port = 3306;
        $dbname = "test";
        $dsn = "mysql:host=$servername;port=$port;dbname=$dbname";

        $username = "admin";
        $password = "wtsisadmin";

        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($sql)
    {


        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement;
    }
}
