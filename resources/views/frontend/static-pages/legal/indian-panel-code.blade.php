@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Family Law')

@push('css')
	@include('frontend.css.index')
@endpush

<!-- Page Content -->
@section('content')
<div id="home" class="full-section parallax-home" style="background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url(https://www.legistify.com/img/banner/ipc.webp);height:250px;">
    <div class="slider-caption">
      <h2 style="font-size:25px;">Indian Kanoon- Indian Penal Code,1860 (IPC)</h2>
      
      </div>
  </div>
 <div class="main-content-area">
   <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Kanoonvala IPC SECTIONS</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">IPC Sections</li>
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
 
    
<section class="custom-padding" id="disclaimer" style="background:white;">
      <div class="container">
          <div class="row" style="padding:20px;width:100%;color:white">
          <h2 style="color:black;text-align:center;">IPC Sections</h2>
          <br>
            <div class="col-md-12 left-responsive " >
                
              <h3 style="color:black;">IPC Section 1 - Title and extent of operation of the Code</h3>
            <p style="color:black;">This Act shall be called the Indian Penal Code, and shall [extend to the whole of India [except the State of Jammu and Kashmir]]...</p>
            <br>
            <p><a href="{{ url('legal/ipc-section-1') }}">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
                
              <h3 style="color:black;">IPC Section 2 - Punishment of offences committed within India</h3>
            <p style="color:black;">Every person shall be liable to punishment under this Code and not otherwise for every act or omission contrary to the provisions thereof, of which he shall be guilty within [India]</p>
            <br>
            <p><a href="{{ url('legal/ipc-section-2') }}">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 3 - Punishment of offences committed beyond, but which by law maybe tried within, India.</h3>
            <p style="color:black;">Any person liable, by any [Indian law], to be tried for an offence committed beyond [India] shall be dealt with according to the provisions of this Code for any act committed beyond [India] in the same manner as if such act had been committed within [India]</p>
            <br>
            <p><a href="ipc-section-3.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 4 - Extension of Code to extra-territorial offences</h3>
            <p style="color:black;">The provisions of this Code apply also to any offence committed by--  [(1) any citizen of India in any place without and beyond India;  (2) any person on any ship or aircraft registered in India wherever it may be. (3) any person in any place without and beyond India committing offence targeting a computer resource located in India. ] </p>
            <br>
            <p><a href="ipc-section-4.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 5 - Certain laws not to be affected by this Act</h3>
            <p style="color:black;">Nothing in this Act shall affect the provisions of any Act for punishing mutiny and desertion of officers, soldiers, sailors or airmen in the service of the Government of India or the provision of any special or local law.</p>
            <br>
            <p><a href="ipc-section-5.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 6 - Definitions in the Code to be understood subject to exceptions</h3>
            <p style="color:black;">Throughout this Code every definition of an offence, every penal provision and every illustration of every such definition or penal provision, shall be understood subject to the exceptions contained in the Chapter entitled "General Exceptions", though those exceptions are not repeated in such definition, penal provision, or illustration.</p>
            <br>
            <p><a href="ipc-section-6.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 7 - Sense of expression once explained</h3>
            <p style="color:black;">Every expression which is explained in any part of this Code, is used in every part of this Code in conformity with the explanation.</p>
            <br>
            <p><a href="ipc-section-7.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 8 - Gender</h3>
            <p style="color:black;">The pronoun "he" and its derivatives are used of any person, whether male or female</p>
            <br>
            <p><a href="ipc-section-8.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 9 - Numbers</h3>
            <p style="color:black;">Unless the contrary appears from the context, words importing the singular number include the plural number, and words importing the plural number include the singular number.</p>
            <br>
            <p><a href="ipc-section-9.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 10 - "Man". "Woman"</h3>
            <p style="color:black;">The word "man" denotes a male human being of any age; the word "woman" denotes a female human being of any age.</p>
            <br>
            <p><a href="ipc-section-10.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 11 - Person</h3>
            <p style="color:black;">The word "person" includes any Company or Association or body of persons, whether incorporated or not.</p>
            <br>
            <p><a href="ipc-section-11.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 12 - Public</h3>
            <p style="color:black;">The word "public" includes any class of the public or any community".</p>
            <br>
            <p><a href="ipc-section-12.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 13 - Queen</h3>
            <p style="color:black;">Repelled by the A.O. 1950</p>
            <br>
            <p><a href="ipc-section-13.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 14 - Servant of Government</h3>
            <p style="color:black;">The words "servant of Government" denote any officer or servant continued, appointed or employed in India by or under the authority of Government.</p>
            <br>
            <p><a href="ipc-section-14.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 15 - British India</h3>
            <p style="color:black;">Repelled by the A.O. 1937</p>
            <br>
            <p><a href="ipc-section-15.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 16 - Government of India</h3>
            <p style="color:black;">Repelled by the A.O. 1937</p>
            <br>
            <p><a href="ipc-section-16.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 17 - Government</h3>
            <p style="color:black;">The word "Government" denotes the Central Government or the Government of a ****State.</p>
            <br>
            <p><a href="ipc-section-17.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 18 - India</h3>
            <p style="color:black;">"India" means the territory of India excluding the State of Jammu and Kashmir.</p>
            <br>
            <p><a href="ipc-section-18.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 19 - Judge</h3>
            <p style="color:black;">The word "Judge" denotes not only every person who is officially designated as a Judge, but also every person who is empowered by law to give, in any legal proceeding, civil or criminal, a definitive judgment, or a judgment which, if not appealed against, would be definitive, or a judgment which, if confirmed by some other authority, would be definitive, or  who is one of a body of persons, which body of persons is empowered by law to give such a judgment.</p>
            <br>
            <p><a href="ipc-section-19.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <hr>
            
             <h3 style="color:black;">IPC Section 20 - Court of Justice</h3>
            <p style="color:black;">The words "Court of Jutsice" denote a Judge who is empowered by law to act judicially alone, or a body of Judges which is empowered by law to act judicially as a body, when such Judge or body of Judges is acting judicially.</p>
            <br>
            <p><a href="ipc-section-20.html">READ MORE </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
            
            <div class="clearfix"></div>   
            </div>
  </div>
    </div>
</section>
@stop
