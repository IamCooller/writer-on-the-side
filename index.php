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

		<div class="container pt-[121px]">
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

			<div class="testimonials-slider-container">
				<div class="testimonials-slider">
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
				<div class="testimonials-slider-prev testimonials-slider-nav">
					<svg width="19" height="53" viewBox="0 0 19 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M0.463835 28.3509L16.2972 51.9342C16.9154 52.8553 17.918 52.8553 18.5364 51.9341C19.1546 51.0131 19.1546 49.5199 18.5363 48.5988L3.82251 26.683L18.5364 4.76613C19.1546 3.84509 19.1546 2.35192 18.5363 1.43089C18.2272 0.970367 17.822 0.740185 17.4167 0.740185C17.0115 0.740185 16.6063 0.970367 16.2971 1.43104L0.463835 25.0156C0.1668 25.4579 2.28882e-05 26.0577 2.28882e-05 26.6832C2.28882e-05 27.3086 0.1668 27.9086 0.463835 28.3509Z"
							fill="black" />
					</svg>

				</div>
				<div class="testimonials-slider-next testimonials-slider-nav">
					<svg width="19" height="53" viewBox="0 0 19 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M18.5362 25.0124L2.70282 1.42904C2.08458 0.508003 1.08201 0.508003 0.463667 1.42919C-0.154573 2.35023 -0.154573 3.84341 0.463772 4.76444L15.1775 26.6802L0.463667 48.5972C-0.154573 49.5182 -0.154573 51.0114 0.463772 51.9324C0.77284 52.3929 1.17807 52.6231 1.5833 52.6231C1.98853 52.6231 2.39375 52.3929 2.70293 51.9322L18.5362 28.3476C18.8332 27.9054 19 27.3055 19 26.6801C19 26.0546 18.8332 25.4547 18.5362 25.0124Z"
							fill="black" />
					</svg>

				</div>

				<!-- Pagination -->
				<div class="testimonials-slider-pagination"></div>
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
					<p>“The course <span>helped me to overcome the initial inertia</span> and confront the daunting task
						of focusing my ambition on a fascinating subject in a manageable way. Hassan's sharing of
						practical examples and insights, and <span>his focus on the 20 percent that gets you 80 percent
							of the results, were extremely helpful.</span> I recommend this course to anyone who needs
						support to get started and who wants to learn the tools and mindsets needed to get a first book
						done on the side.”</p>
					<p class="testimonial-author">Ingo Rauth, Ph.D., Senior Consultant, Design and Facilitation
					</p>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/ui/section-divider'); ?>
	</section>
</main>

<?php get_footer(); ?>