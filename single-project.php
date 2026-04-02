<?php get_header() ?>
<section class="single-project-outer-container">

    <div class="single-project-inner-container">
        <?php if (get_the_title()): ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php if (get_the_content()) : ?>
            <p><?php the_content(); ?></p>
        <?php endif; ?>
        <div class="single-project-gallery-container">
            <?php
            $images_array = [
                get_field('gallery_image_1'),
                get_field('gallery_image_2'),
                get_field('gallery_image_3'),
            ];

            foreach ($images_array as $image) :
                if ($image) :
            ?>
                    <a href="<?php echo esc_url($image['url']); ?>" class="glightbox">
                        <img
                            src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>">
                    </a>
            <?php
                endif;
            endforeach;
            ?>
        </div>

    </div>


</section>
<?php get_footer(); ?>