<?php
// --- DATA (ukázka) ---
// Nahraď vlastními daty – klidně načítej z DB nebo JSONu.
$reviews = [
  [
    "name" => "Tereza N.",
    "text" => "Skvělá komunikace a spolehlivost. Všechno krásně vysvětleno a výhodné nabídky a skvělá domluva na schůzkách. Prostě úžasné jednání",
    "date" => "2025-09-02",
    "stars" => 5
  ],
  [
    "name" => "Lukáš R.",
    "text" => "Maximální spokojenost, paní Nela mi ušetřila spoustu peněz, všechno se mnou řádně prošla a vysvětlila, z našich schůzek mám vždy skvělý pocit, můžu jenom vřele doporučit.",
    "date" => "2025-09-01",
    "stars" => 5
  ],
  [
    "name" => "Tomáš Z.",
    "text" => "Chtěl bych pochválit finanční poradkyni Nelu Vlčkovou za její profesionální a vstřícný přístup. Vše mi srozumitelně vysvětlila a pomohla najít nejlepší řešení. Působí velmi důvěryhodně a ochotně poradí. Doporučuji",
    "date" => "2025-02-20",
    "stars" => 5
  ],
  [
    "name" => "Jiří P.",
    "text" => "Naše spolupráce trvá již nějakou dobu. Díky Nele se mi splnil můj dlouholetý sen, a to se osamostatnit a pořídit si auto, které jsem si moc dlouho přál a které mi každý den dělá radost. Spolupráce s Nelou je skvělá. Naučila mě šetřit, investovat, myslet na mou budoucnost. Je tady pro mě kdykoliv potřebuju poradit.",
    "date" => "2025-02-11",
    "stars" => 5
  ],
  [
    "name" => "Kristýna M.",
    "text" => "Děkuji paní Vlčkové za čas který mi věnovala. Na internetu najdete plno finančních poradců, však paní Klečková je správná volba. S financováním nemám ještě moc zkušeností ale s paní Vlčkovou jsem investovala správně.",
    "date" => "2025-02-06",
    "stars" => 5
  ]
];

// Pomocná funkce pro formát data (CS)
function format_cz_date($isoDate) {
  $dt = new DateTime($isoDate);
  return $dt->format('j. n. Y');
}

?>

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
    <title>Finanční poradce pro Moravskoslezský kraj | Nela Klečková</title>
    <meta name="description"
        content="Zabývám se finančním plánováním, hypotékami, úvěry, pojištěním, spořením či investováním. Pomáhám svým klientům plnit jejich finanční plány.">
    <meta property="og:title" content="Finanční poradce pro Moravskoslezský kraj | Nela Klečková">
    <meta property="og:image" content="img/nahledovka.webp">
    <meta property="og:description" content="Zabývám se finančním plánováním, hypotékami, úvěry, pojištěním, spořením či investováním. Pomáhám svým klientům plnit jejich finanční plány.">
    <link rel="preload" href="fonts/Quicksand-Medium.woff2" as="font">
    <link rel="preload" href="fonts/Quicksand-Regular.woff2" as="font">
    <link rel="stylesheet" href="./style.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="canonical" href="https://nelavlckova.cz/">
    <meta name="robots" content="index, follow">
</head>

