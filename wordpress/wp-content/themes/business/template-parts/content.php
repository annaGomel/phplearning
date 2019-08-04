<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business
 */

?>
<div class="col-lg-12 text-center">
    <?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive img-border img-full')) ?>
    <h2><? the_title() ?>
        <br>
        <small><? the_time('F j,Y') ?></small>
    </h2>
    <? the_content('') ?> <a href="<? the_permalink() ?>"
                           class="btn btn-default btn-lg"><? esc_html_e('read more', 'business') ?></a>
    <hr>
</div>


