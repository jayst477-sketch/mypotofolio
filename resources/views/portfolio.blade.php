<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yusup - Portofolio PPLG | Laravel 13</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkBg: '#0B0B0F',
                        cardDark: '#13131A',
                        neonGreen: '#CCFF00',
                        neonPurple: '#9333EA',
                        neonBlue: '#38BDF8',
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts & FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #0B0B0F; color: #FFFFFF; }
        .neon-glow { text-shadow: 0 0 10px rgba(204, 255, 0, 0.5); }
    </style>
</head>
<body class="bg-darkBg text-white selection:bg-neonGreen selection:text-black">

    <!-- NAVBAR -->
    <header class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
        <div class="text-2xl font-black tracking-wider flex items-center gap-2">
            <span>YUSUP<span class="text-neonGreen">.</span></span>
            <span class="text-xs bg-purple-900/60 text-purple-300 px-2 py-0.5 rounded-full border border-purple-500/30">Laravel 13</span>
        </div>
        <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-gray-300">
            <a href="#beranda" class="text-neonGreen hover:text-neonGreen transition">Beranda</a>
            <a href="#proyek" class="hover:text-neonGreen transition">Proyek</a>
            <a href="#keahlian" class="hover:text-neonGreen transition">Keahlian</a>
            <a href="#tentang" class="hover:text-neonGreen transition">Tentang</a>
            <a href="#kontak" class="hover:text-neonGreen transition">Kontak</a>
        </nav>
        <button class="bg-purple-600 hover:bg-purple-700 text-white p-2.5 rounded-xl md:hidden">
            <i class="fa-solid fa-bars"></i>
        </button>
    </header>

    <!-- HERO SECTION -->
    <section id="beranda" class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative">
        <div class="lg:col-span-7 z-10">
            <div class="inline-block bg-purple-900/40 text-purple-300 px-4 py-1.5 rounded-full text-sm font-semibold mb-6 border border-purple-500/30">
                👋 Halo, Saya Yusup
            </div>
            <h1 class="text-5xl sm:text-7xl font-black tracking-tight leading-none mb-6">
                SOFTWARE <br>
                <span class="text-neonGreen bg-black px-2 border-b-4 border-neonGreen">ENGINEER</span>
            </h1>
            <p class="text-gray-400 text-lg mb-8 max-w-lg">
                Pelajar jurusan <strong class="text-white">PPLG (Pengembangan Perangkat Lunak dan Gim)</strong> yang berfokus pada pembuatan Aplikasi Web Fullstack, Backend Laravel, dan Desain Gim Interaktif.
            </p>
            <div class="flex flex-wrap gap-4 items-center">
                <a href="#proyek" class="bg-neonGreen text-black font-extrabold px-8 py-4 rounded-full hover:scale-105 transition shadow-lg shadow-neonGreen/20 flex items-center gap-2">
                    <i class="fa-solid fa-play"></i> Lihat Proyek
                </a>
                <a href="#kontak" class="border border-gray-700 hover:border-gray-500 px-8 py-4 rounded-full font-semibold transition">
                    Mari Bincang ↗
                </a>
            </div>
        </div>

     <!-- FOTO PROFIL & BALON TEKS -->
        <div class="lg:col-span-5 relative flex justify-center mt-8 lg:mt-0">
            <div class="relative w-72 h-72 sm:w-96 sm:h-96 flex items-center justify-center">
                
                <!-- Efek Glow / Cahaya di Belakang Foto -->
                <div class="absolute inset-0 bg-neonGreen/20 rounded-3xl blur-2xl transform rotate-3"></div>

                <!-- Balon Teks yang Lebih Elegan (Diposisikan Rapi di Pojok Kanan Atas Foto) -->
                <div class="absolute -top-6 -right-2 sm:-right-6 z-20 bg-neonGreen text-black px-4 py-2.5 rounded-2xl rounded-bl-none text-xs sm:text-sm font-black shadow-xl animate-bounce flex items-center gap-2 border border-black/10">
                    <span>MARI BUAT KODE YANG KEREN!</span> 🚀
                </div>

                <!-- Kotak Pembungkus Foto Utama -->
                <div class="w-full h-full bg-white rounded-3xl p-3 shadow-2xl relative z-10 border-4 border-neonGreen flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/yusup.jpg') }}" alt="Foto Yusup" class="w-full h-full object-cover rounded-2xl shadow-inner">
                </div>

            </div>
        </div>
    </section>

 <!-- PROYEK PILIHAN -->
    <section id="proyek" class="max-w-7xl mx-auto px-6 py-20">
        <div class="flex justify-between items-end mb-12">
            <div>
                <span class="text-neonGreen text-sm font-bold tracking-widest uppercase">✨ PORTOFOLIO</span>
                <h2 class="text-3xl sm:text-4xl font-black mt-2">PROYEK PPLG UNGGULAN</h2>
            </div>
            <a href="#" class="text-sm font-bold text-gray-400 hover:text-white transition">Lihat Semua Proyek →</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Proyek 1: E-Commerce -->
            <div class="bg-cardDark border border-gray-800 rounded-3xl p-4 hover:border-neonGreen transition group">
                <div class="rounded-2xl h-44 mb-4 overflow-hidden border border-gray-800 group-hover:scale-[1.02] transition">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=600&auto=format&fit=crop&q=80" alt="E-Commerce Laravel" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">E-Commerce Laravel</h3>
                <p class="text-xs text-gray-400 mb-4">Sistem toko online lengkap dengan manajemen keranjang dan pembayaran digital.</p>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] bg-gray-800 text-neonGreen px-2.5 py-1 rounded-full">Laravel 13</span>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neonGreen hover:text-black transition">↗</a>
                </div>
            </div>

           <!-- Proyek 2: Gim Platformer -->
            <div class="bg-cardDark border border-gray-800 rounded-3xl p-4 hover:border-neonGreen transition group">
                <div class="rounded-2xl h-44 mb-4 overflow-hidden border border-gray-800 group-hover:scale-[1.02] transition">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=600&auto=format&fit=crop&q=80" alt="Gim Platformer 2D" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Gim Platformer 2D</h3>
                <p class="text-xs text-gray-400 mb-4">Gim petualangan edukatif interaktif berbasis web menggunakan Unity & C#.</p>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] bg-gray-800 text-sky-400 px-2.5 py-1 rounded-full">Pengembangan Gim</span>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neonGreen hover:text-black transition">↗</a>
                </div>
            </div>

            <!-- Proyek 3: Sistem Informasi Sekolah -->
            <div class="bg-cardDark border border-gray-800 rounded-3xl p-4 hover:border-neonGreen transition group">
                <div class="rounded-2xl h-44 mb-4 overflow-hidden border border-gray-800 group-hover:scale-[1.02] transition">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&auto=format&fit=crop&q=80" alt="Sistem Informasi Sekolah" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Sistem Informasi Sekolah</h3>
                <p class="text-xs text-gray-400 mb-4">Platform manajemen data siswa, absensi, dan pengolahan rapor berbasis web.</p>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] bg-gray-800 text-purple-400 px-2.5 py-1 rounded-full">Fullstack Web</span>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neonGreen hover:text-black transition">↗</a>
                </div>
            </div>

            <!-- Proyek 4: API Manajemen Tugas -->
            <div class="bg-cardDark border border-gray-800 rounded-3xl p-4 hover:border-neonGreen transition group">
                <div class="rounded-2xl h-44 mb-4 overflow-hidden border border-gray-800 group-hover:scale-[1.02] transition">
                    <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=600&auto=format&fit=crop&q=80" alt="API Manajemen Tugas" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">API Manajemen Tugas</h3>
                <p class="text-xs text-gray-400 mb-4">RESTful API backend handal untuk aplikasi pencatatan tugas harian kolaboratif.</p>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] bg-gray-800 text-emerald-400 px-2.5 py-1 rounded-full">Backend API</span>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neonGreen hover:text-black transition">↗</a>
                </div>
            </div>

        </div>
    </section>

    <!-- KEAHLIAN -->
    <section id="keahlian" class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-black mb-8 text-center">KEAHLIAN & TEKNOLOGI PPLG</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
            <div class="bg-cardDark border border-gray-800 p-6 rounded-2xl hover:border-neonGreen transition">
                <i class="fa-brands fa-laravel text-4xl text-red-500 mb-2"></i>
                <h4 class="font-bold text-sm">Laravel 13</h4>
            </div>
            <div class="bg-cardDark border border-gray-800 p-6 rounded-2xl hover:border-neonGreen transition">
                <i class="fa-brands fa-php text-4xl text-indigo-400 mb-2"></i>
                <h4 class="font-bold text-sm">PHP 8.3+</h4>
            </div>
            <div class="bg-cardDark border border-gray-800 p-6 rounded-2xl hover:border-neonGreen transition">
                <i class="fa-solid fa-database text-4xl text-sky-400 mb-2"></i>
                <h4 class="font-bold text-sm">MySQL / Database</h4>
            </div>
            <div class="bg-cardDark border border-gray-800 p-6 rounded-2xl hover:border-neonGreen transition">
                <i class="fa-brands fa-js text-4xl text-yellow-400 mb-2"></i>
                <h4 class="font-bold text-sm">JavaScript</h4>
            </div>
            <div class="bg-cardDark border border-gray-800 p-6 rounded-2xl hover:border-neonGreen transition">
                <i class="fa-brands fa-unity text-4xl text-white mb-2"></i>
                <h4 class="font-bold text-sm">Unity Game Dev</h4>
            </div>
            <div class="bg-cardDark border border-gray-800 p-6 rounded-2xl hover:border-neonGreen transition">
                <i class="fa-brands fa-git-alt text-4xl text-orange-500 mb-2"></i>
                <h4 class="font-bold text-sm">Git & GitHub</h4>
            </div>
        </div>
    </section>

    <!-- TENTANG SAYA -->
    <section id="tentang" class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 lg:grid-cols-12 gap-8">
        <div class="lg:col-span-5 bg-neonGreen text-black p-8 rounded-3xl flex flex-col justify-between shadow-xl">
            <div>
                <span class="bg-black text-neonGreen text-xs font-bold px-3 py-1 rounded-full uppercase">Prinsip PPLG</span>
                <h3 class="text-3xl font-black mt-4 leading-tight">FOKUS, DISIPLIN, KONSISTEN</h3>
            </div>
            <p class="font-medium text-sm mt-6">"Menulis kode bersih adalah sebuah seni, menciptakan solusi digital yang bermanfaat adalah prioritas."</p>
        </div>
        <div class="lg:col-span-7 bg-cardDark border border-gray-800 p-8 rounded-3xl flex flex-col justify-center">
            <h2 class="text-2xl font-black mb-4">TENTANG SAYA</h2>
            <p class="text-gray-400 text-sm leading-relaxed mb-4">
                Halo! Saya <strong class="text-white">Yusup</strong>, seorang siswa yang mendalami bidang <strong class="text-neonGreen">PPLG (Pengembangan Perangkat Lunak dan Gim)</strong>. Saya sangat antusias dalam merancang dan membangun aplikasi web modern menggunakan teknologi mutakhir seperti <strong class="text-white">Laravel 13</strong>, serta senang mengeksplorasi logika di balik pembuatan gim komputer.
            </p>
            <p class="text-gray-400 text-sm leading-relaxed">
                Saya selalu siap mempelajari hal baru, beradaptasi dengan perkembangan dunia teknologi, dan siap berkolaborasi dalam tim untuk menyelesaikan proyek-proyek digital yang menantang.
            </p>
        </div>
    </section>

   <!-- KONTAK / FOOTER -->
    <footer id="kontak" class="max-w-7xl mx-auto px-6 py-16 border-t border-gray-800 mt-12">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <h2 class="text-3xl font-black mb-2">MARI CIPTAKAN KARYA <span class="text-neonGreen">YANG HEBAT!</span></h2>
                <p class="text-gray-400 text-sm">Hubungi saya untuk kolaborasi proyek PPLG, tugas akhir, atau diskusi seputar pemrograman.</p>
            </div>
            <div class="flex flex-wrap items-center gap-4">
                <!-- Tombol Kotak Email -->
                <a href="mailto:yusup@pplg.test" title="Kirim Email" class="w-12 h-12 bg-cardDark border border-gray-700 hover:border-neonGreen rounded-xl flex items-center justify-center transition">
                    <i class="fa-solid fa-envelope text-lg text-neonGreen"></i>
                </a>
                
                <!-- Tombol Kotak WhatsApp (Ganti nomor 6281234567890 dengan nomor WhatsApp Anda) -->
                <a href="https://wa.me/6281234567890?text=Halo%20Yusup,%20saya%20tertarik%20dengan%20portofolio%20PPLG%20Anda." target="_blank" title="Chat WhatsApp" class="w-12 h-12 bg-cardDark border border-gray-700 hover:border-emerald-500 rounded-xl flex items-center justify-center transition">
                    <i class="fa-brands fa-whatsapp text-lg text-emerald-400"></i>
                </a>
            </div>
        </div>
        <div class="text-center text-xs text-gray-500 mt-12">
            © 2026 Yusup • Portofolio PPLG dengan Laravel 13.
        </div>
    </footer>
</body>
</html>