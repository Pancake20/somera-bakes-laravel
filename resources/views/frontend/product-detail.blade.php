@extends('layouts.app')

@section('content')
<!-- PRODUCT HERO -->
<section class="hero is-medium" style="background-color: var(--cream); margin-top: 5rem; border-bottom: 1px solid var(--cream-dark); position: relative; overflow: hidden;">
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="top: 5%; left: 5%; width: 150px; transform: rotate(-15deg);">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="bottom: -10%; right: 5%; width: 180px; transform: rotate(25deg);">
  
  <div class="hero-body">
    <div class="container animate fade-up">
      <div class="columns is-vcentered">
        <!-- Image Column -->
        <div class="column is-5 is-offset-1 animate scale-in">
          <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(102,17,35,0.1); position: relative;">
            <img src="{{ asset($product->image ?? 'assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg') }}" alt="{{ $product->title_en }}" style="width: 100%; height: auto; display: block;">
            @if($product->is_bestseller)
            <span style="position:absolute; top: 15px; right: 15px; background: var(--rust); color: white; padding: 6px 12px; font-size: 0.75rem; font-weight: bold; letter-spacing: 1px; border-radius: 4px;" data-en="BEST SELLER" data-id="TERLARIS">BEST SELLER</span>
            @endif
          </div>
        </div>
        
        <!-- Text Column -->
        <div class="column is-5 is-offset-1 animate fade-up" style="animation-delay: 0.2s;">
          <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.85rem;" data-en="Signature Collection" data-id="Koleksi Khas">Signature Collection</p>
          <h1 class="title is-1 mb-4" data-en="{{ $product->title_en }}" data-id="{{ $product->title_id }}">{{ $product->title_en }}</h1>
          <p class="subtitle is-5 has-text-grey mb-5" style="line-height: 1.8; font-weight: 300;" data-en="{{ $product->description_en }}" data-id="{{ $product->description_id }}">{{ $product->description_en }}</p>
          <p class="title is-3 mb-6" style="color: var(--rust);">Rp {{ number_format((float) str_replace(['Rp', '.', ' '], '', $product->price), 0, ',', '.') }}</p>
          
          <button class="pill-btn" onclick="orderWhatsApp('{{ addslashes($product->title_en) }}')">
            <span class="btn-arrow">➔</span> <span data-en="Order via WhatsApp" data-id="Pesan via WhatsApp">Order via WhatsApp</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DETAILS & DIETARY -->
<section class="section" style="background-color: var(--white); padding-top:5rem; padding-bottom:6rem; position: relative;">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="bottom: 10%; left: -2%; width: 200px; transform: rotate(-35deg); opacity: 0.4;">
  
  <div class="container">
    <div class="columns">
      <div class="column is-7 animate fade-up">
        <h2 class="title is-3 mb-5" data-en="The Art of the Craft" data-id="Seni Keahlian">The Art of the Craft</h2>
        <div class="content has-text-grey" style="line-height: 1.8; font-weight: 300;">
          <p data-en="Born from a desire to balance intense flavors with bright notes, this creation is our crowning achievement. Each bake takes precise temperature control and an unwavering dedication to detail." data-id="Terlahir dari keinginan untuk menyeimbangkan rasa intens dengan nada cerah, kreasi ini adalah pencapaian puncak kami.">Born from a desire to balance intense flavors with bright notes, this creation is our crowning achievement. Each bake takes precise temperature control and an unwavering dedication to detail.</p>
          <p data-en="The foundation is crafted with a flourless sponge, dense yet yielding, offering a deep, roasted profile. Above it rests a vibrant layer crafted from ingredients hand-foraged in the early morning to capture their peak freshness." data-id="Pondasinya dibuat dengan spons tanpa tepung, padat namun lembut. Di atasnya terdapat lapisan cerah yang dibuat dari bahan-bahan yang diambil langsung di pagi hari.">The foundation is crafted with a flourless sponge, dense yet yielding, offering a deep, roasted profile. Above it rests a vibrant layer crafted from ingredients hand-foraged in the early morning to capture their peak freshness.</p>
        </div>
      </div>
      
      <div class="column is-4 is-offset-1 animate fade-up" style="animation-delay: 0.2s;">
        <div style="background: var(--cream); border-radius: 12px; padding: 2rem; border: 1px solid var(--cream-dark);">
          <h3 class="title is-4 mb-4" style="border-bottom: 1px solid var(--cream-dark); padding-bottom: 10px;" data-en="Details" data-id="Detail">Details</h3>
          
          <div class="is-flex is-justify-content-space-between mb-3" style="border-bottom: 1px dashed #e2dcd2; padding-bottom: 8px;">
            <span class="has-text-weight-bold is-uppercase" style="font-size: 0.8rem; letter-spacing: 1px; color: var(--charcoal);" data-en="Serves" data-id="Porsi">Serves</span>
            <span class="has-text-grey" data-en="6 - 8 Portions" data-id="6 - 8 Porsi">6 - 8 Portions</span>
          </div>
          <div class="is-flex is-justify-content-space-between mb-3" style="border-bottom: 1px dashed #e2dcd2; padding-bottom: 8px;">
            <span class="has-text-weight-bold is-uppercase" style="font-size: 0.8rem; letter-spacing: 1px; color: var(--charcoal);" data-en="Storage" data-id="Penyimpanan">Storage</span>
            <span class="has-text-grey" data-en="Keep refrigerated" data-id="Simpan di kulkas">Keep refrigerated</span>
          </div>
          <div class="is-flex is-justify-content-space-between mb-5">
            <span class="has-text-weight-bold is-uppercase" style="font-size: 0.8rem; letter-spacing: 1px; color: var(--charcoal);" data-en="Shelf Life" data-id="Masa Simpan">Shelf Life</span>
            <span class="has-text-grey" data-en="3 days" data-id="3 hari">3 days</span>
          </div>
          
          <h4 class="title is-6 mb-3 is-uppercase" style="letter-spacing: 1px;" data-en="Dietary Notes" data-id="Catatan Diet">Dietary Notes</h4>
          <div class="tags">
            <span class="tag is-rounded" style="background: var(--white); border: 1px solid var(--cream-dark); color: var(--charcoal);" data-en="Gluten-Free" data-id="Bebas Gluten">Gluten-Free</span>
            <span class="tag is-rounded" style="background: var(--white); border: 1px solid var(--cream-dark); color: var(--charcoal);" data-en="Contains Dairy" data-id="Mengandung Susu">Contains Dairy</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
