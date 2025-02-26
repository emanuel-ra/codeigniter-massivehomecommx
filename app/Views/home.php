<section>

    <?= $this->extend('layout') ?>

    <?= $this->section('content') ?>
    <section>
        <?= view('sections/home/banner') ?>
    </section>

    <main>
        <?= view('sections/home/products') ?>
    </main>

    <section>
        <?= view('sections/home/catalogs') ?>
    </section>

    <?= view('sections/home/aboutus') ?>
    <?= $this->endSection() ?>
</section>