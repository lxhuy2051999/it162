<?php
/*
    portal-config.php

    Used to store all of the WEB120 configuration information

 */
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;
// die;

switch (THIS_PAGE) {
     case 'index.php':
          $title = "Huy's WEB120 Title Page";
          $logo = 'fa fa-home';
          $PageID = 'Welcome';
          break;

     case 'aia.php':
          $title = "Audience, Issues, and Approach";
          $logo = 'fas fa-lightbulb';
          $PageID = 'Problems and Approaches';
          break;

     case 'contact.php':
          $title = "Huy's WEB120 Contact Page";
          $logo = 'fa fa-pencil-square-o';
          $PageID = 'Welcome';
          break;

     default:
          $title = THIS_PAGE;
          $logo = 'fa-home';
          $PageID = 'Welcome';
}

$nav1['index.php'] = 'Home';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contact.php'] = 'Contact Huy';

/*
    here we're creating a function to generate
   links and keep the highlight on the current page
   
   <?=makeLinks($nav)?>
<li><a href="index.php" class="selected">Welcome</a></li>
<li><a href="big/index.php">Big</a></li>
<li><a href="aia.php">AIA</a></li>
<li><a href="flowchart.php">Flowchart/Layout</a></li>
<li><a href="fp/index.php">Final Project</a></li>
<li><a href="contact.php">Contact Huy</a></li>

*/

function makeLinks($nav1)
{
$myReturn = '';
foreach ($nav1 as $url => $text) {
if ($url == THIS_PAGE) {
$myReturn .= "<li><a href=\"$url\" class=\"selected\">$text</a></li>";
} else {
$myReturn .= "<li><a href=\"$url\">$text</a></li>";
}
}

return $myReturn;
}