{{-- LUXURY EDITORIAL FOOTER --}}
<footer class="bg-casavee-black text-white border-t border-white/15">
    <div class="mx-auto max-w-[1440px] px-6 py-16 sm:px-10 lg:px-16 lg:py-20">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
            {{-- Brand Column --}}
            <div class="lg:col-span-5 space-y-5">
                <a href="{{ route('home') }}" class="inline-block" aria-label="CasaVee Interiors Home">
                    <div class="h-16 w-40 overflow-hidden flex items-center">
                        <img
                            src="{{ asset('storage/images/logo/IMG_7739.PNG') }}"
                            alt="CasaVee Interiors Logo"
                            class="h-28 w-auto max-w-none object-contain"
                            loading="lazy"
                        />
                    </div>
                </a>
                <p class="font-serif text-2xl italic text-casavee-gold">
                    Spaces that inspire. Living that feels extraordinary.
                </p>
                <p class="max-w-md text-sm leading-relaxed text-white/70">
                    A luxury interior design studio founded by Vera Sidika. We transform spaces into thoughtfully designed environments that reflect individuality, sophistication and elevated living.
                </p>
            </div>

            {{-- Navigation Column --}}
            <div class="lg:col-span-3 space-y-4">
                <span class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold">
                    Navigation
                </span>
                <ul class="space-y-2.5 text-sm text-white/80">
                    <li><a href="{{ route('home') }}" class="hover:text-casavee-gold transition-colors">01. Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-casavee-gold transition-colors">02. About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-casavee-gold transition-colors">03. Services</a></li>
                    <li><a href="{{ route('projects') }}" class="hover:text-casavee-gold transition-colors">04. Our Projects</a></li>
                    <li><a href="{{ route('casa-vee') }}" class="hover:text-casavee-gold transition-colors">05. Casa Vee</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-casavee-gold transition-colors">06. Contact</a></li>
                </ul>
            </div>

            {{-- Services & Contact Column --}}
            <div class="lg:col-span-4 space-y-4">
                <span class="text-xs font-medium uppercase tracking-[0.2em] text-casavee-gold">
                    Contact &amp; Enquiries
                </span>
                <p class="text-sm text-white/80">
                    Kenya &amp; International Residential and Commercial Interior Design
                </p>
                <div class="space-y-1.5 text-sm">
                    <p>
                        <a href="mailto:hello@casaveeinteriors.com" class="text-white hover:text-casavee-gold transition-colors">
                            hello@casaveeinteriors.com
                        </a>
                    </p>
                    <p>
                        <a href="mailto:projects@casaveeinteriors.com" class="text-white/75 hover:text-casavee-gold transition-colors">
                            projects@casaveeinteriors.com
                        </a>
                    </p>
                    <p>
                        <a href="mailto:info@casaveeinteriors.com" class="text-white/75 hover:text-casavee-gold transition-colors">
                            info@casaveeinteriors.com
                        </a>
                    </p>
                </div>
                <div class="pt-2">
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-xs border border-casavee-gold/50 px-5 py-2.5 text-xs font-medium uppercase tracking-[0.16em] text-casavee-gold transition-all hover:bg-casavee-gold hover:text-casavee-black"
                    >
                        <span>Start Your Project</span>
                        <span aria-hidden="true">&nearr;</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-14 border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white/50">
            <p>&copy; {{ date('Y') }} CasaVee Interiors. Founded by Vera Sidika. All rights reserved.</p>
            <p class="uppercase tracking-[0.18em]">Luxury Interior Design &amp; Space Transformation</p>
        </div>
    </div>
</footer>

{{-- SITE-WIDE WHATSAPP & CONSULTATION INTEGRATION BUTTON (PDF Pages 12 & 14) --}}
<div class="fixed bottom-6 right-6 z-50">
    <a
        href="{{ route('contact') }}#enquiry-form"
        aria-label="WhatsApp & Consultation Enquiry"
        class="group flex items-center gap-3 rounded-full border border-casavee-gold/40 bg-casavee-black/90 px-5 py-3 text-xs font-medium uppercase tracking-[0.14em] text-white shadow-2xl backdrop-blur-md transition-all duration-300 hover:border-casavee-gold hover:bg-casavee-gold hover:text-casavee-black"
    >
        <span class="flex h-2 w-2 rounded-full bg-casavee-gold group-hover:bg-casavee-black"></span>
        <span>WhatsApp &amp; Consultation</span>
    </a>
</div>
