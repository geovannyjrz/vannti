<html>
    <head>
        <title>vannTI - @yield('title')</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ url('/css/materialize.min.css') }}"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        @section('sidebar')
            <header>
            <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
            </header>
        @show

        <div class="container">
            @yield('content')
        </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{ url('/js/materialize.min.js') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var navbar = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(navbar);
  });
  </script>
    </body>
</html>