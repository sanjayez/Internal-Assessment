<?php
    session_start();
    require('include/db.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['username'] || empty($_POST['password']))){
            $error="Username or password is invalid";
        }
        else{
          $username = $_POST['username'];
          $pass = $_POST['password'];
    
          $query =  mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND username='$username'");
    
          $rows = mysqli_num_rows($query);
          if($rows == 1 && ($username == 'admin')){
            header("Location: users.php");
          }
          else if($rows == 1)
          {
            $_SESSION['user'] = $_POST['username'];
            
            header("Location: students.php");
          }
          else{
            $error = "Username or password is invalid";            
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
    <title>IA management | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   

    <div class="box">
        <h2>LOGIN</h2>
        <form action="" method = "post">
            <div class="inputBox">
                    <input type="text" name="username" required="">
                    <label>Username</label>
            </div>

            <div class="inputBox">
                    <input type="password" name="password" required="">
                    <label>Password</label>
            </div>

            <input type="submit" name="submit" value="Submit">
            
        </form>
    </div>
</body>
</html>