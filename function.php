<?php


define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'crudApplication');

class Db_conn{


    function __construct(){
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->db = $con;
        //check error connection

        if(mysqli_connect_errno()){
            echo "connection failed  " .mysqli_connect_error();
        }
    }

    public function insert($name, $email, $password, $passwordRepeat){
        $result = mysqli_query($this->db, "insert into users(name, email, password, passwordRepeat");
        return $result;
    }

    public function fetchdata(){
        $result = mysqli_query($this->db, "select * from users");
        return $result;
    }

    public function fetchonerecord($id){
        $oneResult = mysqli_query()
    }
    


}