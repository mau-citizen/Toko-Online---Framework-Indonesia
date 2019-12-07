<div class="container-fluid">
    <button class="btn btn-block btn-warning font-weight-bold my-3" data-toggle="modal" data-target="#addProduct"><i class="fas fa-sm fa-plus"></i> Add Product</button>

    <table class="table table-borderless">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($barang as $brg) : ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $brg['nama_brg']; ?></td>
                    <td><?= $brg['keterangan_brg']; ?></td>
                    <td><?= $brg['kategori_brg']; ?></td>
                    <td><?= number_format($brg['harga_brg']); ?></td>
                    <td><?= $brg['stok_brg']; ?></td>
                    <td><button class="btn btn-success btn-sm"><i class="fas fa-search"></i></button></td>
                    <td><button class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></button></td>
                    <td><button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/DataBarang/tambahBarang') ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input class="form-control" type="text" name="nama_brg" id="nama_brg" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="keterangan_brg">Keterangan</label>
                        <input class="form-control" type="text" name="keterangan_brg" id="keterangan_brg" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="kategori_brg">Kategori</label>
                        <select class="custom-select" name="kategori_brg" id="kategori_brg">
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
                                    <input name="harga_brg" type="text" class="form-control" placeholder="Harga" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-4">
                                <input name="stok_brg" type="text" class="form-control" placeholder="Stok" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar_brg">Gambar</label><br>
                        <input type="file" name="gambar_brg" id="gambar_brg">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-block btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>