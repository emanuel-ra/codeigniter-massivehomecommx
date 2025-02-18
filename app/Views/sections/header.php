<header class="bg-white">
    <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
        <a class="block text-teal-600" href="#">
            <span class="sr-only">Home</span>
            <img src="<?= base_url('/assets/images/logo-massivehome.webp') ?>" alt="Fabricantes e importadores directos de las marcas megaluz, link bits, AEK Cyber, Cozyna, entre otras" />
        </a>

        <div class="flex flex-1 items-center justify-end md:justify-between">
            <nav aria-label="Global" class="hidden md:block">
                <ul class="flex items-center gap-6 text-sm">
                    <li>
                        <a class="text-gray-500 transition hover:text-gray-500/75" href="<?= base_url() ?>"> Inicio </a>
                    </li>

                    <li>
                        <a class="text-gray-500 transition hover:text-gray-500/75" href="<?= base_url('/products') ?>"> Productos </a>
                    </li>

                    <li>
                        <a class="text-gray-500 transition hover:text-gray-500/75" href="<?= base_url('/contact') ?>"> Contacto </a>
                    </li>

                    <li>
                        <a class="text-gray-500 transition hover:text-gray-500/75" target="_blank" href="https://linkbits.larksuite.com/share/base/form/shruszHIle2siCK5MVDuKY6q84e"> Devoluciones </a>
                    </li>

                </ul>
            </nav>

            <div class="flex items-center gap-4">
                <button
                    class="block rounded-sm bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden">
                    <span class="sr-only">Toggle menu</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div>
        <img src="<?= base_url('/assets/images/brands-banner.webp') ?>" alt="Fabricantes e importadores directos de las marcas megaluz, link bits, AEK Cyber, Cozyna, entre otras" />
    </div>
</header>