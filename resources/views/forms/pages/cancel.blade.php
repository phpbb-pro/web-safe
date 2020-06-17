@extends('forms.layout')

@section('title', 'Demo | phpBB Forms Extension')

@section('content')
  <main class="with-bottom-padding">
    <h1 class="center-header__header">Oh no!</h1>
    <p class="center-header__text">
      Did you change your mind? Why don't you <a class="contact-btn" href="mailto:mailto:contact@example.invalid?subject=phpBB%20%7C%20Forms%20special%20inquiry">contact an author</a> with your special inquiry?<br><br>
      Was it a mistake? Don't worry, just <a href="{{ route('forms/pricing') }}">repeat the process</a> by selecting your license again.
    </p>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
