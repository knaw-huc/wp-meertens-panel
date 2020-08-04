<?php /* Template Name: home split screen  */ ?>
<?php
get_header();
?>

<?php
	//splitscreen hero
	if (get_theme_mod('homeBuild_splitHero', false)) {
		get_template_part( 'template-parts/home-hero-split' );
	}

	if (get_theme_mod('isElaborate', false)) {
		get_template_part( 'template-parts/elaborateBar' );
	}


	//news
	if (get_theme_mod('homeBuild_news', false)) {
		get_template_part( 'template-parts/posts' );
	}

	//blog
	if (get_theme_mod('homeBuild_blog', false)) {
		get_template_part( 'template-parts/blogs' );
	}


	get_template_part( 'template-parts/homepage-items' );





	//partners
	if (get_theme_mod('homeBuild_Partners', false)) {
		get_template_part( 'template-parts/partners' );
	}

?>

<?php
get_footer();
