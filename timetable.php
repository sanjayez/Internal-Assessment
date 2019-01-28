<?php
   require('include/db.php');

   $one = 'date here';
   $two = 'date here';
   $three = 'date here';
   if(isset($_POST['submit'])){
       
        $sem3 = 3;
        $sem5 = 5;
        $sem7 = 7;

        
       $one = mysqli_real_escape_string($conn,$_POST['one']);
       $two = mysqli_real_escape_string($conn,$_POST['two']);
       $three = mysqli_real_escape_string($conn,$_POST['three']);
       

       $query = "SELECT name from subject WHERE subject.sem =".$sem3;
       $result = mysqli_query($conn, $query); 
       $sub1 = mysqli_fetch_all($result, MYSQLI_ASSOC); 
       $sub1 = array_values($sub1);
       
       $query = "SELECT name from subject WHERE subject.sem =".$sem5;
       $result = mysqli_query($conn, $query); 
       $sub2 = mysqli_fetch_all($result, MYSQLI_ASSOC); 
       $sub2 = array_values($sub2);

       $query = "SELECT name from subject WHERE subject.sem =".$sem7;
       $result = mysqli_query($conn, $query); 
       $sub3 = mysqli_fetch_all($result, MYSQLI_ASSOC); 
       $sub3 = array_values($sub3);

       
       function randsub(& $arr){
            $temp = array_rand($arr);
            $key = array_search($temp, $arr);
            unset($arr[$key]);
            return $temp;
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
        <h2>ENTER THREE DATES</h2>
        <form action="" method = "post">
            <div class="inputBox">
                    <input type="text" name="one" required="">
                    <label>First day</label>
            </div>

            <div class="inputBox">
                    <input type="text" name="two" required="">
                    <label>second day</label>
            </div>

            <div class="inputBox">
                    <input type="text" name="three" required="">
                    <label>third day</label>
            </div>

            <input type="submit" name="submit" value="Submit">
            
        </form>
    </div>

    <div >
        <table style="margin-top:500px; margin-bottom:20px;" >
        <tr>
                <th>SEM</th>
                <th>DATE</th> 
                <th>FORENOON(9:30 AM - 11:00 AM)</th>
                <th>AFTERNOON(2:00 PM - 3:30 PM)</th> 
                </tr>
                <tr>
                    <th rowspan='3'>3</th>
                    <td ><?php echo $one?></td>
                    <td ><?php echo "M3";?></td>
                    <td ><?php echo "ADE"?></td>
                </tr>
                <tr>
                    <td><?php echo $two?></td>
                    <td><?php echo "DS";?></td>
                    <td><?php echo "CO";?></td>
                </tr>
                <tr>
                    <td><?php echo $three?></td>
                    <td><?php echo "USP";?></td>
                    <td><?php echo "DMS";?></td>
                </tr>

                <tr>
                    <th rowspan='3'>5</th>
                    <td><?php echo $one?></td>
                    <td><?php echo "ME";?></td>
                    <td><?php echo "CN"?></td>
                </tr>
                <tr>
                    <td><?php echo $two?></td>
                    <td><?php echo "DBMS";?></td>
                    <td><?php echo "ATC";?></td>
                </tr>
                <tr>
                    <td><?php echo $three?></td>
                    <td><?php echo "Adv. Java";?></td>
                    <td><?php echo ".Net";?></td>
                </tr>

                <tr>
                    <th rowspan='3'>7</th>
                    <td><?php echo $one?></td>
                    <td><?php echo "Web";?></td>
                    <td><?php echo "ACA"?></td>
                </tr>
                <tr>
                    <td><?php echo $two?></td>
                    <td><?php echo "ML";?></td>
                    <td><?php echo "INS";?></td>
                </tr>
                <tr>
                    <td><?php echo $three?></td>
                    <td><?php echo "SAN";?></td>
                
                </tr>
        </table>
    </div>
</body>
</html>