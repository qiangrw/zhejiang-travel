<div class="cover-static" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/taste/taste_bg.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
    <div class="taste-bubble-wrapper">
        <a data-size="bg" href="<?= site_url('taste/detail') ?>" class="taste-bubble" style="position: absolute; top: 50%; left: 50%; margin-left: -34%">
            东坡肉
        </a>
        <a data-size="bg" href="<?= site_url('taste/detail') ?>" class="taste-bubble" style="position: absolute; top: 50%; left: 50%; margin-left: 15%; margin-top: -20%;">
            西施舌
        </a>
        <a data-size="md" href="<?= site_url('taste/detail') ?>" class="taste-bubble" style="position: absolute; top: 50%; left: 50%; margin-left: 30%; margin-top: 50%;">
            嘉兴粽子
        </a>
        <a data-size="sm" href="<?= site_url('taste/detail') ?>" class="taste-bubble" style="position: absolute; top: 50%; left: 50%; margin-left: -30%; margin-top: -32%;">
            金华火腿
        </a>
        <a data-size="sm" href="<?= site_url('taste/detail') ?>" class="taste-bubble" style="position: absolute; top: 50%; left: 50%; margin-left: -45%; margin-top: 25%;">
            八珍糕
        </a>
    </div>
    <div>
        <img src="<?= base_url('img/taste/taste_logo.png') ?>" alt="诗画浙江" style="width: 50%; float: right; margin: 10px;"/>
        <a href="<?= site_url('home') ?>">
            <img class="shzj-logo" src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="width: 25%; float: left; margin: 10px;"/>
        </a>
    </div>
</div>
<div class="cover" id="taste-cover" style="background: url('<?= base_url('img/taste/taste_cover.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
<div id="hint" style="display:none"> 
<center> 
<p style="font-size: 1.2em; color: green; text-shadow: 2px 2px 2px green; padding-top: 70%; font-family:'Microsoft Yahei';">
点击屏幕进入吃货地图
</p> 
</center> 
</div>
</div>
<script>
    $('body').css('overflow', 'hidden');
    for (var i = 1; i <= 6; i++) {
        $("#hint").fadeIn(1000);
        $("#hint").fadeOut(4000);
    }
    $('.cover').on('click', function (){
        $(this).fadeOut(500);
        var bubbleL = $('.taste-bubble');
        for (var i =0; i < bubbleL.length; i ++) {
            var bubble = $(bubbleL.get(i));
            bubble.css('transition-delay', Math.random() + "s");
            bubble.addClass('shown-' + bubble.data('size'))
        }

        $('#hint').hide();
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
