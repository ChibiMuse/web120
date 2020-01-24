<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Megan's WEB120 Portal</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
   <script src="https://kit.fontawesome.com/b0a0ea17a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/alex-brush" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/font-of-primalis" type="text/css"/>
    <!--<link rel="stylesheet" href="css/nav.css" />-->
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
</head>
<body>
    <header>
            <h1><i class="fas fa-paw"> </i>Megan's WEB120 Portal</h1>
     <nav>
        <ul class="mynav">
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart/Layout</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contact.php">Contact Megan</a></li>
            <li><a href="#">&#9776</a></li>
        </ul>
    </nav>
    </header>
    <main  class="wrapper">
         <section class="contact">
                    <h1>Contact Me</h1>
                    <p>Want to contact me? Awesome.</p>
        
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "musing.m2020@gmail.com";  //place your/your client's email address here
        $toName = "Megan Smith"; //place your client's name here
        $website = "chibimuse.com";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
           </section>
     </main>
    <footer>
        <p><small>&#169 Megan Smith - <time>2020</time> - <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>     
    </footer>
</body>
</html>