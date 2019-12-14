<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Chi tiết sản phẩm</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/details.css')}}">
	<script type="text/javascript" src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function () {
			var pull = $('#pull');
			menu = $('nav ul');
			menuHeight = menu.height();

			$(pull).on('click', function (e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function () {
			var w = $(window).width();
			if (w > 320 && menu.is(':hidden')) {
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
				<div id="cart" class="col-md-3 col-sm-12 col-xs-12">
					<li class="active"><a href='/'>TRANG CHỦ</a></li>

				</div>
				<div id="search" class="col-md-7 col-sm-12 col-xs-12">
					<input type="text" name="text" placeholder="Nhập từ khóa">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</div>
				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="#">Giỏ hàng</a>
					<a href="#">6</a>
				</div>
			</div>
		</div>
	</header><!-- /header -->
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">


					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="{{asset('/img/home/banner-l-1.png')}}" alt=""
									class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					<input type="hidden" value="{{$data[0]->id}}" id="idProduct">
					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>{{$data[0]->name}}</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="{{asset($data[0]->image)}}" width="120%" height="100%">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">{{number_format($data[0]->price)}} đ</span></p>
									<hr>

									<div class="row">
										<div class="col-sm-5">
											<dl class="param param-inline">
												<dt>Số lượng: </dt>
												<dd>
													<div class="row">
														<div class="col-sm-4">
															<label id='soluong' class="form-control form-control-sm"
																style="width:70px; ">2</label>
														</div>
														<div class="col-sm-4">
															<a onclick="increaseItem({{$data[0]->id}})"
																class="btn btn-success">Tăng</a>
														</div>
														<div class="col-sm-4">
															<a onclick="decreaseItem({{$data[0]->id}})"
																class="btn btn-success">Giảm</a>
														</div>
													</div>


												</dd>
											</dl> <!-- item-property .// -->

											</dl>
											<hr>
											<a href='/giohang' class="btn btn-lg btn-outline-primary text-uppercase"> <i
													class="fa fa-shopping-cart"></i> Thanh toán </a>

										</div>
									</div>
								</div>
								<div id="product-detail">
									<h3>Chi tiết sản phẩm</h3>
									<p class="text-justify">{{$data[0]->description}} </p>
								</div>

							</div>

							<div id="comment">
								<h3>Bình luận</h3>
								<div class="col-md-9 comment">


									<div class="form-group">
										<label for="name">Tên bạn:</label>
										<input required type="text" class="form-control" id="name-comment" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="content-comment" class="form-control"
											name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button onclick="submitComment({{$data[0]->id}})"
											class="btn btn-default">Gửi</button>
									</div>

								</div>
							</div>
							<div id="comment-list">



							</div>
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
						<p class="text-justify">Shop luôn làm việc với phương châm "Đồng hành cùng phong cách thời trang
							của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến
							cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng. </p>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- set up ajax -->
	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>

	<!-- load comment -->
	<script>

		const loadAllComment = () => {
			let idProduct = $('#idProduct').attr('value')

			$.get(`/comment/${idProduct}`, function (data, status) {
				$('#comment-list').empty()
				data.forEach(item => {
					$('#comment-list').append(
						`
						<ul>
							<li class="com-title">
								${item.com_name}
								<br>
							</li>
							<li class="com-details">
								${item.com_content}
							</li>
						</ul>
						`
					)
				});

			});
		}
		loadAllComment()
	</script>


	<!-- fetch product quantity -->
	<script>
		let idProduct = $('#idProduct').attr('value')

		$.get(`/cartItem/${idProduct}`, function (data, status) {
			let {count} = data

			$('#soluong').text(count)
		});
	</script>


	<script>
		const increaseItem = id => {



			$.get(`/increaseCartItem/${id}`, function (data, status) {
				let {qty, id, image, subtotal, totalAll, countAll} = data
				let soLuongCu = eval($('#soluong').text())
				$('#soluong').text(qty)

			});
		}
		const decreaseItem = id => {
			let soLuongCu = eval($('#soluong').text())
			if (soLuongCu >= 1) {
				$('#soluong').text(soLuongCu - 1)
				$.get(`/decreaseCartItem/${id}`, function (data, status) {
					let {qty, id, image, subtotal, totalAll, countAll} = data
					if (qty <= 0) {
						$(`#price-${id}`).parent().remove()
					} else {

						$(`#amount-${id}`).text(qty)
						$(`#price-${id}`).text(subtotal + " VND")
						$('#bill-total').text(totalAll)
						$('#simpleCart_quantity').text(countAll)
						$('#cart-total').text(totalAll)
					}

				});
			}
		}
	</script>

	<script>
		const submitComment = id => {
			$.post(`/comment/${id}`,
				{
					content: $('#content-comment').val(),
					name: $('#name-comment').val()
				},
				function (data, status) {
					loadAllComment()
				});
		}
	</script>


</body>

</html>