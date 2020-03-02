<?php include "includes/portal-config.php"?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
   <script src="https://kit.fontawesome.com/b0a0ea17a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/alex-brush" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/font-of-primalis" type="text/css"/>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/aia.css" />
    <link rel="stylesheet" href="css/flowchart.css" />  

    <!-- navigation code modified from here: Rings Navigation Concept by Bennet Feely https://codepen.io/bennettfeely/pen/qRJOZJ-->
     
</head>
<body>
    <header>
        <nav class="top-right open">
            <?=makeLinks($nav1)?>
            <!-- START COMMENT OUT NAV
            <a href="contact.php" class="disc l1">
                <div>Contact Megan</div>
            </a>
            <a href="fp/index.php" class="disc l2">
                <div>Final Project</div>
            </a>
            <a href="flowchart.php" class="disc l3">
                <div>Flowchart/Layout</div>
            </a>
            <a href="aia.php" class="disc l4">
                <div>AIA</div>
            </a>
            <a href="big/index.php" class="disc l5">
                <div>Big</div>
            </a>
            <a href="index.php" class="disc l6">
                <div>Welcome</div>
            </a>
            END COMMENT OUT NAV-->
            <a class="disc l7 toggle">
                &#9776;
            </a>
        </nav>
        <div>
            <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Megan's WEB120 Portal</h1>
            <h2 class="PageID"><?=$PageID?></h2>
        </div>
<!--     <nav>
            <ul class="mynav">
                <li><a href="index.php" class="selected">Welcome</a></li>
                <li><a href="big/index.php">Big</a></li>
                <li><a href="aia.php">AIA</a></li>
                <li><a href="flowchart.php">Flowchart/Layout</a></li>
                <li><a href="fp/index.php">Final Project</a></li>
                <li><a href="contact.php">Contact Megan</a></li>
                <li><a href="#">&#9776</a></li>
            </ul>
        </nav>-->
        <script>
            toggle = document.querySelectorAll(".toggle")[0];
            nav = document.querySelectorAll("nav")[0];
            toggle_open_text = "&#9776";
            toggle_close_text = "X";

            toggle.addEventListener(
                "click",
                function() {
                    nav.classList.toggle("open");

                    if (nav.classList.contains("open")) {
                        toggle.innerHTML = toggle_close_text;
                    } else {
                        toggle.innerHTML = toggle_open_text;
                    }
                },
                false
            );

            setTimeout(function() {
                nav.classList.toggle("open");
            }, 800);
        </script>
    </header>
    <!-- END HEADER INCLUDE -->