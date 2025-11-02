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
    <title></title>
    <meta name="description"
        content="">
    <meta property="og:title" content="">
    <meta property="og:image" content="img/nahledovka.webp">
    <meta property="og:description" content="">
    <link rel="preload" href="fonts/Quicksand-Medium.woff2" as="font">
    <link rel="preload" href="fonts/Quicksand-Regular.woff2" as="font">
    <link rel="stylesheet" href="./style.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="robots" content="index, follow">
</head>

<body>
    <?php require_once "./templates/header.php" ?>
    <main>
        <section>
            <div class="h2-bg homepage-photo">
                <h1 class="service-heading">Kontaktujte mě</h1>
            </div>
            <div class="form-and-contact padding-inline">
                <form action="send-form.php" method="POST">
                    <h3>Máte <span class="blue-color">dotaz</span> nebo si chcete <span class="blue-color">sjednat schůzku?</span><br>Zanechte mi <span
                            class="blue-color">zprávu</span> nebo zavolejte na mé <span class="blue-color">telefonní
                            číslo.</h3>
                    <div class="input">
                        <label for="name" class="input__label">Jméno a příjmení</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div style="display:none;">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website" autocomplete="off">
                    </div>
                    <div class="input">
                        <label for="email" class="input__label">Emailová adresa</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="input">
                        <label for="telephone" class="input__label">Telefonní číslo</label>
                        <input type="tel" name="telephone" id="telephone" required>
                    </div>
                    <fieldset class="radio-inputs-wrapper">
                        <legend class="input__label">Preferovaný způsob setkání</legend>
                        <div class="radio-inputs">
                            <div class="radio-input">
                                <input type="radio" id="osobne" name="setkani" value="osobne" checked />
                                <label for="osobne" class="input__label">Osobně</label>
                            </div>

                            <div class="radio-input">
                                <input type="radio" id="online" name="setkani" value="online" />
                                <label for="online" class="input__label">On-line</label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="radio-inputs-wrapper">
                        <legend class="input__label">Potřebuji řešit:</legend>
                        <div class="checkbox-inputs">
                            <div class="radio-input">
                                <input type="checkbox" id="financni-plan" name="financni-plan" />
                                <label for="financni-plan" class="checkbox-label">Finanční plán</label>
                            </div>
                            <div class="radio-input">
                                <input type="checkbox" id="hypoteka" name="hypoteka" />
                                <label for="hypoteka" class="checkbox-label">Hypotéka</label>
                            </div>
                            <div class="radio-input">
                                <input type="checkbox" id="spotrebitelsky-uver" name="spotrebitelsky-uver" />
                                <label for="spotrebitelsky-uver" class="checkbox-label">Spotřebitelský úvěr/konsolidace úvěrů</label>
                            </div>
                            <div class="radio-input">
                                <input type="checkbox" id="pojisteni" name="pojisteni" />
                                <label for="pojisteni" class="checkbox-label">Pojištění</label>
                            </div>
                            <div class="radio-input">
                                <input type="checkbox" id="zhodnoceni-financi" name="zhodnoceni-financi" />
                                <label for="zhodnoceni-financi" class="checkbox-label">Zhodnocení financí</label>
                            </div>
                            <div class="radio-input">
                                <input type="checkbox" id="jine" name="jine" />
                                <label for="jine" class="checkbox-label">Jiné</label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="input">
                        <label for="email" class="input__label">Zpráva</label>
                        <textarea cols="50" rows="10" required name="message"></textarea>
                    </div>
                    <div class="gdpr-checkbox">
                        <label for="gdpr_consent">
                            <input type="checkbox" name="gdpr_consent" id="gdpr_consent" required>
                            <span>
                                Odesláním formuláře souhlasíte se <a href="zasady-zpracovani-osobnich-udaju.php" class="link-button">zásadami zpracování osobních údajů</a>
                            </span>
                        </label>
                    </div>
                    <input type="submit" value="Odeslat" class="cta-button primary-button">
                </form>
                <div class="email-and-phone contact-wrapper">
                    <div class="email">
                        <div class="email-img">
                            <img src="img/email-icon.svg" alt="Email" width="18" height="auto" fetchpriority="low" loading="lazy">
                        </div>
                        <a href="mailto:finance@nelavlckova.cz" class="link-button">finance@nelavlckova.cz</a>
                    </div>
                    <div class="phone">
                        <div class="phone-img">
                            <img src="img/phone-icon.svg" alt="Telefon" width="18" height="auto" fetchpriority="low" loading="lazy">
                        </div>
                        <a href="tel:+420735998536" class="link-button">+420 735 998 536</a>
                    </div>
                    <div class="phone">
                        <div class="phone-img">
                            <img src="img/instagram.svg" alt="Instagram" width="18" height="auto" fetchpriority="low" loading="lazy">
                        </div>
                        <a href="https://www.instagram.com/jak_na_finance/" target="_blank" class="link-button">jak_na_finance</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <h2 class="center mb2" data-aos="fade-left" data-aos-delay="100">Nejčastější dotazy</h2>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">Kolik stojí vaše služby?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Moje služby finančního poradenství jsou pro vás <span class="bold">zcela zdarma.</span> Klienti za spolupráci se mnou neplatí – jsou hrazeny mými <span class="bold">obchodními partnery, se kterými spolupracuji.</span> Díky tomu získáte odbornou pomoc v oblasti financí, pojištění, investic nebo úvěrů bez jakýchkoliv nákladů. Můžete se tedy beze strachu obrátit a společně najdeme řešení šité na míru vaší situaci.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Jak probíhá první konzultace?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph"><span class="bold">První konzultace je nezávazná.</span> Slouží hlavně k tomu, abych vás <span class="bold">lépe poznala – vaši životní situaci, finanční cíle, priority i plány do budoucna.</span> Na základě toho vytvořím přehled o vaší aktuální finanční situaci a navrhnu konkrétní kroky. Získáte <span class="bold">individuální finanční plán,</span> který vám pomůže s rezervou, pojištěním, investicemi nebo hypotékou.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Mám stávající produkt, se kterým si nevím rady. Můžu vás kontaktovat?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph"><span class="bold">Ano, rozhodně.</span> Často pomáhám klientům s kontrolou a úpravou stávajících finančních produktů, jako jsou <span class="bold">pojištění, spoření, investice nebo úvěry.</span> Společně projdeme smlouvy a vysvětlím vám, co a jak funguje. Zjistíme, zda produkt odpovídá vaší situaci, nebo zda je vhodnější jiné řešení. Dostanete jasná doporučení bez zbytečných závazků.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Jsem dlouhodobě v mínusu. Můžete mi pomoci?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph"><span class="bold">Určitě. I složitější finanční situace má řešení.</span> Pomohu vám získat kontrolu nad výdaji, vytvořit rozpočet a začít tvořit finanční rezervu. Společně projdeme, kde vám peníze „utíkají“ a jak to změnit. <span class="bold">Získáte podporu a plán,</span> díky kterému můžete postupně vyrovnat dluhy, stabilizovat finance a znovu začít šetřit.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Jsem z dálky. Je možnost setkání?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Ano, samozřejmě. <span class="bold">Spolupráce je možná odkudkoliv</span> – přes osobní setkání nebo videohovor. Mnoho klientů <span class="bold">využívá online konzultace z pohodlí domova,</span> což <span class="bold">šetří čas i cestování.</span> Pokud si budete přát osobní schůzku a bude to možné, ráda ji s vámi domluvím. Flexibilita a dostupnost jsou pro mě samozřejmostí.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Jak dlouho trvá spolupráce?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Preferuji <span class="bold">dlouhodobou spolupráci,</span> protože jen ta přináší skutečné výsledky. I když nabízím i jednorázové poradenství, z praxe vím, že největší smysl má, když vás provázím delší dobu. V průběhu života se mění příjmy, cíle i priority – a právě tehdy je důležité mít někoho, <span class="bold">kdo vás zná a dokáže včas zareagovat.</span> Spolupráce vždy vychází z vašich potřeb.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Jaké výsledky mohu očekávat?
                        <img src="img/faq-sipka.svg" alt="šipka" class="faq-icon" fetchpriority="low" loading="lazy">
                    </div>
                    <div class="faq-answer paragraph">Díky spolupráci získáte <span class="bold">jasný přehled o svých financích,</span> naučíte se efektivně hospodařit, sestavíme rezervu a nastavíme produkty podle vašich potřeb. Můžete očekávat pomoc s pojištěním, investicemi, spořením, úvěry nebo financováním bydlení. Mým cílem je, aby se vaše finance staly vaší oporou, ne přítěží.</div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once "./templates/footer.php" ?>
    <script defer src="./js/faq.min.js"></script>
    <script defer src="./js/main-form-errors.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "Kolik stojí vaše služby?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Moje služby finančního poradenství jsou pro vás zcela zdarma. Klienti za spolupráci se mnou neplatí – jsou hrazeny mými obchodními partnery, se kterými spolupracuji. Díky tomu získáte odbornou pomoc v oblasti financí, pojištění, investic nebo úvěrů bez jakýchkoliv nákladů."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jak probíhá první konzultace?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "První konzultace je nezávazná. Slouží hlavně k tomu, abych vás lépe poznala – vaši životní situaci, finanční cíle, priority i plány do budoucna. Na základě toho vytvořím přehled o vaší aktuální finanční situaci a navrhnu konkrétní kroky. Získáte individuální finanční plán."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Mám stávající produkt, se kterým si nevím rady. Můžu vás kontaktovat?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ano, rozhodně. Často pomáhám klientům s kontrolou a úpravou stávajících finančních produktů, jako jsou pojištění, spoření, investice nebo úvěry. Společně projdeme smlouvy a zjistíme, zda produkt odpovídá vaší situaci, nebo zda je vhodnější jiné řešení."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jsem dlouhodobě v mínusu. Můžete mi pomoci?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Určitě. I složitější finanční situace má řešení. Pomohu vám získat kontrolu nad výdaji, vytvořit rozpočet a začít tvořit finanční rezervu. Získáte podporu a plán, díky kterému můžete postupně vyrovnat dluhy a stabilizovat finance."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jsem z dálky. Je možnost setkání?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ano, spolupráce je možná odkudkoliv – přes osobní setkání nebo videohovor. Mnoho klientů využívá online konzultace z pohodlí domova, což šetří čas i cestování. Pokud si budete přát osobní schůzku, ráda ji s vámi domluvím."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jak dlouho trvá spolupráce?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Preferuji dlouhodobou spolupráci, protože jen ta přináší skutečné výsledky. Nabízím i jednorázové poradenství, ale největší smysl má, když vás provázím delší dobu, protože v průběhu života se mění příjmy, cíle i priority."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Jaké výsledky mohu očekávat?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Díky spolupráci získáte jasný přehled o svých financích, naučíte se efektivně hospodařit, sestavíme rezervu a nastavíme produkty podle vašich potřeb. Můžete očekávat pomoc s pojištěním, investicemi, spořením, úvěry nebo financováním bydlení."
                    }
                }
            ]
        }
    </script>

</body>

</html>