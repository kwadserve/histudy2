@extends('frontend.body.master')
@section('title', 'Seminer Detay')
@section('content')



<div class="checkout_area bg-color-white rbt-section-gap">
	<div class="container">
		<form action="{{route('front.course.odeme')}}" method="POST">
			@csrf
		<div class="row g-5 checkout-form">
			
			@if($errors->any())
				@foreach($errors->all() as $e)
					<h6 syle="color:red!important"> {{$e }} </h6>
				@endforeach
			@endif

			<div class="col-lg-7">
				<div class="checkout-content-wrapper">

					
					<!-- Billing Address -->
					<div id="billing-form">
						<h4 class="checkout-title">Bilgiler</h4>

						<div class="row">
							@foreach($kisi as $item)
							<input type="hidden" value="{{$item->id}}" name="kisi_id">
							<div class="col-md-6 col-12 mb--20">
								<label>İsim <span style="color:red" title="ZORUNLU">*</span></label>
								<input type="text" name="name" value="{{$item->name ?? ''}}" placeholder="İsim...">
							</div>

							<div class="col-md-6 col-12 mb--20">
								<label>Soy isim <span style="color:red" title="ZORUNLU">*</span></label>
								<input type="text" name="surname" value="{{$item->surname ?? ''}}" placeholder="Soy isim...">
							</div>

							<div class="col-md-6 col-12 mb--20">
								<label>Email <span style="color:red" title="ZORUNLU">*</span></label>
								<input type="email" name="email" value="{{$item->email ?? ''}}" placeholder="Email...">
							</div>

							<div class="col-md-6 col-12 mb--20">
								<label>Telefon <span style="color:red" title="ZORUNLU">*</span></label>
								<input type="text" name="phone" value="{{$item->phone ?? ''}}" placeholder="Telefon...">
							</div>


							<div class="col-12 mb--20">
								<label>Adres <span style="color:red" title="ZORUNLU">*</span></label>
								<textarea  name="address" placeholder="Adres...">{{$item->address ?? ''}}</textarea>
							</div>
							
							
							@endforeach
						</div>

					</div>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="row pl--50 pl_md--0 pl_sm--0">
					<!-- Cart Total -->
					<div class="col-12 mb--60">


						<div class="checkout-cart-total">

							<h4>Seminer</h4>
							<ul>
								
								@foreach($kurs as $data)
									
								<input type="hidden" value="{{$data->id}}" name="course_id">
								<li>Seminer : <span>{{strtoupper($data->title)}}</span></li>
								<li>Öğretmen :<span>{{strtoupper($data->ogretmen->name)}} {{strtoupper($data->ogretmen->surname)}}</span></li>
								<li>Başlangıç: <span>{{substr($data->start,0,10)}}</span></li>
								<li>Bitiş : <span>{{substr($data->finish,0,10)}}</span> </li>
								@endforeach
								@php
									$item = $kurs[0];
									$tutar = ($item->toplam_saat) * ($item->price);
									$kdv = $tutar * (0.20);
									$total = $tutar + $kdv;
								@endphp
								
							</ul>
							<ul>
								<li>Seans : <span>{{$item->toplam_saat}} SEANS</span></li>
								<li>Seans Fiyat : <span>{{$item->price}} TL</span></li>
								<li>KDV (%20) : <span>{{$kdv}} TL</span></li>
							</ul>
							
							<h4 class="mt--30">Total <span>{{$total}} TL</span></h4>
							<input type="hidden" name="price" value="{{ $total }}">

						</div>

					</div>
					<div class="plceholder-button mt--50" >
						<button class="rbt-btn btn-gradient hover-icon-reverse">
							<span class="icon-reverse-wrapper">
								<span class="btn-text">Satın Al</span>
								<span class="btn-icon"><i class="feather-arrow-right"></i></span>
								<span class="btn-icon"><i class="feather-arrow-right"></i></span>
							</span>
						</button>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>

<div class="rbt-separator-mid">
	<div class="container">
		<hr class="rbt-separator m-0">
	</div>
</div>

@endsection