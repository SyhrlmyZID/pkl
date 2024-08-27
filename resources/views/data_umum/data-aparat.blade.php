@extends('layouts.app')
@section('content')
<!-- Main Content -->
    <main id="mainContent">

        <!-- Card 1 -->
        <div class="w-full max-w-8xl py-1 bg-white shadow-lg rounded-lg overflow-hidden mx-auto mt-10">

            <!-- Table Data Aparatur -->
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Data Aparatur Desa</h2>


                        <!-- Tambah Data -->
                        <button type="button"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            data-bs-toggle="modal" data-bs-target="#staticModal">
                            Tambah Data
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        
                        <table
                            class="min-w-full text-left text-sm text-gray-500 dark:text-gray-400 border-separate border-spacing-0 border border-gray-200 dark:border-gray-700">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">No
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                                        Jenis Kelamin</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">TTL
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                                        Nomor Induk</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                                        Alamat Lengkap</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">NPWP
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">No.
                                        Hp</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                                        Jabatan</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center border-b border-gray-200 dark:border-gray-700">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_aparat as $data )
                                <tr
                                    class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data ->id }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data -> nama}}</td>
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data -> jenis_kelamin}}</td>
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data -> tempat_tanggal_lahir}}</td>
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data -> nik}}</td>
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data -> alamat}}</td>
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data -> npwp}}</td>
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data -> no_hp}}</td>
                                    <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">{{$data -> jabatan}}</td>
                                    <td class="px-6 py-4 text-center border-b border-gray-200 dark:border-gray-700"
                                        style="display: flex; justify-content: space-between;">
                                        <a href="#"
                                            class="mx-2 text-blue-600 dark:text-blue-500 hover:text-blue-700 dark:hover:text-blue-400"
                                            title="Edit Data">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('data_aparat.edit', $data->id) }}" 
       class="mx-2 text-yellow-600 dark:text-yellow-500 hover:text-yellow-700 dark:hover:text-yellow-400"
       title="Edit Data">
       <i class="fas fa-edit"></i>
    </a>
                                        <a href="#"
                                            class="text-red-600 dark:text-red-500 hover:text-red-700 dark:hover:text-red-400"
                                            title="Delete Data" data-modal-target="popup-modal"
                                            data-modal-toggle="popup-modal">
                                            <i class="fas fa-trash"></i>
                                        </a>;
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
            <!-- End | Table Data Aparatur -->


<!-- Modal Tambah Data Aparatur -->
<div class="modal fade" id="staticModal" tabindex="-1" aria-labelledby="staticModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-white shadow-2xl rounded-xl">
            <div class="modal-header border-b border-gray-200 py-4 px-6">
                <h5 class="modal-title text-2xl font-bold text-gray-800" id="staticModalLabel">Tambah Data Aparat</h5>
                <button type="button" class="btn-close text-gray-400 hover:text-gray-600" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-6">
            <form action="{{ route('data_aparat.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Nama -->
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Jenis Kelamin -->
                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <!-- Tempat Tanggal Lahir -->
                        <div>
                            <label for="tempat_tanggal_lahir" class="block text-sm font-medium text-gray-700">Tempat Tanggal Lahir</label>
                            <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir"
                                placeholder="Masukkan Tempat Tanggal Lahir"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Nomor Induk -->
                        <div>
                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK Induk</label>
                            <input type="number" id="nik" name="nik" placeholder="Masukkan NIK"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Alamat Lengkap -->
                        <div>
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                            <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat Lengkap"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- NPWP -->
                        <div>
                            <label for="npwp" class="block text-sm font-medium text-gray-700">NPWP</label>
                            <input type="text" id="npwp" name="npwp" placeholder="Masukkan NPWP"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- No. Hp -->
                        <div>
                            <label for="no_hp" class="block text-sm font-medium text-gray-700">No. Hp</label>
                            <input type="text" id="no_hp" name="no_hp" inputmode="numeric" placeholder="Masukkan Nomor Hp"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Jabatan -->
                        <div>
                            <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                            <select id="jabatan" name="jabatan"
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="" disabled selected>Pilih Jabatan</option>
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
                    </div>
                    <div class="modal-footer border-t border-gray-200 py-4 px-6">
                        <button type="button" class="btn btn-secondary text-gray-700 bg-gray-200 hover:bg-gray-300"
                            data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary bg-blue-500 text-white hover:bg-blue-600">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

            <!-- End | Modal Tammbah Data Aparatur -->



            <!-- Modal Lihat Data -->

            <!-- End | Modal Lihat Data-->



            <!-- Modal Edit Data -->






           
@endsection    