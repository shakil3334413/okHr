
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
    
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/jobDetails.css') }}">
</head>
=
<body>
    <div class="job-top">
        <div class="job-top-overlay">
            <h3>{{ $job->jobTitle}}</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i> {{ $job->jobLocation->locationName}}</p>
        </div>
    </div>
    <div class="desc">
        <div class="container">
            <p class="desc-title"> <a href="#">Job Openings</a> » {{ $job->jobTitle}}</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="desc-left">
                        <h2>{{ $job->jobTitle}}</h2>
                        <small>by {{ $job->company->companyName }}</small>
                        <p>{{ $job->jobCategory->name }}</p>
                        <h6>Skills</h6>
                        <div class="multiple-items">
                            @foreach ($skills as $item)
                                <span>{{ $item }}</span>
                            @endforeach
                            
                            
                        </div>
                        <h4>Job Description</h4>
                        <span class="info">
                            {!! html_entity_decode($job->jobDescription) !!}
                        </span>
                        <p>SALARY: Competitive Salary</p>

                        <h4>Job Requirement</h4>
                        <span>
                            {!! html_entity_decode($job->jobRequirement ) !!}
                        </span> <br>
                        <div class="text-center">
                            <a href="{{ route('career.apply') }}" class="apply">Apply for this job</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="desc-right">
                        <a href="{{ route('career.apply') }}" class="apply">Apply for this job</a>
                        <div class="social">
                            <p>Share this job opening</p>
                            <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a href="#">
                            <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a href="#">
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a href="#">
                            <a href="#" class="google"><i class="fab fa-google-plus-square"></i></a href="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>