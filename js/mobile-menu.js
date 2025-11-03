const hamburgerMenu = document.querySelector('#mobile-menu');
const mobileNavigation = document.querySelector('#app-drawer');
const navOverlay = document.querySelector('#nav-overlay');

function toggleMobileMenu(forceOpen) {
  const willOpen = typeof forceOpen === 'boolean' ? forceOpen : !mobileNavigation.classList.contains('open');
  hamburgerMenu.classList.toggle('close', willOpen);
  mobileNavigation.classList.toggle('open', willOpen);
  navOverlay && navOverlay.classList.toggle('open', willOpen);
  if (willOpen) {
    const y = window.scrollY || document.documentElement.scrollTop || 0;
    document.body.dataset.scrollY = String(y);
    document.body.classList.add('no-scroll');
    document.body.style.top = `-${y}px`;
  } else {
    const y = parseInt(document.body.dataset.scrollY || '0', 10) || 0;
    document.body.classList.remove('no-scroll');
    document.body.style.top = '';
    window.scrollTo(0, y);
  }
  mobileNavigation.setAttribute('aria-hidden', String(!willOpen));
  hamburgerMenu.setAttribute('aria-expanded', String(willOpen));
  if (!willOpen) {
    // Ensure we return from subpanel smoothly, then hide it after slide
    const nav = document.querySelector('#app-drawer');
    nav && nav.classList.remove('show-subpanel');
    const servicesPanel = document.querySelector('#mobile-panel-services');
    if (servicesPanel && !servicesPanel.hidden) {
      setTimeout(() => { servicesPanel.hidden = true; }, 360);
    }
    const servicesToggle = document.querySelector('#mobile-services-toggle');
    servicesToggle && servicesToggle.setAttribute('aria-expanded', 'false');
  }
}

if (hamburgerMenu && mobileNavigation) {
  hamburgerMenu.addEventListener('click', (e) => {
    e.preventDefault();
    toggleMobileMenu();
  });
}

if (navOverlay) {
  navOverlay.addEventListener('click', () => toggleMobileMenu(false));
}

// Close mobile menu on link click
document.querySelectorAll('.mobile-href').forEach((link) => {
  link.addEventListener('click', () => toggleMobileMenu(false));
});

// Mobile submenu (panel) – Služby
const mobileServicesToggle = document.querySelector('#mobile-services-toggle');
const mobilePanelServices = document.querySelector('#mobile-panel-services');
const mobileServicesBack = document.querySelector('#mobile-services-back');
if (mobileServicesToggle && mobilePanelServices) {
  mobileServicesToggle.addEventListener('click', () => {
    mobilePanelServices.hidden = false;
    document.querySelector('#app-drawer').classList.add('show-subpanel');
    mobileServicesToggle.setAttribute('aria-expanded', 'true');
  });
}
if (mobileServicesBack && mobilePanelServices) {
  mobileServicesBack.addEventListener('click', () => {
    document.querySelector('#app-drawer').classList.remove('show-subpanel');
    mobileServicesToggle.setAttribute('aria-expanded', 'false');
    // Hide after transition for accessibility
    setTimeout(() => { mobilePanelServices.hidden = true; }, 300);
  });
}

// Desktop dropdown (Služby): keep click toggle for touch devices
const desktopServicesToggle = document.querySelector('#desktop-services-toggle');
const desktopServicesContainer = document.querySelector('#desktop-services');
if (desktopServicesToggle && desktopServicesContainer) {
  function closeDesktopDropdown() {
    desktopServicesContainer.classList.remove('open');
    desktopServicesToggle.setAttribute('aria-expanded', 'false');
  }
  function openDesktopDropdown() {
    desktopServicesContainer.classList.add('open');
    desktopServicesToggle.setAttribute('aria-expanded', 'true');
  }
  desktopServicesToggle.addEventListener('click', (e) => {
    e.preventDefault();
    const isOpen = desktopServicesContainer.classList.contains('open');
    if (isOpen) closeDesktopDropdown(); else openDesktopDropdown();
  });
  document.addEventListener('click', (e) => {
    if (desktopServicesContainer.classList.contains('open')) {
      if (!desktopServicesContainer.contains(e.target)) closeDesktopDropdown();
    }
  });
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeDesktopDropdown(); });
}
