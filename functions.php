<?php
if (!defined('ABSPATH')) exit;

// Theme Setup
function grassvalleypmg_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'grassvalleypmg'),
        'footer' => esc_html__('Footer Menu', 'grassvalleypmg'),
    ));
}
add_action('after_setup_theme', 'grassvalleypmg_setup');

// Enqueue scripts and styles
function grassvalleypmg_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);
    
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4');
    
    // Enqueue CSS files from css directory
    wp_enqueue_style('grassvalleypmg-base', get_template_directory_uri() . '/css/base.css', array(), '1.0.0');
    wp_enqueue_style('grassvalleypmg-header', get_template_directory_uri() . '/css/header.css', array(), '1.0.0');
    wp_enqueue_style('grassvalleypmg-footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0.0');
    wp_enqueue_style('grassvalleypmg-sections', get_template_directory_uri() . '/css/sections.css', array(), '1.0.0');
    wp_enqueue_style('grassvalleypmg-components', get_template_directory_uri() . '/css/components.css', array(), '1.0.0');
    wp_enqueue_style('grassvalleypmg-hero', get_template_directory_uri() . '/css/hero.css', array(), '1.0.0');
    wp_enqueue_style('grassvalleypmg-blog', get_template_directory_uri() . '/css/blog.css', array(), '1.0.0');
    wp_enqueue_style('grassvalleypmg-pricing', get_template_directory_uri() . '/css/pricing.css', array(), '1.0.0');
    wp_enqueue_style('grassvalleypmg-agent-referrals', get_template_directory_uri() . '/css/agent-referrals.css', array(), '1.0.0');
    
    // Enqueue main stylesheet
    wp_enqueue_style('grassvalleypmg-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue Slick Slider
    wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1');
    wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    
    // Enqueue custom JavaScript
    wp_enqueue_script('grassvalleypmg-script', get_template_directory_uri() . '/js/main.js', array('jquery', 'slick'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'grassvalleypmg_scripts');

// Register widget areas
function grassvalleypmg_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'grassvalleypmg'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'grassvalleypmg'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'grassvalleypmg'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add footer widgets here.', 'grassvalleypmg'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'grassvalleypmg_widgets_init');

// Add custom image sizes
add_image_size('hero-image', 1920, 1080, true);
add_image_size('blog-thumbnail', 800, 600, true);

// Add custom post type for Testimonials
function grassvalleypmg_register_post_types() {
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
    ));
}
add_action('init', 'grassvalleypmg_register_post_types');

