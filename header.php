<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Primary Meta Tags -->
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="title" content="<?php echo esc_attr(wp_title('|', false, 'right')); ?>">
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <?php if (has_post_thumbnail()): ?>
        <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>">
    <?php endif; ?>

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="twitter:title" content="<?php echo esc_attr(get_the_title()); ?>">
    <meta property="twitter:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <?php if (has_post_thumbnail()): ?>
        <meta property="twitter:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>">
    <?php endif; ?>

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">

    <!-- Additional Meta Tags -->
    <meta name="author" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta name="keywords" content="property management, Grass Valley, Nevada County, real estate, rental properties">
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Grass Valley Property Management Group",
        "image": "<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>",
        "description": "<?php echo esc_attr(get_bloginfo('description')); ?>",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Grass Valley",
            "addressRegion": "CA",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "39.2187",
            "longitude": "-121.0607"
        },
        "url": "<?php echo esc_url(home_url('/')); ?>",
        "telephone": "+1-530-273-1234",
        "priceRange": "$$$",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "09:00",
            "closes": "17:00"
        }
    }
    </script>

    <?php wp_head(); ?>
    
    <style>
        /* Mobile Menu Styles - v1.0.5 */
        @media screen and (max-width: 768px) {
            /* Force hide desktop navigation on ALL pages including home */
            .home .site-header .main-navigation,
            .site-header .main-navigation {
                display: none !important;
                visibility: hidden !important;
                opacity: 0 !important;
                pointer-events: none !important;
            }
            
            .home .site-header .header-cta,
            .site-header .header-cta {
                display: none !important;
                visibility: hidden !important;
                opacity: 0 !important;
                pointer-events: none !important;
            }

            /* Hide any other menu buttons */
            .home .menu-toggle, 
            .home .mobile-menu-toggle, 
            .home .mobile-menu-button,
            .home .menu-btn,
            .home .toggle-menu,
            .home .menu-icon:not(#fallback-mobile-menu),
            .home [class*="menu-toggle"],
            .home [class*="mobile-toggle"],
            .home [id*="menu-toggle"],
            .home [id*="mobile-toggle"],
            .menu-toggle, 
            .mobile-menu-toggle, 
            .mobile-menu-button,
            .menu-btn,
            .toggle-menu,
            .menu-icon:not(#fallback-mobile-menu),
            [class*="menu-toggle"],
            [class*="mobile-toggle"],
            [id*="menu-toggle"],
            [id*="mobile-toggle"] {
                display: none !important;
                opacity: 0 !important;
                visibility: hidden !important;
                pointer-events: none !important;
            }

            /* Main mobile menu button - ensure visibility on home page */
            .home #fallback-mobile-menu,
            #fallback-mobile-menu {
                display: block !important;
                position: fixed !important;
                right: 20px !important;
                top: 20px !important;
                z-index: 999999 !important;
                background: #1e73be !important;
                color: white !important;
                border: none !important;
                border-radius: 4px !important;
                padding: 12px 15px !important;
                font-size: 24px !important;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
                cursor: pointer !important;
                line-height: 1 !important;
                transition: all 0.3s ease !important;
                visibility: visible !important;
                opacity: 1 !important;
                pointer-events: auto !important;
            }

            /* Hide menu button when menu is open - especially on home page */
            .home #fallback-mobile-menu.menu-open,
            #fallback-mobile-menu.menu-open {
                display: none !important;
                visibility: hidden !important;
                opacity: 0 !important;
                pointer-events: none !important;
            }

            /* Menu Overlay */
            #mobile-menu-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: rgba(0, 0, 0, 0.7);
                z-index: 99998;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            #mobile-menu-overlay.active {
                opacity: 1;
                display: block;
            }

            /* Slide-out Navigation */
            #mobile-menu-panel {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 400px;
                height: 100vh;
                background: white;
                z-index: 99999;
                transition: right 0.3s ease;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.2);
                display: block;
                overflow-y: auto;
                padding-bottom: 50px;
            }

            #mobile-menu-panel.active {
                right: 0;
            }

            /* Menu Items */
            .mobile-menu {
                padding: 20px;
            }

            .mobile-menu ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            .mobile-menu ul li {
                margin: 0;
                padding: 0;
            }

            .mobile-menu a {
                display: block;
                padding: 15px 0;
                color: #1e73be;
                text-decoration: none;
                font-size: 18px;
                border-bottom: 1px solid #eee;
                transition: all 0.3s ease;
            }

            .mobile-menu a:hover {
                color: #333;
                padding-left: 10px;
            }

            .mobile-menu .cta-button {
                display: inline-block;
                width: 100%;
                padding: 15px;
                margin-top: 20px;
                background: #1e73be;
                color: white;
                text-align: center;
                border-radius: 4px;
                text-transform: uppercase;
                font-weight: 600;
            }

            /* Close button */
            #mobile-menu-close {
                position: absolute;
                top: 20px;
                right: 20px;
                font-size: 28px;
                color: #1e73be;
                background: none;
                border: none;
                cursor: pointer;
                padding: 5px;
                z-index: 99999;
            }

            /* Menu Header */
            .mobile-menu-header {
                padding: 30px 20px;
                text-align: center;
                border-bottom: 1px solid #eee;
                background: #f8f9fa;
            }

            .mobile-menu-header h3 {
                margin: 0;
                color: #1e73be;
                font-size: 24px;
            }

            .mobile-menu-header p {
                margin: 5px 0 0;
                color: #666;
                font-size: 16px;
            }

            /* Admin bar adjustment */
            .admin-bar #fallback-mobile-menu {
                top: 66px !important;
            }
            
            .admin-bar #mobile-menu-panel {
                top: 46px;
                height: calc(100vh - 46px);
            }

            /* Ensure menu button is visible on all pages */
            body.home #fallback-mobile-menu,
            body.page #fallback-mobile-menu,
            body.single #fallback-mobile-menu,
            body.archive #fallback-mobile-menu,
            body.blog #fallback-mobile-menu,
            body.pricing #fallback-mobile-menu {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
            }

            /* Hide menu button when menu is open */
            body.home #fallback-mobile-menu.menu-open,
            body.page #fallback-mobile-menu.menu-open,
            body.single #fallback-mobile-menu.menu-open,
            body.archive #fallback-mobile-menu.menu-open,
            body.blog #fallback-mobile-menu.menu-open,
            body.pricing #fallback-mobile-menu.menu-open {
                display: none !important;
                visibility: hidden !important;
                opacity: 0 !important;
                pointer-events: none !important;
            }
        }

        @media screen and (min-width: 769px) {
            #fallback-mobile-menu,
            #mobile-menu-overlay,
            #mobile-menu-panel {
                display: none !important;
            }
        }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('fallback-mobile-menu');
        const menuPanel = document.getElementById('mobile-menu-panel');
        const menuOverlay = document.getElementById('mobile-menu-overlay');
        const closeButton = document.getElementById('mobile-menu-close');

        function openMenu() {
            menuPanel.style.display = 'block';
            menuOverlay.style.display = 'block';
            menuButton.classList.add('menu-open');
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                menuPanel.classList.add('active');
                menuOverlay.classList.add('active');
            }, 10);
        }

        function closeMenu() {
            menuPanel.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = '';
            setTimeout(() => {
                menuPanel.style.display = 'none';
                menuOverlay.style.display = 'none';
                menuButton.classList.remove('menu-open');
            }, 300);
        }

        if (menuButton) {
            menuButton.addEventListener('click', openMenu);
        }

        if (closeButton) {
            closeButton.addEventListener('click', closeMenu);
        }

        if (menuOverlay) {
            menuOverlay.addEventListener('click', closeMenu);
        }

        // Close menu when clicking menu items
        const menuLinks = document.querySelectorAll('#mobile-menu-panel a');
        menuLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    });
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Mobile Menu Structure -->
<button id="fallback-mobile-menu">☰</button>
<div id="mobile-menu-overlay"></div>
<div id="mobile-menu-panel">
    <button id="mobile-menu-close">×</button>
    <div class="mobile-menu-header">
        <h3>Grass Valley PMG</h3>
        <p>Property Management Group</p>
    </div>
    <nav class="mobile-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'mobile-nav-menu',
            'fallback_cb' => false
        ));
        ?>
        <a href="<?php echo esc_url(home_url('/get-started')); ?>" class="cta-button">Get Started</a>
    </nav>
</div>

<div id="page" class="site">
<header class="site-header">
    <div class="menu-overlay"></div>
    <div class="header-content">
        <div class="site-branding">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                    <span>Grass Valley</span>
                    PMG
                </a>
            <?php endif; ?>
        </div>

        <nav class="main-navigation" role="navigation" aria-label="Main navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu',
                'container' => false,
            ));
            ?>
            <div class="header-cta">
                <a href="<?php echo esc_url(home_url('/get-started')); ?>" class="cta-button">Get Started</a>
            </div>
        </nav>
    </div>
</header>

<div id="content" class="site-content"> 