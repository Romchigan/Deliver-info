<?php
/**
 * Deliver Theme Customizer
 *
 * @package Deliver
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function deliver_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'deliver_customize_register' );



/*Social*/
function social_icon_customize_register ($wp_customize) {
    $wp_customize->add_section( 'social_icons' , array(
        'title'      => __( 'Social icons', 'deliver' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'social_twitter_setting' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_twitter_setting_control', array(
        'label'      => __( 'Add your twitter links', 'deliver' ),
        'section'    => 'social_icons',
        'settings'   => 'social_twitter_setting',
    ) ) );

    $wp_customize->add_setting( 'social_facebook_setting' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_facebook_setting_control', array(
        'label'      => __( 'Add your facebook links', 'deliver' ),
        'section'    => 'social_icons',
        'settings'   => 'social_facebook_setting',
    ) ) );


    $wp_customize->add_setting( 'rss_setting' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rss_setting_control', array(
        'label'      => __( 'Add your rss links', 'deliver' ),
        'section'    => 'social_icons',
        'settings'   => 'rss_setting',
    ) ) );

}

add_action( 'customize_register', 'social_icon_customize_register' );


/*Header banner*/
function header_banner_customize_register ($wp_customize) {
    $wp_customize->add_section( 'header_banner' , array(
        'title'      => __( 'Header banner', 'deliver' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'header_banner_first' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_setting( 'header_banner_second' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_setting( 'header_banner_third' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_setting( 'header_banner_fourth' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_first_control', array(
        'label'      => __( 'Add your first banner', 'deliver' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_first',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_second_control', array(
        'label'      => __( 'Add your second banner', 'deliver' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_second',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_third_control', array(
        'label'      => __( 'Add your third banner', 'deliver' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_third',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_fourth_control', array(
        'label'      => __( 'Add your fourth banner', 'deliver' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_fourth',
    ) ) );
}

add_action( 'customize_register', 'header_banner_customize_register' );



/*Header info*/
function header_info_customize_register ($wp_customize) {
    $wp_customize->add_section( 'header_info' , array(
        'title'      => __( 'Header information', 'deliver' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'header_start_heading' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_start_heading_control', array(
        'label'      => __( 'Add your site start heading', 'deliver' ),
        'section'    => 'header_info',
        'settings'   => 'header_start_heading',
    ) ) );


    $wp_customize->add_setting( 'header_end_heading' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_end_heading_control', array(
        'label'      => __( 'Add your site end heading', 'deliver' ),
        'section'    => 'header_info',
        'settings'   => 'header_end_heading',
    ) ) );


    $wp_customize->add_setting( 'header_sub_heading' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_sub_heading_control', array(
        'label'      => __( 'Add your site sub heading', 'deliver' ),
        'section'    => 'header_info',
        'settings'   => 'header_sub_heading',
    ) ) );


    $wp_customize->add_setting( 'banner_button' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner_button_control', array(
        'label'      => __( 'Add your text into button', 'deliver' ),
        'section'    => 'header_info',
        'settings'   => 'banner_button',
    ) ) );
}

add_action( 'customize_register', 'header_info_customize_register' );


/*Footer contact*/
function footer_contact_customize_register ($wp_customize) {
    $wp_customize->add_section( 'footer_contact' , array(
        'title'      => __( 'Footer contact', 'deliver' ),
        'priority'   => 40,
    ) );


    $wp_customize->add_setting( 'footer_contact_settings' , array(
        'default'   => 'Contact info',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_settings_control', array(
        'label'      => __( 'Add your heading contact:', 'deliver' ),
        'section'    => 'footer_contact',
        'settings'   => 'footer_contact_settings',
    ) ) );


    $wp_customize->add_setting( 'footer_contact_address' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_address_control', array(
        'label'      => __( 'Add your address:', 'deliver' ),
        'section'    => 'footer_contact',
        'settings'   => 'footer_contact_address',
    ) ) );



    $wp_customize->add_setting( 'footer_contact_mail' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_mail_control', array(
        'label'      => __( 'Add your mail:', 'deliver' ),
        'section'    => 'footer_contact',
        'settings'   => 'footer_contact_mail',
    ) ) );


    $wp_customize->add_setting( 'footer_contact_coordinates' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_coordinates_control', array(
        'label'      => __( 'Add your coordinates:', 'deliver' ),
        'section'    => 'footer_contact',
        'settings'   => 'footer_contact_coordinates',
    ) ) );

}

