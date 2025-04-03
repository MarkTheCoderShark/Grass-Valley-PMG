<?php
/*
Template Name: Pricing
*/

get_header(); ?>

<style>
.pricing-hero {
    padding: 5rem 0 4rem;
    background: linear-gradient(to bottom, #f8fafc, white);
    position: relative;
    border-bottom: 1px solid rgba(59, 130, 246, 0.1);
}

.hero-content {
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
    padding: 0 1rem;
}

.pricing-header-box {
    background: white;
    padding: 3rem;
    border-radius: 16px;
    margin-bottom: 2rem;
    box-shadow: 0 4px 20px rgba(44, 123, 229, 0.08);
    border: 1px solid rgba(59, 130, 246, 0.1);
}

.hero-title {
    font-size: 4.5rem;
    color: var(--text-dark);
    margin-bottom: 1.25rem;
    line-height: 1.1;
    font-weight: 800;
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: -0.02em;
    text-shadow: 0 4px 30px rgba(37, 99, 235, 0.1);
}

.hero-subtitle {
    font-size: 1.75rem;
    color: #4b5563;
    margin-bottom: 0;
    line-height: 1.4;
    font-weight: 500;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.pricing-stats {
    padding: 4rem 0;
}

.pricing-stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    max-width: 1000px;
    margin: 2rem auto;
}

.stat-box {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 16px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(44, 123, 229, 0.08);
    transition: transform 0.3s ease;
    border: 1px solid rgba(59, 130, 246, 0.1);
    position: relative;
    overflow: hidden;
}

.stat-box::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-blue), var(--secondary-blue));
}

.stat-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(44, 123, 229, 0.12);
}

.stat-number {
    font-size: 3.5rem;
    font-weight: 700;
    color: var(--primary-blue);
    margin-bottom: 0.5rem;
    line-height: 1;
}

.stat-label {
    font-size: 1.2rem;
    color: var(--text-dark);
    font-weight: 500;
    opacity: 0.9;
}

