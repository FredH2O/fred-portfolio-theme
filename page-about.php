<?php
get_header();
?>

<main class="about-page">

    <!-- Hero Section -->
    <div class="about-page-container">
        <section class="about-intro">
            <div class="about-image-container">
                <?php if (has_post_thumbnail()) : ?>
                    <?php echo the_post_thumbnail('full') ?>
                <?php endif; ?>
            </div>
            <div class="dummy-div"></div>
            <div class="about-me">
                <h1>This is <span style="color: var(--color-accent); font-style: italic;">me</span>!</h1>
                <p class="intro">
                    I’m a self-taught web developer focused on building clean, responsive, and user-centered digital experiences. I enjoy turning ideas into structured, maintainable code while continuously refining my skills through real-world projects and hands-on learning.</p>
                <p class="intro">
                    Along my journey as a self-taught developer, I’ve embraced every challenge as an opportunity to grow. From building small personal projects to contributing to real-world websites, I’ve learned the importance of thoughtful design, attention to detail, and creating experiences that are both functional and enjoyable. I value clean code, collaboration, and continuous learning, and I strive to bring these principles into every project I take on.
                </p>
            </div>
        </section>

        <hr />

        <!-- Journey -->
        <section class="about-journey">
            <div class="container">
                <h2>What I’m Building, Learning & <span style="color: var(--color-accent); font-style: italic;">Voluntary</span> Work</h2>
                <p>
                    My current focus is front-end development within the WordPress ecosystem..
                    building custom themes, working with PHP templates, and structuring reusable components. I enjoy creating clean layouts, improving performance, and ensuring responsive design across devices.
                </p>
                <p>
                    Alongside my personal projects, I contribute through voluntary work. With <a href="https://greenhouseculture.ie/" target="_blank">Greenhouse Culture</a>, I support layout refinements and template structure adjustments including shaping how event pages are built and rendered.
                    For <a href="https://hhtireland.org/" target="_blank">HHT Ireland </a>, I serve as a Web Editor, maintaining pages and posts while improving content structure and overall site usability.
                </p>
            </div>
        </section>

        <hr />

        <!-- Values -->
        <section class="about-values">

            <h2>What I <span style="color: var(--color-accent); font-style: italic;">Value</span></h2>
            <ul>
                <li><strong>Clean Architecture:</strong> Structured, reusable code that scales and remains maintainable over time.</li>
                <li><strong>User-Centered Design:</strong> Interfaces that prioritize clarity, accessibility, and intuitive interaction.</li>
                <li><strong>Attention to Detail:</strong> Consistent spacing, typography, and visual hierarchy.</li>
                <li><strong>Continuous Improvement:</strong> Learning through iteration, feedback, and real-world problem solving.</li>
            </ul>

        </section>

        <hr />
        <!-- Tech Stack -->

        <section class="about-tech-stack">

            <h2>Technologies I <span style="color: var(--color-accent); font-style: italic;">Work</span> With</h2>
            <div class="tech-icons-container">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/HTML5.svg' ?>" alt="HTML5" title="HTML5">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/CSS3.svg' ?>" alt="CSS3" title="CSS3">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/JavaScript.svg' ?>" alt="JavaScript" title="JavaScript">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/PHP.svg' ?>" alt="PHP" title="PHP">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/WordPress.svg' ?>" alt="WordPress" title="WordPress">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/Git.svg' ?>" alt="Git" title="Git">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/React.svg' ?>" alt="React" title="React">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/TailwindCSS.svg' ?>" alt="Tailwind" title="Tailwind">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/VSCode.svg' ?>" alt="VSCode" title="VSCode">
            </div>

        </section>
    </div>


</main>

<?php
get_footer();
