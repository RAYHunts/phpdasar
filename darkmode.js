const darkMode = document.querySelector(".theme-toggler");

if (localStorage.getItem("theme") == "dark") {
  setDarkMode(true);
} else {
  setDarkMode(false);
  darkMode.querySelector("span:nth-child(1)").classList.toggle("active");
  darkMode.querySelector("span:nth-child(1)").classList.toggle("d-none");
  darkMode.querySelector("span:nth-child(2)").classList.toggle("active");
  darkMode.querySelector("span:nth-child(2)").classList.toggle("d-none");
}
function setDarkMode(isDark) {
  if (isDark) {
    document.body.setAttribute("class", "dark-theme-variables");
    localStorage.setItem("theme", "dark");
    darkMode.querySelector("span:nth-child(1)").classList.toggle("active");
    darkMode.querySelector("span:nth-child(1)").classList.toggle("d-none");
    darkMode.querySelector("span:nth-child(2)").classList.toggle("active");
    darkMode.querySelector("span:nth-child(2)").classList.toggle("d-none");
  } else {
    document.body.setAttribute("class", "");
    localStorage.removeItem("theme");
    darkMode.querySelector("span:nth-child(1)").classList.toggle("active");
    darkMode.querySelector("span:nth-child(1)").classList.toggle("d-none");
    darkMode.querySelector("span:nth-child(2)").classList.toggle("active");
    darkMode.querySelector("span:nth-child(2)").classList.toggle("d-none");
  }
}

// //dark mode
// darkMode.addEventListener("click", () => {
//   document.body.classList.toggle("dark-theme-variables");
// });
