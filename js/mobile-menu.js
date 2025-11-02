const hamburgerMenu = document.querySelector("#mobile-menu");
const mobileNavigation = document.querySelector("#mobile-nav");

hamburgerMenu.addEventListener("click", function (e) {
  e.preventDefault();
  hamburgerMenu.classList.toggle("close");
  mobileNavigation.classList.toggle("open");
});

// If you click on mobile navigation href, mobile menu disappears
const mobileHref = document.querySelectorAll(".mobile-href");

for (let oneHref of mobileHref) {
  oneHref.addEventListener("click", function () {
    mobileNavigation.classList.remove("open");
    hamburgerMenu.classList.remove("close");
  });
}