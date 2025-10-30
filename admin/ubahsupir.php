<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Ubah Data Supir</h3>
        <p class="text-subtitle text-muted">Kolom Ubah data supir pada perusahaan PT. RentCar</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Data</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  
  <!-- Basic Horizontal form layout section start -->
  <section id="basic-horizontal-layouts">
    <div class="row match-height">
      <div class="col-md-12 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <form class="form form-horizontal">
                <div class="form-body">
                  <div class="row">

                    <div class="col-md-2">
                      <label>ID Supir</label>
                    </div>
                    <div class="col-md-10 form-group">
                      <input type="text" class="form-control" name=""
                      placeholder="Kode Supir">
                    </div>

                    <div class="col-md-2">
                      <label>Nama Supir</label>
                    </div>
                    <div class="col-md-10 form-group">
                      <input type="text" class="form-control" name=""
                      placeholder="Nama Supir">
                    </div>

                    <div class="col-md-2">
                      <label>E-mail</label>
                    </div>
                    <div class="col-md-10 form-group">
                      <input type="email" class="form-control" name=""
                      placeholder="E-mail">
                    </div>
                    
                    <div class="col-md-2">
                      <label>Jenis Kelamin</label>
                    </div>
                    <div class="col-md-10 form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Laki-laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Perempuan
                        </label>
                      </div>
                    </div>

                    <div class="col-md-2">
                      <label>Alamat</label>
                    </div>
                    <div class="col-md-10 form-group">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    
                    <div class="col-md-2">
                      <label>Upload Foto KTP</label>
                    </div>
                    <div class="col-md-10 form-group">
                      <input class="form-control" type="file" id="formFile">
                    </div>

                    <div class="col-sm-12 d-flex justify-content-end">
                      <button type="simpan" class="btn btn-primary me-1 mb-1">Simpan</button>
                      <a href="?page=datasupir"><button type="button" class="btn btn-danger me-1 mb-1">Kembali</button></a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- // Basic multiple Column Form section end -->
