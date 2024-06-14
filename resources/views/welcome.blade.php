@extends('front-end.layouts.mainlayout')
@section('styles')
@endsection
@section('content')
   <!-- Custom mouse start-->
   <div class="mouse-cursor cursor"></div>
   <div class="mouse-cursor cursor-follow"></div>
   <!-- Custom mouse end-->
   <!-- top progress bar start-->
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
                           <div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
                           <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
                           <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                           <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
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
   <!--Start Hero-->
   <!-- <section class="hero-card-web bg-home overlay"> -->
   <section class="hero-card-web bg-gradient12 shape-bg3">
      <div class="hero-main-rp container-fluid">
         <div class="row">
            <div class="col-lg-5">
               <div class="hero-heading-sec">
                  <h2 class="wow fadeIn" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"><span>Web.</span>
                     <span>Mobal Apps.</span>
                     <span>News Portal.</span>
                     <span>E - commerce.</span>
                  </h2>
                  <p class="wow fadeIn" data-wow-delay="0.6s">Website and App development solution for transforming and
                     innovating businesses.</p>
                  <a href="case-study.html" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s">Contact Us<i
                        class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
                  <div class="awards-block-tt  wow fadeIn" data-wow-delay="1s"><img src="{{ url('/') }}/public/assets/images/awards-logo.png"
                        alt="awards-logo" class="img-fluid" /></div>
               </div>
            </div>
            <div class="col-lg-7">
               <br />
               <div class="hero-right-scmm">
                  <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                     <div class="owl-carousel service-card-prb">
                        <div class="service-slide card-bg-a" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                           <a href="#">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="{{ url('/') }}/public/assets/images/service/vr.png">
                                 </div>
                                 <div class="title-serv-c"><span>Frontend</span> Development</div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide card-bg-b" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                           <a href="#">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="{{ url('/') }}/public/assets/images/service/startup.png">
                                 </div>
                                 <div class="title-serv-c"><span>Web</span>Development</div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide card-bg-c" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                           <a href="#">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="{{ url('/') }}/public/assets/images/service/app-develop.png">
                                 </div>
                                 <div class="title-serv-c"><span>Mobile</span> Development</div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide card-bg-d" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                           <a href="#">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="{{ url('/') }}/public/assets/images/service/car-rental.png">
                                 </div>
                                 <div class="title-serv-c"><span>CMS</span>Development</div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide card-bg-e" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                           <a href="#">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="{{ url('/') }}/public/assets/images/service/ewallet.png">
                                 </div>
                                 <div class="title-serv-c"><span>E-Commerce</span>Development</div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide card-bg-f" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                           <a href="#">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="{{ url('/') }}/public/assets/images/service/marketing.png">
                                 </div>
                                 <div class="title-serv-c"><span>Javascript</span>Framework</div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End Hero-->
   <!--Start About-->
   <section class="about-sec-rpb pad-tb">
      <div class="container">
         <div class="row justify-content-center text-center">
            <div class="col-lg-10">
               <div class="common-heading">
                  <h1 class="mb30">Advanced <span class="text-second">Web Solutions</span> &amp; Enterprise <span
                        class="text-second">Web Apps</span> Codeyiizen Deal With</h1>
                  <span>We believe in empowering your business digitally</span>
                  <p><span class="text-radius text-light text-animation bg-b">Codeyiizen</span> is one of industrious
                     online marketplace that
                     offers <strong>Website Designing and Development</strong> with smart work to give a creative look
                     for Web. We are an award-winning well recognized for Website designing and development with highly
                     effective web solutions according to your business requirement.</p>

                  <h3 class="mt30 mb30">Convert your Ideas, into reality.</h3>
                  <p>Codeyiizen expert professional and experienced developers are engaged to find
                     the best strategies for your business growth to defeat the competitors around the world. Our
                     experienced Web designer uses alluring graphics, designs to give much clarity to your web interface
                     and layout by using adobe photoshop. Website designing and development both are required to grow
                     online business for your needs. Codeyiizen also offers outsource services in some different
                     countries worldwide like <strong>U.K, USA, UAE, Canada, Italy, Australia</strong> and many more.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End About-->
   <!--Start Service-->
   <section class="service-section-prb pt70 pb70">
      <div class="container">
         <div class="row upset">
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp"
               data-wow-delay=".2s">
               <div class="service-sec-brp srvc-bg-nx bg-gradient13 text-w">
                  <h4 class="mb10">INTEGRATED SERVICES</h4>
                  <p>Codeyiizen is a leading outsourcing company delivering Application Development Web Designing, PHP,
                     Android & iPhone App Development Services to the clients worldwide.</p>
                  <a href="javascript:void(0)" class="mt20 link-prb">Learn More <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp"
               data-wow-delay=".4s">
               <div class="service-sec-list srvc-bg-nx srcl1">
                  <img src="{{ url('/') }}/public/assets/images/icons/development.svg" alt="service">
                  <h5 class="mb10">Web Development</h5>
                  <ul class="-service-list">
                     <li> <a href="#">PHP</a> </li>
                     <li> <a href="#"><strong>.</strong>Net</a> </li>
                     <li> <a href="#">Java</a> </li>
                     <li> <a href="#">Joomla</a></li>
                  </ul>
                  <p>Web Development calls your website functionally to work well in your customize smart style.
                     Codeyiizen is one of the fastest growing web development company.</p>
               </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp"
               data-wow-delay=".6s">
               <div class="service-sec-list srvc-bg-nx srcl2">
                  <img src="{{ url('/') }}/public/assets/images/icons/ecommerce.svg" alt="service">
                  <h5 class="mb10">E-commerce Development</h5>
                  <ul class="-service-list">
                     <li> <a href="#">Magento </a> </li>
                     <li> <a href="#">WP</a> </li>
                     <li> <a href="#">Shopify </a> </li>
                     <li> <a href="#">Joomla</a></li>
                  </ul>
                  <p>E-commerce websites and web application are in extreme demand for online business purpose. Our
                     professional experts manage prestashop development.</p>
               </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp"
               data-wow-delay=".8s">
               <div class="service-sec-list srvc-bg-nx srcl3">
                  <img src="{{ url('/') }}/public/assets/images/icons/app.svg" alt="service">
                  <h5 class="mb10">Mobile App Development</h5>
                  <ul class="-service-list">
                     <li> <a href="#">iPhone </a> </li>
                     <li> <a href="#">Android</a> </li>
                     <li> <a href="#">Cross Platform </a></li>
                  </ul>
                  <p>We are expert in the mobile development for Android, IOS, Windows and Phonegap. Mobile apps are
                     highly in trend on the Internet marketplace.</p>
               </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp"
               data-wow-delay="1s">
               <div class="service-sec-list srvc-bg-nx srcl4">
                  <img src="{{ url('/') }}/public/assets/images/icons/tech.svg" alt="service">
                  <h5 class="mb10">Trending Technologies</h5>
                  <ul class="-service-list">
                     <li> <a href="#">React.JS </a> </li>
                     <li> <a href="#">Node.JS </a> </li>
                     <li> <a href="#"> Angular.JS </a></li>
                  </ul>
                  <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                     standard dummy text ever since the 1500.</p>
               </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus mt30- wow fadeInUp"
               data-wow-delay="1.2s">
               <div class="service-sec-list srvc-bg-nx srcl5">
                  <img src="{{ url('/') }}/public/assets/images/icons/seo.svg" alt="service">
                  <h5 class="mb10">Digital Marketing</h5>
                  <ul class="-service-list">
                     <li> <a href="#">SEO </a> </li>
                     <li> <a href="#">SMO </a> </li>
                     <li> <a href="#">PPC </a></li>
                     <li> <a href="#">PPC </a></li>
                  </ul>
                  <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                     standard dummy text ever since the 1500.</p>
               </div>
            </div>
         </div>
         <div class="-cta-btn mt70">
            <div class="free-cta-title v-center zoomInDown wow" data-wow-delay="1.4s">
               <p>Hire a <span>Dedicated Developer</span></p>
               <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span
                     class="circle"></span></a>
            </div>
         </div>
      </div>
   </section>
   <!--End Service-->
   <!--Start statistics-->
   <div class="statistics-section bg-gradient6 pt70 pb70 tilt3d">
      <div class="container">
         <div class="row justify-content-center t-ctr">
            <div class="col-lg-4 col-sm-6">
               <div class="statistics">
                  <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                     <img src="{{ url('/') }}/public/assets/images/icons/startup.svg" alt="years" class="img-fluid" />
                  </div>
                  <div class="statnumb">
                     <span class="counter">6</span><span>+</span>
                     <p>Year In Business</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6">
               <div class="statistics">
                  <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                     <img src="{{ url('/') }}/public/assets/images/icons/team.svg" alt="team" class="img-fluid" />
                  </div>
                  <div class="statnumb">
                     <span class="counter">20</span><span>+</span>
                     <p>Team Members</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row small t-ctr">
            <div class="col-lg-3 col-sm-6">
               <div class="statistics">
                  <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                     <img src="{{ url('/') }}/public/assets/images/icons/deal.svg" alt="happy" class="img-fluid" />
                  </div>
                  <div class="statnumb">
                     <span class="counter">130</span><span>+</span>
                     <p>Happy Clients</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="statistics">
                  <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                     <img src="{{ url('/') }}/public/assets/images/icons/computers.svg" alt="project" class="img-fluid" />
                  </div>
                  <div class="statnumb counter-number">
                     <span class="counter">580</span><span>+</span>
                     <p>Projects Done</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="statistics">
                  <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                     <img src="{{ url('/') }}/public/assets/images/icons/worker.svg" alt="work" class="img-fluid" />
                  </div>
                  <div class="statnumb">
                     <span class="counter">15000</span><span>+</span>
                     <p>Hours Worked</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="statistics mb0">
                  <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                     <img src="{{ url('/') }}/public/assets/images/icons/customer-service.svg" alt="support" class="img-fluid" />
                  </div>
                  <div class="statnumb">
                     <span class="counter">24</span><span>/</span><span class="counter">7</span>
                     <p>Support Available</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--End statistics-->
   <!--why choose-->
   <section class="why-choos-lg pt70 pb70 deep-dark">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="common-heading text-l">
                  <span>Why Choose Us</span>
                  <h2 class="mb20">Why The Codeyiizen <span class="text-second text-bold">Ranked Top</span> Among The
                     Leading Web & App Development Companies</h2>
                  <p>There are a lot of companies that do what we do. They share the same what and how, but our clients
                     work with us for our why and our who. We're Codeyiizen, and you're in the right place.
                  </p>
                  <div class="itm-media-object mt40 tilt-3d">
                     <div class="media">
                        <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                              src="{{ url('/') }}/public/assets/images/icons/computers.svg" alt="icon" class="layer"></div>
                        <div class="media-body">
                           <h4>Strong management & Development work force</h4>
                           <p>Very strong management and development work force that is super energetic and keen in the
                              work, organized and very detailed oriented.</p>
                        </div>
                     </div>
                     <div class="media mt40">
                        <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                              src="{{ url('/') }}/public/assets/images/icons/worker.svg" alt="icon" class="layer"></div>
                        <div class="media-body">
                           <h4>Experienced Engineering Team</h4>
                           <p>– Talented, experienced engineering teams (smart & humble teams) – Good work / life
                              balance- Upper management w/ great, relevant ad tech experience</p>
                        </div>
                     </div>
                     <div class="media mt40">
                        <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img
                              src="{{ url('/') }}/public/assets/images/icons/deal.svg" alt="icon" class="layer"></div>
                        <div class="media-body">
                           <h4>Completion of Project in Given Time</h4>
                           <p>With time and capital as a very valuable asset for every client today, we expertise
                              solutions and timely projects and their future demands in accordance to their deadlines.
                           </p>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
            <div class="col-lg-6">
               <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image wow fadeIn"
                  data-wow-duration="2s"><img src="{{ url('/') }}/public/assets/images/about/about-company.jpg" alt="image" class="img-fluid">
               </div>
               <p class="text-center mt30">We measure the requirement of the clients in one go, leaving little space for
                  ambiguities, thus maximising result oriented tasks for product development and testing which increase
                  the success rate of the project deliveries on right time.</p>
               <div class="cta-card mt60 text-center">
                  <h3 class="mb20">Let's Start a <span class="text-second text-bold">New Project</span> Together</h3>
                  <p>Agile working environment for our team helps in collaborating shared vision, to earn credibility
                     and respect in the market, and also help us gain clients trust in us.</p>
                  <a href="get-quote.html" class="btn-outline lnk mt30">Request A Quote <i
                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End why choose-->
   <!--Start Portfolio-->
   <section class="portfolio-section bg-gradient6 py-5">
      <div class="row justify-content-center mb-5">
         <div class="col-lg-8">
            <div class="common-heading">
               <span>Our Work</span>
               <h2 class="mb0">Our latest work showcase</h2>
            </div>
         </div>
      </div>
      <!-- Swiper -->
      <div class="swiper mySwiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio1.png"></div>
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio2.png"></div>
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio3.png"></div>
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio4.png"></div>
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio5.png"></div>
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio6.png"></div>
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio7.png"></div>
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio8.png"></div>
            <div class="swiper-slide"><img alt="" class="img-fluid" src="{{ url('/') }}/public/assets/images/portfolio/portfolio9.png"></div>
         </div>
         <!-- If we need navigation buttons -->
         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>
      </div>
      <!-- /Swiper -->
      <div class="row d-none">
         <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.2s">
            <div class="isotope_item hover-scale">
               <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                  <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/tradecj.png" alt="Trade Cluj - Online store"
                        class="img-fluid" /> </a>
               </div>
               <div class="item-info">
                  <h4><a href="#">E-commerce Development</a></h4>
                  <p>Web Application</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.4s">
            <div class="isotope_item hover-scale">
               <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                  <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/lido-macaro.jpg" alt="Lido Macaro" class="img-fluid" />
                  </a>
               </div>
               <div class="item-info">
                  <h4><a href="#">Creative App</a></h4>
                  <p>iOs, Android</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.6s">
            <div class="isotope_item hover-scale">
               <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                  <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/yper.png" alt="Yper" class="img-fluid" /> </a>
               </div>
               <div class="item-info">
                  <h4><a href="#">Creative App</a></h4>
                  <p>iOs, Android</p>
               </div>
            </div>
         </div>
         <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.8s">
            <div class="isotope_item hover-scale">
               <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                  <a href="#"><img src="{{ url('/') }}/public/assets/images/portfolio/iecc_desktop.png"
                        alt="International Education Counselling Centre (IECC)" class="img-fluid" /> </a>
               </div>
               <div class="item-info">
                  <h4><a href="#">Responsive Web Design</a></h4>
                  <p>Responsive, Design</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End Portfolio-->
   <!--Start Clients-->
   <section class="clients-section- bg-gradient15 pt70 pb70">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="common-heading">
                  <span>Our happy customers</span>
                  <h2 class="mb30">Some of our Clients</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="clients-logos text-center col-12">
                  <ul class="row text-center clearfix">
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/tradecj.png" alt="tradecj"
                              class="img-fluid">
                        </div>
                        <p>Trade Cluj, Southeast Europe</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".4s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/nutritionslimming.png"
                              alt="nutritionslimming" class="img-fluid">
                        </div>
                        <p>Nutrition & Slimming, UK</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".6s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/statuslabs.png" alt="statuslabs"
                              class="img-fluid">
                        </div>
                        <p>Status Labs, USA</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".8s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/macarro.png" alt="macarro"
                              class="img-fluid">
                        </div>
                        <p>Lido Macarro, Europe</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/iecc.png" alt="iecc" class="img-fluid">
                        </div>
                        <p>IECC, UK</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.2s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/samsglobal.png" alt="samsglobal"
                              class="img-fluid">
                        </div>
                        <p>Samsglobal, UK</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.4s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/prabhatmediacreations.png"
                              alt="prabhatmediacreations" class="img-fluid">
                        </div>
                        <p>News Portal, India</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.6s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/digiinteracts.png" alt="digiinteracts"
                              class="img-fluid">
                        </div>
                        <p>Digi Interacts, India</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.8s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/cas.png" alt="cas" class="img-fluid">
                        </div>
                        <p>CAS, UK</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/souk.svg" alt="souk" class="img-fluid">
                        </div>
                        <p>Equipment Souk, UAE</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.2s">
                        <div class="brand-logo"><img src="{{ url('/') }}/public/assets/images/client/probot.png" alt="probot"
                              class="img-fluid">
                        </div>
                        <p>Crypto Currency, India</p>
                     </li>
                     <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.4s">
                        <div class="brand-logo" data-tilt data-tilt-max="2" data-tilt-speed="1000"><img
                              src="{{ url('/') }}/public/assets/images/client/radrap.png" alt="radrap" class="img-fluid">
                        </div>
                        <p>Radrap, Europe</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End Clients-->
   <!--Start Badges-->
   <section class="badges-section bg-gradient5  pt70 pb70">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="common-heading w-tdxt">
                  <span>WE MAKE RELATIONSHIPS</span>
                  <h2>Ranked as #1 Top Web & App Development Companies</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".2s">
               <div class="badges-content">
                  <img src="{{ url('/') }}/public/assets/images/about/badges-a.png" alt="budges" class="img-fluid">
                  <p>ABC DEF Industry Leader</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".4s">
               <div class="badges-content">
                  <img src="{{ url('/') }}/public/assets/images/about/badges-b.png" alt="budges" class="img-fluid">
                  <p>Best eCommerce Development Company</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".6s">
               <div class="badges-content">
                  <img src="{{ url('/') }}/public/assets/images/about/badges-c.png" alt="budges" class="img-fluid">
                  <p>ABC DEF High Performer Winner</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
               <div class="badges-content">
                  <img src="{{ url('/') }}/public/assets/images/about/badges-d.png" alt="budges" class="img-fluid">
                  <p>Top App Developer 2019-20</p>
               </div>
            </div>
         </div>
         <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
               <p>We <span>Promise.</span> We <span>Deliver.</span></p>
               <a href="get-quote.html" class="btn-main bg-btn2 lnk">Let's Work Together<i
                     class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
         </div>
      </div>
   </section>
   <!--End Badges-->
   <!--Start work-category-->
   <section class="work-category pt70 pb70">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="common-heading text-l">
                  <span>Industries we work for</span>
                  <h2>Helping Businesses in All Domains</h2>
                  <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry.</p>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="work-card-set">
                  <div class="icon-set wow fadeIn" data-wow-delay=".2s">
                     <div class="work-card cd1">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-1.png" alt="Industries" /></div>
                        <p>Social Networking</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay=".4s">
                     <div class="work-card cd2">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-2.png" alt="Industries" /></div>
                        <p>Digital Marketing</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay=".6s">
                     <div class="work-card cd3">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-3.png" alt="Industries" /></div>
                        <p>Ecommerce Development</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay=".8s">
                     <div class="work-card cd4">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-4.png" alt="Industries" /></div>
                        <p>Video Service</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay="1s">
                     <div class="work-card cd5">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-5.png" alt="Industries" /></div>
                        <p>Banking Service</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                     <div class="work-card cd6">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-6.png" alt="Industries" /></div>
                        <p>Enterprise Service</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                     <div class="work-card cd7">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-7.png" alt="Industries" /></div>
                        <p>Education Service</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                     <div class="work-card cd8">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-8.png" alt="Industries" /></div>
                        <p>Tour and Travels</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                     <div class="work-card cd9">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-9.png" alt="Industries" /></div>
                        <p>Health Service</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay="2s">
                     <div class="work-card cd10">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-10.png" alt="Industries" /></div>
                        <p>Event & Ticket</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
                     <div class="work-card cd11">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-11.png" alt="Industries" /></div>
                        <p>Restaurant Service</p>
                     </div>
                  </div>
                  <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
                     <div class="work-card cd12">
                        <div class="icon-bg"><img src="{{ url('/') }}/public/assets/images/icons/icon-12.png" alt="Industries" /></div>
                        <p>Business Consultant</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End  work-category-->
   <!--Start Testinomial-->
   <section class="testinomial-section bg-none pt70 pb70">
      <div class="container">
         <div class="row justify-content-center ">
            <div class="col-lg-8">
               <div class="common-heading">
                  <span>What our clients say about Codeyiizen.</span>
                  <h2>Over 1200+ Satisfied Clients and Growing</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="video-testimonials owl-carousel owl-loaded owl-drag">


                  <div class="owl-stage-outer">
                     <div class="owl-stage"
                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 596px;">
                        <div class="owl-item active" style="width: 278px; margin-right: 20px;">
                           <div class="video-review" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
                              <a class="video-link" href="https://youtu.be/FCA6ZBuB_k4?autoplay=1&amp;rel=0">
                                 <img src="{{ url('/') }}/public/assets/images/client/client-pic.jpg" alt="client" class="img-fluid">
                                 <div class="review-vid-details">
                                    <div class="-vid-ico"><span class="triangle-play"></span></div>
                                    <p>Cina Cleaves</p>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="owl-item active" style="width: 278px; margin-right: 20px;">
                           <div class="video-review" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
                              <a class="video-link" href="https://youtu.be/FCA6ZBuB_k4">
                                 <img src="{{ url('/') }}/public/assets/images/client/client-pic-a.jpg" alt="client" class="img-fluid">
                                 <div class="review-vid-details">
                                    <div class="-vid-ico"><span class="triangle-play"></span></div>
                                    <p>Jokvch Marlin</p>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                           aria-label="Previous">‹</span></button><button type="button" role="presentation"
                        class="owl-next"><span aria-label="Next">›</span></button></div>
                  <div class="owl-dots disabled"></div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="owl-carousel testimonial-card-a pl25 owl-loaded owl-drag">



                  <div class="owl-stage-outer">
                     <div class="owl-stage"
                        style="transform: translate3d(-2204px, 0px, 0px); transition: all 0.5s ease 0s; width: 3857px;">
                        <div class="owl-item cloned" style="width: 551px;">
                           <div class="testimonial-card">
                              <div class="t-text">
                                 <p>I am very pleased with your designing and development capability. Your team has
                                    excellent communication skills and a fast response and turnaround time. Highest work
                                    quality. I can say that Codeyiizen Software & Services Pvt Ltd. is an honest and
                                    decent group of people with the highest work ethic I have seen for development team.
                                 </p>
                              </div>
                              <div class="client-thumbs mt30">
                                 <div class="media v-center">
                                    <div class="user-image bdr-radius"><img
                                          src="{{ url('/') }}/public/assets/images/user-thumb/lucian-rusorean.jpg" alt="Iuliu Lucian Rusorean"
                                          class="img-fluid"></div>
                                    <div class="media-body user-info">
                                       <h5>Iuliu Lucian Rusorean</h5>
                                       <p>Founder, TradeCJ, <small>Romania, Southeast Europe</small></p>
                                       <div class="star-rate fa-sm">
                                          <ul class="list-unstyled">
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 551px;">
                           <div class="testimonial-card">
                              <div class="t-text">
                                 <p>A great development experience! The flexability and speed of response from the
                                    developer’s team, as well as the quality of the reports and reporting was
                                    exceptional.Happy to see again and again the commitment and dedication from your
                                    side. I strongly recommend Codeyiizen </p>
                              </div>
                              <div class="client-thumbs mt30">
                                 <div class="media v-center">
                                    <div class="user-image bdr-radius"><img src="{{ url('/') }}/public/assets/images/user-thumb/francesco.jpg"
                                          alt="Francesco Oliva" class="img-fluid"></div>
                                    <div class="media-body user-info">
                                       <h5>Francesco Oliva</h5>
                                       <p>Founder, Letsclick, <small>Amsterdam, Netherlands</small></p>
                                       <div class="star-rate fa-sm">
                                          <ul class="list-unstyled">
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 551px;">
                           <div class="testimonial-card">
                              <div class="t-text">
                                 <p>Codeyiizen Software & Services Pvt Ltd. Lets you shine. It lets you put your
                                    thoughts together and gives the best IT services one can ever ask for. The entire
                                    team of Codeyiizen Software & Services Pvt Ltd. is energetic and they don’t treat
                                    you like a business, they treat you like a family.</p>
                              </div>
                              <div class="client-thumbs mt30">
                                 <div class="media v-center">
                                    <div class="user-image bdr-radius"><img
                                          src="{{ url('/') }}/public/assets/images/user-thumb/hadiur-rahman.jpg" alt="Limon Hossain"
                                          class="img-fluid"></div>
                                    <div class="media-body user-info v-center">
                                       <h5>Limon Hossain</h5>
                                       <p>Manager, CAS Course Finder, <small>Sheffield, UK</small></p>
                                       <div class="star-rate fa-sm">
                                          <ul class="list-unstyled">
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                             <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                      aria-hidden="true"></i></a> </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                           aria-label="Previous">‹</span></button><button type="button" role="presentation"
                        class="owl-next"><span aria-label="Next">›</span></button></div>
                  <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                        role="button" class="owl-dot"><span></span></button><button role="button"
                        class="owl-dot active"><span></span></button></div>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="review-ref mt100">
                  <div class="review-title-ref">
                     <h4>Read More Reviews</h4>
                     <p>Read our reviews from all over world.</p>
                  </div>
                  <div class="review-icons">
                     <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><img
                           src="{{ url('/') }}/public/assets/images/about/reviews-icon-1.png" alt="review" class="img-fluid"></a>
                     <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;"><img
                           src="{{ url('/') }}/public/assets/images/about/reviews-icon-2.png" alt="review" class="img-fluid"></a>
                     <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;"><img
                           src="{{ url('/') }}/public/assets/images/about/reviews-icon-3.png" alt="review" class="img-fluid"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--/End Testinomial-->
   <!--Start Location-->
   <section class="our-office pt70 pb70">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="common-heading">
                  <span>Our Locations</span>
                  <h2>Our Office</h2>
               </div>
            </div>
         </div>
         <div class="row justify-content-center upset shape-numm">
            <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".8s">
               <div class="office-card mb0">
                  <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                     <img src="{{ url('/') }}/public/assets/images/location/lucknow.png" alt="Lucknow" class="img-fluid" />
                  </div>
                  <div class="office-text">
                     <h4>Lucknow</h4>
                     <p>11th Floor, Summit Building, Vibhuti Khand, Gomti Nagar, Lucknow, <br />Uttar Pradesh
                        226010<br /> India</p>
                     <a href="https://goo.gl/maps/USacxt9qTqb7P1Cz9" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-map-marker-alt"></i></a>
                     <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-phone-alt"></i></a>
                     <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-envelope"></i></a>
                     <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                           class="fab fa-skype"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
               <div class="office-card">
                  <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                     <img src="{{ url('/') }}/public/assets/images/location/delhi.png" alt="New Delhi" class="img-fluid" />
                  </div>
                  <div class="office-text">
                     <h4>New Delhi</h4>
                     <p>292B, 2nd Floor, Block-A,Vijay Vihar,Phase - I, Rohini, Sector - 5,<br /> New Delhi 110085<br />
                        India</p>
                     <!-- <p>292-B, Rohini, <br />Rohini Sector - 5<br /> New Delhi - 110085,<br /> India</p> -->
                     <a href="https://goo.gl/maps/qMmuRYhSawyQxZvs8" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-map-marker-alt"></i></a>
                     <a href="tel:+919266913291" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-phone-alt"></i></a>
                     <a href="mailto:business@codeyiizen.com" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-envelope"></i></a>
                     <a href="skype:codeyiizen?call" target="blank" class="btn-outline rount-btn"><i
                           class="fab fa-skype"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
               <div class="office-card">
                  <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                     <img src="{{ url('/') }}/public/assets/images/location/london.png" alt="united-kingdom" class="img-fluid" />
                  </div>
                  <div class="office-text">
                     <h4>London</h4>
                     <p>9 high street <br />N146LD - London,<br /> United Kingdom</p>
                     <br />
                     <a href="https://goo.gl/maps/qMmuRYhSawyQxZvs8" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-map-marker-alt"></i></a>
                     <a href="tel:+919266913291" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-phone-alt"></i></a>
                     <a href="mailto:business@codeyiizen.com" target="blank" class="btn-outline rount-btn"><i
                           class="fas fa-envelope"></i></a>
                     <a href="skype:codeyiizen?call" target="blank" class="btn-outline rount-btn"><i
                           class="fab fa-skype"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End Location-->
   <!--Start Footer-->
@endsection
@section('script')
// code for page specific script
@endsection