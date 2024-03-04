<?php get_header(); ?>



<?php
    if (is_page('shop')) {
        get_template_part('components/single-product');
    }elseif (is_page('horoscope')) {
        get_template_part('components/horoscope');
    } else {
       
    }
    ?>




<?php get_footer(); ?>