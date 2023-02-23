<!--
Note: Donated by the original front-end devleoper to provide a framework for the first annual coding cup 
that Software Engineering Club, CSUB Chapter SWE and Linux Club have been working on since 2022/DEC
Filename: standardindex.html
Original Front-End Developer: Yeana Bond
Original Submission Date: 3-17-2019
Original Description:  A sample home page for a fictitious site called "Joe's Pet Food and Supply" should have a header at the top, 
a navigation bar below that with links (they don't have to work), and then a space on the left for small advertisements 
or other images of your choice with an area for the main content next to that.
-->
<!-- Justin Alejo-->
<?php
    $page = $_GET['page'];

    if(!isset($page)){
        $page='home';   
    }
?>
<html lang=en>

    <head>
        <title>CSU Bakersfield Software Engineering Club</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="./style.css">
    </head>
    <div id=page>
    <div id="event-text">
        <img id="CSUB_NSME_logo" src="images/version3NSME.png" alt="CSUB School of NSME">
        <img id="Science3" src="images/csubSCI3.jpg" alt="CSUB Scince 3">
    </div>
        <body>
            <?php require './navBar.php'; ?>
            <?php require $page.'.php'; ?>                
        </body>
    
</html>