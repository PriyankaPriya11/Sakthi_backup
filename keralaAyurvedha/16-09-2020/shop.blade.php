@extends('layouts.master')



@section('editable_content')

	{{-- <section id="banner" class="shop-banner">
		<div class="owl-carousel">
			@foreach (file_store('shop', 'slider') ?? [] as $key => $slide)
				<a href="{{ $slide['url'] }}">
					<div class="background-image lazy" data-src="{{ asset('uploads/slider/'.$slide['image']) }}"></div>
				</a>
			@endforeach
		</div>
	</section> --}}
<!--Test-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<!--Test-->
	<div id="products-list">
		<div class="container">
			<div class="row">
				<div class="col-auto col-lg filter-col">
					<svg class="open-filterbar d-lg-none"><use xlink:href="#filter" /></svg>
					<div class="filterbar-backdrop"></div>
					<div class="filter-wrapper">
						<svg class="close-filterbar d-lg-none"><use xlink:href="#close" /></svg>
						<form id="filterForm" action="{{ route('shop.index') }}">
							<h5>Search</h5>

							<div class="form-group mb-4">
								<input list="productlist" autocomplete="off" type="text" name="search" id="search" class="typeahead form-control" placeholder="Search" value="{{ request()->input('search') }}" onkeyup="searchproducts()">
								<datalist id="productlist">
									
								</datalist>
								<svg class="search-icon" style="top: 13px; right: 13px;"><use xlink:href="#search" /></svg>
							</div>
							<script type="text/javascript">
							function searchproducts(){
								$("#productlist").html($("<option>").attr('value','').text());
								let token = $("input[name='_token']").val();
								let value=$('.typeahead').val();
								$.ajax({
									url: '/product_suggestion',
									type: 'GET',
									data: {
										product_suggestion: value,
										_token: token,
									},
									success: function(response) {
										$.each(response, function(i, item) {
											$("#productlist").append($("<option>").attr('value', item).text(item));
										});
										console.log(response);
									},
								});
								
							}
							var path = "{{ route('autocomplete') }}";
							$('input.typeahead').typeahead({
								source:  function (query, process) {
								return $.get(path, { query: query }, function (data) {
										return process(data);
									});
								}
							});
						</script>

							<input type="hidden" name="sort" id="filterSort" value=""/>

							<!-- Widget Categories-->
							<section class="widget widget-categories">
								<h5>@lang('corals-ecommerce-ultimate::labels.template.shop.shop_categories')</h5>
								<ul>
									@foreach(\Shop::getActiveCategories() as $category)
									<li class="{{ $hasChildren = $category->hasChildren()?'child has-children':'' }} parent-category">
										@if($hasChildren)
										<a href="javascript:" class="">{{ $category->name }}</a>
										<span>({{\Shop::getCategoryAvailableProducts($category->id, true) }})</span>
										@else
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input" name="category[]" value="{{ $category->slug }}" type="checkbox" id="ex-check-{{ $category->id }}" {{ \Shop::checkActiveKey($category->slug,'category')?'checked':'' }}>
											<label class="custom-control-label" for="ex-check-{{ $category->id }}">{{ $category->name }} ({{ \Shop::getCategoryAvailableProducts($category->id, true)}})</label>
										</div>
										@endif
										@if($hasChildren)
										<ul>
											@foreach($category->children as $child)
											<li>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" name="category[]" value="{{ $child->slug }}" type="checkbox" id="ex-check-{{ $child->id }}" {{ \Shop::checkActiveKey($child->slug,'category')?'checked':'' }}>
													<label class="custom-control-label" for="ex-check-{{ $child->id }}">{{ $child->name }} ({{\Shop::getCategoryAvailableProducts($child->id, true)}})</label>
												</div>
											</li>
											@endforeach
										</ul>
										@endif
									</li>
									@endforeach
								</ul>
							</section>

							<!-- Widget Price Range-->
							<section class="widget widget-categories">
								<h5>@lang('corals-ecommerce-ultimate::labels.template.shop.price_range')</h5>

								<div class="form-group text-right mb-4">
									<input type="text" name="price-range" id="price-range" class="form-control" placeholder="Price Range">
									<p class="price-range-box"><strong>&#8377;<span class="from"></span> - &#8377;<span class="to"></span>.00</strong></p>
									@php
									$min = 0;
									$max= \Settings::get('filter_max_price');
									@endphp
									<input name="price[min]" id="price-range_from" type="hidden" value="{{ request()->input('price.min', $min) }}">
									<input name="price[max]" id="price-range_to" type="hidden" value="{{ request()->input('price.max', $max) }}">
								</div>
							</section>

							<!-- Widget Brand Filter-->
							{{-- @if(!($brands = \Shop::getActiveBrands())->isEmpty())
							<section class="widget">
								<h5>@lang('corals-ecommerce-ultimate::labels.template.shop.filter_brand')</h5>
								@foreach($brands as $brand)
								<div class="custom-control custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="brand[]" value="{{ $brand->slug }}" id="brand_{{ $brand->id }}" {{ \Shop::checkActiveKey($brand->slug,'brand')?'checked':'' }}/>
									<label class="custom-control-label" for="brand_{{ $brand->id }}">{{ $brand->name }}<span class="text-muted"> ({{ $brand->products_count }})</span></label>
								</div>
								@endforeach
							</section>
							@endif --}}

							<div class="column">
								<button class="btn button-green w-100 btn-sm" type="submit">@lang('corals-ecommerce-ultimate::labels.template.shop.filter')</button>
							</div>
						</form>

						@php \Actions::do_action('post_display_ecommerce_filter') @endphp
					</div>
				</div>

				<div class="col-lg product-list-col block-view">
				<?php if(request()->segment(1)."/".request()->segment(2) == 'product-category/skin-and-hair-care'){ ?>
					<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">SKIN & HAIR CARE</h2>
					<p>Kerala Ayurveda presents a wide range of ayurvedic treatment for hair fall and skin care specifically catered to different dosha types. Browse through our wide range of chemical-free, 100% natural creams and oils for healthy skin and lustrous hair in no time!</p>
					<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/mens-care') { ?>
						<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">MEN'S CARE</h2>
						<p>Rediscover your sexual vigour and vitality with a range of natural Ayurvedic Men’s Products from Kerala Ayurveda. The naturally formulated range of ayurvedic men’s health products from Kerala Ayurveda offer a chemical-free alternative to overcome issues commonly associated with Men’s health and sexual performance.</p>
					<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/joint-care') { ?>
						<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">JOINT CARE</h2>
						<p>The unique formulation present in Kerala Ayurveda’s ayurvedic medicine for joint pain can help provide relief from rheumatoid arthritis, knee pain, swelling in joints, back problems and stiff muscles. Browse through our comprehensive list of natural, chemical-free joint relief products.</p>
					<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/general-health-immunity') { ?>
					<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">GENERAL HEALTH/IMMUNITY</h2>
					<p>Build your natural immunity naturally with a wide range of tablets and supplements by Kerala Ayurveda. Our 100% natural ayurvedic healthcare products are the result of carefully researched procedures perfected by experts over the years.</p>
					<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/gastro-care'){ ?>
						<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">GASTRO CARE</h2>
						<p>The wide range of Ayurvedic gastro care products from Kerala Ayurveda offer natural, chemical-free remedies to help manage digestion-related issues like acidity, gastroenteritis, constipation, heartburn, gas and peptic ulcer. </p>
						<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/child-kids-health'){ ?>
						<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">CHILD KIDS HEALTH</h2>
						<p style="text-align:justify;">A child’s immunity is not fully developed to take on the endless barrage of germs that it’s exposed to every day. This makes them prone to various illnesses because every child enters the world with an inexperienced immune system. </p>
						<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/thailam'){ ?>
						<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">THAILAM</h2>
						<p style="text-align:justify;">Ayurveda offers a wide range of products and therapeutic methods to keep away from ailments and to improve your holistic wellness. One of the products that are highly recommended for various discomforts and illnesses is Thailams.</p>
						<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/massage-oils'){ ?>
						<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">MASSAGE OILS</h2>
						<p style="text-align:justify;">The fast-paced 21st-century lifestyle can make you feel fatigued. You may feel like you’re unable to cope up with the multifaceted needs of daily life and close to reaching a breaking point. To avoid that, you need to slow down and take out some time for yourself to relax, unwind, and be in harmony with your body and mind.</p>
						<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/diabetes-heart-health'){ ?>
						<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">DIABETES AND HEART HEALTH</h2>
						<p style="text-align:justify;">As opposed to modern medicine, Ayurvedic medicines that help control diabetes work on completely rejuvenating the body instead of focusing on balancing the sugar levels only. Ayurveda aims at targeting the root cause of the disease while strengthening the body’s immunity and digestion.</p>
						<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/lehyam'){ ?>
						<p style="text-align:justify;"><br>Lehyams or electuaries are also known as herbal jams. They are semi-solid ayurvedic medicines prepared from sugar syrup, jaggery, herbal pulp, herbal powder, herbal decoctions and other ingredients.</p>
						<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/lifestyle-products'){ ?>
						<h2 style="padding-top:25px;padding-bottom:25px;font-weight:bold;">LIFESTYLE PRODUCTS</h2>
						<p style="text-align:justify;">“At the launch of her skincare range, famed hollywood actress Gywneth Paltrow raised her concern about the high levels of chemicals in cosmetics and skincare products and how it can have a long-lasting negative impact. “The idea that you’re exercising and trying to eat well and then slathering yourself with chemicals, parabens, and silicones — it’s not great,” said Gywneth.
Most cosmetic and lifestyle products in the market have high levels of chemicals and toxic substances that can cause irreparable damage in some cases. People are more aware than before about these toxic substances and hence are looking for alternatives to choose from; organic and healthier options.
</p>
						<?php } ?>
					<div class="text-center">
						@php \Actions::do_action('pre_display_shop') @endphp
					</div>

					<div class="filters selectric-clear">

						<p>Showing {!!trans('ayurveda::labels.template.shop.page',['current'=>$products->currentPage(),'total' => $products->lastPage()])!!} results |</p>
						<div class="w-100 d-sm-none"></div>
						<select id="shop_sort">
							@foreach($sortOptions as $value => $text)
							<option value="{{ $value }}" {{ request()->get('sort') == $value?'selected':'' }}>
								{{ $text }}
							</option>
							@endforeach
						</select>
						<svg class="ml-auto active" style="opacity:0;"><use xlink:href="#block-view" /></svg>
						{{-- <svg><use xlink:href="#list-view" /></svg> --}}
					</div>

					<div id="shop-items" class="mb-5">
						<div class="row">
							@forelse($products as $product)
							<div class="col-6 col-md-4 col-xl-4" style="min-height:230px;">
								<figure>
									<div class="product-head">

										@if($product->discount)
										<div class="product-badge bg-danger">{{ $product->discount }} %off</div>
										@endif
										<img data-src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid lazy">

										<div class="icons">
											@foreach($product->activeSKU as $sku)
												{!! Form::open(['url'=>'cart/'.$product->hashed_id.'/add-to-cart','method'=>'POST','class'=> 'ajax-form','data-page_action'=>"updateCart"]) !!}
												@if($sku->stock_status == "in_stock")
													<input type="hidden" name="sku_hash" value="{{ $product->activeSKU(true)->hashed_id }}"/>
													<button type="submit" class="btn button-dark-green" data-toggle="tooltip" title="Cart">
														<svg><use xlink:href="#cart" /></svg>
													</button>
												@else
													<button type="button" class="btn btn-danger" data-toggle="tooltip" title="Cart">
														<svg><use xlink:href="#close" /></svg>
													</button>
												@endif
												{{ Form::close() }}
											@endforeach
											{{-- <form action="javascript:">
												<button class="btn button-dark-green"><svg><use xlink:href="#cart" /></svg></button>
											</form> --}}
											@if(\Settings::get('ecommerce_wishlist_enable', 'true') == 'true')
												<a class="wishlist btn button-dark-green {{ !is_null($product->inWishList()) ? 'active' : '' }}" data-style="zoom-out" href="{{ url('e-commerce/wishlist/'.$product->hashed_id) }}" data-action="post" data-page_action="toggleWishListProduct" data-wishlist_product_hashed_id="{{$product->hashed_id}}"  data-toggle="tooltip" title="Wishlist">
													<svg><use xlink:href="#bookmark" /></svg>
												</a>
											@endif
											{{-- <a href="javascript:" class="wishlist btn button-dark-green">
												<svg><use xlink:href="#bookmark" /></svg>
											</a> --}}
											<form action="javascript:">
												<button class="btn button-dark-green" data-toggle="tooltip" title="Share">
													<svg><use xlink:href="#share" /></svg>
												</button>
											</form>
										</div>
									</div>


									<figcaption>
										<a href="{{ url('product/'.$product->slug) }}">
										<h6>{{ $product->name }}</h6>
										<p class="price">
											@if($product->discount)
											<del>{{ \Payments::currency($product->regular_price) }}</del>
											@endif
											{!! $product->price !!}
										</p>
										@if(\Settings::get('ecommerce_rating_enable',true) === 'true')
											@include('partials.components.rating',['rating'=> $product->averageRating(1)[0],'rating_count'=>$product->countRating()[0] ])
										@endif
										{{-- <img data-src="images/product-list/products/rating.svg" class="img-fluid rating lazy"> --}}
										<p class="desc">{!! str_limit(strip_tags($product->description),500) !!}</p>
									</a>
									</figcaption>
								</figure>
								{{-- <figure>
									<a href="{{ url('product/'.$product->slug) }}">
										@if($product->discount)
										<div class="product-badge bg-danger">{{ $product->discount }} %off</div>
										@endif
										<img data-src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid lazy">
									</a>
									@foreach($product->activeSKU as $sku)
										{!! Form::open(['url'=>'cart/'.$product->hashed_id.'/add-to-cart','method'=>'POST','class'=> 'ajax-form','data-page_action'=>"updateCart"]) !!}
										@if($sku->stock_status == "in_stock")
											<input type="hidden" name="sku_hash" value="{{ $product->activeSKU(true)->hashed_id }}"/>
											{!! CoralsForm::button('corals-ecommerce-ultimate::labels.partial.add_to_cart', ['class'=>'btn btn-block btn-sm button-dark-green'], 'submit') !!}
										@else
											<button type="button" class="btn btn-block btn-sm p-2 btn-danger">
												<span class="ladda-label">@lang('corals-ecommerce-ultimate::labels.partial.out_stock')</span>
												<span class="ladda-spinner"></span>
											</button>
										@endif
										{{ Form::close() }}
									@endforeach

									@if(\Settings::get('ecommerce_wishlist_enable', 'true') == 'true')
									<a class="wishlist btn-cart {{ !is_null($product->inWishList()) ? 'active' : '' }}" data-style="zoom-out" href="{{ url('e-commerce/wishlist/'.$product->hashed_id) }}" data-action="post" data-page_action="toggleWishListProduct" data-wishlist_product_hashed_id="{{$product->hashed_id}}">
										<svg><use xlink:href="#bookmark" /></svg>
									</a>
									@endif

									<figcaption style="all: unset;">
										<h6>{{ $product->name }}</h6>
										<p class="price">
											@if($product->discount)
											<del>{{ \Payments::currency($product->regular_price) }}</del>
											@endif
											{!! $product->price !!}
										</p>
										<p class="desc">{!! str_limit(strip_tags($product->description),500) !!}</p>
									</figcaption>
								</figure> --}}
							</div>
							@empty
							<h4>@lang('corals-ecommerce-ultimate::labels.template.shop.sorry_no_result')</h4>
							@endforelse
						</div>
					</div>

					{{ $products->appends(request()->except('page'))->links('partials.paginator') }}
					<?php if(request()->segment(1)."/".request()->segment(2) == 'product-category/skin-and-hair-care'){ ?>
					<p class="before_shop_products">Kerala Ayurveda presents a wide range of skin and hair care products specifically catered to different dosha types. Browse through our wide range of chemical-free, 100% natural creams and oils for healthy skin and lustrous hair in no time!</p>
					<p class="before_shop_products">A healthy skin is a reflection of a healthy body. It needs as much care and attention that is shown towards our internal bodily functions. Physical exercise is a solution for good cardiovascular functioning. Yoga and meditation can help calm the mind and relieve stress. But what about skin and hair care? Modern beauty products in some cases contain harmful chemicals and additives that cause more damage than nourishment.</p>
					<p class="before_shop_products">At Kerala Ayurveda, we understand the importance of healthy skin. Which is why our handpicked list of ayurvedic creams and oils for skin and hair care have been widely accepted and used by people across the world.</p>
					<p class="before_shop_products">According to Ayurveda, there are three primary doshas that define our body as a whole. These three doshas are Vata, Pitta and Kapha. The delicate balance between the three decide whether you have an oily skin, dry skin or sensitive skin. These doshas also decide the nature of your hair. Ever wondered why your hair is thin or excessively oily? The answers lie in the doshas within you. An eudermic or normal skin is when the three doshas are in complete balance without one overpowering the other. And this perfect balance is what our ayurvedic skin care and hair care products strive to achieve for you.</p>
					<p class="before_shop_products">Apart from the perspective of health, great skin and hair can immensely boost confidence within you and give you the drive to taken on the day with gusto. But good hair and skin shouldn’t necessarily be at the expense of chemical-rich beauty and fairness products. In fact, the natural glow and radiance should be the outcome of a healthy body. An unhealthy interior with a seemingly healthy exterior serves no purpose.</p>
					<p class="before_shop_products">The first step to beginning your journey towards ayurvedic skin and hair care is to study yourself. Is your skin oily or dry or a combination of both? People who have a Vata type dominance have dry and thick skin that’s cool to the touch. Kapha dominance relates to the properties of water and earth, hence it’s usually oily and thick. Pitta dominance can result in sensitive skin easily prone to acne and rashes.</p>
					<p class="before_shop_products">Similarly, when it comes to hair, doshas play a significant role. People with vata dominance have thick, curly and dry hair. Pitta dosha when in abundance will result in thin hair and even early hair loss in some cases. Kapha dosha dominance on the contrary will aid in healthy hair growth, although premature greying could be a side effect.</p>
					<p class="before_shop_products">Ayurveda can also greatly help in treating skin-related issues like Eczema and Psoriasis. Kerala Ayurveda’s Winsoria Oil for example contains Vidapala, Manjishta and Sariba concoted in a virgin coconut oil base. It helps minimize hyperkeratinization, silvery scales, inflammatory responses, exfoliation and discoloration of the skin, naturally. Being a naturally formulated product, it does not cause rashes or itchiness and is completely safe to use.</p>
					<p class="before_shop_products">You can also buy Kumkumadi Oil online from the Kerala Ayurveda store to bring out the glow and radiance in your skin. Our Kumkumadi oil formulation contains a unique mix of naturally occurring ingredients like Saffron and red sandalwood that aid in retexturing and nourishing the skin.</p>
					<p class="before_shop_products">We also have used century-old practices to create Ayurvedic hair oils to prevent hair loss. Kesini Oil from Kerala Ayurveda is made from 100% naturally occurring ingredients like Amla, Brahmi and virgin coconut oil to nourish your hair right from the scalp and the roots.</p>
					<p class="before_shop_products">Explore our entire range of ayurvedic skin care and hair care products and take your first step to natural beauty.</p>
					<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/mens-care') { ?>
					<p class="before_shop_products">Rediscover your sexual vigour and vitality with a range of natural Ayurvedic Men’s Products from Kerala Ayurveda. The naturally formulated range of ayurvedic men’s health products from Kerala Ayurveda offer a chemical-free alternative to overcome issues commonly associated with Men’s health and sexual performance.</p>
					<p class="before_shop_products">Sexual performance is an often-overlooked problem in a country like India. Men of all ages when faced with issues like erectile dysfunction, premature ejaculation and decrease in sexual libido often panic and don’t seek out a proper solution. In such cases, you must understand that such setbacks are usually curable with slight changes to lifestyle and the right nourishment.</p>
					<p class="before_shop_products">Our products contain nourishing herbs like Ashwagandha, Khadira, Kokilaksa, that help in arousing sexual instinct, increase sexual libido, reduce prostate inflammation due to benign prostatic hyperplasia besides other benefits.</p>
					<p class="before_shop_products">Kerala Ayurveda’s natural chemical-free products for men’s sexual health and vigour are a result of carefully researched procedures by experts in the field of Ayurveda. Our wide range of ayurvedic pills and tonics can help treat sexual health setbacks arising from stress, injury and lifestyle changes.</p>
					<p class="before_shop_products">The male reproductive system just like other systems in our body like the ones for digestion and respiration, needs the right care and nourishment to work efficiently. Male sexual dysfunction can be broadly classified into decreased libido, erectile dysfunction and issues in ejaculation/premature ejaculation.</p>
					<p class="before_shop_products">Drop in testosterone levels plays a role in some cases where libido is impacted. In the case of erectile dysfunction, the lack of blood supply could be cited as a reason. Side-effects of medication is another factor that plays a considerable role in problems related to ejaculation issues.</p>
					<p class="before_shop_products">Having said that, the underlying reason for male sexual issues is primarily stress and stress-related outcomes. Work pressure, traffic, built-up emotional and personal issues are huge contributors to stress. Sex is an activity that requires complete peace of mind undivided focus. When external factors contribute to throw internal calm out of balance, performance-related concerns might arise such as prostate enlargement/pain, sexual dysfunction and other cardiovascular diseases.</p>
					<p class="before_shop_products">Prostate health can also be enhanced with Ayurvedic solutions. As men age, issues related to the prostrate start to arise, such as frequent urges to urinate, dribbling, weak-flowing streams, pain during urination or ejaculation. The right medication combined with a healthy lifestyle and diet can help improve prostate health</p>
					<p class="before_shop_products">Ayurvedic medicine for male infertility offered by Kerala Ayurveda aid in the formation of dhatus (meaning tissues) and play a key role in enhancing ojas – which is an indicator of our inner essence. Ayurvedic medicine for men’s sexual rejuvenates the senses and helps with regulating bodily functions such as blood circulation and digestion.</p>
					<p class="before_shop_products">Besides ayurvedic supplements, men also need to lead an active and healthy lifestyle. Activities like walking, running, cycling and swimming for at least 30 minutes a day can make a significant difference in sexual health and help lead a content, fulfilling life.</p>
					<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/joint-care') { ?>
					<!--p class="before_shop_products">Switch back to an active lifestyle with your children and say goodbye to joint pain. The unique formulation present in ayurvedic joint care products from Kerala Ayurveda can help provide relief from rheumatoid arthritis, knee pain, swelling in joints, back problems and stiff muscles. Browse through our comprehensive list of natural, chemical-free joint relief products.</p-->
					<p class="before_shop_products">Let’s take a trip back in time. Our ancestors led an active lifestyle throughout their life. Transport was hard to come by and cubicles didn’t exist. One had to walk miles on end or toil away throughout the day to enjoy a hearty meal. Back then, crops and vegetables weren’t loaded with chemicals and offered the necessary nutrients cooked in a homely environment.</p>
					<p class="before_shop_products">Fast forward to today, sedentary lifestyles, driving to get to the shop right around the corner and work stress has led us to embracing shortcuts and technology to get things done. The human body does not get the right workout it needs, day in and day out. Our joints are the part that bear the brunt of this inactive lifestyle. Walk up to any child today and ask them to sit cross-legged, you’ll see they cannot maintain that posture for more than 10 minutes.</p>
					<p class="before_shop_products">Joint-care is vital to leading a fulfilling life uninhibited by setbacks and health issues. According to Ayurveda, there are two primary causes for joint pain.</p>
					<p class="before_shop_products">The first is the accumulation of toxins due to unhealthy lifestyle routines. In Ayurveda, we call these toxins “Ama”. When this Ama resides in the joints for an extended period of time, the joints start to swell and begin to radiate pain.</p>
					<p class="before_shop_products">The second cause is the underlying strength of the joint itself. Your current bone density and lack of necessary nutrients to the joints are the key factors behind joint health.</p>
					<p class="before_shop_products">Ayurvedic treatments for arthritis and other joint related issues identify the above two categories and suggest a suitable remedy. Kerala Ayurveda also follows a similar approach when it comes to treating joint pain.</p>
					<p class="before_shop_products">Myaxyl Oil from Kerala Ayurveda helps relieve inflammatory reactions and pain for men and women of all ages. Myaxyl oil is enriched with the goodness of Nandivriksha, Rasna and Devadaru concocted in a Sesame Oil base. Applying Myaxyl Oil greatly enhaces the blood flow throughout your system. The underlying properties of lemongrass and eucalyptus oil help in aromatherapy and help strengthen the musculoskeletal system.</p>
					<p class="before_shop_products">The Murivenna Thailam on the other hand reduces Vata dominance and possesses excellent soothing action to help heal trauma & swelling when massaged regularly around the affected areas.</p>
					<p class="before_shop_products">Our products also provide excellent ayurvedic treatment for back pain. The Lumbagest tablets from Kerala Ayurveda contains Eranda Thaila and Nirgundi that help relieve pain in the lower back.</p>
					<p class="before_shop_products">No matter what type or extent of joint pain, the extensive range of ayurvedic balms, sprays, tablets, oils and creams from Kerala Ayurveda are created to offer a natural, chemical-free solution to rheumatoid arthritis, back pain, muscle pain and more. Explore our entire range of ayurvedic joint care products.</p>
					<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/general-health-immunity') { ?>
					<p class="before_shop_products">Build your natural immunity naturally with a wide range of tablets and supplements by Kerala Ayurveda. Our 100% natural ayurvedic immunity building products are the result of carefully researched procedures perfected by experts over the years.</p>
					<p class="before_shop_products">From computer crashes to car breakdowns, nobody likes things suddenly coming to a stop midway. This is magnified even more so when it comes to our own body. One moment you are at your efficient best. And the very next second your body seems to have gone into complete meltdown. Be it the flu season or travelling abroad, a strong natural immunity to the forces of nature and disease is important.</p>
					<p class="before_shop_products">The concept of Ayurveda revolves around not treating just the symptoms but in balancing the three doshas that govern our wellbeing. Ayurveda believes in the concept of preventive healthcare. If you’re tired of the flu bouts and the frequent “calling in sick” rituals at work, ayurvedic medicines for immunity improvement can lend a helping hand.</p>
					<p class="before_shop_products">It is usually the winter season, that truly puts your natural immunity to test. As Indians, we are accustomed to tropical weather which is predominantly hot. It is during winter when the body is pushed out of its comfort zone and the red signals go up as it prepares to take on the germs and diseases in the air. Natural immunity is all about arming these built-in defenders in our body and equipping them to win the winter war.</p>
					<p class="before_shop_products">While our bodies are naturally primed to defend themselves in most cases, over the course of time unhealthy eating habits, tend to reduce the ojas in our body. Ojas refers to the invisible essence that helps in developing vigour & vitality within our bodies. Without Ojas, the secure walls of the human body start disintegrating thus affecting immunity.</p>
					<p class="before_shop_products">Developing a healthy ojas is directly proportional to good digestion. People who follow a healthy dietary routine filled with generous usage of tulsi, turmeric and ginger innately develop good natural immunity. From an Ayurvedic perspective, there is a product that we are all aware of right from childhood. It’s none other than the good old Chyavanprash.</p>
					<p class="before_shop_products">Kerala Ayurveda lets you buy Chyavanprash online in the comforts of your home. A spoonful of this on a daily or a weekly basis can greatly help boost immunity, purify blood and prevent infection. Imugest tablets from Kerala Ayurveda is a great ayurvedic medicine to help increase immunity. Each tablet contains a mix of Ashwagandha, Guduchi and Brahmi among other essential natural herbs and ingredients that gives the product its immuno-modulatory properties.</p>
					<p class="before_shop_products">Pick the right ayurvedic medicine for improving immunity online with Kerala Ayurveda’s range of general health and immunity tablet, choornams, lehyams and tonics.</p>
					<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/gastro-care'){ ?>
					<p class="before_shop_products">Ayurveda has for centuries helped in the aid of digestion and gastro-care. Many of these practices continue to exist in the form of choornams and herbal tonics in households to this day. The beauty of Ayurveda lies in the fact that its medicines not only help cure digestive issues but also aid in building the body’s resistance to infection by promoting immunity.</p>
					<p class="before_shop_products">Gastroenteritis is the term coined when the gut is infected and in turn results in the swelling or inflammation of the linings of the stomach and intestines. Our lifestyles have undergone a drastic change over the last 20 years. Homemade food has become somewhat a fantasy. Between our daily runs from deadline to deadline, we tend to forget the importance of healthy eating relying on junk food and fast food.</p>
					<p class="before_shop_products">The science of Ayurveda states unwanted food that is undigested gradually accumulates in the stomach and affects Vata Dosha, resulting in obstruction of the digestive tract. Constipation occurs when this undigested food blocks your digestive tract impeding proper bowel movement. In Ayurveda this undigested food is termed ‘Ama’ which is considered to be the root of all gastro-related diseases.</p>
					<p class="before_shop_products">Ayurvedic medicine for constipation coupled with meditation and yoga can help alleviate problems related to bowel movement and acidity. Kerala Ayurveda also has specific ayurvedic medicine to bring about relief in piles and fissures that could occur due to unhealthy lifestyles and old age.</p>
					<p class="before_shop_products">Hyperacidity is caused due to an increased production of acids in the stomach. Ayurvedic medicine for acidity exist that can counter this excess production of acids. Speaking from the perspective of doshas, out of the primary three, acidity is caused by the aggravation of “Pitta” dosha. A prolonged period of disturbing the Pitta balance will result in acidity.</p>
					<p class="before_shop_products">A great first step is to refrain from eating foods that aggravate Pitta like very sour or spicy dishes and drinks, going overboard with smoking, alcohol and caffeine. Additionally, when it comes to lifestyle, one should not resist the urge to urinate or pass stools. Excessive stress, late night meals, sleeping right after eating are some of the other contributing factors to acidity.</p>
					<p class="before_shop_products">Triphala tablets from the house of Kerala Ayurveda are a great remedy to support people suffering from irregular bowel movements, acidity and constipation. Literally meaning “three fruits” Triphala contains Amalaki, Bibhitaki and Haritaki. It is a natural antioxidant that greatly aids in digestion and food absorption.</p>
					<p class="before_shop_products">Browse through our list of Kerala Ayurveda medicines and tablets for gastro-care.</p>
					<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/child-kids-health'){ ?>
						<p class="before_shop_products" style="text-align:justify;">An individual’s immune system is built on battles with a series of germs and viruses. Hence pediatricians consider bouts of cold and flu or infections, in a year, completely normal. There are many remedies like Ayurvedic medicine for children that help strengthen their immune systems.</p>
						<p class="before_shop_products" style="text-align:justify;">Infants and toddlers are especially vulnerable to falling sick during the autumn and winter season. Parents will notice that their child will consistently get the flu or a mild cold during these months. As a parent, you have to note that a child’s immune system is still developing, and adults have fully developed immune systems. So, it’s normal that when a kid falls sick during their early years, this helps the immune system build resistance to certain diseases.</p>
						<p class="before_shop_products" style="text-align:justify;">Ayurvedic medicine for child immunity helps keep your child strong and healthy. A functional immune system that protects your child from external forces is vital. If you find that your child is falling sick, more than normal, then these are the signs of a weak immune system:</p>
						<p class="before_shop_products">
							<ul>
								<li style="text-align:justify;">Consistent bouts of cold and flu, or other respiratory infections.</li>
								<li style="text-align:justify;">Even the mildest of wounds take a long time to heal; this is one of the prominent signs of a weak immune system.</li>
								<li style="text-align:justify;">Unable to gain weight: Underweight status and poor growth are major red flags that can signal poor immunity.</li>
								<li style="text-align:justify;">Nutrient deficiency: If your child has a weak immune system, then it can lead to poor nutrition status. Some of the visible signs are weak nails and brittle hair, getting easily bruised, skin and hair changes, reduced attention changes.</li>
							</ul>
						</p>
						<p class="before_shop_products" style="text-align:justify;">If you have noticed the symptoms mentioned above, then you need to consult a pediatrician immediately. If you want to take a holistic approach, then Ayurvedic medicine for child health care is the right way to go.</p>
						<p class="before_shop_products" style="text-align:justify;">The immune system is responsible for protecting the body from various diseases and infections. It consists of white blood cells, anti-bodies, and other elements like lymph nodes. One of the main symptoms that your child has a weak immune system is that they are more prone to infections than normal. If you notice the pattern, at the earliest, then you have to take your kid to the doctor as soon as possible.<br>If you avoid the symptoms for a long time, then it will get severe and harder to treat.</p>
						<p class="before_shop_products" style="text-align:justify;"><b>How can Ayurveda help enhance your child’s overall health?</b></p>
						<p class="before_shop_products" style="text-align:justify;">Your child’s health is important, and it’s vital that their immunity is developed in a strong and healthy manner. Ayurveda is a great way to enhance their immune systems without any harmful side effects. Ayurveda is a holistic healing approach that is completely natural and can help with maintaining vibrant health. Practicing Ayurveda means you have to include the wisdom you have learned, on kids just like you would on adults.</p>
						<p class="before_shop_products" style="text-align:justify;">As mentioned before, your kids are more susceptible to falling ill during the colder months of the year. This happens because your body begins to adjust to the seasons; as it transitions from hot to cold, your body can build up ‘Ama’. If you don’t use <a href="https://www.keralaayurveda.biz/blog/detail/is-your-kid-falling-sick-often-ayurveda-can-help-restore-your-childs-natural-immunity" target="_blank" style="color: #F9BF37;">Ayurveda for children</a>, then they are prone to various digestive diseases and infections that can lead to cold and flu-like symptoms. Kids may fall sick during the early days of spring because the ‘Ama’ that is accumulated in the system during winter may melt and start flooding the bloodstream. This process can overload the immune system and hinder its performance, making it a breeding ground for germs.</p>
						<p class="before_shop_products" style="text-align:justify;">Ayurveda recommends that you handle the seasonal transitions with the help of purification treatments and Ayurvedic medicines for your child. This includes a good massage, warm baths, Ayurvedic medicine for immunity in kids, cleansing treatments for the digestive system, and so on. All these natural remedies will help cleanse the body of toxins and also strengthen your child’s immune system.</p>
						<p class="before_shop_products" style="text-align:justify;">However, it’s important that you consult with your doctor before going ahead and applying any Ayurveda remedies. This will help them diagnose your child’s condition properly, help you understand which Ayurvedic medicine will help you gain the most results, and if it will interfere with their current medical plan.</p>
						<p class="before_shop_products" style="text-align:justify;">Along with natural medicines, it’s also helpful that you and your child maintain a healthy diet. Your diet should include whole foods that include organic ingredients. Ensure that you cook foods that have immune-enhancing spices like cumin, fennel, garlic, ginger, chilies, black pepper, and turmeric. These spices will enhance your digestive fire, strengthen your immunity, and reduce ‘Ama’ buildup.</p>
						<p class="before_shop_products" style="text-align:justify;">Another way you can purify your kid’s body from toxins is by providing them with Ayurvedic tonic for the child. This tonic will help your child’s body cope with the transition from winter to spring, and it will build up their immunity so that it can fight infections and diseases.</p>
						<p class="before_shop_products" style="text-align:justify;">Another way to build your child’s immunity is by making them participate in fun physical activities. Exercise is an essential part of Ayurveda because it helps build up agni and burns ‘Ama’. Ensure that your child knows what exercise they want to engage in, it can be sports or extracurricular activities like dancing, or even some basic yoga postures, as long as they keep their body moving, their immune system will be able to fight all the toxins that accumulate within the body. </p>
						<p class="before_shop_products" style="text-align:justify;">Ayurveda states that you can take some preventive approaches to ensure that your child’s health is good and on the right path. Since a child’s immune system is still developing, even a little bit can go a long way, which is why children heal quicker as compared to adults. Children often have health issues when their doshas are imbalanced. Once you understand the dosha makeup of a child and get to the root of the problem, you will be able to take the right precautions and keep them protected at all times.</p>
						<p class="before_shop_products" style="text-align:justify;">When children fall sick, it’s usually because they have excess ‘Pitta’ and ‘Kapha’ in their system; but these issues can be balanced out in many ways, which includes a healthy diet, exercise, meditation, and mindfulness.</p>
						<p class="before_shop_products" style="text-align:justify;">One of the major benefits of Ayurveda for your child’s health is that it stresses the importance of routine. This can help your child be healthy and strengthen their immune system as well. Mostly, parents should focus on getting their child to sleep so that they can get into the habit of a healthy sleeping routine.</p>
						<p class="before_shop_products" style="text-align:justify;"><b>The uses and effects of Balakalpam:</b></p>
						<p class="before_shop_products" style="text-align:justify;">Balakalpam is an essential Ayurvedic medicine for kids; it’s a tonic that helps enhance your child’s growth and their general well-being. Digestion issues and viral infection like cold are one of the many problems that can weaken a child’s immune system. Balakalpam is an Ayurvedic medicine to help manage stomach pain for children that will help them overcome any digestion issues and fight viral infections as well. The potent ingredients in the tonic will help promote digestion and enhance their appetite as well. This Ayurvedic tonic also helps relieve any constipation and regulates bowel movements in kids.</p>
						<p class="before_shop_products" style="text-align:justify;">If you want an Ayurvedic medicine to help heal constipation for child, then Balakalpam is the right choice for you. Not only will it improve your child’s digestion, but it will also help build your kid’s immune system. The Ayurvedic tonic is great for infants as well because it solves problems like abdominal pain, diarrhea, and regurgitation; it also helps maintain a healthy liver.</p>
						<p class="before_shop_products" style="text-align:justify;"><b>What are the ingredients in Balakalpam?</b></p>
						<p class="before_shop_products" style="text-align:justify;">Balakalpam is specially created to enhance the health of infants and toddlers by ensuring that they have proper digestion and immunity. The ingredients present in the tonic ensure that your child receives the maximum benefits, consistently; it also helps balance ‘Pitta’ and ‘Kapha’ doshas in kids.</p>
						<p class="before_shop_products">
							<div>
							<div class="childklist1">
							<p>Draksha:</p>
							<ul>
								<li>Encourages easy bowel movement</li>
								<li>Improves the digestive process</li>
								<li>Heals respiratory issues</li>
								<li>Helps with rapid healing</li>
								<li>Reduces gas and any gas-causing symptoms</li>
							</ul>
							</div>
							<div class="childklist1">
							<p>Mustha:</p>
								<ul>
								<li>Increases appetite</li>
								<li>Relief from abdominal pain</li>
								<li>Enhances digestion</li>
								<li>Liver function is enhanced</li>
								<li>Is a potent astringent</li>
								<li>Reduces any toxins within the child’s body</li>
							</ul>	
							</div>
							<div>
							<p>Bilva:</p>
							<ul>
							<li>Detoxifies the body</li>
								<li>Powerful astringent</li>
								<li>Stops diarrhea</li>
								<li>Strengthens the digestive tract</li>
								<li>Improves digestion</li>
								<li> Balances the ‘Vata’ and ‘Kapha’ doshas.</li>
							</ul>
					       </div>
						</div>
						</p>
						<p class="before_shop_products">
							<div class="childmar">
							<div class="childklist2">
							<p>Madhu:</p>
							<ul>
								<li>Improves immunity</li>
								<li>High number of antioxidants</li>
								<li>Manages weight</li>
								<li>Enhances the digestion process</li>
								<li>A potent probiotic</li>
								<li>Known for its antifungal properties</li>
								<li>Speeds up the healing process</li>
					</ul>
							</div>
							<div  >
							<p>Amlaki:</p>
							<ul>
							<li>Maintains a healthy immune system</li>
								<li>Speeds up the metabolism</li>
								<li>Good for the heart health</li>
								<li>Natural antioxidant</li>
								<li>Anti-inflammatory</li>
								<li>Nourishes the organs</li>
								<li>Cleanses the intestines</li>
							</ul>
							</div>
						
							
							</div>
						</p>
						<p class="before_shop_products"><b>The main features of Balakalpam:</b></p>
						<p class="before_shop_products">
							<div>
							<div class="childklist">
							<ul>
								<li> A complete herbal medicine for kids</li>
								<li>Provides relief from constipation</li>
							</ul>
							</div>
							<div>
							<ul>
								<li> Promotes healthy growth in children</li>
								<li>Safe for infants and toddlers because of its non-addictive properties</li>
							</ul>
							</div>
							</div>
						</p>
						<p class="before_shop_products" style="text-align:justify;">Ayurvedic medicine for children growth is essential to build your kid’s immunity and make them less prone to cold and fever. Choose treatments and medicines that provide holistic healing and have little to no side effects because they will garner positive results.</p>
						<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/thailam'){ ?>
						<p class="before_shop_products" style="text-align:justify;">Ayurveda is one of the oldest traditional healing systems and philosophies that has existed for over 5000 years now. This healing system focuses on overall healing of your body, mind and soul. Ayurveda stresses on the importance of holistic wellness and suggests how ayurvedic remedial methods are for the long-term.</p>
						<p class="before_shop_products" style="text-align:justify;">The word ‘Ayurveda’ is derived from Sanskrit and it translates to the ‘science of life’. Ayurveda suggests opting for healthier choices for a better, improved and lasting lifestyle. Unlike other healing systems, Ayurveda and its practitioners' test therapies based on their evidence based experiences and day-to-day observations. According to Ayurveda, the overall wellbeing of an individual depends on the balance between their mind, body and spirit. In case of disruption of this balance, one can fall sick. Some of the most observed reasons that can disrupt include emotional imbalances, injuries, inherent defects, age or even climate changes. </p>
						<p class="before_shop_products" style="text-align:justify;"><b>Ayurveda and doshas</b></p>
						<p class="before_shop_products" style="text-align:justify;">Ayurveda has developed over 5000 years ago and it is believed that every individual is made up of 5 major elements in the universe; air, space, water, fire, and earth.<br>These elements are put together to form three life energies called doshas that control the overall functioning of your body.</p>
						<p class="before_shop_products" style="text-align:justify;">Vata dosha is the combination of space and air and is believed to be the most powerful in all three doshas. Vata dosha is responsible for nerve impulses and also controls our energy and movement. It is also believed that with a healthy Vata dosha, the movements of the body are more graceful and elegant.<br>Some of the habits that are believed to disrupt the Vata include having a meals in very short intervals, fear and staying up too late. </p>
						<p class="before_shop_products" style="text-align:justify;">Pitta dosha is the balance between two contradicting elements, fire and water. These two forces together are believed to control one’s hormones and also other functions like digestion and metabolism. Some elements that can upset pitta dosha are consumption of sour and spicy foods and spending too much time in the sun.</p>
						<p class="before_shop_products" style="text-align:justify;">The third dosha is Kapha dosha which is believed to control body strength, weight, stability and your immune system. Kapha dosha unites earth and water. With these elements, two sets of qualities exist; heavy, slow, and steady but also cold, tough and dense. Some of the elements that can interrupt it are consumption of very sweet items or items with too much salt or water.</p>
						<p class="before_shop_products" style="text-align:justify;">An ayurvedic practitioner will consider a treatment plan tailor-made based on several physical and emotional factors. S/he will also take into account your primary life force and the balance between the three doshas. Ayurveda aims at restoring harmony and balance and hence include a cleansing process called panchakarma which cleanses your body of undigested food. This cleaning process is conducted to ensure that no element should remain in your body to further cause any kind of harm or illness. To achieve the mentioned harmony and wellness, ayurvedic practitioners make use of certain ingredients and techniques like massages, medical and herbal oils, blood purification and more.</p>
						<p class="before_shop_products" style="text-align:justify;">Ayurveda as a healing system and philosophy can help with each of the above-mentioned aspects to achieve holistic wellness.</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Ayurvedic Thailams</b></p>
						<p class="before_shop_products" style="text-align:justify;">Ayurvedic thailams are <a href="https://www.keralaayurveda.biz/blog/detail/ayurvedic-massage-oils" target="_blank"  style="color: #F9BF37;"> Ayurvedic massage oils </a>  infused with herbs that can help with different ailments concerning the skin, muscles, joints, and bones. They are highly used to treat gout and arthritic conditions. They are also widely used for skincare, haircare, postnatal and antenatal care as well.</p>
						<p class="before_shop_products" style="text-align:justify;">Ayurvedic thailams and other healing methods are high in demand and the wide range of herbal oils that you would find on Kerala Ayurveda's online shop are Dhanwantharam thailam, Ksheerabala thailam, Kottamchukkadi thailam, Sahacharadi thailam, Balaswagandhadi thailam, Karpooradi thailam, Mahanarayana thailam among others</p>
						<p class="before_shop_products" style="text-align:justify;">Each thailam is known for a specific use. Dhanwantharam Thailam is used widely for the treatment of rheumatic disorders and neuromuscular conditions. Balaswagandhadi thailam is recommended to strengthen muscles and nerves. These thailams or ayurvedic oils with their rare medicinal ingredients ensure relief and nourishment at the earliest and is promised to last for the long-term.</p>
						<p class="before_shop_products" style="text-align:justify;">Thailams are combined with ayurvedic treatment methods like massages to attain best results. Some of the popular ayurvedic massages are:</p>
						<p class="before_shop_products">
							<ul>
							<li style="text-align:justify;">Abhyanga Massage: This ayurvedic oil massage is recommended for overall health and well-being. The massage is performed using warm water and medicated oils</li>
							<li style="text-align:justify;">Shirodhara: This is another famous form of ayurvedic therapy done to heal conditions such as sinusitis, eye diseases, vertigo, insomnia and more. The therapy is performed by pouring medicinal concoctions over the forehead.</li>
							<li style="text-align:justify;">Shirovasti: In this treatment, warm oil is poured on to the scalp and kept stagnant for a specific time frame. This is mostly done to heal neurological disorders.</li>
						</ul>
					</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Importance of holistic wellness</b></p>
						<p class="before_shop_products" style="text-align:justify;">Holistic wellness refers to a form of life where alternative healthcare practices will be adopted to support more than just the body.</p>
						<p class="before_shop_products" style="text-align:justify;">Holistic Wellness can only be achieved if these aspects are taken care of,</p>
						<p class="before_shop_products">
							<ul>
							<li style="text-align:justify;">Physical</li>
							<li style="text-align:justify;">Emotional</li>
							<li style="text-align:justify;">Social</li>
							<li style="text-align:justify;">Spiritual</li>
					</ul>
					</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Physical Health:</b></p>
						<p class="before_shop_products" style="text-align:justify;">When we talk about health, most people first notice physical health. Physical symptoms are easier to detect and measure as compared to other non-physical signs that can seem non-concrete.</p>
						<p class="before_shop_products" style="text-align:justify;">To support physical health, concentrate on some of the easiest and key practices that can have a positive impact on your overall well being. Some of these include:</p>
						<p class="before_shop_products">
							<ul>
							<li style="text-align:justify;">Avoid smoking and consumption of alcohol.</li>
							<li style="text-align:justify;">Avoid processed foods and incorporate more natural ingredients in your diet.</li>
							<li style="text-align:justify;">Complete your 8-hour sleep cycle.</li>
							<li style="text-align:justify;">Exercise daily and do not lead a sedentary lifestyle</li>
					</ul>
					</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Emotional Health:</b></p>
						<p class="before_shop_products" style="text-align:justify;">Emotional Health is as important as your physical health. Emotional health is mostly ignored but, this needs to change to achieve holistic wellness. Stress is one of the crucial reasons for deteriorating emotional health in most. But the scenario has changed drastically as compared to a couple of years ago. Today there is plenty of information available on emotional health along with easily accessible and adaptable techniques to cope with your emotional struggles. Some of the techniques to adopt are:</p>
						<p class="before_shop_products">
							<ul>
							<li style="text-align:justify;">Record your thoughts and feelings, especially the good ones. At times of stress and strain, the journal can be referred to as a reminder of the good times to be grateful for.</li>
							<li style="text-align:justify;">Include stress reduction exercises and resources into your routine.</li>
							<li style="text-align:justify;">There is no shame in asking for help. Make sure to seek help when required and to also remember that you’re never alone.</li>
					</ul>
					</p>
					<p class="before_shop_products" style="text-align:justify;"><b>Social Health:</b></p>
						<p class="before_shop_products" style="text-align:justify;">Social Health is an important part of holistic wellness. To be connected with your loved ones is one of the best ways to be a happy version of yourself. Being socially healthy refers to having deep connections with the ones you love and making an effort to go ahead and meet new people and new perspectives. A healthy social life will lead to positivity in your life as you’re able to communicate with people from different cultures and mindsets which can open up new thought avenues.</p>
						<p class="before_shop_products">
							<ul>
							<li style="text-align:justify;">The scope for virtual connections is increasing day after another but they aren’t the most suitable for your social health. Look for personal connections as they can help increase the level of joy.</li>
							<li style="text-align:justify;">Interacting with your local community is one of the best ways to improve your social health. Get involved with your local communities and try to contribute to their betterment which will help you with personal growth.</li>
					</ul>
					</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Spiritual Health:</b></p>
						<p class="before_shop_products" style="text-align:justify;">Spiritual health can be different for all. But, the innate idea of spiritual wellness is to connect with one’s inner soul and find peace and joy in oneself. Those who are religious can enhance their spiritual health by peaceful religious practices as well. Indulge in practices that can help improve spiritual wellbeing.</p>
						<p class="before_shop_products">
							<ul>
							<li style="text-align:justify;">Spend productive time with yourself. Devote some time in nature and invest quality time to meditate. Meditation is the way to connect and find inner peace. With the help of meditation, you can start your day understanding the various aspects in and around you and it also helps calm your inner self.</li>
					</ul>
					</p>
						<p class="before_shop_products" style="text-align:justify;">By keeping these points in mind, one can take a step closer to improved wellbeing. Ayurveda as a healing system aims at providing a healthier solution to the root cause of your ailment by making alterations in your diet and lifestyle choices. With medicinal ingredients and their concoctions, Ayurvedic products can help revive inner strength and peace.</p>
						<?php }elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/massage-oils'){ ?>
							<p class="before_shop_products" style="text-align:justify;">Ayurvedic massage is a great way to calm your mind and rejuvenate your body to meet the demanding needs of daily life. Ayurvedic massage oils are a befitting accompaniment to Ayurvedic massages and choosing the right oils can contribute immensely to your well-being.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Types of Ayurvedic Massages</b></p>
							<p class="before_shop_products" style="text-align:justify;">An Ayurvedic massage is a type of massage done with warm oils following the guidelines as mentioned in Ayurveda. It not only helps in alleviating pain but also in increasing the blood circulation and cleansing the body. </p>
							<p class="before_shop_products" style="text-align:justify;">There are several types of Ayurvedic massages:</p>
							<p class="before_shop_products" style="text-align:justify;">Abhyanga or Abhyangam - The term Abhyangam refers to a massage done in the direction of the body. In this type of massage, medicated oils are applied to the head and the body. Generally, sesame seed oil is used primarily in the winter and spring seasons for bodies with Vata and Kapha doshas while coconut oil is used in the summer and autumn seasons for bodies with Pitta dosha. The benefits of this type of massage are</p>
							<p class="before_shop_products">
							<div>
							<div class="msgoillist ">
							<ul>
							     <li>Reduces body pain</li>
								<li>Helping to overcome fatigue</li>
							</ul>
							</div>
							<div>
							<ul>
								<li>Induces growth in small children</li>
								<li>Improving the body’s natural immune system</li>
								
							</ul>
							</div>
							</div>
						</p>
							<p class="before_shop_products" style="text-align:justify;">Shiro Abhyanga - This type involves massaging the head, neck, and shoulders with Ayurvedic massage oils. It’s a combination of two Ayurvedic treatments - Shirodhara and Abhyanga. The benefits of this type of massage are:</p>
							<p class="before_shop_products">
						<ul>
							<li style="text-align:justify;">Helps improve the functioning of the sensory organs</li>
							<li style="text-align:justify;">Helps in inducing sleep</li>
							<li style="text-align:justify;">It helps in improving conditions such as a dry and itchy scalp, migraine headaches, and sinusitis.</li>
						</ul>
						</p>
							<p class="before_shop_products" style="text-align:justify;">Marma Therapy - Marma refers to the essential energy points of the body. The human body comprises 107 anatomical structures comprising nerves, blood vessels, bones, and joints. These are extremely sensitive parts of the body and any internal or external impact on any of them can lead to serious injury. In this therapy, the body part which is facing the problem is identified and then trained masseurs work to reduce the problem in the body part. The benefits of Marma Chikitsa or Marma Therapy are:</p>
							<p class="before_shop_products" style="text-align:justify;">
							<div>
							<div class="msgoillist ">
							<ul>
							<li>Providing strength to the mind </li>
							<li>Reducing any stiffness in the body</li>
								
							</ul>
							</div>
							<div>
							<ul class="msgmar">
							<li>Strengthening the neuromuscular unit of the body</li>
							     <li>Helping in the smooth energy flow of the body without any obstacles</li>
								
							</ul>
							</div>
							</div>
						</p>
							<p class="before_shop_products" style="text-align:justify;">Shiro Dhara - This is a type of Ayurvedic massage where warm herbal oil is poured on the forehead in a fixed and continuous stream. The word Shiro refers to the head while Dhara refers to stream. It’s a part of the Bahiparimarjana Chikitsa or external treatment in Ayurveda. Oils processed with Ayurveda herbs suitable for balancing Vata, Pitta & Kapha doshas are used to do Shirodhara. In addition, medicated milk, buttermilk & decoctions are also used in Siro-dhara depending upon the clinical condition. The benefits of this type of massage are:</p>
							<p class="before_shop_products" style="text-align:justify;">
							<div>
							<div class="msgoillist ">
							<ul>
								<li>Soothing the hypothalamus</li>
								<li>Reducing the stress level</li>
								
							</ul>
							</div>
							<div class="msglm">
							<ul>
								<li>Inducing sleep</li>
								<li>Improving blood circulation to the brain</li>
								<li>Regulating the functioning of the pituitary gland</li>
								
							</ul>
							</div>
							</div>
						</p>
                        <p class="before_shop_products" style="text-align:justify;">Shiro Vasti - This Ayurvedic massage is done after shaving a person’s hair and attaching a cylindrical cap to the head. A warm, medicated oil is then poured onto the scalp where the scalp absorbs the oil. This therapy is done mostly in the evening with the person receiving the massage in a sitting position. The benefits of this type of massage are:</p>
                        <p class="before_shop_products" style="text-align:justify;">
							<div class="msgbmar">
							<div class="msgoillist1 ">
							<ul>
								<li>Helping in treating paralysis, insomnia, and depression</li>
								<li>Improving memory and vision</li>
							</ul>
							</div>
							<div class="msgmar">
							<ul>
								<li>Reducing burning sensation in the head</li>
								<li>Helping to reduce dryness of nostrils, mouth, and throat</li>
							</ul>
							</div>
							</div>
						</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Benefits of Ayurvedic Oils</b></p>
						<p class="before_shop_products" style="text-align:justify;">The practice of body massage with Ayurvedic body massage oil (Abhyanga) has been mentioned in several Ayurvedic texts. In Ayurveda, Abhyanga is performed before Panch Karma, the five therapies for detoxification. The benefits of using massage oil during this process are many:</p>
						<p class="before_shop_products" style="text-align:justify;"></p>
						<p class="before_shop_products">
							<div>
							<div class="msgoillist1">
							<ul>
							<li>Helps in reducing hemiplegia and muscular dystrophy</li>
								<li>Helps in reducing anxiety and depression in pregnant women</li>
								<li>Helps in reducing chronic migraine</li>
								<li>Helps in reducing menopausal sleep disturbances</li>
								<li>Helps in reducing dry, rough, and cracked heels</li>
								
								
							</ul>
							</div>
							<div class="msgmm">
							<ul>
							    <li>Helps in reducing stress, heart rate, and blood pressure</li>
								<li>Helps in reducing burning sensations in diabetic neuropathy patients</li>
								<li>Improvements in pulse and respiratory rate and systolic blood pressure and diastolic blood pressure</li>
								<li>Improvements in children suffering from cerebral palsy</li>
								<li>Helps in weight gain for babies with low body weight at birth</li>
							</ul>
							</div>
							</div>
						</p>
						<p class="before_shop_products" style="text-align:justify;"><b>How to Choose the Right Ayurvedic Massage Oil</b></p>
						<p class="before_shop_products" style="text-align:justify;">When it comes to choosing the right <a href="https://www.keralaayurveda.biz/blog/detail/ayurvedic-massage-oils" target="_blank"  style="color: #F9BF37;">Ayurvedic Massage Oil</a>, you should consider the three doshas - Vata, Pitta, and Kapha - and how they affect the following:</p>
						<p class="before_shop_products">
					<ul>
						<li  style="text-align:justify;">Your present balance (Vikriti) - Depending on which dosha is high, you should choose an oil that’ll help you pacify that dosha. For example, if anxiety is predominant and is making you feel cold and dry, then your Vikriti maybe high in Vata, so you should choose a Vata-pacifying oil.</li>
						<li  style="text-align:justify;">Your present constitution (Prakriti) - If you don’t find any imbalance in your doshas, then you can check for the dominant doshas in your constitution. For example, if your dominant dosha is Pitta and it’s summer, then you can choose a Pitta-pacifying oil.</li>
						<li  style="text-align:justify;">Your present environment - The doshas change according to the seasons. While autumn to early winter is considered to be the season of Vata, late winter to spring is that of Kapha, and summer is believed to be the season of Pitta.</li>
			
					</ul>
					</p>
						<p class="before_shop_products" style="text-align:justify;"><b>The Best Ayurvedic Massage Oils</b></p>
						<p class="before_shop_products" style="text-align:justify;">Ayurveda has a natural cure for almost all diseases. There are Ayurvedic medicines for muscle and nerve pain and a host of other problems. Ayurvedic massage oils are one of the best medicines to maintain a balance of all doshas and ensure a healthy life.</p>
						<p class="before_shop_products" style="text-align:justify;">Here are two of the best massage oils that you can use:</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Tejas Oil</b></p>
						<p class="before_shop_products" style="text-align:justify;">The Pitta skin is photosensitive and less tolerant of hot food. It’s generally rough and warm to touch. Moreover, they run a higher risk of freckles, moles and other sensitivities. Thus the Pitta skin requires a cool and pacifying nurturing. Using oils that are resistant to the sun is a good option. An ideal oil to take care of the Pitta skin is Tejas Oil.</p>
						<p class="before_shop_products" style="text-align:justify;">It’s a light and aromatic oil that is prepared with sesame oil as the primary ingredient. All the ingredients are thoughtfully selected which can effectively help resolve any Pitta-related imbalances. The ingredients also provide a cooling effect and reduce any tension. They help improve your resistance to high temperatures and help pacify the Pitta dosha.</p>
						<p class="before_shop_products" style="text-align:justify;">The ingredients used in this oil are:
							<div class="msgmlist">
							<div class="msgoillist2">
							<ul>
								<li>Yashtimadhu</li>
								<li>Sthira</li>
								<li>Bhumiamlaki</li>
								<li>Vidari</li>
								<li>Sathavari</li>
								<li>Akil</li>
								<li>Hamsapathi</li>
								<li>Amruth</li>
								<li>Padmaka</li>
								<li>Thila thaila</li>
							</ul>
							</div>
							<div>
							<ul>
								<li>Jeevanti</li>
								<li>Lavanga</li>
								<li>Iruveli</li>
								<li>Ikshu</li>
								<li>Manjishta</li>
								<li>Visalamool</li>
								<li>Sariba</li>
								<li>Kunthrushka</li>
								<li>Ksheera</li>
								
							</ul>
							</div>
							</div>
						</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Santhwanam Oil</b></p>
						<p class="before_shop_products" style="text-align:justify;">Santhwanam Oil is an anti-inflammatory and pain-relief Ayurvedic medicine that can help in nourishing and moisturising your skin. It can be applied either through self-massage, as a part of a body massage, or even steam therapy.</p>
						<p class="before_shop_products" style="text-align:justify;">This Ayurvedic massage oil can be used for varicose veins that help in treating several health conditions. Apart from relieving anxiety, it helps in improving blood circulation and strengthening body tissues.</p>
						<p class="before_shop_products" style="text-align:justify;">The ingredients used in this oil are:
							<div>
							<div class="msgoillist1">
							<ul>
							<li style="text-align:justify;">Reducing cramps, muscle, and joint pain</li>
							<li style="text-align:justify;">An ideal Ayurvedic medicine for knee pain</li>
							<li style="text-align:justify;">Helps in the treatment of sciatica</li>
						</ul>
						</div>
						<div class="msgmar">
							<ul>
							<li style="text-align:justify;">Helps in improving blood circulation and reducing swelling</li>
							<li style="text-align:justify;">Helps in providing relief from stress and anxiety</li>
							<li style="text-align:justify;">Helps in treating various skin problems such as itchy or dry skin, eczema, and skin pigmentation</li>
							</ul>
							</div>
							</div>
						</p>
						<p class="before_shop_products" style="text-align:justify;">Some of the ingredients used in this Ayurvedic massage oil are:</p>
						<p class="before_shop_products" style="text-align:justify;"></p>
                        <p class="before_shop_products">
							<div class="msgmar1">
							<div class="msgoillist1">
							<p><b>Bala</b></p>
							<ul>
							<li style="text-align:justify;">Helps in balancing all doshas</li>
							<li style="text-align:justify;"> Helps improve blood circulation</li>
							<li style="text-align:justify;">Helps in rejuvenating tissues</li>
							<li style="text-align:justify;">Can help treat neuromuscular diseases</li>
							<li style="text-align:justify;">Helps in the treatment of facial paralysis and cervical spondylitis</li>
							<li style="text-align:justify;">Anti-inflammatory and can be used in the treatment of arthritis and muscle stiffness</li>
						</ul>
						</div>
						<div class="msgmar">
						<p><b>Sariva</b></p>
						<ul>
						<li style="text-align:justify;">This helps balance all doshas</li>
							<li style="text-align:justify;">Helps in treating skin diseases</li>
							<li style="text-align:justify;">Helps in the removal of toxins and amatoxins</li>
							<li style="text-align:justify;">Helps in treating gout, joint stiffness, and sciatica</li>
							<li style="text-align:justify;">Helps in detoxifying the blood and has a general cleansing effect</li>
							</ul>
							</div>
							</div>
						</p>
						
						<p class="before_shop_products">
							<div>
							<div class="msgoillist1">
							<p><b>Manjistha</b></p>
						<ul>
						    <li style="text-align:justify;">This rejuvenating herb can be used to treat varicose veins, eczema, and psoriasis</li>
							<li style="text-align:justify;">Helps in improving the functioning of the immune system</li>
							<li style="text-align:justify;">Contains blood-purifying and anti-oxidative properties</li>
							</ul>
						</div>
						<div class="msgmar">
							<p><b>Devadaru</b></p>
							<ul>
							<li style="text-align:justify;">Helps in treating nerve diseases and paralysis</li>
							<li style="text-align:justify;">Anti-inflammatory and helps in reducing skin itching</li>
							<li style="text-align:justify;">Helps in reducing pain from arthritis and headaches</li>
						</ul>
							</div>
							</div>
						</p>
						
						<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/diabetes-heart-health') { ?>
							<p class="before_shop_products" style="text-align:justify;">Ayurveda is one of the oldest holistic healing systems of the world that originated in India and can be an effective means of treating diabetes. Formed from two Sanskrit words – Ayur (life) and Veda (knowledge) – Ayurveda means “the science of life”. The treatment methodologies and medicines in Ayurveda are based on the belief that all living beings are governed by the five elements of earth, water, fire, air and space. Besides, all human beings have a specific constitution that is determined by three fundamental bodily energies or doshas – Vata, Pitta and Kapha. Any imbalance in these energies leads to diseases.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>What is Diabetes?</b></p>
							<p class="before_shop_products" style="text-align:justify;">Diabetes is a group of related diseases that affect the body’s natural ability to regulate the amount of glucose in the blood. Glucose is the primary source of energy for our cells and the source of fuel for our brain.</p>
							<p class="before_shop_products" style="text-align:justify;">Blood glucose levels in healthy individuals is regulated by several hormones, including insulin, allowing glucose to be used for fuel. But in the case of individuals with diabetes, the body either doesn’t produce enough insulin (called type 1 diabetes) or isn’t capable of using it well (called type 2 diabetes). In some cases of diabetes, both conditions can occur. As glucose is not efficiently incorporated into the cells, it stays in the blood resulting in serious problems.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>The Ayurvedic View</b></p>
							<p class="before_shop_products" style="text-align:justify;">As the sugar levels increase in the blood, its presence can be detected in the urine as well. That is why diabetes is referred to as Madhumeha in Ayurveda, where “Madhu” means honey and “Meha” is to urinate. Ayurveda understands that diabetes is caused by multiple factors, including the tendencies inherited at birth and the imbalance of all the three doshas. However, diabetes is majorly categorised as Vataj Meha – a condition resulting from the aggravation of Vata. Diabetes affects all the vital organs of the body and deteriorates the “dhatus” or body tissues. These symptoms are also associated with the impairment of Vata.</p>
							<p class="before_shop_products" style="text-align:justify;">Ayurvedic management of diabetes involves medications as well as dietary and lifestyle changes to help the patient lead an overall healthy life. The below-mentioned tips if followed, can bring immense benefits to manage and control diabetes.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Get up early</b></p>
							<p class="before_shop_products" style="text-align:justify;">Getting up early in the morning will help to take some time out for exercise. A good brisk walk in the morning is the best form of exercise for people with diabetes. They can also try yoga and meditation to relieve stress and clear their mind. Jogging, cycling, swimming can be done according to health conditions.</p>
							<p class="before_shop_products" style="text-align:justify;">A glass of lukewarm water with two teaspoons of fresh lemon juice is a great way to start the day as well.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Breakfast</b></p>
							<p class="before_shop_products" style="text-align:justify;">Eating a breakfast with high fat, moderate protein and low carbohydrates can help to reduce fasting blood sugar, A1c and weight. Diabetics can include eggs, unsweetened oatmeal, whole-grain bread, cottage cheese, fruits, and nuts in their breakfast.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Lunch</b></p>
							<p class="before_shop_products" style="text-align:justify;">Lightly cooked green vegetables like cabbage, spinach, asparagus, mushrooms, turnips, etc. can be eaten for lunch. In addition, whole wheat bread, sprouts, salad, boiled rice, lentils are good options for lunch as well.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Healthy snacks</b></p>
							<p class="before_shop_products" style="text-align:justify;">As people with diabetics shouldn’t remain empty stomach for long, they must carry filling snacks with them all the time. They can choose a handful of nuts and seeds over cheese, chips or crackers</p>
							<p class="before_shop_products" style="text-align:justify;">n the evening, they can have a glass of fresh fruit or vegetable juice.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Daytime sleep</b></p>
							<p class="before_shop_products" style="text-align:justify;">Sleeping during the day must be avoided. It increases Kledaka Kapha, a sub-dosha of Kapha, that can hinder proper digestion.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Dinner</b></p>
							<p class="before_shop_products" style="text-align:justify;">It is healthy to have a light dinner. For dinner, diabetics can choose something like boiled vegetables, sprouts, cottage cheese, a bowl of salad. Ideally, dinner must be completed at least two hours before going to bed.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Bedtime</b></p>
							<p class="before_shop_products" style="text-align:justify;">Going to bed early is vital. Adequate rest is necessary to control diabetes as well as for overall health.</p>
							<p class="before_shop_products" style="text-align:justify;">To manage the conditions of diabetes, Glymin Tablet is one of the best Ayurvedic medicine for diabetes that you can go for.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Glymin Tablets</b></p>
							<p class="before_shop_products" style="text-align:justify;">Glymin tablets are Ayurvedic medicines that help to control the blood sugar. It consists of the following anti-diabetic herbs:</p>
							<p class="before_shop_products" style="text-align:justify;">Asana (Pterocarpus marsupium Ht. Wd.):  It has anti-hyperlipidemic properties that are highly beneficial in controlling cholesterol, low-density lipoprotein and serum triglyceride levels. It also helps to manage symptoms like overeating, excessive thirst, frequent urination, poor vision and pain in the limbs.</p>
							<p class="before_shop_products" style="text-align:justify;"> Saptaranga (Salacia Sp. Rt.): It reduces the amount of sugar absorbed by the body from food. It lowers the haemoglobin A1C levels in Type II Diabetic patients and helps in weight reduction. Hence, Saptaranga is a vital component of Ayurvedic medicine for diabetes type 2.</p>
							<p class="before_shop_products" style="text-align:justify;">Jambu (Syzygium cumini Sd.): It naturally controls hyperglycemias, glucose formation in the liver, and maintains pancreatic health.</p>
							<p class="before_shop_products" style="text-align:justify;">Amalaki (Emblica officinalis Fr. R.): It is beneficial in the control of stress and sorbitol formation in the lens. It also prevents optic neuropathy.</p>
							<p class="before_shop_products" style="text-align:justify;">Meshashiringi (Gymnema sylvestre Lf.): It helps in reducing sugar cravings, improving insulin secretion and increasing optimal HDL in the blood.</p>
							<p class="before_shop_products" style="text-align:justify;">Karavallaka (Momordica charantia Fr.): It controls blood sugar level.</p>
							<p class="before_shop_products" style="text-align:justify;">Arjuna (Terminalia Arjuna St. Bk.): It has anti-inflammatory, hypotensive, antioxidant, anti-atherogenic, anti-carcinogenic, anti-mutagenic properties.</p>
							<p class="before_shop_products" style="text-align:justify;">Other ingredients included in Glymin tablets are - Saurabhanimba (Murraya koenigii Lf.), Haridra (Curcuma longa Rz.), Guduchi (Tinospora Cordifolia St.), Tvak (Cinnamomum zeylanicum St. Bk.) and Godanti</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Benefits</b></p>
							<p class="before_shop_products" style="text-align:justify;">Helps stabilise blood glucose levels: Diabetes Mellitus and other factors like stress and hormonal changes can spike up blood sugar levels during the day. Glymin tablets can be quite helpful to control blood glucose levels by breaking down the glucose entering the bloodstream.</p>
							<p class="before_shop_products" style="text-align:justify;">Manages long-term complications: Over the long term, diabetes can lead to complications like kidney issues, heart problems, diabetic retinopathy, infections, blood pressure, etc. Glymin can help prevent such complications by circulating insulin in the bloodstream to control hyperglycemia.</p>
							<p class="before_shop_products" style="text-align:justify;">Lowers total cholesterol levels: Taking Glymin simultaneously with exercise and low-fat and low-glucose diet can help to maintain lipid profile balance. It may also help to reduce insulin dosage too. By lowering low-density lipoprotein cholesterol and triglyceride levels, Glymin tablets improve your heart health as well.</p>
							<p class="before_shop_products" style="text-align:justify;">Aids in adequate insulin secretion: For proper glucose utilisation and glucose breakdown, proper secretion of insulin is essential. Glymin ensures adequate insulin is secreted in the pancreas.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Ayurveda For A Healthy Heart</b></p>
							<p class="before_shop_products" style="text-align:justify;">When it comes to maintaining a healthy heart, Ayurveda emphasizes on the importance of calming the mind, controlling the senses, conserving vital life energies, and focusing on overall health and happiness. As mentioned in the ancient texts, the heart is the energy hub of the body, and every aspect of our lives has an impact on it. Therefore, the therapeutic strategies for heart health are majorly focused on:</p>
							<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">Reducing stress</li>
							<li style="text-align:justify;">Clearing srotamsi (bodily channels) and nadis (energy pathways)</li>
							<li style="text-align:justify;">Kindling agni</li>
							<li style="text-align:justify;">Clearing ama (toxins)</li>
							<li style="text-align:justify;">Supporting ojas</li>
						</ul>
						</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Liposem Tablets</b></p>
							<p class="before_shop_products" style="text-align:justify;">One must practice Pranayama, Yoga, meditation, appropriate exercise, herbal therapies to avoid the factors that compromise overall health. Taking herbal formula tablets, such as <a href="https://www.keralaayurveda.biz/product/liposem-tablet" target="_blank"  style="color: #F9BF37;">Liposem tablets</a>, can deliver a combination of herbs to strengthen the heart muscles and act as the best Ayurvedic medicine for heart health.</p>
							<p class="before_shop_products" style="text-align:justify;"><b>Ingredients</b></p>
							<p class="before_shop_products" style="text-align:justify;">The Liposem Tablet for cholesterol contains the following active ingredients that are beneficial in the Ayurvedic treatment for heart blockage and heart diseases:</p>
							<div>
								<div class="diabetelist">
								<p class="before_shop_products" style="text-align:justify;"><b>Gokshura (Tribulus terrestris). 10. 47 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">This herb helps in fighting hypertension and is good for curing heart problems.</li>
							<li style="text-align:justify;">It is a triglycerides medicine in Ayurveda and fights high cholesterol.</li>
						</ul>
						</p>
								
						</div>
						<div class="diabetemar">
						<p class="before_shop_products" style="text-align:justify;"><b>Saptaranga (Salacia chinesis) 55 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">It acts on the final step in digestion of carbohydrates as well as on gut peptides and helps to control Type II diabetes.</li>
							<li style="text-align:justify;">It also helps manage weight and high cholesterol.</li>
						</ul>
						</p>
						
						</div>
						</div>
						<div>
						<div class="diabetelist">
						<p class="before_shop_products" style="text-align:justify;"><b>Arjuna (Terminalia arjuna) 60 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">It helps improve the muscle tone of the heart and rejuvenates it. </li>
							<li style="text-align:justify;">It also maintains a balance between Kapha, Pitta and Vata thereby promoting good health.</li>
						</ul>
						</p>
						</div>
						<div class="diabetemar">
						<p class="before_shop_products" style="text-align:justify;"><b>Guggulu (Balsamodendron mukul) 75 mg </b></p>
							<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">It helps to maintain healthy cholesterol levels as well as balance the body’s Kapha.</li>
							<li style="text-align:justify;">It enhances the detoxification process and increases fat metabolism in the body.</li>
						</ul>
						</p>
						</div>
						</div>
						<div>
								<div class="diabetelist">
						<p class="before_shop_products" style="text-align:justify;"><b>Salmali (Bombax malabaricum) 16. 47 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">It can help stop bleeding problems.</li>
							<li style="text-align:justify;">It has bowel regulatory and tissue regenerative properties.</li>
						</ul>
						</p>
						</div>
						<div class="diabetemar">
						<p class="before_shop_products" style="text-align:justify;"><b>Madhuka (Madhuca indica) 10. 47 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">This herb has anti-diabetic and anti-inflammatory properties.</li>
							<li style="text-align:justify;">It is an ayurvedic medicine for triglycerides and also used as a fermentation initiator.</li>
						</ul>
						</p>
						</div>
						</div>
						<div>
								<div class="diabetelist">
								<p class="before_shop_products" style="text-align:justify;"><b>Saurabhanimba (Murraya koenigii) 1. 65 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">This plant helps protect the liver.</li>
						</ul>
						</p>
						</div>
						<div>
						<p class="before_shop_products" style="text-align:justify;"><b>Ketaki (Pandanus tectorius) 10. 47 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;"> This plant is a good ayurvedic medicine for cholesterol reduction.</li>
						</ul>
						</p>
						
						</div>
						</div >
						<div>
								<div class="diabetelist">
								<p class="before_shop_products" style="text-align:justify;"><b>Kadali (Musa paradisiaca). 10. 47 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">It reduces hypertension and improves bowel movement.</li>
						</ul>
						</p>
						</div>
						<div>
						<p class="before_shop_products" style="text-align:justify;"><b>Nimba (Azadirachta indica) 1. 65 mg</b></p>
							<p class="before_shop_products">
							<ul>
							<li style="text-align:justify;">It helps eliminate free radicals and has antioxidant properties.</li>
						</ul>
					</p>
						
						</div>
						</div>
						<div>
						<div class="diabetelist">
						<p class="before_shop_products" style="text-align:justify;"><b>Rakta citraka (Plumbago indica) 10. 47 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">This herb is used to help with the problems concerning the liver.</li>
						</ul>
						</p>
						</div>
						<div>
						<p class="before_shop_products" style="text-align:justify;"><b>Jyotishmati (Celastrus paniculatus) 4. 39 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">This herb has antioxidant and anti-cholesterol properties.</li>
						</ul>
						</p>
						</div>
						</div>
						<div>
								<div class="diabetelist">
						<p class="before_shop_products" style="text-align:justify;"><b>Takkola (Illicium verum) 3. 84 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">This is used to ease digestion.</li>
						</ul>
						</p>
						<p class="before_shop_products" style="text-align:justify;"><b>Vrikshamla (Garcinia indica). 130 Mg</b></p>
							<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">It is an important part of Ayurvedic medicine for weak heart that helps to control appetite, enhance metabolism, and keep blood sugar levels under control.</li>
							<li style="text-align:justify;">It inhibits flatulence and indigestion thereby improving intestinal health.</li>
						</ul>
						</p>
						</div>
						<div>
						<p class="before_shop_products" style="text-align:justify;"><b>Sahachara (Barleria prionitis). 10. 47 mg</b></p>
						<p class="before_shop_products" >
						<ul>
							<li style="text-align:justify;">It is used to help treat neurological disorders, swollen glands and oedema.</li>
						</ul>
						</p>
						</div>
						</div>	
						<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/lehyam') { ?>
							<p class="before_shop_products" style="text-align:justify;">Due to the bitter ingredients of this formulation, rather than preparing a liquid form, a lehyam is prepared which is like a medicated jam. Essentially, lehyams are herbal jams which are processed with a sugary media like jaggery or sugar to make it palatable. They are prepared by boiling with the prescribed liquid or by adding powdered herbs to jaggery/sugar solutions till the correct constituency is obtained. Later, spices and ghee are added and once cooled, honey is also added. There are four major components in the manufacturing of lehyam preparations. They are:</p>
							<ul>
