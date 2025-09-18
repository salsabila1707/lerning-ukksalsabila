<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SMKN 4 TASIKMALAYA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>


<body style="background-color: whitesmoke;">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" ><img src="logo4-removebg-preview.png" width="10%" heigt="...">SMKN 4 TASIKMALAYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="identitassekolah.php">Identitas Sekolah</a></li>
            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
            <li><a class="dropdown-item" href="visi misi.php">Visi & Misi</a></li>
          </ul>
        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ekstrakulikuler.php">Ekstrakulikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>



            </div>
        </div>
    </nav>

    <?php include 'navbar.php'; ?>

    <!-- SECTION ESKUL -->
    <section>
        <div class="container-fluid pt-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <h3 class="mb-0">Ekstrakurrikuler</h3>
                        <h3 class="text-primary ">Siswa</h3>
                        <div class="row">
                            <?php
                            $eskul = [
                                ["nama" => "PASKIBRA", "gambar" => "paskibra.png"],
                                ["nama" => "PMR", "gambar" => "pmr.png"],
                                ["nama" => "FUTSAL", "gambar" => "futsal.png"],
                                ["nama" => "PKS", "gambar" => "pks.png"],
                                ["nama" => "BULUTANGKIS", "gambar" => "bulutangkis.png"],
                                ["nama" => "IRMA", "gambar" => "irma.png"],
                                ["nama" => "IT CLUB", "gambar" => "it.png"],
                                ["nama" => "ENGLISH CLUB", "gambar" => "english.png"],
                                
                            ];

                            foreach ($eskul as $item) { ?>
                                <div class="col-lg-3  ">
                                    <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                        <img src="<?= $item['gambar']; ?>" alt="" width="150" height="150">
                                        <div class="card-body  border-0">
                                            <h4><?= $item['nama']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TUTUP SECTION ESKUL -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>


</body>

</html