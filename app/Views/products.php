<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="bg-white">

    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>
        <form action="" class="mb-2" method="get">

            <div class="relative w-1/4 border rounded">
                <label for="Search" class="sr-only"> Search </label>

                <input
                    type="text"
                    id="Search"
                    name="search"
                    placeholder="Search for..."
                    class="w-full rounded-md border-gray-200 py-2.5 px-2.5 pe-10 shadow-xs sm:text-sm" />

                <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                    <button type="button" class="text-gray-600 hover:text-gray-700">
                        <span class="sr-only">Search</span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-4">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>
                </span>
            </div>

        </form>

        <div class="grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            <?php foreach ($products as $product): ?>
                <a href="<?= base_url('/product/' . $product['id']) ?>" class="group">
                    <img src="https://massivehome.com.mx/images/productos/<?= $product['Img'] ?>" alt="<?= $product['nameProduct'] ?>" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                    <h3 class="mt-4 text-sm text-gray-700"><?= $product['nameProduct'] ?></h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"><?= $product['product_code2'] ?></p>
                </a>
            <?php endforeach; ?>



            <!-- More products... -->
        </div>

        <div class="mt-6">
            <?= $pager->links('default', 'tailwind_full') ?>
        </div>
    </div>

</div>

<?= $this->endSection() ?>