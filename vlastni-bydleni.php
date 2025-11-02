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
    <title>Finanční poradenství pro vlastní bydlení | Rozumné a bezpečné řešení</title>
    <meta name="description"
        content="Plánujete koupi nebo rekonstrukci bydlení? Pomohu vám s hypotékou, pojištěním i rozpočtem. Finanční poradenství na míru.">
    <meta property="og:title" content="Finanční poradenství pro vlastní bydlení | Rozumné a bezpečné řešení">
    <meta property="og:image" content="img/nahledovka.webp">
    <meta property="og:description" content="Plánujete koupi nebo rekonstrukci bydlení? Pomohu vám s hypotékou, pojištěním i rozpočtem. Finanční poradenství na míru.">
    <link rel="preload" href="fonts/Quicksand-Medium.woff2" as="font">
    <link rel="preload" href="fonts/Quicksand-Regular.woff2" as="font">
    <link rel="stylesheet" href="./style.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="robots" content="index, follow">
</head>

<body>
    <?php require_once "./templates/header.php" ?>
    <main>
        <?php
            $breadcrumbs = [
                ['label' => 'Úvod', 'url' => 'index.php'],
                ['label' => 'Služby', 'url' => 'index.php#sluzby'],
                ['label' => 'Vlastní bydlení']
            ];
            require_once "./templates/breadcrumbs.php";
        ?>
        <section>
            <div class="richtext-section">
                <h1 class="relative service-heading"><span class="blue-color">Vlastní bydlení</span> – finančně promyšlené a udržitelné</h1>
                <p class="paragraph center">Bydlení je jednou z <span class="bold">největších životních investic</span> – ať už kupujete první byt, stavíte dům nebo rekonstruujete. Pomohu vám projít tímto procesem s klidem a jistotou. <span class="bold">Od financování přes pojištění až po plánování nákladů.</span> Vaše rozhodnutí budou promyšlená, bezpečná a udržitelná.</p>
                <a href="kontakt.php" class="cta-button secondary-button">Kontaktovat</a>
            </div>
        </section>
        <section class="section-margin">
            <div class="image-with-bullets padding-inline">
                <div class="image-with-bullets__text-content">
                    <h2 class="relative mb2">Jak vám mohu <span class="blue-color">pomoci s bydlením?</span></h2>
                    <ul class="about-list image-with-bullets__list mb2">
                        <li>Stanovení rozpočtu a finančních možností</li>
                        <li>Porovnání možností financování (hypotéka, úvěr, vlastní zdroje)</li>
                        <li>Pomoc s vyřízením hypotéky nebo jiného úvěru</li>
                        <li>Pojištění nemovitosti a domácnosti</li>
                        <li>Plánování provozních nákladů a rezervy</li>
                    </ul>
                    <p class="paragraph tag-text">Bydlení není jen o nemovitosti – je o schopnosti ji <span class="bold">financovat, udržet a chránit.</span> Pomohu vám s každým krokem.</p>
                </div>
                <div class="image-with-bullets__image-content">
                    <img src="img/domov.jpg" alt="Vlastní bydlení" loading="lazy" fetchpriority="low">
                </div>
            </div>
        </section>
        <section class="section-margin">
            <div class="image-with-bullets padding-inline row-reverse">
                <div class="image-with-bullets__text-content">
                    <h2 class="relative mb2"><span class="blue-color">S čím</span> konkrétně pomáhám?</h2>
                    <ul class="about-list image-with-bullets__list mb2">
                        <li>Finanční plánování před koupí nebo stavbou</li>
                        <li>Vyjednání co nejvýhodnější hypotéky</li>
                        <li>Kalkulace reálné splátky a rezervy</li>
                        <li>Ochrana investice – pojištění a právní aspekty</li>
                        <li>Řešení refinancování, konsolidace nebo změn v čase</li>
                    </ul>
                    <p class="paragraph tag-text"><span class="bold">Moje práce nekončí podpisem hypotéky</span> – jsem tu pro vás i při dalších krocích, které s bydlením souvisí.</p>
                </div>
                <div class="image-with-bullets__image-content">
                    <img src="img/pojisteni-domu.webp" alt="Vlastní bydlení" loading="lazy" fetchpriority="low">
                </div>
            </div>
        </section>
        <section class="section-margin cooperation-section">
            <div class="cooperation-wrapper padding-inline">
                <h2 class="center mb2 white-color">Jak probíhá naše spolupráce?</h2>

                <div class="cooperation-grid" id="grid">
                    <article class="card" data-step="1" aria-labelledby="s1-title" tabindex="0">
                        <div class="num mb1">01</div>
                        <h3 id="s1-title" class="k-title mb2">Poznáme se a určíme cíle</h3>
                        <p class="k-desc">Na začátku si promluvíme o vašich <span class="bold">představách o bydlení.</span> Ať už sníte o domě, bytu, nebo chalupě, vyslechnu si vaše plány, finanční situaci a možnosti. Společně projdeme, jaké jsou vaše cíle, a nastavíme reálný plán pro jejich dosažení.</p>
                    </article>

                    <article class="card" data-step="2" aria-labelledby="s2-title" tabindex="0">
                        <div class="num mb1">02</div>
                        <h3 id="s2-title" class="k-title mb2">Navrhnu ideální řešení</h3>
                        <p class="k-desc">Na základě vašich potřeb pro vás <span class="bold">analyzuji trh</span> a připravím přehledné srovnání možností financování. Představím vám různé typy hypoték, úvěrů a dalších řešení, které jsou pro vás nejvýhodnější a nejdostupnější. Cílem je najít produkt, který vám pomůže splnit sen o vlastním bydlení.</p>
                    </article>

                    <article class="card" data-step="3" aria-labelledby="s3-title" tabindex="0">
                        <div class="num mb1">03</div>
                        <h3 id="s3-title" class="k-title mb2">Společně vyřídíme vše</h3>
                        <p class="k-desc">Až se rozhodnete pro nejlepší cestu, pomůžu vám s <span class="bold">kompletním procesem od A do Z.</span> Zajistím veškerou komunikaci s bankou, pomůžu s papírováním a postarám se, aby vše proběhlo hladce a bez zbytečných starostí. Vy se tak můžete soustředit na výběr nového domova.</p>
                    </article>

                    <article class="card" data-step="4" aria-labelledby="s4-title" tabindex="0">
                        <div class="num mb1">04</div>
                        <h3 id="s4-title" class="k-title mb2">Jsem váš partner</h3>
                        <p class="k-desc">Ani po vyřízení financování naše spolupráce nekončí. Jsem tu pro vás, abychom váš finanční plán <span class="bold">pravidelně revidovali</span> a přizpůsobovali ho vašim budoucím potřebám. Ať už budete chtít refinancovat, rekonstruovat, nebo řešit cokoli dalšího, budu vám vždy k dispozici.</p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <div class="richtext-section-bg-image">
                <h2 class="relative center">Proč bydlení řešit právě se mnou?</h2>
                <div class="grid-characteristic padding-inline grid-char-col-2">
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Komplexní pohled – od úvěru po provoz</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Nezávislé srovnání nabídek a řešení</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Dlouholeté zkušenosti s realitním financováním</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Lidský přístup a jasná komunikace</h3>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="richtext-section">
                <h2 class="relative center">Chcete mít bydlení <span class="blue-color">finančně pod kontrolou?</span></h2>
                <p class="paragraph center"><span class="bold">Vyplňte krátký formulář</span> a domluvte si nezávaznou konzultaci zdarma. Společně navrhneme řešení, které bude odpovídat vašim možnostem a cílům.</p>
                <div class="socials-buttons">
                    <a href="kontakt.php" class="cta-button primary-button"><span>Kontaktovat</span></a>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <h2 class="center mb2" data-aos="fade-left" data-aos-delay="100">Nejčastější <span class="blue-color">dotazy</span></h2>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">Proč bych měl/a na financování bydlení spolupracovat s vámi, a ne jít přímo do banky?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Když jdete přímo do banky, dostanete nabídku pouze od ní. Jako nezávislý finanční poradce mám přehled o produktech a podmínkách <span class="bold">z celého trhu.</span> Mohu pro vás porovnat <span class="bold">desítky nabídek hypoték, stavebních spoření a dalších úvěrů,</span> abych našla tu nejvýhodnější. Ušetřím vám nejen čas s obcházením bank, ale především <span class="bold">stovky tisíc korun na úrocích a poplatcích po celou dobu splácení.</span> Jsem na vaší straně, ne na straně banky.</div>
                </div>
            </div>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">Jaký je ideální rozpočet na bydlení? Kolik si mohu půjčit?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Ideální výše úvěru je vždy individuální a závisí na vašich příjmech, výdajích a životní situaci. Obecně platí, že by měsíční splátka úvěru na bydlení <span class="bold">neměla přesáhnout 30-40 % vašeho čistého příjmu.</span> Společně projdeme vaši situaci a <span class="bold">vypočítáme maximální reálnou splátku,</span> která neohrozí váš rodinný rozpočet a umožní vám žít bez zbytečného stresu.</div>
                </div>
            </div>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">Pomůžete mi i s pojištěním nemovitosti a domácnosti?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph"><span class="bold">Ano, pojištění je klíčovou součástí finančního plánování bydlení.</span> Společně projdeme vaši nemovitost a majetek a najdeme ideální pojištění, které ochrání vaši investici. Vybereme vhodnou pojistnou částku a krytí, aby vaše pojištění nebylo zbytečně drahé, ale zároveň aby v případě škody pokrylo vše, co potřebujete.</div>
                </div>
            </div>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">Co když se mé plány změní? Je možné hypotéku předčasně splatit?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Dnešní hypotéky jsou flexibilnější než kdy dříve. Mnoho bank nabízí možnost mimořádných splátek zdarma, obvykle ve výši 20-25 % z původní výše úvěru ročně. <span class="bold">Společně projdeme podmínky jednotlivých bank,</span> abychom pro vás vybrali takovou, která vám umožní flexibilně přizpůsobovat splácení vaší životní situaci.</div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once "./templates/footer.php" ?>
    <script defer src="./js/faq.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "Proč bych měl/a na financování bydlení spolupracovat s vámi, a ne jít přímo do banky?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Když jdete přímo do banky, dostanete nabídku pouze od ní. Jako nezávislý finanční poradce mám přehled o produktech a podmínkách z celého trhu. Mohu pro vás porovnat desítky nabídek hypoték, stavebních spoření a dalších úvěrů, abych našla tu nejvýhodnější. Ušetřím vám nejen čas s obcházením bank, ale především stovky tisíc korun na úrocích a poplatcích po celou dobu splácení. Jsem na vaší straně, ne na straně banky."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jaký je ideální rozpočet na bydlení? Kolik si mohu půjčit?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ideální výše úvěru je vždy individuální a závisí na vašich příjmech, výdajích a životní situaci. Obecně platí, že by měsíční splátka úvěru na bydlení neměla přesáhnout 30-40 % vašeho čistého příjmu. Společně projdeme vaši situaci a vypočítáme maximální reálnou splátku, která neohrozí váš rodinný rozpočet a umožní vám žít bez zbytečného stresu."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Pomůžete mi i s pojištěním nemovitosti a domácnosti?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ano, pojištění je klíčovou součástí finančního plánování bydlení. Společně projdeme vaši nemovitost a majetek a najdeme ideální pojištění, které ochrání vaši investici. Vybereme vhodnou pojistnou částku a krytí, aby vaše pojištění nebylo zbytečně drahé, ale zároveň aby v případě škody pokrylo vše, co potřebujete."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Co když se mé plány změní? Je možné hypotéku předčasně splatit?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Dnešní hypotéky jsou flexibilnější než kdy dříve. Mnoho bank nabízí možnost mimořádných splátek zdarma, obvykle ve výši 20-25 % z původní výše úvěru ročně. Společně projdeme podmínky jednotlivých bank, abychom pro vás vybrali takovou, která vám umožní flexibilně přizpůsobovat splácení vaší životní situaci."
                    }
                }
            ]
        }
    </script>

</body>

</html>
