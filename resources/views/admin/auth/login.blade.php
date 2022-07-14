
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Education Master </title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html , it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html , university , college , school , online education , tution center ">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('public/material') }}/css/materialize.css" rel="stylesheet">
    <link href="{{ asset('public/material') }}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{ asset('public/material') }}/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset('public/material') }}/css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

   <section>
		<div class="ad-log-main">
			<div class="ad-log-in">
				<div class="ad-log-in-logo">
					<a href="{{route('home')}}"><img src="{{ asset('public/material') }}/images/logo.png" alt=""></a>
				</div>
				<div class="ad-log-in-con">
        @include('home.layouts.flash_msg')
			<div class="log-in-pop-right">
        
                    <h4>Login</h4>
                    <!-- <p>Don't have an account? Create your account. It's take less then a minutes</p> -->
                
                    <form class="form" method="POST" action="{{route('login')}}">
            @csrf
                        <div>
                            <div class="input-field s12">
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __(' Enter Email') }}"   aria-required="true"/>
                                      @if ($errors->has('email'))
                                        <span id="email-error" class="error text-danger" for="input-email">Email is Empty!</span>
                                      @endif
                                    </div>
                      
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
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
                        <div>
                            <!-- <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5">
                                    <label for="test5">Remember me</label>
                                </p>
                            </div> -->
                        </div>
                        <div>
                            <div class="input-field s4">
                            <button type="submit"  class="waves-effect waves-light log-in-btn waves-input-wrapper" 
            >{{ __('Login') }} </button>
                                <!-- <i class="waves-effect waves-light log-in-btn waves-input-wrapper" style=""><button type="submit"  class="waves-button-input"></button></i>  -->
                              </div>
                        </div>
                        <!-- <div>
                            <div class="input-field s12"> <a href="admin-forgot.html">Forgot password</a> | <a href="#">Create a new account</a> </div>
                        </div> -->
                    </form>
                </div>
				</div>
			</div>
		</div>
   </section>

    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('public/material') }}/js/main.min.js"></script>
    <script src="{{ asset('public/material') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/material') }}/js/materialize.min.js"></script>
    <script src="{{ asset('public/material') }}/js/custom.js"></script>
</body>

</html>