<!DOCTYPE html>
<html lang="vi">
<head>
    <title>My tour</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{url ('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="{{url ('bootstrap/css/style.css')}}">
</head>
<body>
	<div class="page-tour-home">
	<!-- nav -->
	<nav class="navbar navbar-default bg-aqua">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand" style="padding: 0;"><img src="bootstrap/images/logo.png" class="img-responsive" alt="mytour" title="mytour"></a>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li class="tour sub-menu">
							<a href="/du-lich">
								<div class="thumbnail"><i class="tour-icon"></i></div>
								<div>Du lịch</div>
							</a>
						</li>
						<li>
							<a href="/am-thuc">
								<div class="thumbnail"><i class="food-icon"></i></div>
								<div>Ẩm thực</div>
							</a>
						</li>
						<li>
							<a href="/suc-khoe-giai-tri">
								<div class="thumbnail"><i class="e-icon"></i></div>
								<div>Sức khỏe - Giải trí </div>
							</a>
						</li>
						<li>
							<a href="/spa">
								<div class="thumbnail"><i class="spa-icon"></i></div>
								<div>Spa - Làm đẹp</div>
							</a>
						</li>
						<li>
							<a href="{{ route('login') }}">
								<div class="thumbnail"><i class="glyphicon glyphicon-user"></i></div>
								<div>Login</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
        <!-- nav -->
</div>

    @yield('content')

    <!-- footer -->
    <footer class="pagefooter">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="col-xs-12 col-sm-6 col-md-3 footerPanel">
						<ul class="list-unstyled">
							<li>
								<a href="">Giới thiệu</a>
							</li>
							<li>
								<a href="">Blog</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 footerPanel">
						<ul class="list-unstyled">
							<li>
								<a href="">Điều kiện & điều khoản</a>
							</li>
							<li>
								<a href="">Quy chế hoạt động</a>
							</li>
							<li>
								<a href="">Câu hỏi thường gặp</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 footerPanel">
						<ul class="list-unstyled">
							<li>
								<a href="">Tuyển dụng</a>
							</li>
							<li>
								<a href="">Liên hệ</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 footerPanel">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 footerPanel">
					</div>
				</div>
				<div class="col-xs-12 col-md-12">
					<div class="col-sm-12 col-md-9 footerContact footerPanel"></div>
					<div class="col-sm-12 col-md-3 footerContact footerPanel"></div>
				</div>
			</div>
		</div>
	</footer>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="bootstrap/js/datepicker.js"></script>
</body>
</html>