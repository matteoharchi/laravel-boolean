<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img class="navbar-logo" src="https://www.boolean.careers/images/misc/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{url()->current() == route('StaticPage.home') ? 'active' : ''}} ">
                <a class="nav-link" href="{{route('StaticPage.home')}}">Home</a>
            </li>
            <li class="nav-item {{url()->current() == route('Student.studenti') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('Student.studenti')}}">Studenti</a>
            </li>
            <li class="nav-item {{url()->current() == route('StaticPage.contatti') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('StaticPage.contatti')}}">Contatti</a>
            </li>
        </ul>
    </div>
</nav>

</header>