<li>A liquid part: kashayam (water extraction), juice, etc</li>
<li>Sugar media (jaggery, sugar or sugar candy)</li>
<li>Medicines in the form of ground paste or fine powder</li>
<li>Ghee, oil or honey as explained in the formula</li>
</ul>
<p class="before_shop_products" style="text-align:justify;"><b>Some common lehyams are:</b></p>
<ul>
	<li style="text-align:justify;"><p><b>Chyavanprash</b></p>
<p>Chyavanprash also known as chyavanaprasamlehyam is an old Ayurvedic formulation that is known to be useful in boosting the immune system, and protecting the body from infections caused by bacteria, viruses and weather change. 
The main ingredient - Amla is rich in Vitamin C and anti-oxidants making Chyavanprash a rejuvenating health tonic. The phyto-ingredients in Chyavanprash helps remove blood impurities and promote appetite and intelligence. It is said to be helpful in regaining the balanced state of deranged vata and pitta.</p></li>

<li style="text-align:justify;"<p><b>Aswagandhadi Lehyam</b></p>
<p>Ashwagandhadilehyam is a traditional poly-herbal semi-solid formulation with Ashwagandha (Withaniasomnifera) as one of its main ingredients. It is considered to be an immunity booster that is rich in anti-oxidants, and helps increase energy, reduce fatigue, improve stamina, muscle strength and sexual vigour.</p></li>

