<?php
    require('include/db.php');
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $sem = mysqli_real_escape_string($conn,$_POST['sem']);
        $one = mysqli_real_escape_string($conn,$_POST['one']);
        $two = mysqli_real_escape_string($conn,$_POST['two']);
        $three = mysqli_real_escape_string($conn,$_POST['three']);
        $four = mysqli_real_escape_string($conn,$_POST['four']);
        $five = mysqli_real_escape_string($conn,$_POST['five']);
        $six = mysqli_real_escape_string($conn,$_POST['six']);

        $query = "INSERT INTO ia1 (id, name, sem, one, two, three, four, five, six) VALUES ('','$name','$sem','$one','$two','$three','$four','$five','$six')";
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

    
    

    <div class="box" id="down">
        <h2>Enter Internal marks</h2>
        <form action="" method = "post" enctype="multipart/form-data"> 
            <div class="inputBox">
                    <input type="text" name="name" required="">
                    <label>student name</label>
            </div>
            <div class="inputBox">
                    <input type="number" name="sem" required="">
                    <label>sem</label>
            </div>
            
            <div class="inputBox">
                    <input type="number" name="one" >
                    <label>subject one</label>
            </div>

             <div class="inputBox">
                    <input type="number" name="two" >
                    <label>subject two</label>
            </div>

             <div class="inputBox">
                    <input type="number" name="three" >
                    <label>subject three</label>
            </div>

             <div class="inputBox">
                    <input type="number" name="four" >
                    <label>subject four</label>
            </div>

            <div class="inputBox">
                    <input type="number" name="five" >
                    <label>subject five</label>
            </div>

            <div class="inputBox">
                    <input type="number" name="six" >
                    <label>subject six</label>
            </div>

            <input type="submit" name="submit" value="Submit">
            
        </form>
    </div>
</body>
</html>