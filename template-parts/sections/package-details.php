<section class="pt-20">
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/package-icon.svg" alt="package icon"
            class="block mx-auto max-sm:w-[100px]" />
        <h2 class="heading-primary mb-[23px] mt-[19px] text-center">
            <?php echo get_field('package_details_title') ?: 'Package Details'; ?>
        </h2>
        <p class="text-center max-w-[686px] mx-auto">
            <?php echo get_field('package_details_subtitle') ?: 'Here\'s exactly what each option includes so you can choose the level of support that fits your goals and budget.'; ?>
        </p>

        <div class="course-accordions mt-8 mb-12">
            <?php
            if (have_rows('package_details')):
                while (have_rows('package_details')):
                    the_row();
                    $package_name = get_sub_field('package_name');
                    $features_content = get_sub_field('features_content');
                    $row_index = get_row_index() + 1;
                    ?>
                    <div class="course-accordion <?php echo $row_index === 1 ? 'active' : ''; ?>">
                        <div class="course-accordion-header">
                            <div class="flex items-center">
                                <div
                                    class="course-accordion-week flex items-center justify-center h-[40px] sm:h-[63px] min-w-[40px] sm:min-w-[63px] px-2 py-0">
                                    <?php for ($i = 0; $i < $row_index; $i++): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star-2.svg" alt="star"
                                            class="w-6 h-6">
                                    <?php endfor; ?>
                                </div>
                                <h3 class="course-accordion-title"><?php echo $package_name; ?></h3>
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
                                <?php echo $features_content; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <?php get_template_part('template-parts/ui/section-divider'); ?>

</section>