<li style="text-align:justify;"><p><b>Sathavarigulam</b></p>
<p>Sathavarigulam is an important plant with many medicinal properties and is used in Ayurveda to balance pitta and vata. Its bitter-sweet taste has a refreshing effect on the system, and its oily nature makes it an excellent nourishing support to the body.  These combined qualities make it rejuvenating for the reproductive system, the digestive system and for the blood.</p> </li>

<li style="text-align:justify;"><p><b>Dasamoolahareethaki Lehyam</b></p>

<p>DasamoolahareethakiLehyam is an ayurvedic medicine that is known to be effective in the treatment of cough, bronchitis, breathing troubles, asthma, common cold, rhinitis, persistent hiccup, hoarseness (hoarse voice), and chronic fever. It is also known to help control obesity and in conditions such as chronic inflammation, fever, emaciation, rheumatoid arthritis, bleeding diseases, urinary infection, gulma, anemia, and ailments of liver.</p></li>

<li style="text-align:justify;"><p><b> Manibhadram</b></p>
<p>ManibhadraGuda is said to be an effective Ayurvedic medicine in the treatment of skin diseases, leucoderma, boils, itches, scabies, bronchitis, cough, asthma, piles, intestinal worms, spleen related diseases. It also aids the regulation of bowel movements. The main ingredients in ManibhadraGuda are: Kumbha, Guda, Vidanga, Amalaka, Abhaya.</p></li>

