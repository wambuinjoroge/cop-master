@extends('layouts.app')

@section('title')
    ECP
@stop

@section('navigation')
    @include('includes.navbar')
@endsection

@section('content')
    <div>
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
                        <a href="{{url('/login')}}" class="btn btn-success btn btnSwing">Login</a>
                    </p>

                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class=" section-heading">Welcome to <span class="span">ecp</span></h2>
                        <p class="text-center"><span class="span">ecp</span> is platform that connects Community Members , Faith-Based Organizations (FBOs) , Community-Based Organizations <br>(CBOs) , Non-Governmental Organizations (NGOs) , Government Policing Agencies (GPAs) , Private Organizations<br> and  Civil Society Organizations (CSOs) to share information and empower the society at large.</p>
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
                                        <p class="lead-in">It's secure , easy and fast.</p>
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
                                        <h4> Notifications</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="lead-in">Receive instant notifications and <br>alerts for  confirmation and status.</p>
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
                                        <p class="lead-in">Fill online application forms , submit <br>
                                            then get feedback on Any device.</p>
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
                        <img src="{{asset('assets/img/portfolio/roundicons.png')}}" class="img-responsive" alt="">
                        <h4 class="service-heading">Law & Justice Service</h4>
                        <p class="text-muted">Correction & Rehabilitation Dept.</p>
                        <!--p class="text-muted">Kenya Prison Department</p>
                        <p class="text-muted">Kenya Wildlife Department</p>
                        <p class="text-muted">Kenya Forest Department</p>
                        <p class="text-muted">LAND DISPUTE</p-->
                        <p><a href="{{ url('/login') }}" class="btn btn-default">Get Service </a></p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('assets/img/portfolio/roundicons.png')}}" class="img-responsive" alt="">
                        <h4 class="service-heading">Tenant Portal Service</h4>
                        <p class="text-muted">coming soon.</p>
                        <p><a href="{{ url('/login') }}" class="btn btn-default">Get Service </a></p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('assets/img/portfolio/roundicons.png')}}" class="img-responsive" alt="">
                        <h4 class="service-heading">e-Safari Service</h4>
                        <p class="text-muted">coming soon.</p>
                        <p><a href="{{ url('/login') }}" class="btn btn-default">Get Service </a></p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('assets/img/portfolio/roundicons.png')}}" class="img-responsive" alt="">
                        <h4 class="service-heading">Farmers Portal Service</h4>
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
                        <h4><i class="fa fa-shopping-cart"></i> Medical Appeal</h4>
                        <div class="hline"></div><br>
                        <div class="well">

                            <div class="well" >
                                <img src="{{asset('assets/img/appeal.jpeg')}}" class="img-responsive"  alt="Image">
                            </div>

                        </div>
                        <a href="{{ url('/login') }}" class="btn btn-success">More Appeals ...</a>

                    </div>
                    <div class="col-sm-4">

                        <div class="event-title">
                            <h4><i class="fa fa-bullhorn"></i> Notices</h4>
                        </div>
                        <div class="hline"></div><br>
                        <div class="well">
                            <div class="well" >
                                <img src="{{asset('assets/dist/img/kabu.jpg')}}" class="img-responsive"  alt="Image">

                            </div>
                        </div>

                        <a href="{{ url('/login') }}" class="btn btn-success">More Notices ...</a>

                    </div>

                    <div class="col-sm-4">

                        <div class="event-title">
                            <h4><i class="fa fa-calendar"></i> Events </h4>
                        </div>
                        <div class="hline"></div><br>
                        <div class="well">

                            <img src="{{asset('assets/img/church.jpg')}}" class="img-responsive"  alt="Image">

                        </div>

                        <br>
                        <a href="{{ url('/login') }}" class="btn btn-success">More Events ...</a>

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
                                            <a href="call"> +254 736 436 900 </a><br><br>
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
                                                <li><a href="#">Help</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms of use</a></li>
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

    </div>

    @include('includes.footer')
@endsection