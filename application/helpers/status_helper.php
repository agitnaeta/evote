<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('status'))
{
	function status($status_pilih)
	{
		if ($status_pilih=="0") 
		{
			echo "<p id='belum' class='text-warning'>(Belum Memilih)</p>";
		}
		else
		{

			echo "<p id='sudah' class='text-success'>(Sudah memilih)</p>";
		}
	}
}