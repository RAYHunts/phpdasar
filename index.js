const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener("click", () => {
  sideMenu.classList.add("show");
});

closeBtn.addEventListener("click", () => {
  sideMenu.classList.remove("show");
});

function triggerClick() {
  document.querySelector("#profile").click();
}

function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      document.querySelector("#profileDisplay").setAttribute("src", e.target.result);
    };
    reader.readAsDataURL(e.files[0]);
  }
}
