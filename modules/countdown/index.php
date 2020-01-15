<?php
$date = get_option('date', $params['id']);

if ($date == false or $date == '') {
    $date = date('M d, Y H:i:s');
    //Oct 31, 2019 8:37:25';
}
?>

<script>
    $(document).ready(function () {
//    if (!$('body').hasClass('mw-live-edit')) {
        var countDownDate = new Date("<?php echo $date; ?>").getTime();
        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            var mcnt = document.getElementById("mw-countdown");
            if(mcnt) {
                mcnt.innerHTML = "<div class='block-count block-count-1'>" + "<span class='counting'>" + days + "</span><div class='title'>Days</div>" + "</div>" +
                    "<div class='block-count block-count-2'>" + "<span class='counting'>" + hours + "</span><div class='title'>Hours</div>" + "</div>" +
                    "<div class='block-count block-count-3'>" + "<span class='counting'>" + minutes + "</span><div class='title'>Minutes</div>" + "</div>" +
                    "<div class='block-count block-count-4'>" + "<span class='counting'>" + seconds + " </span><div class='title'>Seconds</div>" + "</div>";

            }
            if (distance < 0) {
                clearInterval(x);
                var cnt = document.getElementById("countdown");
                if(cnt) {
                    cnt.innerHTML = '<h2 class="form-title">NOW</h2>';
                }
            }
        }, 1000);
//    }
    });
</script>

<?php if (is_admin()): ?>
    <?php print notif("Click here to edit the Countdown date"); ?>
<?php endif; ?>


