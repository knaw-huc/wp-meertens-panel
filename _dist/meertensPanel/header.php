<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */

function infNoteEmpty($field, $pre, $post) {
	$out ='';
	if ($field != '') {
		$out = $pre.$field.$post;
	}
	return $out;

}


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<?php
	ob_start();
	wp_head();
	$classList = ob_get_contents();
	ob_end_clean();
	echo str_replace("body.custom-background",".customBackground",$classList);

	?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/meertenspanel.css">

</head>
<body>
