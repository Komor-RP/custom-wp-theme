<?php get_header(); ?>


      <?php get_template_part( 'content', get_post_format() ); ?>




        <?php if( get_theme_mod( 'cd_button_display', 'show' ) == 'show' ) : ?>
    <a href="" class='button'>Come On In</a>
<?php endif ?>

        <div id='button-container'>
    <?php cd_show_main_button() ?>
</div>



<?php get_footer(); ?>
