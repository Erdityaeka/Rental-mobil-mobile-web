<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (file_exists("$page.php")) {
        include "$page.php";
    } else {
        echo "<div class='content-header'><div class='content-fluid'>
            <div class='row mb-2'>
                <h1 class='m-0 text-dark'>Halaman tidak ditemukan</h1>
            </div>
        </div></div>";
    }
} else {
    include 'home.php';
};
