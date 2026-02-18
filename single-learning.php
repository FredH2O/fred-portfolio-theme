<?php get_header();

?>

<main class="learning_single">

    <!-- thumbnail -->
    <?php if (has_post_thumbnail()) : ?>
        <?php echo the_post_thumbnail(); ?>
    <?php endif; ?>

    <!-- title -->
    <h1><?php the_title(); ?></h1>

    <!-- tagline -->
    <p class="tagline"><?php the_field('tagline'); ?></p>

    <!-- date and read time -->
    <p class="meta">
        <?php echo get_the_date(); ?>
        <?php the_field('read_time'); ?>
    </p>

    <!-- main content -->
    <section class="main-content">
        <?php the_field('main_content'); ?>
    </section>

    <!-- gallery images -->
    <?php
    $has_images = false;

    for ($i = 1; $i <= 5; $i++) {
        if (get_field('image_' . $i)) {
            $has_images = true;
            break;
        }
    }

    if ($has_images) {
        for ($i = 1; $i <= 5; $i++) {
            echo get_field('image_' . $i);
        }
    }

    ?>


    <!-- secondary content? -->
    <section class="secondary-content">
        <?php the_field('secondary_content') ?>
    </section>

    <!-- reflection/learning notes -->
    <?php
    // loop through 1-5
    $has_reflection = false;

    // checking if reflection exists
    for ($i = 1; $i <= 5; $i++) {
        if (get_field('reflection_' . $i)) {
            $has_reflection = true;
            break;
        }
    }

    // only show heading and content if 1 reflection exists
    if ($has_reflection) :
        echo '<h3>Reflection</h3>';

        for ($i = 1; $i <= 5; $i++) {
            $reflection = get_field('reflection_' . $i);

            if ($reflection) {
                echo '<section class="reflection">' . wp_kses_post($reflection) . '</section>';
            }
        }
    endif;
    ?>


    <!-- tech stack/icons? -->
</main>

<?php get_footer(); ?>