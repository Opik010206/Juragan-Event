@extends('layouts.main')

@section('container')
    <div class="container-fluid mt-4">
        <div class="row">
            {{-- Kategori --}}
            <div class="col-md-3" style="border-right: 1px solid;">
                <div class="content ms-4 ms-xl-5 my-4">
                    <a class="text-decoration-none text-dark mb-4" data-bs-toggle="collapse" href="#lokasi" role="button" aria-expanded="false" aria-controls="lokasi">
                        <div class="lokasi">
                            <h5>Lokasi</h5>
                        </div>
                    </a>
                    <div class="collapse mt-2 pt-1" id="lokasi">
                        <div class="search d-flex align-items-center position-relative mb-3">
                            <i class="bi bi-search position-absolute" style="right: 20px;"></i>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="isi ms-1">
                          <a href="event/detileEvent" class="text-decoration-none text-dark">Kota Bandung</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="content ms-4 ms-xl-5 my-4">
                    <a class="text-decoration-none text-dark mb-4" data-bs-toggle="collapse" href="#format" role="button" aria-expanded="false" aria-controls="format">
                        <div class="format">
                            <h5>Format</h5>
                        </div>
                    </a>
                    <div class="collapse mt-2 pt-1" id="format">
                        <div class="search d-flex align-items-center position-relative mb-3">
                            <i class="bi bi-search position-absolute" style="right: 20px;"></i>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="isi ms-1 d-flex flex-column">
                          <a href="#" class="text-decoration-none text-dark mb-2">Dewasa</a>
                          <a href="#" class="text-decoration-none text-dark mb-2">Anak-anak</a>
                        </div>
                    </div>
                </div>
                <div class="content ms-4 ms-xl-5 my-4">
                    <a class="text-decoration-none text-dark mb-4" data-bs-toggle="collapse" href="#topik" role="button" aria-expanded="false" aria-controls="topik">
                        <div class="topik">
                            <h5>Topik</h5>
                        </div>
                    </a>
                    <div class="collapse mt-2 pt-1" id="topik">
                        <div class="search d-flex align-items-center position-relative mb-3">
                            <i class="bi bi-search position-absolute" style="right: 20px;"></i>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="isi ms-1 d-flex flex-column">
                          <a href="#" class="text-decoration-none text-dark mb-2">Music</a>
                          <a href="#" class="text-decoration-none text-dark mb-2">Teknologi</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="content ms-4 ms-xl-5 my-4">
                    <a class="text-decoration-none text-dark mb-4" data-bs-toggle="collapse" href="#waktu" role="button" aria-expanded="false" aria-controls="waktu">
                        <div class="waktu">
                            <h5>Waktu</h5>
                        </div>
                    </a>
                    <div class="collapse mt-2 pt-1" id="waktu">
                        <div class="search d-flex align-items-center position-relative mb-3">
                            <i class="bi bi-search position-absolute" style="right: 20px;"></i>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="isi ms-1 d-flex flex-column">
                          <a href="#" class="text-decoration-none text-dark mb-2">Music</a>
                          <a href="#" class="text-decoration-none text-dark mb-2">Teknologi</a>
                        </div>
                    </div>
                </div>
                <div class="content ms-4 ms-xl-5 my-4">
                    <a class="text-decoration-none text-dark mb-4" data-bs-toggle="collapse" href="#harga" role="button" aria-expanded="false" aria-controls="harga">
                        <div class="harga">
                            <h5>Harga</h5>
                        </div>
                    </a>
                    <div class="collapse mt-2 pt-1" id="harga">
                        <div class="search d-flex align-items-center position-relative mb-3">
                            <i class="bi bi-search position-absolute" style="right: 20px;"></i>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="isi ms-1 d-flex flex-column">
                          <a href="#" class="text-decoration-none text-dark mb-2">Music</a>
                          <a href="#" class="text-decoration-none text-dark mb-2">Teknologi</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Event --}}
            <div class="col row row-cols-1 row-cols-md-2 row-cols-xl-3 text-center mt-3 mx-3 justify-content-center">
                <div class="col item rounded-4 mb-3" style="overflow: hidden;">
                  <div class="card h-100">
                    <a href="event/detileEvent">
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
                <div class="col item rounded-4 mb-3" style="overflow: hidden;">
                  <div class="card h-100">
                    <a href="event/detileEvent">
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
                <div class="col item rounded-4 mb-3" style="overflow: hidden;">
                  <div class="card h-100">
                    <a href="event/detileEvent">
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
                <div class="col item rounded-4 mb-3" style="overflow: hidden;">
                  <div class="card h-100">
                    <a href="event/detileEvent">
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
                <div class="col item rounded-4 mb-3" style="overflow: hidden;">
                  <div class="card h-100">
                    <a href="event/detileEvent">
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
                <div class="col item rounded-4 mb-3" style="overflow: hidden;">
                  <div class="card h-100">
                    <a href="event/detileEvent">
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        <a class="page-link border-danger text-danger" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link border-danger text-danger" href="#">1</a></li>
                      <li class="page-item"><a class="page-link bg-danger border-danger text-white" href="#">2</a></li>
                      <li class="page-item"><a class="page-link border-danger text-danger" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link border-danger text-danger" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection