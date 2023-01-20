<?php

$link = mysqli_connect("localhost", "root", "", "db_corona");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($link, $_REQUEST['username']);
  $email = mysqli_real_escape_string($link, $_REQUEST['email']);
  $number = mysqli_real_escape_string($link, $_REQUEST['number']);
  $description = mysqli_real_escape_string($link, $_REQUEST['description']);
  $syndromes = $_POST['coronasym'];

  $chk = "";

  foreach($syndromes as $chk1){
    $chk .= $chk1.",";
  }
}


// Attempt insert query execution
$sql = "INSERT INTO `case-corona`(`username`, `email`, `number`, `syndromes`, `description`) VALUES ('$username', '$email', '$number', '$chk', '$description')";
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