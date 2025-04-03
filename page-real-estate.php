<?php
/*
Template Name: Real Estate
*/

get_header(); ?>

<main class="site-main">
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title">Real Estate Services</h1>
            <p class="page-subtitle">Expert guidance for buying and selling properties in Grass Valley</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="real-estate-services-section">
        <div class="container">
            <h2 class="section-title">Our Real Estate Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Property Sales</h3>
                    <p>Professional marketing and sales strategies to get the best price for your property.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Market Analysis</li>
                        <li><i class="fas fa-check"></i> Professional Photography</li>
                        <li><i class="fas fa-check"></i> Virtual Tours</li>
                        <li><i class="fas fa-check"></i> Strategic Pricing</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Property Buying</h3>
                    <p>Find your perfect property with our expert guidance and local market knowledge.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Property Search</li>
                        <li><i class="fas fa-check"></i> Market Insights</li>
                        <li><i class="fas fa-check"></i> Negotiation Support</li>
                        <li><i class="fas fa-check"></i> Transaction Management</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Investment Properties</h3>
                    <p>Expert advice on investment opportunities and property portfolio management.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> ROI Analysis</li>
                        <li><i class="fas fa-check"></i> Market Research</li>
                        <li><i class="fas fa-check"></i> Portfolio Strategy</li>
                        <li><i class="fas fa-check"></i> Investment Planning</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Listings -->
    <section class="featured-listings-section">
        <div class="container">
            <h2 class="section-title">Featured Listings</h2>
            <div class="properties-grid">
                <?php
                $args = array(
                    'post_type' => 'property',
                    'posts_per_page' => 3,
                    'meta_query' => array(
                        array(
                            'key' => 'property_type',
                            'value' => 'sale',
                            'compare' => '='
                        )
                    )
                );

                $properties = new WP_Query($args);

                if ($properties->have_posts()) :
                    while ($properties->have_posts()) : $properties->the_post();
                ?>
                    <div class="property-card" itemscope itemtype="http://schema.org/RealEstateListing">
                        <div class="property-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php 
                                $image_id = get_post_thumbnail_id();
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                ?>
                                <?php the_post_thumbnail('large', array(
                                    'alt' => esc_attr($image_alt ?: get_the_title()),
                                    'itemprop' => 'image',
                                    'loading' => 'lazy'
                                )); ?>
                            <?php endif; ?>
                            <div class="property-tag">For Sale</div>
                        </div>
                        <div class="property-content">
                            <h3 itemprop="name"><?php the_title(); ?></h3>
                            <div class="property-details">
                                <?php if (get_field('bedrooms')) : ?>
                                    <span itemprop="numberOfRooms"><i class="fas fa-bed"></i> <?php echo get_field('bedrooms'); ?> Beds</span>
                                <?php endif; ?>
                                <?php if (get_field('bathrooms')) : ?>
                                    <span itemprop="numberOfBathroomsTotal"><i class="fas fa-bath"></i> <?php echo get_field('bathrooms'); ?> Baths</span>
                                <?php endif; ?>
                                <?php if (get_field('square_footage')) : ?>
                                    <span itemprop="floorSize"><i class="fas fa-ruler-combined"></i> <?php echo get_field('square_footage'); ?> sqft</span>
                                <?php endif; ?>
                            </div>
                            <?php if (get_field('price')) : ?>
                                <p class="property-price" itemprop="price" content="<?php echo get_field('price'); ?>" itemprop="priceCurrency" content="USD">$<?php echo number_format(get_field('price')); ?></p>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="property-link" itemprop="url">View Details</a>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="view-all-link">
                <a href="/properties" class="cta-button">View All Properties</a>
            </div>
        </div>
    </section>

    <!-- Market Insights -->
    <section class="market-insights-section">
        <div class="container">
            <h2 class="section-title">Market Insights</h2>
            <div class="insights-grid">
                <div class="insight-card">
                    <h3>Local Market Trends</h3>
                    <p>Stay informed about the latest real estate trends and market conditions in Grass Valley.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="insight-card">
                    <h3>Investment Opportunities</h3>
                    <p>Discover lucrative investment opportunities in our growing real estate market.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="insight-card">
                    <h3>Buying & Selling Tips</h3>
                    <p>Expert advice to help you navigate the real estate market successfully.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Buy or Sell?</h2>
                <p>Contact our real estate experts today for a free consultation.</p>
                <a href="/get-started/" class="cta-button">Get Started</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 