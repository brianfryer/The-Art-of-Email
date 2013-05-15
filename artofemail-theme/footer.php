    </section>
    <footer id="footer">
        <div class="wrapper">
            <p class="copyright floatleft">&copy; <?php echo date('Y') . ' ' . bloginfo('name'); ?></p>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'bottom-nav',
                'container'      => 'nav floatleft',
                'container_id'   => 'bottom',
                'menu_class'     => 'menu',
                'menu_id'        => FALSE,
            ));
            ?>
            <p id="brianfryer">Hand-crafted with <i class="icon-heart"></i> in Austin, TX by <a href="http://brianfryer.com">Brian Fryer</a></p>
        </div>
    </footer>

<!-- BEGIN wp_footer() output -->
<?php wp_footer(); ?>
<!-- END wp_footer() output -->

</body>
</html>
