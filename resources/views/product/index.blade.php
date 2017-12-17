
@extends('layouts.master')

@section('content')

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
											<li><strong>Thời gian khởi hành: {{$product->start_date}}</strong></li>
											<li><strong>Thời gian ket thuc: {{$product->end_date}}</strong></li>
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



@endsection