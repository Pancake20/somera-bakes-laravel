@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<header class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
<!-- Background Image -->
<div class="absolute inset-0 z-0">
<img alt="Luxury tiered cake" class="w-full h-full object-cover object-center opacity-90" src="{{ asset('assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg') }}"/>
<div class="absolute inset-0 bg-gradient-to-b from-surface/40 via-transparent to-surface"></div>
</div>
<!-- Content -->
<div class="relative z-10 text-center max-w-4xl px-margin-mobile md:px-margin-desktop mt-12">
<span class="block font-label-caps text-label-caps text-primary tracking-[0.2em] uppercase mb-6 drop-shadow-sm" data-en="Artisanal Craftsmanship" data-id="Keahlian Artisanal">Artisanal Craftsmanship</span>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-8 drop-shadow-sm" data-en="{{ $settings['hero_title_en'] ?? 'The Art of Soft Luxury Baking.' }}" data-id="{{ $settings['hero_title_id'] ?? 'Seni Panggangan Mewah nan Lembut.' }}">{{ $settings['hero_title_en'] ?? 'The Art of Soft Luxury Baking.' }}</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-10 bg-surface/60 backdrop-blur-sm p-4 rounded-xl" data-en="{{ $settings['hero_desc_en'] ?? 'Elevating moments with handcrafted confections. We blend classic techniques with modern botanical elegance to create unforgettable sensory experiences.' }}" data-id="{{ $settings['hero_desc_id'] ?? 'Meningkatkan momen dengan kreasi buatan tangan. Kami memadukan teknik klasik dengan keanggunan botani modern.' }}">
    {{ $settings['hero_desc_en'] ?? 'Elevating moments with handcrafted confections. We blend classic techniques with modern botanical elegance to create unforgettable sensory experiences.' }}
</p>
<div class="flex flex-col sm:flex-row items-center justify-center gap-6">
<a class="px-8 py-4 bg-primary text-on-primary rounded-full font-label-caps text-label-caps uppercase tracking-widest hover:bg-primary-container transition-all duration-300 shadow-lg shadow-primary/20 w-full sm:w-auto text-center" href="{{ route('menu') }}" data-en="Explore Our Menu" data-id="Jelajahi Menu Kami">
    Explore Our Menu
</a>
<a class="px-8 py-4 border border-primary text-primary rounded-full font-label-caps text-label-caps uppercase tracking-widest hover:bg-surface-variant transition-all duration-300 glass-panel w-full sm:w-auto text-center" href="{{ route('our-story') }}" data-en="Our Story" data-id="Kisah Kami">
    Our Story
</a>
</div>
</div>
</header>

<!-- SECTION 2: THE CRAFT & HIGH-END OVERLAY CARDS -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-padding relative" id="crafts">
<div class="text-center mb-16 animate-fade-in-up">
<p class="font-label-caps text-label-caps text-primary tracking-widest uppercase mb-4" data-en="Tailored Bakes" data-id="Kreasi Pilihan">Tailored Bakes</p>
<h2 class="font-headline-md text-headline-md text-primary mb-6" data-en="Soméra crafts bakes that fit you perfectly" data-id="Soméra menciptakan panggangan yang sangat cocok untuk Anda">Soméra crafts bakes that fit you perfectly</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto" data-en="Delicate layers, golden crusts, and sweet melt-in-your-mouth magic shaped by traditional heritage." data-id="Lapisan halus, kulit keemasan, dan keajaiban manis yang meleleh di mulut, dibentuk oleh warisan tradisional.">Delicate layers, golden crusts, and sweet melt-in-your-mouth magic shaped by traditional heritage.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter items-center">
@if(isset($products[0]))
<div class="relative h-[400px] rounded-xl overflow-hidden shadow-[0_20px_50px_rgba(102,17,35,0.08)] group cursor-pointer" onclick="window.location.href='{{ route('product.detail', $products[0]->id) }}'">
    <img src="{{ asset($products[0]->image ?? 'assets/f599ca1e-0a32-4701-971e-5fd30516d1a4.jpg') }}" alt="{{ $products[0]->title_en }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
    <div class="absolute inset-0 bg-gradient-to-t from-surface/90 to-transparent flex flex-col justify-end p-6">
        <h4 class="font-headline-sm text-headline-sm text-primary mb-2" data-en="{{ $products[0]->title_en }}" data-id="{{ $products[0]->title_id }}">{{ $products[0]->title_en }}</h4>
        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2" data-en="{{ $products[0]->description_en }}" data-id="{{ $products[0]->description_id }}">{{ $products[0]->description_en }}</p>
    </div>
</div>
@endif

