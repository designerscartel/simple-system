<?php
$data['main_page'] = TRUE;

$data['title'] = 'about';

$data['sub_title'] = 'about page copy';

$data['copy'] = '
copy to go in here

new paragraph
just a line break

another paragraph
';

$data['image'] = NULL;

$data['image-alt'] = NULL;


$data['copy'] = check_paragraph($data['copy']);


return $data;
?>