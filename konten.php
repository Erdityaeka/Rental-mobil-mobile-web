<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (file_exists("$page.php")) {
        include "$page.php";
    } else {
        include 'halaman tidak ditemukan';
    }
} else {
    include 'home.php';
};
