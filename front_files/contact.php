<?php
$data['main_page'] = TRUE;

$data['title'] = 'contact';

$data['sub_title'] = 'contact page copy';

$data['copy'] = '

<address>
<p >e: <a href="mailto:'.$config['address_email'].'?subject=hello" title="feel free to email">'.$config['address_email'].'</a><br />
t: '.$config['address_tel'].'</p>

<p>'.$config['address_road'].'<br />
'.$config['address_town'].'<br />
'.$config['address_region'].'<br />
'.$config['address_postcode'].'</p>
</address>

<p>copy to go in here</p>';

$data['image'] = NULL;

$data['image-alt'] = NULL;


$data['copy'] = check_paragraph($data['copy']);

return $data;
?>