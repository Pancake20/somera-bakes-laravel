<!DOCTYPE html>
<html lang="en" class="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $settings['site_title'] ?? 'Soméra Bakes — Artisanal Bakery' }}</title>
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
  
  <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "outline": "#887273",
                    "secondary-container": "#fd6a4a",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed-dim": "#8ed6aa",
                    "inverse-surface": "#392e2e",
                    "surface-variant": "#f1dedf",
                    "on-primary-container": "#ff9ea7",
                    "secondary": "#ae3117",
                    "on-primary-fixed": "#40000f",
                    "on-error": "#ffffff",
                    "secondary-fixed": "#ffdad3",
                    "tertiary-fixed": "#a9f3c4",
                    "surface-container-high": "#f7e4e4",
                    "primary-fixed-dim": "#ffb2b8",
                    "primary-container": "#842938",
                    "on-error-container": "#93000a",
                    "on-secondary-fixed-variant": "#8c1901",
                    "on-secondary-fixed": "#3d0500",
                    "surface-dim": "#e8d6d6",
                    "on-surface-variant": "#554243",
                    "surface": "#fff8f7",
                    "inverse-on-surface": "#ffeced",
                    "error-container": "#ffdad6",
                    "primary-fixed": "#ffdadb",
                    "on-secondary-container": "#640e00",
                    "on-primary": "#ffffff",
                    "tertiary": "#003c22",
                    "tertiary-container": "#005533",
                    "primary": "#661123",
                    "surface-container-highest": "#f1dedf",
                    "surface-bright": "#fff8f7",
                    "secondary-fixed-dim": "#ffb4a4",
                    "surface-container-lowest": "#ffffff",
                    "on-surface": "#23191a",
                    "error": "#ba1a1a",
                    "inverse-primary": "#ffb2b8",
                    "on-tertiary-container": "#81c89d",
                    "on-primary-fixed-variant": "#802635",
                    "on-tertiary-fixed": "#002111",
                    "on-background": "#23191a",
                    "surface-container-low": "#fff0f0",
                    "surface-tint": "#9f3d4b",
                    "background": "#fff8f7",
                    "surface-container": "#fce9ea",
                    "on-tertiary-fixed-variant": "#005231",
                    "outline-variant": "#dbc0c1",
                    "on-tertiary": "#ffffff"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "margin-mobile": "20px",
                    "section-padding": "120px",
                    "container-max": "1280px",
                    "margin-desktop": "64px",
                    "gutter": "24px",
                    "unit": "8px"
                },
                "fontFamily": {
                    "display-lg-mobile": ["Bodoni Moda"],
                    "body-md": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "headline-sm": ["Bodoni Moda"],
                    "headline-md": ["Bodoni Moda"],
                    "display-lg": ["Bodoni Moda"],
                    "label-caps": ["Plus Jakarta Sans"]
                },
                "fontSize": {
                    "display-lg-mobile": ["40px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-sm": ["24px", {"lineHeight": "1.4", "fontWeight": "500"}],
                    "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}],
                    "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                    "label-caps": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "600"}]
                }
            }
        }
    }
  </script>
  <style>
      .material-symbols-outlined {
          font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .botanical-line-art {
          background-image: url('{{ asset('botanical_1.png') }}');
          background-repeat: no-repeat;
          background-position: center;
          opacity: 0.15;
      }
      .glass-panel {
          background: rgba(255, 248, 247, 0.7);
          backdrop-filter: blur(16px);
          -webkit-backdrop-filter: blur(16px);
          border: 1px solid rgba(255, 255, 255, 0.5);
      }
      .dark .glass-panel {
          background: rgba(57, 46, 46, 0.7);
          border: 1px solid rgba(255, 255, 255, 0.1);
      }
      .botanical-divider {
          position: relative;
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 2rem 0;
      }
      .botanical-divider::before {
          content: '';
          position: absolute;
          width: 100px;
          height: 1px;
          background: linear-gradient(90deg, transparent, var(--color-outline-variant), transparent);
      }
      .ambient-shadow {
          box-shadow: 0 20px 50px rgba(102, 17, 35, 0.08);
      }
  </style>

  <!-- Dynamic WhatsApp Settings accessible to JS -->
  <script>
      window.whatsappNumber = "{{ $settings['whatsapp_number'] ?? '6285924950713' }}";
      window.whatsappMessageEn = "{{ $settings['whatsapp_message_en'] ?? 'Hello Soméra Bakes, I want to order' }}";
      window.whatsappMessageId = "{{ $settings['whatsapp_message_id'] ?? 'Halo Soméra Bakes, saya ingin pesan' }}";
      
      function orderWhatsApp(productName) {
          let fullMsg = encodeURIComponent(`${window.whatsappMessageEn} ${productName}`);
          window.open(`https://wa.me/${window.whatsappNumber}?text=${fullMsg}`, '_blank');
      }
  <script src="{{ asset('script.js') }}"></script>
</head>
<body class="bg-background text-on-background font-body-md antialiased overflow-x-hidden selection:bg-primary-container selection:text-on-primary-container">

<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30 shadow-sm transition-all duration-300">
  <div class="flex justify-between items-center max-w-container-max mx-auto px-margin-desktop h-20 md:px-margin-desktop px-margin-mobile">
    <!-- Brand -->
    <a href="{{ route('home') }}" class="font-display-lg text-headline-md text-primary tracking-tight">
        <img src="{{ asset('logo.png') }}" alt="Soméra Bakes Logo" class="h-12 w-auto object-contain">
    </a>
    <!-- Desktop Nav -->
    <div class="hidden md:flex items-center gap-8">
      <a href="{{ route('our-story') }}" class="text-on-surface-variant font-medium font-body-md text-body-md hover:text-primary transition-colors duration-300 {{ request()->routeIs('our-story') ? 'border-b-2 border-primary pb-1 text-primary' : '' }}">Our Story</a>
      <a href="{{ route('menu') }}" class="text-on-surface-variant font-medium font-body-md text-body-md hover:text-primary transition-colors duration-300 {{ request()->routeIs('menu') ? 'border-b-2 border-primary pb-1 text-primary' : '' }}">Luxury Menu</a>
      <a href="{{ route('home') }}#gallery" class="text-on-surface-variant font-medium font-body-md text-body-md hover:text-primary transition-colors duration-300">Gallery</a>
      <a href="{{ route('home') }}#testimonials" class="text-on-surface-variant font-medium font-body-md text-body-md hover:text-primary transition-colors duration-300">Testimonials</a>
    </div>
    <!-- Action -->
    <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '' }}" target="_blank" class="hidden md:inline-flex items-center justify-center px-6 py-3 bg-primary text-on-primary rounded-full font-label-caps text-label-caps uppercase tracking-widest hover:bg-primary-container transition-colors duration-300 scale-95 active:opacity-80">
        Order via WhatsApp
    </a>
    <!-- Mobile Menu Toggle -->
    <button class="md:hidden text-primary p-2">
      <span class="material-symbols-outlined">menu</span>
    </button>
  </div>
</nav>

<!-- Main Content -->
@yield('content')

<!-- Footer -->
<footer class="w-full py-section-padding bg-surface-container mt-section-padding border-t border-surface-container-high">
  <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter">
    <div class="font-display-lg text-headline-sm text-primary mb-6 md:mb-0">
        <img src="{{ asset('logo.png') }}" alt="Soméra Bakes Logo" class="h-10 w-auto object-contain">
    </div>
    <div class="flex flex-wrap justify-center gap-6 md:gap-8">
      <a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary-container transition-colors duration-300" href="#">Privacy Policy</a>
      <a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary-container transition-colors duration-300" href="#">Shipping Info</a>
      <a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary-container transition-colors duration-300" href="#">Contact Us</a>
      <a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary-container transition-colors duration-300" href="https://wa.me/{{ $settings['whatsapp_number'] ?? '' }}">WhatsApp Booking</a>
    </div>
    <div class="font-body-md text-body-md text-on-surface-variant text-center md:text-right mt-6 md:mt-0 opacity-80">
        © 2026 Soméra Bakes. Artisanal Craftsmanship.
    </div>
  </div>
</footer>
</body>
</html>
