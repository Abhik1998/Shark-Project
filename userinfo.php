
<?php





  DEFINE ('DB_USER','aztecaweb11');
  DEFINE ('DB_PASSWORD','soccer11!!');
  DEFINE ('DB_HOST','localhost');
  DEFINE ('DB_NAME','webusers');

  $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR 
  die('Could not connect to MySQL:' . mysqli_connect_error() );

  $q= "INSERT INTO users (shower, wash_teeth, dishes, toilet, laundary)  VALUES ('$sh', '$wa','$di', '$to', '$la'), NOW())";
  $r= @mysqli_query($dbc, $q);


  mysqli_close($dbc);

  exit (); 

  ?>

  <h1>User Activities</h1>

  <form action= "userinfo.php" method= "post">
  <p> Shower: <input type = "text" name= "shower" size="15" maxlength= "20"
  value ="<?php if (isset($_POST['shower'])) echo $_POST['shower']; ?>" /> </p>
  <p> Wash Teeth: <input type = "text" name= "washteeth" size="15" maxlength= "20"
  value ="<?php if (isset($_POST['wash_teeth'])) echo $_POST['wash_teeth']; ?>" /> </p>
  <p> Dishes: <input type = "text" name= "dishes" size="15" maxlength= "20"
  value ="<?php if (isset($_POST['dishes'])) echo $_POST['dishes']; ?>" /> </p>
  <p> Toilet: <input type = "text" name= "toilet" size="15" maxlength= "20"
  value ="<?php if (isset($_POST['toilet'])) echo $_POST['toilet']; ?>" /> </p>
  <p> Laundary: <input type = "text" name= "laundary" size="15" maxlength= "20"
  value ="<?php if (isset($_POST['laundary'])) echo $_POST['laundary']; ?>" /> </p>
  <p><input type= "submit" name= "submit" value= "Results"/></p>
  </form>





   
