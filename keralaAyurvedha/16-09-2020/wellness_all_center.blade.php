@extends('section.master')

@section('content')
<style type="text/css">
<?php
$i=0;
foreach ($clinic as $key)
{

?>
.books-btn-walk{{$i}}
{
	padding: 6px 20px;
    background-color: #F0C75E;
    color: #fff !important;
    /* min-width: 171px; */
    border: 1px solid #dee2e6;
    border-radius: 3px;
    font-size: 10px !important;
}
<?php $i++; } ?>
span.badge.badge-warning {
    top: -23% !important;
}
/*span.badge.shivajinagar, span.badge.whitefield{
    top: 62% !important;
}*/
div.bottom_button
{
	margin-top: 3rem !important;
    position: relative;
}
</style>

<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="search-sevice">
	<div class="services-wrapper">
		<div class="container">
			<!-- <ul class="nav navigation-wrapper mb-5">
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#doctor">Search by Doctor</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link  active" data-toggle="tab" href="#service">Search by Service</a>
			  </li>
			</ul> -->

			<div class="tab-content">
			  <!-- <div class="tab-pane" id="doctor">
			  	<section id="products-list" class="p-0">
					<div class="container">
						<div class="row">
							<div class="col-auto col-lg filter-col">
								<svg class="open-filterbar d-lg-none"><use xlink:href="{{ asset('assets/themes/ayurveda/images/icons.svg#filter')}}" /></svg>
								<div class="filterbar-backdrop"></div>
								<div class="filter-wrapper">
									<svg class="close-filterbar d-lg-none"><use xlink:href="{{ asset('assets/themes/ayurveda/images/icons.svg#close')}}" /></svg>

									<h5>Search</h5>

									<div class="form-group mb-4">
										<input type="text" name="search" id="search" class="form-control" placeholder="Search by Doctor">
										<svg class="search-icon"><use xlink:href="{{ asset('assets/themes/ayurveda/images/icons.svg#search')}}" /></svg>
									</div>

									<h5>Categories</h5>

									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="bangalore">
										<label class="custom-control-label" for="bangalore">Bangalore</label>
									</div>
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="chennai">
										<label class="custom-control-label" for="chennai">Chennai</label>
									</div>
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="trivandrum">
										<label class="custom-control-label" for="trivandrum">Trivandrum</label>
									</div>
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="hyderabad">
										<label class="custom-control-label" for="hyderabad">Hyderabad</label>
									</div>
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="kozhikodu">
										<label class="custom-control-label" for="kozhikodu">Kozhikodu</label>
									</div>
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="mumbai">
										<label class="custom-control-label" for="mumbai">Mumbai</label>
									</div>
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="new-delhi">
										<label class="custom-control-label" for="new-delhi">New Delhi</label>
									</div>
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="coimbatore">
										<label class="custom-control-label" for="coimbatore">Coimbatore</label>
									</div>
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="ahmedabad">
										<label class="custom-control-label" for="ahmedabad">Ahmedabad</label>a
									</div>

									<h5 class="mt-4">Gender</h5>
									<div id="gender" class="btn-group" role="group" aria-label="Basic example">
									  <button type="button" class="btn active">Male</button>
									  <button type="button" class="btn">Female</button>
									</div>

									<h5 class="mt-4">Price Range</h5>

									<div class="form-group text-right mb-4">
										<input type="text" name="price-range" id="price-range" class="form-control" placeholder="Price Range">
										<p class="price-range-box"><strong><span class="from"></span>yrs - <span class="to"></span>yrs</strong></p>
									</div>
								</div>
							</div>

							<div class="col-lg product-list-col block-view">

								<?php foreach ($doctor as $doctorkey ) {

								?>
								<div class="doctor-list pb-4 mb-4 border-bottom">
									<div class="row mb-3">
										<div class="col-lg-auto col-auto">
											<div class="img-wrapper">
												<img src="{{ url($doctorkey->doctor_imgurl)}}" alt="" class="img-fluid">
											</div>
										</div>
										<div class="col-lg col info-wrapper">
											<div class="row align-items-center">
												<div class="col-lg-6">
													<h4 class="m-0"><?php echo $doctorkey->doctor_name; ?>, <?php echo $doctorkey->doctor_education; ?></h4>
												</div>
												<div class="col-lg-6 d-flex align-items-center justify-content-between">
													<p class="m-0 d-flex align-items-center"><img src="{{ asset('assets/themes/ayurveda/images/services/placeholder.svg')}}" class="mr-2" width="15">Ernakulam, Kerala</p>
													<p class="m-0 d-flex align-items-center"><img src="{{ asset('assets/themes/ayurveda/images/services/suitcase.svg')}}" class="mr-2" width="20"><?php echo $doctorkey->doctor_experience; ?> Years</p>
												</div>
											</div>
											<h6><?php echo $doctorkey->doctor_specialties; ?>  Kerala Ayurveda Physician</h6>
											<div class="d-flex align-items-center button-wrapper">
												<button class="btn mb-3 mr-3"><a href="{{url('ayurved-camp')}}">VISIT CLINIC SITE</a></button>
												<button class="active btn mb-3">BOOK APPOINTMENT</button>
											</div>
										</div>
									</div>
									<p class="m-0"><strong>About the Doctor:</strong> <?php echo $doctorkey->doctor_description; ?> . <a href="javascript:">Read more</a></p>
								</div>
								<?php } ?>



								<div class="btn-group mt-5">
									<button type="button" class="btn button-light active">1</button>
									<button type="button" class="btn button-light">2</button>
									<button type="button" class="btn button-light">3</button>
									<button type="button" class="btn button-light">4</button>
									<button type="button" class="btn button-light">5</button>
									<button type="button" class="btn button-light">6</button>
								</div>
							</div>
						</div>
					</div>
				</section>
			  </div> -->
			  <div class="tab-pane  active" id="service">
			  <div class="row button-wrapper">
			  <div class="form-group col-md-3 mt-4 mb-3" style="margin-top: 2.5rem !important;">
			  	<h6 class="d-flex align-items-center mb-5">
			  		<img src="{{ asset('assets/themes/ayurveda/images/ayurved-camp/calendar.svg')}}" width="17" class="img-fluid mr-3">
			  		Clinics At {{ $wellness_clusters_id }} Location
			  	</h6>
				  </div>
					<div class="form-group col-md-3 mb-3">
					  <div class="form-group mb-4">
					  <label for="">Select Your Location</label>
							<select name="clinic_location" id="clinic_location" value = "location-bengaluru" >
								<option <?php if($wellness_clusters_id =="Bengaluru") echo 'selected'; ?>  value="location-bengaluru">Bengaluru</option>
								<option <?php if($wellness_clusters_id =="Kochi") echo 'selected'; ?> value="location-kochi">Kochi</option>
								<option <?php if($wellness_clusters_id =="Chennai") echo 'selected'; ?> value="location-chennai">Chennai</option>
								<option <?php if($wellness_clusters_id =="Hyderabad") echo 'selected'; ?> value="location-hyderabad">Hyderabad</option>
								<option <?php if($wellness_clusters_id =="Mumbai") echo 'selected'; ?> value="location-mumbai">Mumbai</option>
								<option <?php if($wellness_clusters_id =="Gurugram") echo 'selected'; ?> value="location-gurugram">Gurugram</option>
							</select>
						</div>
						</div>
					</div>
			  	<div class="row">
			  		<?php
					   $j=0;
				foreach ($clinic as $key)
				{
							$disale=0;
			  		 ?>
			  		<div class="col-lg-4 col-md-6 col-sm-6 mb-3">
			  			<div class="address-wrapper h-100">
				  			<h5 class="d-flex align-items-center mb-4">
				  				<span class="location-img">
				  					<img src="{{ asset('assets/themes/ayurveda/images/ayurved-camp/location.svg')}}" class="img-fluid">
				  				</span>
				  				<?php echo $key->clinic_name; ?>
				  			</h5>
				  			<address><?php echo $key->clinic_address; ?><br/>Pin no. - <?php echo $key->clinic_pin; ?>.</address>
							<address>***Online and Walkin consultaion available***</address>
				  			<div class="d-flex align-items-center justify-content-between bottom_button">
				  				{{-- <a href="{{url('ayurved-camp')}}/{{$key->id}}">Visit Clinic</a> --}}
				  				@php
				  					$location_name=strtolower(Session::get('loction_name'));
				  					//dd($location_name);
				  				@endphp
				  				<a href="{{url('clinic')}}/{{$location_name}}/{{$key->slug}}">Visit Clinic</a>
								  <?php 
								   foreach ($doctor_location as $doctor_lists)
								   {
									   if($key->clinic_id == $doctor_lists->clinic_id && $doctor_lists->doctor_disabled != 'on')
									   {
										  $disale=1;
										 }
									 
									 }
									//if(($wellness_clusters_id =="Bengaluru" || $wellness_clusters_id =="Kochi" || $wellness_clusters_id =="Chennai") && $disale ==1)
									///{ 
										?>
								  <a class="active btn mb-3 mr-3 book-btn books-btn-walk{{$j}}">BOOK CONSULTATION<span class="badge badge-warning new_badge{{$j}} <?php echo $key->slug; ?>" style="background: #800000;color: #fff;font-weight: 500;position: absolute;display: inline-block;margin-left: 6px;font-size: 12px;">New</span></a>
									<?php 
									//}
									 ?>
								  {{-- <a href="javscript:">Book Now</a> --}}
				  			</div>
			  			</div>
			  		</div>
			  	<?php $j++; } ?>
			  	</div>
			  </div>
			</div>
		</div>
		<!-- <div id="doctor-modal-walk" class="modal-wrapper modal-wrapper2 doctor-modal-walk" name= "free_consulation_booking">
			<div class="modal-container">
				<div class="content content2">
					<div class="modal-wrap">
						<div class="row no-gutters">
							<div class="col-md-12">
								<svg class="close"><use xlink:href="{{ asset('assets/themes/ayurveda/images/icons.svg#close')}}"/></svg>
								<div class="modal-info">
									<h3>DOCTOR CONSULTATION</h3>
										<form method="post" id="formoid" >
										<div class="row button-wrapper">
											<div class="form-group col mb-3">
												<label for="">Date</label>
												<input type="text" class="form-control" name="date" id="dates" required picker="date">
											</div>
											<div class="form-group col mb-3">
												<label for="">Time</label>
												<input type="text" name="time" id="times" class="form-control" required picker="time">
											</div>
										</div>
										<div class="form-group mb-4">
												<label for="">Email ID</label>
												<input type="text" class="form-control" name="emailid" id="emailid" required>
										</div>
										<div class="form-group mb-4">
												<label for="">Phone Number</label>
												<input type="text" class="form-control" name="mobl" id="mobl" required>
										</div>
										<div class="row button-wrapper">
											<div class="col mb-3">
												<!-- <button class="button-green w-100">BOOK NOW</button> -->
													<!-- <input type="button" class="button-green w-100 freebooking" id="freebooking"  value="BOOK NOW" />
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		<!-- </div>
		<div id="doctor-modal-thank" class="modal-wrapper modal-wrapper2 doctor-modal-thank">
			<div class="modal-container">
				<div class="content content2">
					<div class="modal-wrap">
						<div class="row no-gutters">
							<div class="col-md-12">
								<svg class="close"><use xlink:href="{{ asset('assets/themes/ayurveda/images/icons.svg#close')}}"/></svg>
								<div class="modal-info">
									<h3>DOCTOR CONSULTATION</h3>
									<p class="mb-4"></p>
									<div>
										<h3 style ="color:#f2bf3e; text-align:center">Your online consultation is confirmed, we will send you the zoom link shortly.</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --> 
		
	<?php
	//$doctor_lists = [['doctor_name'=>'Dr. Pallavi K S','doctor_imgurl'=>'assets/themes/admin/images/doctor_img/1575026447.png', 'clinic_id'=>39,'clinic_name'=>'Kerala Ayurveda, Kasturi Nagar'],['doctor_name'=>'Dr. Azim Nazeer','doctor_imgurl'=>'assets/themes/admin/images/doctor_img/1565267783.jpg', 'clinic_id'=>16,'clinic_name'=>'Kerala Ayurveda, Shivajinagar'],['doctor_name'=>'Dr. Soumya','doctor_imgurl'=>'assets/themes/admin/images/doctor_img/1565267927.jpg', 'clinic_id'=>15,'clinic_name'=>'Kerala Ayurveda, Whitefield'],['doctor_name'=>'Dr. Swetha Panda','doctor_imgurl'=>'assets/themes/admin/images/doctor_img/1580282777.jpg', 'clinic_id'=>14,'clinic_name'=>'Kerala Ayurveda, Jayanagar'],['doctor_name'=>'Dr. Aishwarya Mohan','doctor_imgurl'=>'assets/themes/admin/images/doctor_img/1565267877.jpg', 'clinic_id'=>13,'clinic_name'=>'Kerala Ayurveda, Koramangala'],['doctor_name'=>'Dr. G R Chandran','doctor_imgurl'=>'assets/themes/admin/images/doctor_img/1565267758.jpg', 'clinic_id'=>1,'clinic_name'=>'Kerala Ayurveda, Indiranagar']];	
	// foreach ($clinic as $key)
	// {	
	// 	foreach ($doctor_location as $doctor_lists)
	// 	{
	// 		echo "<pre>";
	// 		if($key->clinic_id == $doctor_lists->clinic_id)
	// 		{
	// 			 print_r($doctor_lists->doctor_name);
	// 		}
	// 	}
	// }
	// exit;
		$n=0;
		foreach ($clinic as $key)
		{	
			foreach ($doctor_location as $doctor_lists)
			{
				if($key->clinic_id == $doctor_lists->clinic_id)
				{
		?>
				<div id="doctor-modal-walk{{$n}}" class="modal-wrapper doctor-modal-walk" name="<?php echo $doctor_lists->doctor_name; ?>">
				<div class="modal-container">
					<div class="content">
						<div class="modal-wrap">
							<div class="row no-gutters">
								<?php $img=$doctor_lists->doctor_imgurl; ?>
								<div class="col-md-5 img-wrapper" style="background:url({{ asset($img)}});background-position: center;">
									{{-- <img src="{{ asset('assets/themes/ayurveda/images/doctor.jpg')}}" alt="" class="img-fluid"> --}}
								</div>
								<div class="col-md-7">
									<svg class="close"><use xlink:href="{{ asset('assets/themes/ayurveda/images/icons.svg#close')}}"/></svg>
									<div class="modal-info">
										<h3>BOOK CONSULTATION</h3>
										<p class="mb-4"><?php echo $doctor_lists->doctor_name; ?></p>
										 <form method="post" id="formoid" >
											<div class="form-group mb-4">
												<label for="">Location</label>
												<select name="clinic_id" id="clinic_ids">
													<option value="<?php echo $doctor_lists->clinic_id; ?>">
														<?php echo $doctor_lists->clinic_name; ?></option>

												</select>
											</div>
											<div class="row button-wrapper">
												<div class="form-group col mb-3">
													<label for="">Date</label>
													<input type="text" class="form-control" name="date" id="dates{{$n}}" required picker="date" readonly>
												</div>
												<div class="form-group col mb-3">
													<label for="">Time</label>
													<input type="text" name="time" id="times{{$n}}" class="form-control" required picker="time" readonly>

													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<input type="hidden" name="doctor_id" id="doctor_ids{{$n}}" value="{{$doctor_lists->doctor_id}}">
													<input type="hidden" name="cluster_type" id="cluster_types" value="doctor">
													<input type="hidden" name="treatments_name" id="treatments_names{{$n}}" value="<?php echo $doctor_lists->doctor_name; ?>">
													<input type="hidden" name="locality" id="locality{{$n}}" value="<?php echo $doctor_lists->clinic_name; ?>">
													<input type="hidden" name="cluster_price" id="cluster_prices{{$n}}" value="{{$doctor_lists->doctor_fee}}">

												</div>
											</div>
											<div class="form-group mb-4">
											<label for="">Name*</label>
													<input type="text" class="form-control" name="name" id="name{{$n}}" required>
											</div>
											<div class="form-group mb-4">
													<label for="">Email ID*</label>
													<input type="text" class="form-control" name="emailid" id="emailid{{$n}}" required>
													<div><span id=err_email{{$n}}></span></div>
											</div>
											<div class="form-group mb-4">
													<label for="">Phone Number*</label>
													<input type="text" class="form-control" name="mobl" id="mobl{{$n}}" required>
													</div>
											<div class="form-group mb-4">
												<?php if($doctor_lists->doctor_disabled != 'on'){ ?>
													<input type="radio" name="consultation_type{{$n}}" id="Online Consultation{{$n}}" value="Online Consultation" <?php if($doctor_lists->doctor_disabled != 'on'){ ?>  checked <?php } ?> 
													 >
													 <label for="consultation_type{{$n}}" class="form-check-label" style = "font-size:16px;margin-right:25px;">Online Consultation</label>
												<?php   } ?>
													
											        <input type="radio" name="consultation_type{{$n}}" id="Walk-in Consultation{{$n}}" value="Walk-in Consultation"  <?php if($doctor_lists->doctor_disabled == 'on'){ ?>  checked <?php } ?>  >
													<label for="consultation_type{{$n}}" class="form-check-label" style = "font-size:16px;">Walk-in Consultation</label>
													</div>
											<div class="form-group mb-4">
												<label for="terms_condition{{$n}}" class="checkbox-inline">I agree to the <a href ="/Terms_Conditions/TERMS_AND_CONDITIONS.pdf" target="_blank" id="download_pdf" style="color: #F9BF37;">
												<input type="checkbox" name="terms_condition" id="terms_condition{{$n}}" required style ='float: left;margin-top: 5px;  margin-right: 10px;float: left;'>Terms & Conditions and Privacy Policy</a></label>
											</div>
											<div><span id=err_inputflds{{$n}} style="color:red; text-align:center"></span></div>
											<div class="row button-wrapper">
												<div class="col-md-12">
													<!-- <button class="button-green w-100">BOOK NOW</button> -->
													 <input type="button" style ="cursor:pointer; font-size:20px" class="button-green w-100 freebooking" id="freebooking{{$n}}"  value="Pay Rs 200" />
												</div>
												<div class="col-md-12" id = "online">
												<br>
												<ul style="font-size : 12px;margin-left: -3% !important;  <?php if($doctor_lists->doctor_disabled == 'on'){ ?> display:none <?php } ?>" class="onlinedesc{{$n}}"> 
														<li>Secure video consultation of 30 mins duration</li>
														<li>2 free follow-ups of 15 mins duration each for 7 days</li>
														<li>You will receive a confirmation email with appointment link, once the payment is done.</li>
													</ul>
											</div>
											</div>
										</form>
										<?php $url = "https://securegw-stage.paytm.in/order/process"; ?>
										<form method='post' action='<?php echo $url; ?>' name='paytm_form' id= "paytm_form{{$n}}">
											<input type="hidden" name="MID" value="Kerala59762616837649">	
											<input type="hidden" name="WEBSITE" value="WEBSTAGING">
											<input type="hidden" name="INDUSTRY_TYPE_ID" value="Retail">
											<input type="hidden" name="CHANNEL_ID" value="WEB">
											<input type="hidden" name="ORDER_ID" value="" id="order_id{{$n}}">
											<input type="hidden" name="CUST_ID" value="" id="cust_id{{$n}}">
											<input type="hidden" name="EMAIL" value="" id="paytm_email_id{{$n}}">
											<input type="hidden" name="MOBILE_NO" value="" id="paytm_mobile{{$n}}">
											<input type="hidden" name="TXN_AMOUNT" value="200.00" id="txn_amount{{$n}}">
											<input type="hidden" name="CHECKSUMHASH" value="" id="checksummash_val{{$n}}">
											<input type="hidden" name="CALLBACK_URL" value="" id="callback_url{{$n}}">
											
										</form>
									</div>
								</div>
							</div>
						</div>
				    </div>
				</div>
			</div>
			<div id="doctor-modal-thank{{$n}}" class="modal-wrapper doctor-modal-thank" name="<?php echo $doctor_lists->doctor_name; ?>">
				<div class="modal-container">
					<div class="content">
						<div class="modal-wrap">
							<div class="row no-gutters">
								<?php if($doctor_lists->doctor_imgurl !==null){ $img=$doctor_lists->doctor_imgurl; ?>
								<div class="col-md-5 img-wrapper" style="background:url({{ asset($img)}})">
								<?php } ?>
									{{-- <img src="{{ asset('assets/themes/ayurveda/images/doctor.jpg')}}" alt="" class="img-fluid"> --}}
								</div>
								<div class="col-md-7">
									<svg class="close"><use xlink:href="{{ asset('assets/themes/ayurveda/images/icons.svg#close')}}"/></svg>
									<div class="modal-info">
										<h3>DOCTOR CONSULTATION</h3>
										<p class="mb-4"><?php echo $doctor_lists->doctor_name; ?></p>
										<div>
											<h3 style ="color:#f2bf3e; text-align:center">Your online consultation is confirmed, we will send you the Video Call link shortly.</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
				    </div>
				</div>
			</div>
			<?php  } } $n++;  }?>
	</div>
	</div>
