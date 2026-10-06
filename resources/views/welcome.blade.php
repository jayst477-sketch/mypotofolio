<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yusup - PPLG Portfolio | Laravel 13</title>
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
        .handwritten { font-family: 'Comic Sans MS', cursive, sans-serif; }
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
            <a href="#home" class="text-neonGreen hover:text-neonGreen transition">Home</a>
            <a href="#projects" class="hover:text-neonGreen transition">Projects</a>
            <a href="#skills" class="hover:text-neonGreen transition">Skills</a>
            <a href="#about" class="hover:text-neonGreen transition">About</a>
            <a href="#contact" class="hover:text-neonGreen transition">Contact</a>
        </nav>
        <button class="bg-purple-600 hover:bg-purple-700 text-white p-2.5 rounded-xl md:hidden">
            <i class="fa-solid fa-bars"></i>
        </button>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative">
        <div class="lg:col-span-7 z-10">
            <div class="inline-block bg-purple-900/40 text-purple-300 px-4 py-1.5 rounded-full text-sm font-semibold mb-6 border border-purple-500/30">
                👋 Hey, I'm Yusup
            </div>
            <h1 class="text-5xl sm:text-7xl font-black tracking-tight leading-none mb-6">
                SOFTWARE <br>
                <span class="text-neonGreen bg-black px-2 border-b-4 border-neonGreen">ENGINEER</span>
            </h1>
            <p class="text-gray-400 text-lg mb-8 max-w-lg">
                Siswa PPLG (Pengembangan Perangkat Lunak & Gim) yang berfokus pada Fullstack Web Development, Backend Laravel, dan Pembuatan Game interaktif.
            </p>
            <div class="flex flex-wrap gap-4 items-center">
                <a href="#projects" class="bg-neonGreen text-black font-extrabold px-8 py-4 rounded-full hover:scale-105 transition shadow-lg shadow-neonGreen/20 flex items-center gap-2">
                    <i class="fa-solid fa-play"></i> View Projects
                </a>
                <a href="#contact" class="border border-gray-700 hover:border-gray-500 px-8 py-4 rounded-full font-semibold transition">
                    Let's Talk ↗
                </a>
            </div>
        </div>

        <!-- Ilustrasi Karakter Kartun ala Referensi -->
        <div class="lg:col-span-5 relative flex justify-center">
            <div class="absolute -top-10 right-10 bg-sky-400 text-black px-4 py-2 rounded-2xl rounded-bl-none text-xs font-bold shadow-lg animate-bounce">
                LET'S CODE SOMETHING AWESOME! 🚀
            </div>
            <div class="w-72 h-72 sm:w-96 sm:y-96 bg-gradient-to-tr from-purple-900 to-indigo-600 rounded-3xl p-3 shadow-2xl relative border-4 border-purple-500/40 flex items-center justify-center overflow-hidden">
                <!-- Placeholder Ilustrasi Kartun Gaya Doodle -->
                <div class="text-center">
                    <i class="fa-solid fa-laptop-code text-8xl text-neonGreen mb-4 drop-shadow-[0_0_15px_rgba(204,255,0,0.6)]"></i>
                    <p class="font-bold text-lg text-white">PPLG Creator</p>
                    <span class="text-xs text-purple-200">Laravel 13 & Game Dev Expert</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED PROJECTS (PPLG) -->
    <section id="projects" class="max-w-7xl mx-auto px-6 py-20">
        <div class="flex justify-between items-end mb-12">
            <div>
                <span class="text-neonGreen text-sm font-bold tracking-widest uppercase">✨ PORTFOLIO</span>
                <h2 class="text-3xl sm:text-4xl font-black mt-2">FEATURED PPLG PROJECTS</h2>
            </div>
            <a href="#" class="text-sm font-bold text-gray-400 hover:text-white transition">View All Projects →</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Project 1 -->
            <div class="bg-cardDark border border-gray-800 rounded-3xl p-4 hover:border-neonGreen transition group">
                <div class="bg-purple-950/40 rounded-2xl h-44 mb-4 flex items-center justify-center border border-purple-900/50 group-hover:scale-[1.02] transition">
                    <i class="fa-solid fa-cart-shopping text-4xl text-neonGreen"></i>
                </div>
                <h3 class="font-bold text-lg mb-1">E-Commerce Laravel</h3>
                <p class="text-xs text-gray-400 mb-4">Aplikasi Toko Online lengkap dengan sistem pembayaran Midtrans.</p>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] bg-gray-800 text-neonGreen px-2.5 py-1 rounded-full">Laravel 13</span>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neonGreen hover:text-black transition">↗</a>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="bg-cardDark border border-gray-800 rounded-3xl p-4 hover:border-neonGreen transition group">
                <div class="bg-indigo-950/40 rounded-2xl h-44 mb-4 flex items-center justify-center border border-indigo-900/50 group-hover:scale-[1.02] transition">
                    <i class="fa-solid fa-gamepad text-4xl text-sky-400"></i>
                </div>
                <h3 class="font-bold text-lg mb-1">2D Platformer Game</h3>
                <p class="text-xs text-gray-400 mb-4">Game edukasi berbasis web interaktif menggunakan Unity & JS.</p>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] bg-gray-800 text-sky-400 px-2.5 py-1 rounded-full">Game Dev</span>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neonGreen hover:text-black transition">↗</a>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="bg-cardDark border border-gray-800 rounded-3xl p-4 hover:border-neonGreen transition group">
                <div class="bg-purple-950/40 rounded-2xl h-44 mb-4 flex items-center justify-center border border-purple-900/50 group-hover:scale-[1.02] transition">
                    <i class="fa-solid fa-school text-4xl text-purple-400"></i>
                </div>
                <h3 class="font-bold text-lg mb-1">SIM Sekolah</h3>
                <p class="text-xs text-gray-400 mb-4">Sistem informasi manajemen penilaian rapor siswa berbasis web.</p>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] bg-gray-800 text-purple-400 px-2.5 py-1 rounded-full">Fullstack</span>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neonGreen hover:text-black transition">↗</a>
                </div>
            </div>
            <!-- Project 4 -->
            <div class="bg-cardDark border border-gray-800 rounded-3xl p-4 hover:border-neonGreen transition group">
                <div class="bg-emerald-950/40 rounded-2xl h-44 mb-4 flex items-center justify-center border border-emerald-900/50 group-hover:scale-[1.02] transition">
                    <i class="fa-solid fa-mobile-screen text-4xl text-emerald-400"></i>
                </div>
                <h3 class="font-bold text-lg mb-1">Task Management API</h3>
                <p class="text-xs text-gray-400 mb-4">RESTful API backend tangguh untuk aplikasi pencatat tugas harian.</p>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] bg-gray-800 text-emerald-400 px-2.5 py-1 rounded-full">API Backend</span>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neonGreen hover:text-black transition">↗</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-black mb-8 text-center">SKILLS & TECH STACK</h2>
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
                <h4 class="font-bold text-sm">MySQL</h4>
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

    <!-- ABOUT ME & PHILOSOPHY -->
    <section id="about" class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 lg:grid-cols-12 gap-8">
        <div class="lg:col-span-5 bg-neonGreen text-black p-8 rounded-3xl flex flex-col justify-between shadow-xl">
            <div>
                <span class="bg-black text-neonGreen text-xs font-bold px-3 py-1 rounded-full uppercase">PPLG Motto</span>
                <h3 class="text-3xl font-black mt-4 leading-tight">FOCUS, DISCIPLINE, CONSISTENCY</h3>
            </div>
            <p class="font-medium text-sm mt-6">"Menulis kode bersih adalah seni, membuat aplikasi bermanfaat adalah misi."</p>
        </div>
        <div class="lg:col-span-7 bg-cardDark border border-gray-800 p-8 rounded-3xl flex flex-col justify-center">
            <h2 class="text-2xl font-black mb-4">ABOUT ME</h2>
            <p class="text-gray-400 text-sm leading-relaxed mb-4">
                Halo! Saya <strong class="text-white">Yusup</strong>, seorang pelajar di jurusan <strong class="text-neonGreen">PPLG (Pengembangan Perangkat Lunak dan Gim)</strong>. Saya memiliki ketertarikan mendalam dalam merancang sistem web modern menggunakan framework terbaru seperti <strong class="text-white">Laravel 13</strong> serta mengeksplorasi logika pemrograman game.
            </p>
            <p class="text-gray-400 text-sm leading-relaxed">
                Selalu bersemangat untuk mempelajari teknologi baru, memecahkan bug yang menantang, dan berkolaborasi dalam tim untuk menciptakan solusi digital yang berdampak nyata.
            </p>
        </div>
    </section>

    <!-- FOOTER / CONTACT -->
    <footer id="contact" class="max-w-7xl mx-auto px-6 py-16 border-t border-gray-800 mt-12">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <h2 class="text-3xl font-black mb-2">LET'S MAKE SOMETHING <span class="text-neonGreen">DOPE!</span></h2>
                <p class="text-gray-400 text-sm">Hubungi saya untuk kolaborasi proyek PPLG atau diskusi teknologi.</p>
            </div>
            <div class="flex items-center gap-4">
                <a href="mailto:yusup@pplg.test" class="bg-cardDark border border-gray-700 hover:border-neonGreen px-5 py-3 rounded-xl text-sm font-semibold transition flex items-center gap-2">
                    <i class="fa-solid fa-envelope text-neonGreen"></i> yusup@pplg.test
                </a>
                <a href="#" class="w-12 h-12 bg-cardDark border border-gray-700 hover:border-neonGreen rounded-xl flex items-center justify-center transition">
                    <i class="fa-brands fa-github text-lg"></i>
                </a>
                <a href="#" class="w-12 h-12 bg-cardDark border border-gray-700 hover:border-neonGreen rounded-xl flex items-center justify-center transition">
                    <i class="fa-brands fa-instagram text-lg"></i>
                </a>
                <a href="#" class="w-12 h-12 bg-cardDark border border-gray-700 hover:border-neonGreen rounded-xl flex items-center justify-center transition">
                    <i class="fa-brands fa-linkedin text-lg"></i>
                </a>
            </div>
        </div>
        <div class="text-center text-xs text-gray-500 mt-12">
            © 2026 Yusup • PPLG Portfolio Powered by Laravel 13.
        </div>
    </footer>

</body>
</html>