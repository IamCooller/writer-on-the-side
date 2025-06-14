<section>

    <div class="rotate-180">
        <?php get_template_part('template-parts/ui/section-divider'); ?>
    </div>

    <div class="container">
        <div class="text-center max-w-[900px] mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info-icon.svg" alt="ai icon" id="course"
                class="block mx-auto max-sm:w-[100px]" />
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
        <div class="course-accordions mt-8 mb-12">
            <?php if (have_rows('course_weeks')): ?>
                <?php while (have_rows('course_weeks')):
                    the_row(); ?>
                    <div class="course-accordion">
                        <div class="course-accordion-header">
                            <div class="flex items-center">
                                <div class="course-accordion-week"><?php echo get_sub_field('week_number'); ?></div>
                                <h3 class="course-accordion-title"><?php echo get_sub_field('week_title'); ?></h3>
                            </div>

                            <svg class="course-accordion-icon" width="29" height="11" viewBox="0 0 29 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.4876 10.7315L28.0327 1.56479C28.5226 1.20686 28.5226 0.626428 28.0326 0.268439C27.5427 -0.0894897 26.7484 -0.0894898 26.2584 0.2685L14.6004 8.78698L2.94174 0.268439C2.4518 -0.0894897 1.6575 -0.0894898 1.16756 0.2685C0.92259 0.447434 0.800148 0.68204 0.800148 0.916646C0.800148 1.15125 0.922592 1.38586 1.16765 1.56485L13.7134 10.7315C13.9487 10.9034 14.2678 11 14.6005 11C14.9332 11 15.2523 10.9034 15.4876 10.7315Z"
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
            <?php $course_testimonial_avatar = get_field('course_testimonial_avatar'); ?>
            <?php if ($course_testimonial_avatar): ?>
                <div class="testimonial-avatar">
                    <img src="<?php echo $course_testimonial_avatar['url']; ?>"
                        alt="<?php echo $course_testimonial_avatar['alt']; ?>">
                </div>
            <?php endif; ?>

            <div class="testimonial-content">
                <?php if (get_field('course_testimonial_content')): ?>
                    <p><?php echo get_field('course_testimonial_content'); ?></p>
                <?php endif; ?>
                <?php if (get_field('course_testimonial_author')): ?>
                    <p class="testimonial-author"><?php echo get_field('course_testimonial_author'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>