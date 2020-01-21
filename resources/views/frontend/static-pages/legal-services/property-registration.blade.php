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
    <h2 class="text-center">Get Property Registration</h2>
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
          <h2>Property Registration</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
          <p style="color:black;">Property registration is the process of logging or recording the properly executed documents with the Registrar. The documents are the ones relating to the transfer of property for assurance of title and to establish evidence of such transfer. The law relating to property registration in India is laid down under the Registration Act, 108.</p>
          <p style="color:black;">It is mandatory to register the documents relating to sale/purchase or transfer of any immovable property in India. These documents include the Sale Deed, Relinquishment Deed, Gift Deed, etc. Property registration acts as a guarantee that the title of the property is valid and as an evidence in case of property disputes relating to ownership of the property.</p>
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
      <p>-  Lawyer consultation over a telephone call for 30 minutes..</p>
      <p>- Verification of documents.</p>
      <p>- Drafting and filing of documents.</p>
      <p>- Registration of property.</p>
      
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
             <hr style="border:2px solid #612f31;">
             <p>- Court Fees</p>
              <p>- Stamp Duty to be paid for execution.</p>
              <p>- Registration fees.</p>
              <p>- Additional tasks for property registration.</p>
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
              <h4 style="color:black;">Documents required for Property Registration</h4>  
              <ul>
                <li>1. Copy of parent documents such as the Sale Deed, Title Deed, Conveyance Deed, Gift Deed, Sale/Purchase Agreement, Lease Deed, etc.</li>
                <li>2. Copy of additional documents like the building plan approval, property tax receipts, etc.</li>
                <li>3. Identity proof such as Aadhar card, voter ID card, driving license, passport, etc.</li>
                <li>4. Power of Attorney</li>
              </ul>
             <br>
      <h4 style="color:black;">Procedure for Property Registration</h4>  
             <p>Once the documents relating to the property are submitted, the documents along with the relevant details are submitted to the Sub-Registrar which has jurisdiction over the area where the property is situated. The registration fee is submitted and the document is signed by 2 witnesses. Once the prescribed stamp fee is paid, property registration is completed.
</p>
            </div>
            <div class="col-md-6 left-responsive">

                <div class="card">
        <div class="card-container">
          <h4><b>Checklist For Buying A Property</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Property Registration Under RERA</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Occupancy Certificate</b></h4> 
        </div>
      </div><br>
      
            </div>
            <div class="clearfix"></div>
          
  </div>
    </div>
</section>
  
    
@stop