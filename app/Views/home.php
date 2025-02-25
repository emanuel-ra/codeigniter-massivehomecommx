<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <?= view('sections/home/banner') ?>
    <?= view('sections/home/products') ?>
    <?= view('sections/home/catalogs') ?>
<?= $this->endSection() ?>