		<!-- product filter area -->
		<div class="trendy-area pad-70">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-title">
							<h4>Trending Now</h4>
						</div> 
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="filter-mnu">
							<div class="filter" data-filter="all">all</div>
							<div class="filter" data-filter=".Nightwear">Accessories</div>
							<div class="filter" data-filter=".Dress">Clothes</div>
							<div class="filter" data-filter=".Jewellery">Jewellery</div>
						</div>
					</div>
					<div id="Container">
					    @if(isset($trending) && count($trending) > 0)
						@foreach($trending as $t)
					    <?php
						  $url = "products/".$t['id'];
						  $images = $t['images'];
						 ?>
						<div class="mix  Nightwear">
							<div class="col-md-3 col-sm-4">
								<div class="single-product">
									<div class="product-image fix">
										<a href="{{$url}}">
											<img  src="{{$images[0]}}" alt="">
											<img class="primary-2" src="{{$images[1]}}" alt="">
										</a>
										<div class="product-action">
											<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
										</div>
										<div class="new-area sell-area">
											<div class="new">
												<span class="text-new"><span>sell</span></span>
											</div>
										</div>
										<div class="color">
											<ul class="color-list">
												<li class="bk"><span>bk</span></li>
												<li class="rd"><span>rd</span></li>
												<li class="yl"><span>yl</span></li>
											</ul>
										</div>
									</div>
									<h4 class="name"><a href="#">{{$t['name']}}</a></h4>
									<span class="amount">
										<del><span class="amount-del">${{$t['price'] + 20}}</span></del>
										${{$t['price']}}
									</span>
									<div class="add-to-cart">
										<a href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
						endforeach
						@endif
					</div>
				</div>
				<div class="row">
					<div class="more-option">
						<span class="border-icon">
							<span class="border-icon-bg">
								<span class="plus-icon">+</span>
							</span>
						</span>
					</div> 
				</div>
			</div>
		</div>
		<!-- product filter area -->