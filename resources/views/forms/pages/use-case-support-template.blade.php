@extends('_layouts.silverlike')

@section('title', 'Support template use case | phpBB Forms Extension')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Support template</h1>
    <p class="center-header__text">Gather all the information at once. No follow-up questions needed anymore!</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to collect the support requests. Usually, you want the forum to be publicly visible so others can search for solutions before posting new request.</li>
      <li>Make sure to set <em>Replace posting page</em> to <em>Yes</em> to ensure no-one bypasses the form.</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to ensure your users that you are here for them while they struggle.</li>
          <li>Utilize <em>Select</em>/<em>Radio</em> for product version, OS, and/or other information with predefined values. Use <em>Explanation</em> field to help them find the information. Make the inputs <em>required</em> to ensure you don't need to ask follow-up questions.</li>
          <li>If applicable, use <em>Text Field</em> of type <em>URL</em> to gather user URL.</li>
          <li>Make use of <em>Text Field</em> of type <em>Date(time)</em> to collect time information of the last incident.</li>
          <li>Use <em>Radio</em> for Yes/No questions that help you narrow down the problem.</li>
          <li>If users aren't required to be registered, collect email and/or tel using designated <em>Text Field</em> types.</li>
          <li>Finally, use <em>Text Area</em> to let user describe the problem in detail. Be sure to mark it optional.</li>
        </ol>
      </li>
      <li>Build a form template. For the best reading experience, just stack the <em>[b]input name[/b]: input value</em> below each other with <em>Text Area</em> value as last because it can contain multiple lines.</li>
      <li>Save the form. <em>New topic</em> buttons in the selected forum will automatically display the form.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
