@include("admin.layouts.app")
<div class="container"  id="login-page"  style="height:auto;">

  <div class="row align-items-center" >
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      <h3></h3>  </div>
  
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto" >
    @include('admin.layouts.flash_msg')
      <form class="form" method="POST" action="{{route('vendor.login')}}">
        @csrf
        
        <div class="card card-login card-hidden mb-3" style='background-color:white;color:white;'>
          <div class="card-header  text-center" style='    background-image: linear-gradient( 138deg, rgba(32,201,255,1) 36.7%, rgba(0,8,187,1) 84.4%, rgba(255,255,255,1) 119.7% );color:white;'>
            <h4 class="card-title" style='color:white;'><strong>{{ __('Login') }}</strong></h4>
            
          </div>

          <div class="card-header  text-center" >
          <img src="{{ asset('public/material') }}/img/logo.png" style='height:60px;width:150px;border-radius:5px;'>
          <!-- <img src="{{ asset('public/material') }}/img/logo.png" style='height:100px;width:150px;border-radius:5px;box-shadow:0px 6px 10px whitesmoke;'> -->
          </div>

          
          <div class="card-body">
            <p class="card-description text-center"> </p>




            <div class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text">
                    
                  </span> -->
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}..."  >
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;" >
                  <strong>Email is empty</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text">
                   
                  </span> -->
                </div>
                <input type="password" name="password" id="password"  class="form-control" placeholder="{{ __('Password') }}..."  >
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>Password is empty</strong>
                </div>
              @endif
            </div>
           
          </div>

          <div class="bmd-form-group mt-3">
          <div class="mt-3 card-footer justify-content-center">
            <button type="submit" class="btn btn-sm  col-sm-8  col-md-12 offset-2"  
            style='background-color:#2974d2 ;color:white;'>{{ __('Login') }} </button>
          </div>
          </div>


          <div class="col-6 text-right pull-right" style="color:black;font-size:13px;">
          New Vendor? <a href="{{route('vendors.register')}}" ><i><u> Register</u> </i> </a>
            </a>
        </div>

        
     
         
         
        </div> 

     
      </form>
      
    </div>
  </div>
</div>

