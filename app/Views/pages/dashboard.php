<?= $this->extend('templates/base'); ?>
<?= $this->section('content'); ?>
<!-- You can delete this content and replace it with your own awesome and magical idea ! -->
Hello there, I'm on content ! <br>
This page is loaded from the controller with view route : <code>pages/dashboard</code>.<br>
And loaded in {elapsed_time} seconds ! <br> <br>
This app styled by Bootstrap 5.2.3, which means you can use BS 5 components based from Bootstrap 5.2 docs. <br>
And most importantly, it's free ! Cheer up ! <br>

Thanks to SB-Admin for the admin template.
This sbadmin-codeigniter4 template was made by <a href="https://github.com/gensart-ai" target="_blank">me</a> ! :)
<br><br>
Login auth page : <a href="<?= base_url('login'); ?>" target="_blank">HERE</a><br>
Register auth page : <a href="<?= base_url('register'); ?>" target="_blank">HERE</a><br>
Forgot Password auth page : <a href="<?= base_url('forgot'); ?>" target="_blank">HERE</a>
<?= $this->include('templates/global_scripts'); ?>
<script>
    addEventListener('DOMContentLoaded', _ => {
        'do whatever you need here.'
    })
</script>
<?= $this->endSection(); ?>