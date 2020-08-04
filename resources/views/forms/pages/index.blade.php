@extends('_layouts.silverlike')

@section('title', 'phpBB Forms Extension')

@section('content')
  <main>
    <div class="hero">
      <div class="hero__img-container">
        <img
          class="hero__img"
          src="{{ mix('/images/forms/phpbb-forms-extension.jpg') }}"
          srcset="{{ mix('/images/forms/phpbb-forms-extension.jpg') }},
                  {{ mix('/images/forms/phpbb-forms-extension@2x.jpg') }} 2x"
          width="644"
          height="361"
          alt="Forms phpBB premium extension allows you to generate structured forms instead of default text method to create topics.">
      </div>
      <div class="hero__copy">
        <h1 class="hero__header"><span>phpBB</span> <strong>Forms</strong> Extension</h1>
        <p class="hero__subheader">Lead your members while they create review, report, request, application or any kind of structured content.</p>
        <p><a class="button" href="#features">Learn more</a></p>
      </div>
    </div>

    <section id="features">
      <h2 class="center-header__header">Features</h2>
      <p class="center-header__text">phpBB Forms extension allows you to generate structured forms instead of default text method. Explore all the features that enable your members be more confident while creating new topics.</p>
      <article class="feature feature--right">
        <div class="feature__img-container">
          <video class="feature__img" loading="lazy" autoplay loop muted playsinline>
            <source src="{{ mix('/images/forms/phpbb-forms-review-report-request-application.webm') }}" type="video/webm">
            <source src="{{ mix('/images/forms/phpbb-forms-review-report-request-application.mp4') }}" type="video/mp4">
          </video>
        </div>
        <div class="feature__copy">
          <h3 class="feature__header">Matches your case</h3>
          <p class="feature__text">Whether your board deals with reviews, reports, requests or applications, this extension gives structure to any kind of data.</p>
        </div>
      </article>

      <article class="feature feature--grey">
        <div class="feature__img-container">
          <img
            class="feature__img"
            loading="lazy"
            src="{{ mix('/images/forms/phpbb-forms-drag-drop-editor.jpg') }}"
            srcset="{{ mix('/images/forms/phpbb-forms-drag-drop-editor.jpg') }},
                    {{ mix('/images/forms/phpbb-forms-drag-drop-editor@2x.jpg') }} 2x"
            width="489"
            height="206"
            alt=".">
        </div>
        <div class="feature__copy">
          <h3 class="feature__header">Drag'n'drop editor</h3>
          <p class="feature__text">Intuitive visual editor with preview capability gives you absolute convenience and confidence while creating or editing the forms.</p>
        </div>
      </article>

      <article class="feature feature--right">
        <div class="feature__img-container">
          <img
            class="feature__img"
            loading="lazy"
            src="{{ mix('/images/forms/phpbb-forms-replace-or-link.jpg') }}"
            srcset="{{ mix('/images/forms/phpbb-forms-replace-or-link.jpg') }},
                    {{ mix('/images/forms/phpbb-forms-replace-or-link@2x.jpg') }} 2x"
            width="503"
            height="284"
            alt=".">
        </div>
        <div class="feature__copy">
          <h3 class="feature__header">Replace or link</h3>
          <p class="feature__text">Replace the posting page altogether, or link to the special URL when user response should be stored in the hidden forum.</p>
        </div>
      </article>

      <article class="feature feature--light-blue">
        <div class="feature__img-container">
          <img
            class="feature__img"
            loading="lazy"
            src="{{ mix('/images/forms/phpbb-forms-wide-variety-of-inputs.jpg') }}"
            srcset="{{ mix('/images/forms/phpbb-forms-wide-variety-of-inputs.jpg') }},
                    {{ mix('/images/forms/phpbb-forms-wide-variety-of-inputs@2x.jpg') }} 2x"
            width="503"
            height="304"
            alt=".">
        </div>
        <div class="feature__copy">
          <h3 class="feature__header">Wide variety of inputs</h3>
          <p class="feature__text">Text, number, url or email fields, large textareas, selects, even HTML-enabled text blocks. Required, max length, placeholder. You manage the requirements down to the last detail.</p>
        </div>
      </article>

      <article class="feature feature--right">
        <div class="feature__img-container">
          <video class="feature__img" loading="lazy" autoplay loop muted playsinline>
            <source src="{{ mix('/images/forms/phpbb-forms-edit.webm') }}" type="video/webm">
            <source src="{{ mix('/images/forms/phpbb-forms-edit.mp4') }}" type="video/mp4">
          </video>
        </div>
        <div class="feature__copy">
          <h3 class="feature__header">Edit</h3>
          <p class="feature__text">Yes, updating the data after submission is supported. In the same format, of course!</p>
        </div>
      </article>
    </section>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection

@section('footer-extra')
  <a class="visually-hidden" href="https://www.vecteezy.com/free-vector/address-bar">Address Bar Vectors by Vecteezy</a>
@endsection
