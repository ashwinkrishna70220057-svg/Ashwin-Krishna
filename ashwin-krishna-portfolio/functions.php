<?php
/**
 * Ashwin Krishna Portfolio Theme Functions & Definitions
 *
 * @package Ashwin_Krishna_Portfolio
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Theme Setup: Register support for WordPress features
 */
function ashwin_portfolio_setup() {
    // Add default title tag support managed by WordPress
    add_theme_support( 'title-tag' );

    // Enable Featured Images
    add_theme_support( 'post-thumbnails' );

    // Enable Custom Logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // HTML5 markup support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Responsive embedded content
    add_theme_support( 'responsive-embeds' );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'ashwin-krishna-portfolio' ),
        'footer'  => __( 'Footer Navigation', 'ashwin-krishna-portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'ashwin_portfolio_setup' );

/**
 * Enqueue Styles and Scripts with version cache busting
 */
function ashwin_portfolio_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Google Fonts
    wp_enqueue_style(
        'ashwin-google-fonts',
        'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Syne:wght@600;700;800&display=swap',
        array(),
        null
    );

    // Font Awesome 6.5.1
    wp_enqueue_style(
        'ashwin-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Main Theme Stylesheet
    wp_enqueue_style(
        'ashwin-portfolio-style',
        get_stylesheet_uri(),
        array( 'ashwin-google-fonts', 'ashwin-fontawesome' ),
        $theme_version
    );

    // GSAP Core & ScrollTrigger
    wp_enqueue_script(
        'gsap-core',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array( 'gsap-core' ),
        '3.12.5',
        true
    );

    // Main Theme Interactive Script
    wp_enqueue_script(
        'ashwin-portfolio-script',
        get_template_directory_uri() . '/script.js',
        array( 'gsap-core', 'gsap-scrolltrigger' ),
        $theme_version,
        true
    );

    // Localize script data for AJAX
    wp_localize_script( 'ashwin-portfolio-script', 'ashwinAjax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'ashwin_contact_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'ashwin_portfolio_scripts' );

/**
 * Handle AJAX Contact Form Submissions securely
 */
function ashwin_handle_contact_submission() {
    check_ajax_referer( 'ashwin_contact_nonce', 'nonce' );

    $name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $subject = isset( $_POST['subject'] ) ? sanitize_text_field( wp_unslash( $_POST['subject'] ) ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => __( 'Please fill out all required fields.', 'ashwin-krishna-portfolio' ) ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'ashwin-krishna-portfolio' ) ) );
    }

    // Prepare Email notification
    $to          = get_option( 'admin_email' );
    $mail_sub    = sprintf( '[Portfolio Contact] %s - %s', $subject, $name );
    $mail_body   = "New message received from Ashwin Krishna's portfolio:\n\n";
    $mail_body  .= "Name: " . $name . "\n";
    $mail_body  .= "Email: " . $email . "\n";
    $mail_body  .= "Subject: " . $subject . "\n\n";
    $mail_body  .= "Message:\n" . $message . "\n";
    $headers     = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );

    wp_mail( $to, $mail_sub, $mail_body, $headers );

    wp_send_json_success( array(
        'message' => sprintf( __( 'Thank you, %s! Your inquiry regarding "%s" has been received. Ashwin will reply shortly.', 'ashwin-krishna-portfolio' ), esc_html( $name ), esc_html( $subject ) )
    ) );
}
add_action( 'wp_ajax_ashwin_contact', 'ashwin_handle_contact_submission' );
add_action( 'wp_ajax_nopriv_ashwin_contact', 'ashwin_handle_contact_submission' );

/**
 * Remove standard WordPress generator tags for security & performance
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
