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
    <link rel="stylesheet" href="./css/events.css">
    <title>Forgot Password — RustyUranium</title>
</head>

<body>
    <!--  -->
    <section class="header">
        <div class="overlay"></div>
        <x-navbar />
        <div class="header-container">
            <div class="box">
                <h1>Forgot Password</h1>
                <form action="{{ route('password.email') }}" method="post">
                    @if (session('success'))
                        <p class="success">{{ session('success') }}</p>
                    @elseif(session('email'))
                        <p class="error" style="color: #cd412b;">{{ session('email') }}</p>
                    @endif

                    @csrf
                    <input type="email" name="email" placeholder="Email Address" autocomplete="off">
                    @error('email')
                        <p class="success">{{ $message }}</p>
                    @enderror
                    <button type="submit">Send Reset Link</button>
                </form>
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