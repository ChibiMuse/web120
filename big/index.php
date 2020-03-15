<?php include "includes/header.php";?>
<section class="column1">
    <h2> Client Questionnaire</h2>
    <p> Feedback helps me improve services and better provide for my customers by helping me focus on what's important to you, spend more time on what needs improvement, and keep doing what is working well. </p>
    
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

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</section>
<section class="column2">
    <h3> Design Cycle Resources</h3>
    <div class="resources">
        <a href="https://www.smashingmagazine.com/2011/06/following-a-web-design-process/"><strong>Following a Web Design Process</strong> - by Luke Reimer</a>
        <br>
        <a href="https://medium.com/@customweb/web-development-life-cycle-by-a-professional-website-design-development-company-5bf86c9039a5"><strong>Web Development Life Cycle by a Professional Website Design & Development Company</strong>- by Custom Web Development</a>
        <br>
        <a href="https://www.codementor.io/@nicolesaidy/design-tutorial-5-steps-for-a-successful-website-design-arhjcudcq"><strong>Design Tutorial:5 Steps for a Successful Website Design</strong> - by Nicole Saidy</a>
    </div>
</section>
<?php include "includes/footer.php";?>