 @yield('content')
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="connect | share | empower">
    <meta name="author" content="machini technologies">
    <link rel="icon" type="image/png" sizes="200x200" href="assets/bootstrap/img/ecp.png">
     <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/contact.css') }}">
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
        Contact Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="/member"><i class="fa fa-home" ></i>Dashboard</a></li>
        <li><a href="/contacts"><i class="fa fa-book"></i>Contact List</a></li>
        <li class="active"> <i class="fa fa-bars"></i> Contact Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
       
        <h3 class="box-title"><strong> Institution : {{$contact->sector}} </strong></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
       
               <!-- /.box-header -->
            <div class="box-body">
                <div class="panel-body">
                
                 <p><strong>  <h3 align="center">{{$contact->institution_name}}</h3></strong></p>
                  <ol class="contact">
                  <div class="col-md-12">
                    
                     <div class="form-bottom">
                                        <div class="row">
                                         <div class="form-group col-md-6 col-sm-6">
                                               <button class="accordion"><strong>Address</strong></button>
                     <div class="panel">
                     <strong>Business Category : {{$contact->business_category}}  </strong>
                    <p>
                    {{$contact->building_name}}
                    <br>{{$contact->floor_num}} Floor - Room {{$contact->room_num}}<br> 
                    {{$contact->street_name}}<br> 
                    P.O Box {{$contact->postal_address}}<br> Kenya.<br> 
                    Branch : {{$contact->branch_name}} <br>
                    City/Town : {{$contact->city_name}} <br>
                     <strong>County : {{$contact->county_name}}</strong> <br>
                    Tel : {{$contact->telephone}} <br>
                    Fax : {{$contact->fax_num}} <br>
                    Email : {{$contact->email_address}} <br>
                    Website :<a href> {{$contact->website}}   </a>
                    </p>
                     </div>
                                            </div> 
                                            <div class="form-group col-md-6 col-sm-6">
                                                 <button class="accordion"><strong>Contact Numbers</strong></button>
                       <div class="panel">
                    <div class="col-md-12">
                    <p><strong>Safaricom : </strong></p>
                    
                  </div>
                    <div class="col-md-12">
                    <p><strong>Airtel : </strong></p>
                    
                  </div>
                    <div class="col-md-12">
                    <p><strong>Telkom : </strong></p>
                    
                  </div>
                    <div class="col-md-12">
                    <p><strong>Equitel : </strong></p>
                    
                  </div>
                    <div class="col-md-12">
                    <p><strong>Helpline : </strong></p>
                    
                  </div>
                  <div class="col-md-12">
                    <p><strong>Toll Free : </strong></p>
                    
                  </div>
                  <div class="col-md-12">
                    <p><strong>Emergency : </strong></p>
                    
                  </div>
                   <div class="col-md-12">
                    <p><strong>SMS : </strong></p>
                    
                  </div>
  
                   <div class="col-md-12">
                    <p><strong>USSD : </strong></p>
                    
                  </div>
                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                     <div class="form-bottom">
                        <div class="row">
                          <div class="form-group col-md-6 col-sm-6">
                              <button class="accordion"> <strong>Social Media</strong></button>
                                  <div class="panel">
                                    <div class="col-md-12">
                                        <p><strong>Whatsapp : </strong></p>
                                        
                                      </div>
                                      <div class="col-md-12">
                                        <p><strong>Facebook : </strong></p>
                                        
                                      </div>
                                      <div class="col-md-12">
                                        <p><strong>Instagram : </strong></p>
                                        
                                      </div>
                                      <div class="col-md-12">
                                        <p><strong>Twitter : </strong></p>
                                        
                                      </div>
                                      <div class="col-md-12">
                                        <p><strong>Linkedin : </strong></p>
                                        
                                      </div>
                                       <div class="col-md-12">
                                        <p><strong>Skype : </strong></p>
                                        
                                      </div>
                                       <div class="col-md-12">
                                        <p><strong>Youtube : </strong></p>
                                        
                                      </div>
                                   </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <button class="accordion"> <strong>Location</strong></button>
                                  <div class="panel">
                                    <!-- Start google map -->
                                      <section id="google-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7761910942445!2d36.89063814990439!3d-1.3095778360156634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f13b4d766be49%3A0xd80c04f48e0702d6!2sTassia+Road%2C+Nairobi!5e0!3m2!1sen!2ske!4v1495285905719" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                      </section>
                                      <!-- End google map -->
                                  </div>
                            </div> 
                                </div>
                            </div>

                      <button class="accordion"> <strong> Mobile Money</strong></button>
                        <div class="panel">
                             <div class="col-md-12">
                                  <div class="form-row">
                                      <label>
                                
                                      <label class="radio-inline"><input type="radio" value="mpesa" name="mpesa" checked="checked">M-pesa</label>
                                      <label class="radio-inline"><input type="radio" value="airtelmoney" name="airtelmoney">Airtel Money</label>
                                      <label class="radio-inline"><input type="radio" value="telkom" name="telkom">Telkom Money</label>
                                      <label class="radio-inline"><input type="radio" value="eazzypay" name="eazzypay">EazzyPay</label>
                                      </label>
                                 </div>
                            </div>

                    <div class="col-md-12">
                    <p><strong>Type of Bill : e.g General , Insurance , Life</strong></p>
                      </div>
                      <div class="col-md-12">
                        <p><strong>Account Name : </strong></p>
                      </div>
                        <div class="col-md-12">
                        <p><strong>Paybill : </strong></p> 
                      </div>
                       <div class="col-md-12">
                        <p><strong>Till Number : </strong></p> 
                      </div>
                      <div class="col-md-12">
                        <p><strong>Business Number : </strong></p>  
                      </div>
                       
                    </div>
                    
                    <button class="accordion"><strong>Bank Account</strong></button>
                    <div class="panel"><div class="col-md-12">
                      <div class="form-row">
                            <label>
                                <label class="radio-inline"><input type="radio" value="employed" name="employment" checked="checked">KCB</label>
                                <label class="radio-inline"><input type="radio" value="self_employed" name="employment">TNB</label>
                                <label class="radio-inline"><input type="radio" value="unemployed" name="employment">Equity</label>
                                <label class="radio-inline"><input type="radio" value="student" name="employment">Standard</label>
                                <label class="radio-inline"><input type="radio" value="self_employed" name="employment">Barclays</label>
                                 <label class="radio-inline"><input type="radio" value="unemployed" name="employment">PostBank</label>
                                <label class="radio-inline"><input type="radio" value="student" name="employment">National</label>
                               
                            </label>
                        </div></div>
                           <div class="col-md-12">
                    <p><strong>Account Name : </strong></p>
                    
                  </div>
                  <div class="col-md-12">
                    <p><strong>Account Number : </strong></p>
                    
                  </div>
                  <div class="col-md-12">
                    <p><strong>Branch Name: </strong></p>
                  </div>
                 </div>
                  <button class="accordion">  <strong>Advertisement</strong></button>
                  <div class="panel">
                     <div class="col-md-12">
                          <div class="medium-4 columns wow slideInRight" data-wow-duration="2s">
                                <img  src="{{ asset('assets/bootstrap/img/partners/africastalking.png') }}" width = "90%" alt="africastalking logo" />
                          </div><br>
                                      
                      </div>
                  </div>
        </div>
              </div>
                  </div>
                 
                  </div>
                  </ol>
                </div>
              </div><!-- /.box -->  
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
 <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
</body>
</html>