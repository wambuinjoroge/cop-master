
@yield('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title or 'ecp'}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    @include('partials.topbar')
    @include ('includes.js')
   
</head>
<body>
 <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="logo" href="{{ url('/') }}">
                       <img src="assets/bootstrap/img/ecp.png"  alt="ecp" style="height: 70px; width: 80px;">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    <form  method="POST" action="{{ url('registeruser') }}" class="registration-form" >
    {{csrf_field()}}
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="container">
                        <div class="stepwizard " >
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                    <p>Identity</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" id="step-2-progress" >2</a>
                                    <p>Employment</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" id="step-3-progress" >3</a>
                                    <p>Residence</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" id="step-4-progress" >4</a>
                                    <p>Profile</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="panel-body">         
                    <div class="row setup-content" id="step-1">
                        <div class="col-md-12">
                            <h3> Identity</h3><hr>
                            <div class="form-group{{ $errors->has('id_no') ? ' has-error' : '' }}">
                                <label class="control-label">Identification</label>
                                <input  maxlength="8" minlength="7" type="text" required="required" class="form-control" placeholder="Enter National or Alien ID or Passport Number" name="id_no" value="{{ old('id_no') }}" />
                                @if ($errors->has('id_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-bottom">
                                <div class="row">
                                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-md-6 col-sm-6">
                                        <label class="control-label">First Name</label>
                                        <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" name="first_name" value="{{ old('first_name') }}" />
                                         @if ($errors->has('first_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('last_name') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                        <label class="control-label">Last Name</label>
                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" name="last_name" value="{{ old('last_name') }}" />
                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div> 
                                </div>
                            </div>
                            
                            <div class="form-bottom">
                                <div class="row">
                                    <div class="form-group{{ $errors->has('mobile_no') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                        <label class="control-label">Mobile Number</label>
                                        <input maxlength="10" minlength="10" type="text" required="required" class="form-control" placeholder="Enter Mobile Number" name="mobile_no" value="{{ old('mobile_no') }}" />
                                        @if ($errors->has('mobile_number'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mobile_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6 col-md-6 col-sm-6">
                                            <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                                    

                                 
                                    <div class="form-bottom">
                                        <div class="row">
                                           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6 col-sm-6">
                                                <label for="password" class="col-md-4 control-label">Password</label>

                                                <!--div class="col-md-6 "-->
                                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Enter Password">

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                <!--/div-->
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label class="control-label">Confirm Password </label>
                                                <input maxlength="100" type="password" name="confirm_password" required="required" class="form-control" placeholder="Confirm Password" />
                                            </div> 
                                        </div>
                                    </div>
                                  
                                    <button class="btn btn-success nextBtn btn-block " type="button" value="Next" name="next" id="next-1">Next</button>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-md-12">
                                    <h3> Employment</h3><hr>
                                    <div class="form-row{{ $errors->has('employment') ? 'has-error' : '' }}">
                                        <label>
                                            <span>Status</span>
                                            <label class="radio-inline"><input type="radio" value="unemployed" name="employment" checked="checked" onclick="show5();">Unemployed</label>
                                            <label class="radio-inline"><input type="radio" value="employed" name="employment" onclick="show3();">Employed</label>
                                            <label class="radio-inline"><input type="radio" value="self_employed" name="employment" onclick="show4();">Self-Employed</label>
                                             <label class="radio-inline"><input type="radio" value="volunteer" name="employment" onclick="show6();">Volunteer / Intern</label>
                                        </label>
                                        @if ($errors->has('employment'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('employment') }}</strong>
                                            </span>
                                        @endif
                                    </div><br>
                                    <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('county_name') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label  >County</label>
                                            <select class="form-control" name="county_name">
                                                <option value="" selected>--select--</option>
                                                <option value="BARINGO">BARINGO</option>
                                                <option value="BOMET">BOMET</option>
                                                <option value="BUNGOMA">BUNGOMA</option>
                                                <option value="BUSIA">BUSIA</option>
                                                <option value="ELGEYO MARAKWET">ELGEYO MARAKWET</option>
                                                <option value="EMBU">EMBU</option>
                                                <option value="GARISSA">GARISSA</option>
                                                <option value="HOMA BAY">HOMA BAY</option>
                                                <option value="ISIOLO">ISIOLO</option>
                                                <option value="KAJIADO">KAJIADO</option>
                                                <option value="KAKAMEGA">KAKAMEGA</option>
                                                <option value="KERICHO">KERICHO</option>
                                                <option value="KIAMBU">KIAMBU</option>
                                                <option value="KILIFI">KILIFI</option>
                                                <option value="KIRINYAGA">KIRINYAGA</option>
                                                <option value="KISII">KISII</option>
                                                <option value="KISUMU">KISUMU</option>
                                                <option value="KITUI">KITUI</option>
                                                <option value="KWALE">KWALE</option>
                                                <option value="LAMU">LAMU</option>
                                                <option value="MACHAKOS">MACHAKOS</option>
                                                <option value="MAKUENI">MAKUENI</option>
                                                <option value="MANDERA">MANDERA</option>
                                                <option value="MERU">MERU</option>
                                                <option value="MIGORI">MIGORI</option>
                                                <option value="MARSABIT">MARSABIT</option>
                                                <option value="MOMBASA">MOMBASA</option>
                                                <option value="MURANG'A">MURANG'A</option>
                                                <option value="NAIROBI">NAIROBI</option>
                                                <option value="NAKURU">NAKURU</option>
                                                <option value="NANDI">NANDI</option>
                                                <option value="NAROK">NAROK</option>
                                                <option value="NYAMIRA">NYAMIRA</option>
                                                <option value="NYANDARUA">NYANDARUA</option>
                                                <option value="NYERI">NYERI</option>
                                                <option value="SAMBURU">SAMBURU</option>
                                                <option value="SIAYA">SIAYA</option>
                                                <option value="TAITA TAVETA">TAITA TAVETA</option>
                                                <option value="TANA RIVER">TANA RIVER</option>
                                                <option value="THARAKA NITHI">THARAKA NITHI</option>
                                                <option value="TRANS NZOIA">TRANS NZOIA</option>
                                                <option value="TURKANA">TURKANA</option>
                                                <option value="UASIN GISHU">UASIN GISHU</option>
                                                <option value="VIHIGA">VIHIGA</option>
                                                <option value="WAJIR">WAJIR</option>
                                                <option value="WEST POKOT">WEST POKOT</option>
                                            </select>
                                            @if ($errors->has('county_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('county_name') }}</strong>
                                                </span>
                                            @endif
                                            </div>    
                                            <div class="form-group{{ $errors->has('city_name') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label  >Town</label>
                                                <input type="text" name="city_name" class="form-control" placeholder="Enter City or Town Name" value="{{ old('city_name') }}">
                                                @if ($errors->has('city_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('city_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>   
                                        </div>
                                    </div>
                                    <div id="div2">
                                        <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('sector') ? 'has-error' : '' }} col-md-6 col-sm-6 ">
                                                <label >Sector</label>
                                                <select class="form-control" name="sector">
                                                    <option value="select" selected>--select--</option>
                                                    <option value="Public">Public</option>
                                                    <option value ="Private">Private</option>
                                                    <option value ="International">International</option>
                                                </select>
                                                @if ($errors->has('sector'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('sector') }}</strong>
                                                    </span>
                                                @endif  
                                            </div>

                                            <div class="form-group{{ $errors->has('business_category') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label  >Business Category</label>
                                                <select class="form-control" name="business_category">
                                                    <option value="" selected>--select--</option>
                                                    <option value="Advertising" >Advertising / Marketing / PR / Media / Publishing</option>
                                                    <option value="Accounting" >Accounting / Auditing</option>
                                                    <option value="Agriculture">Agriculture / Chemicals</option>
                                                    <option value="aviation">Airline &amp; Travel</option>
                                                     <option value="Security">Armed Forces / Security Forces</option>
                                                    <option value="Banking & Finance">Banking / Money  &amp; Finance</option>
                                                     <option value="Beauty & Product">Beauty & Beauty Products </option>
                                                    <option value="Business Support">Business Support</option>
                                                    <option value="Building & Construction">Building / Architecture / Real Estate &amp; Construction</option>
                                                    <option value="Computer & Internet">Computer Hardware / Software / Networking &amp; Internet</option>
                                                    <option value="Cars & Vehicles">Cars &amp; Vehicles</option>
                                                    <option value="Electrical & Electronic">Electrical / Electronic &amp; Engineering </option>
                                                    <option value="Education">Education / Learning Institutions</option>
                                                     <option value="Energy">Energy</option>
                                                    <option value="Entertainment">Entertainment / Film &amp;  Music </option>
                                                    <option value="Fashion & Lifestyle">Fashion &amp; Lifestyle</option>
                                                    <option value="Insurance">Insurance &amp; Legal</option>
                                                     <option value="Government & Parastatals">Government &amp; Institutions Parastatals </option>
                                                    <option value="Health">Health Services / Medical / Pharmaciticals</option>
                                                    <option value="Hotel & Restaurant">Hospitality /  Hotel &amp; Restaurant</option>
                                                   
                                                    <option value="Manufacturing & Industries">Manufacturing &amp; Industries</option>
                                                    <option value="Shipping / clearing &amp; Forwarding">Shipping / Clearing &amp; Forwarding</option>
                                                    <option value="Others">Others</option>
                                                    <option value="Petroleum">Petroleum</option>
                                                    <option value="Professional Services">Professional Services</option>
                                                    
                                                    <option value="Society">NGOs / Religious / Society &amp; Charity Organizations</option>
                                                     <option value="Shopping">Shopping</option>
                                                    <option value="Sports & Betting">Sports &amp; Betting</option>
                                                     <option value="UN & Diplomatic Missions">UN & Diplomatic Missions</option>
                                                </select>
                                                @if ($errors->has('business_category'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('business_category') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('institution_name') ? 'has-error' : '' }}">
                                        <label class="control-label">Institution Name</label>
                                        <input maxlength="200" type="text" name="institution_name" class="form-control" placeholder="Enter institution or Office or Office Block or Business Name " value="{{ old('institution_name') }}" />
                                        @if ($errors->has('institution_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('institution_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('building_name') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Building Name</label>
                                                <input maxlength="200" type="text" name="building_name" class="form-control" placeholder="Enter Building or Office or Business Center Name" value="{{ old('building_name') }}" />
                                                 @if ($errors->has('building_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('building_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           <div class="form-group{{ $errors->has('floor_num') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Floor Number</label>
                                                <input  maxlength="100" type="text" name="floor_num"  class="form-control" placeholder="Enter floor number" value="{{ old('floor_num') }}" />
                                                 @if ($errors->has('floor_num'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('floor_num') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('room_num') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Room Number</label>
                                                <input maxlength="100" type="text" name="room_num"  class="form-control" placeholder="Enter Room or office number" value="{{ old('room_num') }}" />
                                                 @if ($errors->has('room_num'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('room_num') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('branch_name') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Branch Name</label>
                                                <input maxlength="100" type="text" name="branch_name"  class="form-control" placeholder="Enter Branch Name" value="{{ old('branch_name') }}" />
                                                 @if ($errors->has('branch_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('branch_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('street_name') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Street Name</label>
                                                <input maxlength="200" type="text" name="street_name" class="form-control" placeholder="Enter street or road or avenue or lane" value="{{ old('street_name') }}" />
                                                 @if ($errors->has('street_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('street_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('postal_address') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Postal Address</label>
                                                <textarea name="postal_address" class="form-control" placeholder="Enter postal address e.g  1000-0100 Nairobi " value="{{ old('postal_address') }}" ></textarea>
                                                 @if ($errors->has('postal_address'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('postal_address') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('telephone') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Telephone</label>
                                                <input  maxlength="100" type="text" name="telephone" class="form-control" placeholder="Enter Primary Phone Number" value="{{ old('telephone') }}"  />
                                                 @if ($errors->has('telephone'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('telephone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('email_address') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Email</label>
                                                <input maxlength="100" type="email" name="email_address" class="form-control" placeholder="Enter Email Address" value="{{ old('email_address') }}" />
                                                 @if ($errors->has('email_address'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email_address') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('fax_num') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Fax  Number</label>
                                                <input  maxlength="100" type="text" name="fax_num" class="form-control" placeholder="Enter Fax Numbers" value="{{ old('fax_num') }}" />
                                                 @if ($errors->has('fax_num'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('fax_num') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('website') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Website </label>
                                                <input maxlength="100" type="text" name="website" class="form-control" placeholder="Enter Website url" value="{{ old('website') }}" />
                                                 @if ($errors->has('website'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('website') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                        </div>
                                    </div>
                                    </div>
                                  <button class="btn btn-success nextBtn btn-block " type="button" value="Next" name="next" id="next-2">Next</button>   
                                    
                                </div>

                            </div>
                            <div class="row setup-content" id="step-3">
                                <div class="col-md-12">
                                    <h3> Residence</h3><hr>
                                 
                                       <div class="form-bottom">
                                        <div class="row">
                                        <div class="form-group{{ $errors->has('county_residence') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                        <label  >County</label>
                                        <select class="form-control" name="county_residence">
                                            <option value="" selected>--select--</option>
                                            <option value="BARINGO">BARINGO</option>
                                            <option value="BOMET">BOMET</option>
                                            <option value="BUNGOMA">BUNGOMA</option>
                                            <option value="BUSIA">BUSIA</option>
                                            <option value="ELGEYO MARAKWET">ELGEYO MARAKWET</option>
                                            <option value="EMBU">EMBU</option>
                                            <option value="GARISSA">GARISSA</option>
                                            <option value="HOMA BAY">HOMA BAY</option>
                                            <option value="ISIOLO">ISIOLO</option>
                                            <option value="KAJIADO">KAJIADO</option>
                                            <option value="KAKAMEGA">KAKAMEGA</option>
                                            <option value="KERICHO">KERICHO</option>
                                            <option value="KIAMBU">KIAMBU</option>
                                            <option value="KILIFI">KILIFI</option>
                                            <option value="KIRINYAGA">KIRINYAGA</option>
                                            <option value="KISII">KISII</option>
                                            <option value="KISUMU">KISUMU</option>
                                            <option value="KITUI">KITUI</option>
                                            <option value="KWALE">KWALE</option>
                                            <option value="LAMU">LAMU</option>
                                            <option value="MACHAKOS">MACHAKOS</option>
                                            <option value="MAKUENI">MAKUENI</option>
                                            <option value="MANDERA">MANDERA</option>
                                            <option value="MERU">MERU</option>
                                            <option value="MIGORI">MIGORI</option>
                                            <option value="MARSABIT">MARSABIT</option>
                                            <option value="MOMBASA">MOMBASA</option>
                                            <option value="MURANG'A">MURANG'A</option>
                                            <option value="NAIROBI">NAIROBI</option>
                                            <option value="NAKURU">NAKURU</option>
                                            <option value="NANDI">NANDI</option>
                                            <option value="NAROK">NAROK</option>
                                            <option value="NYAMIRA">NYAMIRA</option>
                                            <option value="NYANDARUA">NYANDARUA</option>
                                            <option value="NYERI">NYERI</option>
                                            <option value="SAMBURU">SAMBURU</option>
                                            <option value="SIAYA">SIAYA</option>
                                            <option value="TAITA TAVETA">TAITA TAVETA</option>
                                            <option value="TANA RIVER">TANA RIVER</option>
                                            <option value="THARAKA NITHI">THARAKA NITHI</option>
                                            <option value="TRANS NZOIA">TRANS NZOIA</option>
                                            <option value="TURKANA">TURKANA</option>
                                            <option value="UASIN GISHU">UASIN GISHU</option>
                                            <option value="VIHIGA">VIHIGA</option>
                                            <option value="WAJIR">WAJIR</option>
                                            <option value="WEST POKOT">WEST POKOT</option>
                                        </select>
                                        @if ($errors->has('county_residence'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('county_residence') }}</strong>
                                            </span>
                                        @endif
                                    </div>  
                                    <div class="form-group{{ $errors->has('sub_county') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label  >Sub-County</label>
                                                <input type="text" name="sub_county" class="form-control" value="{{ old('sub_county') }}">
                                                @if ($errors->has('sub_county'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('sub_county') }}</strong>
                                                    </span>
                                                @endif
                                            </div>    
                                          
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <div class="row">
                                             
                                            <div class="form-group{{ $errors->has('constituency') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label  >Constituency</label>
                                                <input type="text" name="constituency" class="form-control" value="{{ old('constituency') }}">
                                                @if ($errors->has('constituency'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('constituency') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                             <div class="form-group{{ $errors->has('ward') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Ward</label>
                                                <input maxlength="200" type="text" name="ward" class="form-control" value="{{ old('ward') }}" />
                                                @if ($errors->has('ward'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('ward') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                                 
                                        </div>
                                    </div>
                                     <div class="form-bottom">
                                        <div class="row">
                                         <div class="form-group{{ $errors->has('city_name') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label  >Town</label>
                                                <input type="text" name="city_name" class="form-control" placeholder="Enter City or Town Name" value="{{ old('city_name') }}">
                                                @if ($errors->has('city_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('city_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                            <div class="form-group{{ $errors->has('street') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label"> Road Name</label>
                                                <input type="text" name="street" class="form-control" maxlength="100" placeholder="Enter Street or Road or Avenue or Lane" value="{{ old('street') }}">
                                                @if ($errors->has('street'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('street') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('household_type') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label  >House or Area Type </label>
                                                <select class="form-control" name="household_type">
                                                    <option value="" selected>--select--</option>
                                                    <option value="Estate">Estate</option>
                                                    <option value="Market Center">Market Center</option>
                                                    <option value="Slum">Slum</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Homestead">Homestead</option>
                                                    <option value="Bulla">Bulla</option>
                                                    <option value="Manyatta">Manyatta</option>
                                                    <option value="Court">Court</option>
                                                    <option value="Village">Village</option>
                                                    <option value="Gated Community">Gated Community</option>
                                                </select>
                                                @if ($errors->has('household_type'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('household_type') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('household_name') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">House or Area Name</label>
                                                <input maxlength="100" type="text" name="household_name" class="form-control" placeholder="Enter House or Area Name" value="{{ old('household_name') }}" />
                                                @if ($errors->has('household_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('household_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success nextBtn btn-block " type="button" value="Next" name="next" id="next-3">Verify</button>
                                  
                                </div>
                            </div>         
                            <div class="row setup-content" id="step-4">
                                <div class="col-md-12">
                                    <h3>Profile</h3><hr>
                                 
                                      <div class="col-xs-8">
                                        <div class="checkbox icheck">
                                            <label>
                                                <input type="checkbox" name="terms" checked> I agree to the <a href="#">Terms of Use</a>
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-block" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                           
                    </div>
                          <div class="wrapper" align="center">
            <div class="row-fluid">
                <div class="span12">
                   <label><a href="/login">Have an Account ? Login</a>
                </div>
            </div>
        </div>           
          <hr>
                     <div class="wrapper" align="center">
            <div class="row-fluid">
                <div class="span12">
                    <div id="copyright">© <?=date('Y');?> - Machini Technologies . All Rights Reserved</div>
                </div><!--span12-->
            </div><!--row-fluid-->
        </div><!--wrapper-->
                </div>

            </form>
            <script src="/assets/js/multistep_form.js"></script>
        </body>
        </html>                
