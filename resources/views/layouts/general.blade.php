@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <!-- breadcrumb -->
			<div class="col-xs-12">
				<div class="breadcrumb-scroll">
					<ul class="breadcrumb scroll-y ps-container">
						<li><a href="#">Tour du lịch</a></li>
						<li><a href="#">Du lịch trong nước</a></li>
						<li class="active">Du lịch Đà Nẵng</li>
					</ul>
				</div>
			</div>
            <!-- /breadcrumb -->
            <!-- sidebar -->
			<div class="sidebar-scroll hidden-xs hidden-sm">
				<div class="col-md-3 col-sm-4 sidebar">
				<!-- search -->
					<div class="box device-pc-show small-search">
						<div class="box-header">
							<h3 class="box-title">Tìm kiếm tour</h3>
						</div>
						<div class="box-body">
							<form class="form-search" action="" method="post">
								<input type="hidden" name="module" value="tour">
								<div class="form-group">
									<label>Nơi khởi hành:</label>
									<div class="select-sc">
										<select class="form-control input-md" name="start-city" tabindex="-1" aria-hidden="true">
											<option value="0" selected>Nơi khởi hành</option>
											<option value="1">Hà Nội</option>
											<option value="2">Hồ Chí Minh</option>
											<option value="3">Đà Nẵng</option>
											<option value="4">Hải Phòng</option>
											<option value="5">Cần Thơ</option>
											<option value="6">Nha Trang</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="sandbox-container">
										<div class="input-dateranger">
											<label class="mg-bt-0">Khoảng thời gian:</label>
											<div class="input-group sandbox-input-group">
													<input type="text" name="di" class="form-control check-in" id="datepicker" value="" readonly="readonly">
													<i class="fa fa-calendar"></i>

											</div>
											<div class="input-group sandbox-input-group">
													<input type="text" name="ve" class="form-control check-out" id="datepicker-df" value="" readonly="readonly">
													<i class="fa fa-calendar"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-xs-12">
										<button type="submit" class="btn btn-block btn-blue">Tìm</button>
									</div>
								</div>
							</form>
						</div>
					</div>
                    <!-- /search -->
                    <!-- tùy chọn -->
					<div class="box box-toggle">
						<div class="box-header">
							<h3 class="box-title">Bộ lọc tìm kiếm</h3>
						</div>
						<div class="box-body">
							<div class="toggle-title">Theo mức giá</div>
							<div class="toggle-body">
								<ul class="nav nav-check-list">
									<li class="price filter_js" data-value="1">
										<a href=""><i class="ui ui-checkbox"></i> Dưới 2.000.000 </a>
									</li>
									<li class="price filter_js" data-value="2">
										<a href=""><i class="ui ui-checkbox"></i> 2.000.000 - 4.000.000 </a>
									</li>
									<li class="price filter_js" data-value="3">
										<a href=""><i class="ui ui-checkbox"></i> 4.000.000 - 6.000.000 </a>
									</li>
									<li class="price filter_js" data-value="4">
										<a href=""><i class="ui ui-checkbox"></i> 6.000.000 - 8.000.000 </a>
									</li>
									<li class="price filter_js" data-value="5">
										<a href=""><i class="ui ui-checkbox"></i> 8.000.000 - 10.000.000 </a>
									</li>
									<li class="price filter_js" data-value="6">
										<a href=""><i class="ui ui-checkbox"></i> Trên 10.000.000 </a>
									</li>
								</ul>
							</div>
                            <!-- loại tour / dịch vụ / chủ đề-->
							<div class="toggle-title">Loại tour</div>
							<div class="toggle-body">
								<ul class="nav nav-check-list">
									<li><a href="">
										<i class="ui ui-checkbox"></i>Trọn gói</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Chỉ vé máy bay và khách sạn</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Không vé máy bay</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Tour khởi hành hàng ngày</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Tour dành cho doanh nghiệp</a></li>
								</ul>
							</div>

							<div class="toggle-title">Dịch vụ đi kèm</div>
							<div class="toggle-body">
								<ul class="nav nav-check-list">
									<li><a href="">
										<i class="ui ui-checkbox"></i>Hướng dẫn viên</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Vé thăm quan</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Xe đưa đón</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Bữa ăn theo chương trình</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Bảo hiểm</a></li>
								</ul>
							</div>

							<div class="toggle-title">Tour theo chủ đề</div>
							<div class="toggle-body">
								<ul class="nav nav-check-list">
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch khám phá</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch biển đảo</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch mua sắm, lễ hội</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch Liên Tuyến, Xuyên Việt</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch hưởng tuần trăng mật</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch gia đình</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch nghỉ dưỡng</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch hành hương</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch cho người cao tuổi</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch miền Bắc</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch miền Trung</a></li>
									<li><a href="">
										<i class="ui ui-checkbox"></i>Du lịch miền Nam</a></li>
								</ul>
							</div>
                            <!-- /loại tour / dịch vụ / chủ đề-->
						</div>
					</div>
                    <!-- /tùy chọn -->
				</div>
			</div>
            <!-- /sidebar -->


            @yield('noidung')
        </div>
    </div>

@endsection