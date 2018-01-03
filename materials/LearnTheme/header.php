<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="row top-container">
                <div class="container">
                    <div class="navbar-header">
                        <div class="top-phone">
                            <?php
                            $args =[
                                'theme_location'    => 'top_phone',
                                'menu_class'    => 'nav navbar-nav',
                            ];
                            ?>
                            <?php wp_nav_menu( $args ); ?>
                        </div>
                        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="form-control" />
                            </div>
                        </form>
                        <div class="top-account">
                            <?php
                            $args =[
                                'theme_location'    => 'top_account',
                                'menu_class'    => 'nav navbar-nav',
                            ];
                            ?>
                            <?php wp_nav_menu( $args ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    Menu
                </button>
            </div>
            <div class="logo container">
                <div class="text-center logo-img"><?php the_custom_logo(); ?></div>
                <h3 class="text-center bold"><?php echo get_option('blogdescription');?></h3>
            </div>
            <div class="row main-menu">
                <div class="container">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        $args =[
                            'theme_location'    => 'primary',
                            'menu_class'    => 'nav navbar-nav',
                            /**
                             * @TODO add custom Walker
                             */
                        ];
                        ?>
                        <?php wp_nav_menu( $args ); ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>