<?php

class Database
{
    private $host;
    private $dbName;
    private $userName;
    private $password;

    private $connection;
    private $numRows = null;
    private $results = null;

    public function __construct()
    {
        $this->host = "localhost";
        $this->dbName = "henry";
        $this->userName = "root";
        $this->password = "99RedBall00n5";

        $this->connect();
    }

    private function connect()
    {
        // Create connection
        $this->connection = new mysqli($this->host, $this->userName, $this->password, $this->dbName);

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function fetch($sql)
    {
        // Run the query
        $query = $this->connection->query($sql);

        // Store the data in this class
        $this->numRows = $query->num_rows;
        $this->results = $this->resultsToObject($query->fetch_all(MYSQLI_ASSOC));
        $this->connection->close();

        // Return the results
        return $this->results;
    }

    public function run($sql)
    {
        return $this->connection->query($sql) === TRUE;
    }

    private function resultsToObject($results)
    {
        $ret = array();
        foreach ($results as $row) {
            $obj = new stdClass();
            foreach ($row as $key => $value) {
                $obj->$key = $value;
            }
            $ret[] = $obj;
        }
        return $ret;
    }
}