<!DOCTYPE html>
<html>
<head>
    <title>Rexus Indonesia | Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('partials.navbar')

<div class="container mt-5">
    <h1 class="mb-4">Hubungi Rexus</h1>
    <p>Jika Anda memiliki pertanyaan seputar produk kami atau ingin menjadi reseller, silakan hubungi kami melalui form berikut:</p>
    <form>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" placeholder="nama@email.com">
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

</body>
</html>
