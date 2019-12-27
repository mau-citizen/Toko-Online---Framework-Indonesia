<div class="container-fluid">
    <h4>Shopping Cart</h4>

    <table class="table table-bordered table-striped table-hover">
        <thead align="center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub-total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>

                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td align="center"><?= $items['name'] ?></td>
                    <td align="center"><?= $items['qty'] ?></td>
                    <td align="right"><?= number_format($items['price'], 0, ",", ".") ?></td>
                    <td align="right"><?= number_format($items['subtotal'], 0, ",", ".") ?></td>
                    <td align="center"><?= anchor('dashboard/hapusKeranjang/' . $items['rowid'], '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>') ?></td>
                </tr>

            <?php endforeach; ?>
            <tr>
                <td colspan="3">
                <td align="center" class="font-weight-bold">Total</td>
                <td align="right"><?= number_format($this->cart->total(), 0, ",", ".") ?></td>
                <td></td>
                </td>
            </tr>
        </tbody>
    </table>

    <div>
        <a href="<?= base_url('dashboard') ?>" class="btn btn-sm btn-primary">Back</a>
        <a href="<?= base_url('dashboard/checkout') ?>" class="btn btn-sm btn-success">Checkout</a>
    </div>
</div>