// Add custom meta box for property details
function grassvalleypmg_add_meta_boxes() {
    add_meta_box(
        'property_details',
        'Property Details',
        'grassvalleypmg_property_details_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'grassvalleypmg_add_meta_boxes');

function grassvalleypmg_property_details_callback($post) {
    wp_nonce_field('grassvalleypmg_property_details', 'property_details_nonce');
    
    $property_type = get_post_meta($post->ID, '_property_type', true);
    $property_price = get_post_meta($post->ID, '_property_price', true);
    ?>
    <p>
        <label for="property_type">Property Type:</label>
        <input type="text" id="property_type" name="property_type" value="<?php echo esc_attr($property_type); ?>" />
    </p>
    <p>
        <label for="property_price">Price:</label>
        <input type="text" id="property_price" name="property_price" value="<?php echo esc_attr($property_price); ?>" />
    </p>
    <?php
}

/**
 * Add custom scheduling functionality for blog posts
 */
function gvpmg_enhance_blog_scheduling() {
    // Add custom column to posts list to show scheduling status
    add_filter('manage_posts_columns', 'gvpmg_add_schedule_column');
    add_action('manage_posts_custom_column', 'gvpmg_schedule_column_content', 10, 2);
    
    // Add custom admin page for scheduling calendar
    add_action('admin_menu', 'gvpmg_add_schedule_calendar_page');
}
add_action('init', 'gvpmg_enhance_blog_scheduling');

/**
 * Add schedule column to posts list
 */
function gvpmg_add_schedule_column($columns) {
    $new_columns = array();
    
    foreach ($columns as $key => $value) {
        if ($key === 'title') {
            $new_columns[$key] = $value;
            $new_columns['schedule_status'] = 'Schedule Status';
        } else {
            $new_columns[$key] = $value;
        }
    }
    
    return $new_columns;
}

/**
 * Display schedule status in custom column
 */
function gvpmg_schedule_column_content($column, $post_id) {
    if ($column === 'schedule_status') {
        $post_status = get_post_status($post_id);
        $post_date = get_the_date('Y-m-d H:i:s', $post_id);
        $current_date = current_time('Y-m-d H:i:s');
        
        if ($post_status === 'future') {
            $time_diff = strtotime($post_date) - strtotime($current_date);
            $days_until = floor($time_diff / (60 * 60 * 24));
            
            echo '<span style="color: #0073aa;">Scheduled: ' . get_the_date('M j, Y', $post_id) . ' (' . $days_until . ' days)</span>';
        } elseif ($post_status === 'publish') {
            echo '<span style="color: #46b450;">Published</span>';
        } elseif ($post_status === 'draft') {
            echo '<span style="color: #dc3232;">Draft</span>';
        }
    }
}

/**
 * Add schedule calendar page to admin menu
 */
function gvpmg_add_schedule_calendar_page() {
    add_menu_page(
        'Blog Schedule Calendar',
        'Blog Schedule',
        'edit_posts',
        'blog-schedule-calendar',
        'gvpmg_schedule_calendar_page',
        'dashicons-calendar-alt',
        30
    );
}

/**
 * Render schedule calendar page
 */
function gvpmg_schedule_calendar_page() {
    // Get all scheduled posts
    $scheduled_posts = get_posts(array(
        'post_status' => 'future',
        'post_type' => 'post',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC'
    ));
    
    // Get current month's posts
    $current_month = date('m');
    $current_year = date('Y');
    
    $month_posts = get_posts(array(
        'post_status' => array('publish', 'future'),
        'post_type' => 'post',
        'posts_per_page' => -1,
        'date_query' => array(
            array(
                'year' => $current_year,
                'month' => $current_month,
            ),
        ),
        'orderby' => 'date',
        'order' => 'ASC'
    ));
    
    // Group posts by date
    $posts_by_date = array();
    foreach ($month_posts as $post) {
        $post_date = get_the_date('Y-m-d', $post->ID);
        if (!isset($posts_by_date[$post_date])) {
            $posts_by_date[$post_date] = array();
        }
        $posts_by_date[$post_date][] = $post;
    }
    
    // Output calendar page
    ?>
    <div class="wrap">
        <h1>Blog Schedule Calendar</h1>
        
        <div class="schedule-calendar-container">
            <div class="schedule-calendar-header">
                <h2><?php echo date('F Y'); ?></h2>
            </div>
            
            <div class="schedule-calendar-grid">
                <?php
                // Calendar header
                $days = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
                foreach ($days as $day) {
                    echo '<div class="calendar-day-header">' . $day . '</div>';
                }
                
                // Get first day of month
                $first_day = date('w', strtotime("$current_year-$current_month-01"));
                
                // Add empty cells for days before first day of month
                for ($i = 0; $i < $first_day; $i++) {
                    echo '<div class="calendar-day empty"></div>';
                }
                
                // Get number of days in month
                $days_in_month = date('t', strtotime("$current_year-$current_month-01"));
                
                // Add days of month
                for ($day = 1; $day <= $days_in_month; $day++) {
                    $date = sprintf('%04d-%02d-%02d', $current_year, $current_month, $day);
                    $is_today = ($date === date('Y-m-d'));
                    
                    echo '<div class="calendar-day' . ($is_today ? ' today' : '') . '">';
                    echo '<div class="day-number">' . $day . '</div>';
                    
                    if (isset($posts_by_date[$date])) {
                        echo '<div class="day-posts">';
                        foreach ($posts_by_date[$date] as $post) {
                            $status = get_post_status($post->ID);
                            $status_class = ($status === 'future') ? 'scheduled' : 'published';
                            
                            echo '<div class="post-item ' . $status_class . '">';
                            echo '<a href="' . get_edit_post_link($post->ID) . '">' . $post->post_title . '</a>';
                            if ($status === 'future') {
                                echo ' <span class="post-time">' . get_the_date('g:i a', $post->ID) . '</span>';
                            }
                            echo '</div>';
                        }
                        echo '</div>';
                    }
                    
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        
        <div class="schedule-upcoming-posts">
            <h2>Upcoming Scheduled Posts</h2>
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($scheduled_posts)) : ?>
                        <tr>
                            <td colspan="4">No scheduled posts found.</td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($scheduled_posts as $post) : ?>
                            <tr>
                                <td><?php echo $post->post_title; ?></td>
                                <td><?php echo get_the_date('F j, Y', $post->ID); ?></td>
                                <td><?php echo get_the_date('g:i a', $post->ID); ?></td>
                                <td>
                                    <a href="<?php echo get_edit_post_link($post->ID); ?>" class="button button-small">Edit</a>
                                    <a href="<?php echo get_preview_post_link($post->ID); ?>" class="button button-small" target="_blank">Preview</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <style>
        .schedule-calendar-container {
            margin-top: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .schedule-calendar-header {
            padding: 15px;
            background: #f5f5f5;
            border-bottom: 1px solid #ddd;
        }
        
        .schedule-calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 1px;
            background: #ddd;
        }
        
        .calendar-day-header {
            background: #f5f5f5;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
        
        .calendar-day {
            background: #fff;
            min-height: 120px;
            padding: 5px;
        }
        
        .calendar-day.empty {
            background: #f9f9f9;
        }
        
        .calendar-day.today {
            background: #f0f7ff;
        }
        
        .day-number {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .day-posts {
            font-size: 12px;
        }
        
        .post-item {
            margin-bottom: 3px;
            padding: 2px 4px;
            border-radius: 3px;
        }
        
        .post-item.scheduled {
            background: #e6f3ff;
        }
        
        .post-item.published {
            background: #e6ffe6;
        }
        
        .post-time {
            color: #666;
            font-size: 11px;
        }
        
        .schedule-upcoming-posts {
            margin-top: 30px;
        }
    </style>
    <?php
}

add_filter('get_custom_logo', 'custom_get_custom_logo');

/**
 * Register custom page templates
 */
function grassvalleypmg_add_page_templates($templates) {
    $templates['page-templates/template-get-started.php'] = 'Get Started';
    return $templates;
}
add_filter('theme_page_templates', 'grassvalleypmg_add_page_templates'); 