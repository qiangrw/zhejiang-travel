<div style="background: url('<?= base_url('img/travel-bg.jpg') ?>') center no-repeat; background-size: 100% auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0">
    <img src="<?= base_url('img/release.jpg') ?>" alt="cover" style="margin:0; width: 100%;" id="release-cover"/>
</div>
<script type="text/javascript">
    $('#release-cover').on('click', function (){
        $(this).fadeOut(500);
    });
</script>
