<?php 
/* 
Template Name: Service Page 
*/ 
?>


<?php 

// get warp    
$warp = Warp::getInstance();    

// load main template file    
echo $warp['template']->render('template');