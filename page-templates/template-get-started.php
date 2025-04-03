<?php
/*
Template Name: Get Started
*/

// Add meta description and other meta tags
add_action('wp_head', function() {
    ?>
    <meta name="description" content="Looking for professional property management in Grass Valley? Get started with our expert property management services. Free consultation for property owners in Grass Valley, CA.">
    <meta property="og:title" content="Get Started with Property Management in Grass Valley | PMG">
    <meta property="og:description" content="Start with the most trusted property management team in Grass Valley. Expert local property managers ready to help you maximize your investment.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <?php
});

get_header();
?>

<style>
.hero-section {
    background-image: url('<?php echo get_theme_file_uri('assets/images/backgroundimage.svg'); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
}

.get-started-hero {
    position: relative;
    padding: 120px 0;
    background: linear-gradient(to bottom, 
        rgba(30, 64, 175, 1) 0%,
        rgba(30, 64, 175, 0.95) 20%,
        rgba(59, 130, 246, 0.85) 50%,
        rgba(219, 234, 254, 0.9) 100%
    );
    color: var(--white);
    overflow: hidden;
}

.get-started-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('<?php echo get_theme_file_uri('assets/images/backgroundimage.svg'); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0.05;
    z-index: 1;
}

.get-started-hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom,
        rgba(30, 64, 175, 0.98) 0%,
        rgba(30, 64, 175, 0.95) 20%,
        rgba(59, 130, 246, 0.85) 60%,
        rgba(219, 234, 254, 0.9) 100%
    );
    z-index: 2;
}

.get-started-hero .container {
    position: relative;
    z-index: 3;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 3rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    max-width: 1000px;
    margin: 0 auto;
}

.get-started-hero .hero-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.get-started-hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: var(--white);
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    line-height: 1.2;
}

.get-started-hero p {
    font-size: 1.4rem;
    line-height: 1.6;
    margin-bottom: 2rem;
    color: var(--white);
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    opacity: 0.95;
}

.hero-cta-button {
    display: inline-block;
    background: var(--white);
    color: var(--primary-blue);
    padding: 1rem 2.5rem;
    border-radius: 50px;
    font-size: 1.2rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border: 2px solid transparent;
}

.hero-cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    background: transparent;
    color: var(--white);
    border-color: var(--white);
}

@media (max-width: 768px) {
    .get-started-hero {
        padding: 80px 0;
    }

    .get-started-hero .container {
        padding: 2rem;
        margin: 0 1rem;
    }

    .get-started-hero h1 {
        font-size: 2.5rem;
    }

    .get-started-hero p {
        font-size: 1.2rem;
    }
}

@media (max-width: 480px) {
    .get-started-hero {
        padding: 60px 0;
    }

    .get-started-hero .container {
        padding: 1.5rem;
    }

    .get-started-hero h1 {
        font-size: 2rem;
    }

    .get-started-hero p {
        font-size: 1.1rem;
    }
}

.why-choose-section {
    padding: 5rem 0;
    background: var(--white);
}

.why-choose-section .benefits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 3rem;
}

.benefit-box {
    background: #fff;
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(44, 123, 229, 0.08);
    transition: transform 0.3s ease;
}

.benefit-box:hover {
    transform: translateY(-5px);
}

.benefit-box i {
    font-size: 2.5rem;
    color: var(--primary-blue);
    margin-bottom: 1rem;
}

.benefit-box h4 {
    font-size: 1.2rem;
    color: var(--text-dark);
    margin-bottom: 1rem;
}

.benefit-box p {
    color: var(--text-light);
    font-size: 0.95rem;
    line-height: 1.5;
}

@media (max-width: 992px) {
    .why-choose-section .benefits-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .why-choose-section .benefits-grid {
        grid-template-columns: 1fr;
    }
    
    .why-choose-section {
        padding: 3rem 0;
    }
}

.inquiry-section {
    padding: 5rem 0;
    background: linear-gradient(to bottom, #f8fafc, #fff);
    position: relative;
    overflow: hidden;
}

.inquiry-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(to right, 
        rgba(59, 130, 246, 0.1),
        rgba(59, 130, 246, 0.5) 50%,
        rgba(59, 130, 246, 0.1)
    );
}

.inquiry-section::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(to right, 
        rgba(59, 130, 246, 0.1),
        rgba(59, 130, 246, 0.5) 50%,
        rgba(59, 130, 246, 0.1)
    );
}

.inquiry-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 3rem;
    margin-top: 3rem;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(44, 123, 229, 0.08);
    padding: 3rem;
    border: 1px solid rgba(59, 130, 246, 0.1);
    position: relative;
}

.inquiry-content::before {
    content: '';
    position: absolute;
    left: 0;
    top: 10%;
    bottom: 10%;
    width: 1px;
    background: linear-gradient(to bottom, 
        rgba(59, 130, 246, 0.1),
        rgba(59, 130, 246, 0.5) 50%,
        rgba(59, 130, 246, 0.1)
    );
}

.inquiry-content::after {
    content: '';
    position: absolute;
    right: 0;
    top: 10%;
    bottom: 10%;
    width: 1px;
    background: linear-gradient(to bottom, 
        rgba(59, 130, 246, 0.1),
        rgba(59, 130, 246, 0.5) 50%,
        rgba(59, 130, 246, 0.1)
    );
}

