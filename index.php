<?php
// load config items
$config = include_once('config_array.php');
global $config;

// include the core system file without this the site wont run
include_once('system/core.php');

// include the core nav file
include_once('system/core_nav.php');

// include the core nav file
include_once('system/core_file.php');

// include the core nav file
include_once('system/core_typography.php');

// get the string for use
$url_string = check_url_string();

//check what needs to be loaded passing it the default information
$load_items = check_what_to_load($url_string, $config['front_files'], $config['default_file'], $config['main_nav']);

//debug print_r($url_string);
//debug print_r($load_items);
//debug print_r($config);

// after all that lets load the content
include_once($config['template_folder'].$config['chosen_template'].'template.php');
?>