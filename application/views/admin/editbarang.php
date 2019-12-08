<div class="container-fluid">
    <h3><i class="fas fa-sm fa-pencil-alt"></i> Product Edit</h3>

    <?php foreach ($barang as $brg) : ?>
        <form method="post" action="<?= base_url('') . 'admin/DataBarang/update' ?>">

            <div class="form-group">
                <label for="nama_brg">Nama Barang</label>
                <input class="form-control" type="text" name="nama_brg" id="nama_brg" autocomplete="off" value="<?= $brg['nama_brg'] ?>">
                <input class="form-control" type="hidden" name="id_brg" value="<?= $brg['id_brg'] ?>">
            </div>
            <div class="form-group">
                <label for="keterangan_brg">Keterangan</label>
                <input class="form-control" type="text" name="keterangan_brg" id="keterangan_brg" autocomplete="off" value="<?= $brg['keterangan_brg'] ?>">
            </div>
            <div class="form-group">
                <label for="kategori_brg">Kategori</label>
                <select class="custom-select" name="kategori_brg" id="kategori_brg" value="<?= $brg['kategori_brg'] ?>">
                    <option value="Electronics">Electronics</option>
                    <option value="Clothes">Clothes</option>
                    <option value="Sports">Sports</option>
                </select>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-8">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input name="harga_brg" type="text" class="form-control" placeholder="Harga" autocomplete="off" value="<?= $brg['harga_brg'] ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <input name="stok_brg" type="text" class="form-control" placeholder="Stok" autocomplete="off" value="<?= $brg['stok_brg'] ?>">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    <?php endforeach; ?>
</div>