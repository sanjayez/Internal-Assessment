<?php
  require('./include/db.php');
  //ceate query  
  $query = 'SELECT * FROM scheme';
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
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php foreach($posts as $post): ?>
                <tr>
                    <td><?php echo $post['sem'];?></td>
                    <td><?php echo $post['code'];?></td> 
                    <td><a href="<?php echo $post['scheme']; ?>" class="delbutton">DOWNLOAD</a></td>
                </tr>
                <?php endforeach;?>
</body>
</html>