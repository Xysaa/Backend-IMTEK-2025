<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD MAHASISWA </title>
    {{-- Pastikan path ke bootstrap.css sudah benar --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.6-dist/css/bootstrap.css') }}">
    <style>
        html {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: "Jost", sans-serif; /* Anda bisa ganti font jika mau */
            
            /* Background image utama halaman */
            background-image: url('{{ asset('image/bg.jpeg') }}'); /* Pastikan ini path ke background cyberpunk Anda */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            /* Menggunakan Flexbox untuk memusatkan .center-container */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;

            /* Gaya "Card" atau "Panel" seperti pada konsep gambar */
            background-color: rgba(125, 128, 133, 0.75); /* Latar belakang gelap semi-transparan (misal: dark bluish-grey) */
            padding: 30px 40px;                        /* Ruang di dalam section/card */
            border: 1px solid rgba(173, 216, 230, 0.3); /* Border tipis dengan warna terang transparan (light blueish) */
            border-radius: 12px;                       /* Sudut yang membulat */
            box-shadow: 0 8px 32px 0 rgba(104, 80, 80, 0.37); /* Efek bayangan untuk kedalaman */
            
            /* Efek "frosted glass" (opsional, perhatikan dukungan browser) */
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px); /* Untuk Safari */

            max-width: 550px;                           /* Batas lebar maksimum section */
            width: 90%;                                 /* Lebar section, responsif */
        }

        .center-container h1 {
            color: #e0e0e0; /* Warna teks judul terang (putih keabuan) */
            margin-bottom: 25px; 
            font-weight: 500;
            font-size: 2em; /* Ukuran font judul sedikit lebih besar */
            text-shadow: 0px 0px 8px rgba(97, 88, 88, 0.5); /* Bayangan teks agar lebih terbaca di atas background card */
        }

        .center-container .btn-primary {
            /* Tombol primary Bootstrap biasanya sudah kontras, tapi bisa disesuaikan jika perlu */
            background-color: #3e6792; /* Warna default Bootstrap, bisa diganti jika tema cyberpunk Anda berbeda */
            border-color: #275d96;
            color: #ffffff;
            font-weight: bold;
            padding: 12px 30px;
            font-size: 1.1em;
            border-radius: 8px; /* Sesuaikan border-radius tombol */
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .center-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: translateY(-2px); /* Efek hover pada tombol */
        }

    </style>
</head>
<body>

    <div class="center-container">
        <h1 class="text-center">
            SELAMAT DATANG DI SISTEM CRUD MAHASISWA
        </h1>
        <div class="text-center mt-4">
            <a href="{{ route('mahasiswa.tampil') }}" class="btn btn-primary">Kelola Mahasiswa</a>
        </div>
    </div>

</body>
</html>