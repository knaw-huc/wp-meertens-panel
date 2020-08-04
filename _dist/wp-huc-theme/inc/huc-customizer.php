<?php

add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {

$wp_customize->remove_section( 'header_image' );

$wp_customize->add_section( 'cd_homepage_build' , array(
    'title'      => 'Homepage elements',
    'priority'   => 30,
) );





// Split hero on / off
$wp_customize->add_setting( 'homeBuild_splitHero' , array(
  'default'     => false,
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'homeBuild_splitHero', array(
  'type'        => 'checkbox',
  'label'       => 'Show Hero splitscreen',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_splitHero',
));



$wp_customize->add_section( 'Splitscreen' , array(
    'title'      => 'Home Split screen',
    'priority'   => 34,
) );

$wp_customize->add_control( 'homeBuild_splitHero2', array(
  'type'        => 'checkbox',
  'label'       => 'Show Hero splitscreen',
  'section'     => 'Splitscreen',
  'settings'    => 'homeBuild_splitHero',
));


// left block image
$wp_customize->add_setting( 'blockLeftImg' , array(
  'default'     => false,
  'transport'   => 'refresh',
) );

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blockLeftImgC', array(
  'label'       => 'Left block image',
  'section'     => 'Splitscreen',
  'settings'    => 'blockLeftImg',
)));


// left block BG color
$wp_customize->add_setting( 'blockLeftBGcolor' , array(
  'default'     => '#fff',
  'transport'   => 'refresh',
) );

$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'blockLeftBGcolor', array(
  'label'       => 'Left block background color',
  'section'     => 'Splitscreen',
  'settings'    => 'blockLeftBGcolor',
)));


// left block blend
$wp_customize->add_setting( 'blockLeftBlend' , array(
  'default'     => 'none',
  'transport'   => 'refresh',
) );

$wp_customize->add_control( 'blockLeftblend', array(
  'type'        => 'select',
  'label'       => 'Left block blend mode',
  'section'     => 'Splitscreen',
  'settings'    => 'blockLeftBlend',
  'choices' => array(
    'none' => 'none',
    'multiply' => 'multiply',
    'screen' => 'screen'
  )
));


// right block image
$wp_customize->add_setting( 'blockRightImg' , array(
  'default'     => false,
  'transport'   => 'refresh',
) );

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blockRightImgC', array(
  'label'       => 'Right block image',
  'section'     => 'Splitscreen',
  'settings'    => 'blockRightImg',
)));


// right block BG color
$wp_customize->add_setting( 'blockRightBGcolor' , array(
  'default'     => '#fff',
  'transport'   => 'refresh',
) );

$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'blockRightBGcolor', array(
  'label'       => 'Right block background color',
  'section'     => 'Splitscreen',
  'settings'    => 'blockRightBGcolor',
)));


// right block blend
$wp_customize->add_setting( 'blockRightTXTcolor' , array(
  'default'     => '#111',
  'transport'   => 'refresh',
) );

$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'blockRightTXTcolor', array(
  'label'       => 'Right block text color',
  'section'     => 'Splitscreen',
  'settings'    => 'blockRightTXTcolor',
)));


// right block blend
$wp_customize->add_setting( 'blockRightBlend' , array(
  'default'     => 'none',
  'transport'   => 'refresh',
) );

$wp_customize->add_control( 'blockRightblend', array(
  'type'        => 'select',
  'label'       => 'Right block blend mode',
  'section'     => 'Splitscreen',
  'settings'    => 'blockRightBlend',
  'choices' => array(
    'none' => 'none',
    'multiply' => 'multiply',
    'screen' => 'screen'
  )
));






















// partners
$wp_customize->add_setting( 'homeBuild_Partners' , array(
  'default'     => false,
  'transport'   => 'refresh',
) );

$wp_customize->add_control('homeBuild_Partners', array(
  'type'        => 'checkbox',
  'label'       => 'Show partners',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_Partners',
));













