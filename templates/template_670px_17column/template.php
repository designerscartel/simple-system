<?php
//load website header
include_once('header.php');
?>

<body>
	
<div class="container">

<h1><?php echo $config['site_title']; ?></h1>

<hr />

<div class="span-4 colborder">
			
<?php
// load main nav run of function on index
echo create_nav_links($load_items['nav'], '', 'main_off', 'main_on', $url_string[0]);

// check if the sub nav array exists
if (!empty($load_items['sub']))
{
	?>
	<hr />
	<?php
	// load sub nav run of function on index
	echo create_nav_links($load_items['sub'], 'sub_nav', 'sub_off', 'sub_on', $url_string[0].'/'.$url_string[1]);
}
?>

</div>

<div class="span-11 last">
<?php
// main page content
$page_content = include_once($load_items['file']);
// checks to see if the its the main page that needs loading
if(isset($page_content['main_page']))
{
include_once('main_page.php');

}
?>
</div>

<hr />

<?php
// website footer
include_once('footer.php');
?>

</div>
</body>
</html>
