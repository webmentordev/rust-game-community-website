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
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    <title>Email Verification — RustyUranium</title>
</head>

<body>
    <!--  -->
    <section class="header">
        <div class="overlay"></div>
        <x-navbar />
        <div class="header-container">
            <div class="box">
                <h1>Email Verification</h1>
                @if (session('success'))
                  <p class="success">{{ session('success') }}</p>
                @endif
                
                <p class="label">For verification purpose, we have already sent you verification email. Must check spam section. Doing so will give you complete access to your Profile</p>
                <p class="label">If you haven't received email. Click Button below.</p>
                <form action="{{ route('verification.send') }}" method="post">
                    @csrf
                    <button class="resend" type="submit">Resend Verification</button>
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