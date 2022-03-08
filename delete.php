<?php 
require_once ("db_connection.php");
$user_id = $_POST['user_id'];

$delete_data = "DELETE FROM `users` WHERE id = $user_id";
echo $delete_data;

$result = mysqli_query($connect, $delete_data);

if($result){
  echo "data delete successfull.";
}else{
  echo "data delete failed.";
}