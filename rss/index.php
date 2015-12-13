<?php
	function getFeeds($url){
		$x= simplexml_load_file($url);
		echo "<ul>";
			foreach ($x->channel->item as $entry) {
				echo "<li><a href='$entry->link' target='_blank'>$entry->title</a></li>";
				// echo "<li>" . $entry->description . "</li>";
			}
			echo "</ul>";
	}

// echo "CNN Money!<hr/>";
// echo getFeeds("http://rss.cnn.com/rss/money_news_international.rss");
// echo "CNN World!<hr/>";
// echo getFeeds("http://rss.cnn.com/rss/edition_world.rss");
// echo "Yahoo Feeds<hr/>";
// echo getFeeds("https://sports.yahoo.com/top/rss.xml");
?>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=236564453025131";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="http://www.rahnama.af" data-layout="button_count"></div>

<a class="twitter-timeline" href="https://twitter.com/bbaheer" data-widget-id="668294475291033601">Tweets by @bbaheer</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
