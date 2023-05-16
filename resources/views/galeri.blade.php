@extends('layouts.main')

@section('container')
    <div class="imgBg w-100 position-relative d-flex align-items-center flex-direction-column text-center justify-content-center" style="overflow: hidden; height: 65vh; background: #000000; color: #ffffff;">
        <img src="image/img1.jpg" alt="..." class="d-block w-100" style="object-fit: cover; min-height: 100%; filter: opacity(50%);">
        <div class="container w-75 position-absolute ms-md-5">
            <h1>Galery Mengenai Event</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur doloremque ratione voluptate ipsam molestiae in adipisci mollitia deleniti inventore sed, veritatis ab consequuntur, quisquam ullam quasi, doloribus distinctio! Cumque, quod?</p>
        </div>
    </div>
    <div class="container py-5">
        <div class="judul text-center mx-auto" style="width: 85%;">
            <h3 class="fw-semibold mb-4">Orang Yang Telah Mencoba Di Beberapa Event</h3>
            <p class="my-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti sed fuga in. Libero asperiores minus totam quidem, ipsam aut quos culpa quaerat autem minima? Reiciendis unde perspiciatis dolores soluta fuga!</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 px-md-5 mx-lg-5 justify-content-center">
            <div class="col p-2">
                <div class="card">
                    <div class="img" style="height: 25rem;">
                        <a href="#">
                            <img src="image/img1.jpg" alt="..." class="card-img-top" style="min-height: 100%; object-fit: cover;">
                        </a>
                    </div>
                    {{-- <div class="img">
                    </div> --}}
                    <div class="card-body p-3">
                        <h5 class="fw-bolder">Paula Dhoba</h5 class="fw-bolder">
                        <p class="text-danger" style="font-size: .8rem">Lorem, ipsum dolor : <span class="text-dark">Lorem ipsum dolor...</span></p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="card">
                    <div class="img" style="height: 25rem;">
                        <a href="#">
                            <img src="image/img1.jpg" alt="..." class="card-img-top" style="min-height: 100%; object-fit: cover;">
                        </a>
                    </div>
                    {{-- <div class="img">
                    </div> --}}
                    <div class="card-body p-3">
                        <h5 class="fw-bolder">Paula Dhoba</h5 class="fw-bolder">
                        <p class="text-danger" style="font-size: .8rem">Lorem, ipsum dolor : <span class="text-dark">Lorem ipsum dolor...</span></p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="card">
                    <div class="img" style="height: 25rem;">
                        <a href="#">
                            <img src="image/img1.jpg" alt="..." class="card-img-top" style="min-height: 100%; object-fit: cover;">
                        </a>
                    </div>
                    {{-- <div class="img">
                    </div> --}}
                    <div class="card-body p-3">
                        <h5 class="fw-bolder">Paula Dhoba</h5 class="fw-bolder">
                        <p class="text-danger" style="font-size: .8rem">Lorem, ipsum dolor : <span class="text-dark">Lorem ipsum dolor...</span></p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="card">
                    <div class="img" style="height: 25rem;">
                        <a href="#">
                            <img src="image/img1.jpg" alt="..." class="card-img-top" style="min-height: 100%; object-fit: cover;">
                        </a>
                    </div>
                    {{-- <div class="img">
                    </div> --}}
                    <div class="card-body p-3">
                        <h5 class="fw-bolder">Paula Dhoba</h5 class="fw-bolder">
                        <p class="text-danger" style="font-size: .8rem">Lorem, ipsum dolor : <span class="text-dark">Lorem ipsum dolor...</span></p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="card">
                    <div class="img" style="height: 25rem;">
                        <a href="#">
                            <img src="image/img1.jpg" alt="..." class="card-img-top" style="min-height: 100%; object-fit: cover;">
                        </a>
                    </div>
                    {{-- <div class="img">
                    </div> --}}
                    <div class="card-body p-3">
                        <h5 class="fw-bolder">Paula Dhoba</h5 class="fw-bolder">
                        <p class="text-danger" style="font-size: .8rem">Lorem, ipsum dolor : <span class="text-dark">Lorem ipsum dolor...</span></p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="card">
                    <div class="img" style="height: 25rem;">
                        <a href="#">
                            <img src="image/img1.jpg" alt="..." class="card-img-top" style="min-height: 100%; object-fit: cover;">
                        </a>
                    </div>
                    {{-- <div class="img">
                    </div> --}}
                    <div class="card-body p-3">
                        <h5 class="fw-bolder">Paula Dhoba</h5 class="fw-bolder">
                        <p class="text-danger" style="font-size: .8rem">Lorem, ipsum dolor : <span class="text-dark">Lorem ipsum dolor...</span></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-outline-danger mt-5 mx-auto d-block">Selengkapnya...</button>
    </div>
@endsection