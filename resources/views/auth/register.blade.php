<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="connect | share | empower">
    <meta name="author" content="machini technologies">
    <link rel="icon" type="image/png" sizes="200x200" href="assets/bootstrap/img/ecp.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ecp') }}</title>

     <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    <!-- End Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.css') }}">
     <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    
    <!-- Main Style -->
    <link href="{{asset('assets/css/agency.min.css')}}" rel="stylesheet">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="margin-top: 120px"> 

<div class="container">
    <div class="row">
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
                                    <p>Residence</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" id="step-3-progress" >3</a>
                                    <p>Employment</p>
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
                    <form class="registration-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                     <div class="row setup-content" id="step-1">
                        <div class="col-md-12">
                            <h3> Identity</h3><hr>
                           
                            <div class="form-bottom">
                                <div class="row">
                                    <div class="form-group{{ $errors->has('id_no') ? ' has-error' : '' }} col-md-6 col-sm-6">
                                       <label class="control-label">Identification</label>
                                       <input  maxlength="8" minlength="7" type="text" required="required" class="form-control" placeholder="Enter National ID or Passport Number" name="id_no" value="{{ old('id_no') }}" />
                                        @if ($errors->has('id_no'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('id_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('nationality') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                        <label class="control-label">Nationality</label>
                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Nationality" name="nationality" value="{{ old('nationality') }}" />
                                        @if ($errors->has('nationality'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nationality') }}</strong>
                                            </span>
                                        @endif
                                    </div> 
                                </div>
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
                                        <input maxlength="10" minlength="10" type="text" required="required" class="form-control" placeholder="e.g 0727750007" name="mobile_no" value="{{ old('mobile_no') }}" />
                                        @if ($errors->has('mobile_number'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mobile_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6 col-md-6 col-sm-6">
                                            <input id="email" type="email" class="form-control" name="email" placeholder="e.g mancini@gmail.com" value="{{ old('email') }}" required>

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
                                                <label  >Resident Type </label>
                                                <select class="form-control" name="household_type">
                                                    <option value="" selected>--select--</option>
                                                    <option value="Estate">Estate</option>
                                                    <option value="Market Center">Market Center</option>
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
                                                <label class="control-label">Resident Name</label>
                                                <input maxlength="100" type="text" name="household_name" class="form-control" placeholder="Enter Resident Name" value="{{ old('household_name') }}" />
                                                @if ($errors->has('household_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('household_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('property_number') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">Property Number</label>
                                                <input maxlength="200" type="text" name="property_number" class="form-control" placeholder="Enter Plot or House number" value="{{ old('property_number') }}" />
                                                @if ($errors->has('property_number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('property_number') }}</strong>
                                                    </span>
                                                @endif
                                            </div> 
                                            <div class="form-group{{ $errors->has('floor_number') ? 'has-error' : '' }} col-md-3 col-sm-6">
                                                <label class="control-label">Floor Number</label>
                                                <input maxlength="200" type="text" name="floor_number" class="form-control" placeholder="Floor No." value="{{ old('floor_number') }}" />
                                                @if ($errors->has('floor_number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('floor_number') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('door_number') ? 'has-error' : '' }} col-md-3 col-sm-6">
                                                <label class="control-label">Door Number </label>
                                                <input maxlength="100" type="text" name="door_number" class="form-control" placeholder=" Door No. " value="{{ old('door_number') }}" />
                                                @if ($errors->has('door_number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('door_number') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-success nextBtn btn-block " type="button" value="Next" name="next" id="next-2">Next</button>
                                  
                                </div>
                            </div>
                           <div class="row setup-content" id="step-3">
                                <div class="col-md-12">
                                    <h3> Employment</h3><hr>
                                    <div class="form-row{{ $errors->has('employment') ? 'has-error' : '' }}">
                                        <label>
                                            <span>Status</span>
                                             <label class="radio-inline"><input type="radio" value="employed" name="employment" checked="checked" onclick="show3();">Employed</label>
                                            <label class="radio-inline"><input type="radio" value="unemployed" name="employment" onclick="show5();">Unemployed</label>
                                            <label class="radio-inline"><input type="radio" value="self_employed" name="employment" onclick="show4();">Self-Employed</label>
                                             <label class="radio-inline"><input type="radio" value="intern" name="employment" onclick="show6();">Intern</label>
                                             <label class="radio-inline"><input type="radio" value="student" name="employment" onclick="show6();">Student</label>
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
                                                <label  >Area Name</label>
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
                                          <div class="form-group{{ $errors->has('kra_pin') ? 'has-error' : '' }} col-md-6 col-sm-6">
                                                <label class="control-label">KRA Pin</label>
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter KRA PIN Number" name="kra_no" value="{{ old('kra_no') }}" />
                                                @if ($errors->has('last_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('kra_no') }}</strong>
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
                            <br>
                             <div class="wrapper" align="center">
                                    <div class="row-fluid">
                                        <div class="span12">
                                           <label><a href="/login">Have an Account ? Login</a>
                                        </div>
                                    </div>
                            </div>                 
                    </form>
                </div>
            </div>
             <hr>
             <div class="wrapper" align="center">
                <div class="row-fluid">
                    <div class="span12">
                    <div id="copyright">© <?=date('Y');?> Machini Technologies . All Rights Reserved</div>
                    </div><!--span12-->
                </div><!--row-fluid-->
            </div><!--wrapper-->  
        </div>
    </div>
</div>
   <!-- Scripts -->
    <script src="{{ asset('assets/bootstrap/js/jquery.js') }}"></script>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/bootstrap/js/smoothscroll.js') }}"></script>

    <script src="{{ asset('assets/bootstrap/js/custom.js') }}"></script>

    <script src="{{URL::asset('assets/js/multistep_form.js')}}"></script>

    <script src="{{ URL::asset('/assets/js/app.js') }}"></script>
    
    <script src="{{ URL::asset('assets/dist/js/demo.js') }}"></script>

     <!--script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script-->
</body>
</html>
         
 