<div class="page-heading">  
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Data Supir</h3>
        <p class="text-subtitle text-muted">Kumpulan data supir pada perusahan PT. RentCar</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Supir</li>
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
          <a href="?page=tambahsupir"><button type="button" class="btn btn-primary rounded-pill">Tambah Data</button></a><br><br>
          <table class="table" id="table1">
            <thead>
              <tr>
                <th>Foto KTP</th>
                <th>ID Supir</th>
                <th>Nama Supir</th>
                <th>E-mail</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>supardi.jpg</td>
                <td>S001</td>
                <td>Supardi</td>
                <td>supardi@gmail.com</td>
                <td>Laki-laki</td>
                <td>Kekalik Jaya</td>
                <td>
                  <a href="?page=ubahsupir">
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