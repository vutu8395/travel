@extends('layouts.general')

@section('noidung')

    <!-- content -->
    <div class="col-md-9">
				<div class="page-header">
					<h1 class="page-title"><b>Tour du lịch Đà Nẵng</b></h1>
				</div>
        <!-- group-filter -->

				<div class="group-filter">
					<ul class="nav nav-tabs">
						<li><a href="#" class="sort active" data-sort="0">Phổ biến nhất</a></li>
						<li class="sub-menu">
						    <a href="#">Giá <span class="caret"></span></a>
						    <ul class="nav sub">
						      	<li><a href="" class="sort" data-sort="2">Giảm dần</a></li>
								<li><a href="" class="sort" data-sort="1">Tăng dần</a></li>
						    </ul>
						</li>
						<li class="sub-menu">
						    <a href="#">Số ngày <span class="caret"></span></a>
						    <ul class="nav sub">
						      	<li><a href="" class="sort" data-sort="3">Ngắn ngày</a></li>
								<li><a href="" class="sort" data-sort="4">Dài ngày</a></li>
						    </ul>
						</li>
						<li><a href="" class="sort" data-sort="5">Sắp khởi hành</a></li>
						<li><a href="" class="sort" data-sort="6">Đánh giá cao</a></li>
						<li><a href="" class="sort" data-sort="7">Khuyến mãi</a></li>
					</ul>
				</div>
        <!-- /group-filter -->
        <!-- product -->
				<div class="product product-tour">
					<!-- item-tour -->
					@foreach($products as $product)
						<div class="item-tour">
						<div class="product-item row">
							<div class="col-sm-9">
								<h3 class="title-sm">
									<a class="product-name" href="#">{{$product->pro_name}}</a>
								</h3>
							</div>
							<!-- product-content-left -->
							<div class="product-content-left col-sm-9">
								<div class="product-info">
									<!-- product-bootstrap/images -->
									<div class="product-image">
										<a href="#"><img src="bootstrap/images/{{$product->pro_img}}" class="img-responsive" alt="du lich da nang" title="Tour du lịch đà nẵng"></a>
										<a href="" class="schedule">
											<i class="fa fa-chevron-circle-right blue"></i>
											<span class="gray">Lịch trình</span>
										</a>
									</div>
									<!-- product-content -->
									<div class="product-content">
										<ul class="nav list-unstyled">
											<li><strong>Thời gian khởi hành: {{date('d/m/Y',strtotime($product->start_date))}}</strong></li>
											<li><strong>Thời gian ket thuc: {{date('d/m/Y',strtotime($product->end_date))}}</strong></li>
											<li><strong>Điểm khởi hành: </strong></li>
											<li><strong>Phương tiện: </strong></li>
										</ul>
										<ul class="nav nav-list-gray"></ul>
									</div>
									<!-- /product-content -->
								</div>
							</div>
							<!-- /product-content-left -->
							<!-- product-content-right -->
							<div class="product-content-right col-sm-3">
								<div class="box-review">
									<span class="rate">9.0</span>
									<span class="rate-info">Xuất sắc</span>
									<p class="rate-number-info"><a href="#">(3 đánh giá)</a></p>
								</div>
								<div class="box-price">
									<span class="deal"> <small>%</small></span>
									<div class="item-price">
										<strong class="price-old"> <small>đ</small></strong>
										<br>
										<strong class="price"> <small>{{$product->price}} đ</small></strong>
									</div>
									<a href="" class="btn btn-blue">Xem tour</a>
								</div>
							</div>
							<!-- product-content-right -->
							<div class="col-xs-12"><hr class="dark"></div>
						</div>
					</div>
				@endforeach
                    <!-- /item-tour -->
                    <!-- product-item -->
					<div class="product-item row">
							<div class="col-sm-9">
								<h3 class="title-sm">
									<a href="" class="product-name">Tour du lịch Đà Nẵng 4 ngày 3 đêm</a>
								</h3>
							</div>
                        <!-- product-content-left -->
							<div class="product-content-left col-sm-9">
								<div class="product-info">
									<!-- product-bootstrap/images -->
									<div class="product-image">
										<a href=""><img src="bootstrap/images/dn1.jpg" class="img-responsive" alt="du lich da nang" title="Tour du lịch đà nẵng"></a>
										<a href="" class="schedule">
											<i class="fa fa-chevron-circle-right blue"></i>
											<span class="gray">Lịch trình</span>
										</a>
									</div>
                                    <!-- product-content -->
									<div class="product-content">
										<ul class="nav list-unstyled">
											<li><strong>Ngày khởi hành: </strong></li>
											<li><strong>Thời gian: </strong></li>
											<li><strong>Điểm khởi hành: </strong></li>
											<li><strong>Phương tiện: </strong></li>
										</ul>
										<ul class="nav nav-list-gray"></ul>
									</div>
                                    <!-- /product-content -->
								</div>
							</div>
                        <!-- /product-content-left -->
                        <!-- product-content-right -->
							<div class="product-content-right col-sm-3">
								<div class="box-review">
									<span class="rate">9.0</span>
									<span class="rate-info">Xuất sắc</span>
									<p class="rate-number-info"><a href="#">(3 đánh giá)</a></p>
								</div>
								<div class="box-price">
									<span class="deal"> <small>%</small></span>
									<div class="item-price">
										<strong class="price-old"> <small>đ</small></strong>
										<br>
										<strong class="price"> <small>đ</small></strong>
									</div>
									<a href="" class="btn btn-blue">Xem tour</a>
								</div>
							</div>
                        <!-- product-content-right -->
							<div class="col-xs-12"><hr class="dark"></div>
					</div>
					<div class="product-item row">
							<div class="col-sm-9">
								<h3 class="title-sm">
									<a href="" class="product-name">Tour du lịch Đà Nẵng 4 ngày 3 đêm</a>
								</h3>
							</div>
                        <!-- product-content-left -->
							<div class="product-content-left col-sm-9">
								<div class="product-info">
									<!-- product-bootstrap/images -->
									<div class="product-image">
										<a href=""><img src="bootstrap/images/dn2.jpg" class="img-responsive" alt="du lich da nang" title="Tour du lịch đà nẵng"></a>
										<a href="" class="schedule">
											<i class="fa fa-chevron-circle-right blue"></i>
											<span class="gray">Lịch trình</span>
										</a>
									</div>
                                    <!-- product-content -->
									<div class="product-content">
										<ul class="nav list-unstyled">
											<li><strong>Ngày khởi hành: </strong></li>
											<li><strong>Thời gian: </strong></li>
											<li><strong>Điểm khởi hành: </strong></li>
											<li><strong>Phương tiện: </strong></li>
										</ul>
										<ul class="nav nav-list-gray"></ul>
									</div>
                                    <!-- /product-content -->
								</div>
							</div>
                        <!-- /product-content-left -->
                        <!-- product-content-right -->
							<div class="product-content-right col-sm-3">
								<div class="box-review">
									<span class="rate">9.0</span>
									<span class="rate-info">Xuất sắc</span>
									<p class="rate-number-info"><a href="#">(3 đánh giá)</a></p>
								</div>
								<div class="box-price">
									<span class="deal"> <small>%</small></span>
									<div class="item-price">
										<strong class="price-old"> <small>đ</small></strong>
										<br>
										<strong class="price"> <small>đ</small></strong>
									</div>
									<a href="" class="btn btn-blue">Xem tour</a>
								</div>
							</div>
                        <!-- product-content-right -->
							<div class="col-xs-12"><hr class="dark"></div>
					</div>
					<div class="product-item row">
							<div class="col-sm-9">
								<h3 class="title-sm">
									<a href="" class="product-name">Tour du lịch Đà Nẵng 4 ngày 3 đêm</a>
								</h3>
							</div>
                        <!-- product-content-left -->
							<div class="product-content-left col-sm-9">
								<div class="product-info">
									<!-- product-bootstrap/images -->
									<div class="product-image">
										<a href=""><img src="bootstrap/images/dn3.jpg" class="img-responsive" alt="du lich da nang" title="Tour du lịch đà nẵng"></a>
										<a href="" class="schedule">
											<i class="fa fa-chevron-circle-right blue"></i>
											<span class="gray">Lịch trình</span>
										</a>
									</div>
                                    <!-- product-content -->
									<div class="product-content">
										<ul class="nav list-unstyled">
											<li><strong>Ngày khởi hành: </strong></li>
											<li><strong>Thời gian: </strong></li>
											<li><strong>Điểm khởi hành: </strong></li>
											<li><strong>Phương tiện: </strong></li>
										</ul>
										<ul class="nav nav-list-gray"></ul>
									</div>
                                    <!-- /product-content -->
								</div>
							</div>
                        <!-- /product-content-left -->
                        <!-- product-content-right -->
							<div class="product-content-right col-sm-3">
								<div class="box-review">
									<span class="rate">9.0</span>
									<span class="rate-info">Xuất sắc</span>
									<p class="rate-number-info"><a href="#">(3 đánh giá)</a></p>
								</div>
								<div class="box-price">
									<span class="deal"> <small>%</small></span>
									<div class="item-price">
										<strong class="price-old"> <small>đ</small></strong>
										<br>
										<strong class="price"> <small>đ</small></strong>
									</div>
									<a href="" class="btn btn-blue">Xem tour</a>
								</div>
							</div>
                        <!-- product-content-right -->
							<div class="col-xs-12"><hr class="dark"></div>
					</div>
					<div class="product-item row">
							<div class="col-sm-9">
								<h3 class="title-sm">
									<a href="" class="product-name">Tour du lịch Đà Nẵng 4 ngày 3 đêm</a>
								</h3>
							</div>
                        <!-- product-content-left -->
							<div class="product-content-left col-sm-9">
								<div class="product-info">
									<!-- product-bootstrap/images -->
									<div class="product-image">
										<a href=""><img src="bootstrap/images/dn4.jpg" class="img-responsive" alt="du lich da nang" title="Tour du lịch đà nẵng"></a>
										<a href="" class="schedule">
											<i class="fa fa-chevron-circle-right blue"></i>
											<span class="gray">Lịch trình</span>
										</a>
									</div>
                                    <!-- product-content -->
									<div class="product-content">
										<ul class="nav list-unstyled">
											<li><strong>Ngày khởi hành: </strong></li>
											<li><strong>Thời gian: </strong></li>
											<li><strong>Điểm khởi hành: </strong></li>
											<li><strong>Phương tiện: </strong></li>
										</ul>
										<ul class="nav nav-list-gray"></ul>
									</div>
                                    <!-- /product-content -->
								</div>
							</div>
                        <!-- /product-content-left -->
                        <!-- product-content-right -->
							<div class="product-content-right col-sm-3">
								<div class="box-review">
									<span class="rate">9.0</span>
									<span class="rate-info">Xuất sắc</span>
									<p class="rate-number-info"><a href="#">(3 đánh giá)</a></p>
								</div>
								<div class="box-price">
									<span class="deal"> <small>%</small></span>
									<div class="item-price">
										<strong class="price-old"> <small>đ</small></strong>
										<br>
										<strong class="price"> <small>đ</small></strong>
									</div>
									<a href="" class="btn btn-blue">Xem tour</a>
								</div>
							</div>
                        <!-- product-content-right -->
							<div class="col-xs-12"><hr class="dark"></div>
					</div>
                    <!-- /product-item -->
				</div>
        <!-- /product -->
        <!-- pagination -->
				<ul class="pagination pagination-blue pull-right mg-0 clearfix">
					<li class="active"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li>
						<a href="" aria-label="Next"><span aria-hidden="true"> >> </span></a>
					</li>
				</ul>
			</div>
    <!-- /content -->
    <!-- box du lịch -->
    <div class="col-xs-12 col-md-12 bottom-content">
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading1">
					<div class="title-sm text-uppercase">
						<h5><strong>Tour du lịch Đà Nẵng</strong></h5>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-sm-2"><a href="#">Du lịch Sơn Trà</a></div>
					<div class="col-sm-2"><a href="#">Du lịch Ngũ Hành Sơn</a></div>
					<div class="col-sm-2"><a href="#">Du lịch Cẩm Lệ</a></div>
					<div class="col-sm-2"><a href="#">Du lịch Hòa Vang</a></div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading1">
					<div class="title-sm text-uppercase">
						<h5><strong>Tour du lịch Đà Nẵng theo ngày</strong></h5>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-sm-2"><a href="#">Tour du lịch 1 ngày</a></div>
					<div class="col-sm-2"><a href="#">Tour du lịch 2 ngày 1 đêm</a></div>
					<div class="col-sm-2"><a href="#">Tour du lịch 3 ngày 2 đêm</a></div>
					<div class="col-sm-2"><a href="#">Tour du lịch 4 ngày 3 đêm</a></div>
					<div class="col-sm-2"><a href="#">Tour du lịch 5 ngày 4 đêm</a></div>
					<div class="col-sm-2"><a href="#">Tour du lịch 5 ngày 5 đêm</a></div>
				</div>
			</div>
		</div>
	</div>
    <!-- box du lịch -->

@endsection