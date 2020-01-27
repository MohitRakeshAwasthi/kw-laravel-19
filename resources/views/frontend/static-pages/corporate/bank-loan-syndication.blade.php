@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Financial Services')

@push('css')
	@include('frontend.css.index')
@endpush

<!-- Page Content -->
@section('content')
<ul>
  <li><a href="javascript://" id="a1" onclick="fp_show('tab_1','a1')" class="active">Overview</a></li>
</ul>
<br>
<h2>Bank Loan Syndication</h2>
Bank Loan Syndication is a loan which is given to the syndicate group which provide financial assistance to the person who needs it. The one who borrows the money can be an organisation, a project or sometimes even Government.<br><br>
<strong>Features</strong><br><br>
<ol>
  <li>This loan is granted to a group that is the syndicate who in turn gives financial assistance to a single borrower.</li>
  <li>This loan allows the lender to spread the risk.</li>
  <li>There is a lot of risk in this investment.</li>
  <li>The one who sends the largest amount shall be called as an arranger.</li>
  <li>This type of finance aims to spread risk across multiple lenders.</li>
  <li>The amount granted is not always consistent</li>
  <li>Floating and fixed are two forms of interest for this loan</li>
</ol>
<strong>Advantages</strong><br><br>
<ol>
  <li>Access to large amounts is now possible.</li>
  <li>Can assist in bringing the financial institutes together</li>
  <li>Maximum cooperat6ion between the members of the syndicate.</li>
  <li>The structure and pricing are extremely flexible.</li>
</ol>
Kanoonvala with its expertise will be giving you the benefits of the working capital loans for your company at your crucial time. <br><br>
<br>@stop
