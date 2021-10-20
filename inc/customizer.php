<?php
/**
 * Raylight theme customizer
 * 
 * @package raylight
 */
function raylight_customizer_register( $wpc ) {
	// Create section for Social Media Links
	$wpc->add_section( 'section_social_media', array(
		'title' 	=> __( 'Link Sosial Media', 'raylight' ),
		'priority' 	=> 500,
	) );

	$wpc->add_setting( 'facebook_url', array(
		'sanitize_callback' => 'sanitize_url',
	) );

	$wpc->add_setting( 'twitter_url', array(
		'sanitize_callback' => 'sanitize_url',
	) );

	$wpc->add_setting( 'instagram_url', array(
		'sanitize_callback' => 'sanitize_url',
	) );

	$wpc->add_setting( 'youtube_url', array(
		'sanitize_callback' => 'sanitize_url',
	) );

	$wpc->add_control( 'facebook_url_control', array(
		'label' => __( 'Url Facebook Anda', 'raylight' ),
		'section' => 'section_social_media',
		'settings' => 'facebook_url',
		'type' => 'url',
		'input_attrs' => array(
			'placeholder' => 'https://www.facebook.com/',
		),
	) );

	$wpc->add_control( 'twitter_url_control', array(
		'label' => __( 'Url Twitter Anda', 'raylight' ),
		'section' => 'section_social_media',
		'settings' => 'twitter_url',
		'type' => 'url',
		'input_attrs' => array(
			'placeholder' => 'https://twitter.com/',
		),
	) );

	$wpc->add_control( 'instagram_url_control', array(
		'label' => __( 'Url Instagram Anda', 'raylight' ),
		'section' => 'section_social_media',
		'settings' => 'instagram_url',
		'type' => 'url',
		'input_attrs' => array(
			'placeholder' => 'https://instagram.com/',
		),
	) );

	$wpc->add_control( 'youtube_url_control', array(
		'label' => __( 'Url Youtube Anda', 'raylight' ),
		'section' => 'section_social_media',
		'settings' => 'youtube_url',
		'type' => 'url',
		'input_attrs' => array(
			'placeholder' => 'https://youtube.com/',
		),
	) );

	// Create panel for Advertisement
	$wpc->add_panel( 'panel_ads', array(
		'title' 	=> __( 'Pengaturan Iklan', 'raylight' ),
		'priority' 	=> 600,
	) );

	$wpc->add_section( 'section_ads_header', array(
		'title' => __( 'Iklan pada Header', 'raylight' ),
		'panel' => 'panel_ads',
	) );

	$wpc->add_section( 'section_ads_section_1', array(
		'title' => __( 'Iklan bagian 1', 'raylight' ),
		'panel' => 'panel_ads',
	) );

	$wpc->add_setting( 'setting_ads_header', array(
		'sanitize_callback' => false,
	) );

	$wpc->add_setting( 'setting_ads_section_1', array(
		'sanitize_callback' => false,
	) );

	$wpc->add_control( 'control_ads_header', array(
		'label' => __( 'Kode Iklan', 'raylight' ),
		'section' => 'section_ads_header',
		'settings' => 'setting_ads_header',
		'type' => 'textarea',
	) );

	$wpc->add_control( 'control_ads_section_1', array(
		'label' => __( 'Kode Iklan', 'raylight' ),
		'section' => 'section_ads_section_1',
		'settings' => 'setting_ads_section_1',
		'type' => 'textarea',
	) );
}
add_action( 'customize_register', 'raylight_customizer_register' );
?>