<section class="">
    <div class="rotate-180">
        <?php get_template_part('template-parts/ui/section-divider'); ?>
    </div>
    <div class="container py-[60px] sm:py-[100px]">
        <h2
            class="font-repo font-extrabold text-[28px] heading-primary sm:text-[32px] lg:text-[55px] mb-[24px] sm:mb-[32px] text-center">
            <?php echo get_field('final_cta_title') ?: 'Ready to become a bestselling author?'; ?>
        </h2>
        <p class="font-medium text-base sm:text-lg text-center mb-[30px] sm:mb-[41px]">
            <?php echo get_field('final_cta_text') ?: 'Enroll now by clicking on one of the course packages and start your journey today.'; ?>
        </p>

        <div class="flex justify-center">
            <a href="#packages" class="btn-red">Choose Your Package</a>
        </div>

        <h2
            class="font-repo mt-[60px] sm:mt-[106px] font-extrabold text-[28px] sm:text-[32px] lg:text-[55px] mb-[24px] sm:mb-[32px] text-center">
            <?php echo get_field('final_cta_unsure_title') ?: 'Still unsure?'; ?>
        </h2>
        <div class="font-medium text-base sm:text-lg text-center">
            <?php echo get_field('final_cta_unsure_text') ?: 'Email me at <a href="mailto:hassan@writerontheside.com">hassan@writerontheside.com</a> with any questions or concerns you may have.'; ?>
        </div>
    </div>
    <?php get_template_part('template-parts/ui/section-divider'); ?>
</section>