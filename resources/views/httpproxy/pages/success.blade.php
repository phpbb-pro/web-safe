@extends('httpproxy.layout')

@section('without-menu', true)

@section('content')
  <section id="success">
    <div class="container">
      <div class="title-block">
      <h2>Awesome!</h2>
      <p>
        Your copy of Mixed Content Fixer Extension is on it's way to you.<br><br>
        Please, allow up to 1 hour to deliver the extension to you. If you have any questions, <a class="contact-btn" href="#" data-subject="Question%20about%20phpBB%20Mixed%20Content%20Fixer%20extension">contact author</a>.<br><br>
        Now sit down and enjoy, you have done a great decision!<br><br><br><br>
        <small style="font-size: 0.75rem;">* if you do not receive your extension within 1 hour, <a class="contact-btn" href="#" data-subject="Mixed%20Content%20Fixer%20extension%20not%20received">contact author right away</a></small>
      </p>
      </div>
    </div>
	</section>
@endsection
