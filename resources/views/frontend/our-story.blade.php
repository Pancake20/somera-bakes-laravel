@extends('layouts.app')

@section('content')
<!-- PAGE HEADER -->
<section class="hero is-small" style="background-color: var(--cream); margin-top: 5rem; border-bottom: 1px solid var(--cream-dark); position: relative; overflow: hidden;">
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="top: 5%; left: 5%; width: 150px; transform: rotate(-15deg);">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="bottom: -10%; right: 5%; width: 180px; transform: rotate(25deg);">
  <div class="hero-body has-text-centered py-6">
    <div class="container animate fade-up">
      <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.85rem;" data-en="The Heritage of Artisanal Luxury" data-id="Warisan Kemewahan Artisanal">The Heritage of Artisanal Luxury</p>
      <h1 class="title is-1" data-en="Our Story" data-id="Kisah Kami">Our Story</h1>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<section class="section" style="background-color: var(--white); padding-top:5rem; padding-bottom:6rem; position: relative;">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="top: 20%; right: -5%; width: 250px; transform: rotate(10deg); opacity: 0.4;">
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="bottom: 10%; left: -2%; width: 200px; transform: rotate(-35deg); opacity: 0.4;">
  
  <div class="container">
    <div class="columns is-vcentered mb-6">
      <div class="column is-6 animate fade-up">
        <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.85rem;" data-en="Our Philosophy" data-id="Filosofi Kami">Our Philosophy</p>
        <h2 class="title is-2 mb-5" data-en="Crafted with Uncompromising Passion" data-id="Dibuat dengan Gairah Tanpa Kompromi">Crafted with Uncompromising Passion</h2>
        <p class="subtitle is-6 has-text-grey mb-5" style="line-height: 1.8; font-weight: 300;" data-en="We believe that true luxury lies in the details. From the meticulous sourcing of organic, stone-ground flour to the hours of careful wild yeast fermentation, we refuse to take shortcuts. Our artisanal autopilot is driven by seasoned hands, not heavy machinery." data-id="Kami percaya bahwa kemewahan sejati terletak pada detail. Mulai dari pemilihan tepung organik yang digiling batu dengan teliti hingga fermentasi ragi liar yang hati-hati selama berjam-jam, kami menolak mengambil jalan pintas.">We believe that true luxury lies in the details. From the meticulous sourcing of organic, stone-ground flour to the hours of careful wild yeast fermentation, we refuse to take shortcuts. Our artisanal autopilot is driven by seasoned hands, not heavy machinery.</p>
        <p class="subtitle is-6 has-text-grey" style="line-height: 1.8; font-weight: 300;" data-en="The result is a symphony of flavor—delicate layers, golden crusts, and sweet melt-in-your-mouth magic that honors the heritage of traditional baking while appealing to a refined, modern palate." data-id="Hasilnya adalah simfoni rasa—lapisan halus, kulit keemasan, dan keajaiban manis yang meleleh di mulut yang menghormati warisan pemanggangan tradisional.">The result is a symphony of flavor—delicate layers, golden crusts, and sweet melt-in-your-mouth magic that honors the heritage of traditional baking while appealing to a refined, modern palate.</p>
      </div>
      <div class="column is-5 is-offset-1 animate scale-in" style="animation-delay: 0.2s;">
        <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(102,17,35,0.1);">
          <img src="{{ asset('assets/4ae608d6-4c25-4165-96ee-c4c586505d77.jpg') }}" alt="Artisanal Baker" style="width: 100%; height: auto; display: block;">
        </div>
      </div>
    </div>

    <div class="columns is-vcentered mt-6 pt-6" style="border-top: 1px solid var(--cream-dark);">
      <div class="column is-5 animate scale-in">
        <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(102,17,35,0.1);">
          <img src="{{ asset('assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg') }}" alt="Premium Ingredients" style="width: 100%; height: auto; display: block;">
        </div>
      </div>
      <div class="column is-6 is-offset-1 animate fade-up" style="animation-delay: 0.2s;">
        <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.85rem;" data-en="The Essence" data-id="Esensi">The Essence</p>
        <h2 class="title is-2 mb-5" data-en="Purity in Every Crumb" data-id="Kemurnian di Setiap Remahan">Purity in Every Crumb</h2>
        <p class="subtitle is-6 has-text-grey mb-5" style="line-height: 1.8; font-weight: 300;" data-en="We source only the finest, 100% natural ingredients. No artificial additives. No preservatives. Just the pure, unadulterated goodness of nature, expertly combined to create taste profiles that linger long after the last bite." data-id="Kami hanya mengambil bahan alami 100% terbaik. Tanpa bahan pengawet buatan. Hanya kebaikan alam yang murni, dipadukan dengan ahli untuk menciptakan profil rasa yang bertahan lama.">We source only the finest, 100% natural ingredients. No artificial additives. No preservatives. Just the pure, unadulterated goodness of nature, expertly combined to create taste profiles that linger long after the last bite.</p>
        
        <div class="mt-5">
          <div class="is-flex is-align-items-center mb-3" style="gap: 15px;">
            <span style="font-size: 1.5rem;">🌿</span>
            <span class="has-text-weight-medium" style="font-size: 1rem; color: var(--charcoal);" data-en="100% Organic Stone-Ground Flour" data-id="100% Tepung Organik">100% Organic Stone-Ground Flour</span>
          </div>
          <div class="is-flex is-align-items-center mb-3" style="gap: 15px;">
            <span style="font-size: 1.5rem;">🥖</span>
            <span class="has-text-weight-medium" style="font-size: 1rem; color: var(--charcoal);" data-en="Wild Sourdough Fermentation" data-id="Fermentasi Sourdough Alami">Wild Sourdough Fermentation</span>
          </div>
          <div class="is-flex is-align-items-center" style="gap: 15px;">
            <span style="font-size: 1.5rem;">❤️</span>
            <span class="has-text-weight-medium" style="font-size: 1rem; color: var(--charcoal);" data-en="Handcrafted with Zero Heavy Machinery" data-id="Dibuat Tangan Tanpa Mesin Berat">Handcrafted with Zero Heavy Machinery</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<section class="section" style="background-color: var(--cream); padding-top:5rem; padding-bottom:5rem;">
  <div class="container has-text-centered animate fade-up">
    <h3 class="title is-3 mb-4" data-en="Experience the Legacy" data-id="Rasakan Warisannya">Experience the Legacy</h3>
    <p class="subtitle is-6 has-text-grey mx-auto mb-6" style="max-width: 600px; line-height: 1.8; font-weight: 300;" data-en="We invite you to taste the difference that true artisanal craftsmanship makes. Explore our luxury menu and become part of the Soméra Society." data-id="Kami mengundang Anda untuk merasakan perbedaan yang dihasilkan dari keahlian artisanal sejati.">We invite you to taste the difference that true artisanal craftsmanship makes. Explore our luxury menu and become part of the Soméra Society.</p>
    <button class="pill-btn" onclick="window.location.href='{{ route('menu') }}'">
      <span class="btn-arrow">➔</span> <span data-en="Discover Our Menu" data-id="Jelajahi Menu Kami">Discover Our Menu</span>
    </button>
  </div>
</section>
@endsection
