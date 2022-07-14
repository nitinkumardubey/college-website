@include("home.layouts.header")            






    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>All <span>Courses</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
            @foreach($courses as $r)
                <div class="col-md-6">
                 
                        <!--POPULAR COURSES-->
                       
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('public/uploads/courses') }}/{{ $r->img }}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{route('admission')}}">
                                    <h3>{{$r->name}}</h3>
                                </a>
                                <h4>{{ $r->topic }}</h4>
                                <p>{{ $r-> sort_details}}  </p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{route('admission')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{route('admission')}}"><i class="fa fa-eye" aria-hidden="true"></i>{{ $r->available }}  Aavailable</a> </li>
                                        <li><a href="{{route('admission')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> {{ $r->seats }} </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                   
                
                </div>
                @endforeach
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
                            <img src="{{ asset('public/material') }}/images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>therefore always free from repetition</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="{{route('admission')}}">Book This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


    @include("home.layouts.footer")