<?php get_header(); ?>



<?php function display_horoscopes_on_page()
{
    $args = array(
        'post_type' => 'horoscope', // Your custom post type
        'posts_per_page' => -1, // Display all posts
    );
    $horoscopes_query = new WP_Query($args);
    if ($horoscopes_query->have_posts()) {
        echo '<ul>';
        while ($horoscopes_query->have_posts()) {
            $horoscopes_query->the_post();
            echo '<li><a href="' . get_permalink(124) . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
        wp_reset_postdata();
    } else {
        echo 'No horoscopes found.';
    }
} ?>




<?php get_footer(); ?>