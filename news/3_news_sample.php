<?php
$data['title'] = 'sample news 3';

$data['sub_title'] = 'sample news sub title';

$data['copy'] = '<p>copy goes here</p>';

$data['image'] = NULL;

$data['image-alt'] = NULL;

$data['copy'] = check_paragraph($data['copy']);

return $data;
?>