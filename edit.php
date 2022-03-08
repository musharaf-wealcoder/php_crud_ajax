<?php
  require_once ('db_connection.php');

  $user_id = $_GET['user_id']; 

  $sql = "SELECT * FROM users WHERE id = $user_id";
  $result = mysqli_query($connect, $sql);

  $row = mysqli_fetch_array($result);

?>

  <section class="modal-area">
    <div class="modal-bg-edit">
      <div class="modal">
        <div id="user_form">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter your password">
          </div>
          <div class="form-group">
            <button onclick="update_data(<?php echo $row['id']; ?>)"> Update</button>
          </div>

        </div>
      </div>
    </div>
  </section>
