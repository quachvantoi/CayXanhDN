<?php 
if(session_id() === '')
session_start(); ?>
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
          <li><a  href="index.php">Trang chủ</a></li>
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
          <li class="dropdown"><a href="#">Xin chào, 
          <?php 
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
          <h2>Danh sách cây</h2>
          <form action="" method="post">
            <input type="text" name="Tim" list="tim">
            <datalist id="tim">
              <?php
                include('ketnoi.php');
              $tv="SELECT * FROM cay, tuyenduong WHERE tuyenduong.maDuong = cay.maDuong and tinhTrang != 'đã chết' $dieukien";
                $tv_1=mysqli_query($connect,$tv);
                
                while($tv_2=mysqli_fetch_array($tv_1))
                {
                  if($tv_2!=false)
                  {
                    echo '<option value="'.$tv_2['tenCay'].'" />';
                  }
                }?>
            </datalist>
            <input type="submit" name="btn_tim" value="Tìm kiếm">
          </form>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Danh sách cây</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->
    
    <section class="portfolio">
        <div class="container">

            <div class="row">
              <div class="col-lg-11">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">Tất cả</li>
                  <?php
                    include('ketnoi.php');
                    $dieukien = '';
                    if (isset($_POST['btn_tim'])){
                      $string = $_POST['Tim'];
                      $dieukien = ' and tenCay LIKE "%' . $string . '%"' ;
                    }
                    $tv="select DISTINCT tuyenduong.maKhuVucQuanLy from tuyenduong, cay where tuyenduong.maDuong = cay.maDuong $dieukien;";
                    $tv_1=mysqli_query($connect,$tv);
                    while($tv_2=mysqli_fetch_array($tv_1))
                    {
                      if($tv_2!=false)
                      {
                        echo '<li data-filter=".';
                        echo $tv_2['maKhuVucQuanLy'];
                        echo '">';
                        echo $tv_2['maKhuVucQuanLy'];
                        echo '</li>';
                      }
                      else
                      {
                        echo "&nbsp;";
                      }
                    }

                  ?>
                </ul>
              </div>
              <div class="col-lg-1">
                <a href="themcaytrunggian.php">Thêm cây</a>
              </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
              <?php
                include('ketnoi.php');
                $dieukien = '';
                if (isset($_POST['btn_tim']) && ($string != '')){
                  $string = $_POST['Tim'];
                    $dieukien = ' and  tenCay LIKE "%' . $string . '%"' ;
                }
                // $tv="select * from (select * from Cay order by kinhDo, viDo, ngayTrong desc ) x $dieukien group by kinhDo, viDo ";
                $tv="SELECT * FROM cay, tuyenduong WHERE tuyenduong.maDuong = cay.maDuong and tinhTrang != 'đã chết' $dieukien";
                $tv_1=mysqli_query($connect,$tv);
                
                while($tv_2=mysqli_fetch_array($tv_1))
                {
                  if($tv_2!=false)
                {
                  $link_chi_tiet="?macay=".$tv_2['maCay'];
                  $link_anh="Moderna/assets/img/team/".$tv_2['hinhAnh'];

                echo '<div class="col-lg-4 col-md-6 portfolio-wrap ';
                echo $tv_2['maKhuVucQuanLy'];
                echo '">
                  <div class="member">
                    <div class="member-img">';
                      echo '<img src="';
                      echo $link_anh;
                      echo '" class="img-fluid" alt="">';
                    echo '</div>
                    <div class="member-info">';
                      echo '<h4>';
                      echo "Tên Cây: ".$tv_2['tenCay'];
                      echo '</h4>
                      <span>';
                      echo "Mã Cây: ".$tv_2['maCay'];
                      echo '</span>
                      <span>';
                      echo "<br>Mã Loại Cây: ".$tv_2['maLoaiCay'];
                      echo '</span>
                      <p>Đặc điểm: <br>';
                      echo $tv_2['dacDiem'];
                      echo '</p>
                      <p>Tình trạng: ';
                      echo $tv_2['tinhTrang'];
                      echo '</p>
                    </div>
                  </div>
                  <a href="XemChiTiet.php'; echo $link_chi_tiet; echo '">Xem Chi tiết </a>/
                  <a href="SuaCay.php'; echo $link_chi_tiet; echo '">Sửa </a>/
                  <a href="XoaCay.php'; echo $link_chi_tiet; echo '">Xóa</a>
                </div><!-- Hết 1 card layout -->';
                }
                else 
                {
                  echo "&nbsp;";
                }
                }
              ?>
          </div>
      </div>
    </section>


  </main><!-- End #main -->
  
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