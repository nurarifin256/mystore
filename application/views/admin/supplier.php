<div class="container mt-5">
    <br>
    <br>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h3 class="text-center mb-3">Daftar Supplier</h3>

            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col-lg">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Supplier <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

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
                    foreach ($supplier->result() as $key => $s) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s->kode_supplier ?></td>
                            <td><?= $s->nama_supplier ?></td>
                            <td><?= $s->alamat ?></td>
                            <td>
                                <a href="#" class="edit_supplier" data-toggle="modal" data-target="modalEdit" data-kode="<?= $s->kode_supplier ?>" data-nama="<?= $s->nama_supplier; ?>" data-alamat="<?= $s->alamat; ?>"><i class="far fa-edit mr-2"></i></a>

                                <a href="#" class="hapus_supplier" data-toggle="modal" data-target="modalHapus" data-kode="<?= $s->kode_supplier ?>"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- modal hapus -->
<form action="<?= base_url('admin/hapus_supplier') ?>" method="post">
    <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin ? </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kode_supplier" class="kode_supplier">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</form>
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
                        <input type="text" name="nama_supplier" class="form-control" re>
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

<!-- modal edit -->
<form action="<?= base_url() . 'admin/ubah_supplier'; ?>" method="post">
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <input type="hidden" class="form-control kode" name="kode_supplier">

                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text" class="form-control nama" name="nama_supplier">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control alamat" name="alamat">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- akhir modal edit -->