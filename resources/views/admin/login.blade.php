<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Soméra Bakes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body style="background-color: var(--cream); height: 100vh; display: flex; align-items: center; justify-content: center;">

<div class="box" style="width: 100%; max-width: 400px; padding: 2.5rem; text-align: center; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
    <img src="{{ asset('logo.png') }}" alt="Soméra Logo" style="height: 60px; margin-bottom: 1.5rem;">
    <h3 class="title is-4" style="font-family: 'Cormorant Garamond', serif; color: var(--rust);">Admin Secure Login</h3>
    
    @if($errors->any())
        <div class="notification is-danger is-light">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/admin/login">
        @csrf
        <div class="field">
            <div class="control">
                <input class="input elegant-input" type="email" name="email" placeholder="Admin Email" required autofocus>
            </div>
        </div>
        <div class="field mt-4">
            <div class="control">
                <input class="input elegant-input" type="password" name="password" placeholder="Password" required>
            </div>
        </div>
        <button type="submit" class="pill-btn mt-5" style="width: 100%; justify-content: center;">
            Login to Dashboard
        </button>
    </form>
</div>

</body>
</html>
