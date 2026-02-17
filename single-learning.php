<?php

/**
 * Template Name: Single Learning
 * Version: 1.0
 */

get_header(); ?>

<main class="learning_single">
    <h1><?php the_title(); ?></h1>

    <p class="tagline"><?php the_field('tagline'); ?></p>

    <p class="meta">
        <?php get_the_date(); ?>
        <?php the_field('read_time'); ?>
    </p>

    <section class="main-content">
        <?php the_field('main_content'); ?>
    </section>

    <section class="secondary-content">
        <?php the_field('secondary_content') ?>
    </section>
</main>

<?php get_footer(); ?>