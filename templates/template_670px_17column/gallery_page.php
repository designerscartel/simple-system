<h2><?php echo $page_content['title']; ?></h2>
<h3><?php echo $page_content['sub_title']; ?></h3>
<?php echo $page_content['copy']; ?>

<table>
<?php

$count = 0;
$per_row = 3;
$counted = 0;
$array_length = count($page_content['image_list']);

if(!empty($page_content['image_list']))
{
foreach($page_content['image_list'] as $key => $value)
{
	if($count == 0){
		echo '<tr>'."\n";
	}
	
// build up array
// lay in chosen template
echo '<td><a href="'.$config['base_url'].$dir.$value.'" rel="lightbox[gallery]"><img src="'.$config['base_url'].$dir.'thumb_'.$value.'" alt="'.$page_content['title'].' gallery image '.$key.'" /></a></td>'."\n";

	$count++;
	$counted++;
if($count == $per_row || $counted == $array_length){
	echo '</tr>'."\n";
	$count = 0;
}

}
}
?>
</table>


