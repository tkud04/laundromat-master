		<!-- product area  -->
		<div class="product-list-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-list">
							<h3>Best Selling</h3>
							@if(isset($bs) && count($bs) > 0)
							@foreach($bs as $b)
						      <?php
								$url = url("products/".$b['id']);
								$images = $b['images'];
							  ?>
							<div class="single-product-list">
								<div class="product-image">
									<a href="{{$url}}">
										<img class="primary-1" src="{{asset($images[0])}}" alt="">
										<img class="primary-2" src="{{asset($images[1])}}" alt="">
									</a>
								</div>
								<div class="product-desc">
									<h4 class="name"><a href="#">{{$p['name']}}</a></h4>
									<span class="amount">
										<del><span class="amount-del">${{$p['price'] + 200}}</span></del>
										${{$p['price']}}
									</span>
									<div class="add-to-cart">
										<a href="#" data-toggle="tooltip"  title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							@endforeach
							@endif
							<div class="pro-more-option">
								<a href="{{url('shop')}}">View more <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-list">
							<h3>On Sale</h3>
							@if(isset($os) && count($os) > 0)
							@foreach($os as $o)
						      <?php
								$url = url("products/".$o['id']);
								$images = $o['images'];
							  ?>							
							<div class="single-product-list">
								<div class="product-image">
									<a href="{{$url}}">
										<img class="primary-1" src="{{asset($images[0])}}" alt="">
										<img class="primary-2" src="{{asset($images[1])}}" alt="">
									</a>
								</div>
								<div class="product-desc">
									<h4 class="name"><a href="#">{{$o['name']}}</a></h4>
									<span class="amount">
										<del><span class="amount-del">${{$o['price'] + 200}}</span></del>
										${{$o['price']}}
									</span>
									<div class="add-to-cart">
										<a href="#" data-toggle="tooltip"  title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							@endforeach
							@endif
							<div class="pro-more-option">
								<a href="{{url('shop')}}">View more <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm col-xs-12">
						<div class="product-list last">
							<h3>Special</h3>
							@if(isset($ss) && count($ss) > 0)
							@foreach($ss as $s)
						      <?php
								$url = url("products/".$s['id']);
								$images = $s['images'];
							  ?>
							<div class="single-product-list">
								<div class="product-image">
									<a href="{{$url}}">
										<img class="primary-1" src="{{asset($images[0])}}" alt="">
										<img class="primary-2" src="{{asset($images[1])}}" alt="">
									</a>
								</div>
								<div class="product-desc">
									<h4 class="name"><a href="#">{{$s['name']}}</a></h4>
									<span class="amount">
										<del><span class="amount-del">${{$s['price'] + 200}}</span></del>
										${{$s['price']}}
									</span>
									<div class="add-to-cart">
										<a href="#" data-toggle="tooltip"  title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							@endforeach
							@endif
							<div class="pro-more-option">
								<a href="{{url('shop')}}">View more <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- product area end -->