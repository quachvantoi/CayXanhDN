<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Môi Trường Đà Nẵng</title>
  <link rel="icon" href="https://png.pngtree.com/png-clipart/20190610/original/pngtree-green-design-icon-vector-material-png-image_1931207.jpg">
    <link href="css/abc.css" rel="stylesheet" />


  <link href="Moderna/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="Moderna/assets/css/style.css" rel="stylesheet">

</style>
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
          <li><a  class="active" href="danhsachcay.php">Cây</a></li>
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
          <h2>Thống kê cây</h2>
          <ol>
            <li><a href="index.php">Trang chủ</a></li>
            <li>Thống kê</li>
          </ol>
        </div>
      </div>
    </section><!-- End Our Team Section -->

  <section class="container">
    <div class="table">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>
                Mã Cây
            </th>
            <th>
                Tên Cây
            </th>
            <th>
                Mã Loại Cây
            </th>
            <th>
                Đặc Điểm
            </th>
            <th>
                Ngày trồng
            </th>
          </tr>
        </thead>
        <tbody>
          <?php 
            include('ketnoi.php');
              $tv="select * FROM cay where kinhDo = '".$_GET['kinhdo']."' and viDo='".$_GET['vido']."';";
              $tv_1=mysqli_query($connect,$tv);
              while($tv_2=mysqli_fetch_array($tv_1))
              {
                if($tv_2!=false)
                {
                  echo '<tr><td>';
                  echo $tv_2['maCay'];
                  echo '</td><td>';
                  echo $tv_2['tenCay'];
                  echo '</td><td>';
                  echo $tv_2['maLoaiCay'];
                  echo '</td><td>';
                  echo $tv_2['dacDiem'];
                  echo '</td><td>';
                  echo substr($tv_2['ngayTrong'],0,10);
                  echo '</td></tr>';
                }
              }

          ?>

        </tbody>

      </table>
    </div>
  </section><!-- het table -->

</main>

  
  <!-- <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-8 footer-links">
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Trang chủ</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Nhân Viên</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Quản lý</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-8 footer-contact">
              <h4>Liên hệ</h4>
              <p>
                Đà Nẵng<br>
                <strong>SĐT:</strong> 0789 999 999<br>
                <strong>Email:</strong> CayxanhDaNang@gmail.com<br>
              </p>

            </div>

            <div class="col-lg-4 col-md-8 footer-info">
              <h3>Thông tin khác</h3>
              <p>Có thể liên hệ chúng tôi từ kênh khác:</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
  </footer> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
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