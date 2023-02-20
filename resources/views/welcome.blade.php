<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel</title>


   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- link font awesome cdn   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Mulai header  -->

<section class="header">

   <a href="home.html" class="logo">Travel</a>

   <nav class="navbar">
      <a href="#">Perjalanan</a>
      <a href="#">Paket</a>
      <a href="#">Tentang</a>
      <a href="{{ route('register') }}">Sign Up</a>
      <a href="{{ route('login') }}">Sign In</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Mulai home   -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background-image: url('/asset/image/gambar 10.jpg');">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>SURABAYA, JAWA TIMUR</h3>
               <a href="package.html" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background-image: url('/asset/image/gambar 11.jpg');">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>KOTA JAKARTA, INDONESIA</h3>
               <a href="package.html" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background-image: url('/asset/image/gambar 12.jpg');">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>MANADO, SULAWESI UTARA</h3>
               <a href="package.html" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background-image: url('/asset/image/gambar 4.jpg');">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>PULAU NIAS, SUMATERA UTARA</h3>
               <a href="package.html" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!--Mulai home packages  -->

<section class="home-packages">

   <h1 class="heading-title"> PESONA INDONESIA</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="{{asset('asset/image/gambar 1.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Raja Ampat Papua</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.html" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="{{asset('asset/image/gambar 14.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sumba, NTT</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.html" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="{{asset('asset/image/gambar 2.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Bunaken, Sulawesi Utara</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.html" class="btn">Pesan Sekarang</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.html" class="btn">Lihat Berikutnya</a> </div>

</section>

<!--  Mulai home  -->

<section class="home-offer">
   <div class="content">
      <h3>Tunggu Apalagi</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.html" class="btn">Pesan Sekarang</a>
   </div>
</section>

<!-- Mulai  Footer -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Link Utama</h3>
         <a href="about.html"> <i class="fas fa-angle-right"></i> Perjalanan</a>
         <a href="package.html"> <i class="fas fa-angle-right"></i> Paket</a>
         <a href="book.html"> <i class="fas fa-angle-right"></i> Pesan</a>
         <a href="book.html"> <i class="fas fa-angle-right"></i> Akun</a>
      </div>

      <div class="box">
         <h3>Link Tambahan</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Semua Pertanyaan</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>Info Kontak</h3>
         <a href="#"> <i class="fas fa-phone"></i> +62811112225</a>
         <a href="#"> <i class="fas fa-phone"></i> +62851111222 </a>
         <a href="#"> <i class="fas fa-envelope"></i> travellsp@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Jakarta, Indonesia</a>
      </div>

      <div class="box">
         <h3>Follow Kami</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> Copyright <span>Travel LSP </span> 2022 </div>

</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="script.js"></script>

</body>
</html>
