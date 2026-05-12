@extends('layouts.app')

@section('content')
<!-- HERO -->
<section class="hero is-fullheight-with-navbar" id="home" style="margin-top: 5rem;">
  <!-- Elegant Sparse Vintage Botanicals -->
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="top: 8%; left: -2%; width: 230px; transform: rotate(-12deg);">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="top: 55%; left: 35%; width: 140px; transform: rotate(110deg); opacity: 0.35;">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <!-- Hero Text -->
        <div class="column is-5 is-offset-1 animate fade-up">
          <div class="is-flex is-align-items-center mb-4" style="gap: 10px;">
            <span style="background: var(--cream-dark); border-radius: 50%; width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;">✨</span>
            <p class="is-uppercase has-text-primary m-0" style="letter-spacing: 3px; font-size: 0.8rem; font-weight:600;" data-en="Est. 2026" data-id="Sejak 2026">Est. 2026</p>
          </div>
          <h1 class="title is-1 mb-6" data-en="{{ $settings['hero_title_en'] ?? 'Let Soméra handle your sweet cravings.' }}" data-id="{{ $settings['hero_title_id'] ?? 'Biar Soméra manjakan lidah manismu.' }}">{{ $settings['hero_title_en'] ?? 'Let Soméra handle your sweet cravings.' }}</h1>
          <p class="subtitle is-5 mb-6 has-text-grey" style="line-height:1.8; font-weight:300;" data-en="{{ $settings['hero_desc_en'] ?? 'Artisanal baking adapted to your sophisticated palate. Handcrafted daily with premium stoneground grains, wild-fermented yeast, and a whole lot of love.' }}" data-id="{{ $settings['hero_desc_id'] ?? 'Panggangan artisanal yang disesuaikan dengan selera tinggi Anda. Dibuat langsung setiap hari dengan biji-bijian giling premium, ragi fermentasi liar, dan penuh cinta.' }}">{{ $settings['hero_desc_en'] ?? 'Artisanal baking adapted to your sophisticated palate. Handcrafted daily with premium stoneground grains, wild-fermented yeast, and a whole lot of love.' }}</p>
          <div class="buttons" style="gap: 15px;">
            <button class="pill-btn" onclick="document.getElementById('crafts').scrollIntoView({behavior:'smooth'})">
              <span class="btn-arrow">➔</span> <span data-en="Grab a Treat" data-id="Pesan Sekarang">Grab a Treat</span>
            </button>
            <button class="pill-btn-outline" onclick="window.location.href='{{ route('menu') }}'" data-en="View Full Menu" data-id="Lihat Menu Lengkap">View Full Menu</button>
          </div>
        </div>
        <!-- Hero Carousel & Floating Cards -->
        <div class="column is-5 is-offset-1 animate scale-in" style="animation-delay: 0.2s;">
           <div class="hero-img-container">
             <!-- Left Floating Card -->
             <div class="floating-card card-left">
               <img src="{{ asset('logo.png') }}" alt="Soméra Logo">
               <div>
                 <p class="floating-card-title">Soméra Bakes</p>
                 <p class="floating-card-subtitle" data-en="Fresh Nastar out of the oven! 🍪" data-id="Nastar Segar baru matang! 🍪">Fresh Nastar out of the oven! 🍪</p>
               </div>
             </div>
             <!-- Right Floating Card -->
             <div class="floating-card card-right">
               <span style="font-size: 1.8rem;">😋</span>
               <div>
                 <p class="floating-card-title" data-en="You" data-id="Anda">You</p>
                 <p class="floating-card-subtitle" data-en="On my way to reserve some!" data-id="Langsung meluncur untuk pesan!">On my way to reserve some!</p>
               </div>
             </div>
             
             <!-- Slide Carousel -->
             <div class="carousel-container">
                <div class="carousel-slide">
                  <img src="{{ asset('assets/f8e1863a-d31e-4ed9-a792-2fa9e2c6ac5b.jpg') }}" alt="Savory baked goods">
                  <img src="{{ asset('assets/b5a2e8fc-e388-48ba-819c-dec1ec4b97d8.jpg') }}" alt="Nastar baking">
                  <img src="{{ asset('assets/4ae608d6-4c25-4165-96ee-c4c586505d77.jpg') }}" alt="Cat tongue cookies">
                </div>
             </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: THE CRAFT & HIGH-END OVERLAY CARDS -->
