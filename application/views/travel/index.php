<div class="cover-static" style="background: url('<?= base_url('img/travel-bg.jpg') ?>') center no-repeat; background-size: 100% auto">
    <div>
        <a href="<?= site_url('home') ?>">
            <img class="shzj-logo" src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="width: 25%; float: right; margin: 10px;"/>
        </a>
    </div>
</div>
<div class="cover" style="background: url('<?= base_url('img/travel-cover.jpg') ?>') center no-repeat; background-size: 100% auto">
<div id="hint" style="display:none">
<center>
<p style="font-size: 1.2em; color: green; text-shadow: 5px 5px 5px #FFF; padding-top: 70%; font-family:'Microsoft Yahei';">晃动手机，摇曳西塘垂杨柳</p>
</center>
</div>
</div>
<script type="text/javascript">
    $("#hint").fadeIn(1000);
    $("#hint").fadeOut(4000);
    if (window.DeviceMotionEvent) {
        window.addEventListener('devicemotion',deviceMotionHandler, false);
    }

    var cover = $('.cover').on('click', function () {
        $(this).fadeOut(500, function() {
            cover.remove();
        })
    });

    var SHAKE_THRESHOLD = 1000;
    var x, y, z, last_x, last_y, last_z;
    var lastUpdate = 0;
    function deviceMotionHandler(eventData) {
        var acceleration =eventData.accelerationIncludingGravity;
        var curTime = new Date();
        curTime = curTime.getTime();
        if ((curTime - lastUpdate)> 100) {
            var diffTime = curTime -lastUpdate;
            lastUpdate = curTime;
            x = acceleration.x;
            y = acceleration.y;
            z = acceleration.z;
            var speed = Math.abs(x +y + z - last_x - last_y - last_z) / diffTime * 10000;

            if (speed > SHAKE_THRESHOLD) {
                cover.fadeOut(500, function() {
                    cover.remove();
                })
            }
            last_x = x;
            last_y = y;
            last_z = z;
        }
    }
 </script>
