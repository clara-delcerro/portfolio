(function () {
  "use strict";

  var toggle = document.getElementById("navToggle");
  var list = document.getElementById("navList");

  if (toggle && list) {
    var root = document.documentElement;
    var setMenu = function (open) {
      if (open) {
        var header = document.querySelector(".header");
        if (header) list.style.top = header.getBoundingClientRect().bottom + "px";
      }
      list.classList.toggle("nav__list--open", open);
      root.classList.toggle("menu-open", open);
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    };
    toggle.addEventListener("click", function () {
      setMenu(!list.classList.contains("nav__list--open"));
    });
    list.addEventListener("click", function (ev) {
      if (ev.target.closest(".nav__link")) setMenu(false);
    });
    document.addEventListener("keydown", function (ev) {
      if (ev.key === "Escape" && list.classList.contains("nav__list--open")) {
        setMenu(false);
        toggle.focus();
      }
    });
    window.addEventListener("resize", function () {
      if (window.innerWidth > 720) setMenu(false);
    });
  }

  // enlace activo según la sección visible
  var links = document.querySelectorAll(".nav__link");
  if (!("IntersectionObserver" in window) || !links.length) return;

  var map = {};
  links.forEach(function (link) {
    var id = (link.getAttribute("href") || "").replace("#", "");
    var el = id && document.getElementById(id);
    if (el) map[id] = { link: link, el: el };
  });

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      links.forEach(function (l) { l.classList.remove("nav__link--active"); });
      map[entry.target.id].link.classList.add("nav__link--active");
    });
  }, { rootMargin: "-45% 0px -50% 0px" });

  Object.keys(map).forEach(function (id) { io.observe(map[id].el); });
})();

// filtro de proyectos por etiqueta (accesible con teclado, anuncia resultados con aria-live)
(function () {
  "use strict";
  var box = document.getElementById("projectFilter");
  var list = document.getElementById("projectList");
  if (!box || !list) return;

  var items = Array.prototype.slice.call(list.children);
  var tags = [];
  items.forEach(function (li) {
    (li.getAttribute("data-tags") || "").split(",").forEach(function (t) {
      t = t.trim();
      if (t && tags.indexOf(t) === -1) tags.push(t);
    });
  });
  if (tags.length < 2) return;

  var order = (box.getAttribute("data-order") || "").split(",");
  tags.sort(function (a, b) {
    var ia = order.indexOf(a), ib = order.indexOf(b);
    return (ia < 0 ? 99 : ia) - (ib < 0 ? 99 : ib);
  });

  var group = document.createElement("div");
  group.className = "filter__group";
  group.setAttribute("role", "group");
  group.setAttribute("aria-label", box.getAttribute("data-label"));

  var status = document.createElement("p");
  status.className = "filter__status";
  status.setAttribute("role", "status");
  status.setAttribute("aria-live", "polite");

  var buttons = [];
  function addButton(label, value) {
    var b = document.createElement("button");
    b.type = "button";
    b.className = "filter__btn";
    b.textContent = label;
    b.setAttribute("aria-pressed", "false");
    b.setAttribute("data-value", value);
    b.addEventListener("click", function () { apply(value); });
    group.appendChild(b);
    buttons.push(b);
  }

  function apply(value) {
    var shown = 0;
    items.forEach(function (li) {
      var has = !value || (li.getAttribute("data-tags") || "").split(",").indexOf(value) !== -1;
      li.hidden = !has;
      if (has) shown++;
    });
    buttons.forEach(function (b) {
      b.setAttribute("aria-pressed", b.getAttribute("data-value") === value ? "true" : "false");
    });
    var msg;
    if (!value) msg = box.getAttribute("data-st-all");
    else msg = box.getAttribute(shown === 1 ? "data-st-one" : "data-st-many");
    status.textContent = msg.replace("{n}", shown).replace("{tag}", value);
  }

  addButton(box.getAttribute("data-all"), "");
  tags.forEach(function (t) { addButton(t, t); });
  box.appendChild(group);
  box.appendChild(status);
  buttons[0].setAttribute("aria-pressed", "true");
  // el estado inicial no se anuncia: solo cambia al interactuar
})();
