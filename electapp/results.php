<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>RESULTS</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="results/style.css">

  <!-- favi icon -->
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">

  <style>

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
          <h1>⋆ VOTERS TURN OUT ⋆</h1>
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

             <span style="font-size:30px; color: #fff; cursor:pointer; margin: 6% 0% 0% 0%; position: relative; right: 10px;" onclick="openNav()">&#9776;</span>

             <script>
             function openNav() {
                 document.getElementById("mySidenav").style.width = "250px";
             }

             function closeNav() {
                 document.getElementById("mySidenav").style.width = "0";
             }
             </script>
             <div class="wrapper">  
            <div class="green">
              <div class="progress">
                <div class="inner">
                 <div class="percent"><span>89</span>%</div>
                  <div class="water"></div>
                  <div class="glare"></div>
                </div>
              </div>
            </div>
          </div>
      </center>

      <section>
  <!--for demo wrap-->
  <h1>⋆ UPDATED RESULTS ⋆</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Code</th>
          <th>CANDIDATE</th>
          <th>PARTY </th>
          <th>VOTES</th>
          <th>VOTES %</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td>AAC</td>
          <td>RAILA ODINGA  </td>
          <td>NASA</td>
          <td>2545002</td>
          <td>36%</td>
        </tr>
        <tr>
          <td>AAD</td>
          <td>VINCENT OPETU</td>
          <td>NASA</td>
          <td>5515120</td>
          <td>51%</td>
        </tr>
        <tr>
          <td>AAX</td>
          <td>DOLPHINE GWADOYA</td>
          <td>JUBILEE</td>
          <td>4556554</td>
          <td>36%</td>
        </tr>
        <tr>
          <td>XXD</td>
          <td>HASHIM MUSTAFA</td>
          <td>JUBILEE</td>
          <td>4156556</td>
          <td>25%</td>
        </tr>
        <tr>
          <td>AAC</td>
          <td>CARLOS MWENDWA</td>
          <td>NASA</td>
          <td>2510510</td>
          <td>26%</td>
        </tr>
        <tr>
          <td>AAD</td>
          <td>GLADYS AKINYI</td>
          <td>ODM</td>
          <td>1212</td>
          <td>1.3%</td>
        </tr>
        <tr>
          <td>AAX</td>
          <td>ALICE KAVINDU</td>
          <td>WIPER</td>
          <td>12461</td>
          <td>36%</td>
        </tr>
        <tr>
          <td>XXD</td>
          <td>WALTER SIAMETO</td>
          <td>FORD_KENYA</td>
          <td>456124</td>
          <td>41%</td>
        </tr>
        
      </tbody>
    </table>
  </div>
</section>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js12/index.js"></script>
    <script>
      $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>

</body>
</html>
