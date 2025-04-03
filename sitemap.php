<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Get all published pages
$pages = get_pages(array(
    'post_status' => 'publish',
    'sort_column' => 'menu_order',
    'sort_order' => 'ASC'
));

// Get all published blog posts
$posts = get_posts(array(
    'post_status' => 'publish',
    'post_type' => 'post',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
));

// Get all published testimonials
$testimonials = get_posts(array(
    'post_status' => 'publish',
    'post_type' => 'testimonial',
    'posts_per_page' => -1
));

// Output XML header
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Homepage -->
    <url>
        <loc><?php echo esc_url(home_url('/')); ?></loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Main Pages -->
    <?php foreach ($pages as $page): ?>
    <url>
        <loc><?php echo esc_url(get_permalink($page->ID)); ?></loc>
        <lastmod><?php echo get_the_modified_date('Y-m-d', $page->ID); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <?php endforeach; ?>

    <!-- Blog Posts -->
    <?php foreach ($posts as $post): ?>
    <url>
        <loc><?php echo esc_url(get_permalink($post->ID)); ?></loc>
        <lastmod><?php echo get_the_modified_date('Y-m-d', $post->ID); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <?php endforeach; ?>

    <!-- Testimonials -->
    <?php foreach ($testimonials as $testimonial): ?>
    <url>
        <loc><?php echo esc_url(get_permalink($testimonial->ID)); ?></loc>
        <lastmod><?php echo get_the_modified_date('Y-m-d', $testimonial->ID); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <?php endforeach; ?>

    <!-- Archive Pages -->
    <url>
        <loc><?php echo esc_url(home_url('/blog')); ?></loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>

    <!-- Category Pages -->
    <?php
    $categories = get_categories(array(
        'hide_empty' => true,
        'orderby' => 'name',
        'order' => 'ASC'
    ));
    foreach ($categories as $category):
    ?>
    <url>
        <loc><?php echo esc_url(get_category_link($category->term_id)); ?></loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    <?php endforeach; ?>

    <!-- Tag Pages -->
    <?php
    $tags = get_tags(array(
        'hide_empty' => true,
        'orderby' => 'name',
        'order' => 'ASC'
    ));
    foreach ($tags as $tag):
    ?>
    <url>
        <loc><?php echo esc_url(get_tag_link($tag->term_id)); ?></loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    <?php endforeach; ?>
</urlset> 