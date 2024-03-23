<?php get_header(); ?>
<div class="content"><?php get_the_content();?></div>
<?php
        $args = array(
            'post_type' => 'Horoscope', // Your custom post type
            'posts_per_page' => 1, // Display all posts
            'title' => 'Libra',
        );
        $products_query = new WP_Query($args);
        if ($products_query->have_posts()) {
            while ($products_query->have_posts()) {
                $products_query->the_post();
                // Display the product details
                ?>
                <div class="aries">
                <h2><?php echo get_the_title();?></h2>
                    <?php the_content(); ?>
                
                <div class="horoscope_title">
                    <div class="hero">
                       <?php
                       $horoscope_image = get_field('horoscope_image');
                       if ($horoscope_image) {
                       echo '<img class="hero_img" src="' . esc_url($horoscope_image['url']) . '" alt="' . esc_attr($horoscope_image['alt']) . '">';
                     }
                     ?>
                    </div>
                    <div class="author_date"> 
                    <h4><?php echo get_the_title();?></h4>
                    <h3><?php echo get_field('date');?></h3>
                    <h5><?php echo get_field('author');?></h5>
                    </div>

                    <div class="sections">
                        <h3> LOVE HOROSCOPE </h3> 
                        <h3> CAREER HOROSCOPE </h3> 
                        <h3> DAILY HOROSCOPE </h3>

                    </div>

                </div>
        
                </div>

                <div class="daily"> 
                <h2><?php echo get_field('title1');?></h2>
                <p><?php echo get_field('daily_horoscope');?></p>
                
                </div>

                <div class="love_main">
                <div class="love_text"> 
                <h2><?php echo get_field('title2');?></h2>
                <p><?php echo get_field('love_horoscope');?></p>
                </div>
                <div class="love_img">
                <?php
                       $love_image = get_field('love_img');
                       if ($love_image) {
                       echo '<img class="love_hero" src="' . esc_url($love_image['url']) . '" alt="' . esc_attr($love_image['alt']) . '">';
                     }
                     ?>
                </div>
                </div>

                <div class="quote">
                <h2><?php echo get_field('quote');?></h2>
                </div>

                <div class="love_main">
                <div class="love_text"> 
                <h2><?php echo get_field('title3');?></h2>
                <p><?php echo get_field('career_horoscope');?></p>
                </div>
                <div class="love_img">
                <?php
                       $love_image = get_field('career_img');
                       if ($love_image) {
                       echo '<img class="love_hero" src="' . esc_url($love_image['url']) . '" alt="' . esc_attr($love_image['alt']) . '">';
                     }
                     ?>
                </div>
                </div>




                <?php
            }
        }
        wp_reset_postdata();
        ?>

 <?php get_footer(); ?>