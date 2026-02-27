<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil {{ $person->name }} - Universitas Satya Terra Bhinneka</title>
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                        },
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(15px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Webkit Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        /* Grid background pattern */
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(148, 163, 184, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(148, 163, 184, 0.05) 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-slate-50 min-h-screen text-slate-800 antialiased selection:bg-primary-500 selection:text-white flex flex-col relative">

    <!-- Background Pattern -->
    <div class="fixed inset-0 z-0 bg-grid-pattern pointer-events-none"></div>

    <!-- Top Navigation -->
    <nav class="absolute top-0 w-full p-4 md:px-8 z-50 flex items-center justify-between">
        <a href="/" class="flex items-center gap-2 px-5 py-2.5 bg-white/80 backdrop-blur-md rounded-full text-slate-600 hover:text-primary-600 font-bold text-sm shadow-sm transition-all hover:shadow-md hover:-translate-x-1 border border-slate-200">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Direktori
        </a>
    </nav>

    <!-- Header Banner Panel (Inspired by reference image) -->
    <div class="relative z-10 w-full pt-24 pb-12 md:pt-32 md:pb-16 bg-gradient-to-br from-teal-50 via-primary-50/50 to-emerald-50 border-b border-primary-100/60 shadow-sm overflow-hidden">
        <!-- Decorative subtle shapes bg -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full bg-gradient-to-bl from-primary-200/40 to-transparent blur-[80px] -mr-20 -mt-20 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] rounded-full bg-gradient-to-tr from-emerald-200/40 to-transparent blur-[60px] -ml-20 -mb-20 pointer-events-none"></div>
        
        <div class="max-w-6xl mx-auto px-4 md:px-8 relative z-10">
            <div class="flex items-center gap-5 sm:gap-7 animate-fade-in-up">
                <div class="flex-shrink-0 relative group">
                    <div class="absolute inset-0 bg-primary-100 rounded-2xl blur-xl opacity-0 group-hover:opacity-70 transition-opacity duration-500"></div>
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo Universitas" class="h-16 sm:h-20 md:h-24 w-auto object-contain drop-shadow-md relative z-10 transition-transform duration-500 group-hover:scale-105">
                </div>
                
                <div class="flex flex-col gap-1.5 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/80 backdrop-blur-md border border-slate-200/60 rounded-full text-[10px] md:text-xs font-bold text-primary-600 uppercase tracking-[0.2em] shadow-sm w-max mb-1.5 transition-transform hover:-translate-y-0.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary-500 animate-pulse"></span>
                        {{ $person->category }}
                    </span>
                    
                    <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-[2.2rem] font-black text-transparent bg-clip-text bg-gradient-to-r from-teal-600 via-primary-500 to-emerald-500 tracking-tight leading-tight drop-shadow-sm pb-1">
                        {{ $person->name }}
                    </h1>
                    <p class="text-sm sm:text-base text-slate-600 font-bold mt-0.5 flex items-center gap-2">
                        <i class="fa-solid fa-building-columns text-primary-400"></i> Universitas Satya Terra Bhinneka
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Profile Content Container -->
    <main class="relative z-10 flex-grow max-w-6xl mx-auto px-4 md:px-8 py-8 md:py-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
        
        <!-- Sidebar (Left Column) -->
        <div class="lg:col-span-4 flex flex-col gap-6 opacity-0 animate-[fadeInUp_0.6s_ease-out_0.2s_forwards]">
            
            <!-- Photo & Identity Card -->
            <div class="bg-white rounded-[2rem] p-5 shadow-lg shadow-slate-200/40 border border-slate-100 relative overflow-hidden group hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <!-- Decorative element -->
                <div class="absolute top-0 inset-x-0 h-32 bg-gradient-to-b from-primary-50 via-teal-50/30 to-transparent -z-0"></div>
                
                <div class="w-full aspect-[3/4] rounded-2xl bg-slate-50 flex items-center justify-center overflow-hidden relative z-10 border-4 border-white shadow-md group-hover:shadow-lg transition-all duration-300 ring-1 ring-slate-100">
                    @if($person->image && file_exists(public_path('images/dosen-kw/' . $person->image)))
                        <div class="absolute inset-0 bg-primary-100 opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-10 mix-blend-overlay"></div>
                        <img src="{{ asset('images/dosen-kw/' . $person->image) }}" alt="Foto {{ $person->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                    @else
                        <!-- No Image Placeholder -->
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-50 to-slate-100 flex flex-col items-center justify-center text-slate-400">
                            <div class="w-24 h-24 rounded-full bg-slate-100 shadow-inner flex items-center justify-center mb-4 border border-slate-200 group-hover:bg-primary-50 transition-colors duration-300">
                                <i class="fa-solid fa-user-tie text-[3.5rem] text-slate-300 group-hover:text-primary-300 transition-colors duration-300"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400 bg-slate-100 px-3 py-1 rounded-full">Belum Ada Foto</span>
                        </div>
                    @endif
                </div>
                
                <div class="mt-6 text-center pb-2 relative z-10">
                    <h2 class="text-lg md:text-xl font-extrabold text-slate-800 leading-tight">{{ $person->name }}</h2>
                    <div class="mt-3 inline-flex items-center gap-1.5 bg-slate-50 py-1.5 px-4 rounded-xl border border-slate-200 shadow-sm group-hover:border-primary-100 group-hover:bg-primary-50/50 transition-colors">
                        <span class="text-[11px] font-black text-slate-400">
                            {{ strtolower($person->category) == 'mahasiswa' ? 'NIM' : (strtolower($person->category) == 'dosen' ? 'NIDN' : 'NIP') }} 
                        </span>
                        <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                        <span class="text-sm font-bold text-slate-700 font-mono tracking-wide">{{ $person->id_number }}</span>
                    </div>
                </div>
            </div>

            <!-- Academic Info Card -->
            <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-slate-100">
                <h3 class="text-[11px] font-extrabold text-slate-400 uppercase tracking-[0.15em] mb-5">Informasi Jabatan</h3>
                
                <div class="flex flex-col gap-4">
                    <!-- Program Studi -->
                    <div class="flex items-start gap-4 p-3 rounded-2xl hover:bg-slate-50 transition-colors border border-transparent hover:border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-primary-50 flex items-center justify-center text-primary-500 flex-shrink-0 shadow-sm">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Program Studi</p>
                            <p class="text-sm font-bold text-slate-700 flex items-center">
                                <span class="bg-primary-50 text-primary-700 py-0.5 px-2 rounded border border-primary-100/50 mr-2 relative">
                                    <span class="absolute left-0 top-0 bottom-0 w-1 bg-primary-400 rounded-l"></span>
                                    <span class="pl-1">{{ $person->prodi }}</span>
                                </span>
                            </p>
                        </div>
                    </div>

                    <!-- Fakultas -->
                    <div class="flex items-start gap-4 p-3 rounded-2xl hover:bg-slate-50 transition-colors border border-transparent hover:border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-500 flex-shrink-0 shadow-sm">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Fakultas</p>
                            <p class="text-sm font-bold text-slate-700 flex items-center">
                                <span class="bg-emerald-50 text-emerald-700 py-0.5 px-2 rounded border border-emerald-100/50 mr-2 relative">
                                    <span class="absolute left-0 top-0 bottom-0 w-1 bg-emerald-400 rounded-l"></span>
                                    <span class="pl-1">{{ $person->faculty ?? '-' }}</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100 my-6">

                <!-- Social & Contacts Section (From Reference Image) -->
                <div class="mb-6">
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-[0.15em] mb-3">Media Tersedia</p>
                    <div class="flex gap-2">
                        <div class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-white hover:bg-[#3b5998] hover:border-transparent cursor-pointer transition-colors" title="Google Scholar">
                            <i class="fa-brands fa-google"></i>
                        </div>
                        <div class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-white hover:bg-emerald-500 hover:border-transparent cursor-pointer transition-colors" title="Sinta">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-white hover:bg-slate-700 hover:border-transparent cursor-pointer transition-colors" title="Scopus">
                            <i class="fa-solid fa-book-journal-whills"></i>
                        </div>
                        <div class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-white hover:bg-blue-500 hover:border-transparent cursor-pointer transition-colors" title="ORCID">
                            <i class="fa-brands fa-orcid"></i>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Kontak Email</p>
                    <a href="mailto:{{ strtolower(str_replace(' ', '.', $person->name)) }}@ustb.ac.id" class="text-sm font-bold text-primary-600 hover:text-primary-700 transition-colors break-all">
                        {{ strtolower(str_replace(' ', '.', $person->name)) }}@ustb.ac.id
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content Area (Right Column) -->
        <div class="lg:col-span-8 flex flex-col gap-6 opacity-0 animate-[fadeInUp_0.6s_ease-out_0.4s_forwards]">
            
            <!-- Profil Singkat / Biography Section -->
            <div class="bg-white rounded-[2rem] p-6 sm:p-8 md:p-10 shadow-sm border border-slate-100">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-2xl bg-primary-50 flex items-center justify-center text-primary-500 shadow-sm">
                        <i class="fa-solid fa-user-pen text-lg"></i>
                    </div>
                    <h2 class="text-xl font-extrabold text-slate-800">Profil</h2>
                </div>
                
                <div class="text-slate-600 leading-relaxed font-medium text-sm sm:text-base border-l-4 border-primary-400 pl-4 py-1">
                    <p>
                        <strong>{{ $person->name }}</strong> adalah sivitas akademika Universitas Satya Terra Bhinneka yang saat ini tercatat sebagai <strong>{{ ucwords($person->category) }}</strong> di {{ $person->prodi }}. Halaman profil ini merepresentasikan data akademis dasar yang terintegrasi dari pusat informasi direktori universitas.
                    </p>
                    <p class="mt-4">
                        Dengan dedikasi pada bidang keilmuannya, yang bersangkutan berperan aktif dalam mewujudkan Tridharma Perguruan Tinggi yang mencakup Pendidikan dan Pengajaran, Penelitian, serta Pengabdian kepada Masyarakat di lingkungan kampus Satya Terra Bhinneka.
                    </p>
                </div>
            </div>

            <!-- Publikasi Section (From Reference Image) -->
            @if(strtolower($person->category) == 'dosen' || strtolower($person->category) == 'staff')
            <div class="bg-white rounded-[2rem] p-6 sm:p-8 md:p-10 shadow-sm border border-slate-100 relative">
                
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-500 shadow-sm">
                            <i class="fa-solid fa-book-bookmark text-lg"></i>
                        </div>
                        <h2 class="text-xl font-extrabold text-slate-800">Publikasi</h2>
                    </div>
                    
                    <a href="#" class="text-sm font-bold text-primary-600 hover:text-primary-700 flex items-center gap-2 group whitespace-nowrap">
                        Publikasi Lainnya <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <div class="flex flex-col gap-0 border-t border-slate-100">
                    <!-- Publikasi Item 1 -->
                    <div class="py-5 border-b border-slate-100 group">
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Publikasi Nasional</p>
                        <a href="#" class="block hover:bg-slate-50 -mx-4 px-4 py-2 rounded-xl transition-colors">
                            <h3 class="text-sm sm:text-base font-bold text-slate-800 leading-snug group-hover:text-primary-600 transition-colors">
                                PENERAPAN METODE PEMBELAJARAN INTERAKTIF BERBASIS TEKNOLOGI DALAM KURIKULUM KAMPUS MERDEKA
                            </h3>
                            <p class="text-xs font-semibold text-primary-500 mt-2 uppercase tracking-wide">
                                {{ $person->name }}
                            </p>
                        </a>
                    </div>

                    <!-- Publikasi Item 2 -->
                    <div class="py-5 border-b border-slate-100 group">
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Publikasi Internasional</p>
                        <a href="#" class="block hover:bg-slate-50 -mx-4 px-4 py-2 rounded-xl transition-colors">
                            <h3 class="text-sm sm:text-base font-bold text-slate-800 leading-snug group-hover:text-primary-600 transition-colors">
                                Analysis of Human Resource Development in the Digital Transformation Era 5.0
                            </h3>
                            <p class="text-xs font-semibold text-primary-500 mt-2 uppercase tracking-wide">
                                {{ $person->name }}, AUTHOR KEDUA
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Penelitian Section (From Reference Image) -->
            <div class="bg-white rounded-[2rem] p-6 sm:p-8 md:p-10 shadow-sm border border-slate-100">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-500 shadow-sm">
                            <i class="fa-solid fa-flask text-lg"></i>
                        </div>
                        <h2 class="text-xl font-extrabold text-slate-800">Penelitian</h2>
                    </div>
                    
                    <a href="#" class="text-sm font-bold text-primary-600 hover:text-primary-700 flex items-center gap-2 group whitespace-nowrap">
                        Penelitian Lainnya <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <div class="flex flex-col gap-0 border-t border-slate-100">
                    <!-- Penelitian Item 1 -->
                    <div class="py-5 border-b border-slate-100 group">
                        <a href="#" class="block hover:bg-slate-50 -mx-4 px-4 py-2 rounded-xl transition-colors">
                            <h3 class="text-sm sm:text-base font-bold text-slate-800 leading-snug group-hover:text-primary-600 transition-colors">
                                INOVASI METODE PENELITIAN TINDAKAN KELAS UNTUK PENCAPAIAN KOMPETENSI PROFESIONALISME
                            </h3>
                            <p class="text-xs font-semibold text-primary-500 mt-2 uppercase tracking-wide">
                                {{ $person->name }}, REKAN TIM PENELITI
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full py-8 text-center mt-auto border-t border-slate-200/60 bg-white/50 backdrop-blur-sm relative z-10">
        <p class="text-slate-500 font-medium text-sm">
            &copy; {{ date('Y') }} <span class="font-bold text-slate-700">Universitas Satya Terra Bhinneka</span>. Hak Cipta Dilindungi.
        </p>
    </footer>

</body>
</html>