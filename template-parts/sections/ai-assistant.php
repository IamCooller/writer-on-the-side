<section id="using-ai">

    <div class=" rotate-180">
        <?php get_template_part('template-parts/ui/section-divider'); ?>
    </div>

    <div class="container py-[60px] sm:py-[121px]">
        <div class=" text-center max-w-[900px] mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quill.png" alt="Book cover"
                class="block mx-auto" />
            <h2 class="heading-primary mb-[5px] mt-[15px] sm:mt-[19px]">
                <?php echo get_field('ai_section_title'); ?>
            </h2>
            <p class="font-repo text-[18px] sm:text-[22px] font-bold mb-[20px] sm:mb-[28px]">
                <?php echo get_field('ai_section_subtitle'); ?>
            </p>
            <p class="text-base sm:text-lg font-medium leading-[26px] sm:leading-[30px] mb-[24px] sm:mb-[34px]">
                <?php echo get_field('ai_section_description'); ?>
            </p>
            <p class="font-repo text-[18px] sm:text-[22px] font-bold">
                <?php echo get_field('books_section_title'); ?>
            </p>
        </div>

        <div
            class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 gap-6 sm:gap-9 mt-[40px] sm:mt-[57px] mb-[60px] sm:mb-[99px]">
            <?php
            if (have_rows('books_grid')):
                while (have_rows('books_grid')):
                    the_row();
                    $is_featured = get_sub_field('is_featured');
                    $book_image = get_sub_field('book_image');
                    ?>
                    <div class="relative">
                        <?php if ($is_featured): ?>
                            <div
                                class="absolute top-0 translate-y-[-30%] translate-x-[30%] right-0 w-[35px] sm:w-[47px] md:w-[91px] aspect-square z-[1]">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/books/Featured.png"
                                    alt="featured" />
                            </div>
                        <?php endif; ?>
                        <img src="<?php echo $book_image['url']; ?>" alt="<?php echo $book_image['alt']; ?>"
                            class="w-full h-auto" />
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="text-center max-w-[900px] mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ai-icon.png" alt="ai icon"
                class="block mx-auto" />
            <h2 class="heading-primary mb-[18px] sm:mb-[23px] mt-[15px] sm:mt-[19px]">
                <?php echo get_field('ai_assistant_title'); ?>
            </h2>
            <div
                class="text-base sm:text-lg font-medium leading-[26px] sm:leading-[30px] mb-[24px] sm:mb-[34px] space-y-3 sm:space-y-4">
                <?php echo get_field('ai_assistant_content'); ?>
            </div>
        </div>
        <div class="testimonial-card mt-[15px] sm:mt-[20px] items-center">
            <div class="testimonial-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-3.png"
                    alt="People faces #3" class="w-full h-auto" />
            </div>

            <div class="testimonial-content">
                <p>"This course exceeded my expectations in every way! Hassan went above and beyond, delivering
                    invaluable, unique content that truly set this program apart. <span
                        class="testimonial-highlight">The custom
                        GPT tools he created were a game-changer — from
                        the book title generator to the outline generator, and even an AI-powered tool to draft
                        the book itself.</span> These resources made the process efficient and inspiring.
                    Without a doubt, this course is an outstanding investment for anyone looking to write a book
                    quickly and effectively. Highly recommended!"</p>
                <p class="testimonial-author">Terry Schmidt, Founder & President of Management Pro
                </p>
            </div>
        </div>
        <a href="#packages" class="mt-4 sm:mt-5 md:mt-6 btn-red mx-auto">Explore
            Packages</a>
    </div>
    <?php get_template_part('template-parts/ui/section-divider'); ?>
</section>