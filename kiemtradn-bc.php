<?php  
 session_start();
 if (isset($_SESSION['loaitk']) == false) {
     include('login.php');
     echo '<script type="text/javascript">
     alert("Bạn chưa đăng nhập, không thể báo cáo sự cố! Xin hãy đăng nhập");
     </script>';
 }else{
     include('BaoCaoSuCochonKV.php');
 }