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

        <?php foreach ($items as $tweet): ?>
            <div class="row">
                <div class="col-12">
                    <i class="fab fa-twitter safe-element"></i>
                </div>
                <div class="col-12">
                    <h4><?php echo $tweet['name']; ?> </h4>
                </div>
                <div class="col-12">
                    <p>@<?php echo $tweet['screen_name']; ?></p>
                </div>
            </div>

            <div class="m-t-40">
                <p>
                    <?php
                    $tweetText = $tweet['text'];
                    $hashPattern = '/\#([A-Za-z0-9\_]+)/i';
                    $mentionPattern = '/\@([A-Za-z0-9\_]+)/i';
                    $urlPattern = '/(http[s]?\:\/\/[^\s]+)/i';
                    $robotsFollow = false;

                    $tweetText = preg_replace($urlPattern, '<a href="$1" rel="nofollow"' . '>$1</a>', $tweetText);
                    $tweetText = preg_replace($hashPattern, '<a href="http://twitter.com/hashtag/$1" >#$1</a>', $tweetText);
                    $tweetText = preg_replace($mentionPattern, '<a href="http://twitter.com/$1">@$1</a>', $tweetText);

                    print ($tweetText);
                    ?>
                </p>
            </div>
        <?php endforeach; ?>

    </div>
<?php endif; ?>
