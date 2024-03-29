        </section>
        <?php if ( !is_front_page() ) { get_sidebar(); } ?>
    </article>
    <footer class="bottom">
        <div class="wrapper<?php if ( is_front_page() ) { ?> skinny<?php } ?>">
            <p id="copyright" class="floatleft">&copy; <?php echo date('Y') ?> <?php echo bloginfo('name'); ?></p>
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'bottom-nav',
                'container'       => 'nav',
                'container_id'    => 'bottom-nav',
                'menu_class'      => 'menu',
                'menu_id'         => FALSE,
            ));
            ?>
            <p id="brianfryer" class="floatright">Hand-crafted with <i class="icon-heart"></i> in Austin, TX by <a href="http://brianfryer.com">Brian Fryer</a></p>
        </div>
    </footer>

<!-- BEGIN wp_footer() output -->
<?php wp_footer(); ?>
<!-- END wp_footer() output -->

</body>
</html>
