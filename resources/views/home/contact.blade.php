@include("home.layouts.header") 


        <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Contact <span> Us</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>Educate <span>Master</span></h2>
                            <p>We Provide Outsourced Software Development Services To Over 50 Clients From 21 Countries.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.html" alt="">
                            <h4>Address</h4>
                            <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.
                                <br>Landmark : Next To Airport</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.html" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel://0099999999" class="contact-icon">Phone: 01 234874 965478</a>
                                <br> <a href="tel://0099999999" class="contact-icon">Mobile: 01 654874 965478</a>
                                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: info@company.com</a> </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.html" alt="">
                            <h4>Website</h4>
                            <p> <a href="#">Website: www.mycompany.com</a>
                                <br> <a href="#">Facebook: www.facebook/my</a>
                                <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    <section id="map">
        <div class="row contact-map">
            <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005"
                allowfullscreen=""></iframe>
            <div class="container">
                <div class="overlay-contact footer-part footer-part-form">
                    <div class="map-head">
                        <p>Send Us Now</p>
                        <h2>GetIn Touch</h2> <span class="footer-ser-re">Service Request Form</span> </div>
                    <!-- ENQUIRY FORM -->
                    <form method='post'  action="{{ route('contact') }}"  enctype="multipart/form-data">
                    @csrf
                      @include('admin.layouts.flash_msg')
                        <ul>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} ">
                                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __(' Enter Your Name*') }}"  value="{{ old('name') }}"  aria-required="true"/>
                                      @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">Name is Empty!</span>
                                      @endif
                        </div>
                             </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="text" placeholder="{{ __(' Enter Email Address*') }}"  value="{{ old('email') }}"  aria-required="true"/>
                                      @if ($errors->has('email'))
                                        <span id="email-error" class="error text-danger" for="input-email">Email is Empty!</span>
                                      @endif
                            </div> 
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                            <div class="form-group{{ $errors->has('mobile') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" id="input-mobile" type="number" placeholder="{{ __('Enter Your Mobile No.*') }}"  value="{{ old('mobile') }}"  aria-required="true"/>
                                      @if ($errors->has('mobile'))
                                        <span id="mobile-error" class="error text-danger" for="input-mobile">Mobile No is Empty!</span>
                                      @endif
                            </div>
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                            <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" id="input-subject" type="text" placeholder="{{ __(' Subject*') }}"  value="{{ old('subject') }}"  aria-required="true"/>
                                      @if ($errors->has('subject'))
                                        <span id="subject-error" class="error text-danger" for="input-subject">Subject is Empty!</span>
                                      @endif
                            </div>
                             </li>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                            <div class="form-group{{ $errors->has('message') ? ' has-danger' : '' }}">
                                      <textarea cols="40" rows="3" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" id="input-message" type="text" placeholder="{{ __(' Message*') }}"  value="{{ old('message') }}"  aria-required="true"></textarea>
                                      @if ($errors->has('message'))
                                        <span id="message-error" class="error text-danger" for="input-message">Message is Empty!</span>
                                      @endif
							
                               </div>
                            </li>
                            <li class="col-md-6">
                                <input type="submit" value="SUBMIT"> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION START-->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>therefore always free from repetition</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="course-details.html">Book This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    @include("home.layouts.footer")