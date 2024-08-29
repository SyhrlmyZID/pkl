<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pengumuman</title>
  <style>
    /* Reset some default browser styles */
body, h1, ul, li {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic styling for the body */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f9f9f9;
    color: #333;
    padding: 20px;
}

/* Container styling */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Heading styling */
h1 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #333;
}

/* Alert box styling */
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.alert ul {
    list-style-type: none;
}

.alert li {
    margin-bottom: 5px;
}

/* Form styling */
form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-bottom: 20px;
}

/* Form field styling */
.form-field {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

label {
    font-size: 0.875rem;
    font-weight: 500;
    color: #333;
}

input[type="text"],
input[type="number"],
select {
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 0.875rem;
    color: #333;
}

input[type="text"]:focus,
input[type="number"]:focus,
select:focus {
    border-color: #007bff;
    outline: none;
}

/* Button styling */
button {
    grid-column: span 2; /* Make the button span both columns */
    padding: 10px 15px;
    font-size: 1rem;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    align-self: end; /* Align button to the bottom of the form */
}

button:hover {
    background-color: #0056b3;
}

  </style>
</head>
<body>
<div class="container">
    <h1>Edit Pengumuman</h1>

    @if ($errors->any())
        <div class="alert">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('data_aparat.update', $data_aparat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-field">
            <label for="edit_nama">Nama</label>
            <input type="text" id="edit_nama" name="nama" value="{{ $data_aparat->nama }}" placeholder="Masukkan Nama">
        </div>

        <div class="form-field">
            <label for="edit_jenis_kelamin">Jenis Kelamin</label>
            <select id="edit_jenis_kelamin" name="jenis_kelamin">
                <option value="" disabled>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-field">
            <label for="edit_tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
            <input type="text" id="edit_tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="{{ $data_aparat->tempat_tanggal_lahir }}"placeholder="Masukkan Tempat Tanggal Lahir">
        </div>

        <div class="form-field">
            <label for="edit_nik">NIK Induk</label>
            <input type="number" id="edit_nik" name="nik" value="{{ $data_aparat->nik }}" placeholder="Masukkan NIK">
        </div>

        <div class="form-field">
            <label for="edit_alamat">Alamat Lengkap</label>
            <input type="text" id="edit_alamat" name="alamat" value="{{ $data_aparat->alamat }}"placeholder="Masukkan Alamat Lengkap">
        </div>

        <div class="form-field">
            <label for="edit_npwp">NPWP</label>
            <input type="text" id="edit_npwp" name="npwp" value="{{ $data_aparat->npwp }}" placeholder="Masukkan NPWP">
        </div>

        <div class="form-field">
            <label for="edit_no_hp">No. Hp</label>
            <input type="text" id="edit_no_hp" name="no_hp" value="{{ $data_aparat->no_hp }}"placeholder="Masukkan Nomor Hp">
        </div>

        <div class="form-field">
            <label for="edit_jabatan">Jabatan</label>
            <select id="edit_jabatan" name="jabatan">
                <option value="" disabled>Pilih Jabatan</option>
                <option value="Kepala Desa">Kepala Desa</option>
                <option value="Sekretaris Desa">Sekretaris Desa</option>
                <option value="Kepala Urusan Tata Usaha Dan Umum">Kepala Urusan Tata Usaha Dan Umum</option>
                <option value="Kepala Urusan Keuangan">Kepala Urusan Keuangan</option>
                <option value="Kepala Urusan Perencanaan">Kepala Urusan Perencanaan</option>
                <option value="Kepala Seleksi Pemerintahan">Kepala Seleksi Pemerintahan</option>
                <option value="Kepala Seleksi Kesejahtraan">Kepala Seleksi Kesejahtraan</option>
                <option value="Kepala Seleksi Pelayanan">Kepala Seleksi Pelayanan</option>
                <option value="Kepala Dusun 1">Kepala Dusun 1</option>
                <option value="Kepala Dusun 2">Kepala Dusun 2</option>
                <option value="Kepala Dusun 3">Kepala Dusun 3</option>
                <option value="Operator Umum Desa">Operator Umum Desa</option>
            </select>
        </div>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
