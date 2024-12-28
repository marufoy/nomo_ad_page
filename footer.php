    <!-- フッター部分 -->
    <footer>
        <div class="site-footer">
            <div class="footer-menu">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer_menu', // フッターメニュー
                    'menu_class'      => 'footer-menu',
                ) );
                ?>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>