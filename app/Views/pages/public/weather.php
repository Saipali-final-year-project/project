<?= $this->extend('layouts/blog_base') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="assets/css/style4.css" type="text/css">
<section class="top-all">
    <section class="top-banner">
        <div class="container">
            <h1 class="heading"> Weather </h1>
            <form>
                <input type="text" placeholder="Search for a city" autofocus>
                <button type="submit">SUBMIT</button>
                <span class="msg"></span>
            </form>
        </div>
    </section>
    <section class="ajax-section">
        <div class="container">
            <ul class="cities"></ul>
        </div>
    </section>
</section>
<script src="assets/js/script2.js"></script>
<?= $this->endSection() ?>