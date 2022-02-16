const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const darkMode = document.querySelector(".theme-toggler");

menuBtn.addEventListener("click", () => {
  sideMenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  sideMenu.style.display = "none";
});

//dark mode
darkMode.addEventListener("click", () => {
  document.body.classList.toggle("dark-theme-variables");

  darkMode.querySelector("span:nth-child(1)").classList.toggle("active");
  darkMode.querySelector("span:nth-child(2)").classList.toggle("active");
});
