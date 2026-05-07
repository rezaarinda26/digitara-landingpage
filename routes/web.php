<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services = [
        [
            'title' => 'Company Profile & Landing Page',
            'description' => 'Professional websites designed to represent your brand clearly while delivering a seamless and engaging user experience across all devices.',
            'icon' => 'layout',
            'tags' => ['UI/UX', 'Responsive', 'SEO', 'CMS'],
        ],
        [
            'title' => 'Custom Web Applications',
            'description' => 'Custom-built web systems tailored to your business processes, ensuring flexibility, scalability, and efficient operations.',
            'icon' => 'database',
            'tags' => ['System', 'Dashboard', 'Access Control'],
        ],
        [
            'title' => 'API & System Integration',
            'description' => 'Integrate your platform with third-party services to streamline workflows and improve overall system connectivity.',
            'icon' => 'code-2',
            'tags' => ['API', 'Integration', 'Automation'],
        ],
        [
            'title' => 'Performance & Optimization',
            'description' => 'Enhance system speed, stability, and scalability to ensure your digital products perform efficiently under various workloads and conditions.',
            'icon' => 'zap',
            'tags' => ['Performance', 'Optimization', 'Scalability'],
        ],
        [
            'title' => 'Maintenance & Support',
            'description' => 'Ongoing maintenance and technical support to keep your systems secure, up-to-date, and running smoothly without operational disruptions.',
            'icon' => 'shield-check',
            'tags' => ['Support', 'Maintenance', 'Monitoring'],
        ],
        [
            'title' => 'Digital Strategy',
            'description' => 'Strategic planning and consultation to align technology solutions with your business goals and support long-term digital growth.',
            'icon' => 'trending-up',
            'tags' => ['Consulting', 'Strategy', 'Growth'],
        ],
    ];

    $portfolio = [
        [
            'name' => 'Sispentra',
            'category' => 'Accounting System',
            'image' => asset('brand-assets/sispentra.png'),
        ],
        [
            'name' => 'Qlinic',
            'category' => 'Clinic System',
            'image' => asset('brand-assets/qlinic.png'),
        ],
        [
            'name' => 'AKMSystem',
            'category' => 'Enterprise Resource Planning',
            'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=800',
        ],
    ];

    return view('welcome', compact('services', 'portfolio'));
});
