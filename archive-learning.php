<?php
get_header();
global $wp_query;
$post_count = 0;
$total_post = $wp_query->post_count;
?>

<main class="learning-archive">

    <h1>Learning Posts Journey</h1>


    <?php if (have_posts()) : ?>
        <div class="learning-posts-flex">

            <?php while (have_posts()) : the_post(); ?>
                <?php $post_count++; ?>
                <article class="learning-post">
                    <h2>Recently Posted</h2>

                    <?php if (has_post_thumbnail()) : ?>
                        <a class="learning-thumbnail" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    <?php endif; ?>

                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <p class="post-meta">
                        <?php echo get_the_date(); ?>
                        •
                        <?php the_field('read_time'); ?>
                    </p>

                    <?php if (get_field('tagline')) : ?>
                        <p class="post-tagline">
                            <?php the_field('tagline'); ?>
                        </p>
                    <?php endif; ?>

                    <a class="read-more" href="<?php the_permalink(); ?>">Read More..</a>
                </article>
                <?php if ($post_count < $total_post) : ?>
                    <hr />
                <?php endif; ?>
            <?php endwhile; ?>

        </div>

        <?php
        //Pagination

        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => 'Prev',
            'next_text' => 'Next',
        ));
        ?>

    <?php else : ?>
        <p>No Learning Post found.</p>
    <?php endif; ?>



</main>
<?php get_footer(); ?>