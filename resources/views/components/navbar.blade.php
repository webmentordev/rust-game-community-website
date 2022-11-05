<div class="nav">
    <div class="container">
        <a href="/"><img src="https://files.facepunch.com/lewis/1b2911b1/rust-marque.svg" alt="Rust Marque Logo"></a>
        <ul>
            <a href="/#about">About</a>
            <a href="/#commands">Commands</a>
            <a href="/#staff">Staff</a>
            <a href="/wipe">Wipe</a>
            <a href="/rules">Rules</a>
            @guest
                <a class="btn" href="{{ route('login') }}">Login</a>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth
        </ul>
    </div>
</div>