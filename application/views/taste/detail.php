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
</div>
