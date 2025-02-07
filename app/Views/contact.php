<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="w-full mt-4 mb-4">
    <div class="flex justify-center items-center">

        <div class="flex flex-col gap-4 w-10/12">
            <h2 class="text-4xl">Sucursales</h2>
            <blockquote class="text-lg mt-4">
                Encuentra tu sucursal más cercana y visítanos hoy mismo. ¡Te esperamos!
            </blockquote>
            <div class="flex justify-center flex-wrap gap-8">
                <?php foreach ($branches as $branch): ?>
                    <address class="flex flex-col w-80 bg-slate-200/50 p-7 rounded-lg shadow-md shadow-slate-200 ">
                        <h2 class="text-xl font-semibold"><?= $branch['name'] ?></h2>
                        <blockquote><?= $branch['address'] ?></blockquote>
                    </address>
                <?php endforeach   ?>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>