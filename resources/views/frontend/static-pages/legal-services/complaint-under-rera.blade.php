@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Family Law')

@push('css')
	@include('frontend.css.index')
@endpush

<!-- Page Content -->
@section('content')
<div id="home" class="full-section parallax-home">
    <div class="slider-caption">
      <h2 style="font-size:25px;">File Complaint under RERA Online For <br><span>Just INR 5999/-</span></h2>
      <a class="btn btn-transparent" href="complaint-under-rera.html"> Know More </a></div>
  </div>
  <div class="main-content-area">
   <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Join Now to File Complaint under RERA Online</h1>
      <p>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</p>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">File Complaint under RERA Online</li>
              </ol>
            </div>
            <!-- end bread -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    
    <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="login">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
    <h2 class="text-center">File Complaint under RERA Online</h2>
    <p class="text-center">Submit your details to begin now</p>
            <div class="box-panel">
              <!-- form login -->
              <form name="LoginForm" action="#" onsubmit="return login()" method="post"> 
               <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name"placeholder="Your Name" class="form-control">
                </div>
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" name="mobile" placeholder="Your Mobile" class="form-control">
                </div>
                <button name="submit" class="btn btn-primary btn-lg btn-block">Connect Now</button>
                <br>
                <p>No Spam. No Sharing. 100% Confidentiality</p>

              </form>
              <!-- form login -->

            </div>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>
    
  
  <section class="custom-padding" id="how-it-work" style="background:white;">
      <div class="container">
     
        <div class="main-heading text-center" style="color:black;">
          <h2>Complaint Under RERA</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
          <p style="color:black;">The Real Estate (Regulation and Development) Act, 2016 has been enacted by the Government for the protection of homebuyers against the unfair trade practices of housing development and real estate project developers. Developers have to compulsorily obtain all prerequisite approvals from government bodies before the project can be presented to the public. The developers have to further display all relevant information on the RERA website of the respective states.</p>
         
          <p style="color:black;">If any developer, promoter or builder of the property doesn’t have the approvals or if s/he has defaulted under the Act in any manner, you may file a complaint before the RERA authorities through the most experienced RERA advocates in your locality.</p>
          </div>
         
        </div>

        <div class="row">
           <div class="main-heading text-center" >
            <h2>What You will Get In The Package</h2>
          </div>
          <hr style="color:#612f31;">
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Included</h4>           
              <hr style="border:2px solid #612f31;">
      <p>- 20 minutes introduction call with lawyer to get acquainted and to discuss the work that is to be done together.</p>
      <p>- Documents Checklist</p>
      <p>- Verification of necessary documents</p>
      <p>- Drafting of the RERA complaint</p>
      <p>- Filing of complaint with the appropriate authorities (State RERA Authority)</p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
             <hr style="border:2px solid #612f31;">
             <p>- Legal notice to the builder</p>
            <p>-  Court fees or similar expenses</p>
            <p>-  Any other ongoing case regarding the property. You may hire the lawyer separately for any additional proceedings.</p>
              </div>
            <div class="clearfix"></div>
          
  </div>
    </div>
</section>
  
<section class="custom-padding" id="how-it-work" style="background:#612f31;">
      <div class="container">
     
        <div class="main-heading text-center" >
          <h2 style="color:white;">Indias First Online Case Tracking And Management</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
          <p style="color:white;"> Nations first ever tech enabled online case management and tracking tool for your ongoing matters at one single place!</p>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 left-responsive">
              <h4 style="color:white;">End-To-End Case Management</h4>  
              <p style="color:white;">Manage your ongoing matters with our state-of-the-art tool for invoice, calendar and task management.</p>
      <h4 style="color:white;">Cloud-Based File Management</h4>  
              <p style="color:white;">Easily track your files on the go with our double encrypted cloud-based records management system.</p>
              <h4 style="color:white;">24*7 Communication Tracking With Dedicated SPOC</h4>  
              <p style="color:white;">Connect with your Single Point of Contact any time and track all communications hassle-free.</p>
            </div>
            <div class="col-md-6 left-responsive">
              <img src="images//track.png" alt="track">
            </div>
            <div class="clearfix"></div>
          
  </div>
    </div>
</section>
  
  <section class="custom-padding" id="how-it-work" style="background:#fff;">
      <div class="container">
        <div class="row">
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Documents required for filing a complaint under RERA</h4> 
              <ul>
                <li>1. Agreement to sell</li>
                <li>2. Conveyance Deed, if any</li>
                <li>3. Application form</li>
             <br>
             
      <h4 style="color:black;">Procedure for filing a complaint under RERA</h4>  
            <li>1.  You must hire the top RERA lawyers in your locality to help you file the complaint before the appropriate authority.</li>
      <li>2. The procedure laid down by the State in which the property is located shall be followed.</li>
      <li>3. The fees for filing a complaint about RERA may also vary from state to state.</li>
      <li>4. The complaint must contain details of the name of the complaint, details of the developer, details of the property, amount paid, the relief sought, etc.</li>
    </div>
            <div class="col-md-6 left-responsive">
                <div class="card">
        <div class="card-container">
          <h4><b> RERA Registration</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>RERA Certificates</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Aggrieved Home Buyers</b></h4> 
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-container">
          <h4><b>RERA & Consumer Protection</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Remedies Against Builders</b></h4> 
        </div>
      </div>
      
            </div>
            <div class="clearfix"></div>
          
  </div>
    </div>
</section>
   @stop
