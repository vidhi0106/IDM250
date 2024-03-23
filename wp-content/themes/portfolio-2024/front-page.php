<?php get_header(); ?>

<main id="site-content" role="main">



<div>
<?php
        $args = array(
            'post_type' => 'home', // Your custom post type
            'posts_per_page' => 1, // Display all posts
            
        );
        $products_query = new WP_Query($args);
        if ($products_query->have_posts()) {
            while ($products_query->have_posts()) {
                $products_query->the_post();
                // Display the product details
                ?>
                <div class="home">
                <?php the_content(); ?>
                <?php
                       $background_image = get_field('home_hero');
                       if ($background_image) {
                       echo '<img class="hero_home" src="' . esc_url($background_image['url']) . '" alt="' . esc_attr($background_image['alt']) . '">';
                     }
                     ?>
        
                </div>
                <?php
            }
        }
        wp_reset_postdata();
        ?>
</div>
<div class="front_page"><?php echo get_the_content();?></div>
<?php
        $args = array(
            'post_type' => 'home', // Your custom post type
            'posts_per_page' => 1, // Display all posts
            
        );
        $products_query = new WP_Query($args);
        if ($products_query->have_posts()) {
            while ($products_query->have_posts()) {
                $products_query->the_post();
                // Display the product details
                ?>
                <div class="home">
                <?php the_content(); ?>
                <?php $horoscope_url = get_permalink(11); ?>
                <?php $shop_url = get_permalink(15); ?>
                <div class="button"> 
                <div class="padding">
                <button class="horoscope_button"><a href="<?php echo esc_url($horoscope_url); ?>" class="button-link"><?php echo get_field('horoscope');?></a></button>
                </div>
                <div class="padding">
                <button class="shop_button"><a href="<?php echo esc_url($shop_url); ?>'" class="button-link"><?php echo get_field('shop');?></a></button>
                </div>

                </div>
                </div>

                <div class="half_logo">
                <?php
                       $logo_image = get_field('logo');
                       if ($logo_image) {
                       echo '<img class="logo_home" src="' . esc_url($logo_image['url']) . '" alt="' . esc_attr($logo_image['alt']) . '">';
                     }
                     ?>

                </div>
                <?php
            }
        }
        wp_reset_postdata();
        ?>


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