<?php
/*
|--------------------------------------------------------------------------
| Image Preset Sizes
|--------------------------------------------------------------------------
|
| Specify the preset sizes you want to use in your code. Only these preset 
| will be accepted by the controller for security.
|
| Each preset exists of a width and height. If one of the dimensions are 
| equal to 0, it will automatically calculate a matching width or height 
| to maintain the original ratio.
|
| If both dimensions are specified it will automatically crop the 
| resulting image so that it fits those dimensions.
|
*/

$config["image_sizes"]["news_90_100"] = array(90,100);
$config["image_sizes"]["news_93_90"] = array(93,90);
$config["image_sizes"]["news_90_80"] = array(90,80);
$config["image_sizes"]["product_70_135"] = array(70,135);
$config["image_sizes"]["product_60_95"] = array(60,95);