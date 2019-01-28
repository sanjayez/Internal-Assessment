<?php
  require('./include/db.php');
  //ceate query  
  $query = 'SELECT * FROM ia1 WHERE sem = 7 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia17 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);

   
  $query = 'SELECT * FROM ia2 WHERE sem = 7 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia27 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);


  $query = 'SELECT * FROM ia3 WHERE sem = 7 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia37 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);

  $query = 'SELECT * FROM ia1 WHERE sem = 5 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia15 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);

  $query = 'SELECT * FROM ia2 WHERE sem = 5 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia25 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);

  $query = 'SELECT * FROM ia3 WHERE sem = 5 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia35 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);

  $query = 'SELECT * FROM ia1 WHERE sem = 3 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia13 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);

  $query = 'SELECT * FROM ia2 WHERE sem = 3 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia23 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);

  $query = 'SELECT * FROM ia3 WHERE sem = 3 order by sem';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $ia33 = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //free result
  mysqli_free_result($result);
  
  mysqli_close($conn);

  //ia17 ia27 ia37 
  //ia15 ia25 ia35
  //ia13 ia23 ia33 
  
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

    

    <div class="tab">
        <div class="but">
            <button class="tablinks" onclick="opentab(event, 'three')">3rd Sem</button>
            <button class="tablinks" onclick="opentab(event, 'five')">5th Sem</button>
            <button class="tablinks" onclick="opentab(event, 'seven')">7th Sem</button>
        </div>
  
    </div>

    <!-- Tab content -->
    <div id="three" class="tabcontent">
    
    <h3>3rd Sem Internal 1</h3>
    <div class="users">
            <table>
                <tr>
                    <th>NAME</th> 
                    <th>15CS31</th>
                    <th>15CS32</th>
                    <th>15CS33</th>
                    <th>15CS34</th>
                    <th>15CS35</th>
                    <th>15CS36</th>

                </tr>
                <?php foreach($ia13 as $post): ?>
                <tr>
                    <td><?php echo $post['name'];?></td>
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

        <h3>3rd Sem Internal 2</h3>
        <div class="users">
                <table>
                    <tr>
                        <th>NAME</th> 
                        <th>15CS31</th>
                        <th>15CS32</th>
                        <th>15CS33</th>
                        <th>15CS34</th>
                        <th>15CS35</th>
                        <th>15CS36</th>

                    </tr>
                    <?php foreach($ia23 as $post): ?>
                    <tr>
                        <td><?php echo $post['name'];?></td>
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

            <h3>3rd Sem Internal 3</h3>
        <div class="users">
                <table>
                    <tr>
                        <th>NAME</th> 
                        <th>15CS31</th>
                        <th>15CS32</th>
                        <th>15CS33</th>
                        <th>15CS34</th>
                        <th>15CS35</th>
                        <th>15CS36</th>

                    </tr>
                    <?php foreach($ia33 as $post): ?>
                    <tr>
                        <td><?php echo $post['name'];?></td>
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

    <div id="five" class="tabcontent">
    <h3>5th Sem Internal 1</h3>
    <div class="users">
            <table>
                <tr>
                    <th>NAME</th> 
                    <th>15CS51</th>
                    <th>15CS52</th>
                    <th>15CS53</th>
                    <th>15CS54</th>
                    <th>15CS55</th>
                    <th>15CS56</th>

                </tr>
                <?php foreach($ia15 as $post): ?>
                <tr>
                    <td><?php echo $post['name'];?></td>
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

        <h3>5th Sem Internal 2</h3>
    <div class="users">
            <table>
                <tr>
                    <th>NAME</th> 
                    <th>15CS51</th>
                    <th>15CS52</th>
                    <th>15CS53</th>
                    <th>15CS54</th>
                    <th>15CS55</th>
                    <th>15CS56</th>

                </tr>
                <?php foreach($ia25 as $post): ?>
                <tr>
                    <td><?php echo $post['name'];?></td>
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

        <h3>5th Sem Internal 3</h3>
    <div class="users">
            <table>
                <tr>
                    <th>NAME</th> 
                    <th>15CS51</th>
                    <th>15CS52</th>
                    <th>15CS53</th>
                    <th>15CS54</th>
                    <th>15CS55</th>
                    <th>15CS56</th>

                </tr>
                <?php foreach($ia35 as $post): ?>
                <tr>
                    <td><?php echo $post['name'];?></td>
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

    <div id="seven" class="tabcontent">
    <h3>7th Sem Internal 1</h3>
    <div class="users">
            <table>
                <tr>
                    <th>NAME</th> 
                    <th>15CS71</th>
                    <th>15CS72</th>
                    <th>15CS73</th>
                    <th>15CS74</th>
                    <th>15CS75</th>
                    

                </tr>
                <?php foreach($ia17 as $post): ?>
                <tr>
                    <td ><?php echo $post['name'];?></td>
                    <td><?php echo $post['one'];?></td>
                    <td><?php echo $post['two'];?></td>
                    <td><?php echo $post['three'];?></td>
                    <td><?php echo $post['four'];?></td>
                    <td><?php echo $post['five'];?></td>
                    
                </tr>
                <?php endforeach;?>
            </table>
        </div>

        <h3>7th Sem Internal 2</h3>
    <div class="users">
            <table>
                <tr>
                    <th>NAME</th> 
                    <th>15CS71</th>
                    <th>15CS72</th>
                    <th>15CS73</th>
                    <th>15CS74</th>
                    <th>15CS75</th>
                    

                </tr>
                <?php foreach($ia27 as $post): ?>
                <tr>
                    <td ><?php echo $post['name'];?></td>
                    <td><?php echo $post['one'];?></td>
                    <td><?php echo $post['two'];?></td>
                    <td><?php echo $post['three'];?></td>
                    <td><?php echo $post['four'];?></td>
                    <td><?php echo $post['five'];?></td>
                    
                </tr>
                <?php endforeach;?>
            </table>
        </div>

        <h3>7th Sem Internal 3</h3>
    <div class="users">
            <table>
                <tr>
                    <th>NAME</th> 
                    <th>15CS71</th>
                    <th>15CS72</th>
                    <th>15CS73</th>
                    <th>15CS74</th>
                    <th>15CS75</th>
                    

                </tr>
                <?php foreach($ia37 as $post): ?>
                <tr>
                    <td ><?php echo $post['name'];?></td>
                    <td><?php echo $post['one'];?></td>
                    <td><?php echo $post['two'];?></td>
                    <td><?php echo $post['three'];?></td>
                    <td><?php echo $post['four'];?></td>
                    <td><?php echo $post['five'];?></td>
                    
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    
    </div>

    <script>
        function opentab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
    </script>

</body>
</html>