<?php get_header() ?>
<section class="single-project-outer-container">

    <div class="single-project-inner-container">
        <?php if (get_the_title()): ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php if (get_the_content()) : ?>
            <?php the_content(); ?>
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

        <div class="project-functionality-challenges">
            <h2>Functionality</h2>
            <?php
            $functionality = get_field('functionality');

            if ($functionality) : ?>
                <?php echo esc_html($functionality); ?>
            <?php endif; ?>

            <h2>Challenges</h2>
            <?php
            $challenges = get_field('challenges');

            if ($challenges) : ?>
                <?php echo esc_html($challenges); ?>
            <?php endif; ?>
        </div>

        <div class="project-call-to-action">
            <?php

            $link = get_field('page_link');

            if ($link) : ?>

                <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
                    <?php echo esc_html($link['title']); ?>
                </a>

            <?php endif; ?>
        </div>

    </div>

    <div>
        <?php
        $next_post = get_next_post();
        $prev_post = get_previous_post();
        ?>

        <div class="single-project-prev-next-container">
            <?php if ($prev_post): ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>">
                    ← Previous Post
                </a>
            <?php endif; ?>

            <?php if ($next_post): ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>">
                    Next Post →
                </a>
            <?php endif; ?>
        </div>
    </div>

</section>
<?php get_footer(); ?>