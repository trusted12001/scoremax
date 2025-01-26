<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ScoreMax Educational Consults</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('assets/img/brand/logo.png') }}" type="image/x-icon">
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <img src="{{ asset('assets/img/brand/logo.png') }}" alt=""> <a class="navbar-brand" href="#page-top">ScoreMax</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Scoremax Educational Consults</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Ready to Ace Your IELTS? Join scoremax today to transform your IELTS experience!
                            </p>
                        <a class="btn btn-primary btn-xl" href="#contact">Contact Us!</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <!-- Courses Section -->
        <section class="page-section bg-primary" id="courses">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Available Courses</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    @foreach ($courses as $course)
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="card mt-5">
                                <div class="card-body">
                                    <h3 class="h4 mb-2">{{ $course->title }}</h3>
                                    <p class="text-muted mb-0">{{ $course->short_description }}</p>
                                    <p class="text-muted mb-0">Cost: NGN{{ $course->price }}</p>
                                    <!-- Register Now Modal Trigger -->
                                    <button class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#registerModal-{{ $course->id }}">
                                        Register Now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="registerModal-{{ $course->id }}" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="registerModalLabel">Register for {{ $course->title }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                {{-- <form action="{{ route('register.store') }}" method="POST"> --}}
                                                    @csrf
                                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Full Name</label>
                                                            <input type="text" name="name" class="form-control" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email Address</label>
                                                            <input type="email" name="email" class="form-control" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="phone" class="form-label">Phone Number</label>
                                                            <input type="text" name="phone" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Register</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Our Services</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <div class="mt-5">
                                <h3 class="h4 mb-2">{{ $service->title }}</h3>
                                <p class="text-muted mb-0">{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>




        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('assets/img/portfolio/fullsize/1.jpg')}}" title="Project Name">
                            <img class="img-fluid" src="{{asset('assets/img/portfolio/thumbnails/1.jpg')}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">IELTS Tutoring</div>
                                <div class="project-name">Online Class Session</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('assets/img/portfolio/fullsize/2.jpg')}}" title="Online Class Session">
                            <img class="img-fluid" src="{{asset('assets/img/portfolio/thumbnails/2.jpg')}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">IELTS Tutoring</div>
                                <div class="project-name">Classroom Session</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('assets/img/portfolio/fullsize/3.jpg')}}" title="Group Session">
                            <img class="img-fluid" src="{{asset('assets/img/portfolio/thumbnails/3.jpg')}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">IELTS Tutoring</div>
                                <div class="project-name">Group Session</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('assets/img/portfolio/fullsize/4.jpg')}}" title="Project Name">
                            <img class="img-fluid" src="{{asset('assets/img/portfolio/thumbnails/4.jpg')}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Life Coaching</div>
                                <div class="project-name">Group Photo</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('assets/img/portfolio/fullsize/5.jpg')}}" title="Project Name">
                            <img class="img-fluid" src="{{asset('assets/img/portfolio/thumbnails/5.jpg')}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">IELTS Tutoring</div>
                                <div class="project-name">Online Classroom</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('assets/img/portfolio/fullsize/6.jpg')}}" title="Project Name">
                            <img class="img-fluid" src="{{asset('assets/img/portfolio/thumbnails/6.jpg')}}" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">IELTS Tutoring</div>
                                <div class="project-name">Classroom Session</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="page-section bg-primary" id="testimonials">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">What Our Students Say</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="card mt-5">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $testimonial->name }}</h5>
                                    <p class="card-text">{{ $testimonial->feedback }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+234 703918-7665</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2025 - ScoreMax | Developed by: <a href="https://trusted12001.github.io/personal-portfolio/">Abdul.</a></div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
