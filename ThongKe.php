<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thống Kê - Môi Trường Đà Nẵng</title>
  <link rel="icon" href="https://png.pngtree.com/png-clipart/20190610/original/pngtree-green-design-icon-vector-material-png-image_1931207.jpg">
  <link href="Moderna/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Moderna/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="Moderna/assets/css/style.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

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
          <li><a href="index.php">Trang chủ</a></li>
          <li><a href="danhsachcay.php">Cây</a></li>
          <li class="dropdown"><a href="#"><span>Quản lý</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Xem thông tin nhân viên</a></li>
              <li><a href="XemThongBaoSuCo.php">Xem thông báo về sự cố cây</a></li>
              <li><a href="#">Xem khu vực quản lý</a></li>
              <li><a href="#">Phân chia công việc</a></li>
            </ul>
          </li>
          <li><a class="active" href="ThongKe.php">Thống kê</a></li>
          <li><a href="#">Liên hệ</a></li>
          <li class="dropdown"><a href="#">Xin chào, <?php echo $_SESSION['taikhoan']; ?>
            <i class="bi bi-chevron-down"></i></a>
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
    <section class="breadcrumbs mb-3">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Thống kê</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Thống kê</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <canvas id="canvas"></canvas>
      </div>
      <div class="col-sm-6">
        <canvas id="cvSLLCay"></canvas>
      </div>
    </div>
    
  </div>
  <script>
      let myChart = document.getElementById('canvas').getContext('2d');
      // Global Options
      // Chart.defaults.global.defaultFontFamily = 'Lato';
      Chart.defaults.global.defaultFontSize = 18;
      Chart.defaults.global.defaultFontColor = '#111';

      let massPopChart = new Chart(myChart, {
        type:'pie', //loại biểu đồ: bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
          labels:[
          <?php
            include('ketnoi.php');
            $data = '';
            $tv="select * from tuyenduong";
            $tv_1=mysqli_query($connect,$tv);
            while($tv_2=mysqli_fetch_array($tv_1))
            {
              if($tv_2!=false)
              {
                echo "'".$tv_2['maKhuVucQuanLy']." - Đường ".$tv_2['tenDuong']."',";
                //lấy data
                $tvc="select COUNT(maCay) as sl from cay where maDuong = '". $tv_2['maDuong'] ."'";
                $tvc_1=mysqli_query($connect,$tvc);
                while($tvc_2=mysqli_fetch_array($tvc_1))
                {
                  if($tvc_2!=false)
                  {
                    $data = $data.$tvc_2['sl'].",";
                  }
                }
              }
            }
          ?>
          ],
          datasets:[{
            label:'Population',
            data:[
              <?php echo $data; ?>
            ],
            //backgroundColor:'green',
            backgroundColor:[
              'rgba(255, 99, 132)',
              'rgba(54, 162, 235)',
              'rgba(120,63,4)',
              'rgba(76,17,48)',
              'rgba(153, 102, 255)',
              'rgba(255, 159, 64)',
              'rgba(39,123,74)',
              'rgba(16,0,103)',
              'rgba(204,0,0)'
            ],
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000'
          }]
        },
        options:{
          title:{
            display:true,
            text:'Biểu đồ số lượng cây ở từng khu vực',
            fontSize:25
          },
          legend:{
            display:true,
            position:'right',
            labels:{
              fontColor:'#000'
            }
          },
          layout:{
            padding:{
              left:50,
              right:0,
              bottom:0,
              top:0
            }
          },
          tooltips:{
            enabled:true
          }
        }
      });
    </script>

    <script>
      let cvSLLCay = document.getElementById('cvSLLCay').getContext('2d');
      // Global Options
      // Chart.defaults.global.defaultFontFamily = 'Lato';
      Chart.defaults.global.defaultFontSize = 18;
      Chart.defaults.global.defaultFontColor = '#111';

      let cvSLLCay1 = new Chart(cvSLLCay, {
        type:'bar', //loại biểu đồ: bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
          labels:[
          <?php
            include('ketnoi.php');
            $data = '';
            $tv="select * from loaicay";
            $tv_1=mysqli_query($connect,$tv);
            while($tv_2=mysqli_fetch_array($tv_1))
            {
              if($tv_2!=false)
              {
                echo "'".$tv_2['maLoaiCay']."',";
                //lấy data
                $tvc="select COUNT(maCay) as sl from cay where maLoaiCay = '". $tv_2['maLoaiCay'] ."'";
                $tvc_1=mysqli_query($connect,$tvc);
                while($tvc_2=mysqli_fetch_array($tvc_1))
                {
                  if($tvc_2!=false)
                  {
                    $data = $data.$tvc_2['sl'].",";
                  }
                }
              }
            }
          ?>
          ],
          datasets:[{
            label:'số cây',
            data:[
              <?php echo $data; ?>
            0,],
            backgroundColor:[
              'rgba(255, 99, 132, 0.6)',
              'rgba(54, 162, 235, 0.6)',
              'rgba(255, 206, 86, 0.6)',
              'rgba(75, 192, 192, 0.6)',
              'rgba(153, 102, 255, 0.6)',
              'rgba(255, 159, 64, 0.6)',
              'rgba(255, 99, 132, 0.6)'
            ],
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000'
          }]
        },
        options:{
          title:{
            display:true,
            text:'Biểu đồ số lượng loại cây cả thành phố',
            fontSize:25
          },
          legend:{
            display:true,
            position:'right',
            labels:{
              fontColor:'#000'
            }
          },
          layout:{
            padding:{
              left:50,
              right:0,
              bottom:0,
              top:0
            }
          },
          tooltips:{
            enabled:true
          }
        }
      });
    </script>
