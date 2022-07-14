@include("home.layouts.header") 

    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->
    <div class="container-fluid"style="padding:50px;">
       <div class="container" style="padding:40px 2px;box-shadow: 0px 0px 1px 1px #dad4d4;border-radius:6px;max-width:600px;background-color:white;">
            <div class="row"> 
                <div class="col-lg-12">

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <span style='font-size:16px;'>
                            @include('home.layouts.flash_msg')
                        </span>
                     </div></div>

                    <div class="contact__form__title" style="text-align:center;">
                        <h3>Password Recovery</h3>
                    </div>
                </div>
            </div>
            <form method='post'  action="{{ route('password.recovery') }}"  enctype="multipart/form-data" >
            @csrf
           
                <div class="row"  style="margin:20px;text-align:center;">

                <div class="col-md-12 ">
                    <span style='font-size:12px;color:gray;'>Enter your registered email address*</span>
                    </div>
                 
                 </div>
                 <div class="row" style="margin:20px;text-align:center;">
                    <div class="col-md-12 ">
                  
                    @if ($errors->has('email'))
                           <div style="color:red;font-size:13px;text-transform:setence;">Email is Empty!</div>
                        @endif
                      
                        <input type="email" name="email"  placeholder="Enter Email" value="{{old('email')}}">
                       
                    </div>
                 
                    </div>
                   
                    <div class="row">
                    
                    <div class="col-md-8 text-center offset-md-2">
                        
                        <button type="submit" class="btn btn-primary" style='padding:2px 30px;'>Submit</button>

                        <div style="padding-top:30px;font-size:14px;color:#00cc77;">
                        New password will be sent on your regsitered email address!
                        </div>

                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->




    @include("home.layouts.footer")