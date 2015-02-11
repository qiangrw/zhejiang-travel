<div
    style="background: url('<?= base_url('img/basic-bg.jpg') ?>') center no-repeat; background-size: 100% auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0">
    <div>
        <img src="<?= base_url('img/release-head.png') ?>" alt="" style="width: 40%; margin: 20px 15px;"/>
        <img src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="width: 25%; float: right; margin: 10px;"/>
    </div>
    <div class="container">
        <div class="video-thumb">
            <a class="ui-btn ui-shadow ui-corner-all ui-icon-video ui-btn-icon-notext">Delete</a>
        </div>
        <div class="flat-card-list">
            <div class="flat-card">
                <h4 class="name">南尖岩 <small>景区级别: AAAAA</small></h4>
                <p class="des">南尖岩位于监督法了解对方垃圾感觉地方分上减肥撒开飞机撒娇福建犯困睡觉啊福建省风飒风</p>
                <hr/>
                <img src="<?= base_url('img/demo/tmp1.png') ?>" alt="" style="width: 100%"/>
            </div>
            <div class="flat-card">
                <h4 class="name">南尖岩 <small>景区级别: AAAAA</small></h4>
                <p class="des">南尖岩位于监督法了解对方垃圾感觉地方分上减肥撒开飞机撒娇福建犯困睡觉啊福建省风飒风</p>
                <hr/>
                <img src="<?= base_url('img/demo/tmp1.png') ?>" alt="" style="width: 100%"/>
            </div>
        </div>
    </div>
    <div id="release-cover" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/release.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
    </div>
</div>
<script type="text/javascript">
    $('#release-cover').on('click', function () {
        $(this).fadeOut(500, function () {
            $(this).remove();
        });
    });
</script>
