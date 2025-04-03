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
if ! wp db check --path="$WP_PATH" &> /dev/null; then
    echo "Database connection failed. Please check your WordPress configuration."
    exit 1
fi

# Function to add internal links
add_internal_links() {
    local post_id="$1"
    local title="$2"
    local content="$3"
    
    # Create related links section based on post title
    local related_links="<div class=\"related-links\"><h3>Related Articles</h3><ul>"
    
    # Location-based links
    case "$title" in
        *"Auburn"*)
            related_links+="<li><a href=\"/blog/placer-county-property-management-guide-2025\">Placer County Property Management Guide 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-fees-2025\">Grass Valley Property Management Fees 2025</a></li>"
            ;;
        *"Colfax"*)
            related_links+="<li><a href=\"/blog/placer-county-property-management-guide-2025\">Placer County Property Management Guide 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-fees-2025\">Grass Valley Property Management Fees 2025</a></li>"
            ;;
        *"Nevada City"*)
            related_links+="<li><a href=\"/blog/nevada-county-property-management-guide-2025\">Nevada County Property Management Guide 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-fees-2025\">Grass Valley Property Management Fees 2025</a></li>"
            ;;
        *"Penn Valley"*)
            related_links+="<li><a href=\"/blog/nevada-county-property-management-guide-2025\">Nevada County Property Management Guide 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-fees-2025\">Grass Valley Property Management Fees 2025</a></li>"
            ;;
        *"Lake of the Pines"*)
            related_links+="<li><a href=\"/blog/nevada-county-property-management-guide-2025\">Nevada County Property Management Guide 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-fees-2025\">Grass Valley Property Management Fees 2025</a></li>"
            ;;
        *"Grass Valley"*)
            related_links+="<li><a href=\"/blog/nevada-county-property-management-guide-2025\">Nevada County Property Management Guide 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-fees-2025\">Grass Valley Property Management Fees 2025</a></li>"
            ;;
    esac
    
    # Topic-based links
    case "$title" in
        *"Fees"*)
            related_links+="<li><a href=\"/blog/grass-valley-property-management-services-2025\">Grass Valley Property Management Services 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-tips-2025\">Grass Valley Property Management Tips 2025</a></li>"
            ;;
        *"Services"*)
            related_links+="<li><a href=\"/blog/grass-valley-property-management-fees-2025\">Grass Valley Property Management Fees 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-tips-2025\">Grass Valley Property Management Tips 2025</a></li>"
            ;;
        *"Tips"*)
            related_links+="<li><a href=\"/blog/grass-valley-property-management-fees-2025\">Grass Valley Property Management Fees 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-services-2025\">Grass Valley Property Management Services 2025</a></li>"
            ;;
        *"Maintenance"*)
            related_links+="<li><a href=\"/blog/grass-valley-property-management-services-2025\">Grass Valley Property Management Services 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-tips-2025\">Grass Valley Property Management Tips 2025</a></li>"
            ;;
        *"Market"*)
            related_links+="<li><a href=\"/blog/grass-valley-property-management-tips-2025\">Grass Valley Property Management Tips 2025</a></li>"
            related_links+="<li><a href=\"/blog/grass-valley-property-management-services-2025\">Grass Valley Property Management Services 2025</a></li>"
            ;;
    esac
    
    related_links+="</ul></div>"
    
    # Clean up the content by removing PHP code and comments
    content=$(echo "$content" | sed '/<?php/,/?>/d' | sed '/\/\*/,/\*\//d' | sed '/<!--/,/-->/d')
    
    # Check if content contains CTA section
    if [[ "$content" == *"<div class=\"cta-section\">"* ]]; then
        # Escape special characters in the content
        content=$(echo "$content" | sed 's/"/\\"/g' | sed 's/&/\\&/g')
        
        # Insert related links before CTA section
        new_content=$(echo "$content" | sed "s/<div class=\"cta-section\">/$related_links<div class=\"cta-section\">/")
        
        # Update the post with new content
        if wp post update "$post_id" --post_content="$new_content" --path="$WP_PATH" &> /dev/null; then
            echo "Success: Added internal links to post $post_id"
        else
            echo "Error: Failed to update post $post_id"
        fi
    else
        echo "Warning: No CTA section found in post $post_id"
        echo "Content preview: ${content:0:200}..."
        echo "Full content structure:"
        echo "$content" | grep -A 5 -B 5 "class=\"cta-section\"" || echo "No CTA section found in content"
    fi
}

# Get all published blog posts
echo "Fetching blog posts..."
posts=$(wp post list --post_type=post --post_status=publish --format=csv --fields=ID,post_title,post_content --path="$WP_PATH")

# Process each post
echo "$posts" | tail -n +2 | while IFS=, read -r id title content; do
    # Skip empty or invalid posts
    if [ -z "$id" ] || [ "$id" == "ID" ]; then
        continue
    fi
    
    # Remove quotes from title and content
    title=$(echo "$title" | sed 's/^"\(.*\)"$/\1/')
    content=$(echo "$content" | sed 's/^"\(.*\)"$/\1/')
    
    echo "Processing: $title"
    add_internal_links "$id" "$title" "$content"
done

echo "Internal linking process completed." 