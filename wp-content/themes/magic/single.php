<?php get_header()?>

<?php get_sidebar()?>

<div id="left">
    <div id="leftcontainer">
    <?php while(have_posts()): the_post()?>
    <div id="posts">
    <h2><?php the_title()?></h2>
    <?php the_content();?>
    </div>
    <?php endwhile;?>
    
    <?php comments_template('', true); ?>
    </div>
</div>


<?php get_footer()?>
