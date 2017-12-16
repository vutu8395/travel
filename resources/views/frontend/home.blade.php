@extends('layouts.master')

@section('content')


    <!-- slide-home -->
    <div class="slideshow">
			<div id="mycarousel" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
				<!-- carousel-indicator -->
				<ol class="carousel-indicators">
			      <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#mycarousel" data-slide-to="1"></li>
			      <li data-target="#mycarousel" data-slide-to="2"></li>
			      <li data-target="#mycarousel" data-slide-to="2"></li>
			    </ol>
                <!-- wrapper and slide -->
			    <div class="carousel-inner">
			    	<div class="item active">
			    		<img src="bootstrap/images/beach4.jpg" alt="beach" style="width:100%;">
					    <div class="carousel-caption">
					        <h3>Beach</h3>
					        <p>Beach is always so much fun!</p>
					    </div>
			    	</div>
			    	<div class="item">
			    		<img src="bootstrap/images/beach2.jpg" alt="beach" style="width:100%;">
			    	</div>
			    	<div class="item">
			    		<img src="bootstrap/images/beach3.jpg" alt="beach" style="width:100%;">
			    	</div>
			    	<div class="item">
			    		<img src="bootstrap/images/banner.png" alt="beach" style="width:100%;">
			    	</div>
			    </div>
                <!-- Left and right controls -->
				    <a class="left carousel-control" href="#mycarousel" data-slide="prev">
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#mycarousel" data-slide="next">
				      <span class="sr-only">Next</span>
				    </a>
			</div>
        <!-- form-search -->
			<div class="box-search">
				<div class="form-search-frame">
					<div class="tabs-container">
						<a href="#tab-1" class="hidden-xs">Tìm tour</a>
						<a href="#tab-1" class="hidden-sm hidden-md hidden-lg">
							<i class="fa fa-search fa-lg"></i>
						</a>
					</div>
					<div class="tab">
						<div id="tab-1" class="tab-content" style="display: block;">
							<form action="" method="post">
								<div class="row form-group">
									<div class="col-xs-6 col-sm-4 col-md-6 mg-bot15">
										<label>Nơi khởi hành</label>
										<div class="select">
											<select class="form-control input-md" name="start_city" tabindex="-1" aria-hidden="true">
												<option value="0" selected>Nơi khởi hành</option>
												<option value="1">Hà Nội</option>
												<option value="2">Hồ Chí Minh</option>
												<option value="3">Đà Nẵng</option>
												<option value="4">Hải Phòng</option>
												<option value="5">Nha Trang</option>
											</select>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-6 mg-bot15">
										<label>Nơi đến</label>
										<div class="select">
											<select class="form-control input-md" name="finish_city" tabindex="-1" aria-hidden="true">
												<option value="0" selected>Nơi đến</option>
												<option value="1">Hà Nội</option>
												<option value="2">Hồ Chí Minh</option>
												<option value="3">Đà Nẵng</option>
												<option value="4">Hải Phòng</option>
												<option value="5">Nha Trang</option>
											</select>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-6 mg-bot15">
										<label>Loại tour</label>
										<div class="select">
											<select class="form-control input-md" name="kind_tour" tabindex="-1" aria-hidden="true">
												<option value="0">Tour trong nước</option>
												<option value="1">Tour nước ngoài</option>
											</select>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-6 mg-bot15">
										<label>Ngày khởi hành</label>
										<div class="datepicker">
											<input type="text" name="departure_date" class="form-control" id="datepicker" value="">
											<span class="i-calendar">
												<i class="fa fa-calendar"></i>
											</span>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-6">
										<label>Giá</label>
										<div class="select">
											<select class="form-control input-md" name="price_tour" tabindex="-1" aria-hidden="true">
												<option value="0" selected>Giá</option>
												<option value="7">Dưới 2 triệu</option>
												<option value="8">2 - 4 triệu</option>
												<option value="9">4 -6 triệu</option>
												<option value="10">6 - 8 triệu</option>
												<option value="11">8 - 10 triệu</option>
												<option value="12">Trên 10 triệu</option>
											</select>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-6">
										<label>Combo</label>
										<div class="select">
											<select class="form-control input-md" name="combo" tabindex="-1">
												<option value="-1">Trọn gói</option>
												<option value="1">Chỉ vé máy bay và khách sạn</option>
												<option value="0">Không vé máy bay</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
										<button type="submit" class="btn btn-block btn-yellow">
											<div class="f-left">
												<a href=""><i class="fa fa-search fa-lg"></i></a>
												<span>Tìm kiếm</span>
											</div>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

    <!-- /slide-home -->
    <!-- top tour -->
    <div class="section" id="section-1">
		<div class="top-tour">
			<div class="top-tours-head text-center">
				<h3> New TOUR</h3>
				<span></span><img src="bootstrap/images/star.png" alt=""><span></span>
			</div>
	    	<div class="top-tour-list" style="padding:20px 0px 20px 0px !important;">
	    		<div class="container">
	    			<div class="row" id="touronline" style="text-align:center;padding-top:50px;padding-bottom:40px;">
	    				<div class="col-md-4 col-sm-6 col-xs-12">
	    					<div class="item-tour mg-bot15">
	    						<a href="" title="khám phá">
	    							<div>
	    								<div class="img-tour" style="position: relative;">
	    									<img src="bootstrap/images/dn1.jpg" class="img-responsive">
	    									<div class="img-title">
	    										<div class="view-tour row">
	    											<div class="col-xs-12 text-left">
	    												<i class="fa fa-eye white"></i>
	    												<span class="white">500</span>
	    												<i class="fa fa-thumbs-o-up"></i>
	    												<span class="white">500</span>
	    												<i class="fa fa-comment-o white"></i>
	    												<span class="white">5</span>
	    											</div>
	    										</div>
	    										<div class="row date-tour">
	    											<div class="col-xs-6 text-left">
	    												<i class="fa fa-calendar"></i>
	    												<span>17/10/2017</span>
	    											</div>
	    											<div class="col-xs-6 text-right">
	    												<i class="fa fa-user"></i>
	    												<span>4 chỗ</span>
	    											</div>
	    										</div>
	    									</div>
	    								</div>
	    								<div class="tour-content">
	    									<div class="tour-title col-xs-12 col-sm-12 col-md-12">
	    										<div style="vertical-align: middle; display: table-cell;">Tour du lịch Đà Nẵng</div>
	    									</div>
	    									<div class="tour-info">
	    										<div class="date-tour col-xs-2">
	    											<div style="font-weight: bold; border-bottom: 1px solid #ccc; padding-bottom: 5px; font-size: 24px">8</div>
	    											<div style="padding-top: 5px; font-size: 10px;">Ngày</div>
	    										</div>
	    										<div class="price-tour col-xs-7">
	    											<span class="old-price">5,000,000 đ</span>
	    											<span class="new-price">4,999,000 đ</span>
	    										</div>
	    										<div class="btn-booking col-xs-3">
	    											<span>Đặt ngay</span>
	    										</div>
	    									</div>
	    								</div>
	    							</div>
	    						</a>
	    					</div>
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-12">
	    					<div class="item-tour mg-bot15">
	    						<a href="" title="khám phá">
	    							<div>
	    								<div class="img-tour" style="position: relative;">
	    									<img src="bootstrap/images/t2.jpg" class="img-responsive">
	    									<div class="img-title">
	    										<div class="view-tour row">
	    											<div class="col-xs-12 text-left">
	    												<i class="fa fa-eye white"></i>
	    												<span class="white">500</span>
	    												<i class="fa fa-thumbs-o-up"></i>
	    												<span class="white">500</span>
	    												<i class="fa fa-comment-o white"></i>
	    												<span class="white">5</span>
	    											</div>
	    										</div>
	    										<div class="row date-tour">
	    											<div class="col-xs-6 text-left">
	    												<i class="fa fa-calendar"></i>
	    												<span>17/10/2017</span>
	    											</div>
	    											<div class="col-xs-6 text-right">
	    												<i class="fa fa-user"></i>
	    												<span>4 chỗ</span>
	    											</div>
	    										</div>
	    									</div>
	    								</div>
	    								<div class="tour-content">
	    									<div class="tour-title col-xs-12 col-sm-12 col-md-12">
	    										<div style="vertical-align: middle; display: table-cell;">Tour du lịch Đà Nẵng</div>
	    									</div>
	    									<div class="tour-info">
	    										<div class="date-tour col-xs-2">
	    											<div style="font-weight: bold; border-bottom: 1px solid #ccc; padding-bottom: 5px; font-size: 24px">8</div>
	    											<div style="padding-top: 5px; font-size: 10px;">Ngày</div>
	    										</div>
	    										<div class="price-tour col-xs-7">
	    											<span class="old-price">5,000,000 đ</span>
	    											<span class="new-price">4,999,000 đ</span>
	    										</div>
	    										<div class="btn-booking col-xs-3">
	    											<span>Đặt ngay</span>
	    										</div>
	    									</div>
	    								</div>
	    							</div>
	    						</a>
	    					</div>
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-12">
	    					<div class="item-tour mg-bot15">
	    						<a href="" title="khám phá">
	    							<div>
	    								<div class="img-tour" style="position: relative;">
	    									<img src="bootstrap/images/t3.jpg" class="img-responsive">
	    									<div class="img-title">
	    										<div class="view-tour row">
	    											<div class="col-xs-12 text-left">
	    												<i class="fa fa-eye white"></i>
	    												<span class="white">500</span>
	    												<i class="fa fa-thumbs-o-up"></i>
	    												<span class="white">500</span>
	    												<i class="fa fa-comment-o white"></i>
	    												<span class="white">5</span>
	    											</div>
	    										</div>
	    										<div class="row date-tour">
	    											<div class="col-xs-6 text-left">
	    												<i class="fa fa-calendar"></i>
	    												<span>17/10/2017</span>
	    											</div>
	    											<div class="col-xs-6 text-right">
	    												<i class="fa fa-user"></i>
	    												<span>4 chỗ</span>
	    											</div>
	    										</div>
	    									</div>
	    								</div>
	    								<div class="tour-content">
	    									<div class="tour-title col-xs-12 col-sm-12 col-md-12">
	    										<div style="vertical-align: middle; display: table-cell;">Tour du lịch Đà Nẵng</div>
	    									</div>
	    									<div class="tour-info">
	    										<div class="date-tour col-xs-2">
	    											<div style="font-weight: bold; border-bottom: 1px solid #ccc; padding-bottom: 5px; font-size: 24px">8</div>
	    											<div style="padding-top: 5px; font-size: 10px;">Ngày</div>
	    										</div>
	    										<div class="price-tour col-xs-7">
	    											<span class="old-price">5,000,000 đ</span>
	    											<span class="new-price">4,999,000 đ</span>
	    										</div>
	    										<div class="btn-booking col-xs-3">
	    											<span>Đặt ngay</span>
	    										</div>
	    									</div>
	    								</div>
	    							</div>
	    						</a>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
		</div>
	</div>

    <!-- top location -->
    <div class="section">
		<div class="top-location">
			<div class="top-location-head text-center">
				<h3>TOP LOCATION</h3>
				<span></span><img src="bootstrap/images/star.png" alt=""><span></span>
			</div>
			<div class="top-location-list" style="padding:20px 0px 20px 0px !important;">
				<div class="container">
					<div class="row">
						<ul class="nav-thumbnail">
							@foreach($locations as $location)
							<li class="col-sm-4 col-md-3">
								<div class="item-thumbnail mg-bot15 text-center">
									<a href="" title="diem den" data-label="ĐÀ NẴNG">
										<img src="bootstrap/images/{{$location->location_img}}" class="img-responsive img-circle">
										<h4 class="item-name">{{$location->location_name}}</h4>
									</a>
								</div>
							</li>
								@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    @endsection