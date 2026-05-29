<?php get_header(); ?>

<section class="project-section">

    <div class="project-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blob-projects.svg" alt="Project's Background">
    </div>

    <div class="project-shade"></div>


    <div class="projects-container">



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

        <div class="project-list-wrapper">
            <div class="project-list">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="project">
                            <!-- thumbnail image -->
                            <a href="<?php the_permalink() ?>" class="project-link">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="project-thumbnail">
                                        <?php the_post_thumbnail('full', [
                                            'loading' => 'lazy',
                                            'decoding' => 'async',
                                        ]); ?>
                                    </div>
                                <?php endif; ?>

                                <!-- project title -->
                                <?php $title = get_the_title(); ?>

                                <?php if ($title) : ?>
                                    <h2> <?php echo esc_html($title); ?> </h2>
                                <?php else : ?>
                                    <h2>No title</h2>
                                <?php endif; ?>

                                <!-- short description -->
                                <div class="project-description">
                                    <?php
                                    $short_description = get_field('short_description');
                                    if ($short_description) : ?>
                                        <p><?php echo esc_html($short_description); ?></p>
                                    <?php else: ?>
                                        <p>No description available</p>
                                    <?php endif; ?>
                                </div>

                                <!-- button for the whole post -->


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
                            </a>
                        </div>

                    <?php endwhile; ?>

                <?php else : ?>
                    <p>No projects found.</p>
                <?php endif; ?>

            </div>
        </div>

        <nav class="pagination-projects">

            <?php global $wp_query; ?>

            <?php echo paginate_links([
                'total' => $wp_query->max_num_pages,
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
                'before_page_number' => '',
                'after_page_number' => '',
            ]); ?>

        </nav>

    </div>
</section>



<?php get_footer(); ?>