<?php
  require('./include/db.php');
  //ceate query  
  $query = 'SELECT * FROM users';
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
                <li ><a href="users.php">FACULTY</a></li>
                    <li ><a href="timetable.php">TIME TABLE</a></li>
                    <li ><a href="add.php">ADD USER</a></li>
                    <li ><a href="res.php">RESULTS</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
        </nav>
    </header>

    <div class="post">
    <h1 id="title">FACULTY</h1>
   
        <div class="users">
            <table>
                <tr>
                    <th>USERNAME</th>
                    <th>PHONE</th> 
                    <th>SUBJECT</th> 
                </tr>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?php echo $post['username'];?></td>
                    <td><?php echo $post['phone'];?></td> 
                    <td><?php echo $post['subject'];?></td> 
                    <td><a href="deluser.php?id=<?php echo $post['id']; ?>" class="delbutton">REMOVE</a></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    
    </div>

</body>
</html>