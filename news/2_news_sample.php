<?php
$data['title'] = 'sample news 2';

$data['sub_title'] = 'sample news sube title';

$data['copy'] = '<p>copy goes here</p>';

$data['image'] = NULL;

$data['image-alt'] = NULL;

$data['copy'] = check_paragraph($data['copy']);

return $data;
?>