<li style="text-align:justify;"><p><b>Thrivrith Lehyam</b></p>
<p>ThrivrithLehyam is an Ayurvedic medicine that is known to be beneficial in the treatment of constipation. It is mainly used in the Ayurvedic Panchakarma treatment - Virechana - for the purpose of detoxification of the body. The main ingredient in ThrivrithLehyam is Operculinaturpethum and the other ingredients present include cinnamon, cinnamon leaf, cardamom,  and honey. </p></li>

<li style="text-align:justify;"><p><b>Vilwadi Lehyam</b></p>
<p>VilwadiLehyam is an Ayurvedic preparation and natural antiemetic that is helpful in the treatment of bowel and digestion related health issues. Antiemetics are typically used to treat motion sickness and the side effects of opioid analgesics, general anaesthetics, and chemotherapy directed against cancer. 
VilwadiLehyamis named after its main ingredient Vilwamula (Aegle Marmelos) which is also known as Bael Root. Bael root is a medicinal herb especially known for its benefits relating to stomach issues like constipation, peptic ulcers, intestinal worms and many more. It increases the digestion power by increasing the jataragni (digestive fire) and also eliminates ama (toxins) accumulation from the body. It is also effective in relieving constipation and piles and symptoms of indigestion such as bloating, flatulence, abdominal pain, loss of appetite, excessive salivation, nausea and vomiting.</p> </li>

