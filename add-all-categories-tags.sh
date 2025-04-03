#!/bin/bash

# Set WordPress path
WP_PATH="/Users/m/Local Sites/grass-valley-pmg/app/public"

# Function to add categories and tags to a post
add_taxonomies() {
    local post_id=$1
    local post_title=$2
    
    # Add common categories and tags for all posts
    wp post term add $post_id category "Property Management Guides" "Local Market Insights" "Investment Opportunities" --path="$WP_PATH"
    wp post term add $post_id post_tag "Property Management" "Real Estate" "Investment" "Local Market" "2025 Guide" --path="$WP_PATH"
    
    # Add location-specific categories and tags
    case "$post_title" in
        *"Auburn"*)
            wp post term add $post_id category "Auburn" --path="$WP_PATH"
            wp post term add $post_id post_tag "Auburn" "Placer County" "Sierra Foothills" --path="$WP_PATH"
            ;;
        *"Colfax"*)
            wp post term add $post_id category "Colfax" --path="$WP_PATH"
            wp post term add $post_id post_tag "Colfax" "Placer County" "Sierra Foothills" --path="$WP_PATH"
            ;;
        *"Nevada City"*)
            wp post term add $post_id category "Nevada City" --path="$WP_PATH"
            wp post term add $post_id post_tag "Nevada City" "Nevada County" "Sierra Foothills" --path="$WP_PATH"
            ;;
        *"Penn Valley"*)
            wp post term add $post_id category "Penn Valley" --path="$WP_PATH"
            wp post term add $post_id post_tag "Penn Valley" "Nevada County" "Sierra Foothills" --path="$WP_PATH"
            ;;
        *"Lake of the Pines"*)
            wp post term add $post_id category "Lake of the Pines" --path="$WP_PATH"
            wp post term add $post_id post_tag "Lake of the Pines" "Nevada County" "Sierra Foothills" --path="$WP_PATH"
            ;;
        *"Grass Valley"*)
            wp post term add $post_id category "Grass Valley" --path="$WP_PATH"
            wp post term add $post_id post_tag "Grass Valley" "Nevada County" "Sierra Foothills" --path="$WP_PATH"
            ;;
    esac
    
    # Add topic-specific categories and tags
    case "$post_title" in
        *"Fees"*)
            wp post term add $post_id category "Property Management Fees" --path="$WP_PATH"
            wp post term add $post_id post_tag "Management Fees" "Costs" "Pricing" --path="$WP_PATH"
            ;;
        *"Services"*)
            wp post term add $post_id category "Property Management Services" --path="$WP_PATH"
            wp post term add $post_id post_tag "Services" "Property Services" --path="$WP_PATH"
            ;;
        *"Vacation Rental"*)
            wp post term add $post_id category "Vacation Rental Management" --path="$WP_PATH"
            wp post term add $post_id post_tag "Vacation Rental" "Short-term Rental" "VRBO" "Airbnb" --path="$WP_PATH"
            ;;
        *"Sustainable"*|*"Green"*)
            wp post term add $post_id category "Sustainable Property Management" --path="$WP_PATH"
            wp post term add $post_id post_tag "Sustainability" "Green Property" "Eco-friendly" --path="$WP_PATH"
            ;;
        *"Trends"*|*"Market Analysis"*)
            wp post term add $post_id category "Market Analysis" --path="$WP_PATH"
            wp post term add $post_id post_tag "Market Trends" "Real Estate Market" "Analysis" --path="$WP_PATH"
            ;;
        *"Investment"*|*"ROI"*)
            wp post term add $post_id category "Investment Strategies" --path="$WP_PATH"
            wp post term add $post_id post_tag "Investment" "ROI" "Returns" --path="$WP_PATH"
            ;;
        *"Tenant Screening"*)
            wp post term add $post_id category "Tenant Management" --path="$WP_PATH"
            wp post term add $post_id post_tag "Tenant Screening" "Tenant Selection" "Tenant Management" --path="$WP_PATH"
            ;;
        *"Maintenance"*)
            wp post term add $post_id category "Property Maintenance" --path="$WP_PATH"
            wp post term add $post_id post_tag "Maintenance" "Property Care" "Upkeep" --path="$WP_PATH"
            ;;
        *"Rental Market"*)
            wp post term add $post_id category "Rental Market" --path="$WP_PATH"
            wp post term add $post_id post_tag "Rental Market" "Rentals" "Rental Properties" --path="$WP_PATH"
            ;;
    esac
    
    echo "Added categories and tags to: $post_title"
}

# Create main categories if they don't exist
wp term create category "Property Management Guides" --path="$WP_PATH" 2>/dev/null
wp term create category "Local Market Insights" --path="$WP_PATH" 2>/dev/null
wp term create category "Investment Opportunities" --path="$WP_PATH" 2>/dev/null
wp term create category "Property Management Fees" --path="$WP_PATH" 2>/dev/null
wp term create category "Property Management Services" --path="$WP_PATH" 2>/dev/null
wp term create category "Vacation Rental Management" --path="$WP_PATH" 2>/dev/null
wp term create category "Sustainable Property Management" --path="$WP_PATH" 2>/dev/null
wp term create category "Market Analysis" --path="$WP_PATH" 2>/dev/null
wp term create category "Investment Strategies" --path="$WP_PATH" 2>/dev/null
wp term create category "Tenant Management" --path="$WP_PATH" 2>/dev/null
wp term create category "Property Maintenance" --path="$WP_PATH" 2>/dev/null
wp term create category "Rental Market" --path="$WP_PATH" 2>/dev/null

# Create location categories if they don't exist
wp term create category "Auburn" --path="$WP_PATH" 2>/dev/null
wp term create category "Colfax" --path="$WP_PATH" 2>/dev/null
wp term create category "Nevada City" --path="$WP_PATH" 2>/dev/null
wp term create category "Penn Valley" --path="$WP_PATH" 2>/dev/null
wp term create category "Lake of the Pines" --path="$WP_PATH" 2>/dev/null
wp term create category "Grass Valley" --path="$WP_PATH" 2>/dev/null

# Get all blog posts
posts=$(wp post list \
    --post_type=post \
    --post_status=publish \
    --fields=ID,post_title \
    --path="$WP_PATH")

# Process each post
echo "$posts" | while read -r line; do
    post_id=$(echo "$line" | cut -f1)
    post_title=$(echo "$line" | cut -f2)
    
    # Add categories and tags
    add_taxonomies "$post_id" "$post_title"
done

echo "Categories and tags complete. Please check your WordPress admin panel to verify." 