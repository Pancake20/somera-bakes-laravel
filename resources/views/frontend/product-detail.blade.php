@extends('layouts.app')

@section('content')
<!-- Main Content Canvas -->
<main class="pt-20 pb-section-padding">
<!-- Hero Section -->
<section class="relative w-full h-[819px] min-h-[600px] flex items-center justify-center overflow-hidden bg-surface-container">
<!-- Immersive Background Image -->
<div class="absolute inset-0 w-full h-full">
<img alt="{{ $product->title_en }}" class="w-full h-full object-cover object-center" src="{{ asset($product->image ?? 'assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg') }}"/>
<!-- Tonal Scrim -->
<div class="absolute inset-0 bg-surface/30 backdrop-blur-[2px]"></div>
</div>
<!-- Content overlay -->
<div class="relative z-10 glass-panel max-w-3xl mx-auto p-12 md:p-16 text-center rounded-xl mx-4 shadow-[0_30px_50px_-12px_rgba(102,17,35,0.1)]">
<div class="inline-block px-4 py-1 rounded-full bg-surface-variant text-on-surface-variant font-label-caps uppercase mb-6 tracking-widest">
    @if($product->is_bestseller) Signature Collection @else Artisanal Bakery @endif
</div>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4">
    {{ $product->title_en }}
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mx-auto mb-8">
    {{ $product->description_en }}
</p>
<div class="font-display-lg text-headline-md text-primary mb-8">
    Rp {{ number_format((float) str_replace(['Rp', '.', ' '], '', $product->price), 0, ',', '.') }}
</div>
<button onclick="orderWhatsApp('{{ addslashes($product->title_en) }}')" class="inline-flex items-center gap-2 bg-primary text-on-primary px-8 py-4 rounded-full font-label-caps uppercase tracking-widest hover:bg-primary-container transition-colors duration-300">
<span class="material-symbols-outlined text-[20px]">chat</span>
    Order via WhatsApp
</button>
</div>
</section>

<!-- Description & Details (Bento Grid) -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-padding">
<div class="botanical-divider mb-16"></div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Main Narrative -->
<div class="md:col-span-7 space-y-8 pr-0 md:pr-12">
<h2 class="font-headline-md text-headline-md text-primary">The Art of the Craft</h2>
<div class="font-body-lg text-body-lg text-on-surface-variant space-y-6">
<p>
    Born from a desire to balance intense flavors with bright notes, this creation is our crowning achievement. Each bake takes precise temperature control and an unwavering dedication to detail.
</p>
<p>
    The foundation is crafted with a flourless sponge, dense yet yielding, offering a deep, roasted profile. Above it rests a vibrant layer crafted from ingredients hand-foraged in the early morning to capture their peak freshness.
</p>
</div>
</div>
<!-- Attributes & Specs -->
<div class="md:col-span-5 space-y-6 mt-12 md:mt-0">
<div class="glass-panel p-8 rounded-xl shadow-[0_20px_40px_-15px_rgba(102,17,35,0.08)]">
<h3 class="font-headline-sm text-headline-sm text-primary mb-6 border-b border-outline-variant/30 pb-4">Details</h3>
<dl class="space-y-4">
<div class="flex justify-between items-center py-2 border-b border-outline-variant/10">
<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase">Serves</dt>
<dd class="font-body-md text-body-md text-on-background">6 - 8 Portions</dd>
</div>
<div class="flex justify-between items-center py-2 border-b border-outline-variant/10">
<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase">Storage</dt>
<dd class="font-body-md text-body-md text-on-background">Keep refrigerated</dd>
</div>
<div class="flex justify-between items-center py-2 border-b border-outline-variant/10">
<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase">Shelf Life</dt>
<dd class="font-body-md text-body-md text-on-background">3 days</dd>
</div>
</dl>
<div class="mt-8">
<h4 class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-3">Dietary Notes</h4>
<div class="flex flex-wrap gap-2">
<span class="px-4 py-1.5 rounded-full bg-surface-variant text-on-surface-variant font-label-caps text-[10px] uppercase">Gluten-Free</span>
<span class="px-4 py-1.5 rounded-full bg-surface-variant text-on-surface-variant font-label-caps text-[10px] uppercase">Contains Dairy</span>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
@endsection
