const nav = document.getElementById("navbar");
const bar = document.getElementById("bar");
const back = document.getElementById("back");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("open");
  });
}

if (close) {
  back.addEventListener("click", () => {
    nav.classList.remove("open");
  });
}