<li style="text-align:justify;"><p><b>Agasthya Rasayanam</b></p>
<p>AgasthyaRasayanam is an Ayurvedic medicine recommended for the treatment of numerous upper respiratory tract infection or problems such as a cough, rhinitis, sinus infection, and common cold. This lehyam contains antitussive, mucolytic, anti-inflammatory, anti-bacterial, anti-allergic, anti-microbial, antioxidant, carminative, and mild laxative medicinal properties. It is also known to help boost the immunity level in the body and strengthen the overall health to avoid any ailment. Its main uses include: </p>
<ul>
<li>It is widely used for Asthma and other chronic respiratory diseases.</li>
<li>This medicine improves immunity, and is beneficial in the prevention of recurrent sinusitis, fever and early signs of aging etc.</li>
<li>Aids in the treatment of gastric disorders like indigestion and constipation.</li>
</ul><br></li>


<li style="text-align:justify;"><p><b>Dasamoola Rasayanam</b></p>
<p>DasamoolaRasayanam is an Ayurvedic medicine that is effective in the treatment of many acute and chronic respiratory diseases. The preparation is very effective in respiratory ailments by increasing the digestion, relieving the phlegm and clearing the respiratory tract. The main benefits of DasamoolaRasayanam are:</p>
<ul>
<li>Aids in the treatment of Chronic respiratory conditions like bronchitis, asthma,</li>
<li>Known to be effective against chronic fever flatulence, bloating and hiccups.</li>
<li>It has potent anti-inflammatory, bronchodilatory and antitussive effects.</li>
DasamoolaRasayanam mainly acts on VataDosha, pacifying and balancing KaphaDosha.</li>
</ul><br></li>

