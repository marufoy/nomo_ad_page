<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- スタイルシートを読み込む -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- ヘッダー部分 -->
    <header>
    <div class="site-header">
        <!-- ロゴエリア -->
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                <!-- ロゴ画像 -->
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/nomo-header-logo.jpg'); ?>" 
                     alt="わいあい広告のロゴ" 
                     class="logo-image">
                <!-- テキストロゴ -->
                <div class="logo-text">
                    <h1 class="main-logo-title">わいあい広告</h1>
                    <h2 class="sub-logo-title">行きつけのお得をもっと身近に！</h2>
                </div>
            </a>
        </div>
        <!-- 掲載希望ボタン -->
        <a class="posting-button" href="<?php echo esc_url(home_url('/contact')); ?>">
            <span>掲載希望の方はこちら →</span>
        </a>
    </div>
</header>