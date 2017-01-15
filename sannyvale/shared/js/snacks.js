(function(app, $) {
  "use strict";
  var $el, table;
  $el = $("table.with-rwd");
  if (!(0 < $el.length)) {
    return false;
  }
  table = new app.util.ExtTable("table.with-rwd");
  table.importCSV($(".snacks-sub_chart-data").html().split("\n"));
  table.setFilter(function(text) {
    if ("-" === text) {
      return " ";
    }
    if ("含む" === text) {
      return "●";
    }
    return text;
  });
  $("html").on("CHANGE_RWD_TARGET", function(event, target) {
    if ("small" !== target) {
      table.render(4, 5);
    } else {
      table.render(2, 10);
    }
  }).trigger("RUN_RWD_HOOK");
})(fritolayApp, jQuery);

(function(app, $) {
  "use strict";
  var $content, $el, $handle, flag;
  $el = $(".snacks-sub");
  flag = false;
  if (!(0 < $el.length)) {
    return false;
  }
  $handle = $el.find(".snacks-sub_handle");
  $content = $el.find(".snacks-sub_inner").hide();
  $handle.on("click", function(event) {
    event.preventDefault();
    if (flag) {
      $el.trigger("_close");
      return flag = false;
    } else {
      $el.trigger("_open");
      return flag = true;
    }
  });
  $el.on("_close", function() {
    $el.removeClass("is-opened").addClass("is-closed");
    $content.slideUp();
  });
  $el.on("_open", function() {
    $el.removeClass("is-closed").addClass("is-opened");
    $content.slideDown();
  });
})(fritolayApp, jQuery);

(function(app, $) {
  "use strict";
  var $el, newsnackView;
  $el = $(".snacks-newsnack-items");
  if (!(0 < $el.length)) {
    return false;
  }
  newsnackView = {
    $el: $el,
    setEvents: function() {
      var checkDate;
      checkDate = new app.util.CheckDate;
      this.$el.on("mouseenter", ".snacks-item", function() {
        $(this).find("img").addClass("run-animate");
      }).on("mouseleave", ".snacks-item", function() {
        $(this).find("img").removeClass("run-animate");
      });
      this.$el.on("attach_icon", (function(_this) {
        return function() {
          return _this.$el.find(".snacks-item").each(function(index, item) {
            var span;
            span = document.createElement("span");
            if (checkDate.isTerm(21, $(item).data("date"))) {
              span.className = "snacks-item_icon-new";
              $(item).find("figure").append(span);
            } else if (checkDate.isBefore($(item).data("lastdate"))) {
              span.className = "snacks-item_icon-close";
              $(item).find("figure").append(span);
            }
          }).removeAttr("data-date data-lastdate");
        };
      })(this));
      this.$el.on("heightline", (function(_this) {
        return function() {
          if ("heightLine" in $.fn) {
            return _this.$el.find(".snacks-item h1").heightLine("destroy").heightLine();
          }
        };
      })(this));
      this.$el.trigger("attach_icon");
      return this;
    },
    init: function() {
      this.setEvents();
      return this;
    }
  }.init();
})(fritolayApp, jQuery);

(function(app, $) {
  "use strict";
  var $more, moreView;
  $more = $(".snacks-newsnack-more");
  if (!(0 < $more.length)) {
    return false;
  }
  moreView = {
    $el: $(".snacks-tab_content"),
    $more: $more,
    nextPage: 0,
    getHref: function() {
      return "./" + (this.nextPage++) + "/";
    },
    success: function(context) {
      var $a, $tree, df, item, _i, _len, _ref;
      df = document.createDocumentFragment();
      $tree = $("<div/>");
      $tree.html(context);
      _ref = $tree.find(".snacks-item");
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        item = _ref[_i];
        df.appendChild(item);
      }
      this.$el.find("ul").append(df);
      $(".snacks-newsnack-items, .snacks-related_items").trigger("attach_icon");
      $a = $tree.find(".snacks-newsnack-more a");
      if (!(0 < $a.length)) {
        this.$more.hide();
      }
    },
    setEvents: function() {
      var self;
      self = this;
      this.$more.find("a").on("click", function(event) {
        var href;
        event.preventDefault();
        href = self.getHref();
        return $.ajax(href, {
          dataType: "html"
        }).success(function(context) {
          self.success(context);
        });
      });
      return this;
    },
    init: function() {
      this.nextPage = /index_([0-9]+)\.html/.exec(this.$more.find("a").get(0).href)[1];
      this.setEvents();
      return this;
    }
  }.init();
})(fritolayApp, jQuery);
