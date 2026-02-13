const toggleButton = document.querySelector(".menu-toggle");
const nav = document.querySelector(".site-navigation");

toggleButton.addEventListener("click", () => {
  nav.classList.toggle("active");

  const expanded =
    toggleButton.getAttribute("aria-expanded") === "true" || false;
  toggleButton.setAttribute("aria-expanded", !expanded);
});

const toggleSwitch = document.getElementById("lightbulb-toggle");
const bulbOn = toggleSwitch.querySelector(".lucide-lightbulb");
const bulbOff = toggleSwitch.querySelector(".lucide-lightbulb-off");

toggleSwitch.addEventListener("click", () => {
  bulbOn.classList.toggle("active");
  bulbOff.classList.toggle("active");
});
