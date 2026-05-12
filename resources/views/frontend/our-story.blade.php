@extends('layouts.app')

@section('content')
<!-- Main Content Canvas -->
<main class="flex-grow pt-[120px] pb-section-padding">
<!-- Hero Section -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-padding text-center relative">
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-6 relative z-10 animate-fade-in-up">The Heritage of Artisanal Luxury</h1>
<div class="botanical-divider"></div>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto relative z-10 mt-6 leading-relaxed">
    Rooted in tradition and elevated by modern technique, our journey began with a simple desire: to create baking experiences that transcend the ordinary. Every ingredient tells a story of quality; every technique is a testament to our dedication.
</p>
</section>

<!-- Our Philosophy -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-padding grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
<div class="order-2 md:order-1 flex flex-col justify-center">
    <span class="font-label-caps text-label-caps text-secondary tracking-widest uppercase mb-4 block">Our Philosophy</span>
    <h2 class="font-headline-md text-headline-md text-primary mb-6">Crafted with Uncompromising Passion</h2>
    <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
        We believe that true luxury lies in the details. From the meticulous sourcing of organic, stone-ground flour to the hours of careful wild yeast fermentation, we refuse to take shortcuts. Our artisanal autopilot is driven by seasoned hands, not heavy machinery.
    </p>
    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
        The result is a symphony of flavor—delicate layers, golden crusts, and sweet melt-in-your-mouth magic that honors the heritage of traditional baking while appealing to a refined, modern palate.
    </p>
</div>
<div class="order-1 md:order-2 relative h-[500px] w-full rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(102,17,35,0.08)]">
    <img alt="Artisanal baker carefully dusting flour over fresh dough" class="w-full h-full object-cover" src="{{ asset('assets/4ae608d6-4c25-4165-96ee-c4c586505d77.jpg') }}"/>
    <div class="absolute inset-0 bg-surface/10 mix-blend-overlay"></div>
</div>
</section>

<!-- The Ingredients -->
<section class="w-full bg-surface-container py-section-padding mb-section-padding relative overflow-hidden">
<div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4"></div>
<div class="absolute bottom-0 left-0 w-80 h-80 bg-secondary/5 rounded-full blur-3xl translate-y-1/3 -translate-x-1/4"></div>
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10 grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
    <div class="relative h-[600px] w-full rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(102,17,35,0.1)]">
        <img alt="Close up of premium ingredients like saffron and berries on a wooden table" class="w-full h-full object-cover" src="{{ asset('assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg') }}"/>
        <div class="absolute inset-0 bg-gradient-to-t from-surface-container/80 to-transparent"></div>
    </div>
    <div class="flex flex-col justify-center bg-surface/60 backdrop-blur-md p-8 md:p-12 rounded-2xl border border-outline-variant/30 -ml-0 md:-ml-16 mt-[-4rem] md:mt-0 relative z-20">
        <span class="font-label-caps text-label-caps text-secondary tracking-widest uppercase mb-4 block">The Essence</span>
        <h2 class="font-headline-md text-headline-md text-primary mb-6">Purity in Every Crumb</h2>
        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
            We source only the finest, 100% natural ingredients. No artificial additives. No preservatives. Just the pure, unadulterated goodness of nature, expertly combined to create taste profiles that linger long after the last bite.
        </p>
        <ul class="space-y-4 font-body-md text-on-surface-variant">
            <li class="flex items-center gap-4"><span class="material-symbols-outlined text-primary">eco</span><span>100% Organic Stone-Ground Flour</span></li>
            <li class="flex items-center gap-4"><span class="material-symbols-outlined text-primary">bakery_dining</span><span>Wild Sourdough Fermentation</span></li>
            <li class="flex items-center gap-4"><span class="material-symbols-outlined text-primary">favorite</span><span>Handcrafted with Zero Heavy Machinery</span></li>
        </ul>
    </div>
</div>
</section>

<!-- Call to Action -->
<section class="max-w-3xl mx-auto px-margin-mobile text-center">
<h3 class="font-headline-sm text-headline-sm text-primary mb-6">Experience the Legacy</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-8">
    We invite you to taste the difference that true artisanal craftsmanship makes. Explore our luxury menu and become part of the Soméra Society.
</p>
<a class="inline-flex px-8 py-4 bg-primary text-on-primary rounded-full font-label-caps text-label-caps tracking-widest hover:bg-primary-container transition-all duration-300 shadow-lg shadow-primary/20 uppercase" href="{{ route('menu') }}">
    Discover Our Menu
</a>
</section>
</main>
@endsection
