@php
    $navLinks = [
        ['name' => 'Home', 'route' => 'home'],
        ['name' => 'About Us', 'route' => 'about'],
        ['name' => 'Services', 'route' => 'services'],
        ['name' => 'Our Projects', 'route' => 'projects'],
        ['name' => 'Casa Vee', 'route' => 'casa-vee'],
        ['name' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header class="relative z-20 w-full border-b border-white/15">
    <div class="mx-auto flex max-w-[1440px] items-center justify-between px-6 py-4 sm:px-10 lg:px-16">
        {{-- Left: Official Transparent Brand Logo --}}
        <a
            href="{{ route('home') }}"
            class="group flex items-center gap-3.5 focus:outline-none"
            aria-label="CasaVee Interiors Home"
        >
            <div class="relative h-12 w-28 sm:h-14 sm:w-36 overflow-hidden flex items-center">
                <img
                    src="{{ asset('storage/images/logo/IMG_7737.PNG') }}"
                    alt="CasaVee Interiors Logo"
                    class="h-24 sm:h-28 w-auto max-w-none object-contain object-center transition-transform duration-300 group-hover:scale-105"
                />
            </div>
        </a>

        {{-- Center: Six Principal Navigation Links with Slash Separators & Active Diamond Indicator --}}
        <nav aria-label="Main Navigation" class="hidden lg:flex items-center gap-4 xl:gap-6 text-[14px] font-normal tracking-wide text-white/90">
            @foreach ($navLinks as $index => $link)
                @php
                    $isActive = request()->routeIs($link['route']);
                @endphp

                @if ($index > 0)
                    <span class="text-white/35 select-none" aria-hidden="true">/</span>
                @endif

                <a
                    href="{{ route($link['route']) }}"
                    @if ($isActive) aria-current="page" @endif
                    class="{{ $isActive ? 'inline-flex items-center gap-2 font-medium text-white transition-colors hover:text-casavee-gold' : 'text-white/80 transition-colors hover:text-white' }}"
                >
                    @if ($isActive)
                        <svg class="h-2.5 w-2.5 text-casavee-gold fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                    @endif
                    <span>{{ $link['name'] }}</span>
                </a>
            @endforeach
        </nav>

        {{-- Right: Warm Ivory Pill CTA Button & Mobile Menu Toggle --}}
        <div class="flex items-center gap-3">
            <a
                href="{{ route('contact') }}"
                class="inline-flex items-center gap-2.5 rounded-lg bg-casavee-ivory px-5 py-2.5 text-[13.5px] font-medium tracking-wide text-casavee-black shadow-sm transition-all duration-300 hover:bg-casavee-gold hover:text-white"
            >
                <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                </svg>
                <span>Start Your Project</span>
            </a>

            {{-- Mobile Navigation Toggle Button --}}
            <button
                type="button"
                onclick="document.getElementById('mobile-nav').classList.toggle('hidden')"
                class="inline-flex lg:hidden items-center justify-center rounded-lg border border-white/20 bg-white/10 p-2.5 text-white backdrop-blur-md transition hover:bg-white/20"
                aria-label="Toggle Menu"
            >
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Navigation Drawer --}}
    <div id="mobile-nav" class="hidden lg:hidden border-t border-white/15 bg-casavee-black/95 px-6 py-5 backdrop-blur-xl">
        <nav class="flex flex-col space-y-3.5 text-sm tracking-wide">
            @foreach ($navLinks as $link)
                @php
                    $isActive = request()->routeIs($link['route']);
                @endphp
                <a
                    href="{{ route($link['route']) }}"
                    @if ($isActive) aria-current="page" @endif
                    class="{{ $isActive ? 'flex items-center gap-2 font-medium text-casavee-gold' : 'text-white/80 hover:text-white' }}"
                >
                    @if ($isActive)
                        <svg class="h-2.5 w-2.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0 C8.6 4.8 11.2 7.4 16 8 C11.2 8.6 8.6 11.2 8 16 C7.4 11.2 4.8 8.6 0 8 C4.8 7.4 7.4 4.8 8 0 Z" />
                        </svg>
                    @endif
                    <span>{{ $link['name'] }}</span>
                </a>
            @endforeach
        </nav>
    </div>
</header>
