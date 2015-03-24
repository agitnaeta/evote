<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('singkat'))
{
	function singkat($var='')
	{
		if (!empty($var)) {
			$var=substr($var, 0,50);
			echo "$var...";
		}
	}
}