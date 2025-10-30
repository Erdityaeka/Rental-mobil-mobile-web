<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  if (file_exists("$page.php")){
    include "$page.php";
  }else {
    echo "<h3 align='center'>Halaman tidak ditemukan</h3>";
  }
}else{
  include "beranda.php";
}
?>