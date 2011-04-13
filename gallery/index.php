<?php
// include the core nav file
include_once('system/core_gallery.php');

// what template file must be used for this repeater
$template_file = 'gallery_page.php';
// directory where the images are held for this page
$dir = $config['user_images'].'gallery_images/';

$page_content['title'] = 'Gallery';
$page_content['sub_title'] = 'gallery page sub title';
$page_content['copy'] = '<p>copy to go in here</p> ';


$data['copy'] = check_paragraph($data['copy']);

// get all the images for the chosen folder
$page_content['image_list'] = get_gallery_list($dir);

// load the chosen template file
include($config['template_folder'].$config['chosen_template'].$template_file);
?>