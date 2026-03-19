<?php get_header(); ?>

<section class="projects-container">
    <div class="projects-intro">
        <h1>Projects</h1>
        <p>
            I'm a passionate web developer. I like how code interacts with the webpage
            and how every CSS detail can move a single pixel on the screen.
            Right now I'm diving deep into WordPress, so many of the projects here
            explore themes, templates, and custom functionality. Even this website
            is built with WordPress and PHP.
        </p>
    </div>

    <hr />

    <!-- display projects here -->
    <div class="project-list">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="project">
                    <!-- thumbnail image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="project-thumbnail">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- short description -->
                    <?php
                    $short_description = get_field('short_description');
                    if ($short_description) : ?>
                        <p><?php echo esc_html($short_description); ?></p>
                    <?php else: ?>
                        <p>No description available</p>
                    <?php endif; ?>

                    <!-- image gallery -->
                    <!-- <div class="project-gallery">

                        <?php
                        $image_1 = get_field('gallery_image_1');
                        $image_2 = get_field('gallery_image_2');
                        $image_3 = get_field('gallery_image_3');

                        // image array
                        $images = [$image_1, $image_2, $image_3];

                        foreach ($images as $image) {
                            if ($image) {
                                echo wp_get_attachment_image($image['ID']);
                            }
                        }
                        ?>

                    </div> -->
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No projects found.</p>
        <?php endif; ?>



    </div>
</section>
<?php get_footer(); ?>