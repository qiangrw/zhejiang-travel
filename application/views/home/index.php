<div class="master">
    <div class="master-img" style="background: url('<?= base_url('img/home-bg.jpg') ?>') center; background-size: 100% auto;"></div>
    <img src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="position: absolute; right: 10px; top: 5px; width: 120px;"/>
    <div id="home-ctrl-wrapper" style="position: absolute; left: 0; right: 0; bottom: 0; height: 300px;">
        <div id="home-ctrl" style="width: 100%; height: 100%; position: relative;">
            <a class="nav-dot" href="<?= site_url("travel") ?>" style="position: absolute; bottom: 40%; left: 6%; width: 25%;">
                <img src="<?= base_url('img/home/zly.png') ?>" alt="浙里游" style="width: 100%;"/>
            </a>
<!--            <a class="nav-dot" href="--><?//= site_url("release") ?><!--" style="position: absolute; bottom: 65%; left: 36%; width: 78px; height: 79px;">-->
<!--                <img src="--><?//= base_url('img/home/zlf.png') ?><!--" alt="浙里发" style="width: 100%;"/>-->
<!--            </a>-->
            <a class="nav-dot" href="<?= site_url("stay") ?>" style="position: absolute; bottom: 50%; left: 50%; width: 32%;">
                <img src="<?= base_url('img/home/zlz.png') ?>" alt="浙里住" style="width: 100%;"/>
            </a>
            <a class="nav-dot" href="<?= site_url("buy") ?>" style="position: absolute; bottom: 5%; left: 15%; width: 15%;">
                <img src="<?= base_url('img/home/zlm.png') ?>" alt="浙里买" style="width: 100%;"/>
            </a>
            <a class="nav-dot" href="<?= site_url("taste") ?>" style="position: absolute; bottom: 35%; left: 75%; width: 12%;">
                <img src="<?= base_url('img/home/zlc.png') ?>" alt="浙里吃" style="width: 100%;"/>
            </a>
            <a class="nav-dot" href="<?= site_url("play") ?>" style="position: absolute; bottom: 5%; left: 68%; width: 16%;">
                <img src="<?= base_url('img/home/zlw.png') ?>" alt="浙里玩" style="width: 100%;"/>
            </a>
            <a class="nav-center" href="#" style="position: absolute; bottom: 12%; left: 28%; width: 40%;">
                <img src="<?= base_url('img/home/zj.png') ?>" alt="浙里玩" style="width: 100%;"/>
            </a>
        </div>
    </div>
</div>
<script>
    $('.master-img').fadeIn(800);
    setTimeout(function () {
        var dots = $('.nav-dot');
        for (var i = 0; i < dots.length; i++) {
            $(dots[i]).css('transition-delay', Math.random() * Math.random() * 1.5 + "s");
            $(dots[i]).addClass('active')
        }
        $('.nav-center').addClass('active')
    }, 500);
</script>