<div class="cover">
    <div>
        <img src="<?= base_url('img/play/play_logo.png') ?>" alt="" style="width: 40%; margin: 20px 15px;"/>
        <a href="<?= site_url('home') ?>">
        <img class="shzj-logo" src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="width: 25%; float: right; margin: 10px;"/>
        </a>
    </div>
    
    <div class="place">
        <img src="<?= base_url('img/play/bg1.png') ?>" alt="" style="width: 100%"/>
        <div class="buy-button-div">
            <a class="buy-button" href="#">立即购买</a>
        </div>
    </div>
    <div class="place">
        <div>
        <img src="<?= base_url('img/play/bg2.png') ?>" alt="" style="width: 100%"/>
        <div class="buy-button-div">
            <a class="buy-button" href="#">立即购买</a>
        </div>
        </div>
    </div>
</div>
<div class="cover" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/play/play_cover.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
<div id="hint" style="display:none"> 
<center> 
<p style="font-size: 1.2em; color: green; text-shadow: 2px 2px 2px green; padding-top: 70%; font-family:'Microsoft Yahei';">
点击屏幕跳过动画
</p> 
</center> 
</div>
</div>
<script>
    for (var i = 1; i <= 6; i++) {
        $("#hint").fadeIn(1000);
        $("#hint").fadeOut(4000);
    }
    $('.cover').on('click', function (){
        $("#hint").hide();
        $(this).fadeOut(500);
    });
</script>
