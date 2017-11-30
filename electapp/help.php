<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HELP</title>

    <!-- favi icon -->
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
     body{
        background-image: url(images/question-mark.jpg);
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
     }

    .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #26547C;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #fff;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #00d1fc;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

</style>
   
  </head>
  <body>
    <center>
    <h1 style="color: #fff;">⋆ GET HELP ⋆</h1>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="home.php">Home</a>
      <a href="candidates.php">Candidates</a>
      <a href="vote.php">Vote</a>
      <a href="view.php">Results</a>
      <a href="setting.php">Settings</a>
      <a href="help.php">Help</a>
      <a href="logout.php">Log Out</a>
    </div>

    <span style="font-size:30px;cursor:pointer; margin-top: 2%; color: #fff;" onclick="openNav()">&#9776;</span>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
  </center>

  </body>
</html>