@extends('_layouts.silverlike')

@section('title', 'Introduction use case | phpBB Forms Extension')

@section('content')
  <p><a class="use-case__backlink" href="{{ route('forms/use-cases') }}">See all use cases</a></p>

  <main class="use-case">
    <h1 class="center-header__header">Introduction</h1>
    <p class="center-header__text">Welcome your newbies by composing beautiful introduction with minimum info.</p>

    <h2 class="use-case__how-title">How can you do this?</h2>
    <ol class="use-case__how-list">
      <li>Create a new form in ACP -> Extensions -> Forms.</li>
      <li>Select a forum where you want to expose the intro. Usually, you want the forum to be publicly visible so others can read new intros and give a warm welcome by replying to it.</li>
      <li>Possibly set <em>Replace posting page</em> to <em>Yes</em> to ensure no-one bypasses the form. You can also set it to <em>No</em> to give your newbies a freedom in expressing themselves.</li>
      <li>
        Compose the form:
        <ol>
          <li>Use <em>Paragraph</em> on top to encourage your newbies to include as much personal info as possible so they can easier integrate into the community.</li>
          <li>Think of questions/information that are specific to your board. Make sure to use separate input for each of these. Newbies usually don't know what depth of information you expect. Help them narrow down the expectations. Use the best fitting input type to guide them through the form. They may be kind of lost and shy!</li>
          <li>Finally, use <em>Text Area</em> to let them express what they want. It is often a great opportunity to understand their personalities.</li>
        </ol>
      </li>
      <li>Build a form template. For the best reading experience, just stack the <em>[b]input name[/b]: input value</em> below each other with <em>Text Area</em> value as last because it can contain multiple lines.</li>
      <li>Save the form. <em>New topic</em> buttons in the selected forum will automatically display the form if you've set <em>Replace posting page</em> to <em>Yes</em>. If not, place a form link somewhere your newbies are. It is a great idea to post it to <a href="https://www.phpbb.com/customise/db/extension/private_message_welcome/" target="_blank" ref="noopener noreferrer">Private welcome message</a>.</li>
    </ol>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