.pricing-notice {
    background: rgba(255, 255, 255, 0.7);
    border-radius: 12px;
    padding: 1.25rem 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    margin: 0 auto;
    max-width: 800px;
    box-shadow: 0 2px 12px rgba(44, 123, 229, 0.05);
    border: 1px solid rgba(59, 130, 246, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pricing-notice:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 16px rgba(44, 123, 229, 0.08);
}

.pricing-notice i {
    color: var(--primary-blue);
    font-size: 1.125rem;
    opacity: 0.9;
}

.pricing-notice p {
    color: #4b5563;
    font-size: 1rem;
    margin: 0;
    font-weight: 400;
    letter-spacing: -0.01em;
}

@media (max-width: 768px) {
    .pricing-hero {
        padding: 3rem 0 2rem;
    }

    .pricing-header-box {
        padding: 2rem 1rem;
    }

    .hero-title {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero-subtitle {
        font-size: 1.4rem;
        margin-bottom: 0;
    }

    .pricing-stats-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 0 1rem;
    }

    .stat-box {
        padding: 2rem 1.5rem;
    }

    .stat-number {
        font-size: 3rem;
    }

    .pricing-notice {
        padding: 0.75rem 1.25rem;
        margin: 0 1rem;
    }

    .pricing-notice p {
        font-size: 0.875rem;
    }

    .pricing-notice i {
        font-size: 1rem;
    }
}
</style>

<main class="site-main">
    <!-- Pricing Hero Section -->
    <section class="pricing-hero">
        <div class="container">
            <div class="hero-content">
                <div class="pricing-header-box">
                    <h1 class="hero-title">Simple, Transparent Pricing</h1>
                    <p class="hero-subtitle">Flat rate with no hidden fees</p>
                </div>
                <div class="pricing-notice">
                    <i class="fas fa-check-circle"></i>
                    <p>No Hidden Fees • No Lease Renewal Fees • No Property Inspection Fees • No Maintenance Markup</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Stats Section -->
    <section class="pricing-stats">
        <div class="container">
            <div class="pricing-stats-grid">
                <div class="stat-box">
                    <div class="stat-number">8%</div>
                    <div class="stat-label">Monthly Fee</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">0</div>
                    <div class="stat-label">Hidden Fees</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Section -->
    <section class="pricing-plans-section">
        <div class="container">
            <div class="pricing-grid">
                <!-- Full Management Plan -->
                <div class="pricing-card featured">
                    <div class="pricing-header">
                        <div class="featured-badge">Most Popular</div>
                        <h3>Full Management</h3>
                        <div class="pricing-price">
                            <span class="amount">8%</span>
                            <span class="period">of monthly rent</span>
                        </div>
                        <p class="pricing-description">Complete property management solution</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Tenant Screening & Placement</li>
                        <li><i class="fas fa-check"></i> Rent Collection</li>
                        <li><i class="fas fa-check"></i> Monthly Financial Statements</li>
                        <li><i class="fas fa-check"></i> Maintenance Coordination</li>
                        <li><i class="fas fa-check"></i> 24/7 Emergency Response</li>
                        <li><i class="fas fa-check"></i> Online Owner Portal</li>
                        <li><i class="fas fa-check"></i> Lease Renewal (No Fee)</li>
                        <li><i class="fas fa-check"></i> Property Inspections (No Fee)</li>
                        <li><i class="fas fa-check"></i> No Maintenance Markup</li>
                    </ul>
                    <div class="pricing-footer">
                        <p class="setup-fee">Tenant Placement Fee: 50% of first month's rent</p>
                        <a href="#contact" class="cta-button">Get Started</a>
                    </div>
                </div>

                <!-- Tenant Placement Only -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Tenant Placement Only</h3>
                        <div class="pricing-price">
                            <span class="amount">100%</span>
                            <span class="period">of first month's rent</span>
                        </div>
                        <p class="pricing-description">Perfect for self-managing property owners</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Professional Tenant Screening</li>
                        <li><i class="fas fa-check"></i> Property Marketing</li>
                        <li><i class="fas fa-check"></i> Showing Coordination</li>
                        <li><i class="fas fa-check"></i> Lease Preparation</li>
                        <li><i class="fas fa-check"></i> Move-in Coordination</li>
                    </ul>
                    <div class="pricing-footer">
                        <p class="setup-fee">One-time fee for tenant placement</p>
                        <a href="#contact" class="cta-button">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Pricing FAQ Section -->
            <div class="pricing-faq">
                <h2>Frequently Asked Questions</h2>
                <div class="faq-grid">
                    <div class="faq-item">
                        <h3>What's included in the monthly fee?</h3>
                        <p>Our monthly fee includes all essential property management services, including tenant screening, rent collection, maintenance coordination, and financial reporting. We don't charge extra for lease renewals, property inspections, or maintenance coordination.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How is the tenant placement fee calculated?</h3>
                        <p>For full management, the tenant placement fee is 50% of the first month's rent. For tenant placement only service, the fee is 100% of the first month's rent. This is our only additional fee - everything else is included in the monthly management fee.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Are there any hidden fees?</h3>
                        <p>No hidden fees! We believe in complete transparency. Our pricing is simple: just the monthly management fee and the tenant placement fee. We don't charge for lease renewals, property inspections, or add markups to maintenance costs.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How do you handle maintenance and repairs?</h3>
                        <p>We coordinate all maintenance and repairs through our network of trusted contractors. We don't add any markup to maintenance costs, and we handle everything from routine maintenance to emergency repairs 24/7. All maintenance work is fully documented and reported to you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Get Started Today</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Grass Valley, CA 95945</p>
                    <p><i class="fas fa-phone"></i> (530) 553-8883</p>
                    <p><i class="fas fa-envelope"></i> info@grassvalleypmg.com</p>
                </div>
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
    </section>
</main>

<?php get_footer(); ?> 