//news
$wp_customize->add_setting( 'homeBuild_news' , array(
  'default'     => false,
  'transport'   => 'refresh',
) );

$wp_customize->add_control('homeBuild_news', array(
  'type'        => 'checkbox',
  'label'       => 'Show news articles',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_news',
));


//blog
$wp_customize->add_setting( 'homeBuild_blog' , array(
  'default'     => false,
  'transport'   => 'refresh',
) );

$wp_customize->add_control('homeBuild_blog2', array(
  'type'        => 'checkbox',
  'label'       => 'Show blog articles',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_blog',
));







// brand color title_tagline
$wp_customize->add_setting( 'brandcolor1' , array(
  'default'     => 'rgb(13, 252, 239)',
  'transport'   => 'refresh',
) );


  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'brandColor', array(
  'label'       => 'Brand color #1',
  'section'     => 'colors',
  'settings'    => 'brandcolor1',
)));












// footer
$wp_customize->add_section( 'footer' , array(
    'title'      => 'Footer',
    'priority'   => 65,
) );


// Footer textblock 1
$wp_customize->add_setting( 'footer_block1' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'footer_block1', array(
  'type'        => 'textarea',
  'label'       => 'Text block 1',
  'section'     => 'footer',
  'settings'    => 'footer_block1',
));

// Footer textblock 2
$wp_customize->add_setting( 'footer_block2' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'footer_block2', array(
  'type'        => 'textarea',
  'label'       => 'Text block 2',
  'section'     => 'footer',
  'settings'    => 'footer_block2',
));

// Footer textblock 3
$wp_customize->add_setting( 'footer_block3' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'footer_block3', array(
  'type'        => 'textarea',
  'label'       => 'Text block 3',
  'section'     => 'footer',
  'settings'    => 'footer_block3',
));

// Footer textblock 4
$wp_customize->add_setting( 'footer_block4' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'footer_block4', array(
  'type'        => 'textarea',
  'label'       => 'Text block 4',
  'section'     => 'footer',
  'settings'    => 'footer_block4',
));


// brand color title_tagline
$wp_customize->add_setting( 'footerColorBG' , array(
  'default'     => 'rgb(13, 252, 239)',
  'transport'   => 'refresh',
) );


  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'footerColorBG', array(
  'label'       => 'Footer background color',
  'section'     => 'footer',
  'settings'    => 'footerColorBG',
)));


// Twitter
$wp_customize->add_setting( 'footerTwitterId' , array(
  'default'     => '',
  'transport'   => 'refresh',
) );

$wp_customize->add_control( 'footer_block4', array(

  'label'       => 'Twitter handle',
  'section'     => 'footer',
  'settings'    => 'footerTwitterId',
));















// eLaborate
$wp_customize->add_section( 'elaborate' , array(
    'title'      => 'eLaborate',
    'priority'   => 85,
) );

// is elaborate
$wp_customize->add_setting( 'isElaborate' , array(
  'default'     => false,
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'isElaborate', array(
  'type'        => 'checkbox',
  'label'       => 'Show eLaborate utilities',
  'section'     => 'elaborate',
  'settings'    => 'isElaborate',
  'description'    => 'If turned on an eLaborate bar will apprear and a large button to the edition.',
));

// is Huygens ing approved
$wp_customize->add_setting( 'ElaborateAproved' , array(
  'default'     => false,
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'ElaborateAproved', array(
  'type'        => 'checkbox',
  'label'       => 'Huygens ING approved',
  'section'     => 'elaborate',
  'settings'    => 'ElaborateAproved',
));


// Analytics code
$wp_customize->add_section( 'analytics' , array(
    'title'      => 'Analytics code',
    'priority'   => 80,
) );


// Analytics code
$wp_customize->add_setting( 'analyticsCode' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'analyticsCodeControl', array(
  'type'        => 'textarea',
  'label'       => 'Analytics code',
  'section'     => 'analytics',
  'settings'    => 'analyticsCode',
));



}



?>
