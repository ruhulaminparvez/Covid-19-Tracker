<?php

$link = mysqli_connect("localhost", "root", "root", "dbcorona");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($link, $_REQUEST['username']);
  $email = mysqli_real_escape_string($link, $_REQUEST['email']);
  $number = mysqli_real_escape_string($link, $_REQUEST['number']);
  $stymtoms = ($_REQUEST['coronasym']);
  $desc = mysqli_real_escape_string($link, $_REQUEST['desc']);

  $chk = "";

  foreach($stymtoms as $chk1){
    $chk .= $chk1.",";
  }
}

// Attempt insert query execution
$sql = "INSERT INTO `casecorona`(`username`, `email`, `mobile`, `stymtoms`, `description`) VALUES ('$name', '$email', '$number', '$chk', '$desc')";
if(mysqli_query($link, $sql)){
  ?>
  <script>
      alert("Your info store successfully. We will contract you soon!");
  </script>
<?php
}else{
  ?>
  <script>
      alert("Failed to send data.Try Again!");
  </script>
  <?php
}

// Close connection
mysqli_close($link);


?>