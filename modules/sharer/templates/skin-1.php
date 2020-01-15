<?php

/*

type: layout

name: Skin 1

description: Skin 1

*/
?>

<script>mw.lib.require('font_awesome');</script>

<ul class="socials labels center">
    <?php if ($facebook_enabled) { ?>
        <li><a target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print mw()->url->current(); ?>" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a></li>
    <?php } ?>

    <?php if ($twitter_enabled) { ?>
        <li><a href="https://twitter.com/intent/tweet?text=<?php print content_title(); ?>&url=<?php print mw()->url->current(); ?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a></li>
    <?php } ?>

    <?php if ($googleplus_enabled) { ?>
        <li><a href="https://plus.google.com/share?url=<?php print mw()->url->current(); ?>" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i> <span>Google +</span></a></li>
    <?php } ?>

    <?php if ($pinterest_enabled) { ?>
        <script type="text/javascript">
            if (!mw.pinMarklet) {
                mw.pinMarklet = function () {
                    var script = mwd.createElement('script');
                    script.src = '//assets.pinterest.com/js/pinmarklet.js';
                    mwd.body.appendChild(script)
                }
            }
        </script>

        <li><a href="javascript:mw.pinMarklet();" class="pinterest" target="_self"><i class="fa fa-pinterest"></i> <span>Pinterest</span></a></li>
    <?php } ?>

    <?php if ($linkedin_enabled) { ?>
        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php print url_current(); ?>&title=<?php print page_title(); ?>&summary=&source=LinkedIn" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a></li>
    <?php } ?>

    <?php if ($viber_enabled) { ?>
        <li class="hidden-lg hidden-md"><a href="#" id="viber_share"><i class="fa fa-viber"></i> <span>Viber</span></a></li>
        <script>
            var buttonID = "viber_share";
            var text = "Check this out: ";
            document.getElementById(buttonID)
                .setAttribute('href', "https://3p3x.adj.st/?adjust_t=u783g1_kw9yml&adjust_fallback=https%3A%2F%2Fwww.viber.com%2F%3Futm_source%3DPartner%26utm_medium%3DSharebutton%26utm_campaign%3DDefualt&adjust_campaign=Sharebutton&adjust_deeplink=" + encodeURIComponent("viber://forward?text=" + encodeURIComponent(text + " " + window.location.href)));
        </script>
    <?php } ?>

    <?php if ($whatsapp_enabled) { ?>
        <li><a href="whatsapp://send?text=Check this out: <?php print url_current(); ?> " data-action="share/whatsapp/share" class="hidden-lg hidden-md"><i class="fa fa-whatsapp"></i> <span>WhatsApp</span></a></li>
    <?php } ?>
</ul>

