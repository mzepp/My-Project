<?php get_header()?>
<?php get_sidebar()?>

<div id="left">
    <div id="leftcontainer">
    <?php the_post()?>
    <h2><?php the_title()?></h2>
    <?php the_content();?>
    </div>
</div>


<?php get_footer()?>
