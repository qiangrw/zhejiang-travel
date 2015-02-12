<style type="text/css">
    body{
        margin:0;
        padding:0;
    }
    .box{
        position: absolute;
        left:0;
        top:0;
        bottom:0;
        right: 0;
        background: none;
        background-size: 100% 100%;
        backface-visibility: hidden;
        overflow: hidden;
        z-index: 100000;
    }
    #cas{
        width: 100%;
        height: 100%;
        opacity: 1;
        -webkit-transition:opacity .5s;
        -ms-transition:opacity .5s;
        -moz-transition:opacity .5s;
    }
</style>
<div class="cover" style="background: url('<?= base_url('img/stay/stay_cover.jpg') ?>') center; background-size: 100% auto;">
    <div>
        <img src="<?= base_url('img/stay/stay_logo.png') ?>" alt="" style="width: 40%; margin: 20px 15px;"/>
        <a href="<?= site_url('home') ?>">
        <img src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="width: 25%; float: right; margin: 10px;"/>
        </a>
    </div>
    <img src="" alt="" style="width: 100%; position: absolute; top: 0;"/>
    <div class="stay-nav-wrapper">
        <a class="stay-nav" href="<?= site_url('stay/detail') ?>" style="background: url('<?= base_url('img/stay/stay-nav.png') ?>') 0 0;"></a>
        <a class="stay-nav" href="<?= site_url('stay/detail') ?>" style="background: url('<?= base_url('img/stay/stay-nav.png') ?>') 33% 0;"></a>
        <a class="stay-nav" href="<?= site_url('stay/detail') ?>" style="background: url('<?= base_url('img/stay/stay-nav.png') ?>') 66% 0;"></a>
        <a class="stay-nav" href="<?= site_url('stay/detail') ?>" style="background: url('<?= base_url('img/stay/stay-nav.png') ?>') 99% 0;"></a>
    </div>
</div>
<div class="box" id="bb">
    <canvas id="cas" width="1080" height="1920"></canvas>
</div>
<script type="text/javascript">
    var img = new Image();
    img.src = "<?= base_url('img/stay/stay_cover2.jpg') ?>";
    img.addEventListener('load', function() {
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        tapClip();
    }, false);
