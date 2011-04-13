<?php
// route to the css file or files using this
// echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['css_folder'];
// route to the main image folder using this
// echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['image_folder'];
// route to the javascript file or files using this
// echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['javascript_folder'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

<title><?php echo $config['site_title'] ?></title>

<meta name="author" content="">
<meta name="copyright" content="">
<meta name="keywords" content="">
<meta name="Description" content="">


<link rel="stylesheet" href="<?php echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['css_folder']; ?>blueprint/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['css_folder']; ?>blueprint/print.css" type="text/css" media="print">    
<!--[if IE]><link rel="stylesheet" href="<?php echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['css_folder']; ?>blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link rel="stylesheet" href="<?php echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['css_folder']; ?>base.css" type="text/css" media="screen, projection">    

<link rel="stylesheet" href="<?php echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['css_folder']; ?>lightbox.css" type="text/css" media="screen" />


<script src="<?php echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['javascript_folder']; ?>prototype.js" type="text/javascript"></script>
<script src="<?php echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['javascript_folder']; ?>scriptaculous.js" type="text/javascript"></script>
<script src="<?php echo $config['base_url'].$config['template_folder'].$config['chosen_template'].$config['javascript_folder']; ?>lightbox.js" type="text/javascript"></script>
</head>