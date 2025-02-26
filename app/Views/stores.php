<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<div class="w-full mt-4 mb-4">
    <main>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 px-10">
            <div class="w-full">
                <h1 class="text-2xl font-bold text-center">Nuestras tiendas</h1>
                <p class="text-center">Encuentra la tienda más cercana a ti</p>
                <div class="w-full flex justify-center">
                    <select id="store" class="w-1/2 p-2 rounded-md border border-gray-300" onchange="changeStore(this.value)">
                        <option value="">Selecciona una tienda</option>
                        <!-- <option value="">Todas</option> -->
                        <option value="city-MX-JAL">Guadalajara</option>
                        <option value="city-MX-NLE">Monterrey</option>
                        <option value="city-MX-CMX">CDMX</option>
                    </select>
                </div>

                <div class="flex justify-center flex-wrap gap-5 mt-2">
                    <?php foreach ($branches as $branch): ?>
                        <?php
                        $iso = $branch["ISO3166-2-lvl4"]
                        ?>
                        <address class="flex flex-col md:w-80 bg-slate-200/50 p-7 rounded-lg shadow-md shadow-slate-200 branches-addresses city-<?= $iso ?>">
                            <h2 class="text-xl font-semibold"><?= $branch['name'] ?></h2>
                            <blockquote><?= $branch['address'] ?></blockquote>
                        </address>
                    <?php endforeach   ?>
                </div>

            </div>
            <div id="map" class="min-h-96 w-full"></div>
        </div>
    </main>
</div>


<script src="<?= base_url('/assets/js/stores.js') ?>"></script>
<?= $this->endSection() ?>