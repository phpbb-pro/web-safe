@extends('_layouts.silverlike')

@section('title', 'Use Cases | phpBB Forms Extension')

@section('content')
  <main>
    <h1 class="center-header__header">Frequently asked questions</h1>

    <dl class="faq">
      <dt>Is this the port of <a href="https://www.phpbb.com/customise/db/mod/phpbb_form_creator" target="_blank" ref="noopener noreferrer">phpbb Form Creator</a> mod?</dt>
      <dd>No, this extension is a brand new one and much, much better! The ACP page is re-thought completely to match the most advanced form generators. It includes drag'n'drop editor, preview mode and much more. It allows you to replace the posting page as well as link to special form URL to record the submissions in the hidden forums. All in all, it isn't a port. It's an evolution!</dd>
    
      <dt>Is this phpBB extension better than <a href="https://www.phpbb.com/customise/db/extension/posting_template_4/" target="_blank" ref="noopener noreferrer">Posting Template</a> extension?</dt>
      <dd>Absolutely! I wouldn't even compare one to the other. Posting Template doesn't restrict users from posting whatever they want. It merely guides them, while Forms extension displays a proper form with both client and server-side validation. Also, this extension allows your users to post to the hidden/team forums by exposing the form in a special URL. This makes it ideal for security report or application-related use-cases.</dd>
    
      <dt>Does this extension support editing?</dt>
      <dd>Yes. Other similar extensions lacked this vital feature. Without editing support, a user can fill in the form and then quicky edit the post to their liking, destructing the predefined structure. This extension displays the same form when you hit Edit button, with all the data prefilled.</dd>
    
      <dt>How does this extension display the collected data?</dt>
      <dd>You define the template. Every form field has a name assigned to it which you can use inside the template to be replaced with actual data user submits. The template has full BBcode support and preview capability. That means you can compose simple <code>name: value</code> posts for support requests as well as sophisticated recipe templates.</dd>
    
      <dt>Will this extension evolve over time?</dt>
      <dd>Yes, I have many ideas already in mind and I am always open to suggestions from both existing and future clients. I also encourage you to buy extended license to receive the updates for free.</dd>
    
      <dt>How do I know this extension is of high quality?</dt>
      <dd><a href="https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=971225" target="_blank" ref="noopener noreferrer">I am</a> an official member of <a href="https://www.phpbb.com/community/memberlist.php?mode=team" target="_blank" ref="noopener noreferrer">phpBB team</a>, <a href="https://www.phpbb.com/community/memberlist.php?g=7331&mode=group" target="_blank" ref="noopener noreferrer">Extension Customisations group</a> and <a href="https://github.com/orgs/phpbb-extensions/teams/extensions-development-team" target="_blank" ref="noopener noreferrer">Official Extensions Development Team</a>. I have published more than 10 free extensions to the official <a href="https://www.phpbb.com/customise/db/author/senky/contributions" target="_blank" ref="noopener noreferrer">CDB</a>, developed more than 100 private extensions and dedicated more than 10 years to phpBB. Having said that, I will leave it to your judgement.</dd>
    
      <dt>What forms or payment do you accept?</dt>
      <dd>The most convenient way is PayPal. An invoice payable by bank transfer (in EUR) is also possible.</dd>
    </dl>
  </main>

  @component('forms.components.cta')@endcomponent
@endsection
