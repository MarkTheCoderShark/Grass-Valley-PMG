<?php
/*
Template Name: Rentals
*/

get_header(); ?>

<main class="site-main">
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title">Available Rentals</h1>
            <p class="page-subtitle">Find your perfect home in Grass Valley</p>
        </div>
    </section>

    <!-- Search Section -->
    <section class="property-search-section">
        <div class="container">
            <div class="search-filters">
                <form class="search-form">
                    <div class="filter-group">
                        <select name="property_type">
                            <option value="">Property Type</option>
                            <option value="house">House</option>
                            <option value="apartment">Apartment</option>
                            <option value="condo">Condo</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <select name="bedrooms">
                            <option value="">Bedrooms</option>
                            <option value="1">1+ Bed</option>
                            <option value="2">2+ Beds</option>
                            <option value="3">3+ Beds</option>
                            <option value="4">4+ Beds</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <select name="price_range">
                            <option value="">Price Range</option>
                            <option value="0-1500">$0 - $1,500</option>
                            <option value="1500-2500">$1,500 - $2,500</option>
                            <option value="2500-3500">$2,500 - $3,500</option>
                            <option value="3500+">$3,500+</option>
                        </select>
                    </div>
                    <button type="submit" class="search-button">Search Properties</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Available Properties -->
    <section class="available-properties-section">
        <div class="container">
            <div class="properties-grid">
                <?php
                $args = array(
                    'post_type' => 'property',
                    'posts_per_page' => 9,
                    'meta_query' => array(
                        array(
                            'key' => 'property_status',
                            'value' => 'available',
                            'compare' => '='
                        )
                    )
                );

                $properties = new WP_Query($args);

                if ($properties->have_posts()) :
                    while ($properties->have_posts()) : $properties->the_post();
                ?>
                    <div class="property-card">
                        <div class="property-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php endif; ?>
                            <div class="property-tag">Available</div>
                        </div>
                        <div class="property-content">
                            <h3><?php the_title(); ?></h3>
                            <div class="property-details">
                                <?php if (get_field('bedrooms')) : ?>
                                    <span><i class="fas fa-bed"></i> <?php echo get_field('bedrooms'); ?> Beds</span>
                                <?php endif; ?>
                                <?php if (get_field('bathrooms')) : ?>
                                    <span><i class="fas fa-bath"></i> <?php echo get_field('bathrooms'); ?> Baths</span>
                                <?php endif; ?>
                                <?php if (get_field('square_footage')) : ?>
                                    <span><i class="fas fa-ruler-combined"></i> <?php echo get_field('square_footage'); ?> sqft</span>
                                <?php endif; ?>
                            </div>
                            <?php if (get_field('monthly_rent')) : ?>
                                <p class="property-price">$<?php echo number_format(get_field('monthly_rent')); ?>/month</p>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="property-link">View Details</a>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="no-properties-message">
                        <p>No properties are currently available. Please check back soon or contact us for upcoming listings.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="application-process-section">
        <div class="container">
            <h2 class="section-title">Rental Application Process</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Browse Listings</h3>
                    <p>View our available properties and find your perfect match.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Schedule Viewing</h3>
                    <p>Contact us to schedule a property viewing.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Apply Online</h3>
                    <p>Complete our online rental application form.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Get Approved</h3>
                    <p>Quick approval process and move-in coordination.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Find Your New Home?</h2>
                <p>Contact us today to schedule a viewing or learn more about our available properties.</p>
                <a href="/contact" class="cta-button">Contact Us</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 