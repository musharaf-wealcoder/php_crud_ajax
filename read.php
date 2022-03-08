<?php 
require_once ("db_connection.php");

$select = "SELECT * FROM users";
$result = mysqli_query($connect, $select);

while($row = mysqli_fetch_array($result)){ ?>


  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['password'] ?></td>
  </tr>


  <?php 
}