<div class="page-heading">  
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Data Pelanggan</h3>
        <p class="text-subtitle text-muted">Kumpulan data Pelanggan pada perusahan PT. RentCar</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pelanggan</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <!-- Minimal jQuery Datatable end -->
  <!-- Basic Tables start -->
  <section class="section">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <a href="?page=tambahpelanggan"><button type="button" class="btn btn-primary rounded-pill">Tambah Data</button></a><br><br>
          <table class="table" id="table1">
            <thead>
              <tr>
                <th>Foto KTP</th>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Username</th>
                <th>No. tlpn</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>multakim.jpg</td>
                <td>P001</td>
                <td>Multakim</td>
                <td>multakim@gmail.com</td>
                <td>Multakim.2025</td>
                <td>multakimmm</td>
                <td>085333444555</td>
                <td>Kekalik Jaya</td>
                <td>
                  <a href="?page=ubahpelanggan">
                    <span class="bi bi-pencil-square"></span>
                  </a>&nbsp;
                  <span class="bi bi-trash-fill"></span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
<!-- Basic Tables end -->
</div>