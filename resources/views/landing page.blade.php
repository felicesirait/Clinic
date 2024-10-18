<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
    .font-pacifico {
        font-family: 'Pacifico', cursive;
    }
    html {
        scroll-behavior: smooth;
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 1s ease-out forwards;
    }

    .animate-delay-1 {
        animation-delay: 0.5s;
    }

    .animate-delay-2 {
        animation-delay: 1s;
    }
</style>
    </style>

    <title>D'Clinic</title>
</head>
<body class="font-sans antialiased">

    <!-- Navigation Bar -->
    <nav class="bg-blue-300 text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="img/clinic2-wm.png" alt="MyWebsite Logo" class="h-14 w-auto"> <!-- Logo with height adjustment -->
            <span class="ml-1 text-xl font-bold font-pacifico">D'Clinic</span>
        </div>
        <ul class="flex space-x-6">
            <li><a href="#home" class="hover:bg-blue-500 px-3 py-2 rounded-md font-bold">Beranda</a></li>
            <li><a href="#about" class="hover:bg-blue-500 px-3 py-2 rounded-md font-bold">Tentang</a></li>
            <li><a href="#services" class="hover:bg-blue-500 px-3 py-2 rounded-md font-bold">Masuk</a></li>
            <li><a href="#contact" class="hover:bg-blue-500 px-3 py-2 rounded-md font-bold">Daftar</a></li>
        </ul>
    </nav>

        <!-- Hero Section -->
    <section id="home" class="hero h-screen bg-cover bg-center relative" style="background-image: url('img/clinicc.jpg');">
        <div class="absolute inset-0 bg-black opacity-60"></div> <!-- Overlay -->
        <div class="flex items-center justify-center h-full text-center relative z-10 text-white">
            <div>
                <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-fadeInUp">Selamat datang di D'Clinic!</h1>
                <p class="text-lg md:text-xl mb-6 animate-fadeInUp">D'Clinic menyediakan layanan kesehatan lengkap dengan tenaga medis profesional dan fasilitas terbaik, siap melayani kebutuhan kesehatan Anda dan keluarga.</p>
                <a href="#about" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-lg">Get Started</a>
            </div>
        </div>
    </section>

        <!-- About Section -->
    <section id="about" class="bg-blue-200 py-16 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Tentang Kami</h2>
        <p class="text-lg max-w-2xl mx-auto">D'Clinic adalah pusat layanan kesehatan modern yang berkomitmen untuk menyediakan pelayanan medis berkualitas tinggi dengan pendekatan yang ramah dan profesional. Kami menawarkan berbagai layanan kesehatan, mulai dari konsultasi medis, perawatan rutin, hingga layanan diagnostik, semuanya dengan dukungan tenaga medis berpengalaman dan fasilitas terbaik. Dengan fokus pada kenyamanan dan kepuasan pasien, D'Clinic hadir sebagai solusi kesehatan terpercaya bagi Anda dan keluarga.</p>
    </section>
    
    <!-- Divider -->
    <hr class="border-t border-gray-200 my-1">    
    <!-- Services Section -->
    <section id="services" class="bg-blue-200 py-16 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-8">Layanan Kami</h2>
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-12 shadow-lg rounded-lg hover:shadow-xl transition flex items-center justify-center bg-cover bg-center" style="background-image: url('img/dokterr.jpg');">
                <h3 class="text-2xl font-bold text-white">Profil Dokter dan Staf</h3>
            </div>
            <div class="bg-white p-12 shadow-lg rounded-lg hover:shadow-xl transition flex items-center justify-center bg-cover bg-center" style="background-image: url('img/konsul.jpg');">
                <h3 class="text-2xl font-bold text-white">Konsultasi</h3>
            </div>
            <div class="bg-white p-12 shadow-lg rounded-lg hover:shadow-xl transition flex items-center justify-center bg-cover bg-center" style="background-image: url('img/prokes.jpg');">
                <h3 class="text-2xl font-bold text-white">Program Kesehatan</h3>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <hr class="border-t border-gray-200 my-1">

    <!-- Contact Section -->
    <section id="contact" class="bg-blue-200 py-16 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-8">Kontak</h2>
        <form action="#" method="post" class="max-w-xl mx-auto space-y-6">
            <input type="text" name="name" placeholder="Masukkan Nama Anda" class="w-full p-4 border border-gray-300 rounded-lg" required>
            <input type="email" name="email" placeholder="Masukkan Email Anda" class="w-full p-4 border border-gray-300 rounded-lg" required>
            <textarea name="message" rows="5" placeholder="Masukkan Pesan" class="w-full p-4 border border-gray-300 rounded-lg" required></textarea>
            <button type="submit" class="w-full bg-gray-700 text-white py-4 rounded-lg hover:bg-blue-800">Kirim</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-300 text-white py-4 text-center">
        <p>&copy; 2024 D'Clinic. All Rights Reserved.</p>
    </footer>

</body>
</html>
