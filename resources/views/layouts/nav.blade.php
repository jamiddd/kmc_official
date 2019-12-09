<ul id="dropdown-account" class="dropdown-content">
    <li><a href="#!" class="nav-link-bold-drop">VARIABLES</a></li>
    <li><a href="#!" class="nav-link-bold-drop">SETTINGS</a></li>
    <li class="divider"></li>
    <li><a href="#!" class="nav-link-bold-drop">LOGOUT</a></li>
</ul>

<ul id="dropdown-academics" class="dropdown-content">
    <li><a href="/courses" class="nav-link-bold-drop">COURSES</a></li>
    <li><a href="/rules" class="nav-link-bold-drop">RULES</a></li>
</ul>

<nav>
    <div class="nav-wrapper grey darken-4">
        <a href="/" class="brand-logo kmc hide-on-med-and-down">Kamrup Metropolitan College</a>
        <a href="/" class="brand-logo hide-on-large-only kmc-small-and-medium">KMC</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/about" class="nav-link-bold">ABOUT</a></li>
            <li><a href="/timeline" class="nav-link-bold">TIMELINE</a></li>
            <li><a href="/timeline"class="nav-link-bold">CONTACT</a></li>
            <li><a class="dropdown-trigger nav-link-bold" data-target="dropdown-academics" href="#!">ACADEMICS</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger nav-link-bold" href="#!" data-target="dropdown-account">ACCOUNT</a></li>
        </ul>
    </div>
</nav>
<ul id="slide-out" class="sidenav">
    <li>
        <a class="waves-effect pink accent-3 white-text center" href="/admission">APPLY NOW</a>
    </li>
    <li><a id="about" href="/about">About</a></li>
    <li><a id="timeline" href="/timeline">Timeline</a></li>
    {{-- <li><a id="academics" href="/academics">Academics</a></li> --}}
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header" style="padding-left:30px;">Academics<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul class="grey lighten-5">
                <li><a style="padding-left:40px;" href="/courses">Courses</a></li>
                <li><a style="padding-left:40px;" href="/rules">Rules</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
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
    });

    // $(document).ready(function() {

    // })
</script>
