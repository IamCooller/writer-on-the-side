<section class="pt-[100px] sm:pt-[172px]">
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hand-icon.svg" alt="hand icon"
            class="block mx-auto max-sm:w-[100px]" id="packages" />
        <h2 class="heading-primary mb-[18px] sm:mb-[23px] mt-[15px] sm:mt-[19px] text-center">
            <?php echo get_field('pricing_section_title') ?: 'Choose One of Three Packages'; ?>
        </h2>

        <!-- Pricing Table -->
        <div class="pricing-table-wrapper mt-8 mb-20">
            <!-- Desktop Table -->
            <div class="hidden md:block">
                <div class="grid grid-cols-4 text-center i">
                    <!-- Empty top-left cell -->
                    <div class="border-b-2 border-r-2 border-black"></div>

                    <!-- Table Headers -->
                    <div class="border-b-2 border-r-2 border-black font-semibold flex items-center justify-center">
                        <p><?php echo get_field('package_1_name') ?: 'Course Only'; ?></p>
                    </div>
                    <div class="border-b-2 border-r-2 border-black font-semibold flex items-center justify-center">
                        <p><?php echo get_field('package_2_name') ?: 'Course + 2<br>Coaching Sessions'; ?></p>
                    </div>
                    <div class="border-b-2  border-black font-semibold flex items-center justify-center">
                        <p><?php echo get_field('package_3_name') ?: 'Course + Unlimited<br>Coaching Sessions'; ?></p>
                    </div>

                    <!-- Lifetime course access -->
                    <div class="border-b-2 border-r-2  py-2 border-black flex items-center font-medium">
                        <p>Lifetime course access</p>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>

                    <!-- All bonuses -->
                    <div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
                        <p>All bonuses</p>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>

                    <!-- Lifetime course updates -->
                    <div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
                        <p>Lifetime course updates</p>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>

                    <!-- Private "Write Like Me" GPT -->
                    <div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
                        <p>Private "Write Like Me" GPT</p>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <div class="w-8 h-0.5 bg-black"></div>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>

                    <!-- Custom category research -->
                    <div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
                        <p>Custom category research</p>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <div class="w-8 h-0.5 bg-black"></div>
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>

                    <!-- Zoom strategycalls -->
                    <div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
                        <p>Zoom strategycalls</p>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <div class="w-8 h-0.5 bg-black"></div>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <span class="font-medium">2 x 60 min</span>
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <span class="font-medium">Unlimited</span>
                    </div>

                    <!-- Recordings & AI summaries -->
                    <div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
                        <p>Recordings & AI summaries</p>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <div class="w-8 h-0.5 bg-black"></div>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png" alt="Included"
                            class="w-8 h-8">
                    </div>

                    <!-- Availability -->
                    <div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
                        <p>Availability</p>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <span class="font-medium"><?php echo get_field('package_1_availability') ?: 'Open'; ?></span>
                    </div>
                    <div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
                        <span
                            class="font-medium"><?php echo get_field('package_2_availability') ?: '7 spots left'; ?></span>
                    </div>
                    <div class=" border-b-2 py-2 border-black  flex justify-center items-center">
                        <span
                            class="font-medium"><?php echo get_field('package_3_availability') ?: '2 spots left -<br>application only'; ?></span>
                    </div>

                    <!-- Price (today) -->
                    <div class=" border-r-2 py-2 border-black flex items-center font-medium">
                        <p>Price (today)</p>
                    </div>
                    <div class="border-r-2 py-2 border-black  flex justify-center items-center flex-col">
                        <p class="text-gray-400 line-through text-lg">
                            $<?php echo get_field('package_1_regular_price') ?: '897'; ?></p>
                        <p class="font-bold text-2xl">$<?php echo get_field('package_1_sale_price') ?: '497'; ?></p>
                    </div>
                    <div class="border-r-2  py-2 border-black  flex justify-center items-center flex-col">
                        <p class="text-gray-400 line-through text-lg">
                            $<?php echo get_field('package_2_regular_price') ?: '1,997'; ?></p>
                        <p class="font-bold text-2xl">$<?php echo get_field('package_2_sale_price') ?: '1,497'; ?></p>
                    </div>
                    <div class="  py-2 border-black  flex justify-center items-center flex-col">
                        <p class="text-gray-400 line-through text-lg">
                            $<?php echo get_field('package_3_regular_price') ?: '12,997'; ?></p>
                        <p class="font-bold text-2xl">$<?php echo get_field('package_3_sale_price') ?: '9,997'; ?></p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class=""></div>
                    <div class=" py-5 px-5 ">
                        <a href="<?php echo get_field('package_1_button_link') ?: '#'; ?>" class="btn-red mx-auto">
                            <?php echo get_field('package_1_button_text') ?: 'Start Watching Now'; ?>
                        </a>
                        <?php if (get_field('package_1_under_link')): ?>
                            <a href="<?php echo get_field('package_1_under_link'); ?>"
                                class="block text-center mt-2 text-sm underline italic">
                                <?php echo get_field('package_1_under_text'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class=" py-5 px-5 ">
                        <a href="<?php echo get_field('package_2_button_link') ?: '#'; ?>" class="btn-red mx-auto">
                            <?php echo get_field('package_2_button_text') ?: 'Start Watching Now'; ?>
                        </a>
                        <?php if (get_field('package_2_under_link')): ?>
                            <a href="<?php echo get_field('package_2_under_link'); ?>" class="block text-center mt-2 text-sm underline italic>
                                <?php echo get_field('package_2_under_text'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class=" py-5 px-5 ">
                        <a href=" <?php echo get_field('package_3_button_link') ?: '#'; ?>" class="btn-red mx-auto">
                            <?php echo get_field('package_3_button_text') ?: 'Schedule a Free Call'; ?>
                        </a>
                        <?php if (get_field('package_3_under_link')): ?>
                            <a href="<?php echo get_field('package_3_under_link'); ?>"
                                class="block text-center mt-2 text-sm underline italic">
                                <?php echo get_field('package_3_under_text'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Mobile Table -->
            <div class="block md:hidden space-y-8">
                <!-- Course Only -->
                <div class="border border-black rounded-lg overflow-hidden">
                    <div class="text-center font-bold py-4 border-b border-black bg-gray-50">
                        <?php echo get_field('package_1_name') ?: 'Course Only'; ?>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Lifetime course access</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>All bonuses</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Lifetime course updates</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-0.5 bg-black"></div>
                            <span>Private "Write Like Me" GPT</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-0.5 bg-black"></div>
                            <span>Custom category research</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-0.5 bg-black"></div>
                            <span>Zoom strategycalls</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-0.5 bg-black"></div>
                            <span>Recordings & AI summaries</span>
                        </div>
                        <div class="flex items-center gap-2 font-medium">
                            <span>Open</span>
                        </div>
                    </div>
                    <div class="border-t border-black p-4 text-center">
                        <p class="text-gray-400 line-through">
                            $<?php echo get_field('package_1_regular_price') ?: '897'; ?></p>
                        <p class="font-bold text-2xl mb-3">$<?php echo get_field('package_1_sale_price') ?: '497'; ?>
                        </p>
                        <a href="<?php echo get_field('package_1_button_link') ?: '#'; ?>"
                            class="bg-red-600 text-white font-bold py-3 px-4 rounded-md inline-block text-sm">
                            <?php echo get_field('package_1_button_text') ?: 'Start Watching Now'; ?>
                        </a>
                    </div>
                </div>

                <!-- Course + 2 Coaching Sessions -->
                <div class="border border-black rounded-lg overflow-hidden">
                    <div class="text-center font-bold py-4 border-b border-black bg-gray-50">
                        <?php echo get_field('package_2_name') ?: 'Course + 2<br>Coaching Sessions'; ?>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Lifetime course access</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>All bonuses</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Lifetime course updates</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Private "Write Like Me" GPT</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Custom category research</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium">2 x 60 min</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Recordings & AI summaries</span>
                        </div>
                        <div class="flex items-center gap-2 font-medium">
                            <span>7 spots left</span>
                        </div>
                    </div>
                    <div class="border-t border-black p-4 text-center">
                        <p class="text-gray-400 line-through">
                            $<?php echo get_field('package_2_regular_price') ?: '1,997'; ?></p>
                        <p class="font-bold text-2xl mb-3">$<?php echo get_field('package_2_sale_price') ?: '1,497'; ?>
                        </p>
                        <a href="<?php echo get_field('package_2_button_link') ?: '#'; ?>"
                            class="bg-red-600 text-white font-bold py-3 px-4 rounded-md inline-block text-sm">
                            <?php echo get_field('package_2_button_text') ?: 'Start Watching Now'; ?>
                        </a>
                    </div>
                </div>

                <!-- Course + Unlimited Coaching Sessions -->
                <div class="border border-black rounded-lg overflow-hidden">
                    <div class="text-center font-bold py-4 border-b border-black bg-gray-50">
                        <?php echo get_field('package_3_name') ?: 'Course + Unlimited<br>Coaching Sessions'; ?>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Lifetime course access</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>All bonuses</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Lifetime course updates</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Private "Write Like Me" GPT</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Custom category research</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium">Unlimited</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
                                alt="Included" class="w-3 h-3 sm:w-6 sm:h-6">
                            <span>Recordings & AI summaries</span>
                        </div>
                        <div class="flex items-center gap-2 font-medium">
                            <span>2 spots left - application only</span>
                        </div>
                    </div>
                    <div class="border-t border-black p-4 text-center">
                        <p class="text-gray-400 line-through">
                            $<?php echo get_field('package_3_regular_price') ?: '12,997'; ?></p>
                        <p class="font-bold text-2xl mb-3">$<?php echo get_field('package_3_sale_price') ?: '9,997'; ?>
                        </p>
                        <a href="<?php echo get_field('package_3_button_link') ?: '#'; ?>"
                            class="bg-red-600 text-white font-bold py-3 px-4 rounded-md inline-block text-sm">
                            <?php echo get_field('package_3_button_text') ?: 'Schedule a Free Call'; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Pricing Table -->
    </div>
</section>