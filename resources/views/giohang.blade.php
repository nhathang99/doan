<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
                            <li class="menu-item">Menu</li>
                            <li class="menu-item"><a href="/" title="">Trang chủ</a></li>
                            <li class="menu-item"><a href="#" title="">Giới thiệu</a></li>
                            <li class="menu-item"><a href="#" title="">Áo</a></li>
                            <li class="menu-item"><a href="#" title="">Váy</a></li>
                            <li class="menu-item"><a href="#" title="">Đầm</a></li>
                            <li class="menu-item"><a href="#" title="">Quần</a></li>
                        </ul>
                        <!-- <a href="#" id="pull">Danh mục</a> -->
                    </nav>

                    <div id="banner-l" class="text-center">
                        <div class="banner-l-item">
                            <a href="#"><img src="img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
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
                    <!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
                    <div id="slider">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="//theme.hstatic.net/1000163008/1000348202/14/slide_3.jpg?v=424"
                                        alt="slide_3_alt.jpg" draggable="false" alt="Los Angeles">
                                </div>
                                <div class="carousel-item">
                                    <img src="//theme.hstatic.net/1000163008/1000348202/14/slide_2.jpg?v=424"
                                        alt="slide_3_alt.jpg" alt="Chicago">
                                </div>
                                <div class="carousel-item">
                                    <img src="//theme.hstatic.net/1000163008/1000348202/14/slide_4.jpg?v=424"
                                        alt="New York">
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

                    <div id="banner-t" class="text-center">
                        <div class="row">
                            <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                                <a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
                            </div>
                            <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                                <a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
                            </div>
                        </div>
                    </div>

                    <div id="wrap-inner">
                        <div id="list-cart">
                            <h3>Giỏ hàng</h3>
                            <form>
                                <table class="table table-bordered .table-responsive text-center">
                                    <tr class="active">
                                        <td width="11.111%">Ảnh sản phẩm</td>
                                        <td width="22.222%">Tên sản phẩm</td>
                                        <td width="22.222%">Số lượng</td>
                                        <td width="16.6665%">Đơn giá</td>
                                        <td width="16.6665%">Thành tiền</td>
                                        <td width="11.112%">Xóa</td>
                                    </tr>
                                    @if(count($cart))
                                    @foreach ($cart as $item)
                                    <tr id='item-{{$item->rowId}}'>
                                        <td>
                                            <img style="width:150px;height:150px;" class="img-responsive"
                                                @if($item->options && $item->options->image)
                                            src="{{$item->options->image}}"
                                            @else
                                            src='{{('/image/no-image.png')}}'
                                            @endif
                                            >
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <div class="form-group">
                                                <input class="form-control" value="{{$item->qty}}" disabled
                                                    type="number">
                                            </div>
                                        </td>
                                        <td><span class="price">{{$item->subtotal()}} đ</span></td>
                                        <td><span class="price">{{$item->subtotal()}} đ</span></td>
                                        <td><a onclick="removeCartItem('{{$item->rowId}}')"
                                                class="btn btn-danger">Xóa</a></td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <p>Bạn chưa có mặt hàng nào trong giở</p>
                                    @endif
                                </table>
                                <div class="row" id="total-price">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        Tổng thanh toán: <span class="total-price">{{Cart::subtotal()}} đ</span>

                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <a href="/" class="my-btn btn">Mua tiếp</a>
                                        <a href="#" class="my-btn btn">Cập nhật</a>
                                        <a href="#" class="my-btn btn">Xóa giỏ hàng</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="xac-nhan">
                            <h3>Xác nhận mua hàng</h3>
                            <form>
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input required type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="name">Họ và tên:</label>
                                    <input required type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại:</label>
                                    <input required type="number" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="add">Địa chỉ:</label>
                                    <input required type="text" class="form-control" id="add" name="add">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
                                </div>
                            </form>
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
    <script>
        const removeCartItem = rowID => {
            $.get(`/removeItem/${rowID}`, function (data, status) {

                $(`#item-${rowID}`).remove()
            });
        }
    </script>
    <!-- endfooter -->
</body>

</html>