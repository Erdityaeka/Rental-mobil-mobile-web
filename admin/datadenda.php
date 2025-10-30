<div class="page-heading">  
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Data Denda</h3>
        <p class="text-subtitle text-muted">Kumpulan data denda pada perusahan PT. RentCar</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Denda</li>
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
          <a href="?page=tambahdenda"><button type="button" class="btn btn-primary rounded-pill">Tambah Data</button></a><br><br>
          <table class="table" id="table1">
            <thead>
              <tr>
                <th>Bukti Denda</th>
                <th>ID Denda</th>
                <th>ID Rental</th>
                <th>Tanggal Denda</th>
                <th>Jumlah Denda</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>screenshot.jpg</td>
                <td>D001</td>
                <td>R001</td>
                <td>30/10/2025</td>
                <td>Rp. 300.000</td>
                <td>
                  <a href="?page=ubahdenda">
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