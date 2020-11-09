<!DOCTYPE html>
<html lang="en">
    <?php 
        $title="Home";
        require_once("templates/head.php");
     ?>
    <body id="page-top">
        <!-- Loader icon -->
        <div class="se-pre-con"></div>
        <!-- header starts here -->
        <?php include_once 'templates/includes/header.php'; ?>
       <!-- header ends here -->
       <!-- navbar starts here -->
       <?php include_once 'templates/includes/nav.php'; ?>
        <!-- Slider -->
        <?php include_once 'templates/includes/slider.php'; ?>
        <!-- About section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 hidden-xs hidden-sm">
                        <img src="images/about.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="about-des">
                            <h3>ABOUT US</h3>
                            <h5>What we are and our history</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                                leap into electronic typesetting,</p>
                            <button type="button" class="thm-btn">read more</button>
                            <hr>
                            <h3>VISION & MISSION </h3>
                            <h5>Our goal and thoughts</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                                leap into electronic typesetting,</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section -->
        <section class="grid-inner">
            <div class="container my-padding">
                <div class="row my-row">
                    <!-- Service List -->
                    <div class="col-sm-4 my-padding">
                        <div class="coloumn c-box-1">
                            <h1>Our services list</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it 
                                to make a type specimen book.</p>
                            <a href="#service" class="thm-btn page-scroll">View all Services</a>
                        </div>
                    </div>
                    <!-- Benefits -->
                    <div class="col-sm-4 my-padding">
                        <div class="coloumn c-box-2">
                            <h3>Our Benefits</h3>
                            <p>It is a long established fact that a reader will .</p>
                            <ul>
                                <li><i class="fa fa-caret-right"></i>Qualified Staff of Doctors  </li>
                                <li><i class="fa fa-caret-right"></i>Employee Occupational Health & Wellness</li>
                                <li><i class="fa fa-caret-right"></i>Save Your Money and Time with us</li>
                                <li><i class="fa fa-caret-right"></i>24x7 Emergency service</li>
                                <li><i class="fa fa-caret-right"></i>Feel Like you are at Home Services</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Working Hours -->
                    <div class="col-sm-4 my-padding">
                        <div class="coloumn c-box-3">
                            <h3>Our Working Hours</h3>
                            <p>It is a long established fact that a reader will .</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Monday-Wednesday</td>
                                        <td class="text-right">08.00-18.00</td>
                                    </tr>
                                    <tr>
                                        <td>Thursday -Friday</td>
                                        <td class="text-right">08.00-18.00</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td class="text-right">08.00-18.00</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td class="text-right">Closed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <!-- Main Title -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="title-block">
                            <h3>Service We Offer</h3>
                            <p>Our department & special service </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-ambulance-1 icon-color-1 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Emergency Care</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-stethoscope-1 icon-color-2 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Call Center 24/7</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-telephone icon-color-3 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Call Center 24/7</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-medical-2 icon-color-4 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Blood Test</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-pulse icon-color-5 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Cardiac Surgery</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-molar-1 icon-color-6 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Dental Care </h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-stethoscope-1 icon-color-7 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Outdoor Checkup</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-medical icon-color-8 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Ophthalmology</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 hidden-sm">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-heart icon-color-9 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Heart disease</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose Us Section -->
        <section id="appointment" class="choose-form-inner">
            <div class="container">
                <div class="row">
                    <!-- Main Title -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="title-block">
                            <h3>Why Choose Us</h3>
                            <p>Our department & special service </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Appointment Form -->
                    <div class="col-sm-6 col-md-4">
                        <div id="form" class="form-area">  
                            <form>
                                <div class="form-padding">
                                    <h4>Appointment form</h4>
                                    <div class="form-group">
                                        <label>NAME AND SURNAME</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label>PHONE NUMBER</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>PATIENT NUMBER</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>DATE FORM</label>
                                                <input type="text" class="form-control" id="datepicker" name="date-form" placeholder="Form">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>DATE To</label>
                                                <input type="text" class="form-control" id="datepicker2" name="date_to" placeholder="To">
                                            </div>
                                        </div>
                                    </div>
                                    <label>HOURLY PREFERENCE</label>
                                    <div class="check-btn" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" id="option1" checked> MORNING
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option2"> LUNCH
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option3"> EVENING
                                        </label>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Send me copy of message</label>
                                    </div>
                                    <button type="button" id="submit" name="submit" class="btn thm-btn">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Doctor Image -->
                    <div class="col-md-4 hidden-sm">
                        <div class="doctor_img">
                            <img src="images/appointment.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <!-- Reason -->
                    <div class="col-sm-6 col-md-4">
                        <div class="choose">
                            <div class="choose-icon">
                                <i class="flaticon-telephone icon-color-3"></i>
                            </div>
                            <div class="choose-content">
                                <h4>Health Information</h4>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                            </div>
                        </div>
                        <div class="choose">
                            <div class="choose-icon">
                                <i class="flaticon-microscope icon-color-6"></i>
                            </div>
                            <div class="choose-content">
                                <h4>Medical Education</h4>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                            </div>
                        </div>
                        <div class="choose">
                            <div class="choose-icon">
                                <i class="flaticon-medical-2 icon-color-4 "></i>
                            </div>
                            <div class="choose-content">
                                <h4>Symptom Check</h4>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                            </div>
                        </div>
                        <div class="choose">
                            <div class="choose-icon">
                                <i class="flaticon-people-1 icon-color-7"></i>
                            </div>
                            <div class="choose-content">
                                <h4>Qualified Doctors</h4>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Doctor Section -->
        <section id="doctor" class="doctor-inner">
            <div class="container">
                <div class="row">
                    <!-- Main Title -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="title-block">
                            <h3>OUR DOCTOR</h3>
                            <p>Our department & special service </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl_wrapper">
                        <div id="owl-doctor" class="owl-carousel">
                            <div class="item">
                                <div class="single-item">
                                    <div class="doctor-img">
                                        <a class="primary-img" href="#"><img src="images/doctor_1.png" class="img-responsive" alt=""></a>
                                        <div class="social-icon">
                                            <div class="icon-table">
                                                <div class="icon-row">
                                                    <div class="icon-cell">
                                                        <div class="icon-wrap">
                                                            <ul>
                                                                <li>
                                                                    <div class="icon-list">
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa  fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-name">
                                        <h4>Dr. David Moniky</h4>
                                        <h5>Huntington's</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-item">
                                    <div class="doctor-img">
                                        <a class="primary-img" href="#"><img src="images/doctor_2.png" class="img-responsive" alt=""></a>
                                        <div class="social-icon">
                                            <div class="icon-table">
                                                <div class="icon-row">
                                                    <div class="icon-cell">
                                                        <div class="icon-wrap">
                                                            <ul>
                                                                <li>
                                                                    <div class="icon-list">
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa  fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-name">
                                        <h4>Dr. Naeem Khan</h4>
                                        <h5>Ophthalmology</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-item">
                                    <div class="doctor-img">
                                        <a class="primary-img" href="#"><img src="images/doctor_3.png" class="img-responsive" alt=""></a>
                                        <div class="social-icon">
                                            <div class="icon-table">
                                                <div class="icon-row">
                                                    <div class="icon-cell">
                                                        <div class="icon-wrap">
                                                            <ul>
                                                                <li>
                                                                    <div class="icon-list">
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa  fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-name">
                                        <h4>Dr. Tanjil Ahmed</h4>
                                        <h5>Dental</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-item">
                                    <div class="doctor-img">
                                        <a class="primary-img" href="#"><img src="images/doctor_4.png" class="img-responsive" alt=""></a>
                                        <div class="social-icon">
                                            <div class="icon-table">
                                                <div class="icon-row">
                                                    <div class="icon-cell">
                                                        <div class="icon-wrap">
                                                            <ul>
                                                                <li>
                                                                    <div class="icon-list">
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa  fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-name">
                                        <h4>Dr. Tuhin Sorker</h4>
                                        <h5>Heart disease</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-item">
                                    <div class="doctor-img">
                                        <a class="primary-img" href="#"><img src="images/doctor_1.png" class="img-responsive" alt=""></a>
                                        <div class="social-icon">
                                            <div class="icon-table">
                                                <div class="icon-row">
                                                    <div class="icon-cell">
                                                        <div class="icon-wrap">
                                                            <ul>
                                                                <li>
                                                                    <div class="icon-list">
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa  fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-name">
                                        <h4>Dr. David Moniky</h4>
                                        <h5>Ophthalmology</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Department Section -->
        <section id="department">
            <div class="container">
                <div class="row">
                    <!-- Main Title -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="title-block">
                            <h3>DEPARTMENT</h3>
                            <p>Our department & special service </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 bhoechie-tab-container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 bhoechie-tab-menu">
                                <div class="list-group">
                                    <a href="#" class="list-group-item active text-center">
                                        <i class="flaticon-heart-1"></i>
                                        <h4>Heart disease</h4>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <i class="flaticon-liver"></i>
                                        <h4>Hepatology</h4>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <i class="flaticon-brain"></i>
                                        <h4>Huntington's</h4>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <i class="flaticon-molar"></i>
                                        <h4>Dental</h4>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <i class="flaticon-medical"></i>
                                        <h4>Ophthalmology</h4>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <i class="flaticon-ear-lobe-side-view-outline"></i>
                                        <h4>Otology</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 bhoechie-tab">
                                <div class="bhoechie-tab-content active">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dep-icon">
                                                <i class="flaticon-heart-1"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="disease-des">
                                                <h2>Heart disease</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                                                    Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator
                                                    on the Internet.</p>
                                                <a  href="#form" class="thm-btn page-scroll">Make Appointment</a>
                                                <a  href="#" class="thm-btn btn-black">All Departments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bhoechie-tab-content">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dep-icon">
                                                <i class="flaticon-liver"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="disease-des">
                                                <h2>Hepatology</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                                                    Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator
                                                    on the Internet.</p>
                                                <a  href="#form" class="thm-btn page-scroll">Make Appointment</a>
                                                <a  href="#" class="thm-btn btn-black">All Departments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bhoechie-tab-content">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dep-icon">
                                                <i class="flaticon-brain"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="disease-des">
                                                <h2>Huntington's</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                                                    Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator
                                                    on the Internet.</p>
                                                <a  href="#form" class="thm-btn page-scroll">Make Appointment</a>
                                                <a  href="#" class="thm-btn btn-black">All Departments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bhoechie-tab-content">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dep-icon">
                                                <i class="flaticon-molar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="disease-des">
                                                <h2>Dental</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                                                    Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator
                                                    on the Internet.</p>
                                                <a  href="#form" class="thm-btn page-scroll">Make Appointment</a>
                                                <a  href="#" class="thm-btn btn-black">All Departments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bhoechie-tab-content">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dep-icon">
                                                <i class="flaticon-medical"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="disease-des">
                                                <h2>Ophthalmology</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                                                    Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator
                                                    on the Internet.</p>
                                                <a  href="#form" class="thm-btn page-scroll">Make Appointment</a>
                                                <a  href="#" class="thm-btn btn-black">All Departments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bhoechie-tab-content">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dep-icon">
                                                <i class="flaticon-ear-lobe-side-view-outline"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="disease-des">
                                                <h2>Otology</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                                                    Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator
                                                    on the Internet.</p>
                                                <a  href="#form" class="thm-btn page-scroll">Make Appointment</a>
                                                <a  href="#" class="thm-btn btn-black">All Departments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section --> 
        <section id="testimonial" class="testimonial-inner">
            <div class="container">
                <div class="row">
                    <!-- Image -->
                    <div class="col-md-5 col-sm-8 hidden-xs hidden-sm">
                        <div class="costom-img">
                            <img src="images/com.png" alt="" class="img-responsive center-block">
                        </div>
                    </div>
                    <!-- Customer Comments -->
                    <div class="col-xs-12 col-md-7 col-sm-12">
                        <div class="comment-wrapper">
                            <div class="comment-title"><h1>Customer comments</h1></div>
                            <div id="owl-testimonial" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="article">
                                        <p>All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true on the Internet. uses a dictionary of over.</p>
                                        <div class="customers"> - Mozammel Hoque,<span> Advisor</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="article">
                                        <p>All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true on the Internet. uses a dictionary of over.</p>
                                        <div class="customers"> - Mozammel Hoque,<span> Advisor</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="article">
                                        <p>All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true on the Internet. uses a dictionary of over.</p>
                                        <div class="customers"> - Mozammel Hoque,<span> Advisor</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section -->
        <section id="blog" class="blog-inner">
            <div class="container">
                <div class="row">
                    <!-- Main Title -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="title-block">
                            <h3>LATEST NEWS</h3>
                            <p>Our department & special service </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="blog-post">
                            <div class="frame">
                                <a href="#" class="zoom">
                                    <i class="fa fa-link"></i></a>
                                <img src="images/blog_1.jpg" class="img-responsive" alt="img">
                            </div>
                            <div class="content-box">
                                <div class="date-box">
                                    <div class="inner">
                                        <div class="date"><b>25</b> Oct</div>
                                        <div class="comment"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 3</div>
                                    </div>
                                </div>
                                <div class="post-inner">
                                    <span>Tag: <a href="blog-details.php">Medical, Doctor</a></span>
                                    <h3><a href="#">Lates blog post with image</a></h3>
                                    <p>There are many variations passages available, but the lorem, ipsum sit have suffered alteration</p>
                                    <a href="blog-details.php" class="thm-btn page-scroll">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-md-4 col-sm-6">
                        <div class="blog-post">
                            <div class="frame">
                                <a href="#" class="zoom">
                                    <i class="fa fa-link"></i></a>
                                <img src="images/blog_2.jpg" class="img-responsive" alt="img">
                            </div>
                            <div class="content-box">
                                <div class="date-box">
                                    <div class="inner">
                                        <div class="date"><b>25</b> Oct</div>
                                        <div class="comment"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 3</div>
                                    </div>
                                </div>
                                <div class="post-inner">
                                    <span>Tag: <a href="blog-details.php">Medical, Doctor</a></span>
                                    <h3><a href="#">Lates blog post with image</a></h3>
                                    <p>There are many variations passages available, but the lorem, ipsum sit have suffered alteration</p>
                                    <a href="blog-details.php" class="thm-btn page-scroll">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-md-4 col-sm-6 hidden-sm">
                        <div class="blog-post">
                            <div class="frame">
                                <a href="#" class="zoom">
                                    <i class="fa fa-link"></i></a>
                                <img src="images/blog_3.jpg" class="img-responsive" alt="img">
                            </div>
                            <div class="content-box">
                                <div class="date-box">
                                    <div class="inner">
                                        <div class="date"><b>25</b> Oct</div>
                                        <div class="comment"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 3</div>
                                    </div>
                                </div>
                                <div class="post-inner">
                                    <span>Tag: <a href="blog-details.php">Medical, Doctor</a></span>
                                    <h3><a href="#">Lates blog post with image</a></h3>
                                    <p>There are many variations passages available, but the lorem, ipsum sit have suffered alteration</p>
                                    <a href="blog-details.php" class="thm-btn page-scroll">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Section -->
        <?php include_once 'templates/includes/footer.php'; ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script type="aa3a49192a823535c0f0a018-text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVtjo9eO4klWhYbHwL9jObfuke4rxSWWc"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <!-- REVOLUTION JS FILES -->
        <script src="revolution/js/jquery.themepunch.tools.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
                (Load Extensions only on Local File Systems ! 
                 The following part can be removed on Server for On Demand Loading) -->	
        <script src="revolution/js/extensions/revolution.extension.actions.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script src="revolution/js/extensions/revolution.extension.carousel.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script src="revolution/js/extensions/revolution.extension.kenburn.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script src="revolution/js/extensions/revolution.extension.migration.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script src="revolution/js/extensions/revolution.extension.navigation.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script src="revolution/js/extensions/revolution.extension.parallax.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <script src="revolution/js/extensions/revolution.extension.slideanims.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <!-- owl carousel js -->
        <script src="owl-carousel/owl.carousel.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <!-- Jquery Ui -->
        <script src="js/jquery-ui.min.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
        <!-- Custom Js -->
        <script src="js/custom.js" type="aa3a49192a823535c0f0a018-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="aa3a49192a823535c0f0a018-|49" defer=""></script><script type="text/javascript">(function(){window['__CF$cv$params']={r:'5e7398facc287215',m:'d41e96ed26572afa54b896d2f5cdc4961639102c-1603541457-1800-Ad8FTKsh3xBFEyKjNoduzzQ7Sy978F8lUV/alGGHycqAr2lKliN2+4yx1xThWjOSidEn2ZxHe4d+6pNyXJoPEAPWe8458/Y3nMAqXs43tk/U/1pKvZtT4oUVmpNrJT3C6w==',s:[0xf2e0f28e60,0x0e4b6e1a58],}})();</script></body>
</html>