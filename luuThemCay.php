<?php
include('ketnoi.php');
if (isset($_POST['form_click'])){
	$maCay1 = $_POST['macay'];
	$macay = str_replace(' ','',$maCay1);
	$tenCay = $_POST['tencay'];
	$dacDiem = $_POST['DacDiem'];
	$tinhTrang = $_POST['tinhtrang'];
	$maLoaiCay = $_POST['maloaicay'];
	$chieuCao = $_POST['chieucao'];
	$ngayTrong = $_POST['ngaytrong'];
	$duongKinhThan = $_POST['dkthan'];
	$duongKinhTan = $_POST['dktan'];
	$kinhDo = $_POST['kinhdo'];
	$viDo = $_POST['vido'];
	$maKhuVucQuanLy = substr($_POST['makhuvuc'],3,3);
	$hinhAnh = $_POST['hinhanh'];

	$tv="INSERT INTO cay 
	VALUES ('$macay' ,'$tenCay','$dacDiem','$tinhTrang','$maLoaiCay','$chieuCao','$ngayTrong','$duongKinhThan','$duongKinhTan', '$kinhDo', '$viDo', '$maKhuVucQuanLy', '$hinhAnh');";
	mysqli_query($connect,$tv);
	
}
include('danhsachcay.php');
echo '<script type="text/javascript">
        alert("Thêm Cây thành công!");
      </script>';
?>