<!DOCTYPE html>
<html lang="cs">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TDKV6ZBH');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16864908365"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16864908365');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stránka nenalezena</title>
    <meta name="description"
        content="">
    <meta property="og:title" content="Stránka nenalezena">
    <meta property="og:image" content="img/nahledovka.webp">
    <meta property="og:description" content="">
    <link rel="stylesheet" href="./style.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="robots" content="noindex, follow">
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '97a9f76550bdf438e096cb466a8239795b2ed8ee';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '984450029993165');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=984450029993165&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <?php require_once "./templates/header.php" ?>
    <main>
        <?php
            $breadcrumbs = [
                ['label' => 'Úvod', 'url' => 'index.php'],
                ['label' => '404']
            ];
            require_once "./templates/breadcrumbs.php";
        ?>
        <section class="mb2">
            <div class="richtext-section">
                <h1 class="center">404- stránka nenalezena</h1>
                <p class="center">Tato stránka bohužel neexistuje.</p>
                <a href="index.php" class="cta-button primary-button"><span>Domovská stránka</span></a>
            </div>
        </section>
    </main>
    <?php require_once "./templates/footer.php" ?>
</body>

</html>
