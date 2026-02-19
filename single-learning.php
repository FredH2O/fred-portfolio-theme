<?php get_header();

?>

<main class="learning-single">

    <!-- thumbnail -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="learning-single-thumbnail">
            <?php echo the_post_thumbnail(); ?>
        </div>

    <?php endif; ?>


    <!-- title -->
    <h1><?php the_title(); ?></h1>

    <!-- tagline -->
    <p class="tagline"><?php the_field('tagline'); ?></p>

    <!-- date and read time -->
    <div class="learning-single-meta">
        <p><?php echo get_the_date(); ?></p>
        /
        <p><?php the_field('read_time'); ?> mins read</p>
    </div>

    <!-- main content -->
    <section class="main-content">
        <?php the_field('main_content'); ?>
    </section>

    <!-- tagline -->
    <div class="learning-single-tagline">
        <p><?php the_field('tag_line') ?></p>
    </div>

    <!-- gallery images -->
    <?php
    $has_images = false;
    // check for images
    for ($i = 1; $i <= 5; $i++) {
        if (get_field('image_' . $i)) {
            $has_images = true;
            break;
        }
    }

    // only show images if at least one exists
    if ($has_images) :
        echo '<div class="learning-single-gallery"';
        for ($i = 1; $i <= 5; $i++) {
            $image = get_field('image_' . $i);
            if ($image) {
                if (is_array($image) && isset($image['url'])) {
                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                } else {
                    echo '<img src="' . esc_url($image) . '" alt="Gallery Image">';
                }
            }
        }
        echo '</div>';
    endif;
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