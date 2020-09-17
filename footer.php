<footer>
    <?php
        $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'after' => '<span class="separator"> | </span>'
        );

        wp_nav_menu($args);
     ?>

     <div class="location">
     <p>2754 Ocean Avenue Pallo Alto, CA 90481</p>
     <p>Phone: 777-777-7777</p>
     </div>
     <p class="copyright">All Rights Reserved <?php echo date('Y'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>