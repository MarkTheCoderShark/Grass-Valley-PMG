<?php
/**
 * The sidebar containing the main widget area
 */
?>

<aside class="sidebar">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php endif; ?>

    <!-- Search Widget -->
    <div class="widget search-widget">
        <h3 class="widget-title">Search</h3>
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <label class="screen-reader-text">Search for:</label>
            <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
            <button type="submit" class="search-submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <!-- Categories Widget -->
    <div class="widget categories-widget">
        <h3 class="widget-title">Categories</h3>
        <ul>
            <?php
            wp_list_categories(array(
                'title_li' => '',
                'show_count' => true,
            ));
            ?>
        </ul>
    </div>

    <!-- Recent Posts Widget -->
    <div class="widget recent-posts-widget">
        <h3 class="widget-title">Recent Posts</h3>
        <ul>
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 5,
                'post_status' => 'publish',
            ));

            foreach ($recent_posts as $post) : ?>
                <li>
                    <a href="<?php echo get_permalink($post['ID']); ?>">
                        <?php echo $post['post_title']; ?>
                    </a>
                    <span class="post-date">
                        <?php echo get_the_date('', $post['ID']); ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Contact Widget -->
    <div class="widget contact-widget">
        <h3 class="widget-title">Contact Us</h3>
        <ul class="contact-info">
            <li><i class="fas fa-phone"></i> (530) 553-8883</li>
            <li><i class="fas fa-envelope"></i> info@grassvalleypmg.com</li>
            <li><i class="fas fa-map-marker-alt"></i> 123 Main Street, Grass Valley, CA 95945</li>
        </ul>
    </div>
</aside> 