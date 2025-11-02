(function () {
  const viewport = document.getElementById('gReviewsViewport');
  const track = document.getElementById('gReviewsTrack');
  const btnPrev = document.getElementById('gReviewsPrev');
  const btnNext = document.getElementById('gReviewsNext');

  if (!viewport || !track) return;

  let cards = Array.from(track.children);
  let currentIndex = 0;
  let gapPx = 0;
  let cardWidth = 0;
  let visibleCount = 1;
  let maxIndex = 0;

  // Oprava "trhaného" posouvání: zámek během animace
  let animating = false;

  function parsePx(pxStr) {
    const n = parseFloat(pxStr || '0');
    return Number.isFinite(n) ? n : 0;
  }

  function compute() {
    // Přečti aktuální gap z CSS (support pro 'gap' i 'columnGap')
    const styles = window.getComputedStyle(track);
    gapPx = parsePx(styles.columnGap || styles.gap);

    cards = Array.from(track.children);
    if (!cards.length) return;

    // Šířka první karty (ostatní mají stejnou logiku)
    const firstRect = cards[0].getBoundingClientRect();
    cardWidth = firstRect.width;

    // Kolik karet se vejde do viewportu (alespoň 1)
    visibleCount = Math.max(1, Math.floor((viewport.clientWidth + gapPx) / (cardWidth + gapPx)));

    // Poslední index (aby zůstávaly celé karty)
    maxIndex = Math.max(cards.length - visibleCount, 0);

    // Uprav currentIndex do rozsahu
    if (currentIndex > maxIndex) currentIndex = maxIndex;

    // Nastav pozici BEZ animace (aby to necukalo při resize)
    applyTransform(false);
    updateButtons();
  }

  function applyTransform(withTransition = true) {
    const x = -(currentIndex * (cardWidth + gapPx));

    if (!withTransition) {
      // Dočasně vypneme transition
      const prev = track.style.transition;
      track.style.transition = 'none';
      track.style.transform = `translateX(${x}px)`;
      // V dalším frame ji vrátíme
      requestAnimationFrame(() => {
        track.style.transition = prev || '';
      });
      return;
    }

    track.style.transform = `translateX(${x}px)`;
  }

  function updateButtons() {
    if (!btnPrev || !btnNext) return;
    btnPrev.disabled = currentIndex <= 0;
    btnNext.disabled = currentIndex >= maxIndex;
  }

  function goNext() {
    // Ignoruj během animace nebo pokud je button zakázaný
    if (animating || (btnNext && btnNext.disabled)) return;
    if (currentIndex < maxIndex) {
      currentIndex += 1;
      applyTransform(true);
      updateButtons();
    }
  }

  function goPrev() {
    if (animating || (btnPrev && btnPrev.disabled)) return;
    if (currentIndex > 0) {
      currentIndex -= 1;
      applyTransform(true);
      updateButtons();
    }
  }

  // Kliky na šipky
  btnNext && btnNext.addEventListener('click', goNext);
  btnPrev && btnPrev.addEventListener('click', goPrev);

  // Keyboard ovládání (šipky) – fokus na viewport
  viewport.setAttribute('tabindex', '0');
  viewport.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') { e.preventDefault(); goNext(); }
    if (e.key === 'ArrowLeft')  { e.preventDefault(); goPrev(); }
  });

  // Sledování průběhu CSS transition kvůli "animating" zámku
  track.addEventListener('transitionstart', () => { animating = true; }, { passive: true });
  track.addEventListener('transitionend',   () => { animating = false; }, { passive: true });

  // Swipe / drag (touch + myš/pointer)
  let startX = 0;
  let lastX = 0;
  let dragging = false;

  function getClientX(e) {
    if (e.touches && e.touches[0]) return e.touches[0].clientX;
    if (e.changedTouches && e.changedTouches[0]) return e.changedTouches[0].clientX;
    return e.clientX;
  }

  function onPointerDown(e) {
    dragging = true;
    startX = getClientX(e) || 0;
    lastX = startX;
    // Vypnout transition pro plynulý drag
    const prev = track.style.transition;
    track.dataset.prevTransition = prev || '';
    track.style.transition = 'none';
  }

  function onPointerMove(e) {
    if (!dragging) return;
    const x = getClientX(e) || 0;
    const delta = x - startX;
    lastX = x;

    const base = -(currentIndex * (cardWidth + gapPx));
    track.style.transform = `translateX(${base + delta}px)`;
  }

  function onPointerUp() {
    if (!dragging) return;
    dragging = false;

    const delta = lastX - startX;

    // Prah pro změnu snímku
    const threshold = (cardWidth + gapPx) * 0.35;

    if (delta < -threshold && currentIndex < maxIndex) {
      currentIndex += 1;
    } else if (delta > threshold && currentIndex > 0) {
      currentIndex -= 1;
    }

    // Vrátit transition
    track.style.transition = track.dataset.prevTransition || '';
    delete track.dataset.prevTransition;

    applyTransform(true);
    updateButtons();
  }

  // Pointer events pro desktop
  track.addEventListener('mousedown', onPointerDown);
  window.addEventListener('mousemove', onPointerMove);
  window.addEventListener('mouseup', onPointerUp);

  // Touch events pro mobily
  track.addEventListener('touchstart', onPointerDown, { passive: true });
  track.addEventListener('touchmove', onPointerMove, { passive: true });
  track.addEventListener('touchend', onPointerUp);

  // Recompute po načtení a při resize
  window.addEventListener('resize', compute);
  window.addEventListener('load', compute);

  // Fallback přepočty
  setTimeout(compute, 0);
  setTimeout(compute, 300);
})();
