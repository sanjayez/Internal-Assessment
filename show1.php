<?php
  require('./include/db.php');
  //ceate query  
  $query = 'SELECT * FROM ia1 order by sem';
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
    <title>TASATA</title>
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
    <h1 id="title">INTERNAL MARKS 1</h1>
   
        <div class="users">
            <table>
                <tr>
                    <th>NAME</th>
                    <th>SEM</th> 
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>

                </tr>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?php echo $post['name'];?></td>
                    <td><?php echo $post['sem'];?></td> 
                    <td><?php echo $post['one'];?></td>
                    <td><?php echo $post['two'];?></td>
                    <td><?php echo $post['three'];?></td>
                    <td><?php echo $post['four'];?></td>
                    <td><?php echo $post['five'];?></td>
                    <td><?php echo $post['six'];?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    
    </div>

</body>
</html>