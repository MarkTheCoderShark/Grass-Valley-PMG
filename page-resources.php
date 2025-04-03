<?php
/*
Template Name: Resources
*/

get_header(); ?>

<main class="site-main">
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title">Property Management Resources</h1>
            <p class="page-subtitle">Helpful information and tools for property owners and residents</p>
        </div>
    </section>

    <!-- Resource Categories -->
    <section class="resource-categories-section">
        <div class="container">
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-file-download"></i>
                    </div>
                    <h3>Forms & Documents</h3>
                    <ul class="resource-list">
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Rental Application</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Lease Agreement Sample</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Move-In Checklist</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Maintenance Request Form</a></li>
                    </ul>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Property Owner Guides</h3>
                    <ul class="resource-list">
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Investment Property Guide</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Property Maintenance Tips</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Tax Information Guide</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> ROI Maximization Guide</a></li>
                    </ul>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Tenant Resources</h3>
                    <ul class="resource-list">
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Tenant Handbook</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Renter's Insurance Guide</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Moving Tips</a></li>
                        <li><a href="#"><i class="fas fa-file-pdf"></i> Local Area Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Content -->
    <section class="educational-content-section">
        <div class="container">
            <h2 class="section-title">Educational Resources</h2>
            <div class="content-grid">
                <div class="content-card">
                    <h3>Property Management Blog</h3>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'property-management',
                        'posts_per_page' => 3
                    );
                    $blog_query = new WP_Query($args);
                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                    ?>
                        <article class="blog-preview">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="post-meta">
                                <span class="date"><?php echo get_the_date(); ?></span>
                            </div>
                            <?php the_excerpt(); ?>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>

                <div class="content-card">
                    <h3>Market Updates</h3>
                    <div class="market-updates">
                        <div class="update-item">
                            <h4>Rental Market Trends</h4>
                            <p>Stay informed about the latest rental market trends in Grass Valley and surrounding areas.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                        <div class="update-item">
                            <h4>Property Investment Insights</h4>
                            <p>Expert analysis and insights for property investors in our region.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>What services do you offer property owners?</h3>
                    <p>We provide comprehensive property management services including tenant screening, rent collection, maintenance, and financial reporting.</p>
                </div>
                <div class="faq-item">
                    <h3>How do you screen potential tenants?</h3>
                    <p>Our thorough screening process includes credit checks, employment verification, rental history, and background checks.</p>
                </div>
                <div class="faq-item">
                    <h3>What are your management fees?</h3>
                    <p>Our management fees vary based on services required. Contact us for a customized quote based on your needs.</p>
                </div>
                <div class="faq-item">
                    <h3>How do you handle maintenance issues?</h3>
                    <p>We have a network of trusted contractors and provide 24/7 emergency maintenance support.</p>
                </div>
                <div class="faq-item">
                    <h3>What reporting do you provide to property owners?</h3>
                    <p>We provide monthly financial reports, maintenance logs, and regular property inspections to keep you informed about your investment.</p>
                </div>
                <div class="faq-item">
                    <h3>How do you handle rent collection?</h3>
                    <p>We offer online rent collection, automatic payments, and handle late payments professionally to ensure consistent cash flow.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Stay Informed</h2>
                <p>Subscribe to our newsletter for the latest property management insights and market updates.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit" class="subscribe-button">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 