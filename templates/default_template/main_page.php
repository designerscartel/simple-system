<?php
echo $page_content['title'];
echo $page_content['sub_title'];
echo $page_content['copy'];

if ($page_content['image'] != NULL)
{
	echo '<img src="'.$config['base_url'].$config['user_images'].'page_images/'.$page_content['image'].'" alt="'.$page_content['image-alt'].'" />';
}
?>