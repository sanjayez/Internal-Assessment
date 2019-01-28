<?php

  function fun(& $a)
  {
    $rand_ele = $a[array_rand($a)];
    echo $rand_ele;
    $key = array_search($rand_ele,$a);
    unset($a[$key]);

  }

  $res = array("sanjay","Thanu","Zoha");
  fun($res);
  echo print_r($res);

  fun($res);
  echo print_r($res);

  
  
  
?>

   

