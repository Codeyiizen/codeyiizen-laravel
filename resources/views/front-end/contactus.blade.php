@extends('front-end.layouts.mainlayout')
@section('styles')
@endsection
@section('content')
<div id="progress-bar"></div>
<!-- top progress bar end -->

<!--Start Preloader -->
<div class="onloadpage" id="page_loader">
    <div class="pre-content">
        <div class="logo-pre"><img src="assets/images/logo_white.png" alt="Logo" class="img-fluid" /></div>
        <div class="pre-text- text-radius text-light text-animation bg-b">Website Designing Company in Delhi, Web
            Development Company in India | Codeyiizen</div>
    </div>
</div>
<!--End Preloader -->
<!--Start Header -->
@include('front-end.layouts.partials.navbar')
<!--Mobile contact-->
<div class="popup-modal1">
    <div class="modal" id="menu-popup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="common-heading">
                        <h4 class="mt0 mb0">Write a Message</h4>
                    </div>
                    <button type="button" class="closes" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-block fdgn2 mt10 mb10">
                        <form action="#" method="post" name="feedback-form">
                            <div class="fieldsets row">
                                <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                                <div class="col-md-12"><input type="email" placeholder="Email Address" name="email">
                                </div>
                                <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone">
                                </div>
                                <div class="col-md-12"><input type="text" placeholder="Subject" name="subject">
                                </div>
                                <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="fieldsets mt20 pb20">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn"
                                    data-dismiss="modal">Submit
                                    <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Mobile contact-->
<!--End Header -->
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-6">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Enquire Form-->
<section class="contact-page pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 v-center">
                <div class="common-heading text-l">
                    <span>Contact Now</span>
                    <h2 class="mt0 mb0">Have Question? Write a Message</h2>
                    <p class="mb60 mt20">We will catch you as early as we receive the message</p>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="form-block">
                    <form id="contactFormc" action="{{ route('save.contact.form') }}" method="post"
                        data-bs-toggle="validator" class="shake">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" id="name" name="name" placeholder="Enter name" requiredx
                                    data-errord="Please fill Out">
                                @if ($errors->has('name'))
                                <div class="p-2">
                                    <span class="text-danger ">{{ $errors->first('name') }}</span>
                                </div>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" id="email" name="email" placeholder="Enter email" requiredc>
                                @if ($errors->has('email'))
                                <div class="p-2">
                                    <span class="text-danger ">{{ $errors->first('email') }}</span>
                                </div>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" id="mobile" name="mobile" placeholder="Enter mobile" requiredc
                                    data-error="Please fill Out" value="">
                                @if ($errors->has('mobile'))
                                <div class="p-2">
                                    <span class="text-danger ">{{ $errors->first('mobile') }}</span>
                                </div>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <select name="requirement" id="Dtype" requiredc>
                                    <option value="">Select Requirement</option>
                                    <option value="web">web</option>
                                    <option value="graphic">graphic</option>
                                    <option value="video">video</option>
                                </select>
                                @if ($errors->has('requirement'))
                                <div class="p-2">
                                    <span class="text-danger ">{{ $errors->first('requirement') }}</span>
                                </div>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="message" rows="5" name="massage" placeholder="Enter your message"
                                requiredc></textarea>
                            @if ($errors->has('massage'))
                            <div class="p-2">
                                <span class="text-danger ">{{ $errors->first('massage') }}</span>
                            </div>
                            @endif
                            <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span
                                class="circle"></span></button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 v-center">
                <div class="contact-details">
                    <div class="contact-card wow fadeIn" data-wow-delay=".2s">
                        <div class="info-card v-center">
                            <span><i class="fas fa-phone-alt"></i> Phone:</span>
                            <div class="info-body">
                                <p>Assistance hours: Monday – Friday, 10 am to 8 pm</p>
                                <a href="tel:+919266913291">+91 9266913291</a>
                            </div>
                        </div>
                    </div>
                    <div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
                        <div class="info-card v-center">
                            <span><i class="fas fa-envelope"></i> Email:</span>
                            <div class="info-body">
                                <p>Our support team will get back to in 24-h during standard business hours.</p>
                                <a href="mailto:business@codeyiizen.com">business@codeyiizen.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
                        <div class="info-card v-center">
                            <span><i class="fab fa-skype"></i> Skype:</span>
                            <div class="info-body">
                                <p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
                                <a href="skype:codeyiizen?call">codeyiizen</a>,
                                <a href="skype:sales_76384?call">live:sales_76384</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Enquire Form-->
<!--Start Location-->
<!-- <section class="contact-location pad-tb bglight">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Our Locations</span>
                    <h2>Our office</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center upset shape-numm">
            <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                <div class="office-card">
                    <div class="skyline-img">
                        <img src="assets/images/location/newyork.png" alt="New York" class="img-fluid" />
                    </div>
                    <div class="office-text">
                        <h4>New Delhi</h4>
                        <p>292-B, Rohini Sector - 5 <br />New Delhi - 110085, India</p>
                        <a href="https://goo.gl/maps/qMmuRYhSawyQxZvs8" target="blank" class="btn-outline">View on
                            Map <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".4s">
                <div class="office-card">
                    <div class="skyline-img">
                        <img src="assets/images/location/sydeny.png" alt="sydney" class="img-fluid" />
                    </div>
                    <div class="office-text">
                        <h4>London</h4>
                        <p>9 high street N146LD - London, <br />United Kingdom</p>
                        <a href="https://goo.gl/maps/qMmuRYhSawyQxZvs8" target="blank" class="btn-outline">View on
                            Map <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".6s">
                <div class="office-card mb0">
                    <div class="skyline-img">
                        <img src="assets/images/location/rome.png" alt="rome" class="img-fluid" />
                    </div>
                    <div class="office-text">
                        <h4>USA</h4>
                        <p>960 N Roosevelt Fresno,<br /> Ca 93278</p>
                        <a href="https://goo.gl/maps/qMmuRYhSawyQxZvs8" target="blank" class="btn-outline">View on
                            Map <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@include('front-end.ouroffice')
@endsection
@section('script')
// code for page specific script
@endsection