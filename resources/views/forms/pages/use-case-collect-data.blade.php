@extends('_layouts.silverlike')

@section('title', 'Collect data use case | phpBB Forms Extension')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Collect data</h1>
    <p class="center-header__text">Manage event registration, conduct a survey or entertain with a test.</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to collect the responses. Usually, you want the forum to be hidden so only you (or your team) can analyze/postprocess the data.</li>
      <li>Make sure to set <em>Replace posting page</em> to <em>No</em> to ensure even users who don't have permission to post into the forum can participate.</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to give your users an intro, rules or any kind of other important information. You can use multiple <em>Paragraphs</em> throughout the form if you see fit.</li>
          <li>If users aren't required to be registered, collect email and/or tel using designated <em>Text Field</em> types.</li>
          <li>For the rest of the form, use your creativity! Don't forget to use every available input type to guide your users as much as possibe. For example use <em>URL Text Field</em> type to collect links, <em>Radio Group</em> to select from one of predefined options, etc.</li>
        </ol>
      </li>
      <li>Build a form template. For the best reading experience, just stack the <em>[b]input name[/b]: input value</em> below each other. But you can also compose a table or any other template that will make it easy and fast to scan the data.</li>
      <li>Save the form. Grab the form URL and post it where your potential participants usually are. A good place can be in a menu, a global announcement, the <a href="https://www.phpbb.com/customise/db/extension/boardannouncements/" target="_blank" ref="noopener noreferrer">Board Announcements</a> extension or <a href="https://www.phpbb.com/customise/db/extension/massnotification/" target="_blank" ref="noopener noreferrer">Mass notification</a> extension.</li>
      <li>Wait for the responses to come and process the data. Note that the data are always linked to the registered participant which may help you a lot with deep-understanding of the response.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
