document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  // Pomocné – vytvoří/vrátí error element umístěný hned ZA daný element
  function getOrCreateFieldErrorEl(afterEl) {
    let el = afterEl.nextElementSibling;
    if (!el || !el.classList || !el.classList.contains("error-msg")) {
      el = document.createElement("div");
      el.className = "error-msg";
      afterEl.insertAdjacentElement("afterend", el);
    }
    return el;
  }

  // Najde společného předka skupiny prvků (pro checkboxy / radia)
  function commonAncestor(elems) {
    if (!elems || elems.length === 0) return null;
    let node = elems[0].parentElement;
    while (node) {
      const allInside = Array.from(elems).every(e => node.contains(e));
      if (allInside) return node;
      node = node.parentElement;
    }
    return elems[0].parentElement;
  }

  // ==== Jednotlivá pole ====
  const emailInput = form.querySelector('input[type="email"][name="email"]');
  const nameInput = form.querySelector('input[name="name"]');
  const telInput  = form.querySelector('input[type="tel"][name="telephone"]');
  const msgInput  = form.querySelector('textarea[name="message"]');
  const honeypot  = form.querySelector('input[name="website"]'); // nevalidujeme

  // Pokud máš pole, která chceš mít povinná, přidej jim HTML atribut required,
  // nebo je vynutíme tady:
  const requiredFields = [nameInput, emailInput, msgInput].filter(Boolean);

  function validateRequired(input) {
    if (!input) return true;
    const value = (input.value || "").trim();
    if (!value) {
      const err = getOrCreateFieldErrorEl(input);
      err.textContent = "Toto pole je povinné.";
      input.classList.add("invalid");
      return false;
    }
    return true;
  }

  function clearFieldError(input) {
    if (!input) return;
    const next = input.nextElementSibling;
    if (next && next.classList && next.classList.contains("error-msg")) next.remove();
    input.classList.remove("invalid");
  }

  // Robustní a benevolentní regex (povolí běžné tvary vč. plus, procent apod.)
  const emailRegex = /^[\w.%+\-]+@[\w.\-]+\.[A-Za-z]{2,}$/;

  function validateEmail() {
    if (!emailInput) return true;
    const value = (emailInput.value || "").trim();

    // Nejprve povinnost (pokud je pole required – buď v HTML, nebo jsme ho dali do requiredFields)
    let required = emailInput.hasAttribute("required") || requiredFields.includes(emailInput);
    if (required && !validateRequired(emailInput)) return false;

    // Pokud je vyplněno, ověř formát
    if (value && !emailRegex.test(value)) {
      const err = getOrCreateFieldErrorEl(emailInput);
      err.textContent = "Zadejte platný e-mail (např. info@domena.cz).";
      emailInput.classList.add("invalid");
      return false;
    }

    clearFieldError(emailInput);
    return true;
  }

  function validateTextInput(input) {
    if (!input) return true;
    const required = input.hasAttribute("required") || requiredFields.includes(input);
    if (!required) { clearFieldError(input); return true; }
    if (!validateRequired(input)) return false;
    clearFieldError(input);
    return true;
  }

  // ==== Checkboxy „Potřebuji řešit“ – vyžadujeme alespoň jednu možnost ====
  const needCheckboxes = form.querySelectorAll(
    'input[name="financni-plan"], input[name="hypoteka"], input[name="spotrebitelsky-uver"], input[name="pojisteni"], input[name="zhodnoceni-financi"], input[name="jine"]'
  );

  function validateNeeds() {
    if (!needCheckboxes.length) return true;
    const anyChecked = Array.from(needCheckboxes).some(cb => cb.checked);
    // Umístíme chybovou hlášku pod poslední checkbox (nebo do společného kontejneru)
    const container = commonAncestor(Array.from(needCheckboxes)) || needCheckboxes[needCheckboxes.length - 1].parentElement;
    let err = container.querySelector(':scope > .error-msg');
    if (!anyChecked) {
      if (!err) {
        err = document.createElement("div");
        err.className = "error-msg";
        container.appendChild(err);
      }
      err.textContent = "Vyberte alespoň jednu možnost.";
      // zvýrazníme vizuálně celou skupinu (přidáme invalid na každý checkboxův label/input)
      needCheckboxes.forEach(cb => cb.classList.add("invalid"));
      return false;
    } else {
      if (err) err.remove();
      needCheckboxes.forEach(cb => cb.classList.remove("invalid"));
      return true;
    }
  }

  // ==== Radio „Způsob setkání“ – povinný výběr ====
  const meetingRadios = form.querySelectorAll('input[name="setkani"]');

  function validateMeeting() {
    if (!meetingRadios.length) return true;
    const anyChecked = Array.from(meetingRadios).some(r => r.checked);
    const container = commonAncestor(Array.from(meetingRadios)) || meetingRadios[meetingRadios.length - 1].parentElement;
    let err = container.querySelector(':scope > .error-msg');
    if (!anyChecked) {
      if (!err) {
        err = document.createElement("div");
        err.className = "error-msg";
        container.appendChild(err);
      }
      err.textContent = "Vyberte způsob setkání.";
      meetingRadios.forEach(r => r.classList.add("invalid"));
      return false;
    } else {
      if (err) err.remove();
      meetingRadios.forEach(r => r.classList.remove("invalid"));
      return true;
    }
  }

  // ==== Události ====
  // On submit – zkontrolujeme vše
  form.addEventListener("submit", function (e) {
    let valid = true;

    // Nebudeme validovat honeypot
    const textFields = [nameInput, msgInput, telInput].filter(Boolean);
    textFields.forEach(el => { if (!validateTextInput(el)) valid = false; });

    if (!validateEmail()) valid = false;
    if (!validateNeeds()) valid = false;
    if (!validateMeeting()) valid = false;

    if (!valid) e.preventDefault();
  });

  // Okamžitá zpětná vazba
  [nameInput, msgInput, telInput].filter(Boolean).forEach(el => {
    el.addEventListener("blur", () => validateTextInput(el));
    el.addEventListener("input", () => validateTextInput(el));
  });
  if (emailInput) {
    emailInput.addEventListener("blur", validateEmail);
  }
  needCheckboxes.forEach(cb => cb.addEventListener("change", validateNeeds));
  meetingRadios.forEach(r => r.addEventListener("change", validateMeeting));
});

// validace při odchodu z pole
inputs.forEach(input => {
  input.addEventListener("blur", () => {
    if (input.type !== "checkbox" && input.type !== "radio") {
      validateInput(input);
    }
  });
});
