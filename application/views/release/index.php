<div style="background: url('<?= base_url('img/basic-bg.jpg') ?>') center no-repeat; background-size: 100% auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0">
    <div>
        <img src="<?= base_url('img/release-head.png') ?>" alt="" style="width: 40%; margin: 20px 15px;"/>
        <a href="<?= site_url('home') ?>">
        <img class="shzj-logo" src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="width: 25%; float: right; margin: 10px;"/>
        </a>
    </div>
    <div class="container">
        <div class="video-thumb">
            <a class="ui-btn ui-shadow ui-corner-all ui-icon-video ui-btn-icon-notext">Delete</a>
        </div>
        <div class="flat-card-list">
        <?php foreach ($items as $item): ?>
            <div class="flat-card">
                <h4 class="name"><?= $item->name?> <small>景区级别: <?= $item->level ?></small></h4>
                <p class="des"><?= $item->description ?></p>
                <hr/>
                <div class="price-div">
                   <span class="price-label">成人票：</span> 
                   <span class="price"><?= $item->price ?><span>
                   <span class="price-label">网络价：</span> 
                   <span class="net-price"><?= $item->net_price ?><span>
                   <a href="#">我要预订</a>
                   <br>
                   <span class="price-label">儿童票：</span> 
                   <span class="price"><?= $item->child_price ?><span>
                   <span class="price-note">暂不提供网络销售<span>
                </div>
                
                <div class="reason">
                <ul>
                <?php for ($i = 0; $i < count($item->reasons); $i += 1): ?>
                <li>
                    <span>理由<?= $i+1 ?></span>
                    <?= $item->reasons[$i] ?>
                </li>
                <?php endfor; ?>
                </ul>
                </div>


                <img src="<?= base_url('img/demo/tmp1.png') ?>" alt="" style="width: 100%"/>
            </div>
        <?php endforeach; ?>
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
