<section class="pt-20">
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/package-icon.svg" alt="package icon"
            class="block mx-auto" />
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
                                    class="course-accordion-week flex items-center justify-center h-[63px] min-w-[63px] px-2 py-0">
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
                                    d="M13.7126 0.268523L1.16749 9.43521C0.677553 9.79314 0.677553 10.3736 1.16758 10.7316C1.65752 11.0895 2.45181 11.0895 2.94175 10.7315L14.5998 2.21302L26.2585 10.7316C26.7484 11.0895 27.5427 11.0895 28.0326 10.7315C28.2776 10.5526 28.4 10.318 28.4 10.0834C28.4 9.84875 28.2776 9.61414 28.0325 9.43515L15.4868 0.268523C15.2515 0.0965557 14.9324 0 14.5997 0C14.267 0 13.9479 0.0965557 13.7126 0.268523Z"
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