@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Family Law')

@push('css')
	@include('frontend.css.index')
@endpush

<!-- Page Content -->
@section('content')
<ul>
  <li><a href="javascript://" id="a1" onclick="fp_show('tab_1','a1')" class="active">Overview</a></li>
  <li><a href="javascript://" id="a2" onclick="fp_show('tab_2','a2')">FAQs</a></li>
</ul>
<br>
<h2>Change in Name of the Entity</h2>
Keeping a name of a Business is though an exciting task but it also has to its own vitality. It’s just like keeping the name of your child. Whiling naming an entity one should be very choosy and also careful. Because it is name from which the business gets its recognition.<br><br>
The name entirely reflects the nature of the business and sometimes where in a business, circumstances occur where the need of name change becomes important.<br><br>
<strong>Benefits </strong><br><br>
<ul>
  <li>It allows room for growth</li>
  <li>It can bring a Unique Identity</li>
</ul>
<strong>Procedure for Change of name in case of Company in India:</strong><br><br>
<ul>
  <li>After the completion of documentation from the client for change name of the company  there will be filing of form INC-1</li>
  <li>After the Central Government approves the name, the form MGT-14 &amp; INC-24 gets filed to give effect to change in name.</li>
  <li>The Total Time needed to complete the whole process is 20-25 working days.</li>
</ul>
<strong>Procedure for Change of name in case of LLP in India:</strong><br><br>    
  The procedure of closing of a Company happens as follows:
<br><br>
<ul>
  <li>LLP shall apply for reservation of name to the Registrar of Companies in form 1.</li>
  <li>After the Central Government approves the  name ,  the form MGT-14 &amp; INC-24 gets filed to give effect to change in name</li>
  <li>For the change of name, Application to be filed in for the amendment in the LLP Agreement with form 5  File form 3 for within 30 days of change of the name.</li>
  <li>The Average Time that will be taken to complete the procedure is 20-25 working days</li>
</ul>
<br>
<h2>FAQs</h2>
QusWhat are the documents needed for a name change LLP?<br><br>
Ans<br><br>
<ol>
  <li>Certified copy of decision/consent of requisite partners.</li>
  <li>If change is due to a direction received from the central government, then copy of such direction.</li>
  <li>Copy of Board Resolution of the existing company or consent of existing LLP as proof of no objection.</li>
  <li>Copy of the minutes of decision/resolution/consent of partners.</li>
  <li>The extracts of the relevant provision of the Limited Liability Partnership Agreement.</li>
</ol>
QusWhat is the information needed for name change in LLP?<br><br>
Ans<br><br>
<ol>
  <li>Name &amp; LLPIN of the LLP.</li>
  <li>Details of the Partners with DPIN.</li>
  <li>Name &amp; DSC of the authorized partner for filing form 1.</li>
  <li>6 names in order of preference with significance of key or coined words.</li>
  <li>Reason of name change of LLP.</li>
</ol>
QusWhat is the information that is needed for the name change of a company?<br><br>
Ans<br><br>
<ol>
  <li>Name &amp; CIN of the Company.</li>
  <li>Details of the Directors with DIN.</li>
  <li>Name &amp; DSC of the authorized Director for filing form INC-1.</li>
  <li>6 names in order of preference with significance of key or coined words.</li>
  <li>Reason of name change of Company.</li>
</ol>
<br>@stop
