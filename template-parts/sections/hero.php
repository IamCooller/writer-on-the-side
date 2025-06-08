<section class="max-lg:bg-[#F9F8F6]">
    <div class="container">
        <div class="grid lg:grid-cols-2  items-center">
            <div class="relative max-lg:order-1 max-lg:mt-[20px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-img.png" alt="Hero image"
                    class="w-full h-full object-cover">
                <div
                    class="absolute bottom-[15px] sm:bottom-[40px] left-0 w-full flex items-center gap-[10px] sm:gap-[28px]">
                    <div
                        class=" bg-gradient-to-br from-[#C4C4C4]/40 to-[#C4C4C4]/20 rounded-[8px] border border-white  py-[8px] sm:py-[18px] px-[10px] sm:px-[21px] text-white max-w-[280px] backdrop-blur-2xl">
                        <p class="font-bold text-lg sm:text-xl mb-[8px] sm:mb-[11px]">
                            <?php echo get_field('author_name'); ?>
                        </p>
                        <p class="font-dm-sans font-medium text-sm sm:text-base italic">
                            <?php echo get_field('author_title'); ?>
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agold-author.png" alt="Hero image"
                        class="w-[70px] sm:w-[122px] aspect-square">
                </div>
            </div>
            <div class=" max-lg:mt-[20px] max-lg:text-center">
                <h1
                    class="font-repo font-extrabold  text-[28px] sm:text-[40px] lg:text-[69px] leading-none lg:leading-[80px] mb-[20px] sm:mb-[35px] lg:mb-4  tracking-[-2px] lg:tracking-[-4px]">
                    <?php echo get_field('hero_title'); ?>
                </h1>

                <div class="text-sm sm:text-base lg:text-xl lg:mb-[31px]">
                    <?php echo get_field('hero_subtitle'); ?>
                </div>

                <div class="text-sm sm:text-base lg:text-xl mb-[15px] sm:mb-[20px] lg:mb-[32px]">
                    <?php echo get_field('hero_description'); ?>
                </div>

                <div
                    class="flex items-center bg-[#EDEDED]
                     drop-shadow-lg
                     rounded-[8px] w-full lg:w-fit p-[6px] sm:py-[7px] sm:px-[11px] sm:pr-[27px] justify-between gap-[9px]">
                    <div class="flex items-center relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/37.png" alt="Hero image"
                            class="relative z-[1] max-sm:max-w-[45px]" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/39.png" alt="Hero image"
                            class="relative z-[2] -ml-4 max-sm:max-w-[45px]" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/40.png" alt="Hero image"
                            class="relative z-[3] -ml-4 max-sm:max-w-[45px]" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/47.png" alt="Hero image"
                            class="relative z-[4] -ml-4 max-sm:max-w-[45px]" />
                    </div>
                    <div class="space-y-[5px]">
                        <div class="flex gap-2">
                            <div
                                class=" font-dm-sans leading-[31px] sm:leading-[1] font-bold text-base sm:text-lg md:text-[27px]">
                                <?php echo get_field('rating'); ?>
                            </div>
                            <div class="flex items-center">
                                <div class="flex items-center gap-[5px] sm:gap-[7px]">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
                                            alt="Hero image"
                                            class="w-[15px] sm:w-[18px] md:w-[25px] h-[15px] sm:h-[18px] md:h-[25px] shrink-0" />
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <p
                            class="font-dm-sans italic font-medium text-sm sm:text-base md:text-[21px] text-[#5C5C5C] text-left">
                            <?php echo get_field('students_count'); ?>
                        </p>
                    </div>

                </div>
                <a href="#packages" class="mt-4 sm:mt-5 md:mt-8 btn-red ">Explore
                    Packages</a>
            </div>

        </div>
    </div>
    <div class="container mt-[20px] sm:mt-[31px]">
        <p
            class="font-semibold text-[20px] sm:text-[26px] w-full text-center leading-[25px] sm:leading-[31px] mb-6 sm:mb-8">
            AS SEEN ON:</p>
        <div class="flex flex-wrap gap-x-[40px] sm:gap-x-[73px] gap-y-[16px] sm:gap-y-[23px] justify-center">

            <?php
            $logos = [
                [
                    'name' => 'bloomber',
                    'file' => 'bloomber.png'
                ],
                [
                    'name' => 'enterpreneur',
                    'file' => 'enterpreneur.png'
                ],
                [
                    'name' => 'the-wall-steet-journal',
                    'file' => 'the-wall-steet-journal.png'
                ],
                [
                    'name' => 'forbes',
                    'file' => 'forbes.png'
                ],
                [
                    'name' => 'marketwatch',
                    'file' => 'marketwatch.png'
                ],
                [
                    'name' => 'reader-digest',
                    'file' => 'reader-digest.png'
                ],
                [
                    'name' => 'us-news',
                    'file' => 'us-news.png'
                ],
                [
                    'name' => 'success',
                    'file' => 'success.png'
                ]
            ];

            foreach ($logos as $logo) {
                printf(
                    '<img src="%s/assets/img/%s" class="h-[25px] sm:h-[30px] w-auto" alt="%s">',
                    get_template_directory_uri(),
                    $logo['file'],
                    $logo['name']
                );
            }
            ?>

        </div>

    </div>
    <?php get_template_part('template-parts/ui/section-divider'); ?>
</section>