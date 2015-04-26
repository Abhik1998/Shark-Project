<php

  if($_SERVER['REQUEST_METHOD']=='POST'){

  $errors= array();
   if (empty($_POST['shower'])){
    $errors[]='Your forgot to enter shower min.';
   }else{
    $fn = trim($POST['shower']);
   }
if (empty($_POST['wash_teeth'])){
    $errors[]='Your forgot to enter shower washteeth.';
   }else{
    $ln = trim($POST['wash_teeth']);
   }
   if (empty($_POST['dishes'])){
    $errors[]='Your forgot to enter dishes min.';
   }else{
    $gn = trim($POST['dishes']);
   }
   if (empty($_POST['toilet'])){
    $errors[]='Your forgot to enter toilet min.';
   }else{
    $hn = trim($POST['toilet']);
   }
   if (empty($_POST['laundry'])){
    $errors[]='Your forgot to enter laundry min.';
   }else{
    $mn = trim($POST['laundry']);
   }

  }
  if (empty($errors)){

  DEFINE ('DB_USER','aztecaweb11');
  DEFINE ('DB_PASSWORD','soccer11!!');
  DEFINE ('DB_HOST','localhost');
  DEFINE ('DB_NAME','book');

  $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR 
  die('Could not connect to MySQL:' . mysqli_connect_error() );

  $sql = "INSERT INTO `book`.`book2` (`shower`, `washteeth`, `dishes`, `toilet`, `laundry`) VALUES ('', '', '', '', ''), ('5', '10', '40', '10', '80');";
  $r= @mysqli_query($dbc, $sql);



  mysqli_close($sql);
  exit();

  }
  }




  
  ?>

  <h1 align= "center">User Activities</h1>

  <form style= "text-align:center" action= "userinfo.php" method= "post">
  <p> Shower: <br><input type = "text" name= "shower" size="4" maxlength= "20"
  value ="<?php if (isset($_POST['shower'])) echo $_POST['$fn']; ?>" /> </p>
  <p> Wash Teeth:<br> <input type = "text" name= "wash_teeth" size="2" maxlength= "20"
  value ="<?php if (isset($_POST['wash_teeth'])) echo $_POST['$ln']; ?>" /> </p>
  <p> Dishes:<br> <input type = "text" name= "dishes" size="4" maxlength= "20"
  value ="<?php if (isset($_POST['dishes'])) echo $_POST['$gn']; ?>" /> </p>
  <p> Toilet:<br> <input type = "text" name= "toilet" size="2" maxlength= "20"
  value ="<?php if (isset($_POST['toilet'])) echo $_POST['$hn']; ?>" /> </p>
  <p> Laundry:<br> <input type = "text" name= "laundry" size="4" maxlength= "20"
  value ="<?php if (isset($_POST['laundry'])) echo $_POST['$mn']; ?>" /> </p>
  <p><input type= "submit" name= "submit" value= "Results"/></p>
  </form>






   
