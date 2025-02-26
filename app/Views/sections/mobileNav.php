<div id="mobileMenu" class="absolute bg-black/80 z-10 w-full h-dvh p-2 hidden">
    <div class="flex flex-col bg-white rounded py-2 w-full h-full shadow-sm ">
        <div class="flex justify-end px-4">
            <a href="javascript:void(0)" onclick="toggleMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-square-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                    <path d="M9 9l6 6m0 -6l-6 6" />
                </svg>
            </a>
        </div>
        <div class="flex justify-center mt-4 w-full ">
            <a class="block text-teal-600" href="#">
                <span class="sr-only">Massive Home</span>
                <img src="<?= base_url('/assets/images/logo-massivehome.webp') ?>" alt="Fabricantes e importadores directos de las marcas MegaLuz, link bits, AEK Cyber, Cozyna, entre otras" />
            </a>
        </div>
        <div class="w-full px-4">
            <ul class="flex flex-col gap-4 justify-center">
                <li><a class="text-gray-500 transition hover:text-gray-500/75" href="<?= base_url() ?>">Inicio</a></li>
                <li><a class="text-gray-500 transition hover:text-gray-500/75" href="<?= base_url('/products') ?>">Categorías</a></li>
                <li><a class="text-gray-500 transition hover:text-gray-500/75" href="<?= base_url('/contact') ?>">Contactos</a></li>
                <li>
                    <a class="text-gray-500 transition hover:text-gray-500/75 flex" href="<?= base_url('/contact') ?>">
                        <span class="text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>
                        </span>
                        Store
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>