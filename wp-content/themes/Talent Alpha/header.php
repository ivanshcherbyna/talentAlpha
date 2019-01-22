<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <?php wp_head(); ?>
    <?php global $mytheme, $post;

    ?>
</head>
<body <?php body_class(); ?>>


<header class='wrapper'>
    <a href="http://talent-alpha.com/"><img class='header-logo' src="<?php echo get_template_directory_uri().'/inc/urich/img/logo.svg'; ?>" alt="#"></a>
    <div class='header-menu'>
        <?php if (!empty($mytheme['menu-repeater-items'])){ ?>
            <ul class='header-menu-list'>
                <?php foreach ($mytheme['menu-repeater-items'] as $menuItem){ ?>
                    <li class='header-menu-list-item'><a class='header-menu-list-item-link' href="<?php echo $menuItem['menu-link']; ?>"><?php echo $menuItem['menu-title']; ?></a></li>
                <?php } ?>
            </ul>
        <?php } ?>
        
        <a href="<?php echo $mytheme['menu-content-button'] ;?>" class="content-button">Schedule a call</a>
    </div>
    <div id="burger">
        <span class=burger-menu></span>
        <span class=burger-menu></span>
        <span class=burger-menu></span>
    </div>
</header>



