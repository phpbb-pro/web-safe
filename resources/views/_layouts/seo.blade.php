<!doctype html>
<html lang="en-US">
  <head>
    @if (config('services.analytics.proxy_id'))
    <script>
      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', @json(config('services.analytics.proxy_id')), 'auto');
      ga('set', 'anonymizeIp', true);

      ga('require', 'cleanUrlTracker');
      ga('require', 'impressionTracker');
      ga('require', 'maxScrollTracker');
      ga('require', 'mediaQueryTracker');
      ga('require', 'outboundLinkTracker');
      ga('require', 'pageVisibilityTracker');

      ga('send', 'pageview');
    </script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
    <script async src="{{ mix('js/seo/autotrack.js') }}"></script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://phpbb.pro/httpproxy/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/seo.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">

    <meta name="description" content="phpBB Mixed Content Fixer Extension prevents Mixed-content errors by replacing HTTP images with secure HTTPS proxy.">
    <title>phpBB Mixed Content Fixer</title>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-expand-lg fixed-top custom-navbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon ion-md-menu"></span>
      </button>
      <span class="nav-logo-mobile"><span class="blue">phpBB</span> Mixed Content <b>Fixer</b></span>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="container">
          <span class="nav-logo-desktop"><span class="blue">phpBB</span> Mixed Content <b>Fixer</b></span>
          @if (!View::hasSection('without-menu'))
            <ul class="navbar-nav ml-auto nav-right" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
              <li class="nav-item nav-custom-link">
              <a class="nav-link" href="#hero" title="Go to homepage.">Home <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
              </li>
              <li class="nav-item nav-custom-link">
              <a class="nav-link" href="#explanation" title="See explanation of the problem and how the extension solves it.">Explanation <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
              </li>
              <li class="nav-item nav-custom-link">
              <a class="nav-link" href="#demo" title="See demo of the extension.">Demo <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
              </li>
              <li class="nav-item nav-custom-link">
              <a class="nav-link" href="#pricing" title="See pricing options.">Pricing <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
              </li>
              <li class="nav-item nav-custom-link btn btn-demo-small">
              <a class="nav-link" href="#pricing" title="Buy Mixed Content Fixer Extension now.">Buy now <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
              </li>
            </ul>
          @endif
        </div>
      </div>
    </nav>
    
    @yield('content')

    <footer>
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-xs-12 offset-md-6">
          <small>{{ date('Y') }} &copy; All rights reserved. Template by <a href="https://www.behance.net/gallery/67279127/The-Seo-Company-Free-PSD-Template" target="blank">Diego Velázquez</a>.</small>
        </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
      var parts = ['bWFpbHRvOmNvbnRhY3RAZXhhbXBsZS5pbnZhbGlk'];
      document.querySelectorAll('.contact-btn').forEach(function(elem) {
        elem.href = parts.map(atob).join('') + '?subject=' + elem.dataset.subject;
      });
    </script>
  </body>
</html>
