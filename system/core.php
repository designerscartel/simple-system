<?php
// core system files needed to work the site
// this file contains the functions that do all the leg work for the url 
// based system


function check_url_string()
{
	//function breaks down the url into the needed segments
	// grabs url and splits it into segments
	
	$request_uri = preg_replace("|/(.*)|", "\\1", str_replace("\\", "/", $_SERVER['REQUEST_URI']));
	$parsed_uri = explode("/", $request_uri);
	$to_return[0] = $parsed_uri[1];
	$to_return[1] = $parsed_uri[2];
	$to_return[2] = $parsed_uri[3];
	return $to_return;
}



function check_what_to_load($array, $front_files, $home_file, $main_nav)
{
	
	// the above vars could of been passed as a global but i thought
	// keep it as organic as possible to allow for different config files furture use.
	
	
	// function checks whats being loaded is there and if its a front file or in a folder
	// uses the supplied data given
	
	$to_return = array();
	
	// without a nav we have nothing so lets see about loading that
	if(!empty($main_nav))
	{
		if (file_exists($main_nav.'.php'))
		{
			$to_return['nav'] = include_once($main_nav.'.php');
		}
	}
	
	// check to see if there are two url segments 
	if(empty($array[0]) && empty($array[1]))
	{
		//stop here we're all empty in the url segments its ok load home we must be there
		$to_return['file'] = $front_files.$home_file.'.php';
	}
	else if(empty($array[1]))
	{
		// if it is empty check if its a front file or refernce to a folder
		if (file_exists($front_files.$array[0].'.php'))
		{
			// yes it is a front file so finish here and return what to load
			$to_return['file'] = $front_files.$array[0].'.php';
		}
		else
		{
			// it must be a folder lets check to see if its there
			if (file_exists($array[0].'/index.php'))
			{
				$to_return['file'] = $array[0].'/index.php';
				
				// check if there is a sub nav here no point untill we knew it was a folder
				if(file_exists($array[0].'/'.$array[0].'_array.php'))
				{
					$to_return['sub'] = include_once($array[0].'/'.$array[0].'_array.php');
				}
				
			}
			else
			{
				// if all else fails we'll default back to home page sweet sweet home page
				$to_return['file'] = $front_files.$home_file.'.php';
			}
		}
	}
	else
	{
		// second segment wasn't empty so it has to be a folder and reference to a page but lets check
		if (file_exists($array[0].'/'.$array[1].'.php'))
		{
			// it was so lets load that
			$to_return['file'] = $array[0].'/'.$array[1].'.php';
			
			// check if there is a sub nav here no point untill we knew it was a folder
			if(file_exists($array[0].'/'.$array[0].'_array.php'))
			{
				$to_return['sub'] = include_once($array[0].'/'.$array[0].'_array.php');
			}
		}
		else
		{
			// just check to see if its a more base question to load more
			if(file_exists($array[0].'/more.php'))
			{
			$to_return['file'] = $array[0].'/more.php';
			}
			else
			{
			// if all else fails we'll default back to home page sweet sweet home page
			$to_return['file'] = $front_files.$home_file.'.php';
			}
		}
		
	}
	return $to_return;
}
?>