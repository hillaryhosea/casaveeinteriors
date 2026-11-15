<x-public-layout
    title="Our Projects — CasaVee Interiors | Portfolio & Design Case Studies"
    description="Explore CasaVee Interiors' gallery of completed spaces, room transformations, and design case studies, including the flagship Casa Vee home transformation."
>
    {{-- PAGE HEADER & NAVIGATION --}}
    <section class="relative bg-casavee-black text-white overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-35">
            <img
                src="{{ asset('storage/images/general/3d-rendering-loft-luxury-living-room-with-shelf-near-dining-table_105762-2053.jpg') }}"
                alt="CasaVee Interiors Portfolio"
                class="h-full w-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/60 to-casavee-black"></div>
        </div>

        <x-public-navbar />

        <div class="relative z-10 mx-auto max-w-[1440px] px-6 pt-16 pb-20 sm:px-10 sm:pt-24 sm:pb-28 lg:px-16">
            <div class="max-w-4xl">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.16em] uppercase text-casavee-gold">
                    <span>[</span>
                    <span>04 / Our Projects</span>
                    <span>]</span>
                </span>
                <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-normal leading-[1.12] tracking-[-0.015em] text-white">
                    Completed Spaces, Room Transformations
                    <span class="block font-serif italic font-normal text-casavee-gold mt-1">
                        &amp; Design Case Studies.
                    </span>
                </h1>
                <p class="mt-6 max-w-2xl text-base sm:text-lg leading-relaxed text-white/80">
                    A gallery of completed spaces, room transformations and design case studies across residential properties and business spaces.
                </p>
            </div>
        </div>
    </section>

    {{-- SECTION 1: PRIORITY FLAGSHIP PORTFOLIO PROJECT — CASA VEE --}}
    <section class="bg-casavee-ivory text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="rounded-xs border border-casavee-black/15 bg-casavee-black text-white overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    <div class="lg:col-span-7 overflow-hidden">
                        <img
                            src="{{ asset('storage/images/general/3d-rendering-modern-dining-room-living-room-with-luxury-decor_105762-1934.jpg') }}"
                            alt="CASA VEE — The Art of Transforming a Home"
                            class="h-full w-full object-cover object-center min-h-[340px]"
                        />
                    </div>
                    <div class="lg:col-span-5 p-8 sm:p-12 flex flex-col justify-between">
                        <div>
                            <span class="inline-block rounded-xs bg-casavee-gold/20 border border-casavee-gold/40 px-3 py-1 text-[11px] font-medium uppercase tracking-[0.2em] text-casavee-gold">
                                Priority Portfolio Project
                            </span>
                            <h2 class="mt-5 text-3xl sm:text-4xl font-normal leading-[1.15] text-white">
                                CASA VEE —
                                <span class="font-serif italic text-casavee-gold">The Art of Transforming a Home.</span>
                            </h2>
                            <p class="mt-4 text-[15px] leading-relaxed text-white/80">
                                Her own home, Casa Vee, represents one of Vera Sidika's most significant personal interior transformation projects, where she undertook the complete interior design and renovation of the property.
                            </p>
                        </div>

                        <div class="mt-8 pt-6 border-t border-white/15">
                            <a
                                href="{{ route('casa-vee') }}"
                                class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-ivory px-6 py-3.5 text-xs font-medium uppercase tracking-[0.16em] text-casavee-black transition-all hover:bg-casavee-gold hover:text-white"
                            >
                                <span>Experience the Transformation</span>
                                <span aria-hidden="true">&nearr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 2: VERIFIED PORTFOLIO SPACES & DESIGN CATEGORIES (PDF PAGES 5, 8, 16–17) --}}
    <section class="bg-casavee-alabaster text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="max-w-3xl mb-16">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                    <span>[</span>
                    <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                    </svg>
                    <span>Residential &amp; Commercial Portfolio</span>
                    <span>]</span>
                </span>
                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-[42px] font-normal leading-[1.18] text-casavee-black">
                    Residential Properties &amp;
                    <span class="font-serif italic text-casavee-gold">Business Spaces</span>
                </h2>
                <p class="mt-4 text-[15.5px] leading-relaxed text-casavee-black/75">
                    Over the years, Vera's passion has found expression in her own residential properties and business spaces—including her homes, salon and spa, and apartment—envisioning, redesigning and transforming these environments into beautiful spaces that reflect sophisticated living.
                </p>
            </div>

            @php
                $portfolioCategories = [
                    [
                        'category' => 'Flagship Residential Transformation',
                        'title' => 'Casa Vee — Complete Home Interior Design',
                        'description' => 'A dedicated editorial showcase of Vera Sidika\'s own home, including the full renovation and room-by-room interior transformation across living, dining, bedrooms, bathrooms, and outdoor spaces.',
                        'image' => 'storage/images/general/3d-rendering-loft-luxury-living-room-with-shelf-near-dining-table_105762-2053.jpg',
                        'link' => route('casa-vee'),
                        'cta' => 'View Casa Vee Showcase',
                    ],
                    [
                        'category' => 'Residential Properties',
                        'title' => 'Luxury Home & Apartment Interiors',
                        'description' => 'Complete home and apartment interiors thoughtfully designed with a balance of colour, composition, texture, proportion and form.',
                        'image' => 'storage/images/general/3d-rendering-loft-luxury-living-room-with-bookshelf_105762-2111.jpg',
                        'link' => route('contact'),
                        'cta' => 'Enquire About Residential Design',
                    ],
                    [
                        'category' => 'Commercial & Business Spaces',
                        'title' => 'Salon, Spa, Boutique & Hospitality Interiors',
                        'description' => 'Commercial interior design and space transformation for offices, salons, spas, boutiques and hospitality environments.',
                        'image' => 'storage/images/general/modern-cafe-interior-design_53876-143194.jpg',
                        'link' => route('contact'),
                        'cta' => 'Enquire About Commercial Design',
                    ],
                    [
                        'category' => 'Space Planning & Dining Environments',
                        'title' => 'Dining Areas, Layouts & Room Optimisation',
                        'description' => 'Thoughtful layouts, room optimisation and material selection tailored to modern luxury living and entertaining.',
                        'image' => 'storage/images/general/modern-kitchen-design-interior_23-2150954758.jpg',
                        'link' => route('contact'),
                        'cta' => 'Discuss Space Planning',
                    ],
                    [
                        'category' => 'Interior Styling & Décor',
                        'title' => 'Furniture, Lighting, Curtains & Artwork Curation',
                        'description' => 'Curated furniture, lighting, curtains, artwork and decorative accessories that bring harmony and personality to every room.',
                        'image' => 'storage/images/general/modern-styled-small-entryway_23-2150712931.jpg',
                        'link' => route('contact'),
                        'cta' => 'Discuss Interior Styling',
                    ],
                    [
                        'category' => 'Full Interior Transformations',
                        'title' => 'Concept Through Agreed Project Execution',
                        'description' => 'End-to-end room and property transformations guiding clients from initial creative vision through complete execution.',
                        'image' => 'storage/images/general/cozy-lively-home-interior-design_23-2151119049.jpg',
                        'link' => route('contact'),
                        'cta' => 'Start Your Transformation',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
                @foreach ($portfolioCategories as $item)
                    <article class="group flex flex-col justify-between rounded-xs border border-casavee-black/12 bg-casavee-ivory overflow-hidden shadow-xs">
                        <div>
                            <div class="aspect-[16/10] w-full overflow-hidden bg-casavee-black/5">
                                <img
                                    src="{{ asset($item['image']) }}"
                                    alt="{{ $item['title'] }}"
                                    class="h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-[1.03]"
                                    loading="lazy"
                                />
                            </div>
                            <div class="p-7 sm:p-8">
                                <span class="text-xs font-medium uppercase tracking-[0.18em] text-casavee-gold">
                                    {{ $item['category'] }}
                                </span>
                                <h3 class="mt-2 text-2xl font-normal text-casavee-black">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="mt-3 text-[15px] leading-relaxed text-casavee-black/75">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                        <div class="border-t border-casavee-black/10 px-7 py-4 sm:px-8 bg-casavee-cream/50">
                            <a
                                href="{{ $item['link'] }}"
                                class="inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.16em] text-casavee-black hover:text-casavee-gold transition-colors"
                            >
                                <span>{{ $item['cta'] }}</span>
                                <span aria-hidden="true">&nearr;</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 3: PROJECT ENQUIRY CALL TO ACTION --}}
    <section class="bg-casavee-cream text-casavee-black py-20 sm:py-24">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16 text-center">
            <h2 class="text-3xl sm:text-4xl font-normal text-casavee-black">
                Ready to Transform
                <span class="font-serif italic text-casavee-gold">Your Space?</span>
            </h2>
            <p class="mx-auto mt-3 max-w-xl text-[15.5px] text-casavee-black/75">
                Enquire with CasaVee Interiors for residential and commercial interior design projects in Kenya and internationally.
            </p>
            <div class="mt-8">
                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-black px-7 py-4 text-xs font-medium uppercase tracking-[0.16em] text-casavee-ivory transition-all hover:bg-casavee-gold hover:text-casavee-black"
                >
                    <span>Start Your Project</span>
                    <span aria-hidden="true">&nearr;</span>
                </a>
            </div>
        </div>
    </section>
</x-public-layout>
