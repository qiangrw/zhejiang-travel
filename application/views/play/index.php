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
    <div id="hand" style="background: url('<?= base_url('img/hand.png') ?>') no-repeat; background-size: 30px 30px; height: 30px; width: 30px; position: absolute; top: 45%; left: 50%;">
    </div>
</div>
<script>
    $("#hand").animate( { top: "+=6%" }, 500); 
    $("#hand").animate( { top: "-=6%" }, 500); 
    $("#hand").animate( { top: "+=6%" }, 500); 
    $("#hand").animate( { top: "-=6%" }, 500); 
    $('.cover').on('click', function (){
        $(this).fadeOut(500);
    });
</script>
