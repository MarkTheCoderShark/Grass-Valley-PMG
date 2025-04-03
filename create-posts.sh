#!/bin/bash

# Set WordPress path to your Local Sites directory
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
echo "Testing database connection..."
if ! wp db check --path="$WP_PATH" &> /dev/null; then
    echo "Error: Could not connect to database. Please make sure Local is running."
    exit 1
fi

echo "Database connection successful!"
echo "Creating blog posts..."

# Create posts using WP-CLI
wp post create \
    --path="$WP_PATH" \
    --post_title="Grass Valley Property Management Fees 2025: Local Market Guide" \
    --post_name="grass-valley-property-management-fees-2025" \
    --post_content="$(cat blog-posts/grass-valley-property-management-fees-2025.php)" \
    --post_status="publish" \
    --post_date="2024-04-06" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Detailed guide to property management fees in Grass Valley, Nevada County for 2025. Compare local rates, understand fee structures, and learn about competitive pricing in the Grass Valley market.",
        "_yoast_wpseo_focuskw": "grass valley management fees",
        "_yoast_wpseo_title": "Grass Valley Property Management Fees 2025 | Local Market Guide",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/grass-valley-property-management-fees-2025",
        "_yoast_wpseo_opengraph-title": "Grass Valley Property Management Fees 2025 | Local Market Guide",
        "_yoast_wpseo_opengraph-description": "Detailed guide to property management fees in Grass Valley, Nevada County for 2025. Compare local rates, understand fee structures, and learn about competitive pricing in the Grass Valley market.",
        "_yoast_wpseo_twitter-title": "Grass Valley Property Management Fees 2025 | Local Market Guide",
        "_yoast_wpseo_twitter-description": "Detailed guide to property management fees in Grass Valley, Nevada County for 2025. Compare local rates, understand fee structures, and learn about competitive pricing in the Grass Valley market."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Fees post"
else
    echo "✗ Failed to create Fees post"
fi

wp post create \
    --path="$WP_PATH" \
    --post_title="Grass Valley Property Management Services 2025: Complete Guide" \
    --post_name="grass-valley-property-management-services-2025" \
    --post_content="$(cat blog-posts/grass-valley-property-management-services-2025.php)" \
    --post_status="publish" \
    --post_date="2024-04-06" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Comprehensive guide to professional property management services in Grass Valley, Nevada County for 2025. Learn about tenant screening, maintenance, marketing, and local property management expertise.",
        "_yoast_wpseo_focuskw": "grass valley property management services",
        "_yoast_wpseo_title": "Grass Valley Property Management Services 2025 | Complete Guide",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/grass-valley-property-management-services-2025",
        "_yoast_wpseo_opengraph-title": "Grass Valley Property Management Services 2025 | Complete Guide",
        "_yoast_wpseo_opengraph-description": "Comprehensive guide to professional property management services in Grass Valley, Nevada County for 2025. Learn about tenant screening, maintenance, marketing, and local property management expertise.",
        "_yoast_wpseo_twitter-title": "Grass Valley Property Management Services 2025 | Complete Guide",
        "_yoast_wpseo_twitter-description": "Comprehensive guide to professional property management services in Grass Valley, Nevada County for 2025. Learn about tenant screening, maintenance, marketing, and local property management expertise."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Services post"
else
    echo "✗ Failed to create Services post"
fi

echo "Done! Check your WordPress admin panel to verify the posts were created correctly."

cd /Users/m/Local\ Sites/grass-valley-pmg/app/public/wp-content/themes/grassvalleypmg && chmod +x add-internal-links.sh && ./add-internal-links.sh `