<?php 
        //require connection
        require("includes/connection.php");

        //require session
        require("includes/session.php");
?>
<?php

     //check whether form has been submitted
     if (isset($_POST['btn_login'])) {//
      //form data
       $idnumber =  mysqli_escape_string($conn, $_POST['idnumber']);
       $password = md5($_POST['password']);

      $query = "SELECT * FROM voters_tbl WHERE idnumber = '$idnumber' AND password = '$password' ";
      $result = mysqli_query($conn, $query)  OR die(mysqli_error($conn));

       $row = mysqli_fetch_array($result);

       if ($row > 0 ){
          
              //user exist
               $_SESSION['idnumber']  = $idnumber;
               header("Location: home.php");
      }
      else{
        //no user exists
        header("Location: login.php?error_login=true");
      }



     }//

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="opetu/style.css">
  <!-- favi icon -->
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
  
</head>

<body>
  <div class="container">
  <h1 class="animatable" id="title">LOG IN</h1>
  <div class="animatable" id="message"></div>
  <div class="animatable" id="sun"></div>

  <div class="form animatable">
    <div class="content signin--content">
      <div class="sign--type">
        <span>Don't have an account?<br></span>
        <span class="link signup"><a href="signup.php">SIGN UP</a> | <a href="index.php">CANCEL</a></span>
      </div>
      <center>
    
        <?php if(isset($_GET['success'])){// ?>
          <div class="alert alert-success">
           <p>REGISTERED SUCCESSFULLY.. <br> LOGIN TO CONTINUE</p>
         </div>
        <?php }// ?>

        <?php if(isset($_GET['error_login'])){// ?> 
          <div class="alert alert-danger">
           ACCESS DENIED <br> PLEASE FILL IN THE FORM TO<br> CONTINUE..
          </div>
        <?php }// ?>
      </center>

      <!-- form start -->
      <form action="login.php" method="POST">
        <div class="spacer"></div>

        <!-- idnumber -->
        <input type="number" name="idnumber" class="text-box" placeholder="Id Number">

        <!-- password -->
        <input type="password" name="password" class="text-box" placeholder="Password">

        <!-- submit button -->
        <input type="submit" value="Sign in" class="submit" name="btn_login">
      </form>
      <!-- form collapse -->

    </div>
  </div>
</div>
  
  <!-- script -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>

</body>
</html>
