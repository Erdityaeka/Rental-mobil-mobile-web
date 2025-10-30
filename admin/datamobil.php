<div class="page-heading">  
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Data Mobil</h3>
        <p class="text-subtitle text-muted">Kumpulan data mobil pada perusahan PT. RentCar</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mobil</li>
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
          <a href="?page=tambahmobil"><button type="button" class="btn btn-primary rounded-pill">Tambah Data</button></a><br><br>
          <table class="table" id="table1">
            <thead>
              <tr>
                <th>Foto</th>
                <th>Kode Mobil</th>
                <th>Nama Mobil</th>
                <th>Plat</th>
                <th>Kursi</th>
                <th>Fasilitas</th>
                <th>Harga Sewa</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>avanza.jpg</td>
                <td>A001</td>
                <td>Avanza</td>
                <td>DR 001 ER</td>
                <td>4 kursi</td>
                <td>Lengkap (Ac, Tv, Cemilan)</td>
                <td>Rp. 300.000</td>
                <td>
                  <span class="badge bg-warning">Disewa</span>
                </td>
                <td>
                  <a href="?page=ubahmobil">
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