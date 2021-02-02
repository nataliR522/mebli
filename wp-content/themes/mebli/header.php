<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">-->
    <meta name="theme-color" content="#e4a11b">
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Главная страница</title>
    <!-- Start Of Social Graph Protocol Meta Data -->
    <meta property="og:locale" content="en_US"/>
    <!-- <meta property="og:url" content="http://example.com/"/>-->
    <meta property="og:type" content="website"/>
    <!-- <meta property="og:title" content="Name Website"/>-->
    <!-- End Of Social Graph Protocol Meta Data -->
    <!--    <link rel='stylesheet' href='assets/vendors/swiper/swiper.css'>-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" class='header <?php if (is_page_template('pages/home.php')) echo "transparent"; ?>'>
    <div class='container'>
        <div class='header-content'>
            <div class='header-top'>
                <a href='/' class='logo'>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo-white.svg" alt="">
                    <img class="logo-home"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo-black.svg" alt="">
                </a>
                <div class='menu'>
                    <ul>
                        <li class='menu-item active'><a href='/'>Главная</a></li>
                        <li class='menu-item'><a href='/about-store'>Про магазин</a></li>
                        <li class='menu-item'><a href='/gallery'>Галерея</a></li>
                        <li class='menu-item'><a href='/catalog'>Каталог</a></li>
                        <!--                        <li class='menu-item'><a href='/products'>Товар</a></li>-->
                        <!--                        <li class='menu-item'><a href='/ordering'>Оформлення</a></li>-->
                    </ul>
                </div>
                <ul class='tel'>
                    <li>
                        <a href='tel:+(380)900-000-000'>+(380)900-000-000</a>
                    </li>
                    <li>
                        <a href='tel:+(380)900-000-000'>+(380)900-000-000</a>
                    </li>
                </ul>
                <div class='language'>
                    <label>
                        <select>
                            <option value='RU'>RU</option>
                            <option value='EN'>EN</option>
                        </select>
                    </label>
                </div>
                <div class='burger'>
                    <span></span>
                </div>
            </div>
            <?php if (is_page_template('pages/catalog.php')) { ?>
                <div class='header-drop-down'>
                    <ul class='drop-down-list'>
                        <li class='list-item'>
                            <span class="select-selected">Lorem ipsum 1</span>
                            <ul class='submenu'>
                                <li class='submenu-item'>Lorem ipsum 2</li>
                                <li class='submenu-item'>Lorem ipsum 3</li>
                                <li class='submenu-item'>Lorem ipsum 4</li>
                            </ul>
                        </li>
                        <li class='list-item'>
                            <span class="select-selected">Lorem ipsum</span>
                            <ul class='submenu'>
                                <li class='submenu-item'>Lorem ipsum</li>
                                <li class='submenu-item'>Lorem ipsum</li>
                                <li class='submenu-item'>Lorem ipsum</li>
                            </ul>
                        </li>
                        <li class='list-item'>
                            <span class="select-selected">Lorem ipsum</span>
                            <ul class='submenu'>
                                <li class='submenu-item'>Lorem ipsum</li>
                                <li class='submenu-item'>Lorem ipsum</li>
                                <li class='submenu-item'>Lorem ipsum</li>
                            </ul>
                        </li>
                        <li class='list-item'>
                            <span class="select-selected">Lorem ipsum</span>
                            <ul class='submenu'>
                                <li class='submenu-item'>Lorem ipsum</li>
                                <li class='submenu-item'>Lorem ipsum</li>
                                <li class='submenu-item'>Lorem ipsum</li>
                            </ul>
                        </li>
                        <li class='list-item'>
                            <span class="select-selected">Lorem ipsum</span>
                            <ul class='submenu'>
                                <li class='submenu-item'>Lorem ipsum</li>
                                <li class='submenu-item'>Lorem ipsum</li>
                                <li class='submenu-item'>Lorem ipsum</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</header>
<div class='call'>
    <a href='tel:+(380)900-000-000' class='call-icon'>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/call.svg" alt="">
    </a>
</div>
<main class='home <?php if (!is_page_template('pages/home.php')) echo "pt-header"; ?>'>
    <div class="zoom-popup d-none">
        <div class="zoom-popup-inner">
            <img class="zoom-image-js" src=''
                 alt=''>
            <span class="zoom-close">x</span>
        </div>
    </div>