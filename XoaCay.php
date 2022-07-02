<?php
include('ketnoi.php');
$maCay = $_GET['macay'];

$tv="UPDATE cay SET tinhTrang = 'đã chết' WHERE  maCay = '$maCay'";

mysqli_query($connect,$tv);
echo '<script type="text/javascript">
    alert("Xóa thành công!");
</script>';
include('danhsachcay.php');

?>