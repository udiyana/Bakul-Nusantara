<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bakul Nusantara | Fine Dining Luxury Meets The Soul and Spice Heart</title>
    <meta name="description" content="Bakul Nusantara - Celebrating the culinary harmony of Nusantara's heritage within a sophisticated, timeless contemporary setting. Fine Dining Luxury Meets The Soul and Spice Heart of Nusantara.">
    <meta name="keywords" content="Bakul Nusantara, Fine Dining, Indonesian Restaurant, Sensasi Kuliner Indonesia, Senopati Jakarta, Culinary Heritage">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;800&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vite Styles & Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif

    <style>
        body {
            background-color: #eedcbe;
            color: #270707;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .font-serif-title {
            font-family: 'Cormorant Garamond', Georgia, serif;
        }

        .font-serif-brand {
            font-family: 'Cinzel', Georgia, serif;
        }

        .font-serif-display {
            font-family: 'Playfair Display', Georgia, serif;
        }
    </style>
</head>
<body class="antialiased selection:bg-amber-500 selection:text-stone-950">

    <!-- ================= NAVBAR ================= -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-[#270707] border-b border-amber-900/40 px-4 md:px-12 py-3.5 shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo Bakul Nusantara -->
            <a href="#" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 rounded-full border border-amber-400/80 flex items-center justify-center bg-gradient-to-b from-[#3e0b0b] to-[#1a0505] shadow-sm">
                    <!-- Emblem SVG -->
                    <svg viewBox="0 0 100 100" class="w-6 h-6 text-amber-400 fill-current">
                        <circle cx="50" cy="50" r="42" fill="none" stroke="#e8a838" stroke-width="3"/>
                        <path d="M50 15 L62 38 L85 42 L67 60 L73 85 L50 71 L27 85 L33 60 L15 42 L38 38 Z" fill="none" stroke="#e8a838" stroke-width="3"/>
                        <circle cx="50" cy="50" r="10" fill="#e8a838"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-serif-brand tracking-[0.25em] text-sm md:text-base text-amber-300 font-bold uppercase leading-none">BAKUL</span>
                    <span class="font-serif-brand tracking-[0.25em] text-[10px] md:text-xs text-amber-100 uppercase leading-tight">NUSANTARA</span>
                </div>
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center space-x-8 text-xs font-medium tracking-wider uppercase">
                <a href="#home" class="text-amber-400 hover:text-white transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-amber-400">Home</a>
                <a href="#menu" class="text-amber-100/90 hover:text-amber-400 transition-colors">Menu</a>
                <a href="#experiences" class="text-amber-100/90 hover:text-amber-400 transition-colors">Experiences</a>
                <a href="#about" class="text-amber-100/90 hover:text-amber-400 transition-colors">About</a>
                <a href="#promos" class="text-amber-100/90 hover:text-amber-400 transition-colors">Special Promo</a>
                <a href="#blog" class="text-amber-100/90 hover:text-amber-400 transition-colors">Blog</a>
            </nav>

            <!-- Right Reservation Button -->
            <div class="flex items-center space-x-4">
                <button onclick="toggleReservationModal()" class="px-6 py-2.5 bg-[#e8a838] hover:bg-[#d99627] text-[#270706] font-bold text-xs uppercase tracking-wider rounded shadow transition-all duration-300 transform hover:scale-105 border border-amber-300">
                    Reservation
                </button>
            </div>
        </div>
    </header>

    <!-- ================= 1. SPLIT HERO SECTION ================= -->
    <section id="home" class="relative bg-cream-smooth text-[#270706] pt-16 pb-0 px-0 flex items-stretch overflow-hidden">
        <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-0 items-stretch">
            <!-- Left Narrative Column (Matching Reference Design Exactly) -->
            <div class="lg:col-span-6 space-y-6 text-left pl-6 md:pl-16 lg:pl-20 pr-6 lg:pr-12 py-12 lg:py-20 flex flex-col justify-center">
                <!-- Tagline Badge with Side Accent Lines -->
                <div class="inline-flex items-center space-x-3 border-b border-t border-[#4a1010]/30 py-1.5 px-3">
                    <span class="font-serif-title text-xs md:text-sm tracking-[0.2em] uppercase text-[#4a1010] font-bold">An Authentic Gastronomic Journey</span>
                </div>

                <div class="space-y-1">
                    <h1 class="font-serif-title text-4xl sm:text-5xl md:text-6xl text-[#4a1010] font-normal leading-[1.1]">
                        Fine Dining Luxury Meets
                    </h1>
                    <h2 class="font-serif-title text-2xl sm:text-3xl md:text-4xl text-[#4a1010] font-serif italic leading-tight">
                        The Soul and Spice Heart of Nusantara
                    </h2>
                </div>

                <p class="text-xs sm:text-sm text-[#3b2316] leading-relaxed font-sans max-w-xl font-normal">
                    Bakoel Nusantara offers far more than just a meal; it serves as the perfect setting to celebrate life's most cherished moments. Whether it is a memorable surprise birthday party, an intimate candlelit dinner for two perfect for Valentine's Day or anniversaries amidst antique teak architecture, or a prestigious private business gathering, we ensure every moment is deeply personal and meaningful.
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <button onclick="toggleReservationModal()" class="px-8 py-3.5 bg-[#e8a838] hover:bg-[#d99627] text-[#270706] font-bold uppercase tracking-wider text-xs rounded shadow-md hover:scale-105 transition-all flex items-center space-x-2 border border-amber-300">
                        <span>Reserve Now</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                    <a href="#menu" class="px-8 py-3.5 border border-[#4a1010] text-[#4a1010] font-bold uppercase tracking-wider text-xs rounded hover:bg-[#4a1010] hover:text-[#eedcbe] transition-all">
                        Explore Menu
                    </a>
                </div>
            </div>

            <!-- Right Photo Column (Rectangular Full Split - No Rounded Corners, No Margin) -->
            <div class="lg:col-span-6 h-[480px] lg:h-auto min-h-[500px] w-full relative group overflow-hidden m-0 p-0">
                <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?q=80&w=1200&auto=format&fit=crop" alt="Bakul Nusantara Pavilion Dining Interior" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                
                <!-- Pagination Slider Indicator Bar -->
                <div class="absolute bottom-6 right-8 lg:right-16 flex items-center space-x-2">
                    <span class="w-12 h-1 bg-white rounded-full"></span>
                    <span class="w-4 h-1 bg-white/60 rounded-full"></span>
                    <span class="w-4 h-1 bg-white/60 rounded-full"></span>
                    <span class="w-4 h-1 bg-white/60 rounded-full"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BATIK STRIP 1 ================= -->
    <div class="batik-strip"></div>

    <!-- ================= 2. MAP OF INDONESIA SECTION ================= -->
    <section class="bg-batik-watermark py-20 px-4 text-stone-900 border-b border-amber-900/20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <span class="text-xs uppercase tracking-[0.3em] text-[#4a1010] font-bold">Warisan Kekayaan Cita Rasa Nusantara</span>
            <h2 class="font-serif-title text-3xl md:text-5xl text-[#4a1010] font-bold mt-1 mb-8">Peta Kuliner Mahakarya Nusantara</h2>

            <!-- Detailed Red Batik Textured Map SVG -->
            <div class="w-full max-w-5xl mx-auto p-4 md:p-8 bg-[#f5e7ce]/70 border border-[#4a1010]/20 rounded-2xl shadow-inner relative">
                <svg viewBox="0 0 1000 420" class="w-full h-auto drop-shadow-lg" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <!-- Pattern Texture for Islands -->
                        <pattern id="batikMapPattern" width="12" height="12" patternUnits="userSpaceOnUse">
                            <rect width="12" height="12" fill="#701214"/>
                            <path d="M0 0 L12 12 M12 0 L0 12" stroke="#4a0b0d" stroke-width="1.2"/>
                            <circle cx="6" cy="6" r="2" fill="#8c191c"/>
                        </pattern>
                    </defs>

                    <!-- Sumatra -->
                    <g class="island-path" onclick="showRegionInfo('Sumatra', 'Rendang Wagyu Tokusen & Gulai Kepala Ikan')">
                        <path fill="url(#batikMapPattern)" stroke="#4a0b0d" stroke-width="2" d="M120,80 C150,110 180,140 220,180 C240,200 250,220 250,230 C230,245 200,250 170,230 C130,195 110,150 100,140 C105,115 110,95 120,80 Z"/>
                    </g>

                    <!-- Java -->
                    <g class="island-path" onclick="showRegionInfo('Jawa', 'Sate Maranggi & Sop Buntut Sampurna')">
                        <path fill="url(#batikMapPattern)" stroke="#4a0b0d" stroke-width="2" d="M260,280 L350,285 L420,290 L440,300 L380,310 L310,305 L250,295 Z"/>
                    </g>

                    <!-- Kalimantan -->
                    <g class="island-path" onclick="showRegionInfo('Kalimantan', 'Soto Banjar Rempah & Patin Baunjat')">
                        <path fill="url(#batikMapPattern)" stroke="#4a0b0d" stroke-width="2" d="M380,100 C430,90 470,85 480,90 C510,120 520,150 520,160 C500,200 480,220 450,220 C410,215 390,210 370,160 Z"/>
                    </g>

                    <!-- Sulawesi -->
                    <g class="island-path" onclick="showRegionInfo('Sulawesi', 'Coto Makassar & Ayam Rica-Rica Manado')">
                        <path fill="url(#batikMapPattern)" stroke="#4a0b0d" stroke-width="2" d="M560,120 C580,125 610,130 610,130 C600,160 600,180 600,180 C620,185 640,190 640,190 C620,205 590,220 590,220 C570,240 560,250 560,250 C550,200 550,170 550,170 Z"/>
                    </g>

                    <!-- Bali & Nusa Tenggara -->
                    <g class="island-path" onclick="showRegionInfo('Bali & Nusa Tenggara', 'Bebek Betutu & Ayam Taliwang')">
                        <path fill="url(#batikMapPattern)" stroke="#4a0b0d" stroke-width="2" d="M460,300 L500,300 L540,305 L600,310 L640,305 L640,315 L460,315 Z"/>
                    </g>

                    <!-- Maluku -->
                    <g class="island-path" onclick="showRegionInfo('Maluku', 'Ikan Kuah Pala Banda & Sambal Dabu')">
                        <path fill="url(#batikMapPattern)" stroke="#4a0b0d" stroke-width="2" d="M680,150 C710,140 730,140 730,140 C735,170 740,210 740,210 C715,215 690,220 690,220 Z"/>
                    </g>

                    <!-- Papua -->
                    <g class="island-path" onclick="showRegionInfo('Papua', 'Papeda Ikan Kuah Kuning & Udang Selingkar')">
                        <path fill="url(#batikMapPattern)" stroke="#4a0b0d" stroke-width="2" d="M780,160 C840,150 900,145 920,150 C940,190 950,240 950,240 C915,265 880,280 880,280 C840,260 800,240 800,240 Z"/>
                    </g>
                </svg>

                <div id="regionToast" class="mt-4 p-3 bg-[#4a1010] text-amber-200 rounded-lg text-xs md:text-sm font-medium inline-block shadow-md">
                    <i class="fa-solid fa-location-dot text-[#e8a838] mr-2"></i>
                    <span id="regionText">Klik pada pulau untuk menjelajahi kelezatan rempah khas daerah tersebut di Bakul Nusantara.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BATIK STRIP 2 ================= -->
    <div class="batik-strip"></div>

    <!-- ================= 3. ABOUT US SECTION (Matching Reference Layout) ================= -->
    <section id="about" class="bg-batik-watermark py-20 px-4 md:px-12 text-stone-900 border-b border-amber-900/20">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Photo Grid Collage (Matching Reference 4-Photo Layout) -->
            <div class="lg:col-span-6 grid grid-cols-2 gap-4">
                <!-- Large Tall Left Photo -->
                <div class="col-span-1 h-[420px] overflow-hidden rounded-2xl shadow-card-luxury border border-[#4a1010]/20">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=800&auto=format&fit=crop" alt="Fine Dining Indonesian Buffet" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                </div>

                <!-- Right Column Stack -->
                <div class="col-span-1 space-y-4 flex flex-col justify-between">
                    <!-- Top Wide Photo (Balinese Tradition) -->
                    <div class="h-[200px] overflow-hidden rounded-2xl shadow-card-luxury border border-[#4a1010]/20">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=600&auto=format&fit=crop" alt="Traditional Hostess" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                    </div>

                    <!-- Bottom Split Row (2 Photos) -->
                    <div class="grid grid-cols-2 gap-3 h-[205px]">
                        <div class="overflow-hidden rounded-xl shadow border border-[#4a1010]/20">
                            <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=400&auto=format&fit=crop" alt="Chef Preparing Spices" class="w-full h-full object-cover">
                        </div>
                        <div class="overflow-hidden rounded-xl shadow border border-[#4a1010]/20">
                            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?q=80&w=400&auto=format&fit=crop" alt="Grilling Satay" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Narrative Column -->
            <div class="lg:col-span-6 space-y-6 text-left">
                <h2 class="font-serif-title text-5xl md:text-6xl text-[#4a1010] font-semibold tracking-tight leading-tight">
                    About Us
                </h2>
                <p class="text-xs md:text-sm text-[#3b2316] leading-relaxed font-sans">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="pt-2">
                    <button onclick="toggleReservationModal()" class="px-8 py-3.5 bg-[#e8a838] hover:bg-[#d99627] text-[#270706] font-bold text-xs uppercase tracking-wider rounded shadow-md transition-all inline-flex items-center space-x-2 border border-amber-300 hover:scale-105">
                        <span>Reserve Now</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BATIK STRIP 3 ================= -->
    <div class="batik-strip"></div>

    <!-- ================= 4. SIGNATURE MENU SECTION ================= -->
    <section id="menu" class="bg-[#270707] py-20 px-4 md:px-12 text-amber-100 border-b border-amber-900/40">
        <div class="max-w-6xl mx-auto text-center">
            <span class="text-xs uppercase tracking-[0.3em] text-[#e8a838] font-bold block mb-2">DELICIOUS TRADITION</span>
            <h2 class="font-serif-title text-4xl md:text-5xl text-amber-300 font-bold mb-4">
                Try Our Signature Menu!
            </h2>
            <p class="text-xs md:text-sm text-amber-100/80 max-w-xl mx-auto mb-8 font-light leading-relaxed">
                Setiap sajian di Bakul Nusantara dimasak sempurna mengutamakan keaslian cita rasa rempah pilihan.
            </p>

            <!-- 3-Column Card Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <!-- Card 1 -->
                <div class="bg-[#380c0c] rounded-2xl overflow-hidden shadow-card-luxury text-left border border-amber-500/30 flex flex-col group">
                    <div class="h-60 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=600&auto=format&fit=crop" alt="Rendang Wagyu" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between text-amber-100">
                        <div>
                            <h3 class="font-serif-title text-2xl font-bold text-[#e8a838] mb-2">Rendang Wagyu Tokusen</h3>
                            <p class="text-xs text-amber-100/80 leading-relaxed mb-4">
                                48-hour slow cooked Wagyu beef tenderloin in caramelised coconut milk and 18 signature Minang heirloom spices.
                            </p>
                        </div>
                        <button onclick="openDishDetail('Rendang Wagyu Tokusen', '285K', 'Padang, Sumatra Barat', '48-hour slow cooked Wagyu beef tenderloin in caramelised coconut milk and 18 signature Minang heirloom spices.')" class="text-xs font-semibold uppercase tracking-wider text-[#e8a838] hover:text-white transition-colors">
                            <span>See Details ></span>
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#380c0c] rounded-2xl overflow-hidden shadow-card-luxury text-left border border-amber-500/30 flex flex-col group">
                    <div class="h-60 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=600&auto=format&fit=crop" alt="Bebek Betutu" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between text-amber-100">
                        <div>
                            <h3 class="font-serif-title text-2xl font-bold text-[#e8a838] mb-2">Bebek Betutu Gianyar</h3>
                            <p class="text-xs text-amber-100/80 leading-relaxed mb-4">
                                Traditional slow-roasted organic duck wrapped in banana leaves with aromatic Base Gede Balinese paste.
                            </p>
                        </div>
                        <button onclick="openDishDetail('Bebek Betutu Gianyar', '245K', 'Gianyar, Bali', 'Traditional slow-roasted organic duck wrapped in banana leaves with aromatic Base Gede Balinese paste.')" class="text-xs font-semibold uppercase tracking-wider text-[#e8a838] hover:text-white transition-colors">
                            <span>See Details ></span>
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-[#380c0c] rounded-2xl overflow-hidden shadow-card-luxury text-left border border-amber-500/30 flex flex-col group">
                    <div class="h-60 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1547592180-85f173990554?q=80&w=600&auto=format&fit=crop" alt="Sop Buntut" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between text-amber-100">
                        <div>
                            <h3 class="font-serif-title text-2xl font-bold text-[#e8a838] mb-2">Sop Buntut Sampurna</h3>
                            <p class="text-xs text-amber-100/80 leading-relaxed mb-4">
                                Rich oxtail broth infused with nutmeg, clove, sweet heirloom carrots, and crispy shallots.
                            </p>
                        </div>
                        <button onclick="openDishDetail('Sop Buntut Sampurna', '265K', 'Batavia / Jakarta', 'Rich oxtail broth infused with nutmeg, clove, sweet heirloom carrots, and crispy shallots.')" class="text-xs font-semibold uppercase tracking-wider text-[#e8a838] hover:text-white transition-colors">
                            <span>See Details ></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- See All Menu Button -->
            <button onclick="toggleReservationModal()" class="px-8 py-3 bg-[#e8a838] hover:bg-[#d99627] text-[#270706] font-bold uppercase tracking-wider text-xs rounded shadow hover:scale-105 transition-all">
                See All Menu
            </button>
        </div>
    </section>

    <!-- ================= BATIK STRIP 4 ================= -->
    <div class="batik-strip"></div>

    <!-- ================= 5. EXPERIENCE SECTION ================= -->
    <section id="experiences" class="bg-batik-watermark py-20 px-4 md:px-12 text-stone-900 border-b border-amber-900/20">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6 text-left">
                <span class="text-xs uppercase tracking-[0.25em] text-[#4a1010] font-bold">Tastes of the Heritage</span>
                <h2 class="font-serif-title text-4xl md:text-5xl text-[#4a1010] font-bold tracking-tight">
                    Experiences
                </h2>
                <p class="text-xs md:text-sm text-[#3b2316] leading-relaxed font-sans">
                    Nikmati kelezatan kuliner eksklusif di ruang private dining Bakul Nusantara berarsitektur adat Jawa dan Bali. Setiap sudut restoran kami dirancang untuk memberikan kenyamanan rasa dan suasana hangat nusantara.
                </p>
                <div class="pt-2">
                    <button onclick="toggleReservationModal()" class="px-7 py-3 bg-[#4a1010] hover:bg-[#3b0d0d] text-amber-300 font-semibold text-xs uppercase tracking-wider rounded shadow transition-all flex items-center space-x-2 border border-amber-500/40">
                        <span>See Complete Details -></span>
                    </button>
                </div>
            </div>

            <div class="lg:col-span-6 grid grid-cols-3 gap-3 h-80">
                <div class="overflow-hidden rounded-xl shadow-card-luxury border border-[#4a1010]/20">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=400&auto=format&fit=crop" alt="Experience 1" class="w-full h-full object-cover hover:scale-105 transition-all duration-500">
                </div>
                <div class="overflow-hidden rounded-xl shadow-card-luxury border border-[#4a1010]/20 mt-6">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=400&auto=format&fit=crop" alt="Experience 2" class="w-full h-full object-cover hover:scale-105 transition-all duration-500">
                </div>
                <div class="overflow-hidden rounded-xl shadow-card-luxury border border-[#4a1010]/20">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=400&auto=format&fit=crop" alt="Experience 3" class="w-full h-full object-cover hover:scale-105 transition-all duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BATIK STRIP 5 ================= -->
    <div class="batik-strip"></div>

    <!-- ================= 6. RESERVE TABLE BANNER ================= -->
    <section class="relative py-24 px-4 text-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center filter brightness-35" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop');"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-r from-[#270706]/95 via-[#3b0d0d]/90 to-[#270706]/95"></div>

        <div class="relative z-10 max-w-4xl mx-auto text-amber-100">
            <h2 class="font-serif-title text-4xl md:text-5xl text-amber-300 font-bold mb-4 tracking-wide leading-tight">
                Reserve your table now to secure an unforgettable dining experience with us
            </h2>
            <p class="text-xs md:text-sm text-amber-100/80 mb-8 max-w-xl mx-auto">
                Reservasi mudah secara online atau hubungi concierge Bakul Nusantara langsung untuk suite private dining.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4">
                <button onclick="toggleReservationModal()" class="px-8 py-3.5 bg-[#e8a838] hover:bg-[#d99627] text-[#270706] font-bold text-xs uppercase tracking-wider rounded shadow transition-all">
                    Book a Table ->
                </button>
                <button onclick="toggleReservationModal()" class="px-8 py-3.5 border border-[#e8a838] text-amber-300 font-bold text-xs uppercase tracking-wider rounded hover:bg-amber-400/20 transition-all">
                    Private Event ->
                </button>
            </div>
        </div>
    </section>

    <!-- ================= BATIK STRIP 6 ================= -->
    <div class="batik-strip"></div>

    <!-- ================= 7. FOOTER ================= -->
    <footer class="bg-[#270707] py-14 px-4 md:px-12 border-t border-amber-900/40 text-amber-100/80 text-xs">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 mb-10 text-left">
            <div class="md:col-span-4">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 rounded-full border border-amber-400 flex items-center justify-center bg-[#3b0d0d]">
                        <svg viewBox="0 0 100 100" class="w-6 h-6 text-amber-400 fill-current">
                            <circle cx="50" cy="50" r="40" fill="none" stroke="#e8a838" stroke-width="4"/>
                            <path d="M50 15 L62 38 L85 42 L67 60 L73 85 L50 71 L27 85 L33 60 L15 42 L38 38 Z" fill="none" stroke="#e8a838" stroke-width="3"/>
                        </svg>
                    </div>
                    <span class="font-serif-brand text-[#e8a838] font-bold uppercase tracking-wider text-base">BAKUL NUSANTARA</span>
                </div>
                <p class="text-amber-100/70 text-xs leading-relaxed">
                    Jl. Senopati Raya No. 88, Kebayoran Baru, Jakarta Selatan
                </p>
            </div>

            <div class="md:col-span-3">
                <h4 class="font-serif-brand text-[#e8a838] uppercase tracking-wider font-semibold mb-3">Explore</h4>
                <ul class="space-y-1.5 text-stone-300 text-xs">
                    <li><a href="#home" class="hover:text-amber-400 transition-colors">Home</a></li>
                    <li><a href="#about" class="hover:text-amber-400 transition-colors">About Us</a></li>
                    <li><a href="#menu" class="hover:text-amber-400 transition-colors">Menu</a></li>
                    <li><a href="#experiences" class="hover:text-amber-400 transition-colors">Experiences</a></li>
                </ul>
            </div>

            <div class="md:col-span-5">
                <h4 class="font-serif-brand text-[#e8a838] uppercase tracking-wider font-semibold mb-3">Info</h4>
                <p class="text-stone-300 text-xs leading-relaxed mb-4">
                    Setiap hidangan Bakul Nusantara disajikan dengan dedikasi tinggi mengutamakan kualitas rasa rempah otentik khas warisan nusantara.
                </p>
            </div>
        </div>

        <div class="border-t border-amber-900/40 pt-6 text-center text-stone-400 text-[11px]">
            &copy; {{ date('Y') }} Bakul Nusantara Restaurant. All rights reserved.
        </div>
    </footer>

    <!-- ================= RESERVATION MODAL ================= -->
    <div id="reservationModal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md flex items-center justify-center p-4">
        <div class="bg-gradient-to-b from-[#380c0c] to-[#1f0505] border border-amber-500/50 rounded-2xl max-w-lg w-full p-6 md:p-8 shadow-glow text-left relative">
            <button onclick="toggleReservationModal()" class="absolute top-4 right-4 text-amber-400 hover:text-white text-2xl w-10 h-10 flex items-center justify-center rounded-full bg-black/40 border border-amber-500/30 transition-all">
                &times;
            </button>

            <div class="text-center mb-6">
                <i class="fa-solid fa-crown text-3xl text-[#e8a838] mb-2"></i>
                <h3 class="font-serif-title text-3xl text-amber-300 font-bold">Reservasi VIP Bakul Nusantara</h3>
                <p class="text-xs text-amber-100/70 mt-1">Reservasi meja fine dining eksklusif di Bakul Nusantara.</p>
            </div>

            <form onsubmit="handleReservationSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block uppercase tracking-wider text-[#e8a838] mb-1 font-semibold">Nama Lengkap</label>
                    <input type="text" required placeholder="Nama Anda" class="w-full px-4 py-2.5 bg-black/50 border border-amber-500/40 rounded text-white focus:outline-none focus:border-amber-400">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block uppercase tracking-wider text-[#e8a838] mb-1 font-semibold">Nomor WhatsApp</label>
                        <input type="tel" required placeholder="08123456789" class="w-full px-4 py-2.5 bg-black/50 border border-amber-500/40 rounded text-white focus:outline-none focus:border-amber-400">
                    </div>
                    <div>
                        <label class="block uppercase tracking-wider text-[#e8a838] mb-1 font-semibold">Jumlah Tamu</label>
                        <select required class="w-full px-4 py-2.5 bg-black/50 border border-amber-500/40 rounded text-white focus:outline-none focus:border-amber-400">
                            <option value="2">2 Orang (Private)</option>
                            <option value="4">4 Orang (Family)</option>
                            <option value="6">6 Orang (Group)</option>
                            <option value="8+">8+ Orang (VIP Suite)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block uppercase tracking-wider text-[#e8a838] mb-1 font-semibold">Tanggal & Waktu</label>
                    <input type="datetime-local" required class="w-full px-4 py-2.5 bg-black/50 border border-amber-500/40 rounded text-white focus:outline-none focus:border-amber-400">
                </div>

                <button type="submit" class="w-full py-3 bg-[#e8a838] hover:bg-[#d99627] text-[#270706] font-bold uppercase tracking-wider text-xs rounded shadow hover:scale-[1.02] transition-all">
                    Kirim Permohonan Reservasi
                </button>
            </form>
        </div>
    </div>

    <!-- ================= DISH DETAILS MODAL ================= -->
    <div id="dishModal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md flex items-center justify-center p-4">
        <div class="bg-gradient-to-b from-[#380c0c] to-[#1f0505] border border-amber-500/50 rounded-2xl max-w-md w-full p-6 shadow-glow text-left relative text-amber-100">
            <button onclick="closeDishDetail()" class="absolute top-4 right-4 text-amber-400 hover:text-white text-2xl w-10 h-10 flex items-center justify-center rounded-full bg-black/40 border border-amber-500/30 transition-all">
                &times;
            </button>
            <h3 id="dishTitle" class="font-serif-title text-2xl font-bold text-[#e8a838] mb-1"></h3>
            <span id="dishRegion" class="inline-block text-[10px] font-bold uppercase tracking-wider bg-[#e8a838] text-stone-950 px-2.5 py-0.5 rounded mb-3"></span>
            <p id="dishDesc" class="text-xs text-stone-300 leading-relaxed mb-4"></p>
            <div class="flex items-center justify-between pt-2 border-t border-amber-900/50">
                <span id="dishPrice" class="font-serif-title text-xl font-bold text-[#e8a838]"></span>
                <button onclick="closeDishDetail(); toggleReservationModal();" class="px-5 py-2 bg-[#e8a838] hover:bg-[#d99627] text-stone-950 font-bold uppercase text-xs rounded shadow">
                    Pesan Meja
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toastNotification" class="fixed bottom-6 right-6 z-50 hidden bg-[#e8a838] text-[#270706] font-semibold px-6 py-3.5 rounded-xl shadow-2xl flex items-center space-x-3 border border-yellow-200">
        <i class="fa-solid fa-circle-check text-xl"></i>
        <span id="toastMessage" class="text-xs md:text-sm"></span>
    </div>

    <!-- JavaScript Handlers -->
    <script>
        function toggleReservationModal() {
            document.getElementById('reservationModal').classList.toggle('hidden');
        }

        function showRegionInfo(region, dishes) {
            const toast = document.getElementById('regionText');
            toast.innerHTML = '<strong>' + region + ':</strong> Hidangan Khas: ' + dishes;
        }

        function openDishDetail(title, price, region, desc) {
            document.getElementById('dishTitle').innerText = title;
            document.getElementById('dishPrice').innerText = price;
            document.getElementById('dishRegion').innerText = region;
            document.getElementById('dishDesc').innerText = desc;
            document.getElementById('dishModal').classList.remove('hidden');
        }

        function closeDishDetail() {
            document.getElementById('dishModal').classList.add('hidden');
        }

        function handleReservationSubmit(e) {
            e.preventDefault();
            toggleReservationModal();
            const toast = document.getElementById('toastNotification');
            document.getElementById('toastMessage').innerText = 'Permohonan Reservasi VIP Bakul Nusantara Anda telah diterima! Tim kami akan menghubungi Anda via WhatsApp.';
            toast.classList.remove('hidden');
            setTimeout(() => { toast.classList.add('hidden'); }, 5000);
        }
    </script>
</body>
</html>
