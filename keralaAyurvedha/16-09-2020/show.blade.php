@extends('section.master')
@section('title', $post->title )
@push('meta')
	<meta name="title" content="{{ $post['meta_keywords'] }}">
	<meta name="description" content="{{ $post['meta_description'] }}">

@endpush
@section('content')
@php
	$product_trending = collect(file_store('shop', 'trending'));
		$product_top_seller = collect(file_store('shop', 'top-sellers'));
		// dd(file_store('shop', 'ecommerce'));
		$url = !empty(file_store('shop', 'ecommerce')['image']) ? asset('uploads/ecommerce/'.file_store('shop', 'ecommerce')['image']) : '';
@endphp

<section id="blog-detail-page">
		<div class="section-heading">
			<div class="container">

				<div class="row">
					<div class="col">
						<h1>{{ $post->title }}</h1>
					</div>
				</div>
				<ol class="breadcrumb">
					{{-- <li class="breadcrumb-item">ARTICLES</li> --}}
					<li class="breadcrumb-item">
						{{ strtoupper(format_date($post->published_at)) }}
					</li>
					{{-- @if (class_basename($post)!="News")
						<li class="breadcrumb-item">
							{{ strtoupper($post->author_name) }}
						</li>
					@endif --}}
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 mb-4">
					<div class="social-icons">
						<a href="https://www.facebook.com/sharer/sharer.php?u={{ route('pages.blog.detail', $slug) }}"><svg><use xlink:href="#facebook" /></svg></a>
						{{-- <a href="{{ \Settings::get('social_links')['facebook'] }}"><svg><use xlink:href="#facebook" /></svg></a> --}}


						{{-- <a href="{{ \Settings::get('social_links')['twitter'] }}"><svg><use xlink:href="#twitter" /></svg></a> --}}
						<a href="https://twitter.com/intent/tweet?text={{ $post->title }}&amp;url={{ route('pages.blog.detail', $slug) }}" id="">
						<svg><use xlink:href="#twitter" /></svg></a>

						{{-- <a href="{{ \Settings::get('social_links')['linkedin'] }}"><svg><use xlink:href="#linkedin" /></svg></a> --}}

						<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ route('pages.blog.detail', $slug) }}&amp;title={{ $post->title }}&amp;summary={{ $post['meta_description'] }}"><svg><use xlink:href="#linkedin" /></svg></a>

						{{-- <a href="{{ \Settings::get('social_links')['pinterest'] }}"><svg><use xlink:href="#pinterest" /></svg></a> --}}

						<a href="http://pinterest.com/pin/create/button/?url={{ route('pages.blog.detail', $slug) }}&description={{ $post['meta_description'] }}&media=Media"><svg><use xlink:href="#pinterest" /></svg></a>

						<a href="{{ \Settings::get('social_links')['instagram'] }}"><svg><use xlink:href="#instagram" /></svg></a>

						<a href="{{ \Settings::get('social_links')['youtube'] }}"><svg><use xlink:href="#youtube" /></svg></a>
						<!-- <a href="javascript:" class="d-flex align-items-center" id="blog_like" data-id="{{ $post->id }}">
							<svg ><use xlink:href="#like" /></svg>
							@php 	
								$likecount  =0;
								if(isset($post->likes) && $post->likes !==null)
								{
									$likecount = $post->likes->count();
								}
							@endphp
							<span title="Likes">{{ $likecount ?? 0 }}</span>
						</a> -->
					</div>
				</div>
				<div class="col-md-4 mb-4 d-flex justify-content-end">
					<div class="social-icons">
						<!-- <a href="javascript:" class="d-flex align-items-center" id="blog_like" data-id="{{ $post->id }}">
							<svg ><use xlink:href="#like" /></svg>
							@php 	
								$likecount  =0;
								if(isset($post->likes) && $post->likes !==null)
								{
									$likecount = $post->likes->count();
								}
							@endphp
							<span title="Likes">{{ $likecount ?? 0 }}</span>
						</a> -->

						<a href="javascript:" id="blog_comment" >
							<svg ><use xlink:href="#comment" /></svg>
						</a>
					</div>
				</div>
			</div>
			{!! $post->short_description !!}
			<hr>
			{!! $post->content !!}
		</div>
		{{-- <hr> --}}

		{{-- <ul class="has-tag">
			<li><a href="javascript:">#BRAHMI</a></li>
			<li><a href="javascript:">#PEARLS</a></li>
			<li><a href="javascript:">#MEMORY</a></li>
			<li><a href="javascript:">#HAIRCARE</a></li>
		</ul> --}}
		<!-- <div class="container ss-pro-btn">
			<div class="row">
				<div class="col-md-12 cl">
					<div class="col-md-8">
					<div class="flex-im">
						<img src="https://phplaravel-256316-1216447.cloudwaysapps.com/assets/themes/ayurveda/images/time-1.png" style="width:64px !important; opacity: 0;">
						<p>Start your journey towards holistic wellness with our unique range of Ayurvedic solutions.</p>
					</div>
					</div>
					<div class="col-md-4">
						<div class="products-btn">
							<a href="https://phplaravel-256316-1216447.cloudwaysapps.com/product">Browser our products</a>
						</div>

					</div>

				</div>

			</div>
		</div>
		<div class="container ss-con-dr">
			<div class="row">
				<div class="col-md-12 cl">
					<div class="col-md-8">
					<div class="flex-im">
						<img src="https://phplaravel-256316-1216447.cloudwaysapps.com/assets/themes/ayurveda/images/time-1.png" style="width:64px !important; opacity: 0;">
						<p>Looking for advice? Our team of Ayurvedic experts can help.</p>
					</div>
					</div>
					<div class="col-md-4">
						<div class="products-btn">
							<a href="https://phplaravel-256316-1216447.cloudwaysapps.com/doctors">Consult Doctor</a>
						</div>
					</div>

				</div>

			</div>
		</div> -->

		<div id="popular-product" class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-md content-col">
					<h3>Trending</h3>
					<p trending-package>{{ $product_trending->first()['package'] }}</p>
					<h5 trending-title>
						<a href="{{ $product_trending->first()['url'] }}">
							{{ $product_trending->first()['title'] }}
						</a>
					</h5>
				</div>
				<div class="col-md-4 col-xl-5">
					<div id="trending" class="owl-carousel">
						@foreach($product_trending as $pt)
		                    <figure package="{{ $pt['package'] }}" title="{{ $pt['title'] }}" url="{{ $pt['url'] }}">
		                    	<img src="{{ asset('uploads/shop/trending/'.$pt['image'][0]) }}" class="img-fluid">
		                    </figure>
	                    @endforeach
					</div>
				</div>
			</div>
		</div>

		<div id="comments" class="container comments mb-5 pb-5">
			<div class="comments-wrapper">
				<h4>{{count($blog_comment)}} Comments</h4>
				<div class="comment-block mb-4">
					@foreach ($blog_comment as $key)


					<div class="comment-content mb-5">

						<div class="row align-items-center">
							{{-- <div class="col-md-2 mb-3 logo">
								<img src="images/wellness-center/user.png" width="70" class="img-fluid" alt="">
							</div> --}}
							<div class="col-md-8 mb-3 name-detail">
								<h5>{{$key->name}}</h5>
								<h6>{{$key->created_at}}</h6>
							</div>
							<div class="col-md-2 mb-3 reply-icon">
								<a href="javascript:">
									<svg><use xlink:href="#reply"></use></svg>
									<strong>REPLY</strong>
								</a>
							</div>
						</div>
						<span>{{$key->comment}}</span>
					</div>
					@endforeach
					{{-- <div class="comment-content pl-5  mb-5">
						<div class="row align-items-center">
							<div class="col-md-2 mb-3 logo">
								<img src="images/wellness-center/user.png" width="70" class="img-fluid" alt="">
							</div>
							<div class="col-md-8 mb-3 name-detail">
								<h5>Saranya PN</h5>
								<h6>15 Nov 2018 | 03:32 PM</h6>
							</div>
							<div class="col-md-2 mb-3 reply-icon">
								<a href="javascript:">
									<svg><use xlink:href="#reply"></use></svg>
									{{-- <strong>REPLY</strong>
								</a>
							</div>
						</div>
						<span>Hey Kerala Ayurveda, really useful article.Thank God i found your website.</span>
					</div> --}}
					{{-- <div class="comment-content mb-5">
						<div class="row align-items-center">
							<div class="col-md-2 mb-3 logo">
								<img src="images/wellness-center/user.png" width="70" class="img-fluid" alt="">
							</div>
							<div class="col-md-8 mb-3 name-detail">
								<h5>Saranya PN</h5>
								<h6>15 Nov 2018 | 03:32 PM</h6>
							</div>
							<div class="col-md-2 mb-3 reply-icon">
								<a href="javascript:">
									<svg><use xlink:href="#reply"></use></svg>
									{{-- <strong>REPLY</strong>
								</a>
							</div>
						</div>
						<span>Hey Kerala Ayurveda, really useful article.Thank God i found your website.</span>
					</div> --}}
				</div>
				<h4>Post Comment</h4>
				<div id="comment-form">
					{{-- <form  method="post" action="{{ url('blog_comment') }}"> --}}
						 <form method="POST" action="{{ route('blog.detail',[$post->slug]) }}" accept-charset="UTF-8" class="ajax-form" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
							<input type="hidden" name="reviews_for" id="reviews_for" class="form-control" placeholder="Your Name" value="{{ $post->title }}">
							<input type="hidden" name="blog_slug" id="blog_slug" class="form-control" value="{{ $post->slug }}">
							<input name="_token" type="hidden" value="{{ Session::token() }}">

						</div>
						<div class="form-group">
							<input type="email" name="email" id="name" class="form-control" placeholder="Your Email" required>
						</div>
						<div class="form-group">
							<textarea name="comment" id="" class="w-100" placeholder="Your Message" rows="7"></textarea>
						</div>
						<div class="button-wrpper">
							<input type="submit" id="submit-btn" class="button-green" value="POST COMMENT">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="offers" class="px-4">

			@if (count($all_posts )== 0)

			@else
					<h2>Viewers who read this also read</h2>
			@endif


			<div class="owl-carousel">
			@if (isset($all_posts)  && $all_posts  !==null && $all_posts  !=="undefined" && count($all_posts )>0)
				@foreach ($all_posts as $post_id)
					@if ($post->id == $post_id->id)



				@else
						<figure>
						<img src="{{ get_featured_image($post_id) }}" alt="Post" class="img-fluid">

						<figcaption>
							<h3 style="font-size:20px;">{{$post_id->title}}</h3>
							<p>{{str_limit($post_id->short_description,150)}}</p>
							<a class="post-thumb" href="{{ route('pages.blog.detail',$post_id->slug) }}">
							<button class="btn button-green button-round">Read More</button>
						</a>
						</figcaption>
					</figure>
				@endif
				@endforeach
			@endif
			</div>
		</div>
		{{-- <div id="offers" class="px-4">
			<h2>Viewers who read this also read</h2>

			<div class="owl-carousel">
				<figure>
					<img src="{{ asset('assets/themes/ayurveda/images/ecommerce/offers/1.jpg') }}" class="img-fluid">

					<figcaption>
						<h3>Ayurvedic Champi with Kesini Oil for Healthy Hair</h3>
						<p>Regular massage detoxifies your  body and nourishes the tissues  deep within.</p>
						<button class="btn button-green button-round">Read More</button>
					</figcaption>
				</figure>
				<figure>
					<img src="{{ asset('assets/themes/ayurveda/images/ecommerce/offers/2.jpg') }}" class="img-fluid">

					<figcaption>
						<h3>Ayurvedic Champi with Kesini Oil for Healthy Hair</h3>
						<p>Regular massage detoxifies your  body and nourishes the tissues  deep within.</p>
						<button class="btn button-green button-round">Read More</button>
					</figcaption>
				</figure>
				<figure>
					<img src="{{ asset('assets/themes/ayurveda/images/ecommerce/offers/3.jpg') }}" class="img-fluid">

					<figcaption>
						<h3>Ayurvedic Champi with Kesini Oil for Healthy Hair</h3>
						<p>Regular massage detoxifies your  body and nourishes the tissues  deep within.</p>
						<button class="btn button-green button-round">Read More</button>
					</figcaption>
				</figure>
				<figure>
					<img src="{{ asset('assets/themes/ayurveda/images/ecommerce/offers/2.jpg') }}" class="img-fluid">

					<figcaption>
						<h3>Ayurvedic Champi with Kesini Oil for Healthy Hair</h3>
						<p>Regular massage detoxifies your  body and nourishes the tissues  deep within.</p>
						<button class="btn button-green button-round">Read More</button>
					</figcaption>
				</figure>
				<figure>
					<img src="{{ asset('assets/themes/ayurveda/images/ecommerce/offers/3.jpg') }}" class="img-fluid">

					<figcaption>
						<h3>Ayurvedic Champi with Kesini Oil for Healthy Hair</h3>
						<p>Regular massage detoxifies your  body and nourishes the tissues  deep within.</p>
						<button class="btn button-green button-round">Read More</button>
					</figcaption>
				</figure>
			</div>
		</div> --}}

	</section>
@endsection

@php
	$fullFooter = true;

	$footer = true;

	$newsletter = true;
@endphp

@push('style')
<link rel="stylesheet" href="/assets/themes/ayurveda/css/owl.carousel.css">
<style>
	#blog-detail-page h4{
	    font-weight: 600;
	    font-size: 23px;
	}
	#blog-detail-page .comments-wrapper h5{
	    color: #000;
	    font-size: 15px;
	    font-weight: 600;
	    margin-bottom: 3px;
	}
	#blog-detail-page .comments-wrapper h6{
    	font-size: 13px;
	}
	#blog-detail-page .comments-wrapper h6{
    	font-size: 13px;
	}
	#blog-detail-page .comments .comments-wrapper {
	    border-radius: 8px;
	}
	#blog-detail-page .comment-content svg{
		width: 11px;
		height: 11px;
	}
	#blog-detail-page .reply-icon a strong{
	    color: #000;
	    font-size: 12px;
	}
	#blog-detail-page .comments-wrapper span{
	    font-size: 14px;
	    color: #000;
	    font-weight: 500;
	}
	#comment-form form input[type="text"],#comment-form form input[type="email"] ,#comment-form form textarea{
	    padding: 5px 15px 5px 0px;
	    font-size: 13px;
	    font-weight: 600;
	    color: #adaaaa;
	    background-color: transparent;
	    border-width: 0 0 1px 0;
	    border-radius: 0px !important;
	    border-color: #adaaaa;
	    outline: none !important;
	    box-shadow: none;
	}
	#comment-form form input::placeholder ,#comment-form form textarea::placeholder{
	    color: #adaaaa;
	}
	#comment-form form #submit-btn{
	    cursor: pointer;
	    padding: 9px 30px;
	    font-size: 13px;
	    font-weight: 600;
	    background: #f9bf37;
	    box-shadow: 0 0!important;
    	outline: none;
	}
	.comment-block .comment-content:nth-child(even){
		padding-left: 45px;
	}
	#blog-detail-page img{
		width: 100%!important;
		height: auto!important;
	}
	#popular-product .content-col {
	    max-width: 390px!important;
	    padding: 0!important;
	}
	.reply-icon a:hover strong{
		color:#F9BF37!important;
	}
	.reply-icon a:hover svg{
		fill:#F9BF37;
	}