<li style="text-align:justify;"><p><b>Thamboola Rasayanam</b></p>

<p>Thamboolalehyam is an Ayurvedic medicine that is used to help in the treatment of respiratory conditions such as asthma, cold, and cough. Thamboola translates to betel leaf, which is the main ingredient of this product. Key benefits of ThamboolaRasayanam include:</p>
<ul>
<li>Aids in the effective treatment of asthma, cold and cough.</li>
<li>It is used in the treatment of rhinitis, bronchitis, asthma, whooping cough and vomiting.</li>
</ul>
<br>
<p><b>The main ingredients in Thamboola Rasayanam are:</b></p>
<ul>
<li>Betel leaf extract (Piper betel)</li>
<li>Himamshu (Bambusabambos)</li>
<li>Long Pepper (Piper Longum)</li>
<li>Cumin (CuminumCyminum)</li>
<li>Sugar </li>
<li>Honey</li>
</ul>
</li>
</ul>

<p class="before_shop_products" style="text-align:justify;"><b>What is Ayurveda</b></p>
<p class="before_shop_products" style="text-align:justify;">Ayurveda, a natural system of medicine, originated in India more than 5,000 years ago. The term Ayurveda is derived from the Sanskrit words ayur (life) and veda (science or knowledge).  It is based on the idea that disease is due to an imbalance or stress in a person's consciousness and therefore, encourages certain lifestyle interventions and natural therapies to regain a balance between the body, mind, spirit, and the environment.</p>

