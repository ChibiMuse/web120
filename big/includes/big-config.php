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
    "../index.php" => array(" ","WEB120", "fa fas fa-leaf")
    ,
    "index.php" => array(" ", "BIG", "fa fas fa-cat")
  ,
    "flexbox.php" => array(" ", "Flexbox", "fa fa-fw fa-cube")
    ,
    "galleries.php" => array(" ", "Galleries", "fa fa-fw fa-camera-retro")
  ,
    "#" => array("has-sub", "Google", "fa fa-fw fa-chevron-down")
  ,
    "calendar.php" => array(" ", "Calendar", "fa fa-fw fa-calendar")
    ,
    "map.php" => array(" ", "map", "fa fa-fw fa-map-o")
  ,
    "youtube.php" => array("last", "YouTube", "fa fa-fw fa-youtube-square")
    ,
    "sassy.php" => array(" ", "SASS vs CSS", "fa fas fa-crow")
  ,
    "siteapp.php" => array(" ", "Site vs App", "fa fa-fw fa-html5")
  ,
    "webcam.php" => array("last", "Web Cam", "fa fa-fw fa-eye")
);


switch(THIS_PAGE){
    case "../index.php":
        $title = "Megan's Web 120 Portal";
        $logo = "fas fa-leaf";
        $PageID = "WEB120";
    break;
        
    case "index.php":
        $title = "Megan's BIG Research";
        $logo = "fa fas fa-cat";
        $PageID = "Megan's Web Dev Examples";
    break;
    
    
    case "flexbox.php":
        $title = "Megan's Flexbox Research";
        $logo = "fa fa-fw fa-cube";
        $PageID = "Flexbox Research";
        $logo_color = ' style="color:#FEEC9D"'; //Color is Canary Yellow
    break;
        
    case "galleries.php":
        $title = "Megan's Gallery Research";
        $logo = "fa fa-fw fa-camera-retro";
        $PageID = "Gallery Research";
        $logo_color = ' style="color:#FB86A1"'; //Color is Tickle Me Pink
    break;
    
    case "calendar.php":
        $title = "Google Calendar";
        $logo = "fa fa-fw fa-calendar";
        $PageID = "Google Calendar Example";
    break;
        
    case "map.php":
        $title = "Google Map Page";
        $logo = "fa fa-fw fa-map-o";
        $PageID = "Map Example";
    break; 
        
    case "youtube.php":
        $title = "Youtube Page";
        $logo = "fa fa-fw fa-youtube-square";
        $PageID = "Youtube Example";
    break; 
        
    case "sassy.php":
        $title = "Megan's SASS Research";
        $logo = "fa fas fa-crow";
        $PageID = "SASS vs SCSS vs CSS";
    break;
        
    case "siteapp.php":
        $title = "Megan's Site vs App Research";
        $logo = "fa fa-fw fa-html5";
        $PageID = "What is a Website vs an App?";
    break; 
        
    case "webcam.php":
        $title = "Webcams";
        $logo = "fa fa-fw fa-eye";
        $PageID = "Livestream Examples";
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
        $logo = $text[2];
        if ($url == THIS_PAGE)
        {
            if($class == "has-sub")
            {
            //selected page - add class reference
            $myReturn .='<li class="active ' . $class . '"><a href="' . $url . '"><span><i class="' . $logo . '"></i>' . $title . '</span></a></li>' . "\n\t" . '<ul>' . PHP_EOL;
            }
            elseif($class == "last")
            {
                $myReturn .='<li class="active ' . $class . '"><a href="' . $url . '"><span><i class="' . $logo . '"></i>' . $title . '</span></a></li>' . "\n" . '</ul>' . PHP_EOL;
            }
            else {
            $myReturn .='<li class="active ' . $class . '"><a href="' . $url . '"><span><i class="' . $logo . '"></i>' . $title . '</span></a></li>' . PHP_EOL;
            }
        }
        else{
            if($class == "has-sub")
            {
            //selected page - add class reference
            $myReturn .='<li class="' . $class . '"><a href="' . $url . '"><span><i class="' . $logo . '"></i>' . $title . '</span></a></li>' . "\n\t" . '<ul>' . PHP_EOL;
            }
            elseif($class == "last")
            {
                $myReturn .='<li class="' . $class . '"><a href="' . $url . '"><span><i class="' . $logo . '"></i>' . $title . '</span></a></li>' . "\n" . '</ul>' . PHP_EOL;
            }
            else {
            $myReturn .='<li class="' . $class . '"><a href="' . $url . '"><span><i class="' . $logo . '"></i>' . $title . '</span></a></li>' . PHP_EOL;
            }
        }
    }
    return $myReturn;
}
?>