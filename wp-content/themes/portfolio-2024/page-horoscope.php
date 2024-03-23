
<?php get_header(); ?>

<div class="horoscope_content"><?php get_the_content();?>
<h2> <?php echo get_the_title(); ?> </h2>
<p> <?php echo get_the_content(); ?> </p>

<?php
        $args = array(
            'post_type' => 'zodiac', // Your custom post type
            'posts_per_page' => -12, // Display all posts
        );
        $products_query = new WP_Query($args);
        if ($products_query->have_posts()) {
            while ($products_query->have_posts()) {
                $products_query->the_post();
                // Display the product details
                ?>
                <div class="zodia">
                    <?php the_content(); ?>
                    <div class="zodiac">
    <?php the_content(); ?>
    <?php
    $aries_image = get_field('aries');
    if ($aries_image) {
        $aries_url = get_permalink('124'); 
        echo '<a href="' . esc_url($aries_url) . '"><img src="' . esc_url($aries_image['url']) . '" alt="' . esc_attr($aries_image['alt']) . '"></a>';
    }
    ?>
    <?php
    $capricorn_image = get_field('capricorn');
    if ($capricorn_image) {
        $capricorn_url = get_permalink('137'); 
        echo '<a href="' . esc_url($capricorn_url) . '"><img src="' . esc_url($capricorn_image['url']) . '" alt="' . esc_attr($capricorn_image['alt']) . '"></a>';
    }
    ?>
    <?php
    $cancer_image = get_field('cancer');
    if ($cancer_image) {
        $cancer_url = get_permalink('140'); 
        echo '<a href="' . esc_url($cancer_url) . '"><img src="' . esc_url($cancer_image['url']) . '" alt="' . esc_attr($cancer_image['alt']) . '"></a>';
    }
    ?>
      <?php
    $libra_image = get_field('libra');
    if ($libra_image) {
        $libra_url = get_permalink('142'); 
        echo '<a href="' . esc_url($libra_url) . '"><img src="' . esc_url($libra_image['url']) . '" alt="' . esc_attr($libra_image['alt']) . '"></a>';
    }
    ?>
    <?php
    $gemini_image = get_field('gemini');
    if ($gemini_image) {
        $gemini_url = get_permalink('144'); 
        echo '<a href="' . esc_url($gemini_url) . '"><img src="' . esc_url($gemini_image['url']) . '" alt="' . esc_attr($gemini_image['alt']) . '"></a>';
    }
    ?>
    <?php
    $scorpio_image = get_field('scorpio');
    if ($scorpio_image) {
        $scorpio_url = get_permalink('154'); 
        echo '<a href="' . esc_url($scorpio_url) . '"><img src="' . esc_url($scorpio_image['url']) . '" alt="' . esc_attr($scorpio_image['alt']) . '"></a>';
    }
    ?>
    <?php
    $saggitarius_image = get_field('saggitarius');
    if ($saggitarius_image) {
        $saggitarius_url = get_permalink('156'); 
        echo '<a href="' . esc_url($saggitarius_url) . '"><img src="' . esc_url($saggitarius_image['url']) . '" alt="' . esc_attr($saggitarius_image['alt']) . '"></a>';
    }
    ?>
    <?php
    $aquarius_image = get_field('aquarius');
    if ($aquarius_image) {
        $aquarius_url = get_permalink('152'); 
        echo '<a href="' . esc_url($aquarius_url) . '"><img src="' . esc_url($aquarius_image['url']) . '" alt="' . esc_attr($aquarius_image['alt']) . '"></a>';
    }
    ?>
     <?php
    $pisces_image = get_field('pisces');
    if ($pisces_image) {
        $pisces_url = get_permalink('150'); 
        echo '<a href="' . esc_url($pisces_url) . '"><img src="' . esc_url($pisces_image['url']) . '" alt="' . esc_attr($pisces_image['alt']) . '"></a>';
    }
    ?>
    <?php
    $taurus_image = get_field('taurus');
    if ($taurus_image) {
        $taurus_url = get_permalink('160'); 
        echo '<a href="' . esc_url($taurus_url) . '"><img src="' . esc_url($taurus_image['url']) . '" alt="' . esc_attr($taurus_image['alt']) . '"></a>';
    }
    ?>
     <?php
    $leo_image = get_field('leo');
    if ($leo_image) {
        $leo_url = get_permalink('146'); 
        echo '<a href="' . esc_url($leo_url) . '"><img src="' . esc_url($leo_image['url']) . '" alt="' . esc_attr($leo_image['alt']) . '"></a>';
    }
    ?>
      <?php
    $virgo_image = get_field('virgo');
    if ($virgo_image) {
        $virgo_url = get_permalink('148'); 
        echo '<a href="' . esc_url($virgo_url) . '"><img src="' . esc_url($virgo_image['url']) . '" alt="' . esc_attr($virgo_image['alt']) . '"></a>';
    }
    ?>



    
    
</div>
                    
                </div>
                <?php
            }
        }
        wp_reset_postdata();
        ?>


                
    <!-- Repeat the above for each zodiac sign -->
</div>

</div>

                   

<?php
        $args = array(
            'post_type' => 'signup', // Your custom post type
            'posts_per_page' => 1, // Display all posts
            
        );
        $products_query = new WP_Query($args);
        if ($products_query->have_posts()) {
            while ($products_query->have_posts()) {
                $products_query->the_post();
                // Display the product details
                ?>
                <div class="signup_label">
                <?php the_content(); ?>
                <h2><?php echo get_field('label');?></h2>
                </div>
                
                <div class="signup">
                <div class="input">
                    <div class="email">
                    <input type="email" id="email" name="email" placeholder="Enter email address" value="<?php echo esc_attr(get_field('email')); ?>" required>
                    </div>
                    <div class="submit">
                    <button type="submit"><?php echo get_field('submit'); ?></button>
                    </div>
                </div>

            </div>
            
                <?php
            }
        }
        wp_reset_postdata();
        ?>





    <?php get_footer(); ?>