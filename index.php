<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <section>
    <div class="container">
      <div class="header">
        <h1 class="modal-btn">Add User</h1>
      </div>
      <div class="user-table">
        <table>
          <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
          </thead>
          <tbody id="tbody">
            
          </tbody>
        </table>

      </div>
    </div>
  </section>

  <section class="modal-area">

    <div class="modal-bg">
      <div class="modal">
        <span class="modal-close">X</span>
        <div id="user_form">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
          </div>
          <div class="form-group">
            <button class="submit_btn">Submit</button>
          </div>

        </div>
      </div>
    </div>
  </section>



  <script src="jquery.min.js"></script>
  <script src="main.js"></script>
</body>

</html>