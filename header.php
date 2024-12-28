<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    
    <!-- スタイルシートを読み込む -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- ヘッダー部分 -->
    <header>
        <div class="site-header">
            <!-- <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Site Logo">
                </a>
            </div> -->
            <nav>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main_menu', // ここで設定するメニュー
                    'menu_class'      => 'main-menu', // メニューのクラス
                ) );
                ?>
            </nav>
        </div>
    </header>