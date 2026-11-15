<x-public-layout
    title="Services — CasaVee Interiors | Luxury Residential & Commercial Interior Design"
    description="Explore CasaVee Interiors' six official services: Luxury residential design, Commercial interior design, Full interior transformations, Interior styling, Design consultation, and Space planning."
>
    {{-- PAGE HEADER & NAVIGATION --}}
    <section class="relative bg-casavee-black text-white overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-35">
            <img
                src="{{ asset('storage/images/general/neoclassical-style-interior-design-with-decor-furnishings_23-2151199394.jpg') }}"
                alt="CasaVee Interiors Services"
                class="h-full w-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/60 to-casavee-black"></div>
        </div>

        <x-public-navbar />

        <div class="relative z-10 mx-auto max-w-[1440px] px-6 pt-16 pb-20 sm:px-10 sm:pt-24 sm:pb-28 lg:px-16">
            <div class="max-w-4xl">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.16em] uppercase text-casavee-gold">
                    <span>[</span>
                    <span>03 / Services</span>
                    <span>]</span>
                </span>
                <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-normal leading-[1.12] tracking-[-0.015em] text-white">
                    Residential, Commercial &amp;
                    <span class="block font-serif italic font-normal text-casavee-gold mt-1">
                        Complete Interior Transformations.
                    </span>
                </h1>
                <p class="mt-6 max-w-2xl text-base sm:text-lg leading-relaxed text-white/80">
                    Residential interiors, commercial interiors, complete transformations, styling, décor and consultations.
                </p>
                <div class="mt-8">
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-ivory px-6 py-3.5 text-[13.5px] font-medium tracking-wide text-casavee-black transition-all duration-300 hover:bg-casavee-gold hover:text-white"
                    >
                        <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                        <span>Discuss Your Project</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 1: THE SIX OFFICIAL SERVICES (VERBATIM FROM PDF PAGE 8) --}}
    <section class="bg-casavee-ivory text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="max-w-3xl mb-16">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                    <span>[</span>
                    <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                    </svg>
                    <span>Official Service Offering</span>
                    <span>]</span>
                </span>
                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-[42px] font-normal leading-[1.18] text-casavee-black">
                    What Clients Receive
                    <span class="font-serif italic text-casavee-gold">Across Every Service</span>
                </h2>
            </div>

            @php
                $officialServices = [
                    [
                        'number' => '01',
                        'title' => 'Luxury Residential Design',
                        'receives' => 'Complete home and apartment interiors',
                        'image' => 'storage/images/general/3d-rendering-loft-luxury-living-room-with-bookshelf_105762-2111.jpg',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Commercial Interior Design',
                        'receives' => 'Offices, salons, spas, boutiques and hospitality',
                        'image' => 'storage/images/general/modern-cafe-interior-design_53876-143194.jpg',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Full Interior Transformations',
                        'receives' => 'Concept through agreed project execution',
                        'image' => 'storage/images/general/3d-rendering-modern-dining-room-living-room-with-luxury-decor_105762-1934.jpg',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Interior Styling',
                        'receives' => 'Furniture, lighting, curtains, artwork and accessories',
                        'image' => 'storage/images/general/elegant-rendering-interior-design_23-2151892469.jpg',
                    ],
                    [
                        'number' => '05',
                        'title' => 'Design Consultation',
                        'receives' => 'Professional guidance and design direction',
                        'image' => 'storage/images/general/modern-luxury-authentic-dining-room-interior-design_53876-128708.jpg',
                    ],
                    [
                        'number' => '06',
                        'title' => 'Space Planning',
                        'receives' => 'Layouts, room optimisation and material selection',
                        'image' => 'storage/images/general/3d-rendering-loft-luxury-living-room-with-shelf-near-dining-table_105762-2185.jpg',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($officialServices as $service)
                    <article class="group flex flex-col justify-between rounded-xs border border-casavee-black/12 bg-casavee-alabaster overflow-hidden shadow-xs transition-all duration-300 hover:border-casavee-gold">
                        <div>
                            <div class="aspect-[16/11] w-full overflow-hidden bg-casavee-black/5">
                                <img
                                    src="{{ asset($service['image']) }}"
                                    alt="{{ $service['title'] }} — CasaVee Interiors"
                                    class="h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-[1.03]"
                                    loading="lazy"
                                />
                            </div>
                            <div class="p-7 sm:p-8">
                                <div class="flex items-center justify-between">
                                    <span class="font-serif text-3xl italic text-casavee-gold">{{ $service['number'] }}</span>
                                    <span class="text-[11px] uppercase tracking-[0.18em] text-casavee-taupe">What Clients Receive</span>
                                </div>
                                <h3 class="mt-4 text-2xl font-normal text-casavee-black">
                                    {{ $service['title'] }}
                                </h3>
                                <p class="mt-2.5 text-[15.5px] leading-relaxed text-casavee-black/75">
                                    {{ $service['receives'] }}
                                </p>
                            </div>
                        </div>

                        <div class="border-t border-casavee-black/10 px-7 py-4 sm:px-8 flex items-center justify-between bg-casavee-ivory/60">
                            <a
                                href="{{ route('contact') }}?service={{ urlencode($service['title']) }}#enquiry-form"
                                class="inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.16em] text-casavee-black hover:text-casavee-gold transition-colors"
                            >
                                <span>Discuss Your Project</span>
                                <span aria-hidden="true">&nearr;</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 2: THREE WAYS OF WORKING WITH CLIENTS & PRICING POLICY (PDF PAGES 8–9) --}}
    <section class="bg-casavee-black text-white py-24 sm:py-32">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 gap-14 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-5">
                    <div class="overflow-hidden rounded-xs border border-white/15">
                        <div class="aspect-[4/5] w-full overflow-hidden">
                            <img
                                src="{{ asset('storage/images/general/neoclassical-style-interior-design-with-decor-furnishings_23-2151199402.jpg') }}"
                                alt="CasaVee Interiors Ways of Working"
                                class="h-full w-full object-cover object-center"
                                loading="lazy"
                            />
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 lg:pl-8">
                    <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-white/80">
                        <span>[</span>
                        <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                        <span>Client Engagement Models</span>
                        <span>]</span>
                    </span>

                    <h2 class="mt-4 text-3xl sm:text-4xl lg:text-[42px] font-normal leading-[1.18] text-white">
                        Three Ways of
                        <span class="font-serif italic text-casavee-gold">Working With Clients</span>
                    </h2>

                    <div class="mt-10 space-y-6">
                        <div class="rounded-xs border border-white/20 bg-white/[0.03] p-6 sm:p-8">
                            <span class="font-serif text-2xl italic text-casavee-gold">01.</span>
                            <h3 class="mt-2 text-xl font-normal text-white">Design Consultation</h3>
                            <p class="mt-1.5 text-[15.5px] text-white/80">
                                For clients who need expert direction.
                            </p>
                        </div>

                        <div class="rounded-xs border border-casavee-gold/50 bg-white/[0.05] p-6 sm:p-8">
                            <span class="font-serif text-2xl italic text-casavee-gold">02.</span>
                            <h3 class="mt-2 text-xl font-normal text-white">Design &amp; Styling</h3>
                            <p class="mt-1.5 text-[15.5px] text-white/80">
                                For clients who want a beautifully curated space.
                            </p>
                        </div>

                        <div class="rounded-xs border border-white/20 bg-white/[0.03] p-6 sm:p-8">
                            <span class="font-serif text-2xl italic text-casavee-gold">03.</span>
                            <h3 class="mt-2 text-xl font-normal text-white">Complete Transformation</h3>
                            <p class="mt-1.5 text-[15.5px] text-white/80">
                                For clients who want an end-to-end design project.
                            </p>
                        </div>
                    </div>

                    {{-- Pricing Policy & International Consultations (PDF Pages 8–9 & 12) --}}
                    <div class="mt-10 rounded-xs border border-casavee-gold/30 bg-white/[0.03] p-6 sm:p-8 space-y-3">
                        <span class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold block">
                            Tailored Project Quotations &amp; Consultations
                        </span>
                        <p class="text-sm leading-relaxed text-white/80">
                            Pricing is quoted according to the project's scope, size, location and complexity. For international and local clients, consultations are available both as an <strong class="text-white font-medium">online consultation</strong> and an <strong class="text-white font-medium">in-person consultation</strong>.
                        </p>
                        <div class="pt-3">
                            <a
                                href="{{ route('contact') }}"
                                class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-ivory px-6 py-3.5 text-xs font-medium uppercase tracking-[0.16em] text-casavee-black transition-all hover:bg-casavee-gold hover:text-white"
                            >
                                <span>Discuss Your Project</span>
                                <span aria-hidden="true">&nearr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
