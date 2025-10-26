<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="assets/img/avanza.png" alt="..." />
            </div>
            <div class="col-md-6">
                <form>
                    <div class="card-body">
                        <div class="mb-4">
                            <h1 class="display-5 fw-bolder mb-2">Avanza</h1>
                            <div class="fs-5 mb-3">
                                <span>Rp.400.000</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="idmobil" class="form-label">ID Mobil</label>
                            <input type="text" class="form-control item" id="idmobil" placeholder="Masukkan ID Mobil">
                        </div>

                        <div class="mb-3">
                            <label for="idmobil" class="form-label">Nama</label>
                            <input type="text" class="form-control item" id="idmobil" placeholder="Masukkan Nama">
                        </div>

                        <div class="mb-3">
                            <label for="titik_penjemputan" class="form-label">Titik Penjemputan</label>
                            <input type="text" class="form-control item" id="titik_penjemputan" placeholder="Masukkan Titik Penjemputan">
                        </div>

                        <!-- Tanggal Pinjam -->
                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" id="tanggal_pinjam">
                            </div>
                        </div>

                        <!-- Tanggal Kembali -->
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" id="tanggal_kembali">
                            </div>
                        </div>

                        <!-- Upload KTP -->
                        <label>Foto KTP</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" />
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>

                        <div class="mb-3">
                            <label for="duras" class="form-label">Durasi Pinjaman</label>
                            <input type="text" class="form-control item" id="duras" placeholder="" , disabled>
                        </div>
                        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>