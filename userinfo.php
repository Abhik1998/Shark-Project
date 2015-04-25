<php

  DEFINE ('DB_USER','aztecaweb11');
  DEFINE ('DB_PASSWORD','soccer11!!');
  DEFINE ('DB_HOST','localhost');
  DEFINE ('DB_NAME','Webusers');

  $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR 
  die('Could not connect to MySQL:' . mysqli_connect_error() );

  $q= "INSERT INTO users (shower, wash_teeth, dishes, toilet, laundry), NOW())";
  $r= @mysqli_query($dbc, $q);

  mysqli_close($dbc);
  exit();




  
  ?>

  <h1 align= "center">User Activities</h1>

  <form style= "text-align:center" action= "userinfo.php" method= "post">
  <p> Shower: <br><input type = "text" name= "shower" size="4" maxlength= "20"
  value ="<?php if (isset($_POST['shower'])) echo $_POST['shower']; ?>" /> </p>
  <p> Wash Teeth:<br> <input type = "text" name= "wash_teeth" size="2" maxlength= "20"
  value ="<?php if (isset($_POST['wash_teeth'])) echo $_POST['wash_teeth']; ?>" /> </p>
  <p> Dishes:<br> <input type = "text" name= "dishes" size="4" maxlength= "20"
  value ="<?php if (isset($_POST['dishes'])) echo $_POST['dishes']; ?>" /> </p>
  <p> Toilet:<br> <input type = "text" name= "toilet" size="2" maxlength= "20"
  value ="<?php if (isset($_POST['toilet'])) echo $_POST['toilet']; ?>" /> </p>
  <p> Laundry:<br> <input type = "text" name= "laundry" size="4" maxlength= "20"
  value ="<?php if (isset($_POST['laundry'])) echo $_POST['laundry']; ?>" /> </p>
  <p><input type= "submit" name= "submit" value= "Results"/></p>
  </form>






   
