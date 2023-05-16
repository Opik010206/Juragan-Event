@extends('layouts.main')

@section('style')
    <style>
        .carousel-inner{
            width: 400px;
        }
    </style>
@endsection

@section('container')
    {{-- Artikel Populer --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-7">
                <h2 class="mb-4 border-danger" style="border-left: 3px solid;">&nbsp;Artikel Populer</h2>
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="image/img1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%; object-fit: cover;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                          <div class="footer d-flex justify-content-between">
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="image/img1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%; object-fit: cover;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                          <div class="footer d-flex justify-content-between">
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="image/img1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%; object-fit: cover;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This content is a little bit longer. </p>
                          <div class="footer d-flex justify-content-between">
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h2 class="mb-4 border-danger" style="border-left: 3px solid;">&nbsp;Artikel Pilihan</h2>
                <div class="card mb-3 shadow-sm">
                    <img src="image/img2.jpg" class="card-img-top" alt="" style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="footer d-flex justify-content-between">
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                      </div>
                    </div>
                </div>
                <div class="card mb-3 shadow-sm">
                    <img src="image/img2.jpg" class="card-img-top" alt="" style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="footer d-flex justify-content-between">
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Embed Youtube --}}
    <div class="container mt-4">
        <div class="row">
            <h2 class="mb-4 border-danger" style="border-left: 3px solid;">&nbsp;Video</h2>
            <div class="col-md-7">
                <iframe class="rounded-4" width="100%" height="315" src="https://www.youtube.com/embed/eUAd5f936Yg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p class="my-xl-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis velit id molestias amet nesciunt autem doloribus blanditiis laboriosam voluptas, ratione a corporis. Facere omnis inventore eaque quibusdam eligendi deleniti ducimus veritatis aperiam eos libero?</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Artikel Lainnya --}}
    <div class="container mt-5">
        <h2 class="mb-4 border-danger" style="border-left: 3px solid;">&nbsp;Artikel Lainnya</h2>
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="image/img1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%; object-fit: cover;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                          <div class="footer d-flex justify-content-between">
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="image/img1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%; object-fit: cover;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                          <div class="footer d-flex justify-content-between">
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="image/img1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%; object-fit: cover;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                          <div class="footer d-flex justify-content-between">
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="image/img1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%; object-fit: cover;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                          <div class="footer d-flex justify-content-between">
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <p class="card-text fs-5"><small class="text-muted"><i class="bi bi-share-fill"></i></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-danger mt-5 mx-auto">Selengkapnya...</button>
        </div>
    </div>
@endsection