<div class="container mt-5">
    <br>
    <br>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h3 class="text-center mb-3">Daftar Supplier</h3>
            <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-primary mb-2"><i class="fas fa-plus mr-1"></i>Tambah Data</button>
            <table id="example" class="table table-sm table-hover mt-5">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($supplier as $s) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s["kode_supplier"]; ?></td>
                            <td><?= $s["nama_supplier"]; ?></td>
                            <td><?= $s["alamat"]; ?></td>
                            <td>
                                <a href=""><i class="far fa-edit mr-2"></i></a>
                                <a href="#hapus" data-toggle="modal"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- modal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <form action="<?= base_url('admin/hapus_supplier/' . $s['kode_supplier']); ?>" method="post">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- akhir modal hapus -->

<!-- modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/tambah_supplier'; ?>" method="POST">
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input type="text" name="nama_supplier" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal tambah -->