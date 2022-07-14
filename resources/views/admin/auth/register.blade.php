@include("admin.layouts.app")
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        @include('admin.layouts.flash_msg')

        
    

        <div class="card card-login card-hidden mb-3" style='background-color:#191917;color:#F7E6A2;'>
          <div class="card-header  text-center" style='background-color:#F7E6A2 ;color:black;'>
            <h4 class="card-title"><strong>{{ __('Register') }}</strong></h4>
            
          </div>

          <div class="card-header  text-center" >
          <img src="{{ asset('public/material') }}/img/logo.png" style='height:60px;width:150px;border-radius:5px;'>
            
          </div>

          <div class="card-body ">
            
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text"> </span> -->
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" >
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text"> </span> -->
                </div>
                <input type="text" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" >
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text">   </span> -->
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" >
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text">  </span> -->
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" >
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>
            
         
          <div class="bmd-form-group{{ $errors->has('mobile') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text">
               
                  </span> -->
                </div>
                <input type="text" name="mobile" class="form-control" placeholder="{{ __('Mobile...') }}"  >
              </div>
              @if ($errors->has('mobile'))
                <div id="mobile-error" class="error text-danger pl-3" for="mobile" style="display: block;">
                  <strong>{{ $errors->first('mobile') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('city') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text">  </span> -->
                </div>
                <input type="text" name="city" class="form-control" placeholder="{{ __('City...') }}"  >
              </div>
              @if ($errors->has('city'))
                <div id="city-error" class="error text-danger pl-3" for="city" style="display: block;">
                  <strong>{{ $errors->first('city') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('country') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text"> </span> -->
                </div> 
                <select style='background-color:#191917; border:none;border-bottom:1px solid gray; color:gray;' class="custom-select {{ $errors->has('country') ? ' is-invalid' : '' }}" name='country' id="input-country"   >
                            <option value=''>Select Country </option>
                            <option value='Malaysia'>Malaysia </option>
                            <option value='Singapore'>Singapore </option>
                            <option value='Thailand'>Thailand </option>
                            <option value='Indonesia'>Indonesia</option>
                            <option value='China'>China </option>
                            <option value='Taiwan'>Taiwan </option>
                            <option value='Hong Kong'>Hong Kong </option>
                            <option value='Vietnam'>Vietnam</option>
                       </select>
               
              </div>
              @if ($errors->has('country'))
                <div id="country-error" class="error text-danger pl-3" for="country" style="display: block;">
                  <strong>{{ $errors->first('country') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('zip_code') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <span class="input-group-text">
                </span> -->
                </div>
                <input type="number" name="zip_code" class="form-control" placeholder="{{ __('Zip Code...') }}"  >
              </div>
              @if ($errors->has('zip_code'))
                <div id="zip_code-error" class="error text-danger pl-3" for="zip_code" style="display: block;">
                  <strong>{{ $errors->first('zip_code') }}</strong>
                </div>
              @endif
            </div>
          </div>
         


          <div class="bmd-form-group mt-3">
          <div class="mt-3 card-footer justify-content-center">
            <button type="submit" class="btn btn-sm  col-sm-8  col-md-12 offset-2"  style='background-color:#F7E6A2 ;color:black;'>{{ __('Create account') }} </button>
          </div>
          </div>

          <div class="col-6 text-right pull-right" style="color:black;">
            <a href="{{route('login')}}" class="text-light">
                <small  style="color:#F7E6A2;">{{ __('Exsiting User? Login') }}</small>
            </a>
        </div>
        </div>
      </form>
     
    </div>
    
  </div>
</div>