add_action( 'customize_register', 'footer_contact_customize_register' );


/*Footer links*/
function footer_links_customize_register ($wp_customize) {
    $wp_customize->add_section( 'footer_links' , array(
        'title'      => __( 'Footer links', 'deliver' ),
        'priority'   => 40,
    ) );


    $wp_customize->add_setting( 'footer_links_settings' , array(
        'default'   => 'Quick Links',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_links_settings_control', array(
        'label'      => __( 'Add your heading links:', 'deliver' ),
        'section'    => 'footer_links',
        'settings'   => 'footer_links_settings',
    ) ) );

}

add_action( 'customize_register', 'footer_links_customize_register' );



/*Footer newsletter*/
function footer_newsletter_customize_register ($wp_customize) {
    $wp_customize->add_section( 'footer_newsletter' , array(
        'title'      => __( 'Footer newsletter', 'deliver' ),
        'priority'   => 40,
    ) );


    $wp_customize->add_setting( 'footer_newsletter_settings' , array(
        'default'   => 'newsletter',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_newsletter_settings_control', array(
        'label'      => __( 'Add your heading newsletter:', 'deliver' ),
        'section'    => 'footer_newsletter',
        'settings'   => 'footer_newsletter_settings',
    ) ) );

    $wp_customize->add_setting( 'footer_newsletter_info' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_newsletter_info_control', array(
        'label'      => __( 'Add your info newsletter:', 'deliver' ),
        'section'    => 'footer_newsletter',
        'settings'   => 'footer_newsletter_info',
    ) ) );


    $wp_customize->add_setting( 'footer_newsletter_email' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_newsletter_email_control', array(
        'label'      => __( 'Add your placeholder into email input:', 'deliver' ),
        'section'    => 'footer_newsletter',
        'settings'   => 'footer_newsletter_email',
    ) ) );


    $wp_customize->add_setting( 'footer_newsletter_button_text' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_newsletter_button_text_control', array(
        'label'      => __( 'Add your text into submit button:', 'deliver' ),
        'section'    => 'footer_newsletter',
        'settings'   => 'footer_newsletter_button_text',
    ) ) );

}

add_action( 'customize_register', 'footer_newsletter_customize_register' );


/*Sub-footer*/
function subfooter_customize_register ($wp_customize) {
    $wp_customize->add_section( 'sub_footer' , array(
        'title'      => __( 'Sub-footer info', 'deliver' ),
        'priority'   => 40,
    ) );


    $wp_customize->add_setting( 'sub_footer_settings' , array(
        'default'   => 'All Rights Reserved.',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sub_footer_settings_control', array(
        'label'      => __( 'Add your heading newsletter:', 'deliver' ),
        'section'    => 'sub_footer',
        'settings'   => 'sub_footer_settings',
    ) ) );

}

add_action( 'customize_register', 'subfooter_customize_register' );



/*Home intro section*/

function home_intro_section_customize_register ($wp_customize) {
    $wp_customize->add_section( 'home_intro_section' , array(
        'title'      => __( 'Home intro section', 'deliver' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'home_intro_heading_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_intro_heading_settings_control', array(
        'label'      => __( 'Add your heading into home intro section:', 'deliver' ),
        'section'    => 'home_intro_section',
        'settings'   => 'home_intro_heading_settings',
    ) ) );


    $wp_customize->add_setting( 'home_intro_info_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_intro_info_settings_control', array(
        'label'      => __( 'Add your info into home intro section:', 'deliver' ),
        'section'    => 'home_intro_section',
        'settings'   => 'home_intro_info_settings',
    ) ) );

}

add_action( 'customize_register', 'home_intro_section_customize_register' );


