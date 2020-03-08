<?php include "includes/big-config.php"?>
<!DOCTYPE HTML>
<html lang='en'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
   <title><?=$title?></title>
   <!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>-->
    
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
</head>
<body>
   <div class="wrapper">
<header class="header">
    <div>
    <h1 class="page-title"><?=$PageID?></h1>
    </div>
    <label for="show-menu" class="show-menu"> &#9776; <span class="show-tag">Show Menu</span> </label>
    <input type="checkbox" id="show-menu" role="button">
<nav id="cssmenu" class="top-nav">
  <ul id="menu">
      <?=makeLinks($nav1)?>
     <!--<li><a href="../index.php"><span><i class="fa fas fa-leaf"></i> WEB120</span></a></li>
     <li class = "active"><a href="index.php"><span><i class="fa fas fa-cat"></i> BIG</span></a></li>
     <li><a href="flexbox.php"><span><i classs="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
     <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
     <li class="has-sub"><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li class="last"><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="sassy.php"><span><i class="fa fas fa-crow"></i> SASS vs CSS</span></a></li>
     <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
     <li class="last"><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
  </ul>-->
</nav>
</header>
    <!-- END HEADER INCLUDE -->