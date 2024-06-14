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
   <section class="breadcrumb-area banner-6">
      <div class="text-block">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 v-center">
                  <div class="bread-inner">
                     <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="#">Careers</a></li>
                        </ul>
                     </div>
                     <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                        <h2>Job Openings</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End Breadcrumb Area-->
   <!--Start About-->
   <section class="about-agencys pad-tb block-1 dark-bg3">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-lg-6">
               <div class="common-heading text-l">
                  <h2 class="mb20">Career and Culture at Codeyiizen</h2>
                  <p>Codeyiizen believes in quality rather than quantity so we are looking for some skilled people to
                     join us and be a part of our community.</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                     dummy text of the printing and typesetting industry.</p>
                  <a href="#jobs" class="btn-main bg-btn2 lnk mt30"> View Opening <i
                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="image-block mb0 m-mt30">
                  <img src="{{ url('/') }}/public/assets/images/about/office-4.jpg" alt="about" class="img-fluid" />
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End About-->
   <!--Start Why Choose-->
   <section class="service-block pad-tb bg-gradient7">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="common-heading ptag">
                  <span>Welcome to Codeyiizen</span>
                  <h2>Perks To Work With Codeyiizen</h2>
                  <p class="mb30">Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel
                     hendrerit nisi. Vestibulum eget risus velit.</p>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s">
               <div class="s-block wide-sblock">
                  <div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/teama.svg" alt="service" class="img-fluid">
                  </div>
                  <div class="s-block-content">
                     <h4>Reliable Service. In House Team</h4>
                     <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s">
               <div class="s-block wide-sblock">
                  <div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/link.svg" alt="service" class="img-fluid">
                  </div>
                  <div class="s-block-content">
                     <h4>Trusted by People Like You</h4>
                     <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s">
               <div class="s-block wide-sblock">
                  <div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/tech.svg" alt="service" class="img-fluid">
                  </div>
                  <div class="s-block-content">
                     <h4>Complete Technical Competency</h4>
                     <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s">
               <div class="s-block wide-sblock">
                  <div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/hi.svg" alt="service" class="img-fluid"></div>
                  <div class="s-block-content">
                     <h4>Friendly & Cordial in Nature</h4>
                     <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s">
               <div class="s-block wide-sblock">
                  <div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/badge.svg" alt="service" class="img-fluid">
                  </div>
                  <div class="s-block-content">
                     <h4>Excellent Quality Delivered on Time</h4>
                     <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.7s">
               <div class="s-block wide-sblock">
                  <div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/tin.svg" alt="service" class="img-fluid"></div>
                  <div class="s-block-content">
                     <h4>Effective & Continuous Communication</h4>
                     <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End Why Choose-->
   <!--Start Enquire Form-->
   <section class="contact-page pad-tb" id="jobs">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="common-heading ptag">
                  <span>Jobs</span>
                  <h2>Current Openings</h2>
                  <p class="mb60">08 Sep 2022 Latest Jobs</p>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-10">
               <div class="career-card-div">
                  <div class="accordion" id="accordionExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapseOne">
                              Web Developer
                               - 2 Post
                           </button>
                        </h2>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="data-reqs">
                                 <h5 class="pt20 pb20">Overview</h5>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. </p>
                                 <h5 class="pt20 pb20">Required experience</h5>
                                 <p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. </p>
                                 <h4 class="pb20 pt20">Skills Required:</h4>
                                 <ul class="list-ul ul-check">
                                    <li>Basic Knowledge of PHP</li>
                                    <li>Understanding of OOPS concepts of PHP</li>
                                    <li>Demonstrable knowledge of web technologies including HTML, CSS, Javascript,
                                       AJAX,Bootstrap,Jquery.</li>
                                    <li>Good knowledge of relational databases, version control tools and of developing
                                       web services.</li>
                                    <li>Strong knowledge in Web Services &amp; API's, LBS, Social Network Integration
                                       etc.</li>
                                 </ul>
                                 <a href="#" class="btn-main bg-btn3 lnk mt20" data-bs-toggle="modal"
                                    data-bs-target="#modalform">Apply Now<i
                                       class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapseOne">
                              Front-end Developer - 3 Post
                           </button>
                        </h2>
                        <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="headingOne"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="data-reqs">
                                 <h5 class="pt20 pb20">Overview</h5>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. </p>
                                 <h5 class="pt20 pb20">Required experience</h5>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. </p>
                                 <h4 class="pb20 pt20">Skills Required:</h4>
                                 <ul class="list-ul ul-check">
                                    <li>Basic Knowledge of HTML</li>
                                    <li>Develop new user-facing features</li>
                                    <li>Optimize application for maximum speed and scalability</li>
                                    <li>Fair understanding of JavaScript programming and DOM manipulation</li>
                                    <li>Familiarity with differences in other HTML5 based views, such as ones in email
                                       clients</li>
                                 </ul>
                                 <a href="#" class="btn-main bg-btn3 lnk mt20" data-bs-toggle="modal"
                                    data-bs-target="#modalform">Apply Now<i
                                       class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapseOne">
                              UI/UX Designer - 1 Post
                           </button>
                        </h2>
                        <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="headingOne"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="data-reqs">
                                 <h5 class="pt20 pb20">Overview</h5>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. </p>
                                 <h5 class="pt20 pb20">Required experience</h5>
                                 <p><strong>Experience:-</strong> 0-2 Years</p>
                                 <p><strong>Qulification:-</strong> B.Tech/MCA/BE</p>
                                 <h4 class="pb20 pt20">Skills Required:</h4>
                                 <ul class="list-ul ul-check">
                                    <li>Basic Knowledge of Graphic Designing</li>
                                    <li>Possession of creative flair, versatility, conceptual/visual ability and
                                       originality</li>
                                    <li>Up to date with industry leading software and technologies (In Design,
                                       Illustrator, Dreamweaver, Photoshop etc)</li>
                                    <li>Highly proficient in all design aspects</li>
                                    <li>Professionalism regarding time, costs and deadlines</li>
                                 </ul>
                                 <a href="#" class="btn-main bg-btn3 lnk mt20" data-bs-toggle="modal"
                                    data-bs-target="#modalform">Apply Now<i
                                       class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
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
   <!--End Enquire Form-->
   <div class="popup-modals">
      <div class="modal" id="modalform">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="common-heading">
                     <h4 class="mt0 mb0">Apply Now</h4>
                  </div>
                  <button type="button" class="closes" data-bs-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body pt40 pb60">
                  <div class="form-block fdgn2">
                     <form id="contact-form" method="post" action="#">
                        <div class="fieldsets row">
                           <div class="col-md-6 form-group"><input id="form_name" type="text" name="name"
                                 placeholder="Enter your name *" required="required"> </div>
                           <div class="col-md-6 form-group"><input id="form_email" type="email" name="email"
                                 placeholder="Enter your email *" required="required"> </div>
                        </div>
                        <div class="fieldsets row">
                           <div class="col-md-6 form-group"><input id="form_phone" type="text" name="phone"
                                 placeholder="Enter your Phone No *" required="required"> </div>
                           <div class="col-md-6 form-group">
                              <select id="form_need" name="need" required="required">
                                 <option value="">Select Post</option>
                                 <option value="Web Developer">Web Developer</option>
                                 <option value="Front-end Developer">Front-end Developer</option>
                                 <option value="UI/UX Designer">UI/UX Designer</option>
                                 <option value="Other">Other</option>
                              </select>
                           </div>
                        </div>
                        <div class="fieldsets form-group"> <textarea id="form_message" name="message"
                              placeholder="Message *" rows="4" required="required"></textarea> </div>
                        <div class="fieldsets- row">
                           <div class="col-md-12 form-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input mb0" id="customFile">
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                              <p><small>Please upload maximum 5 files Only pdf, docx and doc files.</small></p>
                           </div>
                        </div>
                        <div class="fieldsets mt20">
                           <button type="submit" class="lnk btn-main bg-btn">Submit Application<span
                                 class="circle"></span></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('script')
// code for page specific script
@endsection