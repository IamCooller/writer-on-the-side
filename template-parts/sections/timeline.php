<section>
    <div class="container pb-[70px] sm:pb-[110px]">
        <div class="mt-[60px] sm:mt-[104px] max-w-[900px] mx-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar-icon.png"
                class="w-[80px] sm:w-[100px] mx-auto mb-4 sm:mb-5" alt="Calendar icon" />
            <h2 class="heading-primary text-center">
                <?php echo get_field('timeline_title'); ?>
            </h2>
            <p class="font-bold font-repo text-base sm:text-lg py-[18px] sm:py-[22px]">
                <?php echo get_field('timeline_subtitle'); ?>
            </p>
            <p class="text-sm sm:text-base"><?php echo get_field('timeline_description'); ?></p>
            <p class="mt-[20px] sm:mt-[27px] text-sm sm:text-base">
                <?php echo get_field('timeline_feasibility_title'); ?>
            </p>
        </div>
        <div class="flex flex-wrap justify-center gap-[40px] sm:gap-[74px] mt-[30px] sm:mt-[45px]">
            <div class="">
                <div
                    class="reason-icon-bg w-[100px] sm:w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-3 sm:p-4 mb-[18px] sm:mb-[24px] text-[62px] text-white font-repo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/1.svg" alt="#1" />

                </div>
                <p class="text-center uppercase text-sm sm:text-base">We'll focus on a <br /> <b>small problem</b>
                </p>
            </div>
            <div class="">
                <div
                    class="reason-icon-bg w-[100px] sm:w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-3 sm:p-4 mb-[18px] sm:mb-[24px] text-[62px] text-white font-repo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/2.svg" alt="#2" />


                </div>
                <p class="text-center uppercase text-sm sm:text-base">We'll write a <br /> <b>short book</b></p>
            </div>
            <div class="">
                <div
                    class="reason-icon-bg w-[100px] sm:w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-3 sm:p-4 mb-[18px] sm:mb-[24px] text-[62px] text-white font-repo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/3.svg" alt="#3" />
                    </svg>


                </div>
                <p class="text-center uppercase text-sm sm:text-base">We'll apply the <br /> <b>80/20 rule</b></p>
            </div>
            <div class="">
                <div
                    class="reason-icon-bg w-[100px] sm:w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-3 sm:p-4 mb-[18px] sm:mb-[24px] text-[62px] text-white font-repo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/4.svg" alt="#4" />


                </div>
                <p class="text-center uppercase text-sm sm:text-base">We'll use AI to <br /> <b>write it quickly</b>
                </p>
            </div>
            <div class="">
                <div
                    class="reason-icon-bg w-[100px] sm:w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-3 sm:p-4 mb-[18px] sm:mb-[24px] text-[62px] text-white font-repo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/5.svg" alt="#5" />


                </div>
                <p class="text-center uppercase text-sm sm:text-base">We'll publish an <br /> <b>ebook first*</b>
                </p>
            </div>
        </div>
        <div class="max-w-[900px] text-center mx-auto my-[30px] sm:my-[45px] text-base sm:text-lg">
            <?php echo get_field('timeline_intensive_note'); ?>
        </div>
        <div
            class="max-w-[900px] text-center mx-auto my-[30px] sm:my-[45px] text-base sm:text-lg text-[#585853] italic">
            <?php echo get_field('timeline_publishing_note'); ?>
        </div>

        <div class="testimonial-card items-center">
            <?php $timeline_testimonial_avatar = get_field('timeline_testimonial_avatar'); ?>
            <?php if ($timeline_testimonial_avatar): ?>
                <div class="testimonial-avatar">
                    <img src="<?php echo $timeline_testimonial_avatar['url']; ?>"
                        alt="<?php echo $timeline_testimonial_avatar['alt']; ?>" />
                </div>
            <?php endif; ?>

            <div class="testimonial-content">
                <?php if (get_field('timeline_testimonial_content')): ?>
                    <p><?php echo get_field('timeline_testimonial_content'); ?></p>
                <?php endif; ?>
                <?php if (get_field('timeline_testimonial_author')): ?>
                    <p class="testimonial-author"><?php echo get_field('timeline_testimonial_author'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/ui/section-divider'); ?>
</section>