<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script>
        if (localStorage.getItem("theme") === "dark") {
            document.documentElement.classList.add("dark-mode");
        }
    </script>
</head>

<body <?php body_class(); ?>>


    <?php get_template_part('template-parts/header', 'main');
