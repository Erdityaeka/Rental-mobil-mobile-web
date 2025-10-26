<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />
            </div>
            <div class="col-md-6">
                <form>
                    <div class="card-body">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">Shop item template</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span>
                        </div>
                        <div class="mb-3">
                            <label for="idmobil" class="form-label">ID Mobil</label>
                            <input type="text" class="form-control item" id="idmobil" placeholder="Masukkan ID Mobil">
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
                        <div class="d-flex">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>