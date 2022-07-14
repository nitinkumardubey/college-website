@include("home.layouts.header") 

    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->
    <div class="container-fluid"style="padding:50px;">
        <div class="container" style="padding:40px 2px;box-shadow: 0px 0px 1px 1px #dad4d4;border-radius:6px;max-width:600px;text-align:center;background-color:white;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title" style="text-align:center;">
                        <h3>Register</h3>
                    </div>
                </div>
            </div>
            <form method='post'  action="{{ route('register') }}"  enctype="multipart/form-data" >
            @csrf
            <div class="row">
                    
                    <div class="col-md-8 offset-md-2">
            <span style='font-size:16px;'>
                @include('home.layouts.flash_msg')
            </span>
            </div></div>
          





                     <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Enter Your Name') }}"  value="{{ old('name') }}"  aria-required="true"/>
                                      @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">Name is Empty!</span>
                                      @endif
                                    </div>
                                  </div> 
                                  </div>
                                  <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __(' Enter Your Email') }}"  value="{{ old('email') }}"  aria-required="true"/>
                                      @if ($errors->has('email'))
                                        <span id="email-error" class="error text-danger" for="input-email">Email is Empty!</span>
                                      @endif
                                    </div>
                                  </div>

                                  </div>
                          




                                  <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('mobile') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" id="input-mobile" type="number" placeholder="{{ __('Enter Your Mobile No') }}"  value="{{ old('mobile') }}"  aria-required="true"/>
                                      @if ($errors->has('mobile'))
                                        <span id="mobile-error" class="error text-danger" for="input-mobile">Mobile No1 is Empty!</span>
                                      @endif
                                    </div>
                                  </div>
                                  </div>

                                  
                                  <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                  <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                              
                                <input class="form-control" type="password" name="password" id="password"  placeholder="{{ __('Enter Password...') }}" value="{{ old('password') }}"  aria-required="true"/>
                              
                              @if ($errors->has('password'))
                                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                  <strong>{{ $errors->first('password') }}</strong>
                                </div>
                              @endif
                            </div>
                            </div>
                            </div>
                            <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('	company_address') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('	company_address') ? ' is-invalid' : '' }}" name="company_address" id="input-company_address" type="text" placeholder="{{ __(' Enter Your Full Address') }}"  value="{{ old('company_address') }}"  aria-required="true"/>
                                      @if ($errors->has('company_address'))
                                        <span id="company_address-error" class="error text-danger" for="input-company_address"> Address is Empty!</span>
                                      @endif
                                    </div>
                                  </div>   

                                  </div>

                     <div class="row" style="margin:20px;">
                    <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                    <select  class="custom-select {{ $errors->has('country') ? ' is-invalid' : '' }}" name='country' id="input-country"   >
                                            <option value=''>Select the Country Region?</option>

                                                          <option value="af"{{ ('af'==old('country'))?'selected':''}}>Afghanistan</option>
                                                          <option value="ax"{{ ('ax'==old('country'))?'selected':''}}>Åland Islands</option>
                                                          <option value="al"{{ ('al'==old('country'))?'selected':''}}>Albania</option>
                                                          <option value="dz"{{ ('dz'==old('country'))?'selected':''}}>Algeria</option>
                                                          <option value="as"{{ ('as'==old('country'))?'selected':''}}>American Samoa</option>
                                                          <option value="ad"{{ ('ad'==old('country'))?'selected':''}}>Andorra</option>
                                                          <option value="ao"{{ ('ao'==old('country'))?'selected':''}}>Angola</option>
                                                          <option value="ai"{{ ('ai'==old('country'))?'selected':''}}>Anguilla</option>
                                                          <option value="aq"{{ ('aq'==old('country'))?'selected':''}}>Antarctica</option>
                                                          <option value="ag"{{ ('ag'==old('country'))?'selected':''}}>Antigua and Barbuda</option>
                                                          <option value="ar"{{ ('ar'==old('country'))?'selected':''}}>Argentina</option>
                                                          <option value="am"{{ ('am'==old('country'))?'selected':''}}>Armenia</option>
                                                          <option value="aw"{{ ('aw'==old('country'))?'selected':''}}>Aruba</option>
                                                          <option value="au"{{ ('au'==old('country'))?'selected':''}}>Australia</option>
                                                          <option value="at"{{ ('at'==old('country'))?'selected':''}}>Austria</option>
                                                          <option value="az"{{ ('az'==old('country'))?'selected':''}}>Azerbaijan</option>
                                                          <option value="bs"{{ ('bs'==old('country'))?'selected':''}}>Bahamas</option>
                                                          <option value="bh"{{ ('bh'==old('country'))?'selected':''}}>Bahrain</option>
                                                          <option value="bd"{{ ('bd'==old('country'))?'selected':''}}>Bangladesh</option>
                                                          <option value="bb"{{ ('bb'==old('country'))?'selected':''}}>Barbados</option>
                                                          <option value="by"{{ ('by'==old('country'))?'selected':''}}>Belarus</option>
                                                          <option value="be"{{ ('be'==old('country'))?'selected':''}}>Belgium</option>
                                                          <option value="bz"{{ ('bz'==old('country'))?'selected':''}}>Belize</option>
                                                          <option value="bj"{{ ('bj'==old('country'))?'selected':''}}>Benin</option>
                                                          <option value="bm"{{ ('bm'==old('country'))?'selected':''}}>Bermuda</option>
                                                          <option value="bt"{{ ('bt'==old('country'))?'selected':''}}>Bhutan</option>
                                                          <option value="bo"{{ ('bo'==old('country'))?'selected':''}}>Bolivia, Plurinational State of</option>
                                                          <option value="bq"{{ ('bq'==old('country'))?'selected':''}}>Bonaire, Sint Eustatius and Saba</option>
                                                          <option value="ba"{{ ('ba'==old('country'))?'selected':''}}>Bosnia and Herzegovina</option>
                                                          <option value="bw"{{ ('bw'==old('country'))?'selected':''}}>Botswana</option>
                                                          <option value="bv"{{ ('bv'==old('country'))?'selected':''}}>Bouvet Island</option>
                                                          <option value="br"{{ ('br'==old('country'))?'selected':''}}>Brazil</option>
                                                          <option value="io"{{ ('io'==old('country'))?'selected':''}}>British Indian Ocean Territory</option>
                                                          <option value="bn"{{ ('bn'==old('country'))?'selected':''}}>Brunei Darussalam</option>
                                                          <option value="bg"{{ ('bg'==old('country'))?'selected':''}}>Bulgaria</option>
                                                          <option value="bf"{{ ('bf'==old('country'))?'selected':''}}>Burkina Faso</option>
                                                          <option value="bi"{{ ('bi'==old('country'))?'selected':''}}>Burundi</option>
                                                          <option value="kh"{{ ('kh'==old('country'))?'selected':''}}>Cambodia</option>
                                                          <option value="cm"{{ ('cm'==old('country'))?'selected':''}}>Cameroon</option>
                                                          <option value="ca"{{ ('ca'==old('country'))?'selected':''}}>Canada</option>
                                                          <option value="cv"{{ ('cv'==old('country'))?'selected':''}}>Cape Verde</option>
                                                          <option value="ky"{{ ('ky'==old('country'))?'selected':''}}>Cayman Islands</option>
                                                          <option value="cf"{{ ('cf'==old('country'))?'selected':''}}>Central African Republic</option>
                                                          <option value="td"{{ ('td'==old('country'))?'selected':''}}>Chad</option>
                                                          <option value="cl"{{ ('cl'==old('country'))?'selected':''}}>Chile</option>
                                                          <option value="cn"{{ ('cn'==old('country'))?'selected':''}}>China</option>
                                                          <option value="cx"{{ ('cx'==old('country'))?'selected':''}}>Christmas Island</option>
                                                          <option value="cc"{{ ('cc'==old('country'))?'selected':''}}>Cocos (Keeling) Islands</option>
                                                          <option value="co"{{ ('co'==old('country'))?'selected':''}}>Colombia</option>
                                                          <option value="km"{{ ('km'==old('country'))?'selected':''}}>Comoros</option>
                                                          <option value="cg"{{ ('cg'==old('country'))?'selected':''}}>Congo</option>
                                                          <option value="cd"{{ ('cd'==old('country'))?'selected':''}}>Congo, the Democratic Republic of the</option>
                                                          <option value="ck"{{ ('ck'==old('country'))?'selected':''}}>Cook Islands</option>
                                                          <option value="cr"{{ ('cr'==old('country'))?'selected':''}}>Costa Rica</option>
                                                          <option value="ci"{{ ('ci'==old('country'))?'selected':''}}>Côte d'Ivoire</option>
                                                          <option value="hr"{{ ('hr'==old('country'))?'selected':''}}>Croatia</option>
                                                          <option value="cu"{{ ('cu'==old('country'))?'selected':''}}>Cuba</option>
                                                          <option value="cw"{{ ('cw'==old('country'))?'selected':''}}>Curaçao</option>
                                                          <option value="cy"{{ ('cy'==old('country'))?'selected':''}}>Cyprus</option>
                                                          <option value="cz"{{ ('cz'==old('country'))?'selected':''}}>Czech Republic</option>
                                                          <option value="dk"{{ ('dk'==old('country'))?'selected':''}}>Denmark</option>
                                                          <option value="dj"{{ ('dj'==old('country'))?'selected':''}}>Djibouti</option>
                                                          <option value="dm"{{ ('dm'==old('country'))?'selected':''}}>Dominica</option>
                                                          <option value="do"{{ ('do'==old('country'))?'selected':''}}>Dominican Republic</option>
                                                          <option value="ec"{{ ('ec'==old('country'))?'selected':''}}>Ecuador</option>
                                                          <option value="eg"{{ ('eg'==old('country'))?'selected':''}}>Egypt</option>
                                                          <option value="sv"{{ ('sv'==old('country'))?'selected':''}}>El Salvador</option>
                                                          <option value="gq"{{ ('gq'==old('country'))?'selected':''}}>Equatorial Guinea</option>
                                                          <option value="er"{{ ('er'==old('country'))?'selected':''}}>Eritrea</option>
                                                          <option value="ee"{{ ('ee'==old('country'))?'selected':''}}>Estonia</option>
                                                          <option value="et"{{ ('et'==old('country'))?'selected':''}}>Ethiopia</option>
                                                          <option value="fk"{{ ('fk'==old('country'))?'selected':''}}>Falkland Islands (Malvinas)</option>
                                                          <option value="fo"{{ ('fo'==old('country'))?'selected':''}}>Faroe Islands</option>
                                                          <option value="fj"{{ ('fj'==old('country'))?'selected':''}}>Fiji</option>
                                                          <option value="fi"{{ ('fi'==old('country'))?'selected':''}}>Finland</option>
                                                          <option value="fr"{{ ('fr'==old('country'))?'selected':''}}>France</option>
                                                          <option value="gf"{{ ('gf'==old('country'))?'selected':''}}>French Guiana</option>
                                                          <option value="pf"{{ ('pf'==old('country'))?'selected':''}}>French Polynesia</option>
                                                          <option value="tf"{{ ('tf'==old('country'))?'selected':''}}>French Southern Territories</option>
                                                          <option value="ga"{{ ('ga'==old('country'))?'selected':''}}>Gabon</option>
                                                          <option value="gm"{{ ('gm'==old('country'))?'selected':''}}>Gambia</option>
                                                          <option value="ge"{{ ('ge'==old('country'))?'selected':''}}>Georgia</option>
                                                          <option value="de"{{ ('de'==old('country'))?'selected':''}}>Germany</option>
                                                          <option value="gh"{{ ('gh'==old('country'))?'selected':''}}>Ghana</option>
                                                          <option value="gi"{{ ('gi'==old('country'))?'selected':''}}>Gibraltar</option>
                                                          <option value="gr"{{ ('gr'==old('country'))?'selected':''}}>Greece</option>
                                                          <option value="gl"{{ ('gl'==old('country'))?'selected':''}}>Greenland</option>
                                                          <option value="gd"{{ ('gd'==old('country'))?'selected':''}}>Grenada</option>
                                                          <option value="gp"{{ ('gp'==old('country'))?'selected':''}}>Guadeloupe</option>
                                                          <option value="gu"{{ ('gu'==old('country'))?'selected':''}}>Guam</option>
                                                          <option value="gt"{{ ('gt'==old('country'))?'selected':''}}>Guatemala</option>
                                                          <option value="gg"{{ ('gg'==old('country'))?'selected':''}}>Guernsey</option>
                                                          <option value="gn"{{ ('gn'==old('country'))?'selected':''}}>Guinea</option>
                                                          <option value="gw"{{ ('gw'==old('country'))?'selected':''}}>Guinea-Bissau</option>
                                                          <option value="gy"{{ ('gy'==old('country'))?'selected':''}}>Guyana</option>
                                                          <option value="ht"{{ ('ht'==old('country'))?'selected':''}}>Haiti</option>
                                                          <option value="hm"{{ ('hm'==old('country'))?'selected':''}}>Heard Island and McDonald Islands</option>
                                                          <option value="va"{{ ('va'==old('country'))?'selected':''}}>Holy See (Vatican City State)</option>
                                                          <option value="hn"{{ ('hn'==old('country'))?'selected':''}}>Honduras</option>
                                                          <option value="hk"{{ ('hk'==old('country'))?'selected':''}}>Hong Kong</option>
                                                          <option value="hu"{{ ('hu'==old('country'))?'selected':''}}>Hungary</option>
                                                          <option value="is"{{ ('is'==old('country'))?'selected':''}}>Iceland</option>
                                                          <option value="in"{{ ('in'==old('country'))?'selected':''}}>India</option>
                                                          <option value="id"{{ ('id'==old('country'))?'selected':''}}>Indonesia</option>
                                                          <option value="ir"{{ ('ir'==old('country'))?'selected':''}}>Iran, Islamic Republic of</option>
                                                          <option value="iq"{{ ('iq'==old('country'))?'selected':''}}>Iraq</option>
                                                          <option value="ie"{{ ('ie'==old('country'))?'selected':''}}>Ireland</option>
                                                          <option value="im"{{ ('im'==old('country'))?'selected':''}}>Isle of Man</option>
                                                          <option value="il"{{ ('il'==old('country'))?'selected':''}}>Israel</option>
                                                          <option value="it"{{ ('it'==old('country'))?'selected':''}}>Italy</option>
                                                          <option value="jm"{{ ('jm'==old('country'))?'selected':''}}>Jamaica</option>
                                                          <option value="jp"{{ ('jp'==old('country'))?'selected':''}}>Japan</option>
                                                          <option value="je"{{ ('je'==old('country'))?'selected':''}}>Jersey</option>
                                                          <option value="jo"{{ ('jo'==old('country'))?'selected':''}}>Jordan</option>
                                                          <option value="kz"{{ ('kz'==old('country'))?'selected':''}}>Kazakhstan</option>
                                                          <option value="ke"{{ ('ke'==old('country'))?'selected':''}}>Kenya</option>
                                                          <option value="ki"{{ ('ki'==old('country'))?'selected':''}}>Kiribati</option>
                                                          <option value="kp"{{ ('kp'==old('country'))?'selected':''}}>Korea, Democratic People's Republic of</option>
                                                          <option value="kr"{{ ('kr'==old('country'))?'selected':''}}>Korea, Republic of</option>
                                                          <option value="kw"{{ ('kw'==old('country'))?'selected':''}}>Kuwait</option>
                                                          <option value="kg"{{ ('kg'==old('country'))?'selected':''}}>Kyrgyzstan</option>
                                                          <option value="la"{{ ('la'==old('country'))?'selected':''}}>Lao People's Democratic Republic</option>
                                                          <option value="lv"{{ ('lv'==old('country'))?'selected':''}}>Latvia</option>
                                                          <option value="lb"{{ ('lb'==old('country'))?'selected':''}}>Lebanon</option>
                                                          <option value="ls"{{ ('ls'==old('country'))?'selected':''}}>Lesotho</option>
                                                          <option value="lr"{{ ('lr'==old('country'))?'selected':''}}>Liberia</option>
                                                          <option value="ly"{{ ('ly'==old('country'))?'selected':''}}>Libya</option>
                                                          <option value="li"{{ ('li'==old('country'))?'selected':''}}>Liechtenstein</option>
                                                          <option value="lt"{{ ('lt'==old('country'))?'selected':''}}>Lithuania</option>
                                                          <option value="lu"{{ ('lu'==old('country'))?'selected':''}}>Luxembourg</option>
                                                          <option value="mo"{{ ('mo'==old('country'))?'selected':''}}>Macao</option>
                                                          <option value="mk"{{ ('mk'==old('country'))?'selected':''}}>Macedonia, the former Yugoslav Republic of</option>
                                                          <option value="mg"{{ ('mg'==old('country'))?'selected':''}}>Madagascar</option>
                                                          <option value="mw"{{ ('mw'==old('country'))?'selected':''}}>Malawi</option>
                                                          <option value="my"{{ ('my'==old('country'))?'selected':''}}>Malaysia</option>
                                                          <option value="mv"{{ ('mv'==old('country'))?'selected':''}}>Maldives</option>
                                                          <option value="ml"{{ ('ml'==old('country'))?'selected':''}}>Mali</option>
                                                          <option value="mt"{{ ('mt'==old('country'))?'selected':''}}>Malta</option>
                                                          <option value="mh"{{ ('mh'==old('country'))?'selected':''}}>Marshall Islands</option>
                                                          <option value="mq"{{ ('mq'==old('country'))?'selected':''}}>Martinique</option>
                                                          <option value="mr"{{ ('mr'==old('country'))?'selected':''}}>Mauritania</option>
                                                          <option value="mu"{{ ('mu'==old('country'))?'selected':''}}>Mauritius</option>
                                                          <option value="yt"{{ ('yt'==old('country'))?'selected':''}}>Mayotte</option>
                                                          <option value="mx"{{ ('mx'==old('country'))?'selected':''}}>Mexico</option>
                                                          <option value="fm"{{ ('fm'==old('country'))?'selected':''}}>Micronesia, Federated States of</option>
                                                          <option value="md"{{ ('md'==old('country'))?'selected':''}}>Moldova, Republic of</option>
                                                          <option value="mc"{{ ('mc'==old('country'))?'selected':''}}>Monaco</option>
                                                          <option value="mo"{{ ('mo'==old('country'))?'selected':''}}>Mongolia</option>
                                                          <option value="me"{{ ('me'==old('country'))?'selected':''}}>Montenegro</option>
                                                          <option value="ms"{{ ('ms'==old('country'))?'selected':''}}>Montserrat</option>
                                                          <option value="ma"{{ ('ma'==old('country'))?'selected':''}}>Morocco</option>
                                                          <option value="mz"{{ ('mz'==old('country'))?'selected':''}}>Mozambique</option>
                                                          <option value="mm"{{ ('mm'==old('country'))?'selected':''}}>Myanmar</option>
                                                          <option value="na"{{ ('na'==old('country'))?'selected':''}}>Namibia</option>
                                                          <option value="nr"{{ ('nr'==old('country'))?'selected':''}}>Nauru</option>
                                                          <option value="np"{{ ('np'==old('country'))?'selected':''}}>Nepal</option>
                                                          <option value="nl"{{ ('nl'==old('country'))?'selected':''}}>Netherlands</option>
                                                          <option value="nc"{{ ('nc'==old('country'))?'selected':''}}>New Caledonia</option>
                                                          <option value="nz"{{ ('nz'==old('country'))?'selected':''}}>New Zealand</option>
                                                          <option value="ni"{{ ('ni'==old('country'))?'selected':''}}>Nicaragua</option>
                                                          <option value="ne"{{ ('ne'==old('country'))?'selected':''}}>Niger</option>
                                                          <option value="ng"{{ ('ng'==old('country'))?'selected':''}}>Nigeria</option>
                                                          <option value="nu"{{ ('nu'==old('country'))?'selected':''}}>Niue</option>
                                                          <option value="nf"{{ ('nf'==old('country'))?'selected':''}}>Norfolk Island</option>
                                                          <option value="mp"{{ ('mp'==old('country'))?'selected':''}}>Northern Mariana Islands</option>
                                                          <option value="no"{{ ('no'==old('country'))?'selected':''}}>Norway</option>
                                                          <option value="om"{{ ('om'==old('country'))?'selected':''}}>Oman</option>
                                                          <option value="pk"{{ ('pk'==old('country'))?'selected':''}}>Pakistan</option>
                                                          <option value="pw"{{ ('pw'==old('country'))?'selected':''}}>Palau</option>
                                                          <option value="ps"{{ ('ps'==old('country'))?'selected':''}}>Palestinian Territory, Occupied</option>
                                                          <option value="pa"{{ ('pa'==old('country'))?'selected':''}}>Panama</option>
                                                          <option value="pg"{{ ('pg'==old('country'))?'selected':''}}>Papua New Guinea</option>
                                                          <option value="py"{{ ('py'==old('country'))?'selected':''}}>Paraguay</option>
                                                          <option value="pe"{{ ('pe'==old('country'))?'selected':''}}>Peru</option>
                                                          <option value="ph"{{ ('ph'==old('country'))?'selected':''}}>Philippines</option>
                                                          <option value="pn"{{ ('pn'==old('country'))?'selected':''}}>Pitcairn</option>
                                                          <option value="pl"{{ ('pl'==old('country'))?'selected':''}}>Poland</option>
                                                          <option value="pt"{{ ('pt'==old('country'))?'selected':''}}>Portugal</option>
                                                          <option value="pr"{{ ('pr'==old('country'))?'selected':''}}>Puerto Rico</option>
                                                          <option value="qa"{{ ('qa'==old('country'))?'selected':''}}>Qatar</option>
                                                          <option value="re"{{ ('re'==old('country'))?'selected':''}}>Réunion</option>
                                                          <option value="ro"{{ ('ro'==old('country'))?'selected':''}}>Romania</option>
                                                          <option value="ru"{{ ('ru'==old('country'))?'selected':''}}>Russian Federation</option>
                                                          <option value="rw"{{ ('rw'==old('country'))?'selected':''}}>Rwanda</option>
                                                          <option value="bl"{{ ('bl'==old('country'))?'selected':''}}>Saint Barthélemy</option>
                                                          <option value="sh"{{ ('sh'==old('country'))?'selected':''}}>Saint Helena, Ascension and Tristan da Cunha</option>
                                                          <option value="kn"{{ ('kn'==old('country'))?'selected':''}}>Saint Kitts and Nevis</option>
                                                          <option value="lc"{{ ('lc'==old('country'))?'selected':''}}>Saint Lucia</option>
                                                          <option value="mf"{{ ('mf'==old('country'))?'selected':''}}>Saint Martin (French part)</option>
                                                          <option value="pm"{{ ('pm'==old('country'))?'selected':''}}>Saint Pierre and Miquelon</option>
                                                          <option value="vc"{{ ('vc'==old('country'))?'selected':''}}>Saint Vincent and the Grenadines</option>
                                                          <option value="ws"{{ ('ws'==old('country'))?'selected':''}}>Samoa</option>
                                                          <option value="sm"{{ ('sm'==old('country'))?'selected':''}}>San Marino</option>
                                                          <option value="st"{{ ('st'==old('country'))?'selected':''}}>Sao Tome and Principe</option>
                                                          <option value="sa"{{ ('sa'==old('country'))?'selected':''}}>Saudi Arabia</option>
                                                          <option value="sn"{{ ('sn'==old('country'))?'selected':''}}>Senegal</option>
                                                          <option value="rs"{{ ('rs'==old('country'))?'selected':''}}>Serbia</option>
                                                          <option value="sc"{{ ('sc'==old('country'))?'selected':''}}>Seychelles</option>
                                                          <option value="sl"{{ ('sl'==old('country'))?'selected':''}}>Sierra Leone</option>
                                                          <option value="sg"{{ ('sg'==old('country'))?'selected':''}}>Singapore</option>
                                                          <option value="sx"{{ ('sx'==old('country'))?'selected':''}}>Sint Maarten (Dutch part)</option>
                                                          <option value="sk"{{ ('sk'==old('country'))?'selected':''}}>Slovakia</option>
                                                          <option value="si"{{ ('si'==old('country'))?'selected':''}}>Slovenia</option>
                                                          <option value="sb"{{ ('sb'==old('country'))?'selected':''}}>Solomon Islands</option>
                                                          <option value="so"{{ ('so'==old('country'))?'selected':''}}>Somalia</option>
                                                          <option value="za"{{ ('za'==old('country'))?'selected':''}}>South Africa</option>
                                                          <option value="gs"{{ ('gs'==old('country'))?'selected':''}}>South Georgia and the South Sandwich Islands</option>
                                                          <option value="ss"{{ ('ss'==old('country'))?'selected':''}}>South Sudan</option>
                                                          <option value="es"{{ ('es'==old('country'))?'selected':''}}>Spain</option>
                                                          <option value="lk"{{ ('lk'==old('country'))?'selected':''}}>Sri Lanka</option>
                                                          <option value="sd"{{ ('sd'==old('country'))?'selected':''}}>Sudan</option>
                                                          <option value="sr"{{ ('sr'==old('country'))?'selected':''}}>Suriname</option>
                                                          <option value="sj"{{ ('sj'==old('country'))?'selected':''}}>Svalbard and Jan Mayen</option>
                                                          <option value="sz"{{ ('sz'==old('country'))?'selected':''}}>Swaziland</option>
                                                          <option value="se"{{ ('se'==old('country'))?'selected':''}}>Sweden</option>
                                                          <option value="ch"{{ ('ch'==old('country'))?'selected':''}}>Switzerland</option>
                                                          <option value="sy"{{ ('sy'==old('country'))?'selected':''}}>Syrian Arab Republic</option>
                                                          <option value="tw"{{ ('tw'==old('country'))?'selected':''}}>Taiwan, Province of China</option>
                                                          <option value="tj"{{ ('tj'==old('country'))?'selected':''}}>Tajikistan</option>
                                                          <option value="tz"{{ ('tz'==old('country'))?'selected':''}}>Tanzania, United Republic of</option>
                                                          <option value="th"{{ ('th'==old('country'))?'selected':''}}>Thailand</option>
                                                          <option value="tl"{{ ('tl'==old('country'))?'selected':''}}>Timor-Leste</option>
                                                          <option value="tg"{{ ('tg'==old('country'))?'selected':''}}>Togo</option>
                                                          <option value="tk"{{ ('tk'==old('country'))?'selected':''}}>Tokelau</option>
                                                          <option value="to"{{ ('to'==old('country'))?'selected':''}}>Tonga</option>
                                                          <option value="tt"{{ ('tt'==old('country'))?'selected':''}}>Trinidad and Tobago</option>
                                                          <option value="tn"{{ ('tn'==old('country'))?'selected':''}}>Tunisia</option>
                                                          <option value="tr"{{ ('tr'==old('country'))?'selected':''}}>Turkey</option>
                                                          <option value="tm"{{ ('tm'==old('country'))?'selected':''}}>Turkmenistan</option>
                                                          <option value="tc"{{ ('tc'==old('country'))?'selected':''}}>Turks and Caicos Islands</option>
                                                          <option value="tv"{{ ('tv'==old('country'))?'selected':''}}>Tuvalu</option>
                                                          <option value="ug"{{ ('ug'==old('country'))?'selected':''}}>Uganda</option>
                                                          <option value="ua"{{ ('ua'==old('country'))?'selected':''}}>Ukraine</option>
                                                          <option value="ae"{{ ('ae'==old('country'))?'selected':''}}>United Arab Emirates</option>
                                                          <option value="gb"{{ ('gb'==old('country'))?'selected':''}}>United Kingdom</option>
                                                          <option value="us"{{ ('us'==old('country'))?'selected':''}}>United States</option>
                                                          <option value="um"{{ ('um'==old('country'))?'selected':''}}>United States Minor Outlying Islands</option>
                                                          <option value="uy"{{ ('uy'==old('country'))?'selected':''}}>Uruguay</option>
                                                          <option value="uz"{{ ('uz'==old('country'))?'selected':''}}>Uzbekistan</option>
                                                          <option value="vu"{{ ('vu'==old('country'))?'selected':''}}>Vanuatu</option>
                                                          <option value="ve"{{ ('ve'==old('country'))?'selected':''}}>Venezuela, Bolivarian Republic of</option>
                                                          <option value="vn"{{ ('vn'==old('country'))?'selected':''}}>Viet Nam</option>
                                                          <option value="vg"{{ ('vg'==old('country'))?'selected':''}}>Virgin Islands, British</option>
                                                          <option value="vi"{{ ('vi'==old('country'))?'selected':''}}>Virgin Islands, U.S.</option>
                                                          <option value="wf"{{ ('wf'==old('country'))?'selected':''}}>Wallis and Futuna</option>
                                                          <option value="eh"{{ ('eh'==old('country'))?'selected':''}}>Western Sahara</option>
                                                          <option value="ye"{{ ('ye'==old('country'))?'selected':''}}>Yemen</option>
                                                          <option value="zm"{{ ('zm'==old('country'))?'selected':''}}>Zambia</option>
                                                          <option value="zw"{{ ('zw'==old('country'))?'selected':''}}>Zimbabwe</option>
                                      </select>  @if ($errors->has('country'))
                                        <span id="country-error" class="error text-danger" for="input-countr">Country Region is Empty!</span>
                                      @endif
                                    </div>
                                  </div>
                                  </div>

                                  <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" id="input-state" type="text" placeholder="{{ __(' State/Province') }}"  value="{{ old('state') }}"  aria-required="true"/>
                                      @if ($errors->has('state'))
                                        <span id="state-error" class="error text-danger" for="input-state">State/Province is Empty!</span>
                                      @endif
                                    </div>
                                  </div>
                                  </div>
                                  <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="{{ __(' City') }}"  value="{{ old('city') }}"  aria-required="true"/>
                                      
                                          @if ($errors->has('city'))
                                        <span id="city-error" class="error text-danger" for="input-city">City </span>
                                      @endif
                                    </div>
                                  </div>
                                  </div>

                                  <div class="row" style="margin:20px;">
                     <div class="col-md-8 offset-md-2">
                                    <div class="form-group{{ $errors->has('zipcode') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name='zipcode' id="input-zipcode" type="text" placeholder="{{ __(' Zipcode') }}"  value="{{ old('zipcode') }}"  aria-required="true"/>
                                            @if ($errors->has('zipcode'))
                                        <span id="zipcode-error" class="error text-danger" for="input-zipcode">Zipcode/Postal is Empty!</span>
                                      @endif
                                    </div>
                                  </div>
                                  </div>

              
                

                    <div class="row">
                    
                    <div class="col-md-8 text-center offset-md-2">
                    
                        <button type="submit" class="btn btn-primary" style='padding:2px 30px;'>Submit</button>

                        <div style="padding-top:20px;font-size:13px;">
                        Already have an account? <a href="{{route('userLogin')}}" ><i><u> Login Now</u> </i> </a>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->




    @include("home.layouts.footer")