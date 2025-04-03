<?php
/*
Template Name: Agent Referrals
*/

get_header(); ?>

<main class="site-main">
    <section class="page-hero agent-hero">
        <div class="container">
            <h1 class="page-title">Agent Referral Program</h1>
            <p class="page-subtitle">Partner with us and earn competitive referral fees</p>
            <div class="hero-description">
                <p>Join our network of trusted real estate professionals and expand your business through our property management referral program. We offer a seamless process and competitive compensation for your referrals.</p>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">$500+</span>
                    <span class="stat-label">Average Referral Fee</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24hrs</span>
                    <span class="stat-label">Response Time</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Satisfaction Rate</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Benefits -->
    <section class="benefits-section">
        <div class="container">
            <h2 class="section-title">Why Partner With Us?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3>Competitive Commission</h3>
                    <p>Earn attractive referral fees for each successful placement.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Professional Partnership</h3>
                    <p>Work with an experienced team that values your referrals.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Growth Opportunity</h3>
                    <p>Expand your business through our referral network.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Quick Processing</h3>
                    <p>Fast and efficient handling of referrals and payments.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Quality Assurance</h3>
                    <p>We maintain high standards to protect your reputation.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Dedicated Support</h3>
                    <p>Personal support team for all your referral needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="process-section">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Submit Referral</h3>
                    <p>Fill out our simple referral form with your client's information.</p>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <h3>We Take Care</h3>
                    <p>Our team handles all aspects of property management for your client.</p>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Earn Commission</h3>
                    <p>Receive your referral fee once the agreement is signed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">What Our Partners Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"Grass Valley PMG has been an excellent partner for our real estate business. Their referral program is straightforward, and they always deliver on their promises."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>Real Estate Agent, Century 21</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"I've referred several clients to Grass Valley PMG, and they've always taken excellent care of them. The referral process is smooth, and payments are prompt."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Michael Rodriguez</h4>
                            <p>Broker, Keller Williams</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Referral Form -->
    <section class="referral-form-section" id="referral-form">
        <div class="container">
            <h2 class="section-title">Submit a Referral</h2>
            <div class="form-container">
                <?php echo do_shortcode('[contact-form-7 id="8520e1c" title="Agent Referral"]'); ?>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>What is the referral fee structure?</h3>
                    <p>We offer competitive referral fees based on the property type and management agreement. Fees are paid promptly upon successful onboarding of the property.</p>
                </div>
                <div class="faq-item">
                    <h3>How quickly are referrals processed?</h3>
                    <p>We review and respond to all referrals within 24 hours. Our team works efficiently to ensure a smooth transition for your clients.</p>
                </div>
                <div class="faq-item">
                    <h3>How do you handle property management?</h3>
                    <p>We provide comprehensive property management services including tenant screening, maintenance, rent collection, and financial reporting.</p>
                </div>
                <div class="faq-item">
                    <h3>Is there a limit to referrals?</h3>
                    <p>No, there is no limit to the number of referrals you can submit. The more properties you refer, the more you earn.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Ready to Start Earning?</h2>
            <p>Join our referral program today and grow your business.</p>
            <a href="#referral-form" class="cta-button">SUBMIT A REFERRAL</a>
        </div>
    </section>
</main>

<?php get_footer(); ?> 