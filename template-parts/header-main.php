<header class="site-header">
    <div class="container">
        <!-- Logo -->
        <div class="site-logo">
            <?php the_custom_logo(); ?>
        </div>

        <!-- Navigation -->
        <nav class="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id' => 'main-menu',
                'container' => false,
                'menu_class' => 'menu',
            ))
            ?>
        </nav>


        <!-- Mobile menu toggle  -->
        <button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">
            ☰
        </button>
    </div>

</header>