<?php
/*
 * This file is part of pluck, the easy content management system
 * Copyright (c) somp (www.somp.nl)
 * http://www.pluck-cms.org
 * Pluck is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * See docs/COPYING for the complete license.
*/

//Make sure the file isn't accessed directly.
defined('IN_PLUCK') or exit('Access denied!');

//Open the module-folder
// this code was changed with tip "http://codestips.com/php-read-directory-into-array/"
$directory="data/settings/modules/albums";
   // create a handler to the directory
    $dirhandler = opendir($directory);
 
    // read all the files from directory
    $nofiles=0;
    while ($file = readdir($dirhandler)) {
 
        // if $file isn't this directory or its parent 
        //add to the $files array
        if ($file != '.' && $file != '..'){
			$nofiles++;
			$files[$nofiles]=$file;
        }   
    }
    //close the handler
    closedir($dirhandler);
$files2=sort($files);

//SerInformaticos code 
for ($i=0; $i < count($files); $i++){
	$dir=$files[$i];
?>
<div class="album" style="margin: 15px; padding: 5px;">
	<table>
		<tr>
			<td><img alt="<?php echo $dir; ?>" src="data/modules/albums/pages_admin/albums_getimage.php?image=<?php echo $dir; ?>/thumb/image1.jpg" /></td>
			<td>
				<span style="font-size: 17pt">
					<a href="?module=albums&amp;page=viewalbum&amp;album=<?php echo $dir; ?>&amp;pageback=<?php echo $current_page_filename; ?>"><?php echo $dir; ?></a>
				</span>
			</td>
		</tr>
	</table>
</div>
<?php
}


?>
