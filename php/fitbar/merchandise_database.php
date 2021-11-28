<?php
    class Create_db{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $conn; 

        //class constructor
        public function __construct(
            $dbname="newdb",
            $tablename="productdb",
            $servername="localhost",
            $username="root",
            $password=""

        ){
            $this->severname=$servername;
            $this->username=$username;
            $this->tablename=$tablename;
            $this->password=$password;
            $this->dbname=$dbname;

            //create connection
            $this->conn=mysqli_connect($servername,$username,$password);

            //check connection
            if(!$this->conn){
                die("connection failed : ".mysqli_connect_error());
            }

            //query
            $sql="CREATE DATABASE IF NOT EXISTS $dbname";
            //execute query
            if(mysqli_query($this->conn,$sql)){
                $this->conn=mysqli_connect($servername, $username ,$password, $dbname);

                //sql to create table
                $sql="CREATE TABLE IF NOT EXISTS $tablename
                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                priduct_name VARCHAR(25) NOT NULL ,
                product_price FLOAT ,
                product_price2 FLOAT ,
                product_image VARCHAR(100),
                rating INT(5),
                product_info VARCHAR(100)
                );";

                if(!mysqli_query($this->conn,$sql)){
                    echo "Error creating table :".mysqli_error($this->conn);

                }
            }else{
               return false; 
            }

        }
        //get product from database
        public function getdata(){
            $sql="SELECT * FROM $this->tablename";
            $result=mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }
        }
    }

?>