<div class="glass-panel p-8 rounded-xl text-center shadow-[0_20px_50px_rgba(102,17,35,0.05)] border border-outline-variant/30 relative z-10 transform md:scale-110">
    <h3 class="font-headline-sm text-headline-sm text-primary mb-4" data-en="Artisanal Philosophy" data-id="Filosofi Artisanal">Artisanal Philosophy</h3>
    <p class="font-body-md text-body-md text-on-surface-variant mb-6" data-en="We believe baking is an exquisite art form. Every sourdough starter is wild-fermented, every single pastry is slowly rolled by hand." data-id="Kami percaya bahwa memanggang adalah bentuk seni yang indah. Setiap ragi sourdough difermentasi secara alami, setiap pastri digulung perlahan dengan tangan.">We believe baking is an exquisite art form. Every sourdough starter is wild-fermented, every single pastry is slowly rolled by hand.</p>
    <div class="flex items-center justify-center gap-2">
        <span class="material-symbols-outlined text-primary">eco</span>
        <span class="font-label-caps text-label-caps text-primary tracking-widest uppercase" data-en="100% Traditional" data-id="100% Tradisional">100% Traditional</span>
    </div>
</div>

@if(isset($products[1]))
<div class="relative h-[400px] rounded-xl overflow-hidden shadow-[0_20px_50px_rgba(102,17,35,0.08)] group cursor-pointer" onclick="window.location.href='{{ route('product.detail', $products[1]->id) }}'">
    <img src="{{ asset($products[1]->image ?? 'assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg') }}" alt="{{ $products[1]->title_en }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
    <div class="absolute inset-0 bg-gradient-to-t from-surface/90 to-transparent flex flex-col justify-end p-6">
        <h4 class="font-headline-sm text-headline-sm text-primary mb-2" data-en="{{ $products[1]->title_en }}" data-id="{{ $products[1]->title_id }}">{{ $products[1]->title_en }}</h4>
        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2" data-en="{{ $products[1]->description_en }}" data-id="{{ $products[1]->description_id }}">{{ $products[1]->description_en }}</p>
    </div>
</div>
@endif
</div>
</section>

<!-- SECTION 3: ARTISANAL AUTOPILOT -->
<section class="bg-surface-container py-section-padding">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
    <div class="order-2 md:order-1 relative h-[600px] rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(102,17,35,0.1)]">
        <img src="{{ asset('assets/efd0b102-80cd-40d2-b042-089777059904.jpg') }}" alt="Fresh baking" class="w-full h-full object-cover">
    </div>
    <div class="order-1 md:order-2 pl-0 md:pl-12">
        <p class="font-label-caps text-label-caps text-primary tracking-widest uppercase mb-4" data-en="The Baking Process" data-id="Proses Pemanggangan">The Baking Process</p>
        <h3 class="font-headline-md text-headline-md text-primary mb-6" data-en="Our bakes are on auto-pilot to absolute perfection." data-id="Panggangan kami diproses otomatis menuju kesempurnaan mutlak.">Our bakes are on auto-pilot to absolute perfection.</h3>
        
        <div class="space-y-8 mt-8">
            <div class="flex gap-6">
                <div class="flex-shrink-0 w-12 h-12 rounded-full border border-primary flex items-center justify-center font-display-lg text-primary text-xl">1</div>
                <div>
                    <h4 class="font-headline-sm text-headline-sm text-primary mb-2" data-en="Crafted at Sunrise" data-id="Dibuat saat Matahari Terbit">Crafted at Sunrise</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant" data-en="Our expert bakers begin kneading and scaling before dawn." data-id="Tukang roti ahli kami mulai menguleni dan menakar sebelum fajar.">Our expert bakers begin kneading and scaling before dawn.</p>
                </div>
            </div>
            <div class="flex gap-6">
                <div class="flex-shrink-0 w-12 h-12 rounded-full border border-primary flex items-center justify-center font-display-lg text-primary text-xl">2</div>
                <div>
                    <h4 class="font-headline-sm text-headline-sm text-primary mb-2" data-en="Wild Yeast Fermentation" data-id="Fermentasi Ragi Alami">Wild Yeast Fermentation</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant" data-en="Deep, robust, and complex aroma profiles." data-id="Profil aroma yang mendalam, kuat, dan kompleks.">Deep, robust, and complex aroma profiles.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- SECTION 5: TESTIMONIALS -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-padding text-center" id="testimonials">
<p class="font-label-caps text-label-caps text-primary tracking-widest uppercase mb-4" data-en="The Soméra Society" data-id="Komunitas Soméra">The Soméra Society</p>
<h2 class="font-headline-md text-headline-md text-primary mb-12" data-en="Loved by Gourmet Enthusiasts" data-id="Dicintai oleh Penikmat Kuliner">Loved by Gourmet Enthusiasts</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
@foreach($testimonials as $index => $t)
<div class="glass-panel p-8 rounded-2xl flex flex-col items-center">
    <div class="w-20 h-20 rounded-full overflow-hidden mb-6 shadow-md border-2 border-surface">
        <img class="w-full h-full object-cover" src="{{ asset($t->image ?? 'assets/f599ca1e-0a32-4701-971e-5fd30516d1a4.jpg') }}" alt="{{ $t->name }}">
    </div>
    <h4 class="font-headline-sm text-primary mb-4">{{ $t->name }}</h4>
    <p class="font-body-md text-on-surface-variant italic" data-en="{{ $t->text_en }}" data-id="{{ $t->text_id }}">"{{ $t->text_en }}"</p>
</div>
@endforeach
</div>
</section>
@endsection
