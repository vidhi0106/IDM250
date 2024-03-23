<?php
get_header(); ?>

<div class="horoscope_content"><?php get_the_content();?>
<h2> <?php echo get_the_title(); ?> </h2>

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
                    <?php the_content(); ?>
                    <h4><?php echo get_field('product_name'); ?></h4>
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
