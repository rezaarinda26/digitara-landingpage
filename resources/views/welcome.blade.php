<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Digitara delivers enterprise web systems, cloud infrastructure, cybersecurity, AI integration, and digital strategy.">
    <title>Digitara - Professional IT Solutions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        window.tailwind = window.tailwind || {};
        window.tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
                    colors: {
                        brand: {
                            DEFAULT: '#534AB7',
                            light: '#7C73E0',
                            dark: '#3D3594',
                        },
                    },
                    boxShadow: {
                        brand: '0 20px 25px -5px rgb(83 74 183 / 0.2), 0 8px 10px -6px rgb(83 74 183 / 0.2)',
                    },
                },
            },
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        :root {
            --brand: #534AB7;
            --brand-light: #8E86EA;
            --brand-soft: #B9B3FF;
            --brand-dark: #3D3594;
        }
        body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }
        [x-cloak] { display: none !important; }
        .glass { backdrop-filter: blur(12px); background: rgba(255, 255, 255, 0.82); border: 1px solid rgb(226 232 240 / 0.9); }
        .bg-brand { background-color: var(--brand) !important; }
        .bg-brand-light { background-color: var(--brand-light) !important; }
        .bg-brand-dark { background-color: var(--brand-dark) !important; }
        .text-brand { color: var(--brand) !important; }
        .text-brand-light { color: var(--brand-soft) !important; }
        .border-brand { border-color: var(--brand) !important; }
        .shadow-brand { box-shadow: 0 20px 25px -5px rgb(83 74 183 / 0.22), 0 8px 10px -6px rgb(83 74 183 / 0.22); }
        .hover\:bg-brand-dark:hover { background-color: var(--brand-dark) !important; }
        .hover\:text-brand:hover { color: var(--brand) !important; }
        .hover\:border-brand:hover { border-color: var(--brand) !important; }
        .from-brand { --tw-gradient-from: var(--brand) var(--tw-gradient-from-position) !important; --tw-gradient-to: rgb(83 74 183 / 0) var(--tw-gradient-to-position) !important; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important; }
        .to-brand-light { --tw-gradient-to: var(--brand-light) var(--tw-gradient-to-position) !important; }
        .selection\:bg-brand\/20::selection { background-color: rgb(83 74 183 / 0.2) !important; }
        .reveal { opacity: 1; transform: translateY(0); animation: reveal 0.45s ease both; }
        @keyframes reveal { from { transform: translateY(12px); } to { transform: translateY(0); } }
        @keyframes float-y { 50% { transform: translateY(-14px); } }
        @keyframes float-x { 50% { transform: translateX(10px); } }
        .float-y { animation: float-y 4s ease-in-out infinite; }
        .float-x { animation: float-x 5s ease-in-out infinite; }
        .menu-lines,
        .menu-lines::before,
        .menu-lines::after {
            display: block;
            width: 18px;
            height: 2px;
            border-radius: 999px;
            background: #0f172a;
        }
        .menu-lines {
            position: relative;
        }
        .menu-lines::before,
        .menu-lines::after {
            content: "";
            position: absolute;
            left: 0;
        }
        .menu-lines::before { top: -6px; }
        .menu-lines::after { top: 6px; }
    </style>
</head>
<body
    x-data="{ isScrolled: false, menuOpen: false }"
    @scroll.window="isScrolled = window.pageYOffset > 20"
    class="bg-white text-slate-900 overflow-x-hidden selection:bg-brand/20"
