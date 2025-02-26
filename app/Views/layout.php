<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massive Home</title>

    <meta name="title" content="Massive Home - Importador Directo de las Mejores Marcas en Tecnología">
    <meta name="description" content="Con más de 20 años de experiencia, diseñamos y desarrollamos soluciones innovadoras para nuestros clientes. Como fabricante líder en China, contamos con una línea de producción que abarca el 95% de los repuestos en nuestra propia fábrica, asegurando calidad y control total en cada etapa del proceso. Nos comprometemos con la satisfacción del cliente, enfocándonos en la última tecnología del mercado para ofrecer productos adecuados y evolucionar junto a nuestros clientes.">
    <meta name="keywords" content="luminaria suburbana, bocinas, bocinas bluetooth, bocinas profesionales, bafle, iluminación solar, iluminación LED, iluminación Guadalajara, bocinas Guadalajara, distribuidores de iluminación, distribuidores de bocinas, audífonos bluetooth, audífonos inalámbricos, manos libres, cargadores, diademas, cámaras de seguridad, cámaras WiFi, focos LED, tubos LED, dispensadores automáticos, soporte para TV, ventiladores, ventiladores de techo, audio profesional, iluminación exterior, gadgets tecnológicos">
    <meta name="robots" content="index, follow">

    <!-- Meta Open Graph (Para redes sociales, especialmente Facebook y WhatsApp) -->
    <meta property="og:title" content="Massive Home - Importador Directo de las Mejores Marcas en Tecnología" />
    <meta property="og:description" content="Con más de 20 años de experiencia, diseñamos y desarrollamos soluciones innovadoras para nuestros clientes. Como fabricante líder en China, contamos con una línea de producción que abarca el 95% de los repuestos en nuestra propia fábrica, asegurando calidad y control total en cada etapa del proceso. Nos comprometemos con la satisfacción del cliente, enfocándonos en la última tecnología del mercado para ofrecer productos adecuados y evolucionar junto a nuestros clientes." />
    <meta property="og:image" content="<?= base_url() ?>assets/images/RAMON-CORONA-148.webp" />
    <meta property="og:url" content="<?= base_url() ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:site_name" content="Massive Home" />
    <meta property="og:updated_time" content="<?= date('Y-m-d') ?>" />


    <!-- Twitter Card (Para mejorar la vista en Twitter/X) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Massive Home - Importador de Tecnología" />
    <meta name="twitter:description" content="Con más de 20 años de experiencia, diseñamos y desarrollamos soluciones innovadoras para nuestros clientes. Como fabricante líder en China, contamos con una línea de producción que abarca el 95% de los repuestos en nuestra propia fábrica, asegurando calidad y control total en cada etapa del proceso. Nos comprometemos con la satisfacción del cliente, enfocándonos en la última tecnología del mercado para ofrecer productos adecuados y evolucionar junto a nuestros clientes." />
    <meta name="twitter:image" content="<?= base_url() ?>assets/images/RAMON-CORONA-148.webp" />

    <!-- Meta Canonical (Para evitar contenido duplicado en Google) -->
    <link rel="canonical" href="<?= base_url() ?>" />

    <meta name="author" content="Massive Home" />
    <meta name="copyright" content="© <?= date('Y') ?> Massive Home. Todos los derechos reservados." />


    <link rel="icon" type="image/png" href="<?= base_url() ?>/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= base_url() ?>/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MassiveHome" />
    <link rel="manifest" href="<?= base_url() ?>/site.webmanifest" />

    <link href="<?= base_url('/assets/css/app.css') ?>" rel="stylesheet">
</head>

<body>
    <?= view('sections/header'); ?>
    <?= view('sections/mobileNav'); ?>

    <?= $this->renderSection('content') ?>


    <?= view('sections/footer'); ?>

    <script src="<?= base_url('/assets/js/utils.js') ?>"></script>
</body>

</html>