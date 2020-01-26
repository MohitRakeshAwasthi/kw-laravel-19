@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Ask For Query')

@push('css')
	@include('frontend.css.index')
@endpush

<!-- Page Content -->
@section('content')
<section class="section-padding-80 white" id="post-question">
<h2>Ask Your Question</h2>
Top legal experts at Kanoonvala.com answer hundreds of queries every day! As your question here and get free expert advice. 
For detailed information view our Community Guidelines and Privacy Policy.
<br><br>
<hr>
<!-- form login -->
<form class="margin-top-40">
  <textarea cols="12" rows="12" placeholder="Post Your Question Details Here....." id="message" name="message" class="form-control"></textarea>
  <br>
  <button class="btn btn-danger pull-center" value="submit">Publish Your Question</button>
</form>
<!-- form login -->
</section>
<section class="custom-padding" id="how-it-work" style="background:white;">
<h2>Here How It Works</h2>
<span class="slice"></span><span class="slice"></span><span class="slice"></span>
<br>
<img src="images/adduser.png" class="img-responsive" alt="">
<h4><a href="#">Submit the Question</a></h4>
Explain your legal query in detail and post it for our experts here.<br><br>
<br>
<img src="images/explore.png" class="img-responsive" alt="">
<h4><a href="#">Answers By Experts</a></h4>
Kanonvalas legal experts answer your queries and provide free advice.<br><br>
<br>
<img src="images/muser.png" class="img-responsive" alt="">
<h4><a href="#"> Get Notification</a></h4>
Get notified when our legal experts post answers to your questions.<br><br>
<br>
<br>
</section>
<section class="custom-padding" id="how-it-work" style=" background:#390906;">
<h3 style="color:white;">WANT TO KNOW MORE? READ OTHER ANSWERS POSTED BY OUR LEGAL EXPERTS</h3>
Simply select the legal category and read answers on legal queries posted by others.<br><br>
<br>
<br>
<button class="btn btn-danger"><a href="qna.html" style="color:white">FIND MORE QNA</a></button>
<br>
<br>
</section>@stop
