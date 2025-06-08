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
            <div class="testimonial-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-1.png"
                    alt="People faces #1" />
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rounded-red-line.png"
                alt="Rounded red line"
                class="absolute top-[25%] lg:-top-6 max-lg:left-0 lg:-right-4 w-full lg:w-[85%]  lg:h-[170px] object-fill pointer-events-none max-lg:hidden" />
            <div class="testimonial-content">
                <div class="space-y-[15px] sm:space-y-[19px]">

                    <p>This course helped me <span class="highlight">go from never having published a
                            book to
                            being a bestselling author in four categories—in just 4 weeks!</span> From coming up
                        with an idea to launching it to my email list, this course covers it all.</p>

                    <p>Hassan's step-by-step system made the entire process much easier and honestly, I couldn't
                        have
                        done it without him. What I loved most about the course were the Custom GPTs for
                        brainstorming
                        and outlining, the accountability, and the launch checklist.</p>
                    <p>All you need is expertise and some time on your hands, <span class="testimonial-highlight">and
                            you can
                            be published in the upcoming
                            weeks.</span> If you've ever dreamed of becoming an author, but just didn't know how, I
                        highly
                        recommend this course.</p>
                </div>
                <p class="testimonial-author">Michael vom Feld, Bestselling author of "Von 0
                    auf Examen"
                    ("From 0 to Exam")
                </p>
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
            <div class="testimonial-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-2.png"
                    alt="People faces #2" />
            </div>

            <div class="testimonial-content">
                <p>"The 4-Week System truly helped me break through the overwhelm of writing a book while managing a
                    busy schedule. The clear, step-by-step approach allowed me to map out my ideas and maintain a
                    strong focus on what mattered most, moving me from concept to draft in record time. <span
                        class="testimonial-highlight">I was able to publish not just one, but three books as a
                        result of this
                        course.</span> This course is an invaluable resource for anyone balancing a demanding
                    workload and writing aspirations!"</p>
                <p class="testimonial-author">Taz Brown, Enterprise Transformation Coach
                </p>
            </div>
        </div>
        <a href="#packages" class="mt-4 sm:mt-5 md:mt-6 btn-red mx-auto">Explore
            Packages</a>
    </div>
</section>