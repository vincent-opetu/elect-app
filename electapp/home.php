<?php 
        //require connection
        require("includes/connection.php");

        //require session
        require("includes/session.php");

        //call confirm logged in 
        confirm_logged_in();


       $session_idnumber = $_SESSION['idnumber'];

        //fetch 
         $query = "SELECT * FROM voters_tbl WHERE idnumber = '$session_idnumber'";
         $result = mysqli_query($conn, $query)  OR die(mysqli_error($conn));

         while($row = mysqli_fetch_array($result)){
               $session_userid = $row['id'];
               $session_username = $row['username'];
               $session_idnumber = $row['idnumber'];

         }
     
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ELECT APP - Home</title>
  <!-- favi icon -->
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
  <link rel="stylesheet" href="opetu/style.css">

</head>

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
  font-family: cambria;
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
    text-align: center;
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

h3{
  color: #00d1fc;
  margin: 50px 0px 20px;
}

#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display: inline-block;
  font-weight: 100;
  text-align: center;
  font-size: 30px;
}

#clockdiv > div{
  padding: 10px;
  border-radius: 3px;
  background: grey;
  display: inline-block;
}

#clockdiv div > span{
  padding: 15px;
  border-radius: 3px;
  background: #00d1fc;
  display: inline-block;
}

.smalltext{
  padding-top: 5px;
  font-size: 16px;
}
</style>
<body>

<div class="wrapper">
  
  <div class="flex">
    <div class="info">
      <div class="info__time">
        <?php
          echo '<h2>WELCOME <br> '.$session_username.' <br> Id Number: '.$session_idnumber.'</h2>';
        ?>
      </div>
    </div>
    <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="candidates.php">Candidates</a>
               <a href="vote.php">Vote</a>
               <a href="results.php">Results</a>
               <a href="setting.php">Settings</a>
               <a href="help.php">Help</a>
               <a href="logout.php">Log Out</a>
             </div>

             <span style="font-size:30px;cursor:pointer; margin: 6% 15% 0% 0%; position: relative; right: 10px;" onclick="openNav()">&#9776;</span>

             <script>
             function openNav() {
                 document.getElementById("mySidenav").style.width = "250px";
             }

             function closeNav() {
                 document.getElementById("mySidenav").style.width = "0";
             }
             </script>
    <div class="menu">
      <ul class="menu__list">
        <li class="menu__item menu__item--active">ELECT</li>
      </ul>
      <div class="flex">
        <div class="menu-border  one-half"></div>
      </div>
    </div>
  </div>
  
  <div class="statistics">
    <div class="consumption-panel">
      <div class="flex flex--justify-between">
        <p>
          Total Registered Voters       
        </p>
      </div>
      <h1 class="consumption">19,786,556</h1>
      <svg id="visualisation" width="600" height="100"></svg>
      
      <h2 class="title">⋆ STAY IN PEACE ⋆</h2>
      
    </div>
    
    <div class="flex-1">
      <h3>Countdown Clock</h3>
        <div id="clockdiv">
          <div>
            <span class="days"></span>
            <div class="smalltext">Days</div>
          </div>
          <div>
            <span class="hours"></span>
            <div class="smalltext">Hours</div>
          </div>
          <div>
            <span class="minutes"></span>
            <div class="smalltext">Minutes</div>
          </div>
          <div>
            <span class="seconds"></span>
            <div class="smalltext">Seconds</div>
          </div>
          <br>
        </div>

      
    </div> <!-- /.right-column -->
  </div> <!-- /.statistics -->
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>

    <script  src="js/index.js"></script>
    <script>
      function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.now();
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
// count down timer:
var deadline = new Date(Date.now() + 1 * 30 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
    </script>
</body>
</html>