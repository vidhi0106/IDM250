<?php get_header(); ?>
<h1 class="">
  <?php echo get_the_title(); ?>
</h1>

<main id="site-content" role="main">

<?php
    // Custom query to retrieve horoscope posts
    $horoscope_posts = new WP_Query(array(
        'post_type' => 'horoscope',
        'posts_per_page' => -1, // Retrieve all posts
    ));

    // Check if there are any horoscope posts
    if ($horoscope_posts->have_posts()) {
        while ($horoscope_posts->have_posts()) {
            $horoscope_posts->the_post();
            ?>
            <div class="horoscope-post">
                <h2><?php the_title(); ?></h2>
                <div class="horoscope-content">
                <?php
                $content = apply_filters('the_content', get_the_content());
                echo $content;
                ?>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata(); // Reset post data to prevent conflicts
    } else {
        echo '<p>No horoscope posts found</p>';
    }
    ?>
    
<div class="content"><?php get_the_content();?></div>
<p>This is a front-page.php template</p>
<?php get_footer(); ?>