<!DOCTYPE html>
<html>
<head>
	<title>My tour</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<script>
		function validateform()
		{
			// lay gia tri cua user
			var email = document.getElementById('email').value;
			var password = document.getElementById('password').value;
			if (email == "") {
				$('.email-alert').html('chua nhap email');
			}
			else if (password == "") {
				$('.password-alert').html('chua nhap password');
			}
			else {
				alert('dang nhap thanh cong!');
				return true;
			}
		    return false;
		}
	</script>
</head>
<body>
	<!-- <div class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-8">
					<div class="header-contact" style="float: right;">
						<i class="ui ui-phone-lg"></i>
						<div class="header-info-contact">
							<p><strong>Hỗ trợ 24/7</strong></p>
							Hà Nội: <strong>sđt</strong>
							Hồ Chí Minh: <strong>sđt</strong>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div> -->

	<!-- nav -->
	<div class="page-tour-home">
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
						<li><a href="#">Khách sạn</a></li>
						<li class="tour sub-menu">
							<a href="#">Du lịch</a>
							<ul class="nav menu-tour sub">
								<li><a href="#" title="du lịch trong nước">Du lịch trong nước</a></li>
								<li><a href="#" title="du lịch nước ngoài">Du lịch nước ngoài</a></li>
								<li><a href="#" title="du lịch tự chọn">Du lịch tự chọn</a></li>
							</ul>
						</li>
						<li class="vehice sub-menu">
							<a href="#">Phương tiện</a>
							<ul class="nav menu-vehice sub">
								<li><a href="#" title="vé máy bay">Vé máy bay</a></li>
								<li><a href="#" title="thuê xe">Thuê xe</a></li>
							</ul>
						</li>
						<li class="news sub-menu">
							<a href="#">Tin tức</a>
							<ul class="nav menu-news sub">
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">Cẩm nang du lịch</a></li>
								<li><a href="#">Tin khuyến mãi</a></li>
							</ul>
						</li>
						<li class="info sub-menu">
							<a href="#">Thông tin</a>
							<ul class="nav menu-info sub">
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Hỏi đáp</a></li>
								<li><a href="#">Hướng dẫn</a></li>
								<li><a href="#">Liên hệ</a></li>
							</ul>
						</li>
						@guest
                            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span>Login</a></li>
                        @else
                       <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
					</ul>
				</div>
			</div>
		</div>
	</nav>
	</div>
	<!-- nav -->

	@yield('content')


	<!-- demo footer -->
	<div class="fotter">	
	 <div class="container">
		 <div class="fotter-grids">
			 <div class="col-md-4 fotter-left">
			 <img src="images/fotter-logo.png" alt="">
			 <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
				sed quia consequuntur magni dolores eos qui ratione.</p>
			 </div>
			 <div class="col-md-4 fotter-middle">
				 <h3>Latest News</h3>
				 <div class="footer-list">
						<ul>
						<li><a href="#"><span></span>Sed ut perspiciatis unde omnis iste natus.</a></li> 
						<li><a href="#"><span></span>Voluptatem accusantium.</a></li> 
						<li><a href="#"><span></span>Totam rem aperiam,eaque ipsa quae.</a></li> 
						<li><a href="#"><span></span>Inventore veritatis et quae.</a></li> 
						<li><a href="#"><span></span>Nemo enim ipsum voluptatem quia voluptas.</a></li>
						</ul>
				 </div>
			 </div>
			 <div class="col-md-4 fotter-right">
			 <h3>Newsletter</h3>
			 <form>
			 <input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your mail';}">
			 <input type="submit" value="Send">
			 <div class="clearfix"></div>
			 </form>
			 <div class="social-icons">
			 <a href="#"><span class="facebook"> </span></a>
			 <a href="#"><span class="twitter"> </span></a>
			 <a href="#"><span class="googleplus"> </span></a>
			 <a href="#"><span class="pinterest"> </span></a>
			 <a href="#"><span class="instagram"> </span></a>
			 </div>
			 <div class="clearfix"></div>
	     </div>
		 <div class="clearfix"></div>
	 </div>
</div>
</div>  


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

<!-- script -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="bootstrap/js/test.js"></script>

</body>
</html>