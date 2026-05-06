<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services = [
        [
            'title' => 'Enterprise Web Systems',
            'description' => 'Robust, scalable web applications built with modern architectural patterns for high-performance business workflows.',
            'icon' => 'layout',
            'tags' => ['React', 'Node.js', 'Microservices'],
        ],
        [
            'title' => 'Cloud Infrastructure',
            'description' => 'Cloud-native solutions designed for maximum uptime and seamless scaling on AWS, Azure, and Google Cloud.',
            'icon' => 'database',
            'tags' => ['DevOps', 'Kubernetes', 'Cloud Native'],
        ],
        [
            'title' => 'Cybersecurity Protocol',
            'description' => 'Advanced security integration ensuring your data remains protected under the most stringent international standards.',
            'icon' => 'shield-check',
            'tags' => ['Security Audit', 'Encryption', 'Compliance'],
        ],
        [
            'title' => 'AI Integration',
            'description' => 'Leverage cutting-edge machine learning and predictive analytics to automate complex business processes.',
            'icon' => 'cpu',
            'tags' => ['LLM', 'Data Science', 'Automation'],
        ],
        [
            'title' => 'API Ecosystems',
            'description' => 'Seamlessly connect your legacy software with modern third-party services through powerful, documented APIs.',
            'icon' => 'code-2',
            'tags' => ['REST', 'GraphQL', 'Integration'],
        ],
        [
            'title' => 'Digital Strategy',
            'description' => 'Comprehensive IT consulting specializing in long-term digital growth and technological transformation.',
            'icon' => 'globe',
            'tags' => ['Consulting', 'Legacy Migration', 'UX Strategy'],
        ],
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
        ],
    ];

    return view('welcome', compact('services', 'portfolio'));
});