/*Purchase section*/

function home_purchase_section_customize_register ($wp_customize) {
    $wp_customize->add_section( 'home_purchase_section' , array(
        'title'      => __( 'Home purchase section', 'deliver' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'home_purchase_heading_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_purchase_heading_settings_control', array(
        'label'      => __( 'Add your heading into home intro section:', 'deliver' ),
        'section'    => 'home_purchase_section',
        'settings'   => 'home_purchase_heading_settings',
    ) ) );


    $wp_customize->add_setting( 'home_purchase_info_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_purchase_info_settings_control', array(
        'label'      => __( 'Add your info into home intro section:', 'deliver' ),
        'section'    => 'home_purchase_section',
        'settings'   => 'home_purchase_info_settings',
    ) ) );

    $wp_customize->add_setting( 'home_purchase_button_text' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_purchase_button_text_control', array(
        'label'      => __( 'Add your text into purchase button:', 'deliver' ),
        'section'    => 'home_purchase_section',
        'settings'   => 'home_purchase_button_text',
    ) ) );


    $wp_customize->add_setting( 'home_purchase_button_color' , array(
        'default'   => '#87b672',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_purchase_button_bg_color_control', array(
        'label'      => __( 'Add your background color  button:', 'deliver' ),
        'section'    => 'home_purchase_section',
        'settings'   => 'home_purchase_button_color',
    ) ) );


    $wp_customize->add_setting( 'home_purchase_button_color_text' , array(
        'default'   => '#fff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_purchase_button_text_color_control', array(
        'label'      => __( 'Add your color text  button:', 'deliver' ),
        'section'    => 'home_purchase_section',
        'settings'   => 'home_purchase_button_color_text',
    ) ) );

}

add_action( 'customize_register', 'home_purchase_section_customize_register' );

/*Portfolio section*/
function home_portfolio_section_customize_register ($wp_customize) {
    $wp_customize->add_section( 'home_portfolio_section' , array(
        'title'      => __( 'Home portfolio section', 'deliver' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'home_portfolio_heading_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_portfolio_heading_settings_control', array(
        'label'      => __( 'Add your heading into home portfolio section:', 'deliver' ),
        'section'    => 'home_portfolio_section',
        'settings'   => 'home_portfolio_heading_settings',
    ) ) );


    $wp_customize->add_setting( 'home_portfolio_info_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_portfolio_info_settings_control', array(
        'label'      => __( 'Add your info into home portfolio section:', 'deliver' ),
        'section'    => 'home_portfolio_section',
        'settings'   => 'home_portfolio_info_settings',
    ) ) );

    $wp_customize->add_setting( 'home_portfolio_image_pc_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_portfolio_image_pc_settings_control', array(
        'label'      => __( 'Add your pc-image portfolio section:', 'deliver' ),
        'section'    => 'home_portfolio_section',
        'settings'   => 'home_portfolio_image_pc_settings',
    ) ) );

    $wp_customize->add_setting( 'home_portfolio_item_first_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_portfolio_item_first_settings_control', array(
        'label'      => __( 'Add your first image screen portfolio section:', 'deliver' ),
        'section'    => 'home_portfolio_section',
        'settings'   => 'home_portfolio_item_first_settings',
    ) ) );

    $wp_customize->add_setting( 'home_portfolio_item_second_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_portfolio_item_second_settings_control', array(
        'label'      => __( 'Add your second image screen portfolio section:', 'deliver' ),
        'section'    => 'home_portfolio_section',
        'settings'   => 'home_portfolio_item_second_settings',
    ) ) );

    $wp_customize->add_setting( 'home_portfolio_item_third_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_portfolio_item_third_settings_control', array(
        'label'      => __( 'Add your third image screen portfolio section:', 'deliver' ),
        'section'    => 'home_portfolio_section',
        'settings'   => 'home_portfolio_item_third_settings',
    ) ) );

}
add_action( 'customize_register', 'home_portfolio_section_customize_register' );


/*-----------------------------------About us section--------------------------------*/

