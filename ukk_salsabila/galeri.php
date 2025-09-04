<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>SMKN 4 TASIKMALAYA</title>
</head>

<body>
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
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="identitassekolah.html">Identitas Sekolah</a></li>
            <li><a class="dropdown-item" href="sejarah.html">Sejarah</a></li>
            <li><a class="dropdown-item" href="visi misi.html">Visi & Misi</a></li>
          </ul>
        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ekstrakulikuler.html">Ekstrakulikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>



            </div>
        </div>
    </nav>
    <!-- TUTUP NAV -->
     <div class="container">
        <!-- SELECTION GALERI -->
         <?php 
              $galeri = [
                  'foto.jpg',
                  'guru.jpg'
              ];
              $i = 0;
        ?>
        <div class="row text-center">
            <div class="col-lg-12">
                <h2>galeri</h2>
                <div class="row">
                    <?php while ($i < count($galeri)): ?>
                    <div class="col-lg-3">
                        <div class="">
                            <div class="header">

                                <img src="<?=$galeri[$i]?>" alt=""width="300"height="200">
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                    <?php endwhile; ?>

                    
                </div>
                
                    <!-- TUTUP SECTION GALERI -->
          </div>
        </div>
            </body>
            </html>