<?php

/*

type: layout

name: Default

description: Default Twitter Feed

*/

?>

<style>

    .twitter-feed-default ul {
        list-style-type: none;
    }

    .twitter-feed-default ul li {
        background: #ffffff;
        padding: 25px;
        border: 1px solid #43ACEF;
        border-bottom: 0;
    }

    .twitter-feed-default ul li:last-of-type {
        border-bottom: 1px solid #43ACEF;
    }

    .twitter-feed-default ul li a,
    .twitter-feed-default ul li a:hover {
        color: #78AEDF;
        text-decoration: none;
    }

    .twitter-feed-default ul li .mw-twitter-feed-content {
        color: #757575;
    }
    
    .twitter-feed-default ul li small,
    .twitter-feed-default ul li small a {
        color: #c5c5c5;
    }

    .twitter-feed-default ul li i {
        background: #fff;
        color: #78AEDF;
        font-size: 20px;
    }


</style>

<?php if ($items): ?>
    <div class="twitter-feed-default">
        <ul class="widget-twitter margin-bottom-60 col-md-2">
            <?php foreach ($items as $tweet): ?>
                <li class="d-inline-block"><i class="fa fa-twitter"></i>
                   <span class="mw-twitter-feed-content">
                       <small>
                           <a href="<?php print $tweet['url']; ?>" target="_blank"><?php print $tweet['ago']; ?></a>
                       </small>
                       <br>
                       <br>
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
