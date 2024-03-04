<?php
get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        $args = array(
            'post_type' => 'product', // Your custom post type
            'posts_per_page' => -10, // Display all posts
        );
        $products_query = new WP_Query($args);
        if ($products_query->have_posts()) {
            while ($products_query->have_posts()) {
                $products_query->the_post();
                // Display the product details
                ?>
                <div class="product">
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                    <p><?php echo get_field('price'); ?></p>
                </div>
                <?php
            }
        }
        wp_reset_postdata();
        ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
