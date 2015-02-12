<div class="cover">
    <div>
        <img src="<?= base_url('img/stay/stay_logo.png') ?>" alt="" style="width: 40%; margin: 20px 15px;"/>
        <a href="<?= site_url('home') ?>">
        <img class="shzj-logo" src="<?= base_url('img/shzj.png') ?>" alt="诗画浙江" style="width: 25%; float: right; margin: 10px;"/>
        </a>
    </div>
    <div class="container">
        <div class="video-thumb">
            <img src="<?= base_url('img/stay/stay_banner.png') ?>" alt="" style="width: 100%;"/>
        </div>

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
