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
    <?php if(is_page_template('contact.php')):?>
    <section class="contacts" style="background-color:<?= $mytheme['contact-background']?>">
        <div class="wrapper_head">

            <header class="header-contact wrapper">
                <nav class="header-nav">
                    <div class="header-list-item">
                        <a href="/" >
                            <img class="header-list-item-logo" src="<?php echo $mytheme['logo-img']['url'];?>" alt="logo site">
                            <img class="header-list-item-logo_contact" src="<?php echo $mytheme['adaptive-logo-img']['url'];?>" alt="logo site">
                        </a>
                    </div>
                    <!-- nav -->
                    <?php lwp_nav(); ?>
                    <!-- /nav -->
                    <div id="burger">
                        <span class="burger-menu menu-contacts"></span>
                    </div>
                </nav>

            </header>
        </div>
    <?php else:?>
	<!-- wrapper -->
        <div class="wrapper_head">

            <header class="wrapper">
                <nav class="header-nav">
                    <div class="header-list-item">
                        <a href="/" ><img src="<?php echo $mytheme['logo-img']['url'];?>" alt="logo site"></a>
                    </div>
                    <!-- nav -->
                    <?php lwp_nav(); ?>
                    <!-- /nav -->
                    <div id="burger">
                        <span class=burger-menu></span>
                    </div>
                </nav>

            </header>
        </div>
     <?endif;?>


