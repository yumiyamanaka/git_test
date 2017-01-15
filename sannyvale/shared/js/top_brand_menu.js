(function(app, $) {
  "use strict";
  var $homeMenu, BrandNavigation;
  $homeMenu = $(".home-menu");
  BrandNavigation = (function() {
    function BrandNavigation() {
      this._current = "";
      this.$el = $(".home-menu");
      this.$items = this.$el.find(".home-menu-items > li");
      this.$mike = this.$el.find(".home-menu-mike");
      this.$doritos = this.$el.find(".home-menu-doritos");
      this.$cheetos = this.$el.find(".home-menu-cheetos");
      this.$all = this.$el.find(".home-menu-all");
      this.setEvents();
    }

    BrandNavigation.prototype.setEvents = function() {
      this.$el.on("change", (function(_this) {
        return function(event, current) {
          if (current !== _this._current) {
            _this._current = current;
            _this.$el.trigger("change_state", [current]);
            _this.change();
          }
        };
      })(this));
      this.$mike.find("a").on("click", (function(_this) {
        return function(event) {
          event.preventDefault();
          return _this.$el.trigger("change", ["mike"]);
        };
      })(this));
      this.$doritos.find("a").on("click", (function(_this) {
        return function(event) {
          event.preventDefault();
          return _this.$el.trigger("change", ["doritos"]);
        };
      })(this));
      this.$cheetos.find("a").on("click", (function(_this) {
        return function(event) {
          event.preventDefault();
          return _this.$el.trigger("change", ["cheetos"]);
        };
      })(this));
      return this.$all.find("a").on("click", (function(_this) {
        return function(event) {
          event.preventDefault();
          return _this.$el.trigger("change", ["all"]);
        };
      })(this));
    };

    BrandNavigation.prototype.change = function() {
      var $homeTopics;
      this.$el.removeClass("is-mike is-doritos is-cheetos is-all");
      $homeTopics = $(".home-topics");
      $homeTopics.removeClass("is-texture-style-home is-texture-style-cheetos is-texture-style-doritos is-texture-style-mike");
      this.$items.removeClass("is-current is-including run-animate");
      switch (this._current) {
        case "mike":
          $homeTopics.addClass("is-texture-style-mike");
          this.$el.addClass("is-mike");
          this.$mike.addClass("is-current");
          this.$doritos.addClass("run-animate");
          this.$cheetos.addClass("run-animate");
          this.$all.addClass("run-animate");
          break;
        case "doritos":
          $homeTopics.addClass("is-texture-style-doritos");
          this.$el.addClass("is-doritos");
          this.$mike.addClass("run-animate");
          this.$doritos.addClass("is-current");
          this.$cheetos.addClass("run-animate");
          this.$all.addClass("run-animate");
          break;
        case "cheetos":
          $homeTopics.addClass("is-texture-style-cheetos");
          this.$el.addClass("is-cheetos");
          this.$mike.addClass("run-animate");
          this.$doritos.addClass("run-animate");
          this.$cheetos.addClass("is-current");
          this.$all.addClass("run-animate");
          break;
        default:
          $homeTopics.addClass("is-texture-style-home");
          this.$el.addClass("is-all");
          this.$mike.addClass("is-including");
          this.$doritos.addClass("is-including");
          this.$cheetos.addClass("is-including");
          this.$all.addClass("is-current");
      }
    };

    return BrandNavigation;

  })();
  $(".home-menu-floating_mike span").on("touchstart click", function(event) {
    event.preventDefault();
    $homeMenu.trigger("change", ["mike"]);
    return false;
  });
  $(".home-menu-floating_doritos span").on("touchstart click", function(event) {
    event.preventDefault();
    $homeMenu.trigger("change", ["doritos"]);
    return false;
  });
  $(".home-menu-floating_cheetos span").on("touchstart click", function(event) {
    event.preventDefault();
    $homeMenu.trigger("change", ["cheetos"]);
    return false;
  });
  $(".home-menu-floating_all span").on("touchstart click", function(event) {
    event.preventDefault();
    $homeMenu.trigger("change", ["all"]);
    return false;
  });
  jQuery(document).ready(function() {
    new BrandNavigation();
  });
})(fritolayApp, jQuery);
