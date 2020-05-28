
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
    
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/jobDetails.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/career/dist/css/applyForm.css') }}">
</head>
=
<body>
    <div class="job-top">
        <div class="job-top-overlay">
        </div>
    </div>
    {{-- <div class="desc">
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
                            <a href="#" class="apply">Apply for this job</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="desc-right">
                        <a href="#" class="apply">Apply for this job</a>
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
    </div> --}}

    
    <div class="apply">
        <div class="container">
            <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="info">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Personal Information</h3>
                        </div>
                        <div class="col-md-8">
                            <select name="jobCategory" id="">
                                @foreach ($jobcats as $jobcat)
                                    <option value="{{ $jobcat->name }}">{{ $jobcat->name }}</option>
                                @endforeach
                                
                            </select>
                            <input type="text" name="candidateName" placeholder="Your Full Name"> <br>
                            <input type="email" name="candidateEmail" placeholder="Your Email Address"> <br>
                            <input type="text" name="candidatePhone" placeholder="Your Phone Number"> <br>
                            <h6>Gender</h6>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label><br>
                            <h6>Photo</h6>
                            <input type="file" name="image"/>
                            <h5>We accept PNG, JPG, and JPEG files</h5>
                        </div>
                    </div>
                </div>
                <div class="resume">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>CV or Resume</h3>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="resume"/>
                            <h5>We accept Only PDF files</h5>
                        </div>
                    </div>
                </div>
                <div class="cover">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Cover Letter</h3>
                        </div>
                        <div class="col-md-8">
                            <textarea rows="4" name="coverLetter"></textarea><br>
                            <button type="submit">Submit Application</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>