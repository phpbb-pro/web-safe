@extends('_layouts.silverlike')

@section('title', 'Application form use case | phpBB Forms Extension')
@section('desc', 'Collect all the required data from your applicants without missing anything by using phpBB Forms extension.')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Application form</h1>
    <p class="center-header__text">Collect all the required data from your applicants without missing anything.</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to collect the applications. Usually, you want the forum to be hidden so team-only discussion can be performed before the final decision.</li>
      <li>Choose a nice form URL to give it more credibility (<em>extended</em> and <em>reseller</em> license only).</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to inform all the applicants about the terms and conditions. You can also include some positive words to encourage them to fill in the form (as it may be long!)</li>
          <li>Utilize <em>Text Field</em> to gather necessary personal data such as name, location, etc.</li>
          <li>Make use of <em>Select</em>/<em>Radio</em> to collect predefined values like seniority and others.</li>
          <li>If applicable, use <em>Text Field</em> of type <em>URL</em> to gather user URL.</li>
          <li>Finally, use <em>Text Area</em> to let user write down the motivation or other important information.</li>
        </ol>
      </li>
      <li>Build a form template. For the best reading experience, just stack the <em>[b]input name[/b]: input value</em> below each other with <em>Text Area</em> value as last because it can contain multiple lines.</li>
      <li>Save the form. Grab the form URL and post it where your applicants usually are. A good place can be in a menu, a global announcement, the <a href="https://www.phpbb.com/customise/db/extension/boardannouncements/" target="_blank" rel="noopener noreferrer">Board Announcements</a> extension or <a href="https://www.phpbb.com/customise/db/extension/massnotification/" target="_blank" rel="noopener noreferrer">Mass notification</a> extension.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
