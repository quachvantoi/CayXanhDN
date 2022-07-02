<?php
    $connect= mysqli_connect("localhost","id18260397_toi01285462153","03]7Wb&U0KY]q0S^");
    // mysqli_select_db($connect, "DOAN1");
    mysqli_select_db($connect, "id18260397_cayxanhdn");
    mysqli_query($connect, "SET names 'utf8'");
    if(!$connect){
      echo "Không thể kết nối đến Database!".mysqli_connect_error($connect);
    }
?>