.contact-info {
    padding: 2rem;
    background: rgba(59, 130, 246, 0.03);
    border-radius: 12px;
}

.contact-info p {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
    color: var(--text-dark);
    font-size: 1.1rem;
}

.contact-info p:last-child {
    margin-bottom: 0;
}

.contact-info i {
    color: var(--primary-blue);
    font-size: 1.2rem;
}

.inquiry-section .section-title {
    color: var(--text-dark);
    text-align: center;
    margin-bottom: 1rem;
}

@media (max-width: 992px) {
    .inquiry-content {
        grid-template-columns: 1fr;
        padding: 2rem;
    }

    .inquiry-content::before,
    .inquiry-content::after {
        display: none;
    }
}

@media (max-width: 576px) {
    .inquiry-section {
        padding: 3rem 0;
    }

    .inquiry-content {
        padding: 1.5rem;
    }

    .contact-info {
        padding: 1.5rem;
    }
}
</style>

<main class="site-main">
    <!-- Hero Section -->
    <section class="get-started-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Get Started with Property Management in Grass Valley</h1>
                <p>Take the first step towards professional property management services tailored to your Grass Valley investment properties.</p>
                <a href="#inquiry-form" class="hero-cta-button">Get Started Today</a>
            </div>
        </div>
    </section>

    <!-- Process Steps Section -->
    <section class="process-steps">
        <div class="container">
            <h2 class="section-title">How Our Grass Valley Property Management Process Works</h2>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Initial Consultation</h3>
                    <p>Schedule a free consultation to discuss your property management needs and goals.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>Property Assessment</h3>
                    <p>We'll evaluate your property and provide a detailed management proposal.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Agreement & Setup</h3>
                    <p>Review and sign our management agreement, and we'll begin handling your property.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3>Ongoing Management</h3>
                    <p>Enjoy peace of mind with our comprehensive property management services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="services-overview">
        <div class="container">
            <h2 class="section-title">Comprehensive Property Management Services in Grass Valley</h2>
            <div class="services-grid">
                <div class="service-item">
                    <i class="fas fa-home"></i>
                    <h3>Property Marketing</h3>
                    <ul>
                        <li>Professional Photography</li>
                        <li>Virtual Tours</li>
                        <li>Online Listings</li>
                        <li>Social Media Marketing</li>
                    </ul>
                </div>
                <div class="service-item">
                    <i class="fas fa-users"></i>
                    <h3>Tenant Management</h3>
                    <ul>
                        <li>Tenant Screening</li>
                        <li>Lease Preparation</li>
                        <li>Rent Collection</li>
                        <li>Tenant Relations</li>
                    </ul>
                </div>
                <div class="service-item">
                    <i class="fas fa-tools"></i>
                    <h3>Maintenance</h3>
                    <ul>
                        <li>24/7 Emergency Response</li>
                        <li>Regular Inspections</li>
                        <li>Vendor Management</li>
                        <li>Preventive Maintenance</li>
                    </ul>
                </div>
                <div class="service-item">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <h3>Financial Services</h3>
                    <ul>
                        <li>Rent Collection</li>
                        <li>Financial Reporting</li>
                        <li>Expense Management</li>
                        <li>Owner Portal Access</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="container">
            <h2 class="section-title">Why Choose Grass Valley PMG?</h2>
            <div class="benefits-grid">
                <div class="benefit-box">
                    <i class="fas fa-map-marked-alt"></i>
                    <h4>Local Expertise</h4>
                    <p>Deep understanding of Grass Valley's real estate market and community.</p>
                </div>
                <div class="benefit-box">
                    <i class="fas fa-users"></i>
                    <h4>Professional Team</h4>
                    <p>Experienced property managers dedicated to your success.</p>
                </div>
                <div class="benefit-box">
                    <i class="fas fa-headset"></i>
                    <h4>24/7 Support</h4>
                    <p>Round-the-clock assistance for property emergencies.</p>
                </div>
                <div class="benefit-box">
                    <i class="fas fa-comments"></i>
                    <h4>Transparent Communication</h4>
                    <p>Clear, consistent updates on your property's performance.</p>
                </div>
                <div class="benefit-box">
                    <i class="fas fa-chart-line"></i>
                    <h4>15+ Years Experience</h4>
                    <p>Proven track record of successful property management.</p>
                </div>
                <div class="benefit-box">
                    <i class="fas fa-dollar-sign"></i>
                    <h4>Competitive Fees</h4>
                    <p>Value-driven pricing for comprehensive management services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Inquiry Form Section -->
    <section class="inquiry-section" id="inquiry-form">
        <div class="container">
            <h2 class="section-title">Start with Grass Valley's Trusted Property Management Team</h2>
            <div class="inquiry-content">
                <div class="inquiry-info">
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> (530) 553-8883</p>
                        <p><i class="fas fa-envelope"></i> info@grassvalleypmg.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Grass Valley, CA 95945</p>
                    </div>
                </div>
                <div class="inquiry-form">
                    <?php
                    if (class_exists('WPCF7')) {
                        echo do_shortcode('[contact-form-7 id="250af76" title="Contact form 1"]');
                    } else {
                        echo '<div class="form-error-message">';
                        echo '<p>Contact form is currently unavailable. Please email us directly at info@grassvalleypmg.com or call (530) 553-8883.</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 