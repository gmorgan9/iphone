<?php

class DbConnect
{
    private $conn;

    function __construct()
    {
    }

    /**
     * Establishing database connection
     * connection handler
     */
    function connect()
    {
        require_once 'Config.php';

        // Connecting to mysql database
        $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check for database connection error
        if ($conn->connect_error) {
            echo "Failed to connect to MySQL: " . $conn->connect_error;
        }
        echo "Success";

        // returing connection resource
        return $this->conn;
    }
}