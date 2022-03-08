<?php 

$connect = mysqli_connect('localhost','root','','php_ajax_crud');

if(!$connect){
  echo "database connection Failed.";
}