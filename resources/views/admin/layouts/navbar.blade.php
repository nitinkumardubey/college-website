
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">

  <div class="container-fluid">
  <!------------------------Mini bar icon------------------------------>
 
  <!------------------------------------------------------>
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="#" style='color: white'></a>
    </div>

    <button class="navbar-toggler" type="button" style='background-image: linear-gradient( 109.2deg,  rgba(107,52,255,1) 16.5%, rgba(51,159,247,1) 81% );color:white;' data-toggle="push-menu" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="true" aria-label="Toggle navigation">
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation"> -->

    <span class="sr-only" style=''>Toggle navigation  <i class='fa fa-remove' style='color:white;'></i></span>
    <span class="navbar-toggler-icon icon-bar" style=''></span>
    <span class="navbar-toggler-icon icon-bar" style='color:white;'></span>
    <span class="navbar-toggler-icon icon-bar" style='color:white;'></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" >
     
      <!-- <ul class="navbar-nav" >
      <li class="nav-item dropdown" >
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span style='font-size:15px;text-transform:capitalize;color:#0099cc;'>  {{ __('Hello')}}  {{ auth()->user()->name }} !</span> <i class="fa fa-user-circle" style='color:#0099cc;'>
             </i>
            <p class="d-lg-none d-md-block">
              {{ __('Account') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item a1"  href="{{ route('dashboard')}}"> <i class="fa fa-user" style='margin-right:10px;'> </i> {{ __(' My Profile ')}} !</a>
            
            <div class="dropdown-divider" ></div>
            <a class="dropdown-item a1" href="{{ route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
          </div>
        </li>
    </ul>
      -->
       
         <!-- <li class="nav-item">
          <a class="nav-link" href="">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              {{ __('Stats') }}
            </p>
          </a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification" style='background-color:#F7E6A2;color:black;'>0</span>
            <p class="d-lg-none d-md-block">
              {{ __('Some Actions') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item a1" href="#">{{ __('No new notification') }}</a>
      
          </div>
        </li> -->
        <style>
        .nav-item .a1:hover
          {
            color:white;
          }

          .nav-item .a1
          {
            color:#0099cc;
          }
        </style>
      
    </div>

    <div class="dropdown" style='margin-left:20%;padding:10px;font-weight:normal;'>
   
  
    <a href='{{ route('msg.new')}}' style='margin-right:32px;' title='New Messages'> <i class="fa fa-envelope " style='color:#0099cc;'> </i> @if(newMessages()>0) <span class='notification-counts' > {{newMessages()}}  </span> @endif  </a> 
      </div>

    <div class="dropdown" style='padding:10px;font-weight:normal;'>
   
    <a class=" dropdown-toggle" type="button" data-toggle="dropdown">
    <span style='font-size:15px;text-transform:capitalize;color:#0099cc;'>  {{ __('Hello')}}  <?php  $ar=explode(" ",auth()->user()->name); echo $ar[0];  ?>!</span> <i class="fa fa-user-circle" style='color:#0099cc;'>
             </i>
        </a>
    <ul class="dropdown-menu" style='background-color:white;height:auto;'>
   
    <li> <a class="dropdown-item a1"  href="{{ route('my.profile.update')}}"> <i class="fa fa-user-circle" style='margin-right:10px;'> </i>  Role -  {{ auth()->user()->user_type }} !</a>
        </li>

        <li> <a class="dropdown-item a1"  href="{{ route('my.profile.update')}}"> <i class="fa fa-user" style='margin-right:10px;'> </i> {{ __(' My Profile ')}} </a>
        </li>
        <li> <a class="dropdown-item a1"  href="{{ route('password.update')}}"> <i class="fa fa-key" style='margin-right:10px;'> </i> {{ __('Password Update ')}} </a>
        </li>
        <li>  <div class="dropdown-divider" ></div>

            <a class="dropdown-item a1" href="{{ route('logout')}}" > <i class="fa fa-power-off" style='margin-right:10px;'> </i> {{ __('Log out') }}</a></li>
     
    </ul>
  </div>
    
   

  </div>




</nav>


