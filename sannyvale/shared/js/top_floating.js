(function(app, $) {
  "use strict";
  jQuery(document).ready(function() {
    var floatingView;
    return floatingView = {
      $el: $(".home-menu-floating"),
      hasTouchEvent: app.util.hasTouchEvent,
      timerA: 0,
      timerB: 0,
      setView: function() {
        var cls, top;
        top = $(window).scrollTop();
        cls = "is-visible";
        if ($(".home-items").offset().top < top) {
          if ($(".home-news").offset().top < top) {
            this.$el.removeClass(cls);
          } else {
            this.$el.addClass(cls);
          }
        } else {
          this.$el.removeClass(cls);
        }
      },
      setEvents: function() {
        var self;
        self = this;
        $(window).on("scroll", function() {
          clearTimeout(self.timerA);
          self.timerA = setTimeout(function() {
            self.setView();
          }, 100);
        });
        if (this.hasTouchEvent) {
          $("body").on("touchstart", function() {
            self.$el.find("> div").hide();
          });
          $("body").on("touchend", function() {
            clearTimeout(self.timerB);
            return self.timerB = setTimeout(function() {
              self.$el.find("> div").fadeIn();
            }, 100);
          });
        }
        return this;
      },
      init: function() {
        this.setEvents();
      }
    }.init();
  });
})(fritolayApp, jQuery);
