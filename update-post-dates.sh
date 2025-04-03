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
echo "Updating post dates..."

# Update dates for all posts
wp post list --path="$WP_PATH" --format=csv | while IFS=, read -r ID post_title post_name post_date post_status; do
    if [ "$post_status" = "publish" ]; then
        echo "Updating post: $post_title"
        wp post update "$ID" --path="$WP_PATH" --post_date="2025-04-02"
        if [ $? -eq 0 ]; then
            echo "✓ Successfully updated date for: $post_title"
        else
            echo "✗ Failed to update date for: $post_title"
        fi
    fi
done

echo "Done! Check your WordPress admin panel to verify the dates were updated correctly." 