</style>
@endpush

@push('script')
<script type="text/javascript" src="/assets/themes/ayurveda/js/owl.carousel.min.js"></script>
<script type="text/javascript">
	$(function($){
		$(document).ready(function($) {
			toastr.options = {
				"closeButton": true,
				"debug": false,
				"progressBar": true,
				"preventDuplicates": false,
				"positionClass": "toast-top-right",
				"onclick": null,
				"showDuration": "400",
				"hideDuration": "1000",
				"timeOut": "7000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			};

			var trending = $('#trending.owl-carousel').owlCarousel({
				items : 1,
				loop : true,
				smartSpeed : 600,
				dots : false,
				nav : true,
				navText : ['<svg><use xlink:href="#left-arrow" /></svg>', '<svg><use xlink:href="#right-arrow" /></svg>']
			});

			trending.on('changed.owl.carousel', function(event) {
				var current = event.item.index
				var html = $(event.target).find(".owl-item").eq(current)
				var title = html.find('figure').attr('title')
				var url = html.find('figure').attr('url')
				$('h5[trending-title]').html(`<a href="${url}" title="${title}">${title}</a>`)
				$('p[trending-package]').html(html.find('figure').attr('package'))
			})

			$('#offers .owl-carousel').owlCarousel({
				items : 1,
				loop : true,
				smartSpeed : 600,
				dots : false,
				nav : false,
				navText : ['<svg><use xlink:href="#left-arrow" /></svg>', '<svg><use xlink:href="#right-arrow" /></svg>'],
				responsive : {
					0 : {
						items : 1
					},
					768 : {
						nav : true,
						margin : 40,
						items : 2
					},
					1200 : {
						nav : true,
						margin : 80,
						items : 3
					}
				}
			});

			$(document).on('click', '#blog_like', function(event) {
				event.preventDefault();
				/* Act on the event */
				var id = $(this).data('id');
				var btnLike = $(this).find('svg');
				var likes = $(this).find('span');
				var total_likes = parseInt(likes.text());

				$.ajax({
					url: "{{ route('pages.blog.like') }}",
					type: 'post',
					dataType: 'json',
					data: {
						_token: "{{ csrf_token() }}",
						id: id
					},
				})
				.done(function(response) {
					if(typeof response !== "undefined"){
						if(response.status === "0"){
							themeNotify({level: "error", message: response.message});
						}else if(response.status === "1"){
							//Unlike
							btnLike.css({'fill': ''});
							likes.text(total_likes - 1);
						}else if(response.status === "2"){
							//Like Add
							btnLike.css({'fill':'#639635'});
							likes.text(total_likes += 1);
						}
					}
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});

			});


			$(document).on('click', '#blog_comment', function(event) {
				event.preventDefault();
			    $('html, body').animate({
			        'scrollTop' : $("#comments").position().top - 90
			    },2000);
			});
		});
	}($))
</script>
@endpush