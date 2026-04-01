<?php get_header() ?>
<section class="single-project-main-container">

    <?php if (get_the_title()): ?>
        <h1><?php the_title(); ?></h1>
    <?php endif; ?>

    <?php if (get_the_content()) : ?>
        <p><?php the_content(); ?></p>
    <?php endif; ?>

    <?php
    $images_array = [
        get_field('gallery_image_1'),
        get_field('gallery_image_2'),
        get_field('gallery_image_3'),
    ];

    if ($images_array) :
        foreach ($images_array as $image) :
    ?>

            <img
                src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endforeach;
    endif; ?>
</section>
<?php get_footer(); ?>