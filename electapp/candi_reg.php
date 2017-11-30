<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Candidate registration form</title>
  <link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>

  <link rel="stylesheet" href="css-reg/style.css">
  <!-- favi icon -->
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">

</head>

<body>

  <!-- cancel button -->
  <center style="position: relative; top: 150px;">
    <h2>Fill in the form below to register as a candidate</h2>
     <a href="candidates.php"><input type="submit" value="CANCEL" class="submit" style="width: 30%"></a>
 </center>
  <!-- end btn -->

  <!-- register form -->
  <div id="progress"></div>
  <div class="center">
    <div id="register">

      <i id="progressButton" class="ion-android-arrow-forward next"></i>

      <div id="inputContainer">
        <input id="inputField" required autofocus />
        <label id="inputLabel"></label>
        <div id="inputProgress"></div>
      </div>

    </div>
  </div>
  <!-- form collapse -->
  
  <script  src="js-reg/index.js"></script>

</body>
</html>
<!-- by opetu vincent -->