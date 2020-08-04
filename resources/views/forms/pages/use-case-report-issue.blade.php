@extends('_layouts.silverlike')

@section('title', 'Report issue use case | phpBB Forms Extension')
@section('desc', 'Help even your inexperienced users fill in bug or security report properly by using phpBB Forms extension.')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Report issue</h1>
    <p class="center-header__text">Help even your inexperienced users fill in bug or security report properly.</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to collect the applications. Depending on the severity, make forum public (for bug reports) or private (for security reports).<br>Pro tip: Use <a href="https://www.phpbb.com/customise/db/extension/readotherstopics/" target="_blank" ref="noopener noreferrer">Read other's topics Permission</a> extension to make even forum for security reports public.</li>
      <li>Make sure to set <em>Replace posting page</em> to <em>Yes</em> to ensure no-one bypasses the form.</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to inform users on how to compose a useful report. If the form collects a security reports, this is a good place to inform about bounty program.</li>
          <li>Utilize <em>Select</em>/<em>Radio</em> for product version, OS, and/or other information with predefined values. Use <em>Explanation</em> field to help them find the information. Make the inputs <em>required</em> to ensure you don't need to ask follow-up questions.</li>
          <li>If applicable, use <em>Text Field</em> of type <em>URL</em> to gather user URL.</li>
          <li>Make use of <em>Text Field</em> of type <em>Date(time)</em> to collect time information of the last incident.</li>
          <li>If users aren't required to be registered, collect name, email and/or tel using designated <em>Text Field</em> types.</li>
          <li>Finally, use <em>Text Area</em> to let user write down the steps needed to replicate the problem. Be sure to mark it required. You can also add another <em>Text Area</em> for additional notes.</li>
        </ol>
      </li>
      <li>Build a form template. For the best reading experience, just stack the <em>[b]input name[/b]: input value</em> below each other with <em>Text Area</em> value(s) as last because they can contain multiple lines.</li>
      <li>Save the form. <em>New topic</em> buttons in the selected forum will automatically display the form.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
