<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel</title>


   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- link font awesome cdn   -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
      @auth
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat datang  {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        @can('superadmin')
                        {{-- <li><a class="dropdown-item" href="{{ route('dashboardsuperadmin') }}">Dashboard</a></li> --}}
                        @elsecan('user')
                        <li><a class="dropdown-item" href="{{ route('transaksiuser') }}">transaksi</a></li>
                        @elsecan('admin')
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">transaksi</a></li>
                        @endcan



                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form></li>
                    </ul>
                    @else
                    {{-- <a href="{{ route('login') }}" class="btn rounded d-flex justify-content-center mx-auto text-white ml-2">Get started</a> --}}

                @endauth
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
               <a href="#" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background-image: url('/asset/image/gambar 11.jpg');">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>KOTA JAKARTA, INDONESIA</h3>
               <a href="#" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background-image: url('/asset/image/gambar 12.jpg');">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>MANADO, SULAWESI UTARA</h3>
               <a href="#" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background-image: url('/asset/image/gambar 4.jpg');">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>PULAU NIAS, SUMATERA UTARA</h3>
               <a href="#" class="btn">Petualangan Berikutnya</a>
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
@foreach ($datas  as $key)


      <div class="box">
         <div class="image">
            <img src="{{asset('asset/image/gambar 1.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>{{ $key->title }}</h3>
            <p>Harga: Rp. {{ $key->price }}</p>
            @auth
            <a id="pesan"  data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-user_id="{{ Auth::id() }}"
                            data-travel_package_id="{{ $key->id  }}"


                            class="btn"><i class="lni lni-cart"></i>
                            Add to Cart
                          </a>

                          
            {{-- <form action="{{ route('tambah' , Auth::user()->id) }}" method="POST">


                <input type="hidden" name="travel_package_id" value="{{ $key->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <button type="submit"class="btn" >Pesan sekarang</button>
            </form> --}}
            {{-- <a href="{{ route('tambah' , Auth::user()->id) }}" class="btn">Pesan Sekarang</a>         --}}
            @endauth

         </div>
      </div>
      @endforeach

      {{-- <div class="box">
         <div class="image">
            <img src="{{asset('asset/image/gambar 14.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sumba, NTT</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="#" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="{{asset('asset/image/gambar 2.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Bunaken, Sulawesi Utara</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="#" class="btn">Pesan Sekarang</a>
         </div>
      </div> --}}

   </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          @if ($user)
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
@auth


         <form action="{{ route('tambah2', Auth::user()->id) }}" method="POST" >
            @endauth
          @csrf
          <input type="hidden" id="user_id" name="user_id" value="">

          <input type="hidden" id="travel_package_id" name="travel_package_id" value="">
          <div class="row mb-3">
            <div class="col-md-12 mt-2">
            <label for="exampleFormControlInput1" class="form-label">Addtional Visa</label>

              <input type="text" class="form-control" id="basic-default-name" name="addtional_visa" placeholder="" value="{{ old('addtional_visa') }}" />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-12 mt-2">
            <label for="exampleFormControlInput1" class="form-label">Transaksi Total</label>

              <input type="number" class="form-control" id="basic-default-name" name="total_transaksi" value="" />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-12 mt-2">
            <label for="exampleFormControlInput1" class="form-label">qty</label>

              <input type="number" class="form-control" id="basic-default-name" name="qty" value="" />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-12 mt-2">
            <label for="exampleFormControlInput1" class="form-label">Status</label>

            <select class="form-select" id="exampleFormControlSelect1" name="status_transaksi" aria-label="Default select example">

              <option id="1" value="tersedia">Tersedia</option>




            </select>
            </div>
          </div>






      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Pesan</button>
      </form>
      @else
      <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <h2>Silahkan login atau register terlebih dahulu!</h2>



         @endif
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
      <a href="#" class="btn">Pesan Sekarang</a>
   </div>
</section>

<!-- Mulai  Footer -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Link Utama</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Perjalanan</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Paket</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Pesan</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Akun</a>
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

   <div class="credit"> Copyright <span>Travel LSP </span> 2023 </div>

</section>

<script>

    $(document).ready(function(){
           $(document).on('click', '#pesan', function () {
            var user_id = $(this).data('user_id');
         var travel_package_id = $(this).data('travel_package_id');



         $('#user_id').attr('value',user_id);
         $('#travel_package_id').attr('value',travel_package_id );



      });
    });
  </script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
