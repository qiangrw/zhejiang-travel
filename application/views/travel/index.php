<div style="background: url('<?= base_url('img/travel-bg.jpg') ?>') center no-repeat; background-size: 100% auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0">
    <img src="<?= base_url('img/travel-cover.jpg') ?>" alt="cover" style="margin:0; width: 100%;" id="travel-cover"/>
</div>
<script type="text/javascript">
    $('#travel-cover').on('click', function (){
        $(this).fadeOut(500);
    });
    if (window.DeviceMotionEvent) {
        window.addEventListener('devicemotion',deviceMotionHandler, false);
    }
    var SHAKE_THRESHOLD = 0.1;
    var last_update = 0;
    var x, y, z, last_x, last_y, last_z;

    function deviceMotionHandler(eventData) {
        var acceleration =eventData.accelerationIncludingGravity;

        var curTime = newDate().getTime();

        if ((curTime - lastUpdate)> 100) {

            var diffTime = curTime -last_update;
            last_update = curTime;

            x = acceleration.x;
            y = acceleration.y;
            z = acceleration.z;

            var speed = Math.abs(x +y + z - last_x - last_y - last_z) / diffTime * 10000;

            if (speed > SHAKE_THRESHOLD) {
                alert("shaked!");
            }
            last_x = x;
            last_y = y;
            last_z = z;
        }
    }
</script>