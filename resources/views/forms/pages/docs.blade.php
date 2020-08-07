<!DOCTYPE html>
<html>
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-00000000-0"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-00000000-0');
    </script>

    <title>phpBB | Forms Extension</title>
    <meta name="description" content="Learn how to install and use phpBB Forms extension.">

    <style>
      html {
        scroll-behavior: smooth;
      }

      body {
        max-width: 50rem;
        margin: 0 auto;
        padding: 0 1rem;
        font-family: Lucida Grande, Trebuchet MS, Verdana, Helvetica, Arial, sans-serif;
        line-height: 1.7;
      }

      h1, h2, h3, h4 {
        font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
      }

      h1 small {
        font-size: 1rem;
      }

      h2 {
        margin-top: 7rem;
      }
      h2#requirements {
        margin-top: 0;
      }
      h2:target {
        text-decoration: underline;
      }

      h3 {
        margin-bottom: 0;
      }
      h3 + p {
        margin-top: 0.5rem;
      }

      h4 {
        margin: 0;
      }
      
      ol, ul {
        margin: 0;
      }

      li {
        margin: 0.5rem 0;
      }

      .toc-container h2 {
        margin: 0;
      }
      .toc-container {
        font-size: 0.875rem;
      }
      .toc-container ul li {
        margin: 0;
      }
      .toc-container a {
        text-decoration: none;
        color: #105289;
      }
      @media (min-width: 80rem) {
        .toc-container {
          position: fixed;
          top: 7rem;
          transform: translateX(calc(-100% - 2rem));
        }
      }

      dt {
        font-weight: bold;
        margin-bottom: 1rem;
      }

      dt ~ dt {
        margin-top: 3rem;
      }
    </style>
  </head>
  <body>
    <h1>phpBB | Forms Extension Documentation <small>by Jakub Senko</small></h1>

    <div class="toc-container">
      <h2 id="toc">Table of Contents</h2>
      <nav>
        <ol style="list-style: upper-alpha;">
          <li><a href="#requirements">Requirements</a></li>
          <li><a href="#installation-instructions">Installation Instructions</a></li>
          <li>
            <a href="#usage-guide">Usage Guide</a>
            <ul>
              <li><a href="#usage-guide-create-form">Create a new form</a></li>
              <li><a href="#usage-guide-edit-form">Edit a form</a></li>
              <li><a href="#usage-guide-clone-form">Clone a form</a></li>
              <li><a href="#usage-guide-delete-form">Delete a form</a></li>
              <li><a href="#usage-guide-use-form">Use a form</a></li>
            </ul>
          </li>
          <li><a href="#supported-styles">Supported Styles</a></li>
          <li><a href="#sources-and-credits">Sources and Credits</a></li>
          <li><a href="#future-development">Future Development</a></li>
          <li><a href="#faq">FAQ</a></li>
        </ol>
      </nav>
    </div>

    <hr>

    <h2 id="requirements">A) Requirements</h2>
    <p>This extension needs:</p>
    <ul>
      <li>PHP 5.6 or newer</li>
      <li>phpBB 3.2.0 or newer</li>
      <li>2MB of space</li>
    </ul>

    <h2 id="installation-instructions">B) Installation Instructions</h2>
    <p>
      Since you are reading this help file, you already extracted the archive which is the first step to successful installation. Great! Next steps are:
    </p>
    <ol>
      <li>Upload directory <samp>senky/</samp> to <samp>ext/</samp> directory of your board. It is possible that directory <samp>senky/</samp> already exists if you are using my other extensions. In that case copy <samp>senky/forms/</samp> to <samp>ext/senky/</samp>.</li>
      <li>Go to ACP of your board, tab Customise.</li>
      <li>Find <strong>Forms</strong> and click <strong>Enable</strong> next to it.</li>
      <li>Done! That was easy, wasn't it?</li>
      <li>All extension-related options are located in <strong>Extensions</strong> -> <strong>Forms</strong>.</li>
    </ol>

    <h2 id="usage-guide">C) Usage Guide</h2>
    <h3 id="usage-guide-create-form">Create a new form</h3>
    <ol>
      <li>Go to <strong>ACP</strong> -> <strong>Extensions</strong> -> <strong>Forms</strong>.</li>
      <li>Click <strong>Add a form</strong> button in the bottom right corner.</li>
      <li>A form composer is presented to you. First of all, add new form a <strong>name</strong>. The name is only used internally, for you and other admins to identify it easily.</li>
      <li>Select a <strong>forum</strong> to which the submissions will be posted. You must select one forum and no other form can use that forum anymore.</li>
      <li>Fill in the <strong>subject</strong> that will be used as a new topic subject when user submits the form. It can be static or you can use placeholders to be replaced with actual user data. More on that later.</li>
      <li>Choose if you want to <strong>replace posting page</strong> or not. If you opt to replace it, your users will have no other means to post into the selected forum. They will be forced to use this form and all forum permissions will be honored (<em>Can read forum</em>, <em>Can start new topics</em>, <em>Can edit own posts</em>). It is very handy for cases such as <a href="https://phpbb.pro/forms/use-case-support-template">support tickets</a>. On the contrary, sometimes you want your users post into the forum traditional way, but improve their experience using a form. Typical example is a new member <a href="https://phpbb.pro/forms/use-case-introduction">introduction</a>. Or you want to <a href="https://phpbb.pro/forms/use-case-collect-data">collect data</a> in hidden forum. If you do not replace posting page, you will have to link to the form somewhere so your users can access it. A link to the form will be generated once you submit this composer. With this option turned off, any registered user can submit the form (<em>Extended license</em> users can restrict posting to selected groups). It bypasses all permission checks, so you can collect the submissions in hidden forum as well.</li>
      <li>If you have bought an <em>Extended license</em>, you can choose your own <strong>form link</strong> to give it nicer look and more credibility.</li>
      <li>
        Now to the most exciting part. <strong>Form inputs</strong> section allows you to compose the form in a visual way. Drag the field from the right area to the left area to include it in the form and access its options. You can reorder the inputs once they are in the left area. The form will display the inputs in the exact same order. Based on your license, here is the list of all available inputs:
        <ul>
          <li>
            <h4>Checkbox Group</h4>
            This input allows you to display multiple options while user can select any number of them. In the output, only selected options will be displayed.
          </li>
          <li>
            <h4>Paragraph</h4>
            This special input allows you to put plain HTML anywhere in the form. Usually, you would use this at the beginning of the form to give users introduction. But this can be used in many creative ways.
          </li>
          <li>
            <h4>Radio Group</h4>
            Similar to Checkbox Group, Radio Group only allows user select one option out of many.
          </li>
          <li>
            <h4>Select</h4>
            Select is the most versatile input. It can replace Checkbox/Radio Group, although experience is different. Check <em>Allow Multiple Selections</em> to achieve Checkbox Group effect, or let it unchecked for single-option use. The options will be displayed in dropdown.
          </li>
          <li>
            <h4>Text Field</h4>
            This most common input allows you to collect single-line data from your users. You can restrict the data type by selecting appropriate <em>Type</em> - email, color, tel, number, date, datetime, time or url.
          </li>
          <li>
            <h4>Text Area</h4>
            If you need a long multiline text from your users, Text Area is the best option. It is basically just a big field where user can input text of any length (if not restricted by <em>Max Length</em> option).
          </li>
          <li>
            <h4>CAPTCHA</h4>
            This input will be replaced with a standard CAPTCHA your board uses in registration and/or posting pages. This will help you fight spambots since forms are a new way to post into the forums. Preferably include it at the very end of the form.
          </li>
        </ul>
      </li>
      <li>Lastly, you are presented with a <strong>Form template</strong> - a BBcode-enabled editor which allows you to compose the final output of the form. The form will collect the data, you define how they are presented to the viewers. This field allows you to do that. Format it to your liking. In order to use the data from the form, use <em>Name</em> of the input in between the curly brackets. This is called placeholder and it will be replaced with an actual user data. So if your input's <em>Name</em> is <samp>first_name</samp>, you would use <samp>{first_name}</samp> to replace it with an actual user first name. Every input has auto-generated <em>Name</em>, but I encourage you to change it to something more meaningful.</li>
      <li>If you are happy with the template, you can preview it using <strong>Preview</strong> button.</li>
      <li>Once everything looks good, hit <strong>Submit</strong> button to save the form.</li>
      <li>You will be redirected back to the list of forms, where you can now see the form link. In case you didn't replace posting page, you need to share this link in order for your users to access it.</li>
    </ol>

    <h3 id="usage-guide-edit-form">Edit a form</h3>
    <ol>
      <li>Go to <strong>ACP</strong> -> <strong>Extensions</strong> -> <strong>Forms</strong>.</li>
      <li>Click on the <strong>Form name</strong> or gear icon in <strong>Actions</strong> column.</li>
      <li>Edit the form to your liking.</li>
      <li>Beware the fact that old submissions won't be changed if you change any of the <strong>Form inputs</strong>. If you add new inputs, users editing old post will be forced to add in new data. If you remove some inputs, old submissions will still display them.</li>
      <li>Click <strong>Submit</strong> button.</li>
    </ol>

    <h3 id="usage-guide-clone-form">Clone a form</h3>
    <p>Sometimes, it is quicker to edit the already existing form than to create a brand new one. You can clone the form and then edit it in that case.</p>
    <ol>
      <li>Go to <strong>ACP</strong> -> <strong>Extensions</strong> -> <strong>Forms</strong>.</li>
      <li>Click on the <strong>Plus</strong> icon in Actions column of the form you want to clone.</li>
      <li>Select the forum you want your form post to. This must be different that the original form uses.</li>
      <li>Edit the form to your liking.</li>
      <li>Click <strong>Submit</strong> button.</li>
    </ol>

    <h3 id="usage-guide-delete-form">Delete a form</h3>
    <ol>
      <li>Go to <strong>ACP</strong> -> <strong>Extensions</strong> -> <strong>Forms</strong>.</li>
      <li>Click on the <strong>Form name</strong> or gear icon in <strong>Actions</strong> column.</li>
      <li>Click on the <strong>Delete</strong> button in the bottom right corner.</li>
      <li>Confirm the operation.</li>
    </ol>

    <h3 id="usage-guide-use-form">Use a form</h3>
    <ol>
      <li>Navigate directly to any form link or navigate to the forum which replaces posting with form and click <strong>New Topic</strong> button.</li>
      <li>Fill in the form with your data.</li>
      <li>You can preview the final result with <strong>Preview</strong> button.</li>
      <li>Click on the <strong>Submit</strong> button to create new topic.</li>
    </ol>

    <h2 id="supported-styles">D) Supported Styles</h2>
    <p>At the moment, the extension supports prosilver and all prosilver-based styles.</p>

    <h2 id="sources-and-credits">E) Sources and Credits</h2>
    <p>This extension uses:</p>
    <ul>
      <li><a href="https://jqueryui.com/" target="_blank" rel="noopener noreferrer">jQuery UI</a> from The jQuery Foundation,</li>
      <li><a href="https://formbuilder.online/" target="_blank" rel="noopener noreferrer">formBuilder</a> from Kevin Chappell.</li>
    </ul>

    <h2 id="future-development">F) Future Development</h2>
    <p>While the extension already provides a nice bunch of features, I already have many ideas for future development. Among them, the most prominent are:</p>
    <ul>
      <li>File Upload input,</li>
      <li>BBcode-enabled textarea,</li>
      <li>Admin drag'n'drop editor redesign to match ACP style,</li>
      <li>Multiple forms in one forum.</li>
    </ul>

    <h2 id="faq">G) Frequently Asked Questions</h2>
    <dt>Is this the port of <a href="https://www.phpbb.com/customise/db/mod/phpbb_form_creator" target="_blank" rel="noopener noreferrer">phpbb Form Creator</a> mod?</dt>
    <dd>No, this extension is a brand new one and much, much better! The ACP page is re-thought completely to match the most advanced form generators. It includes drag'n'drop editor, preview mode and much more. It allows you to replace the posting page as well as link to special form URL to record the submissions in the hidden forums. All in all, it isn't a port. It's an evolution!</dd>
  
    <dt>Is this phpBB extension better than <a href="https://www.phpbb.com/customise/db/extension/posting_template_4/" target="_blank" rel="noopener noreferrer">Posting Template</a> extension?</dt>
    <dd>Absolutely! I wouldn't even compare one to the other. Posting Template doesn't restrict users from posting whatever they want. It merely guides them, while Forms extension displays a proper form with both client and server-side validation. Also, this extension allows your users to post to the hidden/team forums by exposing the form in a special URL. This makes it ideal for private data collection, security reports or application-related use-cases.</dd>
  
    <dt>Does this extension support editing?</dt>
    <dd>Yes. Other similar extensions lacked this vital feature. Without editing support, a user can fill in the form and then quicky edit the post to their liking, destructing the predefined structure. This extension displays the same form when you hit Edit button, with all the data prefilled.</dd>

    <dt>How do I know this extension is of high quality?</dt>
    <dd><a href="https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=971225" target="_blank" rel="noopener noreferrer">I am</a> an official member of <a href="https://www.phpbb.com/community/memberlist.php?mode=team" target="_blank" rel="noopener noreferrer">phpBB team</a>, <a href="https://www.phpbb.com/community/memberlist.php?g=7331&mode=group" target="_blank" rel="noopener noreferrer">Extension Customisations group</a> and <a href="https://github.com/orgs/phpbb-extensions/teams/extensions-development-team" target="_blank" rel="noopener noreferrer">Official Extensions Development Team</a>. I have published more than 10 free extensions to the official <a href="https://www.phpbb.com/customise/db/author/senky/contributions" target="_blank" rel="noopener noreferrer">CDB</a>, developed more than 100 private extensions and dedicated more than 10 years to phpBB. Having said that, I will leave it to your judgement.</dd>
  
    <hr>
    <p>
      Once again, thank you so much for purchasing the Forms phpBB extension. I'd be glad to help
      you if you have any questions relating to this extension <a data-email data-subject="Question%20about%20phpBB%20Forms%20extension">via
      email</a>. If you have a more general question relating to the phpBB extensions, you might
      consider visiting the forums and asking your question in the
      <a href="https://www.phpbb.com/community/viewforum.php?f=551" target="_blank" rel="noopener noreferrer">phpbb.com support forums</a>.
    </p>
    <p>Jakub Senko</p>

    <script>
      var parts = ['bWFpbHRvOmNvbnRhY3RAZXhhbXBsZS5pbnZhbGlk'];
      document.querySelectorAll('[data-email]').forEach(function(elem) {
        elem.href = parts.map(atob).join('') + '?subject=' + elem.dataset.subject;
      });
    </script>
  </body>
</html>
