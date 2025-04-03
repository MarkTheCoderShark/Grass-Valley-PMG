#!/bin/bash

# Set WordPress path
WP_PATH="/Users/m/Local Sites/grass-valley-pmg/app/public"

# Check if WP-CLI is installed
if ! command -v wp &> /dev/null; then
    echo "WP-CLI is not installed. Please install it first."
    exit 1
fi

# Check if WordPress path exists
if [ ! -d "$WP_PATH" ]; then
    echo "WordPress path not found: $WP_PATH"
    exit 1
fi

# Test database connection
if ! wp db check --path="$WP_PATH"; then
    echo "Could not connect to database. Please check your credentials and make sure Local is running."
    exit 1
fi

# Create Auburn Property Management Guide
wp post create \
    --post_title="Auburn Property Management Guide 2025: Local Market Insights" \
    --post_name="auburn-property-management-guide-2025" \
    --post_content="$(cat blog-posts/auburn-property-management-guide-2025.php)" \
    --post_status="publish" \
    --post_type="post" \
    --post_date="2025-04-02" \
    --meta_input='{"_yoast_wpseo_metadesc":"Comprehensive guide to property management in Auburn, California for 2025. Learn about local market trends, regulations, and investment opportunities in Placer County'\''s historic city.","_yoast_wpseo_focuskw":"Auburn property management","_yoast_wpseo_title":"Auburn Property Management Guide 2025: Local Market Insights | Grass Valley PMG","_yoast_wpseo_canonical":"https://grassvalleypmg.com/auburn-property-management-guide-2025","_yoast_wpseo_opengraph-title":"Auburn Property Management Guide 2025: Local Market Insights","_yoast_wpseo_opengraph-description":"Discover the latest property management trends and opportunities in Auburn, California. Expert insights for property owners and investors in 2025.","_yoast_wpseo_twitter-title":"Auburn Property Management Guide 2025: Local Market Insights","_yoast_wpseo_twitter-description":"Comprehensive guide to property management in Auburn, California for 2025. Expert insights for property owners and investors."}' \
    --path="$WP_PATH"

# Create Colfax Property Management Guide
wp post create \
    --post_title="Colfax Property Management Guide 2025: Investment Opportunities" \
    --post_name="colfax-property-management-guide-2025" \
    --post_content="$(cat blog-posts/colfax-property-management-guide-2025.php)" \
    --post_status="publish" \
    --post_type="post" \
    --post_date="2025-04-02" \
    --meta_input='{"_yoast_wpseo_metadesc":"Expert guide to property management in Colfax, California for 2025. Discover local market trends, regulations, and investment opportunities in this Sierra foothills community.","_yoast_wpseo_focuskw":"Colfax property management","_yoast_wpseo_title":"Colfax Property Management Guide 2025: Investment Opportunities | Grass Valley PMG","_yoast_wpseo_canonical":"https://grassvalleypmg.com/colfax-property-management-guide-2025","_yoast_wpseo_opengraph-title":"Colfax Property Management Guide 2025: Investment Opportunities","_yoast_wpseo_opengraph-description":"Explore property management opportunities in Colfax, California. Expert insights for property owners and investors in 2025.","_yoast_wpseo_twitter-title":"Colfax Property Management Guide 2025: Investment Opportunities","_yoast_wpseo_twitter-description":"Expert guide to property management in Colfax, California for 2025. Discover local market trends and investment opportunities."}' \
    --path="$WP_PATH"

