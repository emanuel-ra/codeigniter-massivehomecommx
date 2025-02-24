<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>

        <div class="grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 xl:gap-x-8">

            <?php foreach ($products as $index => $item): ?>
                <?php
                $img = ($item->ImgWebp == '') ? $item->Img : $item->ImgWebp;
                $path = ($item->ImgWebp == '') ? 'images/productos/' : 'images/productos-webp/';
                ?>
                <a href="<?= base_url('/product/' . $item->id) ?>" class="group">
                    <img src="https://massivehome.com.mx/<?= $path ?><?= $img ?>"
                        alt="<?= $item->nameProduct ?>"
                        onerror="this.onerror=null; this.src='https://massivehome.com.mx/images/productos/<?= $item->Img ?>';"
                        class="aspect-square w-full bg-gray-200 group-hover:opacity-75 ">
                    <h3 class="mt-4 text-sm text-gray-700"><?= $item->nameProduct ?></h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"><?= $item->product_code2 ?></p>
                </a>
            <?php endforeach; ?>
            <!-- More products... -->
        </div>

        <div class="mb-5 flex justify-center text-center py-4" aria-label="Ver más productos">
            <a href="/products" class=" text-slate-800 hover:text-green-600 uppercase font-semibold hover:underline ease-in-out duration-150">
                Ver más
            </a>
        </div>

    </div>
</div>