//    setTimeout(function() {
//        ctx.drawImage(img,0,0,canvas.width,canvas.height);
//        tapClip();
//    }, 500);

    var canvas = document.getElementById("cas"),ctx = canvas.getContext("2d");
    var x1,y1,a=30,timeout,totimes = 100,jiange = 30;
    canvas.width = document.getElementById("bb").clientWidth;
    canvas.height = document.getElementById("bb").clientHeight;

    function enter_scene() {
        $('#bb').fadeOut(500, function () {
            $(this).remove();
            var itmL = $('.stay-nav');
            for (var i = 0; i < itmL.length; i++) {
                var itm = $(itmL[i]);
                itm.css('transition-delay', i * 0.1 + "s");
                itm.addClass('shown')
            }
        });
        $('.cover').fadeIn(300);
    }

    //通过修改globalCompositeOperation来达到擦除的效果
    function tapClip(){
        var hastouch = "ontouchstart" in window?true:false,
            tapstart = hastouch?"touchstart":"mousedown",
            tapmove = hastouch?"touchmove":"mousemove",
            tapend = hastouch?"touchend":"mouseup";

        ctx.lineCap = "round";
        ctx.lineJoin = "round";
        ctx.lineWidth = a*2;
        ctx.globalCompositeOperation = "destination-out";

        canvas.addEventListener(tapstart , function(e){
            clearTimeout(timeout);
            e.preventDefault();

            x1 = hastouch?e.targetTouches[0].pageX:e.clientX-canvas.offsetLeft;
            y1 = hastouch?e.targetTouches[0].pageY:e.clientY-canvas.offsetTop;

            ctx.save();
            ctx.beginPath();
            ctx.arc(x1,y1,1,0,2*Math.PI);
            ctx.fill();
            ctx.restore();

            canvas.addEventListener(tapmove , tapmoveHandler);
            canvas.addEventListener(tapend , function(){
                canvas.removeEventListener(tapmove , tapmoveHandler);

                timeout = setTimeout(function(){
                    var imgData = ctx.getImageData(0,0,canvas.width,canvas.height);
                    var dd = 0;
                    for(var x=0;x<imgData.width;x+=jiange){
                        for(var y=0;y<imgData.height;y+=jiange){
                            var i = (y*imgData.width + x)*4;
                            if(imgData.data[i+3] >0){
                                dd++
                            }
                        }
                    }
                    if(dd/(imgData.width*imgData.height/(jiange*jiange))<0.35){
                        enter_scene()
                    }
                },totimes)
            });
            function tapmoveHandler(e){
                clearTimeout(timeout)
                e.preventDefault()
                x2 = hastouch?e.targetTouches[0].pageX:e.clientX-canvas.offsetLeft;
                y2 = hastouch?e.targetTouches[0].pageY:e.clientY-canvas.offsetTop;

                ctx.save();
                ctx.moveTo(x1,y1);
                ctx.lineTo(x2,y2);
                ctx.stroke();
                ctx.restore();

                x1 = x2;
                y1 = y2;
            }
        })
    }

    //使用clip来达到擦除效果
    function otherClip(){
        var hastouch = "ontouchstart" in window?true:false,
            tapstart = hastouch?"touchstart":"mousedown",
            tapmove = hastouch?"touchmove":"mousemove",
            tapend = hastouch?"touchend":"mouseup";

        canvas.addEventListener(tapstart , function(e){
            clearTimeout(timeout)
            e.preventDefault();

            x1 = hastouch?e.targetTouches[0].pageX:e.clientX-canvas.offsetLeft;
            y1 = hastouch?e.targetTouches[0].pageY:e.clientY-canvas.offsetTop;

            ctx.save()
            ctx.beginPath()
            ctx.arc(x1,y1,a,0,2*Math.PI);
            ctx.clip()
            ctx.clearRect(0,0,canvas.width,canvas.height);
            ctx.restore();

            canvas.addEventListener(tapmove , tapmoveHandler);
            canvas.addEventListener(tapend , function(){
                canvas.removeEventListener(tapmove , tapmoveHandler);

                timeout = setTimeout(function(){
                    var imgData = ctx.getImageData(0,0,canvas.width,canvas.height);
                    var dd = 0;
                    for(var x=0;x<imgData.width;x+=jiange){
                        for(var y=0;y<imgData.height;y+=jiange){
                            var i = (y*imgData.width + x)*4;
                            if(imgData.data[i+3] >0){
                                dd++
                            }
                        }
                    }
                    if(dd/(imgData.width*imgData.height/(jiange*jiange))<0.35){
                        enter_scene()
                    }
                },totimes)

            });

            function tapmoveHandler(e){
                e.preventDefault()
                x2 = hastouch?e.targetTouches[0].pageX:e.clientX-canvas.offsetLeft;
                y2 = hastouch?e.targetTouches[0].pageY:e.clientY-canvas.offsetTop;

                var asin = a*Math.sin(Math.atan((y2-y1)/(x2-x1)));
                var acos = a*Math.cos(Math.atan((y2-y1)/(x2-x1)));
                var x3 = x1+asin;
                var y3 = y1-acos;
                var x4 = x1-asin;
                var y4 = y1+acos;
                var x5 = x2+asin;
                var y5 = y2-acos;
                var x6 = x2-asin;
                var y6 = y2+acos;

                ctx.save()
                ctx.beginPath()
                ctx.arc(x2,y2,a,0,2*Math.PI);
                ctx.clip()
                ctx.clearRect(0,0,canvas.width,canvas.height);
                ctx.restore();

                ctx.save()
                ctx.beginPath()
                ctx.moveTo(x3,y3);
                ctx.lineTo(x5,y5);
                ctx.lineTo(x6,y6);
                ctx.lineTo(x4,y4);
                ctx.closePath();
                ctx.clip()
                ctx.clearRect(0,0,canvas.width,canvas.height);
                ctx.restore();

                x1 = x2;
                y1 = y2;
            }
        })
    }
</script>