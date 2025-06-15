@extends('layout')

@section('content')
    <div class="text-center py-5" style="background: linear-gradient(to right, #e3f2fd, #ffffff); border-radius: 12px;">
        <img src="{{ asset('images/logo-rexus@2x.jpg') }}" alt="Logo Rexus" width="120" class="mb-3">
        <h1 class="fw-bold">Selamat Datang di Rexus</h1>
        <p class="lead">Brand elektronik dan gaming yang berkomitmen menghadirkan inovasi dan kualitas terbaik untuk generasi digital.</p>
        <a href="/produk" class="btn btn-primary mt-3">Lihat Produk Kami</a>
    </div>

    <div class="mt-5">
        <h2 class="text-center mb-4">Mengapa Memilih Rexus?</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Kualitas" width="60" class="mb-2">
                <h5>Kualitas Terbaik</h5>
                <p>Produk kami dirancang dengan teknologi tinggi dan bahan pilihan.</p>
            </div>
            <div class="col-md-4">
                <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" alt="Inovasi" width="60" class="mb-2">
                <h5>Inovasi Terkini</h5>
                <p>Selalu mengikuti perkembangan teknologi terbaru di dunia elektronik dan gaming.</p>
            </div>
            <div class="col-md-4">
                <img src="https://cdn-icons-png.flaticon.com/512/3524/3524342.png" alt="Layanan" width="60" class="mb-2">
                <h5>Layanan Profesional</h5>
                <p>Dukungan pelanggan yang ramah dan cepat tanggap.</p>
            </div>
        </div>
    </div>
@endsection
