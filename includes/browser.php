<?php

/*
Script Name: Simple 'if' PHP Browser detection
Author: Harald Hope, Website: http://TechPatterns.com/
Script Source URI: http://TechPatterns.com/downloads/php_browser_detection.php
Version 2.0.2
Copyright (C) 29 June 2007

Modified by Steve Pucci of Emerald Sequoia LLC 9 July 2008

This program is free software; you can redistribute it and/or modify it under 
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT 
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

Get the full text of the GPL here: http://www.gnu.org/licenses/gpl.txt

Coding conventions:
http://cvs.sourceforge.net/viewcvs.py/phpbb/phpBB2/docs/codingstandards.htm?rev=1.3
*/

/*
the order is important, because opera must be tested first, and ie4 tested for before ie general
same for konqueror, then safari, then gecko, since safari navigator user agent id's with 'gecko' in string.
note that $dom_browser is set for all  modern dom browsers, this gives you a default to use, unfortunately we
haven't figured out a way to do this with actual method testing, which would be much better and reliable.

Please note: you have to call the function in order to get access to the variables, you call it by this:

browser_detection('browser');

then put you code that you want to use the variables with after that.

*/

function setBrowser() {

	// initialize the variables
	global $browser;

	$browser = '';

	// set to lower case to avoid errors, check to see if http_user_agent is set
	$navigator_user_agent = ( isset( $_SERVER['HTTP_USER_AGENT'] ) ) ? strtolower( $_SERVER['HTTP_USER_AGENT'] ) : '';

	// run through the main browser possibilities, assign them to the main $browser variable
	if (stristr($navigator_user_agent, "opera")) 
	{
		$browser = 'opera';
	}

	elseif (stristr($navigator_user_agent, "msie 6")) 
	{
		$browser = 'msie6'; 
	}

	elseif (stristr($navigator_user_agent, "msie 4")) 
	{
		$browser = 'msie4'; 
	}

	elseif (stristr($navigator_user_agent, "msie")) 
	{
		$browser = 'msie'; 
	}

	elseif ((stristr($navigator_user_agent, "konqueror")) || (stristr($navigator_user_agent, "safari"))) 
	{
		$browser = 'safari'; 
	}

	elseif (stristr($navigator_user_agent, "gecko")) 
	{
		$browser = 'mozilla';
	}
	
	elseif (stristr($navigator_user_agent, "mozilla/4")) 
	{
		$browser = 'ns4';
	}
	
	return $browser;
}

/*
you would call it like this:

setBrowser();

if ( $browser == 'opera' )
{
	do something;
}

*/
?>