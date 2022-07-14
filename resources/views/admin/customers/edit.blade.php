@include("admin.layouts.app")

@include("admin.layouts.sidebar")
@include("admin.layouts.navbar")
<div class="wrapper ">
<script src="https://cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>

              
 <div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-11">
      
        <form method='post'  action="{{ route('customers.update',$user->id) }}"  enctype="multipart/form-data">
          @csrf
            @include('admin.layouts.flash_msg')

            <div class="card ">
              <div class="card-header card-header-default" >
                <h4 class="card-title">{{ __($title) }}
                <a href="{{route('customers.list')}}"  class="btn btn-sm btn-default float-right" style='background-color:white ;color:#0099cc;'><i class='fa fa-arrow-left' style='font-size:12px;'>  {{ __('Back') }}</i> </a>
                  
                </h4>
               
              
                   
              </div>

              
              <div class="card-body ">
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Customer Name') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name}}" id="input-name" type="text" placeholder="{{ __('Name') }}"  aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">Name is Empty!</span>
                      @endif
                    </div>
                  </div>

                 
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  readonly style='background-color:#fafafa;' name="email" value="{{ $user->email}}" id="input-email" type="text" placeholder="{{ __('Email') }}"  aria-required="true"/>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>

                  <label class="col-sm-2 col-form-label">{{ __('Mobile') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('mobile') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ $user->mobile}}" id="input-mobile" type="number" placeholder="{{ __('Mobile') }}"  aria-required="true"/>
                      @if ($errors->has('mobile'))
                        <span id="mobile-error" class="error text-danger" for="input-mobile">Mobile is Empty!</span>
                      @endif
                    </div>
                  </div>
                  </div>


                  <div class='row'>
                  <label class="col-sm-2 col-form-label">{{ __('Street Address') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('address_line_1') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('address_line_1') ? ' is-invalid' : '' }}" name="address_line_1" value="{{ $user->address_line_1}}" id="input-address_line_1" type="text" placeholder="{{ __('Street Address') }}"  aria-required="true"/>
                      @if ($errors->has('address_line_1'))
                        <span id="address_line_1-error" class="error text-danger" for="input-address_line_1">Street address is Empty!</span>
                      @endif
                    </div>
                  </div>

                  <label class="col-sm-2 col-form-label">{{ __('City') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->city}}" id="input-city" type="text" placeholder="{{ __('City') }}"  aria-required="true"/>
                      @if ($errors->has('city'))
                        <span id="city-error" class="error text-danger" for="input-city">City is Empty!</span>
                      @endif
                    </div>
                  </div>

                  <label class="col-sm-2 col-form-label">{{ __('State') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $user->state}}" id="input-state" type="text" placeholder="{{ __('State') }}"  aria-required="true"/>
                      @if ($errors->has('state'))
                        <span id="state-error" class="error text-danger" for="input-state">State is Empty!</span>
                      @endif
                    </div>
                  </div>


                  <label class="col-sm-2 col-form-label">{{ __('Country') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $user->country}}" id="input-country" type="text" placeholder="{{ __('country') }}"  aria-required="true"/>
                      @if ($errors->has('country'))
                        <span id="country-error" class="error text-danger" for="input-country">Country is Empty!</span>
                      @endif
                    </div>
                  </div>


                  <label class="col-sm-2 col-form-label">{{ __('Zip Code') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('zipcode') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" value="{{ $user->zipcode}}" id="input-zipcode" type="number" placeholder="{{ __('Zip Code') }}"  aria-required="true"/>
                      @if ($errors->has('zipcode'))
                        <span id="zipcode-error" class="error text-danger" for="input-zipcode">Zipcode is Empty!</span>
                      @endif
                    </div>
                  </div>

               
          
                  <label class="col-sm-2 col-form-label">{{ __('Status')  }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                    <select  class="custom-select {{ $errors->has('status') ? ' is-invalid' : '' }}" name='status' id="input-status"   >
                            <option value=''>Do you want to activate the user?</option>
                            <option value='1' {{($user->status=='1')?'selected':''}} > Activate </option>  
                            <option value='0' {{($user->status=='0')?'selected':''}}> Deactivate</option>
                       </select>
               
              @if ($errors->has('status'))
                        <span id="status-error" class="error text-danger" for="input-status">Status is Empty!</span>
                      @endif
                    </div>
                  </div>
                </div>

                  <br>

             
                            
                             <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary" >{{ __('Save') }}</button>
              </div>

              </div>
            
            </div>

        </div>
	          </form>
     
    </div>
  </div>

  </div>
  </div>
