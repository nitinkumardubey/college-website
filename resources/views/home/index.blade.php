@include("home.layouts.header")            



             <!-- SLIDER -->
  
    <!-- SLIDER -->
    <section>
        <div class="h2-hero">
			<div class="container">
				<div class="row">
					<div class="h2-hero-inn">
						<div class="h2-hero-left">
						<div class="ed-ban-tit">
						<div class="ed-ban-tit-1">
							<h1>Welcome to Education Master - <span>Education Template</span></h1>
						</div>
						<div class="ed-ban-tit-2">
							<h4><span class="ed-bann-line"></span><span class="ed-bann-line1"></span>Londan</h4>
						</div>
						<div class="ed-ban-tit-3">
							<div class="ed-ban-tit-3-com ed-ban-tit-31">
								<div class="ed-sprit ed-ban-cal-le">
									<span>24</span><span>feb</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Admission 2018</span></a><span>New York City</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-32">
								<div class="ed-sprit ed-ban-cal-le">
									<span>05</span><span>apr</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>College farewell</span></a><span>Chicago</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-31">
								<div class="ed-sprit ed-ban-cal-le">
									<span>18</span><span>jul</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Sports event</span></a><span>San Francisco</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-32">
								<div class="ed-sprit ed-ban-cal-le">
									<span>26</span><span>sep</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Seminars</span></a><span>Los Angeles</span>
								</div>
							</div>
						</div>
					</div>
						</div>
						<div class="h2-hero-right">
<div class="ed-ref-form">
						<div class="ed-ref-form-inn">
<div class="map-head">
						<p>Register for the</p>
						<h2>Admissions</h2> <span class="footer-ser-re">fill below details</span> </div>
							   
                        <form  method='post'  action="{{ route('student.register') }}"  enctype="multipart/form-data" >
            @csrf
            @include('home.layouts.flash_msg')
								<ul>
									<li>
										<input type="text" name="name" required="">
										<span class="floating-label">Name</span>
									</li>
									<li>
										<input type="email" name="email" required="">
										<span class="floating-label">Email ID</span>
									</li>
									<li>
										<input type="number"  name="mobile" required="">
										<span class="floating-label">Phone number</span>
									</li>
									<li>
										<input type="text" name="city" required="">
										<span class="floating-label">City</span>
									</li>
																		
									<li>
										<input type="submit" value="Register Now">
									</li>
								</ul>
							</form>
						</div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>


    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Discover <span>More</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="about.html">
                                <img src="{{ asset('public/material') }}/images/h-about.jpg" alt="">
                                <span>Academics</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="admission.html">
                                <img src="{{ asset('public/material') }}/images/h-adm1.jpg" alt="">
                                <span>Admission</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="dashboard.html">
                                <img src="{{ asset('public/material') }}/images/h-cam.jpg" alt="">
                                <span>Students profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="research.html">
                                <img src="{{ asset('public/material') }}/images/h-res.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses.html">
                                <img src="{{ asset('public/material') }}/images/h-about1.jpg" alt="">
                                <span>Couse</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="db-time-line.html">
                                <img src="{{ asset('public/material') }}/images/h-adm.jpg" alt="">
                                <span>Exam Time Line</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="seminar.html">
                                <img src="{{ asset('public/material') }}/images/h-cam1.jpg" alt="">
                                <span>Seminar 2018</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="events.html">
                                <img src="{{ asset('public/material') }}/images/h-res1.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Popular <span>Courses</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/material') }}/images/course/sm-1.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Aerospace Engineering</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/material') }}/images/course/sm-2.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/material') }}/images/course/sm-3.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/material') }}/images/course/sm-4.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/material') }}/images/course/sm-5.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Fashion Technology</h3>
                                </a>
                                <h4>Technology / Trends / Fashion</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/material') }}/images/course/sm-6.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/material') }}/images/course/sm-7.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/material') }}/images/course/sm-8.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section>
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-1">
                        <div class="ho-lat-ev">
                            <h4>Upcoming Event</h4>
                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                            <li>
                                <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Latinoo College Expo 2018</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Training at Team Fabio Clemente</h4>
                                    </a>
                                    <p>Nulla at velit convallis venenatis.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Nulla at velit convallis</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Admissions Information Session and Tour</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-2">
                        <div class="ho-lat-ev">
                            <h4>Job Vacants</h4>
                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                            <li>
                                <div class="ho-ev-img"><img src="{{ asset('public/material') }}/images/event/1.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Almost before we knew it, we had left the ground</h4>
                                    </a>
                                    <p>Etiam ornare lacus nec lectus vestibulum aliquam.</p>
                                    <span>Location: New York</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="{{ asset('public/material') }}/images/event/2.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Then came the night of the first falling star.</h4>
                                    </a>
                                    <p>Vestibulum sollicitudin sem arcu</p>
                                    <span>Location: Los Angeles</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="{{ asset('public/material') }}/images/event/3.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Educate to Empower NYE Party</h4>
                                    </a>
                                    <p>Vestibulum sollicitudin sem arcu, eget ullamcorper purus hendrerit</p>
                                    <span>Location: Chennai</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="{{ asset('public/material') }}/images/event/4.jpg" alt=""></div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Then came the night of the first falling star.</h4>
                                    </a>
                                    <p>Venenatis lacus lectus.</p>
                                    <span>Location: Chicago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4>Register & Login</h4>
                            <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            <li class="tab col s6"><a href="#hom-vijay">Register</a>
                            </li>
                            <li class="tab col s6"><a href="#hom_log">Login</a>
                            </li>
                        </ul>
                        <div id="hom-vijay" class="col s12">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>User name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Email id</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="password" class="validate">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="password" class="validate">
                                        <label>Confirm password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Register" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="hom_log" class="col s12">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Student user name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>News and <span>Events</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                        <h4>Photo Gallery</h4>
                        <ul>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/8.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/9.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/10.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/11.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/1.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/2.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/3.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/4.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/5.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/6.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/7.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('public/material') }}/images/ami/8.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>Video Gallery</h4>
                        <iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
                        <h5>Maecenas sollicitudin lacinia</h5>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-blog ho-event">
                        <h4>News & Event</h4>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Latinoo College Expo 2018</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Training at Team Fabio Clemente</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Nulla at velit convallis</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Admissions Information Session and Tour</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
          

@include("home.layouts.footer")