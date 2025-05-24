<section class="py-[57px]  bg-[#20201D] relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bonuses-bg.png" alt="Bonuses background"
        class="absolute top-0 left-0 w-full h-full object-cover" />
    <div class="container relative z-[1] text-white">
        <h2 class="heading-primary  text-center mb-[35px] sm:mb-[50px]">Bonuses (Free with Your Purchase)</h2>
        <div class="space-y-[18px] sm:space-y-[23px]">
            <?php if (have_rows('bonuses')): ?>
                <?php while (have_rows('bonuses')):
                    the_row(); ?>
                    <div
                        class="bg-gradient-to-br from-[#3B3939] to-[#3B3939]/30 rounded-[8px] border border-[#504F4F]/30 backdrop-blur-[10px] p-[15px] sm:p-[19px] flex gap-[20px] sm:gap-[33px] max-lg:flex-col">
                        <div class="h-full">
                            <div
                                class="reason-icon-bg w-[65px] sm:w-[79px] aspect-square mx-auto drop-shadow-xl flex items-center justify-center rounded-[8px] shrink-0 p-3 sm:p-4">
                                <img src="<?php echo get_sub_field('icon'); ?>" alt="<?php echo get_sub_field('title'); ?>"
                                    class="w-[50px] sm:w-[60px] aspect-square" />
                            </div>
                        </div>
                        <div class="py-3 sm:py-5">
                            <p
                                class="font-bold text-[20px] sm:text-[25px] leading-[24px] sm:leading-[30px] mb-[8px] sm:mb-[10px]">
                                <?php echo get_sub_field('title'); ?>
                            </p>
                            <p class="font-medium text-base sm:text-lg leading-[24px] sm:leading-[28px] mb-[14px] sm:mb-[17px]">
                                <?php echo get_sub_field('description'); ?>
                            </p>
                            <?php if (get_sub_field('note')): ?>
                                <p class="italic text-base sm:text-lg leading-[24px] sm:leading-[28px]">
                                    <?php echo get_sub_field('note'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>