@extends('frontend.body.master')
@section('title','Blog Detay')
@section('content')

<div class="rbt-overlay-page-wrapper">
        <div class="breadcrumb-image-container breadcrumb-style-max-width">
            <div class="breadcrumb-image-wrapper">
                <img src="/assets/images/bg/bg-image-10.jpg" alt="Education Images">
            </div>
            <div class="breadcrumb-content-top text-center">
                <h1 class="title">{{$data->title}}</h1>
                <p>{{$data->short_description}}</p>
            </div>
        </div>

        <div class="rbt-blog-details-area rbt-section-gapBottom breadcrumb-style-max-width">
			<div class="row">
				
			<div class="col-lg-8">
            <div class="blog-content-wrapper rbt-article-content-wrapper">
                <div class="content">
                    <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide">
                        <figure>
                            <img src="{{$data->kapak != null ? url('assets'.$data->kapak) : url('/assets/images/blog/blog-single-03.png')}}" alt="Blog Images">
                        </figure>
                    </div>
                    
					{!!$data->long_description!!}
					<br>
					<hr>
				</div>
				</div>
				
			</div>
				
				
				<div class="col-lg-4">
							<aside class="rbt-sidebar-widget-wrapper rbt-gradient-border">

								

								<!-- Start Widget Area  -->
								<div class="rbt-single-widget rbt-widget-recent">
									<div class="inner">
										<h4 class="rbt-widget-title">Popüler Blog Yazıları</h4>
										<ul class="rbt-sidebar-list-wrapper recent-post-list">
											
											@foreach($uc as $item)
											<li>
												<div class="thumbnail">
													<a href="https://artelegansacademy.com/blog/detay/1">
														<img src="{{$item->kapak != null ? url('assets'.$item->kapak) : url('assets/images/event/grid-type-04.jpg')}}" alt="Academy">
													</a>
												</div>
												<div class="content">
													<h6 class="title"><a href="https://artelegansacademy.com/blog/detay/1">{{$item->title}}</a></h6>
													<ul class="rbt-meta">
														<li><i class="feather-clock"></i>{{$item->created_at}}</li>
													</ul>
												</div>
											</li>
											@endforeach
																						
																						
											
										</ul>
									</div>
								</div>
								<!-- End Widget Area  -->

								<!-- Start Widget Area  -->
								<div class="rbt-single-widget rbt-widget-recent">
									<div class="inner">
										<h4 class="rbt-widget-title">Son Blog Yazıları</h4>
										<ul class="rbt-sidebar-list-wrapper recent-post-list">
											
											@foreach($sondan_basa as $item)
											<li>
												<div class="thumbnail">
													<a href="https://artelegansacademy.com/blog/detay/4">
														<img src="{{$item->kapak != null ? url('assets'.$item->kapak) : url('assets/images/event/grid-type-04.jpg')}}" alt="Academy">
													</a>
												</div>
												<div class="content">
													<h6 class="title"><a href="https://artelegansacademy.com/blog/detay/4">{{$item->title}}</a></h6>
													<ul class="rbt-meta">
														<li><i class="feather-clock"></i>26 Mar, 2025</li>
													</ul>
												</div>
											</li>
											@endforeach										
																						
										</ul>
									</div>
								</div>
								<!-- End Widget Area  -->

								
							</aside>
						</div>
				
				
				<div class="blog-content-wrapper rbt-article-content-wrapper">
					<div class="content">
					
					
					

                    <div class="rbt-comment-area">
                        <h4 class="title">{{$data->Sayac()}} Yorum </h4>
                        <ul class="comment-list">
							
							@foreach($yorumlar as $item)
                            <!-- Start Single Comment  -->
                            <li class="comment">
                                <div class="comment-body">
                                    <div class="single-comment">
                                        <div class="comment-img">
                                            <img src="{{$item->kisi->photo != null ? url('assets'.$item->kisi->photo) : url('assets/images/users/avatar-6.jpg')}}" alt="Author Images">
                                        </div>
                                        <div class="comment-inner">
                                            <h6 class="commenter">
                                                <a href="#">{{$item->kisi->name}} {{$item->kisi->surname}}</a>
                                            </h6>
                                            <div class="comment-meta">
                                                <div class="time-spent">{{$item->created_at}}</div>
                                            </div>
                                            <div class="comment-text">
                                                <p class="b2">{{$item->comment}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End Single Comment  -->
							@endforeach
<hr>
                            <br>
							@if(!Auth::guard('ogrenci')->check())
							<center>
							<div class="center">
								<span>Yorum yapmak için </span> <a href="{{route('front.login')}}"> giriş yap!</a>
							</div>
							</center>
							@endif
							@if(Auth::guard('ogrenci')->check())
							<div class="comment-respond">
								
								
								
                            <h4 class="title">Yorum yap</h4>
								
								
                            <form action="{{route('front.comment.store')}}" method="POST">
								@csrf
								<input type="hidden" value="{{$data->id}}" name="blog_id">
								<div class="col-12">
									<div class="form-group">
										<label for="message">Yorum</label>
										<textarea id="message" name="yorum"></textarea>
									</div>
								</div>
								
								<div class="col-lg-12">
									<input type="submit" value="Kaydet" class="rbt-btn btn-gradient icon-hover radius-round btn-md">
									
								</div>
                            </form>
                        </div>
						<hr>
							@endif
							<br>
                        </ul>
                    </div>

                </div>
                <div class="related-post pt--60">
                    <div class="section-title text-start mb--40">
                        <span class="subtitle bg-primary-opacity">POPÜLER</span>
                        <h4 class="title">Diğer Blog Yazıları</h4>
                    </div>
					
					@foreach($uc as $item)

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        <div class="rbt-card-img">
                            <a href="{{route('front.blog.detail',$item->id)}}">
                                <img src="{{$item->kapak != null ? url('assets'.$item->kapak) : url('assets/images/blog/blog-card-02.jpg')}}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{route('front.blog.detail',$item->id)}}">{{$item->title}}</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{route('front.blog.detail',$item->id)}}">
                                    İçerik<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
					
					@endforeach

                </div>
            </div>
				
				
			</div>
        </div>
    </div>
@endsection
@section('script-bottom')
    @include('sweetalert::alert')
    <script src="sweetalert2.min.js"></script>

@endsection