
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joblist</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/joblist.css') }}">
    
</head>

<body>

    <!-- Header Section Start -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a class="navbar-brand" href="#"><img src="{{URL::asset('frontend/career/dist/img/logo.svg') }}" alt="logo"></a>
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
							<a class="nav-link" href="#customize">Integration</a>
						</li>
					</ul>
				</div>
			</nav>

			<div class="header-content">
				<div class="shape-square circleAnimation"></div>
				<div class="row">
					<div class="col-md-6">
						<div>
							<h2 class="animated slideInLeft">AMMELIAS - LARAVEL REACTJS CMS</h2>
							<p class="animated slideInRight">Ammelias is a complete content management system platform
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
						<img class="img-fluid" src="{{URL::asset('frontend/career/dist/img/laptop.png') }}" alt="laptop">
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Header Section End -->
    

    <!-- Career Start -->
    <div class="career">
        <div class="container">
            <div class="job-opening">
                <h2 class="heading">Job Openings</h2>
            </div>
            <div class="career-heading">
                <div class="location">
                    <a class="active" href="#">All</a>
                    <a href="#">Dhaka</a>
                </div>
                <div class="category">
                    @foreach ($designations as $item)
                    <a href="#">{{ $item->name }}</a>
                    @endforeach
                   
                </div>
            </div>
            <div class="content">
                <div class="row">
                    @foreach ($jobs as $job)
                    <div class="col-md-4 col-sm-6">
                      <a href="{{ route('career.show',$job->id) }}">
                        <div class="content-box">
                            <h3>{{ $job->jobTitle}}</h3>
                            <span> {{ $job->company->companyName }}</span>
                            <div class="title">
                                <address>{{ $job->jobLocation->locationName }}</address>
                                <p>{{ $job->jobCategory->name }}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                    
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Career End -->


    <!-- Footer Section Start  -->
	<footer id="footer">
		<div class="container">
			<p>2019 All Right Reserved</p>
		</div>
	</footer>
	<!-- Footer Section End  -->




    <!-- script  -->

    <script src="{{ asset('frontend/career/dist/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/career/dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/career/dist/js/bootstrap.min.js') }}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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