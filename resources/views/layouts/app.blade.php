<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://files.facepunch.com/lewis/1b2911b1/rust-marque.svg">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8387645180554963"
     crossorigin="anonymous"></script>
     <script src="https://unpkg.com/alpinejs" defer></script> 
    <title>Admin Panel — RustyUranium</title>
    @livewireStyles
</head>

<body>
    <!--  -->
    <section class="header">
        <div class="overlay"></div>
        <x-navbar />
        <div class="header-container">
            <div class="box">
                <h1>Welcome To Admin Panel</h1>
                <p>Here you can check everything available on website. <br> Add more to it, Update it or Delete it. This section works as CMS.</p>
            </div>
        </div>
    </section>

    {{ $slot }}

</body>
@livewireScripts
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3MB424WHTW"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-3MB424WHTW');
</script>

<script src="{{ asset('js/parallax/parallax.min.js') }}"></script>
</html>