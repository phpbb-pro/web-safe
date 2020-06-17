@extends('forms.layout')

@section('title', 'Demo | phpBB Forms Extension')

@section('content')
  <main class="with-bottom-padding">
    <h1 class="center-header__header">Demo</h1>
    <p class="center-header__text">A demo is worth a thousand words.<br>You can create forms in ACP as admin and see them in action as user right away.</p>
    <p class="center-header__text"><a class="button" target="_blank" href="https://demo.phpbb.pro/forms/">Launch demo</a></p>
  </main>

  @component('forms.components.cta', ['noDemo' => true])@endcomponent
@endsection
