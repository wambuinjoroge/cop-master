
@yield('content')
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="connect | share | empower">
    <meta name="author" content="machini technologies">
    <link rel="icon" type="image/png" sizes="200x200" href="assets/bootstrap/img/ecp.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'e-community police') }}</title>

     @include('partials.topbar')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- Main Header -->
    @include('member.header')
<!-- Sidebar -->
    @include('member.sidebar')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Probation / Community Service Order
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Probation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
   <center> <h3 class="box-title">Case Information</h3> </center>     

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

                <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label  >County</label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
    <option>BARINGO</option>
    <option>BOMET</option>
    <option>BUNGOMA</option>
    <option>BUSIA</option>
    <option>ELGEYO MARAKWET</option>
    <option>EMBU</option>
    <option>GARISSA</option>
    <option>HOMA BAY</option>
    <option>ISIOLO</option>
    <option>KAJIADO</option>
    <option>KAKAMEGA</option>
    <option>KERICHO</option>
    <option>KIAMBU</option>
    <option>KILIFI</option>
    <option>KIRINYAGA</option>
    <option>KISII</option>
    <option>KISUMU</option>
    <option>KITUI</option>
    <option>KWALE</option>
    <option>LAMU</option>
    <option>MACHAKOS</option>
    <option>MAKUENI</option>
    <option>MANDERA</option>
    <option>MERU</option>
    <option>MIGORI</option>
    <option>MARSABIT</option>
    <option>MOMBASA</option>
    <option>MURANG'A</option>
    <option>NAIROBI</option>
    <option>NAKURU</option>
    <option>NANDI</option>
    <option>NAROK</option>
    <option>NYAMIRA</option>
    <option>NYANDARUA</option>
    <option>NYERI</option>
    <option>SAMBURU</option>
    <option>SIAYA</option>
    <option>TAITA TAVETA</option>
    <option>TANA RIVER</option>
    <option>THARAKA NITHI</option>
    <option>TRANS NZOIA</option>
    <option>TURKANA</option>
    <option>UASIN GISHU</option>
    <option>VIHIGA</option>
    <option>WAJIR</option>
    <option>WEST POKOT</option>
    </select>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Probation Office Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Kisii Probation Office</option>
                  <option>Nyando Probation Office</option>
                  <option>Kisumu Probation Office</option>
                  <option>Nairobi Probation Office</option>
                </select>
          </div> 
                            </div>
         <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Charges</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Charges"  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Penal Code Setion</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Penal Code Setion" />
          </div> 
                            </div>
                             <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Court File No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Court File No."  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Court Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Kisii Law Court</option>
                  <option>Nyando Law Court</option>
                  <option>Kisumu Law Court</option>
                  <option>Nairobi Law Court</option>
                </select>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Police Station File No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Police Station File No."  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Police Station Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option >Kisii Police Station</option>
                  <option>Nyando Police Station</option>
                  <option>Kisumu Police Station</option>
                  <option>Nairobi Police Station</option>
                </select>
          </div> 
                            </div>
                            <div class="form-row">
                <label>
                    <span>Previous Conviction (If Any)</span>
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    
                </label>
            </div>
                <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Previous Reference Number</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Court File No."  /> 
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Probation Office Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Kisii Probation Office</option>
                  <option>Nyando Probation Office</option>
                  <option>Kisumu Probation Office</option>
                  <option>Nairobi Probation Office</option>
                </select>
          </div> 
                            </div>
                   <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Court File No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Court File No."  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Court Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Kisii Law Court</option>
                  <option>Nyando Law Court</option>
                  <option>Kisumu Law Court</option>
                  <option>Nairobi Law Court</option>
                </select>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Police Station File No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Police Station File No."  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Police Station Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option >Kisii Police Station</option>
                  <option>Nyando Police Station</option>
                  <option>Kisumu Police Station</option>
                  <option>Nairobi Police Station</option>
                </select>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Mention Date:</label>
            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Referal Date:</label>
            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div> 
                            </div>
                   
              <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
             <label class="control-label">Type of Plea</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option >Remanded</option>
                  <option>Bonded</option>
                  <option>Guilty</option>
                </select>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Offence Nature </label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option >Petty Offence</option>
                  <option>Serious Offence</option>
                </select>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Particular of Offence </label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Circumstance of Offence</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
                            </div>
              
                <div class="form-group">
                  <label>Source of Information</label>
                  <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
                </div>
             
               <div class="box-footer">
               <button class="btn btn-success nextBtn btn-block " type="button" value="Next" name="next" id="next-1">Next</button>
                
              </div>
          
          <!-- /.row -->
        </div>
       
      </div>
      <!-- /.box -->
 <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
    <center><h3 class="box-title">Offender Bio-Data</h3></center>      

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <div class="form-group ">
            <label class="control-label">Reference Number</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Court File No."  />
          </div>
        <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Identification No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter National ID or Passport Number"  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Nationality</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua And Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia And Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D&#039;Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island &amp; Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic Of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle Of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE" >Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KR">Korea</option>
                                    <option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People&#039;s Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States Of</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthelemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And Sandwich Isl.</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                </select>
          </div> 
                            </div>
         <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Full Name</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Full Name"  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Education Level</label>
            <select class="form-control">
                                    <option value="select" selected>--select--</option>
                                    <option>KCPE</option>
                                    <option>KCSE</option>
                                    <option>College/University</option>
                                </select>
          </div> 
                            </div>
                                             <div class="row">
           <div class="form-group col-md-6 col-sm-6">
           <label >Gender</label>
                                <select class="form-control">
                                    <option value="select" selected>--select--</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Both</option>
                                </select>
                            </div>
          
            <div class="form-group col-md-6 col-sm-6">
            <label >Marital Status</label>
           <select class="form-control">
        <option value="select" selected>--select--</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="divorced">Divorced</option>
        <option value="widow(er)">Widow(er)</option>
        <option value="separated">Separated</option>
         </select>  
            </div>
            </div>
                             <div class="row">
             <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">D.O.B:</label>
            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div>
          <div class="form-group col-md-6 col-sm-6">
          <label class="control-label">Mobile Number</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Mobile Number"  />
            
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Religion</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Christianity</option>
                  <option>Islam</option>
                  <option>Budhism</option>
                  <option>Hinduism</option>
                  <option>Atheist</option>
                                  </select>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Occupation</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option>Doctor</option>
    <option>Accountant</option>
    <option>Farmer</option>
    <option>Engineer</option>
    <option>Teacher/Lecturer</option>
    <option>Nutrionist</option>
    <option>Business Person</option>
    <option>Evangelist</option>
    <option>Lawyer</option>
                </select>
          </div> 
                            </div>
                            <div class="form-row">
                <label>
                    <span>Any Special Need </span>
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    
                </label>
            </div><br>
            
            <div class="row">
             <div class="form-group col-md-6 col-sm-6">
             <label class="control-label" >Special Need Category</label>
           <select class="form-control " style="width: 100%;" >
           <option>--Select --</option>
        <option value="#">Disability</option>
        <option value="#">Addiction</option>
        <option value="#">Health</option>
        <option value="#">Drugs</option>
        <option value="#">Substance Abuse</option>
         </select>  
          </div>
          <div class="form-group col-md-6 col-sm-6">
         <label>Specify Special Need</label>
                  <textarea class="form-control" rows="3" placeholder="Specify Example Addiction e.g Alcohol ,Drug e.g Heroine ,Substance Abuse e.g Bhang , Persons With Disability e.g Physical , Health e.g Cancer""></textarea>
            
          </div> 
                            </div>
                <center> <h4 class="box-title">Investigation Details</h4> </center>

                 <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Conduct</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Enviroment</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Economic Means</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Community Ties</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Family Attitude</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Victim Attitude</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Community Attitude</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Leisure</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
                            </div>
               <div class="box-footer">
                  <div class="col-md-4 col-md-offset-2">
                      <button class="btn btn-success nextBtn btn-block" type="button" id="back-1">Back</button>
                  </div>
                  <div class="col-md-4">
                      <button class="btn btn-success nextBtn btn-block" type="button" id="next-2">Next</button>
                  </div>
                
              </div>

          
          <!-- /.row -->
        </div>
       
      </div>
      <!-- /.box -->
      
  <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
   <center> <h3 class="box-title">Background Information</h3> </center>     

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <div class="row">
       <div class="form-group col-md-6 col-sm-6">
   <label >Nationality</label>
                                <select class="form-control">
                                    <option value="select" selected>--select--</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua And Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia And Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D&#039;Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island &amp; Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic Of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle Of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE" >Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KR">Korea</option>
                                    <option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People&#039;s Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States Of</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthelemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And Sandwich Isl.</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                                </select>
    </div>    
     <div class="form-group col-md-6 col-sm-6">
     <label  >County</label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
    <option>BARINGO</option>
    <option>BOMET</option>
    <option>BUNGOMA</option>
    <option>BUSIA</option>
    <option>ELGEYO MARAKWET</option>
    <option>EMBU</option>
    <option>GARISSA</option>
    <option>HOMA BAY</option>
    <option>ISIOLO</option>
    <option>KAJIADO</option>
    <option>KAKAMEGA</option>
    <option>KERICHO</option>
    <option>KIAMBU</option>
    <option>KILIFI</option>
    <option>KIRINYAGA</option>
    <option>KISII</option>
    <option>KISUMU</option>
    <option>KITUI</option>
    <option>KWALE</option>
    <option>LAMU</option>
    <option>MACHAKOS</option>
    <option>MAKUENI</option>
    <option>MANDERA</option>
    <option>MERU</option>
    <option>MIGORI</option>
    <option>MARSABIT</option>
    <option>MOMBASA</option>
    <option>MURANG'A</option>
    <option>NAIROBI</option>
    <option>NAKURU</option>
    <option>NANDI</option>
    <option>NAROK</option>
    <option>NYAMIRA</option>
    <option>NYANDARUA</option>
    <option>NYERI</option>
    <option>SAMBURU</option>
    <option>SIAYA</option>
    <option>TAITA TAVETA</option>
    <option>TANA RIVER</option>
    <option>THARAKA NITHI</option>
    <option>TRANS NZOIA</option>
    <option>TURKANA</option>
    <option>UASIN GISHU</option>
    <option>VIHIGA</option>
    <option>WAJIR</option>
    <option>WEST POKOT</option>
    </select>
    </div>   
    </div>
        
                            
    <div class="form-bottom">
                            <div class="row">
       <div class="form-group col-md-6 col-sm-6">
    <label  >Sub-County</label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
    <option>NAKURU</option>
    <option>NAIVASHA</option>
    <option>GILGIL</option>
    <option>MOLO</option>
    </select>
    </div>    
     <div class="form-group col-md-6 col-sm-6">
    <label  >Constituency</label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
    <option>NAKURU</option>
    <option>NAIVASHA</option>
    <option>GILGIL</option>
    <option>MOLO</option>
    </select>
    </div>   
    </div>
    <div class="row">
       <div class="form-group col-md-6 col-sm-6">
    <label  >Ward</label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
    <option>NAKURU</option>
    <option>NAIVASHA</option>
    <option>GILGIL</option>
    <option>MOLO</option>
    </select>
    </div>    
     <div class="form-group col-md-6 col-sm-6">
    <label  >Location</label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
    <option>NAKURU</option>
    <option>NAIVASHA</option>
    <option>GILGIL</option>
    <option>MOLO</option>
    </select>
    </div>   
    </div>
    <div class="row">
       <div class="form-group col-md-6 col-sm-6">
    <label  >Sub-Location</label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
    <option>NAKURU</option>
    <option>NAIVASHA</option>
    <option>GILGIL</option>
    <option>MOLO</option>
    </select>
    </div>    
     <div class="form-group col-md-6 col-sm-6">
     <label class="control-label">Cluster Code</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Cluster Code"  />
    </div>   
    </div>
    </div>
      
         <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label  >Household Type </label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
    <option value="single">Estate</option>
        <option value="">Market Center</option>
        <option value="">Apartment</option>
        <option value="">Homestead</option>
        <option value="">Gated Community</option>
        <option value="">Bulla</option>
        <option value="">Manyatta</option>
        <option value="">House</option>
        <option value="">Court</option>
    </select>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Household Name</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Household Name" />
          </div> 
                            </div>
                             <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Property Number</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Property Number"  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
             <label class="control-label">Family Type</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Nuclear</option>
                  <option>Extended</option>
                </select>
          </div> 
                            </div>
                           <center> <h4 class="box-title">Contact Person</h4> </center>     
  
                     <div class="form-group">
          <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Idenfication</th>
        <th class="text-center">First Name</th>
        <th class="text-center">Last Name</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Occupation</th>
        <th class="text-center">Mobile Number</th>
        <th class="text-center">Special Need</th>
        <th class="text-center">Relationship</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">BNF456</td>
        <td class="text-center">Lufthansa </td>
        <td class="text-center">Machini</td>
        <td class="text-center">Male</td>
        <td class="text-center">Student</td>
        <td class="text-center">0736436900</td>
        <td class="text-center">Genius </td>
        <td class="text-center">Child</td>
      </tr>
    </tbody>
    </table>
       <a id="add_row" class="btn btn-success pull-left">Add </a><a id='delete_row' class="btn btn-danger pull-right">Delete </a>
    
     </div>
    </div> 
    <center> <h4 class="box-title">Authorities Details </h4> </center> 
    <div class="form-group">
          <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Level</th>
        <th class="text-center">Administrator Type</th>
        <th class="text-center">Area Name</th>
        <th class="text-center">First Name</th>
        <th class="text-center">Last Name</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Mobile Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">Location</td>
        <td class="text-center">Chief</td>
        <td class="text-center">Kochogo</td>
        <td class="text-center">Alfred</td>
        <td class="text-center">Machini</td>
        <td class="text-center">Male</td>
        <td class="text-center">0736436900</td>
      </tr>
    </tbody>
    </table>
       <a id="add_row" class="btn btn-success pull-left">Add </a><a id='delete_row' class="btn btn-danger pull-right">Delete </a>
    
     </div>
    </div>        
                           
           
                   
                           
        
             
               <div class="box-footer">
                <div class="col-md-offset-2 col-md-4">
                                            <button class="btn btn-success nextBtn btn-block" id="back-2">Back</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-success nextBtn btn-block" id="next-3">Next</button>
                                        </div>
                
              </div>
          
          <!-- /.row -->
        </div>
       
      </div>
      <!-- /.box -->
