<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CasaVee Interiors — A luxury interior design studio founded by Vera Sidika. Spaces that inspire. Living that feels extraordinary. Serving Kenya and international clients.">

        <title>CasaVee Interiors — Luxury Interior Design &amp; Space Transformation</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:300,400,500,600,700|cormorant-garamond:400,500,600,700&display=swap" rel="stylesheet" />

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-casavee-ivory text-casavee-black font-sans antialiased selection:bg-casavee-gold/30 selection:text-casavee-black">

        {{-- 1. HERO IMAGE AND BRAND INTRODUCTION (PRESERVED EXACTLY) --}}
        <section
            id="hero"
            aria-label="Hero — Spaces that inspire"
            class="relative min-h-screen w-full overflow-hidden bg-casavee-black text-white flex flex-col justify-between"
        >
            {{-- Background Hero Image & Editorial Overlays --}}
            <div class="absolute inset-0 z-0">
                <img
                    src="{{ asset('storage/images/general/Home slide two casavee interior.jpg') }}"
                    alt="CasaVee Interiors — Luxury residential living space with bespoke warm lighting and contemporary furnishings"
                    class="h-full w-full object-cover object-center scale-[1.01] transition-transform duration-1000 ease-out"
                />
                {{-- Multi-stop editorial vignette matching reference screenshot lighting --}}
                <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/30 to-black/80"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/55 via-transparent to-black/50"></div>
            </div>

            {{-- Top Navigation Bar --}}
            <x-public-navbar />

            {{-- Hero Content Area (Matching Reference Screenshot Proportions & Placement) --}}
            <div class="relative z-10 mx-auto flex w-full max-w-[1440px] flex-1 flex-col justify-between px-6 pt-10 pb-12 sm:px-10 sm:pt-14 sm:pb-16 lg:px-16 lg:pt-16 lg:pb-20">
                {{-- Upper-Right Brand Promise Paragraph --}}
                <div class="flex justify-start lg:justify-end">
                    <div class="max-w-md lg:max-w-[430px] lg:pt-4">
                        <p class="text-[16px] sm:text-[17.5px] font-normal leading-[1.6] tracking-[0.01em] text-white/95 drop-shadow-xs">
                            We transform spaces into thoughtfully designed environments that reflect individuality, sophistication and elevated living.
                        </p>
                        <p class="mt-2.5 text-[13px] font-normal uppercase tracking-[0.16em] text-casavee-gold/95">
                            Luxury Residential &amp; Commercial Interiors
                        </p>
                    </div>
                </div>

                {{-- Lower Area: Main Hero Display Heading (Bottom-Left) + Frosted Glass Feature Card (Bottom-Right) --}}
                <div class="mt-24 sm:mt-32 lg:mt-0 grid grid-cols-1 items-end gap-10 lg:grid-cols-12 lg:gap-8">
                    {{-- Bottom-Left Main Editorial Display Heading --}}
                    <div class="lg:col-span-7 xl:col-span-8">
                        <h1 class="max-w-3xl text-4xl font-normal leading-[1.15] tracking-[-0.015em] text-white sm:text-5xl lg:text-[54px] xl:text-[60px]">
                            Spaces That Inspire.
                            <span class="block mt-1.5 text-white/95">
                                Living That Feels Extraordinary.
                            </span>
                        </h1>
                    </div>

                    {{-- Bottom-Right Frosted Glass Showcase Card --}}
                    <div class="lg:col-span-5 xl:col-span-4 flex lg:justify-end">
                        <div class="w-full max-w-[430px] rounded-sm border border-white/25 bg-white/10 p-5 sm:p-6 backdrop-blur-md shadow-2xl transition duration-300 hover:border-white/40 hover:bg-white/15">
                            <div class="flex items-stretch justify-between gap-5">
                                <div class="flex flex-col justify-between py-0.5">
                                    <div>
                                        <span class="block text-[11px] font-medium uppercase tracking-[0.18em] text-casavee-gold">
                                            CasaVee Interiors
                                        </span>
                                        <h2 class="mt-1.5 text-[18px] sm:text-[19px] font-normal leading-snug text-white">
                                            Luxury Residential &amp; Commercial Spaces
                                        </h2>
                                    </div>

                                    <a
                                        href="{{ route('projects') }}"
                                        class="mt-6 inline-flex items-center gap-2 text-[13.5px] font-normal tracking-wide text-white/90 transition-colors hover:text-casavee-gold group"
                                    >
                                        <svg class="h-2.5 w-2.5 fill-current text-casavee-gold transition-transform duration-300 group-hover:rotate-45" viewBox="0 0 16 16" aria-hidden="true">
                                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                                        </svg>
                                        <span>Explore Our Projects</span>
                                    </a>
                                </div>

                                {{-- Thumbnail Preview Image on Right of Glass Card --}}
                                <div class="relative h-28 w-24 sm:h-32 sm:w-28 shrink-0 overflow-hidden rounded-xs border border-white/20">
                                    <img
                                        src="{{ asset('storage/images/general/Home slide one casavee interior.jpg') }}"
                                        alt="CasaVee Interiors curated space preview"
                                        class="h-full w-full object-cover object-center transition-transform duration-500 hover:scale-105"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 2. SHORT WELCOME TO CASAVEE PREVIEW (LINKS TO /about) --}}
        <section
            aria-labelledby="welcome-heading"
            class="relative bg-casavee-ivory text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10"
        >
            <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-12 lg:items-start">
                    <div class="lg:col-span-4">
                        <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                            <span>[</span>
                            <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                            </svg>
                            <span>Welcome to CasaVee</span>
                            <span>]</span>
                        </span>
                        <p class="mt-3 text-xs uppercase tracking-[0.2em] text-casavee-taupe">
                            Luxury Interior Design Studio
                        </p>
                    </div>

                    <div class="lg:col-span-8">
                        <h2
                            id="welcome-heading"
                            class="text-3xl sm:text-4xl lg:text-[44px] font-normal leading-[1.18] tracking-[-0.015em] text-casavee-black lg:indent-24"
                        >
                            We transform spaces into thoughtfully designed environments that reflect
                            <span class="font-serif italic font-normal text-casavee-gold">individuality, sophistication</span>
                            and elevated living.
                        </h2>
                    </div>
                </div>

                <div class="mt-16 grid grid-cols-1 gap-12 lg:grid-cols-12 lg:items-center">
                    <div class="lg:col-span-5">
                        <div class="group overflow-hidden rounded-xs bg-casavee-black/5 shadow-sm">
                            <div class="aspect-[4/5] w-full overflow-hidden">
                                <img
                                    src="{{ asset('storage/images/general/mid-century-interior-design_23-2151902083.jpg') }}"
                                    alt="CasaVee Interiors — Luxury residential interior design"
                                    class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-[1.03]"
                                    loading="lazy"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 lg:pl-8 space-y-8">
                        <div class="grid grid-cols-1 gap-8 sm:grid-cols-12 sm:items-center">
                            <div class="sm:col-span-4 flex justify-start sm:justify-center">
                                <a
                                    href="{{ route('about') }}"
                                    class="group relative flex h-36 w-36 items-center justify-center rounded-full border border-casavee-black/15 bg-casavee-cream/70 text-casavee-black transition-all duration-300 hover:border-casavee-gold hover:bg-casavee-black hover:text-white"
                                    aria-label="Discover Our Story"
                                >
                                    <svg class="h-28 w-28 animate-[spin_24s_linear_infinite]" viewBox="0 0 120 120" aria-hidden="true">
                                        <defs>
                                            <path id="welcome-circle-text" d="M 60, 60 m -44, 0 a 44,44 0 1,1 88,0 a 44,44 0 1,1 -88,0" />
                                        </defs>
                                        <text class="fill-current text-[9.5px] font-medium uppercase tracking-[0.22em]">
                                            <textPath href="#welcome-circle-text">
                                                CASAVEE INTERIORS • DISCOVER OUR STORY •
                                            </textPath>
                                        </text>
                                    </svg>
                                    <span class="absolute inset-0 flex items-center justify-center">
                                        <span class="flex h-11 w-11 items-center justify-center rounded-full border border-current/25 transition-transform duration-300 group-hover:rotate-45">
                                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                            </svg>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="sm:col-span-8">
                                <div class="group overflow-hidden rounded-xs bg-casavee-black/5 shadow-sm">
                                    <div class="aspect-[16/10] w-full overflow-hidden">
                                        <img
                                            src="{{ asset('storage/images/general/modern-living-room-interior-design_23-2150794649.jpg') }}"
                                            alt="CasaVee Interiors — Artistry meets interior design"
                                            class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-[1.03]"
                                            loading="lazy"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-casavee-black/15 pt-8">
                            <p class="text-lg font-normal leading-relaxed text-casavee-black">
                                Founded by Vera Sidika, CasaVee Interiors is a design company dedicated to bringing beautiful spaces to life for individuals, families and businesses in Kenya and internationally.
                            </p>
                            <p class="mt-3 text-[15px] leading-[1.7] text-casavee-black/75">
                                At CasaVee Interiors, creativity is at the heart of everything we do—appreciating the balance of colour, composition, texture, proportion and form to create environments that feel harmonious, distinctive and personal.
                            </p>

                            <div class="mt-7">
                                <a
                                    href="{{ route('about') }}"
                                    class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-black px-6 py-3.5 text-[13.5px] font-medium tracking-wide text-casavee-ivory transition-all duration-300 hover:bg-casavee-gold hover:text-casavee-black"
                                >
                                    <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                        <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                                    </svg>
                                    <span>Discover Our Story</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 3. BRIEF OVERVIEW OF DESIGN SERVICES (LINKS TO /services) --}}
        <section
            aria-labelledby="services-preview-heading"
            class="relative bg-casavee-alabaster text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10"
        >
            <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
                <div class="flex flex-col justify-between gap-6 border-b border-casavee-black/15 pb-10 lg:flex-row lg:items-end">
                    <div>
                        <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                            <span>[</span>
                            <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                            </svg>
                            <span>Our Design Services</span>
                            <span>]</span>
                        </span>
                        <h2
                            id="services-preview-heading"
                            class="mt-4 text-3xl sm:text-4xl lg:text-[42px] font-normal leading-[1.18] tracking-[-0.015em] text-casavee-black"
                        >
                            Curated Interior Design
                            <span class="font-serif italic font-normal text-casavee-gold">&amp; Space Transformation</span>
                        </h2>
                    </div>

                    <a
                        href="{{ route('services') }}"
                        class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-black px-6 py-3.5 text-[13.5px] font-medium tracking-wide text-casavee-ivory transition-all duration-300 hover:bg-casavee-gold hover:text-casavee-black self-start lg:self-auto"
                    >
                        <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                        <span>View All 6 Services</span>
                    </a>
                </div>

                @php
                    $servicePreviews = [
                        ['num' => '01', 'title' => 'Luxury residential design', 'summary' => 'Complete home and apartment interiors'],
                        ['num' => '02', 'title' => 'Commercial interior design', 'summary' => 'Offices, salons, spas, boutiques and hospitality'],
                        ['num' => '03', 'title' => 'Full interior transformations', 'summary' => 'Concept through agreed project execution'],
                        ['num' => '04', 'title' => 'Interior styling', 'summary' => 'Furniture, lighting, curtains, artwork and accessories'],
                        ['num' => '05', 'title' => 'Design consultation', 'summary' => 'Professional guidance and design direction'],
                        ['num' => '06', 'title' => 'Space planning', 'summary' => 'Layouts, room optimisation and material selection'],
                    ];
                @endphp

                <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($servicePreviews as $service)
                        <a
                            href="{{ route('services') }}"
                            class="group flex flex-col justify-between rounded-xs border border-casavee-black/12 bg-casavee-ivory p-7 transition-all duration-300 hover:border-casavee-gold hover:bg-casavee-cream/70"
                        >
                            <div>
                                <div class="flex items-center justify-between">
                                    <span class="font-serif text-3xl italic text-casavee-gold">{{ $service['num'] }}</span>
                                    <span class="flex h-8 w-8 items-center justify-center rounded-full border border-casavee-black/15 text-xs transition-transform duration-300 group-hover:rotate-45 group-hover:border-casavee-gold group-hover:bg-casavee-gold group-hover:text-white">
                                        &nearr;
                                    </span>
                                </div>
                                <h3 class="mt-5 text-xl font-normal text-casavee-black">
                                    {{ $service['title'] }}
                                </h3>
                                <p class="mt-2 text-sm leading-relaxed text-casavee-black/70">
                                    {{ $service['summary'] }}
                                </p>
                            </div>
                            <span class="mt-6 inline-block text-xs font-medium uppercase tracking-[0.16em] text-casavee-taupe group-hover:text-casavee-black">
                                Explore Service Details &rarr;
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- 4. SELECTED FEATURED PROJECTS PREVIEW (LINKS TO /projects) --}}
        <section
            aria-labelledby="featured-projects-heading"
            class="relative bg-casavee-ivory text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10"
        >
            <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
                <div class="flex flex-col justify-between gap-6 border-b border-casavee-black/15 pb-10 lg:flex-row lg:items-end">
                    <div>
                        <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                            <span>[</span>
                            <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                            </svg>
                            <span>Featured Projects</span>
                            <span>]</span>
                        </span>
                        <h2
                            id="featured-projects-heading"
                            class="mt-4 text-3xl sm:text-4xl lg:text-[42px] font-normal leading-[1.18] tracking-[-0.015em] text-casavee-black"
                        >
                            Selected Spaces &amp;
                            <span class="font-serif italic font-normal text-casavee-gold">Design Portfolio</span>
                        </h2>
                    </div>

                    <a
                        href="{{ route('projects') }}"
                        class="inline-flex items-center gap-2.5 rounded-xs border border-casavee-black px-6 py-3 text-[13.5px] font-medium tracking-wide text-casavee-black transition-all duration-300 hover:bg-casavee-black hover:text-casavee-ivory self-start lg:self-auto"
                    >
                        <svg class="h-2.5 w-2.5 fill-current text-casavee-gold" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                        <span>Explore Our Projects</span>
                    </a>
                </div>

                <div class="mt-14 grid grid-cols-1 gap-8 lg:grid-cols-12">
                    <article class="group lg:col-span-7">
                        <a href="{{ route('casa-vee') }}" class="block overflow-hidden rounded-xs bg-casavee-black/5">
                            <div class="aspect-[16/10] w-full overflow-hidden">
                                <img
                                    src="{{ asset('storage/images/general/3d-rendering-loft-luxury-living-room-with-shelf-near-dining-table_105762-2053.jpg') }}"
                                    alt="Casa Vee — Complete Home Interior Transformation"
                                    class="h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-[1.03]"
                                    loading="lazy"
                                />
                            </div>
                        </a>
                        <div class="mt-4 flex items-center justify-between border-b border-casavee-black/15 pb-4">
                            <div>
                                <span class="text-xs font-medium uppercase tracking-[0.18em] text-casavee-taupe">
                                    Priority Flagship Project
                                </span>
                                <h3 class="mt-1 text-xl font-normal text-casavee-black">
                                    Casa Vee — Complete Home Transformation
                                </h3>
                            </div>
                            <a href="{{ route('casa-vee') }}" class="text-xs font-medium uppercase tracking-[0.16em] text-casavee-black hover:text-casavee-gold">
                                View Project &nearr;
                            </a>
                        </div>
                    </article>

                    <article class="group lg:col-span-5">
                        <a href="{{ route('projects') }}" class="block overflow-hidden rounded-xs bg-casavee-black/5">
                            <div class="aspect-[4/3] lg:aspect-[4/3.35] w-full overflow-hidden">
                                <img
                                    src="{{ asset('storage/images/general/modern-cafe-interior-design_53876-143194.jpg') }}"
                                    alt="Residential & Commercial Spaces Portfolio"
                                    class="h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-[1.03]"
                                    loading="lazy"
                                />
                            </div>
                        </a>
                        <div class="mt-4 flex items-center justify-between border-b border-casavee-black/15 pb-4">
                            <div>
                                <span class="text-xs font-medium uppercase tracking-[0.18em] text-casavee-taupe">
                                    Residential &amp; Commercial Portfolio
                                </span>
                                <h3 class="mt-1 text-xl font-normal text-casavee-black">
                                    Homes, Salon &amp; Spa, and Apartment Spaces
                                </h3>
                            </div>
                            <a href="{{ route('projects') }}" class="text-xs font-medium uppercase tracking-[0.16em] text-casavee-black hover:text-casavee-gold">
                                View Portfolio &nearr;
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- 5. THE CASA VEE HOME TRANSFORMATION PREVIEW (LINKS TO /casa-vee) --}}
        <section
            aria-labelledby="casavee-preview-heading"
            class="relative bg-casavee-black text-white py-24 sm:py-32 overflow-hidden"
        >
            <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
                <div class="relative overflow-hidden rounded-xs border border-white/15">
                    <div class="aspect-[16/10] sm:aspect-[21/9] w-full overflow-hidden">
                        <img
                            src="{{ asset('storage/images/general/3d-rendering-modern-dining-room-living-room-with-luxury-decor_105762-1934.jpg') }}"
                            alt="CASA VEE — The Art of Transforming a Home"
                            class="h-full w-full object-cover object-center"
                            loading="lazy"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/40 to-black/25"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/35 to-transparent"></div>
                    </div>

                    <div class="relative sm:absolute sm:inset-y-0 sm:left-0 flex flex-col justify-end p-6 sm:p-10 lg:p-14 max-w-2xl">
                        <span class="inline-block w-fit rounded-xs bg-casavee-gold/20 border border-casavee-gold/40 px-3 py-1 text-[11px] font-medium uppercase tracking-[0.2em] text-casavee-gold">
                            Priority Portfolio Project
                        </span>
                        <h2
                            id="casavee-preview-heading"
                            class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-normal leading-[1.14] text-white"
                        >
                            CASA VEE —
                            <span class="font-serif italic font-normal text-casavee-gold">
                                The Art of Transforming a Home.
                            </span>
                        </h2>
                        <p class="mt-4 text-[15px] leading-relaxed text-white/80">
                            A dedicated editorial showcase of Vera Sidika's own home, including the full renovation and room-by-room interior transformation.
                        </p>
                        <div class="mt-7">
                            <a
                                href="{{ route('casa-vee') }}"
                                class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-ivory px-6 py-3.5 text-[13.5px] font-medium tracking-wide text-casavee-black transition-all duration-300 hover:bg-casavee-gold hover:text-white"
                            >
                                <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                                </svg>
                                <span>Experience the Transformation</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 6. SHORT FOUNDER INTRODUCTION PREVIEW (LINKS TO /about) --}}
        <section
            aria-labelledby="founder-preview-heading"
            class="relative bg-casavee-cream text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10"
        >
            <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-12 lg:items-center">
                    {{-- Left: Official Black & Champagne Gold Credential Plaque --}}
                    <div class="lg:col-span-5">
                        <div class="rounded-xs bg-casavee-black p-8 sm:p-10 text-center text-white shadow-xl border border-casavee-gold/30">
                            <div class="mx-auto mb-6 h-20 w-44 overflow-hidden flex items-center justify-center">
                                <img
                                    src="{{ asset('storage/images/logo/IMG_7739.PNG') }}"
                                    alt="CasaVee Interiors Champagne Gold Logo"
                                    class="h-32 w-auto max-w-none object-contain"
                                    loading="lazy"
                                />
                            </div>
                            <h3 class="font-serif text-2xl sm:text-3xl tracking-[0.14em] uppercase text-casavee-gold">
                                VERA SIDIKA
                            </h3>
                            <p class="mt-2 text-xs sm:text-sm font-normal tracking-[0.22em] uppercase text-white/90">
                                FOUNDER &amp; CREATIVE DIRECTOR
                            </p>
                            <div class="my-6 h-px w-full bg-casavee-gold/40"></div>
                            <p class="text-[13.5px] leading-relaxed text-white/85">
                                Fine Art Background | Interior Design &amp; Creative Direction
                            </p>
                            <p class="mt-3 text-xs font-medium tracking-[0.22em] uppercase text-casavee-gold">
                                CASAVEE INTERIORS
                            </p>
                        </div>
                    </div>

                    {{-- Right: Concise Version 1 Founder Introduction (PDF Pages 6–7) --}}
                    <div class="lg:col-span-7 lg:pl-8">
                        <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                            <span>[</span>
                            <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                            </svg>
                            <span>Meet the Founder</span>
                            <span>]</span>
                        </span>

                        <h2
                            id="founder-preview-heading"
                            class="mt-4 text-3xl sm:text-4xl font-normal leading-[1.18] tracking-[-0.015em] text-casavee-black"
                        >
                            Meet Vera Sidika —
                            <span class="font-serif italic font-normal text-casavee-gold">Founder &amp; Creative Director</span>
                        </h2>

                        <div class="mt-6 space-y-4 text-[15.5px] leading-[1.75] text-casavee-black/80">
                            <p>
                                CasaVee Interiors was founded by Vera Sidika, whose passion for beautiful spaces, interior aesthetics and creative transformation has developed over many years.
                            </p>
                            <p>
                                As Founder and Creative Director, Vera leads the creative vision and brand direction of CasaVee, bringing a personal appreciation for elegance, detail and elevated living into the company's work.
                            </p>
                        </div>

                        <div class="mt-8">
                            <a
                                href="{{ route('about') }}"
                                class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-black px-6 py-3.5 text-[13.5px] font-medium tracking-wide text-casavee-ivory transition-all duration-300 hover:bg-casavee-gold hover:text-casavee-black"
                            >
                                <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                                </svg>
                                <span>Read Full Founder Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 7. BRIEF DESIGN PROCESS OVERVIEW (LINKS TO /services) --}}
        <section
            aria-labelledby="process-preview-heading"
            class="relative bg-casavee-espresso text-white py-24 sm:py-32"
        >
            <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
                <div class="flex flex-col justify-between gap-6 border-b border-white/15 pb-10 lg:flex-row lg:items-end">
                    <div>
                        <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-white/80">
                            <span>[</span>
                            <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                            </svg>
                            <span>Our Design Process</span>
                            <span>]</span>
                        </span>
                        <h2
                            id="process-preview-heading"
                            class="mt-4 text-3xl sm:text-4xl font-normal leading-[1.18] tracking-[-0.015em] text-white"
                        >
                            Three Ways of
                            <span class="font-serif italic font-normal text-casavee-gold">Working With Clients</span>
                        </h2>
                    </div>

                    <a
                        href="{{ route('services') }}"
                        class="inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.18em] text-casavee-gold hover:text-white transition-colors"
                    >
                        <span>Discuss Your Project</span>
                        <span aria-hidden="true">&nearr;</span>
                    </a>
                </div>

                <div class="mt-12 grid grid-cols-1 gap-6 lg:grid-cols-3">
                    <div class="rounded-xs border border-white/15 bg-white/[0.03] p-8">
                        <span class="font-serif text-3xl italic text-casavee-gold">01</span>
                        <h3 class="mt-4 text-xl font-normal text-white">Design Consultation</h3>
                        <p class="mt-2 text-sm leading-relaxed text-white/75">
                            For clients who need expert direction.
                        </p>
                    </div>

                    <div class="rounded-xs border border-casavee-gold/50 bg-white/[0.05] p-8">
                        <span class="font-serif text-3xl italic text-casavee-gold">02</span>
                        <h3 class="mt-4 text-xl font-normal text-white">Design &amp; Styling</h3>
                        <p class="mt-2 text-sm leading-relaxed text-white/75">
                            For clients who want a beautifully curated space.
                        </p>
                    </div>

                    <div class="rounded-xs border border-white/15 bg-white/[0.03] p-8">
                        <span class="font-serif text-3xl italic text-casavee-gold">03</span>
                        <h3 class="mt-4 text-xl font-normal text-white">Complete Transformation</h3>
                        <p class="mt-2 text-sm leading-relaxed text-white/75">
                            For clients who want an end-to-end design project.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 8. APPROVED BRAND PHILOSOPHY SECTION --}}
        <section
            aria-labelledby="philosophy-heading"
            class="relative bg-casavee-ivory text-casavee-black py-24 sm:py-28 border-b border-casavee-black/10"
        >
            <div class="mx-auto max-w-[1140px] px-6 sm:px-10 lg:px-16 text-center">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                    <span>[</span>
                    <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                    </svg>
                    <span>The CasaVee Philosophy</span>
                    <span>]</span>
                </span>

                <div class="mt-6 font-serif text-6xl sm:text-7xl leading-none text-casavee-gold select-none" aria-hidden="true">
                    &ldquo;
                </div>

                <h2
                    id="philosophy-heading"
                    class="mt-2 font-serif text-3xl sm:text-4xl lg:text-5xl italic font-normal leading-[1.25] text-casavee-black"
                >
                    A personal passion. A creative vision. A brand built around beautiful living.
                </h2>

                <p class="mx-auto mt-6 max-w-2xl text-[16px] leading-relaxed text-casavee-black/75">
                    Every element should contribute to a larger vision, creating an environment that feels harmonious, distinctive and personal.
                </p>

                <div class="mt-8 flex items-center justify-center gap-3 text-xs font-medium uppercase tracking-[0.22em] text-casavee-taupe">
                    <span>Vera Sidika</span>
                    <span>&bull;</span>
                    <span>Founder &amp; Creative Director</span>
                </div>
            </div>
        </section>

        {{-- 9. CONSULTATION INVITATION BANNER (LINKS TO /contact) --}}
        <section
            aria-labelledby="consultation-invitation-heading"
            class="relative bg-casavee-cream text-casavee-black py-24 sm:py-32"
        >
            <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
                <div class="relative overflow-hidden rounded-xs bg-casavee-black text-white p-8 sm:p-14 lg:p-20">
                    <div class="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:items-center">
                        <div class="lg:col-span-8">
                            <span class="inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold">
                                <span>[</span>
                                <span>Consultation Invitation</span>
                                <span>]</span>
                            </span>
                            <h2
                                id="consultation-invitation-heading"
                                class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-normal leading-[1.15] tracking-tight text-white"
                            >
                                LET'S CREATE
                                <span class="font-serif italic font-normal text-casavee-gold">
                                    SOMETHING BEAUTIFUL.
                                </span>
                            </h2>
                            <p class="mt-4 max-w-2xl text-[15.5px] leading-relaxed text-white/75">
                                Begin your residential or commercial transformation in Kenya or internationally. Book an in-person or online consultation with CasaVee Interiors.
                            </p>
                        </div>

                        <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col items-start lg:items-end gap-4">
                            <a
                                href="{{ route('contact') }}"
                                class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-ivory px-7 py-4 text-[13.5px] font-medium uppercase tracking-[0.14em] text-casavee-black transition-all duration-300 hover:bg-casavee-gold hover:text-white"
                            >
                                <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                                </svg>
                                <span>Start Your Project</span>
                            </a>
                            <a
                                href="mailto:hello@casaveeinteriors.com"
                                class="text-xs tracking-[0.16em] uppercase text-white/70 hover:text-casavee-gold transition-colors"
                            >
                                hello@casaveeinteriors.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-public-footer />

    </body>
</html>
