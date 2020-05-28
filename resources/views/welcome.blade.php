<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OK HRMS </title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" rel="stylesheet">
        <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

</head>

<body>

	<!-- Header Section Start -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a class="navbar-brand" href="#"><img src="{{URL::asset('frontend/home-img/logo.svg')}}" alt="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#feature">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#demo">Demo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('career.index') }}">Career</a>
                        </li>
                        <li class="nav-item">
							<a class="nav-link" href="./login" target="_blank">Login</a>
						</li>
					</ul>
				</div>
			</nav>

			<div class="header-content">
				<div class="shape-square circleAnimation"></div>
				<div class="row">
					<div class="col-md-6">
						<div>
							<h2 class="animated slideInLeft">OK HRMS - LARAVEL REACTJS CMS</h2>
							<p class="animated slideInRight">OK HRMS is a complete content management system platform
								developed with Laravel and the
								frontend is developed with React. Our system is 100% Secure and Dynamic. Included
								Portfolio, Teams, Services, Blog, Pricing Plan, Gallery, Testimonial, Team, Subscriber,
								Setting etc. It is the most perfect platform for corporate or business agency, firm etc.
							</p>
							<div class="shape-circle bounceAnimation"></div>
							<a class="animated slideInUp" href="#">Buy now</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="shape-circle bounceAnimation"></div>
						<img class="img-fluid" src="{{URL::asset('frontend/img/laptop.png')}}" alt="laptop">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Section End -->

	<!-- About Section Start  -->

	<div class="about" id="about">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<h2 class="heading">who we are</h2>
					<p class="text">There are many variations of passages of Lorem Ipsum available, but <br> the
						majority have suffered alteration in some form.</p>
				</div>
			</div>
			<div class="about-content">
				<div class="row">
					<div class="col-md-6">
						<div class="about-img">
							<img class="img-fluid" src="{{URL::asset('frontend/img/about-img.png')}}" alt="about-img">
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-content-right">
							<h4>
								<img src="{{URL::asset('frontend/img/icon.svg')}}" alt="icon">
								User panel
							</h4>
							<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
								letters, as opposed to using Content here, content here, making it look like readable
								English.Many desktop.</p>
							<h4>
								<img src="{{URL::asset('frontend/img/icon.svg')}}" alt="icon">
								Material Ui Design
							</h4>
							<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
								letters, as opposed to using Content here, content here, making it look like readable
								English.Many desktop.</p>
							<h4>
                            <img src="{{URL::asset('frontend/img/icon.svg')}}" alt="icon">
								Easy Customizeable
							</h4>
							<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
								letters, as opposed to using Content here, content here, making it look like readable
								English.Many desktop.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Section End  -->

	<!-- Feature Section Start  -->

	<div class="feature" id="feature">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<h2 class="heading">Our Awesome Feature</h2>
					<p class="text">There are many variations of passages of Lorem Ipsum available, but <br> the
						majority have suffered alteration in some form.</p>
				</div>
			</div>
			<div class="feature-content">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
                            <img class="img-fluid" src="{{URL::asset('frontend/img/react.svg')}}" alt="react">
							</div>
							<h3>React</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
								<img class="img-fluid" src="{{URL::asset('frontend/img/laravel.png')}}"  alt="react">
							</div>
							<h3>Laravel</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
								<img class="img-fluid" src="{{URL::asset('frontend/img/laravel.png')}}"  alt="react">
							</div>
							<h3>Laravel Passport</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
								<img class="img-fluid" src="{{URL::asset('frontend/img/php.png')}}"  alt="react">
							</div>
							<h3>PHP</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
								<img class="img-fluid" src="{{URL::asset('frontend/img/redux.svg')}}"  alt="react">
							</div>
							<h3>Redux</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
								<img class="img-fluid"src="{{URL::asset('frontend/img/router.png')}}"  alt="react">
							</div>
							<h3>React Router Dom</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
								<img class="img-fluid" src="{{URL::asset('frontend/img/bootstrap.png')}}"  alt="react">
							</div>
							<h3>Bootstrap</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
								<img class="img-fluid" src="{{URL::asset('frontend/img/sass.svg')}}"  alt="react">
							</div>
							<h3>SASS</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-content-box">
							<div class="img">
								<img class="img-fluid" src="{{URL::asset('frontend/img/material.svg')}}"  alt="react">
							</div>
							<h3>Material UI</h3>
							<p>The point of using Lorem Ipsum is that it has or-less normal distribution letters, as
								opposed Content here.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Feature Section End  -->

	<!-- Customization Section Start  -->

	<div class="customize" id="customize">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="customize-content">
						<h2>Easy Customization & Fully Responsive Template.</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy when Lorem Ipsum is simply dummy text of the printing and
							typesetting industry I completely follow all your instructions.</p>
						<a href="#">Know More</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="customize-img">
						<img class="img-fluid" src="{{URL::asset('frontend/img/payment.png')}}" alt="payment">
						<span class="shape-2 bounceAnimation">
							<img class="img-fluid" src="{{URL::asset('frontend/img/shape2.svg')}}"  alt="shape-2">
						</span>
						<span class="shape-3 bounceAnimation">
							<img class="img-fluid" src="{{URL::asset('frontend/img/shape3.svg')}}" alt="shape-3">
						</span>
						<span class="shape-4 circleAnimation">
							<img class="img-fluid" src="{{URL::asset('frontend/img/shape4.svg')}}"  alt="shape-4">
						</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="customize-img">
						<img class="img-fluid" src="{{URL::asset('frontend/img/refferal.png')}}" alt="payment">
						<span class="shape-2 bounceAnimation">
							<img class="img-fluid" src="{{URL::asset('frontend/img/shape2.svg')}}" alt="shape-2">
						</span>
						<span class="shape-3 bounceAnimation">
							<img class="img-fluid" src="{{URL::asset('frontend/img/shape3.svg')}}" alt="shape-3">
						</span>
						<span class="shape-4 circleAnimation">
							<img class="img-fluid"src="{{URL::asset('frontend/img/shape4.svg')}}"   alt="shape-4">
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="customize-content">
						<h2>Easy Customization & Fully Responsive Template.</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy when Lorem Ipsum is simply dummy text of the printing and
							typesetting industry I completely follow all your instructions.</p>
						<a href="#">Know More</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Customization Section End  -->

	<!-- Demo Section Start  -->
	<div class="demo" id="demo">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="demo-title text-center">
						<h2 class="heading">Demo</h2>
						<p class="text">There are many variations of passages of Lorem Ipsum available, but <br> the
							majority have suffered alteration in some form.</p>
					</div>
					<div id="tabs" class="tabs">
						<ul>
							<li><a href="#tabs-1">FrontEnd</a></li>
							<li class="shape"><a href="#tabs-2">Back office</a></li>
						</ul>
						<div id="tabs-1" class="my-tabs">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Home page</a>
										<div class="demo-img">
											<img class="img-fluid" src="{{URL::asset('frontend/img/home.jpg')}}"   alt="home">
										</div>
										<div class="demo-content">
											<h3>Home page</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">About Us</a>
											<div class="demo-img">
												<img class="img-fluid" src="{{URL::asset('frontend/img/about-us.jpg')}}"  alt="home">
											</div>
											<div class="demo-content">
												<h3>About Us</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Service</a>
										<div class="demo-img">
											<img class="img-fluid" src="{{URL::asset('frontend/img/services.jpg')}}"  alt="service">
										</div>
										<div class="demo-content">
											<h3>Service</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">About Us</a>
											<div class="demo-img">
												<img class="img-fluid" src="{{URL::asset('frontend/img/blog.jpg')}}" alt="blog">
											</div>
											<div class="demo-content">
												<h3>Blog</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Blog Details</a>
										<div class="demo-img">
											<img class="img-fluid" src="{{URL::asset('frontend/img/blog-details.jpg')}}"  alt="blog">
										</div>
										<div class="demo-content">
											<h3>Blog Details</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">Portfolio</a>
											<div class="demo-img">
												<img class="img-fluid" src="{{URL::asset('frontend/img/portfolio.jpg')}}"  alt="Portfolio">
											</div>
											<div class="demo-content">
												<h3>Portfolio</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Portfolio Single</a>
										<div class="demo-img">
											<img class="img-fluid"  src="{{URL::asset('frontend/img/portfolio-single.jpg')}}" alt="portfolio single">
										</div>
										<div class="demo-content">
											<h3>Portfolio Single</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">Contact</a>
											<div class="demo-img">
												<img class="img-fluid"  src="{{URL::asset('frontend/img/contact-us.jpg')}}" alt="contact us">
											</div>
											<div class="demo-content">
												<h3>Contact</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Gallery</a>
										<div class="demo-img">
											<img class="img-fluid" src="{{URL::asset('frontend/img/gallery.jpg')}}"  alt="gallery">
										</div>
										<div class="demo-content">
											<h3>Gallery</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">Our Team</a>
											<div class="demo-img">
												<img class="img-fluid"  src="{{URL::asset('frontend/img/team.jpg')}}" alt="team">
											</div>
											<div class="demo-content">
												<h3>Our Team</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tabs-2" class="my-tabs">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Login</a>
										<div class="demo-img">
											<img class="img-fluid"  src="{{URL::asset('frontend/img/login.png')}}"  alt="login">
										</div>
										<div class="demo-content">
											<h3>Login</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">Dashboard</a>
											<div class="demo-img">
												<img class="img-fluid"  src="{{URL::asset('frontend/img/dashboard.png')}}"  alt="Dashboard">
											</div>
											<div class="demo-content">
												<h3>Dashboard</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Gallery</a>
										<div class="demo-img">
											<img class="img-fluid" src="{{URL::asset('frontend/img/gallery.png')}}"  alt="gallery">
										</div>
										<div class="demo-content">
											<h3>Gallery</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">Blog</a>
											<div class="demo-img">
												<img class="img-fluid" src="{{URL::asset('frontend/img/blog.png')}}"  alt="blog">
											</div>
											<div class="demo-content">
												<h3>Blog</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Plan</a>
										<div class="demo-img">
											<img class="img-fluid" src="{{URL::asset('frontend/img/plan.png')}}"  alt="plan">
										</div>
										<div class="demo-content">
											<h3>Plan</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">Portfolio</a>
											<div class="demo-img">
												<img class="img-fluid" src="{{URL::asset('frontend/img/portfolio.png')}}"  alt="Portfolio">
											</div>
											<div class="demo-content">
												<h3>Portfolio</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Service</a>
										<div class="demo-img">
											<img class="img-fluid" src="{{URL::asset('frontend/img/service.png')}}"  alt="Service">
										</div>
										<div class="demo-content">
											<h3>Service</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">Team</a>
											<div class="demo-img">
												<img class="img-fluid"  src="{{URL::asset('frontend/img/team.png')}}"  alt="Team">
											</div>
											<div class="demo-content">
												<h3>Team</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<a href="#">Testimonial</a>
										<div class="demo-img">
											<img class="img-fluid"  src="{{URL::asset('frontend/img/testimonial.png')}}"  alt="Testimonial">
										</div>
										<div class="demo-content">
											<h3>Testimonial</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="demo-box">
										<div class="demo-box">
											<a href="#">User</a>
											<div class="demo-img">
												<img class="img-fluid" src="{{URL::asset('frontend/img/user.png')}}"  alt="user">
											</div>
											<div class="demo-content">
												<h3>User</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Demo Section End  -->

	<!-- Footer Section Start  -->
	<footer id="footer">
		<div class="container">
			<p>2020 All Right Reserved</p>
		</div>
	</footer>
	<!-- Footer Section End  -->
   <!-- Scripts -->
   <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}" ></script>
   <script src="{{ asset('frontend/js/popper.min.js') }}" ></script>
   <script src="{{ asset('frontend/js/bootstrap.min.js') }}" ></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>


	<script>
		$(function () {
			$("#tabs").tabs();
		});
	</script>
	<script>
		$(document).ready(function () {
			$(".demo ul li a").click(function () {
				$('.demo ul li').toggleClass('mytabstyle');
			});
		});
	</script>
</body>

</html>