@extends('layouts.app')

@section('content')
<!-- Main Content Canvas -->
<main class="flex-grow pt-[120px] pb-section-padding">
<!-- Hero Section -->
<section class="max-w-container-max mx-auto px-margin-desktop mb-16 text-center relative">
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4 relative z-10" data-en="Artisanal Creations" data-id="Kreasi Artisanal">Artisanal Creations</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto relative z-10" data-en="Discover our curated collection of handcrafted pastries and signature cakes, each an edible masterpiece designed to elevate your moments." data-id="Temukan koleksi pastri buatan tangan dan kue khas kami, setiap karya edisi khusus dirancang untuk meningkatkan momen Anda.">Discover our curated collection of handcrafted pastries and signature cakes, each an edible masterpiece designed to elevate your moments.</p>
</section>
<!-- Glassmorphism Filter -->
<div class="max-w-container-max mx-auto px-margin-desktop mb-16 flex justify-center">
<div class="bg-surface/60 backdrop-blur-xl border border-outline-variant/50 rounded-full px-6 py-3 flex space-x-4 shadow-[0_8px_30px_rgb(102,17,35,0.08)] overflow-x-auto whitespace-nowrap scrollbar-hide">
<button class="px-4 py-2 bg-primary text-on-primary rounded-full font-label-caps text-label-caps tracking-wider transition-all" data-en="ALL" data-id="SEMUA">ALL</button>
<button class="px-4 py-2 text-on-surface-variant hover:text-primary rounded-full font-label-caps text-label-caps tracking-wider transition-all" data-en="SIGNATURE CAKES" data-id="KUE KHAS">SIGNATURE CAKES</button>
<button class="px-4 py-2 text-on-surface-variant hover:text-primary rounded-full font-label-caps text-label-caps tracking-wider transition-all" data-en="SEASONAL PASTRIES" data-id="PASTRI MUSIMAN">SEASONAL PASTRIES</button>
</div>
</div>
<!-- Editorial Grid Gallery -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
@foreach($products as $index => $product)
<article class="group relative bg-surface/40 backdrop-blur-md rounded-xl border border-outline-variant/30 overflow-hidden shadow-[0_10px_40px_rgb(102,17,35,0.05)] hover:shadow-[0_15px_50px_rgb(102,17,35,0.1)] transition-all duration-500 flex flex-col {{ $index % 2 == 1 && $index > 0 ? 'lg:translate-y-12' : '' }}">
<a href="{{ route('product.detail', $product->id) }}" class="block">
<div class="h-80 w-full overflow-hidden relative bg-surface-container-low">
<img alt="{{ $product->title_en }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="{{ asset($product->image ?? 'assets/f599ca1e-0a32-4701-971e-5fd30516d1a4.jpg') }}"/>
@if($product->is_bestseller)
<div class="absolute top-4 left-4 bg-surface-container-highest/80 backdrop-blur px-3 py-1 rounded-full font-label-caps text-label-caps text-primary border border-outline-variant/50" data-en="Signature" data-id="Terlaris">Signature</div>
@endif
</div>
</a>
<div class="p-6 flex-grow flex flex-col bg-gradient-to-t from-surface to-surface/50">
<a href="{{ route('product.detail', $product->id) }}">
<h3 class="font-headline-md text-headline-md text-primary mb-2" data-en="{{ $product->title_en }}" data-id="{{ $product->title_id }}">{{ $product->title_en }}</h3>
</a>
<p class="font-body-md text-body-md text-on-surface-variant mb-4 flex-grow line-clamp-2" data-en="{{ $product->description_en }}" data-id="{{ $product->description_id }}">{{ $product->description_en }}</p>
<div class="flex justify-between items-end mt-auto">
<span class="font-headline-sm text-headline-sm text-secondary-container">Rp {{ number_format((float) str_replace(['Rp', '.', ' '], '', $product->price), 0, ',', '.') }}</span>
<button onclick="orderWhatsApp('{{ addslashes($product->title_en) }}')" class="w-10 h-10 rounded-full border border-primary flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined" data-icon="add">add</span>
</button>
</div>
</div>
</article>
@endforeach
</section>
</main>
@endsection
