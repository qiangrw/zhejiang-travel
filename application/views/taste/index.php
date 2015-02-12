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
    </div>
</div>
<div class="cover" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/taste/taste_bg.png') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
    <div>
        <img src="<?= base_url('img/taste/taste_logo.png') ?>" alt="诗画浙江" style="width: 50%; float: right; margin: 10px;"/>
    </div>
</div>
<div class="cover" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; background: url('<?= base_url('img/taste/taste_cover.jpg') ?>') #f6f6f6 center no-repeat; background-size: 100% auto;">
</div>
<script>
    $('.cover').on('click', function (){
        $(this).fadeOut(500);
    });
</script>
