<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="M-CHAT Universitas Nurul Jadid">
    <meta property="og:description" content="Deteksi Autisme Dini Bayi - Universitas Nurul Jadid">
    <meta property="og:image" content="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Logo-UNUJA.png/500px-Logo-UNUJA.png">
    <meta property="og:url" content="https://mchartbidanangkatan23.com">
    <meta property="og:type" content="website">
    <title>Modified Checklist for Autism in Toddlers Universitas Nurul Jadid</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Logo-UNUJA.png/500px-Logo-UNUJA.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo dan Judul -->
            <div class="flex items-center gap-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Logo-UNUJA.png/500px-Logo-UNUJA.png" class="w-10">
                <a href="#" class="text-2xl font-extrabold tracking-tight leading-none text-blue-950 block md:hidden">M-CHAT UNUJA</a>
                <a href="#" class="text-2xl font-extrabold tracking-tight leading-none text-blue-950 hidden md:block">M-CHAT Universitas Nurul Jadid</a>
            </div>

            <!-- Burger Button (Mobile) -->
            <button id="burgerButton" class="block md:hidden text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Menu -->
            <ul id="navbarMenu" class="hidden md:flex gap-6 text-gray-700">
                <li><a href="#hero" class="hover:text-blue-600">Home</a></li>
                <li><a href="#cara" class="hover:text-blue-600">Cara Menggunakan</a></li>
                <li><a href="#baby-data" class="hover:text-blue-600">Data Bayi</a></li>
                <li><a href="#contact" class="hover:text-blue-600">Kontak Kami</a></li>
                <li><a href="#maps" class="hover:text-blue-600">Lokasi</a></li>
            </ul>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden bg-white shadow-lg border-t border-gray-200">
            <ul class="flex flex-col gap-4 p-4 text-gray-700">
                <li><a href="#hero" class="hover:text-blue-600">Home</a></li>
                <li><a href="#cara" class="hover:text-blue-600">Cara Menggunakan</a></li>
                <li><a href="#baby-data" class="hover:text-blue-600">Data Bayi</a></li>
                <li><a href="#contact" class="hover:text-blue-600">Kontak Kami</a></li>
                <li><a href="#maps" class="hover:text-blue-600">Lokasi</a></li>
            </ul>
        </div>
    </nav>

    <!-- Burger Button Script -->
    <script>
        const burgerButton = document.getElementById("burgerButton");
        const mobileMenu = document.getElementById("mobileMenu");

        burgerButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>


    <!-- Hero Section -->
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <a href="#baby-data" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span class="text-sm font-medium">Analisis Data Bayi Autisme</span>
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
            </a>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white"><span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">M-CHAT</span> Deteksi Autisme Dini Bayi </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Disini kami Mahasiswa <a href="https://unuja.ac.id" target="_blank" class="text-white dark:bg-blue-900 dark:text-white hover:bg-blue-200 dark:hover:bg-blue-800">Universitas Nurul Jadid</a> <a href="http://https://fkes.unuja.ac.id/" target="_blank" class="text-white dark:bg-blue-900 dark:text-white hover:bg-blue-200 dark:hover:bg-blue-800">Fakultas Kesehatan Prodi Kebidanan</a> Angkatan 23 Melayani cek ganguan penyakit autisme pada bayi anda.</p>
            <button onclick="openModal()" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" data-bs-toggle="modal" data-bs-target="#addBabyModal">
                Cek Bayi Anda
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </button>
        </div>
        <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
    </section>

    <!-- <section id="hero" class="bg-blue-600 text-white py-20 text-center">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold">Selamat Datang di MCHART</h1>
            <p class="text-xl mt-4">Pantau perkembangan bayi Anda dengan mudah</p>
            <button onclick="openModal()" class="mt-6 inline-block bg-white text-blue-600 py-3 px-6 rounded-lg font-semibold shadow-lg" data-bs-toggle="modal" data-bs-target="#addBabyModal">Cek Bayi Anda</button>
        </div>
    </section> -->

    <!-- Cara Menggunakan -->
    <section id="cara" class="container mx-auto my-16 px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Cara Menggunakan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="max-w p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition duration-300 ease-in-out transform hover:-translate-y-2 hover:shadow-lg">
                <ion-icon name="person-add-outline" style="color: white; font-size: 40px;"></ion-icon>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Tambahkan Data Bayi</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Isi data bayi seperti nama, tanggal lahir, dan informasi orang tua.</p>
            </div>

            <div class="max-w p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition duration-300 ease-in-out transform hover:-translate-y-2 hover:shadow-lg">
                <ion-icon name="checkbox-outline" style="color: white; font-size: 40px;"></ion-icon>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Isi Kuisioner</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jawab beberapa pertanyaan sederhana untuk menilai perkembangan bayi Anda.</p>
            </div>

            <div class="max-w p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition duration-300 ease-in-out transform hover:-translate-y-2 hover:shadow-lg">
                <ion-icon name="stats-chart-outline" style="color: white; font-size: 40px;"></ion-icon>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Lihat Hasil</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Periksa hasil untuk mengetahui apakah bayi Anda dalam kategori Normal, Meragukan, atau Kemungkinan GPPH.</p>
            </div>
        </div>
    </section>


    <section id="baby-data" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-blue-950 mb-10">Data Bayi</h2>

            <div class="flex justify-center items-center py-4">
                <button onclick="openModal()" class="w-full bg-blue-700 text-white px-8 py-2 rounded-lg shadow-md hover:bg-blue-800 transition-colors flex items-center justify-center gap-2" data-bs-toggle="modal" data-bs-target="#addBabyModal">Tambah Bayi <ion-icon name="add-circle"></ion-icon></button>
            </div>

            <!-- Success and Error Messages -->
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif
            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
            @endif


            <!-- Baby Data Table -->
            <div >
                <table id="selection-table" class="min-w-[400px] w-full">
                    <thead>
                        <tr>
                            <th>
                                <span class="flex items-center">
                                    Nama Bayi
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nama Ibu
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nama Ayah
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Alamat
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Tanggal Lahir
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th class="flex items-center">
                                <span class="flex items-center">
                                    Tanggal Mengisi
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nilai Total
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Status
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Intervensi
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th class="hidden md:table-cell">
                                <span class="flex items-center">
                                    Aksi
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($babies as $baby)
                        <tr class="hover:bg-blue-50 dark:hover:bg-blue-100 cursor-pointer">
                            <td class="px-4 py-3 font-medium">{{ $baby->nama_bayi }}</td>
                            <td class="px-4 py-3">{{ $baby->nama_ibu }}</td>
                            <td class="px-4 py-3">{{ $baby->nama_ayah }}</td>
                            <td class="px-4 py-3">{{ $baby->alamat_lengkap }}</td>
                            <td class="px-4 py-3">{{ $baby->tanggal_lahir }}</td>
                            <td class="px-4 py-3">{{ $baby->tanggal_mengisi }}</td>
                            <td class="px-4 py-3">{{ $baby->nilai_total }}</td>
                            <td class="px-4 py-3">
                                @if($baby->status == 'Normal')
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full">{{ $baby->status }}</span>
                                @elseif($baby->status == 'Meragukan')
                                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full">{{ $baby->status }}</span>
                                @elseif($baby->status == 'Kemungkinan GPPH')
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full">{{ $baby->status }}</span>
                                @else
                                {{ $baby->status }}
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                @if($baby->status == 'Normal')
                                <span class="text-green-700">Selamat, anak Anda tidak terkena gejala autisme.</span>
                                @else
                                <span class="text-red-700">Rujuk ke RS Tumbuh Kembang (Level 1).</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 hidden md:table-cell">
                                <form method="POST" action="{{ route('bayi.destroy', $baby->id) }}" class="flex items-center gap-2">
                                    @csrf
                                    @method('DELETE')
                                    <input type="text" name="delete_code" placeholder="Kode Hapus" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-red-500" required>
                                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition-colors"><ion-icon name="trash-outline"></ion-icon></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <style>
        @media (max-width: 400px) {
            .hide-400 {
                display: none !important;
            }
        }
        </style>

        <!-- Modal Tambah Bayi -->
        <div id="addBabyModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden overflow-y-auto" onclick="closeModal(event)">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl m-4" onclick="event.stopPropagation()">
                <div class="flex justify-between items-center p-4 border-b">
                    <h5 class="text-lg font-bold">Tambah Bayi</h5>
                    <button class="text-gray-400 hover:text-gray-600" onclick="closeModal()">✕</button>
                </div>
                <div class="p-6 max-h-[80vh] overflow-y-auto">
                    <form id="form-tambah-bayi" method="POST" action="{{ route('bayi.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block font-medium">Nama Bayi</label>
                            <input type="text" name="nama_bayi" class="w-full px-3 py-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium">Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="w-full px-3 py-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium">Nama Ayah</label>
                            <input type="text" name="nama_ayah" class="w-full px-3 py-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium">Alamat Lengkap</label>
                            <select id="provinsi" name="provinsi" class="w-full px-3 py-2 border rounded mb-2" required>
                                <option value="">Pilih Provinsi</option>
                            </select>
                            <select id="kabupaten" name="kabupaten" class="w-full px-3 py-2 border rounded mb-2" required>
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select>
                            <select id="kecamatan" name="kecamatan" class="w-full px-3 py-2 border rounded mb-2" required>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            <select id="desa" name="desa" class="w-full px-3 py-2 border rounded mb-2" required>
                                <option value="">Pilih Desa/Kelurahan</option>
                            </select>

                            <input type="text" id="rt" placeholder="RT" class="w-full px-3 py-2 border rounded mb-2" required>
                            <input type="text" id="rw" placeholder="RW" class="w-full px-3 py-2 border rounded mb-2" required>

                            <input type="hidden" name="alamat_lengkap" id="alamat_lengkap">
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="w-full px-3 py-2 border rounded" required>
                        </div>

                        <hr class="my-4">

                        <h5 class="text-lg font-bold mb-4">Kuisioner</h5>
                        <div class="mb-4">
                            <label>1. Jika Anda menunjuk sesuatu di ruangan, apakah anak Anda melihatnya? <br>
                            (Misalnya, jika Anda menunjuk hewan atau mainan, apakah anak Anda melihat ke arah hewan atau mainan yang anda tunjuk?)</label><br>
                            <input type="radio" name="jawaban_kuisioner[1]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[1]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>2. Pernahkah Anda berpikir bahwa anak Anda tuli?</label><br>
                            <input type="radio" name="jawaban_kuisioner[2]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[2]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>3. Apakah anak Anda pernah bermain pura-pura? <br>
                            (Misalnya, berpura-pura minum dari gelas kosong, berpura-pura berbicara menggunakan telepon, atau menyuapi boneka atau boneka binatang?)</label><br>
                            <input type="radio" name="jawaban_kuisioner[3]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[3]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>4. Apakah anak Anda suka memanjat benda-benda? <br>
                            (Misalnya, furnitur, alat-alat bermain, atau tangga)</label><br>
                            <input type="radio" name="jawaban_kuisioner[4]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[4]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>5. Apakah anak Anda menggerakkan jari-jari tangannya dengan cara yang tidak biasa di dekat matanya? <br>
                            (Misalnya, apakah anak Anda menggoyangkan jari dekat pada matanya?)</label><br>
                            <input type="radio" name="jawaban_kuisioner[5]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[5]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>6. Apakah anak Anda pernah menunjuk dengan satu jari untuk meminta sesuatu atau untuk meminta tolong? <br>
                            (Misalnya, menunjuk makanan atau mainan yang jauh dari jangkauannya)</label><br>
                            <input type="radio" name="jawaban_kuisioner[6]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[6]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>7. Apakah anak Anda pernah menunjuk dengan satu jari untuk menunjukkan sesuatu yang menarik pada Anda? <br>
                            (Misalnya, menunjuk pada pesawat di langit atau truk besar di jalan)</label><br>
                            <input type="radio" name="jawaban_kuisioner[7]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[7]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>8. Apakah anak Anda tertarik pada anak lain? <br>
                            (Misalnya, apakah anak Anda memperhatikan anak lain, tersenyum pada mereka atau pergi ke arah mereka)</label><br>
                            <input type="radio" name="jawaban_kuisioner[8]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[8]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>9. Apakah anak Anda pernah memperlihatkan suatu benda dengan membawa atau mengangkatnya kepada Anda - tidak untuk minta tolong, hanya untuk berbagi? <br>
                            (Misalnya, memperlihatkan Anda bunga, binatang atau truk mainan)</label><br>
                            <input type="radio" name="jawaban_kuisioner[9]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[9]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>10. Apakah anak Anda memberikan respon jika namanya dipanggil? <br>
                            (Misalnya, apakah anak Anda melihat, bicara atau bergumam, atau menghentikan apa yang sedang dilakukannya saat Anda memanggil namanya)</label><br>
                            <input type="radio" name="jawaban_kuisioner[10]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[10]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>11. Saat Anda tersenyum pada anak Anda, apakah anak Anda tersenyum balik?</label><br>
                            <input type="radio" name="jawaban_kuisioner[11]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[11]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>12. Apakah anak Anda pernah marah saat mendengar suara bising sehari-hari? <br>
                            (Misalnya, apakah anak Anda berteriak atau menangis saat mendengar suara bising seperti vacuum cleaner atau musik keras)</label><br>
                            <input type="radio" name="jawaban_kuisioner[12]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[12]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>13. Apakah anak Anda bisa berjalan?</label><br>
                            <input type="radio" name="jawaban_kuisioner[13]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[13]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>14. Apakah anak Anda menatap mata Anda saat Anda bicara padanya, bermain bersamanya, atau saat memakaikan pakaian?</label><br>
                            <input type="radio" name="jawaban_kuisioner[14]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[14]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>15. Apakah anak Anda mencoba meniru apa yang Anda lakukan? <br>
                            (Misalnya, melambaikan tangan, tepuk tangan atau meniru saat Anda membuat suara lucu)</label><br>
                            <input type="radio" name="jawaban_kuisioner[15]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[15]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>16. Jika Anda memutar kepala untuk melihat sesuatu, apakah anak Anda melihat sekeliling untuk melihat apa yang Anda lihat?</label><br>
                            <input type="radio" name="jawaban_kuisioner[16]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[16]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>17. Apakah anak Anda mencoba utuk membuat Anda melihat kepadanya? <br>
                            (Misalnya, apakah anak Anda melihat Anda untuk dipuji atau berkata “lihat” atau “lihat aku”)</label><br>
                            <input type="radio" name="jawaban_kuisioner[17]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[17]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>18. Apakah anak Anda mengerti saat Anda memintanya melakukan sesuatu? <br>
                            (Misalnya, jika Anda tidak menunjuk, apakah anak Anda mengerti kalimat “letakkan buku itu di atas kursi” atau “ambilkan saya selimut”)</label><br>
                            <input type="radio" name="jawaban_kuisioner[18]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[18]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>19. Jika sesuatu yang baru terjadi, apakah anak Anda menatap wajah Anda untuk melihat perasaan Anda tentang hal tersebut? <br>
                            (Misalnya, jika anak Anda mendengar bunyi aneh atau lucu, atau melihat mainan baru, akankah dia menatap wajah Anda?)</label><br>
                            <input type="radio" name="jawaban_kuisioner[19]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[19]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>
                        <div class="mb-4">
                            <label>20. Apakah anak Anda menyukai aktivitas yang bergerak? <br>
                            (Misalnya, diayun-ayun atau dihentak-hentakkan pada lutut Anda)</label><br>
                            <input type="radio" name="jawaban_kuisioner[20]" value="ya" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                            <input type="radio" name="jawaban_kuisioner[20]" value="tidak" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak
                        </div>

                        <hr class="my-4">

                        <h5 class="text-lg font-bold mb-4">Apakah Anda merasa ragu dengan jawaban Anda?</h5>
                        <input type="radio" name="ragu" value="ya" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ya
                        <input type="radio" name="ragu" value="tidak" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Tidak

                        <div class="flex justify-end gap-3">
                            <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600" onclick="closeModal()">Batal</button>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Sukses -->
        <div id="successModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-80 text-center p-6">
                <div class="text-green-500 text-6xl mb-4">
                    ✓
                </div>
                <h5 class="text-lg font-bold text-green-600 mb-2">Berhasil!</h5>
                <p>Data bayi berhasil ditambahkan.</p>
            </div>
        </div>

        <!-- Script Auto Close Modal -->
        @if(session('add_success'))
        <script>
            // Tampilkan modal sukses
            const successModal = document.getElementById("successModal");
            successModal.classList.remove("hidden");

            // Auto close setelah 3 detik
            setTimeout(() => {
                successModal.classList.add("hidden");
            }, 3000);
        </script>
        @endif

        <!-- Modal Hapus Sukses -->
        <div id="deleteSuccessModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-80 text-center p-6">
                <div class="text-red-500 text-6xl mb-4">✓</div>
                <h5 class="text-lg font-bold text-red-600 mb-2">Terhapus!</h5>
                <p>Data bayi berhasil dihapus.</p>
            </div>
        </div>

        <!-- Script Auto Close Modal Hapus -->
        @if(session('delete_success'))
        <script>
            // Tampilkan modal sukses
            const deleteSuccessModal = document.getElementById("deleteSuccessModal");
            deleteSuccessModal.classList.remove("hidden");

            // Auto close setelah 3 detik
            setTimeout(() => {
                deleteSuccessModal.classList.add("hidden");
            }, 3000);
        </script>
        @endif

        <!-- Modal Error -->
        <div id="deleteErrorModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-80 text-center p-6">
                <div class="text-red-500 text-6xl mb-4">✗</div>
                <h5 class="text-lg font-bold text-red-600 mb-2">Gagal!</h5>
                <p>Kode hapus salah. Data bayi tidak dapat dihapus.</p>
            </div>
        </div>

        <!-- Script Auto Close Modal Error -->
        @if(session('error'))
        <script>
            // Tampilkan modal error
            const deleteErrorModal = document.getElementById("deleteErrorModal");
            deleteErrorModal.classList.remove("hidden");

            // Auto close setelah 3 detik
            setTimeout(() => {
                deleteErrorModal.classList.add("hidden");
            }, 3000);
        </script>
        @endif
    </section>

    <!-- gallery -->
    <!-- <section id="contact" class="container mx-auto my-16 px-4">
        <h2 class="text-4xl font-bold text-center text-blue-950 mb-10">Gallery</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://blueabatherapy.com/wp-content/uploads/2024/02/MCHAT-2.jpg.webp" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://live-production.wcms.abc-cdn.net.au/cb203c0bce19b9ccd85c930cc0e45390?impolicy=wcms_crop_resize&cropH=1646&cropW=2925&xPos=0&yPos=0&width=862&height=485" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://sotis.pl/wp-content/uploads/2023/04/sotis.webp" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://poradnia.iwrd.pl/wp-content/uploads/2024/06/m_chat_r_test_na_autyzm.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://synapsis.org.pl/wp-content/uploads/2019/09/M-CHAT-R.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://synapsis.org.pl/wp-content/uploads/2024/05/pexels-tatianasyrikova-3933250-scaled.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://poradnia.iwrd.pl/wp-content/uploads/2024/06/hlt54-697893742-feature-1200x600-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://cdn.prod.website-files.com/64de9a32901e3cbab7a0e0f5/66c6f0f5242c5c98b2ef7944_2149357274.jpeg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://blueabatherapy.com/wp-content/uploads/2024/02/MCHAT-1.jpg.webp" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://images.motherandbeyond.id/unsafe/0x0/smart/media/assetmb/2c2c667ff40be6b027d821386392f7fa.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://blueabatherapy.com/wp-content/uploads/2024/02/MCHAT.jpg.webp" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://static.mooimom.id/media/mamapedia/R6DwMH7o--main-image.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->

    <!-- Lokasi Section -->
    <section id="maps" class="container mx-auto my-16 px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Team</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover: hover:shadow-2xl duration-300">
                <div class="overflow-hidden">
                    <img src="{{ asset('storage/gambar/3.jpg') }}"
                        alt="Robert Brown"
                        class="w-full h-72 object-cover transition-transform duration-300 transform group-hover:scale-110">
                </div>
                <div class="p-6 bg-gray-900 group-hover:bg-blue-950 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-white">Maryama Habibillah</h3>
                    <p class="text-gray-400">Ketua Tim</p>
                </div>
            </div>
            <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover: hover:shadow-2xl duration-300">
                <div class="overflow-hidden">
                    <img src="{{ asset('storage/gambar/1.jpg') }}"
                    alt="Robert Brown"
                    class="w-full h-72 object-cover transition-transform duration-300 transform group-hover:scale-110">
                </div>
                <div class="p-6 bg-gray-900 group-hover:bg-blue-950 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-white">Anis Latifatul Jamilah</h3>
                    <p class="text-gray-400">Anggota</p>
                </div>
            </div>
            <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover: hover:shadow-2xl duration-300">
                <div class="overflow-hidden">
                    <img src="{{ asset('storage/gambar/2.jpg') }}"
                        alt="Robert Brown"
                        class="w-full h-72 object-cover transition-transform duration-300 transform group-hover:scale-110">
                </div>
                <div class="p-6 bg-gray-900 group-hover:bg-blue-950 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-white">Dewi</h3>
                    <p class="text-gray-400">Anggota</p>
                </div>
            </div>
            <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover: hover:shadow-2xl duration-300">
                <div class="overflow-hidden">
                    <img src="{{ asset('storage/gambar/4.jpg') }}"
                        alt="Robert Brown"
                        class="w-full h-72 object-cover transition-transform duration-300 transform group-hover:scale-110">
                </div>
                <div class="p-6 bg-gray-900 group-hover:bg-blue-950 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-white">Sayyidah</h3>
                    <p class="text-gray-400">Anggota</p>
                </div>
            </div>
            <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover: hover:shadow-2xl duration-300">
                <div class="overflow-hidden">
                    <img src="{{ asset('storage/gambar/5.jpg') }}"
                        alt="Robert Brown"
                        class="w-full h-72 object-cover transition-transform duration-300 transform group-hover:scale-110">
                </div>
                <div class="p-6 bg-gray-900 group-hover:bg-blue-950 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-white">Ayu Zuhriyatin</h3>
                    <p class="text-gray-400">Anggota</p>
                </div>
            </div>
            <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover: hover:shadow-2xl duration-300">
                <div class="overflow-hidden">
                    <img src="{{ asset('storage/gambar/6.png') }}"
                        alt="Robert Brown"
                        class="w-full h-72 object-cover transition-transform duration-300 transform group-hover:scale-110">
                </div>
                <div class="p-6 bg-gray-900 group-hover:bg-blue-950 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-white">Delatul Ummah</h3>
                    <p class="text-gray-400">Anggota</p>
                </div>
            </div>

    </section>

    <!-- Kontak Kami Section -->
    <section id="contact" class="container mx-auto my-16 px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Kontak Kami</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7471810125344!2d113.49567347500421!3d-7.7102549923075365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd703f599489a1b%3A0xf34d3ceb3f9ddf2c!2sUniversitas%20Nurul%20Jadid!5e0!3m2!1sid!2sid!4v1747462988316!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <form id="form-kontak" class="bg-white p-6 shadow-lg rounded-lg">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Nama</label>
                <input type="text" id="nama-kontak" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500" placeholder="Nama Anda" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Pesan</label>
                <textarea id="pesan-kontak" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500" rows="5" placeholder="Pesan Anda" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="w-auto bg-blue-950 text-white py-3 px-6 rounded-lg font-semibold shadow-lg">Kirim</button>
            </div>
        </form>
        <script>
            document.getElementById('form-kontak').addEventListener('submit', function(e) {
                e.preventDefault();
                const nama = document.getElementById('nama-kontak').value;
                const pesan = document.getElementById('pesan-kontak').value;
                const nomor = "6282244428970"; // Ganti dengan nomor WhatsApp tujuan tanpa +
                const text = encodeURIComponent(
                    "Nama: " + nama + "\nPesan: " + pesan
                );
                window.open(`https://wa.me/${nomor}?text=${text}`, '_blank');
            });
        </script>

    </section>


    <footer class="bg-gray-900 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <!-- Alamat -->
                <div class="w-full md:w-1/3 mb-8 md:mb-0">
                    <h3 class="text-xl font-semibold mb-4">Alamat</h3>
                    <p>Jl. PP Nurul Jadid, Dusun Tj. Lor, Karanganyar, Kec. Paiton, Kabupaten Probolinggo, Jawa Timur 67291</p>
                    <p>Email: maryamahabibillah1@gmail.com</p>
                </div>

                <!-- Sosial Media -->
                <div class="w-full md:w-1/3 mb-8 md:mb-0">
                    <h3 class="text-xl font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex gap-4">
                        <a href="https://fkes.unuja.ac.id/" target="_blank" class="text-blue-500 hover:text-blue-400">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Logo-UNUJA.png/500px-Logo-UNUJA.png" style="width: 40px;" srcset="">
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-700">

            <p class="text-center text-gray-400">© 2025 <a href="http://dibscode.com" class="text-blue-400" target="_blank">DibsCode</a> | MCHART - Bidan Angkatan 23 <a href="http://unuja.ac.id" class="text-blue-400" target="_blank">Universitas Nurul Jadid.</a> All rights reserved.</p>
        </div>
    </footer>


    <script>
        function openModal() {
            document.getElementById('addBabyModal').classList.remove('hidden');
        }

        function closeModal(event) {
            const modal = document.getElementById("addBabyModal");
            if (!event || event.target === modal) {
                modal.classList.add("hidden");
            }
        }


        if (document.getElementById("selection-table") && typeof simpleDatatables.DataTable !== 'undefined') {

            let multiSelect = true;
            let rowNavigation = false;
            let table = null;

            const resetTable = function() {
                if (table) {
                    table.destroy();
                }

                const options = {
                    rowRender: (row, tr, _index) => {
                        if (!tr.attributes) {
                            tr.attributes = {};
                        }
                        if (!tr.attributes.class) {
                            tr.attributes.class = "";
                        }
                        if (row.selected) {
                            tr.attributes.class += " selected";
                        } else {
                            tr.attributes.class = tr.attributes.class.replace(" selected", "");
                        }
                        return tr;
                    }
                };
                if (rowNavigation) {
                    options.rowNavigation = true;
                    options.tabIndex = 1;
                }

                table = new simpleDatatables.DataTable("#selection-table", options);

                // Mark all rows as unselected
                table.data.data.forEach(data => {
                    data.selected = false;
                });

                table.on("datatable.selectrow", (rowIndex, event) => {
                    event.preventDefault();
                    const row = table.data.data[rowIndex];
                    if (row.selected) {
                        row.selected = false;
                    } else {
                        if (!multiSelect) {
                            table.data.data.forEach(data => {
                                data.selected = false;
                            });
                        }
                        row.selected = true;
                    }
                    table.update();
                });
            };

            // Row navigation makes no sense on mobile, so we deactivate it and hide the checkbox.
            const isMobile = window.matchMedia("(any-pointer:coarse)").matches;
            if (isMobile) {
                rowNavigation = false;
            }

            resetTable();
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch Provinsi
            $.getJSON("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json", function(data) {
                $.each(data, function(key, provinsi) {
                    $('#provinsi').append(new Option(provinsi.name, provinsi.id));
                });
            });

            // Fetch Kabupaten/Kota
            $('#provinsi').on('change', function() {
                const provinsiId = $(this).val();
                $('#kabupaten').empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                $('#kecamatan').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#desa').empty().append('<option value="">Pilih Desa/Kelurahan</option>');

                if (provinsiId) {
                    $.getJSON(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsiId}.json`, function(data) {
                        $.each(data, function(key, kabupaten) {
                            $('#kabupaten').append(new Option(kabupaten.name, kabupaten.id));
                        });
                    });
                }
            });

            // Fetch Kecamatan
            $('#kabupaten').on('change', function() {
                const kabupatenId = $(this).val();
                $('#kecamatan').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#desa').empty().append('<option value="">Pilih Desa/Kelurahan</option>');

                if (kabupatenId) {
                    $.getJSON(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabupatenId}.json`, function(data) {
                        $.each(data, function(key, kecamatan) {
                            $('#kecamatan').append(new Option(kecamatan.name, kecamatan.id));
                        });
                    });
                }
            });

            // Fetch Desa
            $('#kecamatan').on('change', function() {
                const kecamatanId = $(this).val();
                $('#desa').empty().append('<option value="">Pilih Desa/Kelurahan</option>');

                if (kecamatanId) {
                    $.getJSON(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecamatanId}.json`, function(data) {
                        $.each(data, function(key, desa) {
                            $('#desa').append(new Option(desa.name, desa.name));
                        });
                    });
                }
            });
        });
    </script>

    <script>
        document.getElementById("form-tambah-bayi").addEventListener("submit", function(event) {
            // Gabungkan alamat lengkap
            const provinsi = document.getElementById("provinsi");
            const kabupaten = document.getElementById("kabupaten");
            const kecamatan = document.getElementById("kecamatan");
            const desa = document.getElementById("desa");
            const rt = document.getElementById("rt");
            const rw = document.getElementById("rw");
            const alamatLengkap = document.getElementById("alamat_lengkap");

            const namaProvinsi = provinsi.options[provinsi.selectedIndex].text;
            const namaKabupaten = kabupaten.options[kabupaten.selectedIndex].text;
            const namaKecamatan = kecamatan.options[kecamatan.selectedIndex].text;
            const namaDesa = desa.options[desa.selectedIndex].text;

            // Gabungkan alamat lengkap
            alamatLengkap.value = `${namaProvinsi}, ${namaKabupaten}, ${namaKecamatan}, ${namaDesa}, RT ${rt.value}/RW ${rw.value}`;
        });
    </script>

</body>

</html>