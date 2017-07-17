<?php
/*
Plugin Name: Google Destination URL
Plugin URI: http://wordpress.org/plugins/google-destination-url/
Description: Perform a Google Search when adding a link in the editor.
Version: 1.1
Author: Aubrey Portwood
Author URI: http://profiles.wordpress.org/aubreypwd/
License: GPL2
*/

/*  Copyright 2014  Google Destination URL  (email : aubreypwd@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Fix symlinked plugins.
require_once('__FILE__-fix.php');

// Google API Stuff
require_once('gdurl-googapi.php');

// Primary Plugin
require_once('gdurl.php');

?>