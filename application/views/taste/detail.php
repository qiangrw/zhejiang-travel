<div class="cover">
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
    <div style="position: fixed; bottom: 10px; right: 5px;">
        <a href="<?= site_url('home') ?>" style="padding: 6px 10px 5px 10px; background: rgba(255, 255, 255, .9); color: #666; border: 1px solid #ccc; border-radius: 3px; text-decoration: none; font-size: 14px;">返回主页</a>
    </div>
</div>
