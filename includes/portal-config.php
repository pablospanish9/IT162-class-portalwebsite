<?php
/*
portal-config.php
Used to store all of our WEB120 configuration information
*/

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Pablo's 1st Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'big.php':
        $title = "Big Page";
        $logo = 'fa-home';
        $PageID = 'This is the Big Page';
    break;

    case 'aia.php':
        $title = "AIA Page";
        $logo = 'fa-home';
        $PageID = 'This is the AIA Page';
    break;

    case 'flowchart.php':
        $title = "Flowchart Page";
        $logo = 'fa-home';
        $PageID = 'This is the Flowchart/Layout Page';
    break;

    case 'final.php':
        $title = "Final Page";
        $logo = 'fa-home';
        $PageID = 'This is the Final Page';
    break;
    
    case 'contactme.php':
        $title = "Pablo's Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Please contact me and send me a message';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }

 //place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Pablo";
  

// Creating a function to generate links and keep the 
// highlight on the current page

// <li><a href="index.php" class="selected">Welcome</a></li>
// <li><a href="big/index.php">Big</a></li>
// <li><a href="aia.php">AIA</a></li>
// <li><a href="flowchart.php">Flowchart/Layout</a></li>
// <li><a href="fp/index.php">Final Project</a></li>
// <li><a href="contactme.php">Contact Pablo</a></li>


function makeLinks ($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){

        if($url == THIS_PAGE){
            $myReturn .="<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .="<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}


?>


