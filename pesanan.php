<!-- Container utama -->
<div class="container mt-5" style="padding: 0;">
    <!-- Card Sudah Dibayar -->
    <div class="card mb-4" style="padding: 70px; border: none; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
        <div class="card-header" style="color: white; background-color: green;">
            Sudah Dibayar
        </div>
        <div class="card-body" style="background-color: #f8f9fa;">
            <p class="card-text">26-10-2025</p>
            <h5 class="card-title">ID Pembayaran</h5>
            <p class="card-text">Rp. 400.000</p>
            <p class="card-text text-danger small">
                ALERT: Status pembayaran sudah dibayar, tidak perlu klik tombol pembayaran
            </p>
            <a href="#" class="btn btn-secondary disabled" aria-disabled="true">Sudah Dibayar</a>
        </div>
    </div>

    <!-- Card Belum Dibayar -->
    <div class="card" style="padding: 70px; border: none; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
        <div class="card-header" style="color: white; background-color: red;">
            Belum Dibayar
        </div>
        <div class="card-body" style="background-color: #f8f9fa;">
            <h5 class="card-title">ID Pembayaran</h5>
            <p class="card-text">Rp. 400.000</p>
            <p class="card-text text-danger small">
                ALERT jika status pembayaran sudah dibayar tidak perlu di klik tombol pembayaran
            </p>
            <a href="?page=pembayaran" class="btn btn-primary">Pembayaran</a>
        </div>
    </div>
</div>