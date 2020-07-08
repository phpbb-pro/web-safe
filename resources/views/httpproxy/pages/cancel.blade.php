@extends('httpproxy.layout')

@section('content')
  <section id="success">
    <div class="container">
      <div class="title-block">
      <h2>Oh no!</h2>
      <p>
        Did you change your mind? Why don't you <a class="contact-btn" href="#" data-subject="Mixed%20Content%20Fixer%20extension%20special%20inquiry">contact an author</a> with your special inquiry?<br><br>
        Was it a mistake? Don't worry, just <a href="#pricing">repeat the process</a> by selecting your license again.
      </p>
      </div>
    </div>
	</section>

	@include('httpproxy.components.hero')
	@include('httpproxy.components.explanation')
	@include('httpproxy.components.demo')
	@include('httpproxy.components.pricing')
	@include('httpproxy.components.cta')
@endsection