>
    <nav
        :class="isScrolled ? 'h-20 glass shadow-sm' : 'h-24 bg-transparent'"
        class="fixed top-0 z-50 w-full transition-all duration-300"
    >
        <div class="mx-auto flex h-full w-full max-w-7xl items-center justify-between px-6">
            <a href="#" class="flex items-center gap-2" aria-label="Digitara home">
                <img src="{{ asset('brand-assets/LOGO.png') }}" alt="" class="h-8 w-8 object-contain">
                <span class="text-xl font-bold uppercase tracking-tight text-brand">Digitara</span>
            </a>

            <div class="hidden items-center gap-8 text-sm font-medium text-slate-500 xl:flex">
                <a href="#services" class="transition-colors hover:text-brand">Solutions</a>
                <a href="#portfolio" class="transition-colors hover:text-brand">Portfolio</a>
                <a href="#about" class="transition-colors hover:text-brand">Company</a>
                <a href="#contact" class="rounded-full bg-brand px-6 py-2.5 font-semibold text-white shadow-brand transition-all hover:bg-brand-dark">
                    Get Started
                </a>
            </div>

            <button
                type="button"
                class="absolute right-6 top-7 flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-900 shadow-sm xl:hidden"
                @click="menuOpen = !menuOpen"
                aria-label="Toggle navigation"
            >
                <span class="menu-lines" aria-hidden="true"></span>
            </button>
        </div>

        <div x-cloak x-show="menuOpen" x-transition class="border-t border-slate-200 bg-white px-6 py-5 shadow-lg xl:hidden">
            <div class="mx-auto flex max-w-7xl flex-col gap-4 text-sm font-semibold text-slate-600">
                <a href="#services" @click="menuOpen = false">Solutions</a>
                <a href="#portfolio" @click="menuOpen = false">Portfolio</a>
                <a href="#about" @click="menuOpen = false">Company</a>
                <a href="#contact" @click="menuOpen = false" class="rounded-lg bg-brand px-4 py-3 text-center text-white">Get Started</a>
            </div>
        </div>
    </nav>

    <main>
        <section class="relative flex min-h-[720px] items-center overflow-hidden bg-slate-50 pb-16 pt-20 lg:min-h-[780px] lg:pt-24">
            <div class="relative z-10 mx-auto grid w-full max-w-7xl items-center gap-12 px-6 lg:grid-cols-5">
                <div class="reveal lg:col-span-3">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-brand/10 bg-white px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-brand shadow-sm">
                        <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-brand"></span>
                        Next-Gen IT Ecosystems
                    </div>
                    <h1 class="mb-8 text-4xl font-extrabold leading-[1.08] tracking-tight text-slate-900 sm:text-6xl lg:text-7xl">
                        Engineering the <br>
                        <span class="text-brand">Digital Future</span>
                    </h1>
                    <p class="mb-10 max-w-md text-lg leading-relaxed text-slate-600">
                        Digitara delivers high-performance custom web systems and cloud infrastructure designed for ambitious enterprise landscapes.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#services" class="group flex items-center gap-2 rounded-xl bg-brand px-8 py-4 font-bold text-white shadow-brand transition-all hover:bg-brand-dark">
                            Explore Solutions
                            <i data-lucide="arrow-right" class="h-5 w-5 transition-transform group-hover:translate-x-1"></i>
                        </a>
                        <a href="#portfolio" class="rounded-xl border border-slate-200 bg-white px-8 py-4 font-bold text-slate-800 transition-all hover:border-brand hover:text-brand">
                            View Case Studies
                        </a>
                    </div>
                </div>

                <div class="reveal relative flex h-[380px] items-center justify-center overflow-hidden sm:h-[440px] lg:h-[500px] lg:overflow-visible lg:col-span-2" style="animation-delay: 120ms">
                    <div class="relative h-72 w-72 sm:h-80 sm:w-80">
                        <div class="absolute inset-0 rotate-12 scale-110 rounded-3xl bg-brand opacity-10 shadow-2xl"></div>
                        <div class="absolute inset-0 rotate-6 scale-105 rounded-3xl bg-brand opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center overflow-hidden rounded-3xl bg-gradient-to-br from-brand to-brand-light p-8 shadow-2xl">
                            <div class="grid grid-cols-3 gap-3">
                                @for ($i = 0; $i < 9; $i++)
                                    <div class="h-12 w-12 rounded-lg border border-white/30 {{ $i % 2 === 0 ? 'bg-white/20' : 'bg-white/10 shadow-inner' }}"></div>
                                @endfor
                            </div>
                        </div>

                        <div class="glass float-y absolute -right-4 -top-8 w-36 rounded-2xl p-5 shadow-xl sm:-right-8 sm:-top-12 sm:w-40 sm:p-6">
                            <div class="mb-2 h-1.5 w-10 rounded bg-slate-300"></div>
                            <div class="mb-4 h-1.5 w-14 rounded bg-brand"></div>
                            <div class="flex h-10 items-end justify-between">
                                <div class="h-[60%] w-2 rounded-t bg-brand"></div>
                                <div class="h-[40%] w-2 rounded-t bg-brand/60"></div>
                                <div class="h-[90%] w-2 rounded-t bg-brand"></div>
                                <div class="h-[50%] w-2 rounded-t bg-brand/40"></div>
                            </div>
                        </div>

                        <div class="glass float-x absolute -bottom-6 left-4 rounded-xl border border-slate-100 p-4 shadow-2xl sm:-bottom-10 sm:-left-12">
                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand/5 text-brand">
                                    <i data-lucide="database" class="h-5 w-5"></i>
                                </div>
                                <div>
                                    <div class="text-[10px] font-bold uppercase text-slate-500">Node Sync</div>
                                    <div class="text-xs font-bold text-slate-900">Active clusters: 14</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="relative overflow-hidden bg-slate-900 py-24">
            <div class="absolute inset-x-0 top-0 h-1 bg-brand"></div>
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-20 grid items-end gap-8 lg:grid-cols-2">
                    <div>
                        <div class="mb-4 text-sm font-bold uppercase tracking-widest text-brand-light">Core Competencies</div>
                        <h2 class="text-4xl font-bold leading-tight text-white md:text-5xl">
                            Engineering Custom <br>
                            Business Ecosystems.
                        </h2>
                    </div>
                    <p class="max-w-md pb-2 text-lg leading-relaxed text-slate-300">
                        The Geometric series of our architecture ensures scalability, security, and extreme performance.
                    </p>
                </div>

                <div class="grid overflow-hidden rounded-[32px] border border-white/10 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($services as $service)
                        <article class="group border-b border-r border-white/10 p-10 transition-colors hover:bg-white/[0.04]">
                            <div class="mb-8 flex h-12 w-12 items-center justify-center rounded-xl bg-white/10 text-brand-light transition-transform duration-500 group-hover:scale-110 group-hover:bg-brand">
                                <i data-lucide="{{ $service['icon'] }}" class="h-8 w-8"></i>
                            </div>
                            <h3 class="mb-4 text-xl font-bold text-white">{{ $service['title'] }}</h3>
                            <p class="mb-8 text-sm leading-relaxed text-slate-300">{{ $service['description'] }}</p>
                            <div class="mb-8 flex flex-wrap gap-2">
                                @foreach ($service['tags'] as $tag)
                                    <span class="rounded-full border border-white/10 bg-white/[0.03] px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-slate-300">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <a href="#contact" class="group/link flex items-center gap-2 text-sm font-bold text-brand-light">
                                Explore Tech
                                <i data-lucide="chevron-right" class="h-4 w-4 transition-transform group-hover/link:translate-x-1"></i>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="portfolio" class="bg-white py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mx-auto mb-20 max-w-3xl text-center">
                    <div class="mb-4 text-xs font-bold uppercase tracking-widest text-brand">Case Studies</div>
                    <h2 class="mb-6 text-4xl font-bold text-slate-900 md:text-5xl">Proven Architecture</h2>
                    <p class="text-lg leading-relaxed text-slate-600">
                        Proprietary solutions developed for industry leaders with a focus on geometric scalability.
                    </p>
                </div>

                <div class="grid gap-8 lg:grid-cols-3">
                    @foreach ($portfolio as $item)
                        <article class="group relative h-[500px] overflow-hidden rounded-[32px] border border-slate-100 shadow-lg transition-all hover:shadow-2xl">
                            <img
                                src="{{ $item['image'] }}"
                                alt="{{ $item['name'] }}"
                                class="h-full w-full object-cover grayscale transition-all duration-700 group-hover:scale-105 group-hover:grayscale-0"
                                referrerpolicy="no-referrer"
                            >
                            <div class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-slate-900/95 via-slate-900/40 to-transparent p-10">
                                <div class="mb-3 text-[10px] font-bold uppercase tracking-[.2em] text-brand-light">{{ $item['category'] }}</div>
                                <h3 class="mb-6 text-2xl font-bold text-white">{{ $item['name'] }}</h3>
                                <div class="flex translate-y-2 items-center justify-between opacity-0 transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                                    <span class="text-xs font-bold uppercase tracking-wider text-white/60">Explore System</span>
                                    <span class="flex h-12 w-12 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-white backdrop-blur-md">
                                        <i data-lucide="external-link" class="h-5 w-5"></i>
                                    </span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="about" class="relative overflow-hidden bg-slate-50 py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="relative overflow-hidden rounded-[48px] bg-brand p-12 text-center shadow-2xl shadow-brand/30 lg:p-24">
                    <div class="absolute right-0 top-0 h-64 w-64 rounded-bl-[128px] bg-white/5"></div>
                    <div class="absolute bottom-0 left-0 h-48 w-48 rounded-tr-[96px] bg-black/5"></div>

                    <div class="relative z-10">
                        <h2 class="mb-8 text-4xl font-extrabold leading-tight tracking-tight text-white lg:text-6xl">
                            Engineering Your <br>
                            Next Big Step.
                        </h2>
                        <p class="mx-auto mb-12 max-w-2xl text-lg leading-relaxed text-white/90">
                            Connect with our systems architects to build the future of your enterprise infrastructure.
                        </p>
                        <a href="#contact" class="group inline-flex items-center gap-2 rounded-xl bg-white px-10 py-5 text-lg font-bold text-brand shadow-xl transition-all hover:bg-slate-50">
                            Start Consultation
                            <i data-lucide="arrow-right" class="h-5 w-5 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="contact" class="border-t border-slate-200 bg-slate-50 pb-10 pt-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mb-20 grid gap-12 md:grid-cols-2 lg:grid-cols-4">
                <div class="lg:col-span-1">
                    <div class="mb-6 flex items-center gap-2">
                        <img src="{{ asset('brand-assets/LOGO.png') }}" alt="" class="h-8 w-8 object-contain">
                        <span class="text-xl font-bold uppercase tracking-tight text-slate-900">Digitara</span>
                    </div>
                    <p class="mb-8 text-sm leading-relaxed text-slate-600">
                        Leading IT solutions provider specializing in high-end enterprise web systems and secure cloud infrastructure.
                    </p>
                    <div class="flex gap-4">
                        @foreach (['github', 'twitter', 'linkedin'] as $social)
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-400 transition-all hover:border-brand hover:text-brand" aria-label="{{ ucfirst($social) }}">
                                <i data-lucide="{{ $social }}" class="h-5 w-5"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h4 class="mb-6 text-xs font-bold uppercase tracking-widest text-slate-900">Solutions</h4>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li><a href="#services" class="transition-colors hover:text-brand">Custom Web Systems</a></li>
                        <li><a href="#services" class="transition-colors hover:text-brand">Cloud Migration</a></li>
                        <li><a href="#services" class="transition-colors hover:text-brand">Cybersecurity Audit</a></li>
                        <li><a href="#services" class="transition-colors hover:text-brand">AI Consulting</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="mb-6 text-xs font-bold uppercase tracking-widest text-slate-900">Company</h4>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li><a href="#portfolio" class="transition-colors hover:text-brand">Case Studies</a></li>
                        <li><a href="#about" class="transition-colors hover:text-brand">Our Process</a></li>
                        <li><a href="#" class="transition-colors hover:text-brand">Privacy Policy</a></li>
                        <li><a href="#contact" class="transition-colors hover:text-brand">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="mb-6 text-xs font-bold uppercase tracking-widest text-slate-900">Get in Touch</h4>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li class="flex items-start gap-3">
                            <i data-lucide="mail" class="mt-1 h-4 w-4 text-brand"></i>
                            hello@digitara.tech
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="phone" class="mt-1 h-4 w-4 text-brand"></i>
                            +1 (555) 012-3456
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col items-center justify-between gap-6 border-t border-slate-200 pt-10 md:flex-row">
                <p class="text-center text-xs text-slate-500 md:text-left">
                    &copy; {{ date('Y') }} Digitara Global Solutions. All rights reserved.
                    Built with Laravel.
                </p>
                <div class="flex gap-8 text-[10px] font-bold uppercase tracking-widest text-slate-500">
                    <a href="#" class="hover:text-brand">Security Status</a>
                    <a href="#" class="hover:text-brand">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('alpine:init', () => {
            requestAnimationFrame(() => lucide.createIcons());
        });
        window.addEventListener('load', () => lucide.createIcons());
    </script>
</body>
</html>