<!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
    <center><h3 class="box-title">Victim Information</h3></center>      

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
                                           
              <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Identification No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter National ID or Passport Number"  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Nationality</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua And Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia And Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D&#039;Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island &amp; Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic Of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle Of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE" >Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KR">Korea</option>
                                    <option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People&#039;s Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States Of</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthelemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And Sandwich Isl.</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                </select>
          </div> 
                            </div>
         <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Full Name</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Full Name"  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Type of Relationship</label>
            <select class="form-control">
                                    <option value="select" selected>--select--</option>
                                    <option>Relative</option>
                                    <option>Friend</option>
                                    <option>Neighbour</option>
                                    <option>None</option>
                                </select>
          </div> 
                            </div>
                                             <div class="row">
           <div class="form-group col-md-6 col-sm-6">
           <label >Gender</label>
                                <select class="form-control">
                                    <option value="select" selected>--select--</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Both</option>
                                </select>
                            </div>
          
            <div class="form-group col-md-6 col-sm-6">
            <label >Marital Status</label>
           <select class="form-control">
        <option value="select" selected>--select--</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="divorced">Divorced</option>
        <option value="widow(er)">Widow(er)</option>
        <option value="separated">Separated</option>
         </select>  
            </div>
            </div>
                             <div class="row">
             <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">D.O.B:</label>
            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div>
          <div class="form-group col-md-6 col-sm-6">
          <label class="control-label">Mobile Number</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Mobile Number"  />
            
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Religion</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Christianity</option>
                  <option>Islam</option>
                  <option>Budhism</option>
                  <option>Hinduism</option>
                  <option>Atheist</option>
                                  </select>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Occupation</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option>Doctor</option>
    <option>Accountant</option>
    <option>Farmer</option>
    <option>Engineer</option>
    <option>Teacher/Lecturer</option>
    <option>Nutrionist</option>
    <option>Business Person</option>
    <option>Evangelist</option>
    <option>Lawyer</option>
                </select>
          </div> 
                            </div>
                            <div class="form-row">
                <label>
                    <span>Any Special Need </span>
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    
                </label>
            </div><br>
            
            <div class="row">
             <div class="form-group col-md-6 col-sm-6">
             <label class="control-label" >Special Need Category</label>
           <select class="form-control " style="width: 100%;" >
           <option>--Select --</option>
        <option value="#">Disability</option>
        <option value="#">Addiction</option>
        <option value="#">Health</option>
        <option value="#">Drugs</option>
        <option value="#">Substance Abuse</option>
         </select>  
          </div>
          <div class="form-group col-md-6 col-sm-6">
         <label>Specify Special Need</label>
                  <textarea class="form-control" rows="3" placeholder="Specify Example Addiction e.g Alcohol ,Drug e.g Heroine ,Substance Abuse e.g Bhang , Persons With Disability e.g Physical , Health e.g Cancer""></textarea>
            
          </div> 
                            </div>
                            <div class="row">
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Community Attitude</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
          <div class="form-group col-md-6 col-sm-6">
            <label  >Victim Attitude</label>
            <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div>
                            </div>
                            

               <div class="box-footer">
               <div class="col-md-offset-2 col-md-4">
                                            <button class="btn btn-success nextBtn btn-block" id="back-2">Back</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-success nextBtn btn-block" id="next-3">Next</button>
                                        </div>
                
              </div>

          
          <!-- /.row -->
        </div>
       
      </div>
      <!-- /.box -->
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
    <center><h3 class="box-title">Conclusion</h3></center>      

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
                                           
          <div class="form-group">
                  <label>Summary</label>
                  <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
                </div>     
                            <div class="row">
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Intervention</label>
           <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
          <div class="form-group col-md-6 col-sm-6">
            <label  >Recommendation</label>
    <select class="form-control">
        <option value="select" selected>--select--</option>
        <option value="">Probation</option>
        <option value="">Community Service</option>
        <option value="">Discharge</option>
        <option value="">Imprisonment</option>
        <option value="">Fine</option>
        
    </select>
          </div>
                            </div>
                            <div class="row">
                              
             <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Date:</label>
            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div>
          
          <div class="form-group col-md-6 col-sm-6">
          <label class="control-label">Author</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Author"  />
            
          </div> 
                            </div>

               <div class="box-footer">
               <div class=" col-md-offset-2 col-md-4">
                                            <button class="btn btn-success nextBtn btn-block" id="back-3">Back</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-success btn-block" type="submit">Submit</button>
                                        </div>
                
              </div>

          
          <!-- /.row -->
        </div>
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.footer')
   
    
</div><!-- ./wrapper -->
@include('includes.js')
@yield('js')

</body>
</html>