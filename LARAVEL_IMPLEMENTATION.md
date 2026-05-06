# Panduan Implementasi Digitara ke Laravel

Berikut adalah kode yang dibutuhkan untuk memindahkan desain Digitara ke dalam project Laravel Anda.

## 1. Route (`routes/web.php`)

```php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services = [
        [
            'title' => 'Enterprise Web Systems',
            'description' => 'Robust, scalable web applications built with modern architectural patterns for high-performance business workflows.',
            'icon' => 'layout',
            'tags' => ['React', 'Node.js', 'Microservices']
        ],
        [
            'title' => 'Cloud Infrastructure',
            'description' => 'Cloud-native solutions designed for maximum uptime and seamless scaling on AWS, Azure, and Google Cloud.',
            'icon' => 'database',
            'tags' => ['DevOps', 'Kubernetes', 'Cloud Native']
        ],
        [
            'title' => 'Cybersecurity Protocol',
            'description' => 'Advanced security integration ensuring your data remains protected under the most stringent international standards.',
            'icon' => 'shield-check',
            'tags' => ['Security Audit', 'Encryption', 'Compliance']
        ],
        [
            'title' => 'AI Integration',
            'description' => 'Leverage cutting-edge machine learning and predictive analytics to automate complex business processes.',
            'icon' => 'cpu',
            'tags' => ['LLM', 'Data Science', 'Automation']
        ],
        [
            'title' => 'API Ecosystems',
            'description' => 'Seamlessly connect your legacy software with modern third-party services through powerful, documented APIs.',
            'icon' => 'code-2',
            'tags' => ['REST', 'GraphQL', 'Integration']
        ],
        [
            'title' => 'Digital Strategy',
            'description' => 'Comprehensive IT consulting specializing in long-term digital growth and technological transformation.',
            'icon' => 'globe',
            'tags' => ['Consulting', 'Legacy Migration', 'UX Strategy']
        ]
    ];

    $portfolio = [
        [
            'name' => 'Nexus Finance',
            'category' => 'FinTech Platform',
            'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&q=80&w=800',
        ],
        [
            'name' => 'Helix Health',
            'category' => 'Medical CRM',
            'image' => 'https://images.unsplash.com/photo-1576091160550-217359f49f4c?auto=format&fit=crop&q=80&w=800',
        ],
        [
            'name' => 'Vantage Logistics',
            'category' => 'Supply Chain AI',
            'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=800',
        ]
    ];

    return view('welcome', compact('services', 'portfolio'));
});
```

## 2. View Template (`resources/views/welcome.blade.php`)

