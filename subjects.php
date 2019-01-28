<?php
    session_start();
    $user = $_SESSION['user'];
  require('./include/db.php');
  //ceate query  
  $query = "SELECT * FROM subject WHERE handled='$user' ORDER BY code";
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result
  mysqli_free_result($result);

  mysqli_close($conn);
  
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
                    <li ><a href="students.php">STUDENTS</a></li>
                    <li ><a href="subjects.php">SUBJECTS</a></li>
                    <li ><a href="scheme.php">SCHEME</a></li>
                    <li ><a href="ia.php">IA</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
        </nav>
    </header>

    <div class="post">
    <h1 id="title">SUBJECTS</h1>
   
        <div class="users">
            <table>
                <tr>
                    <th>NAME</th>
                    <th>CODE</th> 
                    <th>SEMESTER</th> 
                   
                </tr>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?php echo $post['name'];?></td>
                    <td><?php echo $post['code'];?></td> 
                    <td><?php echo $post['sem'];?></td> 
                    
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    
    </div>

</body>
</html>