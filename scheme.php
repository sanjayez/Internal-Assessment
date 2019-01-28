<?php
    require('include/db.php');
    if(isset($_POST['submit'])){
        $code = mysqli_real_escape_string($conn,$_POST['code']);
        $sem = mysqli_real_escape_string($conn,$_POST['sem']);
        $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));

        $query = "INSERT INTO scheme (id, code, scheme, sem) VALUES ('','$code','$file','$sem')";
        if(mysqli_query($conn, $query))
        {
        echo "<script>alert('uploaded')</script>";
        }
        else{
            echo 'ERROR:'.mysqli_error($conn);
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
                <li ><a href="students.php">STUDENTS</a></li>
                    <li ><a href="subjects.php">SUBJECTS</a></li>
                    <li ><a href="scheme.php">SCHEME</a></li>
                    <li ><a href="ia.php">IA</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
        </nav>
    </header>

    <div class="box">
        <h2>UPLOAD SCHEME</h2>
        <form action="" method = "post" enctype="multipart/form-data"> 
            <div class="custom">
                    <input type="file" name="image" id="upload-image">
            </div>

            <div class="inputBox">
                    <input type="text" name="code" required="">
                    <label>subject code</label>
            </div>

             <div class="inputBox">
                    <input type="number" name="sem" required="">
                    <label>semester</label>
            </div>

            <input type="submit" name="submit" value="Submit">
            
        </form>
    </div>
</body>
</html>