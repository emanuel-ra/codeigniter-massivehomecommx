<article class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Catálogos</h2>
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-3">
            <?php foreach ($catalogs as $catalog): ?>
                <a href="<?= base_url($catalog['url']) ?>" aria-label="Descargar <?= $catalog['name'] ?>" class="group block relative">
                    <img src="<?= base_url($catalog['img']) ?>" alt="<?= $catalog['name'] ?>">
                    <h3 class="sr-only"><?= $catalog['name'] ?></h3>
                    <div class="absolute inset-0 bg-green-700 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">
                        <span class="py-2 px-4 text-white border-2 border-white rounded font-semibold shadow-sm uppercase ">Descargar</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</article>