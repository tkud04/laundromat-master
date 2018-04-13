		<!-- Main content  -->
		<div class="prodect-details-area">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-5 col-sm-6 col-xs-12 ">
								<div class="main-img">
									<div class="tab-content">
									@for($i = 0; $i < count($images); $i++)
										<div role="tabpanel" class="tab-pane active" id="home2">
											<div class="zoom">
												<a class="zoom_01" rel="group" href="{{asset('img/porduct-details/1.1.jpg')}}">
													<img class="" src="{{asset('img/porduct-details/1.jpg')}}"  alt="" />
												</a>
											</div>
										</div>
									@endfor
									</div>
									<div class="" role="tablist">
										<div class="magnifier-gallery ind-style">
											<div class="img-gallary">
												<div role="presentation" class="active"><a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">
													<img  src="{{asset('img/porduct-details/g1.jpg')}}"  alt="" /></a>
												</div>
											</div>
											<div class="img-gallary">
												<div role="presentation"><a href="#profile2" aria-controls="profile2" role="tab" data-toggle="tab">
													<img  src="{{asset('img/porduct-details/g2.jpg')}}" alt=""  /></a>
												</div>
											</div>
											<div class="img-gallary">
												<div role="presentation"><a href="#messages2" aria-controls="messages2" role="tab" data-toggle="tab">
													<img  src="{{asset('img/porduct-details/g3.jpg')}}"  alt="" /></a>
												</div>
											</div>
											<div class="img-gallary">
												<div role="presentation"><a href="#settings2" aria-controls="settings2" role="tab" data-toggle="tab">
													<img  src="{{asset('img/porduct-details/g1.jpg')}}"  alt="" /></a>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-6 col-xs-12">
								<div class="single-pro-details">
									<div class="product-details-shop ">
										<h4 class="name">Adipisicing sed do</h4>
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
											$185.00
										</span>
										<p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam, quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur adipisicing sed do new eiusmod tempor incididunt ut labore etel dolore magna aliqua.</p>
										<div id=field1>
											<span>Qty</span>
											<button type="button" id="sub" class="sub">-</button>
											<input type="text" id="1" value="1" class="field">
											<button type="button" id="add" class="add">+</button>
										</div>
										<div class="product-action">
											<a class="add-tocart" href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart" >Add To Cart</a>
											<a href="#" data-toggle="tooltip"   title="Mail To"><i class="fa fa-envelope"></i></a>
											<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
										</div>	
									</div>
								</div>
								<div class="product-meta">
									<div class="posted-in">
										Category:
										<a href="#"> Jumpers & Cardigans.</a>
									</div>
									<div class="tagged-as">
										Tags: 
										<a href="#">Collection Women</a>,
										<a href="#"> Fashion</a>,
										<a href="#"> New</a>,
										<a href="#"> Theme</a>,
										<a href="#"> Top</a>.
										<a href="#"> Wordpress</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="product-info">
									<!-- Nav tabs -->
									<ul class="info-tab" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Additional Information</a></li>
										<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reviews (0)</a></li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="home">
											<h2>Product Description</h2>
											<p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut new labore etel dolore magna aliqua. Ut enim newsminimveniam, fashions quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur
											adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor</p>
											<p>incididunt ut new labore etel dolore magna aliqua. Ut enim newsminimveniam, fashions quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur adipisicing. Fashion double layering.</p>

											<p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut new labore etel dolore magna aliqua. Ut enim newsminimveniam, fashions quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur
											adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut new labore etel dolore magna aliqua. Ut enim newsminimveniam, fashions quis nostrud exercitation new ullamco laboris nisi.</p>
										</div>
										<div role="tabpanel" class="tab-pane" id="profile">
											<h2>Additional Information</h2>
											<table>
												<tr>
													<th>Brands</th>
													<td>Sam Sung</td>
												</tr>
												<tr> 	
													<th>Color</th>
													<td>Blue, Brown, Orange</td>
												</tr>
											</table>
										</div>
										<div role="tabpanel" class="tab-pane" id="messages">
											<div class="reviews">
												<h3>Reviews</h3>
												<p>There are no reviews yet.</p>
												<h2>Be the first to review “Adipisicing sed do” </h2>
												<p>Your email address will not be published. Required fields are marked *</p>
												<h4>Your Rating</h4>
												<span>
													<a class="star-1" href="#">
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</a>
													<a class="star-2" href="#">
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</a>
													<a class="star-3" href="#">
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</a>
													<a class="star-4" href="#">
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</a>
													<a class="star-5" href="#">
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</a>
												</span>
												<h3>Your Review *</h3>
												<form>
													<textarea cols="45" rows="3"></textarea>
													Name *	
													<input class="full1" type="text" name="name"><br>
													Email * 
													<input class="full1" type="email" name="email"><br/>
													<input type="submit" name="submit" value="Submit">
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="related-product">
										<h1>Related Products</h1>
										<div class="pr-crosel related-style">
											<div class="col-md-4">
												<div class="single-product">
													<div class="product-image fix">
														<a href="#">
															<img  src="{{asset('img/product/1.jpg')}}" alt="">
															<img class="primary-2" src="{{asset('img/product/2.jpg')}}" alt="">
														</a>
														<div class="product-action">
															<a href="#" data-toggle="tooltip"   title="Quick view"><i class="fa fa-eye"></i></a>
															<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
															<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
														</div>
														<div class="new-area">
															<div class="new">
																<span class="text-new"><span>new</span></span>
															</div>
														</div>
													</div>
													<h4 class="name"><a href="#">Ullamco laboris nisi</a></h4>
													<span class="amount">
														<del><span class="amount-del">$170.00</span></del>
														$185.00
													</span>
													<div class="add-to-cart">
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="single-product">
													<div class="product-image fix">
														<a href="#">
															<img  src="{{asset('img/product/1.jpg')}}" alt="">
															<img class="primary-2" src="{{asset('img/product/2.jpg')}}" alt="">
														</a>
														<div class="product-action">
															<a href="#" data-toggle="tooltip"   title="Quick view"><i class="fa fa-eye"></i></a>
															<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
															<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
														</div>
														<div class="new-area">
															<div class="new">
																<span class="text-new"><span>new</span></span>
															</div>
														</div>
													</div>
													<h4 class="name"><a href="#">Ullamco laboris nisi</a></h4>
													<span class="amount">
														<del><span class="amount-del">$170.00</span></del>
														$185.00
													</span>
													<div class="add-to-cart">
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="single-product">
													<div class="product-image fix">
														<a href="#">
															<img  src="{{asset('img/product/1.jpg')}}" alt="">
															<img class="primary-2" src="{{asset('img/product/2.jpg')}}" alt="">
														</a>
														<div class="product-action">
															<a href="#" data-toggle="tooltip"   title="Quick view"><i class="fa fa-eye"></i></a>
															<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
															<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
														</div>
														<div class="new-area">
															<div class="new">
																<span class="text-new"><span>new</span></span>
															</div>
														</div>
													</div>
													<h4 class="name"><a href="#">Ullamco laboris nisi</a></h4>
													<span class="amount">
														<del><span class="amount-del">$170.00</span></del>
														$185.00
													</span>
													<div class="add-to-cart">
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="single-product">
													<div class="product-image fix">
														<a href="#">
															<img  src="{{asset('img/product/1.jpg')}}" alt="">
															<img class="primary-2" src="{{asset('img/product/2.jpg')}}" alt="">
														</a>
														<div class="product-action">
															<a href="#" data-toggle="tooltip"   title="Quick view"><i class="fa fa-eye"></i></a>
															<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
															<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
														</div>
														<div class="new-area">
															<div class="new">
																<span class="text-new"><span>new</span></span>
															</div>
														</div>
													</div>
													<h4 class="name"><a href="#">Ullamco laboris nisi</a></h4>
													<span class="amount">
														<del><span class="amount-del">$170.00</span></del>
														$185.00
													</span>
													<div class="add-to-cart">
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 hidden-sm hidden-xs">
						<div class="widget">
							<h3>Upsell Products</h3>
						</div>
						<div class="upsel-product">
							<a href="#">
								<img src="{{asset('img/porduct-details/collection-3.jpg')}}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main content end -->