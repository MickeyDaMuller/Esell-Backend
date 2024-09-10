<?php
namespace dbn;
use PDO;

class Database{
    
    const DBHOST = 'localhost';
    const DBNAME = 'eselldb';
    const DBUSERNAME = 'root';
    const DBPASSWORD = '';
    
    
    private function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.self::DBHOST.';dbname='.self::DBNAME,self::DBUSERNAME,self::DBPASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(\PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
        
        
    }
    protected function connection(){
        return $this->dbConnection();
    } 
}


?>