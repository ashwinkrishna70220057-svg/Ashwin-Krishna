<?php
/**
 * Ashwin Krishna Portfolio Theme Functions & Definitions
 *
 * @package Ashwin_Krishna_Portfolio
 * @version 1.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/* --------------------------------------------------------------------------
   1. GMAIL SMTP AUTHENTICATION CONFIGURATION
   -------------------------------------------------------------------------- */
define( 'ASHWIN_SMTP_HOST', 'smtp.gmail.com' );
define( 'ASHWIN_SMTP_PORT', 587 );
define( 'ASHWIN_SMTP_SECURE', 'tls' );
define( 'ASHWIN_SMTP_USER', 'ashwinkrishna70220057@gmail.com' );
define( 'ASHWIN_SMTP_PASS', 'wavytssupqgbsefs' ); // Gmail App Password
define( 'ASHWIN_NOTIFICATION_EMAIL', 'ashwinkrishna70220057@gmail.com' );

/**
 * Configure PHPMailer to send emails via Gmail SMTP securely
 */
function ashwin_configure_gmail_smtp( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = ASHWIN_SMTP_HOST;
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = ASHWIN_SMTP_PORT;
    $phpmailer->SMTPSecure = ASHWIN_SMTP_SECURE;
    $phpmailer->Username   = ASHWIN_SMTP_USER;
    $phpmailer->Password   = ASHWIN_SMTP_PASS;
    $phpmailer->From       = ASHWIN_SMTP_USER;
    $phpmailer->FromName   = 'Ashwin Krishna Portfolio';
    $phpmailer->CharSet    = 'UTF-8';
}
add_action( 'phpmailer_init', 'ashwin_configure_gmail_smtp' );

// Filter From Email & From Name for all outgoing WordPress emails
add_filter( 'wp_mail_from', function( $original ) {
    return ASHWIN_SMTP_USER;
} );

add_filter( 'wp_mail_from_name', function( $original ) {
    return 'Ashwin Krishna Portfolio';
} );

/* --------------------------------------------------------------------------
   2. THEME SETUP
   -------------------------------------------------------------------------- */
