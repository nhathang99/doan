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
                                <h1 class="text-center text-primary mb-5">Them user</h1>
                            </div>
                            <form action="/api/themuser" method="POST" class="user" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="input">UserName</label>
                                    <input required type="text" class="form-control" id="username" name="username"
                                        placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label for="input">Email</label>
                                    <input required type="email" class="form-control" id="email" name="email"
                                        placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="input">Password</label>
                                    <input required type="password" class="form-control" id="password" name="password"
                                        placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Role</label>
                                    <select class="form-control" name="role" id="role">
                                      <option value="1">Admin</option>
                                      <option value="0">User</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                      <input class="form-control" id="date" name="date" type="date" value="2011-08-19" id="example-date-input">
                                  </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block"></input>
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