<body>
    <?php require_once "./templates/header.php" ?>
    <main>
        <section id="uvod">
            <div class="homepage-photo">
                <div class="transparent-div">
                    <div class="text">
                        <h1>Nezávislý <span class="blue-color">finanční poradce</span> Nela Klečková</h1>
                        <div class="headings">
                            <h2>Finanční poradenství na míru</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-characteristic padding-inline relative">
                <div class="one-grid-characteristic" data-aos="zoom-in" data-aos-delay="100">
                    <div class="one-grid-characteristic__icon-wrapper">
                        <img class="one-grid-characteristic__icon" src="img/hodnoty.svg" alt="" loading="lazy" fetchpriority="low">
                    </div>
                    <h3>Profesionalita</h3>
                </div>
                <div class="one-grid-characteristic" data-aos="zoom-in" data-aos-delay="100">
                    <div class="one-grid-characteristic__icon-wrapper">
                        <img class="one-grid-characteristic__icon" src="img/hodnoty.svg" alt="" loading="lazy" fetchpriority="low">
                    </div>
                    <h3>Vstřícnost</h3>
                </div>
                <div class="one-grid-characteristic" data-aos="zoom-in" data-aos-delay="100">
                    <div class="one-grid-characteristic__icon-wrapper">
                        <img class="one-grid-characteristic__icon" src="img/hodnoty.svg" alt="" loading="lazy" fetchpriority="low">
                    </div>
                    <h3>Empatie</h3>
                </div>
                <div class="one-grid-characteristic" data-aos="zoom-in" data-aos-delay="100">
                    <div class="one-grid-characteristic__icon-wrapper">
                        <img class="one-grid-characteristic__icon" src="img/hodnoty.svg" alt="" loading="lazy" fetchpriority="low">
                    </div>
                    <h3>Důvěra</h3>
                </div>
            </div>
            <div class="buttons">
                <a href="#kontakt" class="cta-button primary-button"><img src="img/calendar.svg" alt="Ikona kalendáře" width="auto"
                        height="20"><span>Sjednat schůzku</span></a>
                <a href="#reference" class="cta-button secondary-button">Recenze mých klientů</a>
            </div>
        </section>
        <section id="sluzby" class="section-margin">
            <div class="h2-bg services-bg">
                <h2 data-aos="fade-up" data-aos-delay="100">Mé <span class="blue-color">služby</span></h2>
            </div>
            <div class="service-text">
                <p class="paragraph center">V oblasti finančního poradenství pomáhám lidem dělat správná rozhodnutí v oblasti <span class="bold">pojištění, investic, spoření i úvěrů.</span> Všechny mé služby jsou pro vás <span class="bold">zcela zdarma</span> – platí mě finanční instituce, ne vy. Společně najdeme řešení, které bude odpovídat vašim cílům a možnostem.</p>
            </div>
            <div class="service-boxes">
                <div class="grid-services mt4 padding-inline">
                    <div class="one-grid-services">
                        <img src="img/financni-plan.svg" alt="Finanční plán" loading="lazy" fetchpriority="low">
                        <h3>Finanční plán</h3>
                        <p class="paragraph">Vytvoření finančního plánu je klíčovým krokem k <span class="bold">dosažení finanční stability a
                                dosažení vašich dlouhodobých cílů.</span></p>
                        <a href="financni-plan.php" class="cta-button secondary-button">O finančním plánu</a>
                    </div>
                    <div class="one-grid-services">
                        <img src="img/financni-rezerva.svg" alt="Rezerva" loading="lazy" fetchpriority="low">
                        <h3>Rezerva</h3>
                        <p class="paragraph">Finanční rezerva je <span class="bold">základní jistota</span> pro nečekané výdaje. Pomohu vám nastavit systém odkládání, který zvládnete dodržet.</p>
                        <a href="financni-rezerva.php" class="cta-button secondary-button">O rezervě</a>
                    </div>
                    <div class="one-grid-services">
                        <img src="img/zivotni-pojisteni.svg" alt="Životní pojištění" loading="lazy" fetchpriority="low">
                        <h3>Životní pojištění</h3>
                        <p class="paragraph">Životní pojištění <span class="bold">chrání vás i rodinu</span> v případě vážné nemoci, úrazu nebo úmrtí. Zajistěte si finanční bezpečí, když ho nejvíc potřebujete.</p>
                        <a href="zivotni-pojisteni.php" class="cta-button secondary-button">O životním pojištění</a>
                    </div>
                    <div class="one-grid-services">
                        <img src="img/nezivotni-pojisteni.svg" alt="Neživotní pojištění" loading="lazy" fetchpriority="low">
                        <h3>Neživotní pojištění</h3>
                        <p class="paragraph">Zajistěte si <span class="bold">klid a ochranu</span> v každodenním životě. Pomohu vám vybrat vhodné neživotní pojištění, které kryje rizika spojená s vaším majetkem, vozidlem či domácností.</p>
                        <a href="nezivotni-pojisteni.php" class="cta-button secondary-button">O neživotním pojištění</a>
                    </div>
                    <div class="one-grid-services">
                        <img src="img/financni-uvery.svg" alt="Úvěry" loading="lazy" fetchpriority="low">
                        <h3>Úvěry</h3>
                        <p class="paragraph">Úvěr vám může pomoci <span class="bold">splnit si sny dříve,</span> než na ně našetříte. Společně vybereme bezpečné a výhodné financování pro vaši situaci.</span></p>
                        <a href="uvery.php" class="cta-button secondary-button">O úvěrech</a>
                    </div>
                    <div class="one-grid-services">
                        <img src="img/hypoteka.svg" alt="Hypotéka" loading="lazy" fetchpriority="low">
                        <h3>Vlastní bydlení</h3>
                        <p class="paragraph">Zajistím pro vás výhodnou hypotéku a vysvětlím celý proces srozumitelně. Pomohu vám na <span class="bold">cestě k vlastnímu bydlení</span> bez starostí.</p>
                        <a href="vlastni-bydleni.php" class="cta-button secondary-button">O vlastním bydlení</a>
                    </div>
                    <div class="one-grid-services">
                        <img src="img/sporeni.svg" alt="Spoření" loading="lazy" fetchpriority="low">
                        <h3>Spoření</h3>
                        <p class="paragraph">Od spořicích účtů až po penzijní spoření – společně najdeme způsob, jak efektivně <span class="bold">zhodnotit vaše úspory</span> bez zbytečného rizika.</p>
                        <a href="sporeni.php" class="cta-button secondary-button">O spoření</a>
                    </div>
                    <div class="one-grid-services">
                        <img src="img/investovani.svg" alt="Investování" loading="lazy" fetchpriority="low">
                        <h3>Investování</h3>
                        <p class="paragraph">Investování vám pomůže budovat <span class="bold">pasivní příjem,</span> chránit se před inflací a plánovat budoucnost. Vysvětlím vám vše srozumitelně a bez složitostí.</p>
                        <a href="investovani.php" class="cta-button secondary-button">O investování</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="kontakt" class="section-margin">
            <div class="h2-bg contact-bg">
                <h2 data-aos="fade-up" data-aos-delay="100">Jsem tu <span class="blue-color">pro vás</span></h2>
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
                    <input type="submit" value="Chci se poradit" class="cta-button primary-button">
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
        <section id="o-mne" class="section-margin flex padding-inline">
            <div class="left-content">
                <h2 data-aos="fade-up" data-aos-delay="100">Jsem <span class="blue-color">finanční poradkyně</span> s lidským přístupem</h2>
                <div class="paragraphs">
                    <p class="paragraph mb2"><span class="bold">Finance jsou starost každého z nás.</span> Chápu, pokud na téma finance nemáte
                        dostatek času, chuti, či jste v tomto světě nejistí, bezmocní a nevíte, co je pro vás nejlepší.
                        Proto mi dovolte, abych se vám představila a co pro kohokoliv z vás, jako <span class="bold">člověk milující svou
                            práci,</span> můžu udělat.</p>
                    <p class="paragraph mb2"><span class="bold">Jmenuji se Nela Klečková a jsem finanční poradkyně působící po celé České republice.</span>
                        Můj domov je v Ostravě, ale klienty mám i z Prahy a dalších koutů republiky.
                        Nabízím osobní i on-line konzultace – záleží jen na tom, co vám vyhovuje víc.</span>
                    </p>
                    <p class="paragraph mb2">Pomáhám klientům <span class="bold">dosáhnout jejich finančních cílů, snů a zabezpečení.</span> Mé
                        služby zahrnují komplexní zhodnocení vaší situace, pomoc při stanovení cílů a strategii pro
                        jejich dosažení. Součástí je také průběžná kontrola a úpravy dle vašich potřeb a změn v životní
                        situaci.</p>
                    <p class="paragraph mb2">Zakládám si na <span class="bold">lidském a empatickém přístupu</span> bez jakéhokoliv nátlaku. Mou
                        prioritou je <span class="bold">spokojený klient, který mi věří.</span></p>
                    <h3 class="mb1 tag-text">Co schůzkou se mnou můžete získat?</h3>
                    <ul class="about-list mb2">
                        <li>Příjemně strávený čas na místě, které je
                            vám komfortní</li>
                        <li>Popovídáme si, probereme vaši finanční situaci</li>
                        <li>Získáte můj pohled na věc a vhodná řešení přímo pro vás.</li>
                    </ul>
                    <p class="paragraph">Pojďme se setkat! Kontaktní formulář na mě najdete níže.</p>
                </div>
                <a href="#kontakt" class="primary-button cta-button"><span>Kontaktovat</span></a>
            </div>
            <img src="img/nela-vlckova.webp" alt="Nela Klečková Finanční poradce" loading="lazy" fetchpriority="low">
        </section>
        <section class="g-reviews section-margin" aria-label="Hodnocení klientů" id="reference">
            <h2 data-aos="fade-up" data-aos-delay="100" class="center mb2">Reference <span class="blue-color">spokojených klientů</span></h2>
            <div class="g-reviews__viewport" id="gReviewsViewport">
                <div class="g-reviews__track" id="gReviewsTrack">
                    <?php foreach ($reviews as $r): ?>
                        <article class="g-reviews__card" role="group" aria-roledescription="slide">
                            <header class="g-reviews__header">
                                <div class="g-reviews__avatar" aria-hidden="true">
                                    <!-- volitelně můžeš nahradit iniciály fotkou -->
                                    <span class="g-reviews__initials">
                                        <?php
                                        $parts = preg_split('/\s+/', trim($r["name"]));
                                        $ini = '';
                                        foreach ($parts as $p) {
                                            $ini .= mb_strtoupper(mb_substr($p, 0, 1, 'UTF-8'));
                                        }
                                        echo htmlspecialchars(mb_substr($ini, 0, 2, 'UTF-8'));
                                        ?>
                                    </span>
                                </div>
                                <div class="g-reviews__meta">
                                    <div class="g-reviews__name"><?php echo htmlspecialchars($r["name"]); ?></div>
                                    <div class="g-reviews__date"><?php echo format_cz_date($r["date"]); ?></div>
                                    <div class="g-reviews__stars" aria-label="<?php echo (int)$r['stars']; ?> z 5">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <img src="img/hvezda.svg" alt="" class="g-reviews__star" loading="lazy" width="16" height="16">
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </header>
                            <p class="g-reviews__text">
                                <?php echo htmlspecialchars($r["text"]); ?>
                            </p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="g-reviews__more">
                <div class="g-reviews__controls">
                    <button class="g-reviews__nav g-reviews__nav--prev" id="gReviewsPrev" aria-label="Předchozí recenze">
                        <img src="img/sipka.svg" alt="" width="20" height="20">
                    </button>
                    <button class="g-reviews__nav g-reviews__nav--next" id="gReviewsNext" aria-label="Další recenze">
                        <img src="img/sipka.svg" alt="" width="20" height="20">
                    </button>
                </div>

                <a class="g-reviews__link" target="_blank" rel="noopener"
                   href="https://www.google.com/search?hl=cs-CZ&q=Finan%C4%8Dn%C3%AD%20poradce%20Nela%20Vl%C4%8Dkov%C3%A1%20Recenze&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxIxNDYzNDIxsDQxMrIwNjYxMrc0sNzAyPiKUdMtMy8x70hv3uG1CgX5RYkpyakKfqk5iQphOUd6s_PLDi9UCEpNTs2rSl3ESrxaAIJhX4ZzAAAA&rldimm=13612409422833427909&tbm=lcl&cs=1&sa=X&ved=0CBsQ9fQKKABqFwoTCMjGhtTfvI8DFQAAAAAdAAAAABAG&biw=1536&bih=695&dpr=1.25#lkt=LocalPoiReviews">
                    Zobrazit všechny recenze
                </a>
            </div>
        </section>
    </main>

    <?php require_once "./templates/footer.php" ?>
    <script defer src="./js/faq.min.js"></script>
    <script defer src="./js/reviews-slider.min.js"></script>
    <script defer src="./js/main-form-errors.min.js"></script>
</body>

</html>