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
    <td>
    
      <!-- <button data-id="<?php //echo $row['id']; ?>" id="delete_user">Delete</button> -->
      <button onclick="delete_data(<?php echo $row['id']; ?>)">Delete</button>
      <button onclick="edit_data(<?php echo $row['id']; ?>)">Edit</button>
    </td>
  </tr>


  <?php 
}