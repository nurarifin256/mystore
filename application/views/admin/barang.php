<div class="container mt-5">
    <br>
    <br>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h3 class="text-center mb-3">Daftar Barang</h3>

            <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-primary mb-2"><i class="fas fa-plus mr-1"></i>Tambah Data</button>
            <table id="example" class="table table-sm table-hover mt-5">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Berat/kg</th>
                        <th>Qty</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($barang->result() as $key => $b) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b->nama_barang ?></td>
                            <td><?= $b->harga ?></td>
                            <td><?= $b->berat ?></td>
                            <td><?= $b->qty ?></td>
                            <td>
                                <a href="#"><i class="far fa-edit mr-2"></i></a>

                                <a href="#"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>