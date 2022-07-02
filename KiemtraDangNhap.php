<?php
  include('ketnoi.php');
    if (isset($_POST['form_click'])){
      if (session_id() === ''){
        @session_start();
      }
        $taikhoan = $_POST['Taikhoan'];
        $matkhau = $_POST['Matkhau'];
        $dn = 0;

        $tv="select * from khachhang";
        $tv_1=mysqli_query($connect,$tv);
        if($tv_1 === FALSE) { 
            echo "không kết nối được"; // TODO: better error handling
        }
        while($tv_2=mysqli_fetch_array($tv_1))
        {
          if($tv_2!=false && $tv_2['maKhachHang'] == $taikhoan && $tv_2['matKhau'] == $matkhau)
          {
            $dn=1;
            $_SESSION['taikhoan'] = $tv_2['hoTen'];
            $_SESSION['loaitk'] = 'khachhang';
            $_SESSION['MAKH'] = $tv_2['maKhachHang'];
            include('index.php');
            echo '<script type="text/javascript">
                    alert("Đăng nhập thành công!");
                  </script>';
            break;
          }
        }

        $tv="select * from nhanvien";
        $tv_1=mysqli_query($connect,$tv);
        while($tv_2=mysqli_fetch_array($tv_1))
        {
          if($tv_2!=false && $tv_2['maNhanVien'] == $taikhoan && $tv_2['matKhau'] == $matkhau)
          {
            $dn=1;
            $_SESSION['taikhoan'] = $tv_2['hoTen'];
            $_SESSION['loaitk'] = 'nhanvien';
            include('index.php');
            echo '<script type="text/javascript">
                    alert("Đăng nhập thành công!");
                  </script>';
            break;
          }
        }

    }
    if($dn == 0){
      include('login.php');
      echo '<script type="text/javascript">
              alert("Đăng nhập Thất bại!");
            </script>';
    }
?>