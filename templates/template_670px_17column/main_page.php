<h2><?php echo $page_content['title']; ?></h2>
<h3><?php echo $page_content['sub_title']; ?></h3>

<?php
if ($page_content['image'] != NULL)
{
	echo '<img src="'.$config['base_url'].$config['user_images'].'page_images/'.$page_content['image'].'" alt="'.$page_content['image-alt'].'" />';
}
?>

<?php echo $page_content['copy']; ?>