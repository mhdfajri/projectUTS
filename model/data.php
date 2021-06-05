<?php 
class data{

    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "projectuts";
    var $con;
    function __construct(){
        $this->con= mysqli_connect($this->host,$this->username,$this->password,$this->db);
        mysqli_select_db($this->con,$this->db);
    }
    function viewdatafilm(){
        $query = mysqli_query($this->con,"SELECT * FROM film");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;
            
        }
        return $see;
    }
    function insertfilm($title,$sinopsis,$file_name,$iframe){
        // $con =mysqli_connect('localhost','root','','projectuts');
        mysqli_query($this->con,"IxSERT INTO film VALUES ('','$file_name','$title','$sinopsis','$iframe')");
     
    }
    function viewupdatefilm($title){
        $query =mysqli_query($this->con,"SELECT * FROM film WHERE title = '$title'");
        while ($row = mysqli_fetch_array($query)){
            $output[] = $row;
        }
        return $output;
        
    }
    function editfilm($title,$sinopsis,$file_name,$no,$iframe){
        mysqli_query($this->con,"UPDATE film SET title = '$title' ,sinopsis = '$sinopsis',image = '$file_name',iframe = '$iframe' WHERE no = '$no'");

    }
    function deletefilm($title){
        mysqli_query($this->con,"DELETE FROM film WHERE title = '$title'");
    }
    function viewuser(){
        $query = mysqli_query($this->con,"SELECT * FROM user");
        while($row = mysqli_fetch_array($query)){
            $hasil[]=$row;
        }
        return $hasil;
    }
    function adduser($f_name,$l_name,$email,$password,$username){
        mysqli_query($this->con,"INSERT INTO user VALUES ('','$f_name','$l_name','$username','$email','$password')");

    }
    function deleteuser($no){
        mysqli_query($this->con,"DELETE FROM user WHERE no = '$no'");
    }
    function selectuser($no){
        $query = mysqli_query($this->con,"SELECT * from user where no = '$no'");
        while($row = mysqli_fetch_array($query)){
            $data[]= $row;
        }
        return $data;
    }
    function updateuser($no,$first_name,$last_name,$username,$email,$password){
        mysqli_query($this->con,"UPDATE user SET first_name ='$first_name',last_name ='$last_name',username ='$username',email ='$email',password = '$password' WHERE no = '$no'");
        
    }
}

?>