<section class="py-[30px] sm:py-[57px]  bg-[#20201D] relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor-patient.png" alt="Doctor and patient"
        class="absolute inset-0 w-full h-full object-cover opacity-10" />
    <div class="container relative z-[1]">
        <h2 class="heading-primary mb-[24px] sm:mb-[36px] text-center text-white">
            <?php echo get_field('additional_sections_title'); ?>
        </h2>
        <p class="font-bold font-repo text-base sm:text-lg py-[18px] sm:py-[22px] text-center text-white">
            <?php echo get_field('additional_sections_subtitle'); ?>
        </p>
        <div class="max-w-[1000px] mx-auto text-white text-center text-sm sm:text-sm lg:text-lg font-medium">
            <p class="mb-[24px] sm:mb-[32px]"><?php echo get_field('additional_sections_description'); ?></p>
            <p class="mb-[14px] sm:mb-[18px]"><?php echo get_field('additional_sections_benefits_title'); ?></p>
        </div>

        <div class="grid lg:grid-cols-2 gap-[20px] sm:gap-[30px]">
            <div
                class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 py-[18px] sm:py-[23px] text-white px-[25px] sm:px-[37px]">
                <div class="flex items-center gap-3 sm:gap-4 mb-[18px] sm:mb-[23px]">
                    <div
                        class="reason-icon-bg w-[65px] sm:w-[79px] aspect-square mx-auto drop-shadow-lg flex items-center justify-center rounded-[8px] shrink-0 p-3 sm:p-4 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/infinity-icon.svg"
                            alt="infinity" />
                    </div>
                    <p class="text-[24px] sm:text-[30px] font-bold flex-1">
                        <?php echo get_field('lifetime_access_title'); ?>
                    </p>
                </div>
                <p class="text-base sm:text-lg font-medium"><?php echo get_field('lifetime_access_description'); ?></p>
            </div>
            <div
                class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 py-[18px] sm:py-[23px]  text-white px-[25px] sm:px-[37px]">
                <div class="flex items-center gap-3 sm:gap-4 mb-[18px] sm:mb-[23px]">
                    <div
                        class="reason-icon-bg w-[65px] sm:w-[79px] aspect-square mx-auto drop-shadow-lg flex items-center justify-center rounded-[8px] shrink-0 p-3 sm:p-4 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/repear-icon.svg"
                            alt="repear icon" />
                    </div>
                    <p class="text-[24px] sm:text-[30px] font-bold flex-1">
                        <?php echo get_field('repeatable_system_title'); ?>
                    </p>
                </div>
                <p class="text-base sm:text-lg font-medium"><?php echo get_field('repeatable_system_description'); ?>
                </p>
            </div>
        </div>

        <div class="testimonial-card mt-[40px] sm:mt-[68px] items-center">
            <?php $additional_testimonial_1_avatar = get_field('additional_testimonial_1_avatar'); ?>
            <?php if ($additional_testimonial_1_avatar): ?>
                <div class="testimonial-avatar">
                    <img src="<?php echo $additional_testimonial_1_avatar['url']; ?>"
                        alt="<?php echo $additional_testimonial_1_avatar['alt']; ?>" />
                </div>
            <?php endif; ?>

            <div class="testimonial-content">
                <?php if (get_field('additional_testimonial_1_content')): ?>
                    <p><?php echo get_field('additional_testimonial_1_content'); ?></p>
                <?php endif; ?>
                <?php if (get_field('additional_testimonial_1_author')): ?>
                    <p class="testimonial-author"><?php echo get_field('additional_testimonial_1_author'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <h2 class="heading-primary mb-[24px] sm:mb-[36px] mt-[40px] sm:mt-[69px] text-center text-white">
            <?php echo get_field('prerequisites_title'); ?>
        </h2>
        <p class="text-center text-white text-base sm:text-lg font-medium mb-4 sm:mb-5">
            <?php echo get_field('prerequisites_subtitle'); ?>
        </p>
        <div class="grid lg:grid-cols-2 gap-[20px] sm:gap-[30px]">
            <div
                class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 py-[18px] sm:py-[23px] text-white px-[25px] sm:px-[37px]">
                <div class="flex items-center gap-3 sm:gap-4 mb-[18px] sm:mb-[23px]">
                    <div
                        class="reason-icon-bg w-[65px] sm:w-[79px] aspect-square mx-auto drop-shadow-lg flex items-center justify-center rounded-[8px] shrink-0 p-3 sm:p-4 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kdp-icon.png" alt="kdp" />
                    </div>
                    <p class="text-[24px] sm:text-[30px] font-bold flex-1"><?php echo get_field('kdp_account_title'); ?>
                    </p>
                </div>
                <p class="text-base sm:text-lg font-medium"><?php echo get_field('kdp_account_description'); ?></p>
            </div>
            <div
                class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 py-[18px] sm:py-[23px] text-white px-[25px] sm:px-[37px]">
                <div class="flex items-center gap-3 sm:gap-4 mb-[18px] sm:mb-[23px]">
                    <div
                        class="reason-icon-bg w-[65px] sm:w-[79px] aspect-square mx-auto drop-shadow-lg flex items-center justify-center rounded-[8px] shrink-0 p-3 sm:p-4 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gpt-icon.svg" alt="gpt icon" />
                    </div>
                    <p class="text-[24px] sm:text-[30px] font-bold flex-1">
                        <?php echo get_field('chatgpt_plus_title'); ?>
                    </p>
                </div>
                <p class="text-base sm:text-lg font-medium"><?php echo get_field('chatgpt_plus_description'); ?></p>
            </div>
        </div>
        <div class="testimonial-card mt-[40px] sm:mt-[68px] items-center">
            <?php $additional_testimonial_2_avatar = get_field('additional_testimonial_2_avatar'); ?>
            <?php if ($additional_testimonial_2_avatar): ?>
                <div class="testimonial-avatar">
                    <img src="<?php echo $additional_testimonial_2_avatar['url']; ?>"
                        alt="<?php echo $additional_testimonial_2_avatar['alt']; ?>" />
                </div>
            <?php endif; ?>

            <div class="testimonial-content">
                <?php if (get_field('additional_testimonial_2_content')): ?>
                    <p><?php echo get_field('additional_testimonial_2_content'); ?></p>
                <?php endif; ?>
                <?php if (get_field('additional_testimonial_2_author')): ?>
                    <p class="testimonial-author"><?php echo get_field('additional_testimonial_2_author'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <a href="#packages" class="mt-4 sm:mt-5 md:mt-6 btn-red mx-auto">Explore
            Packages</a>
    </div>
</section>