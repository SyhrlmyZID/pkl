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

    <form action="{{ route('data_penyedia.update', $data_penyedia->id) }}" method="POST">
        @csrf
        @method('PUT')
                        <div class="form-field">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan nama" value="{{ $data_penyedia->nama }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="form-field">
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" 
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        
                        <div class="form-field">
                            <label for="tempat_tanggal_lahir" class="block text-sm font-medium text-gray-700">Tempat Tanggal Lahir</label>
                            <input type="text" name="tempat_tanggal_lahir" placeholder="Masukkan tempat_tanggal_lahir" value="{{ $data_penyedia->tempat_tanggal_lahir }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="form-field">
                            <label for="nik" class="block text-sm font-medium text-gray-700">Nomor Induk</label>
                            <input type="number" name="nik" placeholder="Masukkan nik" value="{{ $data_penyedia->nik }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="form-field">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                            <input type="text" name="alamat" placeholder="Masukkan alamat" value="{{ $data_penyedia->alamat }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="form-field">
                            <label for="nama_perusahaan" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" placeholder="Masukkan nama_perusahaan" value="{{ $data_penyedia->nama_perusahaan }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="form-field">
                            <label for="alamat_perusahaan" class="block text-sm font-medium text-gray-700">Alamat Perusahaan</label>
                            <input type="text" name="alamat_perusahaan" placeholder="Masukkan alamat_perusahaan" value="{{ $data_penyedia->alamat_perusahaan }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="form-field">
                            <label for="no_hp" class="block text-sm font-medium text-gray-700">NO HP</label>
                            <input type="text" name="no_hp" placeholder="Masukkan no_hp" value="{{ $data_penyedia->no_hp }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="form-field">
                            <label for="npwp" class="block text-sm font-medium text-gray-700">NPWP</label>
                            <input type="text" name="npwp" placeholder="Masukkan npwp" value="{{ $data_penyedia->npwp }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="form-field">
                            <label for="nib" class="block text-sm font-medium text-gray-700">NIB</label>
                            <input type="number" name="nib" placeholder="Masukkan nib" value="{{ $data_penyedia->nib }}"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
