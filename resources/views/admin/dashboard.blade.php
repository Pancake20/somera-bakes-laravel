<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Soméra Bakes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <script>
        function openTab(evt, tabName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("content-tab");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" is-active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " is-active";
        }
    </script>
</head>
<body style="background-color: var(--cream);">

<nav class="navbar" style="background-color: white; border-bottom: 1px solid var(--cream-dark);">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            <img src="{{ asset('logo.png') }}" style="max-height: 40px;">
            <span class="ml-2" style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; color: var(--rust);">Admin Panel</span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-end">
            <a class="navbar-item" href="{{ route('home') }}" target="_blank">View Site</a>
            <div class="navbar-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="button is-small is-light">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<div class="section py-5">
    <div class="container">
        @if(session('success'))
            <div class="notification is-success is-light">{{ session('success') }}</div>
        @endif

        <div class="tabs is-boxed">
            <ul>
                <li class="tab is-active" onclick="openTab(event,'Settings')"><a>Settings & Strings</a></li>
                <li class="tab" onclick="openTab(event,'Products')"><a>Menu Products</a></li>
                <li class="tab" onclick="openTab(event,'Testimonials')"><a>Testimonials</a></li>
            </ul>
        </div>

        <!-- SETTINGS TAB -->
        <div id="Settings" class="content-tab box" style="display:block;">
            <h2 class="title is-4">Global Settings & Translations</h2>
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                <div class="columns is-multiline">
                    <!-- WhatsApp Settings -->
                    <div class="column is-12"><h3 class="title is-5 mb-2 mt-4" style="color:var(--rust);">WhatsApp Order Settings</h3></div>
                    <div class="column is-4">
                        <label class="label">WhatsApp Number</label>
                        <input type="text" name="whatsapp_number" class="input elegant-input" value="{{ $settings['whatsapp_number'] ?? '6285924950713' }}">
                    </div>
                    <div class="column is-4">
                        <label class="label">Pre-filled Message (EN)</label>
                        <input type="text" name="whatsapp_message_en" class="input elegant-input" value="{{ $settings['whatsapp_message_en'] ?? 'Hello Soméra Bakes, I want to order' }}">
                    </div>
                    <div class="column is-4">
                        <label class="label">Pre-filled Message (ID)</label>
                        <input type="text" name="whatsapp_message_id" class="input elegant-input" value="{{ $settings['whatsapp_message_id'] ?? 'Halo Soméra Bakes, saya ingin pesan' }}">
                    </div>

                    <!-- Hero Settings -->
                    <div class="column is-12"><h3 class="title is-5 mb-2 mt-4" style="color:var(--rust);">Hero Section</h3></div>
                    <div class="column is-6">
                        <label class="label">Hero Title (EN)</label>
                        <input type="text" name="hero_title_en" class="input elegant-input" value="{{ $settings['hero_title_en'] ?? '' }}">
                    </div>
                    <div class="column is-6">
                        <label class="label">Hero Title (ID)</label>
                        <input type="text" name="hero_title_id" class="input elegant-input" value="{{ $settings['hero_title_id'] ?? '' }}">
                    </div>
                    <div class="column is-6">
                        <label class="label">Hero Desc (EN)</label>
                        <textarea name="hero_desc_en" class="textarea">{{ $settings['hero_desc_en'] ?? '' }}</textarea>
                    </div>
                    <div class="column is-6">
                        <label class="label">Hero Desc (ID)</label>
                        <textarea name="hero_desc_id" class="textarea">{{ $settings['hero_desc_id'] ?? '' }}</textarea>
                    </div>
                </div>
                <button type="submit" class="pill-btn mt-4">Save Settings</button>
            </form>
        </div>

        <!-- PRODUCTS TAB -->
        <div id="Products" class="content-tab box" style="display:none;">
            <h2 class="title is-4">Manage Menu Products</h2>
            
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="mb-6 p-4" style="background: #fafafa; border-radius: 8px;">
                @csrf
                <h3 class="title is-5">Add New Product</h3>
                <div class="columns is-multiline">
                    <div class="column is-6">
                        <label class="label">Title (EN)</label>
                        <input type="text" name="title_en" class="input" required>
                    </div>
                    <div class="column is-6">
                        <label class="label">Title (ID)</label>
                        <input type="text" name="title_id" class="input" required>
                    </div>
                    <div class="column is-6">
                        <label class="label">Description (EN)</label>
                        <textarea name="description_en" class="textarea"></textarea>
                    </div>
                    <div class="column is-6">
                        <label class="label">Description (ID)</label>
                        <textarea name="description_id" class="textarea"></textarea>
                    </div>
                    <div class="column is-3">
                        <label class="label">Price (String, e.g. Rp 35.000)</label>
                        <input type="text" name="price" class="input" required>
                    </div>
                    <div class="column is-3">
                        <label class="label">Sort Order</label>
                        <input type="number" name="sort_order" class="input" value="0">
                    </div>
                    <div class="column is-3">
                        <label class="label">Image (JPEG/PNG)</label>
                        <input type="file" name="image" class="input">
                    </div>
                    <div class="column is-3">
                        <label class="label">Flags</label>
                        <label class="checkbox">
                            <input type="checkbox" name="is_bestseller"> Best Seller
                        </label>
                    </div>
                </div>
                <button type="submit" class="button is-dark">Add Product</button>
            </form>

            <table class="table is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Sort</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $p)
                    <tr>
                        <td>
                            @if($p->image)
                                <img src="{{ asset($p->image) }}" width="50">
                            @endif
                        </td>
                        <td>{{ $p->title_en }}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->sort_order }}</td>
                        <td>
                            <form action="{{ route('admin.products.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Delete?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-small is-danger is-light">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- TESTIMONIALS TAB -->
        <div id="Testimonials" class="content-tab box" style="display:none;">
            <h2 class="title is-4">Manage Testimonials</h2>
            
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="mb-6 p-4" style="background: #fafafa; border-radius: 8px;">
                @csrf
                <div class="columns is-multiline">
                    <div class="column is-4">
                        <label class="label">Customer Name</label>
                        <input type="text" name="name" class="input" required>
                    </div>
                    <div class="column is-4">
                        <label class="label">Review (EN)</label>
                        <textarea name="text_en" class="textarea" required></textarea>
                    </div>
                    <div class="column is-4">
                        <label class="label">Review (ID)</label>
                        <textarea name="text_id" class="textarea" required></textarea>
                    </div>
                    <div class="column is-4">
                        <label class="label">Avatar Image</label>
                        <input type="file" name="image" class="input">
                    </div>
                </div>
                <button type="submit" class="button is-dark">Add Testimonial</button>
            </form>

            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Review</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonials as $t)
                    <tr>
                        <td>{{ $t->name }}</td>
                        <td>{{ Str::limit($t->text_en, 50) }}</td>
                        <td>
                            <form action="{{ route('admin.testimonials.destroy', $t->id) }}" method="POST" onsubmit="return confirm('Delete?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-small is-danger is-light">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

</body>
</html>
