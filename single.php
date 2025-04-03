<?php
/**
 * Template for displaying single blog posts
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?> itemscope itemtype="http://schema.org/BlogPosting">
    <div class="post-hero">
        <div class="container">
            <header class="post-header">
                <?php if (has_post_thumbnail()): ?>
                    <div class="post-thumbnail" itemprop="image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
                
                <h1 class="post-title" itemprop="headline"><?php the_title(); ?></h1>
                
                <div class="post-meta">
                    <span class="post-date" itemprop="datePublished"><?php the_date(); ?></span>
                    <span class="post-author" itemprop="author"><?php the_author(); ?></span>
                    <span class="post-categories"><?php the_category(', '); ?></span>
                </div>
            </header>
        </div>
    </div>

    <div class="post-content-wrapper">
        <div class="container">
            <div class="post-content" itemprop="articleBody">
                <?php the_content(); ?>
            </div>

            <footer class="post-footer">
                <div class="post-tags">
                    <?php the_tags('<span class="tag-label">Tags:</span> ', ', '); ?>
                </div>
                
                <div class="post-navigation">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    
                    <?php if ($prev_post): ?>
                        <div class="prev-post">
                            <span class="nav-label">Previous Post</span>
                            <a href="<?php echo get_permalink($prev_post); ?>"><?php echo $prev_post->post_title; ?></a>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($next_post): ?>
                        <div class="next-post">
                            <span class="nav-label">Next Post</span>
                            <a href="<?php echo get_permalink($next_post); ?>"><?php echo $next_post->post_title; ?></a>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (comments_open() || get_comments_number()): ?>
                    <div class="post-comments">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </footer>

            <aside class="related-posts">
                <h2>Related Posts</h2>
                <?php
                $categories = get_the_category();
                if ($categories) {
                    $category_ids = array();
                    foreach ($categories as $category) {
                        $category_ids[] = $category->term_id;
                    }
                    
                    $related_posts = new WP_Query(array(
                        'category__in' => $category_ids,
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 3,
                        'orderby' => 'rand'
                    ));
                    
                    if ($related_posts->have_posts()): ?>
                        <div class="related-posts-grid">
                            <?php while ($related_posts->have_posts()): $related_posts->the_post(); ?>
                                <article class="related-post">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>" class="related-post-thumbnail">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    <?php endif; ?>
                                    
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="related-post-excerpt"><?php the_excerpt(); ?></div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                        <?php wp_reset_postdata();
                    endif;
                }
                ?>
            </aside>
        </div>
    </div>
</article>

<?php get_footer(); ?> 