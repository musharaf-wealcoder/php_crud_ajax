<?php 

require_once ("db_connection.php");


  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $sql = "INSERT INTO users(name,email,password)VALUES('$name','$email','$pass')";

  $result = mysqli_query($connect,$sql);

  if($result){
    echo "data insert successfully.";
  }else{
    echo "data insert failed.";
  }
