<?php
/*
Template Name: Residents
*/

get_header(); ?>

<main class="site-main">
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title">Resident Resources</h1>
            <p class="page-subtitle">Everything you need to make your rental experience exceptional</p>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="quick-links-section">
        <div class="container">
            <h2 class="section-title">Quick Links</h2>
            <div class="quick-links-grid">
                <a href="#" class="quick-link-card">
                    <i class="fas fa-dollar-sign"></i>
                    <h3>Pay Rent Online</h3>
                    <p>Make secure payments through our resident portal</p>
                </a>
                <a href="#" class="quick-link-card">
                    <i class="fas fa-wrench"></i>
                    <h3>Maintenance Request</h3>
                    <p>Submit and track maintenance requests</p>
                </a>
                <a href="#" class="quick-link-card">
                    <i class="fas fa-user-circle"></i>
                    <h3>Resident Portal</h3>
                    <p>Access your account and important documents</p>
                </a>
                <a href="#" class="quick-link-card">
                    <i class="fas fa-phone"></i>
                    <h3>Emergency Contact</h3>
                    <p>24/7 emergency maintenance support</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="resources-section">
        <div class="container">
            <h2 class="section-title">Resident Resources</h2>
            <div class="resources-grid">
                <div class="resource-card">
                    <h3>Moving In</h3>
                    <ul class="resource-list">
                        <li><i class="fas fa-check"></i> Move-in checklist</li>
                        <li><i class="fas fa-check"></i> Utility setup guide</li>
                        <li><i class="fas fa-check"></i> Rental insurance information</li>
                        <li><i class="fas fa-check"></i> Local area guide</li>
                    </ul>
                </div>
                <div class="resource-card">
                    <h3>During Your Stay</h3>
                    <ul class="resource-list">
                        <li><i class="fas fa-check"></i> Maintenance guidelines</li>
                        <li><i class="fas fa-check"></i> Community rules</li>
                        <li><i class="fas fa-check"></i> Rental policies</li>
                        <li><i class="fas fa-check"></i> Pet policies</li>
                    </ul>
                </div>
                <div class="resource-card">
                    <h3>Moving Out</h3>
                    <ul class="resource-list">
                        <li><i class="fas fa-check"></i> Move-out checklist</li>
                        <li><i class="fas fa-check"></i> Security deposit info</li>
                        <li><i class="fas fa-check"></i> Notice requirements</li>
                        <li><i class="fas fa-check"></i> Cleaning guidelines</li>
                    </ul>
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
                    <h3>How do I submit a maintenance request?</h3>
                    <p>Log into your resident portal and click on "Maintenance Request" to submit and track your maintenance needs.</p>
                </div>
                <div class="faq-item">
                    <h3>When is rent due?</h3>
                    <p>Rent is due on the 1st of each month. Payments received after the 5th may incur late fees.</p>
                </div>
                <div class="faq-item">
                    <h3>How do I pay my rent?</h3>
                    <p>You can pay your rent online through the resident portal, or by check/money order at our office.</p>
                </div>
                <div class="faq-item">
                    <h3>What do I do in case of a maintenance emergency?</h3>
                    <p>For emergencies outside of business hours, call our 24/7 emergency maintenance line at (530) 555-0123.</p>
                </div>
                <div class="faq-item">
                    <h3>How do I update my contact information?</h3>
                    <p>Log into your resident portal and navigate to "Profile Settings" to update your contact information, including phone number and email address.</p>
                </div>
                <div class="faq-item">
                    <h3>What is your pet policy?</h3>
                    <p>Pet policies vary by property. Please refer to your lease agreement or contact our office for specific details about pet types, sizes, and associated fees.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p><i class="fas fa-phone"></i> (530) 555-0123</p>
                    <p><i class="fas fa-envelope"></i> residents@grassvalleypmg.com</p>
                    <p><i class="fas fa-clock"></i> Office Hours: Mon-Fri 9am-5pm</p>
                    <p class="emergency-note"><i class="fas fa-exclamation-circle"></i> For after-hours emergencies, please call our 24/7 maintenance line.</p>
                </div>
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="6d2f9a1" title="Tenant Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 