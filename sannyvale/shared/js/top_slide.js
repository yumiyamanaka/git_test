(function(app, $) {
  "use strict";
  var TopSlide;
  TopSlide = (function() {
    function TopSlide(target) {
      var self;
      this.$el = $(".bxslider");
      this.target = this.filterTarget(target);
      this.duration = 5000;
      this.slideCount = 0;
      this.slideCurrent = 0;
      this.slideTimerId = 0;
      self = this;
      this.$controlles = this.$el.find();
      this.confWide = {
        speed: 1000,
        easing: 'ease-in-out',
        onSlideAfter: function() {
          return self.onSlideAfter();
        }
      };
      this.confNarrow = {
        speed: 1000,
        easing: 'ease-in-out',
        pause: 5000,
        infiniteLoop: true,
        auto: true,
        autoStart: true
      };
      this.setEvents();
      this.startSlider();
    }

    TopSlide.prototype.isMobile = function () {
      return "small" === this.target || /(?:mobile|android)/i.test(navigator.userAgent);
    };

    TopSlide.prototype.onChangeTarget = function() {
      if (this.isMobile()) {
        this.$el.trigger("YOUTUBE_DESTROY_PLAYER");
      } else {
        this.$el.trigger("YOUTUBE_RENDER_PLAYER");
      }
      this.reload();
      return this;
    };

    TopSlide.prototype.onSlideAfter = function() {
      // if (this.isMobile()) {
        this.slideCurrent = this.bxslider.getCurrentSlide();
        this.runTimeout();
      // }
      return this;
    };

    TopSlide.prototype.onClickHandles = function() {
      var self;
      self = this;
      if (this.isMobile()) {
        clearTimeout(this.slideTimeId);
        this.slideTimeId = setTimeout(self.bxslider.startAuto(), this.duration);
      }
      return this;
    };

    TopSlide.prototype.runTimeout = function() {
      var self;
      self = this;
      clearTimeout(this.slideTimeId);
      this.slideTimeId = setTimeout(function() {
        return self.bxslider.goToNextSlide();
      }, this.duration);
      return this;
    };

    TopSlide.prototype.setEvents = function() {
      var self;
      self = this;
      this.$el.on("YOUTUBE_API_READY", function() {
        if (self.isMobile()) {
          return self.$el.trigger("YOUTUBE_DESTROY_PLAYER");
        } else {
          return self.$el.trigger("YOUTUBE_RENDER_PLAYER");
        }
      });
      this.$el.on("CHANGE_SLIDER_RWD_TARGET", function() {
        self.onChangeTarget();
      });
      this.$el.on("SLIDER_PLAY", function() {
        self.bxslider.goToNextSlide();
      });
      $(".home-slide").on("click", ".bx-controls a", function() {
        self.onClickHandles();
      });
      return this;
    };

    TopSlide.prototype.startSlider = function() {
      if (this.isMobile()) {
        this.$el.addClass("is-mobile");
        this.bxslider = $('.bxslider').bxSlider(this.confNarrow);
      } else {
        this.bxslider = $('.bxslider').bxSlider(this.confWide);
      }
      this.slideCount = this.bxslider.getSlideCount();
      return this;
    };

    TopSlide.prototype.filterTarget = function(target) {
      if ("small" === target) {
        return "small";
      } else {
        return "large";
      }
    };

    TopSlide.prototype.setTarget = function(target) {
      target = this.filterTarget(target);
      if (this.target !== target) {
        this.target = target;
        this.$el.trigger("CHANGE_SLIDER_RWD_TARGET");
      }
      return this;
    };

    TopSlide.prototype.reload = function() {
      if (this.isMobile()) {
        this.bxslider.reloadSlider(this.confNarrow);
      } else {
        this.bxslider.reloadSlider(this.confWide);
      }
      return this;
    };

    return TopSlide;

  })();
  app.view.TopSlide = TopSlide;
})(fritolayApp, jQuery);

(function(app, $) {
  "use strict";
  jQuery(document).ready(function() {
    var slideView;

    slideView = new app.view.TopSlide($("html").data("RWD_TARGET"));

    $("html").on("CHANGE_RWD_TARGET", function(event, target) {
      slideView.setTarget(target);
    });

    (function (api, firstScript) {
      /**
       * YouTube iframe API 縺ｮ髱槫酔譛溯ｪｭ縺ｿ霎ｼ縺ｿ
       * @type {HTMLElement}
       */
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = api;
      firstScript.parentNode.insertBefore(script, firstScript);
    })("https://www.youtube.com/iframe_api", document.getElementsByTagName("script")[0]);

  });
})(fritolayApp, jQuery);

(function () {
  "use strict";

  $(".home-news-item_text").heightLine();
})();
