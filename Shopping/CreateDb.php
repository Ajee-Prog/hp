<?php
class CreateDb{
    public $serverName;
    public $userName;
    public $password;
    public $dbName;
    public $tableName;
    public $conn;

    //class constructor
    public function __construct(
        $dbName, //= "newdb",
        $tableName, //= "productdb",
        $serverName, //= "localhost",
        $userName, //= "root",
        $password //= ""
    )
    {
        $this->$dbName =$dbName;
        $this->$tableName = $tableName;
        $this->$serverName = $serverName;
        $this->$userName = $userName;
        $this->$password = $password;

        //create connection
        $this->conn= mysqli_connect($serverName, $userName, $password);

        //check Connection
        if(!$this->conn){
            die("Connection failed :".mysqli_connect_error());
        }
        
            //  echo "connection was successful";
            //SQL query
            $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
            //execute query
            if(mysqli_query($this->conn, $sql)){

                $this->conn = mysqli_connect($serverName, $userName, $password, $dbName);

                //sql to create a new table
                $sql = "CREATE TABLE IF NOT EXISTS $tableName
                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(25) NOT NULL,
                product_price FLOAT,
                product_image VARCHAR(100));";

                if(!mysqli_query($this->conn, $sql)){
                    echo " Error creating table:".mysqli_error($this->conn);
                }
            }else{
                return false;
            }
        
        //Sql
        // {
        //     $sql = CREATE 
        // }
      
        // //query
        // $sql = "CREATE DATABASE IF NOT EXISTS $dbName ";
        // //Execute query
        // if(mysqli_query($this->conn,$sql)){
        //     $this->conn = mysqli_connect($serverName,$userName,$password,$dbName);

        //     //sql to create new table
        //     $sql = " CREATE TABLE IF NOT EXISTS $tableName
        //     "
        // }
    }
    //get Product from databsse
    public function getData(){

        // $getrt = $this->conn->prepare(" SELECT * FROM $this->tableName");
        // $getrt->execute();
        // $getrt->store_result();
        // $rows = $getrt->num_rows;
        // echo $rows;
        $getrt = " SELECT * FROM $this->tableName";

        $result = mysqli_query($this->conn, $getrt);

        if(mysqli_num_rows($result) > 0){

            
            // $rowCnt = mysqli_num_rows($result);
            return $result;
            $result->close();
        }else{ echo "0 record";}
    }

}

?>