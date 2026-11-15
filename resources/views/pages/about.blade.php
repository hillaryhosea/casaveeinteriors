<x-public-layout
    title="About Us — CasaVee Interiors | Vera Sidika, Founder & Creative Director"
    description="Discover the story, design philosophy, and founder profile behind CasaVee Interiors, a luxury interior design studio founded by Vera Sidika."
>
    {{-- PAGE HEADER & NAVIGATION --}}
    <section class="relative bg-casavee-black text-white overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-35">
            <img
                src="{{ asset('storage/images/general/modern-living-room-interior-design_23-2150794649.jpg') }}"
                alt="CasaVee Interiors Studio Philosophy"
                class="h-full w-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/60 to-casavee-black"></div>
        </div>

        <x-public-navbar />

        <div class="relative z-10 mx-auto max-w-[1440px] px-6 pt-16 pb-20 sm:px-10 sm:pt-24 sm:pb-28 lg:px-16">
            <div class="max-w-4xl">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.16em] uppercase text-casavee-gold">
                    <span>[</span>
                    <span>02 / About Us</span>
                    <span>]</span>
                </span>
                <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-normal leading-[1.12] tracking-[-0.015em] text-white">
                    Our Story, Design Philosophy
                    <span class="block font-serif italic font-normal text-casavee-gold mt-1">
                        &amp; Founder Profile.
                    </span>
                </h1>
                <p class="mt-6 max-w-2xl text-base sm:text-lg leading-relaxed text-white/80">
                    We transform spaces into thoughtfully designed environments that reflect individuality, sophistication and elevated living.
                </p>
            </div>
        </div>
    </section>

    {{-- SECTION 1: STUDIO BACKGROUND & OFFICIAL BRAND IDENTITY (PDF Pages 1–2) --}}
    <section class="bg-casavee-ivory text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-12 lg:items-start">
                <div class="lg:col-span-5">
                    <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                        <span>[</span>
                        <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                        <span>About CasaVee Interiors</span>
                        <span>]</span>
                    </span>
                    <h2 class="mt-4 text-3xl sm:text-4xl font-normal leading-[1.18] text-casavee-black">
                        An Independent
                        <span class="font-serif italic text-casavee-gold">Luxury Design House</span>
                    </h2>
                    <p class="mt-4 text-[15.5px] leading-[1.75] text-casavee-black/75">
                        CasaVee Interiors is a luxury interior design studio founded by Vera Sidika, dedicated to bringing beautiful spaces to life for individuals, families and businesses in Kenya and internationally.
                    </p>

                    {{-- Official Brand Identity Direction Card (PDF Page 2) --}}
                    <div class="mt-8 rounded-xs border border-casavee-black/15 bg-casavee-cream p-7 space-y-4">
                        <span class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-taupe block">
                            Official Brand Direction
                        </span>
                        <dl class="divide-y divide-casavee-black/10 text-sm">
                            <div class="py-3 flex justify-between gap-4">
                                <dt class="text-casavee-black/65">Business Name</dt>
                                <dd class="font-medium text-casavee-black text-right">CasaVee Interiors</dd>
                            </div>
                            <div class="py-3 flex justify-between gap-4">
                                <dt class="text-casavee-black/65">Founder</dt>
                                <dd class="font-medium text-casavee-black text-right">Vera Sidika</dd>
                            </div>
                            <div class="py-3 flex justify-between gap-4">
                                <dt class="text-casavee-black/65">Positioning</dt>
                                <dd class="font-medium text-casavee-black text-right">Luxury interior design studio</dd>
                            </div>
                            <div class="py-3 flex justify-between gap-4">
                                <dt class="text-casavee-black/65">Market</dt>
                                <dd class="font-medium text-casavee-black text-right">Kenya and international</dd>
                            </div>
                            <div class="py-3 flex justify-between gap-4">
                                <dt class="text-casavee-black/65">Personality</dt>
                                <dd class="font-medium text-casavee-black text-right">Sophisticated, elegant, creative, confident</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                {{-- Right Column: "Artistry Meets Interior Design" (Verbatim PDF Pages 18–19) --}}
                <div class="lg:col-span-7 lg:pl-10">
                    <div class="overflow-hidden rounded-xs bg-casavee-black/5 mb-10">
                        <div class="aspect-[16/10] w-full overflow-hidden">
                            <img
                                src="{{ asset('storage/images/general/mid-century-interior-design_23-2151902083.jpg') }}"
                                alt="Artistry Meets Interior Design — CasaVee Interiors"
                                class="h-full w-full object-cover object-center"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <span class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold">
                        Brand Philosophy &amp; Design Approach
                    </span>
                    <h3 class="mt-2 text-2xl sm:text-3xl font-normal text-casavee-black">
                        Artistry Meets Interior Design
                    </h3>

                    <div class="mt-6 space-y-5 text-[16px] leading-[1.8] text-casavee-black/80">
                        <p class="text-lg font-normal text-casavee-black">
                            At CasaVee Interiors, creativity is at the heart of everything we do.
                        </p>
                        <p>
                            Our founder's background in Fine Art, natural talent for drawing and painting, and passion for visual expression influence the creative direction of the brand.
                        </p>
                        <p>
                            We appreciate the relationship between art and interiors: the balance of colour, composition, texture, proportion and form.
                        </p>
                        <p>
                            We believe a beautifully designed space is much like a work of art. Every element should contribute to a larger vision, creating an environment that feels harmonious, distinctive and personal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 2: PROMINENT FOUNDER PROFILE — VERA SIDIKA (VERBATIM PDF PAGES 15–18 & 20) --}}
    <section
        id="founder-profile"
        aria-labelledby="founder-heading"
        class="bg-casavee-cream text-casavee-black py-24 sm:py-32 border-b border-casavee-black/10"
    >
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 gap-14 lg:grid-cols-12 lg:items-start">
                {{-- Left Column (5 Cols): Official Credential Card (PDF Page 20) + Founder Space Showcase --}}
                <div class="lg:col-span-5 space-y-8 lg:sticky lg:top-12">
                    <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-black/80">
                        <span>[</span>
                        <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                        <span>Meet The Founder</span>
                        <span>]</span>
                    </span>

                    {{-- Official Black & Champagne Gold Credential Plaque (PDF Page 20) --}}
                    <div class="rounded-xs bg-casavee-black p-8 sm:p-10 text-center text-white shadow-xl border border-casavee-gold/30">
                        <div class="mx-auto mb-6 h-20 w-44 overflow-hidden flex items-center justify-center">
                            <img
                                src="{{ asset('storage/images/logo/IMG_7739.PNG') }}"
                                alt="CasaVee Interiors Champagne Gold Logo"
                                class="h-32 w-auto max-w-none object-contain"
                            />
                        </div>

                        <h2 class="font-serif text-2xl sm:text-3xl tracking-[0.14em] uppercase text-casavee-gold">
                            VERA SIDIKA
                        </h2>
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

                    <div class="overflow-hidden rounded-xs border border-casavee-black/15 bg-casavee-ivory">
                        <div class="aspect-[4/3] w-full overflow-hidden">
                            <img
                                src="{{ asset('storage/images/general/neoclassical-style-interior-design-with-decor-furnishings_23-2151199394.jpg') }}"
                                alt="CasaVee Interiors — Creative Direction by Vera Sidika"
                                class="h-full w-full object-cover object-center"
                                loading="lazy"
                            />
                        </div>
                        <div class="p-5 text-xs leading-relaxed text-casavee-black/75">
                            Studied Fine Art at Kenyatta University in Nairobi, Kenya, bringing artistic expression and personal spatial transformation experience to CasaVee Interiors.
                        </div>
                    </div>
                </div>

                {{-- Right Column (7 Cols): Complete 9-Paragraph Updated Founder Biography (PDF Pages 15–18) --}}
                <div class="lg:col-span-7 lg:pl-8">
                    <span class="text-xs font-medium uppercase tracking-[0.22em] text-casavee-gold">
                        MEET THE FOUNDER
                    </span>
                    <h3
                        id="founder-heading"
                        class="mt-2 text-3xl sm:text-4xl lg:text-[44px] font-normal leading-[1.15] tracking-[-0.015em] text-casavee-black"
                    >
                        Vera Sidika
                    </h3>
                    <p class="mt-1 font-serif text-2xl italic text-casavee-taupe">
                        Founder &amp; Creative Director, CasaVee Interiors
                    </p>

                    <div class="mt-8 space-y-5 text-[16px] leading-[1.8] text-casavee-black/85">
                        <p class="text-lg font-normal text-casavee-black">
                            Behind CasaVee Interiors is Vera Sidika, a creative visionary with a longstanding passion for art, design and the transformation of beautiful spaces.
                        </p>

                        <p>
                            Vera's interest in creativity and design extends beyond aesthetics. She has a natural artistic ability, a creative mind and a deep appreciation for the way colours, textures, forms and carefully considered details can transform an environment.
                        </p>

                        <p>
                            Her creative journey includes studying for a degree programme in Fine Art at Kenyatta University in Nairobi, Kenya. With aspirations of majoring in Interior Design during her third year, Vera intends to return to the university to complete her studies and graduate, further strengthening her academic foundation in the creative arts and design.
                        </p>

                        <p>
                            Naturally gifted in drawing and painting, Vera has always found inspiration in artistic expression. Her ability to visualise, conceptualise and bring creative ideas to life has influenced her approach to interior spaces.
                        </p>

                        <p>
                            Over the years, this passion has found expression in her own residential properties and business spaces, including her homes, salon and spa, and apartment. She has consistently enjoyed envisioning, redesigning and transforming these environments into beautiful spaces that reflect her personal taste and creative vision.
                        </p>

                        <p>
                            Her own home, Casa Vee, represents one of her most significant personal interior transformation projects, where she undertook the complete interior design of the property.
                        </p>

                        <p>
                            What began as a personal passion has now evolved into a business vision.
                        </p>

                        <p>
                            Through CasaVee Interiors, Vera is extending her creativity beyond her own spaces, bringing her artistic perspective, design interests and passion for beautiful living to individuals, families and businesses.
                        </p>

                        <p>
                            As Founder and Creative Director, she leads the creative vision and brand direction of CasaVee Interiors, with a commitment to creating distinctive, sophisticated and thoughtfully designed environments.
                        </p>
                    </div>

                    <blockquote class="mt-10 border-l-2 border-casavee-gold bg-casavee-ivory p-7 sm:p-8">
                        <p class="font-serif text-xl sm:text-2xl italic leading-relaxed text-casavee-black">
                            &ldquo;For Vera, design is more than making a space look beautiful. It is the art of imagining what a space could become, and having the creativity to bring that vision to life.&rdquo;
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3: THREE PERSONAL POSITIONING PILLARS & THE ART OF DESIGN (PDF PAGES 19–20) --}}
    <section class="bg-casavee-black text-white py-24 sm:py-32">
        <div class="mx-auto max-w-[1440px] px-6 sm:px-10 lg:px-16">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-[13px] font-medium tracking-[0.14em] uppercase text-casavee-gold">
                    <span>[</span>
                    <span>The Art of Design — Vera's Creative Perspective</span>
                    <span>]</span>
                </span>
                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-[42px] font-normal leading-[1.18] text-white">
                    Three Pillars of
                    <span class="font-serif italic text-casavee-gold">Creative Positioning</span>
                </h2>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="rounded-xs border border-white/15 bg-white/[0.03] p-8 sm:p-10">
                    <span class="font-serif text-4xl italic text-casavee-gold">01.</span>
                    <h3 class="mt-5 text-2xl font-normal text-white">The Artist</h3>
                    <p class="mt-3 text-[15px] leading-relaxed text-white/75">
                        Drawing, painting, imagination and natural creative ability—bringing an appreciation for colour, composition, texture, proportion and form into every interior.
                    </p>
                </div>

                <div class="rounded-xs border border-casavee-gold/50 bg-white/[0.05] p-8 sm:p-10">
                    <span class="font-serif text-4xl italic text-casavee-gold">02.</span>
                    <h3 class="mt-5 text-2xl font-normal text-white">The Designer</h3>
                    <p class="mt-3 text-[15px] leading-relaxed text-white/75">
                        Passion, design knowledge, personal residential and commercial transformation projects, and an ongoing academic journey in Fine Art at Kenyatta University.
                    </p>
                </div>

                <div class="rounded-xs border border-white/15 bg-white/[0.03] p-8 sm:p-10">
                    <span class="font-serif text-4xl italic text-casavee-gold">03.</span>
                    <h3 class="mt-5 text-2xl font-normal text-white">The Founder</h3>
                    <p class="mt-3 text-[15px] leading-relaxed text-white/75">
                        The vision of building CasaVee Interiors into a premium interior design company serving residential and commercial clients in Kenya and internationally.
                    </p>
                </div>
            </div>

            <div class="mt-16 flex flex-wrap items-center justify-between gap-6 border-t border-white/15 pt-10">
                <p class="font-serif text-2xl italic text-white/90">
                    A personal passion. A creative vision. A brand built around beautiful living.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a
                        href="{{ route('casa-vee') }}"
                        class="inline-flex items-center gap-2.5 rounded-xs border border-casavee-gold px-6 py-3.5 text-xs font-medium uppercase tracking-[0.16em] text-casavee-gold transition-all hover:bg-casavee-gold hover:text-casavee-black"
                    >
                        <span>Explore Casa Vee Flagship Home</span>
                        <span aria-hidden="true">&nearr;</span>
                    </a>
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2.5 rounded-xs bg-casavee-ivory px-6 py-3.5 text-xs font-medium uppercase tracking-[0.16em] text-casavee-black transition-all hover:bg-casavee-gold hover:text-white"
                    >
                        <span>Start Your Project</span>
                        <span aria-hidden="true">&nearr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