<section class="section py-6" id="crafts" style="background-color: var(--white); padding-top:6rem !important; padding-bottom:6rem !important;">
  <!-- Elegant Sparse Vintage Botanicals -->
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="top: 15%; right: -3%; width: 270px; transform: rotate(38deg);">
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="bottom: 5%; left: -2%; width: 190px; transform: rotate(-45deg);">
  <div class="container py-6">
    <div class="has-text-centered mb-6 animate fade-up">
      <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.75rem; font-weight:600;" data-en="Tailored Bakes" data-id="Kreasi Pilihan">Tailored Bakes</p>
      <h2 class="title is-2 mb-4" data-en="Soméra crafts bakes that fit you perfectly" data-id="Soméra menciptakan panggangan yang sangat cocok untuk Anda">Soméra crafts bakes that fit you perfectly</h2>
      <p class="subtitle is-6 has-text-grey mx-auto" style="max-width: 500px; font-weight: 300; line-height: 1.7;" data-en="Delicate layers, golden crusts, and sweet melt-in-your-mouth magic shaped by traditional heritage." data-id="Lapisan halus, kulit keemasan, dan keajaiban manis yang meleleh di mulut, dibentuk oleh warisan tradisional.">Delicate layers, golden crusts, and sweet melt-in-your-mouth magic shaped by traditional heritage.</p>
    </div>
    
    <div class="columns is-multiline pt-5">
      @if(isset($featured_left))
      <!-- Overlay Card 1 -->
      <div class="column is-4 animate fade-up">
        <div class="overlay-card" style="cursor: pointer;" onclick="window.location.href='{{ route('product.detail', $featured_left->id) }}'">
          <img src="{{ asset($featured_left->image ?? 'assets/f599ca1e-0a32-4701-971e-5fd30516d1a4.jpg') }}" alt="{{ $featured_left->title_en }}">
          <div class="overlay-card-content">
            <h4 class="title" data-en="{{ $featured_left->title_en }}" data-id="{{ $featured_left->title_id }}">{{ $featured_left->title_en }}</h4>
            <p data-en="{{ $featured_left->description_en }}" data-id="{{ $featured_left->description_id }}">{{ $featured_left->description_en }}</p>
          </div>
        </div>
      </div>
      @endif

      <!-- Middle Textured Rust Card -->
      <div class="column is-4 animate fade-up" style="animation-delay: 0.1s;">
        <div class="textured-card">
          <div>
            <h3 class="title" data-en="Artisanal Philosophy" data-id="Filosofi Artisanal">Artisanal Philosophy</h3>
            <p class="mt-4" data-en="We believe baking is an exquisite art form. Every sourdough starter is wild-fermented, every single pastry is slowly rolled by hand, and every batch is customized to our society's refined tastes." data-id="Kami percaya bahwa memanggang adalah bentuk seni yang indah. Setiap ragi sourdough difermentasi secara alami, setiap pastri digulung perlahan dengan tangan, dan setiap panggangan disesuaikan dengan selera halus komunitas kami.">We believe baking is an exquisite art form. Every sourdough starter is wild-fermented, every single pastry is slowly rolled by hand, and every batch is customized to our society's refined tastes.</p>
          </div>
          <div class="is-flex is-align-items-center" style="gap: 15px;">
            <span style="font-size: 2rem;">🌾</span>
            <span class="has-text-weight-bold" style="letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;" data-en="100% Traditional" data-id="100% Tradisional">100% Traditional</span>
          </div>
        </div>
      </div>

      @if(isset($featured_right))
      <!-- Overlay Card 2 -->
      <div class="column is-4 animate fade-up" style="animation-delay: 0.2s;">
        <div class="overlay-card" style="cursor: pointer;" onclick="window.location.href='{{ route('product.detail', $featured_right->id) }}'">
          <img src="{{ asset($featured_right->image ?? 'assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg') }}" alt="{{ $featured_right->title_en }}">
          <div class="overlay-card-content">
            <h4 class="title" data-en="{{ $featured_right->title_en }}" data-id="{{ $featured_right->title_id }}">{{ $featured_right->title_en }}</h4>
            <p data-en="{{ $featured_right->description_en }}" data-id="{{ $featured_right->description_id }}">{{ $featured_right->description_en }}</p>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>

