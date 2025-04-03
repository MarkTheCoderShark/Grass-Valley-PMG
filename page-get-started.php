<?php get_header(); ?>

<main class="site-main">
    <!-- Get Started Hero Section -->
    <section class="get-started-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Get Started with Grass Valley PMG</h1>
                <p class="hero-subtitle">Take the first step towards professional property management</p>
            </div>
        </div>
    </section>

    <!-- Get Started Content Section -->
    <section class="get-started-content">
        <div class="container">
            <div class="content-grid">
                <div class="content-info">
                    <h2>Why Choose Grass Valley PMG?</h2>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check"></i> Local expertise in Grass Valley</li>
                        <li><i class="fas fa-check"></i> Professional property management</li>
                        <li><i class="fas fa-check"></i> 24/7 support and maintenance</li>
                        <li><i class="fas fa-check"></i> Transparent communication</li>
                        <li><i class="fas fa-check"></i> Maximized rental income</li>
                        <li><i class="fas fa-check"></i> Comprehensive tenant screening</li>
                    </ul>
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Grass Valley, CA 95945</p>
                        <p><i class="fas fa-phone"></i> (530) 555-0123</p>
                        <p><i class="fas fa-envelope"></i> info@grassvalleypmg.com</p>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <h2>Schedule a Consultation</h2>
                    <div class="contact-form">
                        <?php
                        if (shortcode_exists('contact-form-7')) {
                            echo do_shortcode('[contact-form-7 id="250af76" title="Contact form 1"]');
                        } else {
                            echo '<div class="contact-form-fallback">';
                            echo '<p>Please install and activate Contact Form 7 to use the contact form.</p>';
                            echo '<p>You can download it from the <a href="https://wordpress.org/plugins/contact-form-7/" target="_blank">WordPress plugin repository</a>.</p>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 