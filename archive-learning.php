<?php
get_header();
global $wp_query;
?>

<main class="learning-archive-main-container">

    <h1>Learning Journey</h1>


    <?php if (have_posts()) : ?>

        <div class="learning-posts-flex">
            <h2>Recently Posted</h2>

            <?php while (have_posts()) : the_post(); ?>

                <?php
                $read_time = get_field('read_time');
                $tagline = get_field('tagline');
                $main_content = get_field('main_content');
                ?>

                <article class="learning-post">


                    <div class="thumbnail-container">
                        <?php if (has_post_thumbnail()) : ?>
                            <a class="learning-thumbnail" href="<?php echo esc_url(get_permalink()); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php endif; ?>
                    </div>


                    <div class="learning-posts-shade"></div>
                    <div class="learning-posts-meta-container">
                        <h2 class="post-title">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <?php echo esc_html(get_the_title()); ?>
                            </a>
                        </h2>

                        <p class="post-meta">
                            <?php echo esc_html(get_the_date()); ?>
                            •
                            <?php echo esc_html($read_time) ?> min read
                        </p>

                        <?php
                        if ($main_content) :
                        ?>
                            <p><?php echo wp_kses_post(wp_trim_words($main_content, 15, '...')); ?></p>
                        <?php endif; ?>

                        <?php if ($tagline) : ?>
                            <p class="post-tagline">
                                <?php echo esc_html($tagline) ?>
                            </p>
                        <?php endif; ?>

                        <a class="read-more"
                            href="<?php echo esc_url(get_permalink()); ?>">
                            Read More..
                        </a>
                    </div>

                </article>

                <?php if ($wp_query->current_post + 1 < $wp_query->post_count) : ?>
                    <hr />
                <?php endif; ?>

            <?php endwhile; ?>

            <?php
            //Pagination

            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => 'Prev',
                'next_text' => 'Next',
            ));
            ?>


        </div>



    <?php else : ?>
        <p>No Learning Post found.</p>
    <?php endif; ?>



</main>
<?php get_footer(); ?>