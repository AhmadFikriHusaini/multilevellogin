<?php include "header.php"; ?>
<div class="container-fluid">

    <?php if ($_SESSION['akses'] == 'admin' || $_SESSION['akses'] == 'petugas') { ?>

        <div class="row">
            <?php if ($_SESSION['akses'] == 'admin') { ?>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="mb-1">
                                        <a href="pengguna.php" class="text-xs font-weight-bold text-primary text-uppercase" style="text-decoration: none;">Pengguna</a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }; ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="mb-1">
                                    <a href="buku.php" class="text-xs font-weight-bold text-uppercase text-success" style="text-decoration: none;">Buku</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }; ?>
    <?php if ($_SESSION['akses'] == 'anggota') { ?>
        <div class="row">
            <?php
            include "koneksi.php";
            $query = $koneksi->prepare("SELECT * FROM buku");
            $query->execute();
            $data = $query->fetchAll();
            foreach ($data as $value) {
            ?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo "uploads/" . $value['Cover_buku']; ?>" height="500px" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $value['Judul']; ?></h4>
                            <p class="card-text"><b>Penulis : </b><?php echo $value['Penulis']; ?></p>
                            <p class="card-text"><b>Penerbit : </b><?php echo $value['Penerbit']; ?></p>
                            <p class="card-text"><b>Tahun Terbit : </b><?php echo $value['Tahun_terbit']; ?></p>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    <?php }; ?>
</div>

<?php include "footer.php"; ?>