<?php
    class DB{
        private $host="localhost";
        private $db_name="worker";
        private $username="root";
        private $password="";
        public $conn;

    
    public function db_connection()
    {
        $this->conn=null;
        try{
            $this->conn=new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);
        }
        catch(PDOException $ex)
        {
            echo "connection error".$ex->getMessage();
        }
        return $this->conn;
    }
}
?>