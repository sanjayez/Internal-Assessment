<?php
  require('./include/db.php');
  
  $error="";
  if(isset($_POST['submit'])){
    if(empty($_POST['username'] || empty($_POST['password']))){
        $error="Username or password is invalid";
    }
    else{
      $username = $_POST['username'];
      $pass = $_POST['password'];
      $phone = $_POST['phone'];
      $sub = $_POST['sub'];

      $query =  mysqli_query($conn, "INSERT INTO users (id, username, password, phone, subject) VALUES (NULL, '$username', '$pass', '$phone','$sub')");

      $rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND username='$username'"));
      if($rows == 1){
        header("Location: users.php");
      }
      else{
        $error = "Registration Unsuccessful";
        echo "".$error;
      }

      mysqli_close($conn);
    }
  }
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IA management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
        <nav class="container">
                <ul>
                <li ><a href="users.php">FACULTY</a></li>
                    <li ><a href="timetable.php">TIME TABLE</a></li>
                    <li ><a href="add.php">ADD USER</a></li>
                    <li ><a href="res.php">RESULTS</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
        </nav>
    </header>
    <div class="box">
        <h2>ADD FACULTY</h2>
        <form action="" method="post">
            <div class="inputBox">
                    <input type="text" name="username" required="">
                    <label>Username</label>
            </div>

            <div class="inputBox">
                    <input type="password" name="password" required="">
                    <label>Password</label>
            </div>

            <div class="inputBox">
                    <input type="password" name="" required="">
                    <label>Re-enter Password</label>
            </div>

            <div class="inputBox">
                    <input type="text" name="sub" required="">
                    <label>subject</label>
            </div>

            <div class="inputBox">
                    <input type="text" name="phone" pattern="[1-9]{1}[0-9]{9}" required="">
                    <label>Phone</label>
            </div>

            <input type="submit" name="submit" value="ADD">
            
        </form>
    </div>
</body>
</html>