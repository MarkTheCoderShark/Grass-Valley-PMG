<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<main class="site-main">
    <div class="about-hero">
        <div class="container">
            <h1 class="page-title">About Us</h1>
            <p class="page-subtitle">Professional Property Management Services in Grass Valley, CA</p>
        </div>
    </div>

    <section class="team-section">
        <div class="container">
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-member-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/George-Shvaya.jpg'); ?>" alt="George Shvaya">
                    </div>
                    <div class="team-member-info">
                        <h2>George Shvaya</h2>
                        <h3>Property Manager and Founder</h3>
                        <p>As founder and property manager, George established and continues to refine our comprehensive property management systems. His expertise in operational excellence and commitment to client satisfaction has built our reputation as a trusted leader in Grass Valley property management.</p>
                    </div>
                </div>

                <div class="team-member">
                    <div class="team-member-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Mark-Shvaya.jpg'); ?>" alt="Mark Shvaya">
                    </div>
                    <div class="team-member-info">
                        <h2>Mark Shvaya</h2>
                        <h3>Property Manager and Broker</h3>
                        <p>As a licensed broker and property management professional, Mark brings strategic leadership and market expertise to our operations. His comprehensive understanding of Grass Valley's real estate landscape enables him to optimize property performance achieving exceptional results for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="container">
            <h2 class="section-title">Our Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Trust & Integrity</h3>
                    <p>Building lasting relationships through transparent and honest service.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Excellence</h3>
                    <p>Delivering exceptional results through professional expertise and attention to detail.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-users"></i>
                    <h3>Client Focus</h3>
                    <p>Putting our clients' needs first and providing personalized solutions.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-home"></i>
                    <h3>Local Expertise</h3>
                    <p>Deep understanding of the Grass Valley property market and community.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 