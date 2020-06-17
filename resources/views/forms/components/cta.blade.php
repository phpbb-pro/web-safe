<section class="cta">
  <h2 class="cta__title">Make your members more confident<br>while they create new topics</h2>

  <p class="center-header__text">
    <a class="button" href="{{ route('forms/pricing') }}">Buy now</a>
    @if (!isset($noDemo))
      or <a href="{{ route('forms/demo') }}" class="cta__secondary">try demo</a>
    @endif
  </p>
</section>