</section>


@endsection


@php
	$fullFooter = true;


	$footer = true;

	$newsletter = true;
@endphp




@push('style')
<link rel="stylesheet" href="{{ asset('pages.css') }}">
<link rel="stylesheet" href="../../assets/themes/ayurveda/css/selectric.css"></link>
<link rel="stylesheet" href="../../assets/themes/ayurveda/css/owl.carousel.css"></link>
<link rel="stylesheet" href="../../assets/themes/ayurveda/css/ion.rangeSlider.css"></link>
<link rel="stylesheet" href="../../picker/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/themes/ayurveda/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../../assets/themes/ayurveda/js/selectric.min.js"></script>
<script type="text/javascript" src="../../assets/themes/ayurveda/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../../moment.min.js"></script>
<script type="text/javascript" src="../../picker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
$(document).ready(function($) {
	$("#clinic_location").change(function(){
		 var location = this.value;
		 if(location != '')
		 {
			localStorage.currentLocation = location;
			 window.location ="/clinic_listing/"+location;
		 }
		//alert(this.value);
	});
});
	$(function($){
		$(document).ready(function($) {
			$("#price-range").ionRangeSlider({
				type: "double",
				min: 0,
				max: 75,
				from: 10,
				to: 15,
				step: 10,
				onStart: function (data) {
					$('.price-range-box .from').text(data.from);
					$('.price-range-box .to').text(data.to);
				},
				onChange: function (data) {
					$('.price-range-box .from').text(data.from);
					$('.price-range-box .to').text(data.to);
				}
			});
		});
	}($))
