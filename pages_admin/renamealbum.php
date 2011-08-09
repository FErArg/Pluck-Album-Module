<?php
//This is a NEW code for a module for pluck, an opensource content management system
// SerInformaticos : www.SerInformaticos.es

//NAME: Rename Album
//DESCRIPTION: this new file allow to rename the album name
//LICENSE: GPLv3

$album_rename1 = $_POST[album_rename1];
$album_rename = $_POST[album_rename2];

if( file_exists("../../../settings/modules/albums/$album_rename1") ) {

	// SerInformaticos Code
		if($album_rename) {
			$album_rename = stripslashes($album_rename);
			$album_rename = str_replace ("\"","", $album_rename);
			$album_rename = str_replace ("'","", $album_rename);
			$album_rename = str_replace (".","", $album_rename);
			$album_rename = str_replace ("/","", $album_rename);
			$album_rename = str_replace ("<","", $album_rename);
			$album_rename = str_replace (">","", $album_rename);
			// replace blank space to "_"
			$album_rename = str_replace (" ","_", $album_rename);
			rename("../../../settings/modules/albums/$album_rename1","../../../settings/modules/albums/$album_rename");
			chmod ("../../../settings/modules/albums/$album_rename", 0777);
			chmod ("../../../settings/modules/albums/$album_rename/thumb", 0777);
			// print "Old Name\t" . $album_rename1 . "<br />\n";
			// print "New Name\t" . $album_rename . "<br />\n";
			}
}
// redirect to start page of admin
header( 'Location: /login.php' )
?>
