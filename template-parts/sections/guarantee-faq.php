<section class="py-[30px] sm:py-[57px]  bg-[#20201D] relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor-patient-2.png" alt="Doctor and patient"
        class="absolute inset-0 w-full h-full object-cover opacity-10" />
    <div class="container relative z-[1]">
        <div class="w-[200px] sm:w-[250px] aspect-square mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4ws.png" alt="Doctor and patient" />
        </div>
        <div class="max-w-[1000px] mx-auto text-center text-white">
            <h2 class="font-repo font-extrabold text-[32px] sm:text-[55px] mb-[35px] sm:mb-[55px]">
                <?php echo get_field('guarantee_title') ?: '30-Day Money-Back Guarantee'; ?>
            </h2>
            <p class="mb-[25px] sm:mb-[35px] text-sm sm:text-base">
                <?php echo get_field('guarantee_text_1') ?: 'If you\'re not satisfied for any reason within 30 days of starting the course, I guarantee that you\'ll get 100% percent of your money back.'; ?>
            </p>
            <p class="mb-[25px] sm:mb-[35px] text-sm sm:text-base">
                <?php echo get_field('guarantee_text_2') ?: 'I\'ll even pay the processing fees (i.e., I\'ll pay the ~15% platform & credit card fees, so I would literally lose money with this guarantee).'; ?>
            </p>
            <p class="mb-[25px] sm:mb-[35px] text-sm sm:text-base">
                <?php echo get_field('guarantee_text_3') ?: 'That\'s how confident I am that this will be a valuable experience for you.'; ?>
            </p>
        </div>
        <div class="testimonial-card my-[40px] sm:my-[68px] items-center">
            <div class="testimonial-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-15.png"
                    alt="People faces #15">
            </div>

            <div class="testimonial-content">
                <p>"I really enjoyed the course because the delivery of the lectures is fun, thoughtful and very
                    practical. <span>The whole course is geared towards action,</span> gaining momentum and pushes
                    you to write your book. Hassan is a great teacher and shares his experience openly and candidly.
                    <span>Don't think about it, buy the course!"</span>
                </p>
                <p class="testimonial-author">Jose Torres, Partner at Lexia Abogados
                </p>
            </div>
        </div>
        <div class="course-accordions mt-6 sm:mt-8 mb-8 sm:mb-12">
            <h2 class="font-repo font-extrabold text-[32px] sm:text-[55px] mb-[35px] sm:mb-[55px] text-white text-center"
                id="faqs">
                <?php echo get_field('faq_section_title') ?: 'FAQs'; ?>
            </h2>
            <?php
            if (have_rows('faq_items')):
                while (have_rows('faq_items')):
                    the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                    ?>
                    <div
                        class="course-accordion border-[#3B393933] <?php echo get_row_index() === 1 ? 'active' : ''; ?> text-white bg-[#3B3939]">
                        <div class="course-accordion-header">
                            <div class="flex items-center">
                                <div
                                    class="course-accordion-week w-[55px] sm:w-[65px] h-[55px] sm:h-[65px] flex justify-center items-center p-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/faq-icon.svg"
                                        alt="FAQ icon" class="w-full h-full">
                                </div>
                                <h3 class="course-accordion-title text-sm sm:text-base"><?php echo $question; ?></h3>
                            </div>

                            <svg class="course-accordion-icon" width="29" height="11" viewBox="0 0 29 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.7126 0.268523L1.16749 9.43521C0.677553 9.79314 0.677553 10.3736 1.16758 10.7316C1.65752 11.0895 2.45181 11.0895 2.94175 10.7315L14.5998 2.21302L26.2585 10.7316C26.7484 11.0895 27.5427 11.0895 28.0326 10.7315C28.2776 10.5526 28.4 10.318 28.4 10.0834C28.4 9.84875 28.2776 9.61414 28.0325 9.43515L15.4868 0.268523C15.2515 0.0965557 14.9324 0 14.5997 0C14.267 0 13.9479 0.0965557 13.7126 0.268523Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="course-accordion-content">
                            <div class="course-accordion-body border-white">
                                <p class="text-sm sm:text-base"><?php echo $answer; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>

        <div class="testimonial-card mt-[18px] sm:mt-[23px] items-center">
            <div class="testimonial-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-16.png"
                    alt="People faces #16">
            </div>

            <div class="testimonial-content">
                <p>"This course is incredibly comprehensive, covering everything you need to know about publishing
                    on Amazon without feeling overwhelmed. <span>The lifetime access and bonuses make it well worth
                        the investment.</span> Hassan is an exceptional instructor, providing clear explanations and
                    attentive support. The course helped me overcome obstacles and make progress. I highly recommend
                    it."</span>
                </p>
                <p class="testimonial-author">Carol Polack, Founder of Dolphin Rock Solutions
                </p>
            </div>
        </div>
        <div class="testimonial-card mt-[18px] sm:mt-[23px] items-center">
            <div class="testimonial-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-17.png"
                    alt="People faces #17">
            </div>

            <div class="testimonial-content">
                <p>"Hassan's course is the real deal! He provides <span>a detailed, supportive framework for
                        actually finishing a book and ensuring it has the best chance of being seen in the
                        marketplace.</span> He showed us different ways to think about how to write a book that
                    sells and pare it all down to just the essentials that bring the most benefit. I'm very grateful
                    for all the wisdom he's distilled into this course."
                </p>
                <p class="testimonial-author">Jose Torres, Partner at Lexia Abogados
                </p>
            </div>
        </div>
        <div class="testimonial-card mt-[18px] sm:mt-[23px] items-center">
            <div class="testimonial-avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-18.png"
                    alt="People faces #18">
            </div>

            <div class="testimonial-content">
                <p>"I highly recommend Hassan's course. It was exceptionally well-constructed and delivered, packed
                    with practical tips that make the writing process clear and manageable. <span>I found his
                        approach to getting at and refining the book title a gamechanger for me,</span> making the
                    entire project feel focused and achievable. The course is extremely useful and <span>worth every
                        penny."</span></span>
                </p>
                <p class="testimonial-author">Michael Klein, General Manager at Sanofi Genzyme
                </p>
            </div>
        </div>
    </div>
</section>