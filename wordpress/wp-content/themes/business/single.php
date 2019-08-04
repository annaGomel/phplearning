<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package business
 */

get_header();
?>
<div class="single-business">
    <div class="container">
        <div class="row">
            <div class="box">
               <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-12">
                        <?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive img-border img-full')) ?>
                        <h2 class="text-center"><? the_title() ?>
                            <br>
                            <small><? the_time('F j,Y') ?></small>
                        </h2>
                            <? the_content() ?>
                    </div>
                     <? endwhile; ?>
                <? else:?>
            <? endif; ?>
            </div>
        </div>
    </div>
</div>



<?php

get_footer();
