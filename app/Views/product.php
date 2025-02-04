<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="flex w-full justify-center mt-4 mb-4 ">
    <div class="product-gallery flex flex-col w-1/4 ">
        <div class="main-image">
            <img id="mainImage" src="https://massivehome.com.mx/images/productos/<?= $product[0]->Img ?>" alt="Product Image" class="w-full max-w-lg h-auto">
        </div>
        <div class="thumbnails grid grid-cols-5 gap-2 mt-2">
            <img class="thumbnail w-24 h-auto cursor-pointer transition-transform duration-200 hover:scale-110" src="https://massivehome.com.mx/images/productos/<?= $product[0]->Img ?>" alt="Thumbnail 1" onclick="changeImage('https://massivehome.com.mx/images/productos/<?= $product[0]->Img ?>')">
            <?php foreach ($gallery as $index => $item): ?>
                <img class="thumbnail w-24 h-auto cursor-pointer transition-transform duration-200 hover:scale-110" src="https://massivehome.com.mx/images/productos/<?= $item->img ?>" alt="Thumbnail 2" onclick="changeImage('https://massivehome.com.mx/images/productos/<?= $item->img ?>')">
            <?php endforeach; ?>
            <!-- Add more thumbnails as needed -->
        </div>
    </div>
    <div class="w-1/4 px-4">
        <h1 class="text-3xl font-bold"><?= $product[0]->nameProduct ?></h1>
        <p class="text-lg font-medium text-gray-900"><?= $product[0]->product_code2 ?></p>

        <?php
        // Assuming you have a database connection set up
        $db = \Config\Database::connect();
        $builder = $db->table('datasheetproductsdescription');

        // Fetch product details
        $builder->select('title,desciption');
        $builder->where('product_code', $product[0]->product_code);
        $builder->where('iShow', 1);
        $query = $builder->get();
        $productDescription = $query->getRow();
        ?>


        <?php if ($productDescription): ?>
            <p class="text-xl font-semibold text-gray-700"><?= $productDescription->title ?></p>
            <p class="text-md text-gray-600 mt-2"><?= $productDescription->desciption ?></p>
        <?php endif; ?>

    </div>

</div>
<div class="flex w-full justify-center mt-4 mb-4 ">
    <?php
    // Fetch product specifications
    $specBuilder = $db->table('datasheetproductsspecifications');
    $specBuilder->select('id, title');
    $specBuilder->where('product_code', $product[0]->product_code);
    $specBuilder->where('iShow', 1);
    $specQuery = $specBuilder->get();
    $productSpecifications = $specQuery->getResult();

    foreach ($productSpecifications as $specification) {
        // Fetch specification details
        $detailBuilder = $db->table('datasheetproductssubspecifications');
        $detailBuilder->select('iModulo, iOrden, desciption');
        $detailBuilder->where('specificationsId', $specification->id);
        $detailQuery = $detailBuilder->get();
        $specificationDetails = $detailQuery->getResult();

        echo '<div class="specification">';
        echo '<h2 class="text-2xl font-bold">' . $specification->title . '</h2>';
    ?>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">

                <?php foreach ($specificationDetails as $detail): ?>
                    <?php if ($detail->iModulo == 1): ?>
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"><?= $detail->desciption ?></td>
                        </tr>
                    <?php endif; ?>

                    <?php if ($detail->iModulo == 2): ?>
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"><?= $detail->desciption ?></td>

                        <?php endif; ?>
                        <?php if ($detail->iModulo == 3): ?>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"><?= $detail->desciption ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>

            </table>
        </div>
    <?php
        echo '</div>';
    }
    ?>
</div>

<script>
    function changeImage(imagePath) {
        document.getElementById('mainImage').src = imagePath;
    }
</script>

<?= $this->endSection() ?>