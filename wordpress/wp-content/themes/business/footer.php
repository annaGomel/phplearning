<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy;  Site  By Anna <?php echo  date('Y') ?></p>
            </div>
        </div>
    </div>
</footer>

<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>


<?php wp_footer(); ?>

</body>
</html>
