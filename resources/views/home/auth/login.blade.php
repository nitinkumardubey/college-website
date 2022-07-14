@include("home.layouts.header") 

    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->

    <div class="container-fluid"style="padding:50px;">
        <div class="container" style="padding:40px 2px;box-shadow: 0px 0px 1px 1px #dad4d4;border-radius:6px;max-width:600px;text-align:center;background-color:white;">
            <div class="row">
                <div class="col-lg-12">

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <span style='font-size:16px;'>
                            @include('home.layouts.flash_msg')
                        </span>
                     </div></div>

                    <div class="contact__form__title" style="text-align:center;">
                        <h3>Login</h3>
                    </div>
                </div>
            </div>
            <form method='post'  action="{{ route('userLogin') }}"  enctype="multipart/form-data" >
            @csrf
           
                <!-- <div class="row" style="margin:20px;">
                    
                    <div class="col-md-8 offset-md-2" >
                    @if ($errors->has('email'))
                           <div style="color:red;font-size:13px;text-transform:setence;">Email is Empty! </div>
                        @endif
                        <input type="email" name="email"  placeholder="Enter Email" >
                       
                    </div>
                 
                    </div> -->

                    <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __(' Enter Email') }}"   aria-required="true"/>
                                      @if ($errors->has('email'))
                                        <span id="email-error" class="error text-danger" for="input-email">Email is Empty!</span>
                                      @endif
                                    </div>
                                  </div>

                                  </div>

                                                 
                                  <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                  <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                              
                                <input class="form-control" type="password" name="password" id="password"  placeholder="{{ __('Enter Password...') }}"   aria-required="true"/>
                              
                              @if ($errors->has('password'))
                                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                  <strong>{{ $errors->first('password') }}</strong>
                                </div>
                              @endif
                            </div>
                            </div>
                            </div>
                          

                    <!-- <div class="row">
                    <div class="col-md-8 offset-md-2">
                    @if ($errors->has('password'))
                           <div style="color:red; font-size:13px;text-transform:setence;">Password is Empty!</div>
                       @endif
                        <input type="password" name="password"  placeholder="Enter Password"  id="password">
                       
                    </div>
                     
                    </div> -->
                    <div class="row">
                    <div class="col-md-8 offset-md-2">
                    <div style="padding-top:0px;font-size:12px;text-align:center;margin-bottom:40px;">
                        <a href="{{route('password.recovery')}}" > Forgot Password? </a>
                        </div>
                    </div>
                     
                     </div>


                    <div class="row">
                    
                    <div class="col-md-8 text-center offset-md-2">
                    
                        <button type="submit" class="btn btn-primary" style='padding:2px 30px;'>Login</button>

                        <div style="padding-top:20px;font-size:13px;">
                        Do not have an account? <a href="{{route('register')}}" ><i><u> Register Now</u> </i> </a>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->




    @include("home.layouts.footer")