# Create Nevada City Property Management Guide
wp post create \
    --post_title="Nevada City Property Management Guide 2025: Historic Charm & Modern Investment" \
    --post_name="nevada-city-property-management-guide-2025" \
    --post_content="$(cat blog-posts/nevada-city-property-management-guide-2025.php)" \
    --post_status="publish" \
    --post_type="post" \
    --post_date="2025-04-02" \
    --meta_input='{"_yoast_wpseo_metadesc":"Comprehensive guide to property management in Nevada City, California for 2025. Learn about managing historic properties, local regulations, and investment opportunities in this charming Gold Rush town.","_yoast_wpseo_focuskw":"Nevada City property management","_yoast_wpseo_title":"Nevada City Property Management Guide 2025: Historic Charm & Modern Investment | Grass Valley PMG","_yoast_wpseo_canonical":"https://grassvalleypmg.com/nevada-city-property-management-guide-2025","_yoast_wpseo_opengraph-title":"Nevada City Property Management Guide 2025: Historic Charm & Modern Investment","_yoast_wpseo_opengraph-description":"Discover property management insights for Nevada City'\''s historic properties. Expert guidance for property owners and investors in 2025.","_yoast_wpseo_twitter-title":"Nevada City Property Management Guide 2025: Historic Charm & Modern Investment","_yoast_wpseo_twitter-description":"Comprehensive guide to property management in Nevada City, California for 2025. Expert insights for historic property management."}' \
    --path="$WP_PATH"

# Create Penn Valley Property Management Guide
wp post create \
    --post_title="Penn Valley Property Management Guide 2025: Rural Investment Opportunities" \
    --post_name="penn-valley-property-management-guide-2025" \
    --post_content="$(cat blog-posts/penn-valley-property-management-guide-2025.php)" \
    --post_status="publish" \
    --post_type="post" \
    --post_date="2025-04-02" \
    --meta_input='{"_yoast_wpseo_metadesc":"Expert guide to property management in Penn Valley, California for 2025. Learn about rural property management, local market trends, and investment opportunities in this scenic community.","_yoast_wpseo_focuskw":"Penn Valley property management","_yoast_wpseo_title":"Penn Valley Property Management Guide 2025: Rural Investment Opportunities | Grass Valley PMG","_yoast_wpseo_canonical":"https://grassvalleypmg.com/penn-valley-property-management-guide-2025","_yoast_wpseo_opengraph-title":"Penn Valley Property Management Guide 2025: Rural Investment Opportunities","_yoast_wpseo_opengraph-description":"Explore property management opportunities in Penn Valley, California. Expert insights for rural property owners and investors in 2025.","_yoast_wpseo_twitter-title":"Penn Valley Property Management Guide 2025: Rural Investment Opportunities","_yoast_wpseo_twitter-description":"Expert guide to property management in Penn Valley, California for 2025. Discover rural property management insights."}' \
    --path="$WP_PATH"

# Create Lake of the Pines Property Management Guide
wp post create \
    --post_title="Lake of the Pines Property Management Guide 2025: Waterfront Investment Insights" \
    --post_name="lake-of-the-pines-property-management-guide-2025" \
    --post_content="$(cat blog-posts/lake-of-the-pines-property-management-guide-2025.php)" \
    --post_status="publish" \
    --post_type="post" \
    --post_date="2025-04-02" \
    --meta_input='{"_yoast_wpseo_metadesc":"Comprehensive guide to property management in Lake of the Pines, California for 2025. Learn about waterfront property management, local regulations, and investment opportunities in this unique community.","_yoast_wpseo_focuskw":"Lake of the Pines property management","_yoast_wpseo_title":"Lake of the Pines Property Management Guide 2025: Waterfront Investment Insights | Grass Valley PMG","_yoast_wpseo_canonical":"https://grassvalleypmg.com/lake-of-the-pines-property-management-guide-2025","_yoast_wpseo_opengraph-title":"Lake of the Pines Property Management Guide 2025: Waterfront Investment Insights","_yoast_wpseo_opengraph-description":"Discover property management insights for Lake of the Pines waterfront properties. Expert guidance for property owners and investors in 2025.","_yoast_wpseo_twitter-title":"Lake of the Pines Property Management Guide 2025: Waterfront Investment Insights","_yoast_wpseo_twitter-description":"Comprehensive guide to property management in Lake of the Pines, California for 2025. Expert insights for waterfront property management."}' \
    --path="$WP_PATH"

echo "All posts have been created. Please check your WordPress admin panel to verify." 