<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>RentCar - Studio Fikar</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{ asset('assets1/img/logo.png')}}" rel="icon">
  <link href="{{ asset('assets1/img/logo.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="d-none d-md-flex align-items-center">
          <i class="bi bi-clock me-1"></i> Senin - Minggu, 8AM to 10PM
        </div>
        <div class="d-flex align-items-center">
          <i class="bi bi-phone me-1"></i> WhatsApp Now +62 898 7505 441
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-end">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <img src="{{ asset('assets/img/logo2.png')}}" alt="">
    
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="#hero" class="active">Home</a></li>
              <li><a href="#about">Tentang Kami</a></li>
              <li><a href="#services">Layanan</a></li>
              <li><a href="#dashboardmobil">Daftar Mobil</a></li>
              <li><a href="#contact">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
          
          <a class="cta-btn" href="{{ url('login') }}">Daftar Sekarang</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      
          <div class="carousel-item active">
            <img src="{{ asset('assets/img/hero-carousel/carousel1.png')}}" alt="">
            <div class="container">
              <h2>Selamat Datang di Rental Mobil Studio Fikar</h2>
              <p>Kami menyediakan berbagai pilihan mobil terbaik dengan harga terjangkau untuk kebutuhan perjalanan Anda.</p>
              <a href="#about" class="btn-get-started">Pelajari Lebih Lanjut</a>
            </div>
          </div><!-- End Carousel Item -->
      
          <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/carousel2.png')}}" alt="">
            <div class="container">
              <h2>Kenyamanan dan Keamanan</h2>
              <p>Kami memastikan Anda mendapatkan kenyamanan dan keamanan terbaik selama perjalanan Anda bersama kami.</p>
              <a href="#about" class="btn-get-started">Pelajari Lebih Lanjut</a>
            </div>
          </div><!-- End Carousel Item -->
      
          <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/carousel3.png')}}" alt="">
            <div class="container">
              <h2>Pelayanan Profesional</h2>
              <p>Tim kami siap melayani dengan sepenuh hati untuk memberikan pengalaman rental mobil yang memuaskan.</p>
              <a href="#about" class="btn-get-started">Pelajari Lebih Lanjut</a>
            </div>
          </div><!-- End Carousel Item -->
      
          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>
      
          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>
      
          <ol class="carousel-indicators"></ol>
      
        </div>
      
      </section><!-- /Hero Section -->
      

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
      <div class="container">
        <div class="row gy-4">
    
          <!-- Registrasi Pengguna -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-user icon"></i></div>
              <h4><a href="" class="stretched-link">Registrasi Pengguna</a></h4>
              <p>Pengguna dapat mendaftar dengan mengisi informasi pribadi, seperti nama, alamat, nomor telepon, dan nomor SIM. Informasi pengguna disimpan dan dapat diakses kembali.</p>
            </div>
          </div><!-- End Service Item -->
    
          <!-- Manajemen Mobil -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-car icon"></i></div>
              <h4><a href="" class="stretched-link">Manajemen Mobil</a></h4>
              <p>Pengguna dapat menambahkan mobil baru ke sistem, mencari berdasarkan merek atau model, serta melihat daftar mobil yang tersedia untuk disewa.</p>
            </div>
          </div><!-- End Service Item -->
    
          <!-- Peminjaman Mobil -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-calendar-alt icon"></i></div>
              <h4><a href="" class="stretched-link">Peminjaman Mobil</a></h4>
              <p>Pengguna dapat memesan mobil dengan memilih tanggal mulai dan selesai penyewaan. Sistem akan memverifikasi ketersediaan dan menyimpan data peminjaman.</p>
            </div>
          </div><!-- End Service Item -->
    
          <!-- Pengembalian Mobil -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-key icon"></i></div>
              <h4><a href="" class="stretched-link">Pengembalian Mobil</a></h4>
              <p>Pengguna dapat mengembalikan mobil yang telah disewa, dan sistem akan menghitung biaya sewa berdasarkan durasi dan tarif harian.</p>
            </div>
          </div><!-- End Service Item -->
    
        </div>
      </div>
    </section>
    <!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami<br></h2>
        <p>Kami adalah penyedia layanan rental mobil terpercaya yang selalu siap memenuhi kebutuhan transportasi Anda dengan berbagai pilihan kendaraan berkualitas.</p>
      </div><!-- End Section Title -->
    
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/hero-carousel/carousel4.png" class="img-fluid" alt="Rental Mobil Studio Fikar">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Rental Mobil - Studio Fikar</h3>
            <p class="fst-italic">
              Studio Fikar adalah perusahaan rental mobil yang berkomitmen untuk memberikan layanan terbaik bagi pelanggan. Kami menawarkan armada mobil yang terawat dengan baik dan siap digunakan kapan saja.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Pelayanan profesional dan ramah.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Pilihan mobil beragam sesuai kebutuhan Anda.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Harga sewa kompetitif dengan kualitas terjamin.</span></li>
            </ul>
            <p>
              Kami memahami pentingnya kenyamanan dan keamanan dalam perjalanan Anda. Oleh karena itu, setiap mobil yang kami sediakan selalu dalam kondisi prima, serta dilengkapi dengan layanan pemesanan yang mudah dan cepat. Studio Fikar siap menjadi mitra perjalanan Anda yang handal.
            </p>
          </div>
        </div>
      </div>
    
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pelayanan</h2>
        <p>Kami menyediakan berbagai layanan terbaik untuk memenuhi kebutuhan transportasi Anda. Berikut adalah beberapa layanan unggulan kami:</p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row gy-4">
    
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Sewa Mobil Harian</h3>
              </a>
              <p>Layanan sewa mobil dengan tarif harian yang fleksibel dan terjangkau, cocok untuk kebutuhan perjalanan singkat Anda.</p>
            </div>
          </div><!-- End Service Item -->
    
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-calendar-alt"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Sewa Mobil Mingguan</h3>
              </a>
              <p>Untuk kebutuhan transportasi lebih lama, kami menawarkan sewa mobil dengan paket mingguan yang hemat dan praktis.</p>
            </div>
          </div><!-- End Service Item -->
    
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-calendar-week"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Sewa Mobil Bulanan</h3>
              </a>
              <p>Layanan sewa mobil dengan kontrak bulanan untuk kebutuhan jangka panjang, dengan pilihan kendaraan terbaik dan harga bersaing.</p>
            </div>
          </div><!-- End Service Item -->
    
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-tools"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Perawatan dan Servis Berkala</h3>
              </a>
              <p>Semua mobil kami selalu dalam kondisi prima karena mendapatkan perawatan dan servis secara berkala, sehingga aman dan nyaman digunakan.</p>
            </div>
          </div><!-- End Service Item -->
    
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-route"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Layanan Antar Jemput</h3>
              </a>
              <p>Kami menyediakan layanan antar jemput mobil ke lokasi Anda untuk kenyamanan lebih saat memesan kendaraan.</p>
            </div>
          </div><!-- End Service Item -->
    
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-phone"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Layanan Bantuan 24 Jam</h3>
              </a>
              <p>Kami selalu siap membantu Anda dengan layanan bantuan 24 jam untuk situasi darurat atau kebutuhan mendesak terkait mobil yang disewa.</p>
            </div>
          </div><!-- End Service Item -->
    
        </div>
    
      </div>
    
    </section><!-- /Services Section -->

    <section id="dashboardmobil" class="dashboardmobil section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Mobil</h2>
        <div><span>Temukan berbagai pilihan mobil terbaik untuk kebutuhan perjalanan Anda. </span> 
        <span class="description-title">Pilih mobil sesuai dengan preferensi dan kenyamanan Anda.</span></div>
    </div>
    

      <div class="container">
  
        <div class="row">
            @foreach($dataMobil as $mobil)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="mobil-item">
                    <img src="{{ asset($mobil->gambar) }}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="category">{{ $mobil->status }}</p>
                            <p class="price">Rp {{ number_format($mobil->tarif_per_hari, 0, ',', '.') }} / hari</p>
                        </div>
                        <h3><a href="course-details.html">{{ $mobil->merek }}</a></h3>
                        <p class="description">{{ $mobil->model }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
  </section>
   

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami. Kami siap membantu Anda!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>JL. Keruk Barat XIV Blok J No.331, Kota Makassar, Sulawesi Selatan</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Nomor Whatsaap</h3>
                  <p>+62 898 7505 441</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>muhammaddzulfiqar11@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <iframe style="border:0; width: 100%; height: 370px;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3250.1975277982033!2d119.49813623229228!3d-5.1331394523150715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbtp%20blok%20j%20no.%20331!5e1!3m2!1sid!2sid!4v1730309447131!5m2!1sid!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Rental Mobil - Studio Fikar</span>
          </a>
          <div class="footer-contact pt-3">
            <p>JL. Keruk Barat XIV Blok J No.331</p>
            <p>Kota Makassar, Sulawesi Selatan</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 898 7505 441</span></p>
            <p><strong>Email:</strong> <span>muhammaddzulfiqar11@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links Penting</h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
          </ul>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><a href="#">Rental Mobil Harian</a></li>
            <li><a href="#">Rental Mobil Bulanan</a></li>
            <li><a href="#">Layanan Supir</a></li>
            <li><a href="#">Perawatan Kendaraan</a></li>
            <li><a href="#">Asuransi Kendaraan</a></li>
          </ul>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Paket Spesial</h4>
          <ul>
            <li><a href="#">Paket Pernikahan</a></li>
            <li><a href="#">Paket Wisata</a></li>
            <li><a href="#">Paket Perjalanan Bisnis</a></li>
            <li><a href="#">Paket Liburan Keluarga</a></li>
          </ul>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hubungi Kami</h4>
          <ul>
            <li><a href="#">Kontak Layanan</a></li>
            <li><a href="#">Pertanyaan Umum</a></li>
            <li><a href="#">Dukungan Teknis</a></li>
            <li><a href="#">Lokasi Kantor</a></li>
          </ul>
        </div>
  
      </div>
    </div>
  
  </footer>
  

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Muhammad Dzulfiqar Syaifullah</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>