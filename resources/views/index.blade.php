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
    <link rel="stylesheet" href="./css/index.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8387645180554963"
     crossorigin="anonymous"></script>
    <title>RustyUranium — Explore and Survive</title>
</head>

<body>
    <!--  -->
    <section class="header">
        <div class="nav">
            <div class="container">
                <a href="/"><img src="https://files.facepunch.com/lewis/1b2911b1/rust-marque.svg" alt="Rust Marque Logo"></a>
                <ul>
                    <a href="#about">About</a>
                    <a href="#commands">Commands</a>
                    <a href="#staff">Staff</a>
                    <a href="/wipe">Wipe</a>
                    <a href="/rules">Rules</a>
                    @guest
                        <a class="btn" href="{{ route('login') }}">Login</a>
                    @endguest
                    @auth
                        {{-- <a href="/gallery">Gallery</a> --}}
                        <a href="{{ route('profile') }}">profile</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    @endauth
                </ul>
            </div>
        </div>
        <div class="header-container">
            <div class="box">
                <h1>Explore. <br> Build. <br> Survive.</h1>
                <p>The only aim in RustyUranium is to survive. Environment wants you dead <br> by any mean - the island’s wildlife like Boars, Bears, the environment itself <br> & the undead. Do whatever it takes to last another night
                    & Purge. <br>Good Night Good Luck
                </p>
                <ul>
                    <a href="steam://connect/176.31.241.190:2033">Connect</a>
                    <a href="https://discord.gg/ct8eqGbFrY" target="_blank">Discord</a>
                    <a class="btn" href="https://app.gpay.io/store/rustyuraniumonline/13579" target="_blank">Donation</a>
                </ul>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="timer">
        <div class="container">
            <h1>Server Wipe & Timer <br></h1>
            <h3>(Timezone in France Time)</h3>
            @if ($dates->count())
                <h2><span>Purge |</span>Every Wednesday 7:00 PM</h2>
                <h2><span>Wipe |</span>Every Thursday 8:00 PM</h2>
                <h2><span>BP Wipe |</span>Every First Thursday Of A Month</h2>
                <h2><span>RP Wipe |</span>Every 2 Months</h2>
            @endif
            <p class="bottom" id="demo"></p>
            <a href="/wipe">Read More <i class="fas fa-caret-right"></i></a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <h1>About Section</h1>
            <p>Complete list of plugins, configrations & everything available.<br> All Commands mentioned. Anything that is not mentioned, is not the part of server.</p>
            <div class="block">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="box">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->post }}</p>
                            <ul>
                                @if ($post->commands != null)
                                    @php
                                        $myPost = explode(',', $post->commands);
                                    @endphp
                                    @for ($i = 0; $i < count($myPost); $i++)
                                        <li>{{ $myPost[$i] }}</li>
                                    @endfor
                                @endif
                            </ul>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="commands" id="commands">
        <div class="container">
            <h1>Server Commands</h1>
            <p>These are main commands that work in servers. There is more to it, some commands are <br> similer to these but they are not available here. To know all about the server & it's configration, Click Here <a href="/about">About</a></p>
            <div class="table">
                <table>
                    <tr>
                        <th class="capital">Name</th>
                        <th>Command</th>
                        <th class="everyone"><span>Everyone</span></th>
                        <th class="elite"><span>Elite+</span></th>
                    </tr>
                    @if ($commands->count())
                        @foreach ($commands as $command)
                            <tr>
                                <td>{{ $command->name }}</td>
                                <td class="command">{{ $command->command }}</td>
                                <td>@if ($command->default == 'yes')
                                    <i class="fas fa-check"></i>
                                @elseif($command->default == 'no')
                                    <i class="fas fa-times"></i>
                                @else
                                    {{ $command->default }}
                                @endif</td>
                                <td>@if ($command->elite == 'yes')
                                    <i class="fas fa-check"></i>
                                @elseif($command->elite == 'no')
                                    <i class="fas fa-times"></i>
                                @else
                                    {{ $command->elite }}
                                @endif</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="staff" id="staff">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="title">Staff Members</h1>
            <div class="grid">
                <div class="box">
                    <img src="./assets/images/staff/matred.jpg">
                    <div class="info">
                        <h2>MATRed97</h2>
                        <ul>
                            <li><i class="fas fa-caret-right"></i> Owner</li>
                            <li><i class="fas fa-caret-right"></i> Founder</li>
                            <li><i class="fas fa-caret-right"></i> Global Admin</li>
                            <li><i class="fas fa-caret-right"></i> Server Manager</li>
                        </ul>
                    </div>
                </div>

                <div class="box">
                    <img src="./assets/images/staff/tals.png">
                    <div class="info">
                        <h2>Tals</h2>
                        <ul>
                            <li><i class="fas fa-caret-right"></i> Owner</li>
                            <li><i class="fas fa-caret-right"></i> Founder</li>
                            <li><i class="fas fa-caret-right"></i> Global Admin</li>
                            <li><i class="fas fa-caret-right"></i> Chat Moderator</li>
                        </ul>
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


</html>