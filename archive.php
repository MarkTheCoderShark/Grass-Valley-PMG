<?php
/**
 * Template for displaying archive pages
 */

get_header(); ?>

<div class="blog-archive" itemscope itemtype="http://schema.org/Blog">
    <div class="archive-hero">
        <div class="container">
            <h1 class="archive-title">
                <?php
                if (is_category()) {
                    single_cat_title('Category: ');
                } elseif (is_tag()) {
                    single_tag_title('Tag: ');
                } elseif (is_author()) {
                    echo 'Author: ' . get_the_author();
                } elseif (is_date()) {
                    if (is_day()) {
                        echo 'Daily Archives: ' . get_the_date();
                    } elseif (is_month()) {
                        echo 'Monthly Archives: ' . get_the_date('F Y');
                    } elseif (is_year()) {
                        echo 'Yearly Archives: ' . get_the_date('Y');
                    }
                } else {
                    echo 'Property Management Insights';
                }
                ?>
            </h1>
            <?php if (!is_author() && !is_date()): ?>
                <div class="archive-description" itemprop="description">
                    <?php echo term_description(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="archive-content">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="posts-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?> itemscope itemtype="http://schema.org/BlogPosting">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail" itemprop="image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('blog-thumbnail'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="post-content">
                                <header class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" itemprop="headline"><?php the_title(); ?></a>
                                    </h2>
                                    
                                    <div class="entry-meta">
                                        <span class="posted-on" itemprop="datePublished">
                                            <?php echo esc_html(get_the_date()); ?>
                                        </span>
                                        <span class="byline" itemprop="author">
                                            <?php echo esc_html(get_the_author()); ?>
                                        </span>
                                    </div>
                                </header>
                                
                                <div class="entry-summary" itemprop="description">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="read-more" itemprop="url">Read More</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <?php the_posts_pagination(); ?>
                
            <?php else : ?>
                <p><?php esc_html_e('No posts found.', 'grassvalleypmg'); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <aside class="blog-sidebar">
        <div class="container">
            <div class="sidebar-content">
                <?php if (is_active_sidebar('blog-sidebar')): ?>
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>
    </aside>
</div>

<?php get_footer(); ?> 