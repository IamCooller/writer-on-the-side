<section class="py-[30px] sm:py-[57px]  bg-[#20201D] relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reasons-bg.png" alt="Reasons bg"
        class="absolute inset-0 w-full h-full object-cover opacity-10" />
    <div class="container relative z-[1]">
        <h2 class="heading-primary mb-8 sm:mb-12 text-center text-white">
            <?php echo get_field('reasons_title'); ?>
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php
            if (have_rows('reasons')):
                while (have_rows('reasons')):
                    the_row();
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    ?>
                    <div
                        class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 pt-[25px] sm:pt-[35px] pb-[40px] sm:pb-[56px] px-3 text-white">
                        <div
                            class="reason-icon-bg w-[65px] sm:w-[79px] aspect-square mx-auto drop-shadow-lg rounded-[8px] p-3 sm:p-4 mb-[18px] sm:mb-[23px]">
                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                        </div>
                        <div class="text-center font-bold text-[20px] sm:text-[25px] mb-[30px] sm:mb-[47px]">
                            <?php echo $title; ?>
                        </div>
                        <p class="text-base sm:text-lg font-medium">
                            <?php echo $description; ?>
                        </p>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <a href="#packages" class="mt-4 sm:mt-5 md:mt-6 btn-red mx-auto">Explore
            Packages</a>
    </div>
</section>