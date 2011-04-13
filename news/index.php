<?php
echo '<h2>News</h2>';
// what template file must be used for this repeater
$template_file = 'news_repeater.php';
$list = get_file_list('news/');
//print_r($list);
if(!empty($list))
{
foreach($list as $key => $value)
{
// build up array
$page_content = include_once('news/'.$value.'.php');
// lay in chosen template
include($config['template_folder'].$config['chosen_template'].$template_file);
}
}
?>