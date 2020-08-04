@extends('_layouts.silverlike')

@section('title', 'Request form use case | phpBB Forms Extension')
@section('desc', 'Ensure your requesters fill in a solid and informative enquiry by using phpBB Forms extension.')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Request form</h1>
    <p class="center-header__text">Ensure your requesters fill in a solid and informative enquiry.</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to collect the requests. Depending on the request type, make forum public or private.</li>
      <li>Make sure to set <em>Replace posting page</em> to <em>Yes</em> to ensure no-one bypasses the form.</li>
      <li>Choose a nice form URL to give the form more credibility if your selected forum is private, because this will be the only location where the form is visible (<em>extended</em> and <em>reseller</em> license only).</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to inform everyone about the terms and conditions.</li>
          <li>Utilize <em>Select</em>/<em>Radio</em> for information with predefined values. Make the inputs <em>required</em> to ensure you don't need to ask follow-up questions.</li>
          <li>If applicable, use <em>Text Field</em> of type <em>URL</em> to gather user URL.</li>
          <li>Use <em>Radio</em> for Yes/No questions that help you narrow down your understading of the request.</li>
          <li>If users aren't required to be registered, collect name, email and/or tel using designated <em>Text Field</em> types.</li>
          <li>When applicable, use <em>Text Field</em> of type <em>number</em> to collect max accepted price. Alternatively, you can use <em>Select</em> to group the prices into categories.</li>
          <li>Finally, use <em>Text Area</em> to let user write down the details. Usually, you want to mark this <em>required</em>.</li>
        </ol>
      </li>
      <li>Build a form template. For the best reading experience, just stack the <em>[b]input name[/b]: input value</em> below each other with <em>Text Area</em> value as last because it can contain multiple lines.</li>
      <li>Save the form. If the forum is public, <em>New topic</em> buttons in the selected forum will automatically display the form. It is also a good practice to publish the form link somewhere else, e.g. a menu. This is especially important when the forum is private.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
