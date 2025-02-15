<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="w-full mt-4 mb-4">

    <?php if (!session()->getFlashdata('message')): ?>

        <form action="<?= base_url('/contact/email') ?>" method="post" enctype='multipart/form-data' class="flex justify-center items-center w-full">
            <div class="flex flex-col gap-4 p-4 w-full lg:w-10/12">
                <h2 class="text-4xl">Contáctenos</h2>
                <blockquote class="text-lg mt-4">
                    ¿Tienes alguna duda o comentario? ¡Escríbenos! Estamos para ayudarte.
                </blockquote>

                <div class="flex flex-col lg:flex-row gap-4 mb-4">
                    <div class="flex flex-col gap-4 lg:w-1/3">
                        <label for="name">Nombre <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name" class="p-2 border border-slate-200 rounded-lg" placeholder="Nombre" required>
                    </div>
                    <div class="flex flex-col gap-4  lg:w-1/4">
                        <label for="email">Correo Electrónico <span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email" class="p-2 border border-slate-200 rounded-lg" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="flex flex-col gap-4">
                        <label for="message">Teléfono <span class="text-red-500">*</span></label>
                        <input type="text" name="phone" id="phone" class="p-2 border border-slate-200 rounded-lg" placeholder="Teléfono" required>
                    </div>
                    <div class="flex flex-col gap-4">
                        <label for="message">Estado <span class="text-red-500">*</span></label>
                        <select name="estado" id="estado" class="p-2 border border-slate-200 rounded-lg" required>
                            <option value=""></option>
                            <?php foreach ($states as $state): ?>
                                <option value="<?= $state ?>"><?= $state ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="flex flex-col gap-4">
                        <label for="message">Ser Distribuidor <span class="text-red-500">*</span></label>
                        <div class="flex gap-4 justify-center items-center ">
                            <div class="flex items-center">
                                <input id="contact-type-radio-1" type="radio" value="true" name="wantsToBeDistributor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="contact-type-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="contact-type-radio-2" type="radio" value="false" name="wantsToBeDistributor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="contact-type-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- style="display: none;" -->
                <div class="flex flex-col" id="distributorFields" style="display: none;">

                    <span class="relative flex justify-center">
                        <div
                            class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
                        <span class="relative z-10 bg-white px-6 font-semibold">Datos de Distribuidor</span>
                    </span>

                    <!-- Distribuidor -->
                    <div class="flex flex-col lg:flex-row lg:flex-wrap gap-4 mb-4">
                        <div class="flex flex-col gap-4 lg:w-1/3 ">
                            <label for="taxName">Razón Social <span class="text-red-500">*</span></label>
                            <input type="text" name="taxName" id="taxName" class="p-2 border border-slate-200 rounded-lg check-distributor" placeholder="Razón Social">
                        </div>

                        <div class="flex flex-col gap-4  lg:w-1/4">
                            <label for="rfc">RFC <span class="text-red-500">*</span></label>
                            <input type="text" name="rfc" id="rfc" class="p-2 border border-slate-200 rounded-lg check-distributor" placeholder="RFC" maxlength="13" minlength="12">
                        </div>

                        <div class="flex flex-col gap-4 lg:w-1/3">
                            <label for="regimen">Régimen Fiscal <span class="text-red-500">*</span></label>
                            <select name="regimen" id="regimen" class="p-2 border border-slate-200 rounded-lg check-distributor">
                                <option value=""></option>
                                <?php foreach ($regimenFiscal as $key => $regimen): ?>
                                    <option value="<?= "$key - $regimen" ?>"><?= "$key - $regimen" ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- <input type="text" name="regimen" id="regimen" class="p-2 border border-slate-200 rounded-lg" placeholder="Régimen Fiscal"> -->
                        </div>

                        <div class="flex flex-col gap-4  lg:w-1/3">
                            <label for="taxEmail">Correo Fiscal <span class="text-red-500">*</span></label>
                            <input type="text" name="taxEmail" id="taxEmail" class="p-2 border border-slate-200 rounded-lg check-distributor" placeholder="Correo Fiscal">
                        </div>

                        <div class="flex flex-col gap-4  lg:w-1/3">
                            <label for="comercialName">Nombre Comercial</label>
                            <input type="text" name="comercialName" id="comercialName" class="p-2 border border-slate-200 rounded-lg check-distributor" placeholder="Nombre Comercial">
                        </div>

                        <div class="flex flex-col gap-4  lg:w-1/4">
                            <label for="businessActivity">Giro o Actividad Empresarial <span class="text-red-500">*</span></label>
                            <input type="text" list="businessActivities" name="businessActivity" id="businessActivity" class="p-2 border border-slate-200 rounded-lg check-distributor" placeholder="Giro o Actividad Empresarial">
                            <datalist id="businessActivities">
                                <?php foreach ($businessActivities as $activity): ?>
                                    <option value="<?= $activity ?>"></option>
                                <?php endforeach; ?>
                            </datalist>
                        </div>
                    </div>
                    <!-- END Distribuidor -->

                    <span class="relative flex justify-center">
                        <div
                            class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
                        <span class="relative z-10 bg-white px-6 font-semibold">Datos de Dirección</span>
                    </span>

                    <!-- DIRECCIÓN -->
                    <div class="flex flex-col lg:flex-row lg:flex-wrap  gap-4  mb-4">
                        <div class="flex flex-col gap-4 lg:w-full">
                            <label for="address">Dirección </label>
                            <input type="text" name="address" id="address" class="p-2 border border-slate-200 rounded-lg" placeholder="Dirección">
                        </div>

                        <div class="flex flex-col gap-4 lg:grow">
                            <label for="neighborhood">Colonia </label>
                            <input type="text" name="neighborhood" id="neighborhood" class="p-2 border border-slate-200 rounded-lg" placeholder="Colonia">
                        </div>

                        <div class="flex flex-col gap-4 lg:grow">
                            <label for="zipCode"> Código Postal <span class="text-red-500">*</span></label>
                            <input type="text" name="zipCode" id="zipCode" class="p-2 border border-slate-200 rounded-lg check-distributor" placeholder="Código Postal">
                        </div>

                        <div class="flex flex-col gap-4 lg:grow">
                            <label for="estado2">Estado <span class="text-red-500">*</span></label>
                            <select name="estado2" id="estado2" class="p-2 border border-slate-200 rounded-lg check-distributor">
                                <option value=""></option>
                                <?php foreach ($states as $state): ?>
                                    <option value="<?= $state ?>"><?= $state ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="flex flex-col gap-4 lg:grow">
                            <label for="town">Municipio <span class="text-red-500">*</span></label>
                            <input type="text" name="town" id="town" class="p-2 border border-slate-200 rounded-lg check-distributor" placeholder="Municipio">
                        </div>


                        <!-- END DIRECCIÓN -->
                    </div>

                    <span class=" relative flex justify-center">
                        <div
                            class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
                        <span class="relative z-10 bg-white px-6 font-semibold">Datos de Verificación</span>
                    </span>

                    <!-- Verificación -->
                    <div class="flex flex-col lg:flex-row gap-4">
                        <div class="flex flex-col gap-4">
                            <label for="ineFile">INE</label>
                            <small>Identificación Oficial</small>
                            <input type="file" name="ineFile" id="ineFile" class="p-2 border border-slate-200 rounded-lg check-distributor" accept="image/png, image/jpeg">
                            <small>Maximum file size: 5 MB</small>
                        </div>

                        <div class="flex flex-col gap-4">
                            <label for="tickedFile">Recibo</label>
                            <small>Comprobante de Domicilio</small>
                            <input type="file" name="tickedFile" id="tickedFile" class="p-2 border border-slate-200 rounded-lg check-distributor" accept="image/png, image/jpeg">
                            <small>Maximum file size: 5 MB</small>
                        </div>

                        <div class="flex flex-col gap-4">
                            <label for="proofFile">Constancia</label>
                            <small>Constancia de Situación Fiscal</small>
                            <input type="file" name="proofFile" id="proofFile" class="p-2 border border-slate-200 rounded-lg check-distributor" accept="image/png, image/jpeg, application/pdf">
                            <small>Maximum file size: 5 MB</small>
                        </div>

                    </div>



                </div>
                <!-- END Verificación -->
                <div class="w-full flex">
                    <button type="submit" class="bg-blue-600 text-white p-2 rounded-lg w-full lg:w-40">Enviar</button>
                </div>
        </form>
    <?php endif; ?>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="flex flex-col gap-4 p-4 w-full lg:w-10/12">
            <div role="alert" class="rounded-xl border border-gray-100 bg-white p-4">
                <div class="flex items-start gap-4">
                    <span class="text-green-600">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>

                    <div class="flex-1">
                        <strong class="block font-medium text-gray-900"> <?= session()->getFlashdata('message'); ?> </strong>

                        <!-- <p class="mt-1 text-sm text-gray-700">Your product changes have been saved.</p> -->

                        <div class="mt-4 flex gap-2">
                            <a
                                href="<?= base_url('/') ?>"
                                class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700">
                                <span class="text-sm"> Ir a Inicio de la Pagina </span>

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
                                        d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('messageError')): ?>
        <div role="alert" class="rounded-sm border-s-4 border-red-500 bg-red-50 p-4">
            <strong class="block font-medium text-red-800"> Something went wrong </strong>

            <p class="mt-2 text-sm text-red-700">
                <?= session()->getFlashdata('message'); ?>
            </p>
        </div>
    <?php endif; ?>


    <div class="flex justify-center items-center">
        <div class="flex flex-col gap-4 w-full lg:w-10/12">
            <h2 class="text-4xl">Sucursales</h2>
            <blockquote class="text-lg mt-4">
                Encuentra tu sucursal más cercana y visítanos hoy mismo. ¡Te esperamos!
            </blockquote>

            <div>
                <label for="HeadlineAct" class="block text-sm font-medium text-gray-900"> Ciudad </label>
                <select
                    id="citySelect"
                    onchange="filterBranch(this.value)"
                    class="mt-1.5 rounded-lg border-gray-300 text-gray-700 border ">
                    <option value="">Todas</option>
                    <option value="city-MX-JAL">Guadalajara</option>
                    <option value="city-MX-NLE">Monterrey</option>
                    <option value="city-MX-CMX">CDMX</option>
                </select>
            </div>

            <div class="flex justify-center flex-wrap gap-8">
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

    </div>
</div>

<script src="<?= base_url('/assets/js/contact.js') ?>"></script>
<?= $this->endSection() ?>