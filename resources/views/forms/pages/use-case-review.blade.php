@extends('_layouts.silverlike')

@section('title', 'Review use case | phpBB Forms Extension')
@section('desc', 'Lead your users to create valuable and comprehensive reviews effortlessly by using phpBB Forms extension.')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Review</h1>
    <p class="center-header__text">Lead your users to create valuable and comprehensive reviews effortlessly.</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to collect the reviews. Most probably, you want the forum to be public so users can read each others reviews.</li>
      <li>Consider setting <em>Replace posting page</em> to <em>Yes</em> to help your reviewers write more comprehensive reviews.</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to educate your users on how to write good review.</li>
          <li>Use <em>Text Field</em> to let user write down the reviewed title or use <em>Select</em> for predefined set of allowed titles.</li>
          <li>Utilize <em>Select</em>/<em>Radio</em> for rating on scale 1-5. Use <em>Explanation</em> field to describe what every value means. Optionally, mark the input <em>required</em> to ensure every review contains a rating.<br>Pro tip: Use title and rating as topic title.</li>
          <li>If applicable, use <em>Text Field</em> of type <em>URL</em> to link the review to IMDB/goodreads/etc.</li>
          <li>Use <em>Select</em> with multiple options for categorizing the review with tags such as genre, length, etc.</li>
          <li>Use <em>Radio</em> to mark review containing spoilers.</li>
          <li>Finally, use <em>Text Area</em> to let user write down review details. You can also split this to multiple textareas with specific content such as <em>pros</em>, <em>cons</em>, <em>characters</em>, <em>music</em>, etc. Usually, at least one textarea should be <em>required</em>.</li>
        </ol>
      </li>
      <li>Build a form template. For the best reading experience, just stack the <em>[b]input name[/b]: input value</em> below each other with <em>Text Area</em> values as last because they can contain multiple lines.</li>
      <li>Save the form. <em>New topic</em> buttons in the selected forum will automatically display the form if you enabled <em>Replace posting page</em>. Otherwise, copy the form link and paste it to your menu or announcement.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
