<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Portfolio de Seda Karadeniz web developer et web designer, etudiante a la Haute Ecole de la Province de Liege">
    <meta name="author" content="Seda Karadeniz">
    <title>

        <?php if (is_front_page())
        {
            echo 'Accueil - Seda Karadeniz porfolio';
        }
        wp_title(''); echo ' - Seda Karadeniz portfolio';?>

    </title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>" />
    <script type="text/javascript" src="<?= dw_mix('js/script.js'); ?>"></script>

</head>
<body>
<header class="header">
    <h1 class="header__title hidden" role="heading" aria-level="1" ><?= get_bloginfo('name'); ?></h1>
    <p class="header__tagline hidden"><?= get_bloginfo('description'); ?></p>
    <div class="logo" itemscope itemtype="http://schema.org/Brand">
        <a href="/projet-portfolio" itemprop="logo">
            <!--todo changer le lien-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="88.028" height="32.957" viewBox="0 0 88.028 32.957">
                <defs>
                    <radialGradient id="radial-gradient" cx="0.366" cy="0.5" r="0.786" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#ffafbd"/>
                        <stop offset="1" stop-color="#fff"/>
                    </radialGradient>
                </defs>
                <g id="logoSK" transform="translate(-13 75.42)">
                    <path id="Tracé_12" data-name="Tracé 12" d="M481.51,465.4" transform="translate(-380.482 -540.82)" fill="none"/>
                    <path id="Tracé_13" data-name="Tracé 13" d="M296.16,542.241h4.561l.021,12.63h.157c.943-1.014,1.886-1.949,2.775-2.8l10.789-9.848h5.664l-12.78,11.133L321.16,568.4h-5.4L304.1,555.552l-3.35,2.89.015,9.987H296.2Z" transform="translate(-283.16 -610.892)" fill="url(#radial-gradient)"/>
                    <path id="Tracé_14" data-name="Tracé 14" d="M317.11,562.245a11.121,11.121,0,0,0,5.724,1.207c3.2-.219,4.964-2.04,4.8-4.492-.154-2.274-1.537-3.483-4.9-4.521-4.058-1.14-6.647-3.029-6.879-6.453-.256-3.789,2.687-6.812,7.406-7.133a11.082,11.082,0,0,1,5.447.828l-.693,2.623a9.643,9.643,0,0,0-4.687-.839c-3.313.224-4.44,2.294-4.326,3.952.151,2.271,1.706,3.288,5.141,4.358,4.216,1.309,6.437,3.151,6.679,6.719.256,3.751-2.3,7.185-8.026,7.578a12.569,12.569,0,0,1-6.3-1.128Z" transform="translate(-295.639 -609.807)" fill="url(#radial-gradient)"/>
                </g>
            </svg>
        </a>
    </div>

    <nav class="header__nav nav" role="navigation">
        <h2 class="nav__title hidden" role="heading" aria-level="2" >Navigation principale</h2>
        <div id="menuToggle" class="nav__toggle">

            <input type="checkbox" />
            <span></span>
            <span></span>
            <ul class="nav__container" id="menu">
                <?php foreach(dw_get_menu_items('primary') as $link): ?>
                    <li class="<?= $link->getBemClasses('nav__item'); ?>">
                        <a href="<?= $link->url; ?>" class="nav__link"><?= $link->label; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </nav>


</header>