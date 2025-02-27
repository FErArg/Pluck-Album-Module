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

//First, load the functions
include("data/modules/albums/functions.php");

//Check if an album was defined, and if the album exists
if((isset($var)) && (file_exists("data/settings/modules/albums/$var"))) {
	recursive_remove_directory("data/settings/modules/albums/$var");
}
redirect("?module=albums","0");
?>