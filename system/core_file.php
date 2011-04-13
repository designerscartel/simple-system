<?php
// core file function can
// took it out to keep index file clean

function get_file_list($dir)
{
if ($handle = opendir($dir))
{
while (false !== ($file = readdir($handle)))
{
if ($file != '.' && $file != '..' && $file != 'index.php'){
$to_return[] =substr($file, 0, strpos($file, '.'));
}
}
}
closedir($handle);
//

sort($to_return, SORT_NUMERIC);

return $to_return;
}
?>