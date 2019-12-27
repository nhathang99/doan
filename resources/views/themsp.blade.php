<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>

    </style>

</head>

<body class="bg-gradient-primary">



        <div class="container">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="p-5">
                                        <div class="text-center">
                                                <h1 class= "text-center text-primary mb-5">Thêm sản phẩm</h1>
                                            </div>


                            <form action="/api/themsp" method="POST" class="user"  enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="input">Tên sản phẩm</label>
                                    <input
                                        required
                                        type="text"
                                        class="form-control"
                                        name="tensanpham"
                                        placeholder="Tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="input">Loại Sản phẩm</label>
                                    <div class="col-md-4">
                                      <select id="product_categorie" name="loaisp" class="form-control" weight="100%" required>
                                          @foreach($data as $item)
                                          <option value='{{$item->id}}'>{{$item->CategoryName}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                  </div>
                                <!--<div class="form-group">

                                    <select name="loaisp" required>
                                        @foreach ($data as $item)
                                        <option value='{{$item->id}}'>{{$item->CategoryName}}</option>

                                        @endforeach
                                    </select>
                                </div>-->
                                <div class="form-group">
                                    <lable for="input">Giá sản phẩm</lable>
                                    <input required type="number" class="form-control" name="giasp"
                                       >
                                </div>
                                <div class="form-group">
                                    <label for="textarea">Mô tả</label>
                                        <textarea rows="6" cols="65" name="mota" placeholder="Mô tả" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="input">Hình ảnh</label>
                                    <input type="file" class="form-control" name="hinhanh"
                                        placeholder="hinh anh">
                                </div>

                                <input value="Thêm"ype="submit" class="btn btn-primary btn-user btn-block"></input>



                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
