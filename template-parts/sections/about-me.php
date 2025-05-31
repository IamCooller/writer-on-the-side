<section>
    <div class="container">
        <div class="text-center max-w-[900px] mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/book-2-icon.svg" alt="ai icon"
                class="block mx-auto max-sm:w-[100px]" />
            <h2 class="heading-primary mb-[18px] sm:mb-[23px] mt-[15px] sm:mt-[19px]" id="about">
                <?php echo get_field('about_me_title'); ?>
            </h2>

            <p class="text-base sm:text-lg font-bold leading-[28px] sm:leading-[33px] mb-[20px] sm:mb-[25px]">
                <?php echo get_field('about_me_stats'); ?>
            </p>

            <p class="font-medium mt-[20px] sm:mt-[25px] mb-[30px] sm:mb-[40px] text-sm sm:text-base">
                <?php echo get_field('about_me_description'); ?>
            </p>
            <p class="text-center font-repo text-base sm:text-lg font-bold mb-[16px] sm:mb-[20px]">
                <?php echo get_field('about_me_highlight'); ?>
            </p>
        </div>
        <div class="relative py-6 sm:py-8">

            <div class="flex items-center justify-center max-lg:flex-col">

                <!-- Left Column: Profile Picture -->
                <div class="flex-shrink-0 flex flex-col items-center text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-8.png"
                        alt="Hassan Osman" class="block mx-auto object-cover w-[200px] sm:w-[267px] aspect-square" />
                    <p class="font-medium text-[20px] sm:text-[25px] mt-3">Hassan Osman</p>
                </div>


                <div
                    class="relative flex flex-col gap-12 sm:gap-16 max-lg:mt-[-50px] sm:max-lg:mt-[-76px] max-lg:items-end max-lg:w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-1.png"
                        class="w-[120px] sm:w-[161px] aspect-square max-lg:rotate-90"
                        alt="arrow pointing to featured content" />

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-2.png"
                        class="w-[120px] sm:w-[161px] aspect-square max-lg:hidden"
                        alt="arrow pointing to work history" />
                </div>

                <!-- Right Column: "Featured in" and "Worked at" boxes -->
                <div class="w-full max-w-[740px] flex flex-col gap-4 sm:gap-6 xl:gap-[21px] lg:pl-6">
                    <!-- Featured In Box -->
                    <div class="featured-in-box">
                        <h3 class="font-extrabold font-repo text-[18px] sm:text-[24px] md:text-[38px] text-center">
                            Featured in</h3>
                        <div
                            class="bg-[#FFFEF7] border-[3px] border-black py-[15px] sm:py-[19px] md:py-5 px-4 sm:px-5 md:px-[33px] rounded-[12px]">
                            <div
                                class="flex flex-wrap justify-center items-center gap-x-3 sm:gap-x-4 md:gap-x-6 lg:gap-x-8 gap-y-2 sm:gap-y-3 md:gap-y-4">
                                <?php // Ensure these logo files exist in /assets/img/logos/ ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/1.png"
                                    alt="The Wall Street Journal"
                                    class="h-5 sm:h-6 md:h-8 lg:h-[41px] object-contain" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/2.png"
                                    alt="Forbes" class="h-5 sm:h-6 md:h-8 lg:h-[51px] object-contain" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/3.png"
                                    alt="Entrepreneur" class="h-5 sm:h-6 md:h-8 lg:h-[51px] object-contain" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/4.png"
                                    alt="Reader\'s Digest" class="h-5 sm:h-6 md:h-8 lg:h-[66px] object-contain" />

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/5.png"
                                    alt="American Express"
                                    class="h-5 sm:h-6 md:h-8 lg:h-[106px] object-contain aspect-square" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/6.png"
                                    alt="Bloomberg" class="h-5 sm:h-6 md:h-8 lg:h-[39px] object-contain" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/7.png"
                                    alt="MarketWatch" class="h-5 sm:h-6 md:h-8 lg:h-[37px] object-contain" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/8.png"
                                    alt="U.S. News" class="h-5 sm:h-6 md:h-8 lg:h-[53px] object-contain" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/9.png"
                                    alt="Success" class="h-5 sm:h-6 md:h-8 lg:h-[48px] object-contain" />
                            </div>
                        </div>
                    </div>

                    <!-- Worked At Box -->
                    <div class="worked-at-box">
                        <h3 class="font-extrabold font-repo text-[20px] sm:text-[24px] md:text-[38px] text-center">
                            Worked at</h3>
                        <div
                            class="bg-[#FFFEF7] border-[3px] border-black py-[19px] sm:py-5 px-5 sm:px-[33px] rounded-[12px]">
                            <div class="grid grid-cols-3 gap-x-1 sm:gap-x-2 md:gap-x-[55px] gap-y-3 place-items-center">
                                <?php // Ensure these logo files exist in /assets/img/logos/ ?>
                                <div class="flex flex-col justify-center items-center text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/10.png"
                                        alt="EY" class="h-[76px] lg:h-[132px] object-contain " />
                                    <div class="text-center font-repo font-semibold text-xs sm:text-sm md:text-xl">
                                        <p>Manager</p>
                                        <p>(Consulting)</p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-center items-center text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/11.png"
                                        alt="Cisco" class="h-[72px] lg:h-[124px] object-contain " />
                                    <div class="text-center font-repo font-semibold text-xs sm:text-sm md:text-xl">
                                        <p>Director</p>
                                        <p>(PMO)</p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-center items-center text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/12.png"
                                        alt="nwn carousel" class="h-[54px] lg:h-[95px] object-contain " />
                                    <div class="text-center font-repo font-semibold text-xs sm:text-sm md:text-xl">
                                        <p>SVP</p>
                                        <p>(Professional Services)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Right Column -->
            </div> <!-- End Main Flex Container for side-by-side -->
        </div>
    </div>
</section>