```html
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitara - Professional IT Solutions</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (V4 via CDN for Demo) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js (Utk Interaktivitas Scroll & Menu) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        :root {
            --color-brand: #534AB7;
        }
        body { font-family: 'Inter', sans-serif; }
        .glass { backdrop-filter: blur(12px); background: rgba(255, 255, 255, 0.8); border: 1px solid rgba(226, 232, 240, 0.8); }
        .bg-brand { background-color: var(--color-brand); }
        .text-brand { color: var(--color-brand); }
        .border-brand { border-color: var(--color-brand); }
    </style>
</head>
<body 
    x-data="{ isScrolled: false }" 
    @scroll.window="isScrolled = (window.pageYOffset > 20)"
    class="bg-slate-50 text-slate-900 overflow-x-hidden"
>

    <!-- Navigation -->
    <nav 
        :class="isScrolled ? 'h-20 shadow-sm glass' : 'h-24 bg-transparent'"
        class="fixed top-0 w-full z-50 transition-all duration-300 px-6 flex items-center"
    >
        <div class="max-w-7xl mx-auto w-full flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-brand rounded-lg flex items-center justify-center">
                    <div class="w-4 h-4 border-2 border-white rotate-45"></div>
                </div>
                <span class="text-xl font-bold tracking-tight text-brand uppercase">Digitara</span>
            </div>
            
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-500">
                <a href="#services" class="hover:text-brand transition-colors">Solutions</a>
                <a href="#portfolio" class="hover:text-brand transition-colors">Portfolio</a>
                <a href="#about" class="hover:text-brand transition-colors">Company</a>
                <button class="px-6 py-2.5 bg-brand text-white rounded-full font-semibold shadow-lg shadow-[#534AB7]/20 hover:bg-[#3D3594] transition-all">
                    Get Started
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 min-h-screen flex items-center overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full grid lg:grid-cols-5 gap-12 items-center">
            <div class="lg:col-span-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/80 border border-slate-200 text-[10px] font-bold uppercase tracking-widest text-[#534AB7] mb-6">
                    <span class="w-1.5 h-1.5 bg-[#534AB7] rounded-full animate-pulse"></span>
                    Next-Gen IT Ecosystems
                </div>
                <h1 class="text-6xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8 tracking-tight">
                    Engineering the <br>
                    <span class="text-[#534AB7]">Digital Future</span>
                </h1>
                <p class="text-slate-500 text-lg leading-relaxed mb-10 max-w-md">
                    Digitara delivers high-performance custom web systems and cloud infrastructure designed for ambitious enterprise landscapes.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button class="px-8 py-4 bg-brand text-white rounded-xl font-bold shadow-xl shadow-[#534AB7]/20 hover:bg-[#3D3594] transition-all flex items-center gap-2">
                        Explore Solutions
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </button>
                    <button class="px-8 py-4 border border-slate-200 bg-white text-slate-700 rounded-xl font-bold hover:bg-slate-50 transition-all">
                        View Case Studies
                    </button>
                </div>
            </div>

            <!-- Geometric Graphic -->
            <div class="lg:col-span-2 relative h-[500px] flex items-center justify-center">
                <div class="relative w-80 h-80">
                    <div class="absolute inset-0 bg-[#534AB7] rounded-3xl opacity-10 rotate-12 scale-110"></div>
                    <div class="absolute inset-0 bg-[#534AB7] rounded-3xl opacity-20 rotate-6 scale-105"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-[#534AB7] to-[#7C73E0] rounded-3xl shadow-2xl flex items-center justify-center p-8">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="w-12 h-12 rounded-lg bg-white/20 backdrop-blur-md border border-white/30"></div>
                            <div class="w-12 h-12 rounded-lg bg-white/10 border border-white/30 shadow-inner"></div>
                            <div class="w-12 h-12 rounded-lg bg-white/20 border border-white/30"></div>
                            <div class="w-12 h-12 rounded-lg bg-white/10 border border-white/30"></div>
                            <div class="w-12 h-12 rounded-lg bg-white/20 border border-white/30"></div>
                            <div class="w-12 h-12 rounded-lg bg-white/10 border border-white/30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="py-24 bg-slate-900 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6 text-center lg:text-left">
            <div class="grid lg:grid-cols-2 gap-8 items-end mb-20">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                        Engineering Custom <br> Business Ecosystems.
                    </h2>
                </div>
                <p class="text-slate-400 text-lg max-w-md pb-2">
                    The Geometric series of our architecture ensures scalability, security, and extreme performance.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-0 border border-white/10 rounded-[32px] overflow-hidden">
                @foreach($services as $service)
                <div class="group p-10 border-white/10 border-r border-b hover:bg-[#534AB7]/10 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-[#534AB7]/10 text-brand flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <i data-lucide="{{ $service['icon'] }}" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">{{ $service['title'] }}</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">
                        {{ $service['description'] }}
                    </p>
                    <a href="#" class="flex items-center gap-2 text-brand font-bold text-sm">
                        Explore Tech
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer & Scripts -->
    <footer class="py-20 bg-slate-50 border-t border-slate-200 text-center">
        <p class="text-slate-400 text-xs">
            &copy; {{ date('Y') }} Digitara Global Solutions. Built with Laravel & Tailwind.
        </p>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
```

## 3. Catatan Penting
- **Tailwind**: Gunakan Laravel Mix atau Vite untuk meng-compile CSS Tailwind di production.
- **Images**: Pastikan URL Unsplash yang digunakan tetap aktif atau ganti dengan asset lokal di folder `public/`.
- **Alpine.js**: Digunakan untuk state management navigasi (menggantikan state React).
