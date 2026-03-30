document.addEventListener("DOMContentLoaded", function () {
  const btn = document.querySelector(".footer-back-to-top");

  // scroll to top on clickk
  btn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});
