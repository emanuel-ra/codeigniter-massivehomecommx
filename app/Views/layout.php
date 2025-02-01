<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="<?= base_url('assets/css/app.css') ?>" rel="stylesheet">
</head>

<body>
    <?= view('sections/header'); ?>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <?= view('sections/footer'); ?>
</body>

</html>