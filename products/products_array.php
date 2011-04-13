<?php
//holds the sub navigation array

// you can to this list as your site grows.
// the first part of the array is the name you want to see in the sub navigation and is used for the url checking
// the second part of the array is the url to that particular area

$folder = 'products/'; // name of folder the files are in cuts down of the typing

$area_nav_array = array
(
'iPhone magic' => $folder.'product_one',
'product two' => $folder.'product_two',
'product three' => $folder.'product_three',
'product four' => $folder.'product_four',
);

return $area_nav_array;
?>
