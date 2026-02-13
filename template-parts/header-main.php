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
            <button id="lightbulb-toggle">
                <svg class="lucide-lightbulb active" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb-icon lucide-lightbulb">
                    <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                    <path d="M9 18h6" />
                    <path d="M10 22h4" />
                </svg>
                <svg class="lucide-lightbulb-off" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb-off-icon lucide-lightbulb-off">
                    <path d="M16.8 11.2c.8-.9 1.2-2 1.2-3.2a6 6 0 0 0-9.3-5" />
                    <path d="m2 2 20 20" />
                    <path d="M6.3 6.3a4.67 4.67 0 0 0 1.2 5.2c.7.7 1.3 1.5 1.5 2.5" />
                    <path d="M9 18h6" />
                    <path d="M10 22h4" />
                </svg>
            </button>
        </nav>


        <!-- Mobile menu toggle  -->
        <button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">
            ☰
        </button>
    </div>

</header>