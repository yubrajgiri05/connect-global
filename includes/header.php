<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect global</title>
    <!-- custome css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- fontawesome css  -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- favicon  -->
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <!-- bootstrap css  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- fancy-box  -->
    <link rel="stylesheet" href="css/fancybox.css" />
    <!-- magnific-popup css  -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- carousel.min -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="connect-global-body">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="./images/logo1.png" alt="">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about.php">Our Story</a></li>
                                <li><a class="dropdown-item" href="team.php">Our Team</a></li>
                                <li><a class="dropdown-item" href="legal.php">Legal Documents</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Vacancy
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="job.php">Jobs</a></li>
                                <li><a class="dropdown-item" href="demands.php">Demands </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Our Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="service.php">Recruitment</a></li>
                                <li><a class="dropdown-item" href="service.php">Hotline</a></li>
                                <li><a class="dropdown-item" href="service.php">Training</a></li>
                                <li><a class="dropdown-item" href="service.php">Counseling</a></li>
                                <li><a class="dropdown-item" href="process.php">Our Process</a></li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#QueryForm">
                                Inquiry
                            </button>
                        </li>
                        <li>
                            <div class="hamburger-menu">
                                <a href="javascript:void(0);" data-side-nav-target="#mySideNav" class="sideNavOpen"><i
                                        class="fas fa-bars"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div id="mySideNav" class="sidenav">
        <div class="side-nav-tabs-wrapper">
            <div class="side-nav-close-btn">
                <a class="sideNavClose" data-side-nav-target="#mySideNav"><i class="fas fa-bars"></i></a> <span>Connect
                    Global</span>
            </div>
            <div class="d-flex align-items-start side-nav-navigation">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active " id="v-pills-About-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-About" type="button" role="tab" aria-controls="v-pills-About"
                        aria-selected="true">About</button>
                    <button class="nav-link" id="v-pills-Services-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-Services" type="button" role="tab" aria-controls="v-pills-Services"
                        aria-selected="false">Our Services</button>
                    <button class="nav-link" id="v-pills-vacancy-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-vacancy" type="button" role="tab" aria-controls="v-pills-vacancy"
                        aria-selected="false">Vacancy</button>
                    <button class="nav-link" id="v-pills-Publications-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-Publications" type="button" role="tab"
                        aria-controls="v-pills-Publications" aria-selected="false">Publications</button>
                    <a class="nav-link" href="Contact.php">Contact</a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-About" role="tabpanel"
                        aria-labelledby="v-pills-About-tab">
                        <div class="v-pills-content-wrapper">
                            <ul>
                                <li><a href="about.php">Our Story</a></li>
                                <li><a href="team.php">Our Team</a></li>
                                <li><a href="legalDocument.php">Legal Documents</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Services" role="tabpanel"
                        aria-labelledby="v-pills-Services-tab">
                        <div class="v-pills-content-wrapper">
                            <ul>
                                <li><a href="service.php">Recruitment</a></li>
                                <li><a href="service.php">Hotline</a></li>
                                <li><a href="service.php">Training</a></li>
                                <li><a href="service.php">counseling</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-vacancy" role="tabpanel"
                        aria-labelledby="v-pills-vacancy-tab">
                        <div class="v-pills-content-wrapper">
                            <ul>
                                <li><a href="job.php">Jobs</a></li>
                                <li><a href="demands.php">Demands</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Publications" role="tabpanel"
                        aria-labelledby="v-pills-Publications-tab">
                        <div class="v-pills-content-wrapper">
                            <ul>
                                <li><a href="news.php">News & Notice</a></li>
                                <li><a href="blogs.php">Blogs</a></li>
                                <li><a href="Gallery.php">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-information">
                <ul>
                    <li>
                        <div class="wrapper">
                            <img src="./images/icon-phone.png" alt=""> <a href="tel:0123456789">9885456859</a>
                        </div>
                    </li>
                    <li>
                        <div class="wrapper">
                            <img src="./images/icon-mail.png" alt=""> <a
                                href="mailto:xyz@abc.com">contact@connectglobalhr.com</a>
                        </div>
                    </li>
                    <li>
                        <div class="wrapper">
                            <img src="./images/icon-location.png" alt="">
                            Sukedhara Marg Kathmandu
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="figure-social-media">
            <div class="image-source">
                <img class="active" alt="" src="images/nav-tab.jpg">
                <img alt="" src="images/achi1.png">
                <img alt="" src="images/news8.png">
                <img alt="" src="images/news5.png">
            </div>
            <div class="social-media">
                <ul>
                    <li><a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"
                                aria-hidden="true"></i></a>
                    </li>
                    <li><a class="twitter" href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                    <li><a class="instagram" href="#" target="_blank"><i class="fab fa-instagram"
                                aria-hidden="true"></i></a>
                    </li>
                    <li><a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"
                                aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="QueryForm" tabindex="-1" aria-labelledby="QueryFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="section-heading ">
                        <span>Send Us Your Query</span>
                        <div class="main-title">Want To<span> Ask Anything?</span></div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-element">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Full Name">
                            <div class="error-message">Name is required.</div>
                        </div>
                        <div class="mb-3">
                            <label for=" appointmentdate" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="Email">
                            <div class="error-message">Date is required.</div>
                        </div>
                        <div class="mb-3">
                            <label for=" number" class="form-label">Phone Number</label>
                            <input type="email" class="form-control" id="Email" placeholder="Your mobile number">
                            <div class="error-message">Mobile Number is required.</div>
                        </div>
                        <div class="mb-3">
                            <label for=" message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                                placeholder="Describe what you want to discuss...."></textarea>
                            <div class="error-message">Message is required.</div>
                        </div>
                        <div class="custom-button mt-4 text-end">
                            <button type="submit">Send Inquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>