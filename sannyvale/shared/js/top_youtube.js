var onYouTubeIframeAPIReady;

(function(app, $) {
  "use strict";
  var YouTube, videoLocate;
  YouTube = (function() {
    function YouTube(vid, targetId) {
      this.$el = $(".bxslider");
      this.targetId = targetId;
      this.videoId = vid;
      this.ready = false;
      this.isPlay = false;
      this.player = {};
      this.setEvents();
    }

    YouTube.prototype.onYouTubeIframeAPIReady = function() {
      var self;
      self = this;
      if (!this.ready) {
        return false;
      }
      this.player = new YT.Player(this.targetId, {
        width: "640",
        height: "390",
        videoId: this.videoId,
        playerVars: {
          playlist: [this.videoId],
          loop: 1,
          showinfo: 0,
          controls: 0,
          autoplay: 1,
          rel: 0,
          disablekb: 1
        },
        events: {
          onReady: function(event) {
            return self.onPlayerReady(event);
          },
          onStateChange: function(event) {
            return self.onPlayerStateChange(event);
          }
        }
      });
    };

    YouTube.prototype.onDestroyPlayer = function() {
      if (this.ready && "destroy" in this.player) {
        this.player.destroy();
      }
    };

    YouTube.prototype.onPlayerReady = function(event) {
      event.target.playVideo();
    };


    /**
    *
    * YT.PlayerState.PLAYING
    *   -1 - 未開始           
    *    0 - YT.PlayerState.ENDED     終了             
    *    1 - YT.PlayerState.PLAYING   再生中           
    *    2 - YT.PlayerState.PAUSED    一時停止         
    *    3 - YT.PlayerState.BUFFERING バッファリング中 
    *    5 - YT.PlayerState.CUED      頭出し済み
     */

    YouTube.prototype.onPlayerStateChange = function(event) {
      var self;
      self = this;
      if (event.data === YT.PlayerState.PLAYING && !this.isPlay) {
        this.isPlay = true;
        setTimeout(function() {
          self.$el.trigger("SLIDER_PLAY");
        }, 5000);
      }
    };

    YouTube.prototype.setEvents = function() {
      var self;
      self = this;
      this.$el.on("YOUTUBE_API_READY", function() {
        self.ready = true;
      });
      this.$el.on("YOUTUBE_PLAY", function() {
        self.player.seekTo(0);
        self.player.playVideo();
      });
      this.$el.on("YOUTUBE_RENDER_PLAYER", function() {
        self.onYouTubeIframeAPIReady();
      });
      this.$el.on("YOUTUBE_DESTROY_PLAYER", function() {
        self.onDestroyPlayer();
      });
      return this;
    };

    return YouTube;

  })();
  videoLocate = $(".bxslider").find(".home-player a").attr("href").replace(/^(?:.*\/)([^\/]*)$/, "$1");
  app.youtube = new YouTube(videoLocate, "player");
})(fritolayApp, jQuery);

onYouTubeIframeAPIReady = function() {
  $(".bxslider").trigger("YOUTUBE_API_READY");
};
