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
    <title>Nezávislé poradenství pro úvěry | Hypotéky i konsolidace</title>
    <meta name="description"
        content="Pomohu vám najít úvěr, který bude skutečně výhodný. Hypotéky, půjčky, refinancování i konsolidace.">
    <meta property="og:title" content="Nezávislé poradenství pro úvěry | Hypotéky i konsolidace">
    <meta property="og:image" content="img/nahledovka.webp">
    <meta property="og:description" content="Pomohu vám najít úvěr, který bude skutečně výhodný. Hypotéky, půjčky, refinancování i konsolidace.">
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
                ['label' => 'Úvěry']
            ];
            require_once "./templates/breadcrumbs.php";
        ?>
        <section>
            <div class="richtext-section">
                <h1 class="relative service-heading"><span class="blue-color">Úvěry</span> – financování s rozumem a jistotou</h1>
                <p class="paragraph center"><span class="bold">Hypotéka, spotřebitelský úvěr nebo refinancování</span> – s dobře nastaveným úvěrem získáte to, co potřebujete, bez zbytečných rizik. Pomůžu vám projít úvěrovým procesem od začátku do konce a zajistit pro vás co <span class="bold">nejvýhodnější podmínky.</span></p>
                <a href="kontakt.php" class="cta-button secondary-button">Kontaktovat</a>
            </div>
        </section>
        <section class="section-margin">
            <div class="image-with-bullets padding-inline row-reverse">
                <div class="image-with-bullets__text-content">
                    <h2 class="relative mb2"><span class="blue-color">Proč spolupracovat</span> na úvěru s nezávislým poradcem?</h2>
                    <p class="paragraph mb1">Úvěr je závazek na roky – správné rozhodnutí vám <span class="bold">ušetří statisíce.</span> Společně:</p>
                    <ul class="about-list image-with-bullets__list mb2">
                        <li>porovnáme nabídky bank</li>
                        <li>najdeme řešení podle vaší situace a cílů</li>
                        <li>vysvětlím všechny podmínky a rizika</li>
                        <li>zařídím hladké vyřízení bez stresu</li>
                    </ul>
                    <p class="paragraph tag-text">Mým cílem není jen úvěr – <span class="bold">mým cílem je vaše finanční jistota a dlouhodobá spokojenost.</span></p>
                </div>
                <div class="image-with-bullets__image-content">
                    <img src="img/uvery.webp" alt="Úvěry" loading="lazy" fetchpriority="low">
                </div>
            </div>
        </section>
        <section class="section-margin">
            <div class="image-with-bullets padding-inline">
                <div class="image-with-bullets__text-content">
                    <h2 class="relative mb2"><span class="blue-color">S čím</span> vám mohu pomoci?</h2>
                    <ul class="about-list image-with-bullets__list mb2">
                        <li>Hypotéky na bydlení, rekonstrukci či investici</li>
                        <li>Spotřebitelské úvěry a půjčky</li>
                        <li>Refinancování nevýhodných úvěrů</li>
                        <li>Konsolidace stávajících závazků</li>
                        <li>Porovnání a výběr vhodného úvěrového produktu</li>
                    </ul>
                    <p class="paragraph tag-text">Každá situace je jiná – proto nabízím <span class="bold">řešení na míru,</span> které vychází z vašich reálných potřeb, ne z ceníků bank.</p>
                </div>
                <div class="image-with-bullets__image-content">
                    <img src="img/uver-bydleni.webp" alt="Úvěry" loading="lazy" fetchpriority="low">
                </div>
            </div>
        </section>
        <section class="section-margin cooperation-section">
            <div class="cooperation-wrapper padding-inline">
                <h2 class="center mb2 white-color">Jak probíhá naše spolupráce?</h2>

                <div class="cooperation-grid" id="grid">
                    <article class="card" data-step="1" aria-labelledby="s1-title" tabindex="0">
                        <div class="num mb1">01</div>
                        <h3 id="s1-title" class="k-title mb2">Poznáme se a určíme cíl</h3>
                        <p class="k-desc">Na začátku si popovídáme o vašich <span class="bold">finančních potřebách</span> a cílech. Ať už plánujete koupit dům, zrekonstruovat byt nebo potřebujete peníze na cokoli jiného, vyslechnu si vaše představy a aktuální situaci. Chci pochopit, jaký úvěr by pro vás byl ideální.</p>
                    </article>

                    <article class="card" data-step="2" aria-labelledby="s2-title" tabindex="0">
                        <div class="num mb1">02</div>
                        <h3 id="s2-title" class="k-title mb2">Navrhnu nejlepší řešení</h3>
                        <p class="k-desc">Na základě informací od vás <span class="bold">analyzuji trh a srovnám nabídky</span> od bankovních společností. Připravím pro vás detailní přehled s různými možnostmi úvěrů, včetně úrokových sazeb, poplatků a dalších podmínek. Vyberu jen ty, které jsou pro vás nejvýhodnější a nejdostupnější.</p>
                    </article>

                    <article class="card" data-step="3" aria-labelledby="s3-title" tabindex="0">
                        <div class="num mb1">03</div>
                        <h3 id="s3-title" class="k-title mb2">Společně vybereme a vyřídíme</h3>
                        <p class="k-desc">Představím vám vybrané <span class="bold">varianty úvěru</span> a srozumitelně vám vysvětlím veškeré detaily. Až se rozhodnete pro tu nejlepší, pomohu vám s celým procesem od podání žádosti až po schválení. Ušetřím vám čas a zbytečné papírování.</p>
                    </article>

                    <article class="card" data-step="4" aria-labelledby="s4-title" tabindex="0">
                        <div class="num mb1">04</div>
                        <h3 id="s4-title" class="k-title mb2">Dlouhodobá péče</h3>
                        <p class="k-desc">Naše spolupráce nekončí vyřízením úvěru. Jsem tu, abych se postarala o to, že <span class="bold">budete mít vždy ty nejlepší podmínky.</span> Budu vás informovat o možnostech refinancování nebo konsolidace úvěrů, abyste zbytečně nepřepláceli a mohli optimalizovat své splátky v budoucnu.</p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <div class="richtext-section-bg-image">
                <h2 class="relative center">Proč si vybrat právě mě?</h2>
                <div class="grid-characteristic padding-inline grid-char-col-2">
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Nezávislost na bankách a institucích</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Vysvětlení bez složitostí a skrytých kliček</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Dlouholetá praxe v oblasti úvěrů</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Individuální přístup a servis i po podpisu</h3>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="richtext-section">
                <h2 class="relative center">Chcete <span class="blue-color">výhodný úvěr</span> bez stresu?</h2>
                <p class="paragraph center"><span class="bold">Vyplňte krátký formulář</span> a domluvte si nezávaznou konzultaci zdarma. Společně najdeme řešení, které vám bude skutečně vyhovovat.</p>
                <div class="socials-buttons">
                    <a href="kontakt.php" class="cta-button primary-button"><span>Kontaktovat</span></a>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <h2 class="center mb2" data-aos="fade-left" data-aos-delay="100">Nejčastější <span class="blue-color">dotazy</span></h2>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">Jaký je rozdíl mezi hypotékou, spotřebitelským úvěrem a refinancováním?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Hypotéka je <span class="bold">dlouhodobý úvěr,</span> který je určen k financování nákupu, stavby nebo rekonstrukce nemovitosti a je zajištěn zástavním právem k této nemovitosti. Spotřebitelský úvěr je naopak <span class="bold">krátkodobější půjčka,</span> obvykle bez zajištění, určená na financování čehokoli, od nového auta po vybavení domácnosti. Refinancování je proces, při kterém <span class="bold">splatíte stávající, obvykle nevýhodný úvěr, novým úvěrem s lepšími podmínkami.</span></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Co je konsolidace úvěrů a pro koho je vhodná?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Konsolidace úvěrů znamená <span class="bold">sloučení několika stávajících půjček,</span> úvěrů nebo kreditních karet do jednoho nového úvěru <span class="bold">s jednou splátkou, jedním úrokem a jedinou pojišťovnou.</span> Tato služba je ideální pro ty, kteří mají více malých půjček a chtějí si zjednodušit správu svých financí, ušetřit na úrocích a snížit měsíční splátky.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Je pro mě vhodnější pevná, nebo variabilní úroková sazba?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Volba mezi pevnou a variabilní úrokovou sazbou závisí na vaší toleranci k riziku a na výhledu trhu. Pevná sazba vám poskytne <span class="bold">jistotu stabilní splátky po celou dobu fixace,</span> což je ideální pro ty, kteří preferují klid a předvídatelnost. Variabilní sazba se <span class="bold">může měnit v závislosti na trhu,</span> což může vést k nižší splátce, ale zároveň s sebou nese riziko, že se splátka může zvýšit. Společně probereme, která varianta je pro vás vhodnější.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Jaké jsou nejčastější důvody pro zamítnutí žádosti o úvěr?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Žádosti o úvěr jsou nejčastěji zamítnuty z důvodu <span class="bold">nedostatečného příjmu pro splácení, negativního záznamu v úvěrovém registru, nebo kvůli nesprávně připravené dokumentaci.</span> Dalšími důvody mohou být nestabilita zaměstnání, nebo nevhodná hodnota zástavy u hypotéky. Poradím vám, jak se těmto chybám vyhnout a jak maximalizovat šanci na schválení.</div>
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
                    "name": "Jaký je rozdíl mezi hypotékou, spotřebitelským úvěrem a refinancováním?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Hypotéka je dlouhodobý úvěr, který je určen k financování nákupu, stavby nebo rekonstrukce nemovitosti a je zajištěn zástavním právem k této nemovitosti. Spotřebitelský úvěr je naopak krátkodobější půjčka, obvykle bez zajištění, určená na financování čehokoli, od nového auta po vybavení domácnosti. Refinancování je proces, při kterém splatíte stávající, obvykle nevýhodný úvěr, novým úvěrem s lepšími podmínkami."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Co je konsolidace úvěrů a pro koho je vhodná?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Konsolidace úvěrů znamená sloučení několika stávajících půjček, úvěrů nebo kreditních karet do jednoho nového úvěru s jednou splátkou, jedním úrokem a jedinou pojišťovnou. Tato služba je ideální pro ty, kteří mají více malých půjček a chtějí si zjednodušit správu svých financí, ušetřit na úrocích a snížit měsíční splátky."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Je pro mě vhodnější pevná, nebo variabilní úroková sazba?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Volba mezi pevnou a variabilní úrokovou sazbou závisí na vaší toleranci k riziku a na výhledu trhu. Pevná sazba vám poskytne jistotu stabilní splátky po celou dobu fixace, což je ideální pro ty, kteří preferují klid a předvídatelnost. Variabilní sazba se může měnit v závislosti na trhu, což může vést k nižší splátce, ale zároveň s sebou nese riziko, že se splátka může zvýšit. Společně probereme, která varianta je pro vás vhodnější."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jaké jsou nejčastější důvody pro zamítnutí žádosti o úvěr?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Žádosti o úvěr jsou nejčastěji zamítnuty z důvodu nedostatečného příjmu pro splácení, negativního záznamu v úvěrovém registru, nebo kvůli nesprávně připravené dokumentaci. Dalšími důvody mohou být nestabilita zaměstnání, nebo nevhodná hodnota zástavy u hypotéky. Poradím vám, jak se těmto chybám vyhnout a jak maximalizovat šanci na schválení."
                    }
                }
            ]
        }
    </script>
</body>

</html>
