<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidates</title>

    <!-- Bootstrap -->
    <link href="css-candi/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css-candi/style.css">
    <!-- favi icon -->
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
  <style>
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

  </style>
    
  </head>
  <body>
    <section class="web_disigner">
<div class="web_disigner_contain">
  <center>
    <h1  style=" display:inline;">REGISTERED CANDIDATES</h1>
    <br>
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

    <span style="font-size:30px;cursor:pointer; margin: 6% 0% 0% 0%; position: relative; right: 10px;" onclick="openNav()">&#9776;</span>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
  </center>
  <div class="container">
  <div class='row'>
    <div class='col-md-12'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-4 padtop30">
                <center><div class="parent_circle">
                  <div class="parent_circle_contain">
                  <p>R JOSHI </p>
                  <p>Developer PROFILE</p>
                  <a href="#">Know More...</a>
                </div>
                <div class=" child_round_circle child_round_circle_img1">
                  
                </div>
                </div>
                </center>
              </div>          
              <div class="col-md-4 padtop30">
               <center><div class="parent_circle">
               <div class="parent_circle_contain">
                  <p>ABHISHEK</p>
                  <p>DESIGNER PROFILE</p>
                  <a href="#">Know More...</a>
                </div>
                <div class="child_round_circle child_round_circle_img2  ">
                  
                </div>
                </div>
                </center>
              </div>
              <div class="col-md-4 padtop30">
            <center> <div class="parent_circle">
                  <div class="parent_circle_contain">
                  <p>DEV</p>
                  <p>DESIGNER PROFILE</p>
                  <a href="#">Know More...</a>
                </div>
                <div class=" child_round_circle child_round_circle_img3 ">
                  
                </div>
                </div>
                </center> 
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4 padtop30">
                <center><div class="parent_circle">
                  <div class="parent_circle_contain">
                  <p>VINITA</p>
                  <p>DESIGNER PROFILE</p>
                  <a href="#">Know More...</a>
                </div>
                <div class=" child_round_circle child_round_circle_img4 ">
                  
                </div>
                </div>
                </center>
              </div>              
              <div class="col-md-4 padtop30">
                <center><div class="parent_circle">
                  <div class="parent_circle_contain">
                  <p>M . KHAN</p>
                  <p>Developer PROFILE</p>
                  <a href="#">Know More...</a>
                </div>
                <div class=" child_round_circle child_round_circle_img5">
                  
                </div>
                </div>
                </center>
              </div>    
               <div class="col-md-4 padtop30">
                <center><div class="parent_circle">
                  <div class="parent_circle_contain">
                  <p>BRIJESH</p>
                  <p>DESIGNER PROFILE</p>
                  <a href="#">Know More...</a>
                </div>
                <div class=" child_round_circle child_round_circle_img6">
                  
                </div>
                </div>
                </center>
              </div>            
            </div>
          </div>
    
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>

        <!-- register button -->
        <center>
          <h3 style="margin-top: 50px;">
            <a href="candi_reg.php"><input type="submit" value="REGISTER AS A CANDIDATE" class="submit" style="width: 50%"></a>
          </h3>
        </center>
      </div>                          
    </div>
  </div>
</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js-candi/bootstrap.min.js"></script>
    <script>
   $(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
  </script>
  </body>
</html>