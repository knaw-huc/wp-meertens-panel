<?php /* Template Name: home big posts2  */ ?>
<?php
get_header();
?>
<div id="homeSpitBigPost">

<?php
	//splitscreen hero
	if (get_theme_mod('homeBuild_splitHero', false)) {
		get_template_part( 'template-parts/home-hero-blocks' );
	}



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
