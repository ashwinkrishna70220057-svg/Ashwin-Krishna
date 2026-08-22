<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="Ashwin Krishna">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Custom Cursor Glow & Dot -->
    <div class="custom-cursor" id="customCursor"></div>
    <div class="cursor-follower" id="cursorFollower"></div>

    <!-- Noise Texture Overlay -->
    <div class="noise-overlay"></div>

    <!-- Ambient Glowing Backdrops -->
    <div class="ambient-glow glow-1"></div>
    <div class="ambient-glow glow-2"></div>
    <div class="ambient-glow glow-3"></div>

    <!-- Page Preloader -->
    <div class="preloader" id="preloader">
        <div class="preloader-content">
            <div class="preloader-brand">
                <span class="brand-monogram">AK</span>
                <div class="preloader-text-wrap">
                    <span class="preloader-title">ASHWIN KRISHNA</span>
                    <span class="preloader-subtitle">FINANCE &bull; TAXATION &bull; RESEARCH</span>
                </div>
            </div>
            <div class="loader-bar-wrap">
                <div class="loader-bar" id="loaderBar"></div>
            </div>
            <div class="loader-status">
                <span id="loaderPercent">0%</span>
                <span class="loader-location"><i class="fa-solid fa-location-dot"></i> THAMMAMAM, KOCHI</span>
            </div>
        </div>
    </div>

    <!-- Sticky Navigation Bar -->
    <header class="site-header" id="siteHeader">
        <div class="header-container">
            <a href="<?php echo esc_url( home_url( '/#hero' ) ); ?>" class="brand-logo" aria-label="Ashwin Krishna Home">
                <span class="logo-box">AK</span>
                <span class="logo-text">Ashwin<span>Krishna</span></span>
            </a>

            <nav class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <li><a href="#about" class="nav-link"><span>01</span>About</a></li>
                    <li><a href="#research" class="nav-link"><span>02</span>Gen Z Project</a></li>
                    <li><a href="#academics" class="nav-link"><span>03</span>Academics & Skills</a></li>
                    <li><a href="#cinema" class="nav-link"><span>04</span>Cinema Vault</a></li>
                    <li><a href="#contact" class="nav-link"><span>05</span>Contact</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <div class="status-pill" title="Live status">
                    <span class="pulse-dot"></span>
                    <span class="status-text">Available for Opportunities</span>
                </div>
                <a href="#contact" class="btn-primary-magnetic magnetic-target">
                    <span>Let's Talk</span>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Navigation Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Navigation -->
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="drawer-header">
            <span class="logo-box">AK</span>
            <button class="drawer-close" id="drawerClose" aria-label="Close menu"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <ul class="drawer-nav-list">
            <li><a href="#about" class="drawer-nav-link"><i class="fa-regular fa-user"></i> About Ashwin</a></li>
            <li><a href="#research" class="drawer-nav-link"><i class="fa-solid fa-chart-pie"></i> Gen Z Corporate Study</a></li>
            <li><a href="#academics" class="drawer-nav-link"><i class="fa-solid fa-graduation-cap"></i> Bhavan's & Skills</a></li>
            <li><a href="#cinema" class="drawer-nav-link"><i class="fa-solid fa-film"></i> Cinema Passion</a></li>
            <li><a href="#contact" class="drawer-nav-link"><i class="fa-regular fa-paper-plane"></i> Get in Touch</a></li>
        </ul>
        <div class="drawer-footer">
            <div class="drawer-socials">
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="mailto:ashwinkrishna.official@gmail.com" class="social-icon-btn" aria-label="Email"><i class="fa-regular fa-envelope"></i></a>
            </div>
            <p class="drawer-copy">&copy; <?php echo date('Y'); ?> Ashwin Krishna. All rights reserved.</p>
        </div>
    </div>
