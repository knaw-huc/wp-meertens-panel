<?php /* Template Name: home big posts  */ ?>
<?php
get_header();
?>
<div id="homeSpitBigPost">

<?php
	//splitscreen hero
	if (get_theme_mod('homeBuild_splitHero', false)) {
		get_template_part( 'template-parts/home-hero-split' );
	}

	if (get_theme_mod('isElaborate', false)) {
		get_template_part( 'template-parts/elaborateBar' );
	}

	get_template_part( 'template-parts/homepage-items' );

	//news
	if (get_theme_mod('homeBuild_news', false)) {
		get_template_part( 'template-parts/home-posts-cards' );
	}

	//blog
	if (get_theme_mod('homeBuild_blog', false)) {
		get_template_part( 'template-parts/blogs' );
	}








	//partners
	if (get_theme_mod('homeBuild_Partners', false)) {
		get_template_part( 'template-parts/partners' );
	}

?>

</div>
<?php
get_footer();
