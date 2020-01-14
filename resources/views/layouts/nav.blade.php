<ul id="dropdown-academics" class="dropdown-content">
    <li><a href="/courses" class="nav-link-bold-drop" tabindex="0">COURSES</a></li>
    <li><a href="/rules" class="nav-link-bold-drop" tabindex="1">RULES</a></li>
    <li><a href="/fees" class="nav-link-bold-drop" tabindex="2">FEE STRUCTURE</a></li>
</ul>

<ul id="dropdown-account-auth" class="dropdown-content">
    <li><a href="/home" class="nav-link-bold-drop" tabindex="0">DASHBOARD</a></li>
    <li><a href="{{ route('logout') }}" style="text-transform:capitalize;" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="nav-link-bold-drop" tabindex="1">{{ __('Logout') }}</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    {{-- <li><a href="/fees" class="nav-link-bold-drop" tabindex="2">FEE STRUCTURE</a></li> --}}
</ul>

<ul id="dropdown-account" class="dropdown-content">
    <li><a href="{{ route('login') }}" class="nav-link-bold-drop">LOGIN OR REGISTER</a></li>
    {{-- <li><a href="/rules" class="nav-link-bold-drop">DASHBOARD</a></li> --}}
    {{-- <li><a href="/fees" class="nav-link-bold-drop">FEE STRUCTURE</a></li> --}}
</ul>

<nav style="z-index:4;">
    <div class="nav-wrapper grey darken-4">
        <a href="/" class="brand-logo kmc hide-on-med-and-down">Kamrup Metropolitan College</a>
        <a href="/" class="brand-logo hide-on-large-only kmc-small-and-medium">KMC</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       
        <ul class="right hide-on-med-and-down">
            <li><a href="/" class="nav-link-bold">HOME</a></li>
            <li><a href="/facilities" class="nav-link-bold">FACILITIES</a></li>
            <li><a href="/about" class="nav-link-bold">ABOUT</a></li>
            <li><a href="/gallery" class="nav-link-bold">GALLERY</a></li>
            <li><a class="dropdown-trigger nav-link-bold" data-target="dropdown-academics" href="#!">ACADEMICS</a></li>
            @guest
            <li><a href="#!" class="nav-link-bold dropdown-trigger" data-target="dropdown-account"><i
                class="material-icons">account_circle</i></a></li>
            @else
            <li class="nav-link-bold">
                <a id="navbarDropdown" style="text-transform:capitalize;" class="nav-link-bold dropdown-trigger" href="#!" data-target="dropdown-account-auth">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div> --}}
            </li>
            @endguest
            {{-- <li><a href="#!" class="nav-link-bold dropdown-trigger" data-target="dropdown-account"><i
                        class="material-icons">account_circle</i></a></li> --}}
            <!-- Dropdown Trigger -->
            @if (Auth::user() != null)
            @if (Auth::user()->user_type != "admin")
            <li><a class="dropdown-trigger nav-link-bold apply-btn" href="/application_requests/create">APPLY NOW</a>
            </li>  
            @else
              
            @endif 
            @else
            <li><a class="dropdown-trigger nav-link-bold apply-btn" href="/application_requests/create">APPLY NOW</a>
            </li>     
            @endif
            
        </ul>
    </div>
</nav>
<ul id="slide-out" class="sidenav">
    @guest
    <li>
        <a class="waves-effect blue accent-3 white-text center" href="{{ route('login') }}">LOGIN OR REGISTER</a>
    </li>
    @else
    <li><div class="user-view" style="margin-bottom:0px !important;" onclick="window.location.href = '/home'">
        <div class="background">
          <img src="../images/back.jpg" class="responsive-img" style="object-fit:cover;">
        </div>
        <a href="#user"><i class="white-text material-icons large">account_circle</i></a>
        {{-- <a href="#user"><img class="circle" src="../images/user.svg"></a> --}}
        <a href="#name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
        <a href="#email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
        {{-- <li><a href="/home" class="waves-effect" >Dashboard<i class="material-icons right">arrow_forward</i></a></li> --}}
      </div></li>
    @endguest
    <li>
        <a class="waves-effect black-text center" style="background-color:#eeff41;" href="/application_requests/create">APPLY NOW</a>
    </li>
    <li><a class="waves-effect" id="home" href="/">Home</a></li>
    <li><a class="waves-effect" id="facilities" href="/facilities">Facilites</a></li>
    <li><a class="waves-effect" id="about" href="/about">About</a></li>
    <li><a class="waves-effect" id="gallery" href="/gallery">Gallery</a></li>
    {{-- <li><a id="academics" href="/academics">Academics</a></li> --}}
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion" style="margin-bottom:0px !important;">
            <li>
                <a class="waves-effect collapsible-header" style="padding-left:30px;">Academics<i
                        class="material-icons right">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul class="grey lighten-5">
                        <li><a class="waves-effect" style="padding-left:40px;" href="/courses">Courses</a></li>
                        <li><a class="waves-effect" style="padding-left:40px;" href="/rules">Rules</a></li>
                        <li><a class="waves-effect" style="padding-left:40px;" href="/fees">Fee Structure</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    @guest
    @else
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="{{ route('logout') }}" style="text-transform:capitalize;" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">{{ __('Logout') }} <i class="material-icons right">exit_to_app</i></a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    @endguest
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Contact</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>

<script>
    $( document ).ready(function() {
        $(".dropdown-trigger").dropdown({
            alignment: 'right',
            autoTrigger: true,
            constrainWidth: false,
            coverTrigger: false,
            hover: false,
            closeOnClick: true
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, {
            edge: 'left',
            draggable: true,
            preventScrolling: true
        });

        var navLinkBold = document.querySelectorAll('.nav-link-bold');
    });



    // $(document).ready(function() {

    // })
</script>