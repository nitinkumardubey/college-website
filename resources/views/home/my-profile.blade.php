@include("home.layouts.header") 

    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->
    <div class="container-fluid"style="padding:50px;">
        <div class="container" style="padding:40px 2px;box-shadow: 0px 0px 1px 1px #dad4d4;border-radius:6px;max-width:600px;text-align:center;background-color:white;">
            <div class="row" >
                <div class="col-lg-12">
               
                    <div class="contact__form__title">
                    <span style='font-size:16px;'>
                        @include('home.layouts.flash_msg')
                    </span>
                        <h3><i class="fa fa-user-circle"> </i> My Profile</h2>
                    </div>
                </div>
            </div>
            <form method='post'  action="{{ route('myProfile') }}"  enctype="multipart/form-data" >
            @csrf
            <div class="row">
                    
                    <div class="col-md-8 offset-md-2">
          
            </div></div>
                <div class="row" style="margin:20px;text-align:center;">
                <div class="col-md-8 offset-md-2" >
                        <span style='font-size:12px;color:gray;'> Name*</span>
                            @if ($errors->has('name'))
                                <div style="color:red;font-size:13px;text-transform:setence;">Name is Empty!</div>
                                @endif
                                <input type="text" name="name"  placeholder="Enter Name" value="{{$profile->name}}">
                        </div>
                        </div> 
                        <div class="row" style="margin:20px;">
                        <div class="col-md-8 offset-md-2" >
                        <span style='font-size:12px;color:gray;'> Email*</span>
                            @if ($errors->has('email'))
                                <div style="color:red;font-size:13px;text-transform:setence;">Email is Empty!</div>
                                @endif
                                <input type="email" name="email" readonly value="{{$profile->email}}">
                            </div>
                            </div>
                            <div class="row" style="margin:20px;">
                            <div class="col-md-8 offset-md-2" >
                     <span style='font-size:12px;color:gray;'> Mobile*</span>
                    @if ($errors->has('mobile'))
                           <div style="color:red; font-size:13px;text-transform:setence;">Mobile is Empty!</div>
                       @endif
                        <input type="number" name="mobile"  placeholder="Enter Mobile" value="{{$profile->mobile}}">
                     </div>
                     </div>

                   

                    <div class="row">
                    
                    <div class="col-md-8 text-center offset-md-2">
                    
                        <button type="submit" class="btn btn-primary" style='padding:2px 30px;'>Update</button>

                        
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->




    @include("home.layouts.footer")