<p class="before_shop_products" style="text-align:justify;">With a unique emphasis on total wellness, the art and science of Ayurveda work to harmonise our internal and external worlds. Our five senses serve as the portals between the internal and external realms and Ayurveda groups these five elements into three basic types of energy and functional principles that are present in everybody and everything. We use the Sanskrit words Vata, Pitta, and Kapha to describe these principles and their combinations. In ayurvedic medicine, it is thought that if an imbalance occurs in any of the three doshas, illness results.</p>

<p class="before_shop_products" style="text-align:justify;">Kapha: When imbalanced, those having Kapha dominant dosha can become unmotivated, stubborn, and complacent even when change is necessary. The metabolism tends to be slow and appetite for both food and stimulation is less intense than vata or pitta types.</p>

<p class="before_shop_products" style="text-align:justify;">Pitta:  Those having Pita dominant dosha tend to have strong digestion and intense appetites, both for food and challenges. It is common for them to suffer from health conditions such as inflammation, rashes, acne, and loose stool.</p>

<p class="before_shop_products" style="text-align:justify;">Vata: It's common for vata types to experience cold hands and feet, constipation, dry skin, and cracking joints. The influence of the air element in their constitution causes their energy, mood, and appetite to fluctuate dramatically. For this reason vata types often fail to eat and sleep regularly, swinging from eating heavy foods to ground and sedate themselves, or ingesting stimulants like coffee and sugar to sustain intense physical or mental activity. Insomnia and low immunity are very common problem for the sensitive vata person.</p>