<div class="container">
  <div class="row">
    <?php
      include('ketnoi.php');
      $tvt="select * from tuyenduong";
      $tvt_1=mysqli_query($connect,$tvt);
      while($tvt_2=mysqli_fetch_array($tvt_1))
      {
        if($tvt_2!=false)
        {
          $title = '';
          $data = '';
          $tv="select DISTINCT maLoaiCay from cay where maDuong = '". $tvt_2['maDuong'] ."'";
          $tv_1=mysqli_query($connect,$tv);
          while($tv_2=mysqli_fetch_array($tv_1))
          {
            if($tv_2!=false)
            {
              $title = $title."'".$tv_2['maLoaiCay']."',";
              //lấy data
              $tvc="select COUNT(maCay) as sl from cay where maDuong = '". $tvt_2['maDuong'] ."' and maLoaiCay = '".$tv_2['maLoaiCay']."'";
              $tvc_1=mysqli_query($connect,$tvc);
              while($tvc_2=mysqli_fetch_array($tvc_1))
              {
                if($tvc_2!=false)
                {
                  $data = $data.$tvc_2['sl'].",";
                }
              }
            }
          }
          echo '<div class="col-sm-4 mt-3">
                  <canvas id="'.$tvt_2['maDuong'].'"></canvas>
                </div>';
          echo "  <script>
                  let a".$tvt_2['maDuong']." = document.getElementById('".$tvt_2['maDuong']."').getContext('2d');
                  // Global Options
                  Chart.defaults.global.defaultFontSize = 18;
                  Chart.defaults.global.defaultFontColor = '#111';

                  let b".$tvt_2['maDuong']." = new Chart(a".$tvt_2['maDuong'].", {
                    type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                    data:{
                      labels:[".$title."],
                      datasets:[{
                        label:'Số lượng cây',
                        data:[".$data."0],
                        backgroundColor:[
                          'rgba(255, 99, 132, 0.6)',
                          'rgba(54, 162, 235, 0.6)',
                          'rgba(255, 206, 86, 0.6)',
                          'rgba(75, 192, 192, 0.6)',
                          'rgba(153, 102, 255, 0.6)',
                          'rgba(255, 159, 64, 0.6)',
                          'rgba(255, 99, 132, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                      }]
                    },
                    options:{
                      title:{
                        display:true,
                        text:'Biểu đồ loại cây của đường ".$tvt_2['tenDuong']."',
                        fontSize:25
                      },
                      legend:{
                        display:true,
                        position:'right',
                        labels:{
                          fontColor:'#000'
                        }
                      },
                      layout:{
                        padding:{
                          left:50,
                          right:0,
                          bottom:0,
                          top:0
                        }
                      },
                      tooltips:{
                        enabled:true
                      }
                    }
                  });
                </script>";
        }
      }
    ?>
  </div>
</div>
<div style="height: 200px;"></div>

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

