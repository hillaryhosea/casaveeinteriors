<x-public-layout
    title="Casa Vee — The Art of Transforming a Home | CasaVee Interiors"
    description="CASA VEE — The Art of Transforming a Home. Explore the flagship personal home renovation and complete interior transformation by Vera Sidika, Founder & Creative Director of CasaVee Interiors."
>
    {{-- SECTION 1: FULL-SCREEN SHOWCASE OF THE COMPLETED HOUSE (PDF PAGE 9 ITEM 1) --}}
    <section class="relative min-h-[82vh] bg-casavee-black text-white overflow-hidden flex flex-col justify-between">
        <div class="absolute inset-0 z-0">
            <img
                src="{{ asset('storage/images/general/3d-rendering-modern-dining-room-living-room-with-luxury-decor_105762-1934.jpg') }}"
                alt="CASA VEE — The Art of Transforming a Home"
                class="h-full w-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/45 to-casavee-black"></div>
        </div>

        <x-public-navbar />

        <div class="relative z-10 mx-auto w-full max-w-[1440px] px-6 pt-16 pb-20 sm:px-10 sm:pt-24 sm:pb-24 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-end">
                <div class="lg:col-span-8">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.16em] uppercase text-casavee-gold">
                            <span>[</span>
                            <span>05 / Casa Vee</span>
                            <span>]</span>
                        </span>
                        <span class="inline-block rounded-xs bg-casavee-gold/20 border border-casavee-gold/40 px-3 py-1 text-[11px] font-medium uppercase tracking-[0.2em] text-casavee-gold">
                            Priority Portfolio Project
                        </span>
                    </div>

                    <h1 class="mt-6 text-4xl sm:text-5xl lg:text-[62px] font-normal leading-[1.08] tracking-[-0.02em] text-white">
                        CASA VEE —
                        <span class="block font-serif italic font-normal text-casavee-gold mt-2">
                            The Art of Transforming a Home.
                        </span>
                    </h1>

                    <p class="mt-6 max-w-2xl text-base sm:text-lg leading-relaxed text-white/85">
                        A dedicated showcase of Vera Sidika's own home, including the full renovation and interior transformation.
                    </p>
                </div>

                <div class="lg:col-span-4 lg:flex lg:justify-end">
                    <div class="rounded-xs border border-white/15 bg-black/55 backdrop-blur-md p-6 max-w-sm">
                        <p class="text-[11px] font-medium uppercase tracking-[0.2em] text-casavee-gold">
                            01 / Completed Residence Showcase
                        </p>
                        <p class="mt-2 text-sm leading-relaxed text-white/80">
                            Complete interior design and renovation undertaken personally by Vera Sidika, Founder &amp; Creative Director of CasaVee Interiors.
                        </p>
                        <a
                            href="#transformation-chapters"
                            class="mt-5 inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.16em] text-casavee-ivory hover:text-casavee-gold transition-colors"
                        >
                            <span>Explore the 10-Chapter Feature</span>
                            <span aria-hidden="true">&darr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CHAPTER NAVIGATION BAR --}}
    <div id="transformation-chapters" class="bg-casavee-espresso text-white/80 border-b border-white/10">
        <div class="mx-auto max-w-[1440px] px-6 py-4 sm:px-10 lg:px-16 overflow-x-auto">
            <div class="flex items-center gap-6 text-xs uppercase tracking-[0.16em] whitespace-nowrap">
                <a href="#chapter-vision" class="hover:text-casavee-gold transition-colors">02. The Vision</a>
                <span class="text-white/20">/</span>
                <a href="#chapter-transformation" class="hover:text-casavee-gold transition-colors">03. Before &amp; After</a>
                <span class="text-white/20">/</span>
                <a href="#chapter-living" class="hover:text-casavee-gold transition-colors">04. Living Room</a>
                <span class="text-white/20">/</span>
                <a href="#chapter-dining" class="hover:text-casavee-gold transition-colors">05. Dining Area</a>
                <span class="text-white/20">/</span>
                <a href="#chapter-bedrooms" class="hover:text-casavee-gold transition-colors">06. Bedrooms &amp; Closet</a>
                <span class="text-white/20">/</span>
                <a href="#chapter-bathrooms" class="hover:text-casavee-gold transition-colors">07. Bathrooms</a>
                <span class="text-white/20">/</span>
                <a href="#chapter-outdoor" class="hover:text-casavee-gold transition-colors">08. Rooftop &amp; Outdoor</a>
                <span class="text-white/20">/</span>
                <a href="#chapter-details" class="hover:text-casavee-gold transition-colors">09. Lighting &amp; Details</a>
                <span class="text-white/20">/</span>
                <a href="#chapter-reveal" class="hover:text-casavee-gold transition-colors">10. Final Reveal</a>
            </div>
        </div>
    </div>

    {{-- SECTION 2: AN INTRODUCTION EXPLAINING THE VISION (PDF PAGE 9 ITEM 2 & PAGES 16–18) --}}
    <section id="chapter-vision" class="bg-casavee-ivory text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-6">
                    <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                        <span>[</span>
                        <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                        <span>02 / Creative Vision &amp; Origin</span>
                        <span>]</span>
                    </span>

                    <h2 class="mt-5 text-3xl sm:text-4xl lg:text-[44px] font-normal leading-[1.15] tracking-[-0.015em] text-casavee-black">
                        An Introduction to
                        <span class="font-serif italic text-casavee-gold">Casa Vee</span>
                    </h2>

                    <div class="mt-6 space-y-5 text-[15.5px] leading-[1.8] text-casavee-black/80">
                        <p>
                            Her own home, <strong>Casa Vee</strong>, represents one of her most significant personal interior transformation projects, where she undertook the complete interior design and renovation of the property.
                        </p>
                        <p>
                            Over the years, that passion found expression in her own residential properties and business spaces. From her homes to her salon and spa, and her apartment, Vera personally envisioned, redesigned and transformed each environment into a space of beauty, comfort and individuality.
                        </p>
                        <p>
                            Through these personal projects, what began as a natural passion evolved into a clear business vision. Having transformed her own spaces from the ground up, Vera founded CasaVee Interiors to extend that same creativity, dedication and eye for detail to clients seeking refined and memorable interiors.
                        </p>
                    </div>

                    <blockquote class="mt-8 border-l-2 border-casavee-gold pl-5 py-1">
                        <p class="font-serif italic text-xl sm:text-2xl leading-relaxed text-casavee-black">
                            "For Vera, design is more than decoration. It is the art of imagining what a space can become and bringing that vision to life."
                        </p>
                        <footer class="mt-2 text-xs uppercase tracking-[0.18em] text-casavee-taupe">
                            Vera Sidika — Founder &amp; Creative Director
                        </footer>
                    </blockquote>
                </div>

                <div class="lg:col-span-6">
                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-5 items-end">
                        <div class="sm:col-span-7 overflow-hidden rounded-xs shadow-lg">
                            <img
                                src="{{ asset('storage/images/general/3d-rendering-loft-luxury-living-room-with-shelf-near-dining-table_105762-2053.jpg') }}"
                                alt="Casa Vee Interior Vision"
                                class="aspect-[4/5] w-full object-cover"
                            />
                        </div>
                        <div class="sm:col-span-5 space-y-5">
                            <div class="overflow-hidden rounded-xs shadow-md">
                                <img
                                    src="{{ asset('storage/images/general/3d-rendering-loft-luxury-living-room-with-shelf-near-dining-table_105762-2185.jpg') }}"
                                    alt="Casa Vee Spatial Harmony"
                                    class="aspect-square w-full object-cover"
                                />
                            </div>
                            <div class="rounded-xs bg-casavee-black text-white p-6 border border-casavee-gold/30">
                                <p class="text-[11px] font-medium uppercase tracking-[0.18em] text-casavee-gold">
                                    Fine Art &amp; Architecture
                                </p>
                                <p class="mt-2 text-xs leading-relaxed text-white/80">
                                    Guided by the relationship between art and interiors: the balance of colour, composition, texture, proportion and form.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3: BEFORE-AND-AFTER TRANSFORMATION (PDF PAGE 9 ITEM 3) --}}
    <section id="chapter-transformation" class="bg-casavee-black text-white py-24 sm:py-32 border-b border-white/10">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-gold">
                    <span>[</span>
                    <span>03 / Before-and-After Transformation</span>
                    <span>]</span>
                </span>
                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-[42px] font-normal leading-[1.16] text-white">
                    From Architectural Shell to
                    <span class="font-serif italic text-casavee-gold">Refined Sanctuary</span>
                </h2>
                <p class="mt-4 text-[15.5px] leading-relaxed text-white/75">
                    Undertaking the complete interior design and renovation of the property from the ground up—reimagining spatial flow, lighting, finishes, and custom detailing across every level of the home.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="rounded-xs border border-white/15 bg-white/[0.03] p-8 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold">Stage I</span>
                        <h3 class="mt-3 text-xl font-medium text-white">Spatial Reconfiguration &amp; Renovation</h3>
                        <p class="mt-3 text-sm leading-relaxed text-white/75">
                            Assessing the existing layout and undertaking structural and architectural interior improvements to establish proportion, flow, and natural light throughout the residence.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-white/10 text-xs uppercase tracking-[0.16em] text-white/60">
                        Layouts &bull; Room Optimisation &bull; Material Selection
                    </div>
                </div>

                <div class="rounded-xs border border-white/15 bg-white/[0.03] p-8 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold">Stage II</span>
                        <h3 class="mt-3 text-xl font-medium text-white">Materiality, Colour &amp; Composition</h3>
                        <p class="mt-3 text-sm leading-relaxed text-white/75">
                            Applying a Fine Art eye for colour, composition, texture, proportion and form—layering warm architectural tones, stone textures, and bespoke joinery.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-white/10 text-xs uppercase tracking-[0.16em] text-white/60">
                        Colour &bull; Texture &bull; Proportion &bull; Form
                    </div>
                </div>

                <div class="rounded-xs border border-casavee-gold/40 bg-white/[0.06] p-8 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold">Stage III</span>
                        <h3 class="mt-3 text-xl font-medium text-white">Complete Interior Styling &amp; Curation</h3>
                        <p class="mt-3 text-sm leading-relaxed text-white/75">
                            Curating statement furniture, architectural lighting, drapery, artwork and decorative accessories so every element contributes to a harmonious, personal vision.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-white/10 text-xs uppercase tracking-[0.16em] text-casavee-gold">
                        Furniture &bull; Lighting &bull; Curtains &bull; Artwork
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTIONS 4 TO 9: ROOM-BY-ROOM EDITORIAL GALLERIES & DESCRIPTIONS (PDF PAGES 9–10) --}}
    @php
        $roomChapters = [
            [
                'id' => 'chapter-living',
                'number' => '04',
                'title' => 'Living Room Design',
                'accent' => 'Warmth, Scale & Statement Comfort',
                'description' => 'Designed as the expressive heart of Casa Vee, the living spaces balance grand architectural scale with inviting warmth—combining plush bespoke seating, curated artwork, layered lighting, and custom shelving.',
                'primary_image' => 'storage/images/general/Home slide one casavee interior.jpg',
                'secondary_images' => [
                    'storage/images/general/3d-rendering-loft-luxury-living-room-with-bookshelf_105762-2111.jpg',
                    'storage/images/general/modern-living-room-interior-design_23-2150794649.jpg',
                ],
                'bg' => 'bg-casavee-alabaster',
            ],
            [
                'id' => 'chapter-dining',
                'number' => '05',
                'title' => 'Dining Area',
                'accent' => 'Sculptural Hosting & Spatial Flow',
                'description' => 'Positioned to flow seamlessly from the main living sanctuary, the dining area pairs rich textures, statement chandelier lighting, and refined table styling for intimate gatherings and entertaining.',
                'primary_image' => 'storage/images/general/modern-luxury-authentic-dining-room-interior-design_53876-128708.jpg',
                'secondary_images' => [
                    'storage/images/general/3d-rendering-modern-dining-room-living-room-with-luxury-decor_105762-1934.jpg',
                    'storage/images/general/beautiful-kitchen-interior-design_23-2150976614.jpg',
                ],
                'bg' => 'bg-casavee-ivory',
            ],
            [
                'id' => 'chapter-bedrooms',
                'number' => '06',
                'title' => 'Bedrooms and Walk-In Closet',
                'accent' => 'Personal Sanctuary & Tailored Dressing Spaces',
                'description' => 'Private suites and walk-in dressing spaces conceived for serenity, comfort, and effortless organisation—featuring soft tactile textiles, warm ambient illumination, and custom wardrobe detailing.',
                'primary_image' => 'storage/images/general/neoclassical-style-interior-design-with-decor-furnishings_23-2151199394.jpg',
                'secondary_images' => [
                    'storage/images/general/neoclassical-style-interior-design-with-decor-furnishings_23-2151199402.jpg',
                    'storage/images/general/cozy-lively-home-interior-design_23-2151118945.jpg',
                ],
                'bg' => 'bg-casavee-alabaster',
            ],
            [
                'id' => 'chapter-bathrooms',
                'number' => '07',
                'title' => 'Bathrooms',
                'accent' => 'Spa-Inspired Calm & Refined Finishes',
                'description' => 'Inspired by luxury wellness retreats, the bathrooms integrate serene surfaces, balanced proportion, warm metallic accents, and tranquil lighting for restorative daily rituals.',
                'primary_image' => 'storage/images/general/elegant-rendering-interior-design_23-2151892458.jpg',
                'secondary_images' => [
                    'storage/images/general/elegant-rendering-interior-design_23-2151892469.jpg',
                    'storage/images/general/modern-interior-design-interior_23-2151929523.jpg',
                ],
                'bg' => 'bg-casavee-ivory',
            ],
            [
                'id' => 'chapter-outdoor',
                'number' => '08',
                'title' => 'Rooftop and Outdoor Spaces',
                'accent' => 'Indoor-Outdoor Living & Elevated Entertaining',
                'description' => 'Extending the interior aesthetic outward, the rooftop and outdoor lounge areas are styled for relaxed open-air living, blending architectural greenery with comfortable lounge seating.',
                'primary_image' => 'storage/images/general/contemporary-house-interior-design_23-2151050926.jpg',
                'secondary_images' => [
                    'storage/images/general/cozy-lively-home-interior-design_23-2151119049.jpg',
                    'storage/images/general/interior-living-room-design-scandinavian-style-warm-tone_53876-143148.jpg',
                ],
                'bg' => 'bg-casavee-alabaster',
            ],
            [
                'id' => 'chapter-details',
                'number' => '09',
                'title' => 'Lighting, Furniture and Decorative Details',
                'accent' => 'Curated Artistry & Finishing Touches',
                'description' => 'Every room in Casa Vee is completed through carefully selected furniture, sculptural lighting, custom curtains, framed artwork, and tactile accessories that unify the home as a cohesive work of art.',
                'primary_image' => 'storage/images/general/Home slide two casavee interior.jpg',
                'secondary_images' => [
                    'storage/images/general/interior-design-with-photoframes-couch_23-2149385435.jpg',
                    'storage/images/general/modern-styled-small-entryway_23-2150712931.jpg',
                ],
                'bg' => 'bg-casavee-ivory',
            ],
        ];
    @endphp

    @foreach ($roomChapters as $index => $chapter)
        <section id="{{ $chapter['id'] }}" class="{{ $chapter['bg'] }} text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10">
            <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                    <div class="lg:col-span-5 {{ $index % 2 === 1 ? 'lg:order-2' : '' }}">
                        <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/75">
                            <span>[</span>
                            <span class="text-casavee-gold">{{ $chapter['number'] }}</span>
                            <span>/ Casa Vee Showcase</span>
                            <span>]</span>
                        </span>

                        <h2 class="mt-4 text-3xl sm:text-4xl font-normal leading-[1.16] text-casavee-black">
                            {{ $chapter['title'] }}
                            <span class="block font-serif italic text-casavee-gold text-2xl sm:text-3xl mt-1">
                                {{ $chapter['accent'] }}
                            </span>
                        </h2>

                        <p class="mt-5 text-[15.5px] leading-[1.8] text-casavee-black/80">
                            {{ $chapter['description'] }}
                        </p>

                        <div class="mt-8 grid grid-cols-2 gap-4">
                            @foreach ($chapter['secondary_images'] as $secImg)
                                <div class="overflow-hidden rounded-xs border border-casavee-black/10 bg-white shadow-sm">
                                    <img
                                        src="{{ asset($secImg) }}"
                                        alt="{{ $chapter['title'] }} detail"
                                        class="aspect-[4/3] w-full object-cover transition-transform duration-700 hover:scale-105"
                                    />
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="lg:col-span-7 {{ $index % 2 === 1 ? 'lg:order-1' : '' }}">
                        <div class="overflow-hidden rounded-xs border border-casavee-black/15 bg-casavee-black shadow-lg">
                            <img
                                src="{{ asset($chapter['primary_image']) }}"
                                alt="{{ $chapter['title'] }} — Casa Vee"
                                class="aspect-[16/11] w-full object-cover transition-transform duration-700 hover:scale-105"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    {{-- SECTION 10: FINAL HOME REVEAL & CONSULTATION CTA (PDF PAGE 10 ITEM 10) --}}
    <section id="chapter-reveal" class="bg-casavee-black text-white py-24 sm:py-32">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.16em] uppercase text-casavee-gold">
                    <span>[</span>
                    <span>10 / Final Home Reveal</span>
                    <span>]</span>
                </span>
                <h2 class="mt-4 text-3xl sm:text-5xl font-normal leading-[1.14] text-white">
                    A Home Reimagined from the
                    <span class="font-serif italic text-casavee-gold">Ground Up.</span>
                </h2>
                <p class="mt-5 text-base sm:text-lg leading-relaxed text-white/80">
                    We create timeless, sophisticated interiors that transform houses into homes and spaces into experiences. Having transformed her own spaces from the ground up, Vera founded CasaVee Interiors to extend that same creativity, dedication and eye for detail to clients seeking refined and memorable interiors.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="overflow-hidden rounded-xs border border-white/15">
                    <img
                        src="{{ asset('storage/images/general/3d-rendering-loft-luxury-living-room-with-shelf-near-dining-table_105762-2053.jpg') }}"
                        alt="Casa Vee Final Reveal Living Area"
                        class="aspect-[4/3] w-full object-cover"
                    />
                </div>
                <div class="overflow-hidden rounded-xs border border-white/15">
                    <img
                        src="{{ asset('storage/images/general/3d-rendering-modern-dining-room-living-room-with-luxury-decor_105762-1934.jpg') }}"
                        alt="Casa Vee Final Reveal Dining & Lounge"
                        class="aspect-[4/3] w-full object-cover"
                    />
                </div>
                <div class="overflow-hidden rounded-xs border border-white/15">
                    <img
                        src="{{ asset('storage/images/general/realistic-interior-design-with-furniture_23-2151439745.jpg') }}"
                        alt="Casa Vee Final Reveal Bespoke Styling"
                        class="aspect-[4/3] w-full object-cover"
                    />
                </div>
            </div>

            <div class="mt-16 rounded-xs border border-casavee-gold/35 bg-white/[0.04] p-8 sm:p-12 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                <div class="max-w-2xl">
                    <p class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold">
                        Inspired by the Casa Vee Transformation?
                    </p>
                    <h3 class="mt-2 text-2xl sm:text-3xl font-normal text-white">
                        Let's Create Something Beautiful for Your Space.
                    </h3>
                    <p class="mt-3 text-sm sm:text-base text-white/75">
                        Available for luxury residential design, commercial interiors, and full interior transformations in Kenya and internationally.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-4">
                    <a
                        href="{{ route('contact') }}#enquiry-form"
                        class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-ivory px-7 py-4 text-xs font-medium uppercase tracking-[0.16em] text-casavee-black transition-all hover:bg-casavee-gold hover:text-white"
                    >
                        <span>Start Your Project</span>
                        <span aria-hidden="true">&nearr;</span>
                    </a>
                    <a
                        href="{{ route('projects') }}"
                        class="inline-flex items-center gap-2.5 rounded-xs border border-white/25 px-7 py-4 text-xs font-medium uppercase tracking-[0.16em] text-white transition-all hover:border-casavee-gold hover:text-casavee-gold"
                    >
                        <span>Back to All Projects</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
