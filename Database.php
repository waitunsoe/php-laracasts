<?php

// connect to the database & execute a query;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        // http_build_query($config); // host=localhost&port=3306&dbname=test
        // http_build_query($config, '', ';'); // host=localhost;port=3306;dbname=test

        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($sql, $params = [])
    {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result =  $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}
