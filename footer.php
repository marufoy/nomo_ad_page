    <!-- フッター部分 -->
    <footer>
        <div class="site-footer">
            <div class="footer-container">

                <!-- フッターメニュー -->
                <div class="footer-menu">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_menu', // フッターメニュー
                        'menu_class'      => 'footer-menu',
                    ) );
                    ?>
                </div>

                <!-- ソーシャルリンク -->
                <div class="footer-social">
                    <a href="https://twitter.com/" target="_blank">Twitter</a>
                    <a href="https://facebook.com/" target="_blank">Facebook</a>
                    <a href="https://instagram.com/" target="_blank">Instagram</a>
                </div>
            </div>

            <!-- コピーライト -->
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>