<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <?= view('sections/home/banner') ?>
    <?= view('sections/home/products') ?>
<?= $this->endSection() ?>