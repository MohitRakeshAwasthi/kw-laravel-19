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
      <h2 style="font-size:25px;"> Send Consumer Complaint Notice Online For <br><span>Just INR 1999/-</span></h2>
      <a class="btn btn-transparent" href="consumer-complaint-notice.html"> Know More </a></div>
  </div>
  <div class="main-content-area">
   <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Join Now to  Send Consumer Complaint Notice Online</h1>
      <p>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</p>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active"> Send Consumer Complaint Notice Online</li>
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
    <h2 class="text-center"> Send Consumer Complaint Notice Online</h2>
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
          <h2>Consumer Complaint Notice</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
          <p style="color:black;">A consumer may file a complaint against the provider of a product or service when there happens to be a defect or deficiency or when the provider has charged a price above the MRP or if it affects the consumer’s safety or health or if the provider has indulged in any unfair trade practice. However, before a consumer complaint is filed, a legal notice is served to the provider and a reasonable time is provided to them to rectify the deficiency</p>
          
          <p style="color:black;">The consumer sending the notice must also keep evidence of the notice sent to be presented before the Court in case a complaint is filed. It happens many times that the issue gets resolved after a notice is served on the product or service provider and hence, it becomes necessary that you send a well-drafted and legally sound notice. You must hire the top Consumer Protection lawyers to help you for this purpose.</p>
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
                   <p>- 30 minutes consultation and advice from experienced top lawyers</p>
       <p>- Legal notice drafting to be sent to you for approval</p>
       <p>- Final legal notice drafting incorporating suggestions given by you (if any)</p>
       <p>- Dispatch of the final legal notice through registered post</p>
       <p>- The tracking number of the registered post shall be shared with you</p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
             <hr style="border:2px solid #612f31;">
                <p>- Subsequent case after the legal notice has been sent is not included</p>
        <p>- You may hire the lawyer for any subsequent cases</p>
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
              <h4 style="color:black;">Documents required for Sending Consumer Complaint Notice</h4>  
              <ul>
                   <li>1. Name and address of the product or service provider</li>
       <li>2. Details of the faulty product or service or of the subject-matter of the grievance</li>
       <li>3. Copy of any correspondence made with the provider to remedy the deficiency</li>
       <li>4. Any other documents that support your claim</li>
                
              </ul>
             <br>
      <h4 style="color:black;">Procedure for Sending Consumer Complaint Notice</h4>  
            <ul>
             <li>1.  You must hire the top Consumer Protection lawyers in your locality to help you draft a legal notice for the recovery of your money.</li>
      <li>2. The draft notice shall be drafted and sent to you for approval.</li>
      <li>3. The final notice shall be drafted incorporating your suggestions(if any).</li>
      <li>4. The final notice shall be sent to the opposite party</li>
      </ul>
            </div>
            <div class="col-md-6 left-responsive">
                <div class="card">
        <div class="card-container">
          <h4><b>Legal Notice Online</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Legal Notice Reply</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Consumer Complaint</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Consumer Forum in India</b></h4> 
        </div>
      </div>
      <div class="card">
        <div class="card-container">
          <h4><b>New Consumer Protection Law</b></h4> 
        </div>
      </div>
            </div>
            <div class="clearfix"></div>
          
  </div>
    </div>
</section>
   @stop
