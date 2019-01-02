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
<!--                <img class='header-logo' src="--><?// $mytheme['logo-header-img']['url']; ?><!--" alt="#">-->
                <img class='header-logo' src="<?= get_template_directory_uri().'/inc/urich/img/logo.svg' ?>" alt="#">
                <div class='header-menu'>
                    <? if (!empty($mytheme['menu-repeater-items'])): ?>
                    <ul class='header-menu-list'>
                        <? foreach ($mytheme['menu-repeater-items'] as $menuItem): ?>
                        <li class='header-menu-list-item'><a class='header-menu-list-item-link' href="<?= $menuItem['menu-link'] ?>"><?= $menuItem['menu-title'] ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                    <? endif; ?>
                    <a href="<?= $mytheme['menu-content-button'] ;?>" class="content-button">Schedule a call</a>
                </div>
                <div id="burger">
                    <span class=burger-menu></span>
                    <span class=burger-menu></span>
                    <span class=burger-menu></span>
                </div>
            </header>



