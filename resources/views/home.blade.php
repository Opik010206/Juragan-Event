@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css\home.css">
@endsection

@section('carousel')
  {{-- Carousel Slider --}}
  <div class="carousel slide carousel-fade hero" id="carouselExampleIndicators" data-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image\img1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-container container text-center px-5">
          <h1 class="fw-bold">Judul KeSatu</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ducimus explicabo aperiam asperiores minima, sed repudiandae at delectus.</p>
          <a href="#" class="btn btn-lg btn-danger">
            Lihat Event
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image\img2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-container container text-center px-5">
          <h1 class="fw-bold">Judul Kedua</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ducimus explicabo aperiam asperiores minima, sed repudiandae at delectus.</p>
          <a href="#" class="btn btn-lg btn-danger">
            Lihat Event
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image\img3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-container container text-center px-5">
          <h1 class="fw-bold">Lorem, ipsum.</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ducimus explicabo aperiam asperiores minima, sed repudiandae at delectus.</p>
          <a href="#" class="btn btn-lg btn-danger">
            Lihat Event
          </a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  {{-- Mitra Juragan --}}
  <div class="content bg-danger w-100 py-5">
    <div class="container text-center text-white">
      <div class="row owl-carousel owl-theme" id="mitra">
        <div class="col mitra item">
          <a href="#">
            <img src="image/img1.jpg" alt="img1">
          </a>
          <p>JokoPlintir</p>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('container')
  {{-- Kategori Pilihan --}}
  <div class="container mt-4 bg-danger text-white rounded-4 py-4 px-5 kategoriPilihan">
    <h3>Kategori Pilihan</h3>
    <div class="row boxImg">
      <div id="image-category" class="col kategoriImg mt-2 owl-carousel owl-theme">
        <div class="item position-relative d-flex justify-content-center text-center">
          <a href="#">
            <img src="image\img1.jpg" alt="img1" class="d-blok">
          </a>
          <p class="position-absolute">Nobar Drama</p>
        </div>
        <div class="item position-relative d-flex justify-content-center text-center">
          <a href="#">
            <img src="image\img2.jpg" alt="img1" class="d-blok">
          </a>
          <p class="position-absolute">Nobar Drama</p>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col mt-2 owl-carousel owl-theme" id="category">
        <div class="item">
          <a href="#" class="btn btn-outline-light rounded-2 d-flex align-items-center py-1 px-2 kategori" style="width: 99%;">
            <i class="bi bi-person-circle me-2 fs-4"></i>
            <span>Web Design, Design Art</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- List Event Terdekat --}}
  <div class="container mt-5">
    <div class="judul d-flex justify-content-between">
      <h3 class="fw-bold">Event Di <span><a href="#" class="text-danger text-decoration-none">Minggu Ini</a></span></h3>
      <a href="#" class="text-danger text-decoration-none">Lihat Semua</a>
    </div>
    <div class="row text-center mt-3 owl-carousel owl-theme evenTerdekat" id="evenTerdekat">
      <div class="col item rounded-4" style="overflow: hidden;">
        <div class="card h-100">
          <a href="#">
            <img src="image/img2.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body bg-danger text-white">
            <h5 class="card-title">The Over Festival 2023</h5>
            <p class="card-text">13 - 14 May 2023</p>
            <h6>Rp.234.000</h6>
          </div>
          <div class="card-footer bg-danger text-white profile" style="cursor: pointer;">
            <i class="bi bi-person-circle me-2 fs-7"><span class="fw-lighter" style="font-style: normal"> Lorem, ipsum.</span></i>
          </div>
        </div>
      </div>
      <div class="col item rounded-4" style="overflow: hidden;">
        <div class="card h-100">
          <a href="#">
            <img src="image/img3.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body bg-danger text-white">
            <h5 class="card-title">The Over Festival 2023</h5>
            <p class="card-text">13 - 14 May 2023</p>
            <h6>Rp.234.000</h6>
          </div>
          <div class="card-footer bg-danger text-white profile" style="cursor: pointer;">
            <i class="bi bi-person-circle me-2 fs-7"><span class="fw-lighter" style="font-style: normal"> Lorem, ipsum.</span></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Slider Image --}}
  <div class="container mt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide rounded-5" data-bs-ride="carousel" style="overflow: hidden; height: 22rem">
      <div class="carousel-inner imgSlider">
        <div class="carousel-item active" data-bs-interval="6000">
          <a href="#">
            <img src="image/img1.jpg" class="d-block w-100" alt="image Slider">
          </a>
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <a href="#">
            <img src="image/img2.jpg" class="d-block w-100" alt="image Slider">
          </a>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <a href="#">
            <img src="image/img3.jpg" class="d-block w-100" alt="image Slider">
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Berita Dan Blog --}}
  <div class="container mt-5">
    <div class="judul d-flex justify-content-between">
      <h3 class="fw-bold">Berita Dan Blog</h3>
      <a href="#" class="text-danger text-decoration-none">Lihat Semua</a>
    </div>
    <div class="row mt-3 owl-carousel owl-theme blog" id="blog">
      <div class="col item rounded-4 shadow-sm" style="overflow: hidden;">
        <a href="#">
          <img src="image/img2.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body bg-light text-danger p-3">
          <h5 class="card-title fw-bolder">Contoh Hybrid Event Yang Bisa Menginspirasi Event Kamu</h5>
          <p class="card-text text-dark fs-7 mt-3">Waktunya kamu bikin event dengan terobosan baru, hybrid event! Event hybrid adalah event yang menghubungkan antara dimensi satu dengan dimensi lainnya...</p>
        </div>
      </div>
      <div class="col item rounded-4 shadow-sm" style="overflow: hidden;">
        <a href="#">
          <img src="image/img3.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body bg-light text-danger p-3">
          <h5 class="card-title fw-bolder">Contoh Hybrid Event Yang Bisa Menginspirasi Event Kamu</h5>
          <p class="card-text text-dark fs-7 mt-3">Waktunya kamu bikin event dengan terobosan baru, hybrid event! Event hybrid adalah event yang menghubungkan antara dimensi satu dengan dimensi lainnya...</p>
        </div>
      </div>
      <div class="col item rounded-4 shadow-sm" style="overflow: hidden;">
        <a href="#">
          <img src="image/img1.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body bg-light text-danger p-3">
          <h5 class="card-title fw-bolder">Contoh Hybrid Event Yang Bisa Menginspirasi Event Kamu</h5>
          <p class="card-text text-dark fs-7 mt-3">Waktunya kamu bikin event dengan terobosan baru, hybrid event! Event hybrid adalah event yang menghubungkan antara dimensi satu dengan dimensi lainnya...</p>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')

  {{-- Jquery cdn --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  {{-- Owl Carousel Min .js --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    $('#mitra').owlCarousel({
        margin:70,
        loop:true,
        autoWidth:true,
        items:5
    });

    $('#image-category').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
    $('#category').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    $('#evenTerdekat').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $('#blog').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
  </script>

@endsection