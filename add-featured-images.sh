#!/bin/bash

# Set WordPress path
WP_PATH="/Users/m/Local Sites/grass-valley-pmg/app/public"

# Create images directory if it doesn't exist
mkdir -p "$WP_PATH/wp-content/themes/grassvalleypmg/images"

# Function to add featured image to a post
add_featured_image() {
    local post_id=$1
    local post_title=$2
    local image_path=$3
    
    # Use default image if location-specific one doesn't exist
    if [ ! -f "$image_path" ]; then
        image_path="$WP_PATH/wp-content/themes/grassvalleypmg/images/default-property-management-2025.jpg"
    fi
    
    # Upload the image
    wp media import "$image_path" \
        --title="$post_title Featured Image" \
        --path="$WP_PATH"
    
    # Get the attachment ID
    attachment_id=$(wp post list \
        --post_type=attachment \
        --post_status=inherit \
        --fields=ID,post_title \
        --path="$WP_PATH" | grep "$post_title Featured Image" | cut -f1)
    
    if [ ! -z "$attachment_id" ]; then
        # Set as featured image
        wp post meta update $post_id _thumbnail_id $attachment_id --path="$WP_PATH"
        echo "Added featured image to: $post_title"
    else
        echo "Failed to add featured image to: $post_title"
    fi
}

# Get all location guide posts
posts=$(wp post list \
    --post_type=post \
    --post_status=publish \
    --fields=ID,post_title \
    --path="$WP_PATH" | grep "Property Management Guide 2025")

# Process each post
echo "$posts" | while read -r line; do
    post_id=$(echo "$line" | cut -f1)
    post_title=$(echo "$line" | cut -f2)
    
    # Determine image path based on location
    case "$post_title" in
        *"Auburn"*)
            image_path="$WP_PATH/wp-content/themes/grassvalleypmg/images/auburn-property-management-2025.jpg"
            ;;
        *"Colfax"*)
            image_path="$WP_PATH/wp-content/themes/grassvalleypmg/images/colfax-property-management-2025.jpg"
            ;;
        *"Nevada City"*)
            image_path="$WP_PATH/wp-content/themes/grassvalleypmg/images/nevada-city-property-management-2025.jpg"
            ;;
        *"Penn Valley"*)
            image_path="$WP_PATH/wp-content/themes/grassvalleypmg/images/penn-valley-property-management-2025.jpg"
            ;;
        *"Lake of the Pines"*)
            image_path="$WP_PATH/wp-content/themes/grassvalleypmg/images/lake-of-the-pines-property-management-2025.jpg"
            ;;
    esac
    
    # Add featured image
    add_featured_image "$post_id" "$post_title" "$image_path"
done

echo "Featured images complete. Please check your WordPress admin panel to verify." 