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

    <title>{{ config('app.name', 'e-community police') }}</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   
    <!-- Theme CSS -->
    <link href="assets/css/agency.min.css" rel="stylesheet">


    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
                <!--p>Social.Secure.Society</p-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#portfolio">Resources</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
           <div class="intro-text ">
                <div id="cd-intro-background">
                   <div class="col-sm-12 col-md-12">
                    <div id="intro">
                     <!--div class="pro-name">*315#</span></div-->
                         <div class="centered-words show-for-small-only">
                             <div class="motto">
                                 <span class="red">connect.</span>
                                 <span class="black">share.</span> 
                                <span class="green">Empower.</span><br/><br/>
                             </div>
                        </div> 
                      </div> 
                  </div>
                  <p class="m-button text-cente">
                           <a href="/login" class="btn btn-success btn btnSwing">Login</a>
                 </p>
                 
              </div>
            </div>
    </header>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class=" section-heading">Welcome To <span class="span">ecp</span></h2>
                    <p class="text-center"><span class="span">ecp</span> is platform that connects Community Members , Faith-Based Organizations (FBOs) , Community-Based Organizations <br>(CBOs) , Non-Governmental Organizations (NGOs) , Government Policing Agencies (GPAs)<br> Civil Society Organizations (CSOs) and Private organizations to share information and empower the society at large.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                 <h2 class="section-heading">Why use <span class="span">ecp</span></h2>
                       <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                   <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Efficient</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="lead-in">Its secure , easy and fast.</p>
                                </div>
                            </div>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                      <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Reliable</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="lead-in"> Provide Resourcefull information.</p>
                                </div>
                            </div>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                     <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4> Alerts</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="lead-in">Receive instant SMS and email alerts for confirmation and status.</p>
                                </div>
                            </div>
                </div>
                 <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-download fa-stack-1x fa-inverse"></i>
                    </span>
                     <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Online Services</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="lead-in">Fill online application forms, submit then receive feedback on Any device .</p>
                                </div>
                            </div>
                </div>
                
            </div>
     
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                </div>
            </div>
               <div class="row text-center">
                <div class="col-md-3">
                     <img src="assets/img/portfolio/roundicons.png" class="img-responsive" alt="">
                    <h4 class="service-heading">Probation and Aftercare Service</h4>
                    <p class="text-muted">coming soon.</p>
                    <p><a href="{{ url('/login') }}" class="btn btn-default">Get Service </a></p>
                </div>
                <div class="col-md-3">
                     <img src="assets/img/portfolio/roundicons.png" class="img-responsive" alt="">
                    <h4 class="service-heading">Kenya Prison Service</h4>
                    <p class="text-muted">coming soon.</p>
                    <p><a href="{{ url('/login') }}" class="btn btn-default">Get Service </a></p>
                </div>
                <div class="col-md-3">
                     <img src="assets/img/portfolio/roundicons.png" class="img-responsive" alt="">
                    <h4 class="service-heading">Kenya Forest Service</h4>
                    <p class="text-muted">coming soon.</p>
                    <p><a href="{{ url('/login') }}" class="btn btn-default">Get Service </a></p>
                </div>
                 <div class="col-md-3">
                     <img src="assets/img/portfolio/roundicons.png" class="img-responsive" alt="">
                    <h4 class="service-heading">Kenya Wildlife Service</h4>
                    <p class="text-muted">coming soon.</p>
                    <p><a href="{{ url('/login') }}" class="btn btn-default">Get Service </a></p>
                </div>
                
            </div>        </div>
    </section>
     
    
    <!-- Resources Grid Section -->
    <section id="portfolio" class="bg-light-gray text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Resources</h2>
                </div>
            </div>
             <div class="row">
                <div class="col-sm-4">
                   <h4><i class="fa fa-shopping-cart"></i> Appeal</h4>
                <div class="hline"></div><br>
                <div class="well">
                      <div class="well" >
                      <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-responsive"  alt="Image">
                        <p>Name : Agweng'</p>
                        <p>Age : 15yrs</p>
                        <p>Category: Medical </p>
                        <p>Condition Category: </p>
                        <p>Condition Name : </p>
                        <p>Description : </p>
                        <p>Amount: Ksh. 5 Million</p>
                    </div>
            </div>
         <a href="index.php/login" class="btn btn-success">More Appeals ...</a> 
        
                </div>
                <div class="col-sm-4"> 
                    
         <div class="event-title">
         <h4><i class="fa fa-share-alt"></i> Lost & Found</h4>
      </div>
        <div class="hline"></div><br>
      <div class="well">
                      <div class="well" >
                        <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-responsive"  alt="Image">
                        <p>Name : Agweng'</p>
                        <p>Age : 15yrs</p>
                        <p>Status: Missing</p>
                        <p>Gender: Female</p>
                        <p>Area Name : Runda</p>
                        <p>Description : </p>
                        <p>Contact: 0704 207 449</p>
                    </div>
            </div>
        
         <a href="index.php/login" class="btn btn-success">More Lost & Found ...</a>  
 
                </div>
                
                <div class="col-sm-4">
                    
    <div class="event-title">
         <h4><i class="fa fa-calendar"></i> Events </h4>
      </div>
        <div class="hline"></div><br>
         <div class="well">
                      <div class="well" >
                        <p>Category : Technology</p>
                         <p>County : Nakuru</p>
                        <p>Tittle : 7TH  ANNUAL INTERNATIONAL CONFERENCE</p>
                        <p>Description : RESEARCH, INNOVATION AND KNOWLEDGE TRANSLATION FOR   COMMUNITY TRANSFORMATION</p>
                        <p>Date  : 21/09/2017 </p>
                        <p>Time : 08:00 AM - 5:00 PM</p>
                        <p>Venue : KABARAK UNIVERSITY MAIN CAMPUS</p>
                        <p>Cost : Free </p>
                        <p>Contact: 0704 207 449</p>
                    </div>
            </div>
       
        <br>
         <a href="index.php/login" class="btn btn-success">More Events ...</a>  
  
                </div>
            </div>
       </div>
    </section>

    <!-- Clients Aside -->
    <!--aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="assets/img/logos/africastalking.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="assets/img/logos/afrilabs.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="assets/img/logos/lakehub.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="assets/img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside-->
 <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading grey">Let's Get Intouch</h2>
                     <h3 class="section-subheading text-muted">For Feedback , Comments and Queries.</h3>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-12 widget">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                                      
                    <div class="col-md-3 widget">
                      <h1 class="widget-title grey">Contact</h1>
                        <div class="widget-body">
                            <address>
                            <i class="fa fa-phone fa-3x sr-contact"></i> : 
                             <a href="call">+254 (0) 727-750-007 </a><br><br>
                               <i class="fa fa-envelope fa-3x sr-contact"></i> : <a href="mailto:#">  contact@ecp.co.ke</a><br>
                               
                                
                            </address>
                           

                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <h1 class="widget-title grey">Quick Links</h1>
                        <div class="widget-body">
                        <address>
                            <p class="text">
                            <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Help</a></li>
                            </ul>
                            </p> 
                          </address>
                           
                        </div>
                    </div>
                  

                    <div class="col-md-6 widget">
                        <h1 class="widget-title grey">Send  Message</h1>
                        <div class="widget-body">
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.blade.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" 
                                    value=" Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" value="Email *"
                                    value=" Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="name" class="form-control" required="required" value="Subject *"
                                    onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Type your message here ...." ></textarea >
                                </div>  
                                                  
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success pull-right">Send Message
                                   </button>
                                </div>
                            </form>        
                        </div>
                        </div>
                         
                    </div>

                        </div>
            </div>
        </div>
    </section>

    <footer>
       <div class="container">
            <div class="row">
                <div class=" pull-left">
                    <span class="copyright">Copyright &copy; <?=date('Y');?> - Machini Technologies . All Rights Reserved</span>
                </div>
                <div class="col-md-8">
                    <div class="pull-right">
                        <ul class="list-inline social-icons">
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
               </div>
            </div>
        </div>
    </footer>
    <p id="back-top" title="Back to Top">
      <a href="#page-top" class="cd-top btnSwing"><i class="fa fa-angle-up fa-2x"></i></a>
    </p>
    <!-- jQuery -->
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/agency.min.js"></script>

</body>

</html>

