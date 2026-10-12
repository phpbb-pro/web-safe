<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('desc')">
    <link href="{{ mix('css/blog.css') }}" rel="stylesheet">
    @if (config('services.analytics.site_id'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ urlencode(config('services.analytics.site_id')) }}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', @json(config('services.analytics.site_id')));
    </script>
    @endif
  </head>
  <body>
      <nav>
        <a href="{{ route('index') }}" class="backlink">← Back</a>
      </nav>

      @yield('content')
  </body>
</html>
