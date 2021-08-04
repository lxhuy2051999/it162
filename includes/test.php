<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>nmCAPTCHA 2 Test Page</title>
	<meta name="viewport" content="initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	 
    <main role="main">

	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "lxhuy2051999@gmail.com";  //place your/your client's email address here
        $toName = "Dao"; //place your client's name here
        $website = "https://queenannenailsspa.com/";  //place NAME of your client's website

        echo loadContact('./includes/simple.php');#demonstrates a simple contact form
        //echo loadContact('./includes/multiple.php');#demonstrates multiple form elements

	?>
     </main>
    <footer>
      <small>&copy; 2021-<?=date('Y')?>, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
</body>
</html>
