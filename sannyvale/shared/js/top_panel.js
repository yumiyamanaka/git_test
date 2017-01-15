(function(app, $) {
  "use strict";
  var PANEL_LOADED, PANEL_LOADING, TopPanels;
  PANEL_LOADED = "PANEL_LOADED";
  PANEL_LOADING = "PANEL_LOADING";
  TopPanels = (function() {
    TopPanels.prototype.context = {};

    TopPanels.prototype.template = "<li class=\"{{className}}\">\n  <div>\n      <a href=\"{{url}}\">\n        {{#is_new}}<div class=\"home-item_new\">NEW SNACK</div>{{/is_new}}\n        <div class=\"home-item_fig\"><img src=\"{{img_src}}\"></div>\n        <div class=\"home-item_name\"><i></i>{{title}}</div>\n      </a>\n    <div class=\"home-item_tags\">\n      <ul>\n        {{#tags}}<li><a href=\"{{url}}\">{{label}}</a></li>{{/tags}}\n      </ul>\n    </div>\n  </div>\n</li>";

    function TopPanels() {
      this.$el = $(".home-items_inner");
      this.checkDate = new app.util.CheckDate;
      this.loader = new app.util.ImageLoader(".home-items_inner");
      this.setEvents();
      return;
    }

    TopPanels.prototype.onComplete = function() {
      var height, self;
      self = this;
      this.render();
      height = $(".home-items_contents").height();
      $(".home-item > div").heightLine();
      return $(".home-items_inner").animate({
        opacity: 1,
        height: height
      }, 250, function() {
        self.completeAfter();
      });
    };

    TopPanels.prototype.changeState = function(target) {
      var self;
      self = this;
      this.$el.trigger(PANEL_LOADING);
      this.$el.css({
        opacity: 0,
        height: 0
      });
      $.ajax("/topics/" + target + "/index.json", {
        dataType: "json"
      }).success(function(context) {
        return self.loading(context);
      });
      return this;
    };

    TopPanels.prototype.completeAfter = function() {
      this.$el.removeAttr("style");
      this.$el.trigger(PANEL_LOADED);
    };

    TopPanels.prototype.setEvents = function() {
      var self;
      self = this;
      this.$el.on("IMAGE_LOADING_COMPLETE", function() {
        self.onComplete();
      });
      this.$el.on("IMAGE_LOADING_INCOMPLETE", function() {});
      this.$el.on(PANEL_LOADED, function() {});
      this.$el.on(PANEL_LOADING, function() {});
      $(".home-menu").on("change_state", function(event, target) {
        self.changeState(target);
      });
      return this;
    };

    TopPanels.prototype.loading = function(context) {
      var images, item, _i, _len, _ref;
      images = [];
      this.context = context;
      _ref = this.context.items;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        item = _ref[_i];
        images[images.length] = item.img_src;
      }
      this.loader.loading(images);
    };

    TopPanels.prototype.render = function() {
      var compile, html, index, item, _i, _ref;
      html = [];
      compile = Hogan.compile(this.template);
      for (index = _i = 0, _ref = this.context.items.length - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; index = 0 <= _ref ? ++_i : --_i) {
        item = this.context.items[index];
        item.is_new = false;
        if (item.date) {
          item.is_new = this.checkDate.isTerm(21, item.date);
        }
        html.push(compile.render({
          className: item["category"] ? "home-item is-cat-" + item['category'] : "home-item",
          url: item["url"],
          is_new: item.is_new,
          img_src: item['img_src'] ? item['img_src'] : "",
          title: item['title'],
          tags: item['tags']
        }));
      }
      $(".home-items_contents").html(html.join("\n"));
    };

    return TopPanels;

  })();
  jQuery(document).ready(function() {
    var isFirstTime;
    new TopPanels();
    isFirstTime = true;
    $(".home-items_inner").on("PANEL_LOADING", function() {
      var offset = 0;

      $(".home-items").addClass("is-panel-loading");
      if (!isFirstTime) {

        switch ($("html").data("RWD_TARGET")) {
          case "small":     offset = 40; break;
          case "mid2small": offset = 60; break;
          case "mid":       offset = 60; break;
          case "def":       break;
        }
        $("body,html").animate({
          scrollTop: $(".home-topics").offset().top - offset
        }, 400);
      }
    });
    $(".home-items_inner").on("PANEL_LOADED", function(event) {
      $(".home-items").removeClass("is-panel-loading");
      isFirstTime = false;
    });
    $(".home-menu-all a").trigger("click");
  });
})(fritolayApp, jQuery);
