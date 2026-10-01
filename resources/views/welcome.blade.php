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
                <div class="w-fit self-start max-w-max inline-flex items-center border-b border-t border-[#4a1010]/40 py-1 px-2">
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

            <!-- Right Photo Column (Interactive Full-Bleed Photo Slider) -->
            <div class="lg:col-span-6 h-[480px] lg:h-auto min-h-[500px] w-full relative group overflow-hidden m-0 p-0">
                <div id="heroSlider" class="w-full h-full relative overflow-hidden">
                    <!-- Slide 1 -->
                    <div class="hero-slide absolute inset-0 transition-opacity duration-700 opacity-100">
                        <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?q=80&w=1200&auto=format&fit=crop" alt="Bakul Nusantara Pavilion Dining Interior" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <!-- Slide 2 -->
                    <div class="hero-slide absolute inset-0 transition-opacity duration-700 opacity-0 pointer-events-none">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1200&auto=format&fit=crop" alt="Fine Dining Table Setting" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <!-- Slide 3 -->
                    <div class="hero-slide absolute inset-0 transition-opacity duration-700 opacity-0 pointer-events-none">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1200&auto=format&fit=crop" alt="Authentic Indonesian Restaurant Ambience" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <!-- Slide 4 -->
                    <div class="hero-slide absolute inset-0 transition-opacity duration-700 opacity-0 pointer-events-none">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=1200&auto=format&fit=crop" alt="Chef Gourmet Presentation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>

                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>

                    <!-- Slide Navigation Chevrons (Visible on Hover) -->
                    <button onclick="prevHeroSlide()" aria-label="Previous Slide" class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-black/40 text-white flex items-center justify-center hover:bg-[#e8a838] hover:text-[#270706] transition-all opacity-0 group-hover:opacity-100 z-20 shadow-md">
                        <i class="fa-solid fa-chevron-left text-sm"></i>
                    </button>
                    <button onclick="nextHeroSlide()" aria-label="Next Slide" class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-black/40 text-white flex items-center justify-center hover:bg-[#e8a838] hover:text-[#270706] transition-all opacity-0 group-hover:opacity-100 z-20 shadow-md">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </button>

                    <!-- Interactive Pagination Slider Dash Indicator Bar -->
                    <div class="absolute bottom-6 right-8 lg:right-16 flex items-center space-x-2 z-20">
                        <button onclick="goToHeroSlide(0)" aria-label="Slide 1" class="hero-indicator h-1 rounded-full transition-all duration-300 w-12 bg-white"></button>
                        <button onclick="goToHeroSlide(1)" aria-label="Slide 2" class="hero-indicator h-1 rounded-full transition-all duration-300 w-4 bg-white/50 hover:bg-white"></button>
                        <button onclick="goToHeroSlide(2)" aria-label="Slide 3" class="hero-indicator h-1 rounded-full transition-all duration-300 w-4 bg-white/50 hover:bg-white"></button>
                        <button onclick="goToHeroSlide(3)" aria-label="Slide 4" class="hero-indicator h-1 rounded-full transition-all duration-300 w-4 bg-white/50 hover:bg-white"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BATIK STRIP 1 ================= -->
    <div class="batik-strip"></div>

    <!-- ================= 2. MAP OF INDONESIA SECTION ================= -->
    <section class="bg-batik-watermark py-16 px-4 text-stone-900 border-b border-amber-900/20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <!-- Indonesia Batik Map Container -->
            <div class="w-full max-w-5xl mx-auto p-4 md:p-8 relative">
                <div class="relative w-full overflow-hidden">
                    <img src="{{ asset('images/indonesia-map.png') }}" alt="Peta Indonesia Bakul Nusantara" class="w-full h-auto drop-shadow-md mx-auto object-contain max-h-[500px]">
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
    <section id="menu" class="bg-[#270707] py-20 px-4 md:px-12 text-amber-100 border-b border-amber-900/40 relative">
        <div class="max-w-6xl mx-auto text-center relative">
            <span class="text-xs uppercase tracking-[0.3em] text-[#e8a838] font-bold block mb-2">Exquisite Culinary Art</span>
            <h2 class="font-serif-title text-4xl md:text-5xl text-amber-300 font-bold mb-4">
                Try Our Signature Menu!
            </h2>
            <p class="text-xs md:text-sm text-amber-100/80 max-w-xl mx-auto mb-8 font-light leading-relaxed">
                Setiap sajian di Bakul Nusantara dimasak sempurna mengutamakan keaslian cita rasa rempah pilihan.
            </p>

            <!-- Slider Outer Container with Side Arrows -->
            <div class="relative px-2 md:px-10">
                <!-- Outer Left Arrow Button -->
                <button onclick="prevMenuPage()" aria-label="Previous Menu Page" class="absolute -left-2 md:left-0 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-[#380c0c] border border-amber-500/40 text-[#e8a838] flex items-center justify-center hover:bg-[#e8a838] hover:text-[#270706] transition-all z-20 shadow-lg">
                    <i class="fa-solid fa-chevron-left text-sm"></i>
                </button>

                <!-- Outer Right Arrow Button -->
                <button onclick="nextMenuPage()" aria-label="Next Menu Page" class="absolute -right-2 md:right-0 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-[#380c0c] border border-amber-500/40 text-[#e8a838] flex items-center justify-center hover:bg-[#e8a838] hover:text-[#270706] transition-all z-20 shadow-lg">
                    <i class="fa-solid fa-chevron-right text-sm"></i>
                </button>

                <!-- Menu Page 1 (Active) -->
                <div class="menu-page transition-all duration-700 opacity-100 block">
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
                </div>

                <!-- Menu Page 2 (Hidden by default) -->
                <div class="menu-page transition-all duration-700 opacity-0 hidden">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                        <!-- Card 4 -->
                        <div class="bg-[#380c0c] rounded-2xl overflow-hidden shadow-card-luxury text-left border border-amber-500/30 flex flex-col group">
                            <div class="h-60 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=600&auto=format&fit=crop" alt="Sate Maranggi" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="p-6 flex-grow flex flex-col justify-between text-amber-100">
                                <div>
                                    <h3 class="font-serif-title text-2xl font-bold text-[#e8a838] mb-2">Sate Maranggi Wagyu</h3>
                                    <p class="text-xs text-amber-100/80 leading-relaxed mb-4">
                                        Charbroiled Wagyu beef skewers marinated in pineapple juice, sweet coriander soy, and sambal kecap.
                                    </p>
                                </div>
                                <button onclick="openDishDetail('Sate Maranggi Wagyu', '225K', 'Purwakarta, Jawa Barat', 'Charbroiled Wagyu beef skewers marinated in pineapple juice, sweet coriander soy, and sambal kecap.')" class="text-xs font-semibold uppercase tracking-wider text-[#e8a838] hover:text-white transition-colors">
                                    <span>See Details ></span>
                                </button>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="bg-[#380c0c] rounded-2xl overflow-hidden shadow-card-luxury text-left border border-amber-500/30 flex flex-col group">
                            <div class="h-60 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=600&auto=format&fit=crop" alt="Ayam Taliwang" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="p-6 flex-grow flex flex-col justify-between text-amber-100">
                                <div>
                                    <h3 class="font-serif-title text-2xl font-bold text-[#e8a838] mb-2">Ayam Taliwang Lombok</h3>
                                    <p class="text-xs text-amber-100/80 leading-relaxed mb-4">
                                        Free-range young chicken flame-grilled with fiery shrimp paste, kaffir lime, and roasted chili oil.
                                    </p>
                                </div>
                                <button onclick="openDishDetail('Ayam Taliwang Lombok', '195K', 'Mataram, Lombok', 'Free-range young chicken flame-grilled with fiery shrimp paste, kaffir lime, and roasted chili oil.')" class="text-xs font-semibold uppercase tracking-wider text-[#e8a838] hover:text-white transition-colors">
                                    <span>See Details ></span>
                                </button>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="bg-[#380c0c] rounded-2xl overflow-hidden shadow-card-luxury text-left border border-amber-500/30 flex flex-col group">
                            <div class="h-60 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=600&auto=format&fit=crop" alt="Ikan Kuah Pala" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="p-6 flex-grow flex flex-col justify-between text-amber-100">
                                <div>
                                    <h3 class="font-serif-title text-2xl font-bold text-[#e8a838] mb-2">Ikan Kuah Pala Banda</h3>
                                    <p class="text-xs text-amber-100/80 leading-relaxed mb-4">
                                        Fresh red snapper poached in heirloom Banda nutmeg broth with bird's eye chili and lemon basil.
                                    </p>
                                </div>
                                <button onclick="openDishDetail('Ikan Kuah Pala Banda', '255K', 'Banda Neira, Maluku', 'Fresh red snapper poached in heirloom Banda nutmeg broth with bird\'s eye chili and lemon basil.')" class="text-xs font-semibold uppercase tracking-wider text-[#e8a838] hover:text-white transition-colors">
                                    <span>See Details ></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Pagination Controls -->
            <div class="flex items-center justify-center space-x-6 mb-8">
                <button onclick="prevMenuPage()" aria-label="Previous Menu Page" class="w-10 h-10 rounded-full border border-amber-400/40 text-amber-400 hover:bg-[#e8a838] hover:text-[#270706] flex items-center justify-center transition-colors">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <div class="flex items-center space-x-3">
                    <button onclick="goToMenuPage(0)" aria-label="Menu Page 1" class="menu-indicator h-1 rounded-full transition-all duration-300 w-8 bg-[#e8a838]"></button>
                    <button onclick="goToMenuPage(1)" aria-label="Menu Page 2" class="menu-indicator h-1 rounded-full transition-all duration-300 w-4 bg-amber-400/40 hover:bg-amber-400"></button>
                </div>
                <button onclick="nextMenuPage()" aria-label="Next Menu Page" class="w-10 h-10 rounded-full border border-amber-400/40 text-amber-400 hover:bg-[#e8a838] hover:text-[#270706] flex items-center justify-center transition-colors">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
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
                <span class="text-xs uppercase tracking-[0.25em] text-[#4a1010] font-bold">Unforgettable Moments</span>
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

    <!-- ================= 5.5 LOCATION & MAP SECTION (Matching Figma Reference Design) ================= -->
    <section id="location" class="bg-batik-watermark py-20 px-4 md:px-12 text-stone-900 border-b border-amber-900/20">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Google Maps Container -->
            <div class="lg:col-span-6 h-80 md:h-[420px] rounded-2xl overflow-hidden shadow-card-luxury border-2 border-[#4a1010]/20 relative">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.273647182743!2d106.80628237586884!3d-6.227608860986923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d3065b2d7%3A0xd6e5f8f8b8a5b2d!2sJl.%20Senopati%2C%20Kebayoran%20Baru%2C%20Jakarta%20Selatan!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Right Narrative Column (Matching Figma Design Exactly) -->
            <div class="lg:col-span-6 space-y-6 text-left">
                <h2 class="font-serif-title text-4xl md:text-5xl text-[#4a1010] font-semibold leading-tight tracking-tight">
                    Easily pin our location and plan your visit today
                </h2>

                <p class="text-xs md:text-sm text-[#3b2316] leading-relaxed font-sans">
                    Bakoel Nusantara offers far more than just a meal; it serves as the perfect setting to celebrate life's most cherished moments. Whether it is a memorable surprise birthday party, an intimate candlelit dinner for two perfect for Valentine's Day or anniversaries amidst antique teak architecture, or a prestigious private business gathering, we ensure every moment is deeply personal and meaningful. Accompanied by the soothing sounds of contemporary ethnic instrumental music and the warm hospitality characteristic of the archipelago, we create an experience that is truly special.
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <button onclick="toggleReservationModal()" class="px-7 py-3.5 bg-[#e8a838] hover:bg-[#d99627] text-[#270706] font-bold text-xs uppercase tracking-wider rounded shadow transition-all flex items-center space-x-2 border border-amber-300 hover:scale-105">
                        <span>Reserve now</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                    <a href="https://maps.google.com/?q=Senopati+Jakarta+Selatan" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 bg-[#460904] hover:bg-[#320603] text-[#e8a838] font-bold text-xs uppercase tracking-wider rounded shadow transition-all flex items-center space-x-2 border border-amber-500/30 hover:scale-105">
                        <span>Open in Google Maps</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BATIK STRIP 6 ================= -->
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
        // Signature Menu Slider Logic
        let currentMenuPage = 0;
        const totalMenuPages = 2;

        function showMenuPage(index) {
            currentMenuPage = (index + totalMenuPages) % totalMenuPages;
            const pages = document.querySelectorAll('.menu-page');
            const indicators = document.querySelectorAll('.menu-indicator');

            pages.forEach((page, i) => {
                if (i === currentMenuPage) {
                    page.classList.remove('hidden', 'opacity-0');
                    page.classList.add('block', 'opacity-100');
                } else {
                    page.classList.remove('block', 'opacity-100');
                    page.classList.add('hidden', 'opacity-0');
                }
            });

            indicators.forEach((ind, i) => {
                if (i === currentMenuPage) {
                    ind.classList.remove('w-4', 'bg-amber-400/40');
                    ind.classList.add('w-8', 'bg-[#e8a838]');
                } else {
                    ind.classList.remove('w-8', 'bg-[#e8a838]');
                    ind.classList.add('w-4', 'bg-amber-400/40');
                }
            });
        }

        function nextMenuPage() {
            showMenuPage(currentMenuPage + 1);
        }

        function prevMenuPage() {
            showMenuPage(currentMenuPage - 1);
        }

        function goToMenuPage(index) {
            showMenuPage(index);
        }

        // Hero Photo Slider Logic
        let currentHeroSlide = 0;
        const totalHeroSlides = 4;
        let heroSlideInterval = null;

        function showHeroSlide(index) {
            currentHeroSlide = (index + totalHeroSlides) % totalHeroSlides;
            const slides = document.querySelectorAll('.hero-slide');
            const indicators = document.querySelectorAll('.hero-indicator');

            slides.forEach((slide, i) => {
                if (i === currentHeroSlide) {
                    slide.classList.remove('opacity-0', 'pointer-events-none');
                    slide.classList.add('opacity-100');
                } else {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0', 'pointer-events-none');
                }
            });

            indicators.forEach((ind, i) => {
                if (i === currentHeroSlide) {
                    ind.classList.remove('w-4', 'bg-white/50');
                    ind.classList.add('w-12', 'bg-white');
                } else {
                    ind.classList.remove('w-12', 'bg-white');
                    ind.classList.add('w-4', 'bg-white/50');
                }
            });
        }

        function nextHeroSlide() {
            showHeroSlide(currentHeroSlide + 1);
            resetHeroTimer();
        }

        function prevHeroSlide() {
            showHeroSlide(currentHeroSlide - 1);
            resetHeroTimer();
        }

        function goToHeroSlide(index) {
            showHeroSlide(index);
            resetHeroTimer();
        }

        function resetHeroTimer() {
            if (heroSlideInterval) clearInterval(heroSlideInterval);
            heroSlideInterval = setInterval(() => {
                showHeroSlide(currentHeroSlide + 1);
            }, 4500);
        }

        document.addEventListener('DOMContentLoaded', () => {
            resetHeroTimer();
        });

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
