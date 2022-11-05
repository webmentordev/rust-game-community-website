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
    <link rel="stylesheet" href="./css/gallery.css">
    <title>Gallery — RustyUranium</title>
</head>

<body>

    <!--  -->
    <section class="header" data-parallax="scroll" data-image-src="{{ asset('assets/images/gallery-back.png') }}">
        <div class="overlay"></div>
        <x-navbar />
        <div class="header-container">
            <div class="box">
                <h1>RustyUranium gallery</h1>
                <p>Gellay Content Posted By Players and Approved By Admin. <br>Content needs approval before posting here.</p>
                <ul>
                    <a href="steam://connect/178.33.47.214:2008">Connect</a>
                    <a href="https://discord.gg/ct8eqGbFrY" target="_blank">Discord</a>
                </ul>
            </div>
        </div>
    </section>


    <section class="gallery">
        <div class="container">
            <div class="filter">
                <ul class="links">
                    <a class="active" href="/gallery">Recent</a>
                    <a href="/gallery/memes">Memes</a>
                    <a href="/gallery/bases">bases</a>
                </ul>
                <form action="#" method="GET">
                    <input type="search" name="search" id="search" placeholder="Search By Name">
                </form>
            </div>
            <div class="grid">
                <div class="box">
                    <a href="./gallery/SniperElite.jpg" target="_blank">
                        <div class="img" style="background-image: url('./gallery-posts/SniperElite.jpg');"></div>
                    </a>
                    <div class="info">
                        <div class="flex">
                            <p class="time">Posted: 20 Days Ago</p>
                            <h3>Admin</h3>
                        </div>
                        <p class="post">Store changes, Nomad suit and more</p>
                    </div>
                </div>

                <div class="box">
                    <a href="./gallery/locker.png" target="_blank">
                        <div class="img" style="background-image: url('./gallery-posts/locker.png');"></div>
                    </a>
                    <div class="info">
                        <div class="flex">
                            <p class="time">Posted: 20 Days Ago</p>
                            <h3>Admin</h3>
                        </div>
                        <p class="post">Store changes, Nomad suit and more</p>
                    </div>
                </div>

                <div class="box">
                    <a href="./gallery/SniperElite.jpg" target="_blank">
                        <div class="img" style="background-image: url('./gallery-posts/SniperElite.jpg');"></div>
                    </a>
                    <div class="info">
                        <div class="flex">
                            <p class="time">Posted: 20 Days Ago</p>
                            <h3>Admin</h3>
                        </div>
                        <p class="post">Store changes, Nomad suit and more</p>
                    </div>
                </div>


                <div class="box">
                    <a href="./gallery/SniperElite.jpg" target="_blank">
                        <div class="img" style="background-image: url('./gallery-posts/SniperElite.jpg');"></div>
                    </a>
                    <div class="info">
                        <div class="flex">
                            <p class="time">Posted: 20 Days Ago</p>
                            <h3>Admin</h3>
                        </div>
                        <p class="post">Store changes, Nomad suit and more</p>
                    </div>
                </div>

                <div class="box">
                    <a href="./gallery/locker.png" target="_blank">
                        <div class="img" style="background-image: url('./gallery-posts/locker.png');"></div>
                    </a>
                    <div class="info">
                        <div class="flex">
                            <p class="time">Posted: 20 Days Ago</p>
                            <h3>Admin</h3>
                        </div>
                        <p class="post">Store changes, Nomad suit and more</p>
                    </div>
                </div>

                <div class="box">
                    <a href="./gallery/SniperElite.jpg" target="_blank">
                        <div class="img" style="background-image: url('./gallery-posts/SniperElite.jpg');"></div>
                    </a>
                    <div class="info">
                        <div class="flex">
                            <p class="time">Posted: 20 Days Ago</p>
                            <h3>Admin</h3>
                        </div>
                        <p class="post">Store changes, Nomad suit and more</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
    
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

<script src="./js/parallax/parallax.min.js"></script>

</html>