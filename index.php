<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Môi Trường Đà Nẵng</title>
  <link rel="icon" href="https://png.pngtree.com/png-clipart/20190610/original/pngtree-green-design-icon-vector-material-png-image_1931207.jpg">
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
<header id="header" class="fixed-top d-flex align-items-center header-primary">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Môi Trường Đà Nẵng</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.php">Trang chủ</a></li>
          <?php  
          

        
        if (isset($_SESSION['loaitk'])) {

            if ($_SESSION['loaitk'] === 'nhanvien') {
            echo '<li><a href="danhsachcay.php">Cây</a></li>
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
                <li class="dropdown"><a href="#">Xin chào,'.$_SESSION['taikhoan'].'<i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="login.php" onclick="FunLogout()">Đăng Xuất</a></li>
                </ul>
              </li>';
            }
            if ($_SESSION['loaitk'] === 'khachhang') {
              echo '<li><a href="#">khách hàng</a></li>
                    <li><a href="BaoCaoSuCochonKV.php">Báo cáo sự cố</a></li>
                    <li><a href="#">Liên hệ</a></li>
                <li class="dropdown"><a href="#">Xin chào,'.$_SESSION['taikhoan'].'<i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="login.php" onclick="FunLogout()">Đăng Xuất</a></li>
                  </ul>
                </li>';
            }
          }
          else
          {
            echo '<li><a href="#">khách hàng</a></li>
                  <li><a href="kiemtradn-bc.php" >Báo cáo sự cố</a></li>
                  <li><a href="#">Liên hệ</a></li>
                  <li><a href="login.php"  id="login">Đăng nhập</a></li>';
          }
          ?>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <script type="text/javascript">
  function FunLogout() 
    {
        
        alert("Bạn đã đăng xuất");
  }
  </script>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Chào mừng bạn đến với Website công ty môi trường<br>Đà Nẵng</h2>
          <p class="animate__animated animate__fadeInUp">Công ty Công Viên-Cây xanh và Đà Nẵng là đơn vị hành chính sự nghiệp trực thuộc Sở Xây dựng thành phố Đà Nẵng. Hoạt động chính trong lĩnh vực quản lý, chăm sóc, bảo vệ, duy tu, tôn tạo, trồng mới công viên, cây xanh đô thị thành phố Đà Nẵng. Chúng tôi tạo ra Website này để theo dõi đánh giá tình trạng sức khỏe cây theo định kỳ và lên lịch chăm sóc cây như tưới nước, bón phân, tỉa cành vào mùa mưa … Đồng thời đánh giá mật độ cây xanh, mật độ giao thông ở các tuyến đường nhằm đưa ra các phương án thích hợp cho việc phân bổ cây xanh...</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Đọc thêm</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <section class="services">
        <div class="container">
          <div class="row">
            

            <div class="col-md-12 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Tin tức</a></h4>
                <p class="description">Chúng tôi sẽ mang những tin tức mới nhất về cây xanh Đà Nẵng. Tin tức cập nhật hàng ngày.</p>
              </div>
            </div>

            <div class="col-md-12 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Hoạt động</a></h4>
                <p class="description">Chúng tôi có bộ phận hỗ trợ 24/7 và tất cả các quận huyện trên địa bàn TP. Đà Nẵng</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->
  </main>
<div class="container">
  <section class="map mt-3">
      
      <h3>Khu vực quản lý</h3>
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245368.26104979432!2d107.9380393552175!3d16.07176349243399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0x1df0cb4b86727e06!2zxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1637985311871!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section><!-- End Map Section -->
</div>
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
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
  </footer>
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

