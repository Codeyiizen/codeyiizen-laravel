@extends('front-end.layouts.mainlayout')
@section('styles')
@endsection
@section('content')
<div id="progress-bar"></div>
  <!-- top progress bar end -->

  <!--Start Preloader -->
  <div class="onloadpage" id="page_loader">
    <div class="pre-content">
      <div class="logo-pre"><img src="{{ url('/') }}/public/assets/images/logo_white.png" alt="Logo" class="img-fluid" /></div>
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
                  <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
                  <div class="col-md-12"><input type="text" placeholder="Subject" name="subject">
                  </div>
                  <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea>
                  </div>
                </div>
                <div class="fieldsets mt20 pb20">
                  <button type="submit" name="submit" class="lnk btn-main bg-btn" data-dismiss="modal">Submit
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
  <section class="breadcrumb-area banner-3">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-menu">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                </ul>
              </div>
              <div class="bread-title">
                <h2>Our Projects</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <!--Start Portfolio-->
  <section class="portfolio-page pad-tb">
    <div class="container">
      <div class="row justify-content-left">
        <div class="col-lg-4">
          <div class="common-heading pp">
            <span>Our Work</span>
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="col-lg-8 v-center">
          <div class="filters">
            <ul class="filter-menu">
              <li data-filter="*" class="is-checked">All</li>
              <li data-filter=".ecommerce">E-commerce</li>
              <li data-filter=".app">Mobile App</li>
              <li data-filter=".news-portal">News Portal</li>
              <li data-filter=".web-design">Web Design</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row card-list">
        <div class="col-lg-4 col-md-6 grid-sizer"></div>
        <div class="col-lg-4 col-sm-6 single-card-item app">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/lido-macaro3.jpg" alt="Lido Macaro" class="img-fluid" />
              </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Macarro - Beach Booking</a></h4>
              <p>Android App</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item web-design">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/iecc_tablet.jpg"
                  alt="International Education Counselling Centre (IECC)" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">International Education (IECC)</a></h4>
              <p>Web Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item web-design">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/statuslabs.png"
                  alt="Digital Reputation Management" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Digital Reputation Management</a></h4>
              <p>Web Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item ecommerce">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/tradecj2.png" alt="Trade Cluj - Online store"
                  class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Ecommerce Development</a></h4>
              <p>Web Application</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item app">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/image-4.jpg" alt="image" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Icon Pack</a></h4>
              <p>Android & iOs, Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item ecommerce">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/image-5.jpg" alt="image" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Smart Watch</a></h4>
              <p>UI/UX Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item ecommerce">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/image-6.jpg" alt="image" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Brochure Design</a></h4>
              <p>Graphic, Print</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item web-design">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/botbiz.png" alt="Botbiz" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Botbiz - Crypto Currency</a></h4>
              <p>Web Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item web-design">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/cas2.jpg" alt="CAS Course Finder" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">CAS Course Finder</a></h4>
              <p>Web Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item web-design">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/maccaro-desktop.png"
                  alt="Macarro beach" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Macarro - Beach Booking</a></h4>
              <p>Web Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item app">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/image-8.jpg" alt="image" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Restaurant App</a></h4>
              <p>Android App</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item  web-design">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/asset/images/portfolio/samsglobal.png" alt="Student Admission Management System"
                  class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="https://www.samsglobal.co.uk/">SAMS Global</a></h4>
              <p>Web Design</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 single-card-item news-portal">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/prabhatmediacreations2.png" alt="Prabhat Media Creations"
                  class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Prabhat Media Creations</a></h4>
              <p>News Portal</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item app">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/yper2.jpg" alt="image" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Chef Service</a></h4>
              <p>Android App</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 single-card-item  news-portal">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/image-9.jpg" alt="image" class="img-fluid" /> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Portfolio Website</a></h4>
              <p>Web Design</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('script')
// code for page specific script
@endsection