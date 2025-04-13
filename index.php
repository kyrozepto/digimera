<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digimera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-slate-800">

    <div id="app-container">

        <div id="user-content">
            <header class="sticky top-0 bg-white shadow-sm z-50 px-4 md:px-8 py-3">
                <nav class="flex flex-wrap justify-between items-center gap-4">
                <a href="#home" class="nav-link">
                <img src="assets/svg/digimera-logo.svg" alt="Digimera Logo" class="h-8 md:h-10">
                </a>

                    <div class="flex space-x-2 md:space-x-4">
                        <a href="#home" class="nav-link text-slate-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm md:text-base">Beranda</a>
                        <a href="#user-catalog" class="nav-link text-slate-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm md:text-base">Paket Branding</a>
                        <!-- <a href="#user-portfolio-page" class="nav-link text-slate-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm md:text-base">Portfolio</a> -->
                        <a href="#user-inspiration-page" class="nav-link text-slate-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm md:text-base">Inspirasi Desain</a>
                        <a href="#user-order-form" class="nav-link bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 text-sm md:text-base">Pesan Sekarang</a>
                        <a href="#admin-login" id="admin-login-nav-link" class="nav-link text-slate-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm md:text-base border border-slate-300">Admin</a>
                    </div>
                </nav>
            </header>

            <main class="px-4 md:px-8">

                <section id="home" class="pt-16 md:pt-24 pb-12 md:pb-16">
                    <div class="text-center mb-16 md:mb-24 max-w-7xl mx-auto">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 text-slate-900">Bangun Identitas Brand Profesional untuk UMKM Anda</h1>
                        <p class="text-lg text-slate-600 mb-8 max-w-6xl mx-auto">Solusi branding cepat, mudah, dan terjangkau untuk membantu bisnis Anda tumbuh di era digital.</p>
                        <a href="#user-catalog" class="nav-link bg-indigo-600 text-white px-8 py-3 rounded-full text-lg hover:bg-indigo-700">Lihat Penawaran</a>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8 mb-16 md:mb-24 text-center max-w-7xl mx-auto">
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                            <h3 class="font-semibold text-xl mb-2 text-slate-900">Desain Cepat</h3>
                            <p class="text-slate-600">Dapatkan desain berkualitas dalam waktu singkat dengan template siap pakai.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                            <h3 class="font-semibold text-xl mb-2 text-slate-900">Harga Terjangkau</h3>
                            <p class="text-slate-600">Paket bundling fleksibel sesuai anggaran UMKM.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                            <h3 class="font-semibold text-xl mb-2 text-slate-900">Mudah Digunakan</h3>
                            <p class="text-slate-600">Proses pemesanan dan revisi yang simpel dibantu desainer kami.</p>
                        </div>
                    </div>

                    <div id="user-portfolio-preview" class="mb-16 mx-auto">
                        <!-- <h3 class="text-3xl font-semibold mb-8 text-center text-slate-900">Project Kami</h3> -->
                        <div class="grid grid-cols-2 md:grid-cols-2 gap-4 md:gap-6">
                            <img src="assets/images/gdgc-merch.jpg" alt="Contoh Desain 1" class="rounded-lg shadow-md w-full h-auto object-cover aspect-video" onerror="this.onerror=null;this.src='https://placehold.co/300x200/fecaca/991b1b?text=Gagal+Muat';">
                            <img src="https://placehold.co/300x200/e2e8f0/64748b" alt="Contoh Desain 2" class="rounded-lg shadow-md w-full h-auto object-cover aspect-video" onerror="this.onerror=null;this.src='https://placehold.co/300x200/fecaca/991b1b?text=Gagal+Muat';">
                            <img src="https://placehold.co/300x200/e2e8f0/64748b" alt="Contoh Desain 3" class="rounded-lg shadow-md w-full h-auto object-cover aspect-video" onerror="this.onerror=null;this.src='https://placehold.co/300x200/fecaca/991b1b?text=Gagal+Muat';">
                            <img src="https://placehold.co/300x200/e2e8f0/64748b" alt="Contoh Desain 4" class="rounded-lg shadow-md w-full h-auto object-cover aspect-video" onerror="this.onerror=null;this.src='https://placehold.co/300x200/fecaca/991b1b?text=Gagal+Muat';">
                        </div>
                        <div class="text-center mt-8">
                             <a href="#user-portfolio-page" class="nav-link hover:text-indigo-600 font-medium">Lihat desain lainnya &rarr;</a>
                        </div>
                    </div>
                </section>

                <section id="user-catalog" class="py-9 md:py-12">
                    <div class="max-w-7xl mx-auto">
                        <h2 class="text-3xl font-bold text-center text-slate-900 mb-4">Katalog Paket Branding</h2>
                        <p class="text-center text-slate-600 mb-12 max-w-xl mx-auto">Pilih paket yang paling sesuai dengan kebutuhan dan anggaran bisnis Anda.</p>

                        <div id="package-cards-container" class="grid md:grid-cols-3 gap-8">
                            <div class="package-card border border-slate-200 rounded-lg p-6 flex flex-col transition-all duration-200 ease-in-out bg-white hover:shadow-lg" data-package-id="starter">
                                <h3 class="text-xl font-semibold mb-2 text-slate-900">Paket Starter</h3>
                                <p class="text-slate-600 mb-4 flex-grow">Desain logo dasar dan kartu nama. Cocok untuk memulai.</p>
                                <p class="text-2xl font-bold mb-4 text-slate-900">Rp 100.000</p>
                                <button data-package-id="starter" class="package-detail-button mt-auto w-full text-center bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-medium">Lihat Detail</button>
                            </div>
                            <div class="package-card border border-slate-200 rounded-lg p-6 flex flex-col transition-all duration-200 ease-in-out bg-white hover:shadow-lg" data-package-id="bisnis">
                                <h3 class="text-xl font-semibold mb-2 text-slate-900">Paket Bisnis</h3>
                                <p class="text-slate-600 mb-4 flex-grow">Logo, kartu nama, kop surat, dan template media sosial. Untuk UMKM yang berkembang.</p>
                                <p class="text-2xl font-bold mb-4 text-slate-900">Rp 250.000</p>
                                <button data-package-id="bisnis" class="package-detail-button mt-auto w-full text-center bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-medium">Lihat Detail</button>
                            </div>
                            <div class="package-card border border-slate-200 rounded-lg p-6 flex flex-col transition-all duration-200 ease-in-out bg-white hover:shadow-lg" data-package-id="profesional">
                                <h3 class="text-xl font-semibold mb-2 text-slate-900">Paket Profesional</h3>
                                <p class="text-slate-600 mb-4 flex-grow">Semua di Paket Bisnis + desain brosur/flyer dan panduan brand.</p>
                                <p class="text-2xl font-bold mb-4 text-slate-900">Rp 350.000</p>
                                <button data-package-id="profesional" class="package-detail-button mt-auto w-full text-center bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-medium">Lihat Detail</button>
                            </div>
                        </div>

                        <div id="inline-package-detail-container" class="bg-slate-50 p-6 md:p-8 rounded-lg border border-slate-200 shadow-inner">
                             <button id="close-detail-button" class="float-right text-slate-500 hover:text-slate-700 text-2xl font-bold leading-none -mt-4 -mr-2">&times;</button>
                             <h2 id="package-detail-title" class="text-2xl md:text-3xl font-bold text-slate-900 mb-6">Detail Paket</h2>
                             <div class="flex flex-col md:flex-row gap-8 lg:gap-12">
                                 <div class="md:w-1/3">
                                     <img id="package-detail-image" src="https://placehold.co/400x300/cccccc/666666?text=Pilih+Paket" alt="Detail Paket" class="rounded-lg shadow-md w-full h-auto object-cover aspect-square md:aspect-auto" onerror="this.onerror=null;this.src='https://placehold.co/400x300/fecaca/991b1b?text=Gagal+Muat';">
                                 </div>
                                 <div class="md:w-2/3">
                                     <h3 id="package-detail-name" class="text-xl md:text-2xl font-bold mb-2 text-slate-900">Nama Paket</h3>
                                     <p id="package-detail-price" class="text-2xl md:text-3xl font-bold text-indigo-600 mb-5">Harga</p>
                                     <p id="package-detail-description" class="text-slate-600 mb-6">Deskripsi paket...</p>
                                     <h4 class="font-semibold text-lg mb-2 text-slate-900">Yang Anda Dapatkan:</h4>
                                     <ul id="package-detail-features" class="list-disc list-inside text-slate-600 mb-6 space-y-1">
                                         <li>Fitur...</li>
                                     </ul>
                                     <h4 class="font-semibold text-lg mb-2 text-slate-900">Estimasi Pengerjaan:</h4>
                                     <p id="package-detail-estimation" class="text-slate-600 mb-8">Estimasi...</p>
                                     <a href="#user-order-form" id="package-detail-order-button" class="nav-link bg-indigo-600 text-white px-8 py-3 rounded-md text-lg hover:bg-indigo-700 inline-block">Pesan Paket Ini</a>
                                 </div>
                             </div>
                        </div>
                    </div>
                </section>

                <section id="user-inspiration-page" class="py-9 md:py-12">
                    <div class="max-w-7xl mx-auto">
                        <h2 class="text-3xl font-bold text-center text-slate-900 mb-4">Jelajahi Inspirasi Desain</h2>
                        <p class="text-center text-slate-600 mb-10 max-w-xl mx-auto">Temukan gaya visual yang Anda sukai untuk membantu kami memahami preferensi desain brand Anda.</p>

                        <div id="inspiration-filters-page" class="flex flex-wrap justify-center gap-3 mb-8">
                                <button data-query="minimal logo" class="filter-button active bg-indigo-600 text-white px-4 py-2 rounded-full text-sm transition duration-150 ease-in-out font-semibold">Logo Minimalis</button>
                                <button data-query="coffee shop brand" class="filter-button bg-slate-100 text-slate-700 px-4 py-2 rounded-full text-sm transition duration-150 ease-in-out">Tema Coffee Shop</button>
                                <button data-query="packaging design" class="filter-button bg-slate-100 text-slate-700 px-4 py-2 rounded-full text-sm transition duration-150 ease-in-out">Desain Kemasan</button>
                                <button data-query="food packaging brand" class="filter-button bg-slate-100 text-slate-700 px-4 py-2 rounded-full text-sm transition duration-150 ease-in-out">Branding Makanan</button>
                                <button data-query="typography brand" class="filter-button bg-slate-100 text-slate-700 px-4 py-2 rounded-full text-sm transition duration-150 ease-in-out">Desain Tipografi</button>
                                <button data-query="cosmetic product brand" class="filter-button bg-slate-100 text-slate-700 px-4 py-2 rounded-full text-sm transition duration-150 ease-in-out">Branding Kosmetik</button>
                        </div>

                        <div id="inspiration-grid-container-page">
                            <div id="inspiration-loader-page" class="loader" style="display: none;"></div>
                            <div id="inspiration-error-page" class="text-center text-red-600 my-4" style="display: none;">Gagal memuat gambar. Silakan coba lagi.</div>
                            <div id="inspiration-grid-page" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                                </div>
                            <div class="text-center mt-8">
                                <button id="load-more-inspiration" class="load-more-button bg-slate-200 text-slate-800 px-6 py-2 rounded-full hover:bg-slate-300 transition duration-150 ease-in-out">
                                    Muat Lebih Banyak
                                </button>
                            </div>
                        </div>
                         <p class="text-xs text-center text-slate-500 mt-4">Gambar dari <a href="https://unsplash.com" target="_blank" rel="noopener noreferrer" class="underline hover:text-indigo-600">Unsplash</a></p>
                    </div>
                </section>

                <section id="user-order-form" class="py-9 md:py-12">
                     <div class="max-w-2xl mx-auto">
                        <h2 class="text-3xl font-bold text-center text-slate-900 mb-4">Formulir Pemesanan</h2>
                        <p class="text-center text-slate-600 mb-10">Lengkapi detail berikut agar kami dapat memahami kebutuhan branding Anda.</p>
                        <form id="order-form-element" action="#" method="POST" class="space-y-6 bg-white p-6 md:p-8 rounded-lg border border-slate-200 shadow-sm">
                            <div>
                                <label for="nama_lengkap" class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" required class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                             <div>
                                <label for="nama_usaha" class="block text-sm font-medium text-slate-700 mb-1">Nama Usaha/Brand</label>
                                <input type="text" name="nama_usaha" id="nama_usaha" required class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                             <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Alamat Email</label>
                                <input type="email" name="email" id="email" required class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                             <div>
                                <label for="telepon" class="block text-sm font-medium text-slate-700 mb-1">Nomor Telepon (WhatsApp Aktif)</label>
                                <input type="tel" name="telepon" id="telepon" required class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                             <div>
                                <label for="paket" class="block text-sm font-medium text-slate-700 mb-1">Paket yang Dipilih</label>
                                <select id="form-paket-select" name="paket" required class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 bg-white">
                                    <option value="">Pilih Paket</option>
                                    <option value="starter">Paket Starter</option>
                                    <option value="bisnis">Paket Bisnis</option>
                                    <option value="profesional">Paket Profesional</option>
                                    <option value="custom">Lainnya/Custom</option>
                                </select>
                            </div>
                             <div>
                                <label for="deskripsi" class="block text-sm font-medium text-slate-700 mb-1">Deskripsi Singkat Usaha & Kebutuhan Desain</label>
                                <textarea id="deskripsi" name="deskripsi" rows="4" required class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Jelaskan tentang usaha anda, target pasar, preferensi desain (jika ada), dan apa saja yang anda butuhkan..."></textarea>
                            </div>
                            <div>
                                 <label for="inspirasi_ref" class="block text-sm font-medium text-slate-700 mb-1">Referensi Inspirasi (Opsional)</label>
                                 <input type="text" name="inspirasi_ref" id="inspirasi_ref" class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Sebutkan tema atau gaya desain yang anda sukai">
                             </div>
                            <div>
                                <button type="submit" id="submit-order-button" class="w-full bg-indigo-600 text-white px-6 py-3 rounded-md text-lg hover:bg-indigo-700">Kirim Pesanan</button>
                            </div>
                        </form>
                    </div>
                </section>

                <section id="user-order-status" class="py-9 md:py-12 hidden">
                     <div class="max-w-2xl mx-auto">
                        <div class="text-center bg-white p-8 md:p-12 rounded-lg border border-slate-200 shadow-sm">
                             <svg class="w-16 h-16 text-green-500 mx-auto mb-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-slate-900">Pesanan Anda Telah Diterima!</h2>
                            <p class="text-slate-600 mb-6">Terima kasih telah memesan <strong id="confirm-package-name">[Nama Paket]</strong> di Digimera. Tim kami akan segera menghubungi Anda melalui WhatsApp atau Email dalam 1x24 jam kerja untuk konfirmasi dan konsultasi awal.</p>
                            <p class="text-slate-600 mb-8">Nomor Referensi Pesanan Anda: <strong id="confirm-order-ref" class="text-slate-900">DGMR-XXXXX</strong></p>
                            <div class="bg-slate-50 p-4 rounded-md border border-slate-200">
                                <p class="text-sm text-slate-700">Sambil menunggu, Anda bisa menyiapkan materi pendukung seperti preferensi warna, contoh desain yang disukai, atau detail lain yang relevan.</p>
                            </div>
                             <a href="#home" class="nav-link mt-10 inline-block bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700">Kembali ke Beranda</a>
                        </div>
                    </div>
                </section>

            </main>

            <footer class="text-center border-t border-slate-200 pt-8 pb-8 mt-16 text-slate-500 text-sm px-4 md:px-8">
                &copy; <span id="current-year"></span> Digimera.
            </footer>
        </div><section id="admin-login" class="hidden main-page-section flex items-center justify-center min-h-screen bg-slate-100 px-4 py-12">
             <div class="bg-white shadow-sm rounded-lg p-8 border border-slate-200 max-w-md w-full">
                 <div class="text-center mb-8">
                     <a href="#home" class="nav-link text-3xl font-bold text-indigo-600 mb-2 inline-block">Digimera</a>
                     <h2 class="text-xl font-semibold text-slate-700">Login Admin</h2>
                 </div>
                 <form id="admin-login-form" action="#" method="POST" class="space-y-6" onsubmit="event.preventDefault();">
                     <div>
                         <label for="admin_email" class="block text-sm font-medium text-slate-700 mb-1">
                             Email
                         </label>
                         <input
                             type="email"
                             name="admin_email"
                             id="admin_email"
                             required
                             class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                         />
                     </div>
                     <div>
                         <label for="admin_password" class="block text-sm font-medium text-slate-700 mb-1">
                             Password
                         </label>
                         <input
                             type="password"
                             name="admin_password"
                             id="admin_password"
                             required
                             class="w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                         />
                     </div>
                     <div class="flex items-center justify-between">
                         <div class="flex items-center">
                             <input
                                 id="remember_me"
                                 name="remember_me"
                                 type="checkbox"
                                 class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded"
                             />
                             <label for="remember_me" class="ml-2 block text-sm text-slate-900">
                                 Ingat saya
                             </label>
                         </div>
                     </div>
                     <div id="login-error-message" class="text-red-600 text-sm mt-2 text-center" style="display: none;"></div>
                     <div>
                         <button
                             type="button"
                             id="admin-login-button"
                             class="block w-full text-center bg-indigo-600 text-white px-6 py-3 rounded-md text-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out"
                         >
                             Login
                         </button>
                     </div>
                     <div class="text-center text-sm">
                         <a href="#home" id="back-to-home-link" class="nav-link font-medium text-indigo-600 hover:text-indigo-500">Kembali ke Halaman Utama</a>
                     </div>
                 </form>
             </div>
        </section>

        <section id="admin-area" class="hidden main-page-section min-h-screen bg-slate-100">
            <div class="flex">
                <aside class="w-64 bg-white shadow-md h-screen sticky top-0 p-6 flex flex-col">
                     <a href="#home" id="admin-logo-link" class="nav-link text-2xl font-bold text-indigo-600 mb-10">Digimera <span class="text-sm font-normal text-slate-500">Admin</span></a>
                    <nav class="flex flex-col space-y-2">
                        <a href="#admin-dashboard" class="admin-nav-link nav-link text-slate-700 hover:bg-slate-100 px-3 py-2 rounded-md flex items-center gap-2 active">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                            Dashboard
                        </a>
                        <a href="#admin-orders" class="admin-nav-link nav-link text-slate-700 hover:bg-slate-100 px-3 py-2 rounded-md flex items-center gap-2">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                            Pesanan
                        </a>
                        <a href="#admin-packages" class="admin-nav-link nav-link text-slate-700 hover:bg-slate-100 px-3 py-2 rounded-md flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                            Paket
                        </a>
                        <a href="#admin-portfolio" class="admin-nav-link nav-link text-slate-700 hover:bg-slate-100 px-3 py-2 rounded-md flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            Portfolio
                        </a>
                         <a href="#admin-users" class="admin-nav-link nav-link text-slate-700 hover:bg-slate-100 px-3 py-2 rounded-md flex items-center gap-2">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21v-1a6 6 0 00-1.781-4.121M12 10.875a4 4 0 100-5.292M12 10.875a4 4 0 110 5.292" /></svg>
                            Pengguna
                        </a>
                    </nav>
                    <div class="mt-auto">
                         <a href="#home" id="admin-logout-button" class="nav-link text-red-600 hover:bg-red-50 px-3 py-2 rounded-md flex items-center gap-2">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                             Logout
                         </a>
                    </div>
                </aside>

                <main class="flex-1 p-6 md:p-10 overflow-y-auto">
                    <div id="admin-content-area">
                        <div id="admin-dashboard" class="admin-page" style="display: block;">
                           <h2 class="text-2xl font-semibold text-slate-800 mb-6">Admin Dashboard</h2>
                            <div class="grid md:grid-cols-3 gap-6 mb-10">
                               <div class="bg-white p-6 rounded-lg shadow border border-slate-200">
                                   <h3 class="text-sm font-medium text-blue-600">Pesanan Baru</h3>
                                   <p class="text-3xl font-bold text-slate-900 mt-1">5</p>
                               </div>
                               <div class="bg-white p-6 rounded-lg shadow border border-slate-200">
                                   <h3 class="text-sm font-medium text-yellow-600">Dalam Pengerjaan</h3>
                                   <p class="text-3xl font-bold text-slate-900 mt-1">12</p>
                               </div>
                                <div class="bg-white p-6 rounded-lg shadow border border-slate-200">
                                   <h3 class="text-sm font-medium text-green-600">Pesanan Selesai (Bulan Ini)</h3>
                                   <p class="text-3xl font-bold text-slate-900 mt-1">28</p>
                               </div>
                           </div>
                            <h3 class="text-xl font-semibold mb-4 text-slate-800">Pesanan Terbaru</h3>
                           <div class="overflow-x-auto bg-white rounded-lg shadow border border-slate-200">
                               <table class="min-w-full divide-y divide-slate-200">
                                   <thead class="bg-slate-50">
                                       <tr>
                                           <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">ID Pesanan</th>
                                           <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Nama Klien</th>
                                           <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Paket</th>
                                           <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Tanggal</th>
                                           <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                                           <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Aksi</th>
                                       </tr>
                                   </thead>
                                   <tbody class="bg-white divide-y divide-slate-200">
                                       <tr> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">DGMR-12345</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Budi Santoso</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Paket Bisnis</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">12 Apr 2025</td> <td class="px-6 py-4 whitespace-nowrap"> <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Baru</span> </td> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"> <a href="#admin-orders/DGMR-12345" class="admin-order-detail-link nav-link text-indigo-600 hover:text-indigo-900">Lihat</a> </td> </tr>
                                        <tr> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">DGMR-12344</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Ani Wijaya</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Paket Starter</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">11 Apr 2025</td> <td class="px-6 py-4 whitespace-nowrap"> <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Proses Desain</span> </td> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"> <a href="#admin-orders/DGMR-12344" class="admin-order-detail-link nav-link text-indigo-600 hover:text-indigo-900">Lihat</a> </td> </tr>
                                        <tr> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">DGMR-12340</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Citra Lestari</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Paket Profesional</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">10 Apr 2025</td> <td class="px-6 py-4 whitespace-nowrap"> <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span> </td> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"> <a href="#admin-orders/DGMR-12340" class="admin-order-detail-link nav-link text-indigo-600 hover:text-indigo-900">Lihat</a> </td> </tr>
                                   </tbody>
                               </table>
                           </div>
                        </div>

                        <div id="admin-orders" class="admin-page">
                             <h2 class="text-2xl font-semibold text-slate-800 mb-6">Manajemen Pesanan</h2>
                             <div id="admin-order-detail-content" class="bg-white p-6 rounded-lg shadow border border-slate-200">
                                 <p id="admin-order-placeholder" class="text-slate-500">Pilih pesanan dari dashboard atau daftar untuk melihat detail.</p>
                                  <div id="admin-order-detail-view" class="hidden">
                                     <h3 class="text-xl font-semibold mb-4">Detail Pesanan <span id="admin-order-id-display"></span></h3>
                                      <div class="grid md:grid-cols-3 gap-6">
                                        <div class="md:col-span-1 space-y-4">
                                            <div class="bg-slate-50 p-4 rounded-lg border"> <h4 class="font-semibold mb-2 text-slate-700">Informasi Klien</h4> <p><strong>Nama:</strong> <span id="admin-client-name"></span></p> <p><strong>Usaha:</strong> <span id="admin-client-business"></span></p> <p><strong>Email:</strong> <span id="admin-client-email"></span></p> <p><strong>Telepon:</strong> <span id="admin-client-phone"></span></p> </div>
                                            <div class="bg-slate-50 p-4 rounded-lg border"> <h4 class="font-semibold mb-2 text-slate-700">Detail Pesanan</h4> <p><strong>Paket:</strong> <span id="admin-package-name"></span></p> <p><strong>Tanggal:</strong> <span id="admin-order-date"></span></p> <p><strong>Status:</strong> <span id="admin-order-status" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"></span></p> <p><strong>Harga:</strong> <span id="admin-order-price"></span></p> <p><strong>Pembayaran:</strong> <span id="admin-payment-status"></span></p> <p><strong>Ref. Inspirasi:</strong> <span id="admin-inspiration-ref"></span></p> </div>
                                            <div class="bg-slate-50 p-4 rounded-lg border"> <h4 class="font-semibold mb-2 text-slate-700">Tugaskan Desainer</h4> <select name="designer" class="w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm bg-white mb-2"> <option>Pilih Desainer</option> <option>Rina</option> <option>Andi</option> <option>Dewi</option> </select> <button class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Tugaskan</button> </div>
                                        </div>
                                        <div class="md:col-span-2 space-y-6">
                                             <div class="bg-slate-50 p-4 rounded-lg border"> <h4 class="font-semibold mb-2 text-slate-700">Deskripsi Kebutuhan</h4> <p id="admin-client-needs" class="text-slate-700"></p> </div>
                                             <div class="bg-slate-50 p-4 rounded-lg border"> <h4 class="font-semibold mb-2 text-slate-700">Aktivitas & Revisi</h4> <div id="admin-activity-log" class="space-y-3 text-sm"> <p class="text-slate-500 italic">Belum ada aktivitas.</p> </div> </div>
                                             <div class="bg-slate-50 p-4 rounded-lg border"> <h4 class="font-semibold mb-2 text-slate-700">Unggah File / Revisi</h4> <input type="file" name="design_file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 mb-2"/> <textarea name="revision_notes" rows="2" placeholder="Catatan untuk klien..." class="w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm mb-2"></textarea> <button class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Unggah File</button> </div>
                                             <div class="bg-slate-50 p-4 rounded-lg border"> <h4 class="font-semibold mb-2 text-slate-700">Update Status Pesanan</h4> <select id="admin-update-status-select" name="order_status" class="w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm bg-white mb-2"> <option value="baru">Baru</option> <option value="konsultasi">Konsultasi</option> <option value="proses_desain">Proses Desain</option> <option value="menunggu_feedback">Menunggu Feedback</option> <option value="revisi">Revisi</option> <option value="menunggu_pembayaran">Menunggu Pembayaran</option> <option value="selesai">Selesai</option> <option value="dibatalkan">Dibatalkan</option> </select> <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Update Status</button> </div>
                                        </div>
                                    </div>
                                  </div>
                             </div>
                        </div>
                        <div id="admin-packages" class="admin-page">
                           <h2 class="text-2xl font-semibold text-slate-800 mb-6">Manajemen Paket</h2>
                           <div class="text-right mb-6">
                               <button class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 text-sm font-medium">Tambah Paket Baru</button>
                           </div>
                           <div class="overflow-x-auto bg-white rounded-lg shadow border border-slate-200">
                               <table class="min-w-full divide-y divide-slate-200">
                                   <thead class="bg-slate-50"> <tr> <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Nama Paket</th> <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Harga</th> <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Deskripsi Singkat</th> <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th> <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Aksi</th> </tr> </thead>
                                   <tbody class="bg-white divide-y divide-slate-200">
                                       <tr> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">Paket Starter</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Rp 100.000</td> <td class="px-6 py-4 text-sm text-slate-500 max-w-xs truncate">Desain logo dasar dan kartu nama.</td> <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span></td> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2"> <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> <a href="#" class="text-red-600 hover:text-red-900">Hapus</a> </td> </tr>
                                        <tr> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">Paket Bisnis</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Rp 200.000</td> <td class="px-6 py-4 text-sm text-slate-500 max-w-xs truncate">Logo, kartu nama, kop surat, template medsos.</td> <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span></td> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2"> <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> <a href="#" class="text-red-600 hover:text-red-900">Hapus</a> </td> </tr>
                                        <tr> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">Paket Profesional</td> <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Rp 350.000</td> <td class="px-6 py-4 text-sm text-slate-500 max-w-xs truncate">Paket Bisnis + brosur + panduan brand.</td> <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Nonaktif</span></td> <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2"> <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> <a href="#" class="text-red-600 hover:text-red-900">Hapus</a> </td> </tr>
                                   </tbody>
                               </table>
                           </div>
                        </div>
                        <div id="admin-portfolio" class="admin-page">
                           <h2 class="text-2xl font-semibold text-slate-800 mb-6">Manajemen Portfolio</h2>
                           <p class="text-slate-500">Area untuk menambah, mengedit, atau menghapus item portfolio.</p>
                        </div>
                        <div id="admin-users" class="admin-page">
                           <h2 class="text-2xl font-semibold text-slate-800 mb-6">Manajemen Pengguna</h2>
                           <p class="text-slate-500">Area untuk melihat daftar pengguna/klien terdaftar.</p>
                        </div>
                    </div></main>
            </div>
        </section> </div> <script src="script.js"></script>
</body>
</html>
