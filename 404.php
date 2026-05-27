<?php get_header(); ?>

<section class="error-404">

    <div class="error-404__container">

        <img
            class="error-404__image"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/404-image.svg"
            alt="Page not found illustration">

        <h1 class="error-404__title">Page not found</h1>

        <p class="error-404__text">
            The page you’re looking for doesn’t exist or has been moved.
        </p>

        <a class="error-404__button" href="<?php echo home_url(); ?>">
            Return home
        </a>

    </div>

</section>

<?php get_footer(); ?>