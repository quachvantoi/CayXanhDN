<?php
session_start();
include('ketnoi.php');
if (isset($_POST['form_click'])){
	$maChiTietSuCo = $_POST['maChiTietSuCo'];
	$maChiTietSuCo = str_replace(' ','',$maChiTietSuCo);
	$maCay = substr($_POST['maCay'],0,3);
	$moTaSuCo = $_POST['moTaSuCo'];
	$today = date("d/m/Y");
	$makh = $_SESSION['MAKH'];
	

	$tv = "select * from danhsachsuco where maKhachHang = '$makh';";
	$tv_1=mysqli_query($connect,$tv);
    if($tv_2=mysqli_fetch_array($tv_1) == false)
    {
    	$tv="select max(maDanhSachSuCo) as maDanhSachSuCo from danhsachsuco";
        $tv_1=mysqli_query($connect,$tv);
        $tv_2=mysqli_fetch_array($tv_1);
        $tam = substr($tv_2['maDanhSachSuCo'],2) + 1;

    	$tv="INSERT INTO danhsachsuco 
		VALUES ('DS0".$tam."' ,'$makh','$today');";
		mysqli_query($connect,$tv);
    }
    $tv = "select * from danhsachsuco where maKhachHang = '$makh';";
	$tv_1=mysqli_query($connect,$tv);
	$maDanhSachSuCo = '';
	$tv_2=mysqli_fetch_array($tv_1);
    $maDanhSachSuCo = $tv_2['maDanhSachSuCo'];
	    

	$tv="INSERT INTO ChiTietSuCo 
	VALUES ('$maChiTietSuCo' ,'$maCay','$maDanhSachSuCo','$moTaSuCo','Chưa duyệt');";
	mysqli_query($connect,$tv);
	$_SESSION['saiMaCay'] = '';
	$_SESSION['mota'] = '';
	echo '<script type="text/javascript">
            alert("Báo cáo sự cố thành công!");
          </script>';
	include('index.php');
	
}


?>