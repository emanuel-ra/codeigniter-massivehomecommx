<section>
    <section>
        <?= $this->extend('layout') ?>
    </section>

    <?= $this->section('content') ?>
    <?= view('sections/home/banner') ?>

    <main>
        <?= view('sections/home/products') ?>
    </main>

    <section>
        <?= view('sections/home/catalogs') ?>
    </section>
    <?= $this->endSection() ?>
</section>