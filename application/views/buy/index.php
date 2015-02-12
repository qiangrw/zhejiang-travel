<div class="" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/buy/buy_bg.png') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
    <div>
        <img src="<?= base_url('img/buy/buy_logo.png') ?>" alt="" style="width: 40%; margin: 20px 15px;"/>
        <a href="<?= site_url('home') ?>">
        <img class="shzj-logo" src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="width: 25%; float: right; margin: 10px;"/>
        </a>
    </div>
    <div class="container">
        <div id="banner">
            <img src="<?= base_url('img/buy/buy_banner.png') ?>" alt="" style="width: 100%"/>
        </div>
        <div id="item-list">
          <center>
            <img src="<?= base_url('img/buy/item1.png') ?>" alt="" style="width: 23%"/>
            <img src="<?= base_url('img/buy/item2.png') ?>" alt="" style="width: 23%"/>
            <img src="<?= base_url('img/buy/item3.png') ?>" alt="" style="width: 23%"/>
            <img src="<?= base_url('img/buy/item4.png') ?>" alt="" style="width: 23%"/>
          </center>
        </div>
        
        <div id="item-info">
            <img src="<?= base_url('img/buy/item_div.png') ?>" alt="" style="width: 100%"/>
            <!--<div style="padding-left: 30%;">
                <h2>古代油纸伞</h2>
                <span>热卖价： 40元</span>
                <h3>掌柜推荐理由</h3>
                <p>这是推荐理由，这个伞特别好，特别好，特别好哟特别好用</p>
                
                <div>
                    <a href="#" class="ui-btn ui-btn-inline ui-mini">喜欢</a>
                    <a href="#" class="ui-btn ui-btn-inline ui-mini">分享</a>
                    <br />
                    <a href="#" class="ui-btn ui-btn-inline ui-mini">收藏</a>
                    <a href="#" class="ui-btn ui-btn-inline ui-mini">手机二维码</a>
                </div>
            </div>-->
        </div>   
    </div>
</div>
<div class="cover" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/buy/buy_cover_after.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
    <div id="hand" style="background: url('<?= base_url('img/hand.png') ?>') no-repeat; background-size: 50px 50px; height: 50px; width: 50px; position: absolute; top: 45%; left: 50%;">
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
