<?php

/*

type: layout

name: Skin-1

description: Skin-1 Twitter Feed

*/

?>

<style>
    .twitter-feed-skin-1 {
        text-align: center;
    }

    .twitter-feed-skin-1 li {
        margin-bottom: 20px;
    }
</style>
<?php if ($items): ?>
    <div class="twitter-feed-skin-1">
        <ul class="widget-twitter m-t-60">
            <?php foreach ($items as $tweet): ?>
                <?php echo $tweet['name']; ?> @<?php echo $tweet['screen_name']; ?>
                <li>
                    <span>
                    <?php

                    $tweetText = $tweet['text'];
                    $hashPattern = '/\#([A-Za-z0-9\_]+)/i';
                    $mentionPattern = '/\@([A-Za-z0-9\_]+)/i';
                    $urlPattern = '/(http[s]?\:\/\/[^\s]+)/i';
                    $robotsFollow = false;

                    $tweetText = preg_replace($urlPattern, '<a href="$1" rel="nofollow"' . '>$1</a>', $tweetText);
                    $tweetText = preg_replace($hashPattern, '<a href="http://twitter.com/hashtag/$1" >#$1</a>', $tweetText);
                    $tweetText = preg_replace($mentionPattern, '<a href="http://twitter.com/$1">@$1</a>', $tweetText);

                    print ($tweetText); ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
