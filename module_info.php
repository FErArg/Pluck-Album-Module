<?php
//This is a module for pluck, an opensource content management system
//Website: http://www.pluck-cms.org

//MODULE NAME: albums
//DESCRIPTION: this module lets the user create albums with JPEG-pictures to display on the website
//LICENSE: GPLv3
//This module is included with pluck

//Make sure the file isn't accessed directly.
defined('IN_PLUCK') or exit('Access denied!');

//Include language-items
include ("data/settings/langpref.php");
include ("data/inc/lang/en.php");
include ("data/inc/lang/$langpref");

//Module name
$module_name = $lang_albums;

//Short module introduction
$module_intro = $lang_albums7;

//Module dir
$module_dir = "albums";

//Filename of the module-icon
$module_icon = "images/albums.png";

//Version of the module
$module_version = "0.1";

//Author of the module
$module_author = "pluck development team";

//Website of the module
$module_website = "http://www.pluck-cms.org";

//Compatibility
$module_compatibility = "4.6";

?>
