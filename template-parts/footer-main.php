<footer class="site-footer">
    <!-- 2 grid footer row'd designed and 1 column on mobiles -->

    <!-- row 1 informations -->
    <div class="site-footer-grid">
        <div class="site-first-grid">
            <!-- icon and site title -->
            <div>
                <?php if (has_site_icon()) : ?>
                    <div class="site-footer-detail-info">
                        <img
                            src="<?php echo esc_url(get_site_icon_url(96)); ?>"
                            alt="<?php bloginfo('name'); ?>"
                            class="site-icon">
                        <p>
                            <?php echo strtoupper('Fredcodes'); ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- short slogan -->
            <div>
                <p class="footer-slogan">
                    Clean code. Clear thinking. Always improving.
                </p>
            </div>


            <!-- back to top button -->
            <div class="footer-back-to-top" role="button" aria-label="Scroll to top">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                </svg>

                <span>
                    BACK TO TOP
                </span>
            </div>
        </div>

        <!-- row 2 site map to everything -->
        <div class="site-second-grid">
            <!-- site map links -->
            <div>
                <h3>Site Map</h3>
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Homepage</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
                    <li><a href="<?php echo home_url('projects'); ?>">Projects</a></li>
                    <li><a href="<?php echo home_url('/learning'); ?>">Learning</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                </ul>
            </div>


            <!-- socials and links -->
            <div class="footer-social-links">
                <h3>Connect</h3>

                <div>
                    <a href="https://www.linkedin.com/in/fred-huertas/" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <!-- LinkedIn SVG -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.5 8h4v16h-4V8zm7 0h3.6v2.2h.05c.5-.95 1.72-1.95 3.55-1.95 3.8 0 4.5 2.5 4.5 5.75V24h-4v-7.75c0-1.85-.03-4.25-2.6-4.25-2.6 0-3 2-3 4v7h-4V8z" />
                        </svg>
                    </a>

                    <a href="https://github.com/FredH2O" target="_blank" rel="noopener" aria-label="GitHub">
                        <!-- GitHub SVG -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.38 7.86 10.89.58.11.79-.25.79-.55v-2c-3.2.7-3.87-1.55-3.87-1.55-.53-1.35-1.3-1.7-1.3-1.7-1.06-.73.08-.72.08-.72 1.17.08 1.78 1.2 1.78 1.2 1.04 1.77 2.72 1.26 3.38.97.1-.76.41-1.26.74-1.55-2.56-.29-5.25-1.28-5.25-5.7 0-1.26.45-2.3 1.19-3.11-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.2 1.18.93-.26 1.94-.39 2.94-.39s2.01.13 2.94.39c2.22-1.49 3.19-1.18 3.19-1.18.63 1.59.24 2.76.12 3.05.74.81 1.19 1.85 1.19 3.11 0 4.43-2.7 5.41-5.27 5.69.42.37.79 1.11.79 2.24v3.33c0 .31.21.67.8.56C20.71 21.38 24 17.08 24 12c0-6.35-5.15-11.5-12-11.5z" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>

    </div>

    <!-- all rights reserved bottom -->
    <div class="footer-end">
        <p>Copyright &copy;<?php echo date('Y') ?>, fredcodes.com, All Rights Reserved.</p>
    </div>
</footer>