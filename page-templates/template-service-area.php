<?php
/**
 * Template Name: Service Area
 */

// Add meta description and other meta tags
add_action('wp_head', function() {
    $area_name = get_field('area_name');
    $area_description = get_field('area_description');
    ?>
    <meta name="description" content="Professional property management services in <?php echo esc_attr($area_name); ?>. Expert local property managers serving <?php echo esc_attr($area_name); ?> and surrounding communities. Full-service property management, tenant screening, and maintenance.">
    <meta property="og:title" content="<?php echo esc_attr($area_name); ?> Property Management Services | Grass Valley PMG">
    <meta property="og:description" content="Trusted property management services in <?php echo esc_attr($area_name); ?>. Local expertise in property management, tenant screening, and maintenance services.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <?php
});

get_header();
?>

<main class="site-main">
    <!-- Hero Section -->
    <section class="area-hero">
        <div class="container">
            <h1 class="page-title"><?php echo esc_html(get_field('area_name')); ?> Property Management Services</h1>
            <p class="page-subtitle">Professional Property Management in <?php echo esc_html(get_field('area_name')); ?>, California</p>
        </div>
    </section>

    <!-- Area Overview -->
    <section class="area-overview">
        <div class="container">
            <h2>Property Management in <?php echo esc_html(get_field('area_name')); ?></h2>
            <p><?php echo wp_kses_post(get_field('area_description')); ?></p>
            
            <div class="area-highlights">
                <div class="highlight-card">
                    <h3>Local Market Expertise</h3>
                    <?php echo wp_kses_post(get_field('market_insights')); ?>
                </div>
                <div class="highlight-card">
                    <h3>Property Types We Manage</h3>
                    <?php echo wp_kses_post(get_field('property_types')); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="area-services">
        <div class="container">
            <h2>Our <?php echo esc_html(get_field('area_name')); ?> Property Management Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-home"></i>
                    <h3>Property Marketing</h3>
                    <p><?php echo wp_kses_post(get_field('marketing_description')); ?></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-users"></i>
                    <h3>Tenant Screening</h3>
                    <p><?php echo wp_kses_post(get_field('screening_description')); ?></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-tools"></i>
                    <h3>Maintenance</h3>
                    <p><?php echo wp_kses_post(get_field('maintenance_description')); ?></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Financial Management</h3>
                    <p><?php echo wp_kses_post(get_field('financial_description')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Area Benefits -->
    <section class="area-benefits">
        <div class="container">
            <h2>Why Choose Us for <?php echo esc_html(get_field('area_name')); ?> Property Management</h2>
            <div class="benefits-grid">
                <?php
                if(have_rows('benefits')):
                    while(have_rows('benefits')): the_row();
                ?>
                <div class="benefit-box">
                    <i class="fas <?php echo esc_attr(get_sub_field('icon')); ?>"></i>
                    <h4><?php echo esc_html(get_sub_field('title')); ?></h4>
                    <p><?php echo wp_kses_post(get_sub_field('description')); ?></p>
                </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Area Map -->
    <section class="area-map">
        <div class="container">
            <h2>Our Service Area in <?php echo esc_html(get_field('area_name')); ?></h2>
            <div class="map-container">
                <?php echo wp_kses_post(get_field('map_embed')); ?>
            </div>
            <div class="covered-areas">
                <h3>Areas We Serve in <?php echo esc_html(get_field('area_name')); ?>:</h3>
                <?php echo wp_kses_post(get_field('covered_areas')); ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Get Started?</h2>
                <p>Contact us today to learn how we can help manage your <?php echo esc_html(get_field('area_name')); ?> property</p>
                <a href="/contact" class="cta-button">Schedule a Consultation</a>
            </div>
        </div>
    </section>
</main>

<!-- Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Grass Valley Property Management Group - <?php echo esc_js(get_field('area_name')); ?>",
    "description": "Professional property management services in <?php echo esc_js(get_field('area_name')); ?>, California",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "<?php echo esc_js(get_field('area_name')); ?>",
        "addressRegion": "CA",
        "addressCountry": "US"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "<?php echo esc_js(get_field('area_latitude')); ?>",
        "longitude": "<?php echo esc_js(get_field('area_longitude')); ?>"
    },
    "url": "<?php echo esc_url(get_permalink()); ?>",
    "telephone": "+1-530-273-1234",
    "areaServed": "<?php echo esc_js(get_field('area_name')); ?>"
}
</script>

<?php get_footer(); ?> 