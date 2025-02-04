<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>

        <div class="grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

            <?php foreach ($products as $index => $item): ?>
                <a href="/product/<?= $item->id ?>" class="group">
                    <img src="https://massivehome.com.mx/images/productos/<?= $item->Img ?>" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                    <h3 class="mt-4 text-sm text-gray-700"><?= $item->nameProduct ?></h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"><?= $item->product_code2 ?></p>
                </a>
            <?php endforeach; ?>

            <div class="mt-8 flex justify-center w-full">
                <a href="/products" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    See More Products
                </a>
            </div>
            <!-- More products... -->
        </div>
    </div>
</div>