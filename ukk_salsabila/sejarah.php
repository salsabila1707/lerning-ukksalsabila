<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
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
    <!-- TUTUP NAV -->
     <div class="container-fluid banner">
    </div>
    <div class="container-fluid Profil pt-5 pb-5">
  <div class="container text-center">
    <img src="sejarah.png" alt="sejarah sekolah" width="200" height="200"
          class="shadow-lg" 
          style="border-radius: 50%; object-fit: cover;">
          <div class="container">
            <br><br>
            <h2 id="Profil Sekolah">Sejarah SMK Negeri 4</h2>
            <p style="text-align: justify">                   
                Sejalan dengan Program Pemerintah dibidang pendidikan Menengah Kejuruan pada saat itu yakni pemerataan akses ditambah pula 
                dengan banyaknya keinginan masyarakat yang mengharapkan adanya SMK Negeri di daerah Kecamatan Purbaratu Kota  Tasikmalaya, 
                terutama untuk menampung tamatan dari SLTP yang ingin melanjutkan ke SMK maka beberapa tokoh masyarakat, unsur pejabat 
                pemerintah di Kecamatan Purbaratu Kota Tasikmalaya mengusulkan kepada pemerintah Kota Tasikmalaya dan Pemerintah 
                Provinsi Jawa Barat, agar berdirinya SMK Negeri di Kecamatan Purbaratu Kota Tasikmalaya.
                <br><br>
                Setelah melalui perjuangan yang sangat panjang dari berbagai pihak khususnya Disdik Kota Tasikmalaya dan pihak-pihak terkait lainnya 
                sesuai prosedur dan ketentuan yang berlaku pada waktu itu dengan mengucapkan syukur Alhamdulillah akhirnya pada tahun pelajaran 2010/2011 
                SMK Negeri 4 Tasikmalaya mulai berdiri, pada awalnya membuka Kompetensi Keahlian Teknik Komputer dan Jaringan dengan pendaftar peserta Didik Baru 
                pada waktu itu berjumlah 44 orang. Pada awalnya tempat belajar menumpang di SMP Negeri 17 Kota Tasikmalaya, dan sekolah induknya adalah SMK Negeri 2 Kota Tasikmalaya, 
                Untuk Tenaga pendidik dan Tenaga Kependidikan masih dibantu sepenuhnya oleh kedua sekolah tersebut.
            </p>
          </div>
  </div>
</div>

<!-- TUTUP SECTION SEJARAH -->

    <!--Footer-->
    <footer class="bg-secondary text-light pt-5 pb-3">
    <div class="container">
      <div class="row">
  
      <!-- Alamat Sekolah -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Alamat Sekolah</h5>
          <address class="mb-2">
            SMK Negeri 4 Tasikmalaya<br>
            Jl. Depok, Sukamenak,<br>
            Purbaratu, Kota Tasikmalaya,<br>
            Jawa Barat 46196<br>
            <abbr title="Telepon">Tel:</abbr> (0265) 123456
          </address>
          <a href="https://www.google.com/maps/search/?api=1&query=SMKN+4+Tasikmalaya"
              target="_blank" rel="noopener"
              class="btn btn-sm btn-outline-light">
            Lihat di Google Maps
          </a>
        </div>

        <!-- Peta Google Maps -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Lokasi Kami</h5>
          <div class="ratio ratio-4x3">
            <iframe
              src="https://www.google.com/maps?q=SMKN%204%20Tasikmalaya&output=embed"
              style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

        <!-- SNS (Social Media) -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Ikuti Kami</h5>
          <ul class="list-unstyled d-flex gap-3">
            <li><a href="https://facebook.com/" target="_blank" rel="noopener" class="text-light">
              <i class="bi bi-facebook fs-4"></i>
            </a></li>
            <li><a href="https://instagram.com/" target="_blank" rel="noopener" class="text-light">
              <i class="bi bi-instagram fs-4"></i>
            </a></li>
            <li><a href="https://twitter.com/" target="_blank" rel="noopener" class="text-light">
              <i class="bi bi-twitter fs-4"></i>
            </a></li>
            <li><a href="https://youtube.com/" target="_blank" rel="noopener" class="text-light">
              <i class="bi bi-youtube fs-4"></i>
            </a></li>
          </ul>
        </div>

        <!-- Link Eksternal -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Tautan Eksternal</h5>
          <ul class="list-unstyled">
            <li><a href="https://smkn4-tsm.sch.id" target="_blank" rel="noopener" class="text-light text-decoration-none">Website Resmi</a></li>
            <li><a href="https://www.kemdikbud.go.id" target="_blank" rel="noopener" class="text-light text-decoration-none">Kemdikbud</a></li>
            <li><a href="https://disdik.jabarprov.go.id" target="_blank" rel="noopener" class="text-light text-decoration-none">Disdik Jawa Barat</a></li>
          </ul>
        </div>
      </div>
      <hr class="border-light">
  
      <!-- Copyright -->
      <div class="text-center">
        <small>&copy; 2025 All rights reserved. Salsabila Sundarmi</small>
      </div>
    </div>
  </footer>

  <!--ikon SNS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!--TUTUP-->
      </div>
    </div>
  </div>
</body>
</html>