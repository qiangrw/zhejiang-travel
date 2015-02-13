<<<<<<< HEAD
<div class="cover-static" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/taste/taste_bg.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
<div class="cover" id="taste-cover" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/taste/taste_cover.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
</div>
<script>
    // Hand Animation
    $('body').css('overflow', 'hidden');
    $('.cover').on('click', function (){
        $(this).fadeOut(500);
        var hand = $("#hand");
        hand.animate( { top: "+=6%" }, 500);
        hand.animate( { top: "-=6%" }, 500);
        hand.animate( { top: "+=6%" }, 500);
        hand.animate( { top: "-=6%" }, 500);
        $("#toolBackTo").fadeIn();
        var bubbleL = $('.taste-bubble');
        for (var i =0; i < bubbleL.length; i ++) {
            var bubble = $(bubbleL.get(i));
            bubble.css('transition-delay', Math.random() + "s");
            bubble.addClass('shown-' + bubble.data('size'))
        }

        $('body').css('overflow', 'scroll');
    });
</script>

<script type="text/javascript">
    if (window.DeviceMotionEvent) {
        window.addEventListener('devicemotion',deviceMotionHandler, false);
    }

    var SHAKE_THRESHOLD = 300;
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
                $('#taste-cover').trigger('click')
            }
            last_x = x;
            last_y = y;
            last_z = z;
        }
    }
</script>