<!-- SECTION 3: ARTISANAL AUTOPILOT (Split view with number-list) -->
<section class="section" style="background-color: var(--cream); padding-top:6rem; padding-bottom:6rem;">
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="bottom: 8%; left: 2%; width: 210px; transform: rotate(18deg);">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="top: 10%; right: -3%; width: 230px; transform: rotate(-50deg); opacity: 0.35;">
  <div class="container">
    <div class="columns is-vcentered">
      <div class="column is-5 is-offset-1 animate fade-up">
        <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.75rem; font-weight: 600;" data-en="The Baking Process" data-id="Proses Pemanggangan">The Baking Process</p>
        <h3 class="title is-2 mb-5" data-en="Our bakes are on auto-pilot to absolute perfection." data-id="Panggangan kami diproses otomatis menuju kesempurnaan mutlak.">Our bakes are on auto-pilot to absolute perfection.</h3>
        <p class="subtitle is-6 has-text-grey mb-6" style="line-height: 1.8; font-weight: 300;" data-en="We follow rigid, time-honored baking protocols so that every loaf, bun, or cookie that arrives to you is an absolute masterpiece of sensory delight." data-id="Kami mengikuti protokol pemanggangan tradisional yang ketat sehingga setiap roti, bakpao, atau kue yang sampai kepada Anda adalah mahakarya kebahagiaan sensorik mutlak.">We follow rigid, time-honored baking protocols so that every loaf, bun, or cookie that arrives to you is an absolute masterpiece of sensory delight.</p>
        
        <div class="feature-list-wrapper">
          <div class="feature-list-item">
            <div class="feature-number">1</div>
            <div class="feature-text">
              <h4 data-en="Crafted at Sunrise" data-id="Dibuat saat Matahari Terbit">Crafted at Sunrise</h4>
              <p data-en="Our expert bakers begin kneading and scaling before dawn so that you receive bakes fresh from the morning heat." data-id="Tukang roti ahli kami mulai menguleni dan menakar sebelum fajar agar Anda menerima panggangan hangat langsung di pagi hari.">Our expert bakers begin kneading and scaling before dawn so that you receive bakes fresh from the morning heat.</p>
            </div>
          </div>
          <div class="feature-list-item">
            <div class="feature-number">2</div>
            <div class="feature-text">
              <h4 data-en="Wild Yeast Fermentation" data-id="Fermentasi Ragi Alami">Wild Yeast Fermentation</h4>
              <p data-en="We rely on our ancient wild sourdough starter to achieve deep, robust, and complex aroma profiles." data-id="Kami mengandalkan ragi sourdough liar kuno kami untuk mencapai profil aroma yang mendalam, kuat, dan kompleks.">We rely on our ancient wild sourdough starter to achieve deep, robust, and complex aroma profiles.</p>
            </div>
          </div>
          <div class="feature-list-item">
            <div class="feature-number">3</div>
            <div class="feature-text">
              <h4 data-en="Handcrafted, Always" data-id="Selalu Dibuat dengan Tangan">Handcrafted, Always</h4>
              <p data-en="Zero heavy machinery. Every fold, roll, and score is guided by seasoned hands for premium textures." data-id="Tanpa mesin berat. Setiap lipatan, gulungan, dan guratan dipandu oleh tangan-tangan berpengalaman untuk tekstur premium.">Zero heavy machinery. Every fold, roll, and score is guided by seasoned hands for premium textures.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-5 is-offset-1 animate scale-in" style="animation-delay: 0.2s;">
        <div class="half-banner-img">
          <img src="{{ asset('assets/efd0b102-80cd-40d2-b042-089777059904.jpg') }}" alt="Fresh baking">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: SIGNATURE MATCHING -->
