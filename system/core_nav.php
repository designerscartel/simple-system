<?php
// core nav function can
// took it out to keep index file clean

function create_nav_links($array, $id='',  $style='', $active='', $url='', $default = 'home')
{
	// lets just for this ask for it from the main config file
	global $config;
	
	
	// function to create a unordered list of the navigation with url checking
	
	$to_return = '';
	$to_return .='<ul';
	if($id != '')
	{
		$to_return .=' id="'.$id.'" ';
	}
	$to_return .='>'."\n";
	foreach($array as $key=>$value)
	{
		$to_return .='<li>';
		
		$to_return .='<a';
		if($url == $value)
		{
			$to_return .=' id="'.$active.'"';
		}
		else
		{
			$to_return .=' class="'.$style.'"';
			
			// check if the the system is on home
			if($url == '' && $key == $default)
			{
				$to_return .=' id="'.$active.'"';
			}
		}
		$to_return .=' href="'.$config['base_url'].$config['base_file'].$value.'"';
		$to_return .=' title="link to '.$key.'">'.$key.'</a>';
		
		$to_return .='</li>'."\n";
	}
	$to_return .='</ul>'."\n";
	
	return $to_return;
}
?>