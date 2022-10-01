<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); 
     $search = get_field('search');
    ?>
</head>
<body>
    <header>
        <div class="header">
            <div class="nav-header">
                <div class="container">
                    <div class="container-header">
                        <div class="form-search">
                            <form class="search" role="search" method="get" action="<?php echo bloginfo( 'url' ); ?>">
                                <input type="search" name="s" placeholder="<?php _e('Search anything ...') ?>" 
                                value="<?php the_search_query(); ?>" 
                                id="<?php esc_attr(uniqid('search-from-')); ?>" />
                            </form>
                        </div>
                        <div class="menu-header">
                            <div class="toggle">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                            <div class="contact-header">
                                <?php contact_header('contact-header'); ?>
                                <div class="icon-search">
                                    <img src="<?php echo $search['url']; ?>" alt="">
                                </div>
                            </div>  
                        </div>
                        <div class="nav-menu">
                            <?php header_menu('header-menu'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>