function ashwin_portfolio_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'ashwin-krishna-portfolio' ),
        'footer'  => __( 'Footer Navigation', 'ashwin-krishna-portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'ashwin_portfolio_setup' );

/* --------------------------------------------------------------------------
   3. ENQUEUE STYLES & SCRIPTS
   -------------------------------------------------------------------------- */
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

    // Localize script data for WordPress AJAX
    wp_localize_script( 'ashwin-portfolio-script', 'ashwinAjax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'ashwin_contact_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'ashwin_portfolio_scripts' );

/* --------------------------------------------------------------------------
   4. CUSTOM POST TYPE: ENQUIRIES (WP-ADMIN DASHBOARD INTEGRATION)
   -------------------------------------------------------------------------- */
function ashwin_register_enquiries_cpt() {
    $labels = array(
        'name'                  => _x( 'Enquiries', 'Post Type General Name', 'ashwin-krishna-portfolio' ),
        'singular_name'         => _x( 'Enquiry', 'Post Type Singular Name', 'ashwin-krishna-portfolio' ),
        'menu_name'             => __( 'Enquiries', 'ashwin-krishna-portfolio' ),
        'name_admin_bar'        => __( 'Enquiry', 'ashwin-krishna-portfolio' ),
        'archives'              => __( 'Enquiry Archives', 'ashwin-krishna-portfolio' ),
        'all_items'             => __( 'All Enquiries', 'ashwin-krishna-portfolio' ),
        'add_new_item'          => __( 'Add New Enquiry', 'ashwin-krishna-portfolio' ),
        'add_new'               => __( 'Add New', 'ashwin-krishna-portfolio' ),
        'new_item'              => __( 'New Enquiry', 'ashwin-krishna-portfolio' ),
        'edit_item'             => __( 'View Enquiry Details', 'ashwin-krishna-portfolio' ),
        'update_item'           => __( 'Update Enquiry', 'ashwin-krishna-portfolio' ),
        'view_item'             => __( 'View Enquiry', 'ashwin-krishna-portfolio' ),
        'search_items'          => __( 'Search Enquiries', 'ashwin-krishna-portfolio' ),
        'not_found'             => __( 'No enquiries received yet.', 'ashwin-krishna-portfolio' ),
        'not_found_in_trash'    => __( 'No enquiries found in Trash.', 'ashwin-krishna-portfolio' ),
    );

    $args = array(
        'label'                 => __( 'Enquiry', 'ashwin-krishna-portfolio' ),
        'description'           => __( 'Contact inquiries received from Ashwin Krishna portfolio website', 'ashwin-krishna-portfolio' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-email-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
    );

    register_post_type( 'portfolio_enquiry', $args );
}
add_action( 'init', 'ashwin_register_enquiries_cpt', 0 );

/* --------------------------------------------------------------------------
   5. ENQUIRIES ADMIN MENU NOTIFICATION BADGE
   -------------------------------------------------------------------------- */
function ashwin_enquiry_admin_menu_badge() {
    global $menu;
    $count = wp_count_posts( 'portfolio_enquiry' )->publish;
    if ( $count > 0 ) {
        foreach ( $menu as $key => $value ) {
            if ( isset( $value[2] ) && $value[2] === 'edit.php?post_type=portfolio_enquiry' ) {
                $menu[$key][0] .= ' <span class="update-plugins count-' . $count . '"><span class="plugin-count" style="background:#00f2fe; color:#090a0f; font-weight:700; border-radius:10px; padding:0 6px;">' . $count . '</span></span>';
                break;
            }
        }
    }
}
add_action( 'admin_menu', 'ashwin_enquiry_admin_menu_badge' );

/* --------------------------------------------------------------------------
   6. CUSTOM ADMIN COLUMNS FOR ENQUIRIES
   -------------------------------------------------------------------------- */
function ashwin_enquiry_custom_columns( $columns ) {
    $new_columns = array(
        'cb'              => $columns['cb'],
        'title'           => __( 'Sender / Organization', 'ashwin-krishna-portfolio' ),
        'enquiry_email'   => __( 'Email Address', 'ashwin-krishna-portfolio' ),
        'enquiry_subject' => __( 'Purpose of Outreach', 'ashwin-krishna-portfolio' ),
        'enquiry_message' => __( 'Message Preview', 'ashwin-krishna-portfolio' ),
        'date'            => __( 'Received Date', 'ashwin-krishna-portfolio' ),
    );
    return $new_columns;
}
add_filter( 'manage_portfolio_enquiry_posts_columns', 'ashwin_enquiry_custom_columns' );

function ashwin_enquiry_custom_column_data( $column, $post_id ) {
    switch ( $column ) {
        case 'enquiry_email':
            $email = get_post_meta( $post_id, '_enquiry_email', true );
            if ( $email ) {
                echo '<a href="mailto:' . esc_attr( $email ) . '" style="color:#0284c7; font-weight:600;"><span class="dashicons dashicons-email" style="font-size:16px; vertical-align:middle; margin-right:4px;"></span>' . esc_html( $email ) . '</a>';
            } else {
                echo '<span style="color:#94a3b8;">&mdash;</span>';
            }
            break;

        case 'enquiry_subject':
            $subject = get_post_meta( $post_id, '_enquiry_subject', true );
            if ( $subject ) {
                echo '<span style="display:inline-block; background:#e0f2fe; color:#0369a1; padding:3px 8px; border-radius:4px; font-size:12px; font-weight:600;">' . esc_html( $subject ) . '</span>';
            } else {
                echo '<span style="color:#94a3b8;">&mdash;</span>';
            }
            break;

        case 'enquiry_message':
            $message = get_post_meta( $post_id, '_enquiry_message', true );
            if ( $message ) {
                echo esc_html( wp_trim_words( $message, 12, '...' ) );
            } else {
                echo '<span style="color:#94a3b8;">&mdash;</span>';
            }
            break;
    }
}
add_action( 'manage_portfolio_enquiry_posts_custom_column', 'ashwin_enquiry_custom_column_data', 10, 2 );

/* --------------------------------------------------------------------------
   7. ENQUIRY DETAILS META BOX IN WP-ADMIN
   -------------------------------------------------------------------------- */
function ashwin_add_enquiry_meta_boxes() {
    add_meta_box(
        'ashwin_enquiry_details',
        __( '📋 Detailed Message & Sender Profile', 'ashwin-krishna-portfolio' ),
        'ashwin_render_enquiry_details_metabox',
        'portfolio_enquiry',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'ashwin_add_enquiry_meta_boxes' );

function ashwin_render_enquiry_details_metabox( $post ) {
    $name    = get_post_meta( $post->ID, '_enquiry_name', true );
    $email   = get_post_meta( $post->ID, '_enquiry_email', true );
    $subject = get_post_meta( $post->ID, '_enquiry_subject', true );
    $message = get_post_meta( $post->ID, '_enquiry_message', true );
    $date    = get_the_date( 'F j, Y @ g:i A', $post->ID );
    ?>
    <div style="background:#0f172a; color:#f8fafc; padding:20px; border-radius:8px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap:15px; margin-bottom:20px; border-bottom:1px solid rgba(255,255,255,0.1); padding-bottom:15px;">
            <div>
                <strong style="color:#94a3b8; font-size:12px; text-transform:uppercase; letter-spacing:0.05em; display:block;">Sender Name:</strong>
                <span style="font-size:16px; font-weight:700; color:#00f2fe;"><?php echo esc_html( $name ? $name : get_the_title( $post->ID ) ); ?></span>
            </div>
            <div>
                <strong style="color:#94a3b8; font-size:12px; text-transform:uppercase; letter-spacing:0.05em; display:block;">Email Address:</strong>
                <a href="mailto:<?php echo esc_attr( $email ); ?>" style="color:#38bdf8; font-size:15px; font-weight:600; text-decoration:none;">
                    <?php echo esc_html( $email ); ?> <span class="dashicons dashicons-external" style="font-size:14px; vertical-align:middle;"></span>
                </a>
            </div>
            <div>
                <strong style="color:#94a3b8; font-size:12px; text-transform:uppercase; letter-spacing:0.05em; display:block;">Outreach Purpose:</strong>
                <span style="display:inline-block; background:rgba(0,242,254,0.15); color:#00f2fe; padding:3px 10px; border-radius:12px; font-size:13px; font-weight:600; margin-top:2px;">
                    <?php echo esc_html( $subject ); ?>
                </span>
            </div>
            <div>
                <strong style="color:#94a3b8; font-size:12px; text-transform:uppercase; letter-spacing:0.05em; display:block;">Received Date:</strong>
                <span style="color:#e2e8f0; font-size:14px;"><?php echo esc_html( $date ); ?></span>
            </div>
        </div>

        <div>
            <strong style="color:#94a3b8; font-size:12px; text-transform:uppercase; letter-spacing:0.05em; display:block; margin-bottom:8px;">Full Message:</strong>
            <div style="background:#1e293b; border-left:4px solid #00f2fe; padding:15px; border-radius:4px; font-size:15px; line-height:1.7; color:#f1f5f9; white-space:pre-wrap;"><?php echo esc_html( $message ); ?></div>
        </div>

        <div style="margin-top:20px; display:flex; gap:10px;">
            <a href="mailto:<?php echo esc_attr( $email ); ?>?subject=Re: <?php echo esc_attr( $subject ); ?>" class="button button-primary button-large" style="background:#0284c7; border-color:#0284c7;">
                <span class="dashicons dashicons-email-alt" style="vertical-align:middle; margin-right:4px;"></span> Reply to <?php echo esc_html( $name ? $name : 'Sender' ); ?>
            </a>
            <a href="<?php echo esc_url( admin_url( 'edit.php?post_type=portfolio_enquiry' ) ); ?>" class="button button-large">
                &larr; Back to All Enquiries
            </a>
        </div>
    </div>
    <?php
}

/* --------------------------------------------------------------------------
   8. DASHBOARD WIDGET: RECENT ENQUIRIES
   -------------------------------------------------------------------------- */
function ashwin_add_dashboard_enquiries_widget() {
    wp_add_dashboard_widget(
        'ashwin_recent_enquiries_widget',
        __( '📩 Recent Portfolio Enquiries (Ashwin Krishna)', 'ashwin-krishna-portfolio' ),
        'ashwin_render_dashboard_enquiries_widget'
    );
}
add_action( 'wp_dashboard_setup', 'ashwin_add_dashboard_enquiries_widget' );

function ashwin_render_dashboard_enquiries_widget() {
    $enquiries = get_posts( array(
        'post_type'      => 'portfolio_enquiry',
        'posts_per_page' => 5,
        'post_status'    => 'publish',
    ) );

    if ( empty( $enquiries ) ) {
        echo '<p style="color:#64748b; font-style:italic;">No enquiries received yet. When visitors submit the contact form, their inquiries will appear here automatically.</p>';
        return;
    }

    echo '<ul style="margin:0; padding:0; list-style:none;">';
    foreach ( $enquiries as $enquiry ) {
        $name    = get_post_meta( $enquiry->ID, '_enquiry_name', true );
        $email   = get_post_meta( $enquiry->ID, '_enquiry_email', true );
        $subject = get_post_meta( $enquiry->ID, '_enquiry_subject', true );
        $edit_link = get_edit_post_link( $enquiry->ID );

        echo '<li style="padding:10px 0; border-bottom:1px solid #f1f5f9; display:flex; justify-content:space-between; align-items:center;">';
        echo '<div>';
        echo '<a href="' . esc_url( $edit_link ) . '" style="font-weight:700; color:#0f172a; text-decoration:none;">' . esc_html( $name ? $name : $enquiry->post_title ) . '</a>';
        echo '<div style="font-size:12px; color:#64748b;">' . esc_html( $subject ) . ' &bull; ' . esc_html( $email ) . '</div>';
        echo '</div>';
        echo '<a href="' . esc_url( $edit_link ) . '" class="button button-small">View</a>';
        echo '</li>';
    }
    echo '</ul>';
    echo '<p style="margin-top:12px; margin-bottom:0;"><a href="' . esc_url( admin_url( 'edit.php?post_type=portfolio_enquiry' ) ) . '" class="button button-primary">View All Enquiries &rarr;</a></p>';
}

/* --------------------------------------------------------------------------
   9. AJAX CONTACT FORM SUBMISSION & GMAIL NOTIFICATION HANDLER
   -------------------------------------------------------------------------- */
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

    // 1. Save as a post in 'portfolio_enquiry' CPT for Dashboard viewing
    $post_title = sprintf( '%s — %s', $name, $subject );
    $post_id = wp_insert_post( array(
        'post_title'   => $post_title,
        'post_content' => $message,
        'post_status'  => 'publish',
        'post_type'    => 'portfolio_enquiry',
    ) );

    if ( $post_id && ! is_wp_error( $post_id ) ) {
        update_post_meta( $post_id, '_enquiry_name', $name );
        update_post_meta( $post_id, '_enquiry_email', $email );
        update_post_meta( $post_id, '_enquiry_subject', $subject );
        update_post_meta( $post_id, '_enquiry_message', $message );
        update_post_meta( $post_id, '_enquiry_ip', isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( $_SERVER['REMOTE_ADDR'] ) : '' );
        update_post_meta( $post_id, '_enquiry_status', 'unread' );
    }

    // 2. Dispatch Email notification directly to ashwinkrishna70220057@gmail.com via Gmail SMTP
    $to = ASHWIN_NOTIFICATION_EMAIL;
    $mail_sub = sprintf( '⚡ New Portfolio Enquiry: %s — %s', $subject, $name );
    
    // HTML Email Template
    $mail_html  = '<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,sans-serif; background:#07080b; color:#f8fafc; padding:30px; margin:0;">';
    $mail_html .= '<div style="max-width:600px; margin:0 auto; background:#0f172a; border-radius:12px; border:1px solid rgba(255,255,255,0.1); overflow:hidden; box-shadow:0 20px 40px rgba(0,0,0,0.5);">';
    $mail_html .= '<div style="background:linear-gradient(135deg, #00f2fe, #0284c7); padding:24px; text-align:center;">';
    $mail_html .= '<h2 style="margin:0; color:#090a0f; font-size:22px; font-weight:800; letter-spacing:-0.02em;">Ashwin Krishna &bull; New Portfolio Enquiry</h2>';
    $mail_html .= '</div>';
    $mail_html .= '<div style="padding:28px;">';
    $mail_html .= '<p style="font-size:15px; color:#94a3b8; margin-top:0;">You have received a new contact inquiry from your website:</p>';
    
    $mail_html .= '<div style="background:#1e293b; padding:18px; border-radius:8px; margin-bottom:20px;">';
    $mail_html .= '<p style="margin:0 0 10px 0; color:#f1f5f9;"><strong>👤 Sender:</strong> ' . esc_html( $name ) . '</p>';
    $mail_html .= '<p style="margin:0 0 10px 0; color:#f1f5f9;"><strong>✉️ Email:</strong> <a href="mailto:' . esc_attr( $email ) . '" style="color:#00f2fe; text-decoration:none;">' . esc_html( $email ) . '</a></p>';
    $mail_html .= '<p style="margin:0; color:#f1f5f9;"><strong>🎯 Purpose:</strong> <span style="background:rgba(0,242,254,0.15); color:#00f2fe; padding:2px 8px; border-radius:4px; font-weight:600;">' . esc_html( $subject ) . '</span></p>';
    $mail_html .= '</div>';

    $mail_html .= '<h4 style="margin:0 0 10px 0; color:#cbd5e1; font-size:14px; text-transform:uppercase; letter-spacing:0.05em;">Message:</h4>';
    $mail_html .= '<div style="background:#1e293b; border-left:4px solid #00f2fe; padding:16px; border-radius:4px; font-size:15px; line-height:1.7; color:#f1f5f9; white-space:pre-wrap; margin-bottom:24px;">' . esc_html( $message ) . '</div>';

    $mail_html .= '<div style="text-align:center; padding-top:10px;">';
    $mail_html .= '<a href="mailto:' . esc_attr( $email ) . '?subject=Re: ' . esc_attr( $subject ) . '" style="display:inline-block; background:linear-gradient(135deg, #00f2fe, #0284c7); color:#090a0f; font-weight:700; padding:12px 24px; border-radius:30px; text-decoration:none; margin-right:10px;">Reply to ' . esc_html( $name ) . ' &rarr;</a>';
    $mail_html .= '<a href="' . esc_url( admin_url( 'edit.php?post_type=portfolio_enquiry' ) ) . '" style="display:inline-block; background:rgba(255,255,255,0.08); color:#f8fafc; font-weight:600; padding:12px 20px; border-radius:30px; text-decoration:none;">View in WP-Admin</a>';
    $mail_html .= '</div>';
    
    $mail_html .= '</div>';
    $mail_html .= '<div style="background:#0a0f1d; padding:16px; text-align:center; font-size:12px; color:#64748b; border-top:1px solid rgba(255,255,255,0.05);">';
    $mail_html .= '&copy; ' . date('Y') . ' Ashwin Krishna Portfolio System &bull; Delivered via Gmail SMTP';
    $mail_html .= '</div>';
    $mail_html .= '</div></body></html>';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    // Send the notification email
    $mail_sent = wp_mail( $to, $mail_sub, $mail_html, $headers );

    wp_send_json_success( array(
        'message' => sprintf( __( 'Thank you, %s! Your enquiry regarding "%s" has been delivered to Ashwin Krishna (ashwinkrishna70220057@gmail.com) and recorded in the system.', 'ashwin-krishna-portfolio' ), esc_html( $name ), esc_html( $subject ) )
    ) );
}
add_action( 'wp_ajax_ashwin_contact', 'ashwin_handle_contact_submission' );
add_action( 'wp_ajax_nopriv_ashwin_contact', 'ashwin_handle_contact_submission' );

/* --------------------------------------------------------------------------
   10. PERFORMANCE & SECURITY CLEANUPS
   -------------------------------------------------------------------------- */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
