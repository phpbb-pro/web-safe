<section id="explanation">
  <div class="container">
    <div class="row">
    <div class="col-md-5">
      <div class="content-box">
      <h2>What is the problem?</h2>
      <p>You switched your board to secure HTTPS protocol, but your users post images from HTTP sources. That poses a threat to them, because an attacker can replace the image with his own content or use users' data against them.</p>
      <a href="https://developers.google.com/web/fundamentals/security/prevent-mixed-content/what-is-mixed-content" class="btn btn-regular" target="_blank" title="See detailed explanation">Read more</a>
      </div>
    </div>
    <div class="col-md-7">
      <img src="{{ mix('images/httpproxy/mixed-content.png') }}" style="align-self: center" class="img-fluid" alt="Problem - mixed content warning">
    </div>
    </div>

    <div class="row">
    <div class="col-md-7">
      <img src="{{ mix('images/httpproxy/http-proxy.jpg') }}" style="align-self: center" class="img-fluid" alt="Solution - HTTP image proxy">
    </div>
    <div class="col-md-5">
      <div class="content-box">
      <h2>How to fix this?</h2>
      <p>You as a domain owner should ensure that all content comes from secure origins. But this is difficult with forums, where users create the content. Luckily, there is a technique called HTTP proxy which solves the issue.</p>
      </div>
    </div>
    </div>

    <div class="row">
      <div class="col-md-5">
      <div class="content-box">
        <h2>Final solution for forums</h2>
        <p>This extension utilizes such a HTTP proxy, replacing insecure images with a special link leading to your own server which downloads and secures the image instead of user's browser. Whatever your users post, you make them safe all the time.</p>
      </div>
      </div>
      <div class="col-md-7">
        <img src="{{ mix('images/httpproxy/secure-content.png') }}" style="align-self: center" class="img-fluid" alt="Desired state - secure content information">
      </div>
    </div>

    <div class="row">
      <div class="col-md-7">
        <img src="{{ mix('images/httpproxy/any-style-any-language.png') }}" style="align-self: center" class="img-fluid" alt="Solution - HTTP image proxy">
      </div>
      <div class="col-md-5">
      <div class="content-box">
        <h2>Any style, any language</h2>
        <p>The extension works under the hood - you and your users won't notice anything, regardless of board style and language. Neat, isn't it?</p>
      </div>
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-md-5">
      <div class="content-box">
        <h2>Lazyloading?</h2>
        <p>Using <a style="color:#8da2b5" href="https://www.phpbb.com/customise/db/extension/lazyload/" target="_blank">LazyLoad for post images extension</a>? Don't worry, you are covered. Another extension that isn't supported? Just contact author.</p>
      </div>
      </div>
      <div class="col-md-7">
        <img src="{{ mix('images/httpproxy/lazyload.png') }}" style="align-self: center" class="img-fluid" alt="Desired state - secure content information">
      </div>
    </div>
  </div>
</section>
