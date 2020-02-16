<?php include "includes/header.php";?>
    <main  class="wrapper">
          <section class="contact">
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
<?php include "includes/footer.php";?>