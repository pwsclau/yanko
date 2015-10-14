<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

     <title>Yanko</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/hover-buttons/hover-min.css">
    <link rel="stylesheet" href="css/animate.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     

    <script src="js/modernizr.custom.js"></script>

    <script
      src="http://maps.googleapis.com/maps/api/js">
    </script>

      <script>
      function initialize() {
        var mapProp = {
          center:new google.maps.LatLng(51.0540908,-114.0165291),
          zoom:5,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

  </head>

  <body>
    <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand large" href="index.php"><img src="images/logo.jpg"></a>
        <a href="index.php" class="navbar-brand mini"><img src="images/logo-mini.png" alt=""></a>
      </div>

      <ul class ="nav navbar-nav navbar-right upper-nav">
        <li>
          <form role="search" method="get" class="search-form" >
              <label>
                      <span class="search-tag"><i class="icon icon-search"></i> 
                        Search
                      </span>
                       <input type="search" 
                      class="search-field"  
                      value="">
                      
              </label>
              <input type="submit" class="search-submit" value="Search"> 
            </form>
        </li>
          <li><a href="#">T: 403.262.0262</a></li>
          <li><a href="#">F: 403.204.0284</a></li>
        </ul>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-list" id="header-menu">


        <ul class="nav navbar-nav navbar-right lower-nav">

          <li><a href="index.php">HOME</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="history.php">HISTORY</a></li>
              <li><a href="vision-mission.php">VISION & MISSION</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AREAS OF PRACTICE<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="area-of-practice.php">PERSONAL INJURY</a></li>
              <li><a href="area-of-practice.php">CRIMINAL LAW</a></li>
              <li><a href="area-of-practice.php">FAMILY LAW</a></li>
            </ul>
          </li>
          <li><a href="lawyers.php">LAWYERS</a></li>
          <li class="hvr-grow-shadow"><a href="contact-us.php" class="btn btn-info btn-infoc icon-arrow-right" role="button">CONTACT US </a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>