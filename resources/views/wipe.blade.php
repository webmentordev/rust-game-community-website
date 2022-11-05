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
    <link rel="stylesheet" href="./css/wipe.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8387645180554963"
     crossorigin="anonymous"></script>
    <title>Wipe & Purge — RustyUranium</title>
</head>

<body>

    <!--  -->
    <section class="header" data-parallax="scroll" data-image-src="./assets/images/wipe&purge.jpg">
        <div class="overlay"></div>
        <x-navbar />
        <div class="header-container">
            <div class="box">
                <h1> {{ date('Y') }} BP and RP Wipe Schedule</h1>
                <p>Here is Complete Year BP and RP Wipe Schedule.<br> 7 Days (Weekly) Wipe Schedule. Monthly Blueprint Wipe <br>Timing is according to French Time.</p>
                <ul>
                    <a href="steam://connect/176.31.241.190:2033">Connect</a>
                    <a href="https://discord.gg/ct8eqGbFrY" target="_blank">Discord</a>
                </ul>
            </div>
        </div>
    </section>


    <section class="wipe">
      <div class="container">
          <h1>BP Wipe & RP Wipe Schedule Of Year {{ date('Y') }}: <br> <span>Posted By MATRed97 <i class="fas fa-check"></i></span></h1>
          <div class="box">
              <h3>Wipe & Purge Schedules </h3>
              <ul class="list">
                  <li> <i class="fas fa-check"></i><span>Purge</span> Starts 2 hours before Wipe Day.</li>
                  <li> <i class="fas fa-check"></i><span>Serve wipe</span> after 7 days Thursday Evening. </li>
                  <li> <i class="fas fa-check"></i><span>Blueprints</span> wipe at First Thursday Of every Month (Force Wipe)</li>
                  <li> <i class="fas fa-check"></i><span>RP Wipe</span> 2 Months Wipe.</li>
                  <li> <i class="fas fa-check"></i><span>XP-Levels</span> Never Wipe.</li>
              </ul>
              <h3>How Wipe & Purge Schedule Works? </h3>
              <p>Remember, Purge starts 2 hours before wipe day start (Not according to the clock). Server Wipes after 2 hours the last time purge was started. That mean Purge last for 26 hours. <br> Wipe Day is always <span>Thursday</span> & Time is <span>8:00 PM</span> French Time <br> Purge Starting day is <span>Wednesday</span> & Time is <span>7:00 PM</span> French Time <br> Active means this current Wipe has to come.</p>
              <table>
                  <tr>
                      <th>Wipe Day</th>
                      <th>Purge Day</th>
                      <th>Blueprints Wipe</th>
                      <th>RP Wipe</th>
                      <th>Year</th>
                      <th>Status</th>
                  </tr>
                  @foreach ($wipes as $wipe)
                    @if ($wipe->year == date('Y'))
                        <tr>
                            <td>Thursday {{ $wipe->day }}, {{ $wipe->month }}</td>
                                <td>Wednesday {{ $wipe->p_day }}, {{ $wipe->p_month }}</td>
                            <td>@if ($wipe->bp_wipe == 'yes')
                                    <i class="fas fa-check"></i>
                                @else
                                        <i class="fas fa-times"></i>
                            @endif </td>
                            <td>@if ($wipe->rp_wipe == 'yes')
                                <i class="fas fa-check"></i>
                            @else
                                <i class="fas fa-times"></i>
                            @endif</td>
                            <td>{{ $wipe->year }}</td>
                            <td @if ($wipe->status == 'wiped')
                                class="cap wiped"
                            @elseif($wipe->status == 'active')
                                class="cap active"
                            @else
                                class="cap"
                            @endif >{{ $wipe->status }}</td>
                        </tr>
                    @endif
                  @endforeach
              </table>
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