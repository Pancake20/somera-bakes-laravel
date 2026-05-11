@extends('layouts.app')

@section('content')
<!-- PAGE HEADER -->
<section class="hero is-small" style="background-color: var(--cream); margin-top: 5rem; border-bottom: 1px solid var(--cream-dark);">
  <!-- Elegant Sparse Vintage Botanicals -->
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="top: 10%; left: 8%; width: 140px; transform: rotate(-25deg);">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="bottom: -15%; right: 8%; width: 150px; transform: rotate(15deg);">
  <div class="hero-body has-text-centered py-6">
    <div class="container animate fade-up">
      <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.85rem;" data-en="Discover our creations" data-id="Temukan kreasi kami">Discover our creations</p>
      <h1 class="title is-1" data-en="The Full Menu" data-id="Menu Lengkap">The Full Menu</h1>
    </div>
  </div>
</section>

<!-- FULL MENU -->
<section class="section" style="background-color: var(--white); padding-top:4rem; padding-bottom:6rem;">
  <!-- Elegant Sparse Vintage Botanicals -->
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="bottom: 5%; left: 3%; width: 220px; transform: rotate(10deg);">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="top: 8%; right: -2%; width: 210px; transform: rotate(-45deg);">
  <div class="container">
    <div class="columns is-mobile is-multiline">
      @foreach($products as $index => $product)
      <div class="column is-12-mobile is-6-tablet is-4-desktop animate fade-up" style="animation-delay:{{ ($index % 3) * 0.1 }}s">
        <div class="elegant-card">
          <div class="card-image is-flex is-align-items-center is-justify-content-center"
            style="height:320px; overflow: hidden; position: relative;">
            <img src="{{ asset($product->image ?? 'assets/f599ca1e-0a32-4701-971e-5fd30516d1a4.jpg') }}" alt="{{ $product->title_en }}"
              style="object-fit: cover; width: 100%; height: 100%; transition: transform 0.5s ease;"
              onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            
            @if($product->is_bestseller)
            <span style="position:absolute; top: 10px; right: 10px; background: var(--rust); color: white; padding: 4px 8px; font-size: 0.7rem; font-weight: bold; letter-spacing: 1px; border-radius: 4px;" data-en="BEST SELLER" data-id="TERLARIS">BEST SELLER</span>
            @endif
          </div>
          <div class="card-content">
            <p class="title is-5 mb-2" data-en="{{ $product->title_en }}" data-id="{{ $product->title_id }}">{{ $product->title_en }}</p>
            <p class="has-text-grey is-size-6 mb-3" data-en="{{ $product->description_en }}" data-id="{{ $product->description_id }}">{{ $product->description_en }}</p>
            <p class="price mt-2" style="font-weight: 600; font-size: 1.1rem;">{{ $product->price }}</p>
            
            <button class="pill-btn-outline mt-4" style="width: 100%; justify-content: center; font-size: 0.85rem;" onclick="orderWhatsApp('{{ $product->title_en }}')">
              <span data-en="Order via WhatsApp" data-id="Pesan via WhatsApp">Order via WhatsApp</span>
            </button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
