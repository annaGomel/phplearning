<?php
/**
 * Created by PhpStorm.
 * User: ANNA
 * Date: 03.07.2019
 * Time: 22:30
 */
 get_header()
?>
<div class="business-front-page">
    <?php if (have_posts()): while (have_posts()): the_post();?>
        <?php the_content() ?>
    <!-- post navigation -->
    <?php endwhile;?>

    <?php else: ?>
    <!-- post navigation -->

     <?php endif; ?>

</div>
<?php get_footer()?>
