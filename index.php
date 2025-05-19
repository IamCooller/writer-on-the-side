<?php get_header(); ?>
<main class="main min-h-screen">

	<section class="max-lg:bg-[#F9F8F6]">
		<div class="container">
			<div class="grid lg:grid-cols-2  items-center">
				<div class="relative max-lg:order-1 max-lg:mt-[33px]">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-img.png" alt="Hero image"
						class="w-full h-full object-cover">
					<div
						class="absolute bottom-[22px] sm:bottom-[40px] left-0 w-full flex items-center gap-[14px] sm:gap-[28px]">
						<div
							class=" bg-gradient-to-br from-[#C4C4C4]/40 to-[#C4C4C4]/20 rounded-[8px] border border-white  py-[11px] sm:py-[18px] px-[14px] sm:px-[21px] text-white max-w-[280px] backdrop-blur-2xl">
							<p class="font-bold text-xl mb-[11px]">Hassan Osman</p>
							<p class="font-dm-sans font-medium text-base italic">Amazon #1 Bestselling Author
								of 20+ Books on the Side</p>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/agold-author.png"
							alt="Hero image" class="w-[90px] sm:w-[122px] aspect-square">
					</div>
				</div>
				<div class=" max-lg:mt-[31px] max-lg:text-center">
					<h1
						class="font-repo font-extrabold  text-[40px] lg:text-[69px] leading-none lg:leading-[80px] mb-[35px] lg:mb-4">
						Write a Bestselling Book in 4
						Weeks
					</h1>

					<p class="text-base lg:text-xl lg:mb-[31px]"><b>Learn how to write, publish, and sell a high-quality
							bestselling
							nonfiction book on the side</b> (using AI tools to write it quickly and in your own voice)
					</p>

					<p class="text-base lg:text-xl mb-[20px] lg:mb-[32px]"><b>Even if you don't have a lot of time,
							don't know where
							to start, and don't
							have a topic yet (without having a social media following).</b></p>

					<div class="flex items-center bg-[#EDEDED]
						 drop-shadow-lg
						 rounded-[8px] w-full lg:w-fit p-[6px] sm:py-[7px] sm:px-[11px] sm:pr-[27px] justify-between gap-[9px]">
						<div class="flex items-center relative">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/37.png" alt="Hero image"
								class="relative z-[1] max-sm:max-w-[58px]" />
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/39.png" alt="Hero image"
								class="relative z-[2] -ml-4 max-sm:max-w-[58px]" />
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/40.png" alt="Hero image"
								class="relative z-[3] -ml-4 max-sm:max-w-[58px]" />
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/47.png" alt="Hero image"
								class="relative z-[4] -ml-4 max-sm:max-w-[58px]" />
						</div>
						<div class="space-y-[5px]">
							<div class="flex gap-2">
								<div
									class=" font-dm-sans leading-[31px] sm:leading-[1] font-bold text-lg sm:text-[27px]">
									4.9/5.0</div>
								<div class="flex items-center">
									<div class="flex items-center gap-[7px]">
										<?php for ($i = 0; $i < 5; $i++) { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg"
												alt="Hero image"
												class="w-[18px] sm:w-[25px] h-[18px] sm:h-[25px] shrink-0" />
										<?php } ?>

									</div>
								</div>
							</div>
							<p
								class="font-dm-sans italic font-medium text-base sm:text-[21px] text-[#5C5C5C] text-left">
								750+
								Happy Students
							</p>
						</div>

					</div>
					<a href="#packages" class="mt-5  sm:mt-8 btn-red ">Explore
						Packages</a>
				</div>

			</div>
		</div>
		<div class="container mt-[31px]">
			<p class="font-semibold text-[26px] w-full text-center leading-[31px] mb-8">AS SEEN ON:</p>
			<div class="flex flex-wrap gap-x-[73px] gap-y-[23px] justify-center">

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
						'<img src="%s/assets/img/%s" class="h-[30px] w-auto" alt="%s">',
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
	<section class="py-[57px]  bg-[#20201D] relative overflow-hidden">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor-patient.png" alt="Doctor and patient"
			class="absolute inset-0 w-full h-full object-cover opacity-10" />
		<div class="container relative z-[1]">
			<h2 class="font-repo font-extrabold text-[55px] leading-[65px] mb-[36px] text-center text-white">Publish a
				Business
				Card on
				Steroids <br />
				(Not Just a Book)</h2>
			<div class="max-w-[1000px] mx-auto text-white text-center text-lg font-medium">
				<p class=" mb-[32px]">The 4-Week "Write Your Book on the Side" System is an online course for busy
					employees, coaches, and entrepreneurs who have limited time and are interested in quickly publishing
					their first nonfiction book to use as a business card on steroids.</p>
				<p class="mb-[18px]">It's for ambitious thought leaders who want to:</p>
				<ol class="list-decimal list-inside space-y-4 mb-[22px]">
					<li>Improve their brand & credibility (and elevate their careers)</li>
					<li>Make some money on the side</li>
					<li>Accomplish a personal goal</li>
					<li>Upsell other services or products (coaching, speaking, consulting, digital products, etc.)</li>
					<li>Find a new job or get new clients</li>
				</ol>
				<p>Or all of the above.</p>
			</div>
			<div
				class="max-w-[900px] mx-auto bg-[#FFFEF7] rounded-[12px] border-[3px] border-black flex gap-[27px] p-[40px] mt-[68px] relative">
				<div class=" shrink-0 w-[132px] h-[132px] bg-[#20201D] rounded-full">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-1.png"
						alt="People faces #1" />
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/rounded-red-line.png"
					alt="Rounded red line"
					class="absolute -top-6 -right-4 w-[85%] h-[170px] object-fill pointer-events-none" />
				<div class="relative z-[1]">
					<div class="space-y-[19px]">

						<p>This course helped me <span class="bg-[#FFF5A5]">go from never having published a book to
								being a bestselling author in four categories—in just 4 weeks!</span> From coming up
							with an idea to launching it to my email list, this course covers it all.</p>

						<p>Hassan's step-by-step system made the entire process much easier and honestly, I couldn't
							have
							done it without him. What I loved most about the course were the Custom GPTs for
							brainstorming
							and outlining, the accountability, and the launch checklist.</p>
						<p>All you need is expertise and some time on your hands, <span class="bg-[#FFF5A5]">and you can
								be published in the upcoming
								weeks.</span> If you've ever dreamed of becoming an author, but just didn't know how, I
							highly
							recommend this course.</p>
					</div>
					<p class="mt-[24px] font-dm-sans italic text-[17px]">Michael vom Feld, Bestselling author of “Von 0
						auf Examen”
						(“From 0 to Exam”)
					</p>
				</div>
			</div>
			<h2 class="font-repo font-extrabold text-[55px] leading-[65px] mb-[36px] text-center text-white mt-[69px]">
				What will you get?</h2>
			<div class="max-w-[1000px] mx-auto text-white text-center text-lg font-medium space-y-8">
				<p>You'll get a step-by-step blueprint that covers everything from A to Z about how to self-publish a
					short book on Amazon Kindle Direct Publishing (KDP) in just 4 weeks.</p>
				<p>You can follow along to get your book published during those 4 weeks, or you can take a bit more time
					and work at your own pace.</p>
				<p>The course covers everything from picking the right topic to coming up with a killer title, using
					market intelligence to your advantage, writing and publishing your book quickly, and marketing it to
					bestseller status.</p>
				<p>This is a repeatable system that you can use to also publish your second, third, and
					fourth book in the future.</p>
			</div>
			<div
				class="max-w-[900px] mx-auto bg-[#FFFEF7] rounded-[12px] border-[3px] border-black flex gap-[27px] p-[40px] mt-[68px] relative">
				<div class=" shrink-0 w-[132px] h-[132px] bg-[#20201D] rounded-full">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-2.png"
						alt="People faces #2" />
				</div>

				<div class="relative z-[1]">
					<p>“The 4-Week System truly helped me break through the overwhelm of writing a book while managing a
						busy schedule. The clear, step-by-step approach allowed me to map out my ideas and maintain a
						strong focus on what mattered most, moving me from concept to draft in record time. <span
							class="bg-[#FFF5A5]">I was able to publish not just one, but three books as a result of this
							course.</span> This course is an invaluable resource for anyone balancing a demanding
						workload and writing aspirations!”</p>
					<p class="mt-[34px] font-dm-sans italic text-[17px]">Taz Brown, Enterprise Transformation Coach
					</p>
				</div>
			</div>
			<a href="#packages" class="mt-5  sm:mt-6 btn-red mx-auto">Explore
				Packages</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>