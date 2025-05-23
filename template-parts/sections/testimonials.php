<section id="testimonials">
    <div class="rotate-180">
        <?php get_template_part('template-parts/ui/section-divider'); ?>
    </div>
    <div class="container pt-[80px] sm:pt-[150px]">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/crowd-icon.png" alt="Crowd"
            class="w-[80px] sm:w-[100px] mx-auto mb-4 sm:mb-5" />
        <h2 class="heading-primary mb-8 sm:mb-12 text-center">
            <?php echo get_field('testimonials_title'); ?>
        </h2>

        <div class="swiper-container testimonials-slider-container">
            <div class="swiper testimonials-slider">
                <div class="swiper-wrapper">
                    <?php
                    if (have_rows('testimonials')):
                        while (have_rows('testimonials')):
                            the_row();
                            $avatar = get_sub_field('avatar');
                            $content = get_sub_field('content');
                            $author = get_sub_field('author');
                            ?>
                            <div class="swiper-slide">
                                <div class="testimonial-card items-center">
                                    <div class="testimonial-avatar">
                                        <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
                                    </div>
                                    <div class="testimonial-content">
                                        <?php echo $content; ?>
                                        <p class="testimonial-author"><?php echo $author; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>

            <!-- Navigation -->
            <div class="swiper-nav swiper-prev testimonials-slider-prev testimonials-slider-nav">
                <svg width="19" height="53" viewBox="0 0 19 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.463835 28.3509L16.2972 51.9342C16.9154 52.8553 17.918 52.8553 18.5364 51.9341C19.1546 51.0131 19.1546 49.5199 18.5363 48.5988L3.82251 26.683L18.5364 4.76613C19.1546 3.84509 19.1546 2.35192 18.5363 1.43089C18.2272 0.970367 17.822 0.740185 17.4167 0.740185C17.0115 0.740185 16.6063 0.970367 16.2971 1.43104L0.463835 25.0156C0.1668 25.4579 2.28882e-05 26.0577 2.28882e-05 26.6832C2.28882e-05 27.3086 0.1668 27.9086 0.463835 28.3509Z"
                        fill="black" />
                </svg>

            </div>
            <div class="swiper-nav swiper-next testimonials-slider-next testimonials-slider-nav">
                <svg width="19" height="53" viewBox="0 0 19 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.5362 25.0124L2.70282 1.42904C2.08458 0.508003 1.08201 0.508003 0.463667 1.42919C-0.154573 2.35023 -0.154573 3.84341 0.463772 4.76444L15.1775 26.6802L0.463667 48.5972C-0.154573 49.5182 -0.154573 51.0114 0.463772 51.9324C0.77284 52.3929 1.17807 52.6231 1.5833 52.6231C1.98853 52.6231 2.39375 52.3929 2.70293 51.9322L18.5362 28.3476C18.8332 27.9054 19 27.3055 19 26.6801C19 26.0546 18.8332 25.4547 18.5362 25.0124Z"
                        fill="black" />
                </svg>

            </div>

            <!-- Pagination -->
            <div class="swiper-pagination testimonials-slider-pagination"></div>
        </div>
    </div>

</section>