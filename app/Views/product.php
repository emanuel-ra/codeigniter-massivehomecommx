<?= $this->extend('layout') ?>

<?= $this->section('content') ?>


<div class="bg-white">
    <div class="pt-6">
        <!-- <nav aria-label="Breadcrumb">
            <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                    <div class="flex items-center">
                        <a href="#" class="mr-2 text-sm font-medium text-gray-900">Producto</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>


                <li class="text-sm">
                    <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"><?= $product[0]->nameProduct ?></a>
                </li>
            </ol>
        </nav> -->

        <!-- Image gallery -->
        <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <img src="https://massivehome.com.mx/images/productos/<?= $product[0]->Img ?>" alt="Two each of gray, white, and black shirts laying flat." class="hidden size-full rounded-lg object-cover lg:block">
            <?php if (count($gallery) > 0): ?>
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <?php if (isset($gallery[$i])): ?>
                            <img src="https://massivehome.com.mx/images/productos/<?= $gallery[$i]->img ?>" alt="Model wearing plain black basic tee." class="aspect-[3/2] w-full rounded-lg object-cover">
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <?php if (isset($gallery[2])): ?>
                    <img src="https://massivehome.com.mx/images/productos/<?= $gallery[2]->img ?>" alt="Model wearing plain white basic tee." class="aspect-[4/5] size-full object-cover sm:rounded-lg lg:aspect-auto">
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <!-- Product info -->
        <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"><?= $product[0]->nameProduct ?> | <?= $product[0]->product_code2 ?></h1>
            </div>

            <!-- Options -->
            <div class="mt-4 lg:row-span-3 lg:mt-0">
                <h2 class="sr-only">Product information</h2>

                <!-- right panel -->
            </div>

            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                <!-- Description and details -->
                <?php
                // Assuming you have a database connection set up
                $db = \Config\Database::connect();
                $builder = $db->table('dataSheetProductsDescription');

                // Fetch product details
                $builder->select('title,desciption');
                $builder->where('product_code', $product[0]->product_code);
                $builder->where('iShow', 1);
                $query = $builder->get();
                $productDescription = $query->getRow();
                ?>
                <?php if ($productDescription): ?>
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900"><?= $productDescription->desciption ?></p>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="mt-10">

                    <?php
                    $specBuilder = $db->table('dataSheetProductsSpecifications');
                    $specBuilder->select('id, title');
                    $specBuilder->where('product_code', $product[0]->product_code);
                    $specBuilder->where('iShow', 1);
                    $specQuery = $specBuilder->get();
                    $productSpecifications = $specQuery->getResult();
                    ?>

                    <?php foreach ($productSpecifications as $specification) :  ?>

                        <?php
                        // Fetch specification details
                        $detailBuilder = $db->table('dataSheetProductsSubSpecifications');
                        $detailBuilder->select('iModulo, iOrden, desciption');
                        $detailBuilder->where('specificationsId', $specification->id);
                        $detailQuery = $detailBuilder->get();
                        $specificationDetails = $detailQuery->getResult();
                        ?>

                        <h3 class="text-sm font-medium text-gray-900"><?= ($specification->title) ?></h3>

                        <div class="mt-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <?php foreach ($specificationDetails as $detail): ?>
                                    <?php if ($detail->desciption != '*'): ?>
                                        <li class="text-gray-400">
                                            <span class="text-gray-600">
                                                <?= $detail->desciption ?>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- <div class="mt-10">
                    <h2 class="text-sm font-medium text-gray-900">Details</h2>

                    <div class="mt-4 space-y-6">
                        <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>