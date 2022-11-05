<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://files.facepunch.com/lewis/1b2911b1/rust-marque.svg">
    <link rel="stylesheet" href="./css/form.css">
    <title>Login — RustyUranium</title>
</head>

<body>

    <!--  -->
    <section class="header">
        <div class="overlay"></div>
            <x-navbar />
        <div class="header-container">
            <div class="box">
                <h1>Login Here</h1>
                @if(session('error'))
                    <p class="error">{{ session('error') }}</p>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <input type="email" name="email" placeholder="Email Address" autocomplete="off" value="{{ old('email') }}">
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                    @error('password')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="remember">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <button>Login</button>
                </form>
                <p>Don't have an account? <a href="/signup">Register</a></p>
                <p>Don't Remember Password? <a href="/forgot-password">Forgot Password</a></p>
            </div>
        </div>
    </section>
</body>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3MB424WHTW"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-3MB424WHTW');
</script>


</html>