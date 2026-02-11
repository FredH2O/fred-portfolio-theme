const toggleButton = document.querySelector(".menu-toggle");
const nav = document.querySelector(".site-navigation");

toggleButton.addEventListener("click", () => {
  nav.classList.toggle("active");

  const expanded =
    toggleButton.getAttribute("aria-expanded") === "true" || false;
  toggleButton.setAttribute("aria-expanded", !expanded);
});
