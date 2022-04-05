(function($) {

  function humanizeMessage(message){
    switch (message){
      case "unknown": return "Please wait...";
      case "loading": return "Loading WordPress, please wait...";
      case "running": return "Publish changes";
      case "deploying": return "Deploying the website...";
      case "pausing": return "Pausing WordPress...";
      case "paused": return "Reactivate WordPress";
      default: return message
    }
  }

  function DeployButton() {
    this.state = { wpState: "unknown" };
    this.render();
    this.componentDidMount();
  }

  DeployButton.prototype = {
    setState: function(state) {
      this.state = Object.assign({}, this.state, state);
      this.render();
    },

    componentDidMount: function() {
      var config = hardypressDeployButton;

      $.get(config.statusUrl).done(function(data) {
        this.setState({ wpState: data.wpState });
      }.bind(this));

      var pusher = new Pusher(config.pusherKey, {
        authEndpoint: config.pusherAuthEndpoint,
        auth: {
          headers: {
            "Authorization": "Bearer " + config.pusherChannelAuth
          },
        },
        cluster: config.pusherCluster,
        encrypted: true
      });

      var channel = pusher.subscribe(config.pusherChannel);

      channel.bind('siteStatusChange', function(data) {
        this.setState({ wpState: data.wpState });
      }.bind(this));
    },

    handleClick: function(e) {
      e.preventDefault();
      var config = hardypressDeployButton;

      if (this.state.wpState === "paused") {
        $.post(config.restoreUrl);
      } else if (this.state.wpState === "running") {
        $.post(config.deployUrl);
      }
    },

    handleRestore: function(e) {
      e.preventDefault();
      var config = hardypressDeployButton;

      if (this.state.wpState === "paused") {
        $.post(config.restoreUrl);
      }
    },

    render: function() {
      var $wrapper = $(".hardypress-deploy-button-wrapper");
      var className = ["hardypress-deploy-button"];

      if (this.state.wpState !== "running") {
        className.push("is-disabled");
      }

      $wrapper.empty();

      $("<button />")
        .attr("class", className.join(" "))
        .text(humanizeMessage(this.state.wpState))
        .on("click", this.handleClick.bind(this))
        .appendTo($wrapper);

      if (this.state.wpState === "paused" || this.state.wpState === "pausing" || this.state.wpState === "loading") {
        var $el = $(".hardypress-restore-pane-wrapper");

        if ($el.length === 0) {
          $el = $("<div />")
            .attr("class", "hardypress-restore-pane-wrapper")
            .appendTo("body");

          $el.on("click", ".hardypress-restore-pane__button", this.handleRestore.bind(this));
        }

        $el.empty();

        $el.html([
          "<div class='hardypress-restore-pane'>",
          "  <div class='hardypress-restore-pane__inner'>",
          "    <div class='hardypress-restore-pane__title'>",
          "      Your WordPress editor has been paused!",
          "    </div>",
          "    <div class='hardypress-restore-pane__description'>",
          "      Still want to use it? Just press the button below :)",
          "    </div>",
          "    <div class='hardypress-restore-pane__actions'>",
          "      <button class='hardypress-restore-pane__button " + (this.state.wpState === "paused" ? "" : "is-disabled") + "'>",
                   humanizeMessage(this.state.wpState),
          "      </button>",
          "    </div>",
          "  </div>",
          "</div>"
        ].join(""));
      } else {
        $(".hardypress-restore-pane-wrapper").remove();
      }
    }
  };

  $(function() { new DeployButton() });
})(jQuery);
