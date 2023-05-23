<header>
    <div class="left">
        <a href="/">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc logos">
        </a>
    </div>
    <nav class="right">
        <ul class="header-nav">
            <li class="
            @php if ($activePage == 'characters' ) {
                echo "active";
            } @endphp
            ">
                <a href="/characters">CHARACTERS</a>
            </li>
            <li class="
            @php if ($activePage == 'comics' ) {
                echo "active";
            } @endphp
            ">
                <a href="/">COMICS</a>
            </li>
            <li class="
            @php if ($activePage == 'movies' ) {
                echo "active";
            } @endphp
            ">
                <a href="/movies">MOVIES</a>
            </li>
            <li class="
            @php if ($activePage == 'tv' ) {
                echo "active";
            } @endphp
            ">
                <a href="/tv">TV</a>
            </li>
            <li class="
            @php if ($activePage == 'games' ) {
                echo "active";
            } @endphp
            ">
                <a href="/games">GAMES</a>
            </li>
            <li class="
            @php if ($activePage == 'collectibles' ) {
                echo "active";
            } @endphp
            ">
                <a href="/collectibles">COLLECTIBLES</a>
            </li>
            <li class="
            @php if ($activePage == 'videos' ) {
                echo "active";
            } @endphp
            ">
                <a href="/videos">VIDEOS</a>
            </li>
            <li class="
            @php if ($activePage == 'fans' ) {
                echo "active";
            } @endphp
            ">
                <a href="/fans">FANS</a>
            </li>
            <li class="
            @php if ($activePage == 'news' ) {
                echo "active";
            } @endphp
            ">
                <a href="/news">NEWS</a>
            </li>
            <li class="
            @php if ($activePage == 'shop' ) {
                echo "active";
            } @endphp
            ">
                <a href="/shop">SHOP</a>
            </li>
        </ul>
    </nav>
</header>