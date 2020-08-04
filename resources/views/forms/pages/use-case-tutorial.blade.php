@extends('_layouts.silverlike')

@section('title', 'Tutorial use case | phpBB Forms Extension')
@section('desc', 'Assist your authors by providing a solid framework for elaborate tutorials by using phpBB Forms extension.')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Tutorial</h1>
    <p class="center-header__text">Assist your authors by providing a solid framework for elaborate tutorials.</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to list the tutorials. Usually, you want the forum to be publicly visible so others can read tutorials.</li>
      <li>Possibly set <em>Replace posting page</em> to <em>Yes</em> to ensure no-one bypasses the form. You can also set it to <em>No</em> to give your authors a freedom in expressing themselves.</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to describe the best practices. Encourage your authors to create comprehensive, yet short tutorials.</li>
          <li>Think of questions/information that are specific to tutorials bound to your board theme. Make sure to use separate input for each of these. Use the best fitting input type to guide them through the form.</li>
        </ol>
      </li>
      <li>Build a form template. Give it enough time to build a really easy-to-read format.</li>
      <li>Save the form. <em>New topic</em> buttons in the selected forum will automatically display the form if you've set <em>Replace posting page</em> to <em>Yes</em>. If not, place a form link somewhere your authors are, such as a private author's forum.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
