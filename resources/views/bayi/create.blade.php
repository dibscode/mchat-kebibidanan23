<!DOCTYPE html>
<html>
<head>
    <title>Tambah Bayi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <form method="POST" action="{{ route('bayi.store') }}">
        @csrf
        <h3>Tambah Data Bayi</h3>
        <input type="text" name="nama_bayi" placeholder="Nama Bayi" class="form-control mb-2" required>
        <input type="text" name="nama_ibu" placeholder="Nama Ibu" class="form-control mb-2" required>
        <input type="text" name="nama_ayah" placeholder="Nama Ayah" class="form-control mb-2" required>
        <input type="text" name="alamat" placeholder="Alamat" class="form-control mb-2" required>
        <input type="date" name="tanggal_lahir" class="form-control mb-2" required>

        <h4>Kuisioner:</h4>
        @for($i = 1; $i <= 20; $i++)
        <label>Apakah bayi melakukan kegiatan {{ $i }}?</label><br>
        <input type="radio" name="jawaban_kuisioner[{{ $i }}]" value="ya" required> Ya
        <input type="radio" name="jawaban_kuisioner[{{ $i }}]" value="tidak" required> Tidak<br><br>
        @endfor
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
