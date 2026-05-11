<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $settings['site_title'] ?? 'Soméra Bakes — Artisanal Bakery' }}</title>
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <!-- Dynamic WhatsApp Settings accessible to JS -->
  <script>
      window.whatsappNumber = "{{ $settings['whatsapp_number'] ?? '6285924950713' }}";
      window.whatsappMessageEn = "{{ $settings['whatsapp_message_en'] ?? 'Hello Soméra Bakes, I want to order' }}";
      window.whatsappMessageId = "{{ $settings['whatsapp_message_id'] ?? 'Halo Soméra Bakes, saya ingin pesan' }}";
  </script>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{ route('home') }}">
        <img src="{{ asset('logo.png') }}" alt="Soméra Bakes Logo" style="max-height: 60px;">
      </a>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-end is-align-items-center">
        <a class="navbar-item" href="{{ route('home') }}" data-en="The Bakery" data-id="Toko Roti">The Bakery</a>
        <a class="navbar-item" href="{{ route('home') }}#crafts" data-en="Philosophy" data-id="Filosofi">Philosophy</a>
        <a class="navbar-item" href="{{ route('menu') }}" data-en="Menu" data-id="Menu">Menu</a>
        <a class="navbar-item" href="{{ route('home') }}#testimonials" data-en="Reviews" data-id="Ulasan">Reviews</a>
        <div class="navbar-item is-flex pl-4" style="gap:15px; border-left: 1px solid #F0EAE1;">
          <a class="has-text-grey-dark is-uppercase" style="font-size: 0.85rem; letter-spacing: 1px;" data-en="Search" data-id="Cari">Search</a>
          <a class="has-text-grey-dark is-uppercase" style="font-size: 0.85rem; letter-spacing: 1px;" data-en="Cart (0)" data-id="Keranjang (0)">Cart (0)</a>
          <span class="has-text-grey-light" style="font-size: 0.85rem;">|</span>
          <div class="is-flex" style="gap:10px; align-items:center;">
            <a class="has-text-grey-dark lang-btn" data-lang="en" onclick="setLanguage('en')" style="font-size: 0.85rem; cursor:pointer;">EN</a>
            <span class="has-text-grey-light" style="font-size: 0.75rem;">/</span>
            <a class="has-text-grey-dark lang-btn" data-lang="id" onclick="setLanguage('id')" style="font-size: 0.85rem; cursor:pointer;">ID</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

@yield('content')

<!-- FOOTER -->
<footer class="footer elegant-footer">
  <div class="container py-5">
    <div class="columns is-multiline">
      <div class="column is-4 animate fade-up">
        <img src="{{ asset('logo.png') }}" alt="Soméra Bakes" style="height:60px; margin-bottom: 1.5rem;">
        <p class="has-text-grey" style="line-height:1.8; font-weight:300; max-width: 300px;" 
            data-en="{{ $settings['footer_text_en'] ?? 'Elevating the everyday with exquisite baking creations. A symphony of flavor in every bite.' }}" 
            data-id="{{ $settings['footer_text_id'] ?? 'Meningkatkan hari-hari biasa dengan kreasi panggangan yang istimewa. Simfoni rasa di setiap gigitan.' }}">
            {{ $settings['footer_text_en'] ?? 'Elevating the everyday with exquisite baking creations. A symphony of flavor in every bite.' }}
        </p>
      </div>
      <div class="column is-2 is-offset-2-desktop animate fade-up" style="animation-delay:0.1s">
        <h4 class="title mb-5" data-en="Boutique" data-id="Butik">Boutique</h4>
        <ul style="line-height: 2;">
          <li><a href="{{ route('menu') }}" data-en="Our Menu" data-id="Menu Kami">Our Menu</a></li>
          <li><a href="#" data-en="Bespoke Orders" data-id="Pesanan Khusus">Bespoke Orders</a></li>
          <li><a href="#" data-en="Corporate" data-id="Korporat">Corporate</a></li>
        </ul>
      </div>
      <div class="column is-2 animate fade-up" style="animation-delay:0.2s">
        <h4 class="title mb-5" data-en="Maison" data-id="Rumah">Maison</h4>
        <ul style="line-height: 2;">
          <li><a href="#" data-en="Our Heritage" data-id="Warisan Kami">Our Heritage</a></li>
          <li><a href="#" data-en="Journal" data-id="Jurnal">Journal</a></li>
          <li><a href="#" data-en="Careers" data-id="Karir">Careers</a></li>
        </ul>
      </div>
      <div class="column is-2 animate fade-up" style="animation-delay:0.3s">
        <h4 class="title mb-5" data-en="Connect" data-id="Hubungi Kami">Connect</h4>
        <ul style="line-height: 2;">
          <li><a href="#">Instagram</a></li>
          <li><a href="#" data-en="Contact Us" data-id="Kontak Kami">Contact Us</a></li>
          <li><a href="#" data-en="Find Us" data-id="Cari Kami">Find Us</a></li>
        </ul>
      </div>
    </div>
    <div class="is-flex is-justify-content-space-between is-align-items-center mt-6 pt-5" style="border-top: 1px solid #F0EAE1;">
      <p class="has-text-grey is-size-7" style="letter-spacing: 1px;" data-en="© 2026 SOMÉRA BAKES. ALL RIGHTS RESERVED." data-id="© 2026 SOMÉRA BAKES. HAK CIPTA DILINDUNGI.">© 2026 SOMÉRA BAKES. ALL RIGHTS RESERVED.</p>
      <div class="is-flex" style="gap: 20px;">
        <a href="#" class="has-text-grey is-size-7" data-en="PRIVACY" data-id="PRIVASI">PRIVACY</a>
        <a href="#" class="has-text-grey is-size-7" data-en="TERMS" data-id="SYARAT">TERMS</a>
      </div>
    </div>
  </div>
</footer>

<script src="{{ asset('script.js') }}"></script>
<script>
  // Add WhatsApp functionality
  function orderWhatsApp(productName) {
      let msg = (localStorage.getItem('lang') === 'id') ? window.whatsappMessageId : window.whatsappMessageEn;
      let fullMsg = encodeURIComponent(`${msg} ${productName}`);
      window.open(`https://wa.me/${window.whatsappNumber}?text=${fullMsg}`, '_blank');
  }
</script>
</body>
</html>
