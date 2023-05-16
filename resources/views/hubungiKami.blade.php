@extends('layouts.main')

@section('container')
    <div class="container-fluid w-100 position-relative d-flex align-items-center flex-direction-column" style="overflow: hidden; height: 40vh;">
        <div class="container position-absolute ms-5">
            <h1>Tentang Kami</h1>
            <p class="w-75">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur doloremque ratione voluptate ipsam molestiae in adipisci.</p>
        </div>
    </div>
    <hr>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md">
                <a href="#">
                    <iframe class="rounded-3 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6162646386842!2d107.13829060915481!3d-6.816439793152757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b30a0f300d2b%3A0x6c643e4b3e1f37a0!2sMadtive%20Studio!5e0!3m2!1sen!2sid!4v1683705157870!5m2!1sen!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </a>
                <ul class="list-group mb-3" style="list-style: none;">
                    <a href="#" class="text-decoration-none list-group-item"><li><i class="bi bi-geo-alt-fill"></i> Cianjur, Jl.Panembong</li></a>
                    <a href="#" class="text-decoration-none list-group-item"><li><i class="bi bi-envelope-fill"></i> madtivestudio@gmail.com</li></a>
                    <a href="#" class="text-decoration-none list-group-item"><li><i class="bi bi-telephone-fill"></i> +62-8501-8997-898</li></a>
                </ul>
            </div>
            <div class="col-md">
                <form action="">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama saya Budi">
                            </div>
                            <div class="col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Berikan Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="pesan saya"></textarea>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-danger px-5">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection