<?php
class Database{
 
    // specify your own database credentials
    private $conn;
    private $host = "localhost";
    private $username = "iinffbjy_user1";
    private $password = "DAms12/=";
    private $database = iinffbjy_iinfinity_ai;
    function __construct(){
        
    }
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>