<?php include "includes/header.php";?>
<section class="column1">
    <h2> Client Questionnaire</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
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
        <ul>
            <li>Resource 1</li>
            <li>Resource 2</li>
            <li>Resource 3</li>
        </ul>
    </div>
</section>
<?php include "includes/footer.php";?>