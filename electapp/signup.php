<?php 
   //reqiureconnection
   require("includes/connection.php");
?>
<?php
//check if form is submitted
if(isset($_POST['btn_register'])){ //start
//from data
  $username = ucfirst(mysqli_escape_string($conn, $_POST['username']));
  $idnumber = ucfirst(mysqli_escape_string($conn, $_POST['idnumber']));
  $phonenumber = ucfirst(mysqli_escape_string($conn, $_POST['phonenumber']));
  $password = md5($_POST['password']);


$query ="INSERT INTO voters_tbl(username,idnumber,phonenumber,password)
VALUES ('{$username}', '{$idnumber}','{$phonenumber}', '{$password}')";

$result = mysqli_query($conn, $query) OR die(mysqli_error($conn));
header("Location: login.php?success=true");

} //end

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="opetu/style.css">
  <!-- favi icon -->
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
  
</head>

<body>
    <div class="container">
  <h1 class="animatable" id="title">REGISTER NOW</h1>
  <div class="animatable" id="message"></div>
  <div class="animatable" id="sun"></div>

  <div class="form animatable">
    <div class="type signin--type">
      <div class="signup--type">
        <span>ALREADY HAVE AN ACCOUNT?<br></span>
        <span class="link signup"><a href="login.php">LOG IN</a> | <a href="index.php">CANCEL</a></span>
      </div>

      <!-- form start -->
      <form name="register_form" method="POST" onsubmit="return validate_form()">
        
        <!-- Username -->
        <input type="text" name="username" class="text-box" placeholder="User Name">

        <!-- Id number -->
        <input type="number" name="idnumber" class="text-box" placeholder="Id Number">

        <!-- phone number -->
        <input type="number" name="phonenumber" class="text-box" placeholder="Phone Number">

        <!-- password -->
        <input type="password" name="password" class="text-box" placeholder="Password">

        <!-- cpassword -->
        <input type="password" name="cpassword" class="text-box" placeholder="Confirm Password">

        <!-- submit button -->
        <input type="submit" value="REGISTER" class="submit" name="btn_register">
      </form>
      <!-- form collapse -->
    </div>
  </div>
</div>


  <!-- script -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
  <script>
    function validate_form() {
      var username= document.register_form.username.value;
      var idnumber= document.register_form.idnumber.value;
      var phonenumber= document.register_form.phonenumber.value;
      var password= document.register_form.password.value;
      var cpassword= document.register_form.cpassword.value;

      if (username=="") {
        alert("PLEASE ENTER YOUR NAME");
        return false;
      }
      if (idnumber=="") {
        alert("PLEASE ENTER ID NUMBER");
        return false;
      }
      else if(phonenumber==""){
        alert("PLEASE ENTER YOUR PHONE NUMBER");
        return false;
      }
      else if(password==""){
        alert("PLEASE ENTER YOUR PASSWORD");
        return false;
      }
      else if(cpassword==""){
        alert("PLEASE CORNFIRM YOUR PASSWORD");
        return false;
      }
      else if(password!==cpassword){
        alert("ERROR..!! PASSWORD DO NOT MATCH..!!");
        return false;
      }
    }
  </script>

  <!-- script -->
    <script>
      window.onload = function(){
document.querySelector('.cont_principal').className= "cont_principal cont_error_active";  
  
} 
    </script>
  <!-- script collapse -->

</body>
</html>
