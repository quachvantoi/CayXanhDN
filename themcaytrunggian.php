<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Môi Trường Đà Nẵng</title>
  <link rel="icon" href="https://png.pngtree.com/png-clipart/20190610/original/pngtree-green-design-icon-vector-material-png-image_1931207.jpg">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Moderna/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Moderna/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Moderna/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Moderna/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Moderna/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Moderna/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Moderna/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Moderna/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Moderna/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-primary">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Môi Trường Đà Nẵng</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          <li><a class="active" href="danhsachcay.php">Cây</a></li>
          <li class="dropdown"><a href="#"><span>Quản lý</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Xem thông tin nhân viên</a></li>
              <li><a href="XemThongBaoSuCo.php">Xem thông báo về sự cố cây</a></li>
              <li><a href="#">Xem khu vực quản lý</a></li>
              <li><a href="#">Phân chia công việc</a></li>
            </ul>
          </li>
          <li><a href="ThongKe.php">Thống kê</a></li>
          <li><a href="#">Liên hệ</a></li>
          <li class="dropdown"><a href="#">Xin chào, <?php 
          echo $_SESSION['taikhoan']; ?><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">Đăng Xuất</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <main id="main">
    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Thêm cây</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="danhsachcay.php">Danh sách cây</a></li>
            <li>Thêm cây</li>
          </ol>
        </div>
      </div>
    </section><!-- End Our Team Section -->

    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          <div class="container">

            <div class="row">

              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <form action="themCay.php" method="post" role="form">
                  <div class="row">
                    <p class="col-md-2 text-sm-center mt-3"> Mã Loại Cây:</p>
                    <div class="col-md-4 form-group mt-3">
                      <select class="form-control" id="exampleFormControlSelect1" name="maloaicay">
                        <?php
                        include('ketnoi.php');
                        $tv="select * from loaicay";
                        $tv_1=mysqli_query($connect,$tv);
                        while($tv_2=mysqli_fetch_array($tv_1))
                          {
                            if($tv_2!=false)
                            {
                              echo '<option>';
                              echo $tv_2['maLoaiCay'];
                              echo '</option>';
                            }
                            else
                            {
                              echo "&nbsp;";
                            } 
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-4 text-center mt-3"><button name="form_click" type="submit" class="btn btn-primary">Xác nhận</button></div>
                  </div>
                  
                </form>
              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->
      </main>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Moderna/assets/vendor/purecounter/purecounter.js"></script>
  <script src="Moderna/assets/vendor/aos/aos.js"></script>
  <script src="Moderna/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Moderna/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Moderna/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Moderna/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Moderna/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="Moderna/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Moderna/assets/js/main.js"></script>

</body>

</html>