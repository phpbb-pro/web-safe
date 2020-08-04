<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="print" onload="this.media='all'">
    <link href="{{ mix('css/silverlike.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="wrap">
      <header class="header">
        <nav class="nav">
          <ul class="menu">
            <li class="menu__item menu__item--logo"><a href="{{ route('forms/') }}"><i class="fa fa-home" aria-hidden="true"></i> <span>phpBB</span> <strong>Forms</strong> Extension</a></li>
            <li class="menu__item"><a href="{{ route('forms/') }}#features"><i class="fa fa-star-o" aria-hidden="true"></i> Features</a></li>
            <li class="menu__item"><a href="{{ route('forms/demo') }}"><i class="fa fa-laptop" aria-hidden="true"></i> Demo</a></li>
            <li class="menu__item">
              <a href="{{ route('forms/use-cases') }}"><i class="fa fa-search" aria-hidden="true"></i> Use Cases</a>
              <div class="menu__submenu-wrapper">
                <ul class="menu__submenu">
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-collect-data') }}"><i class="fa fa-database" aria-hidden="true"></i> Collect data</a></li>
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-support-template') }}"><i class="fa fa-life-ring" aria-hidden="true"></i> Support template</a></li>
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-review') }}"><i class="fa fa-commenting-o" aria-hidden="true"></i> Review</a></li>
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-application-form') }}"><i class="fa fa-address-book-o" aria-hidden="true"></i> Application form</a></li>
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-report-issue') }}"><i class="fa fa-bug" aria-hidden="true"></i> Report issue</a></li>
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-request-form') }}"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Request form</a></li>
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-introduction') }}"><i class="fa fa-microphone" aria-hidden="true"></i> Introduction</a></li>
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-advertisement') }}"><i class="fa fa-percent" aria-hidden="true"></i> Advertisement</a></li>
                  <li class="menu__submenu-item"><a href="{{ route('forms/use-case-tutorial') }}"><i class="fa fa-play-circle" aria-hidden="true"></i> Tutorial</a></li>
                </ul>
              </div>
            </li>
            <li class="menu__item"><a href="{{ route('forms/faq') }}"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a></li>
            <li class="menu__item"><a href="{{ route('forms/pricing') }}"><i class="fa fa-usd" aria-hidden="true"></i> Pricing</a></li>
            <li class="menu__item"><a href="{{ route('forms/pricing') }}"><strong>Buy now</strong></a></li>
          </ul>
        </nav>
      </header>

      @yield('content')

      <footer class="footer">
        © All rights reserved • {{ date('Y') }}
        @yield('footer-extra')
      </footer>
    </div>

    <script src="{{ mix('js/silverlike/app.js') }}" defer></script>
  </body>
</html>
