 <?php

  require_once('dbconfig.php');
class USER{
    public $conn;
    public function __construct()
    {
        $database = new DB();
        $db = $database->db_connection();
        $this->conn = $db;
    }
   
    public function fetchData()
    {
        try{
             $stmt=$this->conn->prepare("SELECT * from worker_info");
            // $stmt=$this->conn->prepare("UPDATE worker SET first_name='Prasad' where dept='biology' ");

           // $stmt=$this->conn->prepare("UPDATE worker SET first_name=:first_name where dept=:dept ");
            //$stmt-> bindparam(":first_name",$first_name);
            //$stmt-> bindparam(":dept",$dept);
            
            //$stmt->execute(array(':worker_id'=>$worker_id));
            $stmt->execute();
            $fData=$stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $fData;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    public function insert($user_id,$fname,$lname,$email,$phoneno)
    {

        try{
             $stmt=$this->conn->prepare("INSERT INTO worker_info VALUES (:user_id,:fname, :lname, :email, :phoneno)");
            // $stmt=$this->conn->prepare("UPDATE worker SET first_name='Prasad' where dept='biology' ");

           // $stmt=$this->conn->prepare("UPDATE worker SET first_name=:first_name where dept=:dept ");
           $stmt-> bindparam(":user_id",$user_id);
            $stmt-> bindparam(":fname",$fname);
            $stmt-> bindparam(":lname",$lname);
            $stmt-> bindparam(":email",$email);
            $stmt-> bindparam(":phoneno",$phoneno);
            $stmt->execute();
            
            
            return "Data inserted Successfully";
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    public function edit($user_id,$name,$lname,$email,$phoneno)
    {

        try{
             $stmt=$this->conn->prepare("UPDATE worker_info SET fname=:fname, lname=:lname, email=:email, phoneno=:phoneno WHERE user_id=:user_id");
            // $stmt=$this->conn->prepare("UPDATE worker SET first_name='Prasad' where dept='biology' ");

           // $stmt=$this->conn->prepare("UPDATE worker SET first_name=:first_name where dept=:dept ");
            $stmt-> bindparam(":fname",$name);
            $stmt-> bindparam(":lname",$lname);
            $stmt-> bindparam(":email",$email);
            $stmt-> bindparam(":phoneno",$phoneno);
           
            $stmt-> bindparam(':user_id',$user_id);
            
            //$stmt-> bindparam(":dept",$dept);
            $stmt->execute();
            $fData=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return "Success";
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    public function delete($user_id)
    {
        try{
             $stmt=$this->conn->prepare("DELETE FROM `worker_info` WHERE `user_id`=:user_id");
            // $stmt=$this->conn->prepare("UPDATE worker SET first_name='Prasad' where dept='biology' ");
              // $stmt=$this->conn->prepare("UPDATE worker SET first_name=:first_name where dept=:dept ");
            $stmt-> bindparam(":user_id",$user_id);   
            //$stmt-> bindparam(":dept",$dept);
            $stmt->execute();
            
            return "Success";
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
?>
