@extends('_layouts.silverlike')

@section('title', 'Advertisement use case | phpBB Forms Extension')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Advertisement</h1>
    <p class="center-header__text">Make sure your advertisers input every important detail of the offer.</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to collect the ads. Make the forum public so other users can read and react to ads.</li>
      <li>Consider setting <em>Replace posting page</em> to <em>Yes</em> to create a consistency across the ads.</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to educate your users on how to post a good ad.</li>
          <li>Use <em>Text Field</em> to let user give an ad a title.<br>Pro tip: Use title as a topic title.</li>
          <li>Utilize <em>Select</em>/<em>Radio</em> for ad category definition. Use <em>Explanation</em> field to describe what every value means. Mark the input <em>required</em> to ensure every ad contains a category.</li>
          <li>If applicable, use <em>Text Field</em> of type <em>URL</em> to let your users attach an image. Later on, use <code>[img]</code> BBCode in form template to display the image.</li>
          <li>Use <em>Select</em> with multiple options for classify the ad with tags such as age, length, whatever matches your case.</li>
          <li>Use <em>Text Field</em> of type <em>Number</em> to specify a price.</li>
          <li>Finally, use <em>Text Area</em> to let user write down ad details. You can also split this to multiple textareas with specific content such as <em>description</em>, <em>contact details</em>, etc. Usually, at least one textarea should be <em>required</em>.</li>
        </ol>
      </li>
      <li>Build a form template. For the best reading experience, just stack the <em>[b]input name[/b]: input value</em> below each other with <em>Text Area</em> values as last because they can contain multiple lines.</li>
      <li>Save the form. <em>New topic</em> buttons in the selected forum will automatically display the form if you enabled <em>Replace posting page</em>. Otherwise, copy the form link and paste it to your menu or announcement.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
