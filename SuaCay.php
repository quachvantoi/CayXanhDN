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
          <h2>Sửa cây</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="danhsachcay.php">Danh sách cây</a></li>
            <li>Sửa cây</li>
          </ol>
        </div>
      </div>
    </section><!-- End Our Team Section -->

    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          <div class="container">

            <div class="row">

              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <form action="LuuSuaCay.php" method="post" role="form">
                  <div class="row">
                    <p class="col-md-2 text-sm-center"> Mã Cây:</p>
                    <div class="col-md-3 form-group">
                      <input type="text" name="macay" class="form-control" id="macay" value="
                      <?php
                        include('ketnoi.php');
                        $maCay = $_GET['macay'];
                        $tv="select * from cay where maCay = '$maCay'";
                        $tv_1=mysqli_query($connect,$tv);
                        $tv_2=mysqli_fetch_array($tv_1);
                        echo $tv_2['maCay'];
                      ?>
                      " readonly>
                    </div>
                    <p class="col-md-2 text-sm-center"> Tên Cây:</p>
                    <div class="col-md-5 form-group mt-3 mt-md-0">
                      <input type="text" class="form-control" name="tencay" id="tencay" value="<?php echo $tv_2['tenCay']; ?>" required>
                    </div>
                  </div>
                  <div class="row">
                    <p class="col-md-2 text-sm-center mt-3"> Tình Trạng:</p>
                    <div class="col-md-4 form-group mt-3">
                      <!-- <input type="text" class="form-control" name="tinhtrang" id="tinhtrang" value="<?php echo $tv_2['tinhTrang']; ?>" required> -->
                      <select class="form-control" id="exampleFormControlSelect2" name="tinhtrang">
                        <?php
                        include('ketnoi.php');
                        $tv="select * from cay";
                        $tv_1=mysqli_query($connect,$tv);
                        while($tv2=mysqli_fetch_array($tv_1))
                          {
                            if($tv2!=false)
                            {
                              
                              if ($tv2['maCay'] == $tv_2['maCay']) {
                                echo '<option ';
                                echo 'selected';
                                echo '>';
                                echo $tv2['tinhTrang'];
                                echo '</option>';
                              }
                              
                            }
                            else
                            {
                              echo "&nbsp;";
                            }
                          }
                        ?>
                        <option>đang lớn</option>
                        <option>đã chết</option>
                      </select>
                    </div>
                    <p class="col-md-2 text-sm-center mt-3"> Mã Loại Cây:</p>
                    <div class="col-md-4 form-group mt-3">
                      <select class="form-control" id="exampleFormControlSelect1" name="maloaicay">
                        <?php
                        include('ketnoi.php');
                        $tv="select * from loaicay";
                        $tv_1=mysqli_query($connect,$tv);
                        while($tv2=mysqli_fetch_array($tv_1))
                          {
                            if($tv2!=false)
                            {
                              echo '<option ';
                              if ($tv2['maLoaiCay'] == $tv_2['maLoaiCay']) {
                                echo 'selected';
                              }
                              echo '>';
                              echo $tv2['maLoaiCay'];
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
                  </div>
                  <div class="row">
                    <p class="col-md-2 text-sm-center mt-3"> Đặc điểm:</p>
                    <div class="col-md-10 form-group mt-3">
                      <textarea class="form-control" name="DacDiem" rows="5" required><?php echo $tv_2['dacDiem']; ?></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <p class="col-md-2 text-sm-center  mt-3">Chiều Cao:</p>
                    <div class="col-md-2 form-group  mt-3">
                      <input type="text" name="chieucao" class="form-control" id="chieucao" value="<?php echo $tv_2['chieuCao']; ?>" required>
                    </div>
                    <p class="col-md-1 mt-3">cm</p>
                    <p class="col-md-2 text-sm-center  mt-3">Ngày Trồng:</p>
                    <div class="col-md-5 form-group  mt-3">
                      <input type="date" class="form-control" name="ngaytrong" id="ngaytrong" value="<?php echo substr($tv_2['ngayTrong'],0,10); ?>" required>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <p class="col-md-2 text-sm-center">Đường kính thân:</p>
                    <div class="col-md-3 form-group">
                      <input type="text" name="dkthan" class="form-control" id="dkthan" value="<?php echo $tv_2['duongKinhThan']; ?>" required>
                    </div>
                    <p class="col-md-1">cm</p>
                    <p class="col-md-2 text-sm-center">Đường kính tán:</p>
                    <div class="col-md-3 form-group">
                      <input type="text" class="form-control" name="dktan" id="dktan" value="<?php echo $tv_2['duongKinhTan']; ?>" required>
                    </div>
                    <p class="col-md-1">cm</p>
                  </div>
                  <div class="row">
                    <p class="col-md-2 text-sm-center">Kinh độ:</p>
                    <div class="col-md-4 form-group">
                      <input type="text" name="kinhdo" class="form-control" id="kinhdo" value="<?php echo $tv_2['kinhDo']; ?>" required>
                    </div>
                    <p class="col-md-2 text-sm-center">Vĩ độ:</p>
                    <div class="col-md-4 form-group">
                      <input type="text" class="form-control" name="vido" id="vido" value="<?php echo $tv_2['viDo']; ?>" required>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <p class="col-md-2 text-sm-center">Mã khu vực:</p>
                    <div class="col-md-5 form-group">
                      <select class="form-control" id="exampleFormControlSelect1" name="makhuvuc">
                        <?php
                        include('ketnoi.php');
                        $tv="select * from tuyenduong";
                        $tv_1=mysqli_query($connect,$tv);
                        while($tv2=mysqli_fetch_array($tv_1))
                          {
                            if($tv2!=false)
                            {
                              echo '<option ';
                              if ($tv_2['maDuong'] == $tv2['maDuong']) {
                                echo 'selected';
                              }
                              echo '>';
                              echo $tv2['maKhuVucQuanLy'].$tv2['maDuong']." - Đường ". $tv2['tenDuong'];
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
                    <p class="col-md-2 text-sm-center">Hình ảnh:</p>
                    <div class="col-md-3 form-group">
                      <input type="text" class="form-control" name="hinhanh" id="hinhanh" value="<?php echo $tv_2['hinhAnh']; ?>" required>
                    </div>
                  </div>




                  <div class="text-center mt-3"><button name="form_click" type="submit" class="btn btn-primary">Xác nhận</button></div>
                </form>
              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->
      </main>

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