var dateToday = new Date();
var d1 = new Date ();
var app_time=d1.getHours() + 3;
var enabled_time = [];
if(app_time <=10)
{
	// dateToday.setDate(dateToday.getDate() + 1); 
	enabled_time = [10, 11, 12, 13, 14, 15, 16, 17, 18];
}
else if (app_time >18)
{
	dateToday.setDate(dateToday.getDate() + 1); 
	enabled_time = [10, 11, 12, 13, 14, 15, 16, 17, 18];
}
else{
	for(var i=app_time; i<=18; i++)
	{
		enabled_time.push(i);
	}
}
$(function($){
		var minimumDate = moment().add(0, 'days').millisecond(0).second(0).minute(0).hour(0);
        $('div[name="Dr. G R Chandran"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	//minDate: minimumDate,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [2],
			minDate: dateToday,
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. G R Chandran"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
        $('div[name="Dr. Azim Nazeer"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [5],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Azim Nazeer"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
        $('div[name="Dr. Anjali Jayantrao Raichur"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [5],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Anjali Jayantrao Raichur"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
        $('div[name="Dr. Aishwarya Mohan"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [4],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Aishwarya Mohan"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
		$('div[name="Dr. Swati Pareek"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [4],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Swati Pareek"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
		$('div[name="Dr. Pallavi K S"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [4],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Pallavi K S"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
	    $('div[name="Dr. Soumya"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [0],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Soumya"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
        $('div[name="Dr. Sadath Dinakar"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [0],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Sadath Dinakar"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			//enabledHours: [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('div[name="Dr. Vasanthakumari K"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [0],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Vasanthakumari K"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			//enabledHours: [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('div[name="Dr. Aparna Das"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [0],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Aparna Das"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			enabledHours: enabled_time,
			ignoreReadonly: true,
			//enabledHours: [10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('div[name="Dr. Anju Antony"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
        	daysOfWeekDisabled: [0],
			ignoreReadonly: true,
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Anju Antony"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			//enabledHours: [9, 10, 11, 12, 13, 14, 15, 16, 17],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('div[name="Dr. Bibin M Jacob"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [5],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Bibin M Jacob"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			enabledHours: enabled_time,
			ignoreReadonly: true,
			//enabledHours: [10, 11, 12, 13, 15, 16, 17, 18, 19, 20],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('div[name="Dr. Srilakshmi"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
        	daysOfWeekDisabled: [5],
			ignoreReadonly: true,
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Srilakshmi"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: [10, 11, 12, 13, 15, 16, 17, 18, 19],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('div[name="Dr. Ajay Kumar Singh"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [1],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Ajay Kumar Singh"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: [12, 13, 15, 16, 17],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('div[name="Dr. Swetha"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [2],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Swetha"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
		$('div[name="Dr. Karthik Krishnan"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [0],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Karthik Krishnan"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: enabled_time,
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('div[name="Dr. Era Sharma"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [1],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Era Sharma"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: [10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
		$('div[name="Dr. Manmohan"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [6],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Manmohan"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: [10, 11, 12, 13, 14, 15, 16, 17, 18],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
		$('div[name="Dr. Godwin"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
        	daysOfWeekDisabled: [2],
			ignoreReadonly: true,
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Godwin"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: [10, 11, 12, 13, 14, 15, 16, 17, 18],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
		$('div[name="Dr. Natasha"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
        	daysOfWeekDisabled: [0],
			ignoreReadonly: true,
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Natasha"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: [10, 11, 12, 13, 14, 15, 16, 17, 18],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
        $('div[name="Dr. Varsha Avinash Tawde"] input[picker="date"]').datetimepicker({
        	format: 'MM-DD-YYYY',
        	minDate: dateToday,
			ignoreReadonly: true,
        	daysOfWeekDisabled: [0],
        	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: 'fa fa-angle-right',
            	previous: 'fa fa-angle-left'
            }
        });
        $('div[name="Dr. Varsha Avinash Tawde"] input[picker="time"]').datetimepicker({
        	format: 'LT',
        	useCurrent: true,
			ignoreReadonly: true,
			enabledHours: [11, 12, 13, 14, 15, 16, 17, 18, 19],
			stepping: 30,
           	widgetPositioning:{
	            horizontal: 'auto',
	            vertical: 'top'
            },
        	icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
     });
<?php 
$n=0;
foreach ($clinic as $key)
{
?>
$(document).ready(function($) {
	var input_date =$('#dates{{$n}}').val();
	var currentYear = (new Date).getFullYear();
	var currentMonth = (new Date).getMonth() + 1;
	var currentDay = (new Date).getDate();
	var todayDate = currentMonth+"-"+currentDay+"-"+currentYear;
	var i=0;
	if(new Date(input_date) > new Date(todayDate))
	{
		$('#times{{$n}}').data('DateTimePicker').enabledHours( [10, 11, 12, 13, 14, 15, 16, 17, 18]);
		// var dateToday2 = new Date();
		// var app_time2=dateToday2.getHours() + 3;
		// if(app_time2 < 18)
		// {
		// 	dateToday2.setDate(dateToday2.getDate() - 1); 
		// 	$('#dates{{$n}}').datetimepicker('minDate', dateToday2);
		// }
				
	}
});
$(document).ready(function($) {
$('#dates{{$n}}').datetimepicker().on('dp.change', function (event) {
	var input_date =$('#dates{{$n}}').val();
	var currentYear = (new Date).getFullYear();
	var currentMonth = (new Date).getMonth() + 1;
	var currentDay = (new Date).getDate();
	var todayDate = currentMonth+"-"+currentDay+"-"+currentYear;
	var i=0;
	if(new Date(input_date) > new Date(todayDate))
	{
		$('#times{{$n}}').data('DateTimePicker').enabledHours( [10, 11, 12, 13, 14, 15, 16, 17, 18]);
		var dateToday2 = new Date();
		var app_time2=dateToday2.getHours() + 3;
		if(app_time2 < 18)
		{
			dateToday2.setDate(dateToday2.getDate() - 1); 
			$('#dates{{$n}}').datetimepicker('minDate', dateToday2);
		}
				
	}
	else if(new Date(input_date) <= new Date(todayDate))
	{
		if(i == 0)
		{
			console.log(input_date);
			var dateToday3 = new Date();
			var app_time3=dateToday3.getHours() + 3;
			var enabled_times = [];
			if(app_time3 <=10 || app_time3 >18)
			{
				enabled_times = [10, 11, 12, 13, 14, 15, 16, 17, 18];
			}
			else{
				for(var i=app_time3; i<=18; i++)
				{
					enabled_times.push(i);
				}
			}
			$('#times{{$n}}').data('DateTimePicker').enabledHours(enabled_times); 
			if(app_time3 < 18)
			{	
				var dateToday2 = new Date();
				//dateToday2.setDate(dateToday2.getDate() + 1); 
				//$('#dates{{$n}}').datetimepicker('minDate', dateToday2);
			}
		}
		return;
		i++
	}
	
});
});
<?php 
$n++; } 
$i=0;
foreach ($clinic as $key)
{

?>
	$(document).ready(function($) {
		$("input[name='consultation_type{{$i}}']").change(  function() {
					if($("input[name='consultation_type{{$i}}']:checked").val() == 'Walk-in Consultation')
					{
						$(".onlinedesc{{$i}}").hide();
						var fee = $("#cluster_prices{{$i}}").val();
						$("#freebooking{{$i}}").val("Pay Rs "+fee);
					}
					else if($("input[name='consultation_type{{$i}}']:checked").val() == 'Online Consultation')
					{	
						$(".onlinedesc{{$i}}").show();
						$("#freebooking{{$i}}").val("Pay Rs 200");
					}
			});
		$("body").on('click','.books-btn-walk{{$i}}', function(event){
			$("#doctor-modal-walk{{$i}}").fadeIn('400');
		});
		$('#doctor-modal-walk{{$i}} .close').click(function(event) {
			$('#doctor-modal-walk{{$i}}').fadeOut(200);
		});
		$('#freebooking{{$i}}').on('click', function () {
			$("#err_inputflds{{$i}}").html("");
			var email = $("#emailid{{$i}}").val();
			var mobile = $("#mobl{{$i}}").val();
			var date = $("#dates{{$i}}").val();
			var time = $("#times{{$i}}").val();
			var name =  $("#name{{$i}}").val();
			var consultation_type = $("input[name='consultation_type{{$i}}']:checked").val();
			var doctor_name = $("#treatments_names{{$i}}").val();
			var doctor_locality = $("#locality{{$i}}").val();
			var doctors_id = $("#doctor_ids{{$i}}").val();
			var mobNum = $("#mobl{{$i}}").val();
			var filter = /^\d*(?:\.\d{1,2})?$/;
			var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
			if(email == '' || mobile == '' || name =='')
			{
				$("#err_inputflds{{$i}}").html("Please Enter your details");
			}
			else 
			{
				if(!testEmail.test(email))
				{
					$("#err_inputflds{{$i}}").html("Please Enter valid Email Address");
				}
				else if (!filter.test(mobNum)) {
					$("#err_inputflds{{$i}}").html("Please Enter valid mobile number");
				}
				else if(mobNum.length !=10){
					$("#err_inputflds{{$i}}").html("Please Enter your 10  digit mobile number");
				} 
				else
				{
					$("#err_inputflds{{$i}}").html("");
					$.ajax({
						headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
						type: 'POST',
						cache: false,
						//data: { 'treatments_id':treatments_id, 'doctor_id' : doctor_id, 'treatments_name':treatments_name,'cluster_price':cluster_price,'total_cluster_price':total_cluster_price,'clinic_id':clinic_id,'date':date,'time':time,'emailid':email,'mobl':mobile,'cluster_type':cluster_type},
						data: { 'date':date,'time':time,'emailid':email,'mobl':mobile, 'doctor_name':doctor_name, 'locality':doctor_locality, 'name':name, 'consultation_type':consultation_type,'doctor_id':doctors_id},
						url: "/booking_cart_free",
						success: function(response) {
							console.log(response);
							
							if(response.status == 'failure'){
								$("#err_inputflds{{$i}}").html(response.message);
							}else if (response.status == 'success')
							{
								jQuery('body').append('<div class="FULL_loader" style="position: fixed;width: 100%;height: 100%;text-align: center;background: rgba(0,0,0,0.8);z-index: 9999;top: 0;left: 0;"><div class="FULL_loader_text" style=" position: absolute; top: 0; margin: 43vh 0; width: 100%; color: #fff; ">You are redirecting to a Payment Page. Please Wait...</div></div>');
								$("#order_id{{$i}}").val(response.id);
								$("#cust_id{{$i}}").val(response.id);
								$("#paytm_email_id{{$i}}").val(email);
								$("#paytm_mobile{{$i}}").val(mobile);
								if(consultation_type == "Online Consultation")
								{
									$("#txn_amount{{$i}}").val("200");
								}
								else if(consultation_type == "Walk-in Consultation")
								{
									var amount = $("#cluster_prices{{$i}}").val();
									$("#txn_amount{{$i}}").val(amount);
								}
								$("#checksummash_val{{$i}}").val(response.checksum);
								$("#callback_url{{$n}}").val('https://phplaravel-256316-1216447.cloudwaysapps.com/checkout/thankyou_paid_onlineconsultation/'+response.id)
								console.log(response);
								$("#paytm_form{{$i}}").submit();
							}
						},
					});
				}
			}

			
			
		});
		$('#doctor-modal-thank{{$i}} .close').click(function(event) {
			$('#doctor-modal-thank{{$i}}').fadeOut(200);
		});
	});

<?php $i++; } ?>
$(function($){
$(document).ready(function($) {
$('select').selectric();

var showChar = 100;
var ellipsestext = "...";
var moretext = "Read more";
var lesstext = "Read less";


$('.more').each(function() {
var content = $(this).html();

if(content.length > showChar) {

var c = content.substr(0, showChar);
var h = content.substr(showChar, content.length - showChar);

var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span></span>';

$(this).html(html);
}

});

$(".moreless-button").click(function(){
if($(this).hasClass("less")) {
$(this).removeClass("less");
$(this).html(moretext);
} else {
$(this).addClass("less");
$(this).html(lesstext);
}
// $ellipsestext.toggle();
$(this).parent().prev().toggle();
$(this).prev().find(".moreellipses").toggle();
$(this).prev().find(".morecontent").toggle();
// $(this).prev().toggle();
return false;
});

// $('.moreless-button').click(function() {
// $(this).prev().slideToggle(400);
// if ($('.moreless-button').text() == "Read more") {
// $(this).text("Read less")
// } else {
// $(this).text("Read more")
// }
// });

$(".books-btn-walk0").click(function(event){
$("#doctor-modal-walk0").fadeIn('400');
});

$('#doctor-modal-walk0 .close').click(function(event) {
$('#doctor-modal-walk0').fadeOut(200);
});
$(".books-btn0").click(function(event){
$("#doctor-modal0").fadeIn('400');
});

$('#doctor-modal0 .close').click(function(event) {
$('#doctor-modal0').fadeOut(200);
});

$('#doctor-modal-thank0 .close').click(function(event) {
$('#doctor-modal-thank0').fadeOut(200);
});
/*$(document).ready(function(){

$('#freebooking0').on('click', function () {
	$("#err_inputflds0").html("");
var email = $("#emailid").val();
var mobile = $("#mobl").val();
var doctor_name = $("#treatments_names").val();
var doctor_locality = $("#locality").val();
var date = $("#dates").val();
var time = $("#times").val();
if(email == '' || mobile =='')
{
$("#err_inputflds0").html("Please Enter your details");
}
else{
$("#err_inputflds0").html("");
$.ajax({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
type: 'POST',
cache: false,
data: { 'date':date,'time':time,'emailid':email,'mobl':mobile, 'doctor_name':doctor_name, 'locality':doctor_locality},
url: "/booking_cart_free",
success: function(response) {
console.log(response);
if(response == 'success')
{
$('#doctor-modal-walk0').fadeOut(200);
$("#doctor-modal-thank0").fadeIn('400');
console.log("Successssssssssss");
}
},
});
}
});
});*/


$('.choose-concern .owl-carousel').owlCarousel({
/*items : 1,
loop : true,
smartSpeed : 600,
dots : false,
nav : false,
navText : ['<svg><use xlink:href="images/icons.svg#left-arrow" /></svg>', '<svg><use xlink:href="images/icons.svg#right-arrow" /></svg>'],
responsive : {
0 : {
items : 1
},
375 : {
items : 2
},
768 : {
items : 3
},
992 : {
items : 4
},
1200 : {
items : 6
}
}*/
});

$('.testimonials .owl-carousel').owlCarousel({
items : 1,
loop : true,
smartSpeed : 300,
autoHeight : true,
dots : false,
animateOut: 'fadeOut',
animateIn: 'fadeIn',
});

$('.testimonials .control.prev').click(function() {
$('.testimonials .owl-carousel').trigger('prev.owl.carousel');
});
$('.testimonials .control.next').click(function() {
$('.testimonials .owl-carousel').trigger('next.owl.carousel');
});
		
			$("#price-range").ionRangeSlider({
				type: "double",
				min: 0,
				max: 75,
				from: 10,
				to: 15,
				step: 10,
				onStart: function (data) {
					$('.price-range-box .from').text(data.from);
					$('.price-range-box .to').text(data.to);
				},
				onChange: function (data) {
					$('.price-range-box .from').text(data.from);
					$('.price-range-box .to').text(data.to);
				}
			});
		});
	}($))
</script>
<script>
function getClinic(val) {
	alert(val);
	/*$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
	}
	});*/
}
</script>
@endpush
