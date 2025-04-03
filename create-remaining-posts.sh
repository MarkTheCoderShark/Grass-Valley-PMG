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
echo "Creating remaining blog posts..."

# Create posts using WP-CLI
wp post create \
    --path="$WP_PATH" \
    --post_title="Property Management Fees in Sierra Foothills 2025: Complete Guide" \
    --post_name="property-management-fees-sierra-foothills-2025" \
    --post_content="$(cat blog-posts/property-management-fees-sierra-foothills-2025.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Comprehensive guide to property management fees in Sierra Foothills for 2025. Understand fee structures, compare rates, and learn about value-added services in the region.",
        "_yoast_wpseo_focuskw": "property management fees sierra foothills",
        "_yoast_wpseo_title": "Property Management Fees in Sierra Foothills 2025 | Complete Guide",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/property-management-fees-sierra-foothills-2025",
        "_yoast_wpseo_opengraph-title": "Property Management Fees in Sierra Foothills 2025 | Complete Guide",
        "_yoast_wpseo_opengraph-description": "Comprehensive guide to property management fees in Sierra Foothills for 2025. Understand fee structures, compare rates, and learn about value-added services in the region.",
        "_yoast_wpseo_twitter-title": "Property Management Fees in Sierra Foothills 2025 | Complete Guide",
        "_yoast_wpseo_twitter-description": "Comprehensive guide to property management fees in Sierra Foothills for 2025. Understand fee structures, compare rates, and learn about value-added services in the region."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Sierra Foothills Fees post"
else
    echo "✗ Failed to create Sierra Foothills Fees post"
fi

wp post create \
    --path="$WP_PATH" \
    --post_title="Vacation Rental Management in Sierra Foothills 2025: Market Guide" \
    --post_name="vacation-rental-management-sierra-foothills-2025" \
    --post_content="$(cat blog-posts/vacation-rental-management-sierra-foothills-2025.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Expert guide to vacation rental management in Sierra Foothills for 2025. Learn about market trends, management strategies, and maximizing rental income in the region.",
        "_yoast_wpseo_focuskw": "vacation rental management sierra foothills",
        "_yoast_wpseo_title": "Vacation Rental Management in Sierra Foothills 2025 | Market Guide",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/vacation-rental-management-sierra-foothills-2025",
        "_yoast_wpseo_opengraph-title": "Vacation Rental Management in Sierra Foothills 2025 | Market Guide",
        "_yoast_wpseo_opengraph-description": "Expert guide to vacation rental management in Sierra Foothills for 2025. Learn about market trends, management strategies, and maximizing rental income in the region.",
        "_yoast_wpseo_twitter-title": "Vacation Rental Management in Sierra Foothills 2025 | Market Guide",
        "_yoast_wpseo_twitter-description": "Expert guide to vacation rental management in Sierra Foothills for 2025. Learn about market trends, management strategies, and maximizing rental income in the region."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Vacation Rental Management post"
else
    echo "✗ Failed to create Vacation Rental Management post"
fi

wp post create \
    --path="$WP_PATH" \
    --post_title="Sustainable Property Management in Sierra Foothills 2025: Green Future" \
    --post_name="sustainable-property-management-sierra-foothills-2025" \
    --post_content="$(cat blog-posts/sustainable-property-management-sierra-foothills-2025.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Expert guide to sustainable property management in Sierra Foothills for 2025. Learn about eco-friendly practices, green building features, and environmental considerations.",
        "_yoast_wpseo_focuskw": "sustainable property management sierra foothills",
        "_yoast_wpseo_title": "Sustainable Property Management in Sierra Foothills 2025 | Green Future",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/sustainable-property-management-sierra-foothills-2025",
        "_yoast_wpseo_opengraph-title": "Sustainable Property Management in Sierra Foothills 2025 | Green Future",
        "_yoast_wpseo_opengraph-description": "Expert guide to sustainable property management in Sierra Foothills for 2025. Learn about eco-friendly practices, green building features, and environmental considerations.",
        "_yoast_wpseo_twitter-title": "Sustainable Property Management in Sierra Foothills 2025 | Green Future",
        "_yoast_wpseo_twitter-description": "Expert guide to sustainable property management in Sierra Foothills for 2025. Learn about eco-friendly practices, green building features, and environmental considerations."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Sustainable Property Management post"
else
    echo "✗ Failed to create Sustainable Property Management post"
fi

wp post create \
    --path="$WP_PATH" \
    --post_title="Sierra Foothills Property Management Trends 2025: Market Analysis" \
    --post_name="sierra-foothills-property-management-trends-2025" \
    --post_content="$(cat blog-posts/sierra-foothills-property-management-trends-2025.php)" \
    --post_status="publish" \
    --post_date="2025-04-02" \
    --post_type="post" \
    --post_category="1" \
    --meta_input='{
        "_yoast_wpseo_metadesc": "Comprehensive analysis of property management trends in Sierra Foothills for 2025. Discover market insights, investment opportunities, and future growth indicators.",
        "_yoast_wpseo_focuskw": "sierra foothills property management trends",
        "_yoast_wpseo_title": "Sierra Foothills Property Management Trends 2025 | Market Analysis",
        "_yoast_wpseo_canonical": "https://grassvalleypmg.com/blog/sierra-foothills-property-management-trends-2025",
        "_yoast_wpseo_opengraph-title": "Sierra Foothills Property Management Trends 2025 | Market Analysis",
        "_yoast_wpseo_opengraph-description": "Comprehensive analysis of property management trends in Sierra Foothills for 2025. Discover market insights, investment opportunities, and future growth indicators.",
        "_yoast_wpseo_twitter-title": "Sierra Foothills Property Management Trends 2025 | Market Analysis",
        "_yoast_wpseo_twitter-description": "Comprehensive analysis of property management trends in Sierra Foothills for 2025. Discover market insights, investment opportunities, and future growth indicators."
    }'

if [ $? -eq 0 ]; then
    echo "✓ Successfully created Sierra Foothills Trends post"
else
    echo "✗ Failed to create Sierra Foothills Trends post"
fi

echo "Done! Check your WordPress admin panel to verify the posts were created correctly." 