<section class="section" style="background-color: var(--white); padding-top:6rem; padding-bottom:6rem;">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="top: -5%; right: 4%; width: 240px; transform: rotate(-25deg);">
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="bottom: 12%; left: 4%; width: 180px; transform: rotate(15deg);">
  <div class="container">
    <div class="columns is-vcentered">
      <div class="column is-5 is-offset-1 animate scale-in">
        <div class="half-banner-img">
          <img src="{{ asset('assets/830a875e-3b60-42df-a54d-e1f84b83b733.jpg') }}" alt="Signature Rolls">
          <div class="half-banner-overlay-card">
            <span style="font-size: 1.5rem;">🔥</span>
            <div>
              <p class="has-text-weight-bold is-size-7 m-0" style="color: var(--rust);" data-en="BEST SELLER" data-id="TERLARIS">BEST SELLER</p>
              <p class="has-text-grey is-size-7" style="margin-top: 2px;" data-en="Over 500+ boxes ordered weekly!" data-id="Lebih dari 500+ kotak dipesan setiap minggu!">Over 500+ boxes ordered weekly!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-5 is-offset-1 animate fade-up" style="animation-delay: 0.2s;">
        <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.75rem; font-weight: 600;" data-en="The Floss Roll Legend" data-id="Legenda Gulung Abon">The Floss Roll Legend</p>
        <h3 class="title is-2 mb-5" data-en="Exquisite Floss Rolls tailored for luxury." data-id="Roti Gulung Abon Istimewa yang dirancang untuk kemewahan.">Exquisite Floss Rolls tailored for luxury.</h3>
        <p class="subtitle is-6 has-text-grey mb-6" style="line-height:1.8; font-weight:300;" data-en="Our Floss Roll Bread (Roti Abon) is a symphony of sweet, savory, and rich textures. Hand-rolled soft bread coated with rich savory floss, subtle spices, and a velvety mayo brush." data-id="Roti Gulung Abon kami adalah simfoni tekstur manis, gurih, dan kaya. Roti lembut yang digulung dengan tangan, dilapisi abon gurih melimpah, rempah halus, dan sapuan mayones selembut beludru.">Our Floss Roll Bread (Roti Abon) is a symphony of sweet, savory, and rich textures. Hand-rolled soft bread coated with rich savory floss, subtle spices, and a velvety mayo brush.</p>
        <button class="pill-btn" onclick="window.location.href='{{ route('menu') }}'">
          <span class="btn-arrow">➔</span> <span data-en="Explore The Legend" data-id="Jelajahi Sang Legenda">Explore The Legend</span>
        </button>
      </div>
    </div>
    
    <div class="columns is-multiline has-text-centered mt-6 pt-6" style="border-top: 1px solid var(--cream-dark);">
      <div class="column is-4 stat-item animate fade-up">
        <p class="stat-number">100%</p>
        <p class="stat-label" data-en="Organic Grains" data-id="Biji-bijian Organik">Organic Grains</p>
      </div>
      <div class="column is-4 stat-item animate fade-up" style="animation-delay: 0.1s;">
        <p class="stat-number">12+ Hours</p>
        <p class="stat-label" data-en="Wild Fermentation" data-id="Fermentasi Alami">Wild Fermentation</p>
      </div>
      <div class="column is-4 stat-item animate fade-up" style="animation-delay: 0.2s;">
        <p class="stat-number" data-en="Zero" data-id="Tanpa">Zero</p>
        <p class="stat-label" data-en="Artificial Additives" data-id="Bahan Pengawet Buatan">Artificial Additives</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5: CUSTOMER PATH TESTIMONIALS -->
