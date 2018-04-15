
		<!-- Main content  -->
		<div class="main-content">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-12" >
						<div class="widget">
							<h3>Categories</h3>
							<ul>
								<li><a href="#">Bags</a></li>
								<li><a href="#">Beauty</a></li>
								<li><a href="#">Cost & Jackets</a></li>
								<li><a href="#">Dress</a></li>
								<li><a href="#">Jewellery</a></li>
								<li><a href="#">Jumpers & Cardigans</a></li>
								<li><a href="#">Nightwear</a></li>
							</ul>    
						</div>
						<div class="widget">
							<div class="widget shop-filter">
								<h3>Price</h3>
								<div class="info_widget">
									<div class="price_filter">
										<div id="slider-range"></div>
										<div class="price_slider_amount">
											<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
											<input type="submit"  value="Filter"/>  
										</div>
									</div>
								</div>							
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-12">
								<div class="shop-setting">
									<div class="show-style">
										<p class="setting-p" >View as: </p>
										<!-- Nav tabs -->
										<ul role="tablist">
											<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
											<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
										</ul>
									</div>
									<div class="show-product hidden-sm hidden-xs ">
										<form>
											<select name="orderby" class="orderby ">
                                                <option value="menu_order" selected="selected">Default</option>
                                                <option value="popularity">Popularity</option>
                                                <option value="rating">Rating</option>
                                                <option value="date">Newness</option>
                                                <option value="price">Price</option>
											</select>
										</form>
									</div>
									<div class="show-product hidden-sm hidden-xs ">
										<form>
											<span>Show:</span>
											<select class="orderby number" name="page_size">
                                                <option value="9" selected="selected">9</option>
                                                <option value="12">12</option>
                                                <option value="24">24</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="90">90</option>
                                                <option value="100">100</option>
											</select>
										</form>
									</div>
									<div class="show-pagination">
									    <ul class="pagination pagi-style">
											<li ><a href="#" class="current page-numbers">1</a></li>
											<li><a href="#" class="page-numbers">2</a></li>
											<li><a href="#" class="page-numbers"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						@if(isset($ret) && count($ret) > 0)
						@foreach($ret as $p)
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="row">
									<div class="product-area">
									 
									     <?php
										   $url = "products/".$p['id'];
										   $images = $p['images'];
										 ?>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="single-product">
												<div class="product-image fix">
													<a href="{{$url}}">
														<img  src="{{$images[0]}}" alt="">
														<img class="primary-2" src="{{images[1]}}" alt="">
													</a>
													<div class="product-action">
														<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
													</div>
													<div class="new-area">
														<div class="new">
															<span class="text-new"><span>new</span></span>
														</div>
													</div>
												</div>
												<h4 class="name"><a href="#">{{$p['name']}}</a></h4>
												<span class="amount">
													<del><span class="amount-del">${{$p['price'] + 200}}</span></del>
													${{$p['price']}}
												</span>
												<div class="add-to-cart">
													<a href="#"><i class="fa fa-shopping-cart"></i></a>
												</div>
											</div>
										</div>
									</div> 
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="profile">
								<div class="show-as-list">
									<div class="single-product">
										<div class="product-image fix">
											<a href="{{$url}}">
												<img  src="{{$images[0]}}" alt="">
												<img class="primary-2" src="{{$images[1]}}" alt="">
											</a>
											<div class="color">
												<ul class="color-list">
													<li class="bk"><span>bk</span></li>
													<li class="rd"><span>rd</span></li>
													<li class="yl"><span>yl</span></li>
												</ul>
											</div>
											<div class="new-area sell-area">
												<div class="new">
													<span class="text-new"><span>sell</span></span>
												</div>
											</div>
										</div>
										<div class="product-details-shop ">
											<h4 class="name"><a href="#">{{$p['name']}}</a></h4>
											<div class="reating">
												<span class="star-reating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#">0 Review(s) / Add Your Review </a>
												</span>
											</div>
											<span class="amount">
												<del><span class="amount-del">{{$p['price'] + 20}}</span></del>
												${{$p['price']}}
											</span>
											<p>{{$p['description']}}</p>
											<div class="product-action">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart" ><i>Add To Cart</i></a>
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						@endif
						<div class="row">
							<div class="col-md-12">
								<div class="shop-pagination">
									<div class="show-pagination">
									    <ul class="pagination pagi-style">
											<li ><a href="#" class="current page-numbers">1</a></li>
											<li><a href="#" class="page-numbers">2</a></li>
											<li><a href="#" class="page-numbers"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main content end -->