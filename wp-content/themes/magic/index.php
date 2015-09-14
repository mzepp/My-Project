<?php get_header()?>

<?php get_sidebar()?>

<div id="left">
    <div id="leftcontainer">
    <?php while(have_posts()): the_post()?>
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
    <?php the_content(__('Continue Reading'));?>
    <?php endwhile;?>
    </div>
</div>

<?php get_footer()?>
