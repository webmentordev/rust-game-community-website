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
    <title>Admin Panel — RustyUranium</title>
</head>

<body>

    <!--  -->
    <section class="header" data-parallax="scroll" data-image-src="{{ asset('assets/images/admin-back.jpg') }}">
        <div class="overlay"></div>
        <x-navbar />
        <div class="header-container">
            <div class="box">
                <h1>Welcome To Admin Panel</h1>
                <p>Here you can check everything available on website. <br> Add more to it, Update it or Delete it. This section works as CMS.</p>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container">
            <div class="tabs">
                <button class="tablinks active" onclick="openTab(event, 'users')" id="defaultOpen">Users</button>
                <button class="tablinks" onclick="openTab(event, 'commands')">Commands</button>
                <button class="tablinks" onclick="openTab(event, 'configration')">Configration</button>
                <button class="tablinks" onclick="openTab(event, 'wipe_purge')">Wipe & Purge</button>
                <button class="tablinks" onclick="openTab(event, 'rules')">Rules</button>
            </div>

            <!-- Users Database Page -->
            <div class="users tabcontent" id="users">
                <h1 class="title">Registered Users Database</h1>
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Verified</th>
                        <th>Update</th>
                        <th>Ban</th>
                    </tr>

                    <tr>
                        <td>Ahmer99</td>
                        <td>ahmer99@gmail.com</td>
                        <td class="cap">Active</td>
                        <td class="cap">Verified</td>
                        <td><a href="#">Update</a></td>
                        <td>
                            <form action="" method="post"><button type="submit">ban</button></form>
                        </td>
                    </tr>

                    @if ($users->count())
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="cap">{{ $user->status }}</td>
                                <td class="cap">@if ($user->email_verified_at != null)
                                    Verified
                                @else
                                    pending
                                @endif</td>
                                <td><a href="#">Update</a></td>
                                <td>
                                    <form action="" method="post"><button type="submit">ban</button></form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>UserData</td>
                            <td>UserData</td>
                            <td>UserData</td>
                            <td>UserData</td>
                            <td>UserData</td>
                            <td>UserData</td>
                        </tr>
                    @endif
                </table>
            </div>

            <!-- Commands Page -->
            <div class="commands tabcontent" id="commands">
                <h1 class="title">Commands Information</h1>
                <form action="{{ route('storeRanking') }}" method="post">
                    @csrf
                    @if (session('rankSuccess'))
                        <p class="success">{{ session('rankSuccess') }}</p>
                    @endif
                    <div class="flex">
                        <input class="side" type="text" name="name" placeholder="Title" value="">
                        <input type="text" name="command" placeholder="Command (/skinbox)" value="">
                    </div>
                    <div class="flex">
                        <select class="side" name="default" id="default">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <select name="elite" id="elite">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <button type="submit">Submit</button>
                    @if (session('rankDeleteSuccess'))
                        <p class="success">{{ session('rankDeleteSuccess') }}</p>
                    @endif
                </form>
                <h1 class="title">Commands Database</h1>
                <div class="table">
                    <table>
                        <tr>
                            <th class="capital">Name</th>
                            <th>Command</th>
                            <th class="everyone"><span>Everyone</span></th>
                            <th class="elite"><span>Elite+</span></th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
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
                                <th><a href="#">Update</a></th>
                                <th>
                                    <form action="{{ route('deleteRanking', $command->id) }}" method="post"> @csrf 
                                        @method('DELETE')<button type="submit">Delete</button></form>
                                </th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>



            <!-- configration Page -->
            <div class="configration tabcontent" id="configration">
                <h1 class="title">Server Configrations</h1>
                <form action="{{ route('storePost') }}" method="post">
                    @csrf
                    @if (session('postSuccess'))
                        <p class="success">{{ session('postSuccess') }}</p>
                    @endif
                    <div class="flex">
                        <input type="text" class="side" name="title" placeholder="Title" autocomplete="none">
                        <input type="text" name="command" placeholder="Commands (/skinbox,/tpr)" autocomplete="none">
                    </div>
                    <textarea name="post" id="post" cols="30" rows="7" placeholder="Message!"></textarea>
                    <button type="submit">Submit</button>
                </form>
                <h1 class="title">Commands Database</h1>
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Commands</th>
                        <th>Post</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->command }}</td>
                                <td>{{ $post->post }}</td>
                                <td><a href="#">Update</a></td>
                                <td>
                                    <form action="" method="post"><button type="submit">Delete</button></form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>NoData</td>
                            <td>NoData</td>
                            <td>NoData</td>
                            <td>NoData</td>
                            <td>NoData</td>
                        </tr>
                    @endif
                </table>
                <div class="pagination py-3">
                    {{ $posts->links() }}
                </div>
            </div>


            <!-- wipe&purge Page -->
            <div class="wipe_purge tabcontent" id="wipe_purge">
                <h1 class="title">Wipe & Purge Schedule</h1>
                <form action="{{ route('storeWipes') }}" method="post">
                    @csrf
                    @if (session('wipeSuccess'))
                        <p class="success">{{ session('wipeSuccess') }}</p>
                    @endif
                    
                    <div class="flex">
                        <input type="number" class="side" name="day" placeholder="Wipe Day" autocomplete="none">
                        <select name="month" id='month'>
                            <option value=''>--Select Wipe Month--</option>
                            <option selected value='Janaury'>Janaury</option>
                            <option value='February'>February</option>
                            <option value='March'>March</option>
                            <option value='April'>April</option>
                            <option value='May'>May</option>
                            <option value='June'>June</option>
                            <option value='July'>July</option>
                            <option value='August'>August</option>
                            <option value='September'>September</option>
                            <option value='October'>October</option>
                            <option value='November'>November</option>
                            <option value='December'>December</option>
                        </select>
                    </div>
                    @error('day')
                        {{ $message }}
                    @enderror
                    @error('month')
                        {{ $message }}
                    @enderror
                    <div class="flex">
                        <input type="number" class="side" name="p_day" placeholder="Purge Day" autocomplete="none">
                        <select name="p_month" id='month'>
                            <option value=''>--Select Purge Month--</option>
                            <option selected value='Janaury'>Janaury</option>
                            <option value='February'>February</option>
                            <option value='March'>March</option>
                            <option value='April'>April</option>
                            <option value='May'>May</option>
                            <option value='June'>June</option>
                            <option value='July'>July</option>
                            <option value='August'>August</option>
                            <option value='September'>September</option>
                            <option value='October'>October</option>
                            <option value='November'>November</option>
                            <option value='December'>December</option>
                        </select>
                    </div>
                    @error('p_day')
                        {{ $message }}
                    @enderror
                    @error('p_month')
                        {{ $message }}
                    @enderror
                    <div class="flex">
                        <select class="side" name="bp_wipe" id='month'>
                            <option value=''>Select BP Wipe Status</option>
                            <option value='no'>BP-No</option>
                            <option value='yes'>BP-Yes</option>
                        </select>
                        <select name="rp_wipe" id='month'>
                            <option value=''>Select RP Wipe Status</option>
                            <option value='no'>RP-No</option>
                            <option value='yes'>RP-Yes</option>
                        </select>
                    </div>
                    @error('bp_wipe')
                        {{ $message }}
                    @enderror
                    @error('rp_wipe')
                        {{ $message }}
                    @enderror
                    <input type="number" name="year" placeholder="Year">
                    @error('year')
                        {{ $message }}
                    @enderror
                    <button type="submit">Submit</button>
                    @if (session('wipeDeleteSuccess'))
                        <p class="success">{{ session('wipeDeleteSuccess') }}</p>
                    @elseif(session('wipeStatusSuccess'))
                        <p class="success">{{ session('wipeStatusSuccess') }}</p>
                    @endif
                </form>
                <h1 class="title">Wipe & Purge Database</h1>
                <table>
                    <tr>
                        <th>Wipe Day</th>
                        <th>Purge Day</th>
                        <th>Blueprints Wipe</th>
                        <th>RP Wipe</th>
                        <th>Year</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @if ($wipes->count())
                        @foreach ($wipes as $wipe)
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
                                <td>
                                    <form action="{{ route('wipeStatus', $wipe->id) }}" method="post">
                                        @csrf
                                        <select name="status" id="status" onchange="this.form.submit()">
                                            <option value="{{ $wipe->status }}">{{ $wipe->status }}</option>
                                            <option value="pending">Pending</option>
                                            <option value="wiped">Wiped</option>
                                            <option value="active">Active</option>
                                        </select>
                                    </form>
                                </td>
                                <td><a href="#">Update</a></td>
                                <td>
                                    <form action="{{ route('wipeDelete', $wipe->id) }}" method="post"> @csrf
                                        @method('DELETE')<button type="submit">Delete</button></form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td>NoData</td>
                        <td>NoData</td>
                        <td>NoData</td>
                        <td>NoData</td>
                        <td>NoData</td>
                        <td>NoData</td>
                        <td>NoData</td>
                        <td>NoData</td>
                    </tr>
                    @endif
                </table>
                <div class="pagination py-3">
                    {{ $wipes->links() }}
                </div>
            </div>



            <!-- Rules Page -->
            <div class="rules tabcontent" id="rules">
                <h1 class="title">Server Rules</h1>
                <form action="{{ route('storeRule') }}" method="post">
                    @csrf
                    @if (session('ruleSuccess'))
                        <p class="success">{{ session('ruleSuccess') }}</p>
                    @endif
                    <textarea name="reason" id="reason" cols="30" rows="7" placeholder="Ban Reason"></textarea>
                    <select name="period" id='period'>
                        <option value='permanent'>Permanent</option>
                        <option value='not a ban'>Not a Ban</option>
                    </select>
                    <button type="submit">Submit</button>
                </form>
                <h1 class="title">Rules Database</h1>
                <table>
                    <tr>
                        <th>Reson</th>
                        <th>Period</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @if ($rules->count())
                    @foreach ($rules as $rule)
                    <tr>
                        <td>{{ $rule->reason }}</td>
                        <td>{{ $rule->period }}</td>
                        <td><a href="#">Update</a></td>
                        <td>
                            <form action="{{ route('deleteRule', $rule->id) }}" method="post">@csrf @method('DELETE') <button type="submit">Delete</button></form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <td>No Data</td>
                            <td>No Data</td>
                            <td>No Data</td>
                            <td>No Data</td>
                        </tr>
                    @endif
                </table>
                <div class="pagination py-3">
                    {{ $rules->links() }}
                </div>
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

<script src="{{ asset('js/parallax/parallax.min.js') }}"></script>

<script>
    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>

</html>