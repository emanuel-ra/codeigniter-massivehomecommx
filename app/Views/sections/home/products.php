<div class="bg-white">
    <div class="mx-auto mt-2 px-4 ease-in-out duration-150">
        <!-- max-w-2xl px-4 py-4 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8 -->
        <h2 class="sr-only">Products</h2>

        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-1 ">

            <!-- -->
            <?php foreach ($products as $index => $item): ?>
                <?php
                $img = ($item->ImgWebp == '') ? $item->Img : $item->ImgWebp;
                $path = ($item->ImgWebp == '') ? 'images/productos/' : 'images/productos-webp/';
                ?>
                <a href="<?= base_url('/product/' . $item->id) ?>" class="group">
                    <img src="https://massivehome.com.mx/<?= $path ?><?= $img ?>"
                        alt="<?= $item->nameProduct ?>"
                        class="w-full h-auto max-w-full rounded shadow "
                        onerror="this.onerror=null; this.src='https://massivehome.com.mx/images/productos/<?= $item->Img ?>';">
                    <!-- <h3 class="mt-4 text-sm text-gray-700"><?= $item->nameProduct ?></h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"><?= $item->product_code2 ?></p> -->
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
