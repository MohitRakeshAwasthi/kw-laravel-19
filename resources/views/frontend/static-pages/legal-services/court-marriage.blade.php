@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Family Law')

@push('css')
	@include('frontend.css.index')
@endpush

<!-- Page Content -->
@section('content')

   <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="login">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
    <h2 class="text-center">Court Marriage Online Registration In India</h2>
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
          <h2>Court Marriage</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
          <p style="color:black;">A court marriage means that the marriage between a male and female are performed according to the law irrespective of their caste, religion or creed. When two people opt to get married in the court, there is no need to perform the marriage rituals according to their religion, rather the marriage takes place in court before a Marriage Officer.  </p>
          <p style="color:black;">A court marriage in India is solemnised as per the Special Marriage Act, 1954. The marriage registration is conditional to the provisional of the Act and a marriage certificate is issued by the Marriage Officer in presence of three witnesses.</p>
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
                  <p>- Telephonic consultation with an expert family law lawyer for 30 minutes.</p>
      <p>- Verification of court marriage documents.</p>
      <p>- Filing of court marriage application.</p>
      <p>- Appearance in court and court marriage solemnisation.</p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
             <hr style="border:2px solid #612f31;">
              <p>- Court fees.</p>
      <p>- Stamp duty.</p>
      <p>- Any other legal expenses incurred for solemnisation of marriage.</p>
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
              <h4 style="color:black;">Documents required for Court Marriage registration</h4> 
              <p>The following documents are needed to register a will in India:</p> 
             <ul>
              <li>1.The court marriage application form.</li>
      <li>2.The receipt of fees to be paid along with the application form.</li>
      <li>3.The proof of date of birth of both the parties.</li>
      <li>4.ID Proof like Aadhar Card, Driving license, Passport, Voter ID card, etc.</li>
      <li>5.Address Proof like Aadhar Card, Driving license, Passport, etc.</li>
      <li>6.Affidavits from the bride and groom that mentions the date of birth, current marital status and a declaration that the bride and groom are not related to each other within the degree of prohibited relationships mentioned under the Act.</li>
    </ul>
             <br>
      <h4 style="color:black;">Procedure of Court Marriage registration</h4>  
             <p style="color:black;">A court marriage can only be performed if certain conditions are met. These conditions include:</p>
               <ul>
                <li>1.The bride and groom must not have a living spouse at the time of court marriage.</li>
      <li>2.The groom must be of 21 years old and the bride must be 18 years old.</li>
      <li>3.Both the parties must give their consent to the marriage without any force, coercion or undue influence.</li>
      <li>4.The bride and groom must not be within the degrees of prohibited relationships. However, if the customs governing any one of them allows such marriage, the degree of prohibited relationships will not be applicable.</li>
      </ul>
      <p><b>The court marriage procedure includes the following steps:</b></p>
       <ul>
        <li>- The bride and groom need to inform the Marriage Officer about their intention to get married and submit a notice.</li>
 <li>- The notice for court marriage must be filed in the prescribed format and with the Marriage Registrar of the district in which any one of them has been living for a period of more than 30 days.</li>
 <li>- The notice of intended marriage is published by the Marriage Registrar to invite any objections against the marriage.</li>
 <li>- After 30 days, the marriage is solemnised in the presence of 3 witnesses and the Marriage Certificate is issued by the Registrar.</li>
</ul>
            </div>
            <div class="col-md-6 left-responsive">
                <div class="card">
        <div class="card-container">
          <h4><b>Court Marriage Procedure</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Special Marriage In India</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>NRI Marriage Registration</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Second Marriage Validity After Divorce</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Child Marriage Laws In India</b></h4> 
        </div>
      </div>
            </div>
            <div class="clearfix"></div>
          
  </div>
    </div>
</section>
  
    
@stop
