const toggleButton = document.querySelector(".menu-toggle");
const nav = document.querySelector(".site-navigation");

toggleButton.addEventListener("click", () => {
  nav.classList.toggle("active");

  const expanded =
    toggleButton.getAttribute("aria-expanded") === "true" || false;
  toggleButton.setAttribute("aria-expanded", !expanded);
});

// switch for light and dark mode
const toggleSwitch = document.getElementById("lightbulb-toggle");
const bulbOn = toggleSwitch.querySelector(".lucide-lightbulb");
const bulbOff = toggleSwitch.querySelector(".lucide-lightbulb-off");

// apply saved theme
if (localStorage.getItem("theme") === "dark") {
  document.documentElement.classList.add("dark-mode");
  bulbOn.classList.remove("active");
  bulbOff.classList.add("active");
} else {
  bulbOn.classList.add("active");
  bulbOff.classList.remove("active");
}

// toggle switch
toggleSwitch.addEventListener("click", () => {
  bulbOn.classList.toggle("active");
  bulbOff.classList.toggle("active");

  document.documentElement.classList.toggle("dark-mode");

  if (document.documentElement.classList.contains("dark-mode")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }
});
