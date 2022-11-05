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
    <link rel="stylesheet" href="./css/rules.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8387645180554963"
     crossorigin="anonymous"></script>
    <title>Rules — RustyUranium</title>
</head>

<body>

    <!--  -->
    <section class="header" data-parallax="scroll" data-image-src="./assets/images/rules-back.png">
        <div class="overlay"></div>
        <x-navbar />
        <div class="header-container">
            <div class="box">
                <h1>RustyUranium Rules</h1>
                <p>Breaking These Rules is Permanent Ban. No Unban Requests. <br>They are not hard to follow.</p>
                <ul>
                    <a href="steam://connect/176.31.241.190:2033">Connect</a>
                    <a href="https://discord.gg/ct8eqGbFrY" target="_blank">Discord</a>
                </ul>
            </div>
        </div>
    </section>

    <section class="rules">
        <div class="container">
            <h1>List Of Rules you have to follow: <br> <span>By MATRed97 <i class="fas fa-check"></i></span></h1>
            <div class="box">
                <h3>Who can ban or unban?</h3>
                <p>As you have read above, Ban will be permanent. You can not request unban from any other admin because the admin who will ban you is, <span>MATRed97</span> who has power to unban you which is not gonna happen. No days, months or years ban.
                    Everything goes under investigation then decision is made. Proof of ban (if possible) always mention on discord with reason. <br> <span>(In Case of issue with players, contact Admin)</span></p>
                <h3>Is ban limited to servers?</h3>
                <p>No, if player(s) get banned from one <span>RustyUranium Servers,</span> they will also get banned from all servers and platforms associated with the player(s). For Example <span>Discord</span>, <span>Alternate Steam Account</span>.</p>
                <h1>Rules</h1>
                <ul style="margin-bottom: 50px">
                    @foreach ($rules as $rule)
                        <li><i class="fas fa-check"></i>{{ $rule->reason }} <span>({{ $rule->period }})</span></li>
                    @endforeach
                </ul>
                <h1>Warnings</h1>
                <ul style="margin-bottom: 20px">
                    <li><i class="fas fa-check"></i>Public Events are for everyone. All Players can take what they want from it</li>
                    <li><i class="fas fa-check"></i>Bradley & Helicopter Loot goes public after 15 Minutes <span>(Nothing Will Happen)</span></li>
                    <li><i class="fas fa-check"></i>Quarries can not be looted directly, there are ways to loot them. To protect your quarries, build a decay protection zone around it. <span>(Nothing Will Happen)</span></li>
                    <li><i class="fas fa-check"></i>If you are first to start raiding the base, it will be locked on you. But if you setop raiding it, then after 15 minutes, other players can steal it. <span>(Nothing Will Happen)</span></li>
                    <li><i class="fas fa-check"></i>Decaying Bases are not directly lootable if PvE is active. You can loot it by placing your own TC and breaking boxes, boxes are not lootable during PvE. <span>(Nothing Will Happen)</span></li>
                    <li><i class="fas fa-check"></i>If you start The Large Excavator, it will lock on you so noone else will be able to loot it. But if it stops, you will have 5 minutes to loot it until it goes public. <span>(Nothing Will Happen)</span></li>
                    <li><i class="fas fa-check"></i>If you call a Supply Drop, it is loot able by other players, so make sure to call it in safezone like closed walls so none can loot it. <span>(Nothing Will Happen)</span></li>
                    <li><i class="fas fa-check"></i>Spamming Tool Cupboards are not allowed. You can set some but it should be justified. You can extend range of Tool Cupboard with Foundations. <span>(First Warning, then TCs Will Be Removed)</span></li>
                    <li><i class="fas fa-check"></i>Public Bradley and Helicopters will be locked on player or team who gives more damage. <span>(Nothing Will Happen)</span></li>
                </ul>
                <h1>Purge Rules</h1>
                <p style="margin-top: -15px">Here is list of abilities that will or not be available during Purge (PvP) is active. It is because we want to play purge on equal bases. Even player who has donated to the server & who done't, both are equal. For Example, <span>Elite+</span> can teleport in <span>5 Seconds</span> and no one want to see them teleporting in the middle of a fight.</p>
                <ul>
                    <li><i class="fas fa-check"></i>No Automatic Door Closer.</li>
                    <li><i class="fas fa-check"></i>No BGrade Command.</li>
                    <li><i class="fas fa-check"></i>No Bank will be available during purge.</li>
                    <li><i class="fas fa-check"></i>No Long Range Workbenches.</li>
                    <li><i class="fas fa-check"></i>MLRS will be Enabled.</li>
                    <li><i class="fas fa-check"></i>No MegaDrone will be available.</li>
                    <li><i class="fas fa-check"></i>No Guarded Create Event.</li>
                    <li><i class="fas fa-check"></i>No Helicopter Refuel Event.</li>
                    <li><i class="fas fa-check"></i>No HuntMan Spawn For Killing Animals.</li>
                    <li><i class="fas fa-check"></i>No Loot Defender.</li>
                    <li><i class="fas fa-check"></i>No Teleportation Of Any Kind.</li>
                    <li><i class="fas fa-check"></i>No Night Vision.</li>
                    <li><i class="fas fa-check"></i>No Plane Crash Events.</li>
                    <li><i class="fas fa-check"></i>Private Crops Disabled.</li>
                    <li><i class="fas fa-check"></i>No NPC Raidable Bases.</li>
                    <li><i class="fas fa-check"></i>No Remover Tool.</li>
                    <li><i class="fas fa-check"></i>No Trade Items Command.</li>
                    <li><i class="fas fa-check"></i>No Treasure Box Event.</li>
                    <li><i class="fas fa-check"></i>No Claiming Kits.</li>
                    <li><i class="fas fa-check"></i>Chinook will be Disabled</li>
                    <li><i class="fas fa-check"></i>No Train Heist Event</li>
                </ul>
            </div>
        </div>
    </section>
    <!--  -->
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