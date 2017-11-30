<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Vote</title>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>

  <!-- favi icon -->
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">

  <link rel="stylesheet" href="css2/style.css">
<style>
  @-webkit-keyframes bars {
  from {
    -webkit-transform: scaleY(0);
            transform: scaleY(0);
  }
  to {
    -webkit-transform: scaleY(1);
            transform: scaleY(1);
  }
}
@keyframes bars {
  from {
    -webkit-transform: scaleY(0);
            transform: scaleY(0);
  }
  to {
    -webkit-transform: scaleY(1);
            transform: scaleY(1);
  }
}
* {
  box-sizing: border-box;
  margin: 0;
}

body {
  background-image: -webkit-linear-gradient(20deg, rgba(37, 38, 39, 0.9) 40%, rgba(27, 28, 29, 0.9) 42%, #00d1fc 42%);
  background-image: linear-gradient(70deg, rgba(37, 38, 39, 0.9) 40%, rgba(27, 28, 29, 0.9) 42%, #00d1fc 42%);
  background-repeat: no-repeat;
  min-height: 100vh;
  color: #00d1fc;
  font-family: Montserrat;
  font-size: 1rem;
  line-height: 1.5;
  padding: 50px;
}

a {
  text-decoration: none;
  font-size: 0.9rem;
}
a:link, a:visited {
  color: #00d1fc;
}

ul {
  list-style-type: none;
  padding: 0;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: normal;
  margin: 0;
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
.smalltext{
  padding-top: 5px;
  font-size: 16px;
}
input.submit {
  font-size: 100%;
  line-height: 16px;
  display: block;
  width: 50%;
  height: 42px;
  cursor: pointer;
  vertical-align: middle;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: white;
  border: 0 solid rgba(0, 0, 0, 0.8);
  background: #00d1fc;
  margin-top: 0px;
  box-shadow: 0 2px 0 #F5F5F5, 0 6px 0 #17BEBB;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
}

input.submit:hover {
  background: #26547C;
  box-shadow: 0 2px 0 #F5F5F5, 0 6px 0 #26547C, 0 8px 0 #F5F5F5, 0 11px 0 #26547C;
  margin-top: -2px;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

input.submit:active {
  -webkit-transition: all 0.1s;
  transition: all 0.1s;
  margin-top: 15px;
  box-shadow: 0 0px 0 #F5F5F5, 0 3px 0 #26547C, 0 0px 0 #F5F5F5, 0 6px 0 #26547C;
}

input:focus {
  outline: none;
}

.submit-wrap {
  position: absolute;
  bottom: 0;
  width: 100%;
}
</style>
  
</head>

<body>
  <!-- nav -->
  <center>
    <h1 style="color: #fff">⋆ TIME TO VOTE ⋆</h1>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="home.php">Home</a>
      <a href="candidates.php">Candidates</a>
      <a href="vote.php">Vote</a>
      <a href="results.php">Results</a>
      <a href="setting.php">Settings</a>
      <a href="help.php">Help</a>
      <a href="logout.php">Log Out</a>
    </div>

    <span style="font-size:30px;cursor:pointer; margin: 10% 0% 0% 0%;color: #fff; position: relative; right: 10px;" onclick="openNav()">&#9776;</span>

    <script>
    function openNav() {
       document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
       document.getElementById("mySidenav").style.width = "0";
    }
    </script>
  </center>
  <!-- nav collapse -->

  <!-- candidates -->
  <div class="container-fluid">
  <div class="container" style="background: #fff;">
    <form action="results.php">
    <div class="container-response">
      <div class="choice-container text-center">
        <div class="choice one">
          <div class="round">
            <i class="fa fa-check one" aria-hidden="true"></i>
          </div>
          <i class="fa fa-frown-o notation" aria-hidden="true"></i>
         <p>RAILA<br /> ODINGA</p> 
        </div>
        
        
        <div class="choice two">
          <div class="round">
            <i class="fa fa-check two" aria-hidden="true"></i>
          </div>
          <i class="fa fa-meh-o notation" aria-hidden="true"></i>
          <p>Peu <br /> satisfait</p>
        </div>
        
        <div class="choice two">
          <div class="round">
            <i class="fa fa-check two" aria-hidden="true"></i>
          </div>
          <i class="fa fa-meh-o notation" aria-hidden="true"></i>
          <p>Peu <br /> satisfait</p>
        </div>

        <div class="choice two">
          <div class="round">
            <i class="fa fa-check two" aria-hidden="true"></i>
          </div>
          <i class="fa fa-meh-o notation" aria-hidden="true"></i>
          <p>Peu <br /> satisfait</p>
        </div>

        <div class="choice two">
          <div class="round">
            <i class="fa fa-check two" aria-hidden="true"></i>
          </div>
          <i class="fa fa-meh-o notation" aria-hidden="true"></i>
          <p>Peu <br /> satisfait</p>
        </div>

        <div class="choice two">
          <div class="round">
            <i class="fa fa-check two" aria-hidden="true"></i>
          </div>
          <i class="fa fa-meh-o notation" aria-hidden="true"></i>
          <p>Peu <br /> satisfait</p>
        </div>

        <div class="choice two">
          <div class="round">
            <i class="fa fa-check two" aria-hidden="true"></i>
          </div>
          <i class="fa fa-meh-o notation" aria-hidden="true"></i>
          <p>Peu <br /> satisfait</p>
        </div>

        <div class="choice two">
          <div class="round">
            <i class="fa fa-check two" aria-hidden="true"></i>
          </div>
          <i class="fa fa-meh-o notation" aria-hidden="true"></i>
          <p>Peu <br /> satisfait</p>
        </div>
        
        <div class="choice three">
          <div class="round">
            <i class="fa fa-check three" aria-hidden="true"></i>
          </div>
          <i class="fa fa-smile-o notation" aria-hidden="true"></i>
          <p>Satisfait <br /> &nbsp;</p>
        </div>
        
        
        <div class="choice four">
          <div class="round">
            <i class="fa fa-check four" aria-hidden="true"></i>
          </div>
          <i class="fa fa-smile-o notation" aria-hidden="true"></i>
          <p>Très <br />satisfait</p>
        </div>
      </div>
      <center>
        <!-- btn -->
        <input type="submit" name="vote_btn" class="submit" value="VOTE" onsubmit="return confirm_vote()">
      </center>
    </div>
    </form>
  </div>
</div>

<!-- script -->
  <script src="https://use.fontawesome.com/4afc97d228.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script  src="js2/index.js"></script>

</body>
</html>
