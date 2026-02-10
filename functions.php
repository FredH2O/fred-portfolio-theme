<?php

function fred_portfolio_menus()
{
    register_nav_menu('primary', __('Primary Menu', 'fred-portfolio'));
}
add_action('after_setup_theme', 'fred_portfolio_menus');
