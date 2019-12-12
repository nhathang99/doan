<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Bơ shop</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});
        $(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>
            <!-- header -->
            <header id="header">
                <div class="container">
                    <div class="row">
                        <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
                            <h1>
                                <nav><a id="pull" class="btn btn-danger" href="#">
                                    <i class="fa fa-bars"></i>
                                </a></nav>
                            </h1>

                        </div>
                        <div id="search" class="col-md-7 col-sm-12 col-xs-12">
                            <input type="text" name="text">
                            <input type="submit" name="submit" value="Tìm Kiếm">
                        </div>
                        <div id="cart" class="col-md-2 col-sm-12 col-xs-12">
                            <a class="display" href="#">Giỏ hàng</a>
                            <a href="#">6</a>
                        </div>
                    </div>

                </div>
            </header>
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
                                    <li class="menu-item">MENU</li>
                                    <li class="menu-item"><a href="{{asset('/home/')}}" title="">Trang chủ</a></li>
                                    <li class="menu-item"><a href="#" title="">Giới thiệu</a></li>
                                    <li class="menu-item"><a href="#" title="">Váy</a></li>
                                    <li class="menu-item"><a href="#" title="">Đầm</a></li>
                                    <li class="menu-item"><a href="#" title="">ÁO</a></li>
                                    <li class="menu-item"><a href="#" title="">Quần</a></li>
                                </ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
                    </nav>
                </div>
                <div id="main" class="col-md-9">
                        <!-- main -->
                        <!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
                        <div id="slider">
                            <div id ="demo"class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                </ul>

                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="//theme.hstatic.net/1000163008/1000348202/14/slide_3.jpg?v=424" alt="slide_3_alt.jpg" draggable="false"alt="Los Angeles" >
                                    </div>
                                    <div class="carousel-item">
                                        <img src="//theme.hstatic.net/1000163008/1000348202/14/slide_2.jpg?v=424" alt="slide_3_alt.jpg" alt="Chicago">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="//theme.hstatic.net/1000163008/1000348202/14/slide_4.jpg?v=424" alt="New York" >
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                        <hr>

					<div id="wrap-inner">
						<div class="products">
                            <h3>sản phẩm nổi bật</h3>
							<div class="product-list row">
                                <div class="clearfix"></div>
                                 @foreach($data as $item)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img class="abcd" src="{{asset($item->image)}}" class="img-thumbnail"></a>
									<p><a href="#">{{$item->name}}</a></p>
									<p class="price">{{$item->price}}</p>
									<div class="marsk">
                                        <a href="/detail/{{$item->id}}">Xem chi tiết</a>
									</div>
                                </div>
                                @endforeach

                    </div>
                    <br>
                    <br>
                    <div id="pagination">
                        <ul class="pagination pagination-lg justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<footer id="footer">
		<div id="footer-t">
			<div class="container">
				<div class="row">

					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">Shop luôn làm việc với phương châm "Đồng hành cùng phong cách thời trang của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng. </p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone: (+84) 0987654321</p>
						<p>Email: Boshop123@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address 1: 189 Võ Văn Ngân -Quận Thủ Đức - TP Hồ Chí Minh</p>
						<p>Address 2: Số 2 Ngõ 178/71 - Quận 1 - TP Hồ Chí Minh</p>
					</div>
				</div>
			</div>
			<div id="footer-b">
				<div class="container">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Bơ shop - www.boshop123.com.vn</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Online Store Copyright/p>
						</div>
					</div>

		</div>
	</footer>
	<!-- endfooter -->
</body>
</html>
