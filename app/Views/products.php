<?= $this->extend('layout') ?>

<?= $this->section('content') ?>


<section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <!-- <header>
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

            <p class="mt-4 max-w-md text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                dicta incidunt est ipsam, officia dolor fugit natus?
            </p>
        </header> -->

        <form class="mt-8 sm:flex sm:items-center sm:justify-between">
            <div class="block sm:hidden">
                <button
                    class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                    <span class="text-sm font-medium"> Filters & Sorting </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-4 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>

            <div class="hidden sm:flex sm:gap-4">
                <div class="relative">
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary
                            class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                            <span class="text-sm font-medium"> Categorías </span>

                            <span class="transition group-open:-rotate-180">
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
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </summary>

                        <div
                            class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                            <div class="w-96 rounded-sm border border-gray-200 bg-white">
                                <header class="flex items-center justify-between p-4">
                                    <span class="text-sm text-gray-700"> 0 Selected </span>

                                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                        Reset
                                    </button>
                                </header>

                                <ul class="space-y-1 border-t border-gray-200 p-4">

                                    <?php foreach ($categories as $category): ?>
                                        <li>
                                            <label for="FilterCategory<?= $category['id'] ?>" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterCategory<?= $category['id'] ?>"
                                                    name="category[]"
                                                    value="<?= $category['id'] ?>"
                                                    class="size-5 rounded-sm border-gray-300" />

                                                <span class="text-sm font-medium text-gray-700"> <?= $category['categoryName'] ?> </span>
                                            </label>
                                        </li>
                                    <?php endforeach; ?>


                                </ul>
                            </div>
                        </div>
                    </details>
                </div>

                <div class="relative">
                    <div class="relative border rounded">
                        <label for="Search" class="sr-only"> Search </label>

                        <input
                            type="text"
                            id="Search"
                            name="search"
                            value="<?= $search ?>"
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

                </div>
                <div>
                    <button class="inline-block rounded border border-blue-600 bg-blue-600 p-2 text-white hover:bg-transparent hover:text-blue-600 focus:ring-3 focus:outline-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </button>
                </div>
                <!-- <div class="relative">
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary
                            class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                            <span class="text-sm font-medium"> Price </span>

                            <span class="transition group-open:-rotate-180">
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
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </summary>

                        <div
                            class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                            <div class="w-96 rounded-sm border border-gray-200 bg-white">
                                <header class="flex items-center justify-between p-4">
                                    <span class="text-sm text-gray-700"> The highest price is $600 </span>

                                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                        Reset
                                    </button>
                                </header>

                                <div class="border-t border-gray-200 p-4">
                                    <div class="flex justify-between gap-4">
                                        <label for="FilterPriceFrom" class="flex items-center gap-2">
                                            <span class="text-sm text-gray-600">$</span>

                                            <input
                                                type="number"
                                                id="FilterPriceFrom"
                                                placeholder="From"
                                                class="w-full rounded-md border-gray-200 shadow-xs sm:text-sm" />
                                        </label>

                                        <label for="FilterPriceTo" class="flex items-center gap-2">
                                            <span class="text-sm text-gray-600">$</span>

                                            <input
                                                type="number"
                                                id="FilterPriceTo"
                                                placeholder="To"
                                                class="w-full rounded-md border-gray-200 shadow-xs sm:text-sm" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </details>
                </div> -->
            </div>

            <!-- <div class="hidden sm:block">
                <label for="SortBy" class="sr-only">SortBy</label>

                <select id="SortBy" class="h-10 rounded-sm border-gray-300 text-sm">
                    <option>Sort By</option>
                    <option value="Title, DESC">Title, DESC</option>
                    <option value="Title, ASC">Title, ASC</option>
                    <option value="Price, DESC">Price, DESC</option>
                    <option value="Price, ASC">Price, ASC</option>
                </select>
            </div> -->
        </form>

        <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($products as $product): ?>
                <li>
                    <a href="<?= base_url('/product/' . $product['id']) ?>" class="group block overflow-hidden">
                        <img
                            src="https://massivehome.com.mx/images/productos/<?= $product['Img'] ?>"
                            alt="<?= $product['nameProduct'] ?>"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                        <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                <?= $product['nameProduct'] ?>
                            </h3>

                            <p class="mt-2">
                                <span class="sr-only"> Code </span>

                                <span class="tracking-wider text-gray-900"> <?= $product['product_code2'] ?> </span>
                            </p>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>


        </ul>
        <div class="mt-6">
            <?= $pager->links('default', 'tailwind_full') ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>