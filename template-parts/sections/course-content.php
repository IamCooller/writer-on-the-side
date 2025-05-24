<section>

    <div class="rotate-180">
        <?php get_template_part('template-parts/ui/section-divider'); ?>
    </div>

    <div class="container">
        <div class="text-center max-w-[900px] mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ai-icon.png" alt="ai icon"
                class="block mx-auto" />
            <h2 class="heading-primary mb-[18px] sm:mb-[23px] mt-[15px] sm:mt-[19px]">
                <?php echo get_field('course_content_title'); ?>
            </h2>
            <div
                class="text-base sm:text-lg font-medium leading-[26px] sm:leading-[30px] mb-[24px] sm:mb-[34px] space-y-3 sm:space-y-4">
                <p><?php echo get_field('course_content_description'); ?></p>
            </div>
            <p class="text-center font-repo text-lg font-bold mb-[20px]">
                <?php echo get_field('course_content_overview'); ?>
            </p>


        </div>
        <div class="course-accordions mt-8 mb-12" id="course">
            <?php if (have_rows('course_weeks')): ?>
                <?php while (have_rows('course_weeks')):
                    the_row(); ?>
                    <div class="course-accordion <?php echo get_sub_field('is_active') ? 'active' : ''; ?>">
                        <div class="course-accordion-header">
                            <div class="flex items-center">
                                <div class="course-accordion-week"><?php echo get_sub_field('week_number'); ?></div>
                                <h3 class="course-accordion-title"><?php echo get_sub_field('week_title'); ?></h3>
                            </div>
                            <svg class="course-accordion-icon" width="29" height="11" viewBox="0 0 29 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.7126 0.268523L1.16749 9.43521C0.677553 9.79314 0.677553 10.3736 1.16758 10.7316C1.65752 11.0895 2.45181 11.0895 2.94175 10.7315L14.5998 2.21302L26.2585 10.7316C26.7484 11.0895 27.5427 11.0895 28.0326 10.7315C28.2776 10.5526 28.4 10.318 28.4 10.0834C28.4 9.84875 28.2776 9.61414 28.0325 9.43515L15.4868 0.268523C15.2515 0.0965557 14.9324 0 14.5997 0C14.267 0 13.9479 0.0965557 13.7126 0.268523Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div class="course-accordion-content">
                            <div class="course-accordion-body">
                                <?php echo get_sub_field('week_content'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="testimonial-card my-[40px] sm:my-[68px] items-center">
            <div class="testimonial-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-7.png"
                    alt="People faces #7">
            </div>

            <div class="testimonial-content">
                <p>"This course is incredibly comprehensive, covering everything you need to know about publishing
                    on Amazon without feeling overwhelmed. <span>The lifetime access and bonuses make it well worth
                        the investment.</span> Hassan is an exceptional instructor, providing clear explanations and
                    attentive support. The course helped me overcome obstacles and make progress. I highly recommend
                    it."</p>
                <p class="testimonial-author">Gillian Leithman, Ph.D., Chief Behavior Scientist at Rewire to Retire
                </p>
            </div>
        </div>
    </div>
</section>