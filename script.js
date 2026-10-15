(function () {
  "use strict";

  var toggle = document.getElementById("navToggle");
  var list = document.getElementById("navList");

  if (toggle && list) {
    toggle.addEventListener("click", function () {
      var open = list.classList.toggle("nav__list--open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });
    list.addEventListener("click", function (ev) {
      if (ev.target.closest(".nav__link")) {
        list.classList.remove("nav__list--open");
        toggle.setAttribute("aria-expanded", "false");
      }
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
