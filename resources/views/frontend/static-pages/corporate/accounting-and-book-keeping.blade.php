@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Corporates')

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
<h2>Accounting and Book Keeping</h2>
The techniques of keeping the financial accounts are followed by all organisations. It helps to keep a note on the financial affairs. Maintaining the accounts of the company gives the detailed information of financial outsource and the insource of the company. If any organisation fails to keep the account of the assets, liabilities or cash flow, it can face disintegration of the company. This is the backbone of any kind of business. Keeping the record of the financial transaction helps at the time of paying the income tax to the department of the Ministry of Corporate Affairs.<br><br>
Maintaining the account can be unexciting but not meaningless and sometimes it is also expensive affair but keeping this record will help at the time of tax paying to the IT Department. This also creates an impression on how the business is running to the promoters and shareholders.<br><br>
<br>
<h2>FAQs</h2>
QusWhat is the procedure of maintain the account?<br><br>
AnsThe data has to be collected from the client via mail or in hard copy and then it the book of accounts will be created.<br><br>
QusHow can Kanoonvala.com Help?<br><br>
AnsWe will provide you services of accounting, bookkeeping, accounting systems automation and integration, Controller level services, CFO Level Services and Payroll. If you are in need of an expert’s help who can look after your book of accounts or to process the payroll payments, you are at the right place.<br><br>
<br>
@stop
