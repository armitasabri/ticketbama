@extends('layouts.confer.master')

@section('contactus')

  <!-- Breadcrumb Area Start -->
  <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">تماس با ما</h2>
                    <nav aria-label="breadcrumb">
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol> --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Contact Us Area Start -->
<section class="contact--us-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Contact Us Thumb -->
            <div class="col-12 col-lg-6">
                <div class="contact-us-thumb mb-100">
                <img src="{{asset('assets/img/contactus/people.png')}}" alt="">
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-12 col-lg-6">
                <div class="contact_from_area mb-100 clearfix">
                    <!-- Contact Heading -->
                    <div class="contact-heading">
                        <h4>با ما در تماس باشید</h4>
                        <p> منتظر دریافت پیام‌های شما هستیم. </p>
                    </div>
                    <div class="contact_form">
                        <form action="mail.php" method="post">
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="name" id="name" placeholder="اسم">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="name" id="name2" placeholder="فامیل">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control mb-30" name="email" id="email" placeholder="ایمیل">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="موبایل">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="پیام شما *"></textarea>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn confer-btn">ارسال پیام <i class="zmdi zmdi-long-arrow-left"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Area End -->

<!-- Map Area -->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.7414589865143!2d51.40887265101901!3d35.73257648008504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e060ddacbb909%3A0x2297707295d2278b!2sTehran%20Province%2C%20Tehran%2C%20Valiasr%20St%2C%20Iran!5e0!3m2!1sen!2s!4v1585585541243!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<!-- Contact Info Area -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contact--info-area bg-boxshadow">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <!-- Contact Info Icon -->
                            <div class="contact--info-icon">
                            <img src="{{asset('assets/img/core-img/icon-5.png')}}" alt="">
                            </div>
                            <h5>خیابان ولی‌عصر</h5>
                        </div>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <!-- Contact Info Icon -->
                            <div class="contact--info-icon">
                                <img src="{{asset('assets/img/core-img/icon-6.png')}}" alt="">
                            </div>
                            <h5>(021) 88999989</h5>
                        </div>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <!-- Contact Info Icon -->
                            <div class="contact--info-icon">
                                <img src="{{asset('assets/img/core-img/icon-7.png')}}" alt="">
                            </div>
                            <h5>onlineticket@gmail.com</h5>
                        </div>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <!-- Contact Info Icon -->
                            <div class="contact--info-icon">
                                <img src="{{asset('assets/img/core-img/icon-8.png')}}" alt="">
                            </div>
                            <h5>www.onlineticket.com</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection