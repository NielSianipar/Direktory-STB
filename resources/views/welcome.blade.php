<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direktori Akademik - Universitas Satya Terra Bhinneka</title>
    
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
                        accent: '#ffcc00',
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Webkit Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        /* Glassmorphism Panel */
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body class="bg-slate-50 min-h-screen relative overflow-x-hidden text-slate-800 antialiased selection:bg-primary-500 selection:text-white flex flex-col">

    <!-- Beautiful Responsive Background -->
    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none bg-slate-50">
        <!-- Abstract responsive gradient blooms -->
        <div class="absolute -top-[10%] -left-[10%] w-[80vw] md:w-[60vw] h-[80vw] md:h-[60vw] rounded-full bg-gradient-to-br from-primary-200/40 to-teal-100/40 blur-[80px] md:blur-[120px] animate-blob" style="animation-duration: 10s;"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[80vw] md:w-[60vw] h-[80vw] md:h-[60vw] rounded-full bg-gradient-to-tl from-emerald-200/30 to-cyan-100/30 blur-[80px] md:blur-[120px] animate-blob" style="animation-duration: 12s; animation-delay: 2s;"></div>
        
        <!-- Elegant Geometric Grid -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:24px_24px] md:bg-[size:40px_40px]"></div>
        
        <!-- Frosted Vignette for optimal readability -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(248,250,252,0.85)_100%)]"></div>
    </div>

    <!-- Top Navigation / Header -->
    <header class="absolute top-0 left-0 w-full p-4 md:px-8 md:py-6 z-50 flex items-center">
        <a href="/" class="flex items-center gap-3 group">
            <img src="{{ asset('images/LogoSTB.png') }}" alt="Logo Universitas Satya Terra Bhinneka" class="h-10 md:h-12 object-contain drop-shadow-sm group-hover:scale-105 transition-transform duration-300">
        </a>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 flex-grow flex flex-col items-center justify-center px-4 md:px-6 w-full py-16">
        
        <!-- Header / Hero Section -->
        <div class="text-center mb-10 md:mb-12 animate-fade-in-up w-full max-w-5xl">
            <div class="inline-flex items-center justify-center px-4 py-1.5 mb-5 md:mb-6 rounded-full bg-white/80 backdrop-blur border border-slate-200 text-primary-600 text-xs md:text-sm font-bold tracking-wide shadow-sm">
                <i class="fa-solid fa-graduation-cap mr-2"></i>
                Portal Pencarian Cerdas
            </div>
            
            <h2 class="text-lg sm:text-2xl md:text-3xl font-semibold text-slate-600 mb-2 md:mb-3">Selamat Datang di</h2>
            
            <h1 class="font-extrabold tracking-tight mb-5 md:mb-8 leading-tight flex flex-col items-center justify-center w-full">
                <!-- 'Direktori' in block to stack on top -->
                <span class="block text-4xl sm:text-5xl md:text-7xl lg:text-[5.5rem] text-transparent bg-clip-text bg-gradient-to-r from-slate-800 to-slate-600 py-1 mb-1 md:mb-2 drop-shadow-sm">Direktori</span> 
                
                <!-- 'Universitas Satya Terra Bhinneka' forced to 1 line, text size auto-scales -->
                <span class="block whitespace-nowrap text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-emerald-500 px-2 py-1 drop-shadow-sm" style="font-size: clamp(1rem, 4.8vw, 4rem); max-width: 100%;">
                    Universitas Satya Terra Bhinneka
                </span>
            </h1>
            
            <p class="text-slate-500 text-sm sm:text-base md:text-xl max-w-2xl mx-auto mt-2 md:mt-4 leading-relaxed font-medium px-4">
                Temukan informasi lengkap mengenai Tenaga Pendidik, Dosen, dan Mahasiswa dengan mudah dan cepat.
            </p>
        </div>

        <!-- Search Form Component -->
        <div class="w-full max-w-4xl opacity-0 animate-[fadeInUp_0.8s_ease-out_0.2s_forwards]">
            <form action="/" method="GET" class="glass-panel shadow-[0_20px_40px_-15px_rgba(0,0,0,0.05)] rounded-3xl md:rounded-full p-2.5 flex flex-col md:flex-row gap-3 transition-all duration-300 hover:shadow-[0_20px_40px_-15px_rgba(20,184,166,0.15)] hover:-translate-y-1">
                
                <!-- Input Box -->
                <div class="flex-1 flex items-center px-6 py-4 md:py-0 bg-white md:bg-transparent rounded-2xl md:rounded-l-full relative group">
                    <i class="fa-solid fa-magnifying-glass text-slate-400 group-focus-within:text-primary-500 transition-colors duration-300 text-lg"></i>
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Ketik nama untuk mencari..." 
                        value="{{ request('name') }}"
                        class="w-full pl-4 bg-transparent outline-none text-slate-700 placeholder-slate-400 font-semibold md:text-lg"
                        autocomplete="off"
                    >
                </div>

                <!-- Desktop Divider -->
                <div class="hidden md:block w-px h-12 bg-slate-200 my-auto"></div>

                <!-- Select Box -->
                <div class="flex items-center px-6 py-4 md:py-0 bg-white md:bg-transparent rounded-2xl relative group min-w-[260px]">
                    <i class="fa-solid fa-layer-group text-slate-400 group-focus-within:text-primary-500 transition-colors duration-300 text-lg"></i>
                    <select name="type" class="w-full pl-4 pr-10 bg-transparent outline-none text-slate-700 font-semibold appearance-none cursor-pointer h-full md:text-lg">
                        <option value="dosen" {{ request('type') == 'dosen' ? 'selected' : '' }}>👩‍🏫 Direktori Dosen</option>
                        <option value="staff" {{ request('type') == 'staff' ? 'selected' : '' }}>🧑‍💻 Tenaga Pendidik</option>
                        <option value="mahasiswa" {{ request('type') == 'mahasiswa' ? 'selected' : '' }}>🎓 Mahasiswa</option>
                    </select>
                    <i class="fa-solid fa-chevron-down text-slate-400 absolute right-6 pointer-events-none text-sm group-focus-within:text-primary-500 transition-colors duration-300"></i>
                </div>

                <!-- Submit Action -->
                <button type="submit" class="bg-primary-600 hover:bg-primary-700 text-white px-10 py-4 md:py-5 rounded-2xl md:rounded-full font-bold shadow-lg shadow-primary-500/30 transition-all duration-300 hover:shadow-primary-500/50 active:scale-95 flex items-center justify-center gap-3 group text-lg md:text-xl">
                    <span>Cari</span>
                    <i class="fa-solid fa-arrow-right text-base group-hover:translate-x-1.5 transition-transform duration-300"></i>
                </button>
            </form>
        </div>

        <!-- Result / Feedback Section -->
        @if(isset($results) && count($results) > 0)
            <!-- Data Grid -->
            <div class="w-full max-w-[1400px] mt-16 md:mt-24 pb-10">
                <div class="flex items-center justify-between mb-8 opacity-0 animate-[fadeInUp_0.8s_ease-out_0.4s_forwards]">
                    <h3 class="text-2xl font-bold text-slate-800 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center text-primary-600">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        Hasil Pencarian
                    </h3>
                    <span class="bg-white border border-slate-200 shadow-sm text-slate-600 text-sm font-bold px-4 py-1.5 rounded-full">
                        <span class="text-primary-600">{{ count($results) }}</span> data ditemukan
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($results as $index => $item)
                  <a href="{{ route('profile.show', $item['id']) }}" class="block">
                    <div class="bg-white group p-6 rounded-3xl hover:-translate-y-2 shadow-sm hover:shadow-[0_20px_40px_-20px_rgba(0,0,0,0.1)] transition-all duration-400 border border-slate-100 opacity-0 animate-[fadeInUp_0.8s_ease-out_forwards] relative overflow-hidden" style="animation-delay: {{ 0.4 + ($index * 0.1) }}s">
                        <!-- Decorative glow on hover -->
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-primary-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

                        <div class="flex items-center gap-5 relative z-10">
                            <!-- Avatar placeholder -->
                            <div class="relative w-20 h-20 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center flex-shrink-0 group-hover:bg-primary-50 transition-colors duration-300">
                                <i class="fa-solid fa-user-tie text-3xl text-slate-300 group-hover:text-primary-400 transition-colors duration-300"></i>
                                <!-- Custom category icon based on type -->
                                <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-white shadow-sm border border-slate-100 rounded-xl flex items-center justify-center text-xs">
                                    @if(strtolower($item['category']) == 'dosen')
                                        👩‍🏫
                                    @elseif(strtolower($item['category']) == 'mahasiswa')
                                        🎓
                                    @else
                                        🧑‍💻
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Information -->
                            <div class="flex-1 min-w-0 py-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-[10px] font-bold tracking-widest uppercase px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">
                                        {{ $item['category'] }}
                                    </span>
                                </div>
                                <h3 class="text-xl font-extrabold text-slate-800 truncate pr-4 group-hover:text-primary-600 transition-colors duration-300">
                                    {{ $item['name'] }}
                                </h3>
                                <div class="flex flex-col gap-1.5 mt-3">
                                    <div class="flex items-center text-sm text-slate-600 gap-2.5">
                                        <i class="fa-regular fa-id-badge w-4 text-center text-slate-400"></i>
                                        <span class="font-semibold">{{ $item['id_number'] }}</span>
                                    </div>
                                    <div class="flex items-center text-sm text-slate-600 gap-2.5">
                                        <i class="fa-solid fa-building-columns w-4 text-center text-slate-400"></i>
                                        <span class="font-medium truncate">{{ $item['prodi'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
            
        @elseif(request('name'))
            <!-- Empty State / Not Found -->
            <div class="w-full max-w-2xl mt-16 md:mt-24 opacity-0 animate-[fadeInUp_0.8s_ease-out_0.4s_forwards]">
                <div class="bg-white border border-slate-100 rounded-[2rem] p-10 md:p-14 text-center shadow-lg shadow-slate-200/40">
                    <div class="w-24 h-24 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <i class="fa-solid fa-magnifying-glass text-4xl text-slate-300"></i>
                        <div class="absolute top-0 right-0 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-sm">
                            <i class="fa-solid fa-question text-rose-400 text-sm"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl font-extrabold text-slate-800 mb-3">Pencarian Tidak Ditemukan</h3>
                    <p class="text-slate-500 mb-8 md:text-lg">Kami tidak dapat menemukan data dengan nama <br class="hidden md:block"/> <span class="font-bold text-slate-700 bg-slate-100 px-2 py-0.5 rounded">"{{ request('name') }}"</span> pada kategori <span class="font-semibold capitalize text-primary-600">{{ request('type') }}</span>.</p>
                    <a href="/" class="inline-flex items-center justify-center px-8 py-3.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-full font-bold transition-all duration-300 hover:shadow-md hover:-translate-y-0.5">
                        <i class="fa-solid fa-rotate-left mr-2.5"></i> Coba Pencarian Lain
                    </a>
                </div>
            </div>
        @endif
        
    </main>
    
    <!-- Footer -->
    <footer class="w-full py-8 text-center mt-auto border-t border-slate-200/60 bg-white/50 backdrop-blur-sm relative z-10 animate-[fadeInUp_0.8s_ease-out_0.6s_forwards] opacity-0">
        <p class="text-slate-500 font-medium text-sm">
            &copy; {{ date('Y') }} <span class="font-bold text-slate-700">Universitas Satya Terra Bhinneka</span>. Hak Cipta Dilindungi.
        </p>
    </footer>

</body>
</html>