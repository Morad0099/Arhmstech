<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Armstech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    {{-- <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-white">Ahms<span class="text-dark">.</span>Tech</h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="project.html" class="nav-item nav-link">Projects</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="faq.html" class="dropdown-item">FAQs</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Ahms.Tech
                    </div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Technology Solutions for Your
                        Business</h1>
                    <p class="text-white mb-4 animated slideInRight">
                        We specialize in building high-quality mobile and web applications that drive innovation and
                        efficiency.
                        Our expert team delivers solutions tailored to meet your business goals. Let us help you
                        transform your
                        ideas into reality.
                    </p>
                    <a href="javascript:void(0);"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight"
                        id="readMoreBtn">Read More</a>

                    <a href=""
                        class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/nav-image.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/image2.webp">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div>
                    <h1 class="mb-4">We Transform Your Business with Cutting-Edge Technology</h1>
                    <p class="mb-4">At AhmsTech, we specialize in building innovative mobile and web applications
                        tailored to meet your business needs. From software-powered solutions to custom digital
                        platforms, we help businesses grow with technology.</p>
                    <p class="mb-4">With a team of experts dedicated to delivering excellence, we ensure every
                        project is executed with precision, ensuring your business thrives in the digital world.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Experience in Industry
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div>
                    <h1 class="mb-4">Tailored Software Solutions for Your Business</h1>
                    <p class="mb-4">We offer comprehensive digital solutions, from web and mobile app development to
                        UI/UX design. Our services are designed to help businesses streamline operations, enhance
                        customer experiences, and achieve their goals through advanced technology.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-code fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Web Development</h5>
                                        <p>We build high-performance websites that are scalable, secure, and responsive,
                                            tailored to your business needs.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-mobile-alt fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Mobile App Development</h5>
                                        <p>Our expert team creates innovative mobile applications that enhance user
                                            engagement and meet your business objectives.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-pencil-alt fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Graphic & UI Design</h5>
                                        <p>We craft visually appealing designs that enhance user experiences and align
                                            with your brand's identity.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-laptop fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Web Application Development</h5>
                                        <p>We develop powerful web applications that help your business operate smoothly
                                            and efficiently.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Why Choose Us</div>
                    <h1 class="text-white mb-4">Your Trusted Partner in Software Development</h1>
                    <p class="text-light mb-4">With years of experience, we specialize in delivering top-notch
                        solutions for website development, web applications, mobile apps, and graphic & UI design. We
                        focus on crafting personalized digital products that enhance your business's digital presence.
                    </p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Expertise in Web & Mobile Development</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Custom Web Applications Tailored for You</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Stunning Graphic and UI Designs</span>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">10</h2>
                                    <p class="text-white mb-0">Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-check fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">3</h2>
                                    <p class="text-white mb-0">Projects Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/feature.png" alt="Software Development Services">
                </div>
            </div>
        </div>
    </div>

    <!-- Feature End -->


    <!-- Case Start -->
    {{-- <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div>
                <h1 class="mb-4">Explore Our Recent AI Case Studies</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Robotic Automation</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Machine learning</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Case End -->


    <!-- FAQs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
                <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What types of projects do you handle?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    We specialize in a wide range of software development projects, including website
                                    development, web applications, mobile apps for both iOS and Android platforms, and
                                    comprehensive UI/UX design services. Our team is equipped to handle projects of
                                    various scales and complexities.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does it typically take to complete a project?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Project timelines vary depending on the scope and complexity. A simple website might
                                    take 4-6 weeks, while a complex web or mobile application could take 3-6 months or
                                    more. During our initial consultation, we'll provide a more accurate timeline based
                                    on your specific requirements.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What technologies do you use for development?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    We use a variety of modern technologies depending on the project requirements. For
                                    web development, we often use React, Angular, or Vue.js for front-end, and Node.js,
                                    Python, or PHP for back-end. For mobile apps, we develop using native technologies
                                    (Swift for iOS, Kotlin for Android) or cross-platform frameworks like React Native
                                    or Flutter.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Do you ensure your designs are responsive and mobile-friendly?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Absolutely! We prioritize responsive design in all our web projects. Our websites
                                    and web applications are designed and developed to provide an optimal viewing and
                                    interaction experience across a wide range of devices, from desktop computers to
                                    mobile phones and tablets.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Do you offer maintenance and support after project completion?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Yes, we offer ongoing maintenance and support services for all our projects. We
                                    provide various support packages to ensure your software remains up-to-date, secure,
                                    and performs optimally. Our team is always available to address any issues or
                                    implement new features as your business grows.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How do you handle project budgeting and pricing?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    We offer flexible pricing models to suit different project needs and budgets. This
                                    includes fixed-price contracts for well-defined projects, time and materials pricing
                                    for more fluid projects, and retainer agreements for ongoing work. We'll work with
                                    you to find the most suitable option for your project and budget.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    How do you ensure the security of the applications you develop?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Security is a top priority in all our development projects. We follow industry best
                                    practices for secure coding, implement encryption for sensitive data, use secure
                                    authentication methods, and conduct regular security audits. We also stay updated on
                                    the latest security threats and continuously improve our security measures.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    Can you integrate third-party services or APIs into my project?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="headingEight" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Yes, we have extensive experience integrating various third-party services and APIs
                                    into our projects. Whether it's payment gateways, social media platforms, analytics
                                    tools, or any other service, we can seamlessly integrate them to enhance the
                                    functionality of your website, web app, or mobile app.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Team</div>
                    <h1 class="mb-4">Meet Our Expert Development Team</h1>
                    <p class="mb-4">Our team of skilled developers, designers, and project managers brings years of
                        experience in creating cutting-edge websites, web applications, mobile apps, and stunning UI/UX
                        designs. With a passion for innovation and a commitment to excellence, we're here to turn your
                        digital vision into reality.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Learn More About Us</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-1.jpg"
                                            alt="">
                                        <h5 class="mb-0">Sarah Johnson</h5>
                                        <small>Lead Full-Stack Developer</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-2.jpg"
                                            alt="">
                                        <h5 class="mb-0">Michael Chen</h5>
                                        <small>UI/UX Design Lead</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-dribbble"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-3.jpg"
                                            alt="">
                                        <h5 class="mb-0">Emily Rodriguez</h5>
                                        <small>Mobile App Developer</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-4.jpg"
                                            alt="">
                                        <h5 class="mb-0">David Park</h5>
                                        <small>Project Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
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
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Testimonials</div>
                    <h1 class="mb-4">What Our Clients Say</h1>
                    <p class="mb-4">Don't just take our word for it. Here's what some of our satisfied clients have
                        to say about our software development services. From startups to enterprises, we've helped
                        businesses of all sizes achieve their digital goals.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">View All Testimonials</a>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">The team delivered an outstanding web application that exceeded our
                                expectations. Their expertise in both front-end and back-end development is impressive.
                                They were responsive, professional, and a pleasure to work with throughout the project.
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">John Smith</h5>
                                    <span>CEO, TechInnovate Inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">We approached the team for a complete overhaul of our e-commerce website.
                                Not only did they deliver a beautiful, user-friendly design, but they also integrated
                                complex features seamlessly. Our online sales have increased significantly since the
                                launch.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Sarah Johnson</h5>
                                    <span>Marketing Director, FashionForward</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">The mobile app they developed for our startup has been a game-changer.
                                It's fast, intuitive, and our users love it. The team's expertise in both iOS and
                                Android development ensured a smooth launch on both platforms. Highly recommended!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mike Chen</h5>
                                    <span>Co-founder, HealthTech Solutions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Newsletter Start -->
    {{-- <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">Let's subscribe the newsletter</h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                    <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-white">Ahms<span class="text-primary">.</span>Tech</h1>
                    </a>
                    <p class="mb-0">At AhmsTech, we're passionate about crafting innovative digital solutions. From stunning websites to powerful web and mobile apps, we bring your ideas to life with cutting-edge technology and sleek designs.</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    {{-- <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p> --}}
                    <p><i class="fa fa-phone-alt me-3"></i>+233 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@ahmstech.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    {{-- <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Career</a> --}}
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">Web Development</a>
                    <a class="btn btn-link" href="">Mobile App Development</a>
                    <a class="btn btn-link" href="">Graphic & UI Design</a>
                    <a class="btn btn-link" href="">Web Application Development</a>
                    {{-- <a class="btn btn-link" href="">Robot Technology</a> --}}
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">AhmsTech</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        {{-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> --}}
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
