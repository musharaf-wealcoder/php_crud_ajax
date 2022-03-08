<?php 

require_once ('db_connection.php');

$id = $_GET['user_id'];
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];

$sql = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = $id";

$result = mysqli_query($connect, $sql);

if($result){
  echo "data update successfull.";
}else{
  echo "data update failed.";
}
