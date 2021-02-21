<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand mr-5" href="#">My Store</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-5" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Master
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url(); ?>barang/index">Barang</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url(); ?>admin/supplier">Supplier</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="#">Invoice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <form class="form-inline">
                        <input class="form-control" type="search" placeholder="Cari Produk">
                        <button type="submit" class="btn btn-light"><i class="fas fa-search"></i></button>
                    </form>
                </li> -->
                <li class="nav-item">
                    <?php if ($this->session->userdata('username')) { ?>
                        <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    <?php } else { ?>
                        <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                    <?php } ?>
                </li>
            </ul>
        </div>

    </div>
</nav>