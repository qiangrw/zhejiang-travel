<div class="cover" style="background: url('<?= base_url('img/travel-cover.jpg') ?>') center no-repeat; background-size: 100% auto">
<div id="hint" style="display:none">
<center>
<p style="font-size: 0.8em; font-color: grey; text-shadow: 2px; padding-top: 10px;">晃动手机，摇曳喜糖垂杨柳</p>
</center>
</div>
</div>
<script type="text/javascript">
    $("#hint").fadeIn(1000);
    $("#hint").fadeOut(4000);
    if (window.DeviceMotionEvent) {
        window.addEventListener('devicemotion',deviceMotionHandler, false);
    }

    $('.cover').on('click', function () {
        window.location = "<?= site_url('travel/detail') ?>"
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
                window.location = "<?= site_url('travel/detail') ?>"
            }
            last_x = x;
            last_y = y;
            last_z = z;
        }
    }
 </script>
