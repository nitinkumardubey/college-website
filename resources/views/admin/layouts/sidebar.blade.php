
<div class="sidebar" data-color="orange" data-background-color="white"  style=''>
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <div class="logo" style="background-color:whitesmoke;">
    <a href="" class="simple-text logo-normal">
      <img src="{{ asset('public/material') }}/images/logo.png" style='height:60px;width:150px;margin-left:10px;box-shadow:0px 6px 10px whitesmoke;' class="img-fluid"  />
    
     
    </a>
  </div>
  
  <div class="sidebar-wrapper">
  
    <ul class="nav">
 
     
    <li class="nav-item{{ $activePage == 'Dashboard' ? ' active' : '' }}">
        <a class="nav-link side-parent-menu" href="{{ route('dashboard')}}">
        <i class="material-icons" style=''>dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'Course' ? ' active' : '' }}">
        <a class="nav-link side-parent-menu" href="{{ route('courses.list')}}">
        <i class="fas fa-folder-open" style="font-size:17px;"></i>
            <p>{{ __('Course') }}  </p>
        </a>
      </li>
     



        
     




      <li class="nav-item {{ ($activePage == 'Messages') ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#msg" aria-expanded="false">
        <i class="fa fa-envelope" style="font-size:17px;"></i>
          <p>{{ __('Message') }}   @if(newMessages()>=1) <span class='new-counts' style='padding:0px 3px;'> {{newMessages()}}  </span> @endif 
            <b class="caret"></b>
          </p>
        </a>
       
        <div class="collapse {{ ($activePage == 'Messages')? 'show' : 'hide' }}" id="msg" >
          <ul class="nav">
          <li class="nav-item @if(isset($subtitle)){{($subtitle == 'newMessage') ? ' active' : '' }} @endif">
              <a class="nav-link" id="nav-link" href="{{ route('msg.new')}}" style='color:#000000;'>
              <i class="material-icons" style='' > add</i>
               <p> {{ __('New Message') }}    @if(newMessages()>=1) <span class='new-counts'> {{newMessages()}}  </span> @endif </p>                
              </a>
            </li>

          <li class="nav-item @if(isset($subtitle)){{($subtitle == 'allMessage') ? ' active' : '' }} @endif">
              <a class="nav-link" id="nav-link" href="{{ route('msg.list')}}" style='color:#000000;'>
              <i class="material-icons" style='' > add</i>
               <p> {{ __('All Message') }}    @if(allMessages()>=1) <span class='counts'> {{allMessages()}}  </span> @endif  </p>                
              </a>
            </li>
          </ul>
        </div>
      </li>



      <li class="nav-item {{ ($activePage == 'Student') ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#customer" aria-expanded="false">
        <i class="fa fa-users" style="font-size:17px;"></i>
          <p>{{ __('Student') }}  <span style='color:green;font-size:10px;font-weight:1000;'></span>
            <b class="caret"></b>
          </p>
        </a>
       <div class="collapse {{ ($activePage == 'Student')? 'show' : 'hide' }}" id="customer" >
          <ul class="nav">
          <li class="nav-item @if(isset($subtitle)){{($subtitle == 'newCustomer') ? ' active' : '' }} @endif">
              <a class="nav-link" id="nav-link" href="{{ route('customers.new')}}" style='color:#000000;'>
              <i class="material-icons" style='' > add</i>
               <p> {{ __('New Student') }}   @if(newCustomers()>=1) <span class='new-counts'> {{newCustomers()}}  </span> @endif </p>                
              </a>
            </li>
         <li class="nav-item @if(isset($subtitle)){{($subtitle == 'allStudent') ? ' active' : '' }} @endif">
              <a class="nav-link" id="nav-link" href="{{ route('customers.list')}}" style='color:#000000;'>
              <i class="material-icons" style='' > add</i>
               <p> {{ __('All Student') }}     @if(allCustomers()>=1) <span class='counts'> {{allCustomers()}}  </span> @endif </p>                
              </a>
            </li>
          </ul>
        </div>
      </li>

  

      <li class="nav-item {{ ($activePage == 'Web') ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#web" aria-expanded="false">
        <i class="fa fa-cogs" style="font-size:17px;"></i>
          <p>{{ __('Setting') }}  <span style='color:green;font-size:10px;font-weight:1000;'></span>
            <b class="caret"></b>
          </p>
        </a>
       
        <div class="collapse {{ ($activePage == 'Web')? 'show' : 'hide' }}" id="web" >
          <ul class="nav">

          <li class="nav-item @if(isset($subtitle)){{($subtitle == 'Profile') ? ' active' : '' }} @endif">
              <a class="nav-link" id="nav-link" href="{{ route('my.profile.update')}}" style='color:#000000;'>
              <i class="fa fa-user-circle" > </i>
               <p> {{ __('My Profile') }}  <span style='color:green;font-size:12px;font-weight:1000;'> </span></p>                
              </a>
            </li>

            <li class="nav-item @if(isset($subtitle)){{($subtitle == 'Password') ? ' active' : '' }} @endif">
              <a class="nav-link" id="nav-link" href="{{ route('password.update')}}" style='color:#000000;'>
              <i class="fa fa-key"  > </i>
               <p> {{ __('Password Change') }}  <span style='color:green;font-size:12px;font-weight:1000;'> </span></p>                
              </a>
            </li>
          

          <li class="nav-item @if(isset($subtitle)){{($subtitle == 'Web') ? ' active' : '' }} @endif">
              <a class="nav-link" id="nav-link" href="{{ route('web.info')}}" style='color:#000000;'>
              <i class="material-icons" style='' > add</i>
               <p> {{ __('Website Info') }}  <span style='color:green;font-size:12px;font-weight:1000;'> </span></p>                
              </a>
            </li>

          </ul>
        </div>
      </li>

    

     
   
    </ul>
  </div>
</div>


