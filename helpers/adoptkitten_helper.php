<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Generates a adoptkitten image
 *
 * @access	public
 * @param 	mixed  	width as integer or array of params
 * @param 	integer	height
 * @return	string 	HTML
 */
if(!function_exists('adoptkitten'))
{
	function adoptkitten($width, $height = NULL)
	{
		$params = array();

		if(is_array($width))
		{
			$params = $width;
		}
		else
		{
			$params['width']     	= $width;
			$params['height']    	= $height;
		}

		return '<img src="http://placekitten.com/'. $params['width'] . '/'. $params['height'] . '" alt="Placeholder">';
	}
}

/* End of file adoptkitten_helper.php */