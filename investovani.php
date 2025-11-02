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
    <title>Začněte investovat chytře | Pomohu vám s plánem i portfoliem</title>
    <meta name="description"
        content="Hledáte cestu, jak zhodnotit peníze? Společně nastavíme investiční strategii podle vašich cílů a rizikového profilu.">
    <meta property="og:title" content="Začněte investovat chytře | Pomohu vám s plánem i portfoliem">
    <meta property="og:image" content="img/nahledovka.webp">
    <meta property="og:description" content="Hledáte cestu, jak zhodnotit peníze? Společně nastavíme investiční strategii podle vašich cílů a rizikového profilu.">
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
                ['label' => 'Investování']
            ];
            require_once "./templates/breadcrumbs.php";
        ?>
        <section>
            <div class="richtext-section">
                <h1 class="relative service-heading"><span class="blue-color">Investování</span> – chytře, bezpečně a s jasným cílem</h1>
                <p class="paragraph center">Investování už dávno <span class="bold">není jen pro experty.</span> Se správným plánem a podporou může začít každý – <span class="bold">i s menší částkou.</span> Pomohu vám investovat tak, aby to dávalo smysl pro <span class="bold">vaše cíle, finanční možnosti i toleranci k riziku.</span></p>
                <a href="kontakt.php" class="cta-button secondary-button">Začít investovat</a>
            </div>
        </section>
        <section class="section-margin">
            <div class="image-with-bullets padding-inline">
                <div class="image-with-bullets__text-content">
                    <h2 class="relative mb2"><span class="blue-color">Proč začít</span> investovat?</h2>
                    <p class="paragraph mb2">Spoření nestačí, pokud chcete <span class="bold">zhodnotit peníze.</span> Investování vám pomůže:</p>
                    <ul class="about-list image-with-bullets__list mb2">
                        <li>ochránit úspory před inflací</li>
                        <li>zhodnotit prostředky v čase</li>
                        <li>plnit dlouhodobé cíle (např. bydlení, důchod, vzdělání dětí)</li>
                        <li>vytvářet pasivní příjem</li>
                    </ul>
                    <p class="paragraph tag-text">Nejdůležitější je <span class="bold">mít plán a rozumět tomu, do čeho investujete.</span> A přesně s tím vám pomohu.</p>
                </div>
                <div class="image-with-bullets__image-content">
                    <img src="img/investovani.webp" alt="Investování" loading="lazy" fetchpriority="low">
                </div>
            </div>
        </section>
        <section class="section-margin">
            <div class="image-with-bullets padding-inline row-reverse">
                <div class="image-with-bullets__text-content">
                    <h2 class="relative mb2"><span class="blue-color">S čím</span> konkrétně pomohu?</h2>
                    <ul class="about-list image-with-bullets__list mb2">
                        <li>Investice pro začátečníky i pokročilé</li>
                        <li>Dlouhodobé i pravidelné investování (DCA)</li>
                        <li>ETF, podílové fondy, konzervativní i dynamická aktiva</li>
                        <li>Strategie pro děti, důchod nebo budování majetku</li>
                        <li>Optimalizace daní a nákladů spojených s investicemi</li>
                    </ul>
                    <p class="paragraph tag-text">Žádné spekulace, žádné „zaručené tipy“. Jen promyšlená <span class="bold">investiční strategie podle vašich potřeb.</span></p>
                </div>
                <div class="image-with-bullets__image-content">
                    <img src="img/investice.webp" alt="Investice" loading="lazy" fetchpriority="low">
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
                        <p class="k-desc">Během úvodní konzultace si promluvíme o vašich <span class="bold">finančních cílech.</span> Ať už chcete zhodnotit úspory, připravit se na důchod, nebo si splnit sen, vyslechnu si vaše představy a toleranci k riziku. Nastavíme investiční strategii, která je přímo pro vás.</p>
                    </article>

                    <article class="card" data-step="2" aria-labelledby="s2-title" tabindex="0">
                        <div class="num mb1">02</div>
                        <h3 id="s2-title" class="k-title mb2">Navrhnu investiční strategii</h3>
                        <p class="k-desc">Na základě vašich cílů a rizikového profilu připravím <span class="bold">přehledné srovnání</span> různých investičních produktů. Vysvětlím vám, jak fungují fondy, akcie, dluhopisy a další možnosti. Najdeme strategii, která vám pomůže efektivně zhodnocovat peníze.</p>
                    </article>

                    <article class="card" data-step="3" aria-labelledby="s3-title" tabindex="0">
                        <div class="num mb1">03</div>
                        <h3 id="s3-title" class="k-title mb2">Společně plán zrealizujeme</h3>
                        <p class="k-desc">Představím vám vybrané <span class="bold">investiční možnosti</span> a srozumitelně vám vysvětlím veškeré detaily. Ujistím se, že všemu rozumíte. Pomohu vám s veškerou administrativou, abyste mohli začít investovat bez zbytečných starostí.</p>
                    </article>

                    <article class="card" data-step="4" aria-labelledby="s4-title" tabindex="0">
                        <div class="num mb1">04</div>
                        <h3 id="s4-title" class="k-title mb2">Dlouhodobá péče</h3>
                        <p class="k-desc">Jsem tu, abych se postarala o to, že <span class="bold">vaše investice budou vždy aktuální.</span> Budeme je pravidelně revidovat a přizpůsobovat tržním změnám i vašim životním situacím. Budu vaším partnerem pro úspěšné zhodnocování peněz.</p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <div class="richtext-section-bg-image">
                <h2 class="relative center">Proč investovat právě se mnou?</h2>
                <div class="grid-characteristic padding-inline grid-char-col-2">
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Nezávislé poradenství bez tlaku na prodej</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Srozumitelnost a trpělivé vysvětlení možností</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Zkušenosti s různými investičními styly</h3>
                    </div>
                    <div class="grid-characteristic-white" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Dlouhodobý plán a servis, ne rychlé řešení</h3>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="richtext-section">
                <h2 class="relative center"><span class="blue-color">Chcete začít investovat</span> nebo zkontrolovat svou stávající strategii?</h2>
                <p class="paragraph center"><span class="bold">Vyplňte krátký formulář</span> a domluvte si nezávaznou konzultaci zdarma. Společně nastavíme investiční plán, který bude odpovídat vašim cílům, možnostem i životní situaci.</p>
                <div class="socials-buttons">
                    <a href="kontakt.php" class="cta-button primary-button"><span>Začít investovat</span></a>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <h2 class="center mb2" data-aos="fade-left" data-aos-delay="100">Nejčastější <span class="blue-color">dotazy</span></h2>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">Proč bych měl/a investovat, když mohu jen spořit?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Spoření je skvělé pro <span class="bold">krátkodobé cíle a finanční rezervu,</span> ale pro <span class="bold">dlouhodobé zhodnocení peněz</span> už tolik nefunguje. Hlavním důvodem je inflace, která postupně snižuje kupní sílu vašich úspor. Investováním můžete nejen <span class="bold">chránit své peníze před inflací,</span> ale zároveň je nechat aktivně pracovat, aby se v průběhu času <span class="bold">zhodnotily.</span> Je to způsob, jak dosáhnout vašich velkých finančních cílů, jako je důchod, vzdělání dětí nebo nákup nemovitosti.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Kolik peněz potřebuji, abych mohl/a začít investovat?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph"><span class="bold">Nemusíte být bohatý,</span> abyste mohli investovat. Dnes už je možné začít s pravidelnými měsíčními platbami v řádu <span class="bold">několika stovek korun.</span> Klíčem je <span class="bold">pravidelnost a dlouhodobý horizont,</span> který vám umožní využít tzv. <span class="bold">složeného úročení.</span> Pomohu vám nastavit plán tak, aby byl realistický a odpovídal vašim finančním možnostem.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Co znamená diverzifikace portfolia a proč je důležitá?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Diverzifikace neboli <span class="bold">rozložení portfolia</span> je klíčový princip chytrého investování. Znamená to, že své investice nerozdělíte pouze do jednoho aktiva, ale <span class="bold">do různých typů</span> (např. akcie, dluhopisy, nemovitosti, komodity) a do různých sektorů. Tím se snižuje riziko, protože pokles jedné investice může být vyrovnán růstem jiné. Díky diverzifikaci se tak chráníte před výraznými propady a zvyšujete pravděpodobnost stabilního růstu.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Je investování rizikové? Mohu přijít o všechny své peníze?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Investování s sebou vždy <span class="bold">nese určité riziko,</span> ale není to sázka do loterie. Cílem je riziko co nejvíce minimalizovat. K tomu slouží právě <span class="bold">diverzifikace, dlouhodobý horizont a promyšlená strategie.</span> Pomohu vám pochopit, jaké riziko je pro vás akceptovatelné a jaké kroky podniknout, abychom ho co nejvíce eliminovali. Zaměřuji se na promyšlené strategie, nikoliv na spekulativní a rizikové obchody.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Je investování vhodné i pro děti?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph"><span class="bold">Určitě.</span> Investování pro děti je skvělý způsob, jak jim do budoucna <span class="bold">zajistit finanční polštář.</span> Díky dlouhému investičnímu horizontu, který se pohybuje v desítkách let, mohou i malé pravidelné částky vyrůst do zajímavého majetku, který jim v dospělosti pomůže například s financováním studia, startem bydlení nebo podnikání. Společně nastavíme plán, který bude efektivní a bezpečný.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Jaké jsou poplatky spojené s investováním?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Poplatky se liší v závislosti na <span class="bold">zvolených investičních nástrojích a na typu správy.</span> Obvykle se platí vstupní poplatek, poplatek za správu portfolia a další poplatky. Vždy vám ale transparentně vysvětlím všechny náklady spojené s investováním a pomohu vám vybrat nejefektivnější řešení, které bude <span class="bold">minimalizovat náklady a maximalizovat zisk.</span></div>
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
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Proč bych měl/a investovat, když mohu jen spořit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Spoření je skvělé pro krátkodobé cíle a finanční rezervu, ale pro dlouhodobé zhodnocení peněz už tolik nefunguje. Hlavním důvodem je inflace, která postupně snižuje kupní sílu vašich úspor. Investováním můžete nejen chránit své peníze před inflací, ale zároveň je nechat aktivně pracovat, aby se v průběhu času zhodnotily. Je to způsob, jak dosáhnout vašich velkých finančních cílů, jako je důchod, vzdělání dětí nebo nákup nemovitosti."
      }
    },
    {
      "@type": "Question",
      "name": "Kolik peněz potřebuji, abych mohl/a začít investovat?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nemusíte být bohatý, abyste mohli investovat. Dnes už je možné začít s pravidelnými měsíčními platbami v řádu několika stovek korun. Klíčem je pravidelnost a dlouhodobý horizont, který vám umožní využít tzv. složeného úročení. Pomohu vám nastavit plán tak, aby byl realistický a odpovídal vašim finančním možnostem."
      }
    },
    {
      "@type": "Question",
      "name": "Co znamená diverzifikace portfolia a proč je důležitá?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Diverzifikace neboli rozložení portfolia je klíčový princip chytrého investování. Znamená to, že své investice nerozdělíte pouze do jednoho aktiva, ale do různých typů (např. akcie, dluhopisy, nemovitosti, komodity) a do různých sektorů. Tím se snižuje riziko, protože pokles jedné investice může být vyrovnán růstem jiné. Díky diverzifikaci se tak chráníte před výraznými propady a zvyšujete pravděpodobnost stabilního růstu."
      }
    },
    {
      "@type": "Question",
      "name": "Je investování rizikové? Mohu přijít o všechny své peníze?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Investování s sebou vždy nese určité riziko, ale není to sázka do loterie. Cílem je riziko co nejvíce minimalizovat. K tomu slouží právě diverzifikace, dlouhodobý horizont a promyšlená strategie. Pomohu vám pochopit, jaké riziko je pro vás akceptovatelné a jaké kroky podniknout, abychom ho co nejvíce eliminovali. Zaměřuji se na promyšlené strategie, nikoliv na spekulativní a rizikové obchody."
      }
    },
    {
      "@type": "Question",
      "name": "Je investování vhodné i pro děti?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Určitě. Investování pro děti je skvělý způsob, jak jim do budoucna zajistit finanční polštář. Díky dlouhému investičnímu horizontu, který se pohybuje v desítkách let, mohou i malé pravidelné částky vyrůst do zajímavého majetku, který jim v dospělosti pomůže například s financováním studia, startem bydlení nebo podnikání. Společně nastavíme plán, který bude efektivní a bezpečný."
      }
    },
    {
      "@type": "Question",
      "name": "Jaké jsou poplatky spojené s investováním?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Poplatky se liší v závislosti na zvolených investičních nástrojích a na typu správy. Obvykle se platí vstupní poplatek, poplatek za správu portfolia a další poplatky. Vždy vám ale transparentně vysvětlím všechny náklady spojené s investováním a pomohu vám vybrat nejefektivnější řešení, které bude minimalizovat náklady a maximalizovat zisk."
      }
    }
  ]
}
</script>

</body>

</html>
