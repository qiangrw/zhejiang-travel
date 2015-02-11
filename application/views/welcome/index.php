<div style="background: url('<?= base_url('img/welcome.png') ?>') center no-repeat; background-size: 100% auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0">
    <a href="<?= site_url("home") ?>" id="goToHome" style="display: none"></a>
</div>
<script type="text/javascript">
    setTimeout(function () {
        $('#goToHome').trigger('click');
    }, 3000)
</script>
