<?php
// site config array change this if needed
// we can add to this if needed with common elements and files
// don't add any php tags as these will be added on later
$config = array
(
	'base_url'=>'http://labs.twelve20design.com/', // leave out the index.php if we have .httaccess working
	'site_title' => 'a sample website', // the title that will appear in the url
	//
	'base_file'=>'index.php/',
	'front_files' => 'front_files/', // the folder where your root docs go eg: home, about
	'default_file' => 'home', // if nothing is asked for or a wrong url is put in use this
	'main_nav'=> 'main_array', // name of the and location of main nav array
	//
	'user_images' => 'user_images/', // default folder for user images only
	//
	'template_folder' => 'templates/', // template folder (leave blank if no template folder)
	'chosen_template' => 'template_670px_17column/', // which template to use
	'css_folder' => 'css/', // the folder that will hold all the css style sheets
	'image_folder' => 'images/', // the folder that will hold all the images for the main site
	'javascript_folder' => 'javascript/', // the folder that will hold all the javascript files
	//
	'address_road' => 'road',
	'address_town' => 'town',
	'address_region' => 'region',
	'address_postcode' => 'postcode',
	//
	'address_tel' => '+44 (0)121 288 4227',
	'address_mobile' => 'mobile',
	'address_email' => 'matt@twelve20.co.uk',
	//
	'site_copyright' => 'copyright 2008 twelve20',
	'created_by' => 'www.twelve20.co.uk',
);

return $config;
?>