@include("admin.layouts.app")

@include("admin.layouts.sidebar")
@include("admin.layouts.navbar")
<div class="wrapper ">
 <script src="https://cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>

              
  <div class="main-panel">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
      
          <form method='post'  action="{{ route('courses.create') }}"  enctype="multipart/form-data">
              @csrf
                @include('admin.layouts.flash_msg')

                <div class="card ">
                  <div class="card-header card-header-default" >
                    <h4 class="card-title">{{ __($title) }} 
                    <a href="{{route('courses.list')}}"  class="btn btn-sm btn-default float-right" style='background-color:white ;color:#0099cc;'><i class='fa fa-arrow-left' style='font-size:12px;'>  {{ __('Back') }}</i> </a>
                      
                    </h4>
                  </div>

                  
                <div class="card-body ">


                <div class="row">
              


                        <label class="col-sm-2 col-form-label">{{ __('Course Name*') }}</label>
                      <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __(' Name') }}"  value="{{ old('name') }}"  aria-required="true"/>
                          @if ($errors->has('name'))
                            <span id="name-error" class="error text-danger" for="input-name">Name is Empty!</span>
                          @endif
                        </div>
                      </div>
                      <label class="col-sm-2 col-form-label">{{ __('Topic*') }}</label>
                      <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('topic') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('topic') ? ' is-invalid' : '' }}" name="topic" id="input-topic" type="text" placeholder="{{ __(' Topic') }}"  value="{{ old('topic') }}"  aria-required="true"/>
                          @if ($errors->has('topic'))
                            <span id="topic-error" class="error text-danger" for="input-topic">Topic is Empty!</span>
                          @endif
                        </div>
                      </div>
                      <label class="col-sm-2 col-form-label">{{ __('Available*') }}</label>
                      <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('available') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('available') ? ' is-invalid' : '' }}" name="available" id="input-available" type="text" placeholder="{{ __(' Available') }}"  value="{{ old('available') }}"  aria-required="true"/>
                          @if ($errors->has('available'))
                            <span id="available-error" class="error text-danger" for="input-available">Available is Empty!</span>
                          @endif
                        </div>
                      </div>
                      <label class="col-sm-2 col-form-label">{{ __('Seats*') }}</label>
                      <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('seats') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('seats') ? ' is-invalid' : '' }}" name="seats" id="input-seats" type="text" placeholder="{{ __(' Seats') }}"  value="{{ old('seats') }}"  aria-required="true"/>
                          @if ($errors->has('seats'))
                            <span id="seats-error" class="error text-danger" for="input-seats">Seats is Empty!</span>
                          @endif
                        </div>
                      </div>
                      <label class="col-sm-2 col-form-label">{{ __('Sort Details*') }}</label>
                      <div class="col-sm-10">
                        <div class="form-group{{ $errors->has('sort_details') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('sort_details') ? ' is-invalid' : '' }}" name="sort_details" id="input-sort_details" type="text" placeholder="{{ __(' Sort Details') }}"  value="{{ old('sort_details') }}"  aria-required="true"/>
                          @if ($errors->has('sort_details'))
                            <span id="sort_details-error" class="error text-danger" for="input-sort_details">sort_details is Empty!</span>
                          @endif
                        </div>
                      </div>
              
                      
            

                      <label class="col-sm-2 col-form-label">{{ __('Course Details & Features*')  }}</label>
                      <div class="col-sm-10 col-md-10">
                        <div class="form-group{{ $errors->has('details') ? ' has-danger' : '' }}">
                        <textarea class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}"  name="details" id="input-details" type="details" value="{{ old('details') }}" placeholder="{{ __('Course Details') }}"  />
                        {{ old('details') }}
                          </textarea>
                          <script>
                            CKEDITOR.replace( 'input-details' );
                          </script>
                              @if ($errors->has('details'))
                            <span id="details-error" class="error text-danger" for="input-details">Course Details is Empty!</span>
                          @endif
                        </div>
                      </div>

                    </div>

                      <br>

                      <div class="row"  id="file-content" >
                              <label class="col-sm-2 col-form-label">{{ __('Upload Course Image*')}}</label>
                              <div class="col-sm-4">
                              <label htmlFor="myImage" > 
                          <input type="file" name="myImage" required
                          style="background-color:#0099cc;color:white;width:100%;padding:6px;"

                              class="form-control-file" 
                              accept="image/x-png,image/gif,image/jpeg,image/jpg" 
                              id="myImage"
                          /></label>
                             </div>

     
                           <br>

                    <div>

                            
                                
                          

                          <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary" >{{ __('Save') }}</button>
                          </div>

                  </div>
                
                </div>

            
	          </form>
     
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
