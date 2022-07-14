@include("admin.layouts.app")

@include("admin.layouts.staffSidebar")
@include("admin.layouts.staffNavbar")
<div class="wrapper ">
<script src="https://cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>

              
 <div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-11">
      
        <form method='post'  action="{{ route('staff.my.profile') }}"  enctype="multipart/form-data">
          @csrf
            @include('admin.layouts.flash_msg')

            <div class="card ">
              <div class="card-header card-header-default" >
                <h4 class="card-title">{{ __($title) }}
                <a href="#"  class="btn btn-sm btn-default float-right" style='background-color:white ;color:#0099cc;'><i class='fa fa-user-circle' style='font-size:12px;'>  {{ auth()->user()->user_type }}</i> </a>
                </h4>    
              </div>
              <div class="card-body ">

              <div class="container-fluid">
              <div class="row">
                <div class="col-md-7">
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __(' Name') }}</label>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" readonly name="name" value="{{ $user->name}}" id="input-name" type="text" placeholder="{{ __('Name') }}"  aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                  </div>

                  <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" readonly  name="email" value="{{ $user->email}}" id="input-email" type="text" placeholder="{{ __('Email') }}"  aria-required="true" style='background-color:#fafafa;'/>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                  </div>

                  <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Personal Email') }}</label>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('personal_email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('personal_email') ? ' is-invalid' : '' }}" readonly  name="personal_email" value="{{ $user->personal_email}}" id="input-personal_email" type="text" placeholder="{{ __('Personal Email') }}"  aria-required="true" style='background-color:#fafafa;'/>
                      @if ($errors->has('personal_email'))
                        <span id="personal_email-error" class="error text-danger" for="input-personal_email">{{ $errors->first('personal_email') }}</span>
                      @endif
                    </div>
                  </div>
                  </div> 

                  <div class="row">

                  <label class="col-sm-2 col-form-label">{{ __('Mobile') }}</label>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('mobile') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" readonly name="mobile" value="{{ $user->mobile}}" id="input-mobile" type="number" placeholder="{{ __('Mobile') }}"  aria-required="true"/>
                      @if ($errors->has('mobile'))
                        <span id="mobile-error" class="error text-danger" for="input-mobile">{{ $errors->first('mobile') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __(' Role') }}</label>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" readonly name="role" value="{{ $user->role}}" id="input-role" type="text" placeholder="{{ __('Role') }}"  aria-required="true"/>
                      @if ($errors->has('role'))
                        <span id="role-error" class="error text-danger" for="input-role">{{ $errors->first('role') }}</span>
                      @endif
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __(' Address') }}</label>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('supplier_address') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('supplier_address') ? ' is-invalid' : '' }}" readonly name="supplier_address" value="{{ $user->supplier_address}}" id="input-supplier_address" type="text" placeholder="{{ __('Address') }}"  aria-required="true"/>
                      @if ($errors->has('supplier_address'))
                        <span id="supplier_address-error" class="error text-danger" for="input-supplier_address">{{ $errors->first('supplier_address') }}</span>
                      @endif
                    </div>
                  </div>
                  </div>         
                       
              </div>
              <div class="col-md-5">
              <a href="{{ asset('public/uploads/employee') }}/{{ $user->img1 }}" target='_blank'> <img src="{{ asset('public/uploads/employee') }}/{{ $user->img1 }}" style='height:250px;width:250px;border-radius:5%;'/></a>
              </div>
              </div>
            
            </div>
                      
            </div>

            </div>

          </div>
    

        </div>
	          </form>
     
    </div>
  </div>

  </div>
  </div>
