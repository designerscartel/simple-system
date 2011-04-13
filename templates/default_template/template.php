<?php
//load website header
include_once('header.php');

// load main nav run of function on index
echo create_nav_links($load_items['nav'], '', 'main_off', 'main_on', $url_string[0]);

// check if the sub nav array exists
if (!empty($load_items['sub']))
{
	// load sub nav run of function on index
	echo create_nav_links($load_items['sub'], 'sub_nav', 'sub_off', 'sub_on', $url_string[0].'/'.$url_string[1]);
}


// main page content
$page_content = include_once($load_items['file']);
// checks to see if the its the main page that needs loading
if(isset($page_content['main_page']))
{
include_once('main_page.php');

}


// website footer
include_once('footer.php');
?>