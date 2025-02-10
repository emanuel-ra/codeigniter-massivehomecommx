<!-- Google tag (gtag.js) -->
<?php
if (ENVIRONMENT === 'production'):
?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7MQF60XMBV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7MQF60XMBV');
    </script>

<?php
endif;
?>