<section class="section testimonial-wave-container" id="testimonials" style="background-color: var(--cream);">
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="top: 10%; left: 4%; width: 180px; transform: rotate(45deg);">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="bottom: 12%; right: 5%; width: 190px; transform: rotate(-15deg);">
  <svg class="wave-svg" viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,160 C120,120 240,80 360,110 C480,140 600,240 720,240 C840,240 960,140 1080,110 C1200,80 1320,120 1440,160" stroke="var(--rust)" stroke-width="3" stroke-dasharray="10, 10" />
  </svg>

  <div class="container relative z-index-1">
    <div class="has-text-centered mb-6 animate fade-up">
      <p class="is-uppercase has-text-primary mb-3" style="letter-spacing: 3px; font-size: 0.75rem; font-weight:600;" data-en="The Soméra Society" data-id="Komunitas Soméra">The Soméra Society</p>
      <h2 class="title is-2" data-en="Loved by Gourmet Enthusiasts" data-id="Dicintai oleh Penikmat Kuliner">Loved by Gourmet Enthusiasts</h2>
    </div>

    <div class="columns pt-6">
      @foreach($testimonials as $index => $t)
      <div class="column is-4 has-text-centered animate fade-up" style="animation-delay: {{ $index * 0.1 }}s;">
        <div class="testimonial-avatar-wrapper mb-4">
          <img class="testimonial-avatar" src="{{ asset($t->image ?? 'assets/f599ca1e-0a32-4701-971e-5fd30516d1a4.jpg') }}" alt="{{ $t->name }}">
        </div>
        <h4 class="title is-4 mb-2">{{ $t->name }}</h4>
        <p class="has-text-grey is-size-6" style="font-weight:300; font-style: italic; line-height: 1.6;" data-en="{{ $t->text_en }}" data-id="{{ $t->text_id }}">{{ $t->text_en }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- SECTION 6: FLOATING CTA BANNER -->
<section class="section py-6" style="background-color: var(--white);">
  <img src="{{ asset('botanical_1.png') }}" class="botanical-decor" style="bottom: -5%; left: 4%; width: 240px; transform: rotate(-40deg);">
  <img src="{{ asset('botanical_2.png') }}" class="botanical-decor" style="top: -10%; right: -2%; width: 210px; transform: rotate(120deg);">
  <div class="container py-6">
    <div class="cta-banner-container animate scale-in">
      <img src="{{ asset('assets/f8e1863a-d31e-4ed9-a792-2fa9e2c6ac5b.jpg') }}" alt="Savory pizza baking in the oven">
      
      <div class="cta-floating-box">
        <h2 class="title" data-en="Join the Soméra Society" data-id="Gabung Komunitas Soméra">Join the Soméra Society</h2>
        <p class="mb-5" data-en="Receive exclusive invitations, seasonal artisanal menus, and baking journal insights." data-id="Dapatkan undangan eksklusif, menu artisanal musiman, dan wawasan jurnal pemanggangan.">Receive exclusive invitations, seasonal artisanal menus, and baking journal insights.</p>
        
        <div class="field has-addons">
          <div class="control is-expanded">
            <input class="input elegant-input is-large" type="email" placeholder="Your email address" data-en="Your email address" data-id="Alamat email Anda">
          </div>
          <div class="control">
            <button class="button newsletter-btn is-large" data-en="Subscribe" data-id="Berlangganan">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