/*About us intro section*/
function about_intro_section_customize_register ($wp_customize) {
    $wp_customize->add_section( 'about_intro_section' , array(
        'title'      => __( 'About intro section', 'deliver' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'about_intro_heading_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_intro_heading_settings_control', array(
        'label'      => __( 'Add your heading into about intro section:', 'deliver' ),
        'section'    => 'about_intro_section',
        'settings'   => 'about_intro_heading_settings',
    ) ) );


    $wp_customize->add_setting( 'about_intro_info_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_intro_info_settings_control', array(
        'label'      => __( 'Add your info into about intro section:', 'deliver' ),
        'section'    => 'about_intro_section',
        'settings'   => 'about_intro_info_settings',
    ) ) );

}
add_action( 'customize_register', 'about_intro_section_customize_register' );

/*About us list*/
function about_list_customize_register ($wp_customize) {
    $wp_customize->add_section( 'about_list_section' , array(
        'title'      => __( 'About us list', 'deliver' ),
        'priority'   => 30,
    ) );

		/*First item*/
    $wp_customize->add_setting( 'about_heading_first_item_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_heading_first_item_control', array(
        'label'      => __( 'Add your heading first item list:', 'deliver' ),
        'section'    => 'about_list_section',
        'settings'   => 'about_heading_first_item_settings',
    ) ) );

    $wp_customize->add_setting( 'about_info_first_item_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_info_first_item_control', array(
        'label'      => __( 'Add your info first item list:', 'deliver' ),
        'section'    => 'about_list_section',
        'settings'   => 'about_info_first_item_settings',
    ) ) );

    /*Second item*/
    $wp_customize->add_setting( 'about_heading_second_item_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_heading_second_item_control', array(
        'label'      => __( 'Add your heading second item list:', 'deliver' ),
        'section'    => 'about_list_section',
        'settings'   => 'about_heading_second_item_settings',
    ) ) );

    $wp_customize->add_setting( 'about_info_second_item_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_info_second_item_control', array(
        'label'      => __( 'Add your info second item list:', 'deliver' ),
        'section'    => 'about_list_section',
        'settings'   => 'about_info_second_item_settings',
    ) ) );

    /*Second item*/
    $wp_customize->add_setting( 'about_heading_third_item_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_heading_third_item_control', array(
        'label'      => __( 'Add your heading third item list:', 'deliver' ),
        'section'    => 'about_list_section',
        'settings'   => 'about_heading_third_item_settings',
    ) ) );

    $wp_customize->add_setting( 'about_info_third_item_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_info_third_item_control', array(
        'label'      => __( 'Add your info third item list:', 'deliver' ),
        'section'    => 'about_list_section',
        'settings'   => 'about_info_third_item_settings',
    ) ) );
}
add_action( 'customize_register', 'about_list_customize_register' );

/*Our team section*/
function our_team_section_customize_register ($wp_customize) {
    $wp_customize->add_section( 'our_team_section' , array(
        'title'      => __( 'Our team section (About page)', 'deliver' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'our_team_heading_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'our_team_heading_control', array(
        'label'      => __( 'Add your heading into our team section:', 'deliver' ),
        'section'    => 'our_team_section',
        'settings'   => 'our_team_heading_settings',
    ) ) );


    $wp_customize->add_setting( 'our_team_info_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'our_team_info_control', array(
        'label'      => __( 'Add your info into our team section:', 'deliver' ),
        'section'    => 'our_team_section',
        'settings'   => 'our_team_info_settings',
    ) ) );

}
add_action( 'customize_register', 'our_team_section_customize_register' );

/*Output Customize CSS*/
function deliver_customize_css() { ?>
    <style type="text/css">
        .btn-purchase {
            background-color: <?php echo get_theme_mod( 'home_purchase_button_color' ); ?>;
            color: <?php echo get_theme_mod( 'home_purchase_button_color_text' ); ?>;
        }
    </style>
<?php }
add_action( 'wp_head', 'deliver_customize_css' );







/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function deliver_customize_preview_js() {
	wp_enqueue_script( 'deliver_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'deliver_customize_preview_js' );
