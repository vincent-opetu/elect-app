<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Settings</title>
  <script src="https://use.typekit.net/lkh0ago.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel="stylesheet" href="css-set/style.css">
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

  <!-- header -->
  <!-- nav -->
  <center>
    <h1 style="color: #fff">⋆ SETTINGS ⋆</h1>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="home.php">Home</a>
      <a href="vote.php">Vote</a>
      <a href="results.php">Results</a>
      <a href="candidates.php">Candidates</a>
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
  <br>
  <!-- nav collapse -->
  <!-- header collapse -->
  <div id='settings' ontouchstart>
  <input checked class='nav' name='nav' type='radio'>
  <span class='nav'>CHANGE PASSWORD</span>
  <input class='nav' name='nav' type='radio'>
  <span class='nav'>CHANGE <br> THEME</span>
  <input class='nav' name='nav' type='radio'>
  <span class='nav'>CHANGE LANGUAGE</span>
  <input class='nav' name='nav' type='radio'>
  <span class='nav'>DEVELOPER'S MESSAGE</span>
  <main class='content'>

    <!-- change password -->
    <section id='password'>
      <form>
        <ul>
          <li class='large padding avatar'>
            <!-- header -->
            <div>
              <fieldset class='material-button'>
                CHANGE PASSWORD
              </fieldset>
            </div>

          </li>

          <!-- current password -->
          <li>
            <fieldset class='material'>
              <div>
                <input required type='password'>
                <label>Enter Current Password</label>
                <hr>
              </div>
            </fieldset>
          </li>

          <!-- new password -->
          <li>
            <fieldset class='material'>
              <div>
                <input required type='password'>
                <label>Enter New Password</label>
                <hr>
              </div>
            </fieldset>
          </li>
          
          <!-- confirm new password -->
          <li class='large'>
            <fieldset class='material'>
              <div>
                <input required type='password'>
                <label>Confirm New Password</label>
                <hr>
              </div>
            </fieldset>
          </li>
          <li class='large padding'>
            <fieldset class='material-button center'>
              <div>
                <input class='save' type='submit' value='Save'>
              </div>
            </fieldset>
          </li>
        </ul>
      </form>
    </section>
    <!-- password collapse -->

    <!-- change theme -->
    <section id='theme' class="input-row">
      <center>
        <h2 style="margin-top: 20%;">PLAY WITH COLORS</h2>
        <div class="input-box"><input type="color" name="" id="prim-picker" value="#1d252d" />
        </div>
        <div class="input-box"><input type="color" name="" id="sec-picker" value="#f05136" />
        </div>
      </center>
    </section>
    <!-- theme collapse -->

    <!-- change language -->
    <section class='upcoming' id='privacy'>
      <h1>Coming&nbsp;soon!</h1>
    </section>
    <!-- language collaspe -->

    <!-- developer -->
    <section class='upcoming' id='advanced'>
      <h1>Coming&nbsp;soon!</h1>
    </section>
    <!-- end -->
  </main>
</div>
  
    <script  src="js-set/index.js"></script>

</body>
</html>
