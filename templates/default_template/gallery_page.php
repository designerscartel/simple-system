<?php
echo $page_content['title'];
echo $page_content['sub_title'];
echo $page_content['copy'];

if(!empty($page_content['image_list']))
{
foreach($page_content['image_list'] as $key => $value)
{
echo 'thumb_'.$value;
echo $value;
}
}
?>