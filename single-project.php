<?php get_header() ?>
<section class="single-project-outer-container">

    <div class="single-project-inner-container">
        <?php if (get_the_title()): ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php if (get_the_content()) : ?>
            <p><?php the_content(); ?></p>
        <?php endif; ?>

        <?php
        $images_array = array_filter([
            get_field('gallery_image_1'),
            get_field('gallery_image_2'),
            get_field('gallery_image_3'),
        ]);

        if ($images_array) : ?>
            <h2>Screenshots</h2>
            <div class="single-project-gallery-container">
                <?php foreach ($images_array as $image) : ?>
                    <a href="<?php echo esc_url($image['url']); ?>" data-gallery="project-gallery" class="glightbox">
                        <img
                            src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>">
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <h2>Functionality</h2>

        <h2>Challanges</h2>

        <h2>Call to Action</h2>
    </div>



</section>
<?php get_footer(); ?>