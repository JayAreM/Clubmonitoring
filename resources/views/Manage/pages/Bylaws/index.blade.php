@extends('Manage.layouts.app')

@section('content')
<html lang="{{ app()->getLocale() }}">
    <div class="main-content" id="panel">
    @include('Manage.includes.header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/file-manager/css/file-manager.css') }}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">


    <div class="header" style="background-color: #0d314e">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"><a
                                    href="{{ route('dashboard') }}">Attendance</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-file-alt"></i></li>
                                    <li class="breadcrumb-item active">{{ 'Bylaws' }}</li>
                                </ol>
                            </nav>
                        </div>

						<a href="{{ route('dashboard') }}" class="btn btn-sm btn-neutral" style="margin-left:45%"><i class="fa fa-home" aria-hidden="true" ></i>
                            </a>

                    </div>
					
                </div>
            </div>
    </div>
   
    <br>
    <a href="{{ asset('pdfs/HCDC-Computer-Engineering-Act-of-2019-CpE-Act-1001UPDATED-A.Y.-2022-2023-1.pdf') }}"  target="_blank" class="btn btn-outline-primary" style="line-height: 1.0" >Download/Print</a><br>
  
    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft10{font-size:18px;font-family:Helvetica;color:#ffffff;}
	.ft11{font-size:14px;font-family:Helvetica;color:#000000;}
	.ft12{font-size:14px;font-family:Times;color:#000000;}
	.ft13{font-size:31px;font-family:Times;color:#252525;}
	.ft14{font-size:52px;font-family:Times;color:#252525;}
	.ft15{font-size:18px;font-family:Times;color:#404040;}
	.ft16{font-size:17px;font-family:Helvetica;color:#4471c4;}
	.ft17{font-size:13px;font-family:Helvetica;color:#585858;}
	.ft18{font-size:31px;line-height:39px;font-family:Times;color:#252525;}
	.ft19{font-size:31px;line-height:40px;font-family:Times;color:#252525;}
	.ft110{font-size:18px;line-height:27px;font-family:Times;color:#404040;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page1-div" style="position:relative;width:100%;height:1188px;">
<img width="100%" height="1188" src="{{asset('images/target001.png')}}" alt="background image"/>
<p style="position:absolute;top:238px;left:218px;white-space:nowrap" class="ft10">1/5/2023&#160;</p>
<p style="position:absolute;top:112px;left:108px;white-space:nowrap" class="ft11">&#160;</p>
<p style="position:absolute;top:131px;left:108px;white-space:nowrap" class="ft12"><b>&#160;</b></p>
<p style="position:absolute;top:131px;left:324px;white-space:nowrap" class="ft12"><b>&#160;</b></p>
<p style="position:absolute;top:322px;left:393px;white-space:nowrap" class="ft19">HCDC&#160;COMPUTER&#160;<br/>ENGINEERING&#160;ACT&#160;OF&#160;2019&#160;<br/>(CpE&#160;Act&#160;No.&#160;0001)</p>
<p style="position:absolute;top:387px;left:638px;white-space:nowrap" class="ft14">&#160;</p>
<p style="position:absolute;top:449px;left:393px;white-space:nowrap" class="ft110"><b>An&#160;Act&#160;Establishing&#160;the&#160;Alliance&#160;of&#160;<br/>Computational&#160;Technology&#160;Innovators&#160;&amp;&#160;<br/>Validation&#160;Experts&#160;(ACTIVE)&#160;</b></p>
<p style="position:absolute;top:1050px;left:386px;white-space:nowrap" class="ft16">BS Computer Engineering&#160;</p>
<p style="position:absolute;top:1072px;left:386px;white-space:nowrap" class="ft17">HCDC,&#160;INC.&#160;DAVAO&#160;CITY,&#160;PH&#160;8000&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft20{font-size:14px;font-family:Times;color:#000000;}
	.ft21{font-size:13px;font-family:Times;color:#000000;}
	.ft22{font-size:14px;font-family:Times;color:#000000;}
	.ft23{font-size:14px;font-family:Times;color:#000000;}
	.ft24{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
	.ft25{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page2-div" style="position:relative;width:918px;height:1188px;margin-left:15%;">
<img width="100%" height="1188" src="{{asset('images/target002.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:350px;white-space:nowrap" class="ft20">Holy&#160;Cross&#160;of&#160;Davao&#160;College,&#160;Inc.&#160;</p>
<p style="position:absolute;top:143px;left:324px;white-space:nowrap" class="ft20">Sta.&#160;Ana&#160;Avenue,&#160;Davao&#160;City,&#160;Philippines&#160;</p>
<p style="position:absolute;top:176px;left:341px;white-space:nowrap" class="ft21"><i>College&#160;of&#160;Engineering&#160;and&#160;Technology&#160;</i></p>
<p style="position:absolute;top:209px;left:459px;white-space:nowrap" class="ft20">&#160;</p>
<p style="position:absolute;top:244px;left:375px;white-space:nowrap" class="ft22"><b>C&#160;p&#160;E&#160;&#160;&#160;A&#160;c&#160;t&#160;&#160;&#160;N&#160;o.&#160;&#160;&#160;0&#160;0&#160;0&#160;1&#160;</b></p>
<p style="position:absolute;top:280px;left:459px;white-space:nowrap" class="ft20">&#160;</p>
<p style="position:absolute;top:314px;left:108px;white-space:nowrap" class="ft24">AN&#160;ACT&#160;TO&#160;ESTABLISH&#160;THE&#160;ALLIANCE&#160;OF&#160;COMPUTATIONAL&#160;TECHNOLOGY&#160;INNOVATORS&#160;&amp;&#160;VALIDATION&#160;<br/>EXPERTS&#160;(ACTIVE)&#160;AND&#160;COMPLETELY&#160;REPLACE&#160;THE&#160;ASSOCIATION&#160;OF&#160;COMPUTER&#160;ENGINEERING&#160;STUDENTS&#160;<br/>(ACES),&#160;&#160;REPEALING&#160;&#160;THE&#160;&#160;ESTABLISHED&#160;&#160;CONSTITUTION&#160;&#160;AND&#160;&#160;BY-LAWS&#160;&#160;OF&#160;&#160;THE&#160;&#160;HCDC&#160;&#160;COMPUTER&#160;<br/>ENGINEERING&#160;DEPARTMENT’S&#160;OFFICIAL&#160;ORGANIZATION&#160;APPROVED&#160;LAST&#160;JULY&#160;17,&#160;2018,&#160;AS&#160;AMENDED&#160;</p>
<p style="position:absolute;top:419px;left:459px;white-space:nowrap" class="ft20">&#160;</p>
<p style="position:absolute;top:455px;left:427px;white-space:nowrap" class="ft22"><b>ARTICLE&#160;I&#160;</b></p>
<p style="position:absolute;top:490px;left:438px;white-space:nowrap" class="ft20">NAME&#160;</p>
<p style="position:absolute;top:525px;left:108px;white-space:nowrap" class="ft22"><b>Section&#160;1.&#160;</b><i>Short&#160;Title.&#160;</i>–&#160;This&#160;act&#160;shall&#160;be&#160;known&#160;and&#160;cited&#160;as&#160;the&#160;“HCDC&#160;Computer&#160;Engineering&#160;Act&#160;of&#160;2019”.&#160;</p>
<p style="position:absolute;top:560px;left:108px;white-space:nowrap" class="ft24"><b>Section&#160;2.</b>&#160;<i>Lovelace&#160;clause.&#160;–&#160;</i>The&#160;officially&#160;recognized&#160;co-curricular&#160;organization&#160;of&#160;the&#160;Bachelor&#160;of&#160;Science&#160;<br/>in&#160;&#160;Computer&#160;&#160;Engineering&#160;&#160;in&#160;&#160;the&#160;&#160;Holy&#160;&#160;Cross&#160;&#160;of&#160;&#160;Davao&#160;&#160;College,&#160;&#160;Inc.&#160;&#160;shall&#160;&#160;be&#160;&#160;renamed&#160;&#160;<i>Alliance&#160;&#160;of&#160;<br/>Computational&#160;&#160;Technology&#160;&#160;Innovators&#160;&#160;and&#160;&#160;Validation&#160;&#160;Experts&#160;&#160;(ACTIVE)&#160;&#160;</i>replacing&#160;&#160;its&#160;&#160;former&#160;&#160;name&#160;<br/><i>Association&#160;of&#160;Computer&#160;Engineering&#160;Students&#160;(ACES)</i>.&#160;This&#160;is&#160;reflective&#160;of&#160;the&#160;need&#160;of&#160;the&#160;HCDC&#160;Computer&#160;<br/>Engineering&#160;Department&#160;to&#160;strengthen&#160;its&#160;ties&#160;to&#160;the&#160;industry&#160;via&#160;its&#160;strong&#160;alumni&#160;network.&#160;ACTIVE&#160;shall&#160;<br/>be&#160;&#160;recognized&#160;&#160;as&#160;&#160;the&#160;&#160;Official&#160;&#160;Organization&#160;&#160;for&#160;&#160;HCDC&#160;&#160;BS&#160;&#160;Computer&#160;&#160;Engineering&#160;&#160;Students&#160;&#160;and&#160;&#160;Alumni.&#160;<br/>Changes&#160;&#160;to&#160;&#160;this&#160;&#160;section&#160;&#160;shall&#160;&#160;be&#160;&#160;called&#160;&#160;as&#160;&#160;the&#160;&#160;Lovelace&#160;&#160;Amendment&#160;&#160;for&#160;&#160;ease&#160;&#160;of&#160;&#160;revision&#160;&#160;as&#160;&#160;may&#160;&#160;be&#160;<br/>warranted&#160;for&#160;future&#160;needs.&#160;</p>
<p style="position:absolute;top:757px;left:425px;white-space:nowrap" class="ft22"><b>ARTICLE&#160;II&#160;</b></p>
<p style="position:absolute;top:793px;left:420px;white-space:nowrap" class="ft20">OBJECTIVES&#160;</p>
<p style="position:absolute;top:827px;left:108px;white-space:nowrap" class="ft22"><b>Section&#160;1.</b>&#160;</p>
<p style="position:absolute;top:827px;left:216px;white-space:nowrap" class="ft20">The&#160;aim&#160;of&#160;ACTIVE&#160;is&#160;to&#160;serve&#160;as&#160;the&#160;liaison&#160;between&#160;the&#160;academic&#160;and&#160;the&#160;professional&#160;</p>
<p style="position:absolute;top:851px;left:108px;white-space:nowrap" class="ft24">world&#160;for&#160;the&#160;Computer&#160;Engineering&#160;students&#160;of&#160;the&#160;Holy&#160;Cross&#160;of&#160;Davao&#160;College,&#160;Inc.&#160;It&#160;shall&#160;embody&#160;the&#160;<br/>ideals&#160;and&#160;aspirations&#160;of&#160;HCDC,&#160;CET&#160;and&#160;the&#160;BS&#160;CpE&#160;program&#160;of&#160;the&#160;institution.&#160;Specifically,&#160;it&#160;shall:&#160;</p>
<p style="position:absolute;top:909px;left:140px;white-space:nowrap" class="ft20">a)&#160;&#160;Allow&#160;&#160;the&#160;&#160;creation&#160;&#160;of&#160;&#160;a&#160;&#160;governing&#160;&#160;body&#160;&#160;which&#160;&#160;shall&#160;&#160;be&#160;&#160;called&#160;&#160;as&#160;&#160;the&#160;&#160;ACTIVE&#160;&#160;von&#160;&#160;Neumann&#160;</p>
<p style="position:absolute;top:932px;left:167px;white-space:nowrap" class="ft20">Committee&#160;comprised&#160;of&#160;both&#160;appointed&#160;and&#160;elected&#160;officers&#160;to&#160;lead&#160;the&#160;organization;&#160;</p>
<p style="position:absolute;top:955px;left:140px;white-space:nowrap" class="ft20">b)&#160;&#160;Provide&#160;a&#160;streamlined&#160;process&#160;that&#160;expedites&#160;the&#160;sanctioning&#160;or&#160;disapproval&#160;of&#160;activities&#160;both&#160;</p>
<p style="position:absolute;top:979px;left:167px;white-space:nowrap" class="ft24">directly&#160;&#160;and&#160;&#160;indirectly&#160;&#160;related&#160;&#160;to&#160;&#160;the&#160;&#160;Computer&#160;&#160;Engineering&#160;&#160;Department’s&#160;&#160;core&#160;&#160;activities&#160;&#160;and&#160;<br/>curriculum;&#160;</p>
<p style="position:absolute;top:1025px;left:140px;white-space:nowrap" class="ft20">c)&#160;&#160;Bridge&#160;the&#160;gap&#160;between&#160;theory&#160;and&#160;application&#160;via&#160;establishing&#160;strong&#160;linkages&#160;to&#160;the&#160;industry&#160;</p>
<p style="position:absolute;top:1048px;left:167px;white-space:nowrap" class="ft20">through&#160;its&#160;alumni&#160;network;&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft30{font-size:14px;font-family:Times;color:#000000;}
	.ft31{font-size:14px;font-family:Times;color:#000000;}
	.ft32{font-size:14px;font-family:Times;color:#000000;}
	.ft33{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page3-div" style="position:relative;width:918px;height:1188px; margin-left:15%;">
<img width="918" height="1188" src="{{asset('images/target003.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:140px;white-space:nowrap" class="ft30">d)&#160;&#160;Partner&#160;&#160;HCDC’s&#160;&#160;BS&#160;&#160;Computer&#160;&#160;Engineering&#160;&#160;program&#160;&#160;with&#160;&#160;technology&#160;&#160;start-ups&#160;&#160;and&#160;&#160;companies&#160;</p>
<p style="position:absolute;top:134px;left:167px;white-space:nowrap" class="ft30">locally,&#160;nationally,&#160;and&#160;whenever&#160;possible,&#160;internationally;&#160;</p>
<p style="position:absolute;top:158px;left:140px;white-space:nowrap" class="ft30">e)&#160;&#160;Hold&#160;ACTIVE’S&#160;Hollerith&#160;Convention&#160;which&#160;shall&#160;serve&#160;to&#160;disseminate&#160;information&#160;regarding&#160;the&#160;</p>
<p style="position:absolute;top:181px;left:167px;white-space:nowrap" class="ft33">organization’s/college’s/institution’s&#160;&#160;upcoming&#160;&#160;events,&#160;&#160;activities,&#160;&#160;and&#160;&#160;newly&#160;&#160;established&#160;&#160;tech&#160;<br/>industry&#160;and&#160;job&#160;placement&#160;partnerships,&#160;among&#160;other&#160;things;&#160;</p>
<p style="position:absolute;top:227px;left:140px;white-space:nowrap" class="ft30">f)&#160;&#160;Afford&#160;&#160;assistance&#160;&#160;to&#160;&#160;its&#160;&#160;student&#160;&#160;members&#160;&#160;in&#160;&#160;their&#160;&#160;academic,&#160;&#160;co-curricular,&#160;&#160;extracurricular&#160;</p>
<p style="position:absolute;top:250px;left:167px;white-space:nowrap" class="ft33">difficulties&#160;through&#160;consultation&#160;and&#160;remedial&#160;activities&#160;duly&#160;sanctioned&#160;by&#160;the&#160;body&#160;or&#160;privately&#160;<br/>agreed&#160;upon&#160;by&#160;the&#160;parties&#160;involved&#160;namely&#160;the&#160;tutee&#160;and&#160;tutor;&#160;</p>
<p style="position:absolute;top:297px;left:140px;white-space:nowrap" class="ft30">g)&#160;&#160;Deliver&#160;&#160;seminars&#160;and&#160;trainings&#160;deemed&#160;necessary&#160;for&#160;the&#160;skilling&#160;and&#160;reskilling&#160;of&#160;students&#160;in&#160;</p>
<p style="position:absolute;top:320px;left:167px;white-space:nowrap" class="ft30">hopes&#160;of&#160;preparing&#160;them&#160;for&#160;the&#160;professional&#160;world&#160;of&#160;work.&#160;&#160;</p>
<p style="position:absolute;top:356px;left:459px;white-space:nowrap" class="ft31"><b>&#160;</b></p>
<p style="position:absolute;top:391px;left:423px;white-space:nowrap" class="ft31"><b>ARTICLE&#160;III&#160;</b></p>
<p style="position:absolute;top:426px;left:410px;white-space:nowrap" class="ft30">COMPOSITION&#160;</p>
<p style="position:absolute;top:461px;left:108px;white-space:nowrap" class="ft33">The&#160;Alliance&#160;of&#160;Computational&#160;Technology&#160;Innovators&#160;and&#160;Validation&#160;Experts&#160;is&#160;composed&#160;of&#160;all&#160;bona&#160;fide&#160;<br/>Bachelor&#160;of&#160;Science&#160;in&#160;Computer&#160;Engineering&#160;students&#160;and&#160;alumni&#160;of&#160;the&#160;Holy&#160;Cross&#160;of&#160;Davao&#160;College,&#160;Inc.&#160;&#160;</p>
<p style="position:absolute;top:519px;left:108px;white-space:nowrap" class="ft30">&#160;</p>
<p style="position:absolute;top:554px;left:422px;white-space:nowrap" class="ft31"><b>ARTICLE&#160;IV&#160;</b></p>
<p style="position:absolute;top:590px;left:327px;white-space:nowrap" class="ft30">ORGANIZATION&#160;AND&#160;ADMINISTRATION&#160;</p>
<p style="position:absolute;top:625px;left:108px;white-space:nowrap" class="ft33"><b>Section&#160;1.&#160;</b>The&#160;organization&#160;and&#160;the&#160;administration&#160;of&#160;the&#160;affairs&#160;of&#160;the&#160;Alliance&#160;shall&#160;be&#160;vested&#160;in&#160;the&#160;von&#160;<br/>Neumann&#160;&#160;Committee&#160;&#160;and&#160;&#160;the&#160;&#160;Berners-Lee&#160;&#160;Committee,&#160;&#160;of&#160;&#160;which&#160;&#160;only&#160;&#160;the&#160;&#160;ACTIVE&#160;&#160;CEO&#160;&#160;holds&#160;&#160;both&#160;<br/>memberships.&#160;</p>
<p style="position:absolute;top:706px;left:108px;white-space:nowrap" class="ft33"><b>Section&#160;&#160;2.&#160;&#160;</b><i>von&#160;&#160;Neumann&#160;&#160;clause.&#160;&#160;–&#160;&#160;</i>The&#160;&#160;von&#160;&#160;Neumann&#160;&#160;Committee&#160;&#160;is&#160;&#160;comprised&#160;&#160;of&#160;&#160;the&#160;&#160;Executive&#160;<br/>Department,&#160;&#160;the&#160;&#160;Information&#160;&#160;Department,&#160;&#160;the&#160;&#160;Finance&#160;&#160;Department,&#160;&#160;and&#160;&#160;the&#160;&#160;Logistics&#160;&#160;Department.&#160;<br/>Changes&#160;&#160;to&#160;&#160;this&#160;&#160;section,&#160;&#160;particularly&#160;&#160;in&#160;&#160;its&#160;&#160;structural&#160;&#160;hierarchy,&#160;&#160;shall&#160;&#160;be&#160;&#160;called&#160;&#160;as&#160;&#160;the&#160;&#160;von&#160;&#160;Neumann&#160;<br/>Amendment&#160;for&#160;ease&#160;of&#160;revision&#160;as&#160;may&#160;be&#160;warranted&#160;for&#160;future&#160;needs.&#160;</p>
<p style="position:absolute;top:811px;left:135px;white-space:nowrap" class="ft30">a)&#160;&#160;<i>Turing&#160;clause.&#160;–&#160;</i>The&#160;Executive&#160;Department&#160;shall&#160;be&#160;composed&#160;of&#160;the&#160;Chief&#160;Executive&#160;Officer&#160;(CEO),&#160;</p>
<p style="position:absolute;top:834px;left:162px;white-space:nowrap" class="ft33">the&#160;Chief&#160;Operating&#160;Officer&#160;(COO),&#160;and&#160;the&#160;External&#160;Affairs&#160;Vice-President&#160;(EAVP).&#160;Changes&#160;to&#160;this&#160;<br/>subsection&#160;shall&#160;be&#160;known&#160;as&#160;the&#160;Turing&#160;Amendment&#160;for&#160;ease&#160;of&#160;revision&#160;as&#160;may&#160;be&#160;warranted&#160;for&#160;<br/>future&#160;needs.&#160;This&#160;subsection&#160;is&#160;intertwined&#160;with&#160;the&#160;Section&#160;1&#160;of&#160;Article&#160;VI.&#160;Changes&#160;to&#160;the&#160;latter&#160;<br/>section&#160;must&#160;be&#160;in&#160;congruence&#160;with&#160;this&#160;subsection.&#160;</p>
<p style="position:absolute;top:927px;left:135px;white-space:nowrap" class="ft30">b)&#160;&#160;<i>Shannon&#160;clause.&#160;–&#160;</i>The&#160;Information&#160;Department&#160;shall&#160;be&#160;composed&#160;of&#160;the&#160;Chief&#160;Data&#160;Officer&#160;(CDO),&#160;</p>
<p style="position:absolute;top:950px;left:162px;white-space:nowrap" class="ft33">the&#160;CWO&#160;(Chief&#160;Web&#160;Officer),&#160;and&#160;the&#160;CMO&#160;(Chief&#160;Marketing&#160;Officer).&#160;Changes&#160;to&#160;this&#160;subsection&#160;<br/>shall&#160;be&#160;known&#160;as&#160;the&#160;Shannon&#160;Amendment&#160;for&#160;ease&#160;of&#160;revision&#160;as&#160;may&#160;be&#160;warranted&#160;for&#160;future&#160;<br/>needs.&#160;This&#160;subsection&#160;is&#160;intertwined&#160;with&#160;the&#160;Section&#160;2&#160;of&#160;Article&#160;VI.&#160;Changes&#160;to&#160;the&#160;latter&#160;section&#160;<br/>must&#160;be&#160;in&#160;congruence&#160;with&#160;this&#160;subsection.&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft40{font-size:14px;font-family:Times;color:#000000;}
	.ft41{font-size:14px;font-family:Times;color:#000000;}
	.ft42{font-size:14px;font-family:Times;color:#000000;}
	.ft43{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
	.ft44{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page4-div" style="position:relative;width:918px;height:1188px; margin-left:15%;">
<img width="918" height="1188" src="{{asset('images/target004.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:135px;white-space:nowrap" class="ft40">c)&#160;&#160;<i>Boolean&#160;clause.&#160;–&#160;</i>The&#160;Finance&#160;Department&#160;shall&#160;be&#160;composed&#160;of&#160;the&#160;Chief&#160;Financial&#160;Officer&#160;(CFO),&#160;</p>
<p style="position:absolute;top:134px;left:162px;white-space:nowrap" class="ft43">the&#160;&#160;Deputy&#160;&#160;Financial&#160;&#160;Controller&#160;&#160;(DFC),&#160;&#160;and&#160;&#160;the&#160;&#160;Chief&#160;&#160;Audit&#160;&#160;Executive&#160;&#160;(CAE).&#160;&#160;Changes&#160;&#160;to&#160;&#160;this&#160;<br/>subsection&#160;shall&#160;be&#160;known&#160;as&#160;the&#160;Boolean&#160;Amendment&#160;for&#160;ease&#160;of&#160;revision&#160;as&#160;may&#160;be&#160;warranted&#160;<br/>for&#160;future&#160;needs.&#160;This&#160;subsection&#160;is&#160;intertwined&#160;with&#160;the&#160;Section&#160;3&#160;of&#160;Article&#160;VI.&#160;Changes&#160;to&#160;the&#160;<br/>latter&#160;section&#160;must&#160;be&#160;in&#160;congruence&#160;with&#160;this&#160;subsection.&#160;</p>
<p style="position:absolute;top:227px;left:135px;white-space:nowrap" class="ft40">d)&#160;&#160;<i>Dijkstra&#160;clause.&#160;–&#160;</i>The&#160;Logistics&#160;Department&#160;shall&#160;be&#160;composed&#160;of&#160;the&#160;Chief&#160;Procurement&#160;Officer&#160;</p>
<p style="position:absolute;top:250px;left:162px;white-space:nowrap" class="ft43">(CPO),&#160;&#160;two&#160;&#160;Caloric&#160;&#160;Sustenance&#160;&#160;Provision&#160;&#160;(CSP)&#160;&#160;Officers,&#160;&#160;and&#160;&#160;two&#160;&#160;Equipment,&#160;&#160;Materials,&#160;&#160;and&#160;<br/>Facilities&#160;(EMF)&#160;Officers.&#160;Changes&#160;to&#160;this&#160;subsection&#160;shall&#160;be&#160;known&#160;as&#160;the&#160;Dijkstra&#160;Amendment&#160;<br/>for&#160;ease&#160;of&#160;revision&#160;as&#160;may&#160;be&#160;warranted&#160;for&#160;future&#160;needs.&#160;This&#160;subsection&#160;is&#160;intertwined&#160;with&#160;the&#160;<br/>Section&#160;4&#160;of&#160;Article&#160;VI.&#160;Changes&#160;to&#160;the&#160;latter&#160;section&#160;must&#160;be&#160;in&#160;congruence&#160;with&#160;this&#160;subsection.&#160;</p>
<p style="position:absolute;top:355px;left:108px;white-space:nowrap" class="ft43"><b>Section&#160;3.&#160;</b><i>Berners-Lee&#160;clause.&#160;–&#160;</i>The&#160;Berners-Lee&#160;Committee&#160;will&#160;serve&#160;as&#160;the&#160;auditing&#160;and&#160;evaluative&#160;body&#160;<br/>of&#160;&#160;ACTIVE.&#160;&#160;Changes&#160;&#160;to&#160;&#160;this&#160;&#160;section,&#160;&#160;particularly&#160;&#160;in&#160;&#160;its&#160;&#160;membership,&#160;&#160;shall&#160;&#160;be&#160;&#160;called&#160;&#160;as&#160;&#160;the&#160;&#160;Berners-Lee&#160;<br/>Amendment&#160;for&#160;ease&#160;of&#160;revision&#160;as&#160;may&#160;be&#160;warranted&#160;for&#160;future&#160;needs.&#160;</p>
<p style="position:absolute;top:437px;left:135px;white-space:nowrap" class="ft40">a)&#160;&#160;The&#160;Berners-Lee&#160;Committee&#160;shall&#160;be&#160;comprised&#160;of&#160;the&#160;following&#160;ten&#160;(10)&#160;members:&#160;</p>
<p style="position:absolute;top:460px;left:181px;white-space:nowrap" class="ft40">i.&#160;</p>
<p style="position:absolute;top:460px;left:216px;white-space:nowrap" class="ft43">The&#160;Chairman&#160;of&#160;ACTIVE,&#160;which&#160;is&#160;the&#160;default&#160;position&#160;reserved&#160;for&#160;the&#160;Moderator&#160;of&#160;the&#160;<br/>Organization;&#160;</p>
<p style="position:absolute;top:506px;left:177px;white-space:nowrap" class="ft40">ii.&#160;</p>
<p style="position:absolute;top:506px;left:216px;white-space:nowrap" class="ft43">The&#160;Co-Chairman&#160;of&#160;ACTIVE,&#160;which&#160;is&#160;the&#160;default&#160;position&#160;reserved&#160;for&#160;the&#160;Chairperson&#160;of&#160;<br/>HCDC’S&#160;BS&#160;Computer&#160;Engineering&#160;Undergraduate&#160;Program;&#160;</p>
<p style="position:absolute;top:553px;left:174px;white-space:nowrap" class="ft40">iii.&#160;</p>
<p style="position:absolute;top:553px;left:216px;white-space:nowrap" class="ft44">The&#160;Dean&#160;of&#160;the&#160;College&#160;of&#160;Engineering&#160;and&#160;Technology,&#160;or&#160;the&#160;OIC,&#160;whenever&#160;it&#160;is&#160;<i>tempus&#160;<br/>sede&#160;vacante</i>;&#160;</p>
<p style="position:absolute;top:599px;left:174px;white-space:nowrap" class="ft40">iv.&#160;</p>
<p style="position:absolute;top:599px;left:216px;white-space:nowrap" class="ft43">The&#160;Former&#160;CEO,&#160;COO,&#160;CDO,&#160;or&#160;CFO&#160;of&#160;ACTIVE&#160;(President,&#160;Vice-President,&#160;Secretary,&#160;or&#160;<br/>Treasurer&#160;of&#160;ACES);&#160;</p>
<p style="position:absolute;top:645px;left:178px;white-space:nowrap" class="ft40">v.&#160;</p>
<p style="position:absolute;top:645px;left:216px;white-space:nowrap" class="ft40">The&#160;Current&#160;CEO&#160;of&#160;ACTIVE;&#160;</p>
<p style="position:absolute;top:669px;left:174px;white-space:nowrap" class="ft40">vi.&#160;</p>
<p style="position:absolute;top:669px;left:216px;white-space:nowrap" class="ft43">2&#160;HCDC&#160;BS&#160;Computer&#160;Engineering&#160;College&#160;Professors&#160;(full-time&#160;or&#160;part-time)&#160;not&#160;currently&#160;<br/>holding&#160;&#160;any&#160;&#160;of&#160;&#160;the&#160;&#160;following&#160;&#160;positions:&#160;&#160;Dean&#160;&#160;of&#160;&#160;CET,&#160;&#160;BS&#160;&#160;CpE&#160;&#160;Chairperson,&#160;&#160;ACTIVE&#160;<br/>Moderator;&#160;</p>
<p style="position:absolute;top:738px;left:170px;white-space:nowrap" class="ft40">vii.&#160;</p>
<p style="position:absolute;top:738px;left:216px;white-space:nowrap" class="ft43">3&#160;HCDC&#160;BS&#160;Computer&#160;Engineering&#160;alumni&#160;working&#160;in&#160;the&#160;technological&#160;industry&#160;sector&#160;that&#160;<br/>may&#160;be,&#160;but&#160;preferably&#160;not,&#160;members&#160;of&#160;the&#160;HCDC&#160;BS&#160;CpE&#160;Faculty.&#160;</p>
<p style="position:absolute;top:796px;left:108px;white-space:nowrap" class="ft43"><b>Section&#160;&#160;4.&#160;&#160;</b><i>Torvalds&#160;&#160;clause.&#160;&#160;–&#160;&#160;</i>A&#160;&#160;committee&#160;&#160;for&#160;&#160;special&#160;&#160;purposes&#160;&#160;and&#160;&#160;it&#160;&#160;shall&#160;&#160;be&#160;&#160;called&#160;&#160;the&#160;&#160;Torvalds&#160;<br/>Committee.&#160;Changes&#160;to&#160;this&#160;section&#160;shall&#160;be&#160;known&#160;as&#160;the&#160;Torvalds&#160;Amendment&#160;for&#160;ease&#160;of&#160;revision&#160;as&#160;<br/>may&#160;be&#160;warranted&#160;for&#160;future&#160;needs.&#160;</p>
<p style="position:absolute;top:878px;left:135px;white-space:nowrap" class="ft40">a)&#160;&#160;The&#160;committee&#160;shall&#160;be&#160;comprised&#160;of&#160;point&#160;persons&#160;who&#160;are&#160;well-known&#160;experts&#160;in&#160;their&#160;craft&#160;and&#160;</p>
<p style="position:absolute;top:901px;left:162px;white-space:nowrap" class="ft43">shall&#160;lead&#160;or&#160;serve&#160;as&#160;student&#160;consultants&#160;for&#160;events&#160;or&#160;activities&#160;when&#160;their&#160;expertise&#160;is&#160;needed.&#160;<br/>They&#160;may&#160;be&#160;members&#160;of&#160;the&#160;von&#160;Neumann&#160;Committee.&#160;These&#160;positions&#160;may&#160;not&#160;be&#160;filled&#160;but&#160;it&#160;<br/>is&#160;best&#160;that&#160;they&#160;are.&#160;</p>
<p style="position:absolute;top:970px;left:135px;white-space:nowrap" class="ft40">b)&#160;&#160;The&#160;following&#160;are&#160;the&#160;positions&#160;included&#160;in&#160;the&#160;Committee&#160;for&#160;Special&#160;Purposes:&#160;</p>
<p style="position:absolute;top:994px;left:181px;white-space:nowrap" class="ft40">i.&#160;</p>
<p style="position:absolute;top:994px;left:216px;white-space:nowrap" class="ft40">One&#160;(1)&#160;Chief&#160;Creative&#160;Officer&#160;(CCO)&#160;</p>
<p style="position:absolute;top:1017px;left:177px;white-space:nowrap" class="ft40">ii.&#160;</p>
<p style="position:absolute;top:1017px;left:216px;white-space:nowrap" class="ft40">One&#160;(1)&#160;Chief&#160;Algorithms&#160;and&#160;Networks&#160;Officer&#160;(CANO)&#160;</p>
<p style="position:absolute;top:1040px;left:174px;white-space:nowrap" class="ft40">iii.&#160;</p>
<p style="position:absolute;top:1040px;left:216px;white-space:nowrap" class="ft40">Two&#160;(2)&#160;Robotics&#160;and&#160;Embedded&#160;Systems&#160;Experts&#160;(RESEs)&#160;</p>
<p style="position:absolute;top:1063px;left:174px;white-space:nowrap" class="ft40">iv.&#160;</p>
<p style="position:absolute;top:1063px;left:216px;white-space:nowrap" class="ft40">One&#160;(1)&#160;Digital&#160;Electronics&#160;Consultant&#160;(DEC)&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft50{font-size:14px;font-family:Times;color:#000000;}
	.ft51{font-size:14px;font-family:Times;color:#000000;}
	.ft52{font-size:14px;font-family:Times;color:#000000;}
	.ft53{font-size:8px;font-family:Times;color:#000000;}
	.ft54{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page5-div" style="position:relative;width:918px;height:1188px; margin-left:15%;">
<img width="918" height="1188" src="{{asset('images/target005.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:178px;white-space:nowrap" class="ft50">v.&#160;</p>
<p style="position:absolute;top:111px;left:216px;white-space:nowrap" class="ft50">One&#160;(1)&#160;Analog&#160;Electronics&#160;Consultant&#160;(AEC)&#160;</p>
<p style="position:absolute;top:134px;left:174px;white-space:nowrap" class="ft50">vi.&#160;</p>
<p style="position:absolute;top:134px;left:216px;white-space:nowrap" class="ft50">One&#160;(1)&#160;Head&#160;of&#160;Digital&#160;Arts&#160;(HDA)&#160;</p>
<p style="position:absolute;top:158px;left:170px;white-space:nowrap" class="ft50">vii.&#160;</p>
<p style="position:absolute;top:158px;left:216px;white-space:nowrap" class="ft50">One&#160;(1)&#160;Photography&#160;Team&#160;Lead&#160;(PTL)&#160;</p>
<p style="position:absolute;top:181px;left:166px;white-space:nowrap" class="ft50">viii.&#160;</p>
<p style="position:absolute;top:181px;left:216px;white-space:nowrap" class="ft50">Two&#160;(2)&#160;Coordinators&#160;of&#160;Sports&#160;(CoS)&#160;</p>
<p style="position:absolute;top:204px;left:174px;white-space:nowrap" class="ft50">ix.&#160;</p>
<p style="position:absolute;top:204px;left:216px;white-space:nowrap" class="ft50">One&#160;(1)&#160;Master&#160;of&#160;Choreography&#160;(MoC)&#160;</p>
<p style="position:absolute;top:227px;left:178px;white-space:nowrap" class="ft50">x.&#160;</p>
<p style="position:absolute;top:227px;left:216px;white-space:nowrap" class="ft50">One&#160;(1)&#160;Musical&#160;Instruments&#160;Director&#160;(MID)&#160;</p>
<p style="position:absolute;top:251px;left:174px;white-space:nowrap" class="ft50">xi.&#160;</p>
<p style="position:absolute;top:251px;left:216px;white-space:nowrap" class="ft50">One&#160;(1)&#160;Director&#160;of&#160;Vocals&#160;(DoV)&#160;</p>
<p style="position:absolute;top:286px;left:108px;white-space:nowrap" class="ft51"><b>Section&#160;5.</b>&#160;The&#160;ACTIVE&#160;headquarters&#160;shall&#160;be&#160;the&#160;area&#160;beside&#160;the&#160;office&#160;of&#160;the&#160;BS&#160;CpE&#160;Program&#160;Chairperson.&#160;&#160;</p>
<p style="position:absolute;top:321px;left:425px;white-space:nowrap" class="ft51"><b>ARTICLE&#160;V&#160;</b></p>
<p style="position:absolute;top:356px;left:263px;white-space:nowrap" class="ft50">ELECTION&#160;OF&#160;THE&#160;VON&#160;NEUMMAN&#160;COMMITTEE&#160;OFFICIALS&#160;</p>
<p style="position:absolute;top:392px;left:108px;white-space:nowrap" class="ft51"><b>Section&#160;1.</b>&#160;<i>Rules&#160;Governing&#160;Election.</i>&#160;</p>
<p style="position:absolute;top:426px;left:135px;white-space:nowrap" class="ft50">a)&#160;&#160;Date&#160;and&#160;Place&#160;of&#160;Election.&#160;The&#160;election&#160;of&#160;the&#160;von&#160;Neumann&#160;Committee&#160;Officials&#160;shall&#160;be&#160;held&#160;on&#160;</p>
<p style="position:absolute;top:450px;left:162px;white-space:nowrap" class="ft50">the&#160;last&#160;Monday&#160;of&#160;February&#160;in&#160;any&#160;fifth&#160;(5</p>
<p style="position:absolute;top:448px;left:442px;white-space:nowrap" class="ft53">th</p>
<p style="position:absolute;top:450px;left:451px;white-space:nowrap" class="ft50">)&#160;floor&#160;room&#160;of&#160;Capalla&#160;Hall&#160;Building&#160;(CH&#160;501&#160;[formerly&#160;</p>
<p style="position:absolute;top:473px;left:162px;white-space:nowrap" class="ft50">CH&#160;504],&#160;CH&#160;502&#160;[formerly&#160;CH&#160;503],&#160;or&#160;CH&#160;504&#160;[formerly&#160;CH&#160;501]).&#160;&#160;</p>
<p style="position:absolute;top:496px;left:135px;white-space:nowrap" class="ft54">b)&#160;&#160;The&#160;vote&#160;of&#160;a&#160;member&#160;is&#160;a&#160;REQUIREMENT&#160;for&#160;the&#160;signing&#160;of&#160;clearance.&#160;<br/>c)&#160;&#160;The&#160;&#160;Electoral&#160;&#160;Commission&#160;&#160;shall&#160;&#160;be&#160;&#160;composed&#160;&#160;of&#160;&#160;the&#160;&#160;von&#160;&#160;Neumann&#160;&#160;Committee&#160;&#160;Officials,&#160;&#160;the&#160;</p>
<p style="position:absolute;top:542px;left:162px;white-space:nowrap" class="ft54">program&#160;&#160;chairpersons&#160;&#160;of&#160;&#160;the&#160;&#160;College&#160;&#160;of&#160;&#160;Engineering&#160;&#160;and&#160;&#160;Technology&#160;&#160;(CET),&#160;&#160;the&#160;&#160;Chairman&#160;&#160;of&#160;<br/>ACTIVE&#160;(the&#160;Organizational&#160;Moderator),&#160;and&#160;the&#160;Dean&#160;of&#160;CET.&#160;</p>
<p style="position:absolute;top:589px;left:135px;white-space:nowrap" class="ft50">d)&#160;&#160;The&#160;&#160;Electoral&#160;&#160;Commission&#160;&#160;shall&#160;&#160;be&#160;&#160;responsible&#160;&#160;for&#160;&#160;the&#160;&#160;determination&#160;&#160;of&#160;&#160;the&#160;&#160;date&#160;&#160;of&#160;&#160;filing&#160;&#160;of&#160;</p>
<p style="position:absolute;top:612px;left:162px;white-space:nowrap" class="ft54">candidacy,&#160;&#160;scheduling&#160;&#160;of&#160;&#160;the&#160;&#160;date&#160;&#160;of&#160;&#160;election,&#160;&#160;preparation&#160;&#160;of&#160;&#160;election&#160;&#160;venue,&#160;&#160;and&#160;&#160;the&#160;&#160;actual&#160;<br/>conduct&#160;of&#160;the&#160;election.&#160;</p>
<p style="position:absolute;top:658px;left:135px;white-space:nowrap" class="ft50">e)&#160;&#160;All&#160;bona&#160;fide&#160;Bachelor&#160;of&#160;Science&#160;in&#160;Computer&#160;Engineering&#160;students&#160;have&#160;the&#160;right&#160;to&#160;vote.&#160;</p>
<p style="position:absolute;top:693px;left:108px;white-space:nowrap" class="ft54"><b>Section&#160;2.</b>&#160;<i>Eligibility&#160;of&#160;Candidacy.</i>&#160;A&#160;bona&#160;fide&#160;Bachelor&#160;of&#160;Science&#160;in&#160;Computer&#160;Engineering&#160;aspiring&#160;von&#160;<br/>Neumann&#160;Committee&#160;Official&#160;must:&#160;</p>
<p style="position:absolute;top:752px;left:135px;white-space:nowrap" class="ft54">a)&#160;&#160;Have&#160;a&#160;good&#160;moral&#160;character;&#160;<br/>b)&#160;&#160;Be&#160;physically,&#160;mentally,&#160;psychologically,&#160;and&#160;emotionally&#160;fit;&#160;<br/>c)&#160;&#160;Not&#160;&#160;be&#160;&#160;a&#160;&#160;president,&#160;&#160;vice&#160;&#160;president,&#160;&#160;secretary,&#160;&#160;and/or&#160;&#160;treasurer&#160;&#160;to&#160;&#160;any&#160;&#160;co-curricular&#160;&#160;or&#160;&#160;extra-</p>
<p style="position:absolute;top:822px;left:162px;white-space:nowrap" class="ft50">curricular&#160;organizations&#160;of&#160;the&#160;Holy&#160;Cross&#160;of&#160;Davao&#160;College,&#160;Inc.&#160;</p>
<p style="position:absolute;top:856px;left:108px;white-space:nowrap" class="ft54"><b>Section&#160;3.</b>&#160;<i>Failure&#160;of&#160;Election.</i>&#160;–<i>&#160;</i>The&#160;election&#160;is&#160;considered&#160;a&#160;failure&#160;if&#160;the&#160;positions&#160;of&#160;CEO,&#160;COO,&#160;CDO,&#160;and&#160;<br/>CFO&#160;are&#160;not&#160;filled&#160;as&#160;set&#160;by&#160;the&#160;Electoral&#160;Commission.&#160;</p>
<p style="position:absolute;top:915px;left:108px;white-space:nowrap" class="ft51"><b>Section&#160;4.</b>&#160;<i>Appointment&#160;of&#160;von&#160;Neumann&#160;Officials.&#160;</i>–&#160;The&#160;officials&#160;can&#160;be&#160;appointed.&#160;</p>
<p style="position:absolute;top:950px;left:135px;white-space:nowrap" class="ft50">a)&#160;&#160;In&#160;case&#160;of&#160;failure&#160;of&#160;election,&#160;the&#160;ACTIVE&#160;Chairman&#160;(Organizational&#160;Moderator),&#160;the&#160;ACTIVE&#160;Co-</p>
<p style="position:absolute;top:973px;left:162px;white-space:nowrap" class="ft54">Chairman&#160;(BS&#160;CpE&#160;Program&#160;Chairperson),&#160;and&#160;the&#160;Dean&#160;of&#160;CET&#160;can&#160;appoint&#160;any&#160;bona&#160;fide&#160;BS&#160;CpE&#160;<br/>student&#160;to&#160;be&#160;von&#160;Neumann&#160;Officials&#160;provided&#160;that&#160;the&#160;appointment&#160;must&#160;be&#160;duly&#160;recognized,&#160;<br/>approved,&#160;and&#160;signed&#160;by&#160;the&#160;ACTIVE&#160;Chairman,&#160;the&#160;ACTIVE&#160;Co-Chairman,&#160;and&#160;the&#160;Dean&#160;of&#160;CET.&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft60{font-size:14px;font-family:Times;color:#000000;}
	.ft61{font-size:14px;font-family:Times;color:#000000;}
	.ft62{font-size:14px;font-family:Times;color:#000000;}
	.ft63{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page6-div" style="position:relative;width:918px;height:1188px;margin-left:15%;">
<img width="918" height="1188" src="{{asset('images/target006.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:135px;white-space:nowrap" class="ft60">b)&#160;&#160;In&#160;case&#160;of&#160;vacant&#160;positions,&#160;the&#160;CEO&#160;can&#160;appoint&#160;[a]&#160;bona&#160;fide&#160;BS&#160;CpE&#160;student(s)&#160;to&#160;fill&#160;the&#160;vacant&#160;</p>
<p style="position:absolute;top:134px;left:162px;white-space:nowrap" class="ft63">position(s)&#160;provided&#160;that&#160;the&#160;appointment&#160;must&#160;be&#160;duly&#160;recognized,&#160;approved,&#160;and&#160;signed&#160;by&#160;the&#160;<br/>ACTIVE&#160;Chairman,&#160;the&#160;ACTIVE&#160;Co-Chairman,&#160;and&#160;the&#160;Dean&#160;of&#160;CET.&#160;</p>
<p style="position:absolute;top:181px;left:135px;white-space:nowrap" class="ft60">c)&#160;&#160;In&#160;case&#160;the&#160;positions&#160;of&#160;CEO,&#160;COO,&#160;CDO,&#160;and&#160;CFO&#160;are&#160;vacant,&#160;the&#160;ACTIVE&#160;Chairman&#160;can&#160;appoint&#160;[a]&#160;</p>
<p style="position:absolute;top:204px;left:162px;white-space:nowrap" class="ft63">bona&#160;fide&#160;BS&#160;CpE&#160;student(s)&#160;to&#160;become&#160;the&#160;CEO,&#160;COO,&#160;CDO,&#160;and&#160;CFO&#160;of&#160;ACTIVE&#160;provided&#160;that&#160;the&#160;<br/>appointment&#160;must&#160;be&#160;duly&#160;recognized,&#160;approved,&#160;and&#160;signed&#160;by&#160;the&#160;ACTIVE&#160;Chairman,&#160;the&#160;ACTIVE&#160;<br/>Co-Chairman,&#160;and&#160;the&#160;Dean&#160;of&#160;CET.&#160;</p>
<p style="position:absolute;top:286px;left:135px;white-space:nowrap" class="ft60">&#160;</p>
<p style="position:absolute;top:321px;left:422px;white-space:nowrap" class="ft61"><b>ARTICLE&#160;VI&#160;</b></p>
<p style="position:absolute;top:356px;left:193px;white-space:nowrap" class="ft60">DUTIES&#160;AND&#160;RESPONSIBILITIES&#160;OF&#160;THE&#160;VON&#160;NEUMMAN&#160;COMMITTEE&#160;OFFICIALS&#160;</p>
<p style="position:absolute;top:391px;left:108px;white-space:nowrap" class="ft63"><b>Section&#160;1.</b>&#160;<i>Executive&#160;Department&#160;Duties.&#160;</i>-&#160;The&#160;Turing&#160;clause&#160;or&#160;Article&#160;IV&#160;Section&#160;2&#160;Subsection&#160;A&#160;of&#160;this&#160;Act&#160;<br/>serves&#160;to&#160;provide&#160;as&#160;the&#160;basis&#160;for&#160;the&#160;creation&#160;of&#160;the&#160;Executive&#160;Department&#160;which&#160;shall&#160;be&#160;known&#160;as&#160;the&#160;<br/>Turing&#160;subcommittee.&#160;The&#160;functions&#160;of&#160;the&#160;Turing&#160;subcommittee&#160;members&#160;are&#160;described&#160;as&#160;follows:&#160;</p>
<p style="position:absolute;top:473px;left:135px;white-space:nowrap" class="ft60">a)&#160;&#160;<b>Chief&#160;Executive&#160;Officer&#160;(CEO).</b>&#160;The&#160;chief&#160;executive&#160;officer&#160;(CEO)&#160;or&#160;just&#160;chief&#160;executive&#160;(CE),&#160;is&#160;the&#160;</p>
<p style="position:absolute;top:496px;left:162px;white-space:nowrap" class="ft63">most&#160;senior&#160;corporate,&#160;executive,&#160;or&#160;administrative&#160;officer&#160;in&#160;charge&#160;of&#160;managing&#160;ACTIVE.&#160;The&#160;CEO&#160;<br/>of&#160;ACTIVE&#160;typically&#160;reports&#160;to&#160;the&#160;board&#160;of&#160;directors&#160;and&#160;is&#160;charged&#160;with&#160;maximizing&#160;the&#160;value&#160;of&#160;<br/>the&#160;&#160;entity,&#160;&#160;which&#160;&#160;in&#160;&#160;this&#160;&#160;case&#160;&#160;includes&#160;&#160;the&#160;&#160;strong&#160;&#160;implementation&#160;&#160;of&#160;&#160;organizational&#160;&#160;culture&#160;&#160;of&#160;<br/>Computer&#160;Engineering&#160;academic&#160;and&#160;professional&#160;excellence&#160;via&#160;the&#160;linkages&#160;built&#160;from&#160;privately&#160;<br/>held&#160;industrial/technological&#160;and&#160;not-for-profit&#160;educational/research&#160;institutions&#160;and&#160;through&#160;the&#160;<br/>assistance&#160;of&#160;HCDC&#160;BS&#160;CpE&#160;alumni,&#160;the&#160;provision&#160;of&#160;both&#160;tech&#160;and&#160;soft&#160;skills&#160;lectures&#160;and&#160;trainings&#160;<br/>via&#160;partner&#160;institutions&#160;and&#160;thru&#160;renowned&#160;field&#160;experts&#160;for&#160;the&#160;BS&#160;CpE&#160;studentry,&#160;and&#160;the&#160;overall&#160;<br/>management&#160;of&#160;HCDC&#160;CET&#160;and&#160;ACTIVE&#160;events&#160;and&#160;ICPEP&#160;Regional&#160;and&#160;National&#160;competitions&#160;and&#160;<br/>seminars,&#160;among&#160;others.&#160;</p>
<p style="position:absolute;top:705px;left:135px;white-space:nowrap" class="ft60">b)&#160;&#160;<b>Chief&#160;Operating&#160;Officer&#160;(COO)</b>.&#160;At&#160;the&#160;direction&#160;of&#160;the&#160;CEO&#160;and&#160;Board&#160;of&#160;Directors,&#160;the&#160;chief&#160;of&#160;</p>
<p style="position:absolute;top:728px;left:162px;white-space:nowrap" class="ft63">operating&#160;officer&#160;(COO)&#160;marshals&#160;limited&#160;resources&#160;to&#160;the&#160;most&#160;productive&#160;uses&#160;with&#160;the&#160;aim&#160;of&#160;<br/>creating&#160;&#160;maximum&#160;&#160;value&#160;&#160;for&#160;&#160;the&#160;&#160;company's&#160;&#160;stakeholders,&#160;&#160;develops&#160;&#160;and&#160;&#160;cascades&#160;&#160;the&#160;<br/>organization's&#160;&#160;strategy/mission&#160;&#160;statement&#160;&#160;to&#160;&#160;the&#160;&#160;lower-ranking&#160;&#160;staff,&#160;&#160;and&#160;&#160;implements&#160;<br/>appropriate&#160;&#160;rewards/recognition&#160;&#160;and&#160;&#160;coaching/corrective&#160;&#160;practices&#160;&#160;to&#160;&#160;align&#160;&#160;personnel&#160;&#160;with&#160;<br/>company&#160;goals&#160;and&#160;drives&#160;performance&#160;measures&#160;for&#160;the&#160;operation&#160;(including&#160;a&#160;consideration&#160;of&#160;<br/>efficiency&#160;versus&#160;effectiveness),&#160;often&#160;in&#160;the&#160;form&#160;of&#160;dashboards&#160;convenient&#160;for&#160;review&#160;of&#160;high&#160;<br/>level&#160;key&#160;indicators.&#160;As&#160;a&#160;corporate&#160;officer&#160;position,&#160;the&#160;COO&#160;reports&#160;directly&#160;to&#160;the&#160;CEO.&#160;</p>
<p style="position:absolute;top:890px;left:135px;white-space:nowrap" class="ft60">c)&#160;&#160;<b>External&#160;Affairs&#160;Vice&#160;President&#160;(EAVP).&#160;</b>The&#160;external&#160;affairs&#160;vice&#160;president&#160;(EAVP)&#160;is&#160;the&#160;executive&#160;</p>
<p style="position:absolute;top:913px;left:162px;white-space:nowrap" class="ft63">serving&#160;as&#160;the&#160;&#160;liaison&#160;between&#160;other&#160;academic&#160;institutions&#160;within&#160;Region&#160;XI&#160;or&#160;any&#160;part&#160;of&#160;the&#160;<br/>Philippines&#160;&#160;with&#160;&#160;Computer&#160;&#160;Engineering&#160;&#160;programs&#160;&#160;(MCM,&#160;&#160;AdDU,&#160;&#160;UIC,&#160;&#160;AMA,&#160;&#160;UM,&#160;&#160;DLSU,&#160;&#160;Mapua&#160;<br/>University,&#160;&#160;AdMU,&#160;&#160;et&#160;&#160;al)&#160;&#160;and&#160;&#160;the&#160;&#160;BS&#160;&#160;CpE&#160;&#160;program&#160;&#160;of&#160;&#160;the&#160;&#160;Holy&#160;&#160;Cross&#160;&#160;of&#160;&#160;Davao&#160;&#160;College,&#160;&#160;Inc.&#160;<br/>Additionally,&#160;the&#160;EAVP&#160;is&#160;the&#160;official&#160;executive&#160;representative&#160;for&#160;any&#160;HCDC&#160;event&#160;that&#160;is&#160;not&#160;under&#160;<br/>the&#160;Computer&#160;Engineering&#160;program&#160;(i.e.,&#160;events&#160;called&#160;for&#160;by&#160;the&#160;HCDC&#160;SSG,&#160;HOR,&#160;OSA,&#160;et&#160;al).&#160;As&#160;<br/>a&#160;&#160;corporate&#160;&#160;strategy&#160;&#160;position,&#160;&#160;the&#160;&#160;EAVP&#160;&#160;reports&#160;&#160;directly&#160;&#160;to&#160;&#160;the&#160;&#160;CEO.&#160;&#160;International&#160;&#160;liaising&#160;<br/>procedures&#160;are&#160;a&#160;default&#160;hand-over&#160;to&#160;the&#160;CEO.&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft70{font-size:14px;font-family:Times;color:#000000;}
	.ft71{font-size:14px;font-family:Times;color:#000000;}
	.ft72{font-size:14px;font-family:Times;color:#000000;}
	.ft73{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page7-div" style="position:relative;width:918px;height:1188px;margin-left:15%;">
<img width="918" height="1188" src="{{ asset('images/target007.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:108px;white-space:nowrap" class="ft73"><b>Section&#160;2.</b>&#160;<i>Information&#160;Department&#160;Duties.&#160;</i>-&#160;The&#160;Shannon&#160;clause&#160;or&#160;Article&#160;IV&#160;Section&#160;2&#160;Subsection&#160;B&#160;of&#160;<br/>this&#160;Act&#160;&#160;serves&#160;&#160;to&#160;provide&#160;&#160;as&#160;the&#160;&#160;basis&#160;for&#160;the&#160;creation&#160;of&#160;&#160;the&#160;&#160;Information&#160;&#160;Department&#160;which&#160;shall&#160;be&#160;<br/>known&#160;&#160;as&#160;&#160;the&#160;&#160;Shannon&#160;&#160;subcommittee.&#160;&#160;The&#160;&#160;functions&#160;&#160;of&#160;&#160;the&#160;&#160;Shannon&#160;&#160;subcommittee&#160;&#160;members&#160;&#160;are&#160;<br/>described&#160;as&#160;follows:&#160;</p>
<p style="position:absolute;top:216px;left:135px;white-space:nowrap" class="ft71">a)&#160;&#160;<b>Chief&#160;Data&#160;Officer&#160;(CDO)</b>.&#160;The&#160;chief&#160;data&#160;officer&#160;(CDO)&#160;is&#160;responsible&#160;for&#160;governance&#160;and&#160;utilization&#160;</p>
<p style="position:absolute;top:239px;left:162px;white-space:nowrap" class="ft73">of&#160;information&#160;as&#160;an&#160;asset,&#160;via&#160;data&#160;processing,&#160;analysis,&#160;data&#160;mining,&#160;information&#160;trading&#160;and&#160;<br/>other&#160;means.&#160;As&#160;a&#160;corporate&#160;officer&#160;position,&#160;the&#160;CDO&#160;reports&#160;directly&#160;to&#160;the&#160;CEO.&#160;</p>
<p style="position:absolute;top:286px;left:135px;white-space:nowrap" class="ft71">b)&#160;&#160;<b>Chief&#160;Web&#160;Officer&#160;(CWO)</b>.&#160;The&#160;chief&#160;web&#160;officer&#160;(CWO)&#160;is&#160;the&#160;highest-ranking&#160;corporate&#160;officer&#160;</p>
<p style="position:absolute;top:309px;left:162px;white-space:nowrap" class="ft73">(executive)&#160;in&#160;charge&#160;&#160;of&#160;ACTIVE's&#160;Web&#160;presence,&#160;including&#160;all&#160;internet&#160;and&#160;intranet&#160;sites.&#160;As&#160;a&#160;<br/>corporate&#160;&#160;officer&#160;&#160;position,&#160;the&#160;&#160;CWO&#160;reports&#160;directly&#160;to&#160;the&#160;&#160;CEO.&#160;A&#160;CWO&#160;will&#160;generally&#160;be&#160;&#160;very&#160;<br/>skilled&#160;with&#160;HTML,&#160;CSS,&#160;Javascript,&#160;PHP,&#160;ASP,&#160;SQL,&#160;et&#160;cetera.&#160;</p>
<p style="position:absolute;top:378px;left:135px;white-space:nowrap" class="ft71">c)&#160;&#160;<b>Chief&#160;Marketing&#160;Officer&#160;(CMO)</b>.&#160;The&#160;chief&#160;marketing&#160;officer&#160;(CMO)&#160;leads&#160;ACTIVE&#160;and&#160;HCDC&#160;BS&#160;CpE&#160;</p>
<p style="position:absolute;top:401px;left:162px;white-space:nowrap" class="ft73">brand&#160;&#160;management,&#160;&#160;marketing&#160;&#160;communications&#160;&#160;(including&#160;&#160;advertising,&#160;&#160;promotions&#160;&#160;and&#160;&#160;public&#160;<br/>relations),&#160;and&#160;Computer&#160;Engineering&#160;market&#160;growth&#160;research.&#160;As&#160;a&#160;corporate&#160;officer&#160;position,&#160;<br/>the&#160;CMO&#160;reports&#160;directly&#160;to&#160;the&#160;CEO.&#160;</p>
<p style="position:absolute;top:483px;left:108px;white-space:nowrap" class="ft73"><b>Section&#160;3.</b>&#160;<i>Finance&#160;Department&#160;Duties.&#160;</i>-&#160;The&#160;Boolean&#160;clause&#160;or&#160;Article&#160;IV&#160;Section&#160;2&#160;Subsection&#160;C&#160;of&#160;this&#160;Act&#160;<br/>serves&#160;to&#160;provide&#160;as&#160;the&#160;basis&#160;for&#160;the&#160;creation&#160;of&#160;the&#160;Finance&#160;Department&#160;which&#160;shall&#160;be&#160;known&#160;as&#160;the&#160;<br/>Boolean&#160;subcommittee.&#160;The&#160;functions&#160;of&#160;the&#160;Boolean&#160;subcommittee&#160;members&#160;are&#160;described&#160;as&#160;follows:&#160;</p>
<p style="position:absolute;top:564px;left:135px;white-space:nowrap" class="ft71">a)&#160;&#160;<b>Chief&#160;&#160;Financial&#160;&#160;Officer&#160;&#160;(CFO).&#160;&#160;</b>The&#160;&#160;chief&#160;&#160;financial&#160;&#160;officer&#160;&#160;(CFO)&#160;&#160;has&#160;&#160;primary&#160;&#160;responsibility&#160;&#160;for&#160;</p>
<p style="position:absolute;top:588px;left:162px;white-space:nowrap" class="ft73">managing&#160;&#160;the&#160;&#160;ACTIVE’s&#160;&#160;finances,&#160;&#160;including&#160;&#160;financial&#160;&#160;planning,&#160;&#160;management&#160;&#160;of&#160;&#160;financial&#160;&#160;risks,&#160;<br/>record-keeping,&#160;and&#160;financial&#160;reporting.&#160;The&#160;CFO&#160;directly&#160;assists&#160;the&#160;chief&#160;operating&#160;officer&#160;(COO)&#160;<br/>on&#160;&#160;all&#160;&#160;strategic&#160;&#160;and&#160;&#160;tactical&#160;&#160;matters&#160;&#160;relating&#160;&#160;to&#160;&#160;budget&#160;&#160;management,&#160;&#160;cost–benefit&#160;&#160;analysis,&#160;<br/>forecasting&#160;needs,&#160;and&#160;securing&#160;of&#160;new&#160;funding.&#160;As&#160;a&#160;corporate&#160;officer&#160;position,&#160;the&#160;CFO&#160;reports&#160;<br/>directly&#160;to&#160;the&#160;CEO.&#160;</p>
<p style="position:absolute;top:703px;left:135px;white-space:nowrap" class="ft71">b)&#160;&#160;<b>Deputy&#160;Financial&#160;Controller&#160;(DFC).</b>&#160;The&#160;deputy&#160;financial&#160;controller&#160;(DFC)&#160;is&#160;second-in-command&#160;</p>
<p style="position:absolute;top:727px;left:162px;white-space:nowrap" class="ft73">to&#160;&#160;the&#160;&#160;CFO.&#160;&#160;Like&#160;&#160;the&#160;&#160;CFO,&#160;&#160;the&#160;&#160;DFC&#160;&#160;is&#160;&#160;responsible&#160;&#160;for&#160;&#160;managing&#160;&#160;all&#160;&#160;finance&#160;&#160;and&#160;&#160;accounting&#160;<br/>operations,&#160;coordinating&#160;and&#160;directing&#160;the&#160;preparation&#160;of&#160;the&#160;budget&#160;and&#160;financial&#160;forecasts&#160;and&#160;<br/>report&#160;&#160;variances,&#160;&#160;and&#160;&#160;reporting&#160;&#160;and&#160;&#160;publishing&#160;&#160;timely&#160;&#160;monthly&#160;&#160;financial&#160;&#160;statements.&#160;&#160;The&#160;&#160;DFC&#160;<br/>directly&#160;reports&#160;to&#160;the&#160;CFO.&#160;</p>
<p style="position:absolute;top:819px;left:135px;white-space:nowrap" class="ft71">c)&#160;&#160;<b>Chief&#160;Audit&#160;Executive&#160;(CAE).&#160;</b>The&#160;primary&#160;role&#160;of&#160;the&#160;chief&#160;audit&#160;executive&#160;(CAE)&#160;is&#160;to&#160;express&#160;an&#160;</p>
<p style="position:absolute;top:842px;left:162px;white-space:nowrap" class="ft73">opinion&#160;on&#160;the&#160;fairness&#160;of&#160;the&#160;financial&#160;statements&#160;with&#160;which&#160;he&#160;presents,&#160;in&#160;all&#160;material&#160;respects,&#160;<br/>financial&#160;position,&#160;results&#160;of&#160;operations,&#160;and&#160;its&#160;cash&#160;flows&#160;in&#160;conformity&#160;with&#160;generally&#160;accepted&#160;<br/>accounting&#160;principles.&#160;The&#160;auditor's&#160;report&#160;is&#160;the&#160;medium&#160;through&#160;which&#160;he&#160;expresses&#160;his&#160;opinion&#160;<br/>or,&#160;if&#160;circumstances&#160;require,&#160;disclaims&#160;an&#160;opinion.&#160;In&#160;either&#160;case,&#160;he&#160;states&#160;whether&#160;his&#160;audit&#160;has&#160;<br/>been&#160;made&#160;in&#160;accordance&#160;with&#160;generally&#160;accepted&#160;auditing&#160;standards.&#160;These&#160;standards&#160;require&#160;<br/>him&#160;to&#160;state&#160;whether,&#160;in&#160;his&#160;opinion,&#160;the&#160;financial&#160;statements&#160;are&#160;presented&#160;in&#160;conformity&#160;with&#160;<br/>generally&#160;&#160;accepted&#160;&#160;accounting&#160;&#160;principles&#160;&#160;and&#160;&#160;to&#160;&#160;identify&#160;&#160;those&#160;&#160;circumstances&#160;&#160;in&#160;&#160;which&#160;&#160;such&#160;<br/>principles&#160;have&#160;not&#160;been&#160;consistently&#160;observed&#160;in&#160;the&#160;preparation&#160;of&#160;the&#160;financial&#160;statements&#160;of&#160;<br/>the&#160;current&#160;period&#160;in&#160;relation&#160;to&#160;those&#160;of&#160;the&#160;preceding&#160;period.&#160;The&#160;CAE&#160;reports&#160;directly&#160;to&#160;the&#160;<br/>Chairman&#160;and/or&#160;Co-Chairman.&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft80{font-size:14px;font-family:Times;color:#000000;}
	.ft81{font-size:14px;font-family:Times;color:#000000;}
	.ft82{font-size:14px;font-family:Times;color:#000000;}
	.ft83{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page8-div" style="position:relative;width:918px;height:1188px;margin-left:15%;">
<img width="918" height="1188" src="{{asset('images/target008.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:108px;white-space:nowrap" class="ft83"><b>Section&#160;4.</b>&#160;<i>Logistics&#160;Department&#160;Duties.&#160;</i>-&#160;The&#160;Dijkstra&#160;clause&#160;or&#160;Article&#160;IV&#160;Section&#160;2&#160;Subsection&#160;D&#160;of&#160;this&#160;Act&#160;<br/>serves&#160;to&#160;provide&#160;as&#160;the&#160;basis&#160;for&#160;the&#160;creation&#160;of&#160;the&#160;Logistics&#160;Department&#160;which&#160;shall&#160;be&#160;known&#160;as&#160;the&#160;<br/>Dijkstra&#160;subcommittee.&#160;The&#160;functions&#160;of&#160;the&#160;Dijkstra&#160;subcommittee&#160;members&#160;are&#160;described&#160;as&#160;follows:&#160;</p>
<p style="position:absolute;top:193px;left:135px;white-space:nowrap" class="ft81">a)&#160;&#160;<b>Chief&#160;Procurement&#160;Officer&#160;(CPO).&#160;</b>The&#160;chief&#160;procurement&#160;officer&#160;(CPO)&#160;is&#160;in&#160;charge&#160;of&#160;managing&#160;</p>
<p style="position:absolute;top:216px;left:162px;white-space:nowrap" class="ft83">the&#160;purchase&#160;of&#160;supplies,&#160;equipment,&#160;and&#160;materials.&#160;It&#160;is&#160;the&#160;CPO's&#160;responsibility&#160;to&#160;source&#160;goods&#160;<br/>and&#160;services&#160;and&#160;to&#160;negotiate&#160;prices&#160;and&#160;contracts.&#160;As&#160;a&#160;corporate&#160;officer&#160;position,&#160;the&#160;CPO&#160;reports&#160;<br/>directly&#160;to&#160;the&#160;CEO.&#160;</p>
<p style="position:absolute;top:286px;left:135px;white-space:nowrap" class="ft81">b)&#160;&#160;<b>Caloric&#160;Sustenance&#160;Provision&#160;Officers&#160;(CSPOs)&#160;I&#160;&amp;&#160;II.&#160;</b>The&#160;CSP&#160;Officers&#160;I&#160;&amp;&#160;II&#160;are&#160;responsible&#160;for&#160;the&#160;</p>
<p style="position:absolute;top:309px;left:162px;white-space:nowrap" class="ft83">equitable&#160;&#160;distribution&#160;of&#160;caloric&#160;sustenance&#160;&#160;(food&#160;and&#160;drinks)&#160;during&#160;organizational&#160;assemblies&#160;<br/>and&#160;executive&#160;meetings.&#160;The&#160;CSP&#160;Officers&#160;report&#160;directly&#160;to&#160;the&#160;CPO.&#160;</p>
<p style="position:absolute;top:355px;left:135px;white-space:nowrap" class="ft81">c)&#160;&#160;<b>Equipment,&#160;&#160;Materials,&#160;&#160;and&#160;&#160;Facilities&#160;&#160;Officers&#160;&#160;(EMFOs)&#160;&#160;I&#160;&#160;&amp;&#160;&#160;II.&#160;&#160;</b>The&#160;&#160;EMF&#160;&#160;Officers&#160;&#160;I&#160;&#160;&amp;&#160;&#160;II&#160;&#160;are&#160;</p>
<p style="position:absolute;top:378px;left:162px;white-space:nowrap" class="ft83">responsible&#160;for&#160;the&#160;ready&#160;availability&#160;of&#160;rooms&#160;and&#160;functions&#160;halls,&#160;needed&#160;electronic&#160;facilities&#160;and&#160;<br/>equipment&#160;&#160;and&#160;&#160;other&#160;&#160;materials&#160;&#160;(pen,&#160;&#160;paper,&#160;&#160;VGA&#160;&#160;cord,&#160;&#160;HDMI&#160;&#160;cord,&#160;&#160;et&#160;&#160;al)&#160;&#160;needed&#160;&#160;during&#160;<br/>organizational&#160;assemblies&#160;and&#160;executive&#160;meetings.&#160;The&#160;EMF&#160;Officers&#160;report&#160;directly&#160;to&#160;the&#160;CLO.&#160;</p>
<p style="position:absolute;top:460px;left:108px;white-space:nowrap" class="ft81">&#160;</p>
<p style="position:absolute;top:495px;left:420px;white-space:nowrap" class="ft80"><b>ARTICLE&#160;VII&#160;</b></p>
<p style="position:absolute;top:531px;left:260px;white-space:nowrap" class="ft81">IDENTIFICATION&#160;OF&#160;THE&#160;TORVALDS&#160;COMMITTEE&#160;MEMBERS&#160;</p>
<p style="position:absolute;top:565px;left:108px;white-space:nowrap" class="ft83"><b>Section&#160;1.</b>&#160;The&#160;main&#160;basis&#160;for&#160;the&#160;identification&#160;of&#160;the&#160;Torvalds&#160;Committee&#160;Members&#160;or&#160;the&#160;Officials&#160;of&#160;the&#160;<br/>Committee&#160;for&#160;Special&#160;Purposes&#160;is&#160;the&#160;specific&#160;skillset&#160;of&#160;the&#160;individuals&#160;as&#160;deemed,&#160;of&#160;high&#160;average,&#160;if&#160;not,&#160;<br/>but&#160;preferably,&#160;exceptional,&#160;by&#160;the&#160;von&#160;Neumann&#160;Committee.&#160;&#160;&#160;</p>
<p style="position:absolute;top:647px;left:108px;white-space:nowrap" class="ft83"><b>Section&#160;2.</b>&#160;The&#160;positions&#160;available&#160;in&#160;the&#160;Torvalds&#160;Committee&#160;need&#160;not&#160;be&#160;filled&#160;but&#160;when&#160;they&#160;are,&#160;the&#160;<br/>specific&#160;&#160;person&#160;&#160;identified&#160;&#160;to&#160;&#160;be&#160;&#160;expert&#160;&#160;in&#160;&#160;a&#160;&#160;specific&#160;&#160;craft&#160;&#160;or&#160;&#160;endeavor&#160;&#160;will&#160;&#160;serve&#160;&#160;as&#160;&#160;the&#160;&#160;main&#160;&#160;student&#160;<br/>consultant&#160;of&#160;the&#160;BS&#160;Computer&#160;Engineering&#160;department&#160;when&#160;it&#160;comes&#160;to&#160;matters&#160;related&#160;to&#160;the&#160;specific&#160;<br/>craft&#160;or&#160;endeavor.&#160;</p>
<p style="position:absolute;top:752px;left:108px;white-space:nowrap" class="ft83"><b>Section&#160;3.</b>&#160;Only&#160;in&#160;an&#160;emergency&#160;case&#160;shall&#160;any&#160;member&#160;of&#160;the&#160;von&#160;Neumann&#160;Committee&#160;appoint&#160;a&#160;person&#160;<br/>without&#160;&#160;the&#160;&#160;approval&#160;&#160;of&#160;&#160;all&#160;&#160;the&#160;&#160;committee&#160;&#160;members.&#160;&#160;The&#160;&#160;emergency&#160;&#160;case&#160;&#160;shall&#160;&#160;constitute&#160;&#160;only&#160;&#160;the&#160;<br/>following:&#160;the&#160;absence&#160;of&#160;the&#160;appointed&#160;person&#160;in&#160;a&#160;specific&#160;event&#160;or&#160;circumstance&#160;and&#160;the&#160;need&#160;for&#160;such&#160;<br/>a&#160;person&#160;of&#160;similar&#160;caliber&#160;in&#160;skillset&#160;in&#160;such&#160;event&#160;or&#160;circumstance.&#160;</p>
<p style="position:absolute;top:857px;left:108px;white-space:nowrap" class="ft81">&#160;</p>
<p style="position:absolute;top:892px;left:418px;white-space:nowrap" class="ft80"><b>ARTICLE&#160;VIII&#160;</b></p>
<p style="position:absolute;top:927px;left:237px;white-space:nowrap" class="ft81">SPECIAL&#160;POWERS&#160;OF&#160;THE&#160;VON&#160;NEUMMAN&#160;COMMITTEE&#160;OFFICIALS&#160;</p>
<p style="position:absolute;top:962px;left:108px;white-space:nowrap" class="ft81">&#160;</p>
<p style="position:absolute;top:997px;left:423px;white-space:nowrap" class="ft80"><b>ARTICLE&#160;IX&#160;</b></p>
<p style="position:absolute;top:1033px;left:188px;white-space:nowrap" class="ft81">HOLLERITH&#160;CONVENTION,&#160;KARNAUGH&#160;MEETINGS,&#160;&amp;&#160;VON&#160;NEUMMAN&#160;ASSEMBLY&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft90{font-size:14px;font-family:Times;color:#000000;}
	.ft91{font-size:14px;font-family:Times;color:#000000;}
	.ft92{font-size:14px;font-family:Times;color:#000000;}
	.ft93{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page9-div" style="position:relative;width:918px;height:1188px;margin-left:15%;">
<img width="918" height="1188" src="{{asset('images/target009.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:108px;white-space:nowrap" class="ft93"><b>Section&#160;&#160;1.</b>&#160;&#160;<i>Hollerith&#160;&#160;Convention.&#160;&#160;–&#160;&#160;</i>The&#160;&#160;alliance&#160;&#160;shall&#160;&#160;meet&#160;&#160;at&#160;&#160;least&#160;&#160;once&#160;&#160;in&#160;&#160;a&#160;&#160;semester&#160;&#160;for&#160;&#160;a&#160;&#160;Hollerith&#160;<br/>Convention,&#160;the&#160;official&#160;gathering&#160;of&#160;all&#160;enrolled&#160;HCDC&#160;BS&#160;Computer&#160;Engineering&#160;students&#160;for&#160;the&#160;semester.&#160;&#160;</p>
<p style="position:absolute;top:170px;left:108px;white-space:nowrap" class="ft93"><b>Section&#160;&#160;2.&#160;&#160;</b><i>Karnaugh&#160;&#160;Meetings.&#160;&#160;–</i>&#160;&#160;Special&#160;&#160;engagements&#160;&#160;among&#160;&#160;the&#160;&#160;enrolled&#160;&#160;BS&#160;&#160;Computer&#160;&#160;Engineering&#160;<br/>students&#160;with&#160;the&#160;von&#160;Neumann&#160;Officials&#160;called&#160;Karnaugh&#160;Meetings&#160;may&#160;be&#160;called&#160;upon&#160;request&#160;by&#160;the&#160;<br/>von&#160;Neumann&#160;Committee.&#160;Rendezvous&#160;with&#160;alumni&#160;shall&#160;also&#160;be&#160;called&#160;similarly.&#160;</p>
<p style="position:absolute;top:251px;left:108px;white-space:nowrap" class="ft93"><b>Section&#160;3.</b>&#160;<i>von&#160;Neumann&#160;Assembly.&#160;–&#160;</i>The&#160;von&#160;Neumann&#160;Committee&#160;shall&#160;meet&#160;regularly&#160;every&#160;second&#160;<br/>Tuesday&#160;of&#160;the&#160;month,&#160;4:00&#160;–&#160;5:00&#160;pm&#160;at&#160;the&#160;area&#160;beside&#160;the&#160;office&#160;of&#160;the&#160;BS&#160;CpE&#160;Program&#160;Chairperson&#160;or&#160;<br/>at&#160;such&#160;time&#160;and&#160;place&#160;as&#160;assigned&#160;by&#160;the&#160;von&#160;Neumann&#160;Committee&#160;or&#160;called&#160;upon&#160;by&#160;the&#160;BS&#160;Computer&#160;<br/>Engineering&#160;Chairperson&#160;and/or&#160;ACTIVE&#160;Chairman&#160;(Organizational&#160;Moderator).&#160;</p>
<p style="position:absolute;top:356px;left:108px;white-space:nowrap" class="ft93"><b>Section&#160;4.&#160;</b>The&#160;majority&#160;of&#160;the&#160;officers&#160;of&#160;the&#160;association&#160;shall&#160;constitute&#160;a&#160;quorum&#160;to&#160;start&#160;a&#160;meeting.&#160;A&#160;<br/>plurality&#160;of&#160;the&#160;votes&#160;shall&#160;be&#160;binding.&#160;</p>
<p style="position:absolute;top:415px;left:108px;white-space:nowrap" class="ft91">&#160;</p>
<p style="position:absolute;top:450px;left:425px;white-space:nowrap" class="ft90"><b>ARTICLE&#160;X&#160;</b></p>
<p style="position:absolute;top:485px;left:366px;white-space:nowrap" class="ft91">CHECKING&#160;OF&#160;ATTENDANCE&#160;</p>
<p style="position:absolute;top:520px;left:108px;white-space:nowrap" class="ft93"><b>Section&#160;1.&#160;</b>The&#160;manner&#160;of&#160;checking&#160;of&#160;attendance&#160;in&#160;Hollerith&#160;Conventions&#160;and&#160;Karnaugh&#160;Meetings&#160;shall&#160;<br/>be&#160;&#160;via&#160;&#160;manual&#160;&#160;input&#160;&#160;of&#160;&#160;the&#160;&#160;updated&#160;&#160;student&#160;&#160;Facebook&#160;&#160;name,&#160;&#160;mobile&#160;&#160;number,&#160;&#160;and&#160;&#160;ID&#160;&#160;number&#160;&#160;by&#160;&#160;the&#160;<br/>student.&#160;Printed&#160;sheets&#160;with&#160;the&#160;exhaustive&#160;list&#160;of&#160;the&#160;enrolled&#160;students&#160;per&#160;year&#160;level&#160;are&#160;to&#160;be&#160;filled&#160;up.&#160;</p>
<p style="position:absolute;top:602px;left:459px;white-space:nowrap" class="ft91">&#160;</p>
<p style="position:absolute;top:637px;left:423px;white-space:nowrap" class="ft90"><b>ARTICLE&#160;XI&#160;</b></p>
<p style="position:absolute;top:672px;left:369px;white-space:nowrap" class="ft91">PENALTIES&#160;AND&#160;SANCTION&#160;</p>
<p style="position:absolute;top:707px;left:108px;white-space:nowrap" class="ft90"><b>Section&#160;1.</b>&#160;<i>von&#160;Neumann&#160;Officials.&#160;</i></p>
<p style="position:absolute;top:742px;left:135px;white-space:nowrap" class="ft91">a)&#160;&#160;Three&#160;(3)&#160;successive&#160;absences&#160;during&#160;von&#160;Neumann&#160;Assemblies,&#160;Karnaugh&#160;Meetings,&#160;and&#160;Hollerith&#160;</p>
<p style="position:absolute;top:765px;left:162px;white-space:nowrap" class="ft91">Conventions&#160;shall&#160;be&#160;ground&#160;for&#160;impeachment.&#160;</p>
<p style="position:absolute;top:788px;left:135px;white-space:nowrap" class="ft93">b)&#160;&#160;Attendance&#160;in&#160;all&#160;assemblies,&#160;meetings,&#160;and&#160;conventions&#160;shall&#160;be&#160;posted&#160;for&#160;public&#160;information.&#160;<br/>c)&#160;&#160;A&#160;von&#160;Neumann&#160;official&#160;shall&#160;be&#160;excused&#160;from&#160;his&#160;absence&#160;only&#160;if&#160;an&#160;excuse&#160;letter&#160;is&#160;presented&#160;</p>
<p style="position:absolute;top:835px;left:162px;white-space:nowrap" class="ft91">prior&#160;to&#160;the&#160;meeting&#160;called.&#160;</p>
<p style="position:absolute;top:858px;left:135px;white-space:nowrap" class="ft91">d)&#160;&#160;Three&#160;&#160;(3)&#160;&#160;records&#160;of&#160;tardiness&#160;&#160;shall&#160;be&#160;made&#160;&#160;equivalent&#160;to&#160;one&#160;&#160;(1)&#160;absence&#160;&#160;from&#160;the&#160;&#160;schedule&#160;</p>
<p style="position:absolute;top:881px;left:162px;white-space:nowrap" class="ft91">assembly,&#160;meeting,&#160;or&#160;convention.&#160;</p>
<p style="position:absolute;top:904px;left:135px;white-space:nowrap" class="ft91">e)&#160;&#160;A&#160;&#160;von&#160;&#160;Neumann&#160;&#160;official&#160;&#160;shall&#160;&#160;be&#160;&#160;marked&#160;&#160;late&#160;&#160;if&#160;&#160;he&#160;&#160;arrives&#160;&#160;after&#160;&#160;fifteen&#160;&#160;(15)&#160;&#160;minutes&#160;&#160;after&#160;&#160;the&#160;</p>
<p style="position:absolute;top:928px;left:162px;white-space:nowrap" class="ft91">scheduled&#160;time&#160;of&#160;commencement&#160;of&#160;the&#160;activity&#160;and/or&#160;the&#160;rendezvous.&#160;</p>
<p style="position:absolute;top:963px;left:108px;white-space:nowrap" class="ft90"><b>Section&#160;2.</b>&#160;<i>Members&#160;(All&#160;enrolled&#160;Bachelor&#160;of&#160;Science&#160;in&#160;Computer&#160;Engineering&#160;students)&#160;</i></p>
<p style="position:absolute;top:998px;left:135px;white-space:nowrap" class="ft91">a)&#160;&#160;No&#160;one&#160;shall&#160;be&#160;excused&#160;from&#160;the&#160;3:30&#160;–&#160;5:00&#160;PM&#160;TTH&#160;activity&#160;period&#160;when&#160;Karnaugh&#160;Meetings&#160;</p>
<p style="position:absolute;top:1021px;left:162px;white-space:nowrap" class="ft91">are&#160;called&#160;since&#160;such&#160;is&#160;part&#160;and&#160;parcel&#160;of&#160;the&#160;school’s&#160;policies&#160;on&#160;students’&#160;involvement.&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft100{font-size:14px;font-family:Times;color:#000000;}
	.ft101{font-size:14px;font-family:Times;color:#000000;}
	.ft102{font-size:14px;font-family:Times;color:#000000;}
	.ft103{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page10-div" style="position:relative;width:918px;height:1188px;margin-left:15%;">
<img width="918" height="1188" src="{{asset('images/target010.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:135px;white-space:nowrap" class="ft100">b)&#160;&#160;Considered&#160;excused&#160;are&#160;only&#160;those&#160;students&#160;with&#160;scheduled&#160;classes&#160;during&#160;the&#160;said&#160;activity&#160;period&#160;</p>
<p style="position:absolute;top:135px;left:162px;white-space:nowrap" class="ft100">and&#160;those&#160;with&#160;medical&#160;certificates&#160;duly&#160;signed&#160;by&#160;the&#160;OSA&#160;Director&#160;or&#160;his&#160;representative,&#160;if&#160;ill.&#160;</p>
<p style="position:absolute;top:170px;left:108px;white-space:nowrap" class="ft103"><b>Section&#160;3.</b>&#160;<i>Sanctions.</i>&#160;Sanctions&#160;imposed&#160;with&#160;regards&#160;to&#160;officials’/members’&#160;tardiness&#160;and/or&#160;absences&#160;in&#160;<br/>activities,&#160;conventions,&#160;meetings,&#160;and&#160;assemblies&#160;will&#160;be&#160;determined&#160;by&#160;the&#160;von&#160;Neumann&#160;Committee&#160;and&#160;<br/>duly&#160;approved&#160;by&#160;the&#160;Berners-Lee&#160;Committee&#160;(Board&#160;of&#160;Directors),&#160;particularly&#160;by&#160;the&#160;ACTIVE&#160;Chairman&#160;<br/>(Organizational&#160;Moderator)&#160;and/or&#160;the&#160;ACTIVE&#160;Co-Chairman&#160;(HCDC&#160;BS&#160;CpE&#160;Program&#160;Chairperson).&#160;</p>
<p style="position:absolute;top:275px;left:108px;white-space:nowrap" class="ft101"><b>&#160;</b></p>
<p style="position:absolute;top:310px;left:421px;white-space:nowrap" class="ft101"><b>ARTICLE&#160;XII&#160;</b></p>
<p style="position:absolute;top:345px;left:409px;white-space:nowrap" class="ft100">AMENDMENTS&#160;</p>
<p style="position:absolute;top:380px;left:108px;white-space:nowrap" class="ft103">This&#160;Act&#160;may&#160;be&#160;amended&#160;or&#160;repealed&#160;by&#160;two-thirds&#160;(2/3)&#160;of&#160;the&#160;votes&#160;of&#160;the&#160;bona&#160;fide&#160;Bachelor&#160;of&#160;Science&#160;<br/>in&#160;Computer&#160;Engineering&#160;students&#160;anytime&#160;as&#160;it&#160;is&#160;deemed&#160;necessary.&#160;</p>
<p style="position:absolute;top:439px;left:459px;white-space:nowrap" class="ft100">&#160;</p>
<p style="position:absolute;top:474px;left:418px;white-space:nowrap" class="ft101"><b>ARTICLE&#160;XIII&#160;</b></p>
<p style="position:absolute;top:509px;left:302px;white-space:nowrap" class="ft100">DISBURSEMENTS&#160;AND&#160;ACQUISITION&#160;OF&#160;FUNDS&#160;</p>
<p style="position:absolute;top:544px;left:108px;white-space:nowrap" class="ft103"><b>Section&#160;1.</b>&#160;Every&#160;ACTIVE&#160;member,&#160;with&#160;the&#160;approval&#160;of&#160;the&#160;ACTIVE&#160;Chairman&#160;and/or&#160;ACTIVE&#160;Co-Chairman,&#160;<br/>may&#160;solicit,&#160;receive,&#160;and&#160;accept&#160;donations,&#160;gifts,&#160;and&#160;others,&#160;in&#160;the&#160;name&#160;of&#160;the&#160;organization.&#160;</p>
<p style="position:absolute;top:602px;left:108px;white-space:nowrap" class="ft103"><b>Section&#160;2.</b>&#160;All&#160;funds&#160;of&#160;ACTIVE&#160;shall&#160;be&#160;administered&#160;solely&#160;for&#160;its&#160;protection&#160;and&#160;advancement&#160;and&#160;these&#160;<br/>shall&#160;be&#160;deposited&#160;to&#160;the&#160;organization’s&#160;account.&#160;</p>
<p style="position:absolute;top:661px;left:108px;white-space:nowrap" class="ft103"><b>Section&#160;3.</b>&#160;Funds&#160;can&#160;be&#160;withdrawn&#160;only&#160;upon&#160;the&#160;approval&#160;of&#160;the&#160;moderator&#160;and&#160;when&#160;duly&#160;signed&#160;by&#160;the&#160;<br/>CEO&#160;and&#160;the&#160;CFO&#160;of&#160;the&#160;organization.&#160;</p>
<p style="position:absolute;top:719px;left:108px;white-space:nowrap" class="ft103"><b>Section&#160;&#160;4.</b>&#160;&#160;An&#160;&#160;amount&#160;&#160;of&#160;&#160;one&#160;&#160;hundred&#160;&#160;pesos&#160;&#160;(PhP&#160;&#160;100.00)&#160;&#160;shall&#160;&#160;be&#160;&#160;collected&#160;&#160;from&#160;&#160;its&#160;&#160;members&#160;&#160;every&#160;<br/>semester&#160;as&#160;membership&#160;fee.&#160;&#160;</p>
<p style="position:absolute;top:778px;left:108px;white-space:nowrap" class="ft100">&#160;</p>
<p style="position:absolute;top:813px;left:418px;white-space:nowrap" class="ft101"><b>ARTICLE&#160;XIV&#160;</b></p>
<p style="position:absolute;top:848px;left:353px;white-space:nowrap" class="ft100">REPORTS&#160;OF&#160;THE&#160;DEPARTMENT&#160;</p>
<p style="position:absolute;top:883px;left:108px;white-space:nowrap" class="ft103">All&#160;activities&#160;of&#160;the&#160;Alliance&#160;shall&#160;be&#160;reported&#160;to&#160;the&#160;Office&#160;of&#160;Student&#160;Affairs&#160;of&#160;the&#160;Holy&#160;Cross&#160;of&#160;Davao&#160;<br/>College,&#160;Inc.&#160;</p>
<p style="position:absolute;top:942px;left:420px;white-space:nowrap" class="ft101"><b>ARTICLE&#160;XV&#160;</b></p>
<p style="position:absolute;top:977px;left:397px;white-space:nowrap" class="ft100">FINAL&#160;PROVISIONS&#160;</p>
<p style="position:absolute;top:1011px;left:108px;white-space:nowrap" class="ft103"><b>Section&#160;1.&#160;</b><i>Separability&#160;Clause</i>.&#160;–&#160;If&#160;for&#160;any&#160;reason&#160;any&#160;section&#160;or&#160;provision&#160;of&#160;this&#160;Act,&#160;or&#160;any&#160;portion&#160;thereof,&#160;<br/>or&#160;the&#160;application&#160;of&#160;such&#160;section,&#160;provision&#160;or&#160;portion&#160;thereof&#160;to&#160;any&#160;person,&#160;group&#160;or&#160;circumstance&#160;is&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft110{font-size:14px;font-family:Times;color:#000000;}
	.ft111{font-size:14px;font-family:Times;color:#000000;}
	.ft112{font-size:14px;font-family:Times;color:#000000;}
	.ft113{font-size:14px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page11-div" style="position:relative;width:918px;height:1188px;margin-left:15%;">
<img width="918" height="1188" src="{{asset('images/target011.png')}}" alt="background image"/>
<p style="position:absolute;top:111px;left:108px;white-space:nowrap" class="ft113">declared&#160;invalid&#160;or&#160;unconstitutional,&#160;the&#160;remainder&#160;of&#160;this&#160;Act&#160;shall&#160;not&#160;be&#160;affected&#160;by&#160;such&#160;declaration&#160;<br/>and&#160;shall&#160;remain&#160;in&#160;force&#160;and&#160;effect.&#160;</p>
<p style="position:absolute;top:170px;left:108px;white-space:nowrap" class="ft113"><b>Section&#160;2.&#160;</b><i>Repealing&#160;Clause</i>.&#160;–&#160;The&#160;July&#160;17,&#160;2018&#160;HCDC&#160;BS&#160;CpE&#160;Constitution&#160;and&#160;By-Laws,&#160;as&#160;amended,&#160;is&#160;<br/>hereby&#160;&#160;repealed&#160;&#160;and&#160;&#160;all&#160;&#160;other&#160;&#160;laws,&#160;&#160;administrative&#160;&#160;orders,&#160;&#160;rules&#160;&#160;and&#160;&#160;regulations,&#160;&#160;or&#160;&#160;parts&#160;&#160;thereof&#160;<br/>inconsistent&#160;with&#160;the&#160;provisions&#160;of&#160;this&#160;Cons-By,&#160;are&#160;hereby&#160;repealed&#160;or&#160;modified&#160;accordingly.<b>&#160;</b></p>
<p style="position:absolute;top:251px;left:108px;white-space:nowrap" class="ft113"><b>Section&#160;&#160;3.&#160;&#160;</b><i>Effectivity.&#160;&#160;</i>–&#160;&#160;This&#160;&#160;Act&#160;&#160;shall&#160;&#160;take&#160;&#160;effect&#160;&#160;immediately&#160;&#160;upon&#160;&#160;its&#160;&#160;approval&#160;&#160;by&#160;&#160;the&#160;&#160;voting&#160;&#160;body&#160;<br/>(members)&#160;of&#160;the&#160;organization&#160;of&#160;ACTIVE,&#160;the&#160;BS&#160;Computer&#160;Engineering&#160;Program&#160;Chairperson,&#160;and&#160;the&#160;BS&#160;<br/>CpE&#160;Official&#160;Co-Curricular&#160;Organization&#160;Moderator.&#160;Its&#160;legal&#160;recognition,&#160;however,&#160;is&#160;contingent&#160;&#160;on&#160;&#160;the&#160;<br/>approval&#160;of&#160;the&#160;&#160;HCDC&#160;House&#160;&#160;of&#160;Representatives,&#160;the&#160;&#160;HCDC&#160;Commission&#160;on&#160;Election,&#160;and&#160;the&#160;&#160;Office&#160;&#160;of&#160;<br/>Student&#160;Affairs.&#160;</p>
<p style="position:absolute;top:379px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:415px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:450px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:485px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:520px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:555px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:590px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:626px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:661px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:696px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:731px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:766px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:802px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:837px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:872px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:907px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:942px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:978px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:1013px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
<p style="position:absolute;top:1048px;left:108px;white-space:nowrap" class="ft110">&#160;</p>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<br>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft120{font-size:16px;font-family:Times;color:#000000;}
	.ft121{font-size:16px;font-family:Times;color:#000000;}
	.ft122{font-size:16px;line-height:23px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page12-div" style="position:relative;width:918px;height:1188px;margin-left:15%;">
<img width="100%" height="1188" src="{{asset('images/target012.png')}}" alt="background image"/>
<p style="position:absolute;top:112px;left:239px;white-space:nowrap" class="ft120">ALLIANCE&#160;OF&#160;COMPUTATIONAL&#160;TECHNOLOGY&#160;INNOVATORS&#160;&#160;</p>
<p style="position:absolute;top:136px;left:328px;white-space:nowrap" class="ft120">AND&#160;VALIDATION&#160;EXPERTS&#160;(ACTIVE)&#160;</p>
<p style="position:absolute;top:159px;left:459px;white-space:nowrap" class="ft120">&#160;</p>
<p style="position:absolute;top:183px;left:362px;white-space:nowrap" class="ft121"><b>Von&#160;Neumann&#160;Committee&#160;</b></p>
<p style="position:absolute;top:207px;left:397px;white-space:nowrap" class="ft121"><b>A.Y.&#160;2022&#160;–&#160;2023&#160;</b></p>
<p style="position:absolute;top:243px;left:379px;white-space:nowrap" class="ft121"><b>Turing&#160;Subcommittee&#160;</b></p>
<p style="position:absolute;top:266px;left:370px;white-space:nowrap" class="ft121"><b>(Executive&#160;Department)&#160;</b></p>
<p style="position:absolute;top:290px;left:108px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:313px;left:358px;white-space:nowrap" class="ft121"><b>Kims&#160;Cyra&#160;Rayel&#160;M.&#160;Moring&#160;</b></p>
<p style="position:absolute;top:337px;left:444px;white-space:nowrap" class="ft121"><b>CEO&#160;</b></p>
<p style="position:absolute;top:361px;left:459px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:385px;left:162px;white-space:nowrap" class="ft121"><b>Mark&#160;Aljon&#160;Lagura&#160;Perez&#160;</b></p>
<p style="position:absolute;top:385px;left:378px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:385px;left:432px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:385px;left:486px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:385px;left:540px;white-space:nowrap" class="ft121"><b>Khient&#160;Bryan&#160;Bacoy&#160;Medequillo&#160;</b></p>
<p style="position:absolute;top:409px;left:108px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:409px;left:178px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:409px;left:216px;white-space:nowrap" class="ft121"><b>&#160;&#160;COO&#160;&#160;&#160;</b></p>
<p style="position:absolute;top:409px;left:324px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:409px;left:378px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:409px;left:432px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:409px;left:486px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:409px;left:540px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;</b></p>
<p style="position:absolute;top:409px;left:594px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;EAVP&#160;</b></p>
<p style="position:absolute;top:432px;left:108px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:456px;left:370px;white-space:nowrap" class="ft121"><b>Shannon&#160;Subcommittee&#160;</b></p>
<p style="position:absolute;top:479px;left:361px;white-space:nowrap" class="ft121"><b>(Information&#160;Department)&#160;</b></p>
<p style="position:absolute;top:503px;left:459px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:527px;left:374px;white-space:nowrap" class="ft121"><b>Jassenjea&#160;Lagura&#160;Perez&#160;</b></p>
<p style="position:absolute;top:551px;left:443px;white-space:nowrap" class="ft121"><b>CDO&#160;</b></p>
<p style="position:absolute;top:575px;left:459px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:598px;left:162px;white-space:nowrap" class="ft121"><b>Jester&#160;Jeam&#160;Gallendo&#160;Era&#160;</b></p>
<p style="position:absolute;top:598px;left:378px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:598px;left:432px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:598px;left:486px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:598px;left:540px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Jommella&#160;Alfanta&#160;Rallos&#160;</b></p>
<p style="position:absolute;top:622px;left:108px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:622px;left:178px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:622px;left:216px;white-space:nowrap" class="ft121"><b>&#160;&#160;CWO&#160;&#160;&#160;</b></p>
<p style="position:absolute;top:622px;left:324px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:622px;left:378px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:622px;left:432px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:622px;left:486px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:622px;left:540px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;CMO&#160;</b></p>
<p style="position:absolute;top:645px;left:108px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:669px;left:372px;white-space:nowrap" class="ft121"><b>Boolean&#160;Subcommittee&#160;</b></p>
<p style="position:absolute;top:693px;left:375px;white-space:nowrap" class="ft121"><b>&#160;(Finance&#160;Department)&#160;</b></p>
<p style="position:absolute;top:717px;left:459px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:741px;left:350px;white-space:nowrap" class="ft121"><b>Cyreal&#160;James&#160;Mapili&#160;Cameros&#160;</b></p>
<p style="position:absolute;top:764px;left:444px;white-space:nowrap" class="ft121"><b>CFO&#160;</b></p>
<p style="position:absolute;top:788px;left:108px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:788px;left:178px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:788px;left:276px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:812px;left:162px;white-space:nowrap" class="ft121"><b>Kenneth&#160;John&#160;Gonzaga&#160;</b></p>
<p style="position:absolute;top:812px;left:378px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:812px;left:432px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:812px;left:486px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:812px;left:540px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;Elaine&#160;Angelia&#160;Magdugo&#160;</b></p>
<p style="position:absolute;top:835px;left:108px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:835px;left:178px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;DFC&#160;&#160;&#160;</b></p>
<p style="position:absolute;top:835px;left:324px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:835px;left:378px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:835px;left:432px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:835px;left:486px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:835px;left:540px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;CAE&#160;</b></p>
<p style="position:absolute;top:859px;left:373px;white-space:nowrap" class="ft121"><b>Dijkstra&#160;Subcommittee&#160;</b></p>
<p style="position:absolute;top:883px;left:375px;white-space:nowrap" class="ft121"><b>(Logistics&#160;Department)&#160;</b></p>
<p style="position:absolute;top:907px;left:459px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:930px;left:363px;white-space:nowrap" class="ft121"><b>Thesso&#160;Bem&#160;Silvano&#160;Cinco&#160;</b></p>
<p style="position:absolute;top:954px;left:443px;white-space:nowrap" class="ft121"><b>CPO&#160;</b></p>
<p style="position:absolute;top:978px;left:108px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Jufford&#160;Austin&#160;Beato&#160;Enriquez&#160;&#160;&#160;</b></p>
<p style="position:absolute;top:978px;left:432px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:978px;left:486px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:978px;left:540px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Cyle&#160;Loraña&#160;Halasan&#160;</b></p>
<p style="position:absolute;top:1001px;left:108px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;CSP&#160;Officer&#160;&#160;</b></p>
<p style="position:absolute;top:1001px;left:324px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:1001px;left:378px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:1001px;left:432px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:1001px;left:486px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
<p style="position:absolute;top:1001px;left:540px;white-space:nowrap" class="ft121"><b>&#160;&#160;&#160;&#160;&#160;&#160;</b></p>
<p style="position:absolute;top:1001px;left:594px;white-space:nowrap" class="ft121"><b>&#160; &#160;&#160;EMF&#160;Officer&#160;&#160;</b></p>
<p style="position:absolute;top:1025px;left:108px;white-space:nowrap" class="ft122"><b>&#160;<br/>&#160;</b></p>
<p style="position:absolute;top:1049px;left:178px;white-space:nowrap" class="ft121"><b>&#160;</b></p>
</div>
<br>
<a href="{{ asset('pdfs/HCDC-Computer-Engineering-Act-of-2019-CpE-Act-1001UPDATED-A.Y.-2022-2023-1.pdf') }}"  target="_blank" class="btn btn-outline-primary" style="line-height: 1.0" >Download/Print</a><br>
<br>
</body>
</html>

    

    </html>   

@endsection
@push('scripts')
   


@endpush
