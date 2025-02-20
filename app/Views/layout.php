<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massive Home</title>

    <meta name="title" content="Massive Home - Importador Directo de las Mejores Marcas en Tecnología">
    <meta name="description" content="Descubre la tienda en línea líder en México, con un amplio catálogo de productos de iluminación, sonido y electrónica. Ofrecemos calidad, variedad y precios competitivos, respaldados por un servicio al cliente excepcional. ¡Tu mejor opción para equipar tu hogar o negocio!">
    <meta name="keywords" content="luminaria suburbana, bocinas, bocinas bluetooth, bocinas profesionales, bafle, iluminación solar, iluminación LED, iluminación Guadalajara, bocinas Guadalajara, distribuidores de iluminación, distribuidores de bocinas, audífonos bluetooth, audífonos inalámbricos, manos libres, cargadores, diademas, cámaras de seguridad, cámaras WiFi, focos LED, tubos LED, dispensadores automáticos, soporte para TV, ventiladores, ventiladores de techo, audio profesional, iluminación exterior, gadgets tecnológicos">
    <meta name="robots" content="index, follow">

    <!-- Meta Open Graph (Para redes sociales, especialmente Facebook y WhatsApp) -->
    <meta property="og:title" content="Massive Home - Importador Directo de las Mejores Marcas en Tecnología" />
    <meta property="og:description" content="Encuentra bocinas, iluminación LED, cámaras WiFi, audífonos, cargadores y más al mejor precio. Compra directo del importador." />
    <meta property="og:image" content="https://massivehome.com.mx/public/assets/images/brands-banner.webp" />
    <meta property="og:url" content="https://massivehome.com.mx/" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />

    <!-- Twitter Card (Para mejorar la vista en Twitter/X) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Massive Home - Importador de Tecnología" />
    <meta name="twitter:description" content="Fabricantes e importadores directos de las mejores marcas en tecnología. Encuentra bocinas, iluminación LED, cámaras WiFi, audífonos y más." />
    <meta name="twitter:image" content="https://www.tusitio.com/imagen.jpg" />

    <!-- Meta Canonical (Para evitar contenido duplicado en Google) -->
    <link rel="canonical" href="https://massivehome.com.mx/" />

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
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= view('sections/footer'); ?>

    <script src="<?= base_url('/assets/js/utils.js') ?>"></script>
</body>

</html>