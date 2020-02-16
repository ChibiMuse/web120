<?php

/*
portal-config.php

Stores our WEB120 configuration information
*/

//Prevents data from being sent early

ob_start();

//echo basename($_SERVER['PHP_SELF']);

define("THIS_PAGE",basename($_SERVER["PHP_SELF"]));

//echo THIS_PAGE;

//die;

$logo_color = " ";
//Place URL & labels in the array for navigation:
$nav1 = array(
    "contact.php" => array("l1","Contact Megan")
    ,
    "fp/index.php" => array("l2", "Final Project")
  ,
    "flowchart.php" => array("l3", "Flowchart/Layout")
    ,
    "aia.php" => array("l4", "AIA")
  ,
    "big/index.php" => array("l5", "Big")
  ,
    "index.php" => array("l6", "Welcome")
);


switch(THIS_PAGE){
    case "index.php":
        $title = "Megan's WEB120 Home Page";
        $logo = "fas fa-leaf";
        $PageID = "Welcome";
    break;
    
    case "aia.php":
        $title = "Megan's Final Project AIA (Client Work)";
        $logo = "fas fa-briefcase";
        $PageID = "AIA (Client Work)";
        $logo_color = ' style="color:#FEEC9D"'; //Color is Canary Yellow
    break;
        
    case "contact.php":
        $title = "Contact Megan";
        $logo = "far fa-comments";
        $PageID = "Contact Me";
        $logo_color = ' style="color:#FB86A1"'; //Color is Tickle Me Pink
    break;
    
    case "big/index.php":
        $title = "Megan's BIG Research Project";
        $logo = "fas fa-book-reader";
        $PageID = "BIG Research";
    break; 
    
    default:
        $title = THIS_PAGE;
        $logo = "fas fa-paw";
        $PageID = "Coming Soon";
        

}

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/


function makeLinks($linkArray)
{
    $myReturn = " ";
    
    foreach($linkArray as $url => $text)
    {
        $class = $text[0];
        $title = $text[1];
        if ($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .='<a href="' . $url . '" class="selected disc ' . $class . '">' . "\n\t" . '<div>' . $title . '</div>' . "\n" . '</a>' . PHP_EOL;
        } else {
            $myReturn .='<a href="' . $url . '" class="disc ' . $class . '">' . "\n\t" . '<div>' . $title . '</div>' . "\n" . '</a>' . PHP_EOL;
        }
    }
    return $myReturn;
}
?>