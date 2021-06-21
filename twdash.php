<?php
include("header.php");
?>
<br>
<script src="https://embed.twitch.tv/embed/v1.js"></script>
<div class="article-box">
<iframe src="https://www.twitch.tv/embed/GamingLamasOnTwitch/chat?parent=gaminglamas.ircforever.org&darkpopout" height="500" width="350"></iframe>
</div>
<div class="article-box">
<div id="twitch-embed""></div>
<script type="text/javascript">
      var embed = new Twitch.Embed("twitch-embed", {
        width: "100%",
        height: 480,
        channel: "GamingLamasOnTwitch",
        autoplay: false,
	layout: "video",
        // Only needed if this page is going to be embedded on other websites
        parent: ["gaminglamas.ircforever.org"]
      });

      embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
        var player = embed.getPlayer();
        player.play();
      });
</script>
</div>
<?php
include("footer.php");
?>
