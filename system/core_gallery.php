<?php
// core gallery function can
// took it out to keep index file clean


function get_gallery_list($dir)
{
if ($handle = opendir($dir))
{
while (false !== ($file = readdir($handle)))
{
if ($file != '.' && $file != '..' && strstr($file, 'thumb_')){
//$to_return[] =substr($file, 0, strpos($file, '.'));
$image = explode("_", $file);
// echo $image[0]; returns thumb
// echo $image[1]; returns file name
$to_return[] = $image[1];
}
}
}
closedir($handle);

sort($to_return, SORT_NUMERIC);

//
return $to_return;
}
?>

