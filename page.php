<?php get_header(); ?>

<main class="site-main">
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <?php if (get_field('page_subtitle')) : ?>
                <p class="page-subtitle"><?php echo get_field('page_subtitle'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?> 