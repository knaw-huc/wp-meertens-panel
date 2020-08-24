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
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-custom.css">


	<style>
	.current-menu-item  a{
	  border-bottom: 3px solid <?php echo get_theme_mod('brandcolor1') ?>;
	}

	.current_page_parent a{
	  border-bottom: 3px solid <?php echo get_theme_mod('brandcolor1') ?>;
	}

	.footer  {
		background-color: <?php echo get_theme_mod('footerColorBG') ?>;
	}

	</style>


</head>



<body>



	<div class="header">
		<div class="headerLeft">
			<?php
			//echo '>'.get_custom_logo().'<';
			if (get_custom_logo() == '') {
			echo '<span class="siteTitle"><a href="'.get_bloginfo( 'url' ).'">'.get_bloginfo( 'name' ).'</a><br><span class="subTitle">'.get_bloginfo( 'description' ).'</span></span>';
			} else {
				echo get_custom_logo();
			}

			?></div>

		<nav class="headerRight top-navigation">
			<?php
				$cleanMenu = wp_nav_menu( array(
					'menu_id'        => 'primary-menu',
					'echo' => false,
					'depth'=> 1,
				) );
				echo $cleanMenu;

			?>
		</nav>


	</div>
<?php
	//if((!is_front_page()) || ( is_page() )) {
	if( is_page() ) {
		if( !is_front_page() ) {

		?>

		<div class="subNav"><?php
			$parentId = wp_get_post_parent_id( $post_ID );
			if ($parentId ==0) {
				$parentName = get_the_title();
			}else {
				$parentName = get_the_title($parentId);
			}

		$args = array(
		    'menu_id'        => 'primary-menu',
		    'submenu' => $parentName, //
				'echo' => false,
		);

		$submenu = wp_nav_menu( $args );
		echo $submenu; //strip_tags($submenu, "<a>");
		?></div>

<?php }} ?>







<div id="page" class="site">
