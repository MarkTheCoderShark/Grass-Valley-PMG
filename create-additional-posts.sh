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
echo "Creating additional blog posts..."

# Create posts using WP-CLI
wp post create \
    --path="$WP_PATH" \
    --post_title="Property Investment Strategies in Sierra Foothills 2025: Maximizing ROI" \
    --post_name="property-investment-strategies-sierra-foothills-2025" \
    --post_content="$(cat blog-posts/property-investment-strategies-sierra-foothills-2025.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Expert guide to property investment strategies in Sierra Foothills for 2025. Learn about market analysis, ROI optimization, and investment opportunities in the region.",
        "_yoast_wpseo_focuskw": "property investment strategies sierra foothills",
        "_yoast_wpseo_title": "Property Investment Strategies in Sierra Foothills 2025 | Maximizing ROI",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/property-investment-strategies-sierra-foothills-2025",
        "_yoast_wpseo_opengraph-title": "Property Investment Strategies in Sierra Foothills 2025 | Maximizing ROI",
        "_yoast_wpseo_opengraph-description": "Expert guide to property investment strategies in Sierra Foothills for 2025. Learn about market analysis, ROI optimization, and investment opportunities in the region.",
        "_yoast_wpseo_twitter-title": "Property Investment Strategies in Sierra Foothills 2025 | Maximizing ROI",
        "_yoast_wpseo_twitter-description": "Expert guide to property investment strategies in Sierra Foothills for 2025. Learn about market analysis, ROI optimization, and investment opportunities in the region."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Investment Strategies post"
else
    echo "✗ Failed to create Investment Strategies post"
fi

wp post create \
    --path="$WP_PATH" \
    --post_title="Tenant Screening Best Practices for Sierra Foothills Properties 2025" \
    --post_name="tenant-screening-best-practices-sierra-foothills-2025" \
    --post_content="$(cat blog-posts/tenant-screening-best-practices-2025.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Comprehensive guide to tenant screening best practices for Sierra Foothills properties in 2025. Learn about background checks, credit verification, and tenant selection criteria.",
        "_yoast_wpseo_focuskw": "tenant screening best practices sierra foothills",
        "_yoast_wpseo_title": "Tenant Screening Best Practices for Sierra Foothills Properties 2025",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/tenant-screening-best-practices-sierra-foothills-2025",
        "_yoast_wpseo_opengraph-title": "Tenant Screening Best Practices for Sierra Foothills Properties 2025",
        "_yoast_wpseo_opengraph-description": "Comprehensive guide to tenant screening best practices for Sierra Foothills properties in 2025. Learn about background checks, credit verification, and tenant selection criteria.",
        "_yoast_wpseo_twitter-title": "Tenant Screening Best Practices for Sierra Foothills Properties 2025",
        "_yoast_wpseo_twitter-description": "Comprehensive guide to tenant screening best practices for Sierra Foothills properties in 2025. Learn about background checks, credit verification, and tenant selection criteria."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Tenant Screening post"
else
    echo "✗ Failed to create Tenant Screening post"
fi

wp post create \
    --path="$WP_PATH" \
    --post_title="Property Maintenance Guide for Sierra Foothills Homes 2025" \
    --post_name="property-maintenance-guide-sierra-foothills-2025" \
    --post_content="$(cat blog-posts/property-maintenance-guide-sierra-foothills.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Essential property maintenance guide for Sierra Foothills homes in 2025. Learn about seasonal maintenance, preventive care, and property upkeep best practices.",
        "_yoast_wpseo_focuskw": "property maintenance guide sierra foothills",
        "_yoast_wpseo_title": "Property Maintenance Guide for Sierra Foothills Homes 2025",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/property-maintenance-guide-sierra-foothills-2025",
        "_yoast_wpseo_opengraph-title": "Property Maintenance Guide for Sierra Foothills Homes 2025",
        "_yoast_wpseo_opengraph-description": "Essential property maintenance guide for Sierra Foothills homes in 2025. Learn about seasonal maintenance, preventive care, and property upkeep best practices.",
        "_yoast_wpseo_twitter-title": "Property Maintenance Guide for Sierra Foothills Homes 2025",
        "_yoast_wpseo_twitter-description": "Essential property maintenance guide for Sierra Foothills homes in 2025. Learn about seasonal maintenance, preventive care, and property upkeep best practices."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Property Maintenance Guide post"
else
    echo "✗ Failed to create Property Maintenance Guide post"
fi

wp post create \
    --path="$WP_PATH" \
    --post_title="Grass Valley Rental Market Forecast 2025: Investment Opportunities" \
    --post_name="grass-valley-rental-market-forecast-2025" \
    --post_content="$(cat blog-posts/grass-valley-rental-market-forecast-2025.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Detailed forecast of Grass Valley rental market for 2025. Discover investment opportunities, market trends, and rental property insights for the region.",
        "_yoast_wpseo_focuskw": "grass valley rental market forecast",
        "_yoast_wpseo_title": "Grass Valley Rental Market Forecast 2025 | Investment Opportunities",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/grass-valley-rental-market-forecast-2025",
        "_yoast_wpseo_opengraph-title": "Grass Valley Rental Market Forecast 2025 | Investment Opportunities",
        "_yoast_wpseo_opengraph-description": "Detailed forecast of Grass Valley rental market for 2025. Discover investment opportunities, market trends, and rental property insights for the region.",
        "_yoast_wpseo_twitter-title": "Grass Valley Rental Market Forecast 2025 | Investment Opportunities",
        "_yoast_wpseo_twitter-description": "Detailed forecast of Grass Valley rental market for 2025. Discover investment opportunities, market trends, and rental property insights for the region."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Grass Valley Market Forecast post"
else
    echo "✗ Failed to create Grass Valley Market Forecast post"
fi

wp post create \
    --path="$WP_PATH" \
    --post_title="Placer County Property Management Guide 2025: Local Insights" \
    --post_name="placer-county-property-management-guide-2025" \
    --post_content="$(cat blog-posts/placer-county-property-management-guide-2025.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Comprehensive guide to property management in Placer County for 2025. Learn about local regulations, market conditions, and property management best practices.",
        "_yoast_wpseo_focuskw": "placer county property management guide",
        "_yoast_wpseo_title": "Placer County Property Management Guide 2025 | Local Insights",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/placer-county-property-management-guide-2025",
        "_yoast_wpseo_opengraph-title": "Placer County Property Management Guide 2025 | Local Insights",
        "_yoast_wpseo_opengraph-description": "Comprehensive guide to property management in Placer County for 2025. Learn about local regulations, market conditions, and property management best practices.",
        "_yoast_wpseo_twitter-title": "Placer County Property Management Guide 2025 | Local Insights",
        "_yoast_wpseo_twitter-description": "Comprehensive guide to property management in Placer County for 2025. Learn about local regulations, market conditions, and property management best practices."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Placer County Guide post"
else
    echo "✗ Failed to create Placer County Guide post"
fi

echo "Done! Check your WordPress admin panel to verify the posts were created correctly." 