<div style="background: url('<?= base_url('img/home-bg.jpg') ?>') no-repeat; background-size: 100% auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0; background-position: center bottom">
    <img src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="position: absolute; right: 10px; top: 5px; width: 120px;"/>
    <div id="home-ctrl-wrapper" style="position: absolute; left: 0; right: 0; bottom: 0; height: 300px;">
        <div id="home-ctrl" style="width: 100%; height: 100%; position: relative;">
            <a class="nav-dot" href="<?= site_url("travel") ?>" style="position: absolute; bottom: 158px; left: 12%; width: 90px;">
                <img src="<?= base_url('img/home/zly.png') ?>" alt="浙里游" style="width: 100%;"/>
            </a>
            <a class="nav-dot" href="<?= site_url("release") ?>" style="position: absolute; bottom: 219px; left: 36%; width: 78px; height: 79px;">
                <img src="<?= base_url('img/home/zlf.png') ?>" alt="浙里发" style="width: 100%;"/>
            </a>
            <a class="nav-dot" href="<?= site_url("stay") ?>" style="position: absolute; bottom: 194px; left: 62%; width: 120px; height: 125px;">
                <img src="<?= base_url('img/home/zlz.png') ?>" alt="浙里住" style="width: 100%;"/>
            </a>
            <a class="nav-dot" href="<?= site_url("buy") ?>" style="position: absolute; bottom: 38px; left: 19%; width: 78px; height: 85px;">
                <img src="<?= base_url('img/home/zlm.png') ?>" alt="浙里买" style="width: 100%;"/>
            </a>
            <a class="nav-dot" href="<?= site_url("taste") ?>" style="position: absolute; bottom: 116px; left: 69%; width: 58px; height: 60px;">
                <img src="<?= base_url('img/home/zlc.png') ?>" alt="浙里吃" style="width: 100%;"/>
            </a>
            <a class="nav-dot" href="<?= site_url("play") ?>" style="position: absolute; bottom: 38px; left: 59%; width: 70px; height: 73px; ">
                <img src="<?= base_url('img/home/zlw.png') ?>" alt="浙里玩" style="width: 100%;"/>
            </a>
            <a class="nav-center" href="#" style="position: absolute; bottom: 60px; left: 28%; width: 160px;">
                <img src="<?= base_url('img/home/zj.png') ?>" alt="浙里玩" style="width: 100%;"/>
            </a>
        </div>
    </div>
</div>
<script>
    setTimeout(function () {
        var dots = $('.nav-dot');
        for (var i = 0; i < dots.length; i++) {
            $(dots[i]).addClass('active')
        }
        $('.nav-center').addClass('active')
    }, 1000)
</script>