addEventListener("load", (event) => {
  const hamburger = document.getElementById("hamburger");
  const navMobileDropdown = document.getElementById("dropdown");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMobileDropdown.classList.toggle("dropdown-active");
  });
});
