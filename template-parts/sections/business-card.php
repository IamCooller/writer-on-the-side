<section class="py-[57px]  bg-[#20201D] relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor-patient.png" alt="Doctor and patient"
        class="absolute inset-0 w-full h-full object-cover opacity-10" />
    <div class="container relative z-[1]">
        <h2 class="heading-primary mb-[24px] sm:mb-[36px] text-center text-white">
            <?php echo get_field('business_card_title'); ?>
        </h2>
        <div class="max-w-[1000px] mx-auto text-white text-center text-sm sm:text-sm lg:text-lg font-medium">
            <?php echo get_field('business_card_description'); ?>
            <p class="mb-[14px] sm:mb-[18px]"><?php echo get_field('business_card_subtitle'); ?></p>
            <ol class="list-decimal list-inside space-y-3 sm:space-y-4 mb-[18px] sm:mb-[22px]">
                <?php
                if (have_rows('business_card_list')):
                    while (have_rows('business_card_list')):
                        the_row();
                        echo '<li>' . get_sub_field('list_item') . '</li>';
                    endwhile;
                endif;
                ?>
            </ol>
            <p><?php echo get_field('business_card_conclusion'); ?></p>
        </div>
        <div class="testimonial-card mt-[40px] sm:mt-[68px]">
            <?php $business_testimonial_1_avatar = get_field('business_testimonial_1_avatar'); ?>
            <?php if ($business_testimonial_1_avatar): ?>
                <div class="testimonial-avatar">
                    <img src="<?php echo $business_testimonial_1_avatar['url']; ?>"
                        alt="<?php echo $business_testimonial_1_avatar['alt']; ?>" />
                </div>
            <?php endif; ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rounded-red-line.png"
                alt="Rounded red line"
                class="absolute top-[25%] lg:-top-6 max-lg:left-0 lg:-right-4 w-full lg:w-[85%]  lg:h-[170px] object-fill pointer-events-none max-lg:hidden" />
            <div class="testimonial-content">
                <?php if (get_field('business_testimonial_1_content')): ?>
                    <div class="space-y-[15px] sm:space-y-[19px]">
                        <?php echo get_field('business_testimonial_1_content'); ?>
                    </div>
                <?php endif; ?>
                <?php if (get_field('business_testimonial_1_author')): ?>
                    <p class="testimonial-author"><?php echo get_field('business_testimonial_1_author'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <h2 class="heading-primary mb-[24px] sm:mb-[36px] mt-[40px] sm:mt-[69px] text-center text-white">
            <?php echo get_field('what_you_get_title'); ?>
        </h2>
        <div
            class="max-w-[1000px] mx-auto text-white text-center text-sm sm:text-sm lg:text-lg font-medium space-y-6 sm:space-y-8">
            <?php echo get_field('what_you_get_content'); ?>
        </div>
        <div class="testimonial-card mt-[40px] sm:mt-[68px] items-center">
            <?php $business_testimonial_2_avatar = get_field('business_testimonial_2_avatar'); ?>
            <?php if ($business_testimonial_2_avatar): ?>
                <div class="testimonial-avatar">
                    <img src="<?php echo $business_testimonial_2_avatar['url']; ?>"
                        alt="<?php echo $business_testimonial_2_avatar['alt']; ?>" />
                </div>
            <?php endif; ?>

            <div class="testimonial-content">
                <?php if (get_field('business_testimonial_2_content')): ?>
                    <p><?php echo get_field('business_testimonial_2_content'); ?></p>
                <?php endif; ?>
                <?php if (get_field('business_testimonial_2_author')): ?>
                    <p class="testimonial-author"><?php echo get_field('business_testimonial_2_author'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <a href="#packages" class="mt-4 sm:mt-5 md:mt-6 btn-red mx-auto">Explore
            Packages</a>
    </div>
</section>