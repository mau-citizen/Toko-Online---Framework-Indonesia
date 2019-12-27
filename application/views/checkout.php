<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form action="<?= base_url('dashboard/prosesPesanan') ?>" method="post">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama lengkap anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat lengkap anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+62</div>
                        </div>
                        <input type="number" name="notelp" placeholder="Nomor telepon anda" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option value="jne">JNE</option>
                        <option value="tiki">TIKI</option>
                        <option value="posindonesia">POS Indonesia</option>
                        <option value="gojek">GoJek</option>
                        <option value="grab">Grab</option>
                    </select>
                    <div class="form-group">
                        <label>Pilih Bank</label>
                        <select class="form-control">
                            <option value="bca">BCA - XXXXXXX</option>
                            <option value="bni">BNI - XXXXXXX</option>
                            <option value="bri">BRI - XXXXXXX</option>
                            <option value="mandiri">Mandiri - XXXXXXX</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">
                        <?php
                        $total = 0;

                        if ($keranjang = $this->cart->contents()) {
                            foreach ($keranjang as $item) {
                                $total = $total + $item['subtotal'];
                            }
                            echo "Total Belanja Rp" . number_format($total, 0, ',', '.') . " &mdash; Pesan Sekarang &rightarrow;";
                        }
                        ?>
                    </button>

            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>