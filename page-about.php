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
                <h1>This is me, Fred!</h1>
                <p class="intro">
                    I am a self-taught web developer with a deep passion for crafting clean, responsive, and highly functional digital experiences. I thrive on transforming ideas into intuitive, user-friendly interfaces while maintaining structured, maintainable code. Constantly curious and driven to learn, I enjoy exploring new technologies, refining my skills, and delivering solutions that not only work seamlessly but also delight users.
                </p>
                <p class="intro">
                    Along my journey as a self-taught developer, I’ve embraced every challenge as an opportunity to grow. From building small personal projects to contributing to real-world websites, I’ve learned the importance of thoughtful design, attention to detail, and creating experiences that are both functional and enjoyable. I value clean code, collaboration, and continuous learning, and I strive to bring these principles into every project I take on.
                </p>
            </div>
        </section>

        <!-- Journey -->
        <section class="about-journey">
            <div class="container">
                <h2>My Journey</h2>
                <p>
                    I began by learning HTML, CSS, and JavaScript from scratch.
                    Through consistent practice, voluntary work, and building real projects,
                    I developed a strong foundation in frontend development.
                </p>
                <p>
                    Over time, I moved into WordPress, PHP, React, and TypeScript —
                    not just to learn tools, but to understand how systems connect.
                </p>
            </div>
        </section>

        <!-- Values -->
        <section class="about-values">
            <div class="container">
                <h2>What I Value</h2>
                <ul>
                    <li><strong>Clean Structure:</strong> Code that is readable and maintainable.</li>
                    <li><strong>Thoughtful Design:</strong> Interfaces that feel natural and intentional.</li>
                    <li><strong>Consistency:</strong> Spacing, hierarchy, and clarity.</li>
                    <li><strong>Growth:</strong> Always improving through practice and feedback.</li>
                </ul>
            </div>
        </section>
    </div>


</main>

<?php
get_footer();
