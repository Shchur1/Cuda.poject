<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('/css/compiled.min.css') }}" rel="stylesheet">

	<title>My final test</title>
</head>

<body>

	<div class="hero section">
	<div class="hero__header-wrapper">
		<div class="hero__header js-hero__header">
			<div class="container">
				<div class="row align-items-start">
					<div class="col">
						<img src="/images/icons/logo.png" class="logo" alt="logo">
					</div>
					<div class="col">
						<nav class="navbar navbar-expand-lg navbar-dark ">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
							    aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse justify-content-between" id="navbarNav">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item nav-item__header active">
										<a class="nav-link" href="#">HOME
											<span class="sr-only">(current)</span>
										</a>
									</li>
									<li class="nav-item nav-item__header">
										<a class="nav-link" href="#">ABOUT</a>
									</li>
									<li class="nav-item nav-item__header">
										<a class="nav-link" href="#">WORK</a>
									</li>
									<li class="nav-item nav-item__header">
										<a class="nav-link" href="#">BLOG</a>
									</li>
									<li class="nav-item nav-item__header">
										<a class="nav-link" href="#">CONTACT</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>	
		<div class="hero__text">
			<div class="container">
				Hi there! We are the new kids on the block
				<br> and we build awesome websites and mobile apps.
			</div>
			<button class="hero__btn">WORKING WITH US!</button>
		</div>
	</div>

	<div class="services section">
		<div class="container">
			<div>
				<h3 class="section-title">SERVICES WE PROVIDE</h3>
				<p class="section-description">We are working with both individuals and businesses all over the globe to create awesome websites and applications.</p>
			</div>
			<div class="row-slider js-row-slider">
				<div class="row-slider__item">
					<div class="services__item-media-wrapper d-flex align-items-center justify-content-center">
						<img class="services__item-image" src="/images/icons/icon-flag.png" alt="Flag">
					</div>
					<div class="block-title">BRANDING</div>
					<div class="block-text">Lorem ipsum dolor sit,
						<br>consectetuer adipiscing elit,
						<br>sed diam nonummy nidh.</div>
				</div>
				<div class="row-slider__item">
					<div class="services__item-media-wrapper d-flex align-items-center justify-content-center">
						<img class="services__item-image" src="/images/icons/icon-pencil.png" alt="pencil">
					</div>
					<div class="block-title">DESIGN</div>
					<div class="block-text">Sed up persiatis unde
						<br>omnis iste natur error sit
						<br>voluptatem</div>
				</div>
				<div class="row-slider__item">
					<div class="services__item-media-wrapper d-flex align-items-center justify-content-center">
						<img class="services__item-image" src="/images/icons/icon-shape.png" alt="shape">
					</div>
					<div class="block-title">DEVELOPMENT</div>
					<div class="block-text">At vero eos et accusamus et
						<br>iusto odio dignissimos qui
						<br>blanditiis praesentium.</div>
				</div>
				<div class="row-slider__item">
					<div class="services__item-media-wrapper d-flex align-items-center justify-content-center">
						<img class="services__item-image" src="/images/icons/icon-rocket.png" alt="rocket">
					</div>
					<div class="block-title">ROCKET SCIENCES</div>
					<div class="block-text">Et harum quidem rerum est
						<br>et expedita distinctio. Nam
						<br>libero tempore.</div>
				</div>
			</div>
		</div>
	</div>

	<div class="team section">
		<div class="container">
			<div>
				<h3 class="section-title">MEET OUR BEAUTIFUL TEAM</h3>
				<p class="section-description">We are a small team of designers and developers, who help brands with big ideas.</p>
			</div>
			<div class="row-slider js-row-slider">
				<div class="row-slider__item">
					<img class="team__item-image" src="/images/icons/big-Base.png" alt="base">
					<div class="block-title">ANNE HATHAWAY</div>
					<p class="team__item-position">CEO / Marketing Guru</p>
					<div class="block-text">Lorem ipsum dolor sit amet,
						<br>consectetuer adipiscing elit,
						<br>sed diam nonummy nibh
						<br> euismod tincidunt ut laoreet
						<br>dolore magna.
					</div>
					<div class="team__social d-flex justify-content-center">
						<a href="https://www.facebook.com/" class="team__social-link">
							<img src="/images/icons/Fb-icon.png" class="team__social-icon" alt="Fb">
						</a>
						<a href="https://twitter.com" class="team__social-link">
							<img src="/images/icons/Twitter-icon.png" class="team__social-icon" alt="Twitter">
						</a>
						<a href="https://www.linkedin.com" class="team__social-link">
							<img src="/images/icons/LinkedIn-icon.png" class="team__social-icon" alt="LinkedIn">
						</a>
						<a href="https://mail.ru" class="team__social-link">
							<img src="/images/icons/Mail-icon.png" class="team__social-icon" alt="Mail">
						</a>
					</div>
				</div>
				<div class="row-slider__item">
					<img class="team__item-image" src="/images/icons/big-Base.png" alt="base">
					<div class="block-title">KATE UPTON</div>
					<p class="team__item-position">Creative Director</p>
					<div class="block-text">Duis aute irune dolor in in
						<br>voluptate velit esse cillum
						<br>dolore fugiat nulla pariatur.
						<br>Excepteur sint occaecat non
						<br>diam proident.
					</div>
					<div class="team__social d-flex justify-content-center">
						<a href="https://twitter.com" class="team__social-link">
							<img src="/images/icons/Twitter-icon.png" class="team__social-icon" alt="Twitter">
						</a>
						<a href="https://www.linkedin.com" class="team__social-link">
							<img src="/images/icons/LinkedIn-icon.png" class="team__social-icon" alt="LinkedIn">
						</a>
						<a href="https://mail.ru" class="team__social-link">
							<img src="/images/icons/Mail-icon.png" class="team__social-icon" alt="Mail">
						</a>
					</div>
				</div>
				<div class="row-slider__item">
					<img class="team__item-image" src="/images/icons/big-Base.png" alt="base">
					<div class="block-title">OLIVIA WILDE</div>
					<p class="team__item-position">Lead Designer</p>
					<div class="block-text">Nemo enim ipsam voluptas
						<br>sit aspernatur aut odit aut
						<br>fugit, sed quia consequuntur
						<br>magni dolores eos qui ratione
						<br>voluptatem nesciunt.
					</div>
					<div class="team__social d-flex justify-content-center">
						<a href="https://www.facebook.com/" class="team__social-link">
							<img src="/images/icons/Fb-icon.png" class="team__social-icon" alt="Fb">
						</a>
						<a href="https://twitter.com" class="team__social-link">
							<img src="/images/icons/Twitter-icon.png" class="team__social-icon" alt="Twitter">
						</a>
						<a href="https://www.linkedin.com" class="team__social-link">
							<img src="/images/icons/LinkedIn-icon.png" class="team__social-icon" alt="LinkedIn">
						</a>
						<a href="https://mail.ru" class="team__social-link">
							<img src="/images/icons/Mail-icon.png" class="team__social-icon" alt="Mail">
						</a>
					</div>
				</div>
				<div class="row-slider__item">
					<img class="team__item-image" src="/images/icons/big-Base.png" alt="rocket">
					<div class="block-title">ASHLEY GREENE</div>
					<p class="team__item-position">CEO / Developer</p>
					<div class="block-text">Sed ut perspiciatis unde
						<br>omnis iste natus error sit
						<br>voluptatem accusantium
						<br>doloremque laudantium,
						<br>totam rem aperiam.
					</div>
					<div class="team__social d-flex justify-content-center">
						<a href="https://www.facebook.com/" class="team__social-link">
							<img src="/images/icons/Fb-icon.png" class="team__social-icon" alt="Fb">
						</a>
						<a href="https://twitter.com" class="team__social-link">
							<img src="/images/icons/Twitter-icon.png" class="team__social-icon" alt="Twitter">
						</a>
						<a href="https://mail.ru" class="team__social-link">
							<img src="/images/icons/Mail-icon.png" class="team__social-icon" alt="Mail">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="skills section">
		<div class="container">
			<div>
				<h3 class="section-title">WE GOT SKILLS!</h3>
				<p class="section-description">Lorem ipsum dolor sit amet, consechetur adipisicing elit, sed do eiusmod
					<br>tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="row-slider js-row-slider">
				<div class="row-slider__item">
					<div class="progress-bar" data-percent="95" data-color="#dfe8ed,#30bae7"></div>
					<div class="block-title">WEB DESIGN</div>
				</div>
				<div class="row-slider__item">
					<div class="progress-bar" data-percent="75" data-color="#dfe8ed,#d74680"></div>
					<div class="block-title">HTML/CSS</div>
				</div>
				<div class="row-slider__item">
					<div class="progress-bar" data-percent="70" data-color="#dfe8ed,#15c7a8"></div>
					<div class="block-title">GRAPHIC DESIGN</div>
				</div>
				<div class="row-slider__item">
					<div class="progress-bar" data-percent="85" data-color="#dfe8ed,#eb7d4b"></div>
					<div class="block-title">UI / UX</div>
				</div>
			</div>
		</div>
	</div>




	<div class="portfolio section">
		<div class="container">
			<div>
				<h3 class="section-title">OUR PORTFOLIO</h3>
				<p class="section-description">Neque porro quisquam, qui dolorem ipsum quia dolor sit amet
					<br>consectetur, adipisci velit, sed quia non numquam</p>
			</div>
			<div class="text-center">
				<div class="portfolio__toolbar">
					<button class="portfolio__toolbar-button fil-cat active" data-rel="all">ALL</button>
					<button class="portfolio__toolbar-button fil-cat" data-rel="web">WEB</button>
					<button class="portfolio__toolbar-button fil-cat" data-rel="flyers">APPS</button>
					<button class="portfolio__toolbar-button fil-cat" data-rel="bcards">ICONS</button>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div class="portfolio__content js-portfolio">
				<div class="portfolio__item scale-anm web all">
					<img src="/images/icons/computer1.png" class="portfolio__image" alt="" />
					<div class="block-title">
						ISOMETRIC PERSPECTIVE MOCK-UP
					</div>
				</div>
				<div class="portfolio__item scale-anm web all">
					<img src="/images/icons/computer2.png" class="portfolio__image" alt="" />
					<div class="block-title">
						TIME ZONE APP UI
					</div>
				</div>
				<div class="tile scale-anm flyers all">
					<img src="/images/icons/computer3.png" class="portfolio__image" alt="" />
					<div class="block-title">
						VIRO MEDIA PLAYERS UI
					</div>
				</div>
				<div class="tile scale-anm flyers all">
					<img src="/images/icons/computer4.png" class="portfolio__image" alt="" />
					<div class="block-title">
						BLOG / MAGAZ NE FLAT UI KIT
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div class="text-center">
				<button class="portfolio__btn">LOAD MORE PROJECTS</button>
			</div>
		</div>
	</div>


	<div class="reviews section">
		<div class="container">
			<div>
				<h3 class="section-title">WHTAT POEPLE SAY ABOUT US</h3>

				<p class="section-description">Our clients love us!</p>

			</div>
			
			<div class="row js-reviews-slider">
				<div class="col-md-6">
					<div class="reviews__item row">
						<div class="col-12 d-md-flex">
							<img src="/images/icons/icon-base.png" class="rounded reviews__image" alt="base">
							<div class="reviews__text">
								<i>"Nullam dapibus blandit orci,viverra
									<br>gravida dui lobortis eget.Maecenas
									<br>fringilla urna eu nisl scelerisque."</i>
								<p class="block-title">CHANEL IMAN</p>
								<p class="reviews__position">CEO of Pinterest</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="reviews__item row">
						<div class="col-12 d-md-flex">
							<img src="/images/icons/icon-base.png" class="rounded reviews__image" alt="base">
							<div class="reviews__text">
								<i>"Vivamus luctus urna sed urna ultricies
									<br> ac tempor dui sagittis.In condimentum
									<br> facilisis porta."</i>
								<p class="block-title">ANDRIANA LIMA</p>
								<p class="reviews__position">Founder of Instagram</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="reviews__item row">
						<div class="col-12 d-md-flex">
							<img src="/images/icons/icon-base.png" class="rounded reviews__image" alt="base">
							<div class="reviews__text">
								<i>"Vivamus luctus urna sed urna ultricies
									<br> ac tempor dui sagittis.In condimentum
									<br> facilisis porta."</i>
								<p class="block-title">ANNE HATHAWAY</p>
								<p class="reviews__position">Lead Designer at Behance</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="reviews__item row">
						<div class="col-12 d-md-flex">
							<img src="/images/icons/icon-base.png" class="rounded reviews__image" alt="base">
							<div class="reviews__text">
								<i>"Phasellus non purus vel arcu tempor
									<br>commodo. Fusce semper,purus vel luctus
									<br>molestie, risis sem cursus neque."</i>
								<p class="block-title">ENNA STONE</p>
								<p class="reviews__position">Co-Founder of Shazam</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact section">
		<div class="container">
			<div>
				<h3 class="section-title">GET IN TOUCH</h3>
				<p class="section-description">1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel:(202)456-1111</p>
			</div>
			<div class="row">
				<form class="col-lg-8 offset-lg-2" action="send" method="post">
					{{ csrf_field() }}
					<div class="form row">
						<div class="form-group col-md-6">
							<input name="fname" type="text" class="form-control" id="validationCustom01" placeholder="Your name" required>
						</div>
						<div class="form-group col-md-6">
					<input name="email" type="email" class="form-control" id="Email" placeholder="Your Email" required>
						</div>
					</div>
					<div class="form-group">
						
						<textarea name="massage" class="form-control" id="massage" placeholder="Your Messege" rows="3" required></textarea>
					</div>
				</form>
			</div>
			<div class="text-center">
				<button class="contact__btn">SEND MESSEGE</button>
			</div>
		</div>
	</div>




	<footer class="socials">
		<div class="container">
			<ul class="socials__nav clearfix">
				<li class="socials__nav-item">
					<a class="socials__nav-link" href="#">Facebook</a>
				</li>
				<li class="socials__nav-item">
					<a class="socials__nav-link" href="#">Twitter</a>
				</li>
				<li class="socials__nav-item">
					<a class="socials__nav-link" href="#">Google+</a>
				</li>
				<li class="socials__nav-item">
					<a class="socials__nav-link" href="#">Linkedin</a>
				</li>
				<li class="socials__nav-item">
					<a class="socials__nav-link" href="#">Behance</a>
				</li>
				<li class="socials__nav-item">
					<a class="socials__nav-link" href="#">Dribbble</a>
				</li>
				<li class="socials__nav-item">
					<a class="socials__nav-link" href="#">GitHub</a>
				</li>
			</ul>
		</div>
	</footer>






	<!-- Scripts -->
	<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('js/vendor/jQuery-plugin-progressbar.js') }}"></script>
	<script src="{{ asset('js/vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="js/compiled.min.js"></script>
</body>

</html>