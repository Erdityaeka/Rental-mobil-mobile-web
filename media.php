<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RenCar</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=rental">Rental</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=pesanan">Pesananan</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <?php include 'konten.php'; ?>
    <!-- Services-->
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
    <!-- jQuery dan Moment wajib sebelum daterangepicker -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/scriptt.js"></script>

    <!-- SB Forms JS -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- Script tambahan -->
    <script src="js/scripts_rental.js"></script>

    <!-- Daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Inisialisasi Date Range Picker -->
    <!-- Pastikan ini di bawah semua plugin JS -->
    <script>
        $(document).ready(function() {
            // Jalankan hanya kalau elemen form pesanan ada
            if ($('#tanggal_pinjam').length && $('#tanggal_kembali').length) {

                // Inisialisasi datepicker untuk tanggal pinjam
                $('#tanggal_pinjam').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    locale: {
                        format: 'YYYY-MM-DD'
                    }
                });

                // Inisialisasi datepicker untuk tanggal kembali
                $('#tanggal_kembali').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    locale: {
                        format: 'YYYY-MM-DD'
                    }
                });

                // Fungsi hitung durasi otomatis
                function hitungDurasi() {
                    let tglPinjam = $('#tanggal_pinjam').val();
                    let tglKembali = $('#tanggal_kembali').val();

                    if (tglPinjam && tglKembali) {
                        let start = moment(tglPinjam, 'YYYY-MM-DD');
                        let end = moment(tglKembali, 'YYYY-MM-DD');
                        let durasi = end.diff(start, 'days');

                        if (durasi < 0) {
                            $('#duras').val('Tanggal tidak valid');
                        } else {
                            $('#duras').val(durasi + ' hari');
                        }
                    }
                }

                // Jalankan fungsi saat tanggal berubah
                $('#tanggal_pinjam, #tanggal_kembali').on('change', hitungDurasi);
            }
        });
    </script>


</body>

</html>

</body>

</html>