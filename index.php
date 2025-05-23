<?php get_header(); ?>
<main class="main min-h-screen overflow-x-hidden">

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
			<h2 class="heading-primary mb-[36px] text-center text-white">
				Publish a
				Business
				Card on
				Steroids <br />
				(Not Just a Book)</h2>
			<div class="max-w-[1000px] mx-auto text-white text-center text-sm lg:text-lg font-medium">
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
			<div class="testimonial-card mt-[68px]">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-1.png"
						alt="People faces #1" />
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/rounded-red-line.png"
					alt="Rounded red line"
					class="absolute top-[25%] lg:-top-6 max-lg:left-0 lg:-right-4 w-full lg:w-[85%]  lg:h-[170px] object-fill pointer-events-none" />
				<div class="testimonial-content">
					<div class="space-y-[19px]">

						<p>This course helped me <span class="testimonial-highlight">go from never having published a
								book to
								being a bestselling author in four categories—in just 4 weeks!</span> From coming up
							with an idea to launching it to my email list, this course covers it all.</p>

						<p>Hassan's step-by-step system made the entire process much easier and honestly, I couldn't
							have
							done it without him. What I loved most about the course were the Custom GPTs for
							brainstorming
							and outlining, the accountability, and the launch checklist.</p>
						<p>All you need is expertise and some time on your hands, <span
								class="testimonial-highlight">and you can
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
			<h2 class="heading-primary mb-[36px] mt-[69px] text-center text-white">
				What will you get?</h2>
			<div class="max-w-[1000px] mx-auto text-white text-center text-sm lg:text-lg font-medium space-y-8">
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
			<div class="testimonial-card mt-[68px] items-center">
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
			<a href="#packages" class="mt-5  sm:mt-6 btn-red mx-auto">Explore
				Packages</a>
		</div>
	</section>
	<section>

		<div class=" rotate-180">
			<?php get_template_part('template-parts/ui/section-divider'); ?>
		</div>

		<div class="container py-[121px]">
			<div class=" text-center max-w-[900px] mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/quill.png" alt="Book cover"
					class="block mx-auto" />
				<h2 class="heading-primary mb-[5px] mt-[19px]">
					Achieve your dream of <br /> becoming an author</h2>
				<p class="font-repo text-[22px] font-bold mb-[28px]">(Or you'll get your money back - no questions
					asked)</p>
				<p class="text-lg font-medium leading-[30px] mb-[34px]">I'll show you the <b>exact system</b> I've used
					to
					write <b>over 20+
						books,</b> including <b>9 Amazon</b> <b>Bestsellers</b>, while <b>working demanding full-time
						jobs</b> and balancing family
					life (and without having a large social media following).</p>
				<p class="font-repo text-[22px] font-bold">Here are some of the books I've published</p>
			</div>

			<div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 gap-9 mt-[57px] mb-[99px]">
				<div class="relative">
					<div
						class="absolute top-0 translate-y-[-30%] translate-x-[30%] right-0 w-[47px] sm:w-[91px] aspect-square">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/books/Featured.png"
							alt="featured" />
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/books/29.png" alt="Book covers"
						class="w-full h-auto" />
				</div>

			</div>
			<div class="text-center max-w-[900px] mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ai-icon.png" alt="ai icon"
					class="block mx-auto" />
				<h2 class="heading-primary mb-[23px] mt-[19px]">
					Use AI as an Assistant, NOT as a Replacement
				</h2>
				<div class="text-lg font-medium leading-[30px] mb-[34px] space-y-4">
					<p>You'll learn how to use AI tools (primarily ChatGPT) to effortlessly research, generate ideas,
						draft
						detailed outlines, and market your book.</p>

					<p>You'll also learn how to use <b>custom GPTs</b> (i.e. customized versions of ChatGPT) that will
						help
						<b>you write your book quickly</b> and <b>in your own style</b> (don't worry if this sounds
						confusing; I'll walk you through all of that in the course and you don't need prior technical
						experience).
					</p>

					<p>To clarify, the course is <b>not</b> about creating a generic ChatGPT-based book to make a few
						dollars. This is about mindfully writing and publishing a book you'll be proud of. So the AI
						tools
						you'll use will not sacrifice the book's quality. And most importantly, those AI tools will be
						used
						to assist you in writing, and not to replace your writing.</p>
				</div>

			</div>
			<div class="testimonial-card mt-[20px] items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-3.png"
						alt="People faces #3" class="w-full h-auto" />
				</div>

				<div class="testimonial-content">
					<p>"This course exceeded my expectations in every way! Hassan went above and beyond, delivering
						invaluable, unique content that truly set this program apart. <span
							class="testimonial-highlight">The custom
							GPT tools he created were a game-changer — from
							the book title generator to the outline generator, and even an AI-powered tool to draft
							the book itself.</span> These resources made the process efficient and inspiring.
						Without a doubt, this course is an outstanding investment for anyone looking to write a book
						quickly and effectively. Highly recommended!"</p>
					<p class="testimonial-author">Terry Schmidt, Founder & President of Management Pro
					</p>
				</div>
			</div>
			<a href="#packages" class="mt-5  sm:mt-6 btn-red mx-auto">Explore
				Packages</a>
		</div>
		<?php get_template_part('template-parts/ui/section-divider'); ?>
	</section>
	<section class="py-[57px]  bg-[#20201D] relative overflow-hidden">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reasons-bg.png" alt="Reasons bg"
			class="absolute inset-0 w-full h-full object-cover opacity-10" />
		<div class="container relative z-[1]">
			<h2 class="heading-primary mb-12 text-center text-white">
				Three Reasons Why This Course is Unique
			</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
				<div
					class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 pt-[35px] pb-[56px] px-3 text-white">
					<div
						class="reason-icon-bg w-[79px] aspect-square mx-auto drop-shadow-lg rounded-[8px] p-4 mb-[23px]">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/book-icon.svg" alt="book" />
					</div>
					<div class="text-center font-bold text-[25px] mb-[47px]">
						<p>"Business Card on Steroids"</p>
						<p>VS</p>
						<p>"Just a Book"</p>
					</div>
					<p class="text-lg font-medium">This course focuses on building an asset that will open up many
						opportunities for you. It'll be like having a business card on steroids that will elevate your
						status and make you more money because of your book (i.e., via opportunities) than from your
						book (i.e., via royalties). I have received multiple job offers, speaking engagements,
						conference invites, and media shout-outs all because of my books. The course focuses on picking
						the right topic and title to maximize the "business card on steroids" effect for you.</p>
				</div>
				<div
					class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 pt-[35px] pb-[56px] px-3 text-white">
					<div
						class="reason-icon-bg w-[79px] aspect-square mx-auto drop-shadow-lg rounded-[8px] p-4 mb-[23px]">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/goal-icon.svg" alt="goal" />
					</div>
					<div class="text-center font-bold text-[25px] mb-[47px]">
						<p>"80/20"</p>
						<p>VS</p>
						<p> "Every Tactic Under the Sun"</p>
					</div>
					<p class="text-lg font-medium">There are hundreds of tactics and strategies that you can use to
						write and market your book. If you apply every tactic under the sun, there's a good chance
						you'll be quite successful. But as a busy working professional, you probably don't have the time
						to do everything. We'll focus on the 80/20, or the 20% of tactics that bring you 80% of the
						results. In other words, the course focus on the stuff that really matters.</p>
				</div>
				<div
					class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 pt-[35px] pb-[56px] px-3 text-white">
					<div
						class="reason-icon-bg w-[79px] aspect-square mx-auto drop-shadow-lg rounded-[8px] p-4 mb-[23px]">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/horn.svg" alt="horn" />
					</div>
					<div class="text-center font-bold text-[25px] mb-[47px]">
						<p>"Platform Marketing" </p>
						<p>VS</p>
						<p>"Me Marketing"</p>
					</div>
					<p class="text-lg font-medium">Instead of relying on your own social media followers and personal
						network to market your book, this course will leverage Amazon to market the book for you. We'll
						focus on optimizing your book for Amazon's platform so that you can maximize your book's
						visibility and reach for organic marketing (this is the strategy I've followed for years, and it
						has resulted in over 120,000 downloads of my books).</p>
				</div>

			</div>
			<a href="#packages" class="mt-5  sm:mt-6 btn-red mx-auto">Explore
				Packages</a>
		</div>
	</section>
	<section>
		<div class="rotate-180">
			<?php get_template_part('template-parts/ui/section-divider'); ?>
		</div>
		<div class="container pt-[150px]">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/crowd-icon.png" alt="Crowd"
				class="w-[100px] mx-auto mb-5" />
			<h2 class="heading-primary mb-12 text-center">
				What People are Saying
			</h2>

			<div class="swiper-container testimonials-slider-container">
				<div class="swiper testimonials-slider">
					<div class="swiper-wrapper">
						<!-- Slide 1 -->
						<div class="swiper-slide">
							<div class="testimonial-card items-center">
								<div class="testimonial-avatar">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-2.png"
										alt="People faces #2" />
								</div>

								<div class="testimonial-content">
									<p>"The 4-Week System truly helped me break through the overwhelm of writing a book
										while managing a
										busy schedule. The clear, step-by-step approach allowed me to map out my ideas
										and maintain a
										strong focus on what mattered most, moving me from concept to draft in record
										time. <span class="testimonial-highlight">I was able to publish not just one,
											but three books as a
											result of this
											course.</span> This course is an invaluable resource for anyone balancing a
										demanding
										workload and writing aspirations!"</p>
									<p class="testimonial-author">Taz Brown, Enterprise Transformation Coach
									</p>
								</div>
							</div>
						</div>

						<!-- Slide 2 -->
						<div class="swiper-slide">
							<div class="testimonial-card items-center">
								<div class="testimonial-avatar">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-1.png"
										alt="People faces #1" />
								</div>

								<div class="testimonial-content">
									<p>"This course helped me <span class="testimonial-highlight">go from never having
											published a book to
											being a bestselling author in four categories—in just 4 weeks!</span> From
										coming up
										with an idea to launching it to my email list, this course covers it all.</p>

									<p>Hassan's step-by-step system made the entire process much easier and honestly, I
										couldn't
										have done it without him. What I loved most about the course were the Custom
										GPTs for
										brainstorming and outlining, the accountability, and the launch checklist.</p>
									<p class="testimonial-author">Michael vom Feld, Bestselling author of "Von 0 auf
										Examen"
										("From 0 to Exam")
									</p>
								</div>
							</div>
						</div>

						<!-- Slide 3 -->
						<div class="swiper-slide">
							<div class="testimonial-card items-center">
								<div class="testimonial-avatar">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-3.png"
										alt="People faces #3" />
								</div>

								<div class="testimonial-content">
									<p>"This course exceeded my expectations in every way! Hassan went above and beyond,
										delivering
										invaluable, unique content that truly set this program apart. <span
											class="testimonial-highlight">The custom
											GPT tools he created were a game-changer — from
											the book title generator to the outline generator, and even an AI-powered
											tool to draft
											the book itself.</span> These resources made the process efficient and
										inspiring.
										Without a doubt, this course is an outstanding investment for anyone looking to
										write a book
										quickly and effectively. Highly recommended!"</p>
									<p class="testimonial-author">Terry Schmidt, Founder & President of Management Pro
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Navigation -->
				<div class="swiper-nav swiper-prev testimonials-slider-prev testimonials-slider-nav">
					<svg width="19" height="53" viewBox="0 0 19 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M0.463835 28.3509L16.2972 51.9342C16.9154 52.8553 17.918 52.8553 18.5364 51.9341C19.1546 51.0131 19.1546 49.5199 18.5363 48.5988L3.82251 26.683L18.5364 4.76613C19.1546 3.84509 19.1546 2.35192 18.5363 1.43089C18.2272 0.970367 17.822 0.740185 17.4167 0.740185C17.0115 0.740185 16.6063 0.970367 16.2971 1.43104L0.463835 25.0156C0.1668 25.4579 2.28882e-05 26.0577 2.28882e-05 26.6832C2.28882e-05 27.3086 0.1668 27.9086 0.463835 28.3509Z"
							fill="black" />
					</svg>

				</div>
				<div class="swiper-nav swiper-next testimonials-slider-next testimonials-slider-nav">
					<svg width="19" height="53" viewBox="0 0 19 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M18.5362 25.0124L2.70282 1.42904C2.08458 0.508003 1.08201 0.508003 0.463667 1.42919C-0.154573 2.35023 -0.154573 3.84341 0.463772 4.76444L15.1775 26.6802L0.463667 48.5972C-0.154573 49.5182 -0.154573 51.0114 0.463772 51.9324C0.77284 52.3929 1.17807 52.6231 1.5833 52.6231C1.98853 52.6231 2.39375 52.3929 2.70293 51.9322L18.5362 28.3476C18.8332 27.9054 19 27.3055 19 26.6801C19 26.0546 18.8332 25.4547 18.5362 25.0124Z"
							fill="black" />
					</svg>

				</div>

				<!-- Pagination -->
				<div class="swiper-pagination testimonials-slider-pagination"></div>
			</div>
		</div>

	</section>
	<section>
		<div class="container pb-[110px]">
			<div class="mt-[104px] max-w-[900px] mx-auto text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar-icon.png"
					class="w-[100px] mx-auto mb-5" alt="Calendar icon" />
				<h2 class="heading-primary text-center">
					How realistic is it to write a full book in just 4 weeks?
				</h2>
				<p class="font-bold font-repo text-lg py-[22px]">It's very realistic</p>
				<p>In fact, you can do it in less than 4 weeks. I've written three books, and each one took me <b>1 week
						or less</b> to write and publish them (I explain how in the course).</p>
				<p class="mt-[27px]">Here's why this is feasible for you:</p>
			</div>
			<div class="flex flex-wrap justify-center gap-[74px] mt-[45px]">
				<div class="">
					<div
						class="reason-icon-bg w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-4 mb-[24px] text-[62px] text-white font-repo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/1.svg" alt="#1" />

					</div>
					<p class="text-center uppercase">We'll focus on a <br /> <b>small problem</b></p>
				</div>
				<div class="">
					<div
						class="reason-icon-bg w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-4 mb-[24px] text-[62px] text-white font-repo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/2.svg" alt="#2" />


					</div>
					<p class="text-center uppercase">We'll write a <br /> <b>short book</b></p>
				</div>
				<div class="">
					<div
						class="reason-icon-bg w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-4 mb-[24px] text-[62px] text-white font-repo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/3.svg" alt="#3" />
						</svg>


					</div>
					<p class="text-center uppercase">We'll apply the <br /> <b>80/20 rule</b></p>
				</div>
				<div class="">
					<div
						class="reason-icon-bg w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-4 mb-[24px] text-[62px] text-white font-repo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/4.svg" alt="#4" />


					</div>
					<p class="text-center uppercase">We'll use AI to <br /> <b>write it quickly</b></p>
				</div>
				<div class="">
					<div
						class="reason-icon-bg w-[132px] aspect-square mx-auto drop-shadow-lg rounded-[14px] flex items-center justify-center p-4 mb-[24px] text-[62px] text-white font-repo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/numbers/5.svg" alt="#5" />


					</div>
					<p class="text-center uppercase">We'll publish an <br /> <b>ebook first*</b></p>
				</div>
			</div>
			<p class="max-w-[900px] text-center mx-auto my-[45px] text-lg">To be clear, this is an intensive program and
				you'll
				need to work hard
				to complete the tasks during those four weeks (there is no magic button—even with all the advanced AI
				tools today—nothing can write the whole book for you). How fast you can get your book done also depends
				on your comfort level and prior experience.</p>
			<p class="max-w-[900px] text-center mx-auto my-[45px] text-lg text-[#585853]">*While it's possible to also
				publish paperback and
				audiobook versions in 4 weeks, those usually take more time to prepare, so the course focuses on getting
				your ebook version published first, and you can publish other formats later if you want
				(the course covers that as well)</p>

			<div class="testimonial-card items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-4.png"
						alt="People faces #4" />
				</div>

				<div class="testimonial-content">
					<p>"The course <span>helped me to overcome the initial inertia</span> and confront the daunting task
						of focusing my ambition on a fascinating subject in a manageable way. Hassan's sharing of
						practical examples and insights, and <span>his focus on the 20 percent that gets you 80 percent
							of the results, were extremely helpful.</span> I recommend this course to anyone who needs
						support to get started and who wants to learn the tools and mindsets needed to get a first book
						done on the side."</p>
					<p class="testimonial-author">Ingo Rauth, Ph.D., Senior Consultant, Design and Facilitation
					</p>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/ui/section-divider'); ?>
	</section>
	<section class="py-[57px]  bg-[#20201D] relative overflow-hidden">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor-patient.png" alt="Doctor and patient"
			class="absolute inset-0 w-full h-full object-cover opacity-10" />
		<div class="container relative z-[1] ">
			<h2 class="heading-primary mb-[36px] text-center text-white ">
				Can't write & publish the book in 4 weeks?</h2>
			<p class="font-bold font-repo text-lg py-[22px] text-center text-white">That's totally fine!</p>
			<div class="max-w-[1000px] mx-auto text-white text-center text-sm lg:text-lg font-medium">
				<p class=" mb-[32px]">In fact, many people don't publish their book in 4 weeks because they have
					pressing family & work commitments. You can learn the entire system and publish your book at your
					own pace. It's better to take a bit more time to create a great book than publish something just for
					the sake of publishing it.</p>
				<p class="mb-[18px]">The good news is that you'll get:</p>

			</div>

			<div class="grid lg:grid-cols-2 gap-[30px]">
				<div
					class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 py-[23px] text-white px-[37px]">
					<div class="flex items-center gap-4 mb-[23px]">
						<div
							class="reason-icon-bg w-[79px] aspect-square mx-auto drop-shadow-lg flex items-center justify-center rounded-[8px] shrink-0 p-4 ">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/infinity-icon.svg"
								alt="infinity" />
						</div>
						<p class="text-[30px] font-bold flex-1">Lifetime Access</p>
					</div>
					<p class="text-lg font-medium">You will have lifetime access to all the recordings and bonuses, so
						you can reference them at a time that's most convenient for you.</p>
				</div>
				<div
					class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 py-[23px]  text-white px-[37px]">
					<div class="flex items-center gap-4 mb-[23px]">
						<div
							class="reason-icon-bg w-[79px] aspect-square mx-auto drop-shadow-lg flex items-center justify-center rounded-[8px] shrink-0 p-4 ">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/repear-icon.svg"
								alt="repear icon" />
						</div>
						<p class="text-[30px] font-bold flex-1">A Repeatable System</p>
					</div>
					<p class="text-lg font-medium">You will learn a system that you can repeat later. So even if your
						first book takes longer than 4 weeks to write and publish, your second one will take you a lot
						less time (and your third even less).</p>
				</div>
			</div>

			<div class="testimonial-card mt-[68px] items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-5.png"
						alt="People faces #5" />
				</div>

				<div class="testimonial-content">
					<p>"Hassan shares his knowledge so <span>you don't have to figure this stuff out by yourself.</span>
						He is busy like me and has 20 books under his belt, so learning how I can do this "on the side"
						was important to me. And I will be able to take this information and use it for other books.
						<span>If you are on the fence, get off and join the course</span> and get your book out there."
					</p>
					<p class="testimonial-author">Kim D. Snyder, Founder of MORE Business in a Box
					</p>
				</div>
			</div>
			<h2 class="heading-primary mb-[36px] mt-[69px] text-center text-white">
				What are the prerequisites to join?</h2>
			<p class="text-center text-white text-lg font-medium mb-5">Here are the two mandatory & optional
				prerequisites to
				join the course:</p>
			<div class="grid lg:grid-cols-2 gap-[30px]">
				<div
					class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 py-[23px] text-white px-[37px]">
					<div class="flex items-center gap-4 mb-[23px]">
						<div
							class="reason-icon-bg w-[79px] aspect-square mx-auto drop-shadow-lg flex items-center justify-center rounded-[8px] shrink-0 p-4 ">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kdp-icon.png" alt="kdp" />
						</div>
						<p class="text-[30px] font-bold flex-1">KDP Account [Mandatory]</p>
					</div>
					<p class="text-lg font-medium">You'll need to open a free Amazon Kindle Direct Publishing (KDP)
						account. If you're based out of the US, this shouldn't be a problem because you can use your
						SSN, EIN or TIN. But if you reside outside the US, please confirm you can create an account on
						the KDP website here (this is for Amazon tax purposes and to ensure you can get paid for your
						book sales).</p>
				</div>
				<div
					class="reason-card-bg backdrop-blur-sm rounded-[8px] border border-white/10 py-[23px] text-white px-[37px]">
					<div class="flex items-center gap-4 mb-[23px]">
						<div
							class="reason-icon-bg w-[79px] aspect-square mx-auto drop-shadow-lg flex items-center justify-center rounded-[8px] shrink-0 p-4 ">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gpt-icon.svg"
								alt="gpt icon" />
						</div>
						<p class="text-[30px] font-bold flex-1">ChatGPT Plus [Optional]</p>
					</div>
					<p class="text-lg font-medium">You'll need an optional subscription to ChatGPT Plus (currently at
						$20 per month). You don't need to have this because you can follow the course by using a free
						ChatGPT account, but the free account is usually slow and has messaging limits. (As a side note,
						you can pay for only 1 month for ChatGPT Plus and then unsubscribe)</p>
				</div>
			</div>
			<div class="testimonial-card mt-[68px] items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-6.png"
						alt="People faces #6" />
				</div>

				<div class="testimonial-content">
					<p>"Taking Hassan's course has been a transformative experience in my journey as a writer. This
						course provided me with the structure, motivation, and practical tools I needed to finally start
						and finish my first book, something I had been dreaming of for years but never knew how to
						accomplish. <span>My favorite part of the course were the action items, tools, and bonuses he
							provided weekly.</span> These kept me on track and provided a sense of accomplishment as I
						progressed. Hassan's expertise, generosity, and the supportive environment he fosters are
						invaluable."</p>
					<p class="testimonial-author">Cenmar Fuertes, Founder & CEO at Sparkle Restoration Services, Inc.
					</p>
				</div>
			</div>
			<a href="#packages" class="mt-5  sm:mt-6 btn-red mx-auto">Explore
				Packages</a>
		</div>
	</section>
	<section>

		<div class="rotate-180">
			<?php get_template_part('template-parts/ui/section-divider'); ?>
		</div>

		<div class="container">
			<div class="text-center max-w-[900px] mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ai-icon.png" alt="ai icon"
					class="block mx-auto" />
				<h2 class="heading-primary mb-[23px] mt-[19px]">
					What's Covered in the Course?
				</h2>
				<div class="text-lg font-medium leading-[30px] mb-[34px] space-y-4">
					<p>This is a self-paced online course that you can watch at your own convenience.
						Every week for four weeks, you'll get a new set of videos to watch and access to special tools
						and bonuses that will help you write your book quickly.</p>
				</div>
				<p class="text-center font-repo text-lg font-bold mb-[20px]">Here's an overview of what's covered every
					week.</p>


			</div>
			<div class="course-accordions mt-8 mb-12">
				<!-- Week 1 -->
				<div class="course-accordion active">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div class="course-accordion-week">Week 1</div>
							<h3 class="course-accordion-title">Kickstart Your Author Journey - The Big Picture,
								Choosing Your Topic, and Using AI</h3>
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
							<ul class="course-accordion-list">
								<li>How to think about your book as a business card on steroids (and rule #1)</li>
								<li>Amazon vs. other platforms and how Amazon really works (pros & cons).</li>
								<li>How to write your book in 4 weeks (big picture step-by-step plan)</li>
								<li>How to start thinking about marketing before you write your book</li>
								<li>Pricing models and how much money you can make</li>
								<li>How to choose a general topic and pick the right title</li>
								<li>How to create a winning outline structure that makes people want to read your book
								</li>
								<li>Kickstarting your use of AI with ChatGPT for research and idea generation</li>
								<li>Logistics & how to access and use the bonuses of the course</li>
								<li>[Optional but recommended]: Deep dive into crafting a killer title & subtitle for
									your book</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Week 2 -->
				<div class="course-accordion">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div class="course-accordion-week">Week 2</div>
							<h3 class="course-accordion-title">Title & Outline Finalization and Using Custom GPTs to
								Write Your Book Quickly
							</h3>
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
							<ul class="course-accordion-list">
								<li>Creating a detailed chapter-by-chapter outline</li>
								<li>Different writing approaches and finding your writing style</li>
								<li>Using AI to help you write efficiently while maintaining your voice</li>
								<li>Setting up your writing environment for maximum productivity</li>
								<li>Scheduling techniques to make consistent progress</li>
								<li>Accountability tools and progress tracking</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Week 3 -->
				<div class="course-accordion">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div class="course-accordion-week">Week 3</div>
							<h3 class="course-accordion-title">Editing, Formatting, Designing a Cover, and Publishing
								Your Book</h3>
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
							<ul class="course-accordion-list">
								<li>Self-editing techniques and tools</li>
								<li>Working with beta readers to improve your manuscript</li>
								<li>Book formatting best practices</li>
								<li>Creating an effective book cover</li>
								<li>Writing compelling book descriptions and author bios</li>
								<li>Setting up your Amazon KDP account properly</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Week 4 -->
				<div class="course-accordion">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div class="course-accordion-week">Week 4</div>
							<h3 class="course-accordion-title">Launching Your Book, Gathering Reviews, and Marketing It
							</h3>
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
							<ul class="course-accordion-list">
								<li>Building pre-launch excitement</li>
								<li>Amazon bestseller launch strategy</li>
								<li>Maximizing Amazon's algorithm for ongoing sales</li>
								<li>Using your book to generate leads and opportunities</li>
								<li>Expanding to paperback and audiobook formats</li>
								<li>Strategies for using your book to grow your business or career</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="course-accordion">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div class="course-accordion-week">Week 5 (Bonus)</div>
							<h3 class="course-accordion-title">Strategies to Follow After Publishing Your Book</h3>
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
							<ul class="course-accordion-list">
								<li>Building pre-launch excitement</li>
								<li>Amazon bestseller launch strategy</li>
								<li>Maximizing Amazon's algorithm for ongoing sales</li>
								<li>Using your book to generate leads and opportunities</li>
								<li>Expanding to paperback and audiobook formats</li>
								<li>Strategies for using your book to grow your business or career</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonial-card my-[68px] items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-7.png"
						alt="People faces #7">
				</div>

				<div class="testimonial-content">
					<p>"This course is incredibly comprehensive, covering everything you need to know about publishing
						on Amazon without feeling overwhelmed. <span>The lifetime access and bonuses make it well worth
							the investment.</span> Hassan is an exceptional instructor, providing clear explanations and
						attentive support. The course helped me overcome obstacles and make progress. I highly recommend
						it."</p>
					<p class="testimonial-author">Gillian Leithman, Ph.D., Chief Behavior Scientist at Rewire to Retire
					</p>
				</div>
			</div>

			<div class="text-center max-w-[900px] mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/book-2-icon.svg" alt="ai icon"
					class="block mx-auto" />
				<h2 class="heading-primary mb-[23px] mt-[19px]">
					A Little About Me
				</h2>

				<p class="text-lg font-bold leading-[33px] mb-[25px]">20+ Books | 120,000+ Downloads | 9 Bestsellers</p>

				<p class="font-medium mt-[25px] mb-[40px]">My name is Hassan Osman and I'm an author on the side. I've
					published over 20 books on Amazon in 4 different categories (including 9 Amazon Bestsellers), all
					while working demanding full-time jobs.</p>
				<p class="text-center font-repo text-lg font-bold mb-[20px]">Because of my books, I've been featured in
					the media and received multiple career opportunities.</p>
			</div>
			<div class="relative py-8">

				<div class="flex items-center justify-center max-lg:flex-col">

					<!-- Left Column: Profile Picture -->
					<div class="flex-shrink-0 flex flex-col items-center text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-8.png"
							alt="Hassan Osman" class="block mx-auto object-cover w-[267px] aspect-square" />
						<p class="font-medium text-[22px] sm:text-[25px] mt-3">Hassan Osman</p>
					</div>


					<div class="relative flex flex-col gap-16">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-1.png"
							class="w-[161px] aspect-square max-lg:rotate-90" alt="arrow pointing to featured content" />

						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-2.png"
							class="w-[161px] aspect-square max-lg:hidden" alt="arrow pointing to work history" />
					</div>

					<!-- Right Column: "Featured in" and "Worked at" boxes -->
					<div class="w-full max-w-[740px] flex flex-col gap-6 xl:gap-[21px] pl-6">
						<!-- Featured In Box -->
						<div class="featured-in-box">
							<h3 class="font-extrabold font-repo text-[20px] sm:text-[24px] md:text-[38px] text-center">
								Featured in</h3>
							<div
								class="bg-[#FFFEF7] border-[3px] border-black py-[19px] sm:py-5 px-5 sm:px-[33px] rounded-[12px]">
								<div
									class="flex flex-wrap justify-center items-center gap-x-4 sm:gap-x-6 md:gap-x-8 gap-y-3 sm:gap-y-4">
									<?php // Ensure these logo files exist in /assets/img/logos/ ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/1.png"
										alt="The Wall Street Journal"
										class="h-6 sm:h-7 md:h-8 lg:h-[41px] object-contain" />
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/2.png"
										alt="Forbes" class="h-6 sm:h-7 md:h-8 lg:h-[51px] object-contain" />
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/3.png"
										alt="Entrepreneur" class="h-6 sm:h-7 md:h-8 lg:h-[51px] object-contain" />
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/4.png"
										alt="Reader\'s Digest" class="h-6 sm:h-7 md:h-8 lg:h-[66px] object-contain" />

									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/5.png"
										alt="American Express"
										class="h-6 sm:h-7 md:h-8 lg:h-[106px] object-contain aspect-square" />
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/6.png"
										alt="Bloomberg" class="h-6 sm:h-7 md:h-8 lg:h-[39px] object-contain" />
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/7.png"
										alt="MarketWatch" class="h-6 sm:h-7 md:h-8 lg:h-[37px] object-contain" />
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/8.png"
										alt="U.S. News" class="h-6 sm:h-7 md:h-8 lg:h-[53px] object-contain" />
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/9.png"
										alt="Success" class="h-6 sm:h-7 md:h-8 lg:h-[48px] object-contain" />
								</div>
							</div>
						</div>

						<!-- Worked At Box -->
						<div class="worked-at-box">
							<h3 class="font-extrabold font-repo text-[20px] sm:text-[24px] md:text-[38px] text-center">
								Worked at</h3>
							<div
								class="bg-[#FFFEF7] border-[3px] border-black py-[19px] sm:py-5 px-5 sm:px-[33px] rounded-[12px]">
								<div
									class="grid grid-cols-3 gap-x-1 sm:gap-x-2 md:gap-x-[55px] gap-y-3 place-items-center">
									<?php // Ensure these logo files exist in /assets/img/logos/ ?>
									<div class="flex flex-col justify-center items-center text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/10.png"
											alt="EY" class="h-8 sm:h-9 md:h-10 lg:h-[132px] object-contain " />
										<div class="text-center font-repo font-semibold text-xl">
											<p>Manager</p>
											<p>(Consulting)</p>
										</div>
									</div>
									<div class="flex flex-col justify-center items-center text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/11.png"
											alt="Cisco" class="h-8 sm:h-9 md:h-10 lg:h-[124px] object-contain " />
										<div class="text-center font-repo font-semibold text-xl">
											<p>Director</p>
											<p>(PMO)</p>
										</div>
									</div>
									<div class="flex flex-col justify-center items-center text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/12.png"
											alt="nwn carousel" class="h-8 sm:h-9 md:h-10 lg:h-[95px] object-contain " />
										<div class="text-center font-repo font-semibold text-xl">
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
	<section class="pt-[74px]">
		<div class="container">
			<p class="max-w-[900px] mx-auto text-lg font-medium mb-16 text-center">In this course, I'll share
				everything
				I
				learned from all those great writers and from my 18+ years of experience creating, marketing, and
				selling
				successful books on the side.</p>
			<p class="max-w-[676px] mx-auto text-lg font-medium mb-16 text-center">One of my bestselling books is called
				"Write Your Book on the Side," and here's what a few folks have said about it.</p>

			<div class="book-testimonials-container relative mb-24">
				<!-- Center Book -->
				<div class="book-center relative mx-auto max-w-[321px] z-10">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Featured-book.png"
						alt="Write Your Book on the Side" class="w-full h-auto" />
				</div>

				<!-- Top Left Testimonial -->
				<div class="testimonial-box absolute top-0 left-0 max-w-[400px]">
					<div class="flex items-center gap-3">

						<div class="testimonial-quote text-sm">
							<p class="font-medium">"This book completely challenged my misconceptions and
								deeply motivated me to write a book myself"</p>
							<p class="font-bold">- Dr. Haytham Kaafarani, Professor of Surgery,
								Harvard Medical School</p>
						</div>
						<div class="testimonial-circle shrink-0">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-9.png"
								alt="Dr. Haytham Kaafarani" class="w-[141px] aspect-square" />
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-3.png" alt="Arrow"
						class="arrow-to-book absolute -top-10 right-[-100px] w-[147px]" />
				</div>

				<!-- Top Right Testimonial -->
				<div class="testimonial-box absolute top-0 right-0 max-w-[400px]">
					<div class="flex items-center gap-3">
						<div class="testimonial-circle shrink-0">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-10.png"
								alt="Dave Stachowiak" class="w-[141px] aspect-square" />
						</div>
						<div class="testimonial-quote text-sm">
							<p class="font-medium ">"Publishing your own book will help you clarify the
								message you want the world to hear. This concise, smart read shows you exactly how to do
								it."</p>
							<p class="font-bold">- Dave Stachowiak, Host of Coaching for Leaders</p>
						</div>

					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-4.png" alt="Arrow"
						class="arrow-to-book absolute -top-5 left-[-100px] w-[118px]" />
				</div>

				<!-- Middle Left Testimonial -->
				<div class="testimonial-box absolute top-1/3 left-0 max-w-[400px]">
					<div class="flex items-center gap-3">
						<div class="testimonial-circle shrink-0">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-11.png"
								alt="Teresa Chahine" class="w-[141px] aspect-square" />
						</div>
						<div class="testimonial-quote text-sm">
							<p class="font-medium">"Why didn't anyone create something like this before? I
								wish I had this guide when I was writing my book!"</p>
							<p class="font-bold">- Teresa Chahine, Senior Lecturer, Yale University</p>
						</div>
					</div>
				</div>

				<!-- Middle Right Testimonial -->
				<div class="testimonial-box absolute top-1/3 right-0 max-w-[400px]">
					<div class="flex items-center gap-3">
						<div class="testimonial-quote text-sm">
							<p class="font-medium">"I've thought about writing a non-fiction book for a
								while, and have decided to start using Hassan's book as a step-by-step guide. It's
								perfect for a first-time writer."</p>
							<p class="font-bold">- Karan Mishra, Principal at EY</p>
						</div>
						<div class="testimonial-circle shrink-0">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-12.png"
								alt="Karan Mishra" class="w-[141px] aspect-square" />
						</div>
					</div>
				</div>

				<!-- Bottom Left Testimonial -->
				<div class="testimonial-box absolute bottom-0 left-0 max-w-[400px]">
					<div class="flex items-center gap-3">

						<div class="testimonial-quote text-sm">
							<p class="font-medium">"This book made MY book a bestseller. It contained the
								step-by-step assistance I had been looking for."</p>
							<p class="font-bold">- Russ Hill, Author of "Decide to Lead"</p>
						</div>
						<div class="testimonial-circle shrink-0">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-13.png"
								alt="Russ Hill" class="w-[141px] aspect-square" />
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-5.png" alt="Arrow"
						class="arrow-to-book absolute -bottom-10 right-[-100px] w-[147px]" />
				</div>

				<!-- Bottom Right Testimonial -->
				<div class="testimonial-box absolute bottom-0 right-0 max-w-[400px]">

					<div class="flex items-center gap-3">
						<div class="testimonial-circle shrink-0">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-14.png"
								alt="Tucker Matheson" class="w-[141px] aspect-square" />
						</div>
						<div class="testimonial-quote text-sm">
							<p class="font-medium">"This is an amazing playbook for first-time authors."
							</p>
							<p class="font-bold">- Tucker Matheson, Co-CEO at Markacy</p>
						</div>

					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-6.png" alt="Arrow"
						class="arrow-to-book absolute -bottom-10 left-[-100px] w-[147px]" />
				</div>
			</div>

			<a href="#packages" class="btn-red mx-auto mb-20">Explore Packages</a>
		</div>
		<?php get_template_part('template-parts/ui/section-divider'); ?>
	</section>
	<section class="py-[57px]  bg-[#20201D] relative overflow-hidden text-white">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bonuses-bg.png" alt="Bonuses background"
			class="absolute top-0 left-0 w-full h-full object-cover" />
		<div class="container relative z-[1]">
			<h2 class="heading-primary  text-center mb-[50px]">Bonuses (Free with Your Purchase)</h2>
			<div class="space-y-[23px]">
				<div
					class=" bg-gradient-to-br from-[#3B3939] to-[#3B3939]/30 rounded-[8px] border border-[#504F4F]/30 backdrop-blur-[10px] p-[19px] flex gap-[33px]">
					<div class=" h-full">
						<div
							class="reason-icon-bg w-[79px] aspect-square mx-auto drop-shadow-xl flex items-center justify-center rounded-[8px] shrink-0 p-4 ">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kdp-icon.png" alt="kdp"
								class="w-[60px] aspect-square" />
						</div>
					</div>
					<div class="py-5">
						<p class="font-bold text-[25px] leading-[30px] mb-[10px]">Bonus #1: "How to Pick a Bestselling
							Book Title" Framework ($60 Value)</p>
						<p class="font-medium text-lg leading-[28px] mb-[17px]">A framework that helps you pick a
							nonfiction book title that readers want to buy. This will be a deep-dive, step-by-step
							process on how to come up with an outcome statement and how to narrow the audience & topic
							of your book (everything will hinge on getting your title right, so this will be a super
							important bonus)</p>
						<p class="italic text-lg leading-[28px]">Note: You'll get access to this bonus right after week
							1.</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section>
		<div class="rotate-180">
			<?php get_template_part('template-parts/ui/section-divider'); ?>
		</div>
		<div class="container pt-[172px]">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hand-icon.svg" alt="hand icon"
				class="block mx-auto" />
			<h2 class="heading-primary mb-[23px] mt-[19px] text-center">
				Choose One of Three Packages
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
							<p>Course Only</p>
						</div>
						<div class="border-b-2 border-r-2 border-black font-semibold flex items-center justify-center">
							<p>Course + 2<br>Coaching Sessions</p>
						</div>
						<div class="border-b-2  border-black font-semibold flex items-center justify-center">
							<p>Course + Unlimited<br>Coaching Sessions</p>
						</div>

						<!-- Lifetime course access -->
						<div class="border-b-2 border-r-2  py-2 border-black flex items-center font-medium">
							<p>Lifetime course access</p>
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class=" border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>

						<!-- All bonuses -->
						<div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
							<p>All bonuses</p>
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class=" border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>

						<!-- Lifetime course updates -->
						<div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
							<p>Lifetime course updates</p>
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class=" border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>

						<!-- Private "Write Like Me" GPT -->
						<div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
							<p>Private "Write Like Me" GPT</p>
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<div class="w-8 h-0.5 bg-black"></div>
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class=" border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>

						<!-- Custom category research -->
						<div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
							<p>Custom category research</p>
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<div class="w-8 h-0.5 bg-black"></div>
						</div>
						<div class=" border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class=" border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
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
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>
						<div class=" border-b-2 py-2 border-black  flex justify-center items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
								alt="Included" class="w-8 h-8">
						</div>

						<!-- Availability -->
						<div class="border-b-2 border-r-2 py-2 border-black flex items-center font-medium">
							<p>Availability</p>
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<span class="font-medium">Open</span>
						</div>
						<div class="border-r-2 border-b-2 py-2 border-black  flex justify-center items-center">
							<span class="font-medium">7 spots left</span>
						</div>
						<div class=" border-b-2 py-2 border-black  flex justify-center items-center">
							<span class="font-medium">2 spots left -<br>application only</span>
						</div>

						<!-- Price (today) -->
						<div class=" border-r-2 py-2 border-black flex items-center font-medium">
							<p>Price (today)</p>
						</div>
						<div class="border-r-2 py-2 border-black  flex justify-center items-center flex-col">
							<p class="text-gray-400 line-through text-lg">$897</p>
							<p class="font-bold text-2xl">$497</p>
						</div>
						<div class="border-r-2  py-2 border-black  flex justify-center items-center flex-col">
							<p class="text-gray-400 line-through text-lg">$1,997</p>
							<p class="font-bold text-2xl">$1,497</p>
						</div>
						<div class="  py-2 border-black  flex justify-center items-center flex-col">
							<p class="text-gray-400 line-through text-lg">$12,997</p>
							<p class="font-bold text-2xl">$9,997</p>
						</div>

						<!-- CTA Buttons -->
						<div class=""></div>
						<div class=" py-5 px-5 ">
							<a href="#" class="btn-red">
								Start Watching Now
							</a>
						</div>
						<div class=" py-5 px-5 ">
							<a href="#" class="btn-red">
								Start Watching Now
							</a>
						</div>
						<div class=" py-5 px-5 ">
							<a href="#" class="btn-red">
								Schedule a Free Call
							</a>
						</div>
					</div>
				</div>

				<!-- Mobile Table -->
				<div class="block md:hidden space-y-8">
					<!-- Course Only -->
					<div class="border border-black rounded-lg overflow-hidden">
						<div class="text-center font-bold py-4 border-b border-black bg-gray-50">
							Course Only
						</div>
						<div class="p-4 space-y-3">
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
								<span>Lifetime course access</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
								<span>All bonuses</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
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
							<p class="text-gray-400 line-through">$897</p>
							<p class="font-bold text-2xl mb-3">$497</p>
							<a href="#"
								class="bg-red-600 text-white font-bold py-3 px-4 rounded-md inline-block text-sm">
								Start Watching Now
							</a>
						</div>
					</div>

					<!-- Course + 2 Coaching Sessions -->
					<div class="border border-black rounded-lg overflow-hidden">
						<div class="text-center font-bold py-4 border-b border-black bg-gray-50">
							Course + 2<br>Coaching Sessions
						</div>
						<div class="p-4 space-y-3">
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
								<span>Lifetime course access</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
								<span>All bonuses</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
								<span>Lifetime course updates</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
								<span>Private "Write Like Me" GPT</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
								<span>Custom category research</span>
							</div>
							<div class="flex items-center gap-2">
								<span class="font-medium">2 x 60 min</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-6 h-6">
								<span>Recordings & AI summaries</span>
							</div>
							<div class="flex items-center gap-2 font-medium">
								<span>7 spots left</span>
							</div>
						</div>
						<div class="border-t border-black p-4 text-center">
							<p class="text-gray-400 line-through">$1,997</p>
							<p class="font-bold text-2xl mb-3">$1,497</p>
							<a href="#"
								class="bg-red-600 text-white font-bold py-3 px-4 rounded-md inline-block text-sm">
								Start Watching Now
							</a>
						</div>
					</div>

					<!-- Course + Unlimited Coaching Sessions -->
					<div class="border border-black rounded-lg overflow-hidden">
						<div class="text-center font-bold py-4 border-b border-black bg-gray-50">
							Course + Unlimited<br>Coaching Sessions
						</div>
						<div class="p-4 space-y-3">
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-[46px] h-[37px]">
								<span>Lifetime course access</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-[46px] h-[37px]">
								<span>All bonuses</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-[46px] h-[37px]">
								<span>Lifetime course updates</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-[46px] h-[37px]">
								<span>Private "Write Like Me" GPT</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-[46px] h-[37px]">
								<span>Custom category research</span>
							</div>
							<div class="flex items-center gap-2">
								<span class="font-medium">Unlimited</span>
							</div>
							<div class="flex items-center gap-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark.png"
									alt="Included" class="w-[46px] h-[37px]">
								<span>Recordings & AI summaries</span>
							</div>
							<div class="flex items-center gap-2 font-medium">
								<span>2 spots left - application only</span>
							</div>
						</div>
						<div class="border-t border-black p-4 text-center">
							<p class="text-gray-400 line-through">$12,997</p>
							<p class="font-bold text-2xl mb-3">$9,997</p>
							<a href="#"
								class="bg-red-600 text-white font-bold py-3 px-4 rounded-md inline-block text-sm">
								Schedule a Free Call
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Pricing Table -->
	</section>
	<section class="pt-20">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/package-icon.svg" alt="package icon"
				class="block mx-auto" />
			<h2 class="heading-primary mb-[23px] mt-[19px] text-center">
				Package Details
			</h2>
			<p class="text-center max-w-[686px] mx-auto">Here’s exactly what each option includes so you can choose the
				level of support that fits your goals and budget.</p>

			<div class="course-accordions mt-8 mb-12">
				<div class="course-accordion active">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div
								class="course-accordion-week  flex items-center justify-center h-[63px] min-w-[63px]  px-2 py-0">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star-2.svg" alt="1"
									class="w-6 h-6">
							</div>
							<h3 class="course-accordion-title">Course Only</h3>
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
							<ul class="course-accordion-list">
								<li><b>Lifetime access</b> to the 4‑Week Write Your Book on the Side System course
									(self‑paced). Start Week 1 today; fresh modules unlock every 7 days.</li>
								<li><b>All bonuses included</b> (frameworks, prompts, checklists, specialized GPTs,
									etc.).</li>
								<li>Lifetime course updates so you always have the latest AI and KDP tactics.</li>
								<li><b>DIY format:</b> no email support, no 1‑on‑1 calls, and no manuscript
									feedback—perfect if you prefer to work independently at your own pace.</li>
								<li>Want personal help later? <b>You can upgrade within 12 months.</b> The price you pay
									today is credited in full to any other package if coaching seats remain and at the
									then‑current price.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="course-accordion">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div
								class="course-accordion-week  flex items-center justify-center h-[63px] min-w-[63px] px-2 py-0">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star-2.svg" alt="1"
									class="w-6 h-6"><img
									src="<?php echo get_template_directory_uri(); ?>/assets/img/star-2.svg" alt="1"
									class="w-6 h-6">
							</div>
							<h3 class="course-accordion-title">Course + 2 Coaching Sessions</h3>
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
							<ul class="course-accordion-list">
								<li><b>Lifetime access</b> to the 4‑Week Write Your Book on the Side System course
									(self‑paced). Start Week 1 today. Fresh modules unlock every 7 days.</li>
								<li><b>All bonuses included</b> (frameworks, prompts, checklists, specialized GPTs,
									etc.).</li>
								<li><b>Lifetime course updates</b> so you always have the latest AI and KDP tactics.
								</li>
								<li><b>Two private Zoom coaching sessions</b> (60 min each): Use them to refine your
									title, manuscript, launch plan, or anything else related to your book.</li>
								<li>Sessions can be scheduled any time in the first 6 months after purchase, but most
									people book the first call in weeks 1‑2 and the second call right before publishing
									in week 4.</li>
								<li>Recordings & AI summaries for each coaching session with be provided for easy
									reference.</li>
								<li>No ongoing email support. All questions are handled live on the calls so you get
									focused, actionable feedback.</li>
								<li><b>Private "Write Like Me" Custom GPT ($250 Value):</b> I will personally create a
									"Write Like Me" custom GPT for you that you can use to write your book in your own
									voice (I'll just need previous samples of your writing style so I can load them in
									the GPT). You'll get access to this right after week 2.</li>
								<li><b>Custom Category Research ($250 Value):</b> I will personally research Amazon KDP
									book category selections to help your book hit the No. 1 Amazon Bestseller list.
									You'll get access to this whenever you're ready to publish your book.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="course-accordion">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div
								class="course-accordion-week  flex items-center justify-center h-[63px] min-w-[63px] px-2 py-0">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star-2.svg" alt="1"
									class="w-6 h-6"><img
									src="<?php echo get_template_directory_uri(); ?>/assets/img/star-2.svg" alt="1"
									class="w-6 h-6"><img
									src="<?php echo get_template_directory_uri(); ?>/assets/img/star-2.svg" alt="1"
									class="w-6 h-6">
							</div>
							<h3 class="course-accordion-title">Course + Unlimited Coaching Sessions</h3>
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
							<ul class="course-accordion-list">
								<li><b>Lifetime access</b> to the 4‑Week Write Your Book on the Side System course
									(self‑paced). Start Week 1 today. Fresh modules unlock every 7 days.</li>
								<li><b>All bonuses included</b> (frameworks, prompts, checklists, specialized GPTs,
									etc.).</li>
								<li><b>Lifetime course updates</b> so you always have the latest AI and KDP tactics.
								</li>
								<li><b>UNLIMITED private Zoom coaching sessions (60 min each)</b> until you get your
									first book published. Use them to refine your title, manuscript, launch plan, or
									anything else related to your book. You can book calls as often as you need for
									brainstorming, live edits, or even launch support.</li>
								<li>Sessions can be scheduled any time in the first 12 months after purchase or after
									your first book is published (whichever comes first).</li>
								<li>Recordings & AI summaries for each coaching session with be provided for easy
									reference.</li>
								<li>No ongoing email support. All questions are handled live on the calls so you get
									focused, actionable feedback.</li>
								<li><b>Private "Write Like Me" Custom GPT ($250 Value):</b> I will personally create a
									"Write Like Me" custom GPT for you that you can use to write your book in your own
									voice (I'll just need previous samples of your writing style so I can load them in
									the GPT). You'll get access to this right after week 2.</li>
								<li><b>Custom Category Research ($250 Value):</b> I will personally research Amazon KDP
									book category selections to help your book hit the No. 1 Amazon Bestseller list.
									You'll get access to this whenever you're ready to publish your book.</li>
								<li><i>Please note: Due to the intensive nature of this package, availability is by
										application. Feel free to schedule a free with me first to confirm fit and
										reserve your slot.</i></li>
							</ul>
						</div>
					</div>
				</div>




			</div>
		</div>
		<?php get_template_part('template-parts/ui/section-divider'); ?>

	</section>

	<section class="py-[57px]  bg-[#20201D] relative overflow-hidden">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor-patient-2.png" alt="Doctor and patient"
			class="absolute inset-0 w-full h-full object-cover opacity-10" />
		<div class="container relative z-[1]">
			<div class="w-[250px] aspect-square mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/4ws.png" alt="Doctor and patient" />
			</div>
			<div class="max-w-[1000px] mx-auto text-center text-white">
				<h2 class="font-repo font-extrabold text-[55px] mb-[55px]">30-Day Money-Back Guarantee</h2>
				<p class="mb-[35px]">If you're not satisfied for any reason within 30 days of starting the course, I
					guarantee that you'll get 100% percent of your money back.</p>
				<p class="mb-[35px]">I'll even pay the processing fees (i.e., I'll pay the ~15% platform & credit card
					fees, so I would literally lose money with this guarantee).</p>
				<p class="mb-[35px]">That's how confident I am that this will be a valuable experience for you.</p>
			</div>
			<div class="testimonial-card my-[68px] items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-15.png"
						alt="People faces #15">
				</div>

				<div class="testimonial-content">
					<p>“I really enjoyed the course because the delivery of the lectures is fun, thoughtful and very
						practical. <span>The whole course is geared towards action,</span> gaining momentum and pushes
						you to write your book. Hassan is a great teacher and shares his experience openly and candidly.
						<span>Don't think about it, buy the course!”</span>
					</p>
					<p class="testimonial-author">Jose Torres, Partner at Lexia Abogados
					</p>
				</div>
			</div>
			<div class="course-accordions mt-8 mb-12">
				<h2 class="font-repo font-extrabold text-[55px] mb-[55px] text-white text-center">FAQs</h2>
				<div class="course-accordion border-[#3B393933] active text-white bg-[#3B3939]">
					<div class="course-accordion-header">
						<div class="flex items-center">
							<div class="course-accordion-week w-[65px] h-[65px]flex justify-center items-center p-2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/faq-icon.svg"
									alt="FAQ icon" class="w-full h-full">
							</div>
							<h3 class="course-accordion-title">How long is the course and how much time do I need to
								commit each week?</h3>
						</div>

						<svg class="course-accordion-icon" width="29" height="11" viewBox="0 0 29 11" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M13.7126 0.268523L1.16749 9.43521C0.677553 9.79314 0.677553 10.3736 1.16758 10.7316C1.65752 11.0895 2.45181 11.0895 2.94175 10.7315L14.5998 2.21302L26.2585 10.7316C26.7484 11.0895 27.5427 11.0895 28.0326 10.7315C28.2776 10.5526 28.4 10.318 28.4 10.0834C28.4 9.84875 28.2776 9.61414 28.0325 9.43515L15.4868 0.268523C15.2515 0.0965557 14.9324 0 14.5997 0C14.267 0 13.9479 0.0965557 13.7126 0.268523Z"
								fill="white" />
						</svg>

					</div>
					<div class="course-accordion-content ">
						<div class="course-accordion-body border-white">
							<p>The course is around 6 hours in total. This does not include some of the bonuses, which
								include an additional 3 hours of video content. Most students dedicate around 3 to 5
								hours per week to complete the course and work on their book. The beauty of this system
								is its flexibility - you can work during lunch breaks, evenings, or weekends. Remember,
								you have lifetime access, so you can adjust the pace to fit your schedule.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="testimonial-card mt-[23px] items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-16.png"
						alt="People faces #16">
				</div>

				<div class="testimonial-content">
					<p>“This course is incredibly comprehensive, covering everything you need to know about publishing
						on Amazon without feeling overwhelmed. <span>The lifetime access and bonuses make it well worth
							the investment.</span> Hassan is an exceptional instructor, providing clear explanations and
						attentive support. The course helped me overcome obstacles and make progress. I highly recommend
						it.”</span>
					</p>
					<p class="testimonial-author">Carol Polack, Founder of Dolphin Rock Solutions
					</p>
				</div>
			</div>
			<div class="testimonial-card mt-[23px] items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-17.png"
						alt="People faces #17">
				</div>

				<div class="testimonial-content">
					<p>“Hassan's course is the real deal! He provides <span>a detailed, supportive framework for
							actually finishing a book and ensuring it has the best chance of being seen in the
							marketplace.</span> He showed us different ways to think about how to write a book that
						sells and pare it all down to just the essentials that bring the most benefit. I’m very grateful
						for all the wisdom he’s distilled into this course.”
					</p>
					<p class="testimonial-author">Jose Torres, Partner at Lexia Abogados
					</p>
				</div>
			</div>
			<div class="testimonial-card mt-[23px] items-center">
				<div class="testimonial-avatar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-faces-18.png"
						alt="People faces #18">
				</div>

				<div class="testimonial-content">
					<p>“I highly recommend Hassan’s course. It was exceptionally well-constructed and delivered, packed
						with practical tips that make the writing process clear and manageable. <span>I found his
							approach to getting at and refining the book title a gamechanger for me,</span> making the
						entire project feel focused and achievable. The course is extremely useful and <span>worth every
							penny.”</span></span>
					</p>
					<p class="testimonial-author">Michael Klein, General Manager at Sanofi Genzyme
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="">
		<div class="rotate-180">
			<?php get_template_part('template-parts/ui/section-divider'); ?>
		</div>
		<div class="container py-[100px]">
			<h2 class="font-repo font-extrabold text-[55px] mb-[32px] text-center">Ready to become a bestselling author?
			</h2>
			<p class=" font-medium text-lg
 text-center mb-[41px]">Enroll now by clicking on one of the course packages and start your journey today.</p>
			<a href="#packages" class="mt-5 mx-auto   sm:mt-8 btn-red ">Explore
				Packages</a>

			<h2 class="font-repo mt-[106px] font-extrabold text-[55px] mb-[32px] text-center">Still unsure?</h2>
			<p class=" font-medium text-lg
 text-center ">Email me at  <a href="mailto:hassan@writerontheside.com">hassan@writerontheside.com</a> with any
				questions or concerns you may have.</p>
		</div>
		<?php get_template_part('template-parts/ui/section-divider'); ?>

	</section>
</main>

<?php get_footer(); ?>