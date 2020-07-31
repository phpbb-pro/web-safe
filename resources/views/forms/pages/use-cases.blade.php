@extends('_layouts.silverlike')

@section('title', 'Use Cases | phpBB Forms Extension')

@section('content')
  <main class="with-bottom-padding">
    <h1 class="center-header__header">Use Cases</h1>
    <p class="center-header__text">phpBB Forms extension can be used in endless creative ways. However, for convenience, here you can see some common use-cases for inspiration.</p>

    <div class="use-cases">
      <article class="use-cases__case">
        <i class="fa fa-database" aria-hidden="true"></i>
        <h3>Collect data</h3>
        <p>Manage event registration, conduct a survey or entertain with a test.</p>
        <p><a href="{{ route('forms/use-case-collect-data') }}">Read more</a></p>
      </article>

      <article class="use-cases__case">
        <i class="fa fa-life-ring" aria-hidden="true"></i>
        <h3>Support template</h3>
        <p>Gather all the information at once. No follow-up questions needed anymore!</p>
        <p><a href="{{ route('forms/use-case-support-template') }}">Read more</a></p>
      </article>

      <article class="use-cases__case">
        <i class="fa fa-commenting" aria-hidden="true"></i>
        <h3>Review</h3>
        <p>Lead your users to create valuable and comprehensive reviews effortlessly.</p>
        <p><a href="{{ route('forms/use-case-review') }}">Read more</a></p>
      </article>

      <article class="use-cases__case">
        <i class="fa fa-address-book" aria-hidden="true"></i>
        <h3>Application form</h3>
        <p>Collect all the required data from your applicants without missing anything.</p>
        <p><a href="{{ route('forms/use-case-application-form') }}">Read more</a></p>
      </article>

      <article class="use-cases__case">
        <i class="fa fa-bug" aria-hidden="true"></i>
        <h3>Report issue</h3>
        <p>Help even your inexperienced users fill in bug or security report properly.</p>
        <p><a href="{{ route('forms/use-case-report-issue') }}">Read more</a></p>
      </article>

      <article class="use-cases__case">
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <h3>Request form</h3>
        <p>Ensure your requesters fill in a solid and informative enquiry.</p>
        <p><a href="{{ route('forms/use-case-request-form') }}">Read more</a></p>
      </article>

      <article class="use-cases__case">
        <i class="fa fa-microphone" aria-hidden="true"></i>
        <h3>Introduction</h3>
        <p>Welcome your newbies by composing beautiful introduction with minimum info.</p>
        <p><a href="{{ route('forms/use-case-introduction') }}">Read more</a></p>
      </article>

      <article class="use-cases__case">
        <i class="fa fa-percent" aria-hidden="true"></i>
        <h3>Advertisement</h3>
        <p>Make sure your advertisers input every important detail of the offer.</p>
        <p><a href="{{ route('forms/use-case-advertisement') }}">Read more</a></p>
      </article>

      <article class="use-cases__case">
        <i class="fa fa-play-circle" aria-hidden="true"></i>
        <h3>Tutorial</h3>
        <p>Assist your authors by providing a solid framework for elaborate tutorials.</p>
        <p><a href="{{ route('forms/use-case-tutorial') }}">Read more</a></p>
      </article>
    </div>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
