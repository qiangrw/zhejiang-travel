 <style>
        #toolBackTo {
            position: fixed;
            left: 13%;
            bottom: 20px;
            width: 50px;
            height: 75px;
            z-index: 11;
        }
        #toolBackTo a {
            display: block;
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: #a4aab4;
            background-color: rgba(164,170,180,0.5);
            background-position: 16px 19px;
            border-radius: 2px;
        }
        #toolBackTo .home-back {
            text-decoration: none;
            font-weight: normal;
            text-shadow: none;
            background-image: none;
            padding-top: 4px;
            height: 21px;
            color: white;
            letter-spacing: 2px;
            margin-top: 1px;
            text-align: center;
            position: absolute;
            top: 50px;
        }
</style>    
<div style="background: url('<?= base_url('img/basic-bg.jpg') ?>') center no-repeat; background-size: 100% auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0">
    <div>
        <img src="<?= base_url('img/taste/dpr.jpg') ?>" alt="" style="width: 100%%; margin: 0 0 15px;"/>
    </div>
    <div class="container">
        <div class="thumb-list">
            <?php foreach ($items as $item): ?>
            <div class="thumb-item">
                <img class="thumbnail" src="<?= $item->thumbnail ?>" alt=""/>
                <div class="info">
                    <h4 class="title"><?= $item->title ?></h4>
                    <p class="location"><?= $item->location ?></p>
                    <p class="comment"><?= $item->comment ?></p>
                    <p class="des"><?= $item->description ?></p>
                </div>
                <div class="price">
                <span class="appendix">$</span><strong class="number"><?= $item->price ?></strong><span class="appendix"> 起</span>
                    <br/>
                    <span class="addon"><?= $item->addon ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        
        <div id="toolBackTo" class="back-to" style="left: 80%; display:none;">
        <a href="<?= site_url('home') ?>" class="home-back" style="display: block;">首页</a>
        </div>
    </div>
</div>
<div class="cover" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/taste/taste_bg.png') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
    <div>
        <img src="<?= base_url('img/taste/taste_logo.png') ?>" alt="诗画浙江" style="width: 50%; float: right; margin: 10px;"/>
    </div>
    <div id="hand" style="background: url('<?= base_url('img/hand.png') ?>') no-repeat; background-size: 50px 50px; height: 50px; width: 50px; position: absolute; top: 45%; left: 50%;">
    </div>
</div>
<div class="cover" id="taste-cover" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/taste/taste_cover.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
</div>
<script>
    // Hand Animation
    $('.cover').on('click', function (){
        $(this).fadeOut(500);
        $("#hand").animate( { top: "+=6%" }, 500); 
        $("#hand").animate( { top: "-=6%" }, 500); 
        $("#hand").animate( { top: "+=6%" }, 500); 
        $("#hand").animate( { top: "-=6%" }, 500); 
        $("#toolBackTo").show();
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
