<?php
/**
 * Template Name: Service Area
 */

// Colfax specific content
$area_content = array(
    'area_name' => 'Colfax',
    'area_description' => 'Colfax, a charming mountain community with rich history and natural beauty, offers unique property management opportunities. Our services are tailored to meet the needs of Colfax property owners, from historic homes to modern mountain retreats.',
    'market_insights' => '<ul>
        <li>Growing mountain community</li>
        <li>Mix of residential and vacation properties</li>
        <li>Strong rental demand</li>
        <li>Proximity to major highways</li>
        <li>Natural beauty and outdoor recreation</li>
    </ul>',
    'property_types' => '<ul>
        <li>Mountain homes</li>
        <li>Vacation rentals</li>
        <li>Single-family residences</li>
        <li>Multi-family units</li>
        <li>Commercial properties</li>
    </ul>',
    'marketing_description' => 'Strategic marketing approaches for Colfax properties, highlighting the area\'s natural beauty and mountain lifestyle.',
    'screening_description' => 'Comprehensive tenant screening process designed for Colfax\'s unique community and property types.',
    'maintenance_description' => 'Expert maintenance services with understanding of mountain property requirements and seasonal needs.',
    'financial_description' => 'Detailed financial management and reporting specific to Colfax\'s diverse property market.',
    'area_latitude' => '39.1007',
    'area_longitude' => '-120.9533',
    'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12567.902442!2d-120.9533!3d39.1007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809b9e7b0c1e673f%3A0x7c3f5c5b5b5b5b5b!2sColfax%2C%20CA!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
    'covered_areas' => '<ul>
        <li>Downtown Colfax</li>
        <li>Mountain Communities</li>
        <li>Residential Areas</li>
        <li>Surrounding Neighborhoods</li>
        <li>Vacation Rental Zones</li>
    </ul>'
);

// Set the content for ACF fields
add_action('acf/init', function() use ($area_content) {
    foreach ($area_content as $field => $value) {
        update_field($field, $value);
    }
});

// Add benefits
$benefits = array(
    array(
        'icon' => 'fa-map-marked-alt',
        'title' => 'Local Expertise',
        'description' => 'Deep understanding of Colfax\'s mountain property market.'
    ),
    array(
        'icon' => 'fa-clock',
        'title' => 'Responsive Service',
        'description' => '24/7 emergency response for Colfax properties.'
    ),
    array(
        'icon' => 'fa-chart-bar',
        'title' => 'Market Analysis',
        'description' => 'Expert analysis of Colfax\'s unique real estate market.'
    ),
    array(
        'icon' => 'fa-mountain',
        'title' => 'Mountain Property Management',
        'description' => 'Specialized knowledge in managing mountain and vacation properties.'
    )
);

// Set the benefits repeater field
update_field('benefits', $benefits);

get_header();
?>

<main class="site-main">
    <!-- Hero Section -->
    <section class="area-hero">
        <div class="container">
            <h1 class="page-title"><?php echo esc_html($area_content['area_name']); ?> Property Management Services</h1>
            <p class="page-subtitle">Professional Property Management in <?php echo esc_html($area_content['area_name']); ?>, California</p>
        </div>
    </section>

    <!-- Area Overview -->
    <section class="area-overview">
        <div class="container">
            <h2>Property Management in <?php echo esc_html($area_content['area_name']); ?></h2>
            <p><?php echo wp_kses_post($area_content['area_description']); ?></p>
            
            <div class="area-highlights">
                <div class="highlight-card">
                    <h3>Local Market Expertise</h3>
                    <?php echo wp_kses_post($area_content['market_insights']); ?>
                </div>
                <div class="highlight-card">
                    <h3>Property Types We Manage</h3>
                    <?php echo wp_kses_post($area_content['property_types']); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="area-services">
        <div class="container">
            <h2>Our <?php echo esc_html($area_content['area_name']); ?> Property Management Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-home"></i>
                    <h3>Property Marketing</h3>
                    <p><?php echo wp_kses_post($area_content['marketing_description']); ?></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-users"></i>
                    <h3>Tenant Screening</h3>
                    <p><?php echo wp_kses_post($area_content['screening_description']); ?></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-tools"></i>
                    <h3>Maintenance</h3>
                    <p><?php echo wp_kses_post($area_content['maintenance_description']); ?></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Financial Management</h3>
                    <p><?php echo wp_kses_post($area_content['financial_description']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Area Benefits -->
    <section class="area-benefits">
        <div class="container">
            <h2>Why Choose Us for <?php echo esc_html($area_content['area_name']); ?> Property Management</h2>
            <div class="benefits-grid">
                <?php foreach ($benefits as $benefit): ?>
                <div class="benefit-box">
                    <i class="fas <?php echo esc_attr($benefit['icon']); ?>"></i>
                    <h4><?php echo esc_html($benefit['title']); ?></h4>
                    <p><?php echo wp_kses_post($benefit['description']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Area Map -->
    <section class="area-map">
        <div class="container">
            <h2>Our Service Area in <?php echo esc_html($area_content['area_name']); ?></h2>
            <div class="map-container">
                <?php echo wp_kses_post($area_content['map_embed']); ?>
            </div>
            <div class="covered-areas">
                <h3>Areas We Serve in <?php echo esc_html($area_content['area_name']); ?>:</h3>
                <?php echo wp_kses_post($area_content['covered_areas']); ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Get Started?</h2>
                <p>Contact us today to learn how we can help manage your <?php echo esc_html($area_content['area_name']); ?> property</p>
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
    "name": "Grass Valley Property Management Group - <?php echo esc_js($area_content['area_name']); ?>",
    "description": "Professional property management services in <?php echo esc_js($area_content['area_name']); ?>, California",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "<?php echo esc_js($area_content['area_name']); ?>",
        "addressRegion": "CA",
        "addressCountry": "US"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "<?php echo esc_js($area_content['area_latitude']); ?>",
        "longitude": "<?php echo esc_js($area_content['area_longitude']); ?>"
    },
    "url": "<?php echo esc_url(get_permalink()); ?>",
    "telephone": "+1-530-273-1234",
    "areaServed": "<?php echo esc_js($area_content['area_name']); ?>"
}
</script>

<?php get_footer(); ?> 