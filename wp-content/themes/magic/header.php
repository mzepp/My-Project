<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php bloginfo('title')?></title>
        
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
        
        <?php wp_head()?>
        
        <header>
            <h1><a href="<?php echo home_url('/')?>"><?php bloginfo('name')?></a></h1>
        </header>
    </head>
    
    <nav>
        <?php wp_nav_menu();?>
    </nav>

    <div id="container">
