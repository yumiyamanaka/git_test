(function(app, $) {
  "use strict";
  var FBPlugin;
  FBPlugin = (function() {
    FBPlugin.prototype.templateFbPage = ['<div class="fb-page" data-href="%HREF%" data-width="%WIDTH%" %DATA%></div>'].join("\n");

    function FBPlugin() {}

    FBPlugin.prototype.renderFbPagePlugin = function(selector, target) {
      var compiled, w;
      w = "small" === target ? 280 : 500;
      compiled = this.templateFbPage.replace(/(%WIDTH%|%HREF%|%DATA%)/g, function(str) {
        if ("%HREF%" === str) {
          return "https://www.facebook.com/fritolayjp";
        }
        if ("%DATA%" === str) {
          return 'data-hide-cover="true" data-show-facepile="true" data-show-posts="false"';
        }
        if ("%WIDTH%" === str) {
          return w;
        }
        return res;
      });
      document.getElementsByClassName(selector)[0].innerHTML = compiled;
      app.util.loaderSocialPlugin("fb");
      return this;
    };

    return FBPlugin;

  })();
  $(document).ready(function() {
    var fb;

    if (/*@cc_on !@*/false) {
      /*
       * <= IE10 (below
       * Facebook Plugin Like Box が IE10 でエラーが発生する為除外する
       */  
    } else {
      fb = new FBPlugin();
      fb.renderFbPagePlugin("fb-page-plugin", $("html").data("RWD_TARGET"));
    }
  });
})(fritolayApp, jQuery);
