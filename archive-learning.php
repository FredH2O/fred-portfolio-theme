<?php
get_header();
global $wp_query;
?>

<main class="learning-archive-main-container">

    <div class="learning-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/layered-peaks.svg" alt="">
    </div>
    <div class="learning-bg-shade"></div>

    <div class="learning-archive-intro">
        <h1 class="half-underline">Learning Journey</h1>
        <p>This page documents my journey learning web development, WordPress, and PHP.
            Here I share what I build, the problems I solve, and the lessons I learn along the way.
        </p>
    </div>

    <div class="learning-content-container">

        <?php

        $learning_items = [
            ['icon' => '🧑‍💻', 'label' => 'WordPress Theme Development', 'pct' => 85],
            ['icon' => '🪝', 'label' => 'PHP & WordPress Hooks', 'pct' => 60],
            ['icon' => '📃', 'label' => 'Custom Post Types & ACF', 'pct' => 60],
            ['icon' => '🏪', 'label' => 'SEO & E-Commerce Optimization', 'pct' => 40],
        ];

        ?>
        <div class="learning-current">
            <h2>Currently Learning</h2>

            <?php foreach ($learning_items as $item) : ?>
                <div class="learning-item">

                    <span class="learning-item-icon"><?php echo $item['icon']; ?></span>
                    <span><?php echo esc_html($item['label']); ?></span>

                    <div class="progress-bar">
                        <div class="progress-fill" style="width: <?php echo $item['pct'] ?>%"></div>
                    </div>
                    <span class="progress-pct"><?php echo $item['pct'] ?>%</span>
                </div>
            <?php endforeach ?>

        </div>

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
                                <p class="post-short-description"><?php echo wp_kses_post(wp_trim_words($main_content, 15, '...')); ?></p>
                            <?php endif; ?>

                            <?php if ($tagline) : ?>
                                <p class="post-tagline">
                                    <?php echo esc_html($tagline) ?>
                                </p>
                            <?php endif; ?>

                            <a class="read-more"
                                href="<?php echo esc_url(get_permalink()); ?>">
                                Read More
                            </a>
                        </div>

                    </article>

                    <?php if ($wp_query->current_post + 1 < $wp_query->post_count) : ?>
                        <hr />
                    <?php endif; ?>

                <?php endwhile; ?>

                <div class="learning-pagination">
                    <?php
                    //Pagination

                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => 'Prev',
                        'next_text' => 'Next',
                    ));
                    ?>
                </div>

            </div>



        <?php else : ?>
            <p>No Learning Post found.</p>
        <?php endif; ?>
    </div>





</main>
<?php get_footer(); ?>