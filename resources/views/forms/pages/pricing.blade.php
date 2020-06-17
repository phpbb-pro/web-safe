@extends('forms.layout')

@section('title', 'Pricing | phpBB Forms Extension')

@section('content')
  <main class="with-bottom-padding">
    <h1 class="center-header__header">Pricing</h1>
    <p class="center-header__text"></p>

    <section class="pricing">
      <article class="pricing__item">
        <h2 class="pricing__name">Standard</h2>
        <data class="pricing__price">{{ price('forms', 'standard') }}</data>
        <div class="pricing__button"><a class="button" href="{{ route('pay', ['ext' => 'forms', 'package' => 'standard']) }}">Buy now</a></div>
        <p class="pricing__desc">Unlimited number of forms, visual editor and edit capability.</p>
      </article>
      <article class="pricing__item pricing__item--popular">
        <h2 class="pricing__name">Extended</h2>
        <data class="pricing__price">{{ price('forms', 'extended') }}</data>
        <div class="pricing__button"><a class="button" href="{{ route('pay', ['ext' => 'forms', 'package' => 'extended']) }}">Buy now</a></div>
        <p class="pricing__desc">All Standard plus extended input types and custom links.</p>
      </article>
      <article class="pricing__item">
        <h2 class="pricing__name">Reseller</h2>
        <data class="pricing__price">{{ price('forms', 'reseller') }}</data>
        <div class="pricing__button"><a class="button" href="{{ route('pay', ['ext' => 'forms', 'package' => 'reseller']) }}">Buy now</a></div>
        <p class="pricing__desc">Charge your clients for installation and/or using of this extension.</p>
      </article>
    </section>

    <div class="pricing__table-wrapper">
      <h2 class="pricing__title">Compare plans</h2>
      <table class="pricing__table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Standard</th>
            <th>Extended</th>
            <th>Reseller</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Unlimited number of forms <i class="fa fa-question-circle-o pricing__tooltip"><span>Build as many forms<br>as you need</span></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Drag'n'drop editor <i class="fa fa-question-circle-o pricing__tooltip"><span>Compose your form templates with visual editor.<br>No coding knowledge is required.</span></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Input types <i class="fa fa-question-circle-o pricing__tooltip"><span>Text, number, email, tel, date, time, selectbox,<br>radio, textarea, plain HTML.</span></i></td>
            <td>Basic <i class="fa fa-question-circle-o pricing__tooltip"><span>Text, number, email, tel, date,<br>time, selectbox, textarea.</span></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Edit form <i class="fa fa-question-circle-o pricing__tooltip"><span>When user edits the post, they will be shown the same<br>form with all the previously entered data prefilled.</span></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Replace posting page <i class="fa fa-question-circle-o pricing__tooltip"><span>You can enforce your users to use a form in order to create new<br>topic or make it optional by providing a special link to the form.</span></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Custom link <i class="fa fa-question-circle-o pricing__tooltip"><span>Add your form a nice URL,<br>e.g.: <code>yourforum.com/form/application</code></span></i></td>
            <td></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>3 updates for free <i class="fa fa-question-circle-o pricing__tooltip"><span>Receive next three major<br>updates completely free.</span></i></td>
            <td></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Setup support <i class="fa fa-question-circle-o pricing__tooltip"><span>Get professional advice on how to install, setup and successfully use the extension.</span></i></td>
            <td></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Resell <i class="fa fa-question-circle-o pricing__tooltip"><span>Charge your clients for installation and/or using of this extension.</span></i></td>
            <td></td>
            <td></td>
            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
            <td>Number of boards <i class="fa fa-question-circle-o pricing__tooltip"><span>Number of separate phpBB installations and domains<br>you are licensed to install the extension to.</span></i></td>
            <td>1</td>
            <td>1</td>
            <td>Unlimited</td>
          </tr>
          <tr>
            <td></td>
            <td><a class="button" href="{{ route('pay', ['ext' => 'forms', 'package' => 'standard']) }}">Buy now</a></td>
            <td><a class="button" href="{{ route('pay', ['ext' => 'forms', 'package' => 'extended']) }}">Buy now</a></td>
            <td><a class="button" href="{{ route('pay', ['ext' => 'forms', 'package' => 'reseller']) }}">Buy now</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
@endsection