<p class="before_shop_products" style="text-align:justify;">Treatments in Ayurveda begin with an internal purification process, followed by a special diet, herbal remedies, massage therapy, yoga, and meditation. The aim of the treatment is to aid the person by eliminating impurities, reducing symptoms, increasing resistance to disease, reducing stress and increasing harmony in life. Herbs and other plants, including oils and common spices, are used extensively in Ayurvedic treatments. </p>
<?php } elseif(request()->segment(1)."/".request()->segment(2) == 'product-category/lifestyle-products') { ?>
	<p class="before_shop_products" style="text-align:justify;">The ancient and traditional holistic healing system, Ayurveda is one of the most effective and in-demand options in recent times. The reason to use Ayurveda isn’t one but many. It’s holistic and long-term healing is one of the key facets that makes it a favourite choice for most. Several products of Ayurveda come with multiple benefits. 
For instance, Kumkumadi oil, one of the most used and effective Ayurvedic concoctions is a one-stop solution to all skin-related concerns. This herbal oil can be used to heal scars, tan, avoid pigmentation and even as a night serum. It is for these reasons that most people are now making an effort to switch to Ayurvedic skin-care regime. 
</p>

<p class="before_shop_products" style="text-align:justify;">Ayurveda can largely contribute to a healthy lifestyle with a variety of natural lifestyle products. Most importantly the alterations made by it will be for the long-term. Ayurveda aims at identifying and treating the root cause so that it can be treated once and for all. Few of the highly recommended ayurvedic products for skinand otherwise that can easily be incorporated into your existing lifestyle include Kumkumadi oil, organic jaggery like Marayoor jaggery, pure saffron and best virgin coconut oil among the others. </p>

<p class="before_shop_products" style="text-align:justify;"><b>Benefits of Ayurveda</b></p>

<p class="before_shop_products" style="text-align:justify;">Before we get started on the benefits of each of these products, let’s try and gather some of the key benefits of Ayurveda. </p>
<ul>
<li><p><b>It is a Philosophy</b></p>
<p>Ayurveda suggests lifestyle changes for a better and stronger future. This healing system does not believe in providing temporary solutions but aims at identifying and eradicating the root cause for good. Apart from being a healing system, it is also one of the oldest philosophies that look at holistic wellbeing. This philosophy teaches how wellbeing is beyond external factors like your body and skin. It directs at finding a balance between your mind, body and soul and at connecting with others from within.</p> </li>
<li><p><b>Reduction of toxins</b></p>
<p>Several Ayurveda products and practices are meant to cleanse your body internally. It focuses on washing away the toxins for better functioning of the human body. Certain practices like eating your largest meal during lunchtime are one of the methods to rid your body of toxins.</p></li>

<li><p><b>Better Digestion</b></p>
<p>Ayurveda recommends a diet that best suits your body and its functioning. The items recommended for consumption will stimulate your digestion at the right time of the day. This will also help cut down on the accumulation of toxins in your body. Pure coconut oil is one of the most recommended and favoured ingredients for better digestion and cleansing your body and getting rid of toxins. </p></li>

<li><p><b>Reduce stress</b></p>
<p>Ayurveda connects your diet with overall health and wellbeing. According to the traditional healing system, your digestive system and its functioning can have a direct and indirect impact on how you feel. It recommends a pure and ideal diet plan that will help reduce stress and also make you feel lighter and more energetic throughout the day.</p> </li>

<li><p><b>Better skin and overall health</b></p>
<p>Over the years, Ayurveda has come up with several concoctions that have proven to be the most effective for skin. The herbal and healing properties of Ayurvedic products assures to heal and maintain healthy and glowing skin. One of the most preferred Ayurvedic skincare products is Kumkumadi oil.</p>
<p class="before_shop_products" style="text-align:justify;">Further in this blog, we will dig deeper into the benefits of some of the best ayurvedic products namely, Kumkumadi Oil, pure saffron, pure virgin coconut oil, and marayoor jaggery.</p>
</li>
</ul>
	
	<p class="before_shop_products" style="text-align:justify;"><b>Kumkumadi Oil</b></p>
	<p class="before_shop_products" style="text-align:justify;">
This is one of the best ayurvedic products for skin available in the market as of now. Kumkumadi oil is considered to be a natural solution to nearly all skin problems. The oil is packed with anti-ageing and moisturizing benefits. It is regarded as an effective treatment for dry skin, pigmentation, and several other skin benefits. Overall, it is one of the best </p>
	<p class="before_shop_products" style="text-align:justify;">Ayurvedic skincare products available in the market. Other benefits of the Ayurvedic Kumkumadi Oil include;</p>
<ul>

<li>Reducing pigmentation</li>
<li>Evens out skin</li>
<li>Highly moisturizing</li>
<li>Anti-ageing benefits</li>
<li>Acts as an organic sunscreen</li>
</ul>

	<p class="before_shop_products" style="text-align:justify;"><b>Saffron</b></p>

	<p class="before_shop_products" style="text-align:justify;">Saffron is yet another organic product with many benefits. Here are some of the best benefits of saffron.</p>
	<ul>
<li>It can help improve depression-related symptoms </li>
<li>It is one of the traditional medicines to treat </li>
<ul>
<li>Asthma</li>
<li>Cramps</li>
<li>Congestion</li>
</ul>
<li>Can be used for scar removal</li>
<li>Helps treat diabetes</li>
<li>Offers treatment for premenstrual syndrome</li>
</ul>

	<p class="before_shop_products" style="text-align:justify;">Organic saffron can be found in most ayurvedic stores but if not you can also buy saffron online on trustworthy and authentic websites like Kerala Ayurveda. </p>
	<p class="before_shop_products" style="text-align:justify;"><b>Marayoor Jaggery</b></p>

	<p class="before_shop_products" style="text-align:justify;">Marayoor jaggery is the result of condensed sugar cane juice made by the Marayoor locals. Jaggery is a great substitute for white sugar. Following are the benefits of Marayoor jaggery:</p>
	<ul>
<li>Improves digestion and metabolism</li>
<li>Cleanses your body</li>
<li>Avoids constipation</li>
<li>It is a detoxifying agent</li>
<li>High in antioxidants</li>
<li>Treatment for abdominal pain and menstrual cramps</li>

</ul>
<p class="before_shop_products" style="text-align:justify;">Apart from stores, you can also buy marayoor jaggery online on Kerala Ayurveda</p>
<p class="before_shop_products" style="text-align:justify;"><b>Pure Virgin Coconut Oil</b></p>

<p class="before_shop_products" style="text-align:justify;">For a majority of the population, coconut oil is used for most of their preparations and is a part of their staple diet. Here are some of the top reasons to incorporate coconut oil into your existing lifestyle.</p>
<p><b>Health benefits</b></p>
<ul>

<li>Pure virgin coconut oil can increase fat burning</li>
<li>Can help reduce seizures</li>
<li>Increases good HDL cholesterol</li>
</ul>
<p><b>Benefits to Skin</b></p>
<ul>

<li>Helps gain smooth skin</li>
<li>Can be used as a sunscreen</li>
<li>Considered a great ayurvedic treatment for skin glow and dry skin</li>
<li>HealS wounds</li>
</ul>
<p><b>Benefits to Hair</b></p>
<ul>

<li>Helps prevent hair loss</li>
<li>Moisturizes the scalp</li>
<li>A solution for dandruff</li>
</ul>
						<?php } ?>
				</div>
			</div>
			<?php if("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"=="https://keralaayurveda.biz/product") { ?>
			<div class="col-12 col-md-12 col-xl-12">
			<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Ayurveda is an ancient healing science that dates back 3,000 years. It’s known for providing various medicinal solutions for diseases through consistent medication, diet, lifestyle regimens, it stresses on maintaining health, and prevention of diseases. Ayurveda states that life is constant, and it’s maintained by the trifecta of mental, spiritual, and physical factors; these factors are constituted by the body, senses, mind, and spirit.</span></span></span></p>
			<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Everyone has a unique fingerprint, and just like that, each individual has a unique pattern of energy, as well. There are many elements, external and internal, that affect the dosha balance. This disturbance is reflected in the physical and emotional stresses of a person.</span></span></span></p>
			<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Kerala Ayurveda is inclusive of treatments that are geared towards specific health issues. People who involved with Ayurveda believe that every person is made of five elements like space, air, fire, water, and Earth. These are considered universal energies, and they integrate within the human body to form doshas; these doshas control how the body functions.</span></span></span></p><br>
			<h3 open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#000000;">The Three Doshas are:</span></span></span></h3><br>
			<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Vata</b></strong></span></span></span></p>
			<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">This is the life energy that is involved with the movement, and it’s composed of space and air. This energy is responsible for breathing, blinking, tissue and muscle movement, heartbeats, and the cytoplasm and cell membrane movements. When the Vata dosha is balanced, it provides flexibility and creativity; when it’s unbalanced, it can trigger anxiety attacks and stress.</span></span></span></p>
		    <p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Pitta</b></strong></span></span></span></p>
			<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">This life energy affects the body’s metabolic rate, and it’s believed to be made up of fire and water. The Pitta dosha is associated with regulating the digestion process, assimilation, nutrition, metabolism, and stabilize the body temperature. When the dosha is balanced, it promotes intelligence and understanding; if it’s out of balance, then the Pitta usually brings about anger, hatred, and jealousy.</span></span></span></p>
			<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Kapha</b></strong></span></span></span></p>
			<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">The Kapha dosha is the energy that arranges the body’s structure, which means it keeps the bones, muscles, and tendons intact while holding the cells together; the dosha is formed from Earth and water. Kapha is responsible for supplying water to all the vital organs in the human body. It is known for lubricating the joints, moisturizing and hydrating the skin, and maintaining immunity. When this dosha is balanced, you will experience kindness, love, and joy; when it falls out of balance, it can lead to greed, attachment, and envy.</span></span></span></p>
            <p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Life is full of opportunities, and it can present us with a sizable amount of challenges as well; there are some things we can control, and some we cannot. So, we have to learn to make conscious decisions on the aspects that we can control by maintaining a healthy lifestyle that will balance out our doshas.</span></span></span></p><br>
			<h3 open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#000000;">Ayurveda as a system of healing:</span></span></span></h3><br>
			<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Ayurveda does not just focus on the disease, but also on maintaining life balance along with the energies; this is what makes it different from allopathic medicine. When the body experiences minimal stress, then the flow of energy is balanced, the natural defense system of the body is stronger, and it can defend itself easier from other diseases.
			However, you must understand that Ayurveda is not a substitute for modern medicine. You have to notice when you’re feeling discomfort or under the weather. This will help you figure out the best Ayurvedic treatment for yourself.
</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Nalpamaradi Keram:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Keram oil is prescribed in Ayurveda as a skin illuminator, and it’s popularly known as a de-tanning oil. The formulation is created in a way to lighten the complexion and repair the skin while keeping it soft and supple. The natural oil includes turmeric and other active antioxidants that repair pigmentation, marks, and uneven skin tone. It’s also known for its anti-fungal and antiseptic properties. Aside from its skin brightening properties, Keram oil can also be used to treat skin issues like scabies, eczema, herpes, acne, and dermatitis. The oil can be used for babies as well, and it’s safe for minor skin conditions as well.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic medicine for constipation:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">When you look at constipation from an Ayurvedic point of view, it will show you that the Vata governs the movement and elimination of toxins within the body. Hence, anything that throws the Vata out of balance- like stress, travel, dehydration, and cold- can hinder your bowel movement and cause constipation.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Some of the popular Ayurvedic medicines for constipation include the following herbs:</span></span></span></p>	
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Triphala:</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">This is one of the best ingredients to relieve yourself from constipation. This herb is used as a tonic and laxative in Ayurvedic treatments. You will have to take it with loads of water so that it lubricates the bowels and helps dry stools to pass. You can take two Triphala capsuled with some water, just before bed.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Psyllium:</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Psyllium is a highly absorbent seed husk that scrubs the colon clean. You have to do is take one to two teaspoons and mix it in a glass of warm water. Have the mixture daily, and you will notice instant relief from constipation.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Dandelion root:</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Dandelion root is a mild laxative that provides relief from constipation, and it doesn’t irritate the colon. You have to boil the laxative in water and drink the mixture three to four times a day. If you don’t like the taste, then you can have three to four tablets with warm water daily.</span></span></span></p>			
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic medicine for sinus:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Sinus problems are caused because of an underlying imbalance in the sub doshas of the mind. When the ama accumulation starts to interfere with the sinus area, it begins to get really toxic. When all the three doshas are imbalanced, then it compromises the immunity. You can purchase herbal supplements online that support a healthy inflammatory response, clear sinuses, and dissolve mucus. The overall effects of these herbal medicines should be to maintain health and boost immunity. Some sinus supplements will also help defend your body against allergens and bacteria, as well.</span></span></span></p>			
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic medicine for joint pain:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Joint pain can happen if the patient is suffering from arthritis, at it mostly affects people above the age of 55; cold temperatures can intensify joint pain, inflammation, and stiffness. Ayurveda suggests that certain herbs can help provide relief from joint pain, especially during the colder months. So, if you are looking to purchase herbal medicines, then you have to look for the following ingredients because they can help reduce joint pain:</span></span></span></p>	
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Nirgundi:<br>This plant is found in many Ayurvedic medicines because it helps reduce inflammation and has many antioxidant properties.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Dashmool:<br>This is a combination of ten medicinal herbs, and they are used to cure many ailments, including the ones caused due to arthritis and inflammation. The mixture of herbs is known mostly for its sedative properties and that it effectively reduces joint pain.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic medicine for migraine:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Migraine headaches are caused due to an imbalance of Pitta and Vata doshas. This can cause severe, sharp pains. The migraines are usually triggered due to excessive exposure to the glare from a computer screen and light/sound sensitivity. Sometimes, digestive imbalances can also lead to bad migraines. You can purchase stress-relieving massage oils from the Kerala Ayurveda website and use them consistently to relieve any pain. Other methods of relieving migraines are setting up a routine, having a healthy sleep routine, and practicing yoga and meditation. However, if the migraines persist even after the solutions mentioned above, then you will have to consult a medical professional to diagnose your condition and get to the root cause.</span></span></span></p>			
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic medicine for knee pain:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Knee issues can affect people of all ages, and it can be due to an injury or due to age. If you’re looking for Ayurvedic medicines for knee pain, then you have to ensure that they include anti-inflammatory ingredients. You can also try massage oils because they are known to help provide relief from knee pain. Above all, it’s necessary to take plenty of rest and have a proper diet because this will help with a speedy recovery.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic massage oil:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Ayurvedic massage oils are mostly used for balancing out the doshas. Medicated oil from sesame seeds are used for the Vata or Kapha doshas, and coconut oils are used for Pitta dosha. A good Ayurvedic massage can create an experience a beautiful experience that is mainly on eliminating stress, bringing about some peace and relaxation, and releasing any pent up emotional blockages. You can purchase the suitable Ayurvedic massage oil from the Kerala Ayurveda online store. It’s recommended that you massage yourself with oil at least twice a week, for 4-6 weeks until you see the results.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic treatment for fissure:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Ayurveda considers fissures as an illness, and that it’s caused due to the imbalance of the Vata and Pitta dosha. An imbalance of Vata can cause a cutting pain, and an imbalance of Pitta can cause burning and inflammation. You can look for Ayurvedic medicines and treatments that reduce inflammation and pain, and also pair it with an individualized diet that will accelerate the healing process.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic medicine for UTI:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Urinary Tract Infections are more common than you think, and they can occur due to poor hygiene, controlling the urge to urinate, or as a side effect to an ongoing medical condition. Look for Ayurvedic medicine for UTI that have ingredients like elaadi-choorna, taarakeswara ras, and chandraprabhavati because they can effectively treat the condition without harming any vital organs.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic treatment for acidity:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Acidity can cause bloating, inflammation, acid reflux, diarrhea, and constipation. Ayurveda suggests that you stay away from spicy foods because they can leave behind a toxic residue known as ama. Keep your diet light and healthy. Look for herbal medicines that are rich in fennel seeds, basil, ginger, or hing. Ensure that you choose the suitable Ayurvedic treatment for gastritis because it will help with acid reflux.</span></span></span></p>
<p open="" sans="" style="box-sizing: border-box; text-align:justify;margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;"><strong style="box-sizing: border-box; font-weight: 700;"><b>Ayurvedic medicine for heart:</b></strong></span></span></span></p>
<p open="" sans="" style="box-sizing: border-box;text-align:justify; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: "><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">A majority of heart diseases are preventable, and if you take suitable Ayurvedic medicine for heart health, then you can improve on the cardiorespiratory function as well. Look for natural supplements that include all the Ayurvedic factors and can successfully balance your doshas. Don’t forget to consult with your doctor before getting on any new medicines</span></span></span></p>
			</div>
			<?php }?>
			
		</div>

         <div style="text-align:center;"><button class="open-filterbar d-lg-none flit">Filter</button></div>
        <div class="filterbar-backdrop"></div>
	</div>

@stop

@php
	$fullFooter = true;

	$footer = true;

	$newsletter = true;
@endphp

@section('js')
	@parent
	@include('Ecommerce::cart.cart_script')

	<script type="text/javascript">
		$(document).ready(function () {
			$("#shop_sort").change(function () {
				$("#filterSort").val($(this).val());

				$("#filterForm").submit();
			});

			$('input[type="checkbox"]').click(function () {
				$('input[type="checkbox"]:checked').each(function() {
   			// console.log(this.value);
			
				document.location.href = "https://keralaayurveda.biz/product-category/"+this.value;

				// $("#filterForm").submit();
			});
		});

			$('#banner .owl-carousel').owlCarousel({
				items : 1,
				loop : true,
				smartSpeed : 600,
				dots : true,
			});

			$('select').selectric();

			$("#price-range").ionRangeSlider({
				type: "double",
				min: 0,
				max: {{ \Settings::get('filter_max_price') }},
				from: $('#price-range_from').val(),
				to: $('#price-range_to').val(),
				step: 10,
				onStart: function (data) {
					$('.price-range-box .from').text(data.from);
					$('.price-range-box .to').text(data.to);
				},
				onChange: function (data) {
					$('.price-range-box .from').text(data.from);
					$('.price-range-box .to').text(data.to);
					$('#price-range_from').val(data.from);
					$('#price-range_to').val(data.to);
				}
			});

			$('.product-list-col .filters svg').click(function(event) {
				if ($(this).hasClass('active')) {
					return;
				}

				$('.product-list-col .filters svg').removeClass('active');
				$(this).addClass('active');

				$('.product-list-col').css('opacity', 0).toggleClass('list-view block-view').animate({ 'opacity' : 1 }, 400);
			});

			$('.open-filterbar').click(function(event) {
				$('body').addClass('filterbar-active');
				$('.filterbar-backdrop').fadeIn(300);
			});

			$('.close-filterbar, .filterbar-backdrop').click(function(event) {
				$('body').removeClass('filterbar-active');
				$('.filterbar-backdrop').fadeOut(100);
			});

		});
	</script>
@endsection