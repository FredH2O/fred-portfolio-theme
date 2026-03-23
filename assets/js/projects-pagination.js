// pagination for projects navigation

document.addEventListener("DOMContentLoaded", function () {
  const projectList = document.querySelector(".project-list");
  const currentPage = portfolioData.currentPage;

  document.querySelectorAll(".pagination-projects a").forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const url = new URL(this.href);
      const clickedPage = parseInt(url.searchParams.get("paged")) || 1;

      // detect directions
      let directionClass = "slide-out-right"; // default

      if (clickedPage < currentPage) {
        directionClass = "slide-out-left";
      } else if (clickedPage > currentPage) {
        directionClass = "slide-out-right";
      }

      if (projectList) {
        projectList.classList.add(directionClass);

        //navigate after transition

        setTimeout(() => {
          window.location.href = url;
        }, 500);
      }
    });
  });

  // add prev/next classes to WordPress pagination links
  const prevLink = document.querySelector(".pagination-projects .prev");
  const nextLink = document.querySelector(".pagination-projects .next");

  if (prevLink) prevLink.classList.add("prev");
  if (nextLink) nextLink.classList.add("next");
});
