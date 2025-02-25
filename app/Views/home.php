<section>
    <?= $this->extend('layout') ?>

    <?= $this->section('content') ?>
    <?= view('sections/home/banner') ?>

    <main>
        <?= view('sections/home/products') ?>
    </main>

    <?= view('sections/home/catalogs') ?>
    <